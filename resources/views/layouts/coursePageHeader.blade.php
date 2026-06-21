<style>
  /* Dark mode styles for header */
  #sticky-header.dark-mode {
    background-color: rgba(26, 26, 26, 0.9) !important;
    border-color: rgba(45, 45, 45, 0.4) !important;
  }

  #sticky-header.dark-mode .text-neutral-800,
  #sticky-header.dark-mode .text-neutral-900 {
    color: #e5e7eb !important;
  }

  #sticky-header.dark-mode .text-black {
    color: #e5e7eb !important;
  }

  #sticky-header.dark-mode .text-neutral-700 {
    color: #d1d5db !important;
  }

  #sticky-header.dark-mode .text-neutral-600 {
    color: #9ca3af !important;
  }

  #sticky-header.dark-mode .text-neutral-500 {
    color: #9ca3af !important;
  }

  #sticky-header.dark-mode .bg-neutral-50 {
    background-color: #2d2d2d !important;
  }

  #sticky-header.dark-mode .hover\:bg-neutral-100:hover {
    background-color: #374151 !important;
  }

  #sticky-header.dark-mode .bg-white {
    background-color: #1a1a1a !important;
  }

  #sticky-header.dark-mode .hover\:bg-white:hover {
    background-color: #2d2d2d !important;
  }

  #sticky-header.dark-mode .border-neutral-200 {
    border-color: #374151 !important;
  }

  #sticky-header.dark-mode .bg-violet-100 {
    background-color: #4c1d95 !important;
  }

  #sticky-header.dark-mode .border-violet-300 {
    border-color: #6d28d9 !important;
  }

  #sticky-header.dark-mode .text-violet-600 {
    color: #a78bfa !important;
  }

  #sticky-header.dark-mode .hover\:bg-violet-200:hover {
    background-color: #5b21b6 !important;
  }

  #sticky-header.dark-mode .bg-green-50 {
    background-color: #065f46 !important;
  }

  #sticky-header.dark-mode .border-green-50 {
    border-color: #065f46 !important;
  }

  #sticky-header.dark-mode .text-green-700 {
    color: #6ee7b7 !important;
  }

  #sticky-header.dark-mode svg {
    color: #e5e7eb;
  }

  /* Dark mode dropdown styles */
  body.dark-mode #sticky-header+* .bg-white,
  #sticky-header.dark-mode~* .bg-white {
    background-color: #1a1a1a !important;
  }

  #sticky-header.dark-mode .border-neutral-200\/70 {
    border-color: rgba(55, 65, 81, 0.7) !important;
  }

  /* Dark mode for slide-over panel */
  body.dark-mode .bg-white.border-r.border-neutral-100 {
    background-color: #1a1a1a !important;
    border-color: #374151 !important;
  }

  body.dark-mode .text-gray-900 {
    color: #e5e7eb !important;
  }

  body.dark-mode .bg-orange-100 {
    background-color: #7c2d12 !important;
  }

  body.dark-mode .bg-neutral-100 {
    background-color: #2d2d2d !important;
  }

  body.dark-mode .text-neutral-700 {
    color: #d1d5db !important;
  }

  body.dark-mode .hover\:text-violet-600:hover {
    color: #a78bfa !important;
  }

  body.dark-mode .hover\:text-blue-600:hover {
    color: #60a5fa !important;
  }

  body.dark-mode .text-orange-600 {
    color: #fb923c !important;
  }

  body.dark-mode .text-green-600 {
    color: #4ade80 !important;
  }

  body.dark-mode .hover\:bg-red-100:hover {
    background-color: #7f1d1d !important;
  }

  body.dark-mode .hover\:text-red-700:hover {
    color: #f87171 !important;
  }

  /* Dark mode for profile dropdown */
  body.dark-mode .bg-white.border.rounded-md.shadow-md {
    background-color: #1a1a1a !important;
    border-color: rgba(55, 65, 81, 0.7) !important;
  }

  body.dark-mode .text-neutral-700 {
    color: #d1d5db !important;
  }

  body.dark-mode .text-neutral-600 {
    color: #9ca3af !important;
  }

  body.dark-mode .text-neutral-500 {
    color: #9ca3af !important;
  }

  body.dark-mode .bg-neutral-200 {
    background-color: #374151 !important;
  }

  body.dark-mode .hover\:bg-neutral-100:hover {
    background-color: #2d2d2d !important;
  }

  body.dark-mode .border-neutral-200 {
    border-color: #374151 !important;
  }

  body.dark-mode .border-neutral-100 {
    border-color: #374151 !important;
  }

  body.dark-mode .text-neutral-200 {
    color: #374151 !important;
  }

  body.dark-mode .inner-xp-pill {
    background-color: rgba(245, 158, 11, 0.1) !important;
    border-color: rgba(245, 158, 11, 0.2) !important;
  }
