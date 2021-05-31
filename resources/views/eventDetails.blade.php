@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
@section('content')

<div class="navbar-container">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white"  >
        @include('layouts.header')
    </nav>
    
</div>

<div class="container">
    @include('layouts.alert')
</div>


<section class="d-none ">
    <div class="container">
        
        <div class="row ">
            <div class="col-lg-8 col-md-8">
                <h1 class="display-5">Understand the system design behind Zomato [Recorded Session]</h1>
               {{-- <img src="{{asset('assets/img/testimonials/T6jCsf3.png')}}" alt="" class="img-fluid rounded mb-3">   --}}
               <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure fugiat illo sunt perspiciatis excepturi modi ex rerum architecto, necessitatibus aspernatur non magnam provident porro? Modi facere non autem animi libero.
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit corporis voluptates fugiat quis facilis, amet aspernatur a corrupti. Nisi ut deserunt excepturi repellendus magni reiciendis. Quisquam magni voluptatum corrupti quibusdam.
                   
                   
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae hic error incidunt, vero molestias architecto iure eius nulla repellendus atque. Fugiat voluptatibus assumenda, illum molestias dolores temporibus deserunt accusamus corrupti.
                   Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia id voluptatem, molestias maxime dolorum at magnam ex sunt quis iste est molestiae provident sit illum optio, repellat magni esse. Totam.
               </p>
               
            
                
            </div> 
            <div class="col-md-4 ">
                <div class="card card-primar sticky-lg-top ">
                  <img src="{{ asset('storage/'.$event->img) }}"  alt="Image"
                                    class="card-img-top">
                    <div class="card-body ">
                        {{-- <h1 class="lead-1">Understand the system design behind Zomato [Recorded Session]</h1> --}}
                        <p class="lea m-0 text-dark">Start Time: 05:00 PM Saturday</p>
                   <p class="led m-0 text-dark">End Time: 05:00 PM Saturday</p>
                   <p class="lad m-0 text-dark">Duration: 2 Hours</p>
                        {{-- <p class="lead pt-1 m-0">Free</p>
                        <p class="lead m-0"> Live Class</p>
                        <p class="lead"> Linkedin sharable Certificate</p> --}}
                          <a href="" class="btn btn-primary fw-400 btn-block mt-2">Register Now</a>
                    </div>
                </div>
                <h1 class="lead-1 m-0">Invite your friends</h1>
            <p class="">and enjoy a shared experience</p>
                <a href="{{url()->current()}}" data-action="share/whatsapp/share"><img src="{{asset('assets/img/icons/social/twitter.svg')}}" alt="" class="icon mx-1"> </a>
                <a href="{{url()->current()}}" data-action="share/whatsapp/share"><img src="{{asset('assets/img/icons/social/facebook.svg')}}" alt="" class="icon mx-1"> </a>
            </div>
            

            </div>
        </div>
      
    </div>
</section>


