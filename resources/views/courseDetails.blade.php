@extends('layouts.ck')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<style>
    li {
        margin-bottom: 3px;
    }

    .bg-mute {
        background-color: #e6e6e6 !important;
    }

    .sticky-lg-top {
        margin-top: 20px;
        top: 20 !important;
    }

    .accordion-button:not(.collapsed) {
        color: black;
        background-color: white;
        */ box-shadow: 0 0 0 white !important;
    }

    .accordion-button {
        color: black;
        background-color: white;
        */ box-shadow: 0 0 0 white;
    }

    @media(max-width:786px) {
        .slider-menu {
            align-items: center;
            background-color: #fff;
            box-shadow: 0 -2px 4px rgb(0 0 0 / 8%), 0 -4px 12px rgb(0 0 0 / 8%);
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            overflow-y: hidden;
            padding: 0.8rem 1.6rem;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            /* z-index: 1000; */
        }

        .btn-round {
            display: none !important;
        }
    }

    @media(min-width:786px) {
        .slider-menu {
            display: none
        }
    }

    .ck-btn {
        /* background-color: #4b2aad; */
        background-image: linear-gradient(99deg, rgb(48, 124, 247), rgb(50, 122, 255));
        border: 1px solid transparent;
        width: 100%;
        margin-top: 24px;
        border: none;
        color: white !important;
        padding: 12px 46px !important;
        font-weight: 400;
        display: inline-block;
        cursor: pointer;
        font-size: 16px;
        border-radius: 12px;
        /* box-shadow: rgb(247 123 155 / 71%) 0px 3px 16px 0px; */
    }

</style>
@section('title', '' . e($batch->name))
@section('meta_keywords', '' . e($batch->name))
@section('meta_description', '' . e($batch->description))

