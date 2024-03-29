
<!DOCTYPE html>
<html class="h-full bg-white">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <style>
      [x-cloak] {
        display: none;
      }
    </style>
    <!-- Include the Alpine library on your page -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <!-- Include the TailwindCSS library on your page -->
    <link href="{{asset('assets/css/output.css')}}" rel="stylesheet" />
  </head>
  <body class="font-geist">
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
            class="inline-flex items-center sm:mr-8 items-end font-sans text-2xl font-extrabold text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline"
          >
          <svg xmlns="http://www.w3.org/2000/svg" data-testid="geist-icon" stroke-linejoin="round" style="width:23px;height:25px;color:var(--ds-gray-1000)" viewBox="0 0 16 16" aria-label="Vercel logo"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 1L16 15H0L8 1Z" fill="currentColor"></path></svg>
    <!-- <span class="ml-3 text-lg font-medium">Full stack cohort</span> -->
          </a>
          <nav
            class="items-center hidden space-x-5 text-sm font-medium lg:flex"
          >
            
            
          </nav>
        </div>

        <div class="relative">
          <div x-data="{ dropdownOpen: false }" class="relative">
            <div class="flex items-center">
              <!-- <a href="" class="btn text-sm text-black bg-neutral-100 px-4 rounded-lg py-2">Back to dashboard</a> -->
              <!-- <a href="" class="btn text-sm text-black bg-neutral-100 px-4 rounded-lg py-2">Course Content</a> -->
              <div x-data="{ 
                slideOverOpen: false 
            }"
            class="relative z-50 w-auto h-auto">
            <button @click="slideOverOpen=true" class="inline-flex items-center justify-center  transition-colors text-sm text-black bg-neutral-100 px-4 rounded-lg py-2  hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Course content</button>
            <template x-teleport="body">
                <div 
                    x-show="slideOverOpen"
                    @keydown.window.escape="slideOverOpen=false"
                    class="relative z-[99]">
                    <div x-show="slideOverOpen" x-transition.opacity.duration.600ms @click="slideOverOpen = false" class="fixed inset-0 bg-black bg-opacity-10"></div>
                    <div class="fixed inset-0 overflow-hidden">
                        <div class="absolute inset-0 overflow-hidden">
                            <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">
                                <div 
                                    x-show="slideOverOpen" 
                                    @click.away="slideOverOpen = false"
                                    x-transition:enter="transform transition ease-in-out duration-200 sm:duration-200" 
                                    x-transition:enter-start="translate-x-full" 
                                    x-transition:enter-end="translate-x-0" 
                                    x-transition:leave="transform transition ease-in-out duration-200 sm:duration-200" 
                                    x-transition:leave-start="translate-x-0" 
                                    x-transition:leave-end="translate-x-full" 
                                    class="w-screen max-w-96">
                                    <div class="flex flex-col h-full py-5 overflow-y-scroll bg-white border-l shadow-lg border-neutral-100/70">
                                        <div class="px-4 sm:px-5">
                                            <div class="flex items-start justify-between pb-1">
                                                <h2 class="text-base font-semibold leading-6 text-gray-900" id="slide-over-title">Course Content</h2>
                                                <div class="flex items-center h-auto ml-3">
                                                    <button @click="slideOverOpen=false" class="absolute top-0 right-0 z-30 flex items-center justify-center px-3 py-2 mt-4 mr-5 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
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
                                        <div x-data="{ id: $id('accordion') }" :class="{ 'text-neutral-900': activeAccordion==id, 'text-neutral-600 hover:text-neutral-900': activeAccordion!=id }" class="cursor-pointer group">
                                            
                                            <button @click="setActiveAccordion(id)" class="flex items-center justify-between text-md w-full py-4 px-2 pb-1 text-left select-none">
                                                <span style="font-size: 16px">{{ $section->name }}</span>
                                                <svg class="w-5 h-5 duration-300 ease-out" :class="{ '-rotate-[45deg]': activeAccordion==id }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /></svg>
                                            </button>
                                            @foreach ($section->chapters as $c)
                                            @if($accessTill >=  $c->accessOn )
                                            <div x-show="activeAccordion==id" class="" x-collapse x-cloak>
                                                <a id="item" style=" display: flex" class="w-full items-center gap-2 flex bg-neutral-100 my-2 p-3 rounded-md text-left  {{ $c->id == $video->id ? 'bg-orange-50' : ' ' }}"  href="{{ route('recordings', ['batchId' => $batchId, 'cId' => Crypt::encrypt($c->id)]) }}">
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
                                                    <span style="font-size: 15px">{{$c->title}}</span>
                                                </a>
                                                
                                                
                                            </div>
                                            @endif
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
    @if($intro == 'true')
    <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      </div>
  
      <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
        
        <h2 class="text-center text-xl -mt-1 font-bold leading-9 tracking-tight text-gray-900">Full stack cohort</h2>
        <p class="bg-white text-sm px-6 text-gray-500 text-center">Uh-Oh! The page you're looking for seems to be missing</p>
        <div class="flex justify-center gap-2">
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
                    <p class="p-3 bg-neutral-100 my-2 rounded-lg  hover:bg-neutral-50 cursor-pointer">Join telegram group</p>
                    <p class="p-3 bg-neutral-100 my-2 rounded-lg hover:bg-neutral-50 cursor-pointer">Join discussion channel</p>
                    <p class="p-3 bg-neutral-100 my-2 rounded-lg hover:bg-neutral-50 cursor-pointer">Invoice</p>
                    

                </div>
            </div>
        </div>
    </template>
