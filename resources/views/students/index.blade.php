@extends('layouts.t-student')
@section('content')
    @include('layouts.t-student-nav')
    <!-- student dashboard starts -->



    {{-- course card start --}}
    @isset($enrollments)
        @if ($enrollments->count() > 0)
            <main class="mt-28 flex flex-col justify-center align-middle py-12">
                <div class="mt-2">
                    <div class="sm:w-[750px] mx-auto w-full px-4 md:px-0">
                        <h2 class="text-2xl font-semibold leading-9 tracking-tight text-gray-900">
                            <span id="time"></span> <span>{{ Auth::user()->name }}!</span>
                        </h2>
                        <p class="text-neutral-500">Continue your full stack cohort.</p>
                    </div>
                    <div class="mt-8 px-4">
                        @foreach ($enrollments as $enrollment)
                            <div class="sm:w-[750px] w-full mx-auto border border-gray-200 rounded-2xl mb-8">
                                <div class="p-4">
                                    <div class="flex-auto">
                                        <p class="text-xl font-medium leading-6 text-gray-900">
                                            {{ $enrollment->batch->name }}
                                        </p>
                                        <p class="mt- truncate text-sm leading-5 text-gray-500">
                                            By Ashish Shukla
                                        </p>

                                        <p class="mt-3">1 year access</p>
                                    </div>

                                    <!-- <div class="flex flex-col sm:flex-row gap-x-5 my-2">
                          <p> Starting on 26th Jan</p>
                          <p>6 months </p>
                        </div> -->
                                    @if ($enrollment->batch->type == 2)
                                        <div class="mt-5">
                                            @if ($enrollment->batch->status < 3)
                                                <a href="{{ action('StudentController@recordings', Crypt::encrypt($enrollment->id)) }}"
                                                    class="inline-block  items-center justify-center px-[30px] py-[12px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] border-neutral-300 text-neutral-700 hover:text-neutral-950 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">Join
                                                    WhatsApp</a>
                                                <a href="{{ action('BatchController@batchDetails', Crypt::encrypt($enrollment->id)) }}"
                                                    class="inline-block  items-center justify-center px-[30px] py-[12px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] border-neutral-300 text-neutral-700 hover:text-neutral-950 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">Details</a>
                                            @elseif($enrollment->batch->status == 3)
                                                <a href="{{ action('StudentController@recordings', Crypt::encrypt($enrollment->id)) }}"
                                                    class="inline-block  items-center justify-center px-[30px] py-[12px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] border-neutral-300 text-neutral-700 hover:text-neutral-950 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">Access
                                                    Recordings</a>
                                                <a href="{{ action('BatchController@batchDetails', Crypt::encrypt($enrollment->id)) }}"
                                                    class="inline-block  items-center justify-center px-[30px] py-[12px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] border-neutral-300 text-neutral-700 hover:text-neutral-950 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">Details</a>
                                                <a href="{{ action('BatchController@certificate', $enrollment->certificateId) }}"
                                                    target="_blank"
                                                    class="inline-block  items-center justify-center px-[30px] py-[12px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] border-neutral-300 text-neutral-700 hover:text-neutral-950 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">Certificate</a>
                                            @endif
                                        </div>
                                    @else
                                        <div class="flex flex-col sm:flex-row gap-3 mt-5">
                                            <div class="h-full grid grid-cols-2 gap-3 sm:flex">
                                                <a href="{{ action('StudentController@recordings', Crypt::encrypt($enrollment->id)) }}"
                                                    class="inline-block  items-center justify-center px-[30px] py-[12px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] border-neutral-300 text-neutral-700 hover:text-neutral-950 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">Access
                                                    Course</a>
                                                <a href="{{ action('BatchController@batchDetails', Crypt::encrypt($enrollment->id)) }}"
                                                    class="inline-block  items-center justify-center px-[30px] py-[12px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] border-neutral-300 text-neutral-700 hover:text-neutral-950 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">Details</a>
                                            </div>
                                            <!-- <button @click="modalOpen=true" class="inline-flex items-center justify-center gap-x-2 px-[30px] py-[10px] text-[15px] transition-colors duration-200 bg-orange-50 border rounded-[10px] border-orange-400 text-neutral-950 hover:text-neutral-950 hover:bg-orange-100 active:bg-white focus:bg-orange-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-200/60 focus:shadow-outline"><img src="fsd.svg" class="h-5" alt="" />
                            <span>Upgrade to Fullstack</span></button> -->
                                            @if ($enrollment->batch->topicId == 11)
                                                <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                                                    :class="{ 'z-40': modalOpen }" class="relative w-auto h-auto">
                                                    <button @click="modalOpen=true"
                                                        class="inline-flex items-center justify-center gap-x-2 px-[30px] py-[12px] text-[15px] transition-colors duration-200 bg-orange-50 border rounded-[10px] border-orange-400 text-neutral-950 hover:text-neutral-950 hover:bg-orange-100 active:bg-white focus:bg-orange-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-200/60 focus:shadow-outline"><img
                                                            src="fsd.svg" class="h-5" alt="" />
                                                        <span>Upgrade to Fullstack</span></button>
                                                    <template x-teleport="body">
                                                        <div x-show="modalOpen"
                                                            class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                                            x-cloak>
                                                            <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                                                                x-transition:enter-start="opacity-0"
                                                                x-transition:enter-end="opacity-100"
                                                                x-transition:leave="ease-in duration-300"
                                                                x-transition:leave-start="opacity-100"
                                                                x-transition:leave-end="opacity-0" @click="modalOpen=false"
                                                                class="absolute inset-0 w-full h-full bg-white backdrop-blur-sm bg-opacity-70">
                                                            </div>
                                                            <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                                                x-transition:enter="ease-out duration-300"
                                                                x-transition:enter-start="opacity-0 -translate-y-2 sm:scale-95"
                                                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                                x-transition:leave="ease-in duration-200"
                                                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                                x-transition:leave-end="opacity-0 -translate-y-2 sm:scale-95"
                                                                class="relative w-full py-6 bg-white border shadow-lg px-7 border-neutral-200 sm:max-w-lg sm:rounded-xl">
                                                                <div class="flex items-center justify-between pb-3 text-center">
                                                                    <!-- <h3 class="text-lg font-semibold">Upgrade to fullstack!</h3> -->
                                                                    <!-- <button @click="modalOpen=false" class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                              </button> -->
                                                                </div>
                                                                <div class="flex justify-center">
                                                                    <img src="{{ asset('assets/img/fsd.svg') }}"
                                                                        class="h-16 mb-3" alt="">
                                                                </div>
                                                                <div class="relative w-auto pb-8 text-center">
                                                                    <p class="text-lg font-semibold">Upgrade to fullstack today
                                                                        at Rs 5999/-</p>
                                                                    <p class="font-light text-neutral-600 text-sm mt-3">This is
                                                                        a one time offer valid till 5th of February. The same
                                                                        offer will not be available under any circumstances.</p>
                                                                </div>
                                                                <div
                                                                    class="flex flex-col-reverse sm:flex-row sm:justify-center sm:space-x-2 text-center">
                                                                    <button @click="modalOpen=false" type="button"
                                                                        class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-100 focus:ring-offset-2">No
                                                                        thanks</button>
                                                                    <button @click="modalOpen=false" type="button"
                                                                        class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 bg-neutral-950 hover:bg-neutral-900">Upgrade
                                                                        Now</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </template>
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                                @if ($enrollment->batch->type == 2 && $enrollment->batch->status < 2)
                                    <div class="border-t border-gray-200"></div>
                                    <div class="p-4">
                                        <div class="flex-auto">
                                            <p class="text-lg font-medium leading-6 text-gray-900">
                                                Upcoming: {{ $enrollment->batch->topic }}
                                            </p>
                                        </div>

                                        <div class="mb-5">
                                            <p class="">
                                                {{ Carbon\Carbon::parse($enrollment->batch->nextClass)->format('D, d M Y') }}
                                                {{ Carbon\Carbon::parse($enrollment->batch->nextClass)->format('h:i A') }} </p>
                                        </div>
                                        <div class="flex flex-col sm:flex-row gap-3">
                                            <div class="h-full grid sm:flex">
                                                <a href="{{ $enrollment->batch->meetingLink }}"
                                                    class="inline-block items-center justify-center px-[30px] py-[12px] text-[15px] transition duration-200 bg-neutral-200 border rounded-[10px] border-transparent text-neutral-950 hover:text-neutral-950 hover:bg-white hover:border-neutral-300 active:bg-white focus:bg-neutral-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">
                                                    Join Live Session
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($enrollment->batch->type == 1)
                                    <div class="border-t border-gray-200"></div>
                                    <div class="p-4">
                                        <div class="flex-auto">
                                            <p class="text-lg font-medium leading-6 text-gray-900">
                                                Upcoming: {{ $enrollment->batch->topic }}
                                            </p>
                                        </div>

                                        <div class="mb-5">
                                            <p class="">
                                                {{ Carbon\Carbon::parse($enrollment->batch->nextClass)->format('D, d M Y') }}
                                                {{ Carbon\Carbon::parse($enrollment->batch->nextClass)->format('h:i A') }} </p>
                                        </div>
                                        <div class="flex flex-col sm:flex-row gap-3">
                                            <div class="h-full grid sm:flex">
                                                <a href="{{ $enrollment->batch->meetingLink }}"
                                                    class="inline-block items-center justify-center px-[30px] py-[12px] text-[15px] transition duration-200 bg-neutral-200 border rounded-[10px] border-transparent text-neutral-950 hover:text-neutral-950 hover:bg-white hover:border-neutral-300 active:bg-white focus:bg-neutral-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">
                                                    Join Live Session
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                        {{-- course card end --}}
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

    <!-- Invoice Card  -->
    <!-- <div class="mt-4 px-4">
                <div
                  class="sm:w-[650px] p-4 w-full mx-auto border border-gray-200 rounded-2xl"
                >
                  <div class="grid grid-cols-2">
                    <div class="justify-self-start">
                      <div class="flex-auto">
                        <p class="text-2xl font-medium leading-6 text-gray-900">
                          How to CSS
                        </p>
                      </div>
      
                      <div class="flex flex-col sm:flex-row gap-x-4 my-2">
                        <p class="text-xl items-center">₹ 17,999</p>
                        <span class="hidden md:block text-2xl items-center"
                          >&centerdot;</span
                        >
                        <p class="flex text-md text-gray-500 items-center">
                          17th Nov 2023
                        </p>
                      </div>
                    </div>
                    <div class="justify-self-end">
                      <a
                        class="text-gray-700 hover:text-gray-900 cursor-pointer"
                        href=""
                        >Get Quote &nearr;</a
                      >
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
    
   






@endsection
