<header
      id="sticky-header"
      class="fixed top-0 z-[60] flex items-center justify-center w-full h-16 duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-300 border-opacity-20"
    >
      <div
        class="flex items-center justify-between w-full px-4 mx-auto 2xl:px-0 max-w-5xl"
      >
        <div
          class="relative z-10 flex items-center w-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left"
        >
          <a
            href="/"
            class="inline-flex sm:mr-8 items-end font-sans text-2xl font-extrabold text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline"
          >
          <svg xmlns="http://www.w3.org/2000/svg" data-testid="geist-icon" stroke-linejoin="round" style="width:23px;height:25px;color:var(--ds-gray-1000)" viewBox="0 0 16 16" aria-label="Vercel logo"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 1L16 15H0L8 1Z" fill="currentColor"></path></svg>

          </a>
          <nav
            class="items-center hidden space-x-5 text-sm font-medium lg:flex"
          >
            
            
          </nav>
        </div>

        <div class="relative">
          <div x-data="{ dropdownOpen: false }" class="relative">
            <div class="flex items-center">
              <button
              :class="{ 'hover:bg-white' : !dropdownOpen, 'bg-white' : dropdownOpen }"
              @click="dropdownOpen=true"
              class="inline-flex items-center justify-center h-12 py-2 pl-3 pr-0 text-sm font-medium transition-colors bg-white border-0 rounded-md text-neutral-700 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
            >
              <img
                src="https://cdn.devdojo.com/users/default.png"
                class="object-cover w-8 h-8 border rounded-full border-neutral-200"
              />
              <span
                class="flex flex-col items-start flex-shrink-0 h-full ml-2 leading-none translate-y-px"
              >
                <!-- Replace with your button content -->
              </span>
            </button>
            </div>
            
            <div
              x-show="dropdownOpen"
              @click.away="dropdownOpen=false"
              x-transition:enter="ease-out duration-200"
              x-transition:enter-start="-translate-y-2"
              x-transition:enter-end="translate-y-0"
              class="absolute top-0 right-0 z-50 w-56 mt-12"
              x-cloak
            >
              <div
                class="p-1 mt-1 bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700"
              >
              @php
                  $email = Auth::user()->email;
                  $obfuscatedEmail = substr($email, 0, 2) . str_repeat('•', strlen($email) - 6) . substr($email, -4);
              @endphp
                <div class="py-2 px-2 text-neutral-600">
                  <div class="px-2 text-sm">Signed in as</div>
                  <div class="px-2  text-sm text-neutral-500">{{$obfuscatedEmail}}</div>
                </div>

                <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                <a
                  href="{{url('/my-account')}}"
                  class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="w-4 h-4 mr-2"
                  >
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <span>Profile</span>
                  <span class="ml-auto text-xs tracking-widest opacity-60"
                    >⇧⌘P</span
                  >
                </a>
                <a
                  href="{{url('/billing')}}"
                  class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="w-4 h-4 mr-2"
                  >
                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                    <line x1="2" x2="22" y1="10" y2="10"></line>
                  </svg>
                  <span>Billing</span
                  ><span class="ml-auto text-xs tracking-widest opacity-60"
                    >⌘B</span
                  >
                </a>
                
                <!-- <div class="h-px my-1 -mx-1 bg-neutral-200"></div> -->
                <a
                  href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                  class="relative flex cursor-default select-none hover:bg-red-100 items-center hover:cursor-pointer hover:text-red-700 rounded px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="w-4 h-4 mr-2"
                  >
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" x2="9" y1="12" y2="12"></line>
                  </svg>
                  <span>Log out</span>
                  <span class="ml-auto text-xs tracking-widest opacity-60"
                    >⇧⌘Q</span
                  >
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
