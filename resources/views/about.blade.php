@extends('layouts.app')
@section('title', 'About Codekaro')
@section('meta_keywords', 'About Codekaro')
@section('meta_description', 'Our goal is to create the best possible coding school at the lowest possible cost for students.')
@section('content')
<div class="navbar-container ">
  <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
    @include('layouts.header')
  </nav>
</div>



<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-9 col-lg-9  pt-5">
        <h1 class=" display-5 ck-font mb-3">Committed to significantly improve the coding skills of as many students as possible.</h1>
          
        <div class="text-center">
          <img src="{{asset('assets/img/ck_header.png')}}" alt="" class="img-fluid rounded-lg">
        </div>
        
      </div>
    </div>
    <div class="row pt-5 justify-content-center">
      <div class="col-xl-9 col-lg-9">
        <div class="d-fle align-content-center text-cente">
         
        
          {{-- <p class=" pt-2 pt-md-0 lead">There are 72M students learning to code around the world. We try to make learning more accessible, equitable and more seamless for them. --}}
            
            <p class="lead">Codekaro is the next-generation platform for learning how to code. Our screencasts enable you to interact with the code directly in the player. This way, you'll have more fun and learn faster.

              Our courses cover subjects like HTML, CSS, JavaScript, React, Python, Machine Learning,  Vue, and more. They're all made with the goal of advancing your career. So pick a course and give your career a boost!</p>

              <p class="lead">Our goal is to create the best possible coding school at the lowest possible cost for students. If we succeed with this, it’ll give anyone who wants to become a software developer a realistic shot at succeeding. Regardless of where they live and the size of their wallets.

                “To achieve this, we’ve created a new video format for code screencasts. We call it “scrims”.
                This format is the backbone of our school. Not only because it results in a superior learning experience. But also because it enables us to iterate more quickly, to attract better teachers, to facilitate better peer-learning, to keep server costs low, and much more.</p>
      
                {{-- <p class=" pt-3" style="font-size:20px">Ashish Shukla, Founder & CEO</p> --}}
              </div>
        
        </p>
      </div>
      
      
        
      
      
    </div>
  </div>
</section>


<section>
  <div class="container d-none">
    <div class="row mb-4 justify-content-between">
      <div class="col text-center">
        <h2 class="h1 ck-font">coders behind codekaro</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
        <img src="{{asset('assets/img/team/ashish black.png')}}" alt="Benjamin Cameron" class="avatar avatar-xlg mr-3">
        <div>
          <h5 class="mb-0">Ashish Shukla</h5>
          <a href="{{url('/ashish')}}" class="stretched-link">@ashish</a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="200">
        <img src="{{asset('assets/img/team/circle-cropped.png')}}" alt="Andrea Souzakis" class="avatar avatar-xlg mr-3">
        <div>
          <h5 class="mb-0">Himanshu Srivastava</h5>
          <a href="{{url('/himanshu')}}" class="stretched-link">@himanshu</a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('layouts.footer')
    @endsection
