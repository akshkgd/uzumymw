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
                        <p class="text-neutral-500 -mt-1">Continue your learning</p>
                    </div>
                    <div class="mt-8 px-4">
                        @foreach ($enrollments as $enrollment)
                            <div class="sm:w-[750px] bg-orang-50 w-full mx-auto border border-neutral-200 rounded-2xl mb-8">
                                <div class="p-4">
                                    <div class="flex-auto">
                                        <p class="text-lg font-medium leading-6 text-gray-900">
                                            {{ $enrollment->batch->name }}
                                        </p>
                                        <p class="mt- truncate text-sm leading-5 text-gray-500">
                                            1 year access
                                        </p>

                                        {{-- <p class="mt-3">1 year access</p> --}}
                                    </div>

                                    <!-- <div class="flex flex-col sm:flex-row gap-x-5 my-2">
                          <p> Starting on 26th Jan</p>
                          <p>6 months </p>
                        </div> -->
                                    @if ($enrollment->batch->type == 2)
                                        <div class="mt-5">
                                            @if ($enrollment->batch->status < 3)
                                                <a target="_blank" href="{{$enrollment->batch->groupLink}}"
                                                    class="inline-block  items-center justify-center px-[30px] py-[12px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] border-neutral-300 text-neutral-700 hover:text-neutral-950 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">Join
                                                    WhatsApp</a>
                                                <a href="{{ action('BatchController@batchDetails', Crypt::encrypt($enrollment->id)) }}"
                                                    class="inline-block  items-center justify-center px-[30px] py-[12px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] border-neutral-300 text-neutral-700 hover:text-neutral-950 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">Details</a>
                                            @elseif($enrollment->batch->status == 3)
                                                <a href="{{$enrollment->batch->groupLink2}}"
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
                                            <div class="sm:flex flex-wrap gap-2">
                                                <a href="{{ action('StudentController@recordings', Crypt::encrypt($enrollment->id)) }}"
                                                    class="inline-block  items-center justify-center px-[30px] py-[12px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] border-neutral-300 text-neutral-700 hover:text-neutral-950 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">Access
                                                    Course</a>
                                                {{-- <a href="{{ action('BatchController@batchDetails', Crypt::encrypt($enrollment->id)) }}"
                                                    class="inline-block  items-center justify-center px-[30px] py-[12px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] border-neutral-300 text-neutral-700 hover:text-neutral-950 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">Details</a> --}}
                                            </div>
                                            
                                        </div>
                                    @endif
                                </div>
                                @if ($enrollment->batch->type == 2 && $enrollment->batch->status < 2)
                                    <div class="border-t border-gray-200"></div>
                                    <div class="p-4 ">
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
                                            <div class="  sm:flex">
                                                <a href="{{ $enrollment->batch->meetingLink }}"
                                                    class="inline-block items-center justify-center px-[30px] py-[12px] text-[15px] transition duration-200 bg-neutral-200 border rounded-[10px] border-transparent text-neutral-950 hover:text-neutral-950 hover:bg-white hover:border-neutral-300 active:bg-white focus:bg-neutral-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">
                                                    Join Live Session
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($enrollment->batch->type == 1)
                                    <div class="border-t border-gray-200"></div>
                                   
                                    @php
                                        $nextClassDate = \Carbon\Carbon::parse($enrollment->batch->nextClass);
                                        $today = \Carbon\Carbon::today();
                                    @endphp
                                    @if($nextClassDate->lessThanOrEqualTo($today))
                                    <div class="p-4 sm:flex  items-center gap-2">
                                        <svg data-testid="geist-icon" fill="none" height="40" viewBox="0 0 36 36" width="40" xmlns="http://www.w3.org/2000/svg"><path d="M32.5 19V18V8.5C32.5 5.73858 30.2614 3.5 27.5 3.5H8.5C5.73858 3.5 3.5 5.73858 3.5 8.5V27.5C3.5 30.2614 5.73858 32.5 8.5 32.5H20.5" fill="var(--store-kv-tertiary)" stroke="var(--store-kv-secondary)" stroke-linecap="round" stroke-width="1.25"></path><rect fill="var(--store-kv-secondary)" fill-opacity="0.15" height="7.55235" rx="0.5" stroke="var(--store-kv-secondary)" stroke-width="1.15" transform="rotate(13.8524 20.67 7.67203)" width="7.55235" x="20.67" y="7.67203"></rect><path d="M9.98777 11.9827C10.0546 11.6036 10.5067 11.439 10.8016 11.6865L17.4357 17.2532C17.7306 17.5006 17.647 17.9744 17.2853 18.106L9.14735 21.068C8.78566 21.1997 8.4171 20.8904 8.48394 20.5113L9.98777 11.9827Z" fill="var(--store-kv-secondary)" fill-opacity="0.1" stroke="var(--store-kv-secondary)" stroke-width="1.15"></path><path clip-rule="evenodd" d="M21.6581 20.1504C21.0631 20.502 20.7235 20.908 20.7235 21.3405V28.9945C20.6495 28.9982 20.5749 29 20.5 29C18.0147 29 16 26.9853 16 24.5C16 22.0147 18.0147 20 20.5 20C20.9004 20 21.2886 20.0523 21.6581 20.1504Z" fill="var(--store-kv-secondary)" fill-opacity="0.1" fill-rule="evenodd" stroke="var(--store-kv-secondary)" stroke-width="1.15"></path><path d="M28.0265 18.9C24.0078 18.9 20.75 19.9859 20.75 21.3255V26.985V32.6445C20.75 33.9866 23.984 35.07 28.0265 35.07C32.069 35.07 35.303 33.9866 35.303 32.6445V26.985V21.3255C35.303 19.9859 32.0452 18.9 28.0265 18.9Z" fill="var(--geist-background)"></path><path d="M35.303 21.3255C35.303 22.6651 32.0452 23.751 28.0265 23.751C24.0078 23.751 20.75 22.6651 20.75 21.3255M35.303 21.3255C35.303 19.9859 32.0452 18.9 28.0265 18.9C24.0078 18.9 20.75 19.9859 20.75 21.3255M35.303 21.3255V32.6445M35.303 21.3255V26.985M20.75 21.3255V32.6445M20.75 21.3255V26.985M35.303 26.985C35.303 28.3271 32.069 29.4105 28.0265 29.4105C23.984 29.4105 20.75 28.3271 20.75 26.985M35.303 26.985V32.6445M20.75 26.985V32.6445M20.75 32.6445C20.75 33.9866 23.984 35.07 28.0265 35.07C32.069 35.07 35.303 33.9866 35.303 32.6445" stroke="var(--store-kv-primary)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25"></path></svg>
                                        <div class="mt-2 sm:mt-0">
                                            <p class="text-neutral-800">No upcoming live class</p>
                                        <p class="text-neutral-600 text-sm -mt-1">You will be notified when class is scheduled.</p>
                                        </div>
                                    </div>
                                    @else
                                    <div>
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
                                                <div class=" sm:flex">
                                                    <a href="{{ $enrollment->batch->meetingLink }}"
                                                        class="inline-block items-center justify-center px-[30px] py-[12px] text-[15px] transition duration-200 bg-neutral-200 border rounded-[10px] border-transparent text-neutral-950 hover:text-neutral-950 hover:bg-white hover:border-neutral-300 active:bg-white focus:bg-neutral-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">
                                                        Join Live Session
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
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
