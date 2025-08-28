<header id="sticky-header" class="fixed top-0 z-[20] h-14 flex items-center justify-center w-full duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-200 border-opacity-40">
  <div class="flex items-center justify-between w-full px-4  mx-auto 2xl:px-0 max-w-6xl py-1">
      <div class="relative z-10 flex items-center w-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
          <a href="{{ url('/home') }}"
              class="sm:mr-8 font-sans text-lg flex items-center gap-2 text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline">
              <span class="text-xl font-bold cal-sans text-neutral-800">Codekaro</span>
          </a>
         
      </div>

        <div class="relative">

            <div x-data="{ dropdownOpen: false }" class="relative">
                <div class="flex gap-3 items-center">
                    @if ($intro == 'false' && $video->type == 2 && $isVideoUnlocked == true)
                        <button id="markComplete"
                            class="text-sm px-5 rounded-full py-2 border hover:bg-violet-200 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:pointer-events-none
                  {{ optional($video->userProgress(Auth::user()->id))->status
                      ? 'bg-green-50 border-green-50 text-green-700 disabled:opacity-100'
                      : 'bg-violet-100 border-violet-300 text-violet-600' }}"
                            {{ optional($video->userProgress(Auth::user()->id))->status ? 'disabled' : '' }}>
                            {{ optional($video->userProgress(Auth::user()->id))->status ? 'Lesson Completed' : 'Mark as Complete' }}
                        </button>
                    @endif
                    {{-- chapers slider --}}
                    <div x-data="{ slideOverOpen: false }" class="relative z-50 w-auto h-auto hidden">
                        <button @click="slideOverOpen=true"
                            class="inline-flex items-center justify-center  transition-colors text-sm text-black bg-neutral-50 px-5 rounded-full py-2 border  hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Chapters</button>
                        <template x-teleport="body">
                            <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false"
                                class="relative z-[99]">
                                <div x-show="slideOverOpen" x-transition.opacity.duration.300ms
                                    @click="slideOverOpen="false"
                                    class="fixed inset-0 bg-black bg-opacity-20  backdrop-blur-s"></div>
                                <div class="fixed inset-0 overflow-hidden">
                                    <div class="absolute inset-0 overflow-hidden">
                                        <div class="fixed inset-y-0 right-0 flex max-w-full pl-">
                                            <div x-show="slideOverOpen" @click.away="slideOverOpen = false"
                                                x-transition:enter="transform transition ease-in-out duration-200 sm:duration-200"
                                                x-transition:enter-start="translate-x-full"
                                                x-transition:enter-end="translate-x-0"
                                                x-transition:leave="transform transition ease-in-out duration-200 sm:duration-200"
                                                x-transition:leave-start="translate-x-0"
                                                x-transition:leave-end="translate-x-full" class="w-screen max-w-80">
                                                <div
                                                    class="flex flex-col h-full py-5 overflow-y-auto bg-white border-r border-neutral-100">
                                                    <div class="px-4 sm:px-5">
                                                        <div class="flex items-start justify-between pb-1">
                                                            <h2 class="text-base font-normal leading-6 text-gray-900"
                                                                id="slide-over-title">Course Content</h2>
                                                            <div class="flex items-center h-auto ml-3">
                                                                <button @click="slideOverOpen=false"
                                                                    class="absolute top-0 right-0 z-30 flex  bg-white items-center justify-center px-3 py-2 mt-4 mr-5 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-4 h-4">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M6 18L18 6M6 6l12 12"></path>
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
                                                                    <div x-data="{ id: $id('accordion') }"
                                                                        :class="{ 'text-neutral-900': activeAccordion ==
                                                                            id, 'text-neutral-600 hover:text-blue-600': activeAccordion !=
                                                                                id }"
                                                                        class="cursor-pointer group">

                                                                        <button @click="setActiveAccordion(id)"
                                                                            class="flex items-center justify-between text-md w-full py-4 px-2 pb-1 text-left select-none">
                                                                            <span
                                                                                class="text-md text-black font-normal">{{ $section->name }}</span>
                                                                            <svg class="w-5 h-5 duration-300 ease-out"
                                                                                :class="{ '-rotate-[45deg]': activeAccordion ==
                                                                                        id }"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="none" viewBox="0 0 24 24"
                                                                                stroke-width="1.5"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    d="M12 6v12m6-6H6" />
                                                                            </svg>
                                                                        </button>
                                                                        @foreach ($section->chapters as $c)
                                                                            <div x-show="activeAccordion==id"
                                                                                class="" x-collapse x-cloak>
                                                                                <a id="item" style="display: flex"
                                                                                    class="w-full items-center gap-2 flex {{ $c->id == $video->id ? 'bg-orange-100' : 'bg-neutral-100' }} my-2 p-3 rounded-md text-left"
                                                                                    href="{{ route('recordings', ['batchId' => $batchId, 'cId' => Crypt::encrypt($c->id)]) }}">

                                                                                    <div
                                                                                        class="flex items-center gap-2 flex-1">
                                                                                        @if ($c->type == 2)
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="20"
                                                                                                height="20"
                                                                                                fill="currentColor"
                                                                                                class="bi bi-play"
                                                                                                viewBox="0 0 16 16">
                                                                                                <path
                                                                                                    d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
                                                                                            </svg>
                                                                                        @elseif($c->type == 3)
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="20"
                                                                                                height="20"
                                                                                                fill="currentColor"
                                                                                                class="bi bi-broadcast"
                                                                                                viewBox="0 0 16 16">
                                                                                                <path
                                                                                                    d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707m2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708m5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708m2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0" />
                                                                                            </svg>
                                                                                        @else
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="20"
                                                                                                height="20"
                                                                                                fill="currentColor"
                                                                                                class="bi bi-text-left"
                                                                                                viewBox="0 0 16 16">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                                                                                            </svg>
                                                                                        @endif
                                                                                        <span
                                                                                            class="text-">{{ $c->title }}</span>
                                                                                    </div>

                                                                                    @if (optional($c->userProgress(Auth::id()))->status == 1)
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="20"
                                                                                            height="20"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-width="2"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            class="text-red-600">
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
                    <div x-data="{ slideOverOpen: false }" class="relative z-50 w-auto h-auto">
                        <button @click="slideOverOpen=true"
                            class="inline-flex items-center justify-center  transition-colors text-sm text-black bg-neutral-50 px-5 rounded-full py-2 border  hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Chapters</button>
                        <template x-teleport="body">
                            <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false"
                                class="relative z-[99]">
                                <div x-show="slideOverOpen" x-transition.opacity.duration.300ms
                                    @click="slideOverOpen="false"
                                    class="fixed inset-0 bg-black bg-opacity-20  backdrop-blur-s"></div>
                                <div class="fixed inset-0 overflow-hidden">
                                    <div class="absolute inset-0 overflow-hidden">
                                        <div class="fixed inset-y-0 right-0 flex max-w-full pl-">
                                            <div x-show="slideOverOpen" @click.away="slideOverOpen = false"
                                                x-transition:enter="transform transition ease-in-out duration-200 sm:duration-200"
                                                x-transition:enter-start="translate-x-full"
                                                x-transition:enter-end="translate-x-0"
                                                x-transition:leave="transform transition ease-in-out duration-200 sm:duration-200"
                                                x-transition:leave-start="translate-x-0"
                                                x-transition:leave-end="translate-x-full" class="w-screen max-w-80">
                                                <div
                                                    class="flex flex-col h-full py-5 overflow-y-auto bg-white border-r border-neutral-100">
                                                    <div class="px-5">
                                                        <div class="fle hidde items-start justify-between pb-1 mb-5">
                                                            {{-- <h2 class="text-base font-normal leading-6 text-gray-900" id="slide-over-title">Course Content</h2> --}}
                                                            <h2 class="text-base font-semibold leading-6">
                                                                {{ $enrollment->batch->name }}</h2>

                                                            <p class="bg-white text-sm text-neutral-600">
                                                                {{ optional($enrollment)->progress ?? 0 }}% completed in
                                                                @php
                                                                    $timeSpent = optional($enrollment)->time_spent ?? 0; // Time spent in minutes
                                                                    $hours = floor($timeSpent / 60);
                                                                    $minutes = $timeSpent % 60;
                                                                @endphp
                                                                {{ $hours }}Hrs {{ $minutes }}Mins
                                                            </p>
                                                            <div class="flex items-center h-auto ml-3">
                                                                {{-- <button @click="slideOverOpen=false" class="absolute top-0 right-0 z-30 flex  bg-white h-10 w-10 justify-center items-center mt-4 mr-5 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                      <span></span>
                                                  </button> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- chapters --}}
                                                    @if (isset($sections) && !$sections->isEmpty())
                                                        @foreach ($sections as $section)
                                                            <div class="sortable-section px-5">
                                                                <ul class="sortable-section-list"
                                                                    style="list-style-type: none;">
                                                                    <li class="mb-5">
                                                                        <div
                                                                            class="flex justify-between items-center mb-3">
                                                                            <a href=""
                                                                                class="">{{ $section->name }}</a>
                                                                            {{-- <span class="font-medium">{{ $section->name }}</span> --}}

                                                                        </div>
                                                                        <div class="sortable-content">
                                                                            <ul class="sortable-content-list ml-4"
                                                                                style="list-style-type: none;">
                                                                                @foreach ($section->chapters as $c)
                                                                                    <li data-id="{{ $c->id }}"
                                                                                        class="hover:text-violet-600">
                                                                                        <a class="sortable-item mb-2 text-[15px] font-ligh text-neutral-700 flex gap-3 items-center {{ $c->id == $video->id ? 'text-orange-600 font-medium' : '' }}"
                                                                                            href="{{ route('recordings', ['batchId' => $batchId, 'cId' => Crypt::encrypt($c->id)]) }}">
                                                                                            @if ($c->type == 2)
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="16"
                                                                                                    height="16"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="lucide lucide-video {{ $c->id == $video->id ? 'text-orange-600' : '' }}">
                                                                                                    <path
                                                                                                        d="m22 8-6 4 6 4V8Z">
                                                                                                    </path>
                                                                                                    <rect
                                                                                                        width="14"
                                                                                                        height="12"
                                                                                                        x="2" y="6"
                                                                                                        rx="2"
                                                                                                        ry="2">
                                                                                                    </rect>
                                                                                                </svg>
                                                                                            @else
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="16"
                                                                                                    height="16"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="lucide lucide-file-text {{ $c->id == $video->id ? 'text-orange-600' : '' }}">
                                                                                                    <path
                                                                                                        d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M14 2v4a2 2 0 0 0 2 2h4">
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
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="18"
                                                                                                    height="18"
                                                                                                    fill="currentColor"
                                                                                                    class="bi bi-check-all text-green-600 -ml-2"
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
                    <button :class="{ 'hover:bg-white': !dropdownOpen, 'bg-white': dropdownOpen }"
                        @click="dropdownOpen=true"
                        class="inline-flex items-center justify-center h-12 py-2 pl-3 pr-0 text-sm font-medium transition-colors bg-white border-0 rounded-md text-neutral-700 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                        <img src="{{ Str::contains(Auth::user()->avatar, 'assets/img/mask.svg') ? asset('assets/img/mask.svg') : Auth::user()->avatar }}"
                            class="object-cover w-8 h-8 border rounded-full border-neutral-200" />
                        <span class="flex flex-col items-start flex-shrink-0 h-full ml-2 leading-none translate-y-px">
                            <!-- Replace with your button content -->
                        </span>
                    </button>
                </div>

                <div x-show="dropdownOpen" @click.away="dropdownOpen=false"
                    x-transition:enter="ease-out duration-200" x-transition:enter-start="-translate-y-2"
                    x-transition:enter-end="translate-y-0" class="absolute top-0 right-0 z-50 w-56 mt-12" x-cloak>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span>Profile</span>
                            <span class="ml-auto text-xs tracking-widest opacity-60">⇧⌘P</span>
                        </a>
                        <a href="#_"
                            class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                <line x1="2" x2="22" y1="10" y2="10"></line>
                            </svg>
                            <span>Billing</span><span class="ml-auto text-xs tracking-widest opacity-60">⌘B</span>
                        </a>

                        <!-- <div class="h-px my-1 -mx-1 bg-neutral-200"></div> -->
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                            class="relative flex cursor-default select-none hover:bg-red-100 items-center hover:cursor-pointer hover:text-red-700 rounded px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" x2="9" y1="12" y2="12"></line>
                            </svg>
                            <span>Log out</span>
                            <span class="ml-auto text-xs tracking-widest opacity-60">⇧⌘Q</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
