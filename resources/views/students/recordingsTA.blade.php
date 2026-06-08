<!DOCTYPE html>
<html class="h-full bg-white">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Primary Meta Tags -->
    <title>{{ $video->title ?? 'Course' }} | {{ Auth::user()->name ?? 'Guest' }}</title>
    <meta name="description" content="Learn {{ $enrollment->batch->name ?? 'programming' }} with CodeKaro's interactive online courses">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
    <style>
      [x-cloak] {
        display: none;
      }
      .desc a{
        color: rgb(0, 128, 255) !important;
      }
      body {
        /* font-family: "Inter", sans-serif; */
        font-optical-sizing: auto;
      }
      .cal-sans {
        font-family: "Cal Sans", sans-serif;
        font-weight: 400;
        font-style: normal;
      }
      
    </style>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9323KT1W2S"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9323KT1W2S');
</script>
  </head>
  <body class="font-geis">
    <div id="main">
    @include('layouts.coursePageHeader')

    <!-- intro -->
    @if($subStatus == true)
      <div id="course-intro-section" style="display: {{ $intro == 'true' ? 'block' : 'none' }}">
          @include('layouts.coursePageIntro')
      </div>

      <div id="player-wrapper" style="display: {{ ($intro == 'false' && $isVideoUnlocked && $video->type == 2) ? 'block' : 'none' }}">
          @include('layouts.coursePagePlayer')
      </div>

      <div id="coding-lab-wrapper" style="display: {{ ($intro == 'false' && $isVideoUnlocked && $video->type == 4) ? 'block' : 'none' }}">
          @include('layouts.coursePageCodingLab')
      </div>

      <div id="article-wrapper" style="display: {{ ($intro == 'false' && $isVideoUnlocked && $video->type != 2 && $video->type != 4) ? 'block' : 'none' }}">
          @include('layouts.coursePageArticle')
      </div>

      <div id="timer-wrapper" style="display: {{ ($intro == 'false' && !$isVideoUnlocked) ? 'block' : 'none' }}">
          @include('layouts.coursePageTimer')
      </div>
    @else
      <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm"></div>
        <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
          <h2 class="text-center text-xl -mt-1 font-bold leading-9 cal-sans text-neutral-900">Access Expired </h2>
          <p class="bg-white text-md px-6 text-neutral-800 text-center">Your access for {{$enrollment->batch->name}} has come to an end! But we're just a message away if you need more time or feel there's been a mistake.</p>
          <div class="flex justify-center gap-2">
            @php
              $message = "Hey, my access to " . $enrollment->batch->name . " has expired, can you help? My email ID is " . Auth::user()->email;
              $whatsappUrl = "https://wa.me/919452959744?text=" . urlencode($message);
            @endphp
            <a href="{{ $whatsappUrl }}" target="_blank" class="bg-black text-white px-5 py-3 rounded-xl inline-block mt-6">Contact Support Team</a>
          </div>
        </div>
      </main>
    @endif

    <script>
      // Global State for the active video
      window.activeVideo = {
          id: {{ $video->id ?? 'null' }},
          batchId: {{ $video->batchId ?? 'null' }},
          title: {!! json_encode($video->title ?? '') !!},
          videoLink: {!! json_encode($video->videoLink ?? '') !!},
          desc: {!! json_encode($video->desc ?? '') !!},
          isUnlocked: {{ $isVideoUnlocked ? 'true' : 'false' }},
          isCompleted: {{ (optional($video->userProgress(Auth::user()->id))->status == 1) ? 'true' : 'false' }},
          intro: '{{ $intro }}'
      };
      window.resumeFrom = {{ optional($video->userProgress(Auth::user()->id))->progress ?? 0 }};
      window.hasResumed = false;

      function switchVideo(videoId, videoLink, title, desc, url, isUnlocked, isCompleted, resumeFrom) {
          // 1. Update State
          window.activeVideo.id = videoId;
          window.activeVideo.videoLink = videoLink;
          window.activeVideo.title = title;
          window.activeVideo.desc = desc;
          window.activeVideo.isUnlocked = isUnlocked;
          window.activeVideo.isCompleted = isCompleted;
          window.activeVideo.intro = 'false';
          window.resumeFrom = resumeFrom;
          window.hasResumed = false;

          // 2. Push state to update URL
          history.pushState(null, '', url);

          // 3. Hide Intro Section
          const introEl = document.getElementById('course-intro-section');
          if (introEl) introEl.style.display = 'none';

          // 4. Update Header Mark Complete Button
          if (typeof updateMarkCompleteButton === 'function') {
              updateMarkCompleteButton();
          }

          // 5. Update Sidebar active states
          updateSidebarActiveState(videoId);

          // 6. Toggle Layout wrappers based on unlock status
          const playerWrapper = document.getElementById('player-wrapper');
          const timerWrapper = document.getElementById('timer-wrapper');
          const articleWrapper = document.getElementById('article-wrapper');

          if (!isUnlocked) {
              if (playerWrapper) playerWrapper.style.display = 'none';
              if (articleWrapper) articleWrapper.style.display = 'none';
              if (timerWrapper) timerWrapper.style.display = 'block';
          } else {
              if (timerWrapper) timerWrapper.style.display = 'none';
              if (playerWrapper) {
                  playerWrapper.style.display = 'block';
                  
                  const cleanLink = videoLink.includes('/') ? videoLink : `200867/${videoLink}`;
                  const newIframeSrc = `https://iframe.mediadelivery.net/embed/${cleanLink}?autoplay=true&loop=false&muted=false&preload=true&responsive=true`;
                  
                  const iframe = document.getElementById('bunny-stream-embed');
                  if (iframe) {
                      iframe.src = newIframeSrc;
                  }
              }
          }

          // 7. Update Title & Description on page
          const titleEl = document.getElementById('title');
          if (titleEl) titleEl.innerText = title;

          const descEl = document.querySelector('.desc');
          if (descEl) descEl.innerHTML = desc;
      }

      function updateSidebarActiveState(videoId) {
          document.querySelectorAll('[class*="chapter-link-"]').forEach(el => {
              el.classList.remove('bg-orange-100', 'text-orange-600', 'font-medium', 'bg-orange-100');
              el.classList.add('bg-neutral-100');
          });

          document.querySelectorAll(`.chapter-link-${videoId}`).forEach(el => {
              el.classList.remove('bg-neutral-100');
              el.classList.add('bg-orange-100', 'text-orange-600', 'font-medium');
          });
      }

      function addCheckmarkToSidebar(videoId) {
          document.querySelectorAll(`.checkmark-container-${videoId}`).forEach(el => {
              el.innerHTML = `
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-check-all text-green-600 -ml-2" viewBox="0 0 16 16">
                      <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z" />
                  </svg>
              `;
          });
      }
    </script>
  
  

</body>
</html>