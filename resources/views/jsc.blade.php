<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Javascript in just 2 Hours!</title>
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Learn Javascript in just 2 Hours!">
    <meta property="og:description" content="Master exactly what matters in javascript & Start Your Journey Toward a High-Paying Career.">
    <meta property="og:image" content="{{ asset('assets/img/js.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Learn Javascript in just 2 Hours!">
    <meta name="twitter:description" content="Master exactly what matters in javascript & Start Your Journey Toward a High-Paying Career.">
    <meta name="twitter:image" content="{{ asset('assets/img/js.webp') }}">
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    
    <style>
        .jobs img{
            height: 28px;
            display: inline-block;
            filter: grayscale(100);
        }

    </style>
</head>
<body class="select-non bg-neutral-95 font-manrop " x-data="{ 
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
                                <h1 class="text-xl font-semibold tracking-tight font-sans flex gap-1 justify-center">Join<span class="relative"><img src="../assets/live_kids.svg" alt="" class="absolute -bottom-1"> Live</span> Javascript Crash Course!</h1>
                                <p class="text-sm text-red-600 -mt- font-medium">Live class on 16th July | 07:00 PM</p>
                            </div>
                            <form class="space-y-3 text-left" action="{{ route('course-enrollment-auto') }}" method="POST">
                                @csrf
                                <input type="hidden" name="source" value="{{ app('request')->input('utm_source') }}">
                                <input type="hidden" name="medium" value="{{ app('request')->input('utm_medium') }}">
                                <input type="hidden" name="campaign" value="{{ app('request')->input('utm_campaign') }}">
                                <input type="hidden" name="courseId" value="131">
                                <div class="space-y-1">
                                    <!-- <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="name">Full Name</label> -->
                                    <input name="name" @auth value="{{ Auth::user()->name }}" @endauth type="text" id="name" class="flex w-full rounded-lg border text-base  border-neutral-200 bg-white px-3 py-3  ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-semibold placeholder:text-neutral-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:border-neutral-700 focus-visible:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Full Name">
                                </div>
                                <div class="space-y-1">
                                    <!-- <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="email">Email Address</label> -->
                                    <input name="email" @auth value="{{ Auth::user()->email }}" @endauth type="text" id="name" class="flex w-full rounded-lg border  border-neutral-200 bg-white px-3 py-3  ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-semibold placeholder:text-neutral-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:border-neutral-700 focus-visible:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Email Address">
                                </div>
                                <div class="space-y-1">
                                    <!-- <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="whatsapp">WhatsApp Number</label> -->
                                    <input name="mobile" @auth value="{{ Auth::user()->mobile }}" @endauth type="text" id="name" class="flex w-full rounded-lg border  border-neutral-200 bg-white px-3 py-3  ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-semibold placeholder:text-neutral-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:border-neutral-700 focus-visible:ring-neutral-200 disabled:cursor-not-allowed disabled:opacity-50" placeholder="WhatsApp Number">
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
                                    <button type="submit" class=" inline-flex gap-1 items-center justify-center rounded-xl bg-neutral-950 px-4 py-4 w-full font-medium text-white ring-offset-white transition-colors hover:bg-neutral-900 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-neutral-950 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                                        Start Bootcamp for just  <span x-text="vipUpgrade ? ' ₹298 ' : ' ₹99 '"></span>
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

    <!-- mobile cta -->
    
    <div class="fixed flex items-center px-4 justify-between z-20  py-3 bottom-0 h-18 bg-black  rounded-t-2xl w-full sm:hidden">
        <div class="text-white">
            <p><span class="font-bold text-sm">₹99</span> <span class="text-sm line-through text-neutral-300">1999</span></p>
            <p class="text-sm font-light"> <span x-text="minutes"></span>m : <span x-text="seconds.toString().padStart(2, '0')"></span>s Left</p>
        </div>
        <!-- <button @click="modalOpen=true" class=" bg-green-600 py-2 px-5 rounded-xl animate-bounc text-white font-medium">Join Bootcamp Now</button> -->
         <div class="overflow-hidde">
            <a href="#_" @click="modalOpen=true" class="relative block text-center rounded-3xl px-5 py-2 overflow-hidden group bg-green-500 text-white ring-green-400 transition-all ease-out duration-300">
                <span class="absolute left-0 w-8 h-32 -mt-12 transform -translte-x-[-100%] bg-white opacity-20  rotate-12 button-animate">
                    <span></span>
                    <span></span>
                </span>
                
    
                <span class="relative ">Join Crash course for ₹99</span>
              </a>
              
              <style>
                .button-animate {
                  animation-name: slide;
                  animation-duration: 2s;
                  animation-iteration-count: infinite;
                  animation-direction: normal;
                }
              
                @keyframes slide {
                  100%{
                    transform: translate(600%);
                  }
                }
              </style>
         </div>
    </div>
