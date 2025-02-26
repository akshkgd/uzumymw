@extends('layouts.t-student')
@section('content')

<header
      id="sticky-header"
      class="fixed top-0 z-[60] h-14 flex items-center justify-center w-full duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-300 border-opacity-40"
    >
      <div
        class="flex items-center justify-between w-full px-4  mx-auto 2xl:px-0 max-w-6xl py-1"
      >
        <div
          class="relative z-10 flex items-center w-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left"
        >
          <a
            href="{{url('/home')}}"
            class="inline-flex sm:mr-8 items-end font-sans text-lg flex items-center gap-2 text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline"
          >
          {{-- <div class="font-bold text-neutral-700 text-xl">Codekaro</div> --}}
          {{-- <img style="height: 18px" src="https://app.cal.com/api/logo" alt=""> --}}
          <svg class=" rotate-90" fill="black" width="24" height="24" viewBox="0 0 32 32" version="1.1" aria-labelledby="codekaro-home" aria-hidden="false" style="flex-shrink:0"><desc lang="en-US">Unsplash logo</desc><title id="codekaro">Codekaro</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg>
           
          {{-- <svg xmlns="http://www.w3.org/2000/svg" data-testid="geist-icon" stroke-linejoin="round" style="width:23px;height:25px;color:var(--ds-gray-1000)" viewBox="0 0 16 16" aria-label="Vercel logo"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 1L16 15H0L8 1Z" fill="currentColor"></path></svg> --}}
          {{-- <span class="font-bold text-xl text-neutral-900 font-geist">Codekaro</span> --}}
          </a>
          <nav
            class="items-center hidden space-x-5 text-sm font-medium lg:flex"
          >
            
            
          </nav>
        </div>
        
        <a href="{{url('/home')}}" class="btn border px-4 py-3 rounded-lg text-sm">Back to Dashboard</a>
      </div>
    </header>

    <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        </div>
    
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
          <div class="mt-1 flex justify-center">
            <div class="inline-flex w-64 items-center justify-center "
            >
              
              <img src="{{asset('assets/img/nf.svg')}}" class="h-64" alt="">
          </div>
          </div>
          <h2 class="text-center text-2xl -mt-1 font-bold leading-9 tracking-tight text-gray-900">Page Not Found!</h2>
    
          <p class="bg-white px-6 text-gray-500 text-center">Uh-Oh! The page you're looking for seems to be missing</p>
          <!-- <div class="text-center">
            <a href="" class="border px-5 py-3 rounded-lg inline-block mt-6">Back to Dashboard</a>
          </div> -->
        </div>
      </main>

</section>
@endsection