@extends('layouts.dashboard')
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

<section class="d-none">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="login-card border-none shadow p-3 text-center">
          {{-- <img src="{{asset('assets/img/paymentLeftCardIcon.52206375.svg')}}" alt="" class="img-flui" height="100"> --}}
          <div class="">
            <p class="mt-3 mb-0 danger-pill">Payment Due</p>
          </div>
          <h3 class="fw-bol fs-4 mt-3">{{$batch->name}}</h2>
          {{-- <h4 class="fw-bold my-3"><del class="text-muted">Rs {{$batch->price}}</del><span class="px-2">Rs {{$batch->payable}}</span></h4> --}}
          <div class="m-5">
          <div class="d-flex justify-content-between ">
            <span class="">Total</span>
            <span class="">₹ {{$batch->payable + $enrollment->certificateFee}}</span>
          </div>
          <div class="d-flex justify-content-between">
            <span class="">Price Discount</span>
            <span class="">₹ {{$batch->price - $batch->payable}}</span>
          </div>
          <div class="d-flex justify-content-between">
            <span class="">CGST + SGST@0%</span>
            <span class="">₹ 0.00</span>
          </div>
        </div>
          
          <form action="{{ route('payment') }}" method="POST" class="">
            @csrf
            <script src="https://checkout.razorpay.com/v1/checkout.js"
                data-key='rzp_live_YFwQzuSuorFCPM' 
                data-amount="100"
                data-order_id="{{$order->id}}"
                data-buttontext="Pay ₹ {{$batch->payable}} Now" data-name="Codekaro" 
                data-description="{{$batch->name}}"
                data-image="{{ asset('assets/img/codekaro-dark.png') }}"
                data-prefill.name="{{Auth::user()->name}}"
                data-prefill.email="{{Auth::user()->email}}"
                data-prefill.contact="{{Auth::user()->mobile}}"
                data-theme.color="#0066ff">
            </script>
            <input type="hidden" custom="Hidden Element" name="b" value="{{$batch->id}}">
        </form>  
        </div>
      </div>
    </div>
  </div>
</section>

{{-- new payment page start --}}
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 h-full hidden-sm ">
        <div class="m-lg-5 p-lg-5 my-3">
          {{-- <h1 class="fs-5 fw-600 text-muted">Codekaro</h1> --}}
          <div class="">
            
            <h3 class="fw-bol fs-5 mt-5">{{$batch->name}}</h2>
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
              <span class="fs-4">₹ {{$batch->payable + $enrollment->certificateFee}}</span>
            </div>
          </div>
          </div>
          <p class="pt-5 small text-muted">Copyright codekaro © 2022. All rights reserved by codekaro.</p>
        </div>
      </div>
      <div class="col-lg-6 shadow-l border-star h-full">
        <div class="m-lg-5 p-lg-5 my-3 hidden-lg text-center">
          <div class="d-flex justify-content-between">
            <p class=" fw-bold text-muted text-left">Codekaro</p>
          </div>
          <div class="">
            <p class="mb-0 mt-5 text-muted">Pay now</p>
            <h1 class=""><span class="fs-4">₹ {{$batch->payable + $enrollment->certificateFee}}.00</span></h1>
            <p class="fw-bol fs- ">{{$batch->name}}</p>
            {{-- <h4 class="fw-bold my-3"><del class="text-muted">Rs {{$batch->price}}</del><span class="px-2">Rs {{$batch->payable}}</span></h4> --}}
            <div class="m-">
            <div class="d-flex justify-content-between mt-5">
              <span class="text-muted">Fees</span>
              <span class="text-muted">₹ {{$batch->price}}</span>
            </div>
            @if ($enrollment->certificateFee> 0)
            <div class="d-flex justify-content-between">
              <span class="text-muted">Recordings Access</span>
              <span class="text-muted">₹ {{$enrollment->certificateFee}}</span>
            </div>
            @endif
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
              <span class="fs-4">₹ {{$batch->payable + $enrollment->certificateFee}}</span>
            </div>
          </div>
          </div>
        </div>
        <div class="m-lg-5 p-lg-5 my-3">
          <h1 class="fs-5 hidden-sm">Complete your payment</h1>

          <div class="card mt-5">
            <div class="p-3">
              <p class="m-0">{{Auth::User()->name}}</p>
            </div>
            <div class="p-3 border-top">
              <p class="m-0">{{Auth::User()->email}}</p>
            </div>
            
          </div>

          <form action="{{ route('payment') }}" method="POST" class="">
            @csrf
            <script src="https://checkout.razorpay.com/v1/checkout.js"
                data-key='rzp_live_YFwQzuSuorFCPM' 
                data-amount="100"
                data-order_id="{{$order->id}}"
                data-buttontext="Pay ₹ {{$batch->payable + $enrollment->certificateFee}} Now" data-name="Codekaro" 
                data-description="{{$batch->name}}"
                data-image="{{ asset('assets/img/codekaro-dark.png') }}"
                data-prefill.name="{{Auth::user()->name}}"
                data-prefill.email="{{Auth::user()->email}}"
                data-prefill.contact="{{Auth::user()->mobile}}"
                 data-theme.color="black">
            </script>
            <input type="hidden" custom="Hidden Element" name="b" value="{{$batch->id}}">
        
          </form> 

          <p class="py-4 small text-muted hidden-lg text-center">Copyright codekaro © 2022. All rights reserved by codekaro.</p>

        </div>
      </div>
    </div>
  </div>
</section>

{{-- new payment page end --}}

<script>
  window.addEventListener('load', function() {
  // Find the Razorpay payment button element
  var razorpayButton = document.querySelector('.razorpay-payment-button');

  // Simulate a click event on the button
  razorpayButton.click();
});

</script>
@endsection()