<div class="w-full overflow-hidde">
    <!-- promotion -->
    <div class="bg-violet-600 text-white py-3 hidde">
        <div class="relative overflow-hidden w-full ">
  <!-- Duplicated content for seamless loop -->
  <div class="flex whitespace-nowrap gap-20 animate-marquee text-lg">
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
    <p>Limited Period Offer ★ Flat 90% Off ★</p>
  </div>
</div>

<style>
  @keyframes marquee {
    0% {
      transform: translateX(0%);
    }
    100% {
      transform: translateX(-100%);
    }
  }

  .animate-marquee {
    animation: marquee 20s linear infinite;
  }
</style>
 
    </div>

    <!-- promotion ends -->
    <!-- hero section -->
     <div class="bg-black h-screen sm:h-auto">
        <div class="max-w-3xl mx-auto bg-black">
            <div class="flex justify-center  items-center gap-2 pt-10 text-white sm:pt-12">
            <div class="border- border-neutral-400  text-lg font-medium  ">Codekaro</div>
            <div class="border-r border-neutral-400 h-full text-transparent">.</div>
            <div class="borde border-neutral-400 inline-flex gap-2 pl-2  rounded-xl items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
</svg>
                <div>
                    <p class="text-sm font-light">LinkedIn</p>
                    <p class="text-sm -mt-1">Top Startup 2023</p>
                </div>
            </div>
        </div>
            <div class="py-12 sm:pb-32 px-2 sm:px-4 text-center">
                <h1 class="text-white font-manrope  text-3xl sm:text-4xl font-semibold leadin-10"><span class="text-amber-400">Learn Javascript in just 2 Hours</span> - Start Your Journey Toward a <span class="underline decoration-amber-400">High-Paying Career</span></h1>
                <!-- <p class="text-white mt-4 text-lg">Build your career In Front End or Full Stack, Start learning now to Secure a Minimum 8 LPA Package or Salary Hike Upto 87% Without Applying On Job Portals</p> -->
                <div class="mt-2 sm:mt-7 bg-neutral-5 rounded-xl p-4">
                    <div class=" grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 hidden sm:grid">
                        <div class="bg-neutral-900 rounded-lg p-3 ring-4 ring-neutral-800 text-white font-bold text-lg  text-center"> On 16th July</div>
                        <div class="bg-neutral-900 rounded-lg p-3 ring-4 ring-neutral-800 text-white font-bold text-lg  text-center"> 07:00 PM - 09:00 PM</div>
                        <div class="bg-neutral-900 rounded-lg p-3 ring-4 ring-neutral-800 text-white font-bold text-lg  text-center">Live session</div>
                      </div>
                      
                  <p class="mt-4 text-lg sm:font-medium sm:text-lg text-center text-neutral-200">Master the core concepts of Js to add real functionality to websites like Netflix and ChatGPT — all in just 2 hours!  The must have Javascript crash course in 2025.</p>
                  <div class="max-w-xl mx-auto ">
                    <a href="#" @click="modalOpen=true" class="hidden sm:flex group bg-white py-4 px-6 rounded-2xl border  border-white hover:rounded-2xl transition-all justify-center mt-10 items-center gap-2 font-bold text-xl">
                        Join live Javascript crash course at ₹99 now
                        <span class="transform transition-transform group-hover:translate-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </a>
                    <p class="text-red-500 mt-2 text-center">No Upsells. No Course Pitches. Just Pure Actionable insights.</p>
                  </div>
                  </div>
            </div>
        </div>
     </div>

    <!-- main -->


    
     <div class="mt-4 max-w-3xl  mx-auto relative overflow-hidden hidden">
        
        <div class="flex justify-center">
            <!-- <div class="2xl:my-10 mb-6 border border-violet-200 bg-violet-100 text-violet-800 inline-block mx-auto rounded-lg py-2 px-4">5 days live challenge</div> -->
        </div>
        <h1 class="text-center font-black text-2xl sm:text-3xl px-4 mt-24">Learn frontend in just 5 days to create Netflix, chatgpt and Youtube like designs.</h1>
          <div class="mt-7 bg-neutral-5 rounded-xl p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-violet-100 rounded-lg p-3 ring-4 ring-violet-200 text-violet-800 font-bold text-lg sm:text-left text-center">From 16th October</div>
                <div class="bg-orange-100 rounded-lg p-3 ring-4 ring-orange-200 text-orange-800 font-bold text-lg sm:text-left text-center">7:00 - 8:00 PM</div>
                <div class="bg-green-100 rounded-lg p-3 ring-4 ring-green-200 text-green-800 font-bold text-lg sm:text-left text-center">Live Zoom sessions</div>
                
              </div>
              <div class="mt-4 flex gap-4 items-center hidden">
                <img src="https://codekaro.in/assets/img/team/ashish%20black.png" class="h-24 rounded-lg ring-4 ring-white" alt="">
                <div>
                    <h1 class="text-lg font-medium">Ashish Shukla</h1>
                    <p class="text-neutral-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda natus vel fugiat deleniti, sunt eveniet tempora.</p>
                </div>
              </div>
          <p class="mt-4 text-sm font-medium sm:text-lg text-center text-neutral-700">Master the core concepts of JavaScript to add real functionality to websites like Netflix, ChatGPT, and YouTube — all in just 2 hours!  The must have Javascript crash course in 2025.</p>
              
          </div>

          <!-- stats -->
           <div class="mb-7 hidden sm:bloc borde bg-neutral-50 border-neutral-200 rounded-b-xl p-3">
            <div class="flex justify-around">
                <div class="text-center">
                    <div class="bg-violet-100 h-12 w-12 inline-flex items-center justify-center rounded-full text-violet-900 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
                          </svg>
                        </div>
                    <h2 class="text-lg mb-0 font-bold">6-8 LPA</h2>
                    <p class="-mt-1 text-neutral-600">Average Salary</p>
                </div>
                <div class="text-center">
                    <div class="bg-violet-100 h-12 w-12 inline-flex items-center justify-center rounded-full text-violet-900 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                          </svg>
                        </div>
                    <h2 class="text-lg mb-0 font-bold">Upto 120%</h2>
                    <p class="-mt-1 text-neutral-600">Salary Hike</p>
                </div>
                <div class="text-center">
                    <div class="bg-violet-100 h-12 w-12 inline-flex items-center justify-center rounded-full text-violet-900 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                          </svg>
                          
                          
                    </div>
                    <h2 class="text-lg mb-0 font-bold">Guaranteed</h2>
                    <p class="-mt-1 text-neutral-600">100% Job Assistance</p>
                </div>
                
            </div>
           </div>
           <!-- cta 1 -->
            <!-- <button class="my-8 absolut  z-5 bg-gradient-to-r from-violet-800 to-violet-500 hover:shadow-[7px_5px_56px_-14px_#7a48e0] w-full py-5 text-white text-xl font-medium rounded-2xl">
                
                Join 5 days CSS challenge at Rs 59</button> -->
                <div class="text-center">
                    
                    <button @click="modalOpen=true" class="my-8 absolut hover:scale-105 transition-all bg-neutral-950 bg-gradient-to- from-black to-black hadow-[7px_5px_56px_-14px_#7a48e0] w-ful py-5 px-8 mx-auto inline-block text-white text-xl font-medium rounded-2xl">
                        <span>Claim your 5 days frontend challenge at ₹59 now</span>
                        <span></span>
                    </button>
                </div>
                
           
        <p class="text-center font-medium mb-7">loved by 90K+ students</p>
           <!-- cta -->
            <!-- <button class="bg-violet-900 text-white rounded-xl w-full py-3 mt-7 sm:-mt-2 ">
                <h1 class="text-2xl font-semibold">Reserve your spot for Rs 149</h1>
                <p>Get Bonuses worth ₹24,699 For Free</p>
            </button> -->
            <div class="flex hidden h-8 gap-6 jobs flex-wrap justify-center cl"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b371cc8ec9775d862436a6_Frame%201000002670.png" loading="lazy" alt="" class="opportunities_company-logo_dream11 is-phase-3"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b371c9ea06b5dbc0024a8e_Frame%201000002646.png" loading="lazy" alt="" class="opportunities_company-logo_accenture is-phase-3"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b371c9d790096a6bb671fe_Frame%201000002595.png" loading="lazy" alt="" class="opportunities_company-logo_accenture is-last-module"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b371cf63e68531e0c332dc_Frame%201000002667.png" loading="lazy" alt="" class="opportunities_company-logo_accenture is-phase-3"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b371cf494e39298d9cc463_Frame%201000002931.png" loading="lazy" alt="" class="opportunities_company-logo_accenture is-last-module"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b371c9f2bf0b50ebaafc18_Frame%201000002661.png" loading="lazy" alt="" class="opportunities_company-logo_accenture is-phase-3"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b2df0b64df6e6ec190d32b_Frame-2.png" loading="lazy" id="w-node-_510cf3a0-816f-a164-a893-b36377e78468-0e16fc0a" alt="" class="companies-logo_google-logo is-google"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b2df0a819948e45180f9d6_Frame-3.png" loading="lazy" id="w-node-_06b8f66c-5439-dfca-3157-d61ef1659af9-0e16fc0a" alt="" class="companies-logo_microsoft-logo"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b2df0bf1e0ae180db48fa1_Frame-4.png" loading="lazy" id="w-node-_30949c98-c397-84bb-fe0a-25e5fdb9a679-0e16fc0a" alt="" class="companies-logo_phone-pe-logo is-phone-pe"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b2df0bf0f503224b96376d_Frame-5.png" loading="lazy" id="w-node-_3e9f3993-14e7-f291-aaba-e023bab35fb0-0e16fc0a" alt="" class="companies-logo_zomtao-logo"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b2df0be84f15e44d9e75bf_Frame-6.png" loading="lazy" id="w-node-ab01bc91-fc30-f227-357e-a081664538f9-0e16fc0a" alt="" class="companies-logo_coinbase-logo"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b2e14856723c31a3f37d21_paytm.svg" loading="lazy" id="w-node-_8bba5a76-0cb6-2061-d397-bc66a97eac63-0e16fc0a" alt="" class="companies-logo_paytm-logo"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b2e1489a0557fcd862d561_uber.svg" loading="lazy" id="w-node-d0a3eaeb-73e2-5bb3-730f-d3306c1aa327-0e16fc0a" alt="" class="companies-logo_uber-logo"><img src="https://cdn.prod.website-files.com/62e8d2ea218fb7676b6892a6/66b2e148b1ccd037452e61f6_salesforce.svg" loading="lazy" id="w-node-_42c26533-0bd7-9fad-9609-4f9523235339-0e16fc0a" alt="" class="companies-logo_salesforce-logo"></div>
            
            <div class="hidden borde ring-2 ring-neutral-200 my-7 overflow-hidde rounded-xl">
                <div class="flex relative justify-between overflow-hidde items-center">
                    <div class="p-5 w-1/2">
                        <h1 class="text-xl font-bold">Helped Students get placed in companies</h1>
                    </div>
                    <img src="../companies.png" class="h-64 self-end w-1/2 object-cover" alt="">
                </div>
            </div>
     </div>
    </div>

    
    <!-- content -->
    <div class="flex justify-center mx-4 sm:mx-0">
        <div class="text-center">
            <h1 class="text-3xl font-bold font-manrope tracking-tight mt-24">What exactly we will learn & build?</h1>
            <p class="text-base mt-1 text-neutral-800">Skip the fluff — learn exactly what the industry cares about.</p>
            
        </div>
    </div>
    
    
    
    <section class="container max-w-6xl mx-auto my-10 ">
        <div class="flex justify-center mx-4 sm:mx-0">
            <div class="w-full md:w-8/12 mb-10">

                <!-- Day 1 -->
                <div class="border shadow-[6px_6px_0_-2px_#000] border-black p-6 mt-5 bg-white rounded-2xl">
                    <div class="border border-black inline-block rounded-full px-5 py-1 bg-yellow-400">Module 1</div>
                    <h3 class="text-xl font-bold mt-2">Javascript Foundation</h3>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        Javascript Foundation
                    </div>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        Variables & Data types
                    </div>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        Arrays & Objects
                    </div>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        Advance Concepts of Arrays
                    </div>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        If and Else & Usecases
                    </div>
                </div>

                <!-- Day 2 -->
                <div class="border shadow-[6px_6px_0_-2px_#000] border-black p-6 mt-5 bg-white rounded-2xl">
                    <div class="border border-black inline-block rounded-full px-5 py-1 bg-yellow-400">Module 2</div>
                    <h3 class="text-xl font-bold mt-2">How DOM Works?</h3>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        Loops & Usecases
                    </div>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        Master Functions
                    </div>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        Introduction to DOM
                    </div>
                </div>

                <!-- Day 3 -->
                <div class="border shadow-[6px_6px_0_-2px_#000] border-black p-6 mt-5 bg-white rounded-2xl">
                    <div class="border border-black inline-block rounded-full px-5 py-1 bg-yellow-400">Module 3</div>
                    <h3 class="text-xl font-bold mt-2">Building projects</h3>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        Creating Bill split App
                    </div>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        Understanding Async JS
                    </div>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        How to use API's
                    </div>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        Event loops and promises
                    </div>
                    <div class="mt-3 flex items-center">
                        <img class="mr-2" src="https://codekaro.in/assets/img/arrow2.svg" alt="" width="16" height="16">
                        Create Movie app using IMDB API
                    </div>
                </div>


            

            </div>
        </div>
    </section>

        <!-- feedbacks -->
        <div class="max-w-5xl mx-auto mt-32">
            <div class="my-8 text-center mx-4 sm:mx-0">
                <h2 class="text-3xl font-black tracking-tight">Students love codekaro</h2>
                <p class="text-base mt-1 text-neutral-800">Here's what 102160+ satisfied students have to say about learning with codekaro.</p>
            </div>
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6 mx-4 sm:mx-0">
                <section class="mt-5">
                    <div class="container mt-5">
                        
                        <div class="row">
                            <div class="col-md-6">
                                
                                <blockquote class="twitter-tweet">
                                    <p lang="en" dir="ltr"><a
                                            href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                                        The session was awesome .. Really very much helpful ....i must refer to my friends too
                                        .....you are doing awesome sir.</p>&mdash; Chinam (@Chinam22154291) <a
                                        href="https://twitter.com/Chinam22154291/status/1409510674724622343?ref_src=twsrc%5Etfw">June
                                        28, 2021</a>
                                </blockquote>
                                <script asy src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                            <div class="col-md-6">
                                <blockquote class="twitter-tweet">
                                    <p lang="en" dir="ltr"><a
                                            href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                                        Great explanations and good session of web development masterclass. Thank you so much for
                                        your excellent sessions.</p>&mdash; Santhosh G (@Santhos49708756) <a
                                        href="https://twitter.com/Santhos49708756/status/1407722856121651202?ref_src=twsrc%5Etfw">June
                                        23, 2021</a>
                                </blockquote>
                                
                            </div>
                            <div class="col-md-6">
                                <blockquote class="twitter-tweet">
                                    <p lang="en" dir="ltr"><a
                                            href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                                        Really a great tutor for learning web development</p>&mdash; Ravi Sadariya (@ravi_1821) <a
                                        href="https://twitter.com/ravi_1821/status/1409494936139960325?ref_src=twsrc%5Etfw">June 28,
                                        2021</a>
                                </blockquote>
                                
                                
                            </div>
                            <div class="col-md-6">
                                <blockquote class="twitter-tweet">
                                    <p lang="en" dir="ltr"><a
                                            href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                                        you are simply superb in delivering the content in a simple manner, hoping to learn lot more
                                        stuff from you</p>&mdash; Akhilesh (@Akhiles34785868) <a
                                        href="https://twitter.com/Akhiles34785868/status/1409496613207216134?ref_src=twsrc%5Etfw">June
                                        28, 2021</a>
                                </blockquote>
                                
                            </div>
            
                            
                            
            
                            <div class="col-md-6">
                                <blockquote class="twitter-tweet">
                                    <p lang="en" dir="ltr"><a
                                            href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> sir you are doing a
                                        great job and I learnt a lot from you.</p>&mdash; Rahul Yadav (@RahulYa26176535) <a
                                        href="https://twitter.com/RahulYa26176535/status/1416029077455065095?ref_src=twsrc%5Etfw">July
                                        17, 2021</a>
                                </blockquote>
                                
                            </div>
                            
                            <div class="col-md-6">
                                <blockquote class="twitter-tweet">
                                    <p lang="en" dir="ltr"><a
                                            href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> thankyou Ashish sir it
                                        was an amazing Bootcamp with you. I have learned a lot from you than I have ever before. Keep on
                                        giving us these bootcamp more.</p>&mdash; mahreen ahmed (@mahreenrizwan55) <a
                                        href="https://twitter.com/mahreenrizwan55/status/1439225168795213825?ref_src=twsrc%5Etfw">September
                                        18, 2021</a>
                                </blockquote>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                            <div class="col-md-6">
                                <blockquote class="twitter-tweet">
                                    <p lang="en" dir="ltr"><a
                                            href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> Class was
                                        interesting..I learned lot in a very short span of time...thank you so much..keep on sharing
                                        your knowledge...</p>&mdash; Bhuvaneshwari Dinesh (@Bhuvane06893457) <a
                                        href="https://twitter.com/Bhuvane06893457/status/1435963326622679043?ref_src=twsrc%5Etfw">September
                                        9, 2021</a>
                                </blockquote>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                            <div class="col-md-6">
                                <blockquote class="twitter-tweet">
                                    <p lang="en" dir="ltr"><a
                                            href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> <a
                                            href="https://twitter.com/CodeKaro?ref_src=twsrc%5Etfw">@CodeKaro</a> Classes with Ashish
                                        have been so worthwhile! Ashish has an amazing way of breaking things down so that they are
                                        understandable, and always keeping it light, fun and Enjoyable.</p>&mdash; Rahul Majukar
                                    (@RahulMajukar) <a
                                        href="https://twitter.com/RahulMajukar/status/1434885297657958401?ref_src=twsrc%5Etfw">September
                                        6, 2021</a>
                                </blockquote>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                            <div class="col-md-6">
                                <blockquote class="twitter-tweet">
                                    <p lang="en" dir="ltr"><a
                                            href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> thank you sir ,for
                                        having wonderful time having with us and providing much knowledge for us.<br>its great time and
                                        willing to have more time and more classes. thank you sir</p>&mdash; sudarsan (@sudarsa26414724)
                                    <a href="https://twitter.com/sudarsa26414724/status/1480915539958632454?ref_src=twsrc%5Etfw">January
                                        11, 2022</a>
                                </blockquote>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
            
                        </div>
                        
                    </div>
                </section>
            
                
            </div>
        </div>
        <!-- feedback ends -->
        
        <div class="max-w-5xl mx-auto mt- mb-12">
            <div class="my-8 text-center mx-4 sm:mx-0">
                <h2 class="text-3xl font-black tracking-tight">Meet Your Mentor</h2>
                <p class="text-base mt-1 text-neutral-800">Here's what 102160+ satisfied students have to say about learning with codekaro.</p>
            </div>
                <div class="text-center">
                    <img src="https://codekaro.in/assets/img/ashish.jpeg" class="h-48 w-48 rounded-2xl object-cover inline-block" alt="">
                    <p class="text-xl font-bold mt-3">Ashish Shukla</p>
            
                    <p class=" text-neutral-800 max-w-2xl mx-auto">Software Engineer turned Entrepreneur. I have mentored more than 1 lakh students in the last 5 years. Helping students to grow in there career. Ex AOSPL, Lido Learning</p>
                </div>
            </div>

