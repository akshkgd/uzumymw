@extends('layouts.app')
@section('content')
<div class="navbar-container">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white"  data-sticky="top" >
        @include('layouts.header')
    </nav>
    
</div>

<div class="container">
    @include('layouts.alert')
</div>


<section class=" ">
    <div class="container">
        
        <div class="row j">
            <div class="col-lg-6 col-md-6">
                <a class="card hover-shadow-sm border-none shadow"
                href="">
               <img src="{{asset('assets/img/testimonials/T6jCsf3.png')}}" alt="" class="ck-event-img">  
               <div class="p-3">
                   <h1 class="lead-1">Understand the system design behind Zomato [Recorded Session]</h1>
                   <p class="lea m-0 text-dark">Start Time: 05:00 PM Saturday</p>
                   <p class="led m-0 text-dark">End Time: 05:00 PM Saturday</p>
                   <p class="lad m-0 text-dark">Duration: 2 Hours</p>
               </div>
               
               <div class="border-top">
                   <div class="px-3 py-2">    
                       <p href="" class="btn btn-primary m-0 fw-400">Register Now</p>
                   </div>
               </div>
                </a>
            </div> 
            
            
            <div class="col-lg-6 col-md-6">
                <a class="card hover-shadow-sm border-none shadow"
                href="">
               <img src="{{asset('assets/img/testimonials/NqV0jTX.png')}}" alt="" class="ck-event-img">  
               <div class="p-3">
                   <h1 class="lead-1">Understand the system design behind Zomato [Recorded Session]</h1>
                   <p class="lea m-0 text-dark">Start Time: 05:00 PM Saturday</p>
                   <p class="led m-0 text-dark">End Time: 05:00 PM Saturday</p>
                   <p class="lad m-0 text-dark">Duration: 2 Hours</p>
               </div>
               
               <div class="border-top">
                   <div class="px-3 py-1 d-flex align-items-center justify-content-between">
                       <p class="m-2">34563 Students Enrolled</p>
                       <p href="" class="btn btn-primary m-0 fw-400">Register Now</p>
                   </div>
               </div>
                </a>
            </div>
        

            </div>
        </div>
      
    </div>
</section>
@endsection