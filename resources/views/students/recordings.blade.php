@extends('layouts.player')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" rel="preload" type="text/css" href="{{asset('assets/fonts/Geist-Regular.woff2')}}" />
<link rel="stylesheet" href="{{ asset('css/ck-plyr.css') }}">
@section('content')
    <style>
        /* .plyr__controls .plyr__controls__item[data-plyr="fast-forward"] {
    background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="67" height="67" fill="none" viewBox="0 0 67 67"%3E%3Cpath fill="%23fff" fill-rule="evenodd" d="M46.332 5.773a4.125 4.125 0 0 0-4.125 4.125v46.75a4.127 4.127 0 0 0 4.125 4.125 4.127 4.127 0 0 0 4.125-4.125V9.898a4.125 4.125 0 0 0-4.125-4.125zM25.707 9.898v46.75a4.125 4.125 0 1 1-8.25 0V9.898a4.123 4.123 0 0 1 4.125-4.125 4.123 4.123 0 0 1 4.125 4.125z" clip-rule="evenodd"%3E%3C/svg%3E');
    background-size: contain; /* Adjust as needed */
    /* Additional styles as needed */


body{
    background-color: #ffffff !important;
    /* font-family: 'Poppins', sans-serif !important; */
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
            color: #ffffff; 
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
            color: #fff; 
            transition: color 0.3s;
        }

        .custom-controls button:hover {
            color: #fff; 
            cursor: pointer;
        }

        .custom-controls button i {
            display: block;
        }
        .accordion-item {
            border: none
        }
        .accordion-button:not(.collapsed){
            box-shadow: none;
            background-color: #fff;
            color: #230050;
        }
        .accordion-button:focus{
            outline: none;
            box-shadow: none
        }
        .accordion-item:first-of-type .accordion-button {
            border-radius: 0;
        }
        #item{
            color: rgb(26, 26, 26) !important;
            font-size: 15px !important;
            /* background-color: #ffecec; */
        }
        #item:hover{
            background-color: #eee !important;
            color: black !important;
        }
        .sidebar{
            /* background-color: #950000; */
            /* border: none */
        }
        .button.PlayButton_module_playButton__fc6bec57 {
            border-radius: 50% !important;
            width: 5.6em !important;
            height:5.6em !important;
        }
        .vp-center{
            display: flex !important;
            justify-content: start !important;
        }
        .player .vp-video-wrapper.transparent {
            border-radius: 10px !important}
    </style>
{{-- <div class="navbar bg-white px-2" style="border-bottom:1px solid #eee; background-color:white">
    <div class="d-flex align-items-center">
        <img src="{{asset('assets/img/black.svg')}}" height="42" alt="">
    </div>
                    
    <div>
        <a href="" class="d-flex align-items-center" style="gap:6px;border:1px solid rgb(147, 147, 147); padding:12px 30px; border-radius: 12px; text-decoration:none; color: black; margin-left:24px"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
          </svg>Back to dashboard</a>

    </div>
</div> --}}


    @isset($content)
        @if ($content->count() > 0)
            <section>

