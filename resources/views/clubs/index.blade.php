@extends('layouts.admin')

@section('title')Users @endsection

@section('content')
 
           

    <!-- Main content -->
    <section>

      <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('clubs.index')}}">Clubs</a>
                                    </li>
                                    <li class="breadcrumb-item active">Clubs List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
      </div>
       

        <div class="row">
          <div class="col-12">
            <div class="card data-table">
               <div class="card-header">
                  <div class="heading-text">
                    <h4 class="m-0"><i class="fas fa-users mr-2"></i>&nbsp;{{ __('Forms') }}</h4>
                  </div>

                  <div class="right-side mr-2">



                {{-- <a href="{{ route('users.create') }}" class="dt-button btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Create New User</a> --}}

              </div>
              </div>
            
              <!-- /.card-header -->
              <div class="card-body">
                <table id="clubTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    {{-- <th>S.No</th> --}}
                    {{-- <th>Created By</th> --}}
                    {{-- <th>Club name</th>--}}
                    {{--<th>Status</th>--}}
                    {{--<th data-orderable="false">Action</th> --}}
                  </tr>
                  </thead>
              
                </table>
              </div>
          
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
		    </div>
       </div>    
      <!-- /.container-fluid -->
    </section>  
  

  @push('page_script')

      @include('include.dataTableScripts')   

      <script src="{{ asset('js/pages/clubs/index.js') }}"></script>

  @endpush

	     
@endsection