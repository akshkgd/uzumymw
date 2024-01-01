@extends('layouts.student')
@section('content')
    <div class="navbar-container ">
        <nav class="navbar navbar-expand-lg navbar-light border-bottom-0" data-overlay>
            
        </nav>
    </div>
    @include('layouts.student-nav')
    <!-- student dashboard starts -->


    <div class="container s-main mb-5">
        <div class="row justify-content-center">
            {{-- <div>
                <h3 class="fw-bold mb-0">Good morning, Ashish</h3>
                <p>Let's continue your css bootcamp!</p>
            </div> --}}
            @isset($enrollments)
                @if($enrollments->count() > 0)
                @foreach ($enrollments as $enrollment)
                    <div class="col-md-5 h-100 mt-4">
                        <div class="course-card h-100 shadow">
                            <img src="{{ $enrollment->batch->topicId == 100 ? asset('assets/img/cccs.png') : ($enrollment->batch->topicId == 101 ? asset('assets/img/cjavascript.png') : ($enrollment->batch->topicId == 10 ? asset('assets/img/cmern.png') : asset('assets/img/default-course.jpg'))) }}" class="course-card-img" alt="">
                            <div class="course-card-body">
                                <h3 class="text-dark mt-3 mb-1 fs-5 fw-bol">{{$enrollment->batch->name}}</h3>
                            <p class="mt-0 fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                            @if($enrollment->batch->status == 1 & $enrollment->batch->type == 2)
                            <div class="my-4">
                                <p class="small text-muted m-0">Starting on</p>
                                <p class="text-dark ">{{$enrollment->batch->startDate->format('D, d M Y')}}</p>
                            </div>
                            @endif
                            
                            <div class="mt-4">
                                @if($enrollment->batch->status == 1 & $enrollment->batch->type == 2)
                                <a href="{{$enrollment->batch->groupLink}}" target="_blank" class="btn-link ">Join WhatsApp Group</a>
                                @elseif ($enrollment->batch->status == 3 & $enrollment->batch->type == 2)
                                    <a href="{{ action('StudentController@recordings', Crypt::encrypt($enrollment->id)) }}" class="btn-link">Recordings</a>
                                    <a href="{{ action('BatchController@certificate', $enrollment->certificateId) }}" target="_blank" class="btn-link">Certificate</a>
                                @else
                                    <a href="{{ action('StudentController@recordings', Crypt::encrypt($enrollment->id)) }}" class="btn-link">Access Course</a>
                                    {{-- <a href="{{ action('BatchController@certificate', $enrollment->certificateId) }}" target="_blank" class="btn-link">Details</a> --}}
                                @endif
                            </div>
                            </div>
                            
                        </div>
                    </div>
                @endforeach
                @else
                <div class="no-enrollment">
                    <div class="col-md-8 " style="margin: auto">
                        <div class="text-center">
                            <img src="{{asset('assets/img/nf.svg')}}" class="" height="180" alt="">
                        </div>
                        <p class="mt-4 text-center fs-6">You’re not enrolled in any program!</p>

                        <p class="mb-1 mt-5">You can try the following things:</p>
                        <p class="mb-1">👉 Logout and login with the email you used for making the payment</p>
                        <p class="mb-1">👉 If you’re not sure which email it might be, try searching for “Codekaro” in your inbox</p>
                        <p class="mb-1">👉 If these steps don’t work — reach out to support at info@codekaro.in with your payment details</p>
                    </div>
                </div>
                
                @endif
            @endisset
        </div>
    </div>

        
    
    
    
    
    
    
    
    
    
    
    {{-- student dashboard ends --}}
    {{-- @include('layouts.dfooter') --}}


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





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @endsection
