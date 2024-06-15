
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
    <section class="landingPage">
        <header>
            <nav>
                <ul class="sidebar">
                    <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Search</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="{{route('user.login')}}">Login</a></li>
                </ul>
                <ul>
                    <li>
                      <img class="logo" src="https://st3.depositphotos.com/4177785/31922/v/380/depositphotos_319223486-stock-illustration-sugar-free-linear-icon-food.jpg, https://st3.depositphotos.com/4177785/31922/v/450/depositphotos_319223486-stock-illustration-sugar-free-linear-icon-food.jpg 2x" alt="Logo" width="40" height="40"/></li>
                    <li class="hideOnMobile"><a href="#">Home</a></li>
                    <li class="hideOnMobile"><a href="#">Search</a></li>
                    <li class="hideOnMobile"><a href="#">About</a></li>
                    <li class="hideOnMobile"><a href="{{route('user.login')}}">Login</a></li>
                    <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg></a></li>
                </ul>
            </nav>
        </header>
        <div class="content text-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">


                        <h3 class="landingHeading mb-4">Lorem ipsum dolor sit amet consectetur,<br> adipisicing elit.
                        </h3>
                        <button class="getStartBtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Get started
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary">
    Launch static backdrop modal
  </button> -->


    </section>


    <!-- Modal -->
    <div class="modal fade getStartedModal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block position-relative">
                    <h1 class="modal-title  text-center" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="inputContainer" id="user_details_container">
                        <div class="row user_details">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="labelTxt" for="">Clubs</label>
                                    <select class="inputBox" name="club_id[]" id="">
                                      @foreach ($clubs as $club)
                                      <option value="{{$club->id}}">{{$club->club_name}}</option>    
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="labelTxt" for="">Name</label>
                                    <input class="inputBox" name="name[]" type="text">
                                </div>
                            </div>
                        </div>
                      </div>
                      <button id="add_more" class="addMorBtn mt-3"><i class="fa-solid fa-plus addMoreIcon"></i> Add More</button>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn submitBtn" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn submitBtn">Understood</button>
                </div>
            </div>
        </div>
    </div>


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
</body>

</html>

<script>
  document.getElementById('add_more').addEventListener('click', function() {
      var userDetailDiv = document.querySelector('.user_details');
      var newUserDetailDiv = userDetailDiv.cloneNode(true);
      newUserDetailDiv.querySelectorAll('input').forEach(input => input.value = '');
      newUserDetailDiv.querySelectorAll('select').forEach(select => select.selectedIndex = 0);
      document.getElementById('user_details_container').appendChild(newUserDetailDiv);
  });
</script>