@extends('layouts.app')
@section('content')
<div class="navbar-container ">
  <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
    @include('layouts.header')
  </nav>
</div>



<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-secondar display-4 ck-font">Committed to significantly improve the coding skills of as many students as possible.</h1>
        
      </div>
    </div>
    <div class="row pt-5">
      <div class="col-xl-5 col-lg-5">
        <div class="d-fle align-content-center">
          <p class=" pt-2 pt-md-0 lead">There are 72M students learning to code around the world. We try to make learning more accessible, equitable and more seamless for them.
            <p class=" pt-3" style="font-size:20px">Ashish Shukla, Founder & C.E.O.</p>
        </div>
        
        </p>
      </div>
      <div class="col-xl-2 col-lg-2 text-left p-5">
      </div>
      <div class="col-xl-5 col-lg-5 text-left">
        <img src="{{asset('/assets/img/about.svg')}}" alt="" class="img-fluid">
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
  <div class="container d-none">
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
