@extends('layouts.app')
@section('content')
<div class="navbar-container ">
  <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
    @include('layouts.header')
  </nav>
</div>

<style>
  .a-banner{
    /* background-image: url('/assets/img/a-banner.jpeg'); */
    /* height:400px;
    background-size: cover; */
    /* padding-top: 200px; */
  }
</style>

<section>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
      
        
          <h1 class="text-secondar display-4 ck-font ">Committed to significantly improve the coding skills of as many students as possible.</h1>
          
        
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <img src="{{asset('assets/img/a-banner.jpeg')}}" alt="">
        </div>
      </div>
      
    </div>
    <div class="row justify-content-center pt-5">
      <div class="col-xl-9 col-lg-9">
        <div class="d-fle align-content-center">
          <p class="lead">Codekaro is the next-generation platform for learning how to code. Our screencasts enable you to interact with the code directly in the player. This way, you'll have more fun and learn faster.

            Our courses cover subjects like HTML, CSS, JavaScript, React, Python, Machine Learning,  Vue, and more. They're all made with the goal of advancing your career. So pick a course and give your career a boost!</p>

            <p class="lead">Our goal is to create the best possible coding school at the lowest possible cost for students. If we succeed with this, it’ll give anyone who wants to become a software developer a realistic shot at succeeding. Regardless of where they live and the size of their wallets.

              Live classes is the backbone of our school. Not only because it results in a superior learning experience. But also because it enables us to iterate more quickly, to attract better teachers, to facilitate better peer-learning, and much more.</p>
    
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
      <div class="col-6 mb-3 col-lg-3 mb-lg-0" >
        <span class="display-4 text-primary d-block" data-countup data-start="0" data-end="6300" data-duration="3" data-grouping="true"></span>
        <span class="h6">Monthly Active Students</span>
      </div>
      <div class="col-6 mb-3 col-lg-3 mb-lg-0" >
        <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="250" data-duration="3" data-grouping="true"></span>
        <span class="h6">Class Duration every month</span>
      </div>
      
      <div class="col-6 mb-3 col-lg-3 mb-lg-0" >
        <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="97.9" data-decimal-places="1" data-duration="3" data-grouping="true" data-suffix="%"></span>
        <span class="h6">Students Satisfied</span>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container d-no">
    <div class="row mb-5 justify-content-center">
      <div class="col-xl-8 col-lg-9 text-center">
          <h1 class="display-4 mx-xl-8 ">Meet the coders behind Codekaro</h2>
          {{-- <p class="lead">
              Here's what some of our 407 satisfied students have to say about learning with codekaro.
          </p> --}}
      </div>
  </div>
    <div class="row justify-content-center ">
      
        <div class="col-md-3 col-sm-4 text-center">
          <img src="{{asset('assets/img/team/ashish black.png')}}" alt="" class="avatar avatar-xlg">
          <h4 class="pt-2 mb-0" style="font-weight: 600;">Ashish Shukla</h4>
          {{-- <p>Founder & CEO</p> --}}
        </div>
        <div class="col-md-3 col-sm-4 text-center">
          <img src="{{asset('assets/img/team/circle-cropped.png')}}" alt="" class="avatar avatar-xlg">
          <h4 class="pt-2 mb-0" style="font-weight: 600;">Himanshu Srivastava</h4>
          {{-- <p>Founder & CEO</p> --}}
        </div>
        <div class="col-md-3 col-sm-4 text-center">
          <img src="{{asset('assets/img/team/arpit.jpeg')}}" alt="" class="avatar avatar-xlg">
          <h4 class="pt-2 mb-0" style="font-weight: 600;">Arpit Khare</h4>
          {{-- <p>Founder & CEO</p> --}}
        </div>
        <div class="col-md-3 col-sm-4 text-center">
          <img src="{{asset('assets/img/mask.svg')}}" alt="" class="avatar avatar-xlg">
          <h4 class="pt-2 mb-0" style="font-weight: 600;">Shreya Agarwal </h4>
          {{-- <p>Founder & CEO</p> --}}
        </div>
      </div>
    </div>
  </div>
</section>
@include('layouts.footer')
    @endsection
