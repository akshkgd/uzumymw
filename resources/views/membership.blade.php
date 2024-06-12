@extends('layouts.t-student')
@section('content')
@auth
@include('layouts.t-student-nav')
@endauth


<body>

    <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        </div>
    
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
          <div class="mt-1 flex justify-center">
            
          </div>
          <div class="text-center ">
            <h2 class="text-cente text-2xl -mt-1 font-bold leading-9 tracking-tight text-gray-900">MERN Implementers Community (Get job or 120% salary hike Guaranteed).</h2>
    
          <p class="bg-white px-5 mt-4 text-gray-500 text-left">3-5 Live Group Mentorship Sessions every Month with Ashish Shukla**</p>
          <p class="bg-white px-5 mt-2 text-gray-500 text-left">Daily live doubt solving sessions with mentors</p>
          <p class="bg-white px-5 mt-2 text-gray-500 text-left">Implementation Focused Action Gameplan with weekly Accountability.</p>
          <p class="bg-white px-5 mt-2 text-gray-500 text-left">Interview Prepration, Placement Assistance with the Top-Class Community & Ashish Shukla</p>

          </div>
          
          
          <div class="mt-8">
          
          <a href="{{url('/enroll/67')}}" class="">
            <div class="border  my-2 p-3 rounded-xl">
                <div class="flex items-center justify-between">
                    <div class="">
                        <div class="flex gap-2 items-center">
                            <p class="text-neutral-700 font-semibold">Complete Access</p>
                        
                        </div>
                        <!-- <p class="text-sm">Billed yearly</p> -->
                        <div class="text-xs rounded-full inline-block py-[2px] px-4" style="background: linear-gradient(135deg, rgb(255, 194, 138) 0%, rgb(255, 138, 199) 100%), rgb(225, 224, 255);">Recommended</div>

                    </div>
                    <p class="text-blue-600 font-bold">₹17999</p>
                </div>
            </div>  
        </a>
        <a href="{{url('/start-fsd')}}" class="">
            <div class="border  my-2 p-3 rounded-xl">
                <div class="flex items-center justify-between">
                    <div class="">
                        <p class="text-neutral-700 font-semibold">Monthly</p>
                        <p class="text-sm">Billed monthly</p>
                    </div>
                    <p class="text-blue-600 font-bold">₹1999</p>
                </div>
            </div>  
        </a>
            
            </div>
        </div>
      </main>

    
   

</body>

</html>