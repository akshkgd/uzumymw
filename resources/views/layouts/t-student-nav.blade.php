<div x-data="{ 
    featureRequestModalOpen: false, 
    timeRemaining: '',
    init() {
        const targetDate = new Date(2026, 6, 20, 20, 30, 0).getTime();
        const updateTimer = () => {
            const now = new Date().getTime();
            const distance = targetDate - now;
            if (distance < 0) {
                this.timeRemaining = '0d 0h 0m 0s';
                return;
            }
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            this.timeRemaining = `${days}d ${hours}h ${minutes}m ${seconds}s`;
        };
        updateTimer();
        setInterval(updateTimer, 1000);
    }
}"
class="fixed top-0 left-0 w-full z-[20] flex flex-col">
    
    <!-- Migration Countdown Banner -->
    <div @click="featureRequestModalOpen = true" class="bg-orange-50 border-b border-orange-200/50 py-2 px-4 text-center text-xs sm:text-sm text-orange-700 flex items-center justify-center gap-x-2 gap-y-1 flex-wrap min-h-10 cursor-pointer hover:bg-orange-100/30 transition-colors select-none">
        <div class="flex items-center gap-1.5 font-normal flex-wrap justify-center">
            <svg class="w-4 h-4 text-orange-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
            </svg>
            <span>
                <span>New dashboard in</span>
                <span class="mx-0.5" x-text="timeRemaining">15d 0h 0m 0s</span>
                <span class="mr-1">🎉.</span>
                <span class="hidden sm:inline">Last call to shape it.</span>
            </span>
        </div>
        <span class="underline hover:text-orange-950 transition-colors">
            Request Feature &rarr;
        </span>
    </div>

    <!-- Header -->
    <header id="sticky-header" class="relative h-14 flex items-center justify-center w-full duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-200 border-opacity-40">
        <div class="flex items-center justify-between w-full px-4  mx-auto 2xl:px-0 max-w-6xl py-1">
            <div class="relative z-10 flex items-center w-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
                <a href="{{ url('/home') }}"
                    class="sm:mr-8 font-sans text-lg flex items-center gap-2 text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline">
                    <span class="text-xl font-bold cal-sans text-neutral-800">Codekaro</span>
                </a>
            </div>
        @auth
            <div class="relative">
                <div x-data="{ dropdownOpen: false }" class="relative">
                    <div class="flex items-center gap-3">

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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 mr-2">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span>Profile</span>
                                <span class="ml-auto text-xs tracking-widest opacity-60">⇧⌘P</span>
                            </a>
                            <a href="{{ url('/sessions') }}"
                                class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 mr-2">
                                    <path d="M18 8V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h8"/>
                                    <path d="M10 19v-3.96 3.15"/>
                                    <path d="M7 19h5"/>
                                    <rect width="6" height="10" x="16" y="12" rx="2"/>
                                </svg>
                                <span>Sessions</span><span class="ml-auto text-xs tracking-widest opacity-60">⌘B</span>
                            </a>
                            <a href="{{ route('student.payments') }}"
                                class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 mr-2">
                                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                    <line x1="2" x2="22" y1="10" y2="10"></line>
                                </svg>
                                <span>Payments & Invoices</span>
                            </a>

                            <!-- <div class="h-px my-1 -mx-1 bg-neutral-200"></div> -->
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                                class="relative flex cursor-default select-none hover:bg-red-100 items-center hover:cursor-pointer hover:text-red-700 rounded px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 mr-2">
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
                </div>
            </div>
        @endauth
        @guest
            <div class="py-2 flex gap-4 items-center">
                <a href="/login" class="text-sm">Login</a>
                <a href="/login" class="border bg-black border-black text-white rounded-md text-sm px-3 py-1">Sign Up</a>
            </div>

        @endguest
    </div>

    <!-- Feature Request Modal -->
    <template x-teleport="body">
        <div x-show="featureRequestModalOpen" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
            <div x-show="featureRequestModalOpen" 
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="featureRequestModalOpen = false" class="absolute inset-0 w-full h-full bg-black bg-opacity-40 backdrop-blur-sm"></div>
            
            <div x-show="featureRequestModalOpen"
                x-trap.inert.noscroll="featureRequestModalOpen"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="relative w-full py-6 bg-white px-7 sm:max-w-lg sm:rounded-xl shadow-2xl border border-neutral-100 mx-4">
                
                <div class="flex items-center justify-between pb-2">
                    <h3 class="text-xl font-bold cal-sans text-neutral-900 leading-tight">Help Us Build Something You'll Actually Love</h3>
                    <button @click="featureRequestModalOpen = false" class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-neutral-400 hover:text-neutral-600 rounded-full hover:bg-neutral-50 transition-colors focus:outline-none">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>  
                    </button>
                </div>
                
                <div class="relative w-auto mt-2">
                    <p class="text-sm text-neutral-800 mb-5 font-sans leading-relaxed">We're rebuilding your dashboard from scratch! Missing a feature? Annoyed by something? Got a dream feature that'd make your life easier? Tell us. We're reading every single one.</p>
                    
                    <form action="{{ route('feature-requests.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <textarea 
                                id="feature_text" 
                                name="text" 
                                rows="5" 
                                class="w-full px-3.5 py-3 border border-neutral-200 rounded-lg text-sm text-neutral-800 placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all resize-none font-sans" 
                                placeholder="Describe the feature... e.g., 'I want a dark mode, a personal coding sandbox, or a better way to track my course progress...'" 
                                required
                            >{{ old('text') }}</textarea>
                            <p class="text-sm text-neutral-800 mt-2 font-sans">No essay needed, even one line helps us a ton!</p>
                        </div>
                        
                        <div class="flex gap-3 justify-end pt-2">
                            <button type="button" @click="featureRequestModalOpen = false" class="px-4 py-2 text-sm font-medium text-neutral-500 hover:text-neutral-700 bg-neutral-100 hover:bg-neutral-200 rounded-lg transition-colors cursor-pointer focus:outline-none">
                                Cancel
                            </button>
                            <button type="submit" class="px-5 py-2 text-sm font-medium text-white bg-black hover:bg-neutral-800 rounded-lg transition-colors cursor-pointer focus:outline-none">
                                Submit Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </template>
</header>
</div>
