<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join 8 weeks frontend Cohort</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>[x-cloak]{display:none}</style>

    <meta name="description" content="Learn exactly what matters to become a highly skilled frontend developer & build production grade web apps!">

    <!-- Meta Image for Social Sharing -->
    <meta property="og:image" content="{{ asset('assets/img/react.webp') }}">
    <meta property="og:image:alt" content="Frontend cohort">
    <meta property="og:title" content="Join 8 weeks frontend cohort">
    <meta property="og:description" content="Learn exactly what matters to become a highly skilled frontend developer & build production grade web apps!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
</head>
<body class="bg-neutral-950 select-none">
   
    <!-- hero section -->
    <section class="h-screen flex items-center justify-center text-center md:p-0 p-5">
        <div class="max-w-3xl l-16 text-center">
            <h1 class="text-white 2xl:text-8xl sm:text-5xl text-4xl font-black">Frontend <span class="key-highlight text-whit bg-gradient-to-r from-green-600 to-green-500 bg-clip-text text-transparent">Domination </span></h1>
            <p class="text-neutral-600 sm:px-5 text-xl sm:text-2xl mt-4 text-center">Learn exactly what matters to become a highly skilled frontend developer & build production grade web apps!</p>
            <!-- <h1 class="text-white text-4xl fot-bold">Create anything with code</h1> -->
            <!-- stats -->
             <div class="flex flex-col md:flex-row justify-center gap-4 mt-10">
                <div class="inline-block  bg-neutral-800 py-2 px-4 sm:text-2xl text-xl font-medium text-neutral-200 rounded-lg ring-4 ring-neutral-800">From 10th November</div>
                <div class="inline-block  bg-neutral-800 py-2 px-4 sm:text-2xl text-xl font-medium text-neutral-200 rounded-lg ring-4 ring-neutral-800">8 Weeks Cohort</div>
                <div class="inline-block  bg-neutral-800 py-2 px-4 sm:text-2xl text-xl font-medium text-neutral-200 rounded-lg ring-4 ring-neutral-800">Only Rs 3999/-</div>
            
             </div>
             {{-- <img src="../fr-placed.svg" alt="" class="inline-block w-96 mt-10 text-center"> --}}
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
                        <li class="my-4">Movie App</li>
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
<!-- second section -->
<section class="sm:h-screen h-[60vh] mt-24 2xl:max-w-7xl max-w-3xl mx-auto  flex items-center">
  <div class="text-center">
    <h1 class="text-white block sm:hidden font-black  2xl:text-8xl sm:text-5xl text-4xl mb-12">Meet <span class="relative"> your Mentor 
      <svg xmlns="http://www.w3.org/2000/svg" width="179" height="5" viewBox="0 0 179 5" class="absolute left-0 bottom-0">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M122.746 0.713854C122.784 0.651055 122.805 0.580758 122.805 0.506545C122.805 0.24028 122.533 0.0244304 122.199 0.0244304C114.148 0.0244304 106.097 0.0189871 98.046 0.0135436C81.9421 0.00265576 65.8369 -0.00823294 49.733 0.0244319C48.4525 0.0270293 47.1582 0.0198336 45.8554 0.0125912C41.247 -0.0130289 36.5334 -0.0392343 31.9531 0.365425C31.6031 0.396348 31.3287 0.425727 31.1286 0.454213C31.0297 0.468307 30.9371 0.483818 30.8576 0.501726C30.8179 0.510657 30.7718 0.522336 30.7251 0.537838C30.6866 0.55063 30.6077 0.578775 30.5297 0.631331C30.4613 0.677479 30.271 0.829221 30.3097 1.0745C30.3446 1.29584 30.5419 1.40547 30.5945 1.43279C30.7165 1.49624 30.8526 1.51936 30.9023 1.52781L30.9036 1.52803C31.0473 1.55244 31.2454 1.56952 31.465 1.58318C32.3605 1.63888 34.1193 1.6652 36.1961 1.67654C38.848 1.69101 42.07 1.68104 44.7749 1.67268C46.3164 1.66791 47.69 1.66366 48.6944 1.66475C61.4136 1.67857 74.1329 1.68394 86.8522 1.68474C75.4613 1.90893 64.0711 2.18306 52.6849 2.53537C39.5301 2.58451 27.1174 2.63048 16.9987 2.66796C10.4229 2.69232 4.8159 2.71309 0.603492 2.7288C0.268625 2.73005 -0.00156443 2.94691 6.81838e-06 3.21317C0.00157802 3.47943 0.274315 3.69427 0.609182 3.69302C4.82149 3.67731 10.4284 3.65654 17.0041 3.63218C19.2244 3.62396 21.555 3.61532 23.9797 3.60634C23.5149 3.62692 23.0501 3.64766 22.5853 3.66858C18.6225 3.84694 16.5993 3.94898 15.8861 3.99926C15.796 4.00561 15.7215 4.01149 15.6642 4.01699C15.6359 4.0197 15.6068 4.02279 15.5796 4.02639L15.5778 4.02663C15.562 4.02869 15.5038 4.03629 15.4426 4.05394C15.4238 4.05937 15.3853 4.07113 15.3408 4.09176C15.313 4.10463 15.1946 4.15949 15.1133 4.27692C15.0786 4.33624 15.0396 4.47447 15.0403 4.55126C15.0556 4.62541 15.1196 4.75165 15.1625 4.80279C15.2571 4.9014 15.3723 4.94207 15.4004 4.95199C15.4734 4.97776 15.5381 4.98631 15.5526 4.98823L15.5539 4.98841C15.5787 4.99174 15.6004 4.99353 15.6144 4.99455C15.6653 4.99824 15.7279 4.99931 15.7838 4.99975C16.0219 5.00162 16.5054 4.99307 17.1392 4.97815C18.8956 4.9368 21.9153 4.8436 24.5065 4.76362C25.678 4.72747 26.762 4.69401 27.602 4.66927C51.8201 3.95607 76.061 3.5554 100.303 3.3193C115.375 3.26113 128.889 3.20746 138.263 3.16717C151.341 3.11096 158.303 3.07459 161.315 3.05196C162.068 3.04631 162.576 3.0415 162.871 3.03743C163.015 3.03544 163.118 3.03353 163.172 3.03148C163.185 3.03103 163.206 3.03018 163.227 3.02848L163.228 3.02845C163.233 3.02808 163.271 3.0253 163.315 3.01691C163.353 3.00864 163.494 2.95721 163.587 2.90067C163.771 2.63333 163.599 2.20376 163.436 2.1127C163.385 2.09544 163.308 2.07739 163.284 2.07345C163.271 2.07155 163.249 2.06898 163.24 2.0681C163.223 2.06654 163.209 2.06575 163.201 2.06537C163.185 2.06454 163.168 2.06401 163.153 2.06363C162.942 2.0581 162.012 2.05564 160.659 2.05502C155.214 2.05253 142.642 2.08057 140.288 2.09027C129.441 2.13496 118.59 2.19632 107.739 2.2876C113.633 2.19772 119.527 2.11658 125.421 2.04029C140.287 1.84786 148.18 1.77648 162.686 1.7023C166.085 1.68492 169.484 1.67719 172.884 1.66945C173.562 1.66791 174.24 1.66637 174.918 1.66475H178.413C178.557 1.66475 178.632 1.66471 178.649 1.66463L178.656 1.66457C178.656 1.66457 178.662 1.66451 178.668 1.66431C178.674 1.66413 178.696 1.66301 178.713 1.66173C179.149 1.45313 179.039 0.814696 178.71 0.703016C178.695 0.701884 178.674 0.700861 178.669 0.70069L178.66 0.700489L178.654 0.700403L178.648 0.700362L178.624 0.700285L178.523 0.700131C178.34 0.699914 177.976 0.699653 177.539 0.699479C176.666 0.699131 175.5 0.69913 174.916 0.700522H173.594C159.716 0.700522 145.838 0.705547 131.96 0.710572C128.889 0.711684 125.818 0.712796 122.746 0.713854ZM15.7811 4.97724C15.7741 4.97832 15.7726 4.97834 15.7786 4.97755C15.779 4.97749 15.7798 4.97739 15.7811 4.97724ZM31.1386 0.581393C31.1389 0.58132 31.1431 0.582083 31.1503 0.583901C31.1419 0.582375 31.1383 0.581466 31.1386 0.581393Z" style="fill: #22c55e"/>
    </svg></span> </h1>

    <h1 class="text-white hidden sm:block font-black  2xl:text-8xl sm:text-5xl text-4xl mb-12">Meet  your <span class="relative"> Mentor 
      <svg xmlns="http://www.w3.org/2000/svg" width="179" height="5" viewBox="0 0 179 5" class="absolute left-0 bottom-0">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M122.746 0.713854C122.784 0.651055 122.805 0.580758 122.805 0.506545C122.805 0.24028 122.533 0.0244304 122.199 0.0244304C114.148 0.0244304 106.097 0.0189871 98.046 0.0135436C81.9421 0.00265576 65.8369 -0.00823294 49.733 0.0244319C48.4525 0.0270293 47.1582 0.0198336 45.8554 0.0125912C41.247 -0.0130289 36.5334 -0.0392343 31.9531 0.365425C31.6031 0.396348 31.3287 0.425727 31.1286 0.454213C31.0297 0.468307 30.9371 0.483818 30.8576 0.501726C30.8179 0.510657 30.7718 0.522336 30.7251 0.537838C30.6866 0.55063 30.6077 0.578775 30.5297 0.631331C30.4613 0.677479 30.271 0.829221 30.3097 1.0745C30.3446 1.29584 30.5419 1.40547 30.5945 1.43279C30.7165 1.49624 30.8526 1.51936 30.9023 1.52781L30.9036 1.52803C31.0473 1.55244 31.2454 1.56952 31.465 1.58318C32.3605 1.63888 34.1193 1.6652 36.1961 1.67654C38.848 1.69101 42.07 1.68104 44.7749 1.67268C46.3164 1.66791 47.69 1.66366 48.6944 1.66475C61.4136 1.67857 74.1329 1.68394 86.8522 1.68474C75.4613 1.90893 64.0711 2.18306 52.6849 2.53537C39.5301 2.58451 27.1174 2.63048 16.9987 2.66796C10.4229 2.69232 4.8159 2.71309 0.603492 2.7288C0.268625 2.73005 -0.00156443 2.94691 6.81838e-06 3.21317C0.00157802 3.47943 0.274315 3.69427 0.609182 3.69302C4.82149 3.67731 10.4284 3.65654 17.0041 3.63218C19.2244 3.62396 21.555 3.61532 23.9797 3.60634C23.5149 3.62692 23.0501 3.64766 22.5853 3.66858C18.6225 3.84694 16.5993 3.94898 15.8861 3.99926C15.796 4.00561 15.7215 4.01149 15.6642 4.01699C15.6359 4.0197 15.6068 4.02279 15.5796 4.02639L15.5778 4.02663C15.562 4.02869 15.5038 4.03629 15.4426 4.05394C15.4238 4.05937 15.3853 4.07113 15.3408 4.09176C15.313 4.10463 15.1946 4.15949 15.1133 4.27692C15.0786 4.33624 15.0396 4.47447 15.0403 4.55126C15.0556 4.62541 15.1196 4.75165 15.1625 4.80279C15.2571 4.9014 15.3723 4.94207 15.4004 4.95199C15.4734 4.97776 15.5381 4.98631 15.5526 4.98823L15.5539 4.98841C15.5787 4.99174 15.6004 4.99353 15.6144 4.99455C15.6653 4.99824 15.7279 4.99931 15.7838 4.99975C16.0219 5.00162 16.5054 4.99307 17.1392 4.97815C18.8956 4.9368 21.9153 4.8436 24.5065 4.76362C25.678 4.72747 26.762 4.69401 27.602 4.66927C51.8201 3.95607 76.061 3.5554 100.303 3.3193C115.375 3.26113 128.889 3.20746 138.263 3.16717C151.341 3.11096 158.303 3.07459 161.315 3.05196C162.068 3.04631 162.576 3.0415 162.871 3.03743C163.015 3.03544 163.118 3.03353 163.172 3.03148C163.185 3.03103 163.206 3.03018 163.227 3.02848L163.228 3.02845C163.233 3.02808 163.271 3.0253 163.315 3.01691C163.353 3.00864 163.494 2.95721 163.587 2.90067C163.771 2.63333 163.599 2.20376 163.436 2.1127C163.385 2.09544 163.308 2.07739 163.284 2.07345C163.271 2.07155 163.249 2.06898 163.24 2.0681C163.223 2.06654 163.209 2.06575 163.201 2.06537C163.185 2.06454 163.168 2.06401 163.153 2.06363C162.942 2.0581 162.012 2.05564 160.659 2.05502C155.214 2.05253 142.642 2.08057 140.288 2.09027C129.441 2.13496 118.59 2.19632 107.739 2.2876C113.633 2.19772 119.527 2.11658 125.421 2.04029C140.287 1.84786 148.18 1.77648 162.686 1.7023C166.085 1.68492 169.484 1.67719 172.884 1.66945C173.562 1.66791 174.24 1.66637 174.918 1.66475H178.413C178.557 1.66475 178.632 1.66471 178.649 1.66463L178.656 1.66457C178.656 1.66457 178.662 1.66451 178.668 1.66431C178.674 1.66413 178.696 1.66301 178.713 1.66173C179.149 1.45313 179.039 0.814696 178.71 0.703016C178.695 0.701884 178.674 0.700861 178.669 0.70069L178.66 0.700489L178.654 0.700403L178.648 0.700362L178.624 0.700285L178.523 0.700131C178.34 0.699914 177.976 0.699653 177.539 0.699479C176.666 0.699131 175.5 0.69913 174.916 0.700522H173.594C159.716 0.700522 145.838 0.705547 131.96 0.710572C128.889 0.711684 125.818 0.712796 122.746 0.713854ZM15.7811 4.97724C15.7741 4.97832 15.7726 4.97834 15.7786 4.97755C15.779 4.97749 15.7798 4.97739 15.7811 4.97724ZM31.1386 0.581393C31.1389 0.58132 31.1431 0.582083 31.1503 0.583901C31.1419 0.582375 31.1383 0.581466 31.1386 0.581393Z" style="fill: #22c55e"/>
    </svg></span> </h1>
      <div class="fle gap-6 items-center">
          <img class="inline-block sm:h-52 sm:w-52 h-36 w-36  object-cover sm:rounded-xl rounded-full" lazy src="{{asset('assets/img/ashish.jpeg')}}" alt="">
          <h1 class="text-neutral-400 mt-6 font-bold text-3xl">Ashish Shukla</h1>
          <p class="text-neutral-600 text-xl sm:text-2xl  text-center  sm:p-0 p-6">Software Engineer turned Entrepreneur. I have mentored more than 1 lakh students in the last 3.5 years. Helping students to grow in there career. Ex AOSPL, Lido Learning</p>

      </div>
  </div>
  
  {{-- <div class="mb-32 text-center p-5">
      <h1 class="text-white block font-black  2xl:text-8xl sm:text-5xl text-4xl mb-12">Meet your Mentor</h1>
        <img class="inline-block h-48 w-64  object-cover rounded-xl" lazy src="https://www.ashishshukla.dev/assets/ashish-DLjcpl1z.jpeg" alt="">
      <div class="flex justify-center flex-wrap mt-12 sm:gap-4 gap-2">
      </div>
  </div> --}}
</section>
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
                let hours = 23;
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
              @auth
              <a href="https://codekaro.in/enroll/97" class="inline-block text-white bg-gradient-to-r from-green-600 to-green-500 bg-clip-tex mt-3 mb-12 sm:px-12 w-full sm:w-auto text-center py-4 sm:rounded-xl rounded-full sm:text-3xl text-xl font-bold shado shado-xl shadow-neutral-500">Join frontend cohort now at 3999/-</a>
                
              @endauth
              @guest
              <a href="https://rzp.io/rzp/frontend-cohort" class="inline-block text-white bg-gradient-to-r from-green-600 to-green-500 bg-clip-tex mt-3 mb-12 sm:px-12 w-full sm:w-auto text-center py-4 sm:rounded-xl rounded-full sm:text-3xl text-xl font-bold shado shado-xl shadow-neutral-500">Join frontend cohort now at 3999/-</a>
              @endguest
        </div>
     </section>
     
</body>
</html>