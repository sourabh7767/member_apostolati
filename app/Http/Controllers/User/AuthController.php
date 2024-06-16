<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        if($request->isMethod("GET")){
            return view('users.signup');
        }else{
            $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'country' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create a new user
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'country' => $request->input('country'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            // 'email_verified_at' => Carbon::now(),
        ]);
        return response()->json(['success'=> true,'Signup successful'],200);
        }
    }
    public function login()
    {
        return view('users.login');
    }
    public function forgetPassword()
    {
        return view('users.forget');
    }
    public function landingPage()
    {
        $clubs = Club::all(); // Assuming you have a Club model
        return view('users.landing-page', compact('clubs'));
    }
    public function form()
    {
        return view('users.landing-page');
    }

    public function clubList()
    {
        $clubs = Club::all();
        return view('users.clubs-list', compact('clubs'));
    }
}
