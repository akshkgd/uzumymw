<!DOCTYPE html>
<html class="h-full bg-white">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Codekaro Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Include the Alpine library on your page -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" /> --}}
    <style>
      input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus {
    background-color: transparent !important;
    color: inherit !important;
    transition: background-color 5000s ease-in-out 0s;
}
/* Parent container CSS for proper table overflow handling */
.table-container {
    width: 100% !important; /* Ensure the container spans the full width */
    overflow-x: auto !important;    /* Allow horizontal scrolling for overflowing tables */
    -webkit-overflow-scrolling: touch !important; /* Enable smooth scrolling on mobile devices */
}

.table-container > table {
    width: 100% !important; /* Ensure the table respects the container's width */
    border-collapse: collapse !important; /* For clean table borders */
    white-space: nowrap !important; /* Prevent text wrapping in cells */
}

    </style>
  </head>
  <body class="font-sans">
    <header id="sticky-header" class="fixed top-0 z-[60] h-14 w-full duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-300 border-opacity-40">
        <div class="flex items-center justify-between w-full px-4 mx-auto py-1">
            <!-- Logo Section -->
            <div class="relative z-10 flex items-center max-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
                <a href="{{url('/home')}}" class="sm:mr-8 font-sans text-lg flex items-center gap-2 text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline">
                    <svg class="text-white rotate-90" fill="black" width="24" height="24" viewBox="0 0 32 32" version="1.1" aria-labelledby="unsplash-home" aria-hidden="false" style="flex-shrink:0">
                        <desc lang="en-US">Codekaro logo</desc>
                        <title id="unsplash-home">Codekaro</title>
                        <path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path>
                    </svg>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="items-center hidden gap-4 text-s font-mediu lg:flex">
                    <a href="{{ url('/home') }}" class="rounded-lg hover:bg-neutral-50 {{ Request::is('home') ? 'text-violet-600' : '' }}">
                        Home
                    </a>
                    <a href="{{ url('/admin/batches') }}" class="rounded-lg hover:bg-neutral-50 {{ Request::is('admin/batches') ? 'text-violet-600' : '' }}">
                        Batches
                    </a>
                    <a href="{{ url('/admin/create/batch') }}" class=" rounded-lg hover:bg-neutral-50 {{ Request::is('admin/create/batch') ? 'text-violet-600' : '' }}">
                        Create Batch
                    </a>
                    <a href="{{ url('/admin/students') }}" class=" rounded-lg hover:bg-neutral-50 {{ Request::is('admin/students') ? 'bg-neutral-100' : '' }}">
                        Learners
                    </a>
                </nav>
            </div>

            @auth
            <div class="flex gap-3 items-center">
                <!-- Search Form -->
                <form action="{{ route('search') }}" method="POST" class="hidden md:flex items-center">
                    @csrf
                    <input type="text" name="search_value" placeholder="Search user" class="w-64 text-sm px-4 py-2 rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-violet-500">
                </form>

                <!-- User Dropdown -->
                <div class="relative" x-data="{ dropdownOpen: false }">
                    <div class="flex items-center">
                        <button @click="dropdownOpen=true" 
                                :class="{ 'hover:bg-white' : !dropdownOpen, 'bg-white' : dropdownOpen }"
                                class="inline-flex items-center justify-center h-12 py-2 pl-3 pr-0 text-sm font-medium transition-colors bg-white border-0 rounded-md text-neutral-700 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                            <img src="{{Auth::user()->avatar}}" class="object-cover w-8 h-8 border rounded-full border-neutral-200"/>
                            <span class="flex flex-col items-start flex-shrink-0 h-full ml-2 leading-none translate-y-px"></span>
                        </button>
                    </div>

                    <!-- Dropdown Menu -->
                    <div x-show="dropdownOpen"
                         @click.away="dropdownOpen=false"
                         x-transition:enter="ease-out duration-200"
                         x-transition:enter-start="-translate-y-2"
                         x-transition:enter-end="translate-y-0"
                         class="absolute top-0 right-0 z-50 w-56 mt-12"
                         x-cloak>
                        <div class="p-1 mt-1 bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                            @php
                                $email = Auth::user()->email;
                                $obfuscatedEmail = substr($email, 0, 2) . str_repeat('•', strlen($email) - 6) . substr($email, -4);
                            @endphp
                            <div class="py-2 px-2 text-neutral-600">
                                <div class="px-2 text-sm">Signed in as</div>
                                <div class="px-2 text-sm text-neutral-500">{{$obfuscatedEmail}}</div>
                            </div>

                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>

                            <!-- Dropdown Links -->
                            <a href="{{ url('/admin/add-learner') }}" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <line x1="19" x2="19" y1="8" y2="14"></line>
                                    <line x1="22" x2="16" y1="11" y2="11"></line>
                                </svg>
                                <span>Add Learner</span>
                            </a>

                            <a href="{{ url('/admin/add-access') }}" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                <span>Grant Access</span>
                            </a>

                            <a href="{{ url('/admin/invoices') }}" class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg>
                                <span>Download Invoices</span>
                            </a>

                            <!-- Logout -->
                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                            <a href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                               class="relative flex cursor-default select-none hover:bg-red-100 items-center hover:text-red-700 rounded px-2 py-1.5 text-sm outline-none transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" x2="9" y1="12" y2="12"></line>
                                </svg>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endauth
        </div>
    </header>

    <!-- Mobile Navigation Menu -->
    <div class="sm:hidden fixed bottom-0 left-0 right-0 z-50 bg-white border-t border-neutral-200 w-full">
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

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>

    <!-- Main Content Container -->
    <div class="pt-14 pb-16 md:pb-0 w-full overflow-hidden">
        @yield('content')
    </div>

    <style>
        .nav-link {
            @apply flex items-center gap-3 px-3 py-2 text-gray-600 rounded-lg hover:bg-neutral-50 transition-colors;
        }
        .nav-link-desktop {
            @apply flex items-center gap-3 px-3 py-2 text-gray-600 rounded-lg hover:bg-neutral-50 transition-colors w-full;
        }
    </style>
</body>
</html>

    
    
   

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


</body>
</html>
