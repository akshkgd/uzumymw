<main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
        <div class=" max-w-lg mx-auto">
          <div class="text-center">
            <div class="relative left-1/2 -translate-x-10">
              <div class="dark:bg-darkgray-50 absolute -left-3 -top-3 -z-20 h-[70px] w-[70px] -rotate-[24deg] rounded-3xl border-2 border-[#e5e7eb] p-8 opacity-40 dark:opacity-80">
                <div class="w-12"></div>
              </div>
              <div class="dark:bg-darkgray-50 absolute -top-3 left-3 -z-10 h-[70px] w-[70px] rotate-[24deg] rounded-3xl border-2 border-[#e5e7eb] p-8 opacity-60 dark:opacity-90">
                <div class="w-12"></div>
              </div>
              <div class="dark:bg-darkgray-50 relative z-0 flex h-[70px] w-[70px] items-center justify-center rounded-3xl border-2 border-[#e5e7eb] bg-white">
                <svg height="28" width="28" class="fill-transparent" aria-hidden="true">
                  <use href="{{ asset('assets/img/sprite.svg#clock') }}"></use>
                </svg>
                <div class="dark:bg-darkgray-50 absolute right-4 top-5 h-[12px] w-[12px] rotate-[56deg] bg-white text-lg font-bold"></div>
                <span class="absolute right-4 top-3 font-sans text-sm font-extrabold">z</span>
              </div>
            </div>
          {{-- <img src="{{asset('assets/img/clockNudge.svg')}}" class="inline" height="32px" alt=""> --}}
          <h2 class="text-center text-xl -mt-1 font-semibold leading-9 tracking-tight text-gray-800 mt-4">{{$video->title}} will be unlocked on {{ \Carbon\Carbon::now()->addDays($daysUntilVideoUnlocks)->isoFormat('MMMM Do, YYYY') }}</h2>
          <p class="bg-white  text-gray-500 text-center">Meanwhile you can watch the unlocked content and complete your assignments and submit for review.</p>
          </div>
        </div>
  </main>