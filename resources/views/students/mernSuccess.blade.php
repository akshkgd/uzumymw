<!DOCTYPE html>
<html class="h-full bg-white">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Auth</title>
    <link href="https://codekaro.in/css/app.css" rel="stylesheet" />
    <!-- Include the Alpine library on your page -->
    <!-- Include the TailwindCSS library on your page -->
  </head>
  <body class="relative h-full font-geist">
    <!-- Header Section -->
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
            
            
              
                
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Sign in Section  -->
    <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        </div>
    
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
          <div class="mt-1 flex justify-center">
            <div class="inline-flex w-64 items-center justify-center "
            >
              
              <img src="learner-welcome.svg" class="max-h-36" alt="">
          </div>
          </div>
          <h2 class="text-center text-2xl mt-3 font-bold leading-9 tracking-tight text-gray-900">Welcome to the frontend cohort!</h2>
    
          
          <p class="bg-white text-sm px-6 text-gray-700 text-center">Congratulations on joining the frontend cohort. The classes will start from 21st September.
           <div class="text-blue-600">Apply for Alpha club (1:1 mentorship program) to see if we can help you achieve your goals faster.</div></p>
          <div class="text-center flex gap-2 justify-center">
            <a href="https://cal.com/ashish-shukla-ye5ege/onboarding-process-with-ashish" class="bg-black text-white px-5 py-3 rounded-lg inline-block mt-6">Apply forAlpha Club</a>
            

          </div>
        </div>
      </main>

    <!-- Footer Section -->
    <!-- <section class="bg-white">
        <p class="mt-8 text-base leading-6 text-center text-gray-400">
          &copy; 2024 Codekaro All rights reserved.
        </p>
      </div>
    </section> -->
  </body>
</html>
