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


<section class="pt-5 mt-5 pb-0">
  <div class="container ">
    <h3 class="ck-font">Workshops</h3>
    <div class="row justify-content-center">
      
      <div class="col-lg-12 col-xl-12 col-sm-12 col-md-12 ">
        
     
        @include('layouts.alert')
       
        @isset($workshops)
        <div class="row">
          {{-- live courses --}}
          @foreach ($workshops as $Enrollment)
        <div class="col-md-6 col-lg-4 d-flex">

          <div class="card card-dar card-bod">
            <div class="flex-grow-1">
              {{-- <img src="{{asset('assets/img/course-javascript.jpg')}}" alt="" class="img-fluid rounded mb-2 p-0"> --}}
              <div class="d-flex justify-content-between p-2">
                <div class="">
                  <h1 class="lead-1 mb-0">{{$Enrollment->workshop->name}}</h4>
                    <p class="lea pt-2">{{$Enrollment->workshop->description}}</p>
                    
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
                  
                
                </div>
            </div>
            
            <div class="d-md-fl p-2">
              <a href="{{ action('WorkshopController@workshopDetails', Crypt::encrypt($Enrollment->id)) }}" class=""><span class="badge badge-pill badge-primary bg-primary-alt-2 text-primary  mt-1 lead ">Details</span> </a>
              @if($Enrollment->workshop->status == 3)
              <a href="#dfdf" class=""><span class="badge badge-pill badge-primary bg-primary-alt-2 text-primary  mt-1 lead ">View Certificate </span> </a>
              @endif
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




  <section class="p-0">
    <div class="container pt-5 pb-5">
      <h3 class="ck-font">Courses</h3>
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
                        {{-- <p>Lore ipsum, dolor sit amet consectetur adipisicing elit. Quam, culpa ea aperiam sint eaque dolor harum iste numquam sed ullam pariatur minima! Necessitatibus ullam praesentium magni vero consequuntur alias quos.</p> --}}
                    @endif
                  </div>
              </div>
              
              <div class="d-md-fl p-2">
                <a href="{{action('BatchController@batchDetails', Crypt::encrypt($Enrollment->id) )}}" class=""><span class="badge badge-pill badge-primary bg-primary-alt-2 text-primary  mt-1 lead ">Details</span> </a>
                @if($Enrollment->certificateId != '')
                <a href="#" class=""><span class="badge badge-pill badge-primary bg-primary-alt-2 text-primary  mt-1 lead ">View Certificate </span> </a>
                @endif
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
