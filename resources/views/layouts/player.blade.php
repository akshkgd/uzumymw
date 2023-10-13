
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Codekaro - Live Coding Classes learn to code like a pro')</title>
    <meta name="keywords" content="@yield('meta_keywords','Codekaro try to bring latest courses to students. Not only that we provide a dedicated team to answer their doubts.')">
    <meta name="og:description" content="@yield('meta_description','Codekaro try to bring latest courses to students. Not only that we provide a dedicated team to answer their doubts.')">
    <link rel="canonical" href="{{url()->current()}}"/>
    <link rel="icon" href="{{asset('/assets/img/chrome-icon.png')}}">
    <meta name="facebook-domain-verification" content="sqxnqkagio33ipi426hafktfp1x76s" />

    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link rel="stylesheet" href="{{asset('assets/css/ckplayer.css')}}" />
    
    
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8B392D"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    
    {{-- <div class="loader">
      <div class="spinner-border text-dark" style="width: 2rem; height: 2rem;  ;" role="status">
        <span class="visually-hidden">Loadi</span>
      </div>
    </div> --}}
    
@yield('content')

    
{{-- <script>
  (function (w, d, s, u) {
  w.gbwawc = {
  url: u,
  options: {
          waId: "+91917355191435",
          siteName: "Codekaro",
          siteTag: "Usually reply in 4 minutes",
          siteLogo: "https://waw.gallabox.com/chatbotavatars/1.png",
          widgetPosition: "RIGHT",
          triggerMessage: "",
          welcomeMessage: "Welcome to Gallabox! Convert conversations to actions...",
          brandColor: "#25D366",
          messageText: "",
          replyOptions: ['Free Masterclass','Courses',''],
      },
  };
  var h = d.getElementsByTagName(s)[0],
  j = d.createElement(s);
  j.async = true;
  j.src = u + "/whatsapp-widget.min.js?_=" + Math.random();
  h.parentNode.insertBefore(j, h);
  })(window, document, "script", "https://waw.gallabox.com");
  </script>
   --}}
        



    
    
    
  </body>
</html>
