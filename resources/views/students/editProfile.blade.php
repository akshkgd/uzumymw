@extends('layouts.app')
@section('content')
<style>

</style>
<div class="navbar-container ">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-0" data-overlay>
        @include('layouts.header')
    </nav>
</div>
  
{{-- batch details start --}}

<section class="pb-0">
    <div class="container pt-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                @include('layouts.alert')
                <form action="{{ route('updateStudentsProfile') }}" method="POST" class="">
                    @csrf
                <div class="card card-body">
                    <h3 class="pb-2">Personal Info</h3>

                    <img src="{{Auth::user()->avatar}}" alt="" class="avatar avatar-lg">

                    
                      <div class="form-floating mt-3 mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name@example.com" value="{{Auth::user()->name}}">
                        <label for="floatingInput">Full Name</label>
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="{{Auth::user()->email}}">
                        <label for="floatingInput">Email address</label>
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="mobile" placeholder="name@example.com" value="{{Auth::user()->mobile}}">
                        <label for="floatingInput">Mobile Number</label>
                      </div>

                      
                      <div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                      
                </div>

            </div>
        </div>
    </div>
</section>
{{-- batch details ends --}}

<section class="pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                <div class="card card-body">
                    <h3 class="pb-2">Educational Details</h3>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="college" placeholder="name@example.com" value="{{Auth::user()->college}}">
                        <label for="floatingInput">Your School / College</label>
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="course" placeholder="name@example.com" value="{{Auth::user()->course}}">
                        <label for="floatingInput">Course</label>
                      </div>

                      <div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>   

                </div>
                
                
                <form>

            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container  pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                <div class="card  card-ico shadow-3">
                    <div class="card-body">
                        <div class="flex-grow-1 text-cente">
                            <h3 class="mb-0">Browser Sessions</h3>

                            <p class="lea">
                                Manage and logout your active sessions on other browsers and devices.
                            </p>
                            @foreach($devices as $device)
                            <div class=" d-flex align-items-center mb-1">
                                @if( (new \Jenssegers\Agent\Agent())->isMobile() )
                                <img src="{{asset('assets/img/icons/theme/devices/iphone-x.svg')}}"
                                    alt="{{Auth::User()->name}}'s avatar" class="avatar border-rounde mr-3 pb-3 p" data-inject-svg>
                                @endif
                                @if((new \Jenssegers\Agent\Agent())->isDesktop())
                                    <img src="{{asset('assets/img/icons/theme/devices/display-2.svg')}}"
                                    alt="{{Auth::User()->name}}'s avatar" class="avatar border-rounde mr-3 mb-3" data-inject-svg>
                                @endif
                                <div class="">
                                    <h6 class="mb-0 fw-400">{{(new \Jenssegers\Agent\Agent())->device()}} -
                                        {{(new \Jenssegers\Agent\Agent())->browser()}}
                                        @if ($current_session_id == $device->id)
                                        <span class="text-primary ck-font">  <span class="text-muted">|</span>  This Device</span>
                                        
                            

                                        @endif
                                    </h6>
                                    <p class="text-secondary " style="font-weight: 400; " href="#">
                                        {{ $device->ip_address }} -  <span>Last Activity {{ Carbon\Carbon::parse($device->last_activity)->diffForHumans() }}</span>
                                        
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a href="{{ count($devices) > 1 ? '/logout/all' : '#' }}"
                            class="btn btn-secondary {{ count($devices) == 1 ? 'disabled' : '' }}">Remove All Devices</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<a href="#" class="btn btn-dark p-3 bg-dark btn-round btn-floating">
    <img class="icon " src="assets/img/icons/theme/communication/chat-4.svg" alt="twitter social icon"
        data-inject-svg />
</a>
{{-- <a href="" class="btn btn-dark p-3 bg-dark btn-round  btn-floating">  <img src="/assets/img/icons/communication/chat4.svg" alt=""></a> --}}
@endsection()