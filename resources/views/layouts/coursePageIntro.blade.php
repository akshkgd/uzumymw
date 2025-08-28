<main class="min-h-scree mt-32 flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
      
  
    <div class="sm:mx-auto sm:w-full sm:max-w-xl text-cente">
      @include('layouts.alert')
      <h2 class="text-cente text-xl -mt-1 font-semibold leading-9 cal-sans text-gray-800">{{$enrollment->batch->name}}</h2>

      <p class="bg-white text-s text-gray-800">
          {{ optional($enrollment)->progress ?? 0 }}% completed in
          @php
              $timeSpent = optional($enrollment)->time_spent ?? 0; // Time spent in minutes
              $hours = floor($timeSpent / 60);
              $minutes = $timeSpent % 60;
          @endphp
          {{ $hours }}Hrs {{ $minutes }}Mins
      </p>
      {{-- links --}}
      <div class="flex items-center gap-3 mt-5">
        <a href="{{ route('invoice.download', $enrollment->id) }}" class="inline-block border rounded-lg bg-violet-10 text-violet-60 py-2 px-5">Download Invoice</a>
        <div x-data="{ modalOpen: false }"
  @keydown.escape.window="modalOpen = false"
  class="relative z-50 w-auto h-auto">
  <button @click="modalOpen=true" class="inline-flex items-center justify-center border px-5 py-2 rounded-lg inline-block  transition-colors bg-white border rounded-md hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Invite your Friend</button>
  <template x-teleport="body">
      <div x-show="modalOpen" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
          <div x-show="modalOpen" 
              x-transition:enter="ease-out duration-300"
              x-transition:enter-start="opacity-0"
              x-transition:enter-end="opacity-100"
              x-transition:leave="ease-in duration-300"
              x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0"
              @click="modalOpen=false" class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
          <div x-show="modalOpen"
              x-trap.inert.noscroll="modalOpen"
              x-transition:enter="ease-out duration-300"
              x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
              x-transition:leave="ease-in duration-200"
              x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
              x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              class="relative w-full py-6 bg-white px-7 sm:max-w-lg sm:rounded-xl">
              <div class="flex items-center justify-between pb-2">
                  
                  <button @click="modalOpen=false" class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>  
                  </button>
              </div>
              <div class="relative w-auto text-center">
                  <img src="{{asset('assets/img/yo.svg')}}" class="h-44 inline" alt="">
                  <h3 class="text-lg font-semibold">Invite your Friends</h3>
                  <p class="text-sm\ text-gray-500">Invite your friend to join the 
                    @if($enrollment->batch->topicId == 700)
                      mentorship
                    @else
                      cohort
                    @endif
                    and 
                    @if($enrollment->batch->topicId == 700)
                      get ₹5,000 cashback
                    @elseif($enrollment->batch->topicId < 99)
                      get ₹1,000 cashback
                    @else
                      get 10% off on your next course purchase
                    @endif
                    on successful referral.
                  </p>
                  
                  <div class="flex items-center gap-2 mt-8 mb-4">
                    <input 
                      type="text" 
                      value="https://codekaro.in/how-to-css?utm=referral&campaign={{ auth()->user()->email }}"
                      class="flex-1 px-3 py-3 border rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-violet-200"
                      readonly
                    >
                    <button 
                      onclick="copyToClipboard(this)" 
                      class="w-20 px-4 py-3 bg-black text-white rounded-lg text-sm hover:bg-neutral-800 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    >
                      Copy
                    </button>
                  </div>

                  <script>
                    function copyToClipboard(button) {
                      const input = button.previousElementSibling;
                      navigator.clipboard.writeText(input.value);
                      
                      // Optional: Show feedback
                      button.textContent = 'Copied!';
                      setTimeout(() => {
                        button.textContent = 'Copy';
                      }, 2000);
                    }
                  </script>
              </div>
          </div>
      </div>
  </template>
