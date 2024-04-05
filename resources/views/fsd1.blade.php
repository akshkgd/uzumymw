@extends('layouts.t-student')
@section('content')

    {{-- @include('layouts.t-student-nav') --}}
    
    <style>
        .subscription-button-widget{
            box-shadow: none !important;
            border-radius: 14px !important;
            background-color: white !important;
            border: none;
        }
        .item-details{
            border-radius: 12px !important;
        }
        .item-label{
            margin-bottom: 10px !important;
        }
        .subscription-button-widget .item-label input[type=radio]:checked+.item .item-details{
            border: 1px solid dodgerblue;
        }
        .SubscriptionButton{
            padding: 16px;
            height: auto;
            border-radius: 12px !important;
            margin-top: -12px;
            font-family: Geist, sans-serif !important;
        }
        input[type="radio"]{
            display: none;
        }
        .SubscriptionButton svg{
            display: none;
        }
    </style>
<main
      class="mt-32 flex flex-col justify-center align-middle px-6 py-12 lg:px-8"
    >
      <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
        {{-- <img src="{{asset('assets/img/fsd.svg')}}" class="h-12 inline-block mb-3" alt=""> --}}
        <h2 class="text-2xl font-bold leading-9 tracking-tight text-gray-900">
          Join Mern cohort on subscription</h2>
          

      </div>

      <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
        
        <div class="relative w-full mt-2 content">
          
          <div class="bg-card text-neutral-900 mt-5">
            <div class="text-left px-5">
                <p class="text-gray-700">✅ On demand videos</p>
                <p class="text-gray-700">✅ Live doubt solving</p>
                <p class="text-gray-700">✅ Personalized Feedbacks</p>
                <p class="text-gray-700">✅ Placement assitance</p>
                <p class="text-gray-700">✅ LinkedIn profile optimization</p>
                <p class="text-gray-700">✅ Resume Building</p>

              </div>
        <form><script src="https://cdn.razorpay.com/static/widget/subscription-button.js" data-subscription_button_id="pl_Nux7BMQm10H3Hf" data-button_theme="brand-color" async> </script> </form>

            </div>
          </div>
        </div>
        </div>
        </main>
        
        
      
@endsection