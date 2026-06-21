<main class="min-h-scree mt-32 flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
      
  
    <div class="sm:mx-auto sm:w-full sm:max-w-xl text-cente">
      @include('layouts.alert')
      <h2 class="text-cente text-xl -mt-1 font-semibold leading-9 cal-sans text-neutral-900">{{$enrollment->batch->name}}</h2>

      <p class="bg-white text-s text-gray-800">
          {{ optional($enrollment)->progress ?? 0 }}% completed in
          @php
              $timeSpent = optional($enrollment)->time_spent ?? 0; // Time spent in minutes
              $hours = floor($timeSpent / 60);
              $minutes = $timeSpent % 60;
          @endphp
          {{ $hours }}Hrs {{ $minutes }}Mins
      </p>
      @php
        $resumeChapter = null;
        if (isset($sections) && !$sections->isEmpty()) {
            foreach ($sections as $section) {
                foreach ($section->chapters as $c) {
                    $status = optional($c->userProgress(Auth::id()))->status;
                    if ($status != 1) {
                        $resumeChapter = $c;
                        break 2;
                    }
                }
            }
            if (!$resumeChapter && isset($sections[0]) && !$sections[0]->chapters->isEmpty()) {
                $resumeChapter = $sections[0]->chapters[0];
            }
        }
        
        // Fallback if sections is empty
        if (!$resumeChapter && isset($content) && !$content->isEmpty()) {
            $resumeChapter = $content->first();
        }
      @endphp

      {{-- links --}}
      <div class="flex items-center gap-3 mt-5">
        @if($resumeChapter)
          <a href="{{ route('recordings', ['batchId' => $batchId, 'cId' => \Crypt::encrypt($resumeChapter->id)]) }}" class="inline-block bg-black text-white py-2 px-6 rounded-lg hover:bg-neutral-800 transition-colors font-normal">
            {{ (optional($enrollment)->progress ?? 0) > 0 ? 'Resume Learning' : 'Start Learning' }}
          </a>
        @endif
        <a href="{{ route('invoice.download', $enrollment->id) }}" class="inline-block border rounded-lg bg-violet-10 text-violet-60 py-2 px-5">Download Invoice</a>
        <div x-data="{ modalOpen: false }"
  @keydown.escape.window="modalOpen = false"
  class="relative z-50 w-auto h-auto">
  <button @click="modalOpen=true" class="inline-flex items-center justify-center border px-5 py-2 rounded-lg inline-block  transition-colors bg-white border rounded-md hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Refer & Earn ₹5,000</button>
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
                  <p class="text-sm text-gray-500 mt-2">Invite your friend to join the mentorship and get ₹5,000 cashback on successful referral.</p>
                  
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

      {{-- Streak Display --}}
      <div class="mt-4 flex items-center gap-2 text-base text-neutral-600 select-none">
        <img src="{{ asset('assets/img/streak.svg') }}" class="w-5 h-5 object-contain" alt="Streak">
        <span><span class="font-bold text-neutral-900">{{ Auth::user()->current_streak ?? 0 }} Day Streak</span></span>
      </div>
      <p class="text-sm text-neutral-700 mt-2.5 font-normal leading-relaxed text-left">
        Watch recordings daily to maintain your streak. Missing a day resets it to 0. Every consecutive day studied awards a +10 XP streak bonus!
      </p>

      @php
        $totalPaid = $enrollment->amountPaid / 100;
        $payable = $enrollment->payable_in_rupees;
        $remaining = max(0, $payable - $totalPaid);
        
        $startDate = $enrollment->startFrom 
            ? \Carbon\Carbon::parse($enrollment->startFrom) 
            : ($enrollment->paidAt ? \Carbon\Carbon::parse($enrollment->paidAt) : $enrollment->created_at);
        $dueDate = \Carbon\Carbon::parse($startDate)->addMonth();
      @endphp
      @if($remaining > 0)
        <div class="mt-6 text-left w-full">
            <h3 class="text-base font-semibold text-neutral-850 leading-tight">Payment Pending</h3>
            <p class="text-sm text-neutral-600 mt-1.5 leading-relaxed font-normal">
                Your payment of <span class="font-semibold text-neutral-900">₹{{ number_format($remaining) }}</span> is pending. Please complete your dues by <span class="font-semibold text-neutral-900">{{ $dueDate->format('jS F Y') }}</span> (one month from your start date) to continue accessing the course.
            </p>
        </div>
      @endif


      <div class="mt-12 text-center">
        
        <div class="flex gap-2 items-center justify-cente">
        
          
        
       
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