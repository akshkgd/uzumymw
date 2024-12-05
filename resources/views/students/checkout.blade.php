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

@guest
<section class="h-screen flex items-center justify-center">
    <div class="w-96 borde rounded-xl p-4 text-center">
        <div class="text-center mb-12">
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
@endguest
<section class="h-screen bg-neutral-5 flex items-center justify-center">
    <div class="w-96 border bg-whit rounded-2xl  text-center">
        <div class="text-center  bg-black text-white p-5 py-12 rounded-t-2xl">
            <svg class=" rotate-90 mx-auto" fill="white" width="24" height="24" viewBox="0 0 32 32" version="1.1" aria-labelledby="codekaro-home" aria-hidden="false" style="flex-shrink:0"><desc lang="en-US">Unsplash logo</desc><title id="codekaro">Codekaro</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg>
            <h1 class="font-bold text-2xl mt-7">Frontend Cohort</h1>
           
            <div class="my-5">
                <p class="text-sm">Total payable</p>
                <h2 class="text-lg">₹28,401</h2>
            </div>
        </div>
        <div class="text-left">
            {{-- <p class="text-neutral-700 text-cente">checkout</p>
            <h1 class="font-bold text-xl text-cente">₹4999</h1> --}}

        {{-- <div class="mt-4 flex justify-between">
            <p class="text-neutral-600">{{$batch->name}}</p>
            <h1 class="font-bo">{{$batch->payable}}</h1>
        </div>
        <div class="my-2 flex justify-between border-t border-neutral-200 border-dashed">
            <p class="text-neutral-600 mt-2">Total payable <br></p>
            <h1 class="font-bo mt-2">{{$batch->payable}}</h1>
        </div> --}}
        </div>
        
        <form action="{{ route('payment') }}" method="POST" class="bg-white rounded-t-lg -mt-4">
            @csrf
            <div class=" px-5 pb-5">
                <h1 class="text-left font-bold text-xl text-neutral-800 pt-10">Enter Details</h1>
                <p class="text-left mb-5">Enter mobile & email to continue</p>
            <input type="hidde" class="w-full py-3 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-neutral-100 border mb-2" custom="Hidden Element" placeholder="Enter Name" name="b">
            <input type="hidde" class="w-full py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-neutral-100 border mb-2" custom="Hidden Element" placeholder="Enter Email" name="b">
            <input type="hidde" class="w-full py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-neutral-100 border mb-2" custom="Hidden Element" placeholder="Enter WhatsApp number" name="b">
            <button href="" class="bg-black w-full p-3 text-white rounded-md">Enroll Now</button>

            </div>
            {{-- <p class="text-xs mt-4 text-neutral-600">By proceeding you agree to our terms & conditions and Privacy policy</p> --}}
        </form>
    </div> 
    
</section>