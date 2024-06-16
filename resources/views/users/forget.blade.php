@extends('layouts.user-auth')

@section('title') Forget password @endsection
@section('content')
    <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box">
        <div class="logo mt-5 mb-3 text-center">
            <img src="{{asset("images/logo.png")}}" width="150px">
        </div>
        <div class="reset-form d-block">
            <form class="reset-password-form" action="{{route('forget.password.post')}}" method="POST">
                @csrf
                <h4 class="mb-3">Reset Your Password</h4>
                <p class="mb-3 text-white">
                    Please enter your email address and we will send you a password reset link
                </p>
                <div class="form-input">
                    <span><i class="fa fa-envelope"></i></span>
                    <input type="email" name="email" placeholder="Email Address" value="{{old('email')}}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn">Send Reset link</button>
                </div>
            </form>
        </div>
        <div class="reset-confirmation d-none">
            <div class="mb-4">
                <h4 class="mb-3">Link was sent</h4>
                <h6 class="text-white">Please, check your inbox</h6>
            </div>
            <div>
                <a href="{{route('user.login')}}">
                    <button type="submit" class="btn">Login Now</button>
                </a>
            </div>
        </div>
		<div class="text-white">Go Back
			<a href="{{route('user.login')}}" class="register-link">Login</a>
		</div>
    </div>

    <script type="text/javascript">
        function PasswordReset() {
            $('form.reset-password-form').on('submit', function(e){
                e.preventDefault();
                $('.reset-form')
                .removeClass('d-block')
                .addClass('d-none');
                $('.reset-confirmation').addClass('d-block');

                this.submit();
            });
        }

        window.addEventListener('load',function(){
            PasswordReset();
        });
    </script>
@endsection
