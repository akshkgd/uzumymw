
<!DOCTYPE html>
<html class="h-full bg-white">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <style>
      [x-cloak] {
        display: none;
      }
      .desc a{
        color: rgb(0, 128, 255) !important;
      }
      
    </style>
  </head>
  <body class="font-geis">
    <div id="main">
    <header id="sticky-header" class="fixed top-0 z-[60] flex items-center justify-center w-full h-14 duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-300 border-opacity-20">
      <div class="flex items-center justify-between w-full px-4 mx-auto 2xl:px-0 max-w-6xl"
      >
        <div
          class="relative z-10 flex items-center w-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left"
        >
          <a href="/home" class="inline-flex items-center sm:mr-8 font-sans text-2xl  text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline">
            <svg class=" rotate-90" fill="black" width="24" height="24" viewBox="0 0 32 32" version="1.1" aria-labelledby="codekaro-home" aria-hidden="false" style="flex-shrink:0"><desc lang="en-US">Unsplash logo</desc><title id="codekaro">Codekaro</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg>
            {{-- <svg xmlns="http://www.w3.org/2000/svg" data-testid="geist-icon" stroke-linejoin="round" style="width:23px;height:25px;color:var(--ds-gray-1000)" viewBox="0 0 16 16" aria-label="Vercel logo"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 1L16 15H0L8 1Z" fill="currentColor"></path></svg> --}}
    <span class="ml-3 text-base font-mediu border-l pl-3 "></span> 
          </a>
          <nav
            class="items-center hidden space-x-5 text-sm font-medium lg:flex"
          >
            
            
          </nav>
        </div>

        <div class="relative">
          <div x-data="{ dropdownOpen: false }" class="relative">
            <div class="flex gap-3 items-center">
              @if($intro == 'false' && $video->type == 2)
                <button id="markComplete" 
                    class="text-sm px-5 rounded-full py-2 border hover:bg-violet-200 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:pointer-events-none
                    {{ optional($video->userProgress(Auth::user()->id))->status 
                        ? 'bg-green-50 border-green-50 text-green-700 disabled:opacity-100' 
                        : 'bg-violet-100 border-violet-300 text-violet-600' }}"
                    {{ optional($video->userProgress(Auth::user()->id))->status ? 'disabled' : '' }}>
                    {{ optional($video->userProgress(Auth::user()->id))->status ? 'Lesson Completed' : 'Mark as Complete' }}
                </button>
              @endif
              <div x-data="{slideOverOpen: false}"
            class="relative z-50 w-auto h-auto">
            <button @click="slideOverOpen=true" class="inline-flex items-center justify-center  transition-colors text-sm text-black bg-neutral-50 px-5 rounded-full py-2 border  hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Chapters</button>
            <template x-teleport="body">
                <div 
                    x-show="slideOverOpen"
                    @keydown.window.escape="slideOverOpen=false"
                    class="relative z-[99]">
                    <div x-show="slideOverOpen" x-transition.opacity.duration.300ms @click="slideOverOpen="false" class="fixed inset-0 bg-black bg-opacity-20  backdrop-blur-s"></div>
                    <div class="fixed inset-0 overflow-hidden">
                        <div class="absolute inset-0 overflow-hidden">
                            <div class="fixed inset-y-0 right-0 flex max-w-full pl-">
                                <div 
                                    x-show="slideOverOpen" 
                                    @click.away="slideOverOpen = false"
                                    x-transition:enter="transform transition ease-in-out duration-200 sm:duration-200" 
                                    x-transition:enter-start="translate-x-full" 
                                    x-transition:enter-end="translate-x-0" 
                                    x-transition:leave="transform transition ease-in-out duration-200 sm:duration-200" 
                                    x-transition:leave-start="translate-x-0" 
                                    x-transition:leave-end="translate-x-full" 
                                    class="w-screen max-w-80">
                                    <div class="flex flex-col h-full py-5 overflow-y-auto bg-white border-r border-neutral-100">
                                        <div class="px-4 sm:px-5">
                                            <div class="flex items-start justify-between pb-1">
                                                <h2 class="text-base font-normal leading-6 text-gray-900" id="slide-over-title">Course Content</h2>
                                                <div class="flex items-center h-auto ml-3">
                                                    <button @click="slideOverOpen=false" class="absolute top-0 right-0 z-30 flex  bg-white items-center justify-center px-3 py-2 mt-4 mr-5 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
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
                                        }" class="relative w-full max-w-md mx-auto text-sm font-normal">
                                        @if (isset($sections) && !$sections->isEmpty())
                                        @foreach($sections as $section)
                                        <div x-data="{ id: $id('accordion') }" :class="{ 'text-neutral-900': activeAccordion==id, 'text-neutral-600 hover:text-blue-600': activeAccordion!=id }" class="cursor-pointer group">
                                            
                                            <button @click="setActiveAccordion(id)" class="flex items-center justify-between text-md w-full py-4 px-2 pb-1 text-left select-none">
                                                <span class="text-md text-black font-normal">{{ $section->name }}</span>
                                                <svg class="w-5 h-5 duration-300 ease-out" :class="{ '-rotate-[45deg]': activeAccordion==id }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /></svg>
                                            </button>
                                            @foreach ($section->chapters as $c)
                                            {{-- @if($accessTill >=  $c->accessOn ) --}}
                                            <div x-show="activeAccordion==id" class="" x-collapse x-cloak>
                                                <a id="item" style=" display: flex" class="w-full items-center gap-2 flex bg-neutral-100 my-2 p-3 rounded-md text-left  {{ $c->id == $video->id ? 'bg-orange-100' : ' ' }}"  href="{{ route('recordings', ['batchId' => $batchId, 'cId' => Crypt::encrypt($c->id)]) }}">
                                                    @if($c->type == 2)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                                                <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/>
                                              </svg>
                                              @elseif($c->type == 3)
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-broadcast" viewBox="0 0 16 16">
                                                <path d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707m2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708m5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708m2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0"/>
                                              </svg>
                                              @else
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-text-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                              </svg>
                                              @endif
                                                    <span class="text-">{{$c->title}}</span>
                                                </a>
                                                
                                                
                                            </div>
                                            {{-- @endif --}}
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
                <div class="py-2 px-2 text-neutral-600">
                  <div class="px-2 text-sm">Signed in as</div>
                  <div class="px-2  text-sm text-neutral-500">ak......@gmail.com</div>
                </div>

                <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                <a
                  href="#_"
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
                  href="#_"
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
                  href="#_"
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- intro -->
    @if($subStatus == true)
    @if($intro == 'true')
    <main class="min-h-scree mt-32 flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
      
  
      <div class="sm:mx-auto sm:w-full sm:max-w-xl text-cente">
        
        <h2 class="text-cente text-lg -mt-1 font-semibold leading-9  text-gray-900">{{$enrollment->batch->name}}</h2>

        <p class="bg-white text-s text-gray-800">
            {{ optional($enrollment)->progress ?? 0 }}% completed in
            @php
                $timeSpent = optional($enrollment)->time_spent ?? 0; // Time spent in minutes
                $hours = floor($timeSpent / 60);
                $minutes = $timeSpent % 60;
            @endphp
            {{ $hours }}Hrs {{ $minutes }}Mins
        </p>
        {{-- links --}}
        <div class="flex gap-3 mt-5">
          <a href="" class="inline-block border rounded-lg bg-violet-10 text-violet-60 py-2  px-5 ">Invoice</a>
          <a href="" class="inline-block border rounded-lg bg-violet-10 text-violet-60 py-2  px-5 ">Join Community</a>
          {{-- <a href="" class="inline-block border rounded-lg bg-violet-10 text-violet-60 py-2  px-5 ">Get Certificate</a> --}}
          <a href="" class="inline-block border rounded-lg bg-violet-10 text-violet-60 py-2  px-5 ">Invite your Friend</a>

        </div>
        <div class="mt-12 text-center">
          
          <div class="flex gap-2 items-center justify-cente">
          
            
          
          @php
            $nextClassDate = \Carbon\Carbon::parse($enrollment->batch->nextClass);
            $today = \Carbon\Carbon::today();
          @endphp
          @if($nextClassDate->lessThanOrEqualTo($today))
            <div class="sm:flex text-left  items-center gap-2">
            <div class="mt-2 sm:mt-0">
            <p class="text-red-600 ">No upcoming live class</p>
            <p class="text-neutral-700 text-s">You will be notified via email and WhatsApp when the new live class is scheduled.</p>
            </div>
            </div>
            @else
            <div class="text-left">
            {{-- <div class="bg-violet-10 inline-block text-violet-600 px- rounded-full py-1 text-sm mb-3">Upcoming live class</div> --}}
            <h2 class="font-semibold text-lg text-gray-800 m-0 "> <span class="relative">Live:
              <svg xmlns="http://www.w3.org/2000/svg" width="179" height="5" viewBox="0 0 179 5" class="absolute left-0 bottom-1 -mt-1">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M122.746 0.713854C122.784 0.651055 122.805 0.580758 122.805 0.506545C122.805 0.24028 122.533 0.0244304 122.199 0.0244304C114.148 0.0244304 106.097 0.0189871 98.046 0.0135436C81.9421 0.00265576 65.8369 -0.00823294 49.733 0.0244319C48.4525 0.0270293 47.1582 0.0198336 45.8554 0.0125912C41.247 -0.0130289 36.5334 -0.0392343 31.9531 0.365425C31.6031 0.396348 31.3287 0.425727 31.1286 0.454213C31.0297 0.468307 30.9371 0.483818 30.8576 0.501726C30.8179 0.510657 30.7718 0.522336 30.7251 0.537838C30.6866 0.55063 30.6077 0.578775 30.5297 0.631331C30.4613 0.677479 30.271 0.829221 30.3097 1.0745C30.3446 1.29584 30.5419 1.40547 30.5945 1.43279C30.7165 1.49624 30.8526 1.51936 30.9023 1.52781L30.9036 1.52803C31.0473 1.55244 31.2454 1.56952 31.465 1.58318C32.3605 1.63888 34.1193 1.6652 36.1961 1.67654C38.848 1.69101 42.07 1.68104 44.7749 1.67268C46.3164 1.66791 47.69 1.66366 48.6944 1.66475C61.4136 1.67857 74.1329 1.68394 86.8522 1.68474C75.4613 1.90893 64.0711 2.18306 52.6849 2.53537C39.5301 2.58451 27.1174 2.63048 16.9987 2.66796C10.4229 2.69232 4.8159 2.71309 0.603492 2.7288C0.268625 2.73005 -0.00156443 2.94691 6.81838e-06 3.21317C0.00157802 3.47943 0.274315 3.69427 0.609182 3.69302C4.82149 3.67731 10.4284 3.65654 17.0041 3.63218C19.2244 3.62396 21.555 3.61532 23.9797 3.60634C23.5149 3.62692 23.0501 3.64766 22.5853 3.66858C18.6225 3.84694 16.5993 3.94898 15.8861 3.99926C15.796 4.00561 15.7215 4.01149 15.6642 4.01699C15.6359 4.0197 15.6068 4.02279 15.5796 4.02639L15.5778 4.02663C15.562 4.02869 15.5038 4.03629 15.4426 4.05394C15.4238 4.05937 15.3853 4.07113 15.3408 4.09176C15.313 4.10463 15.1946 4.15949 15.1133 4.27692C15.0786 4.33624 15.0396 4.47447 15.0403 4.55126C15.0556 4.62541 15.1196 4.75165 15.1625 4.80279C15.2571 4.9014 15.3723 4.94207 15.4004 4.95199C15.4734 4.97776 15.5381 4.98631 15.5526 4.98823L15.5539 4.98841C15.5787 4.99174 15.6004 4.99353 15.6144 4.99455C15.6653 4.99824 15.7279 4.99931 15.7838 4.99975C16.0219 5.00162 16.5054 4.99307 17.1392 4.97815C18.8956 4.9368 21.9153 4.8436 24.5065 4.76362C25.678 4.72747 26.762 4.69401 27.602 4.66927C51.8201 3.95607 76.061 3.5554 100.303 3.3193C115.375 3.26113 128.889 3.20746 138.263 3.16717C151.341 3.11096 158.303 3.07459 161.315 3.05196C162.068 3.04631 162.576 3.0415 162.871 3.03743C163.015 3.03544 163.118 3.03353 163.172 3.03148C163.185 3.03103 163.206 3.03018 163.227 3.02848L163.228 3.02845C163.233 3.02808 163.271 3.0253 163.315 3.01691C163.353 3.00864 163.494 2.95721 163.587 2.90067C163.771 2.63333 163.599 2.20376 163.436 2.1127C163.385 2.09544 163.308 2.07739 163.284 2.07345C163.271 2.07155 163.249 2.06898 163.24 2.0681C163.223 2.06654 163.209 2.06575 163.201 2.06537C163.185 2.06454 163.168 2.06401 163.153 2.06363C162.942 2.0581 162.012 2.05564 160.659 2.05502C155.214 2.05253 142.642 2.08057 140.288 2.09027C129.441 2.13496 118.59 2.19632 107.739 2.2876C113.633 2.19772 119.527 2.11658 125.421 2.04029C140.287 1.84786 148.18 1.77648 162.686 1.7023C166.085 1.68492 169.484 1.67719 172.884 1.66945C173.562 1.66791 174.24 1.66637 174.918 1.66475H178.413C178.557 1.66475 178.632 1.66471 178.649 1.66463L178.656 1.66457C178.656 1.66457 178.662 1.66451 178.668 1.66431C178.674 1.66413 178.696 1.66301 178.713 1.66173C179.149 1.45313 179.039 0.814696 178.71 0.703016C178.695 0.701884 178.674 0.700861 178.669 0.70069L178.66 0.700489L178.654 0.700403L178.648 0.700362L178.624 0.700285L178.523 0.700131C178.34 0.699914 177.976 0.699653 177.539 0.699479C176.666 0.699131 175.5 0.69913 174.916 0.700522H173.594C159.716 0.700522 145.838 0.705547 131.96 0.710572C128.889 0.711684 125.818 0.712796 122.746 0.713854ZM15.7811 4.97724C15.7741 4.97832 15.7726 4.97834 15.7786 4.97755C15.779 4.97749 15.7798 4.97739 15.7811 4.97724ZM31.1386 0.581393C31.1389 0.58132 31.1431 0.582083 31.1503 0.583901C31.1419 0.582375 31.1383 0.581466 31.1386 0.581393Z" style="fill: #22c55e"/>
            </svg>  
            </span> Onboarding Call</h2>
            <p class="text-sm text-neutral-600 font-normal">Sat, 3rd Aug 2024 at 07:00 PM GMT+05:30</p>
            <p class="text-neutral-700 text-s mt-4">You will get the link via email and WhatsApp when the live class starts. You will also be able to join the class from here!</p>


          </div>
            @endif
         
        </div>
        <div class="flex justify-center gap-2 hidden">
          <a href="" class="border px-5 py-3 rounded-lg inline-block mt-6">Complete your onboarding</a>
          <!-- <a href="" class="border px-5 py-3 rounded-lg inline-block mt-6">Important Links</a> -->
          <div x-data="{ modalOpen: false }"
    @keydown.escape.window="modalOpen = false"
    class="relative z-50 w-auto h-auto">
    <button @click="modalOpen=true" class="inline-flex items-center justify-center border px-5 py-3 rounded-lg inline-block mt-6 transition-colors bg-white border rounded-md hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Important links</button>
    <template x-teleport="body">
        <div x-show="modalOpen" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
            <div x-show="modalOpen" 
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="modalOpen=false" class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
            <div x-show="modalOpen"
                x-trap.inert.noscroll="modalOpen"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="relative w-full py-6 bg-white px-7 sm:max-w-lg sm:rounded-xl">
                <div class="flex items-center justify-between pb-2">
                    <h3 class="text-lg font-semibold">Cohort Links</h3>
                    <button @click="modalOpen=false" class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>  
                    </button>
                </div>
                <div class="relative w-auto">
                    <a target="_blank" href="{{$enrollment->batch->groupLink}}" style="display: block" class="p-3 bg-neutral-100 my-2 block w-full rounded-lg  hover:bg-neutral-50 cursor-pointer">Join telegram group</a>
                    <a target="_blank" href="{{$enrollment->batch->groupLink1}}"style="display: block" class="p-3 bg-neutral-100 my-2 block w-full rounded-lg hover:bg-neutral-50 cursor-pointer">Join discussion channel</a>
                    <a target="_blank" style="display: block" href="https://cal.com/ashish-shukla-ye5ege/onboarding-process-with-ashish" class="block w-full p-3 bg-neutral-100 my-2 rounded-lg hover:bg-neutral-50 cursor-pointer">Book one on one Session</a>
                    

                </div>
            </div>
        </div>
    </template>
</div>
        </div>
        
        
        
        
        {{-- <div class="text-center flex gap-2 absolute left-1/2 translate-x-[-50%] bottom-0 mb-5">
          <a href="" class=" py-3 px-4 text-neutral-500 rounded-lg inline-block mt-6">Continue watching: Javascript Foundation</a>
          <a href="" class=" py-3 px-4 text-neutral-500  rounded-lg inline-block mt-6">Back to Dashboard</a>
        </div> --}}
      </div>
    </main>
@endif


{{-- player --}}

@if($intro == 'false')
@if($isVideoUnlocked)
@if($video->type == 2)
<main class=" flex gap-4 justify-center align-middle py-12 ">
    <div class="2xl:px-0 max-w-6xl mt-16 ml-[370p">
      <div class="sm:w-[740px] px-2 sm:px-4 md:px-0">
          {{-- <div style="position:relative;padding-top:56.25%;"><iframe src="https://iframe.mediadelivery.net/embed/200867/ccbb79fa-76a0-47ee-88d1-00c545f43e74?autoplay=true&loop=false&muted=false&preload=true&responsive=true" loading="lazy" style="border:0;position:absolute;top:0;height:100%;width:100%;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true"></iframe></div>
          <div class="mt-8">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero unde possimus voluptate tenetur laboriosam omnis voluptatibus.</p>
            </div> --}}

            <div class="video-containe">
              <script type="text/javascript" src="//assets.mediadelivery.net/playerjs/player-0.1.0.min.js"></script>

                <div style="position:relative;padding-top:56.25%;"><iframe id="bunny-stream-embed" src="https://iframe.mediadelivery.net/embed/200867/{{$video->videoLink}}?autoplay=true&loop=false&muted=false&preload=true&responsive=true" loading="lazy" style="border:0;position:absolute;top:0;height:100%;width:100%;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true"></iframe></div>
            </div>
            <div class="my-5">
              
              <h1 class="text-2xl  font-extrabold" id="title">{{ $video->title }}</h1>
                
            
              
                <div class="desc mt-0">
                  {!! $video->desc !!}
                </div>
                
                {{-- {{ $video->id }} --}}
            </div>
      </div>
    </div>
    
  </main>
  <script>
    // ... existing player code ...
    
    document.getElementById('markComplete').addEventListener('click', function() {
        const button = this;
        button.disabled = true; // Prevent double-clicks
        
        fetch('{{ route('mark.video.complete') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                videoId: {{ $video->id }},
                batchId: {{ $video->batchId }}
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Update button appearance
                button.classList.remove('bg-green-100', 'text-green-700', 'hover:bg-green-200');
                button.classList.add('bg-neutral-100', 'text-neutral-700');
                button.textContent = 'Completed';
                button.disabled = true;
                
                // Optional: Update progress display if you have one
                if (data.progress) {
                    // Update any progress indicators here
                    console.log(`Course progress: ${data.progress}%`);
                }
            } else {
                button.disabled = false; // Re-enable button on failure
                console.error('Failed to mark video as complete');
            }
        })
        .catch(error => {
            button.disabled = false; // Re-enable button on error
            console.error('Error:', error);
        });
    });
    </script>
  <script>
    const player = new playerjs.Player('bunny-stream-embed');
    
    let totalDuration = 0;
    let totalVideoDuration = 0;
    let currentDuration = 0;
    let lastProgress = 0;
    let isPlaying = false;
    let videoProgress = 0;
    let hasResumed = false;
    let resumeFrom = {{ optional($video->userProgress(Auth::user()->id))->progress ?? 0 }};
    function resumeVideo(time){
      if (typeof time === 'number' && time >= 0) {
          player.setCurrentTime(time);
      } else {
          console.warn('Invalid resume time:', time);
          player.setCurrentTime(0); // fallback to start
      }
    }
    
    
    
    player.on('ready', () => {
        console.log('Ready');
    });
    
    player.on('play', () => {
        isPlaying = true;
        if (!hasResumed) {
        resumeVideo(resumeFrom);
        hasResumed = true;
    }
    });

    
    player.on('pause', () => {
        isPlaying = false;
    });
    
    player.on('ended', () => {
        isPlaying = false;
    });
    
    // player.getDuration((duration) => {
    //     totalDuration = duration;
    //     totalVideoDuration = duration;
    // });
    
    // Event handler for time updates when the player is playing
    player.on('timeupdate', (timingData) => {
        // Get current seconds
        const currentTime = timingData.seconds;
    
        // Calculate progress percentage and round to the nearest 25%
        const progressPercentage = (currentTime / timingData.duration) * 100;
        const progressRounded = Math.floor(progressPercentage / 25) * 25;
    
        // Log the progress percentage
        // console.log('Progress Percentage: ' + Math.floor(progressPercentage) + "%");
        videoProgress = Math.floor(progressPercentage);
        // Check if progress reached a new 25% milestone and update the progress bar
        if (progressRounded > lastProgress) {
            // console.log(`Video progress: ${progressRounded}%`);
            lastProgress = progressRounded;
        }
    });
    
    document.addEventListener('DOMContentLoaded', function () {
        
        function updateTimeSpent() {
            if (isPlaying) {
                player.getCurrentTime(value => {
                    currentDuration = value;
                    
                    fetch('{{ route('update.timeSpent') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            videoId: '{{ $video->id }}',
                            batchId: '{{ $video->batchId }}',
                            progress: currentDuration, // Send current video timestamp
                            duration: totalDuration
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            console.log('Time spent and progress updated successfully.');
                        } else {
                            console.error('Failed to update time spent and progress.');
                        }
                    });
                });
            }
        }
    
        // Call updateTimeSpent every 1 minute (60,000 milliseconds)
        setInterval(updateTimeSpent, 60000);
    });
    </script>
    
    
    
  @else
  <main class=" flex gap-4 justify-center py-12 ">
    <div class="2xl:px-0 max-w-6xl mt-16 ml-[370p">
      <div class="sm:w-[740px] px-2 sm:px-4 md:px-0">
          

            
            <div class="my-5">

              <h1 class="text-2xl mt-5  font-extrabold" id="title">{{ $video->title }}</h1>

                <div class="desc mt-0">
                  {!! $video->desc !!}
                </div>
                {{-- {{ $video->id }} --}}
            </div>
      </div>
    </div>
    
  </main>
  @endif
  @endif
  @if($isVideoUnlocked == false)
  <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <div class="mt-1 flex justify-center">
        <div class="inline-flex w-64 items-center justify-center "
        >
          
          <img src="{{asset('assets/img/clockNudge.svg')}}" height="32px" alt="">
      </div>
      </div>
      <h2 class="text-center text-xl -mt-1 font-bold leading-9 tracking-tight text-gray-900 mt-4">{{$video->title}} will be unlocked on {{ \Carbon\Carbon::now()->addDays($daysUntilVideoUnlocks)->isoFormat('MMMM Do, YYYY') }}</h2>

      <p class="bg-white px-6 text-gray-500 text-center">Content will keep on unlocking on scheduled manner. Meanwhile you can watch the unlocked content and complete your assignments.</p>
      {{-- <div class="text-center">
        <button onclick="openConte" class="inline-flex items-center justify-center  transition-colors text-sm text-black bg-neutral-100 px-4 rounded-lg py-2  hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Course content</button>

      </div>  --}}
    </div>
  </main>
  {{-- <h1 class="text-red-500 text-2xl mt-32">Video will be unlocked on {{ \Carbon\Carbon::now()->addDays($daysUntilVideoUnlocks)->isoFormat('MMMM Do, YYYY') }}</h1> --}}
  @endif
  @endif
  {{-- subscription not active --}}
  @else
  <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
      
      <h2 class="text-center text-xl -mt-1 font-bold leading-9 tracking-tight text-gray-900">{{$enrollment->batch->name}}</h2>
      <p class="bg-white text-md px-6 text-red-600 text-center">Your Subscription for full stack is not active! Contact the support team at <span class="text-blue-600">info@codekaro.in</span> for more details.</p>
      <div class="flex justify-center gap-2">
        <a href="" class="bg-black text-white px-5 py-3 rounded-xl inline-block mt-6">Resume subscription</a>
        <!-- <a href="" class="border px-5 py-3 rounded-lg inline-block mt-6">Important Links</a> -->
        
      </div>
      
      
      
      
      <div class="text-center flex gap-2 absolute left-1/2 translate-x-[-50%] bottom-0 mb-5">
        <a href="" class=" py-3 px-4 text-neutral-500 rounded-lg inline-block mt-6">Continue watching: Javascript Foundation</a>
        <a href="" class=" py-3 px-4 text-neutral-500  rounded-lg inline-block mt-6">Back to Dashboard</a>
      </div>
    </div>
    
  </main>
  @endif
  
  

</body>
</html>