<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset("css/style.css")}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 form-container">
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box">
					{{-- <div class="logo mt-5 mb-3 text-center">
						<img src="{{asset("images/logo.png")}}" width="150px">
					</div> --}}
					<div class="reset-form d-block">
						<form class="reset-password-form" action="{{route('user.login')}}">
							<h4 class="mb-3">Reset Your Password</h4>
							<p class="mb-3 text-white">
								Please enter your email address and we will send you a password reset link
							</p>
							<div class="form-input">
								<span><i class="fa fa-envelope"></i></span>
								<input type="email" placeholder="Email Address" required>
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
				</div>
			</div>

			<div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
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
			});
		}

		window.addEventListener('load',function(){
			PasswordReset();
		});
	</script>
</body>
</html>