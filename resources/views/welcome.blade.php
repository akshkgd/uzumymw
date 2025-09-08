@extends('layouts.t-student')
@section('content')
<style>
  body {
      font-family: "Inter", sans-serif;
      font-optical-sizing: auto;
  }

  .cal-sans {
      font-family: "Cal Sans", sans-serif;
      font-weight: 400;
      font-style: normal;
  }

  .transition-height {
      transition: all 0.3s ease;
      overflow: hidden;
  }

  [x-cloak] {
      display: none;
  }
  @keyframes scroll {
      0% {
          transform: translateX(0);
      }
      100% {
          transform: translateX(-100%);
      }
  }
  
  .scroll-animation {
      animation: scroll 20s linear infinite;
  }
  
  .scroll-container:hover .scroll-animation {
      animation-play-state: paused;
  }
</style>

<header>
  <nav
      class="fixe top-0 overflow-hidden z-20 w-full bg-white/80 rounded-b-l dark:shadow-gray-950/10 border- border-gray-100 border-  backdrop-blur">
      <div class="px-4 m-auto max-w-5xl 2xl:px-0">
          <div class="flex flex-wrap items-center justify-between py-2 sm:py-4">
              <div class="w-full items-center flex justify-between lg:w-auto">
                  <a href="{{url('/')}}" aria-label="codekaro logo"
                      class="text-2xl text-neutral-800 tracking-wid font-bold cal-sans">
                      Codekaro
                      <!-- <svg class="text-white rotate-90" fill="black" width="24" height="24" viewBox="0 0 32 32" version="1.1" aria-labelledby="codekaro" aria-hidden="false" style="flex-shrink:0"><desc lang="en-US">Codekaro logo</desc><title id="unsplash-home">Codekaro</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg> -->
                      <!-- <svg xmlns="http://www.w3.org/2000/svg" data-testid="geist-icon" stroke-linejoin="round" style="width:23px;height:25px;color:var(--ds-gray-1000)" viewBox="0 0 16 16" aria-label="Vercel logo"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 1L16 15H0L8 1Z" fill="currentColor"></path></svg> -->
                  </a>
                  <div class="flex lg:hidden">
                      <button aria-label="humburger" id="menu" onclick="toggleMobileMenu()"
                          class="relative border bordeer-gray-950/30 dark:border-white/20 size-9 rounded-full transition duration-300 active:scale-95">
                          <div aria-hidden="true" id="line1"
                              class="m-auto h-[1.5px] w-4 rounded bg-gray-900 transition duration-300 dark:bg-gray-300">
                          </div>
                          <div aria-hidden="true" id="line2"
                              class="m-auto mt-1.5 h-[1.5px] w-4 rounded bg-gray-900 transition duration-300 dark:bg-gray-300">
                          </div>
                      </button>
                  </div>
              </div>
              <div
                  class="w-full h-0 lg:w-fit flex-wrap justify-end items-center space-y-8 lg:space-y-0 lg:flex lg:h-fit md:flex-nowrap">
                  <div class="mt-6 text-ne-600 dark:text-gray-300 md:-ml-4 lg:pr-4 lg:mt-0">
                    @guest
                      
                    
                    <ul
                          class="space-y-6 tracking-tigh text-l lg:text-sm lg:flex lg:space-y-0 flex items-center">
                          
                          <li>
                              <a href="#"
                                  class="block md:px-4 transition hover:text-primary-600 dark:hover:text-primary-400">
                                  <span>Programs</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{url('/login')}}"
                                  class="block md:px-4 transition hover:text-primary-600 dark:hover:text-primary-400">
                                  <span>Login</span>
                              </a>
                          </li>
                          <li>
                              <a href="#"
                                  class="block transition hover:text-whit border border-neutral-400 ring-2 ring-neutral-300 py-2 px-8 rounded-full">
                                  <span>Book Demo Session</span>
                              </a>
                          </li>
                      </ul>
                      @endguest  
                      @auth
                      <ul
                          class="space-y-6 tracking-tigh text-l lg:text-sm lg:flex lg:space-y-0 flex items-center">
                          
                          
                          
                          <li>
                              <a href="{{url('/home')}}"
                                  class="block transition hover:text-whit border border-neutral-400 ring-2 ring-neutral-300 py-2 px-8 rounded-full">
                                  <span>My Dashboard</span>
                              </a>
                          </li>
                          <li>
                            
                      </ul>
                      @endauth
                  </div>


              </div>
          </div>
      </div>
  </nav>
