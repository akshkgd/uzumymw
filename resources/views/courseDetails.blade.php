@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<style>
li{
  margin-bottom: 3px;
}
</style>
@section('content')
<div class="navbar-container pb-5">
  <nav class="navbar navbar-expand-lg navbar-light border-bottom-0" data-overlay>
    @include('layouts.header')
  </nav>
</div>

<section>
  <div class="container pt-0 pt-lg-5 pt-xlg-5 pt-md-5 mt-5 ">
    <div class="row">
      <div class="col-md-7">
        <h1 class="display-5"> {{$batch->name}}</h1>
        <p>{{$batch->description}}</p>


        <div>
          <div class="car card-bod">
            {!! $batch->about !!}
          </div>

        </div>

        {{-- course content starts --}}
        <div class="card shadow-3d ">
          @foreach ($topics as $topic)
              
          
          <div class="border-bottom px-2 ">
            <div data-target="#abc{{$topic->id}}" class="accordion-panel-title pr-2" data-toggle="collapse" role="button"
              aria-expanded="false" aria-controls="panel-1">
              <span class="h6 m-0 ck-fon py-3  pl-2">{{$topic->title}}</span> 
             <span> <b></b> <img class="icon ml-1" style="height: 16px" src="{{asset('assets/img/icons/interface/plus.svg')}}" alt="plus interface icon"
                data-inject-svg /></span>
            </div>
            <div class="collapse" id="abc{{$topic->id}}">
              <div class="pt-0">
                <p class="mb-2 pl-2">
                  {!! str_replace("~" , "  <br /><i class='bi bi-file-earmark-text-fill'></i>", $topic->modules) !!}
                </p>
              </div>
            </div>
          </div>
          @endforeach
          <div class="py-2 px-3">
              <p class="lead m-0 p-0"> <li>7 Modules</li> </p>
          </div>
          
        </div> 
        {{-- course content ends --}}

        <div class="card card-bod">
          <div class="bg-primary-3-alt rounded p-2">
            <h5>About Mentors</h3>
              <div class=" d-flex align-items-center mb-2">
                <img src="{{$batch->teacher->avatar}}" alt="Benjamin Cameron"
                  class="avatar avatar-lg mr-3">
                <div>
                  <h6 class="mb-0">{{$batch->teacher->name}}
            </h5>
            <a href="#" class="text-muted">{{$batch->teacher->name}}</a>
          </div>

        </div>
        <p class="pt-0 mt-0">{{$batch->teacher->bio}}</p>
      </div>
    </div>

  </div>




  <div class="col-md-5 mb-5 mb-lg-0 mb-xlg-0 ">

    <div class="card card-primary sticky-lg-top ">
      <div class="bg-primary-alt rounded-lg">
        <div class="card-body">
          <h2 class="text-primary ck-font fw-400 mb-1" >{{$batch->name}}</h3>
          <p class="text-primary">Only {{$batch->limit}} Seats<span class="text-dark">, available on the first come first serve basis</span></p>
          <p class="text-muted"></p>
          <div class="d-flex justify-content-aroun ">
            <span class="h3 pt-1 mr-1 js-dollar-sign text-muted">Rs</span>
            <span class="display-4 mr-2 js-price-per-month text-muted " style="text-decoration:line-through; font-weight:400">{{$batch->price}}</span>
            <span class="h3 pt-1 mr-1 js-dollar-sign">Rs</span>
            <span class="display-4 js-price-per-month fw-400" >{{$batch->payable}}</span>
          </div>
          <h5 class="ck-font fw-400 m-0"> Live Classes From {{Carbon\Carbon::parse($batch->startDate)->format('D, d M')}} to {{Carbon\Carbon::parse($batch->endDate)->format('d M')}}</h6>
            <p class="ck-font fw-400 ">Timings: {{$batch->timing}}</h5>
          <a class="btn  mt-2 d-block btn-primary mt- js-pricing-submit-button"
        href="{{action('CourseEnrollmentController@checkEnroll', $batch->id)}}">Enroll Now</a>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between">
          
          <!-- <h6>End Date: {{$batch->endDate}}</h6> -->
         
        </div>
        <!-- <h6>67 Days live Sessions</h5> -->
          
        <h5 class="ck-font">This Online Course Includes</h6>
        
        <ul>
          <li>Lifetime Access to projects</li>
          <li>Recording of Live Sessions</li>
          <li>Free Doubt Sessions</li>
          <li>Assignments for practice</li>
          <li>Free e-book</li>
          <li>Certificate of Completion</li>
          
        </ul>
        
      </div>
      <div class="border-top">
        <div class="card-body text-center p-2">
          <p class="ck-font m-0 lead">Have questions? <a href="https://api.whatsapp.com/send/?phone=917355191435&text=Hi, I am facing problem while enrolling in {{$batch->name}}" target="_blank" class="fw-400">Chat Now</a>
            </h4>
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

<div class="slider-menu mt-5">
    
  <h3 class="ck-font ">₹{{$batch->payable}} <span class="lead " style="text-decoration: line-through;">₹{{$batch->price}}</span>   </h3>
    <br>
  <a href="{{action('CourseEnrollmentController@checkEnroll', $batch->id)}}" class="btn btn-primary btn-lg w-100">Enroll Now</a> 
</div>

@endsection