</div>

      </div>
      <div class="mt-12 text-center">
        
        <div class="flex gap-2 items-center justify-cente">
        
          
        
        @php
          $nextClassDate = \Carbon\Carbon::parse($enrollment->batch->nextClass);
          $today = \Carbon\Carbon::today();
        @endphp
        @if($nextClassDate->lessThanOrEqualTo($today))
          <div class="flex text-left  items-center gap-2 hidde">
          <div class="mt-2 sm:mt-0">
          <p class="text-red-600 ">No upcoming live class</p>
          <p class="text-neutral-700 text-s">You will be notified via email and WhatsApp when the new live class is scheduled.</p>
          </div>
          </div>
          @else
          <div class="text-left hidden">
          {{-- <div class="bg-violet-10 inline-block text-violet-600 px- rounded-full py-1 text-sm mb-3">Upcoming live class</div> --}}
          <h2 class="font-semibold text-lg text-gray-800 m-0 "> <span class="relative">Live:
            <svg xmlns="http://www.w3.org/2000/svg" width="179" height="5" viewBox="0 0 179 5" class="absolute left-0 bottom-1 -mt-1">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M122.746 0.713854C122.784 0.651055 122.805 0.580758 122.805 0.506545C122.805 0.24028 122.533 0.0244304 122.199 0.0244304C114.148 0.0244304 106.097 0.0189871 98.046 0.0135436C81.9421 0.00265576 65.8369 -0.00823294 49.733 0.0244319C48.4525 0.0270293 47.1582 0.0198336 45.8554 0.0125912C41.247 -0.0130289 36.5334 -0.0392343 31.9531 0.365425C31.6031 0.396348 31.3287 0.425727 31.1286 0.454213C31.0297 0.468307 30.9371 0.483818 30.8576 0.501726C30.8179 0.510657 30.7718 0.522336 30.7251 0.537838C30.6866 0.55063 30.6077 0.578775 30.5297 0.631331C30.4613 0.677479 30.271 0.829221 30.3097 1.0745C30.3446 1.29584 30.5419 1.40547 30.5945 1.43279C30.7165 1.49624 30.8526 1.51936 30.9023 1.52781L30.9036 1.52803C31.0473 1.55244 31.2454 1.56952 31.465 1.58318C32.3605 1.63888 34.1193 1.6652 36.1961 1.67654C38.848 1.69101 42.07 1.68104 44.7749 1.67268C46.3164 1.66791 47.69 1.66366 48.6944 1.66475C61.4136 1.67857 74.1329 1.68394 86.8522 1.68474C75.4613 1.90893 64.0711 2.18306 52.6849 2.53537C39.5301 2.58451 27.1174 2.63048 16.9987 2.66796C10.4229 2.69232 4.8159 2.71309 0.603492 2.7288C0.268625 2.73005 -0.00156443 2.94691 6.81838e-06 3.21317C0.00157802 3.47943 0.274315 3.69427 0.609182 3.69302C4.82149 3.67731 10.4284 3.65654 17.0041 3.63218C19.2244 3.62396 21.555 3.61532 23.9797 3.60634C23.5149 3.62692 23.0501 3.64766 22.5853 3.66858C18.6225 3.84694 16.5993 3.94898 15.8861 3.99926C15.796 4.00561 15.7215 4.01149 15.6642 4.01699C15.6359 4.0197 15.6068 4.02279 15.5796 4.02639L15.5778 4.02663C15.562 4.02869 15.5038 4.03629 15.4426 4.05394C15.4238 4.05937 15.3853 4.07113 15.3408 4.09176C15.313 4.10463 15.1946 4.15949 15.1133 4.27692C15.0786 4.33624 15.0396 4.47447 15.0403 4.55126C15.0556 4.62541 15.1196 4.75165 15.1625 4.80279C15.2571 4.9014 15.3723 4.94207 15.4004 4.95199C15.4734 4.97776 15.5381 4.98631 15.5526 4.98823L15.5539 4.98841C15.5787 4.99174 15.6004 4.99353 15.6144 4.99455C15.6653 4.99824 15.7279 4.99931 15.7838 4.99975C16.0219 5.00162 16.5054 4.99307 17.1392 4.97815C18.8956 4.9368 21.9153 4.8436 24.5065 4.76362C25.678 4.72747 26.762 4.69401 27.602 4.66927C51.8201 3.95607 76.061 3.5554 100.303 3.3193C115.375 3.26113 128.889 3.20746 138.263 3.16717C151.341 3.11096 158.303 3.07459 161.315 3.05196C162.068 3.04631 162.576 3.0415 162.871 3.03743C163.015 3.03544 163.118 3.03353 163.172 3.03148C163.185 3.03103 163.206 3.03018 163.227 3.02848L163.228 3.02845C163.233 3.02808 163.271 3.0253 163.315 3.01691C163.353 3.00864 163.494 2.95721 163.587 2.90067C163.771 2.63333 163.599 2.20376 163.436 2.1127C163.385 2.09544 163.308 2.07739 163.284 2.07345C163.271 2.07155 163.249 2.06898 163.24 2.0681C163.223 2.06654 163.209 2.06575 163.201 2.06537C163.185 2.06454 163.168 2.06401 163.153 2.06363C162.942 2.0581 162.012 2.05564 160.659 2.05502C155.214 2.05253 142.642 2.08057 140.288 2.09027C129.441 2.13496 118.59 2.19632 107.739 2.2876C113.633 2.19772 119.527 2.11658 125.421 2.04029C140.287 1.84786 148.18 1.77648 162.686 1.7023C166.085 1.68492 169.484 1.67719 172.884 1.66945C173.562 1.66791 174.24 1.66637 174.918 1.66475H178.413C178.557 1.66475 178.632 1.66471 178.649 1.66463L178.656 1.66457C178.656 1.66457 178.662 1.66451 178.668 1.66431C178.674 1.66413 178.696 1.66301 178.713 1.66173C179.149 1.45313 179.039 0.814696 178.71 0.703016C178.695 0.701884 178.674 0.700861 178.669 0.70069L178.66 0.700489L178.654 0.700403L178.648 0.700362L178.624 0.700285L178.523 0.700131C178.34 0.699914 177.976 0.699653 177.539 0.699479C176.666 0.699131 175.5 0.69913 174.916 0.700522H173.594C159.716 0.700522 145.838 0.705547 131.96 0.710572C128.889 0.711684 125.818 0.712796 122.746 0.713854ZM15.7811 4.97724C15.7741 4.97832 15.7726 4.97834 15.7786 4.97755C15.779 4.97749 15.7798 4.97739 15.7811 4.97724ZM31.1386 0.581393C31.1389 0.58132 31.1431 0.582083 31.1503 0.583901C31.1419 0.582375 31.1383 0.581466 31.1386 0.581393Z" style="fill: #22c55e"/>
          </svg>  
          </span> Onboarding Call</h2>
          <p class="text-sm text-neutral-600 font-normal">Sat, 3rd Aug 2024 at 07:00 PM GMT+05:30</p>
          <p class="text-neutral-700 text-s mt-4">You will get the link via email and WhatsApp when the live class starts. You will also be able to join the class from here!</p>


        </div>
          @endif
       
      </div>
      <div class="flex justify-center gap-2 hidden">
        <a href="" class="border px-5 py-3 rounded-lg inline-block mt-6">Complete your onboarding</a>
        <!-- <a href="" class="border px-5 py-3 rounded-lg inline-block mt-6">Important Links</a> -->
        
      </div>
      
      
      
      
      {{-- <div class="text-center flex gap-2 absolute left-1/2 translate-x-[-50%] bottom-0 mb-5">
        <a href="" class=" py-3 px-4 text-neutral-500 rounded-lg inline-block mt-6">Continue watching: Javascript Foundation</a>
        <a href="" class=" py-3 px-4 text-neutral-500  rounded-lg inline-block mt-6">Back to Dashboard</a>
      </div> --}}
    </div>
  </main>