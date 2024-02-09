@extends('layouts.t-student')
@section('content')
@auth
    @include('layouts.t-student-nav')
    
    @if($enrollment)
<main
      class="mt-32 flex flex-col justify-center align-middle px-6 py-12 lg:px-8"
    >
      <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
        <img src="{{asset('assets/img/fsd.svg')}}" class="h-12 inline-block mb-3" alt="">
        <h2 class="text-2xl font-bold leading-9 tracking-tight text-gray-900">
          Upgrade to VIP</h2>
          <p class="text-gray-700">Get javascript crash course and gain one year access to content updates and recordings! Get all of this for just Rs 199/-.  </p>
      </div>

      <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
        
        <div class="relative w-full mt-2 content">
          <!-- Tab Content 1 - Replace with your content -->
          <div class="bg-card text-neutral-900 mt-5">
            <form action="{{ route('cssUpgrade') }}" method="POST" class="">
                @csrf
            
              
            </div>
            <input type="hidden" name="auth" value="true">
            <input type="hidden" name="id" value="{{$enrollment->id}}">
            <div class="flex items-center justify-center pt-0 mt-3">
              <button type="submit"
                class="inline-flex items-center justify-center w-full px-4 py-4 text-sm font-normal tracking-wide text-white transition-colors duration-200 rounded-xl bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none"
              >
                Upgrade to VIP Now at Rs 199
            </a>
        </form>
              
            </div>
          </div>
        </div>
        </div>
        </main>
        @else
        <main
      class="mt-32 flex flex-col justify-center align-middle px-6 py-12 lg:px-8"
    >
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            </div>
        
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
              <div class="mt-1 flex justify-center">
                <div class="inline-flex w-64 items-center justify-center "
                >
                  
                  <img src="{{asset('assets/img/nf.svg')}}" class="h-64" alt="">
              </div>
              </div>
              <h2 class="text-center text-2xl -mt-1 font-bold leading-9 tracking-tight text-gray-900">You are not eligible for upgrade!</h2>
        
              <p class="bg-white px-6 text-gray-500 text-center">Uh-Oh! The page you're looking for seems to be missing</p>
              <!-- <div class="text-center">
                <a href="" class="border px-5 py-3 rounded-lg inline-block mt-6">Back to Dashboard</a>
              </div> -->
            </div>
          </main>
        @endIf
       @endauth

       @if($auth == false)
       <main
       class="mt-32 flex flex-col justify-center align-middle px-6 py-12 lg:px-8"
     >
       <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
         <img src="{{asset('assets/img/fsd.svg')}}" class="h-12 inline-block mb-3" alt="">
         <h2 class="text-2xl font-bold leading-9 tracking-tight text-gray-900">
           Upgrade to VIP</h2>
           <p class="text-gray-700">Get javascript crash course and gain one year access to content updates and recordings! Get all of this for just Rs 199/-.  </p>
       </div>
 
       <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
         
         <div class="relative w-full mt-2 content">
           <!-- Tab Content 1 - Replace with your content -->
           <div class="bg-card text-neutral-900 mt-5">
             <form action="{{ route('cssUpgrade') }}" method="POST" class="">
                 @csrf
             <div class="pt-0 space-y-2 hidde">
             
               <div class="space-y-1">
                 <label
                   class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                   for="name"
                   >Registered Email id</label
                 ><input
                   type="text"
                   placeholder="youremail@gmail.com"
                   id="name"
                   name="email"
                   class="flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-xl peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                 />
               </div>
               
             </div>
             <input type="hidden" name="auth" value="false">
             <div class="flex items-center justify-center pt-0 mt-3">
               <button type="submit"
                 class="inline-flex items-center justify-center w-full px-4 py-4 text-sm font-normal tracking-wide text-white transition-colors duration-200 rounded-xl bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none"
               >
                 Upgrade to VIP Now at Rs 199
             </a>
         </form>
               
             </div>
           </div>
         </div>
         </div>
         </main>
       @endif
@endsection