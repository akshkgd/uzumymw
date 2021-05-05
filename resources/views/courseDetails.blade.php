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
              <span class="h6 m-0 ck-fon py-3  pl-2" style="font-size:18px;">{{$topic->title}}</span> 
             <span> <b></b> <img class="icon ml-1" style="height: 16px" src="{{asset('assets/img/icons/interface/plus.svg')}}" alt="plus interface icon"
                data-inject-svg /></span>
            </div>
            <div class="collapse" id="abc{{$topic->id}}">
              <div class="pt-0">
                <p class="mb-2 pl-2 " style="font-size:17px;">
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
            <h5>About Mentors</h5>
              <div class=" d-flex align-items-center mb-2">
                <img src="{{$batch->teacher->avatar}}" alt="Benjamin Cameron"
                  class="avatar avatar-lg mr-3">
                <div>
                  <h6 class="mb-0">{{$batch->teacher->name}}
                  </d>
            {{-- <a href="#" class="text-muted">{{$batch->teacher->email}}</a> --}}
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
            <p class="ck-font fw-400 ">Timings: {{$batch->schedule}}</h5>
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


<section class=" p-0">
  <div class="container mb-5">
      <div class="row justify-content-center">
          <h2 class="display-5 text-sm-center fw-400 p-3">We have designed a <span class="text-prima ck-highlight">flexible program</span>   for you</h2>
          <div class="col-md-4">
              <div class="card card-dark p-2 text-center">
                  <div class="text-center">
                      <img src="{{asset('/assets/img/missed-class-logo.svg')}}" alt="" class="avatar avatar-lg ">
                  </div>
                  <h4 class="ck-font">Missed a class?</h4>
                  <p class="lead">Watch the recording later, with teaching assistants available to solve your doubts
                  </p>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card card-dark p-2 text-center">
                  <div class="text-center">
                      <img src="{{asset('/assets/img/office.svg')}}" alt="" class="avatar avatar-lg ">
                  </div>
                  <h4 class="ck-font">Jobs & class timings clash?</h4>
                  <p class="lead">Our classes are held in the evening to make sure college schedules do not clash with our classes.</p>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card card-dark p-2 text-center">
                  <div class="text-center">
                      <img src="{{asset('/assets/img/revise.svg')}}" alt="" class="avatar avatar-lg ">
                  </div>
                  <h4 class="ck-font">Want to revise?</h4>
                  <p class="lead">Access assignments/notes lifelong and recordings upto 6 months post course completion
                  </p>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card card-dark p-2 text-center">
                  <div class="text-center">
                      <img src="{{asset('/assets/img/doubts.svg')}}" alt="" class="avatar avatar-lg ">
                  </div>
                  <h4 class="ck-font">Have Doubts?</h4>
                  <p class="lead">Get them resolved over text / video by our expert teaching assistants!
                  </p>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card card-dark p-2 text-center">
                  <div class="text-center">
                      <img src="{{asset('/assets/img/family-logo.svg')}}" alt="" class="avatar avatar-lg ">
                  </div>
                  <h4 class="ck-font">College / family needs time??</h4>
                  <p class="lead">Pause your course and restart a month later with the next batch!
                  </p>
              </div>
          </div>
      </div>

  </div>
</section>
<section class="pt-2">
  <div class="container mb-sm-5 pt-0">
      <div class="row justify-content-center">
          <h2 class="display-5 text-sm-center fw-400 p-3">We built codekaro for <span class="text-prima ck-highlight"> college students </span> and they love us</h2>
          <div class="col-md-4 d-flex">
              <div class="card card-dark p-2 ">
                <div class=" d-flex align-items-center mb-2">
                  <img src="{{asset('assets/img/testimonials/bhanu-397d99374e67f29c99c907f25fe8e1bb6d8c8bdfbf3b78c780daddb3686941ef.png.gz')}}"  class="avatar  mr-3">
                  <div>
                    <h6 class="mb-0">Bhanu Pratap Singh Rathore</h6>
                    <p class="m-0 p-0 text-muted">Student</p>
                  </div>
                </div>
                <p class="">All the interactive live classes with experienced instructors, the sessions with veteran mentors and the rigorous mock interviews helped bridge the gap in my learning process.</p>
              </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="card card-dark p-2 flex-grow-1">
              <div class=" d-flex align-items-center mb-2">
                <img src="{{asset('assets/img/testimonials/suryakant-0a0b8726c67de8fe3464ac8ce00746a4ff6e8e61fef846f8c4c9825570fec2b4.png.gz')}}"  class="avatar  mr-3">
                <div>
                  <h6 class="mb-0">Suryakant Mishra</h6>
                  <p class="m-0 p-0 text-muted">Student</p>
                </div>
              </div>
              <p class="">The mentorship arrangement and the peer culture has helped me evolve as a coder, and I am genuinely grateful for my association with codekaro.</p>
            </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class="card card-dark p-2 d-flex">
            <div class=" d-flex align-items-center mb-2">
              <img src="{{asset('assets/img/testimonials/suman-b8c6c6d44724e249c439ba0c7e24afa71cbcd8197f90c28d4ee776346cdbb175.png.gz')}}"  class="avatar  mr-3">
              <div>
                <h6 class="m-0 p-0">Suman Mahato</h6>
                <p class="m-0 p-0 text-muted">Student</p>
              </div>
            </div>
            <p class="">I still watch the recorded classes of Codekaro, and try to hone my skills more, codekaro has helped me gain confidence and constantly strengthen my core concepts.</p>
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