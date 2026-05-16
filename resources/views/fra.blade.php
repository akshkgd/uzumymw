<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Developer? Get Your Full Stack Transition Plan in 90 Days</title>
  <meta name="description" content="Discover exactly how to move into a high-paying full stack role. Get your personalized roadmap on a 30 min strategy call.">

  <!-- Open Graph (WhatsApp, Telegram, Facebook) -->
  <meta property="og:title" content="Backend Developer? Get Your Full Stack Transition Plan in 90 Days">
  <meta property="og:description" content="Discover exactly how to move into a high-paying full stack role. Get your personalized roadmap on a 30 min strategy call.">
  <meta property="og:image" content="https://yourdomain.com/images/og-image.jpg">
  <meta property="og:url" content="https://yourdomain.com">
  <meta property="og:type" content="website">

  <!-- Twitter/X -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Backend Developer? Get Your Full Stack Transition Plan in 90 Days">
  <meta name="twitter:description" content="Discover exactly how to move into a high-paying full stack role. Get your personalized roadmap on a 30 min strategy call.">
  <meta name="twitter:image" content="https://yourdomain.com/images/og-image.jpg">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- hls.js (lightweight HLS playback) -->
    <script src="https://cdn.jsdelivr.net/npm/hls.js@1/dist/hls.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
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
    <div class="hero " id="#">
        <div class="max-w-3xl mx-auto md:mt-5 text-left md:text-center">
            <h1 class="text-orange-600 text-base md:text-lg ck-sans">ONLY for Frontend / Backend Developers with 1+ Years Experience</h1>
            <h1 class="text-2xl md:text-3xl font-bold ck-sans mt-5">Transition to High Paying MERN Full Stack Developer Roles in Just 90 Days</h1>
            <p class="mt-5 text-neutral-600 md:text-xl">Get a clear roadmap to become Full Stack developer in 90 days — without tutorial overload, confusion, or losing momentum halfway.</p>
            
            <div class="max-w-lg mx-auto mt-7 ">
                <form action="{{ route('course-enrollment-auto') }}" method="POST"
  class="flex flex-col space-y-3"
  onsubmit="return handleSubmit()">
  @csrf
  <input type="hidden" name="source" value="{{ app('request')->input('utm_source') }}">
  <input type="hidden" name="medium" value="{{ app('request')->input('utm_medium') }}">
  <input type="hidden" name="campaign" value="{{ app('request')->input('utm_campaign') }}">
  <input type="hidden" name="courseId" value="177">
  <input type="checkbox" class="hidden" id="myCheckbox" name="myCheckbox" style="transform: scale(2); margin-left:6px; margin-right: 10px; margin-top:12px; cursor: pointer;" onchange="toggleRecordingCheckbox(this)">

  <input type="text" id="name" name="name" onblur="validateName()"
    class="border w-full bg-orange-50/30 p-3 border-neutral-300 rounded-none focus:bg-white focus:border-orange-600 focus:outline-none"
    placeholder="Your Name">
  <p id="name-err" class="hidden text-red-600 text-xs text-left">Please enter your full name.</p>

  <input type="text" id="email" name="email" onblur="validateEmail()"
    class="border w-full p-3 border-neutral-300 rounded-none focus:border-orange-600 focus:outline-none"
    placeholder="Your Email">
  <p id="email-err" class="hidden text-red-600 text-xs text-left">Please enter a valid email address.</p>

  <div>
    <div id="phone-wrap" class="flex items-center border border-neutral-300 px-4 py-3 bg-white gap-2.5 w-full focus-within:border-orange-600 transition-colors">
      <span class="text-xl leading-none">🇮🇳</span>
      <span class="font-medium text-neutral-800 whitespace-nowrap">+91</span>
      <div class="w-px h-5 bg-neutral-300"></div>
      <input id="phone" name="mobile" type="tel" placeholder="Enter Phone Number"
        class="flex-1 bg-transparent border-none outline-none text-neutral-800 placeholder:text-neutral-400 caret-orange-600"
        onblur="validatePhone()" />
    </div>
    <p id="phone-err" class="hidden text-red-600 text-xs mt-1 text-left">Please enter a valid 10-digit phone number.</p>
  </div>

  <button type="submit"
    class="bg-orange-600 py-3 text-white mb-1 hover:cursor-pointer">
    Book Your Strategy Call Now at ₹99
  </button>
  <p class="text-sm text-neutral-700">₹99 to secure your slot (fully refunded if you show up)</p>
