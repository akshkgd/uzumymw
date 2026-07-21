<!DOCTYPE html>
<html class="h-full bg-white overflow-x-hidden">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Codekaro Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Include the Alpine library on your page -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
   
      
    <style>
      input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus {
    background-color: transparent !important;
    color: inherit !important;
    transition: background-color 5000s ease-in-out 0s;
}
        .cal-sans {
        font-family: "Cal Sans", sans-serif;
        font-weight: 400;
        font-style: normal;
      }
      .user-search-dropdown-item {
          display: block;
          padding: 8px 12px;
          text-decoration: none;
          text-align: left;
          border-left: 3px solid transparent;
          transition: background-color 0.15s ease-in-out;
      }
      .user-search-dropdown-item:hover {
          background-color: #f5f3ff !important;
          text-decoration: none;
      }
      .user-search-dropdown-item.active {
          background-color: #f5f3ff !important;
          border-left-color: #7c3aed !important;
          text-decoration: none;
      }
      @keyframes spin {
          to { transform: rotate(360deg); }
      }
    </style>
  </head>
  <body class="font-sans">
    <!-- Mobile Navigation Menu and Search Overlay -->
    <div class="lg:hidden" x-data="{ mobileSearchOpen: false }">
      <div class="fixed bottom-0 left-0 right-0 z-50 bg-white border-t border-neutral-200 w-full">
        <div class="flex justify-center gap-6 py-2">
            <a href="{{ url('/home') }}" class="flex flex-col items-center text-xs {{ Request::is('home') ? 'text-violet-600' : 'text-gray-600' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                </svg>
                <span>Home</span>
            </a>
            <a href="{{ url('/admin/batches') }}" class="flex flex-col items-center text-xs {{ Request::is('admin/batches') ? 'text-violet-600' : 'text-gray-600' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                    <line x1="2" x2="22" y1="10" y2="10"></line>
                </svg>
                <span>Batches</span>
            </a>
            
            <!-- Mobile Search Toggle Button -->
            <button @click="mobileSearchOpen = true" class="flex flex-col items-center text-xs text-gray-600 focus:outline-none bg-transparent border-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <span>Search</span>
            </button>
            
            <a href="{{ url('/admin/students') }}" class="flex flex-col items-center text-xs {{ Request::is('admin/students') ? 'text-violet-600' : 'text-gray-600' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <span>Learners</span>
            </a>
            <a href="{{ url('/admin/add-learner') }}" class="flex flex-col items-center text-xs {{ Request::is('admin/add-learner') ? 'text-violet-600' : 'text-gray-600' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <line x1="19" x2="19" y1="8" y2="14"></line>
                    <line x1="22" x2="16" y1="11" y2="11"></line>
                </svg>
                <span>Add</span>
            </a>
            <a href="{{ url('/admin/add-access') }}" class="flex flex-col items-center text-xs {{ Request::is('admin/add-access') ? 'text-violet-600' : 'text-gray-600' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <span>Access</span>
            </a>
        </div>
      </div>

      <!-- Mobile Search Overlay Panel -->
      <div x-show="mobileSearchOpen" 
           x-transition:enter="transition ease-out duration-150"
           x-transition:enter-start="opacity-0 scale-95"
           x-transition:enter-end="opacity-100 scale-100"
           x-transition:leave="transition ease-in duration-100"
           x-transition:leave-start="opacity-100 scale-100"
           x-transition:leave-end="opacity-0 scale-95"
           class="fixed inset-0 bg-white z-50 p-4 overflow-y-auto"
           style="display: none;"
           @keydown.escape.window="mobileSearchOpen = false">
           
           <div class="max-w-lg mx-auto" x-data="userSearch()">
                <!-- Search Input Box -->
                <div class="flex items-center border border-neutral-200 rounded-lg shadow-sm focus-within:ring-2 focus-within:ring-violet-500 focus-within:border-transparent px-3 py-2 gap-2" style="border: 1px solid #e5e5e5; border-radius: 8px; background-color: #ffffff; padding: 8px 12px; display: flex; align-items: center; gap: 8px; margin-bottom: 16px;">
                    <svg class="w-5 h-5 text-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 20px; height: 20px; color: #a3a3a3;">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="text" 
                           placeholder="Search users by name, email, phone..." 
                           class="focus:outline-none text-neutral-800 placeholder-neutral-400"
                           style="border: none; outline: none; background: transparent; width: 100%; padding: 4px; font-size: 16px; color: #1f2937;"
                           x-model="query"
                           x-init="$watch('mobileSearchOpen', value => { if(value) { setTimeout(() => $el.focus(), 100) } })"
                           @input.debounce.300ms="fetchUsers"
                           @keydown.down.prevent="selectNext"
                           @keydown.up.prevent="selectPrev"
                           @keydown.enter.prevent="selectCurrentOrSubmit"
                           autocomplete="off">
                    
                    <button @click="mobileSearchOpen = false; query = ''; results = []; activeIndex = -1;" class="text-neutral-500 hover:text-neutral-700 p-1 text-sm font-medium" style="background: none; border: none; font-size: 14px; color: #6b7280; cursor: pointer; flex-shrink: 0;">
                        Close
                    </button>
                </div>

                <!-- Search Results / States -->
                <div class="overflow-hidden border border-neutral-100 rounded-lg divide-y divide-neutral-100 bg-white" style="border: 1px solid #f3f4f6; border-radius: 8px;">
                    <!-- Loader -->
                    <div x-show="loading" class="p-6 text-center text-xs text-neutral-500 flex items-center justify-center gap-2" style="padding: 24px; text-align: center; color: #6b7280; font-size: 12px; display: flex; align-items: center; justify-content: center; gap: 8px;">
                        <svg class="animate-spin h-5 w-5 text-violet-600" style="animation: spin 1s linear infinite; width: 20px; height: 20px; color: #7c3aed;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span>Searching users...</span>
                    </div>

                    <!-- No results -->
                    <div x-show="query.length >= 2 && results.length === 0 && !loading" class="p-6 text-center text-xs text-neutral-500" style="padding: 24px; text-align: center; color: #6b7280; font-size: 12px;">
                        No users found matching "<span class="font-medium" x-text="query"></span>"
                    </div>

                    <!-- Suggestions list -->
                    <template x-for="(user, index) in results" :key="user.id">
                        <a :href="'/admin/students/' + user.id" 
                           class="user-search-dropdown-item"
                           :class="{'active': index === activeIndex}"
                           @mouseenter="activeIndex = index"
                           style="padding: 14px 16px;">
                            <div class="font-semibold text-neutral-800 text-sm" style="font-weight: 600; color: #1f2937; font-size: 14px;" x-text="user.name"></div>
                            <div class="text-xs text-neutral-500 flex flex-col gap-0.5 mt-0.5" style="font-size: 11px; color: #6b7280; display: flex; flex-direction: column;">
                                <span x-text="user.email"></span>
                                <span x-text="user.mobile"></span>
                            </div>
                        </a>
                    </template>
                </div>
           </div>
      </div>
    </div>
    <section class="flex w-full">
      <div id="sidebar" class="w-64 fixed top-0 box-border p-3 h-screen bg-neutral-10 border-r border-neutral-200 hidden lg:block">
          {{-- <div class="relative px-2 z-10 flex items-center w-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left"><a class="mr- flex items-center space-x-2" href=""><svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg" class="size-6"><ellipse cx="30.882" cy="30.803" rx="30.3097" ry="30.2769" fill="url(#paint0_radial_36_64)"></ellipse><defs><radialGradient id="paint0_radial_36_64" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(0.572266 0.526062) rotate(44.969) scale(85.6825 85.6824)"><stop offset="0.352001" stop-color="#090909"></stop><stop offset="0.591494" stop-color="#2770EA"></stop><stop offset="0.793825" stop-color="#FF7E97"></stop><stop offset="0.972489" stop-color="#FF9203"></stop></radialGradient></defs></svg><span class="hidde text-xl font-bold tracking-tight sm:inline-block">Codekaro</span></a><nav class="items-center hidden space-x- text-sm font-medium lg:flex"></nav></div> --}}
        
        <a href="{{ url('/home') }}" class="sm:mr-8 px-2 cal-sans text-xl font-semibold tracking-tig text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline">
          Codekaro
        </a>
        <div class="mt-4 text-neutral-800 text-sm">
          <div style="position: relative; margin-bottom: 12px;" x-data="userSearch()">
            <form id="sidebarSearchForm" action="{{ route('search') }}" method="POST" @submit.prevent="submitSearch">
              @csrf
              <div class="flex items-center bg-white border border-neutral-200 rounded-lg focus:outline-none  transition-all duration-200 px-2 py-0.5" style="border: 1px solid #e5e5e5; border-radius: 8px; background-color: #ffffff; padding: 4px 8px; display: flex; align-items: center;">
                  <svg class="w-4 h-4 text-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="color: #a3a3a3; width: 16px; height: 16px; flex-shrink: 0; margin-right: 4px;">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                  </svg>
                  <input type="text" 
                         name="search_value" 
                         placeholder="Search user" 
                         class="focus:outline-none w-full p-1.5 px-2 bg-transparent text-neutral-800 placeholder-neutral-400" 
                         style="border: none; outline: none; background: transparent; width: 100%; padding: 6px 8px; font-size: 14px; color: #1f2937;"
                         required
                         autocomplete="off"
                         x-model="query"
                         @input.debounce.300ms="fetchUsers"
                         @keydown.down.prevent="selectNext"
                         @keydown.up.prevent="selectPrev"
                         @keydown.enter.prevent="selectCurrentOrSubmit"
                         @click.away="open = false"
                         @focus="open = true">
              </div>
            </form>

            <!-- Dropdown suggestions with premium styling -->
            <div x-show="open && results.length > 0" 
                 x-transition:enter="transition ease-out duration-100"
                 x-transition:enter-start="transform opacity-0 scale-95"
                 x-transition:enter-end="transform opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="transform opacity-100 scale-100"
                 x-transition:leave-end="transform opacity-0 scale-95"
                 class="absolute left-2 right-2 mt-1 bg-white border border-neutral-200 rounded-lg z-50 max-h-64 overflow-y-auto divide-y divide-neutral-100"
                 style="display: none; position: absolute; left: 0; right: 0; margin-top: 4px; background-color: #ffffff; border: 1px solid #e5e5e5; border-radius: 8px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); z-index: 50; max-height: 256px; overflow-y: auto;">
                 <template x-for="(user, index) in results" :key="user.id">
                     <a :href="'/admin/students/' + user.id" 
                        class="user-search-dropdown-item"
                        :class="{'active': index === activeIndex}"
                        @mouseenter="activeIndex = index">
                         <div class="font-semibold text-neutral-800 text-xs" style="font-weight: 600; color: #1f2937; font-size: 12px;" x-text="user.name"></div>
                         <div class="text-[10px] text-neutral-500 flex flex-col gap-0.5 mt-0.5" style="font-size: 10px; color: #6b7280; display: flex; flex-direction: column; margin-top: 2px;">
                             <span class="truncate" style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;" x-text="user.email"></span>
                             <span x-text="user.mobile"></span>
                         </div>
                     </a>
                 </template>
            </div>

            <!-- No results found status -->
            <div x-show="open && query.length >= 2 && results.length === 0 && !loading"
                 x-transition
                 class="absolute left-2 right-2 mt-1 bg-white border border-neutral-200 rounded-lg shadow-lg z-50 p-3 text-center text-xs text-neutral-500"
                 style="display: none; position: absolute; left: 0; right: 0; margin-top: 4px; background-color: #ffffff; border: 1px solid #e5e5e5; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); z-index: 50; padding: 12px; text-align: center; font-size: 12px; color: #6b7280;">
                 No users found
            </div>

            <!-- Loading status -->
            <div x-show="open && loading"
                 x-transition
                 class="absolute left-2 right-2 mt-1 bg-white border border-neutral-200 rounded-lg shadow-lg z-50 p-3 text-center text-xs text-neutral-500 flex items-center justify-center gap-2"
                 style="display: none; position: absolute; left: 0; right: 0; margin-top: 4px; background-color: #ffffff; border: 1px solid #e5e5e5; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); z-index: 50; padding: 12px; text-align: center; font-size: 12px; color: #6b7280; display: flex; align-items: center; justify-content: center; gap: 8px;">
                 <svg class="animate-spin h-4 w-4 text-violet-600" style="animation: spin 1s linear infinite; width: 16px; height: 16px; color: #7c3aed;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                     <circle class="opacity-25" style="opacity: 0.25;" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                     <path class="opacity-75" style="opacity: 0.75;" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                 </svg>
                 <span>Searching...</span>
            </div>
          </div>
        
          <!-- Home link -->
          <a href="{{ url('/home') }}" class="flex gap-2 items-center py-1.5 px-2 hover:bg-neutral-200 {{ Request::is('home') ? 'bg-neutral-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home "><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            Home
          </a>
        
          <!-- Reports link -->
          <a href="{{ url('/admin/reports') }}" class="flex gap-2 items-center py-1.5 px-2 hover:bg-neutral-200 {{ Request::is('admin/reports') ? 'bg-neutral-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-4 h-4"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
            Reports
          </a>
        
          <!-- Batches link -->
          <a href="{{ url('/admin/batches') }}" class="flex gap-2 items-center py-1.5 px-2  hover:bg-neutral-200 {{ Request::is('admin/batches') ? 'bg-neutral-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg> Batches
          </a>
        
          <!-- Create Batch link -->
          <a href="{{ url('/admin/create/batch') }}" class="flex gap-2 items-center py-1.5 px-2  hover:bg-neutral-200 {{ Request::is('admin/students') ? 'bg-neutral-200' : '' }}">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="16"></line><line x1="8" x2="16" y1="12" y2="12"></line></svg> Create Batch
          </a>

          <!-- Upcoming Live Sessions -->
          <a href="{{ url('/admin/upcoming-sessions') }}" class="flex gap-2 items-center py-1.5 px-2  hover:bg-neutral-200 {{ Request::is('admin/upcoming-sessions') ? 'bg-neutral-200' : '' }}">
          <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tv-minimal-play-icon lucide-tv-minimal-play"><path d="M15.033 9.44a.647.647 0 0 1 0 1.12l-4.065 2.352a.645.645 0 0 1-.968-.56V7.648a.645.645 0 0 1 .967-.56z"/><path d="M7 21h10"/><rect width="20" height="14" x="2" y="3" rx="2"/></svg>
          Upcoming Sessions
        </a>
        
          <!-- Learners link -->
          <a href="{{ url('/admin/students') }}" class="flex gap-2 items-center py-1.5 px-2 hover:bg-neutral-200 {{ Request::is('admin/learners') ? 'bg-neutral-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> Learners
          </a>
        
          <!-- Add Learner link -->
          <a href="{{ url('/admin/add-learner') }}" class="flex gap-2 items-center py-1.5 px-2  hover:bg-neutral-200 {{ Request::is('admin/add-learner') ? 'bg-neutral-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><line x1="19" x2="19" y1="8" y2="14"></line><line x1="22" x2="16" y1="11" y2="11"></line></svg> Add Learner
          </a>
        
          <!-- Grant Access link -->
          <a href="{{ url('/admin/add-access') }}" class="flex gap-2 items-center py-1.5 px-2  hover:bg-neutral-200 {{ Request::is('admin/add-access') ? 'bg-neutral-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span>Grant Access</span>
          </a>
          <a href="{{ url('/admin/course-progress') }}" class="flex gap-2 items-center py-1.5 px-2  hover:bg-neutral-200 {{ Request::is('admin/course-progress') ? 'bg-neutral-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pie-chart h-4 w-4"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg> Course Progress
          </a>
          <a href="{{ url('/admin/invoices') }}" class="flex gap-2 items-center py-1.5 px-2  hover:bg-neutral-200 {{ Request::is('admin/invoices') ? 'bg-neutral-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="w-4 h-4" stroke-linejoin="round" class="lucide lucide-file-text "><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg> <span>Download Invoices</span>  
          </a>
          <a href="{{ url('/admin/feature-requests') }}" class="flex gap-2 items-center py-1.5 px-2  hover:bg-neutral-200 {{ Request::is('admin/feature-requests') ? 'bg-neutral-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb w-4 h-4"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A5 5 0 0 0 8 8c0 1 .3 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path><path d="M9 18h6"></path><path d="M10 22h4"></path></svg> <span>Feature Requests</span>
          </a>
          <a href="{{ url('/admin/migrations') }}" class="flex gap-2 items-center py-1.5 px-2 hover:bg-neutral-200 {{ Request::is('admin/migrations*') ? 'bg-neutral-200 font-semibold' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-database-backup w-4 h-4 text-violet-600"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/><path d="M12 7v5l4 2"/></svg> <span>Migrations</span>
          </a>
        </div>
        
        <div class="fixed bottom-2 w-56">
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="relativ w-full flex cursor-default select-none hover:bg-red-100 items-center hover:cursor-pointer hover:text-red-700 rounded px-2 py-1.5 tex outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" x2="9" y1="12" y2="12"></line>
              </svg>Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
        </div>
      </div>
      <div id="dashboard " class="w-full lg:w-[calc(100vw-256px)] lg:ml-64">

        @if(session('success'))
        <div class="bg-white shadow transition-all text-green-700 px-4 py-3 absolute bottom-5 right-2" role="alert" id="successAlert">
          <span class="block sm:inline">{{ session('success') }}</span>
      </div>
      
      <script>
          document.addEventListener('DOMContentLoaded', function () {
              const alertBox = document.getElementById('successAlert');
              
              // Automatically hide the alert after 3 seconds (3000 milliseconds)
              setTimeout(function () {
                  alertBox.style.display = 'none'
              }, 4000);
      
              // If you also have a close button in the future, add this logic to close manually
              const closeButton = document.querySelector('[role="button"]');
              if (closeButton) {
                  closeButton.addEventListener('click', function () {
                      alertBox.style.display = 'none';
                  });
              }
          });
      </script>
      
        @endif
        @yield('content')
      </div>
    </section>
    
   

    <!-- Footer Section -->
    <section class="bg-white hidden">
      <div
        class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8"
      >
        
        
        <p class="mt-8 text-base leading-6 text-center text-neutral-600">
          {{-- &copy; 2024 Codekaro All rights reserved. --}}
        </p>
      </div>
    </section>

    <script>
        function userSearch() {
            return {
                query: '',
                results: [],
                open: false,
                loading: false,
                activeIndex: -1,
                fetchUsers() {
                    if (this.query.length < 2) {
                        this.results = [];
                        this.activeIndex = -1;
                        return;
                    }
                    this.loading = true;
                    this.open = true;
                    
                    fetch(`/admin/search-users-ajax?query=${encodeURIComponent(this.query)}`)
                        .then(res => {
                            if (!res.ok) throw new Error('Network response was not ok');
                            return res.json();
                        })
                        .then(data => {
                            this.results = data;
                            this.loading = false;
                            this.activeIndex = -1;
                        })
                        .catch(err => {
                            console.error('Error fetching users:', err);
                            this.results = [];
                            this.loading = false;
                        });
                },
                selectNext() {
                    if (this.results.length === 0) return;
                    this.activeIndex = (this.activeIndex + 1) % this.results.length;
                },
                selectPrev() {
                    if (this.results.length === 0) return;
                    this.activeIndex = (this.activeIndex - 1 + this.results.length) % this.results.length;
                },
                selectCurrentOrSubmit() {
                    if (this.activeIndex >= 0 && this.activeIndex < this.results.length) {
                        window.location.href = '/admin/students/' + this.results[this.activeIndex].id;
                    } else {
                        document.getElementById('sidebarSearchForm').submit();
                    }
                },
                submitSearch() {
                    if (this.activeIndex >= 0 && this.activeIndex < this.results.length) {
                        window.location.href = '/admin/students/' + this.results[this.activeIndex].id;
                    } else {
                        document.getElementById('sidebarSearchForm').submit();
                    }
                }
            };
        }
    </script>
</body>
</html>