</header>


<!-- hero section -->



<section class="relative z-10 mt- w-full overflow-hidden">
  <div class="relative  sm:py-8 xl:py-12">
      <div class="mx-auto px-6 max-w-6xl md:px-12">
          <svg class="pointer-events-none absolute inset-[unset] left-1/2 top-0 w-[1200px] -translate-x-1/2 text-neutral-300 [mask-image:radial-gradient(black,transparent)] max-sm:opacity-70"
              width="100%" height="100%">
              <defs>
                  <pattern id="grid-:r6:" x="-1" y="-19" width="80" height="80" patternUnits="userSpaceOnUse">
                      <path d="M 80 0 L 0 0 0 80" fill="transparent" stroke="currentColor" stroke-width="1">
                      </path>
                  </pattern>
              </defs>
              <rect fill="url(#grid-:r6:)" width="100%" height="100%"></rect>
          </svg>
          <div class="text-center relative z-20 mx-auto sm:w-10/12 lg:w-4/5">
              <div class="inline-flex flex-col sm:flex-row items-center justify-center my-6 sm:mb-4 text-xs sm:text-sm sm:gap-4 gap-2 sm:bg-neutral-100 px-5 py-2 rounded-xl">
                  <img src="{{asset('lp-assets/users.png')}}" alt="" class="h-8 inline-block">
                  <p><span class="text-[#ff4d00]">1,76,850+</span> Learners have reaped benefits from our programs
                  </p>
              </div>
              <h1
                  class="cal-sans trackingem] text-wrap text-3xl md:text-4xl font-extrabold text-neutral-800  xl:text-4xl lg:text-4xl">
                  Build the tech career <br> you <span class="text-[#ff4d00">deserve faster</span> with codekaro
              </h1>
              <p
                  class="text-wrap mx-auto mt-5 max-w-2xl text-base md:text-lg text-neutral-800  ">
                  Get your dream job, salary hike, role or make a switch faster than ever with 1:1 long term
                  personalized mentorship.
              </p>
              
              <div class="mt-5 flex flex-row items-center justify-center gap-4">
                  <a href="#"
                      class="group bg-black py-4 px-6 text-white rounded-xl border border-black hover:text-white transition-all flex items-center gap-2">
                      Book your live demo session
                      <span class="transform transition-transform group-hover:translate-x-2">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                          </svg>
                      </span>
                  </a>
              </div>
          </div>
      </div>
  </div>
  <!-- users -->
   <section class="overflow-hidden mt-10 md:mt-0">
  <div class="mx-auto px-6 max-w-6xl overflow-hidden md:px-12">
      <div class="scroll-container relative overflow-hidden">
          <div class="flex gap-2 scroll-animation whitespace-nowrap">
              <!-- First set of images -->
              <img src="../lp-assets/Learne-10.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-11.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-12.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-13.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-14.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-15.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-16.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-17.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-18.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-19.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-20.svg" alt="" class="h-24   w-auto flex-shrink-0">

              <img src="../lp-assets/Learne-1.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-2.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-3.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-4.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-5.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-6.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-7.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-8.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-9.svg" alt="" class="h-24   w-auto flex-shrink-0">
              
              <!-- Duplicate set for seamless loop -->
              <img src="../lp-assets/Learne-10.svg" alt="" class="h-24 w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-11.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-12.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-13.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-14.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-15.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-16.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-17.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-18.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-19.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-20.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-1.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-2.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-3.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-4.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-5.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-6.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-7.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-8.svg" alt="" class="h-24   w-auto flex-shrink-0">
              <img src="../lp-assets/Learne-9.svg" alt="" class="h-24   w-auto flex-shrink-0">
          </div>
      </div>
  </div>
</section>
</section>

<!-- test features -->

<!-- test features end -->

<!-- hero section-->


<!-- courses -->

