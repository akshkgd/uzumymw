<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .jobs img{
            height: 28px;
            display: inline-block;
            filter: grayscale(100);
        }
        
    </style>
    <style>[x-cloak]{display:none}</style>
</head>
<body class="bg-neutral-950 select-none">
   
    <!-- hero section -->
    <section class="h-screen flex items-center justify-center text-center md:p-0 p-5">
        <div class="max-w-3xl l-16 text-center">
            <h1 class="text-white 2xl:text-8xl sm:text-5xl text-4xl font-black">Frontend <span class="key-highlight text-whit bg-gradient-to-r from-green-600 to-green-500 bg-clip-text text-transparent">Domination <img class="absolute bottom-0 left-0" src="../green-highlight.sv" alt=""> </span></h1>
            <p class="text-neutral-600 sm:px-5 text-xl sm:text-2xl mt-4 text-center">Learn exactly what matters to become a highly skilled frontend developer & build production grade web apps!</p>
            <!-- <h1 class="text-white text-4xl fot-bold">Create anything with code</h1> -->
            <!-- stats -->
             <div class="flex flex-col md:flex-row justify-center gap-4 mt-10">
                <div class="inline-block  bg-neutral-800 py-2 px-4 sm:text-2xl text-xl font-medium text-neutral-200 rounded-lg ring-4 ring-neutral-800">From 16th November</div>
                <div class="inline-block  bg-neutral-800 py-2 px-4 sm:text-2xl text-xl font-medium text-neutral-200 rounded-lg ring-4 ring-neutral-800">8 Weeks Cohort</div>
                <div class="inline-block  bg-neutral-800 py-2 px-4 sm:text-2xl text-xl font-medium text-neutral-200 rounded-lg ring-4 ring-neutral-800">Only Rs 3999/-</div>
            
             </div>
             <img src="../fr-placed.svg" alt="" class="inline-block w-96 mt-10 text-center">
             <!-- <a href="" class="inline-block py-2 w-full bg-green-600">Join now & Dominate Frontend</a> -->
        </div>
    </section>

    <!-- second section -->
     <section class="h-screen 2xl:max-w-7xl max-w-5xl mx-auto  flex items-center">
        <div class="mb-32 l-16 text-center p-5">
            <h1 class="text-white sm:block hidden font-black  2xl:text-8xl sm:text-5xl text-4xl">We believe in,<br><span class="key-highlight text-whit bg-gradient-to-r from-green-600 to-green-500 bg-clip-text text-transparent">Consistency. </span>No shortcuts.</h1>
            <h1 class="text-white block sm:hidden font-black  2xl:text-8xl sm:text-5xl text-4xl">We believe in, <span class="key-highlight text-whit bg-gradient-to-r from-green-600 to-green-500 bg-clip-text text-transparent">Consistency. </span>No shortcuts.</h1>
            <div class="flex justify-center flex-wrap mt-12 sm:gap-4 gap-2">
            <div class="bg-neutral-800 sm:text-3xl text-xl font-bold text-white px-8 py-2 rounded-full  inline-block">HTML & CSS</div>
            <div class="bg-neutral-800 sm:text-3xl text-xl font-bold text-white px-8 py-2 rounded-full  inline-block">Javascript</div>
            <div class="bg-neutral-800 sm:text-3xl text-xl font-bold text-white px-8 py-2 rounded-full  inline-block">React js</div> 
            <div class="bg-neutral-800 sm:text-3xl text-xl font-bold text-white px-8 py-2 rounded-full  inline-block">Tailwind CSS</div>
            <div class="bg-neutral-800 sm:text-3xl text-xl font-bold text-white px-8 py-2 rounded-full  inline-block">Building Projects 🤟</div>
            <div class="bg-neutral-800 sm:text-3xl text-xl font-bold text-white px-8 py-2 rounded-full  inline-block">Placement Assistance 💰</div>
            </div>
        </div>
     </section>

     <section class="max-w-5xl mx-auto  ">
        <div class="mb-32 l-16 text-center">
            <h1 class="text-white font-black 2xl:text-7xl sm:text-5xl text-4xl">Dominate!<br><span class="key-highlight text-neutral-800 bg-clip-tex outline-4 text-transparen fill-transparen">From start to victory. </span></h1>
            </div>
        <div x-data="{ 
            activeAccordion: '', 
            setActiveAccordion(id) { 
                this.activeAccordion = (this.activeAccordion == id) ? '' : id 
            } 
        }" class="relative w-full mx-auto overflow-hidden  sm:text-4xl text-2xl font-bold text-neutral-50 bg-whit borde border-gray-200 divide-y divide-neutral-800 rounded-md">
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underlin group-hover:decoration-green-00">
                <span>1. HTML</span>
                <svg class="w-4 h-4 duration-700 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-collapse.duration.700ms x-cloak>
                <div class="p-4 pt-0 opacity-60 pl-5">
                    <ul class="ml-8 text-xl sm:text-3xl my-5" style="list-style-type: none;">
                        <li class="my-4">Intro to HTML</li>
                        <li class="my-4">HTML Forms and Tables</li>
                    </ul>
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                <span>2. CSS</span>
                <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-collapse.duration.700ms x-cloak>
                <div class="p-4 pt-0 opacity- opacity-60 pl-5">
                    <ul class="ml-8 text-xl sm:text-3xl  my-5 " style="list-style-type: none;">
                        <li class="my-4">Intro to CSS</li>
                        <li class="my-4">CSS Positions</li>
                        <li class="my-4">CSS Flexbox</li>
                        <li class="my-4">Netflix Clone</li>
                        <li class="my-4">Pseudo elements and classes</li>
                        <li class="my-4">Responsive Design</li>
                        <li class="my-4">CSS Animations</li>
                        <li class="my-4">Netflix clone & Deploying to Vercel</li>
                        <li class="my-4">Grid System & Combinators</li>
                        <li class="my-4">Dribbble Landing page</li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underlie">
                <span>3. Tailwind CSS</span>
                <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-4 pt-0 opacity-60">
                    <ul class="ml-8 text-xl sm:text-3xl my-5 " style="list-style-type: none;">
                        <li class="my-4">Setup & Intro to Tailwind</li>
                        <li class="my-4">Tailwind Responsive Design</li>
                        <li class="my-4">ChatGPT clone</li>
                        <li class="my-4">Resources and Todo App</li>
                    </ul>
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underlie">
                <span>4. Javascript</span>
                <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-4 pt-0 opacity-60">
                    <ul class="ml-8 text-xl sm:text-3xl my-5 " style="list-style-type: none;">
                        <li class="my-4">JavaScript Foundations</li>
                        <li class="my-4">JavaScript Basics</li>
                        <li class="my-4">Functions & Loops</li>
                        <li class="my-4">Array mapping & filters</li>
                        <li class="my-4">Intro to DOM</li>
                        <li class="my-4">Creating Elements</li>
                        <li class="my-4">User management system</li>
                        <li class="my-4">Event Listeners</li>
                        <li class="my-4">Local storage & Session Storage</li>
                        <li class="my-4">Asynchronous JS & API's</li>
                        <li class="my-4">Todo App</li>
                        <li class="my-4">Javascript ES6</li>
                        <li class="my-4">Book My show clone</li>


                    </ul>
                </div>
            </div>
        </div>

        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underlie">
                <span>4. React Js</span>
                <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-4 pt-0 opacity-60">
                    <ul class="ml-8 text-xl sm:text-3xl my-5 " style="list-style-type: none;">
                        <li class="my-4">JavaScript Refresher</li>
                        <li class="my-4">Intro to React & Components</li>
                        <li class="my-4">Props & Conditional rendering</li>
                        <li class="my-4">UseState Hook</li>
                        <li class="my-4">React Router Dom</li>
                        <li class="my-4">Instagram Clone</li>
                        <li class="my-4">Netflix Clone - Adding functionality</li>
                        <li class="my-4">UseEffect & API</li>
                        <li class="my-4">React Forms</li>
                        <li class="my-4">Intro to Firebase</li>
                        <li class="my-4">ChatGPT API & Shadcn</li>
                        <li class="my-4">Major Project React Portfolio</li>
                        <li class="my-4">Meeting App</li>
                        <li class="my-4">React Authentication</li>
                        <li class="my-4">React Context Api</li>
                        <li class="my-4">Image generation App using DALLE 3.o</li>




                    </ul>
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underlin group-hover:decoration-green-00">
                <span>5. Redux Toolkit</span>
                <svg class="w-4 h-4 duration-700 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-collapse.duration.700ms x-cloak>
                <div class="p-4 pt-0 opacity- pl-5">
                    <ul class="ml-8 text-xl sm:text-3xl my-5" style="list-style-type: none;">
                        <li class="my-4">Redux - Deep dive</li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underlin group-hover:decoration-green-00">
                <span>6. Git & GitHub</span>
                <svg class="w-4 h-4 duration-700 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-collapse.duration.700ms x-cloak>
                <div class="p-4 pt-0 opacity-60 pl-5">
                    <ul class="ml-8 text-xl sm:text-3xl my-5" style="list-style-type: none;">
                        <li class="my-4">Intro to Git</li>
                        <li class="my-4">Git Branching (branch management, merge conflicts)</li>
                        <li class="my-4">Pull Requests (creating, reviewing, best practices)</li>
                        <li class="my-4">Reverting and Resetting Changes</li>
                        <li class="my-4">Collaborating on GitHub (collaborator roles, issues, discussions)</li>



                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="ml- mt-20 mb-80 text-cente">
        <h1 class="text-white text-5xl font-bold">Industry level intense training.</h1>
        <p class="text-neutral-600 text-3xl mt-4 ">If anything is considered part of frontend dev, we’re covering it in this course.</p>
    </div> -->
     </section>