@section('content')
    @include('layouts.ck-header')

    <section>
        <div class="container pt-0 pt-lg-5 pt-xlg-5 pt-md-5 mt-5 ">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="fw-bold m-0"> {{ $batch->name }}</h1>
                    <p class="mt-2 fs-6">{{ $batch->description }}</p>


                    <div>
                        <div class="car card-bod">
                            {!! $batch->about !!}
                        </div>

                    </div>
                    <div class="accordion my-5" id="accordionExample">

                        @foreach ($topics as $topic)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $topic->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $topic->id }}" aria-expanded="true"
                                        aria-controls="collapse{{ $topic->id }}">
                                        {{ $topic->title }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $topic->id }}"
                                    class="accordion-collapse collapse @if ($loop->first) show @else hide @endif"
                                    aria-labelledby="heading{{ $topic->id }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                            {!! str_replace('~', "  <br /><i class='bi bi-dot fs-4'></i>", $topic->modules) !!}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="mentor mt-3">
                        <div class="card " style="background:#f3f3f3">

                            <div class=" rounded p-2">
                                <h5 class="fw-600">About Mentor</h5>
                                <div class=" d-flex align-items-center mb-2">
                                    <img src="{{ $batch->teacher->avatar }}" alt="Ashish  Shukla"
                                        class="rounded-circle ml-3" height="80">
                                    <div class="m-2">
                                        <h6 class="mb-0 ck-font">{{ $batch->teacher->name }}</h6>
                                        <a href="#" class="text-dark fw-400">Instructor</a>
                                    </div>

                                </div>
                                <p class="pt-0 mt-0">{{ $batch->teacher->bio }}</p>
                            </div>
                        </div>


                    </div>

                </div>




                <div class="col-md-4 mb-5 mb-lg-0 mb-xlg-0 ">

                    <div class="card card-primary sticky-lg-top border-none shadow-lg p-3">
                        <img src="{{ asset('storage/' . $batch->img) }}" alt="Image"
                            class="card-img-to course-car ck-rounded">
                        <div class="pills mt-3">
                            <span class="badge badge-pill badge-primary bg-mute text-dark fw-light">Live Classes</span>
                            <span class="badge badge-pill badge-primary bg-mute text-dark fw-lighter">English</span>
                            <span
                                class="badge badge-pill badge-primary bg-mute text-dark fw-lighter">{{ $topics->count() }}
                                Modules</span>


                        </div>
                        {{-- <img src="{{ asset('storage/'.$batch->img) }}" alt="" class="img-fluid ck-rounded"> --}}
                        <div class="bg-primary-al rounded-lg">
                            <div class="mt-2">
                                <h1 class="fs-5 my-3 text-dark">{{ $batch->name }}</h3>

                                    <div class="d-flex fs-3 justify-content-aroun ">
                                        <span class="h3 pt-1 mr-1 js-dollar-sign text-dark ck-font">Rs</span>
                                        <span class="fs-3 mr-2 js-price-per-month text-muted px-2"
                                            style="text-decoration:line-through; font-weight:400">{{ $batch->price }}</span>
                                        <span
                                            class="display- px-2  js-price-per-month fw-400">23999</span>
                                    </div>

                                    

                                    <p class="ck-font fw-400  m-0 d-none">Starts From
                                        {{ Carbon\Carbon::parse($batch->startDate)->format('D, d M') }}</p>
                                    <p class="ck-font fw-400 ">Timings: Evening Classes on alternate days
                                        </h5>
                                        
                                        <div class="car p-2 d-non">
                                            
                                            <div class="col-md-12 text-cente mt-0">
                                                <div id="countdown" class="">
                                                    <ul type="none" class="navbar justify-content-around p-0 text-center">
                                                      <li class="d-inlin fs-6"><span id="days" class="d-block display-6 fw-bold"></span> <span>days</span> </li>
                                                      <li class="d-inlin fs-6"><span id="hours" class="d-block display-6 fw-bold "></span>Hours</li>
                                                      <li class="d-inlin fs-6"><span id="minutes" class="d-block display-6 fw-bold"></span>Minutes</li>
                                                      <li class="d-inlinx fs-6"><span id="seconds" class="d-block display-6 fw-bold"></span>Seconds</li>
                                                    </ul>
                                                  </div>
                                            </div>
                                        </div>
                                       
                                        @auth
                                        <div class="card d-none">
                                            <div class="p-3">
                                                <p class="m-0">{{ Auth::User()->name }}</p>
                                            </div>
                                            <div class="p-3 border-top">
                                                <p class="m-0">{{ Auth::User()->email }}</p>
                                            </div>
                                        </div>
                                    @endauth
                                    <div class="">
                                        <a class="btn ck-btn fw-light ck-rounded"
                                            href="{{ action('CourseEnrollmentController@checkEnroll', $batch->id) }}">Enroll
                                            Now</a>
                                            {{-- <a href="https://rzp.io/l/jO09VVod" class="btn ck-btn fw-light ck-rounded">Join bootcamp at 23999/-</a> --}}
                                            <div class="text-center">Once the timer hits zero, pricing will be increased to 2399.00/-</div>
                                        
                                        </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <h1 class="fw-bold  text-center fw-400 p-3 mt-5">We have designed a <br> <span
                        class="text-prima wd_highlight1">flexible program</span> for you</h2>
                    <div class="col-md-4 mt-4">
                        <div class="card text-center f-1">
                            <div class="p-2">
                                <img src="{{ asset('assets/img/missed-class-logo-1.svg') }}" alt="">
                                <h2 class="fs-4 mt-2">Missed a class?</h2>
                                <p class="">No worries, watch the recordings later at your convenience from
                                    your Archive.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card text-center f-3">
                            <div class="p-2">
                                <img src="{{ asset('assets/img/hd.svg') }}" alt="">
                                <h2 class="fs-4 mt-2">Have doubts?</h2>
                                <p class="">Fear not, peer to peer group will help you out any issue, big or
                                    small.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card text-center f-2">
                            <div class="p-2">
                                <img src="{{ asset('assets/img/wtr.svg') }}" alt="">
                                <h2 class="fs-4 mt-2">Get Certificate!</h2>
                                <p>Receive a linkedIn shareable certificate after the completion of live classes</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card text-center f-4">
                            <div class="p-2">
                                <img src="{{ asset('assets/img/time.svg') }}" alt="">
                                <h2 class="fs-4 mt-2">Timings clash?</h2>
                                <p class="">Our classes are held in the evening to make sure college schedules
                                    do not clash with our classes.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card text-center f-5">
                            <div class="p-2">
                                <img src="{{ asset('assets/img/project.svg') }}" alt="" height="70">
                                <h2 class="fs-4 mt-2">College needs time??</h2>
                                <p class="">Pause your course and restart a month later with the next batch!
                                </p>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </section>
    {{-- test --}}
    <section class="d-none">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <h2 class="display-5 text-sm-center fw-400 p-3">We have designed a <span
                        class="text-prima ck-highlight">flexible program</span> for you</h2>
                <div class="col-md-4">
                    <div class="card card-dark p-2 text-center">
                        <div class="text-center">
                            <img src="{{ asset('/assets/img/missed-class-logo.svg') }}" alt="" class="avatar avatar-lg ">
                        </div>
                        <h4 class="ck-font">Missed a class?</h4>
                        <p class="lead">Watch the recording later, with teaching assistants available to solve
                            your doubts
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dark p-2 text-center">
                        <div class="text-center">
                            <img src="{{ asset('/assets/img/office.svg') }}" alt="" class="avatar avatar-lg ">
                        </div>
                        <h4 class="ck-font">Jobs & class timings clash?</h4>
                        <p class="lead">Our classes are held in the evening to make sure college schedules do not
                            clash with
                            our classes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dark p-2 text-center">
                        <div class="text-center">
                            <img src="{{ asset('/assets/img/revise.svg') }}" alt="" class="avatar avatar-lg ">
                        </div>
                        <h4 class="ck-font">Want to revise?</h4>
                        <p class="lead">Access assignments/notes lifelong and recordings upto 6 months post course
                            completion
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dark p-2 text-center">
                        <div class="text-center">
                            <img src="{{ asset('/assets/img/doubts.svg') }}" alt="" class="avatar avatar-lg ">
                        </div>
                        <h4 class="ck-font">Have Doubts?</h4>
                        <p class="lead">Get them resolved over text / video by our expert teaching assistants!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dark p-2 text-center">
                        <div class="text-center">
                            <img src="{{ asset('/assets/img/family-logo.svg') }}" alt="" class="avatar avatar-lg ">
                        </div>
                        <h4 class="ck-font">College / family needs time??</h4>
                        <p class="lead">Pause your course and restart a month later with the next batch!
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="mt-5 pt-5 d-none">
        <div class="container mb-sm-5 pt-0">
            <div class="row justify-content-center">
                <h1 class="fw-bold text-sm-center fw-400 p-3">We built codekaro for <span
                        class="text-prima wd_highlight1">
                        college students </span> <br> and they love us</h2>
                    <div class="col-md-4 d-flex">
                        <div class="card my-2 card-dark p-2 ">
                            <div class=" d-flex align-items-center mb-2">
                                <img src="{{ asset('assets/img/testimonials/bhanu-397d99374e67f29c99c907f25fe8e1bb6d8c8bdfbf3b78c780daddb3686941ef.png.gz') }}"
                                    class="rounded-circle  m-" height="60">
                                <div class="mx-2">
                                    <h6 class="mb-0">Bhanu Pratap Singh Rathore</h6>
                                    <p class="m-0 p-0 text-muted">Student</p>
                                </div>
                            </div>
                            <p class="">All the interactive live classes with experienced instructors, the
                                sessions with veteran
                                mentors and the rigorous mock interviews helped bridge the gap in my learning process.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card my-2 card-dark p-2 flex-grow-1">
                            <div class=" d-flex align-items-center mb-2">
                                <img src="{{ asset('assets/img/testimonials/suryakant-0a0b8726c67de8fe3464ac8ce00746a4ff6e8e61fef846f8c4c9825570fec2b4.png.gz') }}"
                                    class="avatar  mr-3">
                                <div class="mx-2">
                                    <h6 class="mb-0">Suryakant Mishra</h6>
                                    <p class="m-0 p-0 text-muted">Student</p>
                                </div>
                            </div>
                            <p class="">The mentorship arrangement and the peer culture has helped me evolve
                                as a
                                coder, and I
                                am genuinely grateful for my association with codekaro.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card my-2 card-dark p-2 d-flex">
                            <div class=" d-flex align-items-center mb-2">
                                <img src="{{ asset('assets/img/testimonials/suman-b8c6c6d44724e249c439ba0c7e24afa71cbcd8197f90c28d4ee776346cdbb175.png.gz') }}"
                                    class="avatar  mr-3">
                                <div class="mx-2">
                                    <h6 class="m-0 p-0">Suman Mahato</h6>
                                    <p class="m-0 p-0 text-muted">Student</p>
                                </div>
                            </div>
                            <p class="">I still watch the recorded classes of Codekaro, and try to hone my
                                skills
                                more, codekaro
                                has helped me gain confidence and constantly strengthen my core concepts.</p>
                        </div>
                    </div>

            </div>
        </div>
    </section>


    <section class="p-0 my-5 d-non">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-10 my-5">
                    <div class="border shadow-3d ck-rounded p-5 d-md-flex align-items-center">
                        <div class="text-left">
                            <h2 class="text-left fw-bold">Still have doubts? <span
                                    class="text-prima ck-highlight">Request Callback</span></h2>
                            <p class="">Still have doubts or query, you can simply request callback and our team will get back to you as soon as possible</p>
                            <a href="" class="btn btn-dark px-3 m-0 fw-400">Request Callback</a>
                        </div>
                        <img src="{{asset('assets/img/ttu_illustration_new.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="slider-menu mt-5">

        <h3 class="ck-font ">₹{{ $batch->payable }} <span class="lead "
                style="text-decoration: line-through;">₹{{ $batch->price }}</span> </h3>
        <br>

        <div class="">
            <a href="{{ action('CourseEnrollmentController@checkEnroll', $batch->id) }}"
                class="btn btn-primary w-10 fw-light py-2 px-5 rounded-pil">Enroll Now</a>
        </div>
    </div>

    {{-- callback form --}}
    <div class="m-1 ">
        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subscribe-modal">
    Subscribe
  </button> --}}
        <div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img class="icon bg-dark" src="{{ asset('assets/img/icons/interface/cross.svg') }}"
                                alt="cross interface icon" data-inject-svg />
                        </button>
                        <div class="m-xl-4 m-3">
                            {{-- <div class="icon-round icon-round-lg bg-primary mx-auto mb-4">
              <img class=" bg-primary avatar avatar-lg" src="{{Auth::user()->avatar}}" alt="mail-opened icon"  />
            </div> --}}
                            <div class="text-center mb-4">
                                <h4 class="h3 mb-1">Hi, <strong></strong> 👋</h4>
                                <p>Before you start your coding journey with codekaro let us know a bit more about
                                    you.</p>
                                </p>
                            </div>
                            <form method="POST" action="{{ route('completeStudentsProfile') }}">
                                @csrf
                                <div class="form-row">

                                    <div class="col-md-12">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="floatingInput" name="mobile"
                                                placeholder="name@example.com" value="">
                                            <label for="floatingInput">Mobile Number</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="floatingInput" name="college"
                                                placeholder="name@example.com" value="">
                                            <label for="floatingInput">Your School / College</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="floatingInput" name="course"
                                                placeholder="name@example.com" value="">
                                            <label for="floatingInput">Course</label>
                                        </div>
                                    </div>



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


    {{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> --}}
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#subscribe-modal').modal('show');
        });

        function show(id) {
            console.log("fc", id)
        }
    </script>
    <script>
        (function () {
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  let birthday = "november 8, 2023 11:00:00",
      countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        let now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

          document.getElementById("days1").innerText = Math.floor(distance / (day)),
      document.getElementById("hours1").innerText = Math.floor((distance % (day)) / (hour)),
      document.getElementById("minutes1").innerText = Math.floor((distance % (hour)) / (minute)),
      document.getElementById("seconds1").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          let headline = document.getElementById("headline"),
              countdown = document.getElementById("countdown"),
              content = document.getElementById("content");

          headline.innerText = "Class has Started!";
          countdown.style.display = "none";
          content.style.display = "block";

          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
    </script>
    {{-- callback form ends --}}
    @include('layouts.ck-footer')
@endsection