</form>    
        </div>
            
            
        </div>
        <!-- testimonials -->
         <div class="max-w-lg mx-auto mt-24 ck-sans">
            <!-- one -->
                <div class="hidden border p-4 border-neutral-300 w-full box-border">
                    <div class="flex mb-4 items-center gap-4 ck-sans">
                        <img src="https://codekaro.in/assets/img/feedbacks/laxmi.jpg" alt="" class="h-16 w-16 rounded-full">
                        <div class="text-left">
                            <p class="font-semibold text-gray-900 text-base">Sivapriya</p>
                            <p class="text-gray-400 text-sm">System Support Eng. → Frontend Developer, ZOHO</p>
                        </div>
                    </div>
                    <p class="text-left">Laxmipriya was in a support role at Infosys at ₹3.2 LPA. She always wanted to be a developer but every time she tried, the basics felt shaky and she had no idea where to even start with real projects.</p> <br>
                    <p class="text-left">She joined AlphaClub. We helped her get her basics right, got her working on real projects, prepared her for interviews and coding rounds, and fixed up her LinkedIn so the right people could find her.</p>
                    <div class="border-t border-neutral-300 mt-4"></div>
                    <h3 class="font-medium pt-4 text-left">She cracked ZOHO as a Frontend Developer at ₹7.5 LPA. Was at ₹3.2 LPA.</h3>
                    <p class="text-sm text-left">From support tickets to shipping code. She made it happen.</p>
                </div>
                <!-- two -->
                 <div class="border p-4 border-neutral-300 w-full mt-5">
                    <div class="flex mb-4 items-center gap-4 ck-sans">
                        <img src="https://codekaro.in/assets/img/feedbacks/keval.jpeg" alt="" class="h-16 w-16 rounded-full">
                        <div class="text-left">
                            <p class="font-semibold text-gray-900 text-base">Keval kapadia</p>
                            <p class="text-gray-400 text-sm">Data Analyst → Senior Frontend Developer</p>
                        </div>
                    </div>
                    <!-- <p class="text-left">Laxmipriya was in a support role at Infosys at ₹3.2 LPA. She always wanted to be a developer but every time she tried, the basics felt shaky and she had no idea where to even start with real projects.</p> <br> -->
                    <!-- <p class="text-left">She joined AlphaClub. We helped her get her basics right, got her working on real projects, prepared her for interviews and coding rounds, and fixed up her LinkedIn so the right people could find her.</p>  -->
                    <!-- HLS Video -->
                    <div class="mt-4 hls-wrap" style="position:relative; aspect-ratio:16/9; background:#000; overflow:hidden;">
                        <!-- Native video (hidden until playing) -->
                        <video
                            id="keval-video"
                            class="hls-player"
                            controls
                            preload="none"
                            data-src="https://vz-5f63f216-8ca.b-cdn.net/f84e2b0f-42fb-41fc-93ff-0228d4336724/playlist.m3u8"
                            style="width:100%; height:100%; display:none; position:absolute; inset:0;">
                        </video>
                        <!-- Poster overlay (hides spinner) -->
                        <div class="hls-poster" style="position:absolute; inset:0; cursor:pointer; background:url('https://vz-5f63f216-8ca.b-cdn.net/f84e2b0f-42fb-41fc-93ff-0228d4336724/preview.webp?v=1778573379') center/cover no-repeat;">
                            <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center;">
                                <div class="ring-4 ring-white/15" style="width:60px; height:60px; background:white; border-radius:50%; display:flex; align-items:center; justify-content:center; transition:transform .15s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 ml-1"  viewBox="0 0 24 24" fill="#474747"><polygon points="5,3 19,12 5,21"/></svg>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="border-t border-neutral-300 mt-4"></div> -->
                    <h3 class="font-medium pt-4 text-left">From ₹9.5 LPA to ₹25 LPA (163% Hike)</h3>
                    <p class="text-sm text-left">Keval barely had time — office from 8 AM to 10 PM and stuck in tutorial hell. We helped him focus on the right skills, upskill fast, and make a switch in 3 months.</p>
                </div>
                <!-- three -->
                 <div class="border p-4 border-neutral-300 w-full mt-5">
                    <div class="flex mb-4 items-center gap-4 ck-sans">
                        <img src="https://codekaro.in/assets/img/feedbacks/pruthviraj.jpeg" alt="" class="h-16 w-16 rounded-full">
                        <div class="text-left">
                            <p class="font-semibold text-gray-900 text-base">Pruthviraj</p>
                            <p class="text-gray-400 text-sm">Angular Developer → Team Lead, Accenture</p>
                        </div>
                    </div>
                    <p class="text-left">5 years of experience. Never switched companies. Pruthviraj was skilled — but the startup comfort zone had quietly become a cage. Interviews felt foreign. His resume screamed "one company, one role.</p> <br>
                    <p class="text-left">We mapped his strengths, plugged the gaps in fundamentals and system design, and — most importantly — trained him to negotiate, not just interview.</p>
                    <div class="border-t border-neutral-300 mt-4"></div>
                    <h3 class="font-medium pt-4 text-left">Cracked Accenture as Team Lead at ₹23 LPA. Was at ₹9.3 LPA.</h3>
                    <p class="text-sm text-left">5 years of experience finally got its worth.</p>
                </div>
         </div>

         <!-- mentor -->
          <div class="max-w-lg mx-auto md:fle gap-14 items-center mt-8">
            <div class="relative h-56 w-56 mx-aut">
                <img src="https://codekaro.in/assets/img/ashish.jpeg" alt="" class="h-56 w-56 mx-aut object-cover rounded-3xl -rotate- grayscale-100">
                
            </div>

            <div class=" w-auto mt-5 md:mt-8 text-left">
                <p>Hi 👋, I’m <span class="font-semibold">Ashish Shukla</span> — Software Engineer turned Full-Time Mentor. <br> <br> I’ve helped <span class="font-semibold">15,700+ developers transition into higher-paying roles</span> — without wasting months on random tutorials.

                <br><br>After working at AICRA, Bluecore & Lido Learning, I realized most developers stay stuck not because they lack ability — but because they lack the right roadmap. <br><br> That’s exactly what I help developers like you fix.</p>

                <a href="#" class="text-orange-600">Book your 30 min  Strategy Call Now to get your customized roadmap.</a>
                <br>
                <p class="text-neutral-700">(On this call, you’ll know exactly what to do next — whether you work with us or not.)</p>
            </div>
        </div>

         <!-- footer -->
          <div class="max-w-lg ck-sans mx-auto text-left  mt-5">
            <p class="text-sm">Codekaro @2026</p>
            <p class="text-xs text-neutral-500">This site is not a part of the Facebook website or Facebook Inc. Additionally, This site is NOT endorsed by Facebook in any way. FACEBOOK is a trademark of FACEBOOK, Inc.</p>
          </div>
    </div>



    <div class="max-w-4xl mx-auto mt-130 md:mt-120 hidden">
        


    <div class="max-w-3xl mx-auto mt-24">
        <!-- <div class="md:flex gap-14 items-center">
            <div class="relative ">
                <img src="https://codekaro.in/assets/img/ashish.jpeg" alt="" class="h-56 w-56 mx-auto object-cover rounded-3xl -rotate-6 grayscale-100">
                <div class="absolute bottom-5 left-1/2 -translate-x-1/2 md:left-0 md:translate-0">
                    <div class="bg-yellow-300 inline-block py-1 font-semibold px-4 rounded-full -rotate-6 md:ml-5">Ashish</div>
                    <div class="bg-white py-1 font-semibold px-4 rounded-full -rotate-6 md:ml-5">Founder @Codekaro</div>

                </div>
            </div>

            <div class="md:w-125 w-auto px-2 md:px-0 mt-5 md:mt-0">
                <p>Hi, I’m Ashish Shukla — Software Engineer turned Full-Time Mentor. <br> I’ve helped 15700+ developers transition into better roles, increase their salaries, and land their first jobs in tech.

                After working at companies like AICRA, Bluecore & Lido Learning, I realized most developers stay stuck not because they lack ability — but because they lack the right roadmap. That’s exactly what I help developers like you fix.</p>

                <p>Book your 30 min  Strategy Call Now to get your customized roadmap.</p>
            </div>
        </div> -->
    </div>
    <script>
