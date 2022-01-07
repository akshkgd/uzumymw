@extends('layouts.app')

@section('content')
{{-- <div class="alert bg-primary-alt text-primary m-0 text-center fw-400 ck-font" role="alert" style="border-radius:0">
    New masterclasses has been launched 🥳 <a href="{{url('/event')}}" class="alert-link">Check Now</a>. Limited seats available.
  </div> --}}
    <div class="navbar-container">
        <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
            @include('layouts.header')
        </nav>

    </div>

    <div class="container">
        @include('layouts.alert')
    </div>

    {{-- <section class="has-divide mt-5 m-0 p-0">
        <div class="container pb-0">
          <div class="row align-items-center justify-content-between o-hidden">
            <div class="col-lg-5 order-sm-2 mb-5 mb-sm-0" data-aos="fade-left">
              <img src="{{ asset('assets/img/IN_HERO_C.png') }}" alt="Image">
            </div>
            <div class="col-lg-7 pr-xl-5 order-sm-1">
                <h1 class="display-4 ck-font">Improve your coding skills with live classes</h1>
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
      <section class="pt-0 pt-md-0 pt-lg-0 pt-xlg-0 ">
        <div class="container mt-2">
            
           <div class="row justify-content-center text-center">
            <div class="col-lg-4 col-md-4 mt-md-2 hidden-s">
                <img src="{{asset('assets/img/girl.png')}}" alt="" class="img-fluid rounded">
                
    
            </div>
        </div>
          <div class="row justify-content-center text-center">
            <div class="col-xl-8 col-lg-9 col-md-10">
              <h1 class="display-4 ck-font t-5 pt-0">Improve your coding skills with live coding classes</h1>
              <p class="lead px-0 px-xlg-4 px-lg-4 px-md-5 ">There are 72M students learning to code around the world. We try to make learning more
                accessible, equitable & more seamless for them.</p>
              {{-- <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center align-items-sm-start mt-5"> --}}
                {{-- <div class="d-flex flex-column mx-1 text-center"> --}}
                  
                 
                {{-- </div> --}}
                <a href="#" type="button" data-toggle="modal" data-target="#sign-in-modal" class="mx-1 fw-400 m-1 btn btn-lg btn-primary-3 btn-sm-block ">Book Free Masterclass</a>
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
                                            <p class="lea m-0 text-dark">Timing: {{ Carbon\Carbon::parse($batch->nextClass)->format('h:i A') }}
                                                {{ Carbon\Carbon::parse($batch->startDate)->format('D, d M Y') }}</p>
                                            <p class="lad m-0 text-dark">Schedule: {{$batch->schedule}}</p>

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
                    <img src="{{asset('assets/img/hand-with-mic.svg')}}" alt="" class="avatar-lg">
                    <h2 class="display-5 mx-xl-8 ">Students love Codekaro</h2>
                    <p class="lead">
                        Here's what {{$users}}+ satisfied students have to say about learning with codekaro.
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
                            <img src="{{ asset('assets/img/testimonials/bhanu-397d99374e67f29c99c907f25fe8e1bb6d8c8bdfbf3b78c780daddb3686941ef.png.gz') }}"
                                alt="Avatar" class="avatar">
                            <div class="ml-2">
                                <h6>Bhanu Pratap Singh Rathore</h6>
                                <span>Student</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- live courses --}}
    @if ($batches->count() > 0)
        <section data-reading-position class="d-none">
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
                        @foreach ($courses as $batch)
                        
                        <div class=" col-md-6 col-lg-4 d-flex ">
                            <a class="card hover-shadow-sm border-none shadow-lg shadow-3d"
                                href="{{ action('WorkshopController@details', $batch->id) }}">
                                <div class="flex-grow-1">
                                <img src="{{ asset('storage/'.$batch->img) }}" loading="lazy" alt="Image"
                                    class="card-img-top">
                                <div class="card-bod d-flex flex-column">
                                    <div class=" p-2">
                                        <h4 class="mb-0 ck-font fw-400">{{$batch->name}} </h1>
                                            <p class="lea m-0 text-dark">Timing: {{ Carbon\Carbon::parse($batch->nextClass)->format('h:i A') }}
                                                {{ Carbon\Carbon::parse($batch->startDate)->format('D, d M Y') }}</p>
                                            <p class="lad m-0 text-dark">Schedule: {{$batch->schedule}}</p>

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
    <!-- login modal -->
    <div class="modal fad border-none" id="sign-in-modal" tabindex="-1" role="dialog" aria-hidden="true">
    {{-- <div class="modal" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> --}}
        <div class="modal-dialog modal-dialog-masterclass modal-dialog-centered border-none" role="document">
            <div class="modal-content border-none rounded-5 shadow">
              <div class="modal-header pt-3 px-3 pb-4 border-bottom-0">
                <h4 class="fw-bol mb-0 fw-400 ">Book your free masterclass</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img class="icon bg-dark" src="assets/img/icons/interface/cross.svg" alt="cross interface icon" data-inject-svg />
                  </button>
              </div>
        
              <div class="modal-body px-3 pt-0">
                {{-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nemo non corrupti id, minus maiores quos beatae nobis voluptatum eum?</p> --}}
                @foreach ($batches as $batch)
                <button class="w-100 mb-3 btn btn-lg rounded-5 hover-grey border-gradient" type="submit" style="  text-align:left">
                   
                        <div data-target="#panel-{{$batch->id}}" class="accordion-panel-titl" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="panel-1">
                            <h4 class="m-0">{{$batch->name}}</h4> 
                            <p class="fw-400 small-1 m-0">From <strong>{{$batch->startDate->format('D, d M')}}</strong>  {{$batch->schedule}}</p>
                        </div>
                        <div class="collapse modal-small" id="panel-{{$batch->id}}">
                            <div class="">
                                <p class="fw-400 mt-2">{{$batch->description}}</p>
                                <div class="my-2">
                                    <p class="badge badge-pill badge-ck-danger text-danger small my-2 px-2 py-1 fw-400 d-inline rounded-pill">Only 5 Seats Left</p>

                                </div>
                            {{-- <h6 class="m-0">
                                Thu, 30 Dec 06:30 PM
                                </h6>
                                <p class="ck-font fw-400 text-dark m-0">Schedule: 06:30 to 07:30 PM</p>
                            </h5> --}}


                            

                            <div>
                                <p class="m-0 fw-400 text-dark">✔️ LinkedIn sharable Certificate</p>
                                <p class="m-0 fw-400 text-dark">✔️ Lifetime Access to projects</p>
                                <p class="m-0 fw-400 text-dark">✔️ Assignments for practice</p>
                            </div>

                            <a href="{{ action('WorkshopEnrollmentController@checkEnroll', $batch->id) }}"
                                class="btn text-white fw-400 a19di23v mt-2" style="border:1px solid; border-radius:8px; text:dark; ">Enroll now for free</a>
                            </div>
                        </div>
                </button>
                @endforeach
                
                 <div class="text-center">
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
                 </div>
                 
              </div>
            </div>
          </div>
          </div>
    
          
          <!-- register modal ends -->

@endsection
