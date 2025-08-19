@extends('layouts.t-student')
@section('content')


    <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        </div>
    
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
          <div class="mt-1 flex justify-center">
            <div class="inline-flex w-64 items-center justify-center ">
              
              <img src="{{asset('assets/img/terminated.svg')}}" class="h-36" alt="">
            </div>
          </div>
          <h2 class="text-center text-2xl mt-2 font-bold leading-9 tracking-tight text-gray-900">Your account has been Terminated!</h2>
          <p class="bg-white px-6 text-neutral-500 text-center">You are currently logged in from <span class="font-bold">{{Auth::user()->email}}</span></p>
          <p class="bg-white px-6 text-neutral-500 text-center">If you think this is an error, please contact support.</p>
          <!-- <div class="text-center">
            <a href="" class="border px-5 py-3 rounded-lg inline-block mt-6">Back to Dashboard</a>
          </div> -->
        </div>
      </main>

</section>
@endsection