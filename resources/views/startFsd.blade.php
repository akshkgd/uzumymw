@extends('layouts.t-student')
@section('content')
@auth
@include('layouts.t-student-nav')
@endauth
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<body>

  <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <div class="mt-1 flex justify-center">
        
      </div>
      <h2 class="text-center text-2xl -mt-1 font-bold leading-9 tracking-tight text-gray-900">Subscribe for full stack cohort.</h2>

      <p class="bg-white px-6 text-gray-500 text-center">Full access to cohort's on demand videos, weekend live sessions and Interview prepration.</p>
      <form class="contribution-form mt-5" id="contribution-form" method="POST"
                            enctype="multipart/form-data">
                               @csrf
      @auth
      <div class="border rounded-xl mt-4">
            <div class="p-4">
                <p class="m-0">{{Auth::user()->name}}</p>
            </div>
            <div class="borde border-t p-4">
                <p class="m-0">{{Auth::user()->email}}</p>
            </div>
            <div class="borde border-t p-4">
              <p class="m-0">{{Auth::user()->mobile}}</p>
          </div>
      </div>
      <input placeholder="your name"  name="name" class="" type="hidden" value="{{Auth::user()->name}}"/>
      <input  placeholder="youremail@gmail.com"  name="email" type="hidden" value="{{Auth::user()->email}}" />
      <input  placeholder="phone number" name="phone" type="hidden" value="{{Auth::user()->mobile}}"/>
      
      @else
      <input type="text" placeholder="your name" id="name" name="name" class="mt-2 flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-xl peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"/>
      <input type="text" placeholder="youremail@gmail.com" id="name" name="email" class="mt-2 flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-xl peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"/>
      <input type="text" placeholder="phone number" id="name" name="phone" class="mt-2 flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-xl peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"/>
      @endauth

      <div class="text-center">
        <button type="submit" class="bg-black text-white w-full px-5 py-4 rounded-xl inline-block mt-4" id="joinBtn" onclick="join()" >Subscribe now </a>
      </div>
      </form>
      
      <div class="">
      <!-- <p class="bg-white px-6 text-gray-500 text-center">Uh-Oh! The page you're looking for seems to be missing</p> -->

        <p class="text-sm text-gray-600 mt-3">By subscribing, you agree to our Terms of Use. Codekaro will automatically charge the membership fee <span class="text-blue-500">(currently 1999/month)</span> to your payment method until you cancel. You may cancel at any time to avoid future charges.</p>
      </div>
    </div>
  </main>

    <form class="contribution-form" name="contribution_form" method="POST"
                            enctype="multipart/form-data" action="{{route('store-subscription')}}">
                               @csrf 
      <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id"/>
      
      <input type="hidden" name="razorpay_signature" id="razorpay_signature"/>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
  {{-- using cdn here --}}
      <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
      <script>       
        $(document).ready(function(){
         
         $('#contribution-form').submit(function(e){
          e.preventDefault();
          var form = $('#contribution-form')[0];
          var data = new FormData(form);
          var URL = "{{route('create-subscription')}}";
          $.ajax({
          url:URL,
          data:data,
          type:"POST",
          cache:false,
          processData:false,
          contentType:false,
          success:function(dta)
          {
            if(dta.status === true)
            {

              //alert(dta.url+" subscription url successfully generated");
             // location.reload();
              //here we are passing options data from backend 
              proceedPayment(dta.checkoutData);
              
            }
          },
          error:function(dta){
            //show error message
         console.log(dta.responseJSON.message);
          }
          });
         })
       
        });
        //this function calls when form submited and order id created successfully
        var proceedPayment = function(dta){
          var options = dta;
          options.handler = function(response)
        {
          document.getElementById('razorpay_payment_id').value =response.razorpay_payment_id;
          document.getElementById('razorpay_signature').value =response.razorpay_signature;
          document.contribution_form.submit();
       
        }
        Razorpay.open(options);
        }
        

        function join(){
          let btn = document.getElementById('joinBtn');
          btn.innerText = 'please wait...'
        }
      </script>

</body>

</html>