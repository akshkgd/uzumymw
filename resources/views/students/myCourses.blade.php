@extends('layouts.app')
<style>

</style>
@section('content')
<div class="navbar-container">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-0 " data-overlay >
        @include('layouts.header')
    </nav>
</div>


<!-- student dashboard starts -->

<section class="pt-5 mt-5 d-none">
    <div class="container pt-5 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
          
       
          @include('layouts.alert')
         
          @isset($courses)
                    
          {{-- course card --}}
          {{-- <h6>Your Upcoming Classes</h3> --}}
          @foreach ($courses as $Enrollment)
          @if($Enrollment->batch->status == 1 || $Enrollment->hasPaid ==1)
          <div class="card  border-one card-ico shadow-3">
          @else
          <div class="card bg-warning-light border-none card-ico shadow-3">
          
          @endif
          
            <div class="card-body">
                <div class="flex-grow-1">
                    <h1 class="lead-1 mb-2">{{$Enrollment->batch->name}}</h4>
                    <span>
                      {!!$Enrollment->batch->desc!!}
                    </span>
                    <div class="">
                        {{-- <h5 class="mb-0 text-primary-3">{{Carbon\Carbon::parse($Enrollment->nextClass)->format('D, d M Y')}} </h4>
                            <h6>{{Carbon\Carbon::parse($Enrollment->nextClass)->format('h:i A')}}</h5> --}}
                    </div>
                    </div>
                  @if ($Enrollment->batch->status==1 && $Enrollment->hasPaid == 0 )
                
                    <h1 class="add-countdown-time lead-1 pt-2 mb-0 " %} data-countdown-date="{{$Enrollment->batch->startDate->format('Y/m/d')}}"> </h1>
                 
                
                  
                  <a href="{{action('CourseEnrollmentController@checkout', $Enrollment->id )}}" class="btn  btn-outline-success">Complete Payment</a>  
                  
                  @else
                  <div class="pt-3">
                    <a href="" class=" ">Join Class</a>
                    <a href="{{action('BatchController@batchDetails', $Enrollment->id )}}" class="ml-2">Batch details</a>
                    
                  </div>
                  @endif
                  
                  
                  
            </div>
            {{-- <div class="border-top ">
                <div data-target="#panel-3" class="accordion-panel-title p-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                  <span class="h6 mb-0">Batch Details</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-3">
                  <div class="pt-3">
                    
                  </div>
                </div>
              </div> --}}
            
          </div>
          @endforeach
          {{-- course card  --}}
         
          @endisset

          {{-- live courses --}}
          @foreach ($courses as $Enrollment)
          <div class="col-md-6 col-lg-4 d-flex">

            <div class="card card-body">
              <div class="flex-grow-1">
                <h1 class="lead-1 mb-2">{{$Enrollment->batch->name}}</h4>
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                </p>
              </div>
              <a href="#" class="hover-arrow">Learn More</a>
            </div>
          </div>
          @endforeach
          {{-- live courses ends --}}
          
          
        </div>
      </div>
    </div>
   
  </section>


  <section class="pt-5 mt-5">
    <div class="container pt-5 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-xl-12 col-sm-12 col-md-12 ">
          
       
          @include('layouts.alert')
         
          @isset($courses)
          <div class="row">
            {{-- live courses --}}
            @foreach ($courses as $Enrollment)
          <div class="col-md-6 col-lg-4 d-flex">

            <div class="card card-dar card-bod">
              <div class="flex-grow-1">
                {{-- <img src="{{asset('assets/img/course-javascript.jpg')}}" alt="" class="img-fluid rounded mb-2 p-0"> --}}
                <div class="d-flex justify-content-between p-2">
                  <div class="">
                    <h1 class="lead-1 mb-0">{{$Enrollment->batch->name}}</h4>
                      <p class="lead">{{$Enrollment->batch->description}}</p>
                      
                  </div>
                  <div class="">
                    <a class="" href="{{url('/home')}}">
                      <img class="icon text-dark ml-1 mt-1" src="{{asset('assets/img/icons/theme/navigation/up-right.svg')}}" alt="heart icon" data-inject-svg />
                      <span class=""></span>
                    </a>
                  </div>
                  
                    
                </div>
                
                
                {{-- <h1 class="lead-1 mb-2">{{$Enrollment->batch->name}}</h4> --}}
                  <div class="pt-2 p-2">
                    
                    @if ($Enrollment->hasPaid == 0)
                    <p class="lead text-dark">Start Date: {{Carbon\Carbon::parse($Enrollment->batch->startDate)->format('D, d M Y')}}</p>
                    {{-- <a href="" class="btn btn-outline-primary fw-400">complete payment</a> --}}
                    {{-- <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet provident nisi corporis repellat, et a ipsa quibusdam fugiat sapiente tempore molestias atque magni autem debitis! Non quos aperiam eveniet voluptatum.</p> --}}
                    <a href="{{action('CourseEnrollmentController@checkout', Crypt::encrypt($Enrollment->id) )}}" target="_blank" class="btn btn-outline-primary">Complete Payment</a>
                    @elseif ($Enrollment->hasPaid == 1 && $Enrollment->batch->status <= 2)
                      <p class=" text-primary m-0">Next Class</p>
                      <h1 class="lead-1">{{$Enrollment->batch->topic}}</h1>
                      <h5 class="mb-0 ck-font text-primary-3">
                        {{Carbon\Carbon::parse($Enrollment->batch->nextClass)->format('D, d M Y')}} </h4>
                        <h6 class="ck-font">{{Carbon\Carbon::parse($Enrollment->batch->nextClass)->format('h:i A')}}
                      </h5>
                      <a href="{{$Enrollment->batch->meetingLink}}" target="_blank" class="btn btn-outline-primary">Launch Class</a>
                
                    @elseif($Enrollment->batch->status == 3)
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, culpa ea aperiam sint eaque dolor harum iste numquam sed ullam pariatur minima! Necessitatibus ullam praesentium magni vero consequuntur alias quos.</p>
                    @endif
                  </div>
              </div>
              
              <div class="d-md-fl p-2">
                <a href="{{action('BatchController@batchDetails', Crypt::encrypt($Enrollment->id) )}}" class=""><span class="badge badge-pill badge-primary bg-primary-alt-2 text-primary  mt-1 lead ">Details</span> </a>
                <a href="#" class=""><span class="badge badge-pill badge-primary bg-primary-alt-2 text-primary  mt-1 lead ">Notes & Assignments </span> </a>
              
              </div>
              
            </div>
          </div>
          @endforeach
          {{-- live courses ends --}}
          </div>
          @endisset
        </div>
      </div>
    </div>
  </section>




 
@endsection