<section class="d-non ">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          {{-- <h2 class="display-5">Understand the system design behind Zomato</h1> --}}
        </div>
      </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 ">
                <div class="card card-body bg-primary text-light hidden-lg m-0">
                    <span class="h2 ck-font fw-400 d-block ck-fon">Understand the system design behind Zomato</span>
                      <p class="lead pr-xl-3 m-0">
                        Live Classes from
                            {{ Carbon\Carbon::parse($event->startDate)->format('D, d M') }} to
                            {{ Carbon\Carbon::parse($event->endDate)->format('d M') }}
                      </p>
                      <p class="ck-font fw-400 m-0">Schedule: {{ $event->schedule }}</p>
                      <p class="ck-font fw-400 ">Seat Limit: {{ $event->limit }}</p>
                      <h5 class="ck-font fw-400 ">This Free Course Includes</h6>

                        <ul class="px-3">
                            <li>LinkedIn sharable Certificate</li>
                            <li>Lifetime Access to projects</li>
                            <li>Assignments for practice</li>
                            <li>No hidden charges</li>
                        </ul>
                      <a href="#" class="btn btn-lg mt-2 btn-white ck-font fw-400">Enroll now</a>
                </div>
                <div class="card card-lg card-body flex-sm-row align-items-center pricing-ticket bg-primary layer-2 text-light hidden-sm d-none mt-0">
                    <div class="mx-2 text-center text-sm-left mb-3 mb-sm-0">
                      <span class="h2 ck-font fw-400 d-block ck-fon">Understand the system design behind Zomato</span>
                      <p class="lead pr-xl-3 m-0">
                        Live Classes from
                            {{ Carbon\Carbon::parse($event->startDate)->format('D, d M') }} to
                            {{ Carbon\Carbon::parse($event->endDate)->format('d M') }}
                      </p>
                      <p class="ck-font fw-400 m-0">Schedule: {{ $event->schedule }}</p>
                      <p class="ck-font fw-400 ">Seat Limit: {{ $event->limit }}</p>
                      <a href="#" class="btn btn-l mt-2 btn-white">Enroll Now</a>
                    </div>
                    <div class="mx-2 text-center">
                      <div class="d-flex align-items-center">
                        <span class="h3 mb-0"></span>
                        <span class="display-4 mb-0 ck-font">Free</span>
                        
                      </div>
                      <p class="small">No Hidden Charges.</p>
                    </div>
                  </div>
                  <h1 class="display-5">{{$event->name}}</h1>
                  <p class="lead text-dark">Live Classes From
                    {{ Carbon\Carbon::parse($event->startDate)->format('D, d M') }} to
                    {{ Carbon\Carbon::parse($event->endDate)->format('d M') }} </p>
               {{-- <img src="{{asset('assets/img/testimonials/T6jCsf3.png')}}" alt="" class="img-fluid rounded mb-3">   --}}
               <p class="lea">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure fugiat illo sunt perspiciatis excepturi modi ex rerum architecto, necessitatibus aspernatur non magnam provident porro? Modi facere non autem animi libero.
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit corporis voluptates fugiat quis facilis, amet aspernatur a corrupti. Nisi ut deserunt excepturi repellendus magni reiciendis. Quisquam magni voluptatum corrupti quibusdam.
                   
                   
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae hic error incidunt, vero molestias architecto iure eius nulla repellendus atque. Fugiat voluptatibus assumenda, illum molestias dolores temporibus deserunt accusamus corrupti.
                   Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia id voluptatem, molestias maxime dolorum at magnam ex sunt quis iste est molestiae provident sit illum optio, repellat magni esse. Totam.
               </p>
               
               <div class="card card-bod">
                
                <div class="bg-primary-2-alt rounded p-2">
                    <h5>About Mentor</h5>
                    <div class=" d-flex align-items-center mb-2">
                        <img src="{{ $event->teacher->avatar}}" alt="{{ $event->teacher->name}}"
                            class="avatar avatar-lg mr-3">
                        <div>
                            <h6 class="mb-0 ck-font">{{$event->teacher->name}}</h6>
                            <a href="#" class="text-dark fw-400">{{$event->teacher->email}}</a>
                        </div>

                    </div>
                    <p class="pt-0 mt-0">{{$event->teacher->bio}}</p>
                </div>
            </div>
            
                
            </div> 
            <div class="col-lg-4 col-md-12">
              <div class="card border-none  shadow-lg sticky-lg-top ">
                
                <div class="p-2">
                  <img src="{{ asset('storage/'.$event->img) }}"  alt="Image" class="card-img-to rounded mb-3">
                  <h2 class="ck-font lead-1  m-0">{{$event->name}}</h1>
                    <p class="text-primary">Only {{$event->limit}} Seats<span class="text-dark">,
                      available on the first come first serve basis</span></p>
                  <h5 class="ck-font fw-400 m-0 lead">
                    {{ Carbon\Carbon::parse($event->startDate)->format('D, d M h:m A') }} @if($event->endDate != '') to
                    {{ Carbon\Carbon::parse($event->endDate)->format('d M') }} @endif</h6>
                    <p class="ck-font fw-400 ">Timings: {{ $event->schedule }}</p>
                </h5>
  
  
                  {{-- <h5 class="ck-font fw-400">This Free Course Includes</h6> --}}
  
                    <ul class="px-3 ">
                        <li>LinkedIn sharable Certificate</li>
                        <li>Lifetime Access to projects</li>
                        <li>Assignments for practice</li>
                    </ul>
                  
                  <a href="{{ action('WorkshopEnrollmentController@checkEnroll', $event->id) }}" class="btn btn-lg btn-outline-primary-3 btn-block fw-400">Enroll now for free</a>
                </div>
                
                
               

                
                     

                  
              </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
@endsection