<section>
  <div class="max-w-3xl mx-auto my-12 sm:my-24 hidde px-4 sm:px-0">
      <div class="max-w-xl mx-auto text-center">
          <h1 class="text-center cal-sans text-2xl sm:text-3xl text-neutral-800">Industry-relevant programs to set you apart
          </h1>
          <p>Best for launches, paid ads, urgent campaigns.</p>
          
      </div>

      <div class="mt-10 flex justify-center gap-10">
          <div class="borde w-96 rounded-2xl p-0 sm:p-3">
              <div class="relative">
                  <img src="https://images.ctfassets.net/kftzwdyauwt9/7mxA6Nz8sMAyWaHE7PZcpA/e9e1cd86700761d1d899f49b9aa3547d/mattell-1.1.png?w=3840&q=90&fm=webp" alt="" class="h-48  w-full object-cover rounded-2xl">
                  <div class=" h-24 w-80 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 justify-center flex gap-1 mt-6">
                     <div class="bg-white h-12 w-12 flex items-center justify-center rounded-lg ">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-sm absolu left-0 origin-center md:w-[28px] BrandIsland_blossom__ZmsAO" width="28" viewBox="0 0 156 154" fill="none"><path d="M59.7325 56.1915V41.6219C59.7325 40.3948 60.1929 39.4741 61.266 38.8613L90.5592 21.9915C94.5469 19.6912 99.3013 18.6181 104.208 18.6181C122.612 18.6181 134.268 32.8813 134.268 48.0637C134.268 49.1369 134.268 50.364 134.114 51.5911L103.748 33.8005C101.908 32.7274 100.067 32.7274 98.2267 33.8005L59.7325 56.1915ZM128.133 112.937V78.1222C128.133 75.9745 127.212 74.441 125.372 73.3678L86.878 50.9768L99.4538 43.7682C100.527 43.1554 101.448 43.1554 102.521 43.7682L131.814 60.6381C140.25 65.5464 145.923 75.9745 145.923 86.0961C145.923 97.7512 139.023 108.487 128.133 112.935V112.937ZM50.6841 82.2638L38.1083 74.9028C37.0351 74.29 36.5748 73.3693 36.5748 72.1422V38.4025C36.5748 21.9929 49.1506 9.5696 66.1744 9.5696C72.6162 9.5696 78.5962 11.7174 83.6585 15.5511L53.4461 33.0352C51.6062 34.1084 50.6855 35.6419 50.6855 37.7897V82.2653L50.6841 82.2638ZM77.7533 97.9066L59.7325 87.785V66.3146L77.7533 56.193L95.7725 66.3146V87.785L77.7533 97.9066ZM89.3321 144.53C82.8903 144.53 76.9103 142.382 71.848 138.549L102.06 121.064C103.9 119.991 104.821 118.458 104.821 116.31V71.8343L117.551 79.1954C118.624 79.8082 119.084 80.7289 119.084 81.956V115.696C119.084 132.105 106.354 144.529 89.3321 144.529V144.53ZM52.9843 110.33L23.6911 93.4601C15.2554 88.5517 9.58181 78.1237 9.58181 68.0021C9.58181 56.193 16.6365 45.611 27.5248 41.163V76.1299C27.5248 78.2776 28.4455 79.8111 30.2854 80.8843L68.6271 103.121L56.0513 110.33C54.9781 110.943 54.0574 110.943 52.9843 110.33ZM51.2983 135.482C33.9681 135.482 21.2384 122.445 21.2384 106.342C21.2384 105.115 21.3923 103.888 21.5448 102.661L51.7572 120.145C53.5971 121.218 55.4385 121.218 57.2784 120.145L95.7725 97.9081V112.478C95.7725 113.705 95.3122 114.625 94.239 115.238L64.9458 132.108C60.9582 134.408 56.2037 135.482 51.2969 135.482H51.2983ZM89.3321 153.731C107.889 153.731 123.378 140.542 126.907 123.058C144.083 118.61 155.126 102.507 155.126 86.0976C155.126 75.3617 150.525 64.9336 142.243 57.4186C143.01 54.1977 143.471 50.9768 143.471 47.7573C143.471 25.8267 125.68 9.41567 105.129 9.41567C100.989 9.41567 97.0011 10.0285 93.0134 11.4095C86.1112 4.66126 76.6024 0.367188 66.1744 0.367188C47.6171 0.367188 32.1282 13.5558 28.5994 31.0399C11.4232 35.4879 0.380859 51.5911 0.380859 68.0006C0.380859 78.7365 4.98133 89.1645 13.2631 96.6795C12.4963 99.9004 12.036 103.121 12.036 106.341C12.036 128.271 29.8265 144.682 50.3777 144.682C54.5178 144.682 58.5055 144.07 62.4931 142.689C69.3938 149.437 78.9026 153.731 89.3321 153.731Z" fill="currentColor"></path></svg>
                      </div>
                      <div class="bg-white h-12 w-12 flex items-center justify-center rounded-lg">
                          <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid" viewBox="0 0 256 257" class="size-7"><path fill="#D97757" d="m50.228 170.321 50.357-28.257.843-2.463-.843-1.361h-2.462l-8.426-.518-28.775-.778-24.952-1.037-24.175-1.296-6.092-1.297L0 125.796l.583-3.759 5.12-3.434 7.324.648 16.202 1.101 24.304 1.685 17.629 1.037 26.118 2.722h4.148l.583-1.685-1.426-1.037-1.101-1.037-25.147-17.045-27.22-18.017-14.258-10.37-7.713-5.25-3.888-4.925-1.685-10.758 7-7.713 9.397.649 2.398.648 9.527 7.323 20.35 15.75L94.817 91.9l3.889 3.24 1.555-1.102.195-.777-1.75-2.917-14.453-26.118-15.425-26.572-6.87-11.018-1.814-6.61c-.648-2.723-1.102-4.991-1.102-7.778l7.972-10.823L71.42 0 82.05 1.426l4.472 3.888 6.61 15.101 10.694 23.786 16.591 32.34 4.861 9.592 2.592 8.879.973 2.722h1.685v-1.556l1.36-18.211 2.528-22.36 2.463-28.776.843-8.1 4.018-9.722 7.971-5.25 6.222 2.981 5.12 7.324-.713 4.73-3.046 19.768-5.962 30.98-3.889 20.739h2.268l2.593-2.593 10.499-13.934 17.628-22.036 7.778-8.749 9.073-9.657 5.833-4.601h11.018l8.1 12.055-3.628 12.443-11.342 14.388-9.398 12.184-13.48 18.147-8.426 14.518.778 1.166 2.01-.194 30.46-6.481 16.462-2.982 19.637-3.37 8.88 4.148.971 4.213-3.5 8.62-20.998 5.184-24.628 4.926-36.682 8.685-.454.324.519.648 16.526 1.555 7.065.389h17.304l32.21 2.398 8.426 5.574 5.055 6.805-.843 5.184-12.962 6.611-17.498-4.148-40.83-9.721-14-3.5h-1.944v1.167l11.666 11.406 21.387 19.314 26.767 24.887 1.36 6.157-3.434 4.86-3.63-.518-23.526-17.693-9.073-7.972-20.545-17.304h-1.36v1.814l4.73 6.935 25.017 37.59 1.296 11.536-1.814 3.76-6.481 2.268-7.13-1.297-14.647-20.544-15.1-23.138-12.185-20.739-1.49.843-7.194 77.448-3.37 3.953-7.778 2.981-6.48-4.925-3.436-7.972 3.435-15.749 4.148-20.544 3.37-16.333 3.046-20.285 1.815-6.74-.13-.454-1.49.194-15.295 20.999-23.267 31.433-18.406 19.702-4.407 1.75-7.648-3.954.713-7.064 4.277-6.286 25.47-32.405 15.36-20.092 9.917-11.6-.065-1.686h-.583L44.07 198.125l-12.055 1.555-5.185-4.86.648-7.972 2.463-2.593 20.35-13.999-.064.065Z"></path></svg>    
                      </div>
                      <div class="bg-white h-12 w-12 flex items-center justify-center rounded-lg ">
                          <svg height="1em" style="flex:none;line-height:1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="1em" class="size-7"><title>Gemini</title><defs><linearGradient id="lobe-icons-gemini-fill" x1="0%" x2="68.73%" y1="100%" y2="30.395%"><stop offset="0%" stop-color="#1C7DFF"></stop><stop offset="52.021%" stop-color="#1C69FF"></stop><stop offset="100%" stop-color="#F0DCD6"></stop></linearGradient></defs><path d="M12 24A14.304 14.304 0 000 12 14.304 14.304 0 0012 0a14.305 14.305 0 0012 12 14.305 14.305 0 00-12 12" fill="url(#lobe-icons-gemini-fill)" fill-rule="nonzero"></path></svg>    
                      </div>
                  </div>
                  <!-- <div class="bg-white h-12 w-12 absolute left-1/2 top-1/2 ml-16 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center rounded-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-sm absolu left-0 origin-center md:w-[28px] BrandIsland_blossom__ZmsAO" width="28" viewBox="0 0 156 154" fill="none"><path d="M59.7325 56.1915V41.6219C59.7325 40.3948 60.1929 39.4741 61.266 38.8613L90.5592 21.9915C94.5469 19.6912 99.3013 18.6181 104.208 18.6181C122.612 18.6181 134.268 32.8813 134.268 48.0637C134.268 49.1369 134.268 50.364 134.114 51.5911L103.748 33.8005C101.908 32.7274 100.067 32.7274 98.2267 33.8005L59.7325 56.1915ZM128.133 112.937V78.1222C128.133 75.9745 127.212 74.441 125.372 73.3678L86.878 50.9768L99.4538 43.7682C100.527 43.1554 101.448 43.1554 102.521 43.7682L131.814 60.6381C140.25 65.5464 145.923 75.9745 145.923 86.0961C145.923 97.7512 139.023 108.487 128.133 112.935V112.937ZM50.6841 82.2638L38.1083 74.9028C37.0351 74.29 36.5748 73.3693 36.5748 72.1422V38.4025C36.5748 21.9929 49.1506 9.5696 66.1744 9.5696C72.6162 9.5696 78.5962 11.7174 83.6585 15.5511L53.4461 33.0352C51.6062 34.1084 50.6855 35.6419 50.6855 37.7897V82.2653L50.6841 82.2638ZM77.7533 97.9066L59.7325 87.785V66.3146L77.7533 56.193L95.7725 66.3146V87.785L77.7533 97.9066ZM89.3321 144.53C82.8903 144.53 76.9103 142.382 71.848 138.549L102.06 121.064C103.9 119.991 104.821 118.458 104.821 116.31V71.8343L117.551 79.1954C118.624 79.8082 119.084 80.7289 119.084 81.956V115.696C119.084 132.105 106.354 144.529 89.3321 144.529V144.53ZM52.9843 110.33L23.6911 93.4601C15.2554 88.5517 9.58181 78.1237 9.58181 68.0021C9.58181 56.193 16.6365 45.611 27.5248 41.163V76.1299C27.5248 78.2776 28.4455 79.8111 30.2854 80.8843L68.6271 103.121L56.0513 110.33C54.9781 110.943 54.0574 110.943 52.9843 110.33ZM51.2983 135.482C33.9681 135.482 21.2384 122.445 21.2384 106.342C21.2384 105.115 21.3923 103.888 21.5448 102.661L51.7572 120.145C53.5971 121.218 55.4385 121.218 57.2784 120.145L95.7725 97.9081V112.478C95.7725 113.705 95.3122 114.625 94.239 115.238L64.9458 132.108C60.9582 134.408 56.2037 135.482 51.2969 135.482H51.2983ZM89.3321 153.731C107.889 153.731 123.378 140.542 126.907 123.058C144.083 118.61 155.126 102.507 155.126 86.0976C155.126 75.3617 150.525 64.9336 142.243 57.4186C143.01 54.1977 143.471 50.9768 143.471 47.7573C143.471 25.8267 125.68 9.41567 105.129 9.41567C100.989 9.41567 97.0011 10.0285 93.0134 11.4095C86.1112 4.66126 76.6024 0.367188 66.1744 0.367188C47.6171 0.367188 32.1282 13.5558 28.5994 31.0399C11.4232 35.4879 0.380859 51.5911 0.380859 68.0006C0.380859 78.7365 4.98133 89.1645 13.2631 96.6795C12.4963 99.9004 12.036 103.121 12.036 106.341C12.036 128.271 29.8265 144.682 50.3777 144.682C54.5178 144.682 58.5055 144.07 62.4931 142.689C69.3938 149.437 78.9026 153.731 89.3321 153.731Z" fill="currentColor"></path></svg>
                  </div> -->
              </div>


              
              <h2 class="text-xl cal-sans text-neutral-800 mt-3">GenAI Cohort for Developers </h2>
              <!-- <p class="text-sm">Best for Working Professionals & Students.</p> -->
              <p class="mt-3 text-sm"><span class="font-semibold">Outcome: </span>Get high-paying Job / Salary hike in next 60 days with 3 Capstone projects.</p>
      
          </div>
      </div>
  </div>
