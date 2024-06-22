<!DOCTYPE html>
<html>
<head>
	<title>Login/Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset("css/style.css")}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 form-container">
                @yield('content')
            
            </div>

			<div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
		</div>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
   // Check if toastr is defined before using it
   if (typeof toastr !== 'undefined') {
       // Initialize Toastr.js with default options
       toastr.options = {
           "closeButton": true,
           "debug": false,
           "newestOnTop": false,
           "progressBar": false,
           "positionClass": "toast-top-right",
           "preventDuplicates": false,
           "onclick": null,
           "showDuration": "300",
           "hideDuration": "1000",
           "timeOut": "5000",
           "extendedTimeOut": "1000",
           "showEasing": "swing",
           "hideEasing": "linear",
           "showMethod": "fadeIn",
           "hideMethod": "fadeOut"
       };

       // Check if there's a success message and display a success toast
       @if(Session::has('success'))
           toastr.success('{{ Session::get('success') }}');
       @endif

       // Check if there's an error message and display an error toast
       @if(Session::has('error'))
           toastr.error('{{ Session::get('error') }}');
       @endif

       // Check if there's an error message and display an error toast
   } else {
       console.error('Toastr.js is not loaded or properly included.');
   }
</script>
</html>