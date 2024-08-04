<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Development Masterclass</title>
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
<script src="https://unpkg.com/alpinejs" defer></script>
</head>

<body>
   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8B392D"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
@auth   
@include('layouts.t-student-nav')
@endauth
<section>
  <div class="max-w-xl mx-auto mt-44 text-cente shadow-l p-5 sm:p-16 text-center sm:text-left rounded-xl">
    <h1 class="text-xl font-semibold">Congratulations @auth {{Auth::user()->name}} @endauth <span class="text-2xl">🎉</span></h1>
    <p class=" font-ligh text-gray-700 text- mt-3">You have successfully enrolled for the <span class="underlin text-blac">How to CSS Bootcamp</span>. Live classes will start from <span class="underlin font-semibold text-black">{{ \Carbon\Carbon::parse($batch->nextClass)->format('D, d M h:i a') }} IST</span> </p>
    <p class="   text-gray-700 "></p>

    {{-- <a target="_blank" href="{{$batch->groupLink}}" class="text-white bg-green-600 py-2 px-6 mt-4 inline-block rounded-full transition-all hover:bg-green-700 hover:text-white">Join WhatsApp Group</a> --}}
  </div>
</section>

{{-- <section>
  <div class="max-w-xl mx-auto mt-5 text-cente px-5">
    <h2 class="text-lg">But wait ✋ we have something more exciting for you</h2>
  </div>
</section> --}}

    
  
    
    
</body>

</html>