</section>

<!-- feedbacks -->
<div class="max-w-6xl mx-auto mt-12 mb-12 hidde px-4 sm:px-12">
  <div class="text-center my-10">
      <h1 class="text-2xl sm:text-3xl text-left sm:text-center text-neutral-800 font-extrabold cal-sans">Hear from codekaro Engineers</h1>
      <p class="text-base text-left sm:text-center">Find out what our students have to say about us</p>
  </div>
  <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
      <div class="break-inside-avoid  feedback-card bg-white borde rounded-3xl">
          <video class="rounded-3xl" controls muted autoplay loop
              src="https://framerusercontent.com/assets/wR3C7OmhaJm1lGqsqfPgGHimE.mp4"></video>
      </div>
      <!-- Feedback 1 -->
      <div class="break-inside-avoid  p-3 feedback-card bg-white border rounded-3xl">
          <div class="flex mb-3 justify-content-between align-items-center">
              <div class="flex items-center gap-3">
                  <img loading="lazy" src="https://codekaro.in/assets/img/cssf4.jpeg"
                      class="avatar-sm-sm w-12 h-12 rounded-full" alt="Mayank Gupta">
                  <div>
                      <p class="m-0 text-dark font-bol">Mayank Gupta</p>
                      <p class="-mt-1 text-sm text-neutral-600">Student, IIT Bombay</p>
                  </div>
              </div>
          </div>
          <p class="text-md text-neutral-800">Hey everyone, I am thrilled to share my 5 days how to CSS bootcamp
              journey was amazing. <span class="">I used to be stuck at CSS for a very long time, and Ashish
                  Shukla sir made it a cup of tea for me in a very short time.</span> </p>
          <p class="text-md">Certificate link: <a href="https://lnkd.in/dZkZdsC9"
                  class="text-violet-600 hover:underline">Click here</a></p>
      </div>

      <!-- Feedback 2 -->
      <div class="break-inside-avoid p-3 feedback-card bg-white border rounded-3xl">
          <div class="flex mb-3 justify-content-between items-center">
              <div class="flex items-center gap-3">
                  <img loading="lazy" src="https://codekaro.in/assets/img/cssf1.jpeg"
                      class="avatar-sm-sm w-12 h-12 rounded-full" alt="Akhila Cheryala">
                  <div>
                      <p class="m-0 ">Akhila Cheryala</p>
                      <p class="-mt-1 text-sm text-neutral-600">Passionate Frontend Developer</p>
                  </div>
              </div>
          </div>
          <p class="text-md">Hi guys! Take a look at my Airbnb website Clone 🎉. I'm so excited to present my
              latest web development project, built entirely with HTML and CSS! Thank you, Ashish Shukla, for
              making it easy for me through the 5-day #howtoCSS bootcamp.</p>
      </div>

      <!-- Feedback 3 -->
      <div class="break-inside-avoid hidde p-3 feedback-card bg-white border rounded-3xl">
          <div class="flex mb-3 justify-content-between items-center">
              <div class="flex items-center gap-3">
                  <img loading="lazy"
                      src="https://pbs.twimg.com/profile_images/1058774434104827904/E7aXNaoE_400x400.jpg"
                      class="avatar-sm-sm w-12 h-12 rounded-full" alt="Ravi Sadariya">
                  <div>
                      <p class="m-0 ">Ravi Sadariya</p>
                      <p class="-mt-1 text-sm text-neutral-600">GITAM University</p>
                  </div>
              </div>
          </div>
          <p class="text-md">@Ashish Shukla is a great tutor for learning web development!</p>
      </div>

      <!-- Feedback 4 -->


      <!-- Feedback 5 -->


      <!-- Feedback 6 -->
      <div class="break-inside-avoid p-3 feedback-card bg-white border rounded-3xl">
          <div class="flex mb-3 justify-content-between align-items-center">
              <div class="flex items-center gap-3">
                  <img loading="lazy" src="https://codekaro.in/assets/img/cssf5.jpeg"
                      class="avatar-sm-sm w-12 h-12 rounded-full" alt="Cherish Vuppala">
                  <div>
                      <p class="m-0 ">Cherish Vuppala</p>
                      <p class="-mt-1 text-sm text-neutral-600">Student at Sri Vasavi Engineering College</p>
                  </div>
              </div>
          </div>
          <p class="text-md">@Ashish Shukla It's an amazing workshop! I enjoyed a lot and learned subtle things in
              CSS. Even though it's only day 3, I believe I can build the frontend on my own. I never thought I
              would master things in such a short span. I was skeptical before joining, but now I'm so glad I made
              the decision!</p>
      </div>

      <div class="break-inside-avoid p-3 feedback-card bg-white border rounded-3xl">
          <div class="flex mb-3 justify-content-between align-items-center">
              <div class="flex items-center gap-3">
                  <img loading="lazy" src="https://codekaro.in/assets/img/cssf3.jpeg"
                      class="avatar-sm-sm w-12 h-12 rounded-full object-cover" alt="Manjiri Pund">
                  <div>
                      <p class="m-0 text-dark font-bol">Manjiri Pund</p>
                      <p class="-mt-1 text-sm text-neutral-600">BITS Pilani</p>
                  </div>
              </div>
          </div>
          <p class="text-md">I am overwhelmed to share that I have completed the CSS bootcamp conducted by
              Codekaro. Initially, I didn't have any clue about CSS, but after attending all the 5-day live
              sessions, I am now able to do things like creating clones of websites like Instagram, LinkedIn, and
              Netflix on my own.</p>
          <!-- <p class="text-lg">A very special thank you to Ashish Shukla, who taught exceptionally well and cleared all my doubts.</p> -->
      </div>
      <div class="break-inside-avoid  feedback-card bg-white borde rounded-3xl">
          <!-- <video class="rounded-3xl" controls muted autoplay loop src="https://framerusercontent.com/assets/YrPucpqB3PiKHVl8mLAwUmqbE.mp4"></video> -->
      </div>
  </div>
