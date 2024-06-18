
@extends('layouts.user')

@section('title') Welcome Page @endsection
<style>
#clubDataTable_wrapper .row{
  padding: 15px !important;
  color: #fff;
}
</style>
@section('content')
@php
$user = auth()->user();
@endphp
 <section class="landingPage">
        @if ($totalRecords > 0 )
        <section class="table-section w-100">
          <div class="position-relative">
              <h2 class="text-center tableUprHead mb-2">Home </h2>
              <div class="text-end mb-4">
                  <button class="getStartBtn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                      Get started
                  </button>
              </div>
           
          </div>
             
              <div class="dataInfo table-responsive">
                  <table class="w-100" id="clubDataTable">
                      <thead>
                          <tr style="position: sticky;">
                              <th class="tableHead">S.no</th>
                              <th class="tableHead">Created By</th>
                              <th class="tableHead">Club</th>
                              <th class="tableHead">Name</th>
                              <th class="tableHead">Created at</th>
                          </tr>
                      </thead>
                      <tbody>
                       
                      </tbody>
                  </table>
              </div>
          </section>

    </section>
        @else
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
        @endif
        
        



    <!-- Modal -->
    <div class="modal fade getStartedModal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block position-relative">
                    <h1 class="modal-title  text-center" id="staticBackdropLabel">Add Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                </div>
                <form action="" id="ClubDataForm">
                  <div class="modal-body">
                    <div class="inputContainer" id="user_details_container">
                        <div class="row user_details">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="labelTxt" for="">Clubs</label>
                                    <select class="inputBox" name="club_id[]" id="club_id">
                                      @foreach ($clubs as $club)
                                      <option value="{{$club->id}}">{{$club->club_name}}</option>    
                                      @endforeach
                                    </select>
                                    <span class="club_idError" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="labelTxt" for="">Name</label>
                                    <input class="inputBox" name="name[]" type="text" id="name" value="{{old('name')}}">
                                    <span class="nameError" style="color: red;"></span>
                                </div>
                            </div>
                        </div>
                      </div>
                      <button type="button" id="add_more" class="addMorBtn mt-3"><i class="fa-solid fa-plus addMoreIcon"></i> Add More</button>
                </div>
                </form>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn submitBtn" data-bs-dismiss="modal" id="close">Close</button>
                    <button type="button" class="btn submitBtn" id="Understood">Save</button>
                </div>
            </div>
        </div>
    </div>
    @push('page_script')
    @include('include.dataTableScripts')   

      <script src="{{ asset('js/pages/clubData/club-data.js') }}"></script>
    <script>
      document.getElementById('add_more').addEventListener('click', function() {
    var userDetailDiv = document.querySelector('.user_details');
    var newUserDetailDiv = userDetailDiv.cloneNode(true);

    // Clear the values in the cloned inputs and select elements
    newUserDetailDiv.querySelectorAll('input').forEach(input => input.value = '');
    newUserDetailDiv.querySelectorAll('select').forEach(select => select.selectedIndex = 0);

    // Clear the error messages in the cloned elements
    newUserDetailDiv.querySelectorAll('.club_idError, .nameError').forEach(error => error.textContent = '');

    document.getElementById('user_details_container').appendChild(newUserDetailDiv);
});
    </script>
    <script>
      document.getElementById('logoutUser').addEventListener('click', function(e) {
        e.preventDefault(); 
            var logoutLink = $(this).attr('href');
            var confirmation = confirm("Are you sure you want to log out?");
            if(confirmation) {
                window.location.href = logoutLink;
            }
      });
    </script>
    @endpush
@endsection
