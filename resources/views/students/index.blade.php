@extends('layouts.app')
@section('title', 'Codekaro Dashboard ')
@section('meta_keywords', 'Student Section')
@section('meta_description', 'Student DashBoard')
    <style>

    </style>
@section('content')
    <div class="navbar-container ">
        <nav class="navbar navbar-expand-lg navbar-light border-bottom-0" data-overlay>
            @include('layouts.header')
        </nav>
    </div>

    {{-- <section class="bg-primary-alt header-inner o-hidden" id="test">
  <div class="container">
    <div class="row my-3">
      <div class="col">

      </div>
    </div>
    <div class="row py-6 text-center justify-content-center align-items-center layer-2">
      <div class="col-xl-8 col-lg-10">
        <h1 class="display-4  display-5" id="greet"><span id="time"></span> <span>{!!strtok(Auth::user()->name, "
            ")!!}</span> </h1>
        <p class="lead mb-0">Eat. Sleep. Code Repeat</p>
      </div>
    </div>
  </div>
  <div class="divider layer-1">
    <img src="assets/img/dividers/divider-2.svg" alt="graphical divider" data-inject-svg />
  </div>
</section> --}}
    <!-- student dashboard starts -->


    <section class="" style="padding-top: 5rem;">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">

                    {{-- user section --}}
                    <div class="text-center ">
                        <img src="{{ Auth::user()->avatar }}" alt="" class="avatar avatar-lg">
                        <h1 class="display lead-1 pt-2 mb-0"><span id="time"></span>  {{Auth::user()->name}}</h1>
                        <p class="lead">Eat Sleep Code repeat</p>
                    </div>

                    {{-- user section ends --}}
                    @include('layouts.alert')
                    {{-- alert start --}}

                    {{-- alert ends --}}
                    @isset($workshopEnrollments)
                        @if ($workshopEnrollments->count() > 0)
                        <div class="text-sm-center">
                            <span class="badge badge-pill badge-ck-primary text-center lead mb-2 mt-3 ">Upcoming Class</span>
                        </div>
                            
                        @endif
                        @forelse ($workshopEnrollments as $event)
                        @if ($event->workshop->status < 3 && $event->workshop->status > 0)
                            <div class="card card-dark cb-card card-ico shadow-3d">
                                <div class="card-body">
                                    <div class="flex-grow-1">
                                        <h4 class="lead-1 mb-2">{{ $event->workshop->topic }}</h4>
                                        <span>
                                            {!! $event->workshop->desc !!}
                                        </span>
                                        <div class="d-md-flex justify-content-between pt-1">
                                            <div class="">
                                                <h5 class="mb-0 ck-font text-primary-3">
                                                    {{ Carbon\Carbon::parse($event->workshop->nextClass)->format('D, d M Y') }}
                                                    </h4>
                                                    <h6 class="ck-font">
                                                        {{ Carbon\Carbon::parse($event->workshop->nextClass)->format('h:i A') }}
                                                </h5>
                                            </div>

                                            <div class="text pt-md-2">
                                                <a href="{{ $event->workshop->meetingLink }}"
                                                    class=" btn btn-primary fw-400 @if ($event->workshop->meetingLink == '') disabled @endif" target="_blank">Launch Class</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-to pt-4">
                                        <a href="{{ action('WorkshopController@workshopDetails', Crypt::encrypt($event->id)) }}"
                                            class="btn ck-c-btn">Course Details</a>
                                        <a href="{{ $event->workshop->groupLink}}" target="_blank" class="btn ck-c-btn">Join WhatsApp Group</a>
                                        <p class="text-dark small pt-2 m-0">No recording for the free class will be provided,
                                            make sure to join the class on time. Launch class button will be active 10 minutes
                                            before the class.</p>
                                    </div>

                                </div>
                            </div>
                            @endif
                        @empty

                        @endforelse
                    @endisset


                    @isset($Enrollments)
                        @if ($Enrollments->count() > 0)
                            {{-- <span class="badge badge-pill badge-ck-primary text-center lead mb-2">Upcoming Class</span> --}}
                        @endif
                        @forelse ($Enrollments as $Enrollment)
                        @if ($Enrollment->batch->status < 3 && $Enrollment->batch->status > 0)
                            <div class="card card-dark cb-card card-ico shadow-3d">
                                <div class="card-body">
                                    <div class="flex-grow-1">
                                        <h4 class="lead-1 mb-2">{{ $Enrollment->batch->topic }}</h4>
                                        <span>
                                            {!! $Enrollment->batch->desc !!}
                                        </span>
                                        <div class="d-md-flex justify-content-between pt-1">
                                            <div class="">
                                                <h5 class="mb-0 ck-font text-primary-3">
                                                    {{ Carbon\Carbon::parse($Enrollment->batch->nextClass)->format('D, d M Y') }}
                                                    </h4>
                                                    <h6 class="ck-font">
                                                        {{ Carbon\Carbon::parse($Enrollment->batch->nextClass)->format('h:i A') }}
                                                </h5>
                                            </div>

                                            <div class="text pt-md-2">
                                                @if ($Enrollment->hasPaid == 1)
                                                    <a href="{{ $Enrollment->batch->meetingLink }}"
                                                        class=" btn btn-outline-primary" target="_blank">LaunchClass</a>
                                                @else
                                                    <a href="{{ action('CourseEnrollmentController@checkout', Crypt::encrypt($Enrollment->id)) }}"
                                                        class=" btn btn-outline-primary fw-400">Complete
                                                        Payment</a>
                                                @endif
                                            </div>
                                        </div>


                                    </div>


                                </div>
                                <div class="border-to px-3 py-2">
                                    {{-- <a href="{{$Enrollment->batch->meetingLink}}" class=" btn btn-outline-primary" disabled>Launch
              Class</a> --}}
                                    <a href="{{ action('BatchController@batchDetails', Crypt::encrypt($Enrollment->id)) }}"
                                        class="btn ck-c-btn">Course Details</a>
                                        @if ($Enrollment->batch->type == 1)
                                        <a href="{{ action('StudentController@notes', Crypt::encrypt($Enrollment->id)) }}"
                                            class="btn ck-c-btn">Notes & Assignments</a>
                                        <a href="{{ action('StudentController@recordings', Crypt::encrypt($Enrollment->id)) }}"
                                            class="btn ck-c-btn">Recording</a>
                                        @endif
                                        @if ($Enrollment->batch->type == 2)
                                        <a  target="_blank" class="btn ck-c-btn" @if($Enrollment->hasPaid == 1) href="{{ $Enrollment->batch->groupLink}}" @endif>Join WhatsApp Group</a>
                                        @endif
                                    
                                </div>


                            </div>
                            @endif
                        @empty
                            <div class="row   o-hidden  mt-5">
                                <div class="col-md-12 d-flex">
                                    <div class="card card-body">
                                        {{-- <img src="{{ asset('assets/img/starred_A.png') }}" class="img-fluid" alt="Image"> --}}
                                        <h1 class="lead m-0">No upcoming classes for you! 😔</h1>
                                        <p class="">Your next class will be scheduled when you enroll in a course </p>
                                        {{-- <a href="" class="btn btn-primary">Explore all courses</a> --}}
                                    </div>
                                </div>
                            </div>
                                
                            
                                        
                        
                                        <div class="row d-none justify-content-center">
                                             @foreach ($batches as $batch)
                        
                                                <div class=" col-md-6  d-flex ">
                                                    <a class="card hover-shadow-sm border-none shadow-lg shadow-3d"
                                                        href="{{ action('WorkshopController@details', $batch->id) }}">
                                                        <div class="flex-grow-1">
                                                        <img src="{{ asset('storage/'.$batch->img) }}" loading="lazy" alt="Image"
                                                            class="card-img-top">
                                                        <div class="card-bod d-flex flex-column">
                                                            <div class=" p-2">
                                                                <h4 class="mb-0 ck-font fw-400">{{$batch->name}} </h1>
                                                                    <p class="lea m-0 text-dark">Start Time: {{ Carbon\Carbon::parse($batch->nextClass)->format('h:i A') }}
                                                                        {{ Carbon\Carbon::parse($batch->startDate)->format('D, d M Y') }}</p>
                                                                    <p class="lad m-0 text-dark">Duration: 2 Hours</p>
                        
                                                            </div>
                                                        </div>
                                                        </div>
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <span class="badge badge-pill  badge-ck-primary  m-1">Python</span>
                                                                <span class="badge badge-pill badge-ck-success  m-1">Live Session</span>
                                                                <span class="badge badge-pill badge-ck-success  m-1">Free</span>
                                                            </div>
                                                    </a>
                                                </div>
                        
                                                
                                            @endforeach
                        
                        
                                        </div>
                        
                                    {{-- </div> --}}
                                    {{-- </div>
                                    </div> --}}
                        
                                    
                               
                            
                    @endforelse
                @endisset
                {{-- faq starts --}}
                <h3 class="display lead-1 text-center pt-5">Frequently Asked Questions</h3>
                <div class="card shadow-3d">
                    <div class="border-bottom px-2 ">
                        <div data-target="#panel-1" class="accordion-panel-title pr-2" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="panel-1">
                            <span class="h5 text-dark ck-font fw-400 pt-3 px-2">How to join the upcoming class</span>
                            <img class="icon text-dark" src="assets/img/icons/interface/plus.svg" alt="plus interface icon"
                                data-inject-svg />
                        </div>
                        <div class="collapse" id="panel-1">
                            <div class="pt-3">
                                <p class="mb-2 pl-2">
                                    You can join your upcoming class by clicking on the launch class button. Since these
                                    are the live classes make sure to launch your class 5 minutes before the time to
                                    avoid any technical glitches.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=" px-2 ">
                        <div data-target="#panel-2" class="accordion-panel-title pr-2" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="panel-1">
                            <span class="h5 text-dark ck-font fw-400 pt-3 px-2">I missed my live class</span>
                            <img class="icon text-dark" src="assets/img/icons/interface/plus.svg" alt="plus interface icon"
                                data-inject-svg />
                        </div>
                        <div class="collapse" id="panel-2">
                            <div class="pt-3">
                                <p class="mb-2 pl-2">
                                    Do not worry, once the live class is over the recorded video is saved in your
                                    dashboard and you can watch it later.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- faq ends --}}

            </div>
        </div>
        </div>

        @include('layouts.dfooter')


        <script>
            // fetch("https://type.fit/api/quotes")
            // .then(function(response) {
            //   return response.json();
            // })
            // .then(function(data) {
            //   console.log(data);
            // });

            //   function timeOfDay() {
            //   let hour = new Date().getHours();
            //   if (hour >= 4 && hour <= 11) return 'Morning';
            //   if (hour >= 12 && hour <= 16) return 'Afternoon';
            //   if (hour >= 17 && hour <= 20) return 'Evening';
            //   if (hour >= 21 || hour <= 3) return 'Night';
            // }
            // document.getElementById("time").innerHTML = (`Good ${timeOfDay()},`);
            // // time.innerHtml(`Good ${timeOfDay()}!`);


            function timeOfDay() {
                let hour = new Date().getHours();
                if (hour >= 4 && hour <= 11) return 'Morning';
                if (hour >= 12 && hour <= 16) return 'Afternoon';
                if (hour >= 17 && hour <= 20) return 'Evening';
                if (hour >= 21 || hour <= 3) return 'Night';
            }
            document.getElementById("time").innerHTML = (`Good ${timeOfDay()},`);
            console.log(timeOfDay());
            if (timeOfDay() == 'Morning') {
                document.getElementById("test").style.background = "#f8d2c3";
                document.getElementById("greet").style.color = "#f28b82";
            }
            if (timeOfDay() == 'Afternoon') {
                document.getElementById("test").style.background = "#ffefc3";
                document.getElementById("greet").style.color = "#fbc129";
            }
            if (timeOfDay() == 'Evening') {
                document.getElementById("test").style.background = "#ceead6";
                document.getElementById("greet").style.color = "#4185f4";
            }
            if (timeOfDay() == 'Night') {
                document.getElementById("test").style.background = "#d2e3fc";
                document.getElementById("greet").style.color = "#4185f4";
            }

        </script>
        @if (Auth::user()->mobile == '')
            <div class="m-1">
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subscribe-modal">
    Subscribe
  </button> --}}
                <div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <img class="icon bg-dark" src="assets/img/icons/interface/cross.svg"
                                        alt="cross interface icon" data-inject-svg />
                                </button>
                                <div class="m-xl-4 m-3">
                                    {{-- <div class="icon-round icon-round-lg bg-primary mx-auto mb-4">
              <img class=" bg-primary avatar avatar-lg" src="{{Auth::user()->avatar}}" alt="mail-opened icon"  />
            </div> --}}
                                    <div class="text-center mb-4">
                                        <h4 class="h3 mb-1">Hi, <strong>{!! strtok(Auth::user()->name, ' ') !!}</strong> 👋</h4>
                                        <p>Before you start your coding journey with codekaro let us know a bit more about
                                            you.</p>
                                        </p>
                                    </div>
                                    <form method="POST" action="{{ route('completeStudentsProfile') }}">
                                        @csrf
                                        <div class="form-row">
                                            @if (Auth::user()->mobile == '')
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-2">
                                                        <input type="text" class="form-control" id="floatingInput"
                                                            name="mobile" placeholder="name@example.com"
                                                            value="{{ Auth::user()->mobile }}">
                                                        <label for="floatingInput">Mobile Number</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if (Auth::user()->college == '')
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-2">
                                                        <input type="text" class="form-control" id="floatingInput"
                                                            name="college" placeholder="name@example.com"
                                                            value="{{ Auth::user()->college }}">
                                                        <label for="floatingInput">Your School / College</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if (Auth::user()->course == '')
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-2">
                                                        <input type="text" class="form-control" id="floatingInput"
                                                            name="course" placeholder="name@example.com"
                                                            value="{{ Auth::user()->course }}">
                                                        <label for="floatingInput">Course</label>
                                                    </div>
                                                </div>
                                            @endif


                                            <div data-recaptcha data-sitekey="6Lemz4gUAAAAAElq4ZHFBzI7j8QUiYMn9I0mzQWG"
                                                data-size="invisible" data-badge="bottomleft">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-loading btn-block"
                                                data-loading-text="Sending">
                                                <img class="icon" src="assets/img/icons/theme/code/loading.svg"
                                                    alt="loading icon" data-inject-svg />
                                                <span class="fw-400">Add Details</span>
                                            </button>
                                            <small class="text-muted form-text fw-400">We’ll never share your details. See
                                                our <a href="#">Privacy Policy</a>
                                            </small>
                                        </div>

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
            <script type="text/javascript">
                $(window).on('load', function() {
                    $('#subscribe-modal').modal('show');
                });

            </script>
        @endif






    @endsection
