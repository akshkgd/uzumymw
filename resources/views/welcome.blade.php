@extends('layouts.app')

@section('content')
<div class="navbar-container">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white"  data-sticky="top" >
        @include('layouts.header')
    </nav>
    
</div>

<div class="container">
    @include('layouts.alert')
</div>

   {{-- <section class="has-divider ">
    <div class="container">
      <div class="row align-items-center justify-content-between o-hidden">
        <div class="col-md-4 order-sm-2 mb-5 mb-sm-0" data-aos="fade-left">
          <img src="{{asset('assets/img/test3.png')}}" alt="Image">
        </div>
        <div class="col-md-8 pr-xl-5 order-sm-1">
            <h1 class="display-4 ck-font">Get started on your adventure in coding </h1>
            <div class="my-4">
              <p class="lead">There are 72M students learning to code around the world. We try to make learning more
                  accessible, equitable and more seamless for them.</p>
            </div>
            
            <a href="#" class="btn btn-lg btn-primary">Get In Touch</a>
            <a href="#" class="btn btn-lg btn-outline-primary">Get In Touch</a>
        </div>
      </div>
    </div>
   
  </section>    --}}
 
   <section class="pt-5 pt-md-0 pt-lg-0 pt-xlg-0 mt-0 ">
    <div class="container">
        
        <div class="row justify-content-center text-center">
            <div class="col-lg-4 col-md-4 mt-md-2 hidden-sm">
                <img src="{{asset('assets/img/test3.png')}}" alt="" class="img-fluid">
                

            </div>
        </div>
      <div class="row justify-content-center text-center ">
        <div class="col-xl-8 col-lg-9 col-md-10">
          <h1 class="display-4 ck-font">Improve your coding skills with live coding classes</h1>
          <p class="lead">There are 72M students learning to code around the world. We try to make learning more
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
{{-- @if ($batches->count() >= 4 ) --}}
<section data-reading-position>
    <div class="container">
        <div class="text-center pb-1 mb-0">
            <h1 class="display-5" style="">Learn what fascinates you</h2>
            {{-- <a href="" class="text-success">Explore All</a> --}}
        </div>

                <div class="row justify-content-between">
                
                    
                        
                {{-- <div class="controls-light a mb-6" data-flickity='{ "autoPlay": true, "imagesLoaded": true, "wrapAround": true }'> --}}
                    @foreach ($batches as $batch)
                    
                    <div class=" col-md-6 col-lg-3 col-sm-6 ">
                        <a class="card hover-shadow-sm border-none shadow"
                            href="{{action('BatchController@details', $batch->id )}}">
                            <img src="/assets/img/course-python.jpeg"  loading="lazy" alt="Image" class="card-img-top">
                            <div class="card-bod d-flex flex-column">
                                <div class=" p-1">
                                    <h6 class="mb-0 lead">{{$batch->name}}
                                        </h4>
                                        <p class="">{{Carbon\Carbon::parse($batch->nextClass)->format('D, d M Y')}}</p>
                                        
                                </div>
                                <div class="d-flex flex-wrap align-items-center">
                                    <span class="badge badge-pill  badge-ck-primary  m-1" style="font-size: 1.3 rem;">Python</span>
                                    <span class="badge badge-pill bg-primary-3-alt m-1">Live Sessions</span>
                                  </div>
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
{{-- @endif --}}

{{-- live courses ends --}}


<section class= mt-0">
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
                            &ldquo;A lot of <span class="highlight"> advanced web dev topics taught at codekaro</span> taught by ashish sir  gave me an edge over my peers, and I ultimately absorbed more here than I ever did anywhere else.</span>&rdquo;
                        </p>
                    </div>
                    <div class="avatar-author align-items-center">
                        <img src="{{asset('assets/img/testimonials/abhishek-24f7f7604ee082202491761ff6cff18e29d347aae7276c8fe7e62cb627e2122b.png.gz')}}" alt="Avatar" class="avatar">
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
                        <img src="{{asset('assets/img/testimonials/vinay-aa12f1085fdd2dce4ad078f978b3535e82ea7eecedc6809a344503459f106470 (1).png.gz')}}" alt="Avatar" class="avatar">
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
                            The course is well designed and assignments are quite exciting. It has all the levels of problems beginning from easy to hard, evenly distributed to motivate you. I would say that it was the best decision to choose an online course at Codekaro
                        </p>
                    </div>
                    <div class="avatar-author align-items-center">
                        <img src="{{asset('assets/img/testimonials/vipul-f0eb1acf0da84c06a50c5b2c59932001997786b176dec02bd16128ee9ea83628.png.gz')}}" alt="Avatar" class="avatar">
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
                            <span class='highlight'>course is very well organized.</span>And as a front-end developer, I am much confident now.&rdquo;
                        </p>
                    </div>
                    <div class="avatar-author align-items-center">
                        <img src="{{asset('assets/img/testimonials/saurav-fbdcb7c4b535897b2592239ffe21b4902b806bcf3f3e33493309d6736afa91a5.png.gz')}}" alt="Avatar" class="avatar">
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
                            &ldquo;I have completed two courses with Codekaro. <span class='highlight'>The faculty were awesome and highlighted every important aspect of the course </span> and the subject in general. Their focus was to solve all my doubts so that I can level up my coding journey.</span>&rdquo;
                        </p>
                    </div>
                    <div class="avatar-author align-items-center">
                        <img src="{{asset('assets/img/testimonials/akash-8c2b93c2a5a0a162722e7069c3621141c3a841c552d21bc9b816cbc9f1b2805b.png.gz')}}" alt="Avatar" class="avatar">
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
                            <span class="highlight">great learnig with codekaro</span> It helped in gaining enough experience to get my internship&rdquo;
                        </p>
                    </div>
                    <div class="avatar-author align-items-center">
                        <img src="{{asset('assets/img/testimonials/mayank-b145ab03c6d8449bf7a532c6209577454941eb924d9cfc4b1b00a6ac1a784101.png.gz')}}" alt="Avatar" class="avatar">
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

            <img src="assets/img/discord.svg" alt="" class="img-fluid" loading="lazy"  style="margin-bottom: -2px;">

        </div>
    </div>
</div>
@include('layouts.footer')
<livewire:scripts />


<!-- Include stylesheet -->

@endsection