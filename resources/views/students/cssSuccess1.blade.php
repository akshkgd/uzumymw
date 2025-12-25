<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Bootcamp - Success</title>
    <meta name="keywords" content="Get started as a front-end web developer using HTML, CSS, JavaScript and Bootstrap. The modern web development course for everyone!">
    <meta name="og:description" content="Get started as a front-end web developer using HTML, CSS, JavaScript and Bootstrap. The modern web development course for everyone!">
    <link rel="canonical" href="https://codekaro.in/web-development-live-masterclass"/>
    <link rel="icon" href="https://codekaro.in/assets/img/chrome-icon.png">
    <meta name="facebook-domain-verification" content="nlndijpgith63pnf9skj942enj02m8" />
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HC9ETJV29G"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HC9ETJV29G');
    </script>
    <!-- CSS only -->
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>

    </style>
        <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K8B392D');</script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-9323KT1W2S"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'G-9323KT1W2S');
  </script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11206387820"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11206387820');
</script>
<!-- Event snippet for lead form conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11206387820/C8DRCJDK9akYEOzQz98p'});
</script>

</head>

<body>
   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8B392D"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
<section>
  <div class="max-w-lg mx-auto my-12 text-cente shadow-l text-center sm:text-left rounded-xl">
    <h1 class="sm:text-2xl text-xl font-semibold">Congratulations @auth {{Auth::user()->name}} @endauth <span class="text-2xl">🎉</span></h1>
    <p class=" font-ligh text-gray-700 sm:text-xl mt-3 px-5 sm:p-0">You have successfully enrolled for the <span class="underlin text-blac">How to CSS Bootcamp</span>. Live classes will start from <br> <span class="underline font-semibold text-black">{{ \Carbon\Carbon::parse($batch->nextClass)->format('D, d M h:i a') }} IST</span> </p>
    <div class="fixe bottom- mb-10 w-full sm:static">
        <p class="   text-gray-700 mt-2 sm:hidden">Next Steps</p>
      <a target="_blank" href="{{$batch->groupLink}}" class=" text-white bg-green-600 py-4 px-16 mt-4 inline-block rounded-full sm:rounded-xl  transition-all hover:bg-green-700 hover:text-white text-lg   ms:mx-0">Join WhatsApp Group</a>
      <p class="text-sm block mt-3 text-neutral-700 sm:hidden">Join the WhatsApp group now <br> to receive Zoom links and updates.</p>
      <p class="text-sm hidden sm:block mt-3 text-neutral-700">Join the WhatsApp group now to receive Zoom links and updates.</p>

    </div>
  </div>
</section>


@if(request()->has('enrollmentId'))
<section class="mb-12">
  <div class="max-w-lg mx-auto mt-5 text-cente px-5 sm:px-0">
    <h2 class="text-xl">But wait ✋ we have something more exciting for you</h2>
  
<div class=" space-y-1   border border-neutral-300 mt-5  ring-2 ring-neutral-200 bg-orange-5 rounded-2xl p-4 pb-3">
                                    <div class=" gap-2 mb-3">
                                        
                                        <h2 class="font-semibold text-bas text-xl">Build an AI Chatbot in 3 Hours (Live, From Scratch)</h2>
                                        
                                        {{-- <div class="flex items-center gap-2 mt-2 text-xl">
                                            <span class="text-l font-semibold">₹199.00</span>
                                            <span class=" text-neutral-500 line-through px-1">₹2499</span>
                                        </div> --}}
                                    </div>
                                    
                                    <div 
  x-data="{ open: false }" 
  class=" font-[400] leading-[160%] break-words"
>

  <!-- Visible by default -->
  <p class="mb-2 text-base text-neutral-700"> In just 3 focused hours, you’ll stop guessing JavaScript and understand the fundamentals to build a real AI chatbot using the ChatGPT API — live with me.
  </p>

  <!-- Hidden content -->
  <div 
    x-show="open" 
    x-transition 
    class="mt-2 text-neutral-800"
  >
    <p class="mb-2">Learn to:</p>

    <ul class="list-disc pl-5 mb-2">
      <li>Build strong JavaScript fundamentals from scratch 🧠</li>
      <li>Write modern ES6+ code used by professionals 🚀</li>
      <li>Manipulate the DOM to create interactive websites 🎯</li>
      <li>Build real-world ChatGPT API Based chatbot 🛠️</li>
    </ul>

    <p class="mb-2">And more!</p>

    <p>
      Don’t miss this chance to break confusion, gain confidence, and level up your JavaScript skills fast 🔥
    </p>
  </div>

  <!-- Toggle button -->
  <button
    @click="open = !open"
    class="mt-1 text-neutral-600 font-medi focus:outline-none"
  >
    {{-- <span x-show="!open">👉 See what you’ll build</span> --}}
    <span x-show="open"></span>
  </button>

</div>

<!-- Alpine.js CDN -->
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

                                    



                                    
                                    <div class="fle items-center justify-between mt-4">
                                        
                                        <div class="flex gap-8">
                                            <div class="">
                                              <p class="text-xs text-neutral-700">Start Date</p>
                                              <p class="font-medium">11th Jan - 11AM IST</p>
                                            </div>
                                            {{-- <div class="">
                                              <p class="text-xs text-neutral-700">Start Time</p>
                                              <p class="font-medium">11 AM IST</p>
                                            </div> --}}
                                            <div class="">
                                              <p class="text-xs text-neutral-700">Offer expires in</p>
                                              <p class="font-medium">04 min : 16 sec</p>
                                            </div>
                                        </div>
                                        <form action="{{ route('cssUpgrade') }}" method="POST" class="">
                @csrf
            
              
            </div>
            <input type="hidden" name="auth" value="true">
            <input type="hidden" name="id" value="{{ app('request')->input('enrollmentId') }}">
            <div class="flex items-center justify-center pt-0 mt-3">
              <button type="submit"
                class="inline-flex items-center justify-center w-full text-s mt-3 font-normal tracking-wide  transition-colors duration-200 rounded-xl bg-[#F1FE06] text-black px-6 py-3 border border-[#07090166] focus:shadow-outline focus:outline-none"
              >
                Yes, I Want to Build the AI Chatbot – ₹199
            </a>
        </form>
        
              
                                    </div>
                                    <p>100% Moneyback Gaurentee</p>
                                    <p class="text-sm my-6 text-red-600">Once you close this page, this offer is gone forever. You won’t see this offer again.</p>
                                </div>

  </div>
</section>
@endif
    
    
</body>

</html>
