@extends('layouts.t-student')
@section('content')
<style>
    .razorpay-payment-button{
        /* background-color: #4b2aad; */
        background-color: black;
        width:100%;
        margin-top: 24px;
        border:none;
        color: white;
        padding: 12px 46px !important;
        font-weight:400;
        display: inline-block;
        cursor: pointer;
        font-size: 16px;
        border-radius: 120px;
        /* box-shadow: rgb(247 123 155 / 71%) 0px 3px 16px 0px; */
    }
</style>
    {{-- @include('layouts.t-student-nav') --}}
    <!-- student dashboard starts -->


<section class="h-screen flex items-center justify-center">
    <div class="w-96 borde rounded-xl p-4 text-center">
        <div class="text-center mb-12">
            {{-- <div class="relative  z-10 flex items-center w-aut leading-10 lg:flex-grow-0 lg:flex-shrink-0 text-center mx-auto"><a class="mr- flex items-center space-x-2" href="{{url('/home')}}"><svg width="80" height="80" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg" class="size-6"><ellipse cx="30.882" cy="30.803" rx="30.3097" ry="30.2769" fill="url(#paint0_radial_36_64)"></ellipse><defs><radialGradient id="paint0_radial_36_64" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(0.572266 0.526062) rotate(44.969) scale(85.6825 85.6824)"><stop offset="0.352001" stop-color="#090909"></stop><stop offset="0.591494" stop-color="#2770EA"></stop><stop offset="0.793825" stop-color="#FF7E97"></stop><stop offset="0.972489" stop-color="#FF9203"></stop></radialGradient></defs></svg><span class="hidde text-xl font-bold tracking-tigh text-neutral-800 sm:inline-block"></span></a><nav class="items-center hidden space-x- text-sm font-medium lg:flex"></nav></div> --}}
            <svg class=" rotate-90 mx-auto" fill="black" width="24" height="24" viewBox="0 0 32 32" version="1.1" aria-labelledby="codekaro-home" aria-hidden="false" style="flex-shrink:0"><desc lang="en-US">Unsplash logo</desc><title id="codekaro">Codekaro</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg>
            {{-- <p>codekaro</p> --}}
        </div>
        <div class="text-left">
            {{-- <p class="text-neutral-700 text-cente">checkout</p>
            <h1 class="font-bold text-xl text-cente">₹4999</h1> --}}

        <div class="mt-4 flex justify-between">
            <p class="text-neutral-600">{{$batch->name}}</p>
            <h1 class="font-bo">{{$batch->payable}}</h1>
        </div>
        <div class="my-2 flex justify-between border-t border-neutral-200 border-dashed">
            <p class="text-neutral-600 mt-2">Total payable <br></p>
            <h1 class="font-bo mt-2">{{$batch->payable}}</h1>
        </div>
        </div>
        
        <form action="{{ route('payment') }}" method="POST" class="">
            @csrf
            <script async src="https://checkout.razorpay.com/v1/checkout.js"
                data-key='rzp_live_je6jCwL5udOnN0' 
                data-amount="100"
                data-order_id="{{$order->id}}"
                data-buttontext="Pay ₹{{$batch->payable}} & Join Now" data-name="Codekaro" 
                data-description="{{$batch->name}}"
                data-image="{{ asset('assets/img/codekaro-dark.png') }}"
                data-prefill.name="{{Auth::user()->name}}"
                data-prefill.email="{{Auth::user()->email}}"
                data-prefill.contact="{{Auth::user()->mobile}}"
                data-theme.color="#000">
            </script>
            <input type="hidden" custom="Hidden Element" name="b" value="{{$batch->id}}">
            <p class="text-xs mt-2 text-neutral-600">By proceeding you agree to our terms & conditions and Privacy policy</p>
        </form>
    </div>
    <script>
        window.addEventListener('load', function() {
        // Find the Razorpay payment button element
        var razorpayButton = document.querySelector('.razorpay-payment-button');
      
        // Simulate a click event on the button
        razorpayButton.click();
      });
      
      </script>
</section>


    
</section>