@extends('layouts.t-student')
@section('content')
    @include('layouts.t-student-nav')
    <!-- student dashboard starts -->



    {{-- course card start --}}
    @isset($enrollments)
        @if ($enrollments->count() > 0)
            <main class=" flex flex-col justify-center align-middle py-12 mx-4 xlg:mx-0">
                <div class="mt-2">
                    <div class="mt-24 max-w-6xl mx-auto">
                        <h2 class="font-semibold text-xl">
                            <span id="time"></span> <span>{{ 
                                collect(explode(' ', Auth::user()->name))
                                    ->when(
                                        fn($words) => strlen($words->first()) <= 1,  // Check if first word is 1 char or less
                                        fn($words) => $words->take(2),
                                        fn($words) => $words->take(1)
                                    )
                                    ->first() 
                                }}!</span>
                        </h2>
                        <p class="text-neutral-500 -mt-1">Welcome to your dashboard, here you will find the enrolled courses.</p>
                        {{-- <a href="" class="">All Enrolled Courses</a> --}}
                    <div class="mt-8 flex flex-wrap gap-8">
                        @foreach ($enrollments as $enrollment)
                            
                        <div class="sm:w-72 {{ $enrollment->batch->type == 1 ? 'cursor-pointer hover:rotate-1 transition-all' : '' }}" 
                             {{ $enrollment->batch->type == 1 ? "onclick=window.location.href='" . action('StudentController@recordings', Crypt::encrypt($enrollment->id)) . "'" : '' }}>
                            <div class="relative borde">
                                <img class="rounded-xl" src="{{asset($enrollment->img)}}" alt="">
                                <div class="absolute bottom-0 m-3 rounded-full text-sm px-4 {{ $enrollment->batch->status == 3 ? 'bg-green-50 text-green-800' : 'bg-orange-50 text-orange-950' }}">
                                    {{ $enrollment->batch->status == 3 ? 'Completed' : 'In progress' }}
                                </div>
        
                            </div>
                            <h2 class="mt-2 text-md">{{$enrollment->batch->name}}</h2>
                            
                            @if ($enrollment->batch->type == 2)
                            
                                        <div class="">
                                            @if ($enrollment->batch->status <= 2)
                                                
                                                <a target="_blank" href="{{$enrollment->batch->groupLink}}" class="hover:text-violet-600 -ml-2 flex items-center gap"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-short rotate-45" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5"/>
                                                  </svg>Join WhatsApp</a>
                                            @elseif($enrollment->batch->status == 3)
                                                
                                               <div class="flex gap-2">
                                                @if(isset($enrollment->certificateId) && $enrollment->certificateId)
                                                    <a href="{{ action('BatchController@certificate', $enrollment->certificateId) }}" target="_blank" class="hover:text-violet-600 -ml-2 flex items-center gap-"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-short rotate-45" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5"/>
                                                    </svg>Get Certificate</a>
                                                
                                                @endif
                                                @if($enrollment->certificateFee > 0)
                                                <a href="{{$enrollment->batch->groupLink2}}" target="_blank" class="hover:text-violet-600 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-short rotate-45" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5"/>
                                                  </svg>Get Bonuses</a>
                                                @endif
                                               </div>
                                                
                                            @endif
                                        </div>
                                    @else
                                    
                                        <div class="flex flex-col sm:flex-row gap-3 mt-">
                                            <div class="sm:flex flex-wrap gap-2">
                                                <p class="mb text-s text-gray-700">{{ optional($enrollment)->progress ?? 0 }}% completed in
                                                    @php
                                                    $timeSpent = optional($enrollment)->time_spent ?? 0; // Time spent in minutes
                                                    $hours = floor($timeSpent / 60);
                                                    $minutes = $timeSpent % 60;
                                                    @endphp
                                                    @if($hours > 0)
                                                        {{ $hours }} Hrs {{ $minutes }} Mins
                                                    @else
                                                        {{ $minutes }} Mins
                                                    @endif</p>
                                                {{-- <a href="{{ action('StudentController@recordings', Crypt::encrypt($enrollment->id)) }}" class="">Access Course</a> --}}
                                            </div>
                                            
                                        </div>
                                    @endif
                        </div>
                        @endforeach
                        @if(isset($showPromotion) && $showPromotion)
                        
                            @if(Auth::user()->college == 'professional')
                            <div class="sm:w-72 hover:cursor-pointer hover:rotate-1 transition-all" 
                                 onclick="window.dispatchEvent(new CustomEvent('open-mentorship-modal'))">
                                <img src="{{asset('assets/img/intensive.webp')}}" alt="" class="rounded-2xl filter grayscale hover:grayscale-0 transition-all">
                                <h2 class="mt-2 text-md">Want to upskill?</h2>
                                <h2 class=" text-md">Apply for 1:1 Mentorship</h2>
                            </div>
                            @else
                            <div class="flex gap-8 flex-wrap">
                              <div class="sm:w-72 hover:cursor-pointer hover:rotate-1 transition-all" 
                                   onclick="window.dispatchEvent(new CustomEvent('open-mentorship-modal'))">
                                <img src="{{asset('assets/img/intensive.webp')}}" alt="" class="rounded-2xl filter grayscale hover:grayscale-0 transition-all">
                                <h2 class="mt-2 text-md">Looking for career growth?</h2>
                                <h2 class=" text-md">Apply for 1:1 Mentorship</h2>
                            </div>
                            <div class="sm:w-72 hover:cursor-pointer hover:rotate-1 transition-all" onclick="window.open('https://wa.me/917318555485?text=Hey%2C%20my%20email%20is%20{{ urlencode(Auth::user()->email) }}%2C%20and%20i%20want%20to%20join%20the%20Frontend%20domination%20Program.', '_blank')">
                            <img src="{{asset('assets/img/react.webp')}}" alt="" class="rounded-2xl filter grayscale hover:grayscale-0 transition-all">
                            <h2 class="mt-2 text-md">Want to upskill?</h2>
                            <h2 class=" text-md">Join Frontend cohort at ₹4999</h2>
                            </div>
                            {{-- <div class="sm:w-72 hover:cursor-pointer hover:rotate-1 transition-all">
                              <img src="{{asset('assets/img/backend.webp')}}" alt="" class="rounded-2xl filter grayscale hover:grayscale-0 transition-all">
                              <h2 class="mt-2 text-md">Want to upskill?</h2>
                              <h2 class=" text-md">Join Frontend cohort at ₹4999</h2>
                              </div> --}}
                              </div>
                            @endif
                        </div>
                    @endif
                    </div>

                    
                        
                        
                        
                        
                        
                        
                        
                        
                    @else
                        <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
                            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                            </div>

                            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                                <div class="mt-1 flex justify-center">
                                    <div class="inline-flex w-64 items-center justify-center ">

                                        <img src="{{ asset('assets/img/nf.svg') }}" class="h-64" alt="">
                                    </div>
                                </div>
                                <h2 class="text-center text-2xl -mt-1 font-bold leading-9 tracking-tight text-gray-900">No active course found.</h2>

                                <p class="bg-white px-6 text-gray-500 text-center">Login from the email that you have used while making the payment or mail us at info@codekaro.in! Currently you are logged in from <span class="text-black">{{Auth::user()->email}}</span></p>
                                <p class="text-center mt-3"></p>
                                <div class="text-center">
                                    <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="border px-5 py-3 rounded-lg inline-block mt-6 text-md">
                                        Logout Now</a>
                                        
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>

                                        
                                </div>
                            </div>
                        </main>
        @endif
    @endisset
    </div>
    <!-- <div class="mt-4 px-4">
                <div
                  class="sm:w-[650px] p-4 w-full none mx-auto border border-gray-200 rounded-2xl"
                >
                  <div class="flex-auto">
                    <p class="text-2xl font-medium leading-6 text-gray-900">
                      How to CSS
                    </p>
                    <p class="mt-1 truncate text-sm leading-5 text-gray-500">
                      By Ashish Shukla
                    </p>
                  </div>
      
                  <div class="flex flex-col sm:flex-row gap-x-5 my-2">
                    <p>&centerdot; Starting on 26th Jan &centerdot;</p>
                    <p>&centerdot; 6 months &centerdot;</p>
                  </div>
                  <div class="flex flex-col sm:flex-row gap-3">
                    <button
                      type="button"
                      class="inline-flex items-center justify-center gap-x-2 px-[30px] py-[14px] text-[15px] text-white transition-colors duration-200 rounded-[10px] bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none"
                    >
                      <img src="whatsapp.png" class="h-5" alt="" />
                      <span>Join Whatsapp Group</span>
                    </button>
                    <div class="h-full grid grid-cols-2 gap-3 sm:flex">
                      <button
                        href=""
                        class="inline-flex items-center justify-center px-[30px] py-[14px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] text-neutral-500 hover:text-neutral-700 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline"
                      >
                        Recordings
                      </button>
                      <button
                        href=""
                        class="inline-flex items-center justify-center px-[30px] py-[14px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] text-neutral-500 hover:text-neutral-700 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline"
                      >
                        Certificate
                      </button>
                    </div>
                  </div>
                </div>
              </div> -->
    </div>
    </main>









    <script>
        // fetch("https://type.fit/api/quotes")
        // .then(function(response) {
        //   return response.json();
        // })
        // .then(function(data) {
        //   console.log(data);
        // });

        //   function timeOfDay() {
        //   let hour = new Date().getHours();
        //   if (hour >= 4 && hour <= 11) return 'Morning';
        //   if (hour >= 12 && hour <= 16) return 'Afternoon';
        //   if (hour >= 17 && hour <= 20) return 'Evening';
        //   if (hour >= 21 || hour <= 3) return 'Night';
        // }
        // document.getElementById("time").innerHTML = (`Good ${timeOfDay()},`);
        // // time.innerHtml(`Good ${timeOfDay()}!`);


        function timeOfDay() {
            let hour = new Date().getHours();
            if (hour >= 4 && hour <= 11) return 'Morning';
            if (hour >= 12 && hour <= 16) return 'Afternoon';
            if (hour >= 17 && hour <= 20) return 'Evening';
            if (hour >= 21 || hour <= 3) return 'Night';
        }
        document.getElementById("time").innerHTML = (`Good ${timeOfDay()}`);
        console.log(timeOfDay());
        if (timeOfDay() == 'Morning') {
            document.getElementById("test").style.background = "#f8d2c3";
            document.getElementById("greet").style.color = "#f28b82";
        }
        if (timeOfDay() == 'Afternoon') {
            document.getElementById("test").style.background = "#ffefc3";
            document.getElementById("greet").style.color = "#fbc129";
        }
        if (timeOfDay() == 'Evening') {
            document.getElementById("test").style.background = "#ceead6";
            document.getElementById("greet").style.color = "#4185f4";
        }
        if (timeOfDay() == 'Night') {
            document.getElementById("test").style.background = "#d2e3fc";
            document.getElementById("greet").style.color = "#4185f4";
        }
    </script>
    
   