<!-- 
     <section class="flex h-screen items-center justify-center">
        <div class="lg:w-[1024px]">
            <div class="w-2/3 borde bgg bg-neutral-800 rounded-xl p-5 text-white ">
                <h1 class="text-3xl font-bold">Join Frontend Cohort Now</h1>
                <p class="mt-8">Offer ends in </p>
                
            </div>
        </div>
     </section> -->

     <section class="lg:h-screen flex items-center">
        <div class="max-w-5xl mx-auto p-5 mt-48 mb-24 text-cente">
            <h1 class="hidden sm:block text-white lg:text-8xl sm:text-7xl text-4xl font-bold">More Value,<br> Less cost.</h1>
            <h1 class="sm:hidden text-white lg:text-9xl sm:text-7xl text-4xl text-center  font-bold">More Value, Less cost.</h1>

            <p class="text-neutral-600 text-xl sm:text-2xl mt-4 text-center sm:text-left">If anything is considered part of frontend dev, we’re covering it in this course! With <span class="key-highlight text-whit bg-gradient-to-r from-green-600 to-green-500 bg-clip-text text-transparent">Diwali's special </span> unbeatable Price.</p>
            <!-- <p class="text-xs text-neutral-600 mt-3 text-center sm:text-left">*Course validity is for 1 year from date of batch start.</p> -->
            <div class="flex gap-4 my-5 items-center justify-center sm:justify-start text-whit text-2xl text-neutral-600 ">
                <p id="hours" class="ring- ring-neutral-700  py-1 rounded-full">8 hrs</p>
                <p>:</p>
                <p id="minutes" class="ring- ring-neutral-700 py-1 rounded-full">10 min</p>
                <p>:</p>
                <p id="seconds" class="ring- ring-neutral-700  py-1 rounded-full">46 sec</p>
              </div>
              
              <script>
                // Initial time values
                let hours = 8;
                let minutes = 10;
                let seconds = 46;
              
                // Update the timer every second
                const timer = setInterval(() => {
                  if (seconds === 0) {
                    if (minutes === 0) {
                      if (hours === 0) {
                        clearInterval(timer); // Stop the timer when it reaches 0
                        return;
                      } else {
                        hours--;
                        minutes = 59;
                        seconds = 59;
                      }
                    } else {
                      minutes--;
                      seconds = 59;
                    }
                  } else {
                    seconds--;
                  }
              
                  // Update HTML elements
                  document.getElementById('hours').textContent = `${hours} hrs`;
                  document.getElementById('minutes').textContent = `${minutes} min`;
                  document.getElementById('seconds').textContent = `${seconds} sec`;
                }, 1000);
              </script>
              
            <a href="" class="inline-block text-white bg-gradient-to-r from-green-600 to-green-500 bg-clip-tex mt-3 mb-12 sm:px-12 w-full sm:w-auto text-center py-4 sm:rounded-xl rounded-full sm:text-3xl text-xl font-bold shado shado-xl shadow-neutral-500">Join frontend cohort now at 3999/-</a>
        </div>
     </section>
     
</body>
</html>