<!-- FAQ Section -->
<section class="bg-white py-8 sm:py-24">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-black text-2xl sm:text-3xl font-black">Got Questions? We've Got Answers</h2>
            <p class="text-gray-600 text-lg mb-10">Everything you need to know before joining our Javascript Bootcamp! </p>
        </div>

        <div x-data="{ 
            activeQuestion: null, 
            toggleQuestion(id) { 
                this.activeQuestion = (this.activeQuestion === id) ? null : id 
            } 
        }" class="space-y-6">
            
            <!-- Question 1 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden   transition-shadow">
                <button 
                    @click="toggleQuestion(1)" 
                    class="flex justify-between items-center w-full p-5 text-left bg-white hover:bg-gray-50 transition-colors text-gray-900"
                >
                    <span class="sm:text-lg font-medium">When does the bootcamp begin?</span>
                    <svg 
                        class="w-5 h-5 text-orange-500 transform transition-transform" 
                        :class="{'rotate-180': activeQuestion === 1}"
                        xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round"
                    >
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div 
                    x-show="activeQuestion === 1" 
                    x-collapse 
                    x-cloak
                    class="p-5 bg-gray-50 text-gray-700"
                >
                    <p>Our bootcamp kicks off on <span class="font-semibold text-orange-600">July 16th, 2025</span>. We recommend securing your spot early as our batches tend to fill up quickly.</p>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="border hidden border-gray-200 rounded-xl overflow-hidden   transition-shadow">
                <button 
                    @click="toggleQuestion(2)" 
                    class="flex justify-between items-center w-full p-5 text-left bg-white hover:bg-gray-50 transition-colors text-gray-900"
                >
                    <span class="sm:text-lg font-medium">How does the money-back guarantee work?</span>
                    <svg 
                        class="w-5 h-5 text-orange-500 transform transition-transform" 
                        :class="{'rotate-180': activeQuestion === 2}"
                        xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round"
                    >
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div 
                    x-show="activeQuestion === 2" 
                    x-collapse 
                    x-cloak
                    class="p-5 bg-gray-50 text-gray-700"
                >
                    <p class="mb-3">We're so confident in our program that we offer a 100% money-back guarantee if you follow these simple steps:</p>
                    <ol class="list-decimal pl-5 space-y-2">
                        <li><span class="font-medium">Daily Consistency:</span> Watch at least one complete video lesson every day throughout the program.</li>
                        <li><span class="font-medium">Complete Assignments:</span> Submit all assignments by their deadlines to demonstrate your progress.</li>
                        <li><span class="font-medium">Refund Window:</span> Request for refund must be made <span class="text-orange-600">after 3 weeks</span> but <span class="text-orange-600">within 90 days</span> of enrollment if you haven't seen results despite following the program.</li>
                    </ol>
                    <p class="mt-3 text-sm italic">This guarantee ensures you're serious about learning while we're serious about helping you succeed.</p>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden   transition-shadow">
                <button 
                    @click="toggleQuestion(3)" 
                    class="flex justify-between items-center w-full p-5 text-left bg-white hover:bg-gray-50 transition-colors text-gray-900"
                >
                    <span class="sm:text-lg font-medium">I've completed my payment. What are the next steps?</span>
                    <svg 
                        class="w-5 h-5 text-orange-500 transform transition-transform" 
                        :class="{'rotate-180': activeQuestion === 3}"
                        xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round"
                    >
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div 
                    x-show="activeQuestion === 3" 
                    x-collapse 
                    x-cloak
                    class="p-5 bg-gray-50 text-gray-700"
                >
                    
                    
                    <p>Well, in most cases it should not happen. Make sure you give us 5-10 minutes in case you don't receive any emails right away. Even then if you don't receive anything from us, then please write to info@codekaro.in and our awesome support team will clarify your problems in 24-48 hours.</p>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden   transition-shadow">
                <button 
                    @click="toggleQuestion(4)" 
                    class="flex justify-between items-center w-full p-5 text-left bg-white hover:bg-gray-50 transition-colors text-gray-900"
                >
                    <span class="sm:text-lg font-medium">How long will I have access to the course materials?</span>
                    <svg 
                        class="w-5 h-5 text-orange-500 transform transition-transform" 
                        :class="{'rotate-180': activeQuestion === 4}"
                        xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round"
                    >
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div 
                    x-show="activeQuestion === 4" 
                    x-collapse 
                    x-cloak
                    class="p-5 bg-gray-50 text-gray-700"
                >
                    <p>You'll have full access to all course materials, recordings, and resources for <span class="font-semibold">one full year</span> from the cohort start date.</p>
                    
                    </div>
            </div>
            
            <!-- Question 5 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden   transition-shadow">
                <button 
                    @click="toggleQuestion(5)" 
                    class="flex justify-between items-center w-full p-5 text-left bg-white hover:bg-gray-50 transition-colors text-gray-900"
                >
                    <span class="sm:text-lg font-medium">Do I need prior coding experience to join?</span>
                    <svg 
                        class="w-5 h-5 text-orange-500 transform transition-transform" 
                        :class="{'rotate-180': activeQuestion === 5}"
                        xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round"
                    >
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div 
                    x-show="activeQuestion === 5" 
                    x-collapse 
                    x-cloak
                    class="p-5 bg-gray-50 text-gray-700"
                >
                    <p class="mt-3">We start with the basics and progressively build your skills through hands-on projects and real-world applications. Our step-by-step approach ensures that concepts are easy to grasp, regardless of your background.</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <p class="text-gray-600 mb-">Still have questions?</p>
            <a href="#" class="inline-flex gap-1 items-center text-orange-600 font-medium hover:text-orange-700">
                Contact our support team
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</section>

    
    <div class="w-96 mx-auto mt-32 hidden">
        <a href="#_" class="relative rounded px-5 py-2.5 overflow-hidden group bg-green-500 relative text-white ring-green-400 transition-all ease-out duration-300">
            <span class="absolute left-0 w-8 h-32 -mt-12 transform -translte-x-[-100%] bg-white opacity-20  rotate-12 button-animate">
                <span></span>
                <span></span>
            </span>
            

            <span class="relative">Button Text</span>
          </a>
          
          <style>
            .button-animate {
              animation-name: slide;
              animation-duration: 2s;
              animation-iteration-count: infinite;
              animation-direction: normal;
              
            }
          
            @keyframes slide {
              100%{
                transform: translate(600%);
              }
            }
          </style>
          
    </div> 
      
     
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