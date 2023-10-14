@extends('layouts.player')
<link rel="stylesheet" href="{{ asset('css/ck-plyr.css') }}">
{{-- <link rel="stylesheet" href="{{asset('css/ck-plyr.css')}}"> --}}

@section('content')
    <style>
        .fw-400 {
            font-weight: 400 !important;
        }
    </style>

    
  <nav class="navbar p-5 shadow" data-overlay>
    {{-- <h3 class="intro-title">Web dev starter bootcamp</h3> --}}
    <img src="{{asset('assets/img/color-1.svg')}}" height="34" alt="">
  </nav>



    @isset($content)
        @if ($content->count() > 0)
            <section>


{{-- tailwind --}}
<div class="">
    <div class="player-container">
    <!-- <div class="flex flex-col-reverse grid-cols-5 gap-10 pt-5 mt-0 lg:grid"> -->
        
        <div class="sidebar">
            <div class="intro">
                <h2 class="intro-title">{{$enrollment->batch->name}}</h2>
                <span class="intro-desc">13 videos <small class="text-xs">(16+ Hours)</small></span>
            </div>
                @foreach ($content as $c)
                <a id="item" class="{{Str::contains($c->id, $video->id) ? 'active' : ' '}}"  href="{{ route('recordings', ['batchId' => $batchId, 'cId' => Crypt::encrypt($c->id)]) }}">
                    @if($c->type == 2)
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                        <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/>
                      </svg>
                      @else
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-text-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                      @endif
                        {{$c->title}}
                    
                </a>
                @endforeach
</div>
<div class="col-span-8 player text-left">
            
        @if ($video->videoLink != '' && $video->type == 2)
        <div id="js-player" class="js-player" data-plyr-provider={{strlen($video->videoLink)>10 ? "youtube" : "vimeo"}}
            data-plyr-embed-id="{{ $video->videoLink }}"></div>
    @endif
            {{-- text --}}
            <div class="mt-5">
                <h1 class="lead-1 pt-2 pb-0" id="title">{{ $video->title }}</h1>

                {!! $video->desc !!}
                {{ $video->id }}
                
            </div>
    
    <div>

{{-- tailwind ends --}}





                <div class="container" style="padding:0 !important;">
                    <div class="row justify-content-center">
                      <div class="col-lg-4 col-xl-4 d-none" style="display: none">
                        <div class=" card card-dark shadow-3 border-none border-end border-muted " style="height: 600px; overflow-y: auto;">
                            <div class="">
                                <h4 class="px-3 py-2 m-0 ck-font fw-400">Previous Recordings</h3>
                                    @foreach ($content as $c)
                                        <a href="{{ action('StudentController@recordings', [$batchId, Crypt::encrypt($c->id)]) }}"
                                            class="list-group-item-card list-group-item-action  lead fw-400"> <span
                                                class="mr-1"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" fill="currentColor" class="bi bi-play-circle"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                                                </svg></span> {{ $c->title }} </a>
                                    @endforeach


                            </div>
                        </div>
                    </div>
                        <div class="col-lg-8 p-0">
                            <div class="rounde o-hidde">



                                @isset($video)
                                    <div class="mx-5">
                                    {{-- @if ($video->videoLink != '')
                                        <div id="js-player" class="js-player" data-plyr-provider="youtube"
                                            data-plyr-embed-id="{{ $video->videoLink }}"></div>
                                    @endif --}}
                                    {{-- <div id="player" class="plyr" class="js-player" data-plyr-provider="youtube" data-plyr-embed-id="{{$video->videoLink}}"></div> --}}

                                    {{-- <div class="">
                                        <h1 class="lead-1 pt-2 pb-0" id="title">{{ $video->title }}</h1>

                                        {!! $video->desc !!}
                                        {{ $video->id }}
                                        
                                    </div> --}}
                                  </div>
                                </div>
                            @endisset




                        </div>
                        
                    </div>



                    

                </div>
                </div>
            </section>
        @else
            
                        <div class="rec-nf">
                            <img src="{{ asset('assets/img/nf.svg') }}" alt="" class="rec-nf-img">
                            <h1 class="lead-1">No recordings found! </h1>
                            <p class="lead">Recordings will be added shortly, for more details get in touch with your mentor.
                            </p>
                            {{-- <a href="{{ url('/home') }}" class="btn btn-primary fw-400">Homepage</a> --}}
                            {{-- <a href="{{ action('BatchController@batchDetails', $batchId) }}"
                                class="btn btn-outline-primary fw-400">Course Details</a> --}}

                        </div>
                    </div>

                </div>
            </section>
        @endif
    @endisset


    <script src='https://cdn.plyr.io/3.5.6/plyr.js'></script>
    {{-- <script src="{{asset('js/plyr.js')}}"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Controls (as seen below) works in such a way that as soon as you explicitly define (add) one control
            // to the settings, ALL default controls are removed and you have to add them back in by defining those below.

            // For example, let's say you just simply wanted to add 'restart' to the control bar in addition to the default.
            // Once you specify *just* the 'restart' property below, ALL of the controls (progress bar, play, speed, etc) will be removed,
            // meaning that you MUST specify 'play', 'progress', 'speed' and the other default controls to see them again.

            const controls = [
                'play-large', // The large play button in the center
                // 'restart', // Restart playback
                'rewind', // Rewind by the seek time (default 10 seconds)
                'play', // Play/pause playback
                'fast-forward', // Fast forward by the seek time (default 10 seconds)
                'progress', // The progress bar and scrubber for playback and buffering
                'current-time', // The current time of playback
                'duration', // The full duration of the media
                'mute', // Toggle mute
                'volume', // Volume control
                'captions', // Toggle captions
                'settings', // Settings menu
                // 'pip', // Picture-in-picture (currently Safari only)
                'airplay', // Airplay (currently Safari only)
                // Show a download button with a link to either the current source or a custom URL you specify in your options
                'fullscreen' // Toggle fullscreen
            ];

            const player = Plyr.setup('.js-player', {
                controls
            });

        });
    </script>
@endsection
