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
                <p class="m-0">Ashish Shukla</p>
            </div>
            <div class="borde border-t p-4">
                <p class="m-0">akshkgd@gmail.com</p>
            </div>
            <div class="borde border-t p-4">
              <p class="m-0">8563939301</p>
          </div>
      </div>
      <input type="text" placeholder="your name" id="name" name="name" class="" type="hidden" value="{{Auth::user()->name}}"/>
      <input type="text" placeholder="youremail@gmail.com" id="name" name="email" type="hidden" value="{{Auth::user()->email}}" />
      <input type="text" placeholder="phone number" id="name" name="phone" type="hidden" value="{{Auth::user()->phone}}"/>
      
      @else
      <input type="text" placeholder="your name" id="name" name="name" class="mt-2 flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-xl peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"/>
      <input type="text" placeholder="youremail@gmail.com" id="name" name="email" class="mt-2 flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-xl peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"/>
      <input type="text" placeholder="phone number" id="name" name="phone" class="mt-2 flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-xl peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"/>
      @endauth

      <div class="text-center">
        <button type="submit" class="bg-black text-white w-full px-5 py-4 rounded-xl inline-block mt-4">Subscribe now </a>
      </div>
      </form>
      
      <div class="">
      <!-- <p class="bg-white px-6 text-gray-500 text-center">Uh-Oh! The page you're looking for seems to be missing</p> -->

        <p class="text-sm text-gray-600 mt-3">By subscribing, you agree to our Terms of Use. Codekaro will automatically charge the membership fee <span class="text-blue-500">(currently 1999/month)</span> to your payment method until you cancel. You may cancel at any time to avoid future charges.</p>
      </div>
    </div>
  </main>


    <div class="container">

        <h1 class="text-center"> Razorpay Subscription Plan Integration </h1>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary credit-card-box">
                    <div class="panel-heading display-table">
                        <h3 class="panel-title ">Razorpay Subscription Plan Integration </h3>
                    </div>
                    <div class="panel-body">

                        @if(Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif


                        {{-- <form class="contribution-form mt-5" id="contribution-form" method="POST"
                            enctype="multipart/form-data">
                               @csrf --}}
                               <div class="form-group">
                                <label >Amount</label>
                                <input type="text" class="form-control" placeholder="Amount" name="amount">
                               
                              </div>
                              <div class="form-group">
                                <label >Subscription Plan</label>
                                <select class="form-control select3" name="period" id="period">
                                   
                                    <option value="daily" selected>Daily</option>
                                    <option value="weekly">Weekly</option>
                                    <option value="monthly" selected>Monthly</option>
                                    <option value="yearly">yearly</option>
                                                                    
                                </select>
                               
                              </div>
                              <div class="form-group">
                                <label >Payment Cycle</label>
                                <select class="form-control select3" name="total_count" id="total_count">
                                    
                                   
                                    <option value="1" selected>1 time</option>
                                    <option value="2">2 time</option>
                                    <option value="6" selected>6 time</option>
                                                                    
                                </select>
                               
                              </div>
                           <button id="createSubscription" class="btn btn-dark" type="submit">Checkout</button>
                        </form>
                     
                    </div>
                </div>
            </div>
        </div>

    </div>
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
     
      </script>

</body>

</html>