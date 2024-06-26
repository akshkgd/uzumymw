@extends('layouts.t-student')
@section('content')

<header
      id="sticky-header"
      class="fixed top-0 z-[60] flex items-center justify-center w-full h-16 duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-400 border-opacity-20"
    >
      <div
        class="flex items-center justify-between w-full px-4 mx-auto 2xl:px-0 max-w-5xl"
      >
        <div
          class="relative z-10 flex items-center w-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left"
        >
          <a
            href="{{url('/home')}}"
            class="inline-flex sm:mr-8 items-end font-sans text-2xl font-extrabold text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline"
          >
          <svg xmlns="http://www.w3.org/2000/svg" data-testid="geist-icon" stroke-linejoin="round" style="width:23px;height:25px;color:var(--ds-gray-1000)" viewBox="0 0 16 16" aria-label="Vercel logo"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 1L16 15H0L8 1Z" fill="currentColor"></path></svg>
          </a>
          
        </div>

        <div class="relative">
            
          <a href="{{url('/home')}}" class="btn border px-4 py-3 rounded-lg text-sm">Back to Dashboard</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        </div>
    
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
          <div class="mt-1 flex justify-center">
            <div class="inline-flex w-64 items-center justify-center "
            >
              
              <img src="{{asset('assets/img/learner-welcome.svg')}}" style="height: 9rem" alt="">
          </div>
          </div>
          <h2 class="text-center text-2xl mt-4 font-semibold leading-9 tracking-tight text-gray-900">Welcome to the full stack cohort!</h2>
    
          <p class="bg-white px-6 text-gray-800 text-center">You've started your membership and we emailed the details to <span class="text-blue-600">{{Auth::user()->email}}</span>.</p>
          <div class="text-center flex gap-2 justify-center">
            <a target="_blank" href="https://cal.com/ashish-shukla-ye5ege/onboarding-process-with-ashish" class="border border-gray-300 px-5 py-3 rounded-lg inline-block mt-6">Complete your onboarding</a>
            {{-- <a href="{{ action('StudentController@recordings', Crypt::encrypt($enrollment->id)) }}" class="border border-gray-300 px-5 py-3 rounded-lg inline-block mt-6">Access Course</a> --}}
            {{-- <a class="px-5 py-3 rounded-xl bg-black text-white mt-6" target="_blank" href="https://cal.com/ashish-shukla-ye5ege/onboarding-process-with-ashish">Book 1:1 Onboarding call with Ashish</a> --}}
          </div>
          <!-- <div class="text-center">
            <a href="" class="border px-5 py-3 rounded-lg inline-block mt-6">Back to Dashboard</a>
          </div> -->
        </div>
      </main>

</section>
@endsection