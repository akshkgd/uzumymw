<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Strategy Call</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="{{asset('assets/img/chrome-icon.png')}}">
    <meta name="facebook-domain-verification" content="sqxnqkagio33ipi426hafktfp1x76s" />
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HC9ETJV29G"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HC9ETJV29G');
    </script>

    <style>
        .ck-sans {
            font-family: "Google Sans", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-variation-settings:
                "GRAD" 0;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            /* align-items: center; */
            /* justify-content: center; */
            text-align: center;
            padding: 80px 24px 30px;
            position: relative;
            top: 0;
            width: 100%;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 70% 55% at 50% -5%, rgba(232, 98, 42, 0.08) 0%, transparent 65%),
                radial-gradient(ellipse 40% 35% at 50% 105%, rgba(14, 13, 12, 0.03) 0%, transparent 60%);
            pointer-events: none;
        }

        .hero-inner {
            position: relative;
            z-index: 1;
            max-width: 860px;
            margin: 0 auto;
            width: 100%;
        }
        .bw{
            background: linear-gradient(#f0896900 0%, #ef886929 100%);
        }
        .aw{
            background: linear-gradient(#64cc7b00 0%, #64cc7b29 100%);
        }
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus {
            -webkit-box-shadow: 0 0 0px 1000px white inset !important;
            box-shadow: 0 0 0px 1000px white inset !important;
            -webkit-text-fill-color: #1f2937 !important;
        }
    </style>
</head>
<body>
    <div class="max-w-5xl mt-5 mx-auto">
        
        <!-- Cal inline embed code begins -->
<div style="width:100%;height:100%;overflow:scroll" id="my-cal-inline-apply"></div>
<script type="text/javascript">
  (function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if(typeof namespace === "string"){cal.ns[namespace] = cal.ns[namespace] || api;p(cal.ns[namespace], ar);p(cal, ["initNamespace", namespace]);} else p(cal, ar); return;} p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init", "apply", {origin:"https://app.cal.com"});

  Cal.ns.apply("inline", {
    elementOrSelector:"#my-cal-inline-apply",
    config: {"layout":"month_view","useSlotsViewOnSmallScreen":"true"},
    calLink: "ashish-shukla-ye5ege/apply",
  });

  Cal.ns.apply("ui", {"cssVarsPerTheme":{"light":{"cal-brand":"#ea580c"}},"hideEventTypeDetails":false,"layout":"month_view"});
  </script>
  <!-- Cal inline embed code ends -->
    </div>
</body>
</html>
