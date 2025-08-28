@extends('layouts.t-student')
@section('content')
<header id="sticky-header" class="fixed top-0 z-[20] h-14 flex items-center justify-center w-full duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-200 border-opacity-40">
  <div class="flex items-center justify-between w-full px-4  mx-auto 2xl:px-0 max-w-6xl py-1">
      <div class="relative z-10 flex items-center w-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
          <a href="{{ url('/home') }}"
              class="sm:mr-8 font-sans text-lg flex items-center gap-2 text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline">
              <span class="text-xl font-bold cal-sans text-neutral-800">Codekaro</span>
          </a>
         
      </div>

            <a href="{{ url('/home') }}" class="btn border px-4 py-3 rounded-lg text-sm">Back to Dashboard</a>
        </div>
    </header>

    <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        </div>

        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="mt-1 flex justify-center">
                <div class="inline-flex w-64 items-center justify-center ">

                    <img src="{{ asset('assets/img/nf.svg') }}" class="h-64" alt="">
                </div>
            </div>
            <h2 class="text-center text-2xl -mt-1 font-bold leading-9 cal-sans text-gray-900">Page Not Found!</h2>

            <p class="bg-white px-6 text-gray-500 text-center">Uh-Oh! The page you're looking for seems to be missing</p>
            <!-- <div class="text-center">
                <a href="" class="border px-5 py-3 rounded-lg inline-block mt-6">Back to Dashboard</a>
              </div> -->
        </div>
    </main>

    </section>
@endsection
