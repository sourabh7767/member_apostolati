<header>
    <nav>
        <ul>
            <li>
                <div class="titleLogo" >{{env("APP_NAME")}}</div></li>
            <li>
                <div class="dropdown profileDropdown h-100">
                    <button class="button d-flex align-items-center h-100  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-bars fa-xl"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#profileModal"><i class="fa-solid fa-user me-2"></i>Update Profile</a></li>
                      <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#changePassword"><i class="fa-solid fa-key me-2"></i>Change Password</a></li>
                      <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a></li>
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
                        </div>
                    </div>
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
                        <label class="labelTxt" for="oldPassword">Old Password</label>
                        <input id="oldPassword" class="inputBox masked" type="password">
                        <i class="fa-solid fa-lock lockIcon"></i>
                        <i class="fa-solid fa-eye-slash eyeIcon toggle-password" data-target="#oldPassword"></i>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group position-relative mb-3">
                        <label class="labelTxt" for="newPassword">New Password</label>
                        <input id="newPassword" class="inputBox masked" type="password">
                        <i class="fa-solid fa-lock lockIcon"></i>
                        <i class="fa-solid fa-eye-slash eyeIcon toggle-password" data-target="#newPassword"></i>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group position-relative mb-3">
                        <label class="labelTxt" for="confirmPassword">Confirm Password</label>
                        <input id="confirmPassword" class="inputBox masked" type="password">
                        <i class="fa-solid fa-lock lockIcon"></i>
                        <i class="fa-solid fa-eye-slash eyeIcon toggle-password" data-target="#confirmPassword"></i>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer justify-content-center">
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
                <a href="{{route('user.logout')}}" id="logoutUser" ><button type="button" class="btn submitBtn">Yes, Logout</button></a>
            </div>
        </div>
    </div>
  </div>
@push('page_script')
<script>
    $(document).ready(function() {
        $('.toggle-password').click(function() {
            var input = $($(this).data('target'));
            if (input.attr('type') === 'password') {
                input.attr('type', 'text');
                $(this).removeClass('fa-eye-slash').addClass('fa-eye');
            } else {
                input.attr('type', 'password');
                $(this).removeClass('fa-eye').addClass('fa-eye-slash');
            }
        });
    });
</script>
@endpush