</style>
<header id="sticky-header"
  class="fixed top-0 z-[20] h-14 flex items-center justify-center w-full duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-200 border-opacity-40">
  <div class="flex items-center justify-between w-full px-4  mx-auto 2xl:px-4 max-w-6x py-1">
    <div class="relative z-10 flex items-center w-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
      <a href="{{ url('/home') }}"
        class="sm:mr-8 font-sans text-lg flex items-center gap-2 text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline">
        <span class="text-xl font-bold cal-sans text-neutral-800">Codekaro</span>
      </a>

    </div>

    <div class="relative">

      <div x-data="{ 
          dropdownOpen: false, 
          xpModalOpen: false, 
          leaderboard: [], 
          currentUser: null,
          loadingLeaderboard: false, 
          fetchLeaderboard() { 
              if(this.leaderboard.length) return; 
              this.loadingLeaderboard = true; 
              fetch('/api/leaderboard')
                  .then(res => res.json())
                  .then(data => { 
                      this.leaderboard = data.leaderboard; 
                      this.currentUser = data.currentUser; 
                      this.loadingLeaderboard = false; 
                  })
                  .catch(() => { 
                      this.loadingLeaderboard = false; 
                  }); 
          },
          getInitials(name) {
              if (!name) return 'U';
              const parts = name.trim().split(/\s+/);
              if (parts.length >= 2) {
                  return (parts[0][0] + parts[1][0]).toUpperCase();
              }
              return parts[0][0].toUpperCase();
          },
          getAvatarBg(name) {
              if (!name) return '#6b7280';
              const bgs = [
                  '#78350f', // Amber/brownish
                  '#b91c1c', // Red
                  '#0d9488', // Teal
                  '#0284c7', // Blue
                  '#991b1b', // Burgundy
                  '#4f46e5', // Indigo
                  '#0891b2', // Cyan
                  '#16a34a'  // Green
              ];
              let hash = 0;
              for (let i = 0; i < name.length; i++) {
                  hash = name.charCodeAt(i) + ((hash << 5) - hash);
              }
              const index = Math.abs(hash) % bgs.length;
              return bgs[index];
          }
      }" class="relative">
        <div class="flex gap-3 items-center">
          {{-- chapers slider --}}
          <div x-data="{ slideOverOpen: false }" class="relative z-50 w-auto h-auto hidden">
            <button @click="slideOverOpen=true"
              class="inline-flex items-center justify-center  transition-colors text-sm text-black bg-neutral-50 px-5 rounded-full py-2 border  hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Chapters</button>
            <template x-teleport="body">
              <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false" class="relative z-[99]">
                <div x-show="slideOverOpen" x-transition.opacity.duration.300ms @click="slideOverOpen=false"
                  class="fixed inset-0 bg-black bg-opacity-20  backdrop-blur-s"></div>
                <div class="fixed inset-0 overflow-hidden">
                  <div class="absolute inset-0 overflow-hidden">
                    <div class="fixed inset-y-0 right-0 flex max-w-full pl-">
                      <div x-show="slideOverOpen" @click.away="slideOverOpen = false"
                        x-transition:enter="transform transition ease-in-out duration-200 sm:duration-200"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-200 sm:duration-200"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                        class="w-screen max-w-80">
                        <div class="flex flex-col h-full py-5 overflow-y-auto bg-white border-r border-neutral-100">
                          <div class="px-4 sm:px-5">
                            <div class="flex items-start justify-between pb-1">
                              <h2 class="text-base font-normal leading-6 text-gray-900" id="slide-over-title">Course
                                Content</h2>
                              <div class="flex items-center h-auto ml-3">
                                <button @click="slideOverOpen=false"
                                  class="absolute top-0 right-0 z-30 flex  bg-white items-center justify-center px-3 py-2 mt-4 mr-5 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                    </path>
                                  </svg>
                                  <span>Close</span>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="relative flex-1 px-4 mt-5 sm:px-4">
                            <div x-data="{
                                                            activeAccordion: '',
                                                            setActiveAccordion(id) {
                                                                this.activeAccordion = (this.activeAccordion == id) ? '' : id
                                                            }
                                                        }"
                              class="relative w-full max-w-md mx-auto text-sm font-normal">
                              @if (isset($sections) && !$sections->isEmpty())
                                @foreach ($sections as $section)
                                  <div x-data="{ id: $id('accordion') }" :class="{ 'text-neutral-900': activeAccordion ==
                                                                                id, 'text-neutral-600 hover:text-blue-600': activeAccordion !=
                                                                                    id }" class="cursor-pointer group">

                                    <button @click="setActiveAccordion(id)"
                                      class="flex items-center justify-between text-md w-full py-4 px-2 pb-1 text-left select-none">
                                      <span class="text-md text-black font-normal">{{ $section->name }}</span>
                                      <svg class="w-5 h-5 duration-300 ease-out" :class="{ '-rotate-[45deg]': activeAccordion ==
                                                                                            id }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                    </button>
                                    @foreach ($section->chapters as $c)
                                      <div x-show="activeAccordion==id" class="" x-collapse x-cloak>
                                        <a id="item" style="display: flex"
                                          class="w-full items-center gap-2 flex {{ $c->id == $video->id ? 'bg-orange-100' : 'bg-neutral-100' }} my-2 p-3 rounded-md text-left"
                                          href="{{ route('recordings', ['batchId' => $batchId, 'cId' => Crypt::encrypt($c->id)]) }}">

                                          <div class="flex items-center gap-2 flex-1">
                                            @if ($c->type == 2)
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                                class="bi bi-play" viewBox="0 0 16 16">
                                                <path
                                                  d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
                                              </svg>
                                            @elseif($c->type == 3)
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                                class="bi bi-broadcast" viewBox="0 0 16 16">
                                                <path
                                                  d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707m2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708m5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708m2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0" />
                                              </svg>
                                            @else
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                                class="bi bi-text-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                  d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                                              </svg>
                                            @endif
                                            <span class="text-">{{ $c->title }}</span>
                                          </div>

                                          @if (optional($c->userProgress(Auth::id()))->status == 1)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round" class="text-red-600">
                                              <path d="M20 6L9 17l-5-5" />
                                            </svg>
                                          @endif
                                        </a>
                                      </div>
                                    @endforeach

                                  </div>
                                @endforeach
                              @endif


                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </template>
          </div>
          {{-- chapter slider ends --}}


          {{-- Combined XP & Progress Pill --}}
          <div class="flex items-center h-9 border border-neutral-200 rounded-full pl-3 pr-1 bg-white select-none gap-2.5 cursor-pointer hover:bg-neutral-50 transition-colors" @click="xpModalOpen = true; fetchLeaderboard()">
            @if(isset($enrollment) && isset($intro) && $intro == 'false' && isset($video) && $video->type == 2)
              {{-- Circular Progress --}}
              <div class="flex items-center gap-1.5">
                 <svg class="w-[22px] h-[22px] -rotate-90 text-neutral-200" viewBox="0 0 36 36">
                   <circle cx="18" cy="18" r="15.915" fill="none" stroke="currentColor" stroke-width="3.5" />
                   <circle cx="18" cy="18" r="15.915" fill="none" stroke="#10b981" stroke-width="3.5" 
                           stroke-dasharray="{{ optional($enrollment)->progress ?? 0 }} 100" stroke-linecap="round" />
                 </svg>
                 <span class="text-sm font-bold text-neutral-900 leading-none">{{ optional($enrollment)->progress ?? 0 }}%</span>
              </div>
              <div class="h-4 w-px bg-neutral-200/80"></div>
            @endif

            <span class="text-sm font-bold text-neutral-900 leading-none">Total XP</span>

            {{-- Inner XP Pill with Light Orange Shading --}}
            <div class="flex items-center gap-1.5 bg-[#FFFBEB] border border-amber-100 rounded-full pl-1 pr-3.5 h-[28px] inner-xp-pill">
              <img src="{{ asset('assets/img/xp.svg') }}" class="w-5 h-5 object-contain" alt="XP">
              <span class="text-sm font-bold text-neutral-900 leading-none">{{ number_format(Auth::user()->xp ?? 0) }}</span>
            </div>
          </div>

          <div x-data="{ slideOverOpen: false }" class="relative z-50 w-auto h-auto">
            <button @click="slideOverOpen=true"
              class="inline-flex items-center justify-center  transition-colors text-sm text-black bg-neutral-50 px-5 rounded-full py-2 border  hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Chapters</button>
            <template x-teleport="body">
              <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false" class="relative z-[99]">
                <div x-show="slideOverOpen" x-transition.opacity.duration.300ms @click="slideOverOpen=false"
                  class="fixed inset-0 bg-black bg-opacity-20  backdrop-blur-s"></div>
                <div class="fixed inset-0 overflow-hidden">
                  <div class="absolute inset-0 overflow-hidden">
                    <div class="fixed inset-y-0 right-0 flex max-w-full pl-">
                      <div x-show="slideOverOpen" @click.away="slideOverOpen = false"
                        x-transition:enter="transform transition ease-in-out duration-200 sm:duration-200"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-200 sm:duration-200"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                        class="w-screen max-w-80">
                        <div class="flex flex-col h-full py-5 overflow-y-auto bg-white border-r border-neutral-100">
                          <div class="px-5">
                            <div class="fle hidde items-start justify-between pb-1 mb-5">
                              {{-- <h2 class="text-base font-normal leading-6 text-gray-900" id="slide-over-title">
                                Course Content</h2> --}}
                              <h2 class="text-base font-semibold leading-6">
                                {{ $enrollment->batch->name }}
                              </h2>

                              <p class="text-sm text-neutral-600">
                                {{ optional($enrollment)->progress ?? 0 }}% completed in
                                @php
                                  $timeSpent = optional($enrollment)->time_spent ?? 0; // Time spent in minutes
                                  $hours = floor($timeSpent / 60);
                                  $minutes = $timeSpent % 60;
                                @endphp
                                {{ $hours }}Hrs {{ $minutes }}Mins
                              </p>
                              <div class="flex items-center h-auto ml-3">
                                {{-- <button @click="slideOverOpen=false"
                                  class="absolute top-0 right-0 z-30 flex  bg-white h-10 w-10 justify-center items-center mt-4 mr-5 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                    </path>
                                  </svg>
                                  <span></span>
                                </button> --}}
                              </div>
                            </div>
                          </div>
                          {{-- chapters --}}
                          @if (isset($sections) && !$sections->isEmpty())
                            @foreach ($sections as $section)
                              <div class="sortable-section px-5">
                                <ul class="sortable-section-list" style="list-style-type: none;">
                                  <li class="mb-5">
                                    <div class="flex justify-between items-center mb-3">
                                      <a href="" class="">{{ $section->name }}</a>
                                      {{-- <span class="font-medium">{{ $section->name }}</span> --}}

                                    </div>
                                    <div class="sortable-content">
                                      <ul class="sortable-content-list ml-4" style="list-style-type: none;">
                                        @foreach ($section->chapters as $c)
                                          <li data-id="{{ $c->id }}" class="hover:text-violet-600">
                                            <a class="sortable-item mb-2 text-[15px] font-ligh text-neutral-700 flex gap-3 items-center {{ $c->id == $video->id ? 'text-orange-600 font-medium' : '' }}"
                                              href="{{ route('recordings', ['batchId' => $batchId, 'cId' => Crypt::encrypt($c->id)]) }}">
                                              @if ($c->type == 2)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"
                                                  class="lucide lucide-video {{ $c->id == $video->id ? 'text-orange-600' : '' }}">
                                                  <path d="m22 8-6 4 6 4V8Z">
                                                  </path>
                                                  <rect width="14" height="12" x="2" y="6" rx="2" ry="2">
                                                  </rect>
                                                </svg>
                                              @elseif($c->type == 4)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"
                                                  class="lucide lucide-file-code-corner-icon lucide-file-code-corner">
                                                  <path
                                                    d="M4 12.15V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.706.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2h-3.35" />
                                                  <path d="M14 2v5a1 1 0 0 0 1 1h5" />
                                                  <path d="m5 16-3 3 3 3" />
                                                  <path d="m9 22 3-3-3-3" />
                                                </svg>
                                              @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"
                                                  class="lucide lucide-file-text {{ $c->id == $video->id ? 'text-orange-600' : '' }}">
                                                  <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                  </path>
                                                  <path d="M14 2v4a2 2 0 0 0 2 2h4">
                                                  </path>
                                                  <path d="M10 9H8">
                                                  </path>
                                                  <path d="M16 13H8">
                                                  </path>
                                                  <path d="M16 17H8">
                                                  </path>
                                                </svg>
                                              @endif
                                              {{ $c->title }}
                                              @if (optional($c->userProgress(Auth::id()))->status == 1)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                  fill="currentColor" class="bi bi-check-all text-green-600 -ml-2"
                                                  viewBox="0 0 16 16">
                                                  <path
                                                    d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z" />
                                                </svg>
                                              @endif
                                            </a>
                                          </li>
                                        @endforeach
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            @endforeach
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </template>
          </div>

          {{-- profile dropdown --}}
          <button :class="{ 'hover:bg-white': !dropdownOpen, 'bg-white': dropdownOpen }" @click="dropdownOpen=true"
            class="inline-flex items-center justify-center h-12 py-2 pl-3 pr-0 text-sm font-medium transition-colors bg-white border-0 rounded-md text-neutral-700 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
            <img
              src="{{ Auth::user()->avatar }}"
              class="object-cover w-8 h-8 border rounded-full border-neutral-200" />
            <span class="flex flex-col items-start flex-shrink-0 h-full ml-2 leading-none translate-y-px">
              <!-- Replace with your button content -->
            </span>
          </button>
        </div>

        <div x-show="dropdownOpen" @click.away="dropdownOpen=false" x-transition:enter="ease-out duration-200"
          x-transition:enter-start="-translate-y-2" x-transition:enter-end="translate-y-0"
          class="absolute top-0 right-0 z-50 w-56 mt-12" x-cloak>
          <div class="p-1 mt-1 bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
            @php
              $email = Auth::user()->email;
              $obfuscatedEmail =
                substr($email, 0, 2) . str_repeat('•', strlen($email) - 6) . substr($email, -4);
            @endphp
            <div class="py-2 px-2 text-neutral-600">
              <div class="px-2 text-sm">Signed in as</div>
              <div class="px-2  text-sm text-neutral-500">{{ $obfuscatedEmail }}</div>
            </div>

            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
            <a href="{{ url('/my-account') }}"
              class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="w-4 h-4 mr-2">
                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
              <span>Profile</span>
              <span class="ml-auto text-xs tracking-widest opacity-60">⇧⌘P</span>
            </a>
            <a href="{{ url('/sessions') }}"
              class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="w-4 h-4 mr-2">
                <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                <line x1="2" x2="22" y1="10" y2="10"></line>
              </svg>
              <span>Sessions</span><span class="ml-auto text-xs tracking-widest opacity-60">⌘B</span>
            </a>

            <!-- <div class="h-px my-1 -mx-1 bg-neutral-200"></div> -->
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
              class="relative flex cursor-default select-none hover:bg-red-100 items-center hover:cursor-pointer hover:text-red-700 rounded px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="w-4 h-4 mr-2">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" x2="9" y1="12" y2="12"></line>
              </svg>
              <span>Log out</span>
              <span class="ml-auto text-xs tracking-widest opacity-60">⇧⌘Q</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </div>

        <!-- XP rules & Leaderboard Modal -->
        <template x-teleport="body">
          <div x-show="xpModalOpen" 
               x-transition:enter="ease-out duration-300"
               x-transition:enter-start="opacity-0"
               x-transition:enter-end="opacity-100"
               x-transition:leave="ease-in duration-200"
               x-transition:leave-start="opacity-100"
               x-transition:leave-end="opacity-0"
               class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[9999] flex items-center justify-center p-4"
               x-cloak>
            
            <!-- Modal Container -->
            <div @click.away="xpModalOpen = false" 
                 x-show="xpModalOpen"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="bg-white dark:bg-neutral-900 rounded-2xl border border-neutral-100 dark:border-neutral-800 shadow-2xl max-w-md w-full overflow-hidden flex flex-col max-h-[85vh] relative">
              
              <!-- Close button overlay at top-right -->
              <div class="absolute top-4 right-4 z-50">
                <button @click="xpModalOpen = false" class="text-neutral-400 hover:text-neutral-600 dark:hover:text-neutral-300 transition-colors p-1.5 rounded-full hover:bg-neutral-100/80 dark:hover:bg-neutral-800/80">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                  </svg>
                </button>
              </div>

              <!-- Main Alpine tab controller -->
              <div x-data="{ activeTab: 'leaderboard' }" class="flex-grow flex flex-col overflow-hidden relative">
                
                <!-- Tab 1: Leaderboard View (both Locked and Unlocked states) -->
                <div x-show="activeTab === 'leaderboard'" class="flex-grow flex flex-col overflow-hidden">
                  
                  <!-- Header Area -->
                  <div class="p-6 pb-4 relative overflow-hidden bg-white dark:bg-neutral-900 border-b border-neutral-100 dark:border-neutral-800">
                    <!-- Vector Grid Background Pattern -->
                    <div class="absolute right-0 top-0 w-36 h-36 opacity-10 dark:opacity-25 pointer-events-none">
                      <svg viewBox="0 0 100 100" class="w-full h-full text-neutral-950 dark:text-white" fill="none" stroke="currentColor" stroke-width="0.5">
                        <circle cx="90" cy="10" r="30" />
                        <circle cx="90" cy="10" r="50" />
                        <circle cx="90" cy="10" r="70" />
                        <line x1="90" y1="10" x2="20" y2="80" />
                        <line x1="90" y1="10" x2="50" y2="90" />
                      </svg>
                    </div>

                    <h3 class="text-base font-semibold text-neutral-900 dark:text-neutral-50 tracking-tight">
                      Leaderboard
                    </h3>
                    <p class="text-neutral-500 dark:text-neutral-400 text-sm">
                      Solve, earn XP & stay at the top
                    </p>
                    
                    <button @click="activeTab = 'rules'" class="mt-4 inline-flex items-center gap-2 border border-neutral-250 dark:border-neutral-700 hover:bg-neutral-50 dark:hover:bg-neutral-800 rounded-full px-4 py-1.5 text-xs font-semibold text-neutral-800 dark:text-neutral-200 transition-colors">
                      <svg class="w-4 h-4 text-neutral-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      How XP Works
                    </button>
                  </div>



                  <!-- Content Scroll Area -->
                  <div class="flex-grow overflow-y-auto relative min-h-[300px]">
                    
                    <!-- LOCKED STATE -->
                    @if((Auth::user()->xp ?? 0) < 50)
                      <!-- Blurred Mockup List in Background -->
                      <div class="divide-y divide-neutral-100 dark:divide-neutral-850 filter blur-[4px] opacity-25 select-none pointer-events-none px-5 py-2">
                        <!-- Mockup Item 1 -->
                        <div class="flex items-center justify-between py-2.5">
                          <div class="flex items-center gap-2.5">
                            <span class="w-6 text-center text-xs font-normal text-neutral-400">1</span>
                            <div class="w-8 h-8 rounded-full bg-neutral-200"></div>
                            <span class="text-xs text-neutral-900">Alex Johnson</span>
                          </div>
                          <span class="text-xs font-bold text-neutral-900">420 XP</span>
                        </div>
                        <!-- Mockup Item 2 -->
                        <div class="flex items-center justify-between py-2.5">
                          <div class="flex items-center gap-2.5">
                            <span class="w-6 text-center text-xs font-normal text-neutral-400">2</span>
                            <div class="w-8 h-8 rounded-full bg-neutral-200"></div>
                            <span class="text-xs text-neutral-900">Sarah Miller</span>
                          </div>
                          <span class="text-xs font-bold text-neutral-900">380 XP</span>
                        </div>
                        <!-- Mockup Item 3 -->
                        <div class="flex items-center justify-between py-2.5">
                          <div class="flex items-center gap-2.5">
                            <span class="w-6 text-center text-xs font-normal text-neutral-400">3</span>
                            <div class="w-8 h-8 rounded-full bg-neutral-200"></div>
                            <span class="text-xs text-neutral-900">Michael Brown</span>
                          </div>
                          <span class="text-xs font-bold text-neutral-900">310 XP</span>
                        </div>
                        <!-- Mockup Item 4 -->
                        <div class="flex items-center justify-between py-2.5">
                          <div class="flex items-center gap-2.5">
                            <span class="w-6 text-center text-xs font-normal text-neutral-400">4</span>
                            <div class="w-8 h-8 rounded-full bg-neutral-200"></div>
                            <span class="text-xs text-neutral-900">Emma Davis</span>
                          </div>
                          <span class="text-xs font-bold text-neutral-900">290 XP</span>
                        </div>
                        <!-- Mockup Item 5 -->
                        <div class="flex items-center justify-between py-2.5">
                          <div class="flex items-center gap-2.5">
                            <span class="w-6 text-center text-xs font-normal text-neutral-400">5</span>
                            <div class="w-8 h-8 rounded-full bg-neutral-200"></div>
                            <span class="text-xs text-neutral-900">David Wilson</span>
                          </div>
                          <span class="text-xs font-bold text-neutral-900">250 XP</span>
                        </div>
                      </div>

                      <!-- Overlay Card in Foreground -->
                      <div class="absolute inset-0 flex flex-col items-center justify-center p-5 text-center bg-white/10 dark:bg-neutral-900/10 backdrop-blur-[1px]">
                        <!-- Lock Pill Badge -->
                        <div class="bg-[#FFF5F5] dark:bg-red-950/20 text-[#D12B2B] dark:text-red-400 border border-[#FFE3E3] dark:border-red-900/50 rounded-full px-3 py-1 inline-flex items-center gap-1.5 text-[10px] font-bold uppercase tracking-wider shadow-sm">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                          </svg>
                          Leaderboard is Locked
                        </div>
                        
                        <!-- Title -->
                        <h4 class="text-base font-semibold text-neutral-900 dark:text-neutral-50 mt-4 max-w-[260px] leading-snug tracking-tight">
                          You are <img src="{{ asset('assets/img/xp.svg') }}" class="w-4 h-4 inline-block align-middle mx-0.5 -translate-y-px" alt="XP"><span class="text-amber-500 dark:text-amber-400 font-bold mx-0.5">{{ 50 - (Auth::user()->xp ?? 0) }}</span> XP away from unlocking your rank!
                        </h4>
                        
                        <!-- Subtitle -->
                        <p class="text-neutral-500 dark:text-neutral-400 text-xs mt-2 max-w-[260px] leading-relaxed">
                          Increase your XP by solving assignments, arena questions, contests, and quizzes.
                        </p>
                      </div>
                    @else
                      <!-- UNLOCKED RANKINGS LIST -->
                      <div class="px-4 py-2">
                        <template x-if="loadingLeaderboard">
                          <div class="flex flex-col items-center justify-center py-16 gap-3">
                            <div class="w-8 h-8 border-4 border-amber-500 border-t-transparent rounded-full animate-spin"></div>
                            <p class="text-sm text-neutral-500">Loading rankings...</p>
                          </div>
                        </template>

                        <template x-if="!loadingLeaderboard && leaderboard.length === 0">
                          <div class="text-center py-16 text-neutral-500">
                            No rankings available yet.
                          </div>
                        </template>

                        <template x-if="!loadingLeaderboard && leaderboard.length > 0">
                          <div class="flex flex-col gap-0.5">
                            <template x-for="(user, index) in leaderboard" :key="user.id">
                              <div class="flex items-center justify-between py-2.5 px-2" :class="user.id === {{ Auth::id() }} ? 'bg-amber-50/30 dark:bg-amber-950/10 font-semibold rounded-xl' : ''">
                                
                                <!-- Rank Indicator -->
                                <div class="w-8 flex-shrink-0 text-xs text-neutral-500 font-semibold dark:text-neutral-400 text-left">
                                  <span x-text="index + 1"></span>
                                </div>

                                <!-- Avatar & Name -->
                                <div class="flex items-center gap-3 flex-grow pl-3 overflow-hidden">
                                  <!-- Image Avatar -->
                                  <template x-if="user.avatar && !user.avatar.includes('assets/img/mask.svg')">
                                    <img :src="user.avatar" 
                                         class="w-8 h-8 rounded-full object-cover border border-neutral-200 dark:border-neutral-700" alt="Avatar">
                                  </template>
                                  <!-- Initials Avatar -->
                                  <template x-if="!user.avatar || user.avatar.includes('assets/img/mask.svg')">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold text-white uppercase select-none" 
                                         :style="'background-color: ' + getAvatarBg(user.name)" 
                                         x-text="getInitials(user.name)">
                                    </div>
                                  </template>
                                  
                                  <!-- Name -->
                                  <div class="flex flex-col min-w-0">
                                    <span class="text-sm font-medium text-neutral-850 dark:text-neutral-100 truncate" x-text="user.name"></span>
                                    <template x-if="user.id === {{ Auth::id() }}">
                                      <span class="text-[9px] text-amber-600 dark:text-amber-400 font-bold uppercase tracking-wider mt-0.5">You</span>
                                    </template>
                                  </div>
                                </div>

                                <!-- XP Amount Badge -->
                                <div class="w-24 flex-shrink-0 flex justify-end">
                                  <div class="flex items-center gap-1.5 bg-[#FFFBEB] dark:bg-amber-950/30 border border-amber-100 dark:border-amber-900/30 rounded-full pl-1.5 pr-3 py-1 h-8 select-none">
                                    <img src="{{ asset('assets/img/xp.svg') }}" class="w-5 h-5 object-contain" alt="XP">
                                    <span class="text-xs font-bold text-neutral-850 dark:text-neutral-100" x-text="Number(user.xp).toLocaleString()"></span>
                                  </div>
                                </div>

                              </div>
                            </template>
                          </div>
                        </template>
                      </div>
                    @endif
                  </div>

                  <!-- Pinned Current User Footer (Only shown when unlocked) -->
                  <template x-if="currentUser && currentUser.rank > 1 && !loadingLeaderboard && {{ (Auth::user()->xp ?? 0) }} >= 50">
                    <div class="px-6 py-3 bg-[#FFFDF5] dark:bg-amber-950/10 border-t border-amber-100 dark:border-amber-900/40 flex items-center justify-between sticky bottom-0 z-10 shadow-lg">
                      
                      <!-- Rank -->
                      <div class="flex items-center gap-3 min-w-0">
                        <div class="w-8 flex-shrink-0 text-xs text-amber-700 dark:text-amber-400 font-bold text-left">
                          <span x-text="currentUser.rank"></span>
                        </div>

                        <!-- Avatar & Name -->
                        <div class="flex items-center gap-3 overflow-hidden">
                          <!-- Image Avatar -->
                          <template x-if="currentUser.avatar && !currentUser.avatar.includes('assets/img/mask.svg')">
                            <img :src="currentUser.avatar" 
                                 class="w-8 h-8 rounded-full object-cover border border-amber-250 dark:border-amber-900" alt="Avatar">
                          </template>
                          <!-- Initials Avatar -->
                          <template x-if="!currentUser.avatar || currentUser.avatar.includes('assets/img/mask.svg')">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold text-white uppercase select-none" 
                                 :style="'background-color: ' + getAvatarBg(currentUser.name)" 
                                 x-text="getInitials(currentUser.name)">
                            </div>
                          </template>

                          <!-- Name -->
                          <div class="flex flex-col min-w-0">
                            <span class="text-sm font-semibold text-neutral-900 dark:text-neutral-100 truncate" x-text="currentUser.name"></span>
                            <span class="text-[9px] text-amber-600 dark:text-amber-400 font-bold uppercase tracking-wider">Your Rank</span>
                          </div>
                        </div>
                      </div>

                      <!-- XP Amount Badge -->
                      <div class="w-24 flex-shrink-0 flex justify-end">
                        <div class="flex items-center gap-1.5 bg-[#FFFBEB] dark:bg-amber-950/40 border border-amber-250 dark:border-amber-900/50 rounded-full pl-1.5 pr-3 py-1 h-8 select-none">
                          <img src="{{ asset('assets/img/xp.svg') }}" class="w-5 h-5 object-contain" alt="XP">
                          <span class="text-xs font-bold text-amber-955 dark:text-amber-100" x-text="Number(currentUser.xp).toLocaleString()"></span>
                        </div>
                      </div>

                    </div>
                  </template>
                </div>

                <!-- Tab 2: Rules View (How to Earn XP) -->
                <div x-show="activeTab === 'rules'" class="flex-grow flex flex-col overflow-hidden">
                  
                  <!-- Header Area -->
                  <div class="p-6 pb-4 border-b border-neutral-100 dark:border-neutral-800 bg-white dark:bg-neutral-900">
                    <h3 class="text-base font-semibold text-neutral-900 dark:text-neutral-50 tracking-tight">
                      How XP Works
                    </h3>
                    <p class="text-neutral-500 dark:text-neutral-400 text-sm">
                      Learn how to collect experience points and rank up
                    </p>
                  </div>

                  <!-- Rules List Scroll Container -->
                  <div class="flex-grow overflow-y-auto p-6 space-y-4">
                    <div class="p-4 bg-[#FFFBEB] dark:bg-amber-950/20 border border-amber-100 dark:border-amber-900/50 rounded-xl flex gap-3.5 items-start">
                      <img src="{{ asset('assets/img/streak.svg') }}" class="w-6 h-6 object-contain mt-0.5" alt="Streak">
                      <div>
                        <h4 class="text-sm font-bold text-amber-900 dark:text-amber-100">Daily Study Streak (+10 XP)</h4>
                        <p class="text-xs text-amber-800 dark:text-amber-200/80 mt-1 leading-relaxed">Study every single day to maintain your streak. Missing a day resets it to 0. Consecutive days of learning award a +10 XP streak bonus!</p>
                      </div>
                    </div>

                    <div class="p-4 bg-blue-50 dark:bg-blue-950/20 border border-blue-100 dark:border-blue-900/50 rounded-xl flex gap-3.5 items-start">
                      <img src="{{ asset('assets/img/xpa1.svg') }}" class="w-6 h-6 object-contain mt-0.5" alt="Watch Lessons">
                      <div>
                        <h4 class="text-sm font-bold text-blue-900 dark:text-blue-100">Watch Lessons (+2 XP/min)</h4>
                        <p class="text-xs text-blue-800 dark:text-blue-200/80 mt-1 leading-relaxed">Earn experience points passively as you watch course recordings. Every minute spent learning grants you 2 XP.</p>
                      </div>
                    </div>

                    <div class="p-4 bg-emerald-50 dark:bg-emerald-950/20 border border-emerald-100 dark:border-emerald-900/50 rounded-xl flex gap-3.5 items-start">
                      <img src="{{ asset('assets/img/xpa2.svg') }}" class="w-6 h-6 object-contain mt-0.5" alt="Complete Lessons">
                      <div>
                        <h4 class="text-sm font-bold text-emerald-900 dark:text-emerald-100">Complete Lessons (+50 XP)</h4>
                        <p class="text-xs text-emerald-800 dark:text-emerald-200/80 mt-1 leading-relaxed">Finish a lesson, assignment, or video and click the "Mark as Complete" button to claim an instant 50 XP completion reward.</p>
                      </div>
                    </div>
                  </div>

                  <!-- Rules Footer Link -->
                  <div class="border-t border-neutral-100 dark:border-neutral-800 bg-neutral-50 dark:bg-neutral-900/50 px-5 py-3">
                    <button @click="activeTab = 'leaderboard'" class="w-full text-center py-2 text-xs font-semibold text-neutral-800 dark:text-neutral-200 bg-white dark:bg-neutral-850 border border-neutral-200 dark:border-neutral-700 hover:bg-neutral-50 rounded-lg flex items-center justify-center gap-1 transition-colors">
                      Go to Leaderboard
                      <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                      </svg>
                    </button>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </template>
      </div>
    </div>
  </div>
