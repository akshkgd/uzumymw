@extends('layouts.app')
@section('content')
@section('title', 'checkout for ' . e($batch->name))
@section('meta_keywords', '' . e($batch->name))
@section('meta_description', '' . e($batch->description))
<style>
    .form-control{
        border:1px solid lightgrey;
        border-right: none;
    }
    .form-control:hover{
        background-color: white;
    }
    .coupan{
        border:1px solid lightgrey;
        border-left: none;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        font-family: "Google Sans Display";
        font-weight:400;
    }
</style>
<div class="navbar-container">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-0" >
        @include('layouts.header')
    </nav>
</div>


{{-- batch details start --}}



<section class="p-0">
  <div class="container pt-5 ">
      <div class="row justify-content-center">
        @include('layouts.alert')
        <div class="col-lg-7">
          <div class="card card-primary" >
            <div class="bg-primary-alt rounded-lg">
              <div class="card-body">
                <h2 class="text-primary ck-font fw-400 mb-1" >{{$batch->name}}</h3>
                <p class="text-primary">Only 50 Seats<span class="text-dark">, available on the first come first serve basis</span></p>
                <p class="text-muted"></p>
                <div class="d-flex justify-content-aroun ">
                  <span class="h3 pt-1 mr-1 js-dollar-sign text-muted">Rs</span>
                  <span class="display-4 mr-2 js-price-per-month text-muted " style="text-decoration:line-through; font-weight:400">{{$batch->price}}</span>
                  <span class="h3 pt-1 mr-1 js-dollar-sign">Rs</span>
                  <span class="display-4 js-price-per-month fw-400" >{{$batch->payable}}</span>
                </div>
                <h5 class="ck-font fw-400 m-0"> Live Classes From {{Carbon\Carbon::parse($batch->startDate)->format('D, d M')}} to {{Carbon\Carbon::parse($batch->endDate)->format('d M')}}</h6>
                  <p class="ck-font fw-400 ">Timings: {{$batch->timing}}</h5>
                {{-- <a class="btn  mt-2 d-block btn-primary mt- js-pricing-submit-button"
              href="{{action('CourseEnrollmentController@checkEnroll', $batch->id)}}">Enroll Now</a> --}}
              <form action="{{ route('payment') }}" method="POST" class="">
                @csrf
                <script src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="{{ env('RAZOR_KEY') }}" 
                    data-amount="100"
                     data-order_id="{{$order->id}}"
                    data-buttontext="Pay Now" data-name="Codekaro" 
                    data-description="{{$batch->name}}"
                    data-image="{{ asset('/assets/img/logo.svg') }}"
                    data-prefill.name="{{Auth::user()->name}}"
                    data-prefill.email="{{Auth::user()->email}}"
                    data-prefill.contact="{{Auth::user()->mobile}}"
                     data-theme.color="#1A73E8">

                </script>
                <input type="hidden" custom="Hidden Element" name="b" value="{{$batch->id}}">
            </form>  
              </div>
            </div>
            <div class="card-body">
              
              <div class="d-flex justify-content-between">
                
                <!-- <h6>End Date: {{$batch->endDate}}</h6> -->
               
              </div>
              <!-- <h6>67 Days live Sessions</h5> -->
                
                
              <h5 class="ck-font fw-400">This Online Course Includes</h6>
              
              <ul>
                <li>Lifetime Access to projects</li>
                <li>Free Doubt Sessions</li>
                <li>Assignments for practice</li>
                <li>Free e-book</li>
                <li>Certificate of Completion</li>
                
              </ul>
            </div>
            <div class="border-top">
              <div class="card-body text-center p-2">
                <p class="ck-font m-0 lead">Have questions? <a href="" class="fw-400 text-primary">Check out our FAQs</a>
                  </h4>
              </div>
            </div>
          </div>
        </div>
        
      </div>
  </div>
</section>


@endsection()