// ── HLS players: poster-overlay + single-video-at-a-time ─────────────────────
(function () {
  function initHlsPlayers() {
    var videos = Array.from(document.querySelectorAll('video.hls-player'));

    videos.forEach(function (video) {
      var src = video.dataset.src;
      if (!src) return;

      var wrap   = video.closest('.hls-wrap');
      var poster = wrap ? wrap.querySelector('.hls-poster') : null;

      // — hls.js setup —
      var hls = null;
      if (Hls.isSupported()) {
        hls = new Hls({ autoStartLoad: false });
        hls.loadSource(src);
        hls.attachMedia(video);
      } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        video.src = src; // Safari native HLS
      }

      // — poster click — show video, start load, play
      if (poster) {
        poster.addEventListener('click', function () {
          // Pause all other players first
          videos.forEach(function (other) {
            if (other !== video && !other.paused) other.pause();
          });
          poster.style.display = 'none';
          video.style.display  = 'block';
          if (hls) hls.startLoad();
          video.play();
        });
      }

      // — if the native controls play button is used (e.g. after first play) —
      video.addEventListener('play', function () {
        if (hls && hls.loadLevel === -1) hls.startLoad();
        if (poster) poster.style.display = 'none';
        videos.forEach(function (other) {
          if (other !== video && !other.paused) other.pause();
        });
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHlsPlayers);
  } else {
    initHlsPlayers();
  }
})();
// ─────────────────────────────────────────────────────────────────────────────

function cleanPhone(val) {
  // Remove all non-digits
  let digits = val.trim().replace(/\D/g, '');
  // Strip leading country code: 91XXXXXXXXXX → XXXXXXXXXX
  if (digits.length === 12 && digits.startsWith('91')) {
    digits = digits.slice(2);
  }
  // Strip leading 0: 09876543210 → 9876543210
  if (digits.length === 11 && digits.startsWith('0')) {
    digits = digits.slice(1);
  }
  return digits;
}

function setError(inputId, errId, show) {
  const input = document.getElementById(inputId);
  const err = document.getElementById(errId);
  if (show) {
    input.classList.add('border-red-500', 'bg-red-50');
    input.classList.remove('border-neutral-300');
    err.classList.remove('hidden');
  } else {
    input.classList.remove('border-red-500', 'bg-red-50');
    input.classList.add('border-neutral-300');
    err.classList.add('hidden');
  }
}

function setPhoneError(show) {
  const wrap = document.getElementById('phone-wrap');
  const err = document.getElementById('phone-err');
  if (show) {
    wrap.classList.add('border-red-500');
    wrap.classList.remove('border-neutral-300');
    err.classList.remove('hidden');
  } else {
    wrap.classList.remove('border-red-500');
    wrap.classList.add('border-neutral-300');
    err.classList.add('hidden');
  }
}

function validateName() {
  const ok = document.getElementById('name').value.trim().length >= 2;
  setError('name', 'name-err', !ok);
  return ok;
}

function validateEmail() {
  const val = document.getElementById('email').value.trim();
  const ok = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val);
  setError('email', 'email-err', !ok);
  return ok;
}

function validatePhone() {
  const digits = cleanPhone(document.getElementById('phone').value);
  const ok = digits.length === 10;
  // Write cleaned value back so the server receives just 10 digits
  if (ok) document.getElementById('phone').value = digits;
  setPhoneError(!ok);
  return ok;
}

function handleSubmit() {
  const n = validateName();
  const e = validateEmail();
  const p = validatePhone();
  return n && e && p; // returning false blocks form submission
}
</script>
</body>
</html>
