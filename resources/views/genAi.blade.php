<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Frontend in just 5 Days!</title>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Master Frontend in just 5 Days!">
    <meta property="og:description"
        content="Master exactly what matters in frontend & Start Your Journey Toward a High-Paying Career.">
    <meta property="og:image" content="{{ asset('assets/img/js.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Master Frontend in just 5 Days!">
    <meta name="twitter:description"
        content="Master exactly what matters in frontend & Start Your Journey Toward a High-Paying Career.">
    <meta name="twitter:image" content="{{ asset('assets/img/js.webp') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100;500;600;700;800;900&display=swap&family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        .jobs img {
            height: 28px;
            display: inline-block;
            filter: grayscale(100);
        }

        body {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
        }

        .ck-sans {
            font-family: "Lexend Exa", sans-serif;
            font-optical-sizing: auto;
            
            font-style: normal;
        }
        .t-scroll {
            flex: 0 0 auto;
            z-index: 1;
            display: flex;
            flex-direction: row;
            align-items: center;
            animation: scroll 20s linear 0s infinite;
            animation-play-state: running;
            animation-delay: 0s;
            animation-direction: normal;
            width: max-content;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .t {
            font-size: 100px;
            background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.16) 100%);
            display: inline-block;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        @keyframes marquee {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }
    .animate-marquee {
        animation: marquee 20s linear infinite;
    }
    </style>
</head>

