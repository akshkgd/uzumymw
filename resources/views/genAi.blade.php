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

<body class="" x-data="{ 
    modalOpen: false, 
    vipUpgrade: false,
    minutes: 7,
    seconds: 3,
    init() {
        setInterval(() => {
            if (this.seconds > 0) {
                this.seconds--;
            } else {
                if (this.minutes > 0) {
                    this.minutes--;
                    this.seconds = 59;
                }
            }
        }, 1000);
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
                <!-- <button @click="modalOpen=false" class="absolute top-4 right-4 z-30 flex items-center justify-center px-3 py-3 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span>Close</span>
                </button> -->

                <!-- Content -->
                <div class="relative flex flex-wrap items-center justify-center w-full h-full px-0 sm:px-8 overflow-y-auto z-50">
                    <div class="relative w-full max-w-md mx-auto py-8">
                        <div class="relative text-center p-3 sm:p-6">
                            <div class="flex flex-col mb-6 space-y- text-center">
                                <!-- <div class="text-center">
                                    <svg class="text-white rotate-90 mx-auto mb-5" fill="black" width="24" height="24" viewBox="0 0 32 32" version="1.1" aria-labelledby="codekaro" aria-hidden="false" style="flex-shrink:0"><desc lang="en-US">Codekaro logo</desc><title id="unsplash-home">Codekaro</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg>
                                </div> -->
                                <h1 class="text-xl font-semibold tracking-tight font-sans flex gap-1 justify-center">Join<span class="relative"><img src="https://codekaro.in/assets/img/live_kids.svg" alt="" class="absolute -bottom-1"> Live</span> Frontend Crash Course!</h1>
                                <p class="text-sm text-red-600 -mt- font-medium">Live class on 10th Sept | 08:00 PM</p>
                            </div>
                            <form class="space-y-3 text-left" action="https://codekaro.in/course-enrollment-auto" method="POST">
                                <input type="hidden" name="_token" value="H2GL22rHHFEHaWOpgnEiyAc1aQdDRVAHZaJ8OzxK">                                <input type="hidden" name="source" value="">
                                <input type="hidden" name="medium" value="">
                                <input type="hidden" name="campaign" value="">
                                <input type="hidden" name="courseId" value="150">
                                <div class="space-y-1">
                                    <!-- <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="name">Full Name</label> -->
                                    <input name="name"  value="Ashish Shukla"  type="text" id="name" class="flex w-full rounded-lg border text-base  border-neutral-200 bg-white px-3 py-3  ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-semibold placeholder:text-neutral-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:border-neutral-700 focus-visible:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Full Name">
                                </div>
                                <div class="space-y-1">
                                    <!-- <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="email">Email Address</label> -->
                                    <input name="email"  value="myselfashishshukla@gmail.com"  type="text" id="name" class="flex w-full rounded-lg border  border-neutral-200 bg-white px-3 py-3  ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-semibold placeholder:text-neutral-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:border-neutral-700 focus-visible:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Email Address">
                                </div>
                                <div class="space-y-1">
                                    <!-- <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="whatsapp">WhatsApp Number</label> -->
                                    <input name="mobile"  value="7355191435"  type="text" id="name" class="flex w-full rounded-lg border  border-neutral-200 bg-white px-3 py-3  ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-semibold placeholder:text-neutral-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:border-neutral-700 focus-visible:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" placeholder="WhatsApp Number">
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
                                <div class="hidde space-y-1 mt-3  border-2 border-green-500 bg-orange-5 rounded-xl p-4 pb-3">
                                    <div class=" gap-2 mb-3">
                                        
                                        <h2 class="font-semibold">VIP Upgrade <span class="text-green-600">(Most Loved)</span></h2>
                                        <p class="text-sm">95% learners choose this!</p>
                                    </div>
                                    
                                    <p class="text-sm flex gap-1">1. Get Live Bootcamp Recordings</p>
                                    <p class="text-sm flex gap-1">2. Get LinkedIn Shareable Certificate</p>
                                    <p class="text-sm flex gap-1">3. Get Javascript interview Prep</p>



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
                                            <span class="text-l font-semibold">₹199.00</span>
                                            <span class="text-sm text-neutral-500 line-through px-1">₹2499</span>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer mt-2">
                                            <input type="hidden" name="recordingsCheckbox" :value="vipUpgrade ? '1' : '0'">
                                            <input type="checkbox" id="myCheckbox" x-model="vipUpgrade" class="sr-onl peer">
                                            <span class="ml-3 text-sm font-medium text-neutral-700">Add VIP Upgrade for ₹199</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="flex flex-col-reverse sm:flex-row sm:justify-between sm:space-x-2">
                                    <button type="submit" class=" inline-flex gap-1 items-center justify-center rounded-xl bg-orange-600 px-4 py-4 w-full font-mediu text-white ring-offset-white transition-colors hover:bg-orange-700 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-neutral-950 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                                        Join Frontend Crash Course for just  <span x-text="vipUpgrade ? ' ₹398 ' : ' ₹199 '"></span>
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

    <div class="max-w-3xl mx-auto ">
        <div class="">
            {{-- <img class="h-44" src="https://course.growthschool.io/images/Frame-349-p-1080.png" alt=""> --}}
        </div>
        <div class="text-center mt-12 p-3">
            <div class="border inline-block px-5 py-3 rounded-full mb-5 bg-orange-50 text-orange-800 border-orange-300">For Busy working professionals</div>
            <h1 class="text-2xl md:text-3xl font-semibold text-neutral-800 ck-sans -tracking-[0.10em]">AI Skills That Will Make You Irreplaceable: Master <span class="text-orange-600 underline">Python & Agentic
                    AI in just 3 days</span> to Become 10X More Valuable in Your Career</h1>
            <p class="text-l mt-5 text-neutral-700 px-10">Master Gen AI in 6 Hours, from API Integration to Building Gen AI Agents. Boost your engineering skills with hands-on learning, whether you're a beginner or already working with Gen AI.</p>
            {{-- <div class="flex mt-5 gap-4 text-lef">
                <div class="bg-[#552419] text-white px-5 w-1/2 py-3 rounde">From 4th - 6th Nov</div>
                <div class="bg-[#552419] text-white px-5 w-1/2 py-3 rounde">8 PM - 9 PM (IST)</div>
            </div> --}}

            <div class="mt-5 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 hidde sm:grid">
                        <div class="bg-orange-100 rounded-lg p-3 ring-4 ring-orange-200 text-orange-800 font-bold text-lg  text-center"> From 10th Sept</div>
                        <div class="bg-orange-100 rounded-lg p-3 ring-4 ring-orange-200 text-orange-800 font-bold text-lg  text-center"> 08:00 PM - 09:00 PM</div>
                        <div class="bg-orange-100 rounded-lg p-3 ring-4 ring-orange-200 text-orange-800 font-bold text-lg  text-center">Live session</div>
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
        <div class="max-w-6xl mx-auto my-12 hidde">
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
        <div class="max-w-5xl mx-auto text-white text-center hidden">
                <p class="mt-5">EXPERT-LED LEARNING</p>
                <h1 class="text-2xl font-semibold ck-sans -tracking-[.10em]">Learn from the Top 1% in AI</h1>
            
                <div class="flex">
                <div class="borde w-60 p-2">
                    <img src="{{asset('assets/img/ashish.jpeg')}}" alt="" class="h-60 w-60 object-cover rounded-2xl">
                </div>
            </div>
            </div>
    </section>
{{-- faq json --}}
<script>
    let faqs = [
  {
    "question": "Do I need prior AI experience to join this workshop?",
    "answer": "No. This workshop is beginner-friendly and designed to help both non-tech and tech professionals quickly understand and apply Generative AI. We’ll start from the basics and move step by step toward building real-world AI tools."
  },
  {
    "question": "How will the workshop sessions be conducted?",
    "answer": "All sessions are LIVE on Zoom — fully interactive with coding demos, Q&A, and real-time project implementation. This is not a webinar. You’ll actually be building AI tools with us during the sessions."
  },
  {
    "question": "Will I receive recordings of the sessions?",
    "answer": "Yes! You’ll get lifetime access to session recordings and resources so you can revisit and practice anytime."
  },
  {
    "question": "What makes this different from other AI workshops?",
    "answer": "Most workshops stop at theory — we go hands-on. You’ll build AI tools from scratch, get personal feedback, and learn frameworks used by real startups and professionals."
  },
  {
    "question": "Will I be able to apply these skills immediately after the workshop?",
    "answer": "Absolutely. Every session is designed around practical implementation, so by the end, you’ll have deployable AI tools and workflows ready to use in your business or career."
  },
  {
    "question": "Is there post-workshop support available?",
    "answer": "Yes! You’ll get access to our community and mentor support for guidance, code reviews, and help even after the workshop ends."
  },
  {
    "question": "What if I can’t attend the full workshop?",
    "answer": "Don’t worry — all sessions are recorded and shared with you. You can catch up anytime and still get all resources, templates, and project materials."
  }
]

</script>

    <section class="my-24">
            <div class="max-w-5xl mx-auto text-center">
                <p>EXPERT-LED LEARNING</p>
                <h1 class="text-2xl font-bold ck-sans -tracking-[.10em]">Learn from the Top 1% in AI</h1>
            
                <div class="flex gap-5 justify-center text-left">
                <div class="border w-60 p-2 mt-5">
                    <img src="{{asset('assets/img/ashish.jpeg')}}" alt="" class="h-44 w-60 object-cover">
                    <h1 class="font-medium mt-3 ">Ashish Shukla</h1>
                    <p class="text-sm">Ex. SDE Lido Learning</p>
                    <h1>Founder Codekaro</h1>
                </div>
                <div class="border w-60 p-2 mt-5">
                    <img src="{{asset('assets/img/esha.jpeg')}}" alt="" class="h-44 w-60 object-cover">
                    <h1 class="font-medium mt-3">Esha Gunjekar</h1>
                    <p class=" text-sm">Ex. SDE Lido Learning</p>
                    <h1>Head of AI Initiatives</h1>
                </div>
            </div>
            </div>
            
    </section>

    <section class="my-24">
            <div class="max-w-5xl mx-auto text-center">
                <p>More Doubts?</p>
                <h1 class="text-2xl font-bold ck-sans -tracking-[.10em]">Frequently Asked Questions</h1>
            
                <div class="my-5 text-left space-y-3" x-data="{ 
            activeQuestion: null, 
            toggleQuestion(id) { 
                this.activeQuestion = (this.activeQuestion === id) ? null : id 
            },
            faqs: [
                {
                    question: 'Do I need prior AI experience to join this workshop?',
                    answer: 'No. This workshop is beginner-friendly and designed to help both non-tech and tech professionals quickly understand and apply Generative AI. We\'ll start from the basics and move step by step toward building real-world AI tools.'
                },
                {
                    question: 'How will the workshop sessions be conducted?',
                    answer: 'All sessions are LIVE on Zoom — fully interactive with coding demos, Q&A, and real-time project implementation. This is not a webinar. You\'ll actually be building AI tools with us during the sessions.'
                },
                {
                    question: 'Will I receive recordings of the sessions?',
                    answer: 'Yes! You\'ll get lifetime access to session recordings and resources so you can revisit and practice anytime.'
                },
                {
                    question: 'What makes this different from other AI workshops?',
                    answer: 'Most workshops stop at theory — we go hands-on. You\'ll build AI tools from scratch, get personal feedback, and learn frameworks used by real startups and professionals.'
                },
                {
                    question: 'Will I be able to apply these skills immediately after the workshop?',
                    answer: 'Absolutely. Every session is designed around practical implementation, so by the end, you\'ll have deployable AI tools and workflows ready to use in your business or career.'
                },
                {
                    question: 'Is there post-workshop support available?',
                    answer: 'Yes! You\'ll get access to our community and mentor support for guidance, code reviews, and help even after the workshop ends.'
                },
                {
                    question: 'What if I can\'t attend the full workshop?',
                    answer: 'Don\'t worry — all sessions are recorded and shared with you. You can catch up anytime and still get all resources, templates, and project materials.'
                }
            ]
        }">
                    <!-- Dynamic FAQ Items -->
                    <template x-for="(faq, index) in faqs" :key="index">
                        <div class="border border-gray-200 rounded-xl overflow-hidden transition-shadow">
                            <button @click="toggleQuestion(index)" class="flex justify-between items-center w-full px-5 py-4 text-left bg-white transition-colors text-gray-900">
                                <span class="sm:text-lg font-medium" x-text="faq.question"></span>
                                <svg class="w-5 h-5 text-orange-500 transform transition-transform flex-shrink-0 ml-3" :class="{'rotate-180': activeQuestion === index}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                            <div x-show="activeQuestion === index" x-collapse x-cloak class="p-4 text-gray-700">
                                <p x-text="faq.answer"></p>
                            </div>
                        </div>
                    </template>

                </div>
            </div>
    </section>
    <!-- mobile cta -->
    
    <div class="fixed flex items-center px-4 justify-between z-20  py-4 bottom-0 h-18 bg-black/50 backdrop-blur-xl rounded-t-2xl md:rounded-none w-full sm:hidden">
        <div class="text-white">
            <p><span class="font-bold text-sm">₹199</span> <span class="text-sm line-through text-neutral-300">1999</span></p>
            <p class="text-sm font-light"> <span x-text="minutes"></span>m : <span x-text="seconds.toString().padStart(2, '0')"></span>s Left</p>
        </div>
        <!-- <button @click="modalOpen=true" class=" bg-green-600 py-2 px-5 rounded-xl animate-bounc text-white font-medium">Join Bootcamp Now</button> -->
         <div class="overflow-hidde">
            <a href="#_" @click="modalOpen=true" class="relative block text-center rounded-3xl px-5 py-3 overflow-hidden group bg-green-600 text-white ring-green-400 transition-all ease-out duration-300">
                <span class="absolute left-0 w-8 h-32 -mt-12 transform -translte-x-[-100%] bg-white opacity-20  rotate-12 button-animate">
                    <span></span>
                    <span></span>
                </span>
                
    
                <span class="relative ">Join Now for ₹199</span>
              </a>
              
              <style>
                .button-animate {
                  animation-name: slide;
                  animation-duration: 2s;
                  animation-iteration-count: infinite;
                  animation-direction: normal;
                }
              
                @keyframes  slide {
                  100%{
                    transform: translate(600%);
                  }
                }
              </style>
         </div>
    </div>
    {{-- mobile cta ends --}}

    {{-- big screen cta  --}}
    <div class="fixed flex px-20 items-center px- justify-between z-20  py-4 bottom-0 h-18 bg-black/50 backdrop-blur-xl rounded-t-2xl md:rounded-none w-full sm:hidde">
        <div class="text-white">
            <p><span class="font-bold text-xl">₹199</span> <span class="text-sm line-through text-neutral-300">1999</span></p>
            <p class="text-s font-light">Offer ends in <span x-text="minutes"></span>m : <span x-text="seconds.toString().padStart(2, '0')"></span></p>
        </div>
        <!-- <button @click="modalOpen=true" class=" bg-green-600 py-2 px-5 rounded-xl animate-bounc text-white font-medium">Join Bootcamp Now</button> -->
         <div class="overflow-hidde">
            <a href="#_" @click="modalOpen=true" class="relative block text-center rounded-xl px-5 py-3 overflow-hidden group bg-green-600 text-white ring-green-400 transition-all ease-out duration-300">
                <span class="absolute left-0 w-8 h-32 -mt-12 transform -translte-x-[-100%] bg-white opacity-20  rotate-12 button-animate">
                    <span></span>
                    <span></span>
                </span>
                
    
                <span class="relative ">Grab your Spot now for ₹199</span>
              </a>
              
              <style>
                .button-animate {
                  animation-name: slide;
                  animation-duration: 2s;
                  animation-iteration-count: infinite;
                  animation-direction: normal;
                }
              
                @keyframes  slide {
                  100%{
                    transform: translate(600%);
                  }
                }
              </style>
         </div>
    </div>
    {{-- big screen cta ends --}}





</body>

</html>
