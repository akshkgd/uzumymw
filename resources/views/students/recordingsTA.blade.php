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
    <style>
      [x-cloak] {
        display: none;
      }
      .desc a{
        color: rgb(0, 128, 255) !important;
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
    @if($intro == 'true')
      @include('layouts.coursePageIntro')
    @endif


{{-- player --}}

@if($intro == 'false')
@if($isVideoUnlocked)
@if($video->type == 2)
    @include('layouts.coursePagePlayer')
    
  @else
  @include('layouts.coursePageArticle')
  @endif
  @endif
  @if($isVideoUnlocked == false)
    @include('layouts.coursePageTimer')
  @endif
  @endif
  {{-- subscription not active --}}
  @else
  <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
      
      <h2 class="text-center text-xl -mt-1 font-bold leading-9 tracking-tight text-gray-900">{{$enrollment->batch->name}}</h2>
      <p class="bg-white text-md px-6 text-red-600 text-center">Your Subscription for full stack is not active! Contact the support team at <span class="text-blue-600">info@codekaro.in</span> for more details.</p>
      <div class="flex justify-center gap-2">
        <a href="" class="bg-black text-white px-5 py-3 rounded-xl inline-block mt-6">Resume subscription</a>
        <!-- <a href="" class="border px-5 py-3 rounded-lg inline-block mt-6">Important Links</a> -->
        
      </div>
      
      
      
      
      <div class="text-center flex gap-2 absolute left-1/2 translate-x-[-50%] bottom-0 mb-5">
        <a href="" class=" py-3 px-4 text-neutral-500 rounded-lg inline-block mt-6">Continue watching: Javascript Foundation</a>
        <a href="" class=" py-3 px-4 text-neutral-500  rounded-lg inline-block mt-6">Back to Dashboard</a>
      </div>
    </div>
    
  </main>
  @endif
  
  

</body>
</html>