<!-- Alpine.js Modal Component -->
<div x-data="{ 
    open: false
}" 
    x-init="
        window.addEventListener('open-mentorship-modal', () => { open = true; });
    "
    x-show="open" 
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-50 overflow-y-auto" 
    style="display: none;"
    @keydown.escape.window="open = false">
    
    <!-- Overlay -->
    <div class="fixed z-10 inset-0 bg-black bg-opacity-50" @click="open = false"></div>
    
    <!-- Modal -->
    <div class="relative min-h-screen flex items-center justify-center p-4 z-[300]">
        <div class="relative bg-white rounded-xl max-w-md w-full p-6 overflow-hidden shado"
             @click.away="open = false"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-95"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-95">
            
            <!-- Close button -->
            <button @click="open = false" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <!-- Modal content -->
            <div class="text-center">
                {{-- <img src="{{asset('assets/img/intensive.webp')}}" alt="1:1 Mentorship" class="mx-auto rounded-xl mb-4 w-32"> --}}
                <h3 class="text-xl font-bold mb-2">Frontend Launchpad</h3>
                <p class="text-gray-600 mb-4">Get personalized guidance from industry experts to accelerate your tech career.</p>
                
                <div class="space-y-3 text-left mb-6">
                  <div class="flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <span>Onboarding call</span>
                </div>
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Personalized learning path</span>
                    </div>
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>1:1 Doubt Solving</span>
                    </div>
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Code review & Detailed Feedbacks</span>
                    </div>
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Interview preparation</span>
                    </div>
                    <div class="flex items-start">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                      <span>Machine Coding Round</span>
                  </div>
                  <div class="flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <span>Resume & LinkedIn Optimization</span>
                </div>
                <div class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                  <span>Job Referrals</span>
              </div>
                </div>
                
                <a href="https://cal.com/ashish-shukla-ye5ege/onboarding-process-with-ashish" 
                   target="_blank"
                   class="inline-flex w-full justify-center items-center px-5 py-3 border border-transparent text-base font-mediu rounded-xl text-white bg-black hover:bg-neutral-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                    Apply for the Frontend Intensive
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Make sure Alpine.js is included -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

@endsection