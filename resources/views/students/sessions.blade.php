@extends('layouts.t-student')
@section('content')
    @include('layouts.t-student-nav')
    <!-- student dashboard starts -->
<style>
    .v:last-child{
        border: none !important
    }
</style>
    <main class="mt-28 flex flex-col justify-center align-middle py-12">
        <div class="mt-2">
          <div class="sm:w-[750px] mx-auto w-full px-4 md:px-0 text-center">
            <h2
              class="text-2xl font-semibold leading-9 tracking-tight text-gray-900">
              Manage your logged in sessions
            </h2>
            <p class="text-neutral-500"> Manage and logout your active sessions on other browsers and devices.</p>
          </div>
          <div class="mt-8 px-4">
            <div class="sm:w-[640px] w-full mx-auto border border-gray-200 rounded-2xl parent">
                @foreach($devices as $device)
              <div class="p-4 border-b border-gray-200 v" >
                  <div class="flex items-center justify-between">
                  <div class="flex items-center gap-4">
                    @if( $device->is_mobile )
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                      </svg>
                                
                                @elseif($device->is_desktop)
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                                    <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5M13.991 3l.024.001a1.5 1.5 0 0 1 .538.143.76.76 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.5 1.5 0 0 1-.143.538.76.76 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.5 1.5 0 0 1-.538-.143.76.76 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.5 1.5 0 0 1 .143-.538.76.76 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2"/>
                                    </svg>
                                @endif
                      
                    <div>
                      <p class="text-md font-medium text-gray-900 mb-0 leading-none">{{$device->device_name}} 
                        @if ($current_session_id == $device->id)  
                        <span class="text-blue-600 font-normal text-sm">(Active)</span>
                        @endif
                        </p>
                      <p class=" truncate text-sm text-gray-500 leading-2"> {{$device->browser}} - {{ Carbon\Carbon::parse($device->last_activity)->diffForHumans() }}</p>
  
                    </div>
                </div>
                      <p class=" truncate text-sm text-gray-500 leading-2">{{ $device->ip_address }}</p>
                      {{-- <a href="" class="truncate text-sm text-red-500 leading-2">End Session</a> --}}
                      <a href="{{ route('delete.session', ['sessionId' => $device->id]) }}" class="truncate text-sm text-red-500 leading-2">End Session</a>

                </div>
              </div>
              @endforeach
              
  
              <!-- <div class="border-t border-gray-200"></div> -->
              {{-- <div class="p-4 text-center text-sm">
                <p>Manage and logout your active sessions on other browsers and devices.</p>
              </div> --}}
            </div>
  
  
            <div class="sm:w-[640px] w-full mx-auto border border-red-300 rounded-2xl mt-5 p-5 flex gap-2">
              <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"></path></svg>
              <p class="text-red-500 ">Account will be automatically blocked if logged in from multiple devices or locations simultaneously. It's an irreversible action for security.</p>
  
              </div>
          </div>
        </div>
    </main>



@endsection
