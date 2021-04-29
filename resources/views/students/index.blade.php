@extends('layouts.app')
<style>

</style>
@section('content')
<div class="navbar-container ">
  <nav class="navbar navbar-expand-lg navbar-light border-bottom-0" data-overlay>
    @include('layouts.header')
  </nav>
</div>

{{-- <section class="bg-primary-alt header-inner o-hidden" id="test">
  <div class="container">
    <div class="row my-3">
      <div class="col">

      </div>
    </div>
    <div class="row py-6 text-center justify-content-center align-items-center layer-2">
      <div class="col-xl-8 col-lg-10">
        <h1 class="display-4  display-5" id="greet"><span id="time"></span> <span>{!!strtok(Auth::user()->name, "
            ")!!}</span> </h1>
        <p class="lead mb-0">Eat. Sleep. Code Repeat</p>
      </div>
    </div>
  </div>
  <div class="divider layer-1">
    <img src="assets/img/dividers/divider-2.svg" alt="graphical divider" data-inject-svg />
  </div>
</section> --}}
<!-- student dashboard starts -->


<section class="" style="padding-top: 5rem;">
  <div class="container pt-5 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">

        {{-- user section --}}
        <div class="text-center ">
          <img src="{{Auth::user()->avatar}}" alt="" class="avatar avatar-lg">
          <h1 class="display lead-1 pt-2 mb-0"><span id="time"></span> {{Auth::user()->name}}</h1>
          <p class="lead">Eat Sleep Code repeat</p>
        </div>

        {{-- user section ends --}}
        @include('layouts.alert')
        {{-- alert start --}}

        {{-- alert ends --}}
        @isset($Enrollments)
        @forelse ($Enrollments as $Enrollment)
        <div class="card card-dark card-ico shadow-3d">
          <div class="card-body">
            <div class="flex-grow-1">
              <h4 class="lead-1 mb-2">{{$Enrollment->batch->topic}}</h4>
              <span>
                {!!$Enrollment->batch->desc!!}
              </span>
              <div class="d-md-flex justify-content-between pt-1">
                <div class="">
                  <h5 class="mb-0 ck-font text-primary-3">
                    {{Carbon\Carbon::parse($Enrollment->batch->nextClass)->format('D, d M Y')}} </h4>
                    <h6 class="ck-font">{{Carbon\Carbon::parse($Enrollment->batch->nextClass)->format('h:i A')}}
                  </h5>
                </div>

                <div class="text pt-md-2">
                  <a href="{{$Enrollment->batch->meetingLink}}" class=" btn btn-outline-primary" target="_blank">Launch
                    Class</a>
                </div>
              </div>


            </div>


          </div>
          <div class="border-to px-3 py-2">
            {{-- <a href="{{$Enrollment->batch->meetingLink}}" class=" btn btn-outline-primary" disabled>Launch
              Class</a> --}}
            <a href="{{action('BatchController@batchDetails', Crypt::encrypt($Enrollment->id) )}}"
              class="btn ck-c-btn">Course Details</a>
            <a href="{{action('StudentController@notes', Crypt::encrypt($Enrollment->id) )}}" class="btn ck-c-btn">Notes
              & Assignments</a>
            <a href="{{action('StudentController@recordings', Crypt::encrypt($Enrollment->id) )}}"
              class="btn ck-c-btn">Recording</a>
          </div>


        </div>
        @empty
        <div class="row   o-hidden pt-5 mt-5">
          <div class="col-md-6 d-flex" >
            <div class="card card-dark card-body">
              <img src="{{asset('assets/img/starred_A.png')}}"  class="img-fluid" alt="Image">
              <h1 class="lead-1 pb-3">No upcoming classes for you!</h1>
            <p class="lead">Your next class will be scheduled when you enroll in a course </p>
            <a href="" class="btn btn-primary">Explore all courses</a>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="card card-body">
              {{-- <img src="{{asset('assets/img/course-javascript.jpg')}}" alt="" class="img-fluid rounded-lg"> --}}
              <h1 class="lead-1">Python bootcamp!!</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quas nesciunt saepe nobis distinctio velit, facilis provident cum, aliquid officiis blanditiis expedita veritatis exercitationem soluta non, doloremque esse sapiente ducimus!</p>
              <a href="ksqlq" style="bottom: 0">dkelk</a>
            </div>
            
          </div>
          </div>
        @endforelse
        @endisset
        {{-- faq starts --}}
        <h3 class="display lead-1 text-center pt-5">Frequently Asked Questions</h3>
        <div class="card shadow-3d">
          <div class="border-bottom px-2 mb-3">
            <div data-target="#panel-3" class="accordion-panel-title pr-2" data-toggle="collapse" role="button"
              aria-expanded="false" aria-controls="panel-1">
              <span class="h6 pt-3 pl-2">Panel Title</span>
              <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
            </div>
            <div class="collapse" id="panel-3">
              <div class="pt-3">
                <p class="mb-2 pl-2">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                  laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                  architecto beatae vitae dicta sunt explicabo.
                </p>
              </div>
            </div>
          </div>
          <div class=" px-2 mb-3">
            <div data-target="#panel-4" class="accordion-panel-title" data-toggle="collapse" role="button"
              aria-expanded="false" aria-controls="panel-1">
              <span class="h6 mb-0 pl-3">Panel Title 2</span>
              <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
            </div>
            <div class="collapse" id="panel-4">
              <div class="pt-3">
                <p class="mb-0 pl-3">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                  laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                  architecto beatae vitae dicta sunt explicabo.
                </p>
              </div>
            </div>
          </div>
        </div>
        {{-- faq ends --}}

      </div>
    </div>
  </div>

  @include('layouts.dfooter')


  <script>
    // fetch("https://type.fit/api/quotes")
    // .then(function(response) {
    //   return response.json();
    // })
    // .then(function(data) {
    //   console.log(data);
    // });

    //   function timeOfDay() {
    //   let hour = new Date().getHours();
    //   if (hour >= 4 && hour <= 11) return 'Morning';
    //   if (hour >= 12 && hour <= 16) return 'Afternoon';
    //   if (hour >= 17 && hour <= 20) return 'Evening';
    //   if (hour >= 21 || hour <= 3) return 'Night';
    // }
    // document.getElementById("time").innerHTML = (`Good ${timeOfDay()},`);
    // // time.innerHtml(`Good ${timeOfDay()}!`);


    function timeOfDay() {
      let hour = new Date().getHours();
      if (hour >= 4 && hour <= 11) return 'Morning';
      if (hour >= 12 && hour <= 16) return 'Afternoon';
      if (hour >= 17 && hour <= 20) return 'Evening';
      if (hour >= 21 || hour <= 3) return 'Night';
    }
    document.getElementById("time").innerHTML = (`Good ${timeOfDay()},`);
    console.log(timeOfDay());
    if (timeOfDay() == 'Morning') {
      document.getElementById("test").style.background = "#f8d2c3";
      document.getElementById("greet").style.color = "#f28b82";
    }
    if (timeOfDay() == 'Afternoon') {
      document.getElementById("test").style.background = "#ffefc3";
      document.getElementById("greet").style.color = "#fbc129";
    }
    if (timeOfDay() == 'Evening') {
      document.getElementById("test").style.background = "#ceead6";
      document.getElementById("greet").style.color = "#4185f4";
    }
    if (timeOfDay() == 'Night') {
      document.getElementById("test").style.background = "#d2e3fc";
      document.getElementById("greet").style.color = "#4185f4";
    }
  </script>


  @endsection