@extends('layouts.t-student')
@section('content')
@include('layouts.t-student-nav')

</style>
{{-- @include('layouts.ck-header') --}}
  
<main
      class="mt-32 flex flex-col justify-center align-middle px-6 py-12 lg:px-8"
    >
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        
        <h2 class="text-2xl font-bold leading-9 tracking-tight text-gray-900">
          Hey {{Auth::user()->name}}, Complete your profile!
        </h2>
      </div>

      <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
        <div class="relative">
          <div class="absolute flex items-center" aria-hidden="true">
            <div class="w-full border-t border-gray-200"></div>
          </div>
          <div class="relative flex justify-cente text-md leading-6">
            <span class="bg-white text-gray-500"
              >Login to your account to see all your courses <br />
              and upcoming classes.</span
            >
          </div>
        </div>
        <form action="{{ route('updateStudentsProfile') }}" method="POST" class="">
          @csrf
        <div class="relative w-full mt-2 content">
          <div class="bg-card text-neutral-900 mt-5">
            <div class="pt-0 space-y-2">
              <div class="space-y-1">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="name"
                  >Name</label
                ><input
                  type="text"
                  placeholder="Name"
                  id="name"
                  name="name"
                  value="{{Auth::user()->name}}"
                  class="flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-lg peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                />
              </div>
              <div class="space-y-1">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="username"
                  >Email</label
                ><input
                  type="email" readonly
                  placeholder="Username"
                  id="username"
                  name="email"
                  value="{{Auth::user()->email}}"
                  class="flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-lg peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                />
              </div>
              <div class="space-y-1">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="username"
                  >WhatsApp Number</label
                ><input
                  type="text"
                  placeholder="WhatsApp Number"
                  name="mobile"
                  value="{{Auth::user()->mobile}}"
                  class="flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-lg peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                />
              </div>
            </div>
            <div class="flex items-center pt-0 mt-3">
              <button
                type="submit"
                class="inline-flex items-center justify-center px-4 py-3 text-sm font-normal tracking-wide text-white transition-colors duration-200 rounded-lg bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none"
              >
                Save changes
              </button>
            </div>
          </div>
        </div>
        <div class="relative w-full mt-10 content">
          <div class="bg-card text-neutral-900">
            <div class="flex flex-col space-y-1.5">
              <h3 class="text-lg font-semibold leading-none tracking-tight">
                Educational info
              </h3>
              <p class="text-sm text-neutral-500">
                Make changes to your account here. Click save when you're done.
              </p>
            </div>
            <div class="pt-0 space-y-2 mt-5">
              <div class="space-y-1">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="name"
                  >College / Company</label
                ><input
                  type="text"
                  placeholder="i.e. IIT bombay / Zoho "
                  id="name"
                  name="college"
                  value="{{Auth::user()->college}}"
                  class="flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-lg peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                />
              </div>
              <div class="space-y-1">
                <label
                  class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                  for="username"
                  >Current Course/ Designation</label
                ><input
                  type="text"
                  placeholder="B.tech, MCA / Frontend Developer"
                  id="username"
                  name="course"
                  value="{{Auth::user()->course}}"
                  class="flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-lg peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                />
              </div>
            </div>
            <div class="flex items-center pt-0 mt-3">
              <button
                type="submit"
                class="inline-flex items-center justify-center px-4 py-3 text-sm font-normal tracking-wide text-white transition-colors duration-200 rounded-lg bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none"
              >
                Save changes
              </button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </main>
{{-- 
<section class="">
    <div class="container pt-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                @include('layouts.alert')
                <form action="{{ route('updateStudentsProfile') }}" method="POST" class="">
                    @csrf
                    <h4 class="mb-0 fs-5 fw-">Personal Info</h4>
                    <p class="text-muted small">Make changes to your account here. Click save when you're done.</p>

                    
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
                      </div>
                      
                </div>

            </div>
        </div>
    </div>
</section> --}}
{{-- batch details ends --}}

{{-- <section class="pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 ">
                <div class="= my-5">
                    <h4 class="mb-0 fs-5">Educational Info</h4>
                    <p class="text-muted small">Make changes to your account here. Click save when you're done.</p>

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="college" placeholder="name@example.com" value="{{Auth::user()->college}}">
                        <label for="floatingInput">Your School / College</label>
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="course" placeholder="name@example.com" value="{{Auth::user()->course}}">
                        <label for="floatingInput">Course</label>
                      </div>
                      @if (Auth::user()->role==1)
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="bio" placeholder="name@example.com" value="{{Auth::user()->bio}}">
                        <label for="floatingInput">Bio</label>
                      </div>
                      @endif

                      <div>
                        <button type="submit" class="btn px-3 rounded-pil btn-dark py-3">Save Changes</button>
                    </div>   

                </div>
                
                
                <form>

            </div>
        </div>
    </div>
</section> --}}
{{-- 
<section class="">
    <div class="container d-none pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                <div class="card  card-ico shadow-3d my-5">
                    <div class="card-body ">
                        <div class="flex-grow-1 text-cente">
                            <h3 class="mb-0 pb-2 fw-bold">Browser Sessions</h3>

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
</section> --}}


{{-- <a href="#" class="btn btn-dark p-3 bg-dark btn-round btn-floating">
    <img class="icon " src="assets/img/icons/theme/communication/chat-4.svg" alt="twitter social icon"
        data-inject-svg />
</a> --}}
{{-- <a href="" class="btn btn-dark p-3 bg-dark btn-round  btn-floating">  <img src="/assets/img/icons/communication/chat4.svg" alt=""></a> --}}
@endsection()