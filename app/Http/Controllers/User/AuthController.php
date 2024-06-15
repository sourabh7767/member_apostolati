<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup()
    {
        return view('users.signup');
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