</div>
<!-- feedback ends -->


<footer class="bg-white py-12 dark:bg-transparent">
  <div class="mx-auto max-w-5xl px-6">
      <!-- <a href="/" aria-label="go home" class="mx-auto block size-fit">
      <img class="size-8" src="/favicon.svg" />
  </a> -->

      <div class="my-8 flex flex-wrap justify-center gap-6 text-sm">
          <a href="#" class="text-body block hover:text-title">
              <span>Features</span>
          </a>
          <a href="#" class="text-body block hover:text-title">
              <span>Solution</span>
          </a>
          <a href="#" class="text-body block hover:text-title">
              <span>Customers</span>
          </a>
          <a href="#" class="text-body block hover:text-title">
              <span>Pricing</span>
          </a>
          <a href="#" class="text-body block hover:text-title">
              <span>Help</span>
          </a>
          <a href="#" class="text-body block hover:text-title">
              <span>About</span>
          </a>
      </div>
      <div class="my-8 flex flex-wrap justify-center gap-6 text-sm">
          <a href="#" target="_blank" aria-label="X/Twitter" class="text-body block hover:text-title">
              <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                  <path fill="currentColor"
                      d="M10.488 14.651L15.25 21h7l-7.858-10.478L20.93 3h-2.65l-5.117 5.886L8.75 3h-7l7.51 10.015L2.32 21h2.65zM16.25 19L5.75 5h2l10.5 14z">
                  </path>
              </svg>
          </a>
          <a href="#" target="_blank" aria-label="LinkedIn" class="text-body block hover:text-title">
              <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                  <path fill="currentColor"
                      d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93zM6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37z">
                  </path>
              </svg>
          </a>
          <a href="#" target="_blank" aria-label="Facebook" class="text-body block hover:text-title">
              <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                  <path fill="currentColor"
                      d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95">
                  </path>
              </svg>
          </a>
          <a href="#" target="_blank" aria-label="Threads" class="text-body block hover:text-title">
              <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M19.25 8.505c-1.577-5.867-7-5.5-7-5.5s-7.5-.5-7.5 8.995s7.5 8.996 7.5 8.996s4.458.296 6.5-3.918c.667-1.858.5-5.573-6-5.573c0 0-3 0-3 2.5c0 .976 1 2 2.5 2s3.171-1.027 3.5-3c1-6-4.5-6.5-6-4"
                      color="currentColor"></path>
              </svg>
          </a>
          <a href="#" target="_blank" aria-label="Instagram" class="text-body block hover:text-title">
              <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                  <path fill="currentColor"
                      d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3">
                  </path>
              </svg>
          </a>
          <a href="#" target="_blank" aria-label="TikTok" class="text-body block hover:text-title">
              <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                  <path fill="currentColor"
                      d="M16.6 5.82s.51.5 0 0A4.28 4.28 0 0 1 15.54 3h-3.09v12.4a2.59 2.59 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6c0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48">
                  </path>
              </svg>
          </a>
      </div>
      <span class="text-caption block text-center text-sm">&copy 2025 Codekaro, All rights reserved</span>
  </div>
