<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\SignupMail;
use App\Models\Club;
use App\Models\ClubData;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Str;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator as ValidationValidator;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function signup(Request $request)
    {
        if($request->isMethod("GET")){
            return view('users.signup');
        }else{
            $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'country_id' => 'required',
            'password' => 'required|min:6',
            // 'confirm_password' => 'required|same:password'
        ]);
    
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }
        $otp = 1111;//$userObj->generateEmailVerificationOtp();
       
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'full_name' => $request->input('first_name')." ".$request->input('last_name'),
            'country' => $request->input('country_id'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'email_verification_otp' => $otp,
        ]);
         $details = [
            'email' => $user->email,
            'otp' => $otp 
        ];
        try{
            // Mail::to($user->email)->send(new SignupMail($details));
            session()->flash('success','Verification OTP sent To your Email');
            return redirect()->route('user.verifyOtp',['id' => $user->id])->with('success','Verification OTP sent To your Email');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back()->with('error',$e->getMessage());
        }
        
        }
    }

    public function verifyOtp(Request $request)
    {
        if($request->isMethod('GET')){
            $id = $request->id;
            return view("users.verify-otp",['id' => $id]); 
        }else{
            $validator = Validator::make($request->all(), [
                'otp' => 'required',
            ]);
        
            if ($validator->fails()) {
                return Redirect::back()->withInput()->withErrors($validator);
            }
            $otp = implode('',$request->otp);
            $userObj = User::where('id', $request->user_id)
            ->where('email_verification_otp', $otp)
            ->first();
            if (!$userObj) {
                session()->flash('error',"Invalid Otp");
                return redirect()->back()->with('error',"Invalid Otp");
            }

            $userObj->email_verified_at = Carbon::now();
            $userObj->email_verification_otp = null;
            $userObj->save();
            session()->flash('success',"Signup Successfully!");
                return redirect()->route('user.login')->with('success',"Signup Successfully!");
        }
    }
    public function login(Request $request)
    {
        if($request->isMethod("GET")){
            return view('users.login');
        }else{
            $rules = array(
                'email' => 'required|email:rfc,dns,filter',
                'password' => 'required',
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return Redirect::back()->withInput()->withErrors($validator);
            }
            $userObj = User::where("email",$request->email)->first();
            
            if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ])->withInput($request->only('email'));
    
            }
            if($userObj->email_verified_at == null){
                $otp = 1111;//$userObj->generateEmailVerificationOtp();
                $details = [
                    'email' => $userObj->email,
                    'otp' => $otp 
                ];
                try{
                    // Mail::to($userObj->email)->send(new SignupMail($details));
                    session()->flash('success','Verification Pending OTP sent To your Email');
                    return redirect()->route('user.verifyOtp',['id' => $userObj->id])->with('success','Verification Pending OTP sent To your Email');
                } catch (\Exception $e) {
                    session()->flash('error', $e->getMessage());
                    return redirect()->back()->with('error',$e->getMessage());
                }
            }
            session()->flash('success','Logged In');
            return redirect()->route('landingPage')->with('success','Logged In');
        }
    }
    public function forgetPassword(Request $request)
    {
        if($request->isMethod("GET")){
            return view('users.forget');
        }
    }

    public function submitForgetPasswordForm(Request $request)
      {
          $rules = array(
            'email' => 'required|email|exists:users',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }
  
          $token = Str::random(64);
  
          DB::table('password_resets')->insert([
              'email' => $request->email, 
              'token' => $token, 
              'created_at' => Carbon::now()
            ]);
  
          Mail::send('mail', ['token' => $token,'email'=> $request->email], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password');
          });
  
          session()->flash('success','Link sent on your mail');
          return redirect()->back()->with('success','Link sent on your mail');
      }

    public function showResetPasswordForm($token) { 
        return view('users.reset-password', ['token' => $token]);
     }
     public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email',
              'new_password' => 'required',
              'confirm_password' => 'required|same:new_password'
          ]);
  
          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();
//   dd($updatePassword);
          if(!$updatePassword){
              session()->flash('error', 'Invalid token!');
          return redirect()->back()->with('error', 'Invalid token!');
          }
  
          $user = User::where('email', $request->email)
                      ->update(['password' => Hash::make($request->new_password)]);
 
          DB::table('password_resets')->where(['email'=> $request->email])->delete();
          session()->flash('success','Your password has been changed!');
          return redirect()->route('user.login')->with('success', 'Your password has been changed!');
      }
    public function landingPage()
    {
        $clubs = Club::all(); // Assuming you have a Club model
        $clubData = ClubData::all();
        return view('users.landing-page', compact('clubs','clubData'));
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
    public function logout(Request $request)
    {

        Auth::logout(); // logout user
        return redirect('/user/login');
    }
}
