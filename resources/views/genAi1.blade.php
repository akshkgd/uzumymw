<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gen AI Engineering Mastermind</title>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Gen AI Engineering Mastermind">
    <meta property="og:description"
        content="Master exactly what matters in GenAi & Start Your Journey Toward a High-Paying Career.">
    <meta property="og:image" content="{{ asset('assets/img/js.we') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gen AI Engineering Mastermind">
    <meta name="twitter:description"
        content="Master exactly what matters in GenAi & Start Your Journey Toward a High-Paying Career.">
    <meta name="twitter:image" content="{{ asset('assets/img/js.we') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100;500;600;700;800;900&display=swap&family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HC9ETJV29G"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HC9ETJV29G');
    </script>
    <!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '606378664796034');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=606378664796034&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    <style>
        @font-face {
        font-family: 'mackinac';
        src: url('/assets/fonts/mackinac-bold.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
        }
        .font-mackinac{
             font-family: 'mackinac', sans-serif;
        }
        .jobs img {
            height: 28px;
            display: inline-block;
            filter: grayscale(100);
        }

        body {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
        }
                .cta-button {
            cursor: pointer;
            transition: all 0.3s ease;
            animation: shake 3s infinite;
            position: relative;
            overflow: hidden;
        }
                .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(245, 87, 108, 0.6);
        }

        @keyframes shake {
            0%, 90%, 100% {
                transform: translateX(0) rotate(0deg);
            }
            91% {
                transform: translateX(-3px) rotate(-1deg);
            }
            92% {
                transform: translateX(3px) rotate(1deg);
            }
            93% {
                transform: translateX(-3px) rotate(-1deg);
            }
            94% {
                transform: translateX(3px) rotate(1deg);
            }
            95% {
                transform: translateX(-2px) rotate(-0.5deg);
            }
            96% {
                transform: translateX(2px) rotate(0.5deg);
            }
            97% {
                transform: translateX(-1px) rotate(-0.3deg);
            }
            98% {
                transform: translateX(1px) rotate(0.3deg);
            }
            99% {
                transform: translateX(0) rotate(0deg);
            }
        }

        @keyframes shake-hover {
            0%, 100% {
                transform: translateX(0) rotate(0deg) scale(1.05);
            }
            25% {
                transform: translateX(-2px) rotate(-0.5deg) scale(1.05);
            }
            50% {
                transform: translateX(2px) rotate(0.5deg) scale(1.05);
            }
            75% {
                transform: translateX(-2px) rotate(-0.5deg) scale(1.05);
            }
        }
        .rfm-marquee-container {
    overflow-x: hidden;
    display: flex;
    flex-direction: row;
    position: relative;
    width: var(--width);
    transform: var(--transform);
}
.rfm-marquee {
    flex: 0 0 auto;
    min-width: var(--min-width);
    z-index: 1;
    display: flex;
    flex-direction: row;
    align-items: center;
    animation: scroll var(--duration) 
linear var(--delay) var(--iteration-count);
    animation-play-state: var(--play);
    animation-delay: var(--delay);
    animation-direction: var(--direction);
}
.rfm-initial-child-container {
    flex: 0 0 auto;
    display: flex;
    min-width: auto;
    flex-direction: row;
    align-items: center;
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

<body class="" x-data="{ 
    modalOpen: false, 
    vipUpgrade: false,
    minutes: 7,
    seconds: 0,
    init() {
        // Load timer from localStorage or set initial values
        const savedEndTime = localStorage.getItem('timerEndTime');
        const now = Date.now();
        
        if (savedEndTime) {
            const endTime = parseInt(savedEndTime);
            const remainingMs = endTime - now;
            
            if (remainingMs > 0) {
                // Timer is still running
                this.minutes = Math.floor(remainingMs / 60000);
                this.seconds = Math.floor((remainingMs % 60000) / 1000);
            } else {
                // Timer expired, restart from 7 minutes
                this.restartTimer();
            }
        } else {
            // First time, set timer to 7 minutes
            this.restartTimer();
        }
        
        // Update timer every second
        setInterval(() => {
            if (this.seconds > 0) {
                this.seconds--;
            } else {
                if (this.minutes > 0) {
                    this.minutes--;
                    this.seconds = 59;
                } else {
                    // Timer hit 0, restart from 7 minutes
                    this.restartTimer();
                }
            }
            
            // Save current state
            this.saveTimer();
        }, 1000);
    },
    restartTimer() {
        this.minutes = 7;
        this.seconds = 0;
        this.saveTimer();
    },
    saveTimer() {
        const totalMs = (this.minutes * 60 + this.seconds) * 1000;
        const endTime = Date.now() + totalMs;
        localStorage.setItem('timerEndTime', endTime.toString());
    },
    validateAndSubmit(event) {
        const form = event.target;
        const name = form.querySelector('[name=name]').value.trim();
        const email = form.querySelector('[name=email]').value.trim();
        const mobile = form.querySelector('[name=mobile]').value.trim();
        
        if (!name) {
            alert('Please enter your full name');
            form.querySelector('[name=name]').focus();
            return false;
        }
        
        if (!email) {
            alert('Please enter your email address');
            form.querySelector('[name=email]').focus();
            return false;
        }
        
        // Basic email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address');
            form.querySelector('[name=email]').focus();
            return false;
        }
        
        if (!mobile) {
            alert('Please enter your WhatsApp number');
            form.querySelector('[name=mobile]').focus();
            return false;
        }
        
        // Mobile validation (10 digits)
        const mobileRegex = /^[0-9]{10}$/;
        if (!mobileRegex.test(mobile)) {
            alert('Please enter a valid 10-digit mobile number');
            form.querySelector('[name=mobile]').focus();
            return false;
        }
        
        // If all validations pass, submit the form
        form.submit();
    }
}" @keydown.escape.window="modalOpen = false" :class="{ 'overflow-hidden': modalOpen }">
    <!-- Full Screen Modal -->
    <template x-teleport="body">
        <div x-show="modalOpen" class="fixed inset-0 z-[99] flex w-screen h-screen overflow-hidden" x-cloak>
            <!-- Backdrop -->
            <div x-show="modalOpen" 
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="modalOpen=false" 
                class="absolute inset-0 w-full h-full bg-black/80 backdrop-blur-sm">
            </div>
            
            <!-- Modal Content -->
            <div x-show="modalOpen"
                x-trap.inert.noscroll="modalOpen"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="relative flex w-full h-full bg-white overflow-hidden">
                
                <!-- Close Button -->
                <button @click.stop="modalOpen=false" class="absolute top-4 right-4 z-[60] flex items-center justify-center px-3 py-3 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span>Close</span>
                </button> 

                <!-- Content -->
                <div class="relative flex flex-wrap items-center justify-center w-full h-full px-0 sm:px-8 overflow-y-auto z-50">
                    <div class="relative w-full max-w-md mx-auto py-8">
                        <div class="relative text-center p-3 sm:p-6 ">
                            <div class="flex flex-col mb-6 space-y- text-center">
                                <!-- <div class="text-center">
                                    <svg class="text-white rotate-90 mx-auto mb-5" fill="black" width="24" height="24" viewBox="0 0 32 32" version="1.1" aria-labelledby="codekaro" aria-hidden="false" style="flex-shrink:0"><desc lang="en-US">Codekaro logo</desc><title id="unsplash-home">Codekaro</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg>
                                </div> -->
                                <h1 class="text-xl font-semibold tracking-tight font-sans flex gap-1 justify-center">Join <span class="relative"><img src="https://codekaro.in/assets/img/live_kids.svg" alt="" class="absolute -bottom-1"> Live</span> Gen AI Engineering Mastermind</h1>
                                <p class="text-sm text-red-600 -mt- font-medium">Live class from 8th Dec | 07:00 PM</p>
                            </div>
                            <form class="space-y-3 text-left  mt-10" action="https://codekaro.in/course-enrollment-auto" method="POST" id="enrollmentForm" @submit.prevent="validateAndSubmit">
                                <input type="hidden" name="_token" value="H2GL22rHHFEHaWOpgnEiyAc1aQdDRVAHZaJ8OzxK">                                
                                <input type="hidden" name="source" value="{{ app('request')->input('utm_source') }}">
                                <input type="hidden" name="medium" value="{{ app('request')->input('utm_medium') }}">
                                <input type="hidden" name="campaign" value="{{ app('request')->input('utm_campaign') }}">
                                <input type="hidden" name="courseId" value="162">
                                <div class="space-y-1">
                                    <!-- <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="name">Full Name</label> -->
                                    <input name="name"  @auth value="{{Auth::user()->name}}" @endauth  type="text" id="name" required class="flex w-full rounded-none border text-base  border-neutral-200 bg-white px-3 py-3  ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-semibold placeholder:text-neutral-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:border-neutral-700 focus-visible:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Full Name">
                                </div>
                                <div class="space-y-1">
                                    <!-- <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="email">Email Address</label> -->
                                    <input name="email"  @auth value="{{Auth::user()->email}}" @endauth  type="email" id="email" required class="flex w-full rounded-none border  border-neutral-200 bg-white px-3 py-3  ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-semibold placeholder:text-neutral-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:border-neutral-700 focus-visible:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Email Address">
                                </div>
                                <div class="space-y-1">
                                    <!-- <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="whatsapp">WhatsApp Number</label> -->
                                    <input name="mobile"  @auth value="{{Auth::user()->mobile}}" @endauth  type="tel" id="mobile" required pattern="[0-9]{10}" class="flex w-full rounded-none border  border-neutral-200 bg-white px-3 py-3  ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-semibold placeholder:text-neutral-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:border-neutral-700 focus-visible:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" placeholder="WhatsApp Number">
                                    <p class="flex hidde gap-1 items-center mb-4">
                                        <span class="text-sm text-neutral-700">You will get updates on your</span>
                                        <svg width="79" height="18" viewBox="0 0 79 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M28.9736 10.6327H28.9464L27.4572 4.63574H25.6685L24.1612 10.5511H24.1339L22.7538 4.63574H20.8379L23.1442 13.3363H25.0783L26.5311 7.42103H26.5583L28.0293 13.3363H29.927L32.2697 4.63574H30.3901L28.9736 10.6327ZM38.1081 7.58433C37.9356 7.35752 37.6995 7.18514 37.409 7.05812C37.1093 6.93111 36.728 6.8676 36.274 6.8676C35.9471 6.8676 35.6202 6.94925 35.2752 7.12163C34.9301 7.28494 34.6577 7.55711 34.4307 7.92002H34.3944V4.63574H32.6601V13.3363H34.3944V10.0339C34.3944 9.38977 34.5034 8.93615 34.7122 8.6549C34.921 8.37365 35.2661 8.23756 35.7382 8.23756C36.1559 8.23756 36.4374 8.36457 36.6008 8.61861C36.7643 8.87264 36.846 9.26276 36.846 9.7799V13.3363H38.5803V9.46236C38.5803 9.07223 38.544 8.7184 38.4804 8.40086C38.3987 8.07425 38.2806 7.80207 38.1081 7.58433ZM45.245 11.9392V8.6549C45.245 8.27385 45.1633 7.96538 44.9908 7.73857C44.8183 7.50268 44.6004 7.3303 44.337 7.19421C44.0646 7.06719 43.7741 6.97647 43.4472 6.93111C43.1203 6.88574 42.8025 6.8676 42.4847 6.8676C42.1397 6.8676 41.7855 6.90389 41.4405 6.9674C41.0955 7.03998 40.7867 7.14885 40.5053 7.31215C40.2329 7.47546 39.9968 7.6932 39.8243 7.95631C39.6427 8.22848 39.5428 8.56417 39.5155 8.96336H41.2498C41.2861 8.61861 41.3951 8.38272 41.5949 8.22848C41.7855 8.08332 42.0579 8.01074 42.403 8.01074C42.5573 8.01074 42.7026 8.01981 42.8388 8.03796C42.975 8.05611 43.0931 8.10147 43.193 8.1559C43.2928 8.21941 43.3745 8.30106 43.4381 8.40994C43.5017 8.51881 43.5289 8.66397 43.5289 8.85449C43.538 9.03594 43.4835 9.17203 43.3746 9.26276C43.2565 9.35348 43.1021 9.42606 42.9115 9.47143C42.7208 9.51679 42.4938 9.55308 42.2395 9.5803C41.9853 9.60752 41.7311 9.63473 41.4677 9.6801C41.2044 9.71639 40.9502 9.7799 40.6959 9.8434C40.4417 9.91598 40.2147 10.0158 40.0149 10.1519C39.8152 10.288 39.6517 10.4785 39.5246 10.7053C39.3975 10.9412 39.3339 11.2315 39.3339 11.5853C39.3339 11.912 39.3884 12.1932 39.4974 12.4291C39.6063 12.665 39.7607 12.8555 39.9514 13.0097C40.1421 13.164 40.3781 13.2819 40.6324 13.3545C40.8957 13.4271 41.1681 13.4634 41.4768 13.4634C41.8673 13.4634 42.2486 13.4089 42.6209 13.291C42.9932 13.173 43.3201 12.9825 43.5925 12.6922C43.6016 12.8011 43.6106 12.9009 43.6379 13.0007C43.656 13.1005 43.6833 13.2003 43.7196 13.3001H45.472C45.3903 13.173 45.3358 12.9734 45.2995 12.7194C45.2541 12.4926 45.245 12.2204 45.245 11.9392ZM43.5108 10.8958C43.5108 10.9956 43.5017 11.1226 43.4835 11.2859C43.4654 11.4493 43.4109 11.6126 43.3201 11.7668C43.2293 11.921 43.0931 12.0571 42.9024 12.1751C42.7117 12.293 42.4484 12.3474 42.1124 12.3474C41.9762 12.3474 41.84 12.3384 41.7129 12.3111C41.5858 12.2839 41.4677 12.2476 41.3679 12.1841C41.268 12.1206 41.1953 12.039 41.1318 11.9301C41.0773 11.8212 41.0501 11.6942 41.0501 11.54C41.0501 11.3767 41.0773 11.2406 41.1318 11.1408C41.1863 11.0319 41.268 10.9503 41.3588 10.8777C41.4496 10.8051 41.5585 10.7507 41.6857 10.7144C41.8128 10.6781 41.9399 10.6418 42.067 10.6146C42.2032 10.5874 42.3394 10.5692 42.4847 10.5511C42.6209 10.5329 42.7571 10.5148 42.8842 10.4876C43.0113 10.4603 43.1294 10.4331 43.2384 10.3968C43.3473 10.3605 43.4381 10.3061 43.5108 10.2426V10.8958ZM48.4685 5.15288H46.7342V7.03998H45.69V8.20127H46.7342V11.912C46.7342 12.2295 46.7886 12.4835 46.8885 12.6831C46.9975 12.8736 47.1428 13.0279 47.3244 13.1368C47.506 13.2456 47.7148 13.3091 47.96 13.3454C48.1961 13.3817 48.4503 13.3999 48.7227 13.3999C48.8952 13.3999 49.0677 13.3999 49.2493 13.3908C49.4309 13.3817 49.5944 13.3636 49.7397 13.3454V12.0027C49.6579 12.0208 49.5762 12.0299 49.4854 12.039C49.3946 12.048 49.3038 12.048 49.2039 12.048C48.9134 12.048 48.7136 12.0027 48.6228 11.9029C48.5229 11.8031 48.4775 11.6126 48.4775 11.3222V8.19219H49.7487V7.03998H48.4775V5.15288H48.4685ZM55.6235 10.5783C55.5055 10.3787 55.3602 10.2154 55.1695 10.0793C54.9788 9.9432 54.77 9.83433 54.5339 9.75268C54.2978 9.67102 54.0527 9.60752 53.7984 9.54401C53.5533 9.48957 53.3172 9.43514 53.0811 9.38977C52.845 9.34441 52.6362 9.28998 52.4546 9.22647C52.273 9.16296 52.1277 9.09038 52.0097 8.99058C51.8916 8.89078 51.8372 8.76377 51.8372 8.60953C51.8372 8.48252 51.8644 8.37365 51.937 8.30106C52.0006 8.22848 52.0823 8.16498 52.1731 8.12869C52.2639 8.0924 52.3729 8.06518 52.4818 8.04703C52.5999 8.03796 52.6998 8.02889 52.7996 8.02889C53.1084 8.02889 53.3808 8.08332 53.6078 8.20127C53.8348 8.31921 53.9619 8.54603 53.9891 8.87264H55.6326C55.5963 8.48252 55.4964 8.16498 55.333 7.90187C55.1695 7.64784 54.9607 7.43917 54.7064 7.28494C54.4522 7.1307 54.1707 7.02183 53.8438 6.95832C53.526 6.89481 53.1901 6.85852 52.8541 6.85852C52.5091 6.85852 52.1822 6.88574 51.8553 6.94925C51.5284 7.01276 51.2379 7.11256 50.9745 7.26679C50.7112 7.42102 50.5024 7.62062 50.348 7.88373C50.1937 8.14683 50.1119 8.47344 50.1119 8.88171C50.1119 9.15389 50.1664 9.38977 50.2845 9.5803C50.3934 9.77082 50.5478 9.92506 50.7385 10.0521C50.9291 10.1791 51.138 10.2789 51.3831 10.3605C51.6192 10.4422 51.8644 10.5057 52.1186 10.5601C52.7361 10.6872 53.2173 10.8232 53.5624 10.9503C53.9074 11.0773 54.0799 11.2769 54.0799 11.5309C54.0799 11.6851 54.0436 11.8122 53.971 11.912C53.8983 12.0118 53.8075 12.0934 53.6986 12.1569C53.5896 12.2204 53.4625 12.2658 53.3354 12.293C53.1992 12.3202 53.072 12.3384 52.954 12.3384C52.7815 12.3384 52.618 12.3202 52.4637 12.2749C52.3093 12.2386 52.164 12.1751 52.046 12.0843C51.9279 12.0027 51.8281 11.8938 51.7464 11.7577C51.6737 11.6216 51.6283 11.4674 51.6283 11.2769H49.9848C50.003 11.7033 50.0938 12.048 50.2754 12.3293C50.4479 12.6105 50.6749 12.8374 50.9473 13.0097C51.2197 13.1821 51.5284 13.3001 51.8826 13.3726C52.2276 13.4452 52.5908 13.4815 52.954 13.4815C53.3081 13.4815 53.6622 13.4452 54.0073 13.3817C54.3523 13.3091 54.661 13.1912 54.9244 13.0188C55.1968 12.8464 55.4056 12.6196 55.5781 12.3474C55.7416 12.0662 55.8233 11.7214 55.8233 11.3041C55.796 11.0228 55.7325 10.7779 55.6235 10.5783ZM59.0558 4.63574L55.7688 13.3363H57.6938L58.3748 11.4039H61.6254L62.2883 13.3363H64.2768L61.0261 4.63574H59.0558ZM58.8742 9.97042L60.0092 6.77687H60.0364L61.1351 9.97042H58.8742ZM70.2606 7.8928C70.0245 7.58433 69.7248 7.33937 69.3707 7.14885C69.0166 6.95832 68.5898 6.8676 68.0904 6.8676C67.7 6.8676 67.3459 6.94018 67.019 7.09441C66.6921 7.24865 66.4288 7.49361 66.2109 7.83836H66.1927V7.0309H64.5492V15.5319H66.2835V12.547H66.3107C66.5196 12.8555 66.792 13.0914 67.1189 13.2456C67.4457 13.3999 67.8089 13.4815 68.1994 13.4815C68.6625 13.4815 69.0711 13.3908 69.4161 13.2093C69.7612 13.0279 70.0517 12.792 70.2787 12.4926C70.5148 12.1932 70.6782 11.8484 70.7963 11.4583C70.9052 11.0682 70.9688 10.6599 70.9688 10.2426C70.9688 9.79804 70.9143 9.37163 70.7963 8.95429C70.6692 8.56417 70.4966 8.20127 70.2606 7.8928ZM69.1528 10.9503C69.1074 11.1952 69.0166 11.4039 68.8985 11.5853C68.7805 11.7668 68.6261 11.921 68.4355 12.0299C68.2448 12.1478 68.0087 12.2023 67.7272 12.2023C67.4548 12.2023 67.2187 12.1478 67.019 12.0299C66.8192 11.921 66.6649 11.7668 66.5468 11.5853C66.4288 11.4039 66.347 11.1861 66.2926 10.9503C66.2381 10.7053 66.2109 10.4603 66.2109 10.2063C66.2109 9.9432 66.2381 9.69824 66.2835 9.45328C66.3289 9.20832 66.4197 8.99058 66.5377 8.80913C66.6558 8.61861 66.8101 8.47344 67.0008 8.3555C67.1915 8.23756 67.4276 8.17405 67.7091 8.17405C67.9815 8.17405 68.2175 8.23756 68.4082 8.3555C68.5989 8.47344 68.7533 8.62768 68.8804 8.8182C68.9984 9.00873 69.0892 9.22647 69.1437 9.47143C69.1982 9.71639 69.2254 9.96135 69.2254 10.2154C69.2254 10.4603 69.1982 10.7053 69.1528 10.9503ZM77.6789 8.97244C77.5609 8.56417 77.3884 8.20127 77.1523 7.8928C76.9162 7.58433 76.6166 7.33937 76.2625 7.14885C75.9083 6.95832 75.4816 6.8676 74.9822 6.8676C74.5917 6.8676 74.2376 6.94018 73.9107 7.09441C73.5838 7.24865 73.3205 7.49361 73.1026 7.83836H73.0754V7.0309H71.4319V15.5319H73.1662V12.547H73.1934C73.4022 12.8555 73.6746 13.0914 74.0015 13.2456C74.3284 13.3999 74.6916 13.4815 75.0821 13.4815C75.5451 13.4815 75.9447 13.3908 76.2988 13.2093C76.6438 13.0279 76.9344 12.792 77.1614 12.4926C77.3975 12.1932 77.57 11.8484 77.6789 11.4583C77.797 11.0682 77.8515 10.6599 77.8515 10.2426C77.8515 9.80711 77.797 9.3807 77.6789 8.97244ZM76.0445 10.9503C75.9991 11.1952 75.9083 11.4039 75.7994 11.5853C75.6813 11.7668 75.527 11.921 75.3363 12.0299C75.1456 12.1478 74.9095 12.2023 74.6281 12.2023C74.3557 12.2023 74.1196 12.1478 73.9198 12.0299C73.72 11.921 73.5657 11.7668 73.4476 11.5853C73.3296 11.4039 73.2479 11.1861 73.1934 10.9503C73.1389 10.7053 73.1117 10.4603 73.1117 10.2063C73.1117 9.9432 73.1389 9.69824 73.1843 9.45328C73.2297 9.20832 73.3205 8.99058 73.4386 8.80913C73.5566 8.61861 73.711 8.47344 73.9016 8.3555C74.0923 8.23756 74.3284 8.17405 74.619 8.17405C74.8914 8.17405 75.1275 8.23756 75.3181 8.3555C75.5088 8.47344 75.6632 8.62768 75.7903 8.8182C75.9083 9.00873 75.9991 9.22647 76.0536 9.47143C76.1081 9.71639 76.1353 9.96135 76.1353 10.2154C76.1172 10.4603 76.099 10.7053 76.0445 10.9503Z" fill="#030A21"></path>
                                            <path d="M0 18L1.27121 13.3821C0.481242 12.0212 0.0726403 10.4879 0.0726403 8.91835C0.0726403 4.00101 4.08602 0 9.0074 0C11.3955 0 13.6382 0.925403 15.3271 2.6129C17.016 4.3004 17.9422 6.54133 17.9422 8.92742C17.9422 13.8448 13.9379 17.8458 9.01648 17.8458C7.51827 17.8458 6.05639 17.4738 4.74886 16.7571L0 18ZM4.94862 15.1421L5.22102 15.3054C6.35603 15.9768 7.66355 16.3397 8.99832 16.3397C13.0843 16.3397 16.4167 13.0101 16.4167 8.92742C16.4167 6.9496 15.6449 5.08065 14.2466 3.68347C12.8483 2.28629 10.9778 1.50605 8.99832 1.50605C4.90322 1.50605 1.57085 4.83569 1.57085 8.91835C1.57085 10.3155 1.96129 11.6855 2.70585 12.8649L2.87837 13.1462L2.14289 15.877L4.94862 15.1421Z" fill="white"></path>
                                            <path d="M0.308594 17.6914L1.5344 13.2277C0.780756 11.9213 0.381234 10.4424 0.381234 8.91823C0.381234 4.17327 4.24933 0.30835 9.00727 0.30835C11.3136 0.30835 13.4747 1.20654 15.1091 2.83053C16.7344 4.45452 17.6333 6.62287 17.6333 8.91823C17.6333 13.6632 13.7652 17.5281 9.01635 17.5281C7.57263 17.5281 6.15614 17.1652 4.89401 16.4757L0.308594 17.6914Z" fill="url(#paint0_linear_750_8260)"></path>
                                            <path d="M0 18L1.27121 13.3821C0.481242 12.0212 0.0726403 10.4879 0.0726403 8.91835C0.0726403 4.00101 4.08602 0 9.0074 0C11.3955 0 13.6382 0.925403 15.3271 2.6129C17.016 4.3004 17.9422 6.54133 17.9422 8.92742C17.9422 13.8448 13.9379 17.8458 9.01648 17.8458C7.51827 17.8458 6.05639 17.4738 4.74886 16.7571L0 18ZM4.94862 15.1421L5.22102 15.3054C6.35603 15.9768 7.66355 16.3397 8.99832 16.3397C13.0843 16.3397 16.4167 13.0101 16.4167 8.92742C16.4167 6.9496 15.6449 5.08065 14.2466 3.68347C12.8483 2.28629 10.9778 1.50605 8.99832 1.50605C4.90322 1.50605 1.57085 4.83569 1.57085 8.91835C1.57085 10.3155 1.96129 11.6855 2.70585 12.8649L2.87837 13.1462L2.14289 15.877L4.94862 15.1421Z" fill="url(#paint1_linear_750_8260)"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.77508 5.18895C6.61164 4.81697 6.43004 4.8079 6.27568 4.8079C6.14856 4.79883 5.9942 4.79883 5.84892 4.79883C5.70364 4.79883 5.45847 4.85326 5.24963 5.08008C5.04079 5.30689 4.46875 5.84217 4.46875 6.93996C4.46875 8.03774 5.26779 9.09923 5.37675 9.24439C5.48571 9.38955 6.92036 11.7121 9.19037 12.6103C11.079 13.3543 11.4604 13.2091 11.869 13.1637C12.2776 13.1275 13.1856 12.6285 13.3763 12.1023C13.5579 11.5851 13.5579 11.1315 13.5034 11.0408C13.4489 10.95 13.2946 10.8956 13.0766 10.7777C12.8496 10.6688 11.76 10.1244 11.5512 10.0519C11.3423 9.97927 11.1971 9.94298 11.0518 10.1607C10.9065 10.3875 10.4797 10.8865 10.3435 11.0317C10.2164 11.1769 10.0802 11.195 9.86229 11.0861C9.63529 10.9773 8.91797 10.7414 8.06445 9.97927C7.4016 9.38955 6.95668 8.65468 6.82048 8.43693C6.69336 8.21012 6.80232 8.09217 6.92036 7.9833C7.02024 7.88351 7.14736 7.7202 7.25632 7.59318C7.36528 7.46617 7.4016 7.36637 7.48332 7.22121C7.55596 7.07605 7.51964 6.93996 7.46516 6.83109C7.4016 6.73129 6.97484 5.63351 6.77508 5.18895Z" fill="white"></path>
                                            <defs>
                                                <linearGradient id="paint0_linear_750_8260" x1="8.96666" y1="17.6878" x2="8.96666" y2="0.311552" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#20B038"></stop>
                                                    <stop offset="1" stop-color="#60D66A"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_750_8260" x1="8.96685" y1="17.9993" x2="8.96685" y2="0" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F9F9F9"></stop>
                                                    <stop offset="1" stop-color="white"></stop>
                                                </linearGradient>
                                            </defs>   
                                          </svg>
                                    </p>
                                </div>
                                <div class="hidden space-y-1 mt-3  border-2 border-green-500 bg-orange-5 rounded-x p-4 pb-3">
                                    <div class=" gap-2 mb-3">
                                        
                                        <h2 class="font-semibold">VIP Upgrade <span class="text-green-600">(Most Loved)</span></h2>
                                        <p class="text-sm">95% learners choose this!</p>
                                    </div>
                                    
                                    <p class="text-sm flex gap-1">1. Get Lifetime Access to Recordings</p>
                                    <p class="text-sm flex gap-1">2. Get 100+ Python interview Q&As</p>
                                    <p class="text-sm flex gap-1">3. AI Resume & Portfolio Generator</p>



                                    <div class="space-y-2">
                                        <!-- <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <span>Get bootcamp recordings</span>
                                        </div> -->
                                        
                                        
                                        
                                    </div>
                                    <div class="fle items-center justify-between mt-4">
                                        <div class="flex items-center gap-2 mt-2">
                                            <span class="text-l font-semibold">₹99.00</span>
                                            <span class="text-sm text-neutral-500 line-through px-1">₹2499</span>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer mt-2">
                                            <input type="hidden" name="recordingsCheckbox" :value="vipUpgrade ? '1' : '0'">
                                            <input type="checkbox" id="myCheckbox" x-model="vipUpgrade" class="sr-onl peer">
                                            <span class="ml-3 text-sm font-medium text-neutral-700">Add VIP Upgrade for ₹99</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="flex flex-col-reverse sm:flex-row sm:justify-between sm:space-x-2">
                                    <button type="submit" class="text-center w-full md:w-auto bg-[#FAFF00] hover:bg-[#E5E500] text-black font-medium py-2 px-8 border border-black text-base sm:text-xl font-figtree">
                                        Join Gen AI Engineering Mastermind for just  <span x-text="vipUpgrade ? ' ₹398 ' : ' ₹99 '"></span>
                                    </button>
                                </div>
                            </form>
                            <p class="mt-2 text-xs text-center text-neutral-500">By continuing, you agree to our Terms and Policy</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
    <div class="w-full bg-[#E53935] py-2.5 overflow-hidden"><div class="rfm-marquee-container " style="--pause-on-hover: paused; --pause-on-click: paused; --width: 100%; --transform: none;"><div class="rfm-marquee" style="--play: running; --direction: normal; --duration: 41.535s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;"><div class="rfm-initial-child-container"><div class="rfm-child" style="--transform: none;"><div class="flex items-center mx-8"><span class="text-white font-medium text-base md:text-xl  whitespace-nowrap"><span class="ml-2">End of Year Sale</span><span class="ml-2">🎁</span><span class=" opacity-90 ml-2">90% OFF</span></span></div></div><div class="rfm-child" style="--transform: none;"><div class="flex items-center mx-8"><span class="text-white font-medium text-base md:text-xl  whitespace-nowrap"><span class="ml-2">End of Year Sale</span><span class="ml-2">🎁</span><span class=" opacity-90 ml-2">90% OFF</span></span></div></div><div class="rfm-child" style="--transform: none;"><div class="flex items-center mx-8"><span class="text-white font-medium text-base md:text-xl  whitespace-nowrap"><span class="ml-2">End of Year Sale</span><span class="ml-2">🎁</span><span class=" opacity-90 ml-2">90% OFF</span></span></div></div><div class="rfm-child" style="--transform: none;"><div class="flex items-center mx-8"><span class="text-white font-medium text-base md:text-xl  whitespace-nowrap"><span class="ml-2">End of Year Sale</span><span class="ml-2">🎁</span><span class=" opacity-90 ml-2">90% OFF</span></span></div></div><div class="rfm-child" style="--transform: none;"><div class="flex items-center mx-8"><span class="text-white font-medium text-base md:text-xl  whitespace-nowrap"><span class="ml-2">End of Year Sale</span><span class="ml-2">🎁</span><span class=" opacity-90 ml-2">90% OFF</span></span></div></div><div class="rfm-child" style="--transform: none;"><div class="flex items-center mx-8"><span class="text-white font-medium text-base md:text-xl  whitespace-nowrap"><span class="ml-2">End of Year Sale</span><span class="ml-2">🎁</span><span class=" opacity-90 ml-2">90% OFF</span></span></div></div></div></div><div class="rfm-marquee" style="--play: running; --direction: normal; --duration: 41.535s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;"><div class="rfm-child" style="--transform: none;"><div class="flex items-center mx-8"><span class="text-white font-medium text-base md:text-xl  whitespace-nowrap"><span class="ml-2">End of Year Sale</span><span class="ml-2">🎁</span><span class=" opacity-90 ml-2">90% OFF</span></span></div></div><div class="rfm-child" style="--transform: none;"><div class="flex items-center mx-8"><span class="text-white font-medium text-base md:text-xl  whitespace-nowrap"><span class="ml-2">End of Year Sale</span><span class="ml-2">🎁</span><span class=" opacity-90 ml-2">90% OFF</span></span></div></div><div class="rfm-child" style="--transform: none;"><div class="flex items-center mx-8"><span class="text-white font-medium text-base md:text-xl  whitespace-nowrap"><span class="ml-2">End of Year Sale</span><span class="ml-2">🎁</span><span class=" opacity-90 ml-2">90% OFF</span></span></div></div><div class="rfm-child" style="--transform: none;"><div class="flex items-center mx-8"><span class="text-white font-medium text-base md:text-xl  whitespace-nowrap"><span class="ml-2">End of Year Sale</span><span class="ml-2">🎁</span><span class=" opacity-90 ml-2">90% OFF</span></span></div></div><div class="rfm-child" style="--transform: none;"><div class="flex items-center mx-8"><span class="text-white font-medium text-base md:text-xl  whitespace-nowrap"><span class="ml-2">End of Year Sale</span><span class="ml-2">🎁</span><span class=" opacity-90 ml-2">90% OFF</span></span></div></div><div class="rfm-child" style="--transform: none;"><div class="flex items-center mx-8"><span class="text-white font-medium text-base md:text-xl  whitespace-nowrap"><span class="ml-2">End of Year Sale</span><span class="ml-2">🎁</span><span class=" opacity-90 ml-2">90% OFF</span></span></div></div></div></div></div>
    <section>
        <div class="w-full bg-cover bg-center py-10 flex justify-center items-center" style="background-image: url(&quot;/assets/img/genAiLP/dot.png&quot;); background-size: cover; background-position: center center;">
            <div class="w-[90%] md:w-4/5 mx-auto bg-cover bg-white bg-center bg-[url('/assets/img/genAiLP/ctherom.webp')] md:bg-[url('/assets/img/genAiLP/newhero.svg')] border border-[#041B014D] md:p-8">
                <div class="flex items-center justify-center md:mb-8 mb-4 pt-4">
                    {{-- <img src="/oll.png" alt="codekaro Logo" class="md:h-[42px] md:w-[170px] w-[115px] h-[30px]"> --}}
                    <h1 class="font-mackinac text-2xl">Codekaro</h1> 
                </div>
                    
                    <div class="flex flex-col items-center text-center py-5">
                        <div class="text-black bg-[#EEFE05] text-sm font-figtree font-normal mb-4 p-2 border border-[#07090166]">6 Hours ◆ 3 LIVE EXPERT SESSIONS</div>
                        <h1 class="text-3xl md:text-[34px] font-medium mb-4 font-mackinac">Learn Gen AI in Just 3 Days by Building Your Own AI Agent Like ChatGPT</h1><p class="text-gray-700 text-14 md:text-[22px] w-[80%] mb-4 font-figtree font-normal">In <span class="font-semibold">just 3 days</span>, go from API Integration to Building Gen AI Agents. Boost your engineering skills with hands-on learning, whether you're a beginner or already working with Gen AI.</p>
                        <div class="text-black bg-[#EEFE05] text-sm font-figtree font-normal mb-4 p-2 border border-[#07090166]">For Active Coders &amp; Working Professionals</div><div class="flex flex-wrap justify-center gap-6 text-sm mb-6 md:w-[90%] w-[100%]">
                            <section class="w-full py-2 px-4 text-center"><div class="max-w-5xl mx-auto">
                                <div class="w-full flex items-center justify-center"></div>
                                <div class="flex flex-col md:flex-row gap-4 md:gap-3 justify-center w-full">
                                    <div class="border border-black p-2 py-4 flex-1 flex justify-center items-center text-center">
                                        <div class="flex flex-row md:flex-row items-center gap-2 text-sm md:text-lg font-mackina">
                                            <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days md:size-6"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path><path d="M8 14h.01"></path><path d="M12 14h.01"></path><path d="M16 14h.01"></path><path d="M8 18h.01"></path><path d="M12 18h.01"></path><path d="M16 18h.01"></path></svg><span>From 8th - 10th December 2025</span></div><div class="flex items-center gap-1 md:gap-2 hidden"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock md:size-6"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg><span>Fri - 7PM to 11PM IST</span></div></div></div><div class="border border-black p-2 py-4 flex-1 flex justify-center items-center text-center"><div class="flex flex-row md:flex-row items-center gap-2 text-sm md:text-lg"><div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide hidden lucide-calendar-days md:size-6"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path><path d="M8 14h.01"></path><path d="M12 14h.01"></path><path d="M16 14h.01"></path><path d="M8 18h.01"></path><path d="M12 18h.01"></path><path d="M16 18h.01"></path></svg><span class="hidden">Day 2: 15th Nov</span></div><div class="flex items-center gap-1 md:gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock md:size-6"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg><span>07:00 PM to 09:00 PM IST</span></div></div></div></div></div>
                            </section>
                                </div><div class="font-figtree font-medium mb-4 md:text-xl">Mentors</div><div class="w-full overflow-x-auto pb-4 md:pb-0"><div class="flex md:flex-wrap justify-center gap- md:gap-2 min-w-max md:min-w-0"><div class="flex flex-col items-center w-[150px] md:w-auto text-center"><img src="/assets/img/genAiLP/ash.jpeg" alt="Sidharth" class="w-20 h-20 md:w-24 md:h-24"><div class="mt-2"><p class="font-figtree font-medium">Ashish</p><p class="text-gray-600 text-sm font-figtree font-normal">EX: Lido, Co Founder</p><p class="text-gray-600 text-sm font-figtree font-normal">Codekaro</p></div></div><div class="flex flex-col items-center w-[150px] md:w-auto text-center"><img src="https://d31bwppm8yl9g2.cloudfront.net/learner/gs/ishan.svg" alt="Himanshu Srivastava" class="w-20 h-20 md:w-24 md:h-24"><div class="mt-2"><p class="font-figtree font-medium">Himanshu</p><p class="text-gray-600 text-sm font-figtree font-normal">Head of AI Initiatives</p><p class="text-gray-600 text-sm font-figtree font-normal">Codekaro</p></div></div><div class="flex hidden flex-col items-center w-[150px] md:w-auto text-center"><img src="/mdil.png" alt="KVS Dileep" class="w-20 h-20 md:w-24 md:h-24"><div class="mt-2"><p class="font-figtree font-medium">KVS Dileep</p><p class="text-gray-600 text-sm font-figtree font-normal">Head of AI Initiatives</p><p class="text-gray-600 text-sm font-figtree font-normal">codekaro</p></div></div></div></div>
                                <a href="#_" @click="modalOpen=true" class="mt-6 bg-[#F1FE06] text-black px-6 py-3 border border-[#07090166] font-figtree font-normal w-[80%] md:w-[60%] text-center cta-button">Grab Your Spot For ₹99</a></div></div></div>
    </section>
    {{-- logos --}}
    <section class="hidden">
        <div class="w-full py-10 sm:py-20"><div class="w-[90%] sm:w-4/5 mx-auto"><div class=" mb-8"><h3 class="text-sm font-figtree font-medium text-gray-600">PAST CORPORATE TRAININGS</h3><h2 class="text-2xl sm:text-3xl font-mackinac font-medium mt-2">100+ Professionals trained from brands like</h2></div>
        <img src="{{asset('assets/img/genAiLP/alumni-company-image.png')}}" alt="Participant 1" class="  object-cover border- border-white rounded-md">
    </div>
    
    </div>

    </section>
    {{-- career section --}}
    <section>
        <div class="w-full py-10 sm:py-20"><div class="w-full md:w-4/5 mx-auto bg-cover bg-center py-10" style="background-image: url(&quot;/assets/img/genAiLP/mback.svg&quot;);"><p class="font-figtree font-medium text-base text-gray-300 px-4 md:px-8">DON'T MISS OUT</p><h2 class="text-[24px] md:text-[32px] font-medium font-mackinac text-white mb-6 md:mb-12 px-4 md:px-8">AI will change your career</h2><div class="w-full overflow-hidden mb-8"><div class="rfm-marquee-container " style="--pause-on-hover: running; --pause-on-click: running; --width: 100%; --transform: none;"><div class="rfm-marquee" style="--play: running; --direction: normal; --duration: 60.6s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;"><div class="rfm-initial-child-container"><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima2.png" alt="Participant 1" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima3.png" alt="Participant 2" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima4.png" alt="Participant 3" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima5.png" alt="Participant 4" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima6.png" alt="Participant 5" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div></div></div><div class="rfm-marquee" style="--play: running; --direction: normal; --duration: 60.6s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;"><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima2.png" alt="Participant 1" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima3.png" alt="Participant 2" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima4.png" alt="Participant 3" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima5.png" alt="Participant 4" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima6.png" alt="Participant 5" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div></div></div></div><div class="w-full overflow-hidden"><div class="rfm-marquee-container " style="--pause-on-hover: running; --pause-on-click: running; --width: 100%; --transform: none;"><div class="rfm-marquee" style="--play: running; --direction: reverse; --duration: 60.6s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;"><div class="rfm-initial-child-container"><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima6.png" alt="Participant 8" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima5.png" alt="Participant 9" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima4.png" alt="Participant 10" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima3.png" alt="Participant 11" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima2.png" alt="Participant 12" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div></div></div><div class="rfm-marquee" style="--play: running; --direction: reverse; --duration: 60.6s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;"><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima6.png" alt="Participant 8" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima5.png" alt="Participant 9" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima4.png" alt="Participant 10" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima3.png" alt="Participant 11" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div><div class="rfm-child" style="--transform: none;"><div class="mx-2 md:mx-4"><img src="/assets/img/genAiLP/aima2.png" alt="Participant 12" class="w-[395px] h-[115px] md:w-[574px] md:h-[167px] object-cover border-2 border-white rounded-md"></div></div></div></div></div></div></div>
    </section>
    {{-- who should take challenge --}}
    <section>
        <div class="hidden md:block"><div class="w-full py-20 bg-white"><div class="w-[90%] md:w-4/5 mx-auto"><div class="mb-8"><p class="text-sm font-figtree font-medium uppercase tracking-wide text-neutral-500">Are you the right fit?</p><h2 class="text-[24px] md:text-[32px] font-medium font-mackinac text-black">Who should take this challenge?</h2></div><div class="relative h-[487px] w-full border border-gray-400" style="background-image: url(&quot;/assets/img/genAiLP/who1.webp&quot;); background-size: cover; background-position: center center;"><div class="absolute bottom-10 w-full flex flex-col md:flex-row items-center justify-center px-5 gap-6"><div class="w-[90%] md:w-[18%] "><h3 class="text-[18px] md:text-[20px] font-medium text-white font-figtree">Software Professionals</h3><ul class="mt-2 text-[12px] md:text-[16px] text-white "><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Software Engineers</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> DevOps Engineers</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Backend Developers</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Full-Stack Developers</li></ul></div><div class="w-[90%] md:w-[18%] "><h3 class="text-[18px] md:text-[20px] font-medium text-white font-figtree">AI &amp; Data Specialists</h3><ul class="mt-2 text-[12px] md:text-[16px] text-white "><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Data Scientists</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Machine Learning Engineers</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> NLP Specialists</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> AI Researchers</li></ul></div><div class="w-[90%] md:w-[18%] "><h3 class="text-[18px] md:text-[20px] font-medium text-white font-figtree">Tech Leaders</h3><ul class="mt-2 text-[12px] md:text-[16px] text-white "><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> CTOs</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Technical Product Managers</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Tech Founders</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Engineering Managers</li></ul></div><div class="w-[90%] md:w-[18%] "><h3 class="text-[18px] md:text-[20px] font-medium text-white font-figtree">Tech Innovators</h3><ul class="mt-2 text-[12px] md:text-[16px] text-white "><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Startup Founders</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Tech Consultants</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Tech Entrepreneurs</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Product Innovators</li></ul></div><div class="w-[90%] md:w-[18%] "><h3 class="text-[18px] md:text-[20px] font-medium text-white font-figtree">AI Enthusiasts &amp; Learners</h3><ul class="mt-2 text-[12px] md:text-[16px] text-white "><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Tech Hobbyists</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Career Transitioners</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Self-Taught Programmers</li><li class="flex items-center font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg> Engineering Students</li></ul></div></div></div></div></div></div>
        <div class="block md:hidden"><section class="w-full py-8 block sm:hidden bg-white"><div class="w-[90%] mx-auto"><div class="mb-6"><p class="text-sm font-medium uppercase tracking-wide mb-2 text-gray-500">are you the right fit?</p><h2 class="text-[24px] font-mackinac font-normal text-black">Who should take this challenge?</h2></div><ul class="space-y-6"><li class="w-full h-[210px] p-6 text-white border flex flex-col justify-end " style="background-image: url(&quot;/assets/img/genAiLP/mw1.webp&quot;); background-size: cover; background-position: center center;"><h3 class="text-base font-figtree font-medium mb-4">Software Professionals</h3><ul class="space-y-1"><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Software Engineers</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>DevOps Engineers</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Backend Developers</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Full-Stack Developers</li></ul></li><li class="w-full h-[210px] p-6 text-white border flex flex-col justify-end " style="background-image: url(&quot;/assets/img/genAiLP/mw2.webp&quot;); background-size: cover; background-position: center center;"><h3 class="text-base font-figtree font-medium mb-4">AI &amp; Data Specialists</h3><ul class="space-y-1"><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Data Scientists</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Machine Learning Engineers</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>NLP Specialists</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>AI Researchers</li></ul></li><li class="w-full h-[210px] p-6 text-white border flex flex-col justify-end " style="background-image: url(&quot;/assets/img/genAiLP/mw3.webp&quot;); background-size: cover; background-position: center center;"><h3 class="text-base font-figtree font-medium mb-4">Tech Leaders</h3><ul class="space-y-1"><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>CTOs</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Technical Product Managers</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Tech Founders</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Engineering Managers</li></ul></li><li class="w-full h-[210px] p-6 text-white border flex flex-col justify-end " style="background-image: url(&quot;/assets/img/genAiLP/mw4.webp&quot;); background-size: cover; background-position: center center;"><h3 class="text-base font-figtree font-medium mb-4">Tech Innovators</h3><ul class="space-y-1"><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Startup Founders</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Tech Consultants</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Tech Entrepreneurs</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Product Innovators</li></ul></li><li class="w-full h-[210px] p-6 text-white border flex flex-col justify-end " style="background-image: url(&quot;/assets/img/genAiLP/mw5.webp&quot;); background-size: cover; background-position: center center;"><h3 class="text-base font-figtree font-medium mb-4">AI Enthusiasts &amp; Learners</h3><ul class="space-y-1"><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Tech Hobbyists</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Career Transitioners</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Self-Taught Programmers</li><li class="flex items-center text-sm font-figtree font-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="text-white mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg>Engineering Students</li></ul></li></ul></div></section></div>
    </section>
    <section>
        <section class="my-24 mb-32">
            <div class="w-[90%] md:w-4/5 mx-auto text-center">
                <div class="text-left mb-8"><h3 class="text-sm font-figtree font-medium text-neutral-600 uppercase">Curriculum</h3><h2 class="text-[24px] sm:text-[32px] font-medium font-mackinac">What will you learn in 3 days?</h2></div>
                <div class="flex  text-left justify-center flex-col md:flex-row items-center md:items-start  gap-4">
                <div class="border border-neutral-300  bg-white w-full  " >
                    <div class="p-3">
                        <p class="text-sm text-neutral-600 my-2">Day 01</p>
                        <h1 class="font-medium text-lg">GenAI Basics & Building AI Chatbot</h1>
                        <ul class="mt-2 list-disc ml-4 text-neutral-700">
                            <li>Learn how LLMs like GPT work?</li>
                            <li>Prompt engineering</li>
                            <li>Control Flow Essentials</li>
                            <li>Building AI Chatbot</li>
                            <li>Adding Knowledgebase to Bot</li>
                        </ul>
                    </div>
                    <div class="border-t border-neutral-300 bg-cover bg-center bg-[#f9fee " style="background-image: url(&quot;/assets/img/genAiLP/back.svg&quot;);">
                        <div class="p-3 ">
                            <p class="text-neutral-600 text-xs">Tools you will learn</p>
                            <div class="flex gap-4 items-center">
                                <img src="https://assets.nextleap.app/images/openai_black_wordmark_290820252018.svg"
                                    alt="" class="mt-2 h-6">
                                {{-- <img src="https://assets.nextleap.app/images/deepgram_case_study_icon_100920251653.svg" alt="" class="h-6 mt-2"> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border border-neutral-300 bg-white  w-full">
                    <div class="p-3">
                        <p class="text-sm text-neutral-600 my-2">Day 02</p>
                        <h1 class="font-medium text-lg">Deep Dive on MCPs Server</h1>
                        <ul class="mt-2 list-disc ml-4 text-neutral-700">
                            <li>Understanding MCP Server</li>
                            <li>Real world usecases & Case Studies</li>
                            <li>Building own MCP server</li>
                            <li>Adding Tools</li>
                            <li>Connecting MCP server with Claude</li>
                        </ul>
                    </div>
                    <div class="border-t border-neutral-300 bg-cover bg-center bg-[#f9fee " style="background-image: url(&quot;/assets/img/genAiLP/back.svg&quot;);">
                        <div class="p-3 ">
                            <p class="text-neutral-600 text-xs">Tools you will learn</p>
                            <div class="flex gap-4 items-center">
                                <img src="https://assets.nextleap.app/images/claudeai_case_study_icon_100920251653.svg"
                                    alt="" class="mt-2 h-6">
                                
                                {{-- <img src="https://framerusercontent.com/images/Z7lJ0WDBTh8Bb02fDCRxUodgTI.png" alt="" class="h-6 mt-2"> --}}
                            </div>
                        </div>
                    </div>

                </div>


                <div class="border border-neutral-300  bg-white w-full ">
                    <div class="p-3">
                        <p class="text-sm text-neutral-600 my-2">Day 03</p>
                        <h1 class="font-medium text-lg">LangChain & Agentic AI</h1>
                        <ul class="mt-2 list-disc ml-4 text-neutral-700">
                            <li>Fundamentals of Agentic Ai</li>
                            <li>LangChain Fundamentals</li>
                            <li>LangGraph Basics</li>
                            <li>Building an Agentic AI System</li>
                            <li>Final Project: AI Agent</li>
                
                        </ul>
                    </div>
                    <div class="border-t border-neutral-300 bg-cover bg-center bg-[#f9fee " style="background-image: url(&quot;/assets/img/genAiLP/back.svg&quot;);">
                        <div class="p-3 ">
                            <p class="text-neutral-600 text-xs">Tools you will learn</p>
                            <div class="flex gap-4 items-center">
                                <img src="https://assets.nextleap.app/images/langchain_case_study_icon_100920251653.svg"
                                    alt="" class="mt-2 h-6">
                                {{-- <img src="https://assets.nextleap.app/images/deepgram_case_study_icon_100920251653.svg" alt="" class="h-6 mt-2"> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
            
    </section>
    {{-- roles --}}
    <section>

        {{-- feedbacks --}}
        <section>
            <div class="w-full bg-white py-6 sm:py-12 relative"><div class="w-11/12 sm:w-4/5 mx-auto"><div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6"><div class="mb-4 sm:mb-0"><p class="text-sm font-figtree font-medium text-neutral-600 uppercase">Hear it From Them</p><h2 class="text-[24px] sm:text-[32px] font-medium text-black md:mb-4 font-mackinac flex items-center">Ambitious people <span><img src="/assets/img/genAiLP/hea.svg" alt="heart" class="w-[50px] h-[50px] md:h-[80px] md:w-[80px]"></span> Codekaro</h2></div><div class=" gap-1 hidden md:flex"></div></div><div class="relative w-full flex overflow-x-auto no-scrollbar"><div class="flex" style="gap: 16px;"><div class="w-[300px] h-[327px] p-4 border border-gray-300 flex-shrink-0 bg-white flex flex-col items-start justify-between"><p class="text-sm text-gray-800 mb-4">My day doesn't do without thanks to codekaro webinar attendance experience. I express desk gratitude to Mr. Ashish and all experts who have presented the knowledge. I'm already bootstrapped and dived into refining my skills.</p><h3 class="font-medium text-base text-gray-900">Jayaasrinnivas Patri</h3></div><div class="w-[300px] h-[327px] p-4 border border-gray-300 flex-shrink-0 bg-white flex flex-col items-start justify-between"><p class="text-sm text-gray-800 mb-4">Thanks again everyone at  codekaro Team and the whole community! You are such examples of commitment, joy, and dedication to help people believe that they can do what they couldn't do before! I will see how to apply what you have taught in my specific field of minimizing the amount of manual work to draw out beyond translation insights from ancient biblical texts.</p><h3 class="font-medium text-base text-gray-900">Simil Simon</h3></div><div class="w-[300px] h-[327px] p-4 border border-gray-300 flex-shrink-0 bg-white flex flex-col items-start justify-between"><p class="text-sm text-gray-800 mb-4">Great great great session! Actually enjoyed jumping into the world of Al. It was actually an eye opening session! It was really a BOOM! Hat's off to the team!</p><h3 class="font-medium text-base text-gray-900">Parmeet Singh Khanuja</h3></div><div class="w-[300px] h-[327px] p-4 border border-gray-300 flex-shrink-0 bg-white flex flex-col items-start justify-between"><p class="text-sm text-gray-800 mb-4">Massive thanks to ashish, himanshu, and the entire codekaro team for absolutely over-delivering in today's Gen Al Mastermind session! The insights and value were next-level-truly exceeded expectations. Can't wait for what's next!</p><h3 class="font-medium text-base text-gray-900">Nikhil Ratakonda</h3></div><div class="w-[300px] h-[327px] p-4 border border-gray-300 flex-shrink-0 bg-white flex flex-col items-start justify-between"><p class="text-sm text-gray-800 mb-4">I want to extend my heartfelt thanks for organizing the Generative Al Mastermind workshop. Your dedication, expertise, and support made the experience truly enriching. I appreciate all the effort you put into creating such an engaging learning environment. Thank you for inspiring us and sharing your knowledge!</p><h3 class="font-medium text-base text-gray-900">Saheesh wilson</h3></div><div class="w-[300px] h-[327px] p-4 border border-gray-300 flex-shrink-0 bg-white flex flex-col items-start justify-between"><p class="text-sm text-gray-800 mb-4">Thank you so much for the last two days of Al Mastermind classes! The sessions from 8 PM were incredibly enlightening and useful. I really appreciate all the insights and knowledge shared. Looking forward to more learning experiences with this amazing community!</p><h3 class="font-medium text-base text-gray-900">Chetan Gandhi</h3></div></div></div></div></div>
        </section>
        
    </section>
    {{-- faq's --}}
    <section class="my-24 mb-32">
            <div class="w-[90%] md:w-4/5 mx-auto text-center">
                <div class="text-left mb-8"><h3 class="text-sm font-figtree font-medium text-neutral-600 uppercase">More Doubts?</h3><h2 class="text-[24px] sm:text-[32px] font-medium font-mackinac">Frequently Asked Questions</h2></div>
                <div class="my-5 text-left space-y-3" x-data="{ 
            activeQuestion: null, 
            toggleQuestion(id) { 
                this.activeQuestion = (this.activeQuestion === id) ? null : id 
            },
            faqs: [
                  {
    question: 'What will I learn in this Generative AI workshop?',
    answer: 'You’ll learn how to use Generative AI tools, master prompt engineering, and build real-world AI applications step by step.'
  },
  {
    question: 'Do I need prior AI or coding experience to join?',
    answer: 'No experience is required. This workshop is beginner-friendly and designed to take you from basics to building your own AI tools.'
  },
  {
    question: 'When do the classes start?',
    answer: 'The classes will begin as per the official schedule shared after enrollment.'
  },
  {
    question: 'What are the class timings?',
    answer: 'Live sessions are held in the evening. The exact timing will be shared with your batch on enrollment.'
  },
  {
    question: 'What is the duration of each class?',
    answer: 'Each session lasts about 1 hour, followed by an interactive Q&A and hands-on implementation segment.'
  },
  {
    question: 'How will the workshop sessions be conducted?',
    answer: 'All sessions are conducted live with real-time demos, interactive discussions, and guided project building.'
  },
  {
    question: 'What makes this workshop different from others?',
    answer: 'Unlike theory-based sessions, this workshop is fully hands-on. You’ll build deployable AI tools, get feedback, and learn practical frameworks used by professionals.'
  },
  {
    question: 'Will there be projects during the workshop?',
    answer: 'Yes, you’ll work on real-world Generative AI projects such as AI chatbots, automation tools, and content generation apps.'
  },
  {
    question: 'What tools or software do I need?',
    answer: 'You only need a PC or laptop with internet access. All tools used during the workshop are free and cloud-based.'
  },
  {
    question: 'Will I be able to use these skills immediately after the workshop?',
    answer: 'Yes, every session focuses on practical applications, and you’ll finish with ready-to-use AI tools and workflows.'
  },
  {
    question: 'What if I can’t attend a session live?',
    answer: 'No worries! All sessions are recorded and available exclusively to VIP members with one year of access from the program start date.'
  },
  {
    question: 'When will I receive the workshop recordings?',
    answer: 'If you’re a VIP member, you’ll get access to all recordings within 24 hours after the entire bootcamp is completed.'
  },
  {
    question: 'What is VIP membership, and what benefits does it offer?',
    answer: 'VIP membership includes one year of access to all recordings, bonus AI projects, premium templates, and advanced workflow resources.'
  },
  {
    question: 'How can I access my VIP perks?',
    answer: 'All VIP perks, including recordings, projects, and bonus materials, can be accessed through your exclusive VIP dashboard.'
  },
  {
    question: 'Does this workshop provide a certificate?',
    answer: 'Yes, you’ll receive a verified certificate upon completing the live sessions and final project exercises.'
  },
  {
    question: 'When and how will I receive my certificate?',
    answer: 'Certificates are issued within a few days after completion and can be downloaded from the student dashboard.'
  },
  {
    question: 'Do you provide job or career support?',
    answer: 'While this is a skill-focused workshop, we provide guidance on applying AI tools effectively in your business or professional work.'
  },
  {
    question: 'Can I get a refund if I can’t continue?',
    answer: 'As with any online purchase experience, certain terms and conditions govern our refund policy. When you purchase a program on Codekaro, you agree to our Terms & Conditions and Refund Policy.'
  },
  {
    question: 'I paid the enrollment fee but didn’t get the confirmation email.',
    answer: 'Please wait for 5–10 minutes for the confirmation email to arrive at your registered email address. If you don’t see it, search your inbox for the subject line — \'Complete the onboarding process for Gen AI Bootcamp\' — to locate it.'
  },
  {
    question: 'I have paid the enrollment fee but the admin hasn’t accepted my WhatsApp request.',
    answer: 'We do not accept requests immediately. Registered members are added in phases, so please be patient. Your registered number (associated with WhatsApp) will be added eventually.'
  },
  {
    question: 'How can I refer a friend to this workshop?',
    answer: 'You can invite friends using your referral link after registration. Both of you may receive exclusive rewards or discounts.'
  }
            ]
        }">
                    <!-- Dynamic FAQ Items -->
                    <template x-for="(faq, index) in faqs" :key="index">
                        <div class="border border-gray-200 rounded-xlp overflow-hidden transition-shadow">
                            <button @click="toggleQuestion(index)" class="flex justify-between items-center w-full px-5 py-4 text-left bg-white transition-colors text-gray-900">
                                <span class="sm:text-lg font-medium" x-text="faq.question"></span>
                                <svg class="w-5 h-5 text-orange-5 transform transition-transform flex-shrink-0 ml-3" :class="{'rotate-180': activeQuestion === index}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                            <div x-show="activeQuestion === index" x-collapse x-cloak class="p-4 text-gray-700">
                                <p x-text="faq.answer"></p>
                            </div>
                        </div>
                    </template>

                </div>
            </div>
    </section>
    <div class="fixed bottom-0 left-0 w-full bg-white border-t border-gray-300 shadow-lg z-50"><div class="w-[90%] md:w-[80%] mx-auto py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between space-y-4 sm:space-y-0"><div class="w-full flex flex-row md:items-start items-center justify-center sm:justify-start space-y-0 md:space-y-2 sm:space-x-4 gap-3"><div class="flex flex-col md:items-start"><div class="flex flex-row sm:flex-col sm:items-start sm:space-y-1 items-center"><p class="text-[18px] sm:text-[28px] font-mackinac font-medium text-black leading-tight flex items-center"><span class="text-black text-[22px] sm:text-[28px] font-bold">₹99</span> <span class="text-gray-500 line-through text-[16px] sm:text-[20px] ml-1">₹2,290</span></p><p class="text-[14px] sm:text-[18px] font-figtree flex items-center ml-2 sm:ml-0 sm:items-start"><span role="img" aria-label="alarm-clock" class="mr-1">⏳</span>Offer Ends in: <span class="font-semibold ml-1 sm:ml-0"><span x-text="minutes"></span>:<span x-text="seconds.toString().padStart(2, '0')"></span></span></p></div></div></div><a href="#_" @click="modalOpen=true" class="text-center w-full md:w-auto bg-[#FAFF00] hover:bg-[#E5E500] text-black font-medium py-2 px-8 border border-black text-base sm:text-xl font-figtree cta-button">Grab Your Spot For just ₹99</a></div></div>




</body>
</html>