</footer>

<!-- Mobile Full-Page Popup -->
<div id="mobilePopup" class="lg:hidden fixed inset-0 bg-white z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
    <!-- Header -->
    <div class="flex items-center justify-between p-3 border- border-neutral-200">
        <a href="{{url('/')}}" class="text-2xl font-bold cal-sans text-neutral-800">
            Codekaro
        </a>
        <button onclick="toggleMobileMenu()" class="p-2 rounded-full hover:bg-neutral-100 transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="text-neutral-600" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
            </svg>
        </button>
    </div>

    <!-- Content -->
    <div class="flex flex-col h-full">
        <!-- Navigation Links -->
        <div class="flex-1 p-4">
            <nav class="space-y-6">
                <a href="#" class="block text-lg font-medium text-neutral-800 py-3 border-b border-neutral-100 transition-colors duration-200 hover:text-neutral-600">
                    Programs
                </a>
                <a href="#" class="block text-lg font-medium text-neutral-800 py-3 border-b border-neutral-100 transition-colors duration-200 hover:text-neutral-600">
                    Courses
                </a>
                <a href="#" class="block text-lg font-medium text-neutral-800 py-3 border-b border-neutral-100 transition-colors duration-200 hover:text-neutral-600">
                    About
                </a>
                <a href="#" class="block text-lg font-medium text-neutral-800 py-3 border-b border-neutral-100 transition-colors duration-200 hover:text-neutral-600">
                    Contact
                </a>
            </nav>
        </div>

        <!-- Bottom Buttons -->
        <div class="p-4 border-t border-neutral-200 space-y-3">
            @guest
                <a href="{{url('/login')}}" 
                   class="w-full flex mb-3 justify-center items-center px-4 py-3 border border-transparent text-sm font-medium rounded-xl text-white bg-black hover:bg-neutral-800 transition-colors duration-200">
                    Login
                </a>
                <a href="#" 
                   class="w-full flex justify-center items-center px-4 py-3 border border-neutral-300 text-sm font-medium rounded-xl text-neutral-800 bg-white hover:bg-neutral-50 transition-colors duration-200">
                    Book Demo Session
                </a>
            @endguest
            
            @auth
                <a href="{{url('/home')}}" 
                   class="w-full flex justify-center items-center px-4 py-3 border border-transparent text-sm font-medium rounded-xl text-white bg-black hover:bg-neutral-800 transition-colors duration-200">
                    My Dashboard
                </a>
                <a href="#" 
                   class="w-full flex justify-center items-center px-4 py-3 border border-neutral-300 text-sm font-medium rounded-xl text-neutral-800 bg-white hover:bg-neutral-50 transition-colors duration-200">
                    Profile
                </a>
            @endauth
        </div>
    </div>
