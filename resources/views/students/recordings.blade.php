@extends('layouts.player')
<link rel="stylesheet" href="{{ asset('css/ck-plyr.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">



@section('content')
    <style>
        /* .plyr__controls .plyr__controls__item[data-plyr="fast-forward"] {
    background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="67" height="67" fill="none" viewBox="0 0 67 67"%3E%3Cpath fill="%23fff" fill-rule="evenodd" d="M46.332 5.773a4.125 4.125 0 0 0-4.125 4.125v46.75a4.127 4.127 0 0 0 4.125 4.125 4.127 4.127 0 0 0 4.125-4.125V9.898a4.125 4.125 0 0 0-4.125-4.125zM25.707 9.898v46.75a4.125 4.125 0 1 1-8.25 0V9.898a4.123 4.123 0 0 1 4.125-4.125 4.123 4.123 0 0 1 4.125 4.125z" clip-rule="evenodd"%3E%3C/svg%3E');
    background-size: contain; /* Adjust as needed */
    /* Additional styles as needed */
}


    .plyr__controls .plyr__controls__item[data-plyr="rewind"] {
        background-image: url('path/to-your-custom-rewind-icon.svg');
    } */
        .ytp-chrome-top-buttons{
                display:none;
            }
        .fw-400 {
            font-weight: 400 !important;
        }
        .plyr__control--overlaid {
            background: #230050e9 !important;
            border: 0;
            font-size: 30px;
        }
        .plyr__control--overlaid:hover{
            background: #230050 !important;
        }
        .plyr--video{
            background: #230050 !important;

        }
        .plyr--full-ui input[type=range] {
            color: #ffffff !important;

        }
        .plyr__control {
                background: transparent;
                color: #fff;
        }
        .plyr__control:hover {
                background: #2d0069 !important;
                color: #fff;
        }
        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* Aspect ratio 16:9 */
            overflow: hidden;
            transition: opacity 0.3s;
        }
        .player-ea4b66e4-85a5-49b9-9193-f022dc194687{
            background: black !important;
        }
        .video-container:hover {
            opacity: 1;
        }

        #vimeoPlayer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .custom-controls {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            height: 20%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: opacity 0.3s;
            opacity: 0;
            z-index: 1; /* Ensure controls are on top */
        }

        .video-container:hover .custom-controls {
            opacity: 1;
        }

        .custom-controls button {
            background: transparent;
            border: none;
            cursor: pointer;
            font-size: 34px;
            color: #b7b7b7c3; 
            transition: color 0.3s;
        }

        .custom-controls button:hover {
            color: #ffffff;
            cursor: pointer;
        }

        .custom-controls button i {
            display: block;
        }
        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* Aspect ratio 16:9 */
            overflow: hidden;
            transition: opacity 0.3s;
        }
        .player-ea4b66e4-85a5-49b9-9193-f022dc194687{
            background: black !important;
        }
        .video-container:hover {
            opacity: 1;
        }

        #vimeoPlayer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .custom-controls {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            height: 20%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: opacity 0.3s;
            opacity: 0;
            z-index: 1; /* Ensure controls are on top */
        }

        .video-container:hover .custom-controls {
            opacity: 1;
        }

        .custom-controls button {
            background: transparent;
            border: none;
            cursor: pointer;
            font-size: 34px;
            color: #b7b7b7c3; 
            transition: color 0.3s;
        }

        .custom-controls button:hover {
            color: #d5d5d5c3; 
            cursor: pointer;
        }

        .custom-controls button i {
            display: block;
        }
    </style>

    
  {{-- <nav class="navbar p-5 shadow" data-overlay>
    <a href="" class="logo" style=""><img src="{{asset('assets/img/color-1.svg')}}" height="30" alt=""> </a>
    <a href="{{url('/home')}}" class="btn">Back to dashboard</a>
</nav> --}}



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
                <span class="intro-desc">{{ $content->where('type', 2)->count() }} Videos <span class="text-xs">({{ $content->where('type', 1)->count() }} Assignments)</span></span>
                <div>
                    <a href="{{url('/home')}}" class="back"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                      </svg>  Back to dashboard</a>
                </div>
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
        @if(strlen($video->videoLink)>10)
        <div id="js-player" class="js-player" data-plyr-provider="youtube"
            data-plyr-embed-id="{{ $video->videoLink }}"></div>
        @else
        {{-- <div style="padding:50% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/{{$video->videoLink}}?autoplay=1&badge=0&amp;autopause=0&amp;quality_selector=1&amp;progress_bar=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Recording   CSS Media Queries - 651d75bfe4b0e4a748954b62 (1)"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script> --}}
        <div class="video-container">
            <iframe id="vimeoPlayer" src="https://player.vimeo.com/video/{{$video->videoLink}}?autoplay=1&badge=0&amp;autopause=0&amp;quality=720p" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="Recording CSS Media Queries - 651d75bfe4b0e4a748954b62 (1)"></iframe>
            <div class="custom-controls">
                <button id="fastBackwardButton" class="icon-backward"><i class="bi bi-arrow-counterclockwise"></i></button>
                <button id="playPauseButton" class="icon-play"><i class="bi bi-play"></i></button>
                <button id="fastForwardButton" class="icon-forward"><i class="bi bi-arrow-clockwise"></i></button>
            </div>
        </div>
    
        <script src="https://player.vimeo.com/api/player.js"></script>
        <script>
            const iframe = document.getElementById('vimeoPlayer');
            const player = new Vimeo.Player(iframe);
            let isPlaying = false;
        
            function updatePlayButton() {
                const playPauseButton = document.getElementById('playPauseButton');
                if (isPlaying) {
                    playPauseButton.innerHTML = '<i class="bi bi-pause"></i>';
                } else {
                    playPauseButton.innerHTML = '<i class="bi bi-play"></i>';
                }
            }
        
            document.getElementById('fastBackwardButton').addEventListener('click', function() {
                player.getCurrentTime().then(function(seconds) {
                    player.setCurrentTime(seconds - 10);
                });
            });
        
            document.getElementById('playPauseButton').addEventListener('click', function() {
                if (isPlaying) {
                    player.pause();
                } else {
                    player.play();
                }
            });
        
            document.getElementById('fastForwardButton').addEventListener('click', function() {
                player.getCurrentTime().then(function(seconds) {
                    player.setCurrentTime(seconds + 10);
                });
            });
        
            player.on('play', function() {
                isPlaying = true;
                updatePlayButton();
            });
        
            player.on('pause', function() {
                isPlaying = false;
                updatePlayButton();
            });
        </script>
        @endif
        
    @endif
            {{-- text --}}
            <div class="mt-5">
                <h1 class="lead-1 pt-2 pb-0" id="title">{{ $video->title }}</h1>

                {!! $video->desc !!}
                {{ $video->id }}
                
            </div>
    <script>
        
    </script>
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
                // 'airplay', // Airplay (currently Safari only)
                // Show a download button with a link to either the current source or a custom URL you specify in your options
                'fullscreen' // Toggle fullscreen
            ];

            const player = Plyr.setup('.js-player', {
                controls
            });
            player.play();
                player.muted = true;
                player.currentTime = 100;
                
        });
    </script>
    <script>
        document.onload = function(){
            .ytp-chrome-top-buttons{
                display:none;
            }
        }
    </script>
@endsection
