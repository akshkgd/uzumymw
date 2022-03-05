@extends('layouts.ck')
@section('content')
    @include('layouts.ck-header')

    <style>
        .a-banner {
            background-image: url('/assets/img/a-banner.jpeg');
            height: 400px;
            background-size: cover;
            padding-top: 200px;
        }

        .user {
            height: 80px;
            width: 80px;
            border-radius: 50%;
            display: inline-block;
        }

    </style>

    <section>
        <div class="container ">
            <div class="row">

                <div class="row justify-content-center mt-5">
                    <div class="col-lg-10 text-cente">
                        <h1 class="text-secondar display fw-bold mt-5">Committed to significantly <span
                                class="wd_highlight">improve the coding skills</span> of as many students as possible.</h1>

                        <img src="{{ asset('assets/img/hero-banner-2.jpg') }}" alt="" class="img-fluid ck-rounded mt-5">
                    </div>
                </div>

            </div>
            <div class="row justify-content-center pt-5">
                <div class="col-lg-10">
                    <div class="d-fle align-content-center">
                        <p class="lead">Codekaro is the next-generation platform for learning how to code. Our
                            screencasts enable you to interact with the code directly in the player. This way, you'll have
                            more fun and learn faster.

                            Our courses cover subjects like HTML, CSS, JavaScript, React, Python, Machine Learning, Vue, and
                            more. They're all made with the goal of advancing your career. So pick a course and give your
                            career a boost!</p>

                        <p class="lead">Our goal is to create the best possible coding school at the lowest
                            possible cost for students. If we succeed with this, it’ll give anyone who wants to become a
                            software developer a realistic shot at succeeding. Regardless of where they live and the size of
                            their wallets.

                            Live classes is the backbone of our school. Not only because it results in a superior learning
                            experience. But also because it enables us to iterate more quickly, to attract better teachers,
                            to facilitate better peer-learning, and much more.</p>

                        <p class=" pt-3" style="font-size:20px">Ashish Shukla, Founder & CEO</p>
                    </div>

                    </p>
                </div>
                {{-- <div class="col-xl-2 col-lg-2 text-left p-5">
      </div>
      <div class="col-xl-5 col-lg-5 text-left">
        <img src="{{asset('assets/img/groups.png')}}" alt="" class="img-fluid">
      </div> --}}

            </div>
        </div>
    </section>

    <section class="pt-0 d-none">
        <div class="container">
            <div class="row mb-4">
            </div>
            <div class="row justify-content-center">
                <div class="col-6 mb-3 col-lg-3 mb-lg-0">
                    <span class="display-4 text-primary d-block" data-countup data-start="0" data-end="6300"
                        data-duration="3" data-grouping="true"></span>
                    <span class="h6">Monthly Active Students</span>
                </div>
                <div class="col-6 mb-3 col-lg-3 mb-lg-0">
                    <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="250"
                        data-duration="3" data-grouping="true"></span>
                    <span class="h6">Class Duration every month</span>
                </div>

                <div class="col-6 mb-3 col-lg-3 mb-lg-0">
                    <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="97.9"
                        data-decimal-places="1" data-duration="3" data-grouping="true" data-suffix="%"></span>
                    <span class="h6">Students Satisfied</span>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container d-no my-5 py-5">
            
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-10 text-cente">
                      <h2 class="fw-bold text-cente">Meet the Coders behind Codekaro</h2>
                        <div class="row">
                          <div class="col-6 col-md-3 my-4">
                              <div class="text-cente">
                                  <img src="{{ asset('assets/img/team/ashish.png') }}" class="use my-3 ck-rounded" height="140" alt="">
                                  <h2 class="fs-5 m-0">Ashish Shukla</h2>
                                  <p class="small mt-0 mb-2">Ex AOSPL, Lido Learning</p>
                                  <p class="">Founder</p>
                              </div>
                            </div>

                            <div class="col-6 col-md-3 my-4">
                              <div class="text-cente">
                                  <img src="{{ asset('assets/img/team/arpit.png') }}" class="use my-3 ck-rounded" height="140" alt="">
                                  <h2 class="fs-5 m-0">Arpit Khare</h2>
                                  <p class="small mt-0 mb-2">IIT Roorkee, NIT Jamshedpur</p>
                                  <p class="smal">Co-founder</p>
                              </div>
                            </div>

                            <div class="col-6 col-md-3 my-4">
                              <div class="text-cente">
                                  <img src="{{ asset('assets/img/team/sahil.png') }}" class="use my-3 ck-rounded" height="140" alt="">
                                  <h2 class="fs-5 m-0">Sahil Pocker</h2>
                                  <p class="small mt-0 mb-2">NIT Jamshedpur</p>
                                  <p class="smal">Instructor</p>
                              </div>
                            </div>
                            
                        </div>
                    </div>
                    
                  

                    
                </div>
        </div>
    </section>



    <div class="row justify-content-center d-none">

        <div class="col-md-3 col-sm-4 text-center">
            <img src="{{ asset('assets/img/team/ashish black.png') }}" alt="" class="avatar avatar-xlg">
            <h4 class="pt-2 mb-0" style="font-weight: 600;">Ashish Shukla</h4>
            {{-- <p>Founder & CEO</p> --}}
        </div>
        <div class="col-md-3 col-sm-4 text-center">
            <img src="{{ asset('assets/img/team/circle-cropped.png') }}" alt="" class="avatar avatar-xlg">
            <h4 class="pt-2 mb-0" style="font-weight: 600;">Himanshu Srivastava</h4>
            {{-- <p>Founder & CEO</p> --}}
        </div>
        <div class="col-md-3 col-sm-4 text-center">
            <img src="{{ asset('assets/img/team/arpit.jpeg') }}" alt="" class="avatar avatar-xlg">
            <h4 class="pt-2 mb-0" style="font-weight: 600;">Arpit Khare</h4>
            {{-- <p>Founder & CEO</p> --}}
        </div>
        <div class="col-md-3 col-sm-4 text-center">
            <img src="{{ asset('assets/img/mask.svg') }}" alt="" class="avatar avatar-xlg">
            <h4 class="pt-2 mb-0" style="font-weight: 600;">Shreya Agarwal </h4>
            {{-- <p>Founder & CEO</p> --}}
        </div>
    </div>
    </div>
    </div>
    </section>
    @include('layouts.ck-footer')
@endsection
