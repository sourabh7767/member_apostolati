@extends('layouts.user-auth')

@section('title') Reset passowrd @endsection

@section('content')
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					<div class="logo mt-5 mb-3">
						<img src="{{asset("images/logo.png")}}" width="150px">
					</div>
					<div class="heading mb-3">
						<h4>Reset Password</h4>
					</div>
					<form action="{{route("reset.password.post")}}" method="POST">
						@csrf
                        <input type="hidden" name="token" value="{{$token}}">
                        <div class="form-input">
							<span><i class="fa fa-envelope"></i></span>
							<input type="email" name="email" placeholder="Enter email" value="{{old('email')}}">
						</div>
                        @if($errors->has('email'))
								<div class="error" style="color: #dc3545;">{{ $errors->first('email') }}</div>
							@endif
						<div class="form-input">
							<span><i class="fa fa-envelope"></i></span>
							<input type="password" name="new_password" placeholder="Enter New Password" >
						</div>
						@if($errors->has('new_password'))
								<div class="error" style="color: #dc3545;">{{ $errors->first('new_password') }}</div>
							@endif
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="confirm_password" placeholder="Confirm Password">
						</div>
						@if($errors->has('confirm_password'))
								<div class="error" style="color: #dc3545;">{{ $errors->first('confirm_password') }}</div>
							@endif
						
						<div class="text-left mb-3">
							<a href=""><button type="submit" class="btn">Reset Password</button></a>
						</div>
						{{-- <div class="text-white mb-3">or login with</div>

						<div class="text-white">Don't have an account?
							<a href="{{route('user.signup')}}" class="register-link">Register here</a>
						</div> --}}
					</form>
				</div>
			
@endsection