<!DOCTYPE html>
<html class="h-full bg-white">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Codekaro Dashboard</title>
    
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
    </style>
  </head>
  <body class="font-sans">
    <section class="flex w-full">
      <div id="sidebar" class="w-64 fixed top-0 box-border p-3 h-screen bg-neutral-100">
        <a href="#" class="sm:mr-8 px-2 font-sans text-lg flex items-center gap-2 text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline">
          <svg class="text-white rotate-90" fill="black" width="24" height="24" viewBox="0 0 32 32" version="1.1" aria-labelledby="codekaro" aria-hidden="false" style="flex-shrink:0"><desc lang="en-US">Codekaro logo</desc><title id="unsplash-home">Codekaro</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg>
          {{-- <span class="tex text-neutral-800">codekaro.in</span> --}}
        </a>
        <div class="mt-4 text-neutral-800 text-sm ">
          <form action="{{ route('search') }}" method="POST">
            @csrf
            <div class="flex px-2 items-center">
                <svg class=" w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                </svg>
                <input type="text" name="search_value" placeholder="Search user" class="mx- focus:outline-none focus:border-0 w-full p-1.5 px-2 bg-transparent" required>
                {{-- <button type="submit" class="ml-2">Search</button> --}}
            </div>
        </form>
        
          <!-- Home link -->
          <a href="{{ url('/home') }}" class="flex gap-2 items-center py-1.5 px-2 hover:bg-neutral-200 {{ Request::is('home') ? 'bg-neutral-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home "><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            Home
          </a>
        
          <!-- Batches link -->
          <a href="{{ url('/admin/batches') }}" class="flex gap-2 items-center py-1.5 px-2  hover:bg-neutral-200 {{ Request::is('admin/batches') ? 'bg-neutral-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg> Batches
          </a>
        
          <!-- Create Batch link -->
          <a href="{{ url('/admin/create/batch') }}" class="flex gap-2 items-center py-1.5 px-2  hover:bg-neutral-200 {{ Request::is('admin/students') ? 'bg-neutral-200' : '' }}">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="16"></line><line x1="8" x2="16" y1="12" y2="12"></line></svg> Create Batch
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
          <a href="{{ url('/admin/invoices') }}" class="flex gap-2 items-center py-1.5 px-2  hover:bg-neutral-200 {{ Request::is('admin/invoices') ? 'bg-neutral-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="w-4 h-4" stroke-linejoin="round" class="lucide lucide-file-text "><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg> <span>Download Invoices</span>  
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
      <div id="dashboard " class="w-[calc(100vw-256px)] ml-64">
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


</body>
</html>
