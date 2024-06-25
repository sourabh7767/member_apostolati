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
            {{-- <li class="hideOnMobile"><a href="#">Home</a></li> --}}
            {{-- <li class="hideOnMobile"><a href="#">Search</a></li> --}}
            {{-- <li class="hideOnMobile"><a href="#">About</a></li> --}}
            <li class="hideOnMobile"><a href="{{route('user.login')}}">Login</a></li>
            <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg></a></li>
            <li>
                <div class="dropdown profileDropdown h-100">
                    <button class="button d-flex align-items-center h-100  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Settings
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#profileModal">Update Profile</a></li>
                      <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#changePassword">Change Password</a></li>
                      <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a></li>
                    </ul>
            </li>
        </ul>
    </nav>
</header>
<div class="modal fade getStartedModal" id="profileModal" data-bs-backdrop="static" data-bs-keyboard="false"
tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header d-block position-relative">
            <h1 class="modal-title  text-center" id="staticBackdropLabel">Update Profile</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group position-relative mb-3">
                            <label class="labelTxt" for="">Name</label>
                            <input class="inputBox" type="text" placeholder="Name">
                            <!-- <i class="fa-solid fa-lock lockIcon"></i> -->
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group position-relative mb-3">
                            <label class="labelTxt" for="">Email</label>
                            <input class="inputBox" type="text" placeholder="123@yopmail.com">
                            <!-- <i class="fa-solid fa-lock lockIcon"></i> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-12">
                      <div class="form-group position-relative mb-3">
                          <label class="labelTxt" for="">Confirm Password</label>
                          <input class="inputBox" type="text">
                          <i class="fa-solid fa-lock lockIcon"></i>
                      </div>
                  </div> -->
               
                
                <!-- <button class="addMorBtn mt-3"><i class="fa-solid fa-plus addMoreIcon"></i> Add More</button> -->
            </div>
        </div>
        <div class="modal-footer justify-content-center">
            <!-- <button type="button" class="btn submitBtn" data-bs-dismiss="modal">Close</button> -->
            <button type="button" class="btn submitBtn">Update</button>
        </div>
    </div>
</div>
</div>
<div class="modal fade getStartedModal" id="changePassword" data-bs-backdrop="static" data-bs-keyboard="false"
  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
          <div class="modal-header d-block position-relative">
              <h1 class="modal-title  text-center" id="staticBackdropLabel">Change Password</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="form-group position-relative mb-3">
                              <label class="labelTxt" for="">Old Passwowd</label>
                              <input class="inputBox" type="text">
                              <i class="fa-solid fa-lock lockIcon"></i>
                          </div>
                      </div>
                      <div class="col-lg-12">
                          <div class="form-group position-relative mb-3">
                              <label class="labelTxt" for="">New Password</label>
                              <input class="inputBox" type="text">
                              <i class="fa-solid fa-lock lockIcon"></i>
                          </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group position-relative mb-3">
                            <label class="labelTxt" for="">Confirm Password</label>
                            <input class="inputBox" type="text">
                            <i class="fa-solid fa-lock lockIcon"></i>
                        </div>
                    </div>
                 
                  
                  <!-- <button class="addMorBtn mt-3"><i class="fa-solid fa-plus addMoreIcon"></i> Add More</button> -->
              </div>
          </div>
          <div class="modal-footer justify-content-center">
              <!-- <button type="button" class="btn submitBtn" data-bs-dismiss="modal">Close</button> -->
              <button type="button" class="btn submitBtn">Save</button>
          </div>
      </div>
  </div>
</div>

<div class="modal fade getStartedModal" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block position-relative">
                <h1 class="modal-title  text-center" id="staticBackdropLabel">Are You Sure, <br> You Want To Logout</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               
            </div>
            <div class="modal-footer justify-content-center">
                <!-- <button type="button" class="btn submitBtn" data-bs-dismiss="modal">Close</button> -->
                <button type="button" class="btn submitBtn">Yes, Logout</button>
            </div>
        </div>
    </div>
  </div>