
@extends('layouts.user')

@section('title') Welcome Page @endsection

@section('content')
 
 <section class="landingPage">
        
        {{-- <div class="content text-center">
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
        </div> --}}
        <section class="table-section w-100">
          {{-- <div class="position-relative"> --}}
              <h2 class="text-center tableUprHead mb-2">Enrollees </h2>
              <div class="text-end mb-4">
                  <button class="getStartBtn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Enter New Enrollees
                  </button>
              </div>
           
          {{-- </div> --}}
             
              <div class="dataInfo table-responsive">
                  <table class="w-100">
                      <thead>
                          <tr>
                              <th class="tableHead">Entry #</th>
                              <th class="tableHead">Enrolled by</th>
                              <th class="tableHead">Society</th>
                              <th class="tableHead">Enrollee</th>
                              <th class="tableHead">Created At</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="tableData">1</td>
                              <td class="tableData">Andrew</td>
                              <td class="tableData">The Purgatorial Society of St. Andrew Avellino</td>
                              <td class="tableData">Andrew Name</td>
                              <td class="tableData">July 27, 2024</td>
                          </tr>
                          <tr>
                              <td class="tableData">2</td>
                              <td class="tableData">Andrew</td>
                              <td class="tableData">The Society of St. Margaret of Cortona</td>
                              <td class="tableData">Andrew Name</td>
                              <td class="tableData">July 26, 2024</td>
                          </tr>
                          <tr>
                              <td class="tableData">3</td>
                              <td class="tableData">Andrew</td>
                              <td class="tableData">The Purgatorial Society of St. Andrew Avellino</td>
                              <td class="tableData">Andrew Name</td>
                              <td class="tableData">July 25, 2024</td>
                          </tr>
                          <tr>
                              <td class="tableData">4</td>
                              <td class="tableData">Andrew</td>
                              <td class="tableData">The Purgatorial Society of St. Andrew Avellino.</td>
                              <td class="tableData">Andrew Name</td>
                              <td class="tableData">July 24, 2024</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </section>

    </section>



    <!-- Modal -->
    <div class="modal fade getStartedModal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block position-relative">
                    <h1 class="modal-title  text-center" id="staticBackdropLabel">Enter your Enrollees</h1>
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
                    <button type="button" class="btn submitBtn">Submit Enrollees</button>
                </div>
            </div>
        </div>
    </div>
@endsection
