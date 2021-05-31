@extends('layouts.app')

@section('content')
    <div class="navbar-container">
        <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
            @include('layouts.header')
        </nav>

    </div>

    <div class="container">
        @include('layouts.alert')
    </div>

    {{-- <section class="has-divider m-0 p-0">
        <div class="container pb-0">
          <div class="row align-items-center justify-content-between o-hidden">
            <div class="col-lg-6 order-sm-2 mb-5 mb-sm-0" data-aos="fade-left">
              <img src="{{ asset('assets/img/workspace-illustration.png') }}" alt="Image">
            </div>
            <div class="col-lg-6 pr-xl-5 order-sm-1">
                <h1 class="display-4 ck-font">Improve your coding skills with live coding classes</h1>
                <p class="lead ">There are 72M students learning to code around the
                    world. We try to make learning more
                    accessible, equitable and more seamless for them.</p>
                <a href="#" class="mx-1 fw-400 m-1 btn btn-lg btn-primary-3 btn-sm-block ">Continue with google</a>
                <a href="#" class="mx-1 fw-400 m-1 btn btn-lg btn-outline-primary-3 btn-sm-block ">Explore
                    Courses</a>
            </div>
          </div>
        </div>
        
      </section> --}}
      <section class="pt-0 pt-md-0 pt-lg-0 pt-xlg-0 mt-1 ">
        <div class="container mt-5">
            
           <div class="row justify-content-center text-center">
            <div class="col-lg-4 col-md-4 mt-md-2 hidden-s">
                <img src="{{asset('assets/img/forgot-your-password@2x.png')}}" alt="" class="img-fluid rounded">
                
    
            </div>
        </div>
          <div class="row justify-content-center text-center ">
            <div class="col-xl-8 col-lg-9 col-md-10">
              <h1 class="display-4 ck-font">Improve your coding skills with live coding classes</h1>
              <p class="lead px-0 px-xlg-5 px-lg-5 px-md-5">There are 72M students learning to code around the world. We try to make learning more
                accessible, equitable and more seamless for them.</p>
              {{-- <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center align-items-sm-start mt-5"> --}}
                {{-- <div class="d-flex flex-column mx-1 text-center"> --}}
                  
                 
                {{-- </div> --}}
                <a href="#" class="mx-1 fw-400 m-1 btn btn-lg btn-primary-3 btn-sm-block ">Continue with google</a>
                <a href="#" class="mx-1 fw-400 m-1 btn btn-lg btn-outline-primary-3 btn-sm-block ">Explore Courses</a>
              </div>
            </div>
           
          </div>
          
          
        </div>
      </section> 
    


    {{-- live courses --}}
    @if ($batches->count() > 0)
        <section data-reading-position>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 text-center mb-3">
                        <h2 class="display-5 mx-xl-8 ">Learn what fascinates you for free</h2>
                        <p class="lead">
                            Here's what some of our 407 satisfied students have to say about learning with codekaro.
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">



                    {{-- <div class="controls-light a mb-6" data-flickity='{ "autoPlay": true, "imagesLoaded": true, "wrapAround": true }'> --}}
                        @foreach ($batches as $batch)
                        
                        <div class=" col-md-6 col-lg-4 d-flex ">
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
                                        <span class="badge badge-pill badge-ck-primary  m-1">Live Session</span>
                                        <span class="badge badge-pill badge-ck-success  m-1">Free</span>
                                    </div>
                            </a>
                        </div>

                        
                    @endforeach


                </div>

            </div>
            </div>
            </div>

            </div>
        </section>
    @endif

    {{-- live courses ends --}}


    <section class=mt-0">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-xl-8 col-lg-9 text-center">
                    <h2 class="display-5 mx-xl-8 ">Students love Codekaro</h2>
                    <p class="lead">
                        Here's what some of our 407 satisfied students have to say about learning with codekaro.
                    </p>
                </div>
            </div>
            <div class="row" data-isotope-collection data-ignore-hash="true">
                <div class="col-sm-6 col-lg-4" data-isotope-item>
                    <div class="card card-body">
                        <div class="flex-grow-1 mb-3">
                            <p class="lead">
                                &ldquo;A lot of <span class="highlight"> advanced web dev topics taught at codekaro</span>
                                taught by ashish sir gave me an edge over my peers, and I ultimately absorbed more here than
                                I ever did anywhere else.</span>&rdquo;
                            </p>
                        </div>
                        <div class="avatar-author align-items-center">
                            <img src="{{ asset('assets/img/testimonials/abhishek-24f7f7604ee082202491761ff6cff18e29d347aae7276c8fe7e62cb627e2122b.png.gz') }}"
                                alt="Avatar" class="avatar">
                            <div class="ml-2">
                                <h6>Abhishek Bajpayee</h6>
                                <span>Student</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4" data-isotope-item>
                    <div class="card card-body">
                        <div class="flex-grow-1 mb-3">
                            <p class="lead">
                                &ldquo;Python course was well designed,<span class="highlight"> easy to learn
                                    even if you are new to coding.</span>
                                Great value for money.&rdquo;
                            </p>
                        </div>
                        <div class="avatar-author align-items-center">
                            <img src="{{ asset('assets/img/testimonials/vinay-aa12f1085fdd2dce4ad078f978b3535e82ea7eecedc6809a344503459f106470 (1).png.gz') }}"
                                alt="Avatar" class="avatar">
                            <div class="ml-2">
                                <h6>Vinay Prajapati</h6>
                                <span>Student</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4" data-isotope-item>
                    <div class="card card-body">
                        <div class="flex-grow-1 mb-3">
                            <p class="lead">
                                The course is well designed and assignments are quite exciting. It has all the levels of
                                problems beginning from easy to hard, evenly distributed to motivate you. I would say that
                                it was the best decision to choose an online course at Codekaro
                            </p>
                        </div>
                        <div class="avatar-author align-items-center">
                            <img src="{{ asset('assets/img/testimonials/vipul-f0eb1acf0da84c06a50c5b2c59932001997786b176dec02bd16128ee9ea83628.png.gz') }}"
                                alt="Avatar" class="avatar">
                            <div class="ml-2">
                                <h6>Vipul reddy</h6>
                                <span>Student</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4" data-isotope-item>
                    <div class="card card-body">
                        <div class="flex-grow-1 mb-3">
                            <p class="lead">
                                &ldquo;The
                                <span class='highlight'>course is very well organized.</span>And as a front-end developer, I
                                am much confident now.&rdquo;
                            </p>
                        </div>
                        <div class="avatar-author align-items-center">
                            <img src="{{ asset('assets/img/testimonials/saurav-fbdcb7c4b535897b2592239ffe21b4902b806bcf3f3e33493309d6736afa91a5.png.gz') }}"
                                alt="Avatar" class="avatar">
                            <div class="ml-2">
                                <h6>Saurav Gupta</h6>
                                <span>Student</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4" data-isotope-item>
                    <div class="card card-body">
                        <div class="flex-grow-1 mb-3">
                            <p class="lead">
                                &ldquo;I have completed two courses with Codekaro. <span class='highlight'>The faculty were
                                    awesome and highlighted every important aspect of the course </span> and the subject in
                                general. Their focus was to solve all my doubts so that I can level up my coding
                                journey.</span>&rdquo;
                            </p>
                        </div>
                        <div class="avatar-author align-items-center">
                            <img src="{{ asset('assets/img/testimonials/akash-8c2b93c2a5a0a162722e7069c3621141c3a841c552d21bc9b816cbc9f1b2805b.png.gz') }}"
                                alt="Avatar" class="avatar">
                            <div class="ml-2">
                                <h6>Akash Sharma</h6>
                                <span>Student</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4" data-isotope-item>
                    <div class="card card-body">
                        <div class="flex-grow-1 mb-3">
                            <p class="lead">
                                &ldquo;It was
                                <span class="highlight">great learnig with codekaro</span> It helped in gaining enough
                                experience to get my internship&rdquo;
                            </p>
                        </div>
                        <div class="avatar-author align-items-center">
                            <img src="{{ asset('assets/img/testimonials/mayank-b145ab03c6d8449bf7a532c6209577454941eb924d9cfc4b1b00a6ac1a784101.png.gz') }}"
                                alt="Avatar" class="avatar">
                            <div class="ml-2">
                                <h6>Mayank Sisode</h6>
                                <span>Student</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row justify-content-center text-center ">
            <div class="col-xl-8 col-lg-9 col-md-10">


                <h1 class="display-5">Join our Community of Coders</h1>
                <p class="lead ">There are 72M students learning to code around the world. We try to make
                    learning more
                    accessible, equitable and more seamless for them.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-5">
                    {{-- <h1 class="display-5 mb-0 pb-0">Join our Community</h1> --}}
                    <p class="pt-0 mt-0">500+ online students</p>
                    <a href="#" class="btn btn-primary">Join Now</a>
                </div>

                <img src="assets/img/discord.svg" alt="" class="img-fluid" loading="lazy" style="margin-bottom: -2px;">

            </div>
        </div>
    </div>
    @include('layouts.footer')



    <!-- Include stylesheet -->

@endsection
