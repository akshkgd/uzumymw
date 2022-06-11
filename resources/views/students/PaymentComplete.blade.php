@extends('layouts.ck')
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
    .ck-link{
      text-decoration: none;
    }
    @media(min-width:992px){
      .h-full{
      height: 100vh;
      }
      .hidden-lg{
        display: none;
      }
    }
    @media(max-width:992px){
      .btn-round{
      display: none !important;
      }
      .hidden-sm{
        display: none;
      }
    }
    .in{
        /* background-color: #4b2aad; */
        background-image: linear-gradient(99deg, rgb(48, 124, 247), git );
        border: 1px solid transparent;
        margin-top: 24px;
        border:none;
        color: white;
        padding: 12px 46px !important;
        font-weight:400;
        display: inline-block;
        cursor: pointer;
        font-size: 16px;
        border-radius: 12px;
        /* box-shadow: rgb(247 123 155 / 71%) 0px 3px 16px 0px; */
    }
    .razorpay-payment-button{
        /* background-color: #4b2aad; */
        background-image: linear-gradient(99deg, rgb(48, 124, 247), rgb(50, 122, 255));
        border: 1px solid transparent;
        width:100%;
        margin-top: 24px;
        border:none;
        color: white;
        padding: 12px 46px !important;
        font-weight:400;
        display: inline-block;
        cursor: pointer;
        font-size: 16px;
        border-radius: 12px;
        /* box-shadow: rgb(247 123 155 / 71%) 0px 3px 16px 0px; */
    }
    .login-card{
      border-radius: 20px !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark border-bottom d-non">
  <div class="container text-center">
   
    <h1 class="navbar-brand m-0 fw-bold text-primary fs-4 text-center">Codekaro</h1>
  </div>
</nav>


{{-- batch details start --}}


{{-- new payment page start --}}
<section>
  <div class="container-fluid">
    <div class="row justify-content-center">
      
      <div class="col-lg-7 mb-5 shadow-l h-ful ">
        <div class="mx-lg-5 px-lg-5 my-3 ">
          <div class="text-center">
            <img src="{{asset('assets/img/booking-congrats.4d81c4bf.svg')}}" alt="">
          <h1 class="fs-5">Payment Completed</h1>
          <p class="text-muted">Complete all the onboarding process</p>

          </div>

          <div class="card my-4">
            <div class="p-3 d-flex justify-content-between">
              <p class="m-0">WhatsApp Group</p>
              <a href="{{$batch->groupLink}}" target="_blank" class="ck-link">Join Now</a>
            </div>
            <div class="p-3 border-top d-flex justify-content-between">
              <p class="m-0">Discord Server</p>
              <a href="{{$batch->groupLink1}}" target="_blank" class="ck-link">Join Now</a>
            </div>
          </div>
            <div class="card p-3 border-to  justify-content-between">
              <div class="">
                <p class="mb-0 text-muted ">Invoice Paid</p>
                <h1 class=""><span class="fs-4">₹ {{$batch->payable}}.00</span></h1>
                <p class="fw-bol fs- ">{{$batch->name}}</p>
                {{-- <h4 class="fw-bold my-3"><del class="text-muted">Rs {{$batch->price}}</del><span class="px-2">Rs {{$batch->payable}}</span></h4> --}}
                <div class="m-">
                <div class="d-flex justify-content-between mt-5">
                  <span class="text-muted">Fees</span>
                  <span class="text-muted">₹ {{$batch->price}}</span>
                </div>
                <div class="d-flex justify-content-between">
                  <span class="text-muted">Price Discount</span>
                  <span class="text-muted">₹ {{$batch->price - $batch->payable}}</span>
                </div>
                {{-- <div class="d-flex justify-content-between ">
                  <span class="">Offer price</span>
                  <span class="">₹ {{$batch->payable}}</span>
                </div> --}}
                <div class="d-flex justify-content-between">
                  <span class="text-muted">CGST + SGST@0%</span>
                  <span class="text-muted">₹ 0.00</span>
                </div>
                <div class="d-flex justify-content-between mt-2 py-3">
                  <span class="fs-4">Total</span>
                  <span class="fs-4">₹ {{$batch->payable}}</span>
                </div>
                
                <a href="{{ action('CourseEnrollmentController@invoice', Crypt::encrypt($enrollment->id)) }}" target="_blank" class="btn btn-primary i py-3 px-5 fw-400 my-1" style="border-radius: 12px; padding: 12px 46px !important; ">View Invoice</a>
                <a href="{{url('/home')}}" class="btn btn-outline-primary px-4 i my-1" style="border-radius: 12px; padding: 12px 46px !important;">Your Dashboard</a>
                
    
              </div>
              </div>
            
          </div>

          <p class="py-4 small text-muted  text-center">Copyright codekaro © 2022. All rights reserved by codekaro.</p>


        </div>
        

        </div>
      </div>
    </div>
  </div>
</section>

{{-- new payment page end --}}


@endsection()