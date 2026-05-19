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
    </style>
    <header>
        <nav
            class="fixe top-0 overflow-hidden z-20 w-full bg-white/80 rounded-b-l dark:shadow-gray-950/10 border- border-gray-100 border-  backdrop-blur">
            <div class="px-4 m-auto max-w-5xl 2xl:px-0">
                <div class="flex flex-wrap items-center justify-between py-2 sm:py-4">
                    <div class="w-full items-center flex justify-between lg:w-auto">
                        <a href="{{ url('/') }}" aria-label="codekaro logo"
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


                                <ul class="space-y-6 tracking-tigh text-l lg:text-sm lg:flex lg:space-y-0 flex items-center">

                                    <li>
                                        <a href="#"
                                            class="block md:px-4 transition hover:text-primary-600 dark:hover:text-primary-400">
                                            <span>Programs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/login') }}"
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
                                <ul class="space-y-6 tracking-tigh text-l lg:text-sm lg:flex lg:space-y-0 flex items-center">



                                    <li>
                                        <a href="{{ url('/home') }}"
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


    <section class="">
        <div class="max-w-5xl mx-auto mt-12 px-5">
            <div class="flex gap-4">
                <div class="w-2/3">
                    <h1 class="text-3xl text-neutral-800 front-semibold cal-sans">Learn Node.js From Scratch</h1>
                    <p class="mt-2">This course covers fundamentals of Node.js as a backend programming language and aims
                        to get you just comfortable enough to start your backend journey without being afraid of working
                        with a real programming language</p>

                        
                
                
                
                    </div>
                {{-- price card --}}
                <div class="sticky top-4 z-10 text-gray-800 max-w-[350px]">
                    <div class="rounded-lg bg-gray-50 shadow-2xl">
                        <div class="relative"><img alt="Course image for Learn Node.js From Scratch" loading="lazy"
                                width="1280" height="720" decoding="async" data-nimg="1" class="rounded-t-lg"
                                src="https://wsrv.nl/?url=https%3A%2F%2Fs3.us-east-1.amazonaws.com%2Fcreator-assets.codedamn.com%2Fcodedamn-61897bfe60f1140008feb00d%2FCOURSE_IMAGE%2F2023-02-19%2F91baa9562d49a8fe0a8b36bfe56b351b5d79c649&amp;w=1280&amp;q=82&amp;output=webp"
                                style="color: transparent;">
                            <div
                                class="absolute left-0 top-0 h-full w-full cursor-pointer select-none bg-gradient-to-t from-black/80 to-transparent">
                                <div
                                    class="absolute left-0 top-0 flex h-full w-full items-center justify-center text-2xl text-white">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                        class="h-[60px] w-[60px] drop-shadow" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm144.1 454.9L437.7 677.8a8.02 8.02 0 0 1-12.7-6.5V353.7a8 8 0 0 1 12.7-6.5L656.1 506a7.9 7.9 0 0 1 0 12.9z">
                                        </path>
                                    </svg></div><span
                                    class="text-shadow absolute bottom-4 w-full text-center font-bold text-white">Free
                                    preview before enrolling</span>
                            </div>
                        </div>
                        <div class="px-5 pb-3">
                            <div class="pb-2 pt-4 w-full" id="pricing-btns-container">
                                <div class="divide-y divide-gray-600 lg:divide-gray-200">
                                    <div>
                                        <div><span
                                                class="text-red-700 dark:text-red-300 text-sm flex items-center gap-2"><svg
                                                    stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 24 24" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path
                                                        d="m22 5.72-4.6-3.86-1.29 1.53 4.6 3.86L22 5.72zM7.88 3.39 6.6 1.86 2 5.71l1.29 1.53 4.59-3.85zM12.5 8H11v6l4.75 2.85.75-1.23-4-2.37V8zM12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9a9 9 0 0 0 0-18zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z">
                                                    </path>
                                                </svg> <span><b>7 hours</b> left at this price!</span></span></div>
                                        <p class="my-2 cal-sans flex flex-grow flex-row items-center text-3xl font-bold "
                                            data-testid="price">₹449
                                        <div class="ml-2 flex flex-row items-center"><span data-id="sub-text"
                                                class="font-medium text-gray-400 line-through lg:text-gray-600">₹
                                                1499</span><span data-id="discount-text"
                                                class="ml-2 font-medium tracking-tight text-gray-100 lg:text-gray-900">70%
                                                off</span></div>
                                        </p><span class="block pt-1 pb-2 text-sm text-gray-100 lg:text-gray-700">Includes
                                            <b>lifetime access</b> to current and future updates to the course. Learn at
                                            your own pace, anytime.</span><button data-testid="cta-right"
                                            class="my-1 w-full rounded-lg bg-black px-8 py-2 text-base font-semibold text-white shadow hover:bg-black focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-indigo-200 disabled:cursor-wait disabled:opacity-50 md:text-lg">Buy
                                            now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 mt-4 hidden">
                                <p class="text-lg font-bold">Includes Certificate of Completion</p><img
                                    alt="career certificate" loading="lazy" width="512" height="288"
                                    decoding="async" data-nimg="1"
                                    src="https://wsrv.nl/?url=https%3A%2F%2Fcodedamn-website-assets.s3.us-east-1.amazonaws.com%2Fuploads%2F11-2023%2Fplaceholder-certificate.LeZZM3ape4qCNEFE8iGB7.png&amp;w=1024&amp;q=82&amp;output=webp"
                                    style="color: transparent;">
                                <p class="text-xs">Add this credential to your LinkedIn profile, resume, or CV. You can
                                    share it on social media and in your performance review.</p>
                            </div>
                            <p class="py-2 text-lg font-bold">What's in the course?</p>
                            <ul class="space-y-1 text-sm">
                                <li class="flex items-center space-x-2"><span><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" t="1569683915274"
                                            viewBox="0 0 1024 1024" version="1.1" class="inline h-[20px] w-[20px]"
                                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <defs></defs>
                                            <path
                                                d="M368 724H252V608c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v116H72c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h116v116c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V788h116c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8z">
                                            </path>
                                            <path
                                                d="M912 302.3L784 376V224c0-35.3-28.7-64-64-64H128c-35.3 0-64 28.7-64 64v352h72V232h576v560H448v72h272c35.3 0 64-28.7 64-64V648l128 73.7c21.3 12.3 48-3.1 48-27.6V330c0-24.6-26.7-40-48-27.7zM888 625l-104-59.8V458.9L888 399v226z">
                                            </path>
                                            <path
                                                d="M320 360c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8H208c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h112z">
                                            </path>
                                        </svg></span><span>14 video lectures</span></li>
                                <li class="flex items-center space-x-2"><span><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                            class="inline h-[20px] w-[20px]" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M516 673c0 4.4 3.4 8 7.5 8h185c4.1 0 7.5-3.6 7.5-8v-48c0-4.4-3.4-8-7.5-8h-185c-4.1 0-7.5 3.6-7.5 8v48zm-194.9 6.1l192-161c3.8-3.2 3.8-9.1 0-12.3l-192-160.9A7.95 7.95 0 0 0 308 351v62.7c0 2.4 1 4.6 2.9 6.1L420.7 512l-109.8 92.2a8.1 8.1 0 0 0-2.9 6.1V673c0 6.8 7.9 10.5 13.1 6.1zM880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-40 728H184V184h656v656z">
                                            </path>
                                        </svg></span><span>6 hands-on-keyboard exercises</span></li>
                                <li class="flex items-center space-x-2"><span><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" t="1569683618210"
                                            viewBox="0 0 1024 1024" version="1.1" class="inline h-[20px] w-[20px]"
                                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <defs></defs>
                                            <path
                                                d="M945 412H689c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h256c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zM811 548H689c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h122c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zM477.3 322.5H434c-6.2 0-11.2 5-11.2 11.2v248c0 3.6 1.7 6.9 4.6 9l148.9 108.6c5 3.6 12 2.6 15.6-2.4l25.7-35.1v-0.1c3.6-5 2.5-12-2.5-15.6l-126.7-91.6V333.7c0.1-6.2-5-11.2-11.1-11.2z">
                                            </path>
                                            <path
                                                d="M804.8 673.9H747c-5.6 0-10.9 2.9-13.9 7.7-12.7 20.1-27.5 38.7-44.5 55.7-29.3 29.3-63.4 52.3-101.3 68.3-39.3 16.6-81 25-124 25-43.1 0-84.8-8.4-124-25-37.9-16-72-39-101.3-68.3s-52.3-63.4-68.3-101.3c-16.6-39.2-25-80.9-25-124 0-43.1 8.4-84.7 25-124 16-37.9 39-72 68.3-101.3 29.3-29.3 63.4-52.3 101.3-68.3 39.2-16.6 81-25 124-25 43.1 0 84.8 8.4 124 25 37.9 16 72 39 101.3 68.3 17 17 31.8 35.6 44.5 55.7 3 4.8 8.3 7.7 13.9 7.7h57.8c6.9 0 11.3-7.2 8.2-13.3-65.2-129.7-197.4-214-345-215.7-216.1-2.7-395.6 174.2-396 390.1C71.6 727.5 246.9 903 463.2 903c149.5 0 283.9-84.6 349.8-215.8 3.1-6.1-1.4-13.3-8.2-13.3z">
                                            </path>
                                        </svg></span><span>3+ hours of content</span></li>
                                <li class="flex items-center space-x-2"><span><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                            class="inline h-[20px] w-[20px]" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M516 673c0 4.4 3.4 8 7.5 8h185c4.1 0 7.5-3.6 7.5-8v-48c0-4.4-3.4-8-7.5-8h-185c-4.1 0-7.5 3.6-7.5 8v48zm-194.9 6.1l192-161c3.8-3.2 3.8-9.1 0-12.3l-192-160.9A7.95 7.95 0 0 0 308 351v62.7c0 2.4 1 4.6 2.9 6.1L420.7 512l-109.8 92.2a8.1 8.1 0 0 0-2.9 6.1V673c0 6.8 7.9 10.5 13.1 6.1zM880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-40 728H184V184h656v656z">
                                            </path>
                                        </svg></span><span>1 quiz exam</span></li>
                                <li class="flex items-center space-x-2"><span><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                            class="inline h-[20px] w-[20px]" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135">
                                            </path>
                                            <path
                                                d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5">
                                            </path>
                                        </svg></span><span>GPT-4 level AI assistance</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
