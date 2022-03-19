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
        .btn-round{
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
                    {{-- <div class="accordion my-5" id="accordionExample"> --}}

                    @foreach ($topics as $topic)
                        <div class="accordion my-5" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $topic->id }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $topic->id }}" aria-expanded="true"
                                        aria-controls="collapse{{ $topic->id }}">
                                        {{ $topic->title }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $topic->id }}" class="accordion-collapse collapse show"
                                    aria-labelledby="heading{{ $topic->id }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                            {!! str_replace('~', "  <br /><i class='bi bi-dot fs-4'></i>", $topic->modules) !!}
                                        </p>

                                    </div>
                                </div>
                            </div>



                        </div>
                    @endforeach



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
                        <img src="{{ asset($batch->img) }}" alt="Image" class="card-img-to course-car ck-rounded">
                        <div class="pills mt-3">
                            <span class="badge badge-pill badge-primary bg-mute text-dark fw-light">Live Classes</span>
                            <span class="badge badge-pill badge-primary bg-mute text-dark fw-lighter">English</span>
                            <span
                                class="badge badge-pill badge-primary bg-mute text-dark fw-lighter">{{ $topics->count() }}
                                Modules</span>


                        </div>
                        {{-- <img src="{{ asset('storage/'.$batch->img) }}" alt="" class="img-fluid rounded"> --}}
                        <div class="bg-primary-al rounded-lg">
                            <div class="mt-2">
                                <h1 class="fs-5 my-3 text-dark">{{ $batch->name }}</h3>

                                    <div class="d-flex fs-3 justify-content-aroun ">
                                        <span class="h3 pt-1 mr-1 js-dollar-sign text-dark ck-font">Rs</span>
                                        <span class="fs-3 mr-2 js-price-per-month text-muted px-2"
                                            style="text-decoration:line-through; font-weight:400">{{ $batch->price }}</span>
                                        <span
                                            class="display- px-2  js-price-per-month fw-400">{{ $batch->payable }}</span>
                                    </div>

                                    <p class="ck-font fw-400  m-0">Starts From
                                        {{ Carbon\Carbon::parse($batch->startDate)->format('D, d M') }}</p>
                                    <p class="ck-font fw-400 ">Timings: {{ $batch->schedule }}
                                        </h5>

                                    <div class="">
                                        <a class="btn ck-btn fw-light ck-rounded"
                                            href="{{ action('CourseEnrollmentController@checkEnroll', $batch->id) }}">Enroll
                                            Now</a>
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
    <section class="mt-5 pt-5">
        <div class="container mb-sm-5 pt-0">
            <div class="row justify-content-center">
                <h2 class="fw-bold text-sm-center fw-400 p-3">We built codekaro for <span class="text-prima ck-highlight">
                        college students </span> <br> and they love us</h2>
                <div class="col-md-4 d-flex">
                    <div class="card card-dark p-2 ">
                        <div class=" d-flex align-items-center mb-2">
                            <img src="{{ asset('assets/img/testimonials/bhanu-397d99374e67f29c99c907f25fe8e1bb6d8c8bdfbf3b78c780daddb3686941ef.png.gz') }}"
                                class="avatar  mr-3">
                            <div>
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
                    <div class="card card-dark p-2 flex-grow-1">
                        <div class=" d-flex align-items-center mb-2">
                            <img src="{{ asset('assets/img/testimonials/suryakant-0a0b8726c67de8fe3464ac8ce00746a4ff6e8e61fef846f8c4c9825570fec2b4.png.gz') }}"
                                class="avatar  mr-3">
                            <div>
                                <h6 class="mb-0">Suryakant Mishra</h6>
                                <p class="m-0 p-0 text-muted">Student</p>
                            </div>
                        </div>
                        <p class="">The mentorship arrangement and the peer culture has helped me evolve as a
                            coder, and I
                            am genuinely grateful for my association with codekaro.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card card-dark p-2 d-flex">
                        <div class=" d-flex align-items-center mb-2">
                            <img src="{{ asset('assets/img/testimonials/suman-b8c6c6d44724e249c439ba0c7e24afa71cbcd8197f90c28d4ee776346cdbb175.png.gz') }}"
                                class="avatar  mr-3">
                            <div>
                                <h6 class="m-0 p-0">Suman Mahato</h6>
                                <p class="m-0 p-0 text-muted">Student</p>
                            </div>
                        </div>
                        <p class="">I still watch the recorded classes of Codekaro, and try to hone my skills
                            more, codekaro
                            has helped me gain confidence and constantly strengthen my core concepts.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="p-0 mb-5 d-none">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="display-5 text-sm-center fw-400 px-3">Still have doubts? <span
                            class="text-prima ck-highlight">Request Callback</span></h2>
                    <p class="lead">Still have doubts or query, you can simply request callback and our team will
                        get back
                        to you as soon as possible</p>
                    <a href="" class="btn btn-lg btn-primary m-0 fw-400">Request Callback</a>
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
    </script>
    {{-- callback form ends --}}
    @include('layouts.ck-footer')
@endsection
