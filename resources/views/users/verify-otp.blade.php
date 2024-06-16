@extends('layouts.user-auth')

@section('title') verify otp @endsection
<style>
	.otp-wrapper {
  display: grid;
  grid-template-columns: 30px 30px 30px 30px;
  max-width: 400px;
  gap: 30px
}
.otp-wrapper input:focus {
  outline: none;
}
.otp-wrapper input {
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  border:1px solid #000;
  border-radius: 6px;
  background-color: #fff;
  color: #000
}
.otp-wrapper input::placeholder {
  color: #00000050
}
.otpBox {
    margin: 0 auto;
    margin-bottom: 30px;
}

.otpBox input {
    display: inline-block !important;
    width: 54px !important;
    height: 54px !important;
    text-align: center !important;
    border: 1px solid #fff !important;
    border-radius: 10px !important;
    background: transparent;
    outline: none !important;
    margin-right: 13px;
    color: #fff;
}
.otpBox input {
        width: 48px !important;
        height: 48px !important;
    }
</style>
@section('content')

				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					<div class="logo mt-5 mb-3">
						<img src="{{asset("images/logo.png")}}" width="150px">
					</div>
					<div class="heading mb-3">
						<h4>Verify OTP</h4>
					</div>
					<form action="{{route("user.verifyOtp")}}" method="POST">
            @csrf
					{{-- <div class="otp-wrapper">
            <input type="text" class="otp-input text-[32px] text-center form-input" placeholder="0">
            <input type="text" class="otp-input text-[32px] text-center form-input" placeholder="0">
            <input type="text" class="otp-input text-[32px] text-center form-input" placeholder="0">
            <input type="text" class="otp-input text-[32px] text-center form-input" placeholder="0">
          </div> --}}
          <div class="otpBox">
            <input class="otp" type="text" name="otp[0]" value="{{old('otp[0]')}}"  maxlength=1 >
            <input class="otp" type="text" name="otp[1]" value="{{old('otp[1]')}}"  maxlength=1 >
            <input class="otp" type="text" name="otp[2]" value="{{old('otp[2]')}}"  maxlength=1 >
            <input class="otp" type="text" name="otp[3]" value="{{old('otp[3]')}}"  maxlength=1 >
            <input type="hidden" name="user_id" value="{{@$id}}">
        </div>
        @error('otp')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
						
						<div class="text-center mb-3">
							<a href="" ><button type="submit" class="btn" >Verify</button></a>
						</div>
						{{-- <div class="text-white mb-3" >or Go Back</div> --}}

						<div class="text-white">
							<a href="{{route('user.forgetPassword')}}" class="register-link">Go Back</a>
						</div>
					</form>
				</div>

        <script>
          $(document).ready(function(){
                  $('.otp').on('input', function(e) {
                      var $this = $(this);
                      var maxLength = parseInt($this.attr('maxlength'));
                      var currentLength = $this.val().length;
                      var index = $('.otp').index($this);
          
                      if (currentLength === maxLength) {
                          if (index < 3) {
                              $('.otp').eq(index + 1).focus();
                          }
                      }
                  });
          
                  $('.otp').on('keyup', function(e) {
                      var $this = $(this);
                      var currentLength = $this.val().length;
                      var index = $('.otp').index($this);
          
                      if (e.key === "Backspace" && currentLength === 0) {
                          if (index > 0) {
                              $('.otp').eq(index - 1).focus();
                          }
                      }
                  });
              });
          </script>
	@endsection	
