<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\ClubData;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;


class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Club $club)
    {
        if ($request->ajax()) {
            $clubs = $club->getAllClubs($request);
            $totalClubs = User::count();
            $search = $request['search']['value'];
            $setFilteredRecords = $totalClubs;

            if (!empty($search)) {
                $setFilteredRecords = $club->getAllClubs($request, true);
                if (empty($setFilteredRecords))
                    $totalClubs = 0;
            }

            return datatables()
                ->of($clubs)
                ->addIndexColumn()
                ->addColumn('status', function ($club) {
                    return '<span class="badge badge-light-' . $club->getStatusBadge() . '">' . $club->getStatus() . '</span>';
                })
                ->addColumn('created_by', function ($club) {
                    return "Admin";//!empty($club->user) ? $club->user->full_name : $club->user_id;
                })

                ->addColumn('action', function ($club) {
                    $btn = '';
                    // $btn = '<a href="' . route('clubs.edit', encrypt($club->id)) . '" title="Edit"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;';
                    $btn .= '<a href="javascript:void(0);" delete_form="delete_customer_form"  data-id="' . encrypt($club->id) . '" class="delete-datatable-record text-danger delete-users-record" title="Delete"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })
                ->rawColumns([
                    'action',
                    'status'
                ])
                ->setTotalRecords($totalClubs)
                ->setFilteredRecords($setFilteredRecords)
                ->skipPaging()
                ->make(true);
        }

        return view('clubs.index');
    }

    public function create(Role $role)
    {
        // return view('clubs.create');
    }

    public function store(Request $request, User $user)
    {
        $rules = array(
            'full_name' => 'required',
            'email' => 'required|email:rfc,dns,filter|unique:users,email,NULL,id,deleted_at,NULL',
            'phone_code' => 'required',
            'iso_code' => 'required',
            'phone_number' => 'required|unique:users,phone_number,NULL,id,deleted_at,NULL|min:8|max:15',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $userArr = $request->except(['confirm_password', '_token']);
        $userArr['email_verified_at'] = Carbon::now();
        $userArr['created_by'] = auth()->user()->id;
        $userArr['role'] = User::ROLE_USER;
        $userObj = $user->saveNewUser($userArr);
        if (!$userObj) {
            return redirect()->back()->with('error', 'Unable to create user. Please try again later.');
        }
        return redirect()->route('clubs.index')->with('success', 'User created successfully.');
    }

    public function show($id)
    {
        try {
            $user = new User;
            $id = decrypt($id);
            $userObj = $user->findUserById($id);
            return view('clubs.view', compact("userObj"));
        } catch (\Exception $ex) {
            if ($ex->getMessage() == "The payload is invalid.") {
                return redirect()->back()->with('error', "Invalid-request");
            }
            return redirect()->back()->with('error', "Something went wrong. Please try again later.");
        }
    }

    public function edit($id)
    {
        try {
            $id = decrypt($id);
            $user = new User;
            $userObj = $user->findUserById($id);
            if (!$userObj) {
                return redirect()->back()->with('error', 'This user does not exist');
            }
            return view('clubs.edit', compact('userObj'));
        } catch (\Exception $ex) {
            if ($ex->getMessage() == "The payload is invalid.") {
                return redirect()->back()->with('error', "Invalid-request");
            }
            return redirect()->back()->with('error', "Something went wrong. Please try again later.");
        }
    }

    public function update($id, Request $request)
    {
        $userId = decrypt($id);
        $rules = array(
            'full_name' => 'required',
            'email' => 'required|email:rfc,dns,filter|unique:users,email,' . $userId . ',id,deleted_at,NULL',
            'phone_code' => 'required',
            'iso_code' => 'required',
            'phone_number' => 'required|unique:users,phone_number,' . $userId . ',id,deleted_at,NULL|min:8|max:15'
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $user = new User;
        $userObj = $user->findUserById($userId);
        if (!$userObj) {
            return redirect()->back()->with('error', 'This user does not exist');
        }

        $userArr = $request->except(['_method', '_token']);
        $hasUpdated = $user->updateUserById($userId, $userArr);

        if ($hasUpdated)
            return redirect()->route('clubs.index')->with('success', 'User updated successfully.');

        return redirect()->back()->with('error', 'Unable to update user. Please try again later.');
    }

    public function destroy($id)
    {
        $id = decrypt($id);
        $user = new User;
        $userObj = $user->findUserById($id);

        if (!$userObj) {
            return returnNotFoundResponse('This user does not exist');
        }

        $hasDeleted = $userObj->delete();
        if ($hasDeleted) {
            return returnSuccessResponse('User deleted successfully');
        }

        return returnErrorResponse('Something went wrong. Please try again later');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function getClubData(Request $request,ClubData $clubRecord)
     {
        if ($request->ajax()) {
            $clubRecords = $clubRecord->getAllData($request,false,true);
            $totalRecords = ClubData::count();
            $search = $request['search']['value'];
            $setFilteredRecords = $totalRecords;
            $filterBy = @$request['filterBy'];
            if (!empty($search) || !empty($filterBy)) {
                $setFilteredRecords = $clubRecord->getAllData($request, true,true);
                if (empty($setFilteredRecords))
                    $totalRecords = 0;
            }

            return datatables()
                ->of($clubRecords)
                ->addIndexColumn()
              
                ->addColumn('created_by', function ($clubRecord) {
                    return !empty($clubRecord->user) ? $clubRecord->user->full_name: "";
                })
                ->addColumn('club_id', function ($clubRecord) {
                    return !empty($clubRecord->club) ? $clubRecord->club->club_name : "";
                })
                ->addColumn('created_at', function ($clubRecord) {
                    return  !empty($clubRecord->created_at) ? $clubRecord->created_at->diffForHumans() : "";
                })
                ->addColumn('action', function ($club) {
                    $btn = '';
                    // $btn = '<a href="' . route('clubs.edit', encrypt($club->id)) . '" title="Edit"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;';
                    $btn .= '<a href="javascript:void(0);" delete_form="delete_customer_form"  data-id="' . encrypt($club->id) . '" class="delete-datatable-record text-danger delete-users-record" title="Delete"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })
                ->rawColumns([
                    'action',
                ])
               
                ->setTotalRecords($totalRecords)
                ->setFilteredRecords($setFilteredRecords)
                ->skipPaging()
                ->make(true);
        }
        return view('admin.club-names.club-name-list');
     }

     public function deleteClubData($id){
        $clubRecord = ClubData::find(decrypt($id));
        if(!empty($clubRecord)){
            $clubRecord->delete();
            session()->flash('success',"Data Deleted Successfully!");
            return response()->json(["statusCode" => 200,"message" => "Data Deleted Successfully!"]);
        }else{
            session()->flash('error',"Data Not Deleted!");
            return response()->json(["statusCode" => 401,"message" => "Data Not Deleted!"]);
        }
     }

}
