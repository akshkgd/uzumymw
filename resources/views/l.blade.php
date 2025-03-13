<!DOCTYPE html>
<html class="h-full bg-white">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Read authentic reviews from 32,000+ satisfied Codekaro students. Discover how our courses have helped students transform their careers and coding skills.">
    <meta name="keywords" content="codekaro reviews, codekaro feedback, codekaro student testimonials, coding bootcamp reviews, learn coding reviews, programming course feedback, codekaro student experiences">
    <title>Student Reviews & Feedback | Codekaro - Real Learning Experiences</title>
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Student Reviews & Feedback | Codekaro - Real Learning Experiences">
<meta property="og:description" content="Read authentic reviews from 32,000+ satisfied Codekaro students. Discover how our courses have helped students transform their careers and coding skills.">
<meta property="og:image" content="{{ asset('images/codekaro-reviews-banner.jpg') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="Student Reviews & Feedback | Codekaro - Real Learning Experiences">
<meta property="twitter:description" content="Read authentic reviews from 32,000+ satisfied Codekaro students. Discover how our courses have helped students transform their careers and coding skills.">
<meta property="twitter:image" content="{{ asset('images/codekaro-reviews-banner.jpg') }}">

<!-- Canonical URL -->
<link rel="canonical" href="{{ url('/reviews') }}">
<link href="{{asset('css/app.css')}}" rel="stylesheet" />
</head>
<body>

<div class="max-w-5xl 2xl:max-w-7xl mx-auto mt-32 mb-12">
    <div class="my-8 text-center">
        <h1 class="text-3xl font-black tracking-tight">Student Reviews & Feedback</h1>
        <p class="text-base mt-1 text-neutral-800">Here's what 32,160+ satisfied students have to say about learning with Codekaro.</p>
    </div>
    <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
        @foreach($feedbacks as $feedback)
        @if($feedback->status == 0)
        <div class="break-inside-avoid  p-3 feedback-card bg-white border rounded-3xl">
            <div class="flex mb-3 justify-content-between align-items-center">
                <div class="flex items-center gap-3">
                    <img loading="lazy" src="{{$feedback->user->avatar}}" class="avatar-sm-sm w-12 h-12 rounded-full" alt="{{$feedback->user->name}}">
                    <div>
                        <p class="m-0 text-dark font-bol">{{$feedback->user->name}}</p>
                        <p class="-mt-1 text-sm text-neutral-600">{{$feedback->user->college}}</p>
                    </div>
                </div>
            </div>{{$feedback->feedback}}</p>
            
        </div>
        @endif
        @endforeach
    </div>
</div>



</body>
</html>