@extends('layouts.app')

@section('content')



<section class="">
    <div class="container pt-5 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-11 col-xl-9 col-sm-12 col-md-10 ">
          
          
          {{-- alert start --}}
          <div class="alert alert-primary alert-dismissible fade show mb-3" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          {{-- alert ends --}}

                    {{-- no course card --}}
                    <div class="card  card-ico shadow-3">
                      <div class="card-body">
                          <div class="flex-grow-1 text-cente">
                            {{-- <img src="assets/img/mask.svg" alt="Avatar" class="avatar avatar-lg mb-2"> --}}
                              <h3 class="mb-3">Personal Info</h4>
                                <form method="POST" action="{{ action('HomeController@updateProfile', Auth::user()->id) }}" files="true" enctype="multipart/form-data">
                                    @method('Patch')
                                    @csrf
                                <img src="{{Auth::User()->avatar}}" alt="Benjamin Cameron" class="avatar avatar-lg border-rounde mr-3">
                                </form>
                              
                            </div>
                            
                            
                      </div>
                      
                      
                    </div>
                    {{--no course card  --}}

          
            
          </div>
        </div>
      </div>
    </div>
</section>

@endsection()