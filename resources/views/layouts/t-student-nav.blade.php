<header id="sticky-header" class="fixed top-0 z-[20] h-14 flex items-center justify-center w-full duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-200 border-opacity-40">
    <div class="flex items-center justify-between w-full px-4  mx-auto 2xl:px-0 max-w-6xl py-1">
        <div class="relative z-10 flex items-center w-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
            <a href="{{ url('/home') }}"
                class="sm:mr-8 font-sans text-lg flex items-center gap-2 text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline">
                <span class="text-xl font-bold cal-sans text-neutral-800">Codekaro</span>
            </a>
           
        </div>
        @auth
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
                    <div class="flex items-center gap-3">

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
                                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                    <line x1="2" x2="22" y1="10" y2="10"></line>
                                </svg>
                                <span>Sessions</span><span class="ml-auto text-xs tracking-widest opacity-60">⌘B</span>
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

                                <div class="p-4 bg-violet-50 dark:bg-violet-950/20 border border-violet-100 dark:border-violet-900/50 rounded-xl flex gap-3.5 items-start">
                                  <img src="{{ asset('assets/img/xpa2.svg') }}" class="w-6 h-6 object-contain mt-0.5" alt="Complete Lessons">
                                  <div>
                                    <h4 class="text-sm font-bold text-violet-900 dark:text-violet-100">Complete Lessons (+50 XP)</h4>
                                    <p class="text-xs text-violet-800 dark:text-violet-200/80 mt-1 leading-relaxed">Finish a lesson, assignment, or video and click the "Mark as Complete" button to claim an instant 50 XP completion reward.</p>
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
                      </div>
                    </template>
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
</header>