<div class="">
    <div class="player-container " style="margin-top: 0px" >
     {{-- <div class="flex flex-col-reverse grid-cols-5 gap-10 pt-5 mt-0 lg:grid">  --}}
        
        <div class="sidebar" style="">
            <div class="intro">
          <svg xmlns="http://www.w3.org/2000/svg" data-testid="geist-icon" stroke-linejoin="round" style="width:23px;height:25px;color:var(--ds-gray-1000)" viewBox="0 0 16 16" aria-label="Vercel logo"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 1L16 15H0L8 1Z" fill="currentColor"></path></svg>

        {{-- <img src="{{asset('assets/img/black.svg')}}" height="36" class="mb-4" alt=""> --}}

                <h2 class="intro-title fw-bold mt-4">{{$enrollment->batch->name}}</h2>
                <span class="intro-desc">{{ $content->where('type', 2)->count() }} Videos <span class="text-xs">({{ $content->where('type', 1)->count() }} Assignments)</span></span>
                <div>
                    {{-- <a href="" class="d-flex align-items-center" style="gap:6px;border:1px solid rgb(147, 147, 147); padding:12px 30px; border-radius: 12px; text-decoration:none; color: black; margin: 20px 0;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                      </svg>Back to dashboard</a> --}}
                    <a href="{{url('/home')}}" class="back"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                      </svg>  Back to dashboard</a>
                </div>
                
            </div>
            @if (isset($sections) && !$sections->isEmpty())
            <div class="accordion" id="accordionExample">
                @foreach($sections as $section)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#section{{$section->id}}" aria-expanded="true" aria-controls="section{{$section->id}}">
                                {{ $section->name }}
                            </button>
                          </h2>
                            
                                
                          <div id="section{{$section->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="">
                                        @foreach ($section->chapters as $c)
                                        @if($accessTill >=  $c->accessOn )
                                        <a id="item" style="font-size: 16px;" class="{{ $c->id == $video->id ? 'active' : ' ' }}"  href="{{ route('recordings', ['batchId' => $batchId, 'cId' => Crypt::encrypt($c->id)]) }}">
                                            @if($c->type == 2)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                                                <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/>
                                              </svg>
                                              @elseif($c->type == 3)
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-broadcast" viewBox="0 0 16 16">
                                                <path d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707m2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708m5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708m2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0"/>
                                              </svg>
                                              @else
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-text-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                              </svg>
                                              @endif
                                                {{$c->title}}
                                            
                                        </a> 
                                        @endIf
                                        @endforeach
                                    </div>
                                </div>    
                    </div>
                @endforeach
            </div>
            @else
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
                @endif
</div>
<div class=" player text-left">
    
    @if($video->type == 3)
    <div class="text-cente">
        <h2 class="fs-4 fw-bold mt-5">{{$video->title}}</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate fuga reprehenderit eius! Fugit suscipit dolor molestias error nesciunt, fuga iste eius molestiae maxime aliquam, in, accusamus quis voluptates soluta cupiditate obcaecati itaque. Corrupti laboriosam perspiciatis, deserunt cumque facilis asperiores labore excepturi accusamus enim omnis in fugit hic unde voluptate, earum velit animi a ipsam porro?</p>
        <form action="">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>

              <a href="" class="btn btn-dark">Submit Assignment</a>
        </form>
    </div>
    @elseif ($video->videoLink != '' && $video->type == 2)
        @if(strlen($video->videoLink)<12)
        <div id="js-player" class="js-player" data-plyr-provider="youtube"
            data-plyr-embed-id="{{ $video->videoLink }}"></div>
        

        @else
        <div class="video-container">
            {{-- <div style="position:relative;padding-top:56.25%;"><iframe src="https://iframe.mediadelivery.net/embed/200867/20ccfbaf-7651-407d-b12b-a6c072178b35?autoplay=true&loop=false&muted=false&preload=true&responsive=true" loading="lazy" style="border:0;position:absolute;top:0;height:100%;width:100%;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true"></iframe></div> --}}
            {{-- <iframe id="vimeoPlayer" src="https://player.vimeo.com/video/{{$video->videoLink}}?autoplay=1&badge=0&amp;autopause=0&amp;quality=720p" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="Recording CSS Media Queries - 651d75bfe4b0e4a748954b62 (1)"></iframe> --}}
            <div style="position:relative;padding-top:56.25%;"><iframe src="https://iframe.mediadelivery.net/embed/200867/{{$video->videoLink}}?autoplay=true&loop=false&muted=false&preload=true&responsive=true" loading="lazy" style="border:0;position:absolute;top:0;height:100%;width:100%;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true"></iframe></div>
        </div>
    
        {{-- <script src="https://player.vimeo.com/api/player.js"></script> --}}
        
        
          
        @endif
        
    @endif
            {{-- text --}}
            <div class="mt-3">
                <h1 class="fw-bold fs-3 pt-2 pb-0" id="title">{{ $video->title }}</h1>
                {!! $video->desc !!}
                {{-- {{ $video->id }} --}}
                
            </div>
    <script>
        
    </script>
    <div>
    </div>
</div>
    </div>



{{-- <div class="sidebar">
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
</div> --}}

{{-- tailwind ends --}}





                <div class="container" style="padding:0 !important;">
                    <div class="row justify-content-center">
                      <div class="col-lg-4 col-xl-4 d-non" style="display: none">
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
                            <div class="text-center">
                                <img src="{{ asset('assets/img/nf.svg') }}" alt="" class="rec-nf-im" height="200">
                                <h1 class="fs-4 fw-bold mt-3">No recordings found! </h1>
                                <p class="">Content will be added shortly, for more details get in touch with your mentor.</p>
                            <a href="{{ url('/home') }}" class="btn-outline px-4">Back to Dashboard</a>
                            
                            </div>
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
    <script>
     document.addEventListener("DOMContentLoaded", function() {
    // Get all elements with the class 'active'
    var activeContentElements = document.querySelectorAll('.accordion-item a.active');

    // Loop through each element and find its parent accordion item
    activeContentElements.forEach(function(activeContentElement) {
        var accordionItem = findAccordionItem(activeContentElement);

        // If the accordion item is found, add the 'show' class to make it visible
        if (accordionItem) {
            accordionItem.querySelector('.accordion-collapse').classList.add('show');
        }
    });

    // Function to find the parent accordion item of a content element
    function findAccordionItem(element) {
        var currentElement = element;

        // Keep going up the DOM until an accordion-item is found or reach the top
        while (currentElement && !currentElement.classList.contains('accordion-item')) {
            currentElement = currentElement.parentElement;
        }

        return currentElement;
    }
});

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection
