@extends('layouts.user-auth')

@section('title') Sign-up @endsection

@section('content')
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					<div class="logo mt-5 mb-3">
						<img src="{{asset("images/logo.png")}}" width="150px">
					</div>
					<div class="heading mb-3">
						<h4>Create an account</h4>
					</div>
					<form action="#" method="POST">
						@csrf
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" name="first_name" placeholder="First Name">
							@if($errors->has('first_name'))
								<div class="error" style="color: #dc3545;">{{ $errors->first('first_name') }}</div>
							@endif
						</div>
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" name="last_name" placeholder="Last Name">
							@if($errors->has('last_name'))
								<div class="error" style="color: #dc3545;">{{ $errors->first('last_name') }}</div>
							@endif
						</div>
						<div class="form-input">
							<span><i class="fa fa-envelope"></i></span>
							<input type="email" name="email" placeholder="Email Address">
							@if($errors->has('email'))
								<div class="error" style="color: #dc3545;">{{ $errors->first('email') }}</div>
							@endif
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="password" placeholder="Password">
							@if($errors->has('password'))
								<div class="error" style="color: #dc3545;">{{ $errors->first('password') }}</div>
							@endif
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<select name="club_id" id="">
								<option value="">India</option>
								<option value="">Pakistan</option>
								<option value="">USA</option>
								<option value="">UAE</option>
								<option value="">Canada</option>
							</select>
							@if($errors->has('club_id'))
								<div class="error" style="color: #dc3545;">{{ $errors->first('club_id') }}</div>
							@endif
						</div>
						<div class="row mb-3">
							<div class="col-12 d-flex">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="cb1" required>
									<label class="custom-control-label text-white" for="cb1">I agree all terms & conditions</label>
								</div>
							</div>
						</div>
						<div class="text-left mb-3">
							<a href="{{route('user.login')}}"><button type="submit" class="btn">Register</button></a>
						</div>
						
						<div class="text-white">Already have an account?
							<a href="{{route('user.login')}}" class="login-link">Login here</a>
						</div>
					</form>
				</div>
@endsection	