<body>

    <div class="max-w-3xl mx-auto ">
        <div class="">
            {{-- <img class="h-44" src="https://course.growthschool.io/images/Frame-349-p-1080.png" alt=""> --}}
        </div>
        <div class="text-center mt-12 p-3">
            <div class="border inline-block px-5 py-3 rounded-full mb-5 bg-orange-50 text-orange-800 border-orange-300">For Busy working professionals</div>
            <h1 class="text-2xl md:text-3xl font-semibold text-neutral-800 ck-sans -tracking-[0.10em]">AI Skills That Will Make You Irreplaceable: Master <span class="text-orange-600 underline">Python & Agentic
                    AI in just 3 days</span> to Become 10X More Valuable in Your Career</h1>
            <p class="text-lg mt-5 text-neutral-700">This hands-on AI workshop transforms you into an AI power user who can build automated workflows, create professional content in minutes, and launch AI-powered apps—giving you the competitive edge that makes you irreplaceable in any industry.</p>
            <div class="flex mt-5 gap-4 text-lef">
                <div class="bg-[#552419] text-white px-5 w-1/2 py-3 rounde">From 4th - 6th Nov</div>
                <div class="bg-[#552419] text-white px-5 w-1/2 py-3 rounde">8 PM - 9 PM (IST)</div>
            </div>
        </div>
    </div>


    <section class="bg-[#552419] py-32 mt-32">
        <h1 class="text-center text-white text-xl md:text-3xl font-medium p-4 max-w-4xl mx-auto ck-sans tracking-tighter">Join <span class="underline">1.37 Lakh+ Learners</span> who have successfully completed the program to become an AI-powered Developers</h1>
        <div class="max-w-6xl overflow-hidden mx-auto flex gap-3 transition-all">
            
            <div class="flex justify-center  gap-3 mt-10 t-scroll transition-all transform-none">
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none  px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/1.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/2.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/3.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/4.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/5.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/6.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/7.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/8.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/9.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/10.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/11.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/12.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{ asset('assets/img/tstm/13.webp') }}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
            </div>

            <div class="flex justify-center  gap-3 mt-10 t-scroll transition-all transform-none">
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none  px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/1.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/2.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/3.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/4.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/5.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/6.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/7.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/8.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/9.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/10.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/11.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/12.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
                <div
                    class="border inline-block py-[20px] shrink-0 transform-none px-[12px] border-[#682c1f] bg-[#471e15] rounded-xl">
                    <img src="{{asset('assets/img/tstm/13.webp')}}" loading="lazy" alt="" class="h-[84px] w-[64px] object-cover">
                </div>
            </div>

        </div>
        <div class="max-w-5xl mx-auto my-12 m-3">
            <div class="">
                <h1 class="text-center font-medium ck-sans tracking-tighter p-3 text-3xl md:text-3xl text-white mb-10">What you will learn?</h1>
            </div>
            <div class="flex flex-col md:flex-row items-center md:items-start  gap-4 mx-4">
                <div class="border border-white bg-white rounded-xl w-full md:w-96 ">
                    <div class="p-3">
                        <p class="text-sm text-neutral-600 my-2">Day 01</p>
                        <h1 class="font-medium text-lg">Thinking like a Model</h1>
                        <ul class="mt-2 list-disc ml-4 text-neutral-700">
                            <li>How python works</li>
                            <li>Variables & Datatypes</li>
                            <li>Arrays</li>
                            <li>Objects</li>
                            <li>Conditionals</li>
                            
                        </ul>
                    </div>
                    <div class="border-t border-neutral-200 bg-[#fbf2f0] rounded-b-xl">
                        <div class="p-3 ">
                            <p class="text-neutral-600 text-xs">Tools you will learn</p>
                            <div class="flex gap-4 items-center">
                                <img src="https://assets.nextleap.app/images/claudeai_case_study_icon_100920251653.svg"
                                    alt="" class="mt-2 h-6">
                                {{-- <img src="https://assets.nextleap.app/images/deepgram_case_study_icon_100920251653.svg" alt="" class="h-6 mt-2"> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border border-white bg-white rounded-xl w-full md:w-96">
                    <div class="p-3">
                        <p class="text-sm text-neutral-600 my-2">Day 01</p>
                        <h1 class="font-medium text-lg">Thinking like a Model</h1>
                        <ul class="mt-2 list-disc ml-4 text-neutral-700">
                            <li>Human vs LLM thinking</li>
                            <li>Learning & hallucinations</li>
                            <li>Metacognition for prompts</li>
                            <li>Failure modes & bias</li>
                            <li>Functions</li>
                        </ul>
                    </div>
                    <div class="border-t border-neutral-200 bg-[#fbf2f0] rounded-b-xl">
                        <div class="p-3 ">
                            <p class="text-neutral-600 text-xs">Tools you will learn</p>
                            <div class="flex gap-4 items-center">
                                <img src="https://assets.nextleap.app/images/openai_black_wordmark_290820252018.svg"
                                    alt="" class="mt-2 h-6">
                                {{-- <img src="https://framerusercontent.com/images/Z7lJ0WDBTh8Bb02fDCRxUodgTI.png" alt="" class="h-6 mt-2"> --}}
                            </div>
                        </div>
                    </div>

                </div>


                <div class="border border-white bg-white rounded-xl w-full md:w-96">
                    <div class="p-3">
                        <p class="text-sm text-neutral-600 my-2">Day 01</p>
                        <h1 class="font-medium text-lg">Thinking like a Model</h1>
                        <ul class="mt-2 list-disc ml-4 text-neutral-700">
                            <li>Human vs LLM thinking</li>
                            <li>Learning & hallucinations</li>
                            <li>Metacognition for prompts</li>
                            <li>Failure modes & bias</li>
                            <li>Deployment</li>
                        </ul>
                    </div>
                    <div class="border-t border-neutral-200 bg-[#fbf2f0] rounded-b-xl">
                        <div class="p-3 ">
                            <p class="text-neutral-600 text-xs">Tools you will learn</p>
                            <div class="flex gap-4 items-center">
                                <img src="https://assets.nextleap.app/images/deepgram_case_study_icon_100920251653.svg"
                                    alt="" class="mt-2 h-6">
                                {{-- <img src="https://assets.nextleap.app/images/deepgram_case_study_icon_100920251653.svg" alt="" class="h-6 mt-2"> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>







</body>

</html>