</div>
        </div>
        
        
        
        
        <div class="text-center flex gap-2 absolute left-1/2 translate-x-[-50%] bottom-0 mb-5">
          <a href="" class=" py-3 px-4 text-neutral-500 rounded-lg inline-block mt-6">Continue watching: Javascript Foundation</a>
          <a href="" class=" py-3 px-4 text-neutral-500  rounded-lg inline-block mt-6">Back to Dashboard</a>
        </div>
      </div>
    </main>
@endif
{{-- intro ends --}}

{{-- player --}}

<!-- player -->
<main class=" flex gap-4 justify-center align-middle py-12 ">
    <!-- <div class="sm:w-[370px] bg-violet bg-neutral-50 h-screen fixed top-0 left-0 self-start" >
      fjdkjfdk
    </div> -->
    <div class="2xl:px-0 max-w-6xl mt-16 ml-[370p">
      <div class="sm:w-[740px] px-4 md:px-0">
          {{-- <div style="position:relative;padding-top:56.25%;"><iframe src="https://iframe.mediadelivery.net/embed/200867/ccbb79fa-76a0-47ee-88d1-00c545f43e74?autoplay=true&loop=false&muted=false&preload=true&responsive=true" loading="lazy" style="border:0;position:absolute;top:0;height:100%;width:100%;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true"></iframe></div>
          <div class="mt-8">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero unde possimus voluptate tenetur laboriosam omnis voluptatibus.</p>
            </div> --}}

            <div class="video-containe">
                {{-- <div style="position:relative;padding-top:56.25%;"><iframe src="https://iframe.mediadelivery.net/embed/200867/20ccfbaf-7651-407d-b12b-a6c072178b35?autoplay=true&loop=false&muted=false&preload=true&responsive=true" loading="lazy" style="border:0;position:absolute;top:0;height:100%;width:100%;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true"></iframe></div> --}}
                {{-- <iframe id="vimeoPlayer" src="https://player.vimeo.com/video/{{$video->videoLink}}?autoplay=1&badge=0&amp;autopause=0&amp;quality=720p" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="Recording CSS Media Queries - 651d75bfe4b0e4a748954b62 (1)"></iframe> --}}
                <div style="position:relative;padding-top:56.25%;"><iframe src="https://iframe.mediadelivery.net/embed/200867/{{$video->videoLink}}?autoplay=true&loop=false&muted=false&preload=true&responsive=true" loading="lazy" style="border:0;position:absolute;top:0;height:100%;width:100%;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true"></iframe></div>
            </div>
            <div class="mt-3">
                <h1 class="fw-bold fs-3 pt-2 pb-0" id="title">{{ $video->title }}</h1>
                {!! $video->desc !!}
                {{-- {{ $video->id }} --}}
            </div>
      </div>
    </div>
    
  </main>
    
  <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
