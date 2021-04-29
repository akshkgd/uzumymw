@extends('layouts.app')
@section('content')
<div class="navbar-container ">
  <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
    @include('layouts.header')
  </nav>
</div>



<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5  ">
        <div class="text-center">
          <img src="{{asset('assets/img/instructor.jpeg')}}" alt="" class="img-fluid">
        </div>
        
      </div>
    </div>
    <div class="row pt-5 justify-content-center">
      <div class="col-xl-9 col-lg-9">
        <div class="d-fle align-content-center text-center">
          <h1 class="text-secondar display-5 ck-font">Committed to significantly improve the coding skills of as many students as possible.</h1>
        
          {{-- <p class=" pt-2 pt-md-0 lead">There are 72M students learning to code around the world. We try to make learning more accessible, equitable and more seamless for them. --}}
            
            <p class="lead">Scrimba is the next-generation platform for learning how to code. Our screencasts enable you to interact with the code directly in the player. This way, you'll have more fun and learn faster.

              Our courses cover subjects like HTML, CSS, JavaScript, React, Vue, and more. They're all made with the goal of advancing your career. So pick a course and give your career a boost!</p>

              <p class="lead">Our goal is to create the best possible coding school at the lowest possible cost for students. If we succeed with this, it’ll give anyone who wants to become a software developer a realistic shot at succeeding. Regardless of where they live and the size of their wallets.

                “To achieve this, we’ve created a new video format for code screencasts. We call it “scrims”.
                This format is the backbone of our school. Not only because it results in a superior learning experience. But also because it enables us to iterate more quickly, to attract better teachers, to facilitate better peer-learning, to keep server costs low, and much more.</p>
                <p class=" pt-3" style="font-size:20px">Ashish Shukla, Founder & C.E.O.</p>
              </div>
        
        </p>
      </div>
      
      
        
      
      
    </div>
  </div>
</section>

<section class="pt-0">
  <div class="container">
    <div class="row mb-4">
    </div>
    <div class="row justify-content-center">
      <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
        <span class="display-4 text-success d-block" data-countup data-start="4567" data-end="73000" data-duration="3" data-grouping="true"></span>
        <span class="h6">Monthly Active Users</span>
      </div>
      <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
        <span class="display-4 text-success d-block" data-countup data-start="1" data-end="25" data-duration="3" data-grouping="true"></span>
        <span class="h6">Team Members</span>
      </div>
      <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
        <span class="display-4 text-success d-block" data-countup data-start="1" data-end="5069" data-duration="3" data-grouping="true"></span>
        <span class="h6">User Projects Published</span>
      </div>
      <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
        <span class="display-4 text-success d-block" data-countup data-start="1" data-end="99.9" data-decimal-places="1" data-duration="3" data-grouping="true" data-suffix="%"></span>
        <span class="h6">Server Uptime</span>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-xl-8 text-center">
        <div class="row">
        <div class="col-md-3">
          <img src="{{asset('assets/img/mask.svg')}}" alt="" class="avatar avatar-lg">
          <h4 class="pt-2 mb-0" style="font-weight: 400;">Ashish Shukla</h4>
          <p>Founder & CEO</p>
        </div>
        <div class="col-md-3">
          <img src="{{asset('assets/img/mask.svg')}}" alt="" class="avatar avatar-lg">
          <h4 class="pt-2 mb-0" style="font-weight: 400;">Ashish Shukla</h4>
          <p>Founder & CEO</p>
        </div>
        <div class="col-md-3">
          <img src="{{asset('assets/img/mask.svg')}}" alt="" class="avatar avatar-lg">
          <h4 class="pt-2 mb-0" style="font-weight: 400;">Ashish Shukla</h4>
          <p>Founder & CEO</p>
        </div>
        <div class="col-md-3">
          <img src="{{asset('assets/img/mask.svg')}}" alt="" class="avatar avatar-lg">
          <h4 class="pt-2 mb-0" style="font-weight: 400;">Ashish Shukla</h4>
          <p>Founder & CEO</p>
        </div>
      </div>
    </div>
  </div>
</section>

    @endsection
