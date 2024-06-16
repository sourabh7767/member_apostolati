<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>landing page</title>
    <!-- css link -->
    <link rel="stylesheet" href="{{asset("css/userCss/style.css")}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
        @include('layouts.partials.header')

        @yield('content')


        <!-- BEGIN: Vendor JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }
        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
        </script>
       
         <script src="{{ asset('js/theme//vendors.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="{{ asset('js/custom.js?v=1.1') }}"></script>
        <!-- BEGIN: Page JS-->
        @stack('page_script')
        <!-- END: Page JS-->
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
    </body>
</html>
