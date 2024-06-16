<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>landing page</title>
    <!-- css link -->
    <link rel="stylesheet" href="{{asset("css/userCss/style.css")}}">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<script>
  document.getElementById('add_more').addEventListener('click', function() {
      var userDetailDiv = document.querySelector('.user_details');
      var newUserDetailDiv = userDetailDiv.cloneNode(true);
      newUserDetailDiv.querySelectorAll('input').forEach(input => input.value = '');
      newUserDetailDiv.querySelectorAll('select').forEach(select => select.selectedIndex = 0);
      document.getElementById('user_details_container').appendChild(newUserDetailDiv);
  });
</script>
        <!-- BEGIN: Page JS-->
        @stack('page_script')
        <!-- END: Page JS-->
    </body>
</html>
