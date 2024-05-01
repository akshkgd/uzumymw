@extends('layouts.t-student')
@section('content')
@include('layouts.t-student-nav')
<!-- Dashboard  -->
<main class="mt-28 flex flex-col justify-center align-middle py-12">
    <div class="mt-2">
      <div class="sm:w-[750px] mx-auto w-full px-4 md:px-0 text-center">
        <h2
          class="text-2xl font-semibold leading-9 tracking-tight text-gray-900">
          Manage your {{$batch->name}}.
        </h2>
        <p class="text-neutral-500">Important links, Invoice, upcoming sessions, manage everything from one place.</p>
      </div>


      <div class="mt-14 px-4">
        <div class="sm:w-[640px] w-full mx-auto border border-gray-200 rounded-2xl">
          <div class="p-4 border-gray-200">
              <div class="flex items-center justify-between">
                  <div class="flex items-center gap-4"> 
                <div>
                  <p class="text-md font-mediu text-gray-900 mb-0 leading-none">Upcoming Session: How to CSS</p>
                  <p class=" truncate text-sm text-gray-500 leading-2 mt-1">Sun, 14 Apr 2024</p>
              </div>
            </div>
                  
                  <div>
                      <a href="" class="truncate text-sm text-blue-500 leading-2">Join Live</a>
                  </div>
            </div>
          </div>
          <div class="border-t border-gray-200">
              <div class="p-4 ">
                  <div class="flex items-center justify-between gap-3">
                      
                      <div>
                          <h1 class="text-md font-mediu text-gray-900 mb-0 leading-none">Certificate not generated!</h1>
                          <p class="truncate text-sm text-gray-500 leading-2 mt-1">Certificate will be generated after the submission of major project!</p>
                      </div>
                      <!-- <span class="text-5xl">🥇</span> -->
                  </div>

              </div>
          </div>

          
        </div>
        </div>

      
        @if($enrollment->subscriptionId === null)
        <div class="mt-4 px-4">
          <div class="sm:w-[640px] w-full mx-auto border border-gray-200 rounded-2xl">
            <div class="p-4 border-gray-200">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4"> 
                  <div>
                    <p class="text-md font-mediu text-gray-900 mb-0 leading-none">How to CSS</p>
                    <p class=" truncate text-sm text-gray-500 leading-2">pay_NSkED4dKIc4zOH</p>
                </div>
              </div>
                    
                        <div class="text-cente">
                            <p class=" truncate text-sm text-gray-700 leading-2">Rs 298</p>
                            <p class=" truncate text-sm text-gray-500 leading-2">7th April 2024</p>

                        </div>
                    <a href="" class="truncate text-sm text-blue-500 leading-2">Invoice</a>
              </div>
            </div>
          </div>
          </div>

          @else
          <div class="mt-4 px-4">
            <div class="sm:w-[640px] w-full mx-auto border border-gray-200 rounded-2xl">
              <div class="border-b border-gray-200">
                <div class="p-4 ">
                    <div class="flex items-center justify-between gap-3">
                        
                        <div>
                          <p class="text-md font-mediu text-gray-900 mb-0 leading-none">Subscription Status</p>
                          <p class=" truncate text-sm text-green-500 leading-2 mt-1"><span class="text-neutral-500">(Rs 1999 per month)</span> Active</p>
                          <p>{{$enrollment->paymentMethod}}</p>
                        </div>
                        <!-- <span class="text-5xl">🥇</span> -->
                    </div>

                </div>
            </div>
              <div class="p-4 border-gray-200">
                  <div class="flex items-center justify-between">
                      
                      
                          <div class="text-cente">
                              <p class=" truncate text-sm text-gray-700 leading-2">Next Billing Date</p>
                              <p class=" truncate text-sm text-gray-500 leading-2">7th April 2024</p>
  
                          </div>
                          <div x-data="{ modalOpen: false }"
                          @keydown.escape.window="modalOpen = false"
                          :class="{ 'z-40': modalOpen }" class="relative w-auto h-auto">
                          <button @click="modalOpen=true" class="truncate text-sm text-red-500 leading-2">Cancel Subscription</button>
                          <template x-teleport="body">
                              <div x-show="modalOpen" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
                                  <div x-show="modalOpen"
                                      x-transition:enter="ease-out duration-300"
                                      x-transition:enter-start="opacity-0"
                                      x-transition:enter-end="opacity-100"
                                      x-transition:leave="ease-in duration-300"
                                      x-transition:leave-start="opacity-100"
                                      x-transition:leave-end="opacity-0"
                                      @click="modalOpen=false" class="absolute inset-0 w-full h-full bg-gray-900 bg-opacity-50 backdrop-blur-sm"></div>
                                  <div x-show="modalOpen"
                                      x-trap.inert.noscroll="modalOpen"
                                      x-transition:enter="ease-out duration-300"
                                      x-transition:enter-start="opacity-0 scale-90"
                                      x-transition:enter-end="opacity-100 scale-100"
                                      x-transition:leave="ease-in duration-200"
                                      x-transition:leave-start="opacity-100 scale-100"
                                      x-transition:leave-end="opacity-0 scale-90"
                                      class="relative w-full py-6 bg-white shadow-md px-4 bg-opacity drop-shadow-md backdrop-blur-sm sm:max-w-lg sm:rounded-xl">
                                      <div class="flex items-center justify-between pb-3 px-3">
                                          <h3 class="text-lg font-semib">Manage your subscription in one click</h3>
                                          <button @click="modalOpen=false" class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>  
                                          </button>
                                      </div>
                                      <div class="relative w-auto pb-6 px-3">
                                          <p class="text-neutral-700 text-sm">Whatever you choose, it’ll take effect on <span class="font-bold">6 May 2024</span>. You'll still be able to access your course until then.</p>
                                      </div>
                                      
                                      <div class="mt- bg-re-50 px-3 rounded-xl">
                                        <!-- <h3 class="text-lg font-semibol">Finish cancellation</h3>
                                        <p class="text-neutral-600 text-sm">If you choose to cancel, it’ll take effect on <span class="font-bold">6 May 2024</span>. You'll still be able to access your course until then.</p> -->
                                        
                                          <button @click="modalOpen=false" type="button" class="mt- inline-flex items-center justify-center h-10 px-5 py-2 text-sm font-medium text-red-500 border border-red-600 transition-colors rounded-lg bg-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 bg-white hover:bg-red-600 hover:border-red-600 hover:text-white">Cancel Subscription</button>
                                      </div>
                                  </div>
                              </div>
                          </template>
                      </div>
                </div>
              </div>
            </div>
            </div>
            @endif

          <div class=" px-4 hidden">
              <div class="sm:w-[640px] w-full mx-auto border border-gray-200 rounded-2xl">
                <div class="p-4 border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4"> 
                      <div>
                        <p class="text-md font-medium text-gray-900 mb-0 leading-none">How to CSS</p>
                        <p class=" truncate text-sm text-gray-500 leading-2">pay_NSkED4dKIc4zOH</p>
                    </div>
                  </div>
                        
                            <div class="text-cente">
                                <p class=" truncate text-sm text-gray-700 leading-2">Rs 298</p>
                                <p class=" truncate text-sm text-gray-500 leading-2">7th April 2024</p>
    
                            </div>
                        <a href="" class="truncate text-sm text-blue-500 leading-2">View Invoice</a>
                  </div>
                </div>
              </div>
              </div>

          
        <div class="hidden sm:w-[640px] w-full mx-auto border border-red-300 rounded-2xl mt-5 p-5 flex gap-2">
          <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"></path></svg>
          <p class="text-red-500 ">Missing a purchase? contact the support at info@codekaro.in</p>

          </div>
      </div>
      
    </div>
  </main>

@endsection