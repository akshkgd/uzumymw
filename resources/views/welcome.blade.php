@extends('layouts.ck')
<style>
  .ck-btn{
        
        background-image: linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));
        border: 1px solid transparent;
        border:none;
        color: white;
        padding: 12px 46px !important;
        font-weight:400;
        display: inline-block;
        cursor: pointer;
        font-size: 16px;
        border-radius: 100px;
        box-shadow: rgb(247 123 155 / 71%) 0px 3px 16px 0px;
    }
</style>
@section('content')
    {{-- <div class="alert bg-primary-alt text-primary m-0 text-center fw-400 ck-font" role="alert" style="border-radius:0">
    New masterclasses has been launched 🥳 <a href="{{url('/event')}}" class="alert-link">Check Now</a>. Limited seats available.
  </div> --}}
    
    @include('layouts.ck-header')
    <div class="container">
        @include('layouts.alert')
    </div>

    
    <section class="pt-0 pt-md-0 pt-lg-0 pt-xlg-0 ">
        <div class="container mt-0 pt-lg-5 hero">
            <div class="row justify-content-center ">
              <div class="col-md-6 col-lg-4 mt-5 mt-lg-0 text-center">
                <img src="{{asset('assets/img/girl.png')}}" class="hero-img" alt="">
              </div>
            </div>
            <div class="row justify-content-center ">
              <div class="col-lg-8 text-center">
                <div class="">
                  <!-- fw-700 fw-sm-ligh ck-mt-sm-5 -->
                  <h1 class="display-5 fw-bolder mt-2">Improve your coding skills with  <span class="highlighter- wd_highlight1">live Coding classes</span> 
                </h1>
                <p class="fs-5">
                  There are 72M students learning to code around the world. We try to
                  make learning more accessible, equitable and more seamless for them.
                </p>
                <a href="{{url('/event')}}" class="btn ck-bt btn-dark btn-lg rounded-pil fw-light px-4 fs-5 text-capitali text-white">Start learning for free</a>
                
      
              </div>
              
    </section>



    {{-- live courses --}}
    @if ($batches->count() > 0)
    <section>
        <div class="">
          
                   <div class="container">
                    <div class="row justify-content-center pt-5 mt-lg-5">
                      <div class="col-lg-8 text-center">
                        <h1 class="fs-1 fw-700">Learn what fascinates you for free</h2>
                            <p class="fs-5">Here's what some of our 407 satisfied students have to say about learning with codekaro.</p>
                      </div>
                    </div>


                    <div class="row my-5 justify-content-center">
                    {{-- <div class="controls-light a mb-6" data-flickity='{ "autoPlay": true, "imagesLoaded": true, "wrapAround": true }'> --}}
                    @foreach ($batches as $batch)

                        <div class=" col-md-6 col-lg-4 d-flex mb-3">
                            @if ($batch->topicId == 1)
                                <a class="card hover-shadow-sm border-none shadow shadow-3d"
                                    href="{{ url('web-development-live-masterclass') }}">
                                @elseif($batch->topicId == 2)
                                    <a class="card hover-shadow-sm border-none shadow shadow-3d"
                                        href="{{ url('python-masterclass') }}">
                                @else
                                <a class="card hover-shadow-sm border-none shadow-lg shadow-3d"
                                href="{{ action('WorkshopController@details', $batch->id) }}">
                            @endif
                            <div class="flex-grow-1">
                                @if($batch->topicId == 1)
                                    <img src="{{ asset('assets/img/wd-masterclass.png') }}" class="card-img-top course-card" alt="" >
                                @elseif($batch->topicId == 2)
                                    <img src="{{ asset('assets/img/ml masterclass.png') }}" class="card-img-top course-card" alt="" >
                                @else
                                <img src="{{ asset('storage/'.$batch->img) }}" loading="lazy" alt="Image"
                                    class="card-img-top" >
                                @endif
                                <div class="card-bod d-flex flex-column">
                                    <div class=" p-3 text-cente">
                                        <h5 class="my-2 fs-5">{{ $batch->name }} </h1>
                                            {{-- <p class="smal text-muted">{{$batch->description}}</p> --}}
                                            <p class="lea m-0 text-dark fw-500"> From
                                                    {{ Carbon\Carbon::parse($batch->startDate)->format('D, d M') }}
                                                 <span class="text-muted">at
                                                    {{ Carbon\Carbon::parse($batch->nextClass)->format('h:i A') }}</span>
                                            </p>

                                            <p class="lad m-0 text-dark">Schedule: {{ $batch->schedule }}</p>

                                    </div>
                                </div>
                                
                            </div>
                            {{-- <div class="d-flex flex-wrap align-items-center">
                                <span class="badge badge-pill badge-ck-primary fw-400 m-1">Live Session</span>
                                <span class="badge badge-pill badge-ck-success fw-400 m-1">Free</span>
                            </div> --}}
                            </a>
                        </div>


                    @endforeach


                </div>

            </div>
            </div>
            </div> 
        </section>
    @endif

    {{-- live courses ends --}}

    <section class="my-5 fb-s">
        <div class="container pt-lg-5 mt-lg-5">
          <div class="text-center">
            <img src="{{ asset('assets/img/hand-with-mic.svg') }}" alt="">
          <h1 class=" fw-bolder">Students Love Codekaro</h1>
          <p class="fs-5 mb-5">Here's what 30000+ satisfied students have to say about learning with codekaro.</p>
          </div>
          <div class="row" data-masonry='{"percentPosition": true }'>
            <div class="col-md-4 my-3">
              <div class="card p-3 ">
                <p class="fs-5">“A lot of advanced web dev topics taught at codekaro taught by ashish sir gave me an edge over my peers, and I ultimately absorbed more here than I ever did anywhere else.”</p>
                <div class="d-flex">
                  <img src="{{asset('assets/img/testimonials/abhishek-24f7f7604ee082202491761ff6cff18e29d347aae7276c8fe7e62cb627e2122b (1).png.gz')}}" class="avatar" alt="">
                  <div class=" m-2">
                    <p class="m-0 text-dark ">Abhishek Bajpayee</h4>
                    <p class="m-0 small">Student</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-3">
              <div class="card p-3 ">
                <p class="fs-5">“ <span class="highlight">It was great learnig with codekaro</span>  It helped in gaining enough experience to get my internship”</p>
                <div class="d-flex">
                  <img src="{{asset('assets/img/testimonials/bhanu-397d99374e67f29c99c907f25fe8e1bb6d8c8bdfbf3b78c780daddb3686941ef.png.gz')}}" class="avatar" alt="">
                  <div class=" m-2">
                    <p class="m-0 text-dark ">Bhanu Pratap Singh Rathore</h4>
                    <p class="m-0 small">Student</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-3">
              <div class="card p-3 ">
                <p class="fs-5">“The course is well designed and assignments are quite exciting. It has all the levels of problems beginning from easy to hard, evenly distributed to motivate you. <span class="highlight"> I would say that it was the best decision to choose an online course at Codekaro”</span></p>
                <div class="d-flex">
                  <img src="{{asset('assets/img/testimonials/vipul-f0eb1acf0da84c06a50c5b2c59932001997786b176dec02bd16128ee9ea83628.png.gz')}}" class="avatar" alt="">
                  <div class=" m-2">
                    <p class="m-0 text-dark ">Vipul Reddy</h4>
                    <p class="m-0 small">Student</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-3">
              <div class="card p-3 ">
                <p class="fs-5">“I have completed two courses with Codekaro. The faculty were awesome and highlighted every important aspect of the course and the subject in general. Their focus was to solve all my doubts so that I can level up my coding journey.”</p>
                <div class="d-flex">
                  <img src="{{asset('assets/img/testimonials/akash-8c2b93c2a5a0a162722e7069c3621141c3a841c552d21bc9b816cbc9f1b2805b.png.gz')}}" class="avatar" alt="">
                  <div class=" m-2">
                    <p class="m-0 text-dark ">Akash Sharma</h4>
                    <p class="m-0 small">Student</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-3">
              <div class="card p-3 ">
                <p class="fs-5">“The course is very well organized.And as a front-end developer, I am much confident now.”</p>
                <div class="d-flex">
                  <img src="{{asset('assets/img/testimonials/saurav-fbdcb7c4b535897b2592239ffe21b4902b806bcf3f3e33493309d6736afa91a5.png.gz')}}" class="avatar" alt="">
                  <div class=" m-2">
                    <p class="m-0 text-dark ">Saurav Gupta</h4>
                    <p class="m-0 small">Student</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-3">
              <div class="card p-3 ">
                <p class="fs-5">“Python course was well designed, easy to learn even if you are new to coding. Great value for money.”</p>
                <div class="d-flex">
                  <img src="{{asset('assets/img/testimonials/vinay-aa12f1085fdd2dce4ad078f978b3535e82ea7eecedc6809a344503459f106470 (1).png.gz')}}" class="avatar" alt="">
                  <div class=" m-2">
                    <p class="m-0 text-dark ">Vinay Prajapati</h4>
                    <p class="m-0 small">Student</p>
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
                                    <img src="{{ asset('storage/' . $batch->img) }}" loading="lazy" alt="Image"
                                        class="card-img-top">
                                    <div class="card-bod d-flex flex-column">
                                        <div class=" p-2">
                                            <h4 class="mb-0 ck-font fw-400">{{ $batch->name }} </h1>
                                                <p class="lea m-0 text-dark">Timing:
                                                    {{ Carbon\Carbon::parse($batch->nextClass)->format('h:i A') }}
                                                    {{ Carbon\Carbon::parse($batch->startDate)->format('D, d M Y') }}</p>
                                                <p class="lad m-0 text-dark">Schedule: {{ $batch->schedule }}</p>

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

    <section>
        <div class="container my-5">
          <div class="row justify-content-center">
            <div class="col-sm-3">
              <img src="{{asset('assets/img/gift.svg')}}" class="img-fluid hidden-sm" alt="">
            </div>
            </div>
  
            <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h1 class="fw-bolder">Book your <span class="wd_highlight1">free masterclass </span>now</h1>
              <p class="fs-5">More than 19000 students have attended our Masterclasses and loved them.</p>
              
              <button  class="btn btn-primary px-4 rounded-pill text-uppercas my-5 btn-lg fw-light" data-bs-toggle="modal" data-bs-target="#masterclass">Book free masterclass</a>
              <!-- <img src="./img/discord.svg" px- alt="" class="img-fluid mt-5"> -->
            </div>
          </div>
        </div>
      </section>



    <!-- Include stylesheet -->
    <!-- login modal -->
    <div class="modal fad border-none" id="sign-in-modal" tabindex="-1" role="dialog" aria-hidden="true">
        {{-- <div class="modal" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> --}}
        <div class="modal-dialog modal-dialog-masterclass modal-dialog-centered border-none" role="document">
            <div class="modal-content border-none rounded-5 shadow">
                <div class="modal-header pt-3 px-3 pb-4 border-bottom-0">
                    <h4 class="fw-bol mb-0 fw-400 "> Book your free masterclass</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img class="icon bg-dark" src="assets/img/icons/interface/cross.svg" alt="cross interface icon"
                            data-inject-svg />
                    </button>
                </div>

                <div class="modal-body px-3 pt-0">
                    {{-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nemo non corrupti id, minus maiores quos beatae nobis voluptatum eum?</p> --}}
                    @foreach ($batches as $batch)
                        <button class="w-100 mb-3 btn btn-lg rounded-5 hover-grey border-gradient" type="submit"
                            style="  text-align:left">

                            <div data-target="#panel-{{ $batch->id }}" class="accordion-panel-titl"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                                <div class="d-flex justify-content-between">
                                <h5 class="m-0 ck-fon fw-40 text-dark">{{ $batch->name }}</h5>

                                    <div class="my-0">
                                        <p
                                            class="badge badge-pill badge-ck-danger text-danger small my-2 px-2 py-1 fw-400 d-inline rounded-pill">
                                            5 Seats Left</p>

                                    </div>
                                </div>
                                <p class="fw-400 small-1 m-0">From
                                    <strong>{{ Carbon\Carbon::parse($batch->startDate)->format('D, d M Y') }}</strong>
                                    {{ $batch->schedule }}</p>
                            </div>
                            <div class="collapse modal-small" id="panel-{{ $batch->id }}">
                                <div class="">
                                    <p class="fw-400 mt-2">{{ $batch->description }}</p>
                                     <ul>
                                        <li class="m-0 fw-400 text-dark">LinkedIn sharable Certificate</li>
                                        <li class="m-0 fw-400 text-dark">Lifetime Access to projects</li>
                                        <li class="m-0 fw-400 text-dark">Assignments for practice</li>
                                    </ul>

                                    <a href="{{ action('WorkshopEnrollmentController@checkEnroll', $batch->id) }}"
                                        class="btn btn-dark mt-2 fw-400 "
                                        style="border:1px solid; border-radius:8px; text:dark; ">Enroll now for free</a>
                                </div>
                            </div>
                        </button>
                    @endforeach

                    <div class="text-center">
                        <p>More than 9000 students have attended our Masterclasses and loved them. Join now and start learning!</p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    @include('layouts.ck-footer')

@endsection