</header>

<script>
  // Check and apply dark mode to header
  function applyHeaderDarkMode() {
    const isDarkMode = localStorage.getItem('codekaro_dark_mode') === 'true';
    const header = document.getElementById('sticky-header');

    // Only apply dark mode if we're on a coding lab page (type 4) and NOT on the intro page
    const isIntroPage = {{ isset($intro) && $intro == 'true' ? 'true' : 'false' }};
    const isCodeLabPage = {{ isset($video) && $video->type == 4 ? 'true' : 'false' }};

    if (isDarkMode && isCodeLabPage && !isIntroPage) {
      header.classList.add('dark-mode');
      // Also add to body for dropdown styling
      if (!document.body.classList.contains('dark-mode')) {
        document.body.classList.add('dark-mode');
      }
    } else {
      header.classList.remove('dark-mode');
      document.body.classList.remove('dark-mode');
    }
  }

  // Apply on page load
  applyHeaderDarkMode();

  // Listen for storage changes (when dark mode is toggled in editor)
  window.addEventListener('storage', function (e) {
    if (e.key === 'codekaro_dark_mode') {
      applyHeaderDarkMode();
    }
  });

  // Also listen for custom event for same-tab updates
  window.addEventListener('darkModeChanged', function () {
    applyHeaderDarkMode();
  });
</script>