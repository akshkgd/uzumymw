@extends('layouts.player')
{{-- <link rel="stylesheet" href="{{ asset('css/ck-plyr.css') }}"> --}}
{{-- <link rel="stylesheet" href="//cdn.quilljs.com/1.3.6/quill.bubble.css"> --}}
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


@section('content')
    <style>
        .fw-400 {
            font-weight: 400 !important;
        }

        .plyr__control--overlaid {
            background: #230050e9 !important;
            border: 0;
            font-size: 30px;
        }

        .plyr__control--overlaid:hover {
            background: #230050 !important;
        }

        .plyr--video {
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
        .addBtn{
          /* position: fixed; */
          bottom: 0;
          padding:16px;
          width:100%;
          background-color: #230050;;
          color: white;
          /* text-align: center; */
          text-decoration: none;
          font-size: 16px 34px;
          position: sticky;
          bottom: 0;
          display: inline-block;
        }
        .sidebar{
          height: calc(100vh - 60px); /* Adjust the padding/margins if necessary */
          overflow: auto;
        }
        .active{
          background-color: #eee !important;
          color: black !important;

        }
        .active:hover{
          background-color: #eee !important;
          color: black !important;
        }
        .ql-container.ql-snow {
            border: 1px solid #ccc;
            height: 200px;
}
        /*! CSS Used from: https://codekaro.in/assets/css/theme-software-library.css ; media=all */
@media all{
*,::after,::before{box-sizing:border-box;}
label{display:inline-block;margin-bottom:0.75rem;}
input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
input{overflow:visible;}
.form-control{display:block;width:100%;height:calc(1.5em + 0.875rem + 2px);padding:0.4375rem 0.75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid rgba(13, 12, 34, 0.05);border-radius:0.3125rem;transition:border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.form-control{transition:none;}
}
.form-control:focus{color:#495057;background-color:#fff;border-color:#ced4da;outline:0;}
.form-control::placeholder{color:#adb5bd;opacity:1;}
.form-control:disabled{background-color:#e9ecef;opacity:1;}
.mb-2{margin-bottom:0.75rem!important;}
.mt-3{margin-top:1.5rem!important;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
}
.form-control{transition:background-color 0.2s ease, border-color 0.2s ease,         opacity 0.2s ease;}
.form-control:disabled{opacity:0.5;}
@media (max-width: 767.98px){
.form-control{font-size:16px;}
}
.form-control{display:block;width:100%;padding:0.375rem 0.75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:0.25rem;transition:border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.form-control{transition:none;}
}
.form-control:focus{color:#212529;background-color:#fff;border-color:#86b7fe;outline:0;box-shadow:0 0 0 0.25rem rgba(13, 110, 253, 0.25);}
.form-control::placeholder{color:#6c757d;opacity:1;}
.form-control:disabled{background-color:#e9ecef;opacity:1;}
.form-floating{position:relative;}
.form-floating > .form-control{height:calc(3.5rem + 2px);padding:1rem 0.75rem;}
.form-floating > label{position:absolute;top:0;left:0;height:100%;padding:1rem 0.75rem;pointer-events:none;border:1px solid transparent;transform-origin:0 0;transition:opacity 0.1s ease-in-out, transform 0.1s ease-in-out;}
@media (prefers-reduced-motion: reduce){
.form-floating > label{transition:none;}
}
.form-floating > .form-control::placeholder{color:transparent;}
.form-floating > .form-control:focus,.form-floating > .form-control:not(:placeholder-shown){padding-top:1.625rem;padding-bottom:0.625rem;}
.form-floating > .form-control:focus ~ label,.form-floating > .form-control:not(:placeholder-shown) ~ label{opacity:0.65;transform:scale(0.85) translateY(-0.5rem) translateX(0.15rem);}
@media screen and (-ms-high-contrast: active),     screen and (-ms-high-contrast: none){
.card > div{max-width:100%;}
}
}
    </style>


    <nav class="navbar p-5 shadow" data-overlay>
        <a href=""><img src="{{ asset('assets/img/color-1.svg') }}" height="34" alt=""></a>
        <a href="{{ url('/home') }}" class="btn">Back to dashboard</a>
    </nav>

    <section>
        <div class="">
            <div class="player-container">
                <!-- <div class="flex flex-col-reverse grid-cols-5 gap-10 pt-5 mt-0 lg:grid"> -->

                <div class="sidebar">
                    <div class="intro">
                        <h2 class="intro-title">{{ $batch->name }}</h2>
                        <span class="intro-desc">{{ $batchContent->where('type', 2)->count() }} Videos <span
                                class="text-xs">({{ $batchContent->where('type', 1)->count() }} Assignments)</span></span>
                                
                    </div>
                    @foreach ($batchContent as $c)
                        <a id="item" class="{{Str::contains($c->id, $currentContent->id) ? 'active' : ' '}}"
                            href="{{ route('addCourseContent', ['id' => $batch->id, 'contentId' => $c->id]) }}"">
                            @if ($c->type == 2)
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-play" viewBox="0 0 16 16">
                                    <path
                                        d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-text-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            @endif
                            {{ $c->title }}

                        </a>
                    @endforeach
                    <a href="" class="addBtn">Add Chapter</a>
                </div>

                <div class="col-span-8 player text-left">
                <div>
                  <form action="{{ route('addContent') }}" method="POST" class="">
                    @csrf
                    <input type="hidden" name="batchId" value="{{$batch->id}}">
                <div class="card card-body">
                    <div class="text-sm-center text-md-left mb-3 mb-md-1 mb-lg-2 ">
                        <span class="badge badge-pill badge-primary bg-primary-alt-2 text-primary text-center lead m-1">Add Course Content</span>
                      </div>
                    {{-- <h3 class="pb-2">Course: {{$batch->name}}</h3> --}}

                    <div class="form-floating mt-3 mb-1">
                        <input type="number" value="{{$currentContent->type}}" class="form-control" id="floatingInput" name="type" placeholder="Content Title" value="1">
                        <label for="floatingInput">Assignment / Recordings </label>
                      </div>
                      <p class="small" style="color:red; font-size:14px; margin-top:4px">Add 1 for assignments and 2 for recordings</p>

                    
                      <div class="form-floating mt-3 mb-2">
                        <input type="text" value="{{$currentContent->title}}" class="form-control" id="floatingInput" name="title" placeholder="Content Title">
                        <label for="floatingInput">Assignment / Video Title</label>
                      </div>
                    

                      <div id="quill_editor" class="mb-2"></div>
                    <input type="hidden" id="quill_html" name="desc"></input>
                      
                    <div class="form-floating mb-2 mt-2">
                        <input type="text" value="{{$currentContent->videoLink}}" class="form-control" id="floatingInput" name="videoLink" placeholder="Content">
                        <label for="floatingInput">Youtube Video Id</label>
                      </div>

                      
                      <div>
                        <button type="submit" class="btn btn-primary">Save Course</button>
                      </div>
                      
                </div>

            </div>
        </div>
                </div>
                
                </div>
            </div>
                  
    </section>







    <script src='https://cdn.plyr.io/3.5.6/plyr.js'></script>
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
    <!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
{{-- <script>
  var quill = new Quill('#quill_editor', {
        theme: 'snow'
  });
quill.on('text-change', function(delta, oldDelta, source) {
    document.getElementById("quill_html").value = quill.root.innerHTML;
});
</script> --}}
<script>
  var quill = new Quill('#quill_editor', {
        theme: 'snow'
  });
quill.on('text-change', function(delta, oldDelta, source) {
    document.getElementById("quill_html").value = quill.root.innerHTML;
});

const value = `{!!$currentContent->desc!!}`;
const delta = quill.clipboard.convert(value);

quill.setContents(delta, 'silent')
</script>
@endsection