</div>

<!-- Overlay Background -->
<div id="mobileOverlay" class="lg:hidden fixed inset-0 bg-black bg-opacity-50 z-40 opacity-0 pointer-events-none transition-opacity duration-300"></div>

<script>
    let isMobileMenuOpen = false;

    function toggleMobileMenu() {
        const popup = document.getElementById('mobilePopup');
        const overlay = document.getElementById('mobileOverlay');
        const menuButton = document.getElementById('menu');
        const line1 = document.getElementById('line1');
        const line2 = document.getElementById('line2');

        isMobileMenuOpen = !isMobileMenuOpen;

        if (isMobileMenuOpen) {
            // Show popup
            popup.classList.remove('translate-x-full');
            popup.classList.add('translate-x-0');
            
            // Show overlay
            overlay.classList.remove('pointer-events-none', 'opacity-0');
            overlay.classList.add('opacity-100');
            
            // Animate hamburger to X
            line1.style.transform = 'rotate(45deg) translate(3px, 3px)';
            line2.style.transform = 'rotate(-45deg) translate(3px, -3px)';
            
            // Prevent body scroll
            document.body.style.overflow = 'hidden';
        } else {
            // Hide popup
            popup.classList.remove('translate-x-0');
            popup.classList.add('translate-x-full');
            
            // Hide overlay
            overlay.classList.remove('opacity-100');
            overlay.classList.add('pointer-events-none', 'opacity-0');
            
            // Reset hamburger
            line1.style.transform = '';
            line2.style.transform = '';
            
            // Restore body scroll
            document.body.style.overflow = '';
        }
    }

    // Close menu when clicking overlay
    document.getElementById('mobileOverlay').addEventListener('click', function() {
        if (isMobileMenuOpen) {
            toggleMobileMenu();
        }
    });

    // Close menu on window resize to desktop
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024 && isMobileMenuOpen) {
            toggleMobileMenu();
        }
    });
</script>

@endsection
