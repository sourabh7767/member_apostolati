<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClubDataRequest;
use App\Models\Club;
use App\Models\ClubData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClubManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request,ClubData $clubRecord)
    {
        $clubs = Club::all(); 
        $totalRecords = ClubData::where('created_by',auth()->user()->id)->count();
        if ($request->ajax()) {
            $clubRecords = $clubRecord->getAllData($request);
            $search = $request['search']['value'];
            $setFilteredRecords = $totalRecords;

            if (!empty($search)) {
                $setFilteredRecords = $clubRecord->getAllData($request, true);
                if (empty($setFilteredRecords))
                    $totalRecords = 0;
            }

            return datatables()
                ->of($clubRecords)
                ->addIndexColumn()
              
                ->addColumn('created_by', function ($clubRecord) {
                    return !empty($clubRecord->user) ? $clubRecord->user->full_name: "";
                })->addColumn('club_id', function ($clubRecord) {
                    return !empty($clubRecord->club) ? $clubRecord->club->club_name : "";
                })
                ->addColumn('craeted_at', function ($clubRecord) {
                    return  !empty($clubRecord->created_at) ? $clubRecord->created_at->diffForHumans() : "";
                })
               
                ->setTotalRecords($totalRecords)
                ->setFilteredRecords($setFilteredRecords)
                ->skipPaging()
                ->make(true);
        }

        return view('users.landing-page', compact('clubs','totalRecords'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClubDataRequest $request)
    {
        $validatedData = $request->validated();
        foreach ($validatedData['club_id'] as $index => $clubId) {
            $clubDataObj = new ClubData();
            $clubDataObj->name = $validatedData['name'][$index];
            $clubDataObj->club_id = $clubId;
            $clubDataObj->created_by = auth()->user()->id;
            $clubDataObj->save();
        }
        session()->flash('success','Data Added');
        return response()->json(['success'=>"Data Added"]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
