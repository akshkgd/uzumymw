@extends('layouts.player')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<link rel="stylesheet" href="{{ asset('assets/css/ck.css') }}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<script src="{{ asset('assets/js/Sortable.min.js') }}"></script>

@section('content')
    <style>
        .fw-400 {
            font-weight: 400 !important;
        }
        .dl-btn{
            background-color: white;
            border: 1px solid red;
            padding: 12px 30px;
            color: red;
            font-size: 16px;
            cursor: pointer;
        }
        .save-btn{
            background-color: white;
            border: 1px solid #2d0069;
            padding: 12px 30px;
            color: #2d0069;
            font-size: 16px;
            cursor: pointer;
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
          position: fixed !important;
          bottom: 0;
          padding:16px;
          width:27.8%;
          background-color: #230050;;
          color: white;
          text-align: left;
          text-decoration: none;
          font-size: 16px 34px;
          position: sticky;
          bottom: 0;
          border-radius: 0 !important;
          /* display: inline-block; */
        }
        .sidebar{
          position: relative;
          height: calc(100vh - 60px); /* Adjust the padding/margins if necessary */
          overflow: auto;
        }
        .active{
          background-color: #ffffff !important;
          color: rgb(0, 64, 255) !important;

        }
        .active:hover{
          background-color: #ffffff !important;
          color: rgb(17, 77, 255) !important;
        }
        
        #item:hover{
          background-color: #ffffff !important;
          color: rgb(17, 77, 255) !important;
        }
        .ql-container.ql-snow {
            border: 1px solid #ccc;
            height: 200px;
        }
        #item{
          border: none !important;
          padding: 6px !important;
          font-size: 14px !important;
        }
        .additems{
            border: none !important;
            padding: 6px !important;
            font-size: 14px !important;
            text-decoration: none;
            display: flex;
            align-items: center;
            color: #4a00ac !important;
        }
        .addItems:hover{
          background-color: #ffffff !important;
          color: rgb(17, 77, 255) !important;
        }
        .modal-content {
            border-radius: 0 !important;
        }
        .rounded-none{
            border-radius: 0 !important;
        }
        .modal-header{
            border: none;
        }
        input{
            border-radius: 0 !important;
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

                    <div id="sortable-list">
                      @foreach($sections as $section)
                          <div class="sortable-section" data-batch-id="{{ $section->batchId }}" data-section-id="{{ $section->id }}">
                              <ul class="sortable-section-list" style="list-style-type:none;">
                                  <li>
                                      {{ $section->name }}
                                      <div class="sortable-content">
                                          <ul class="sortable-content-list" style="list-style-type:none;">
                                              @foreach ($section->chapters as $c)
                                                  <li data-id="{{ $c->id }}">
                                                      <a id="item" class="sortable-item {{ $c->id == $currentContent->id ? 'active' : ' ' }}"
                                                         href="{{ route('addCourseContent', ['id' => $batch->id, 'contentId' => $c->id]) }}">
                                                          <!-- Your content here -->
                                                          @if ($c->type == 2)
                                                              <i class="bi bi-play fs-5"></i>
                                                          @else
                                                              <i class="bi bi-text-left" ></i>
                                                          @endif
                                                          {{ $c->title }}
                                                      </a>
                                                  </li>
                                              @endforeach
                                              {{-- <a id="item" href=""><i class="bi bi-plus fs-5"></i> Add chapter items</a> --}}
                                              <a id="addChapterBtn" class="addItems d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#addModal">
                                                <i class="bi bi-plus fs-5"></i> Add chapter items
                                            </a>
                                          </ul>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      @endforeach
                  </div>
                    {{-- <a href="" class="">Add Chapter</a> --}}
                    <button type="button" class="addBtn btn" data-bs-toggle="modal" data-bs-target="#addSection">
                        Add new Section
                      </button>
                </div>

                <div class="col-span-8 player text-left">
                    @if($currentContent)
                <div>
                  <form action="{{ route('updateContent') }}" method="POST" class="">
                    @csrf
                    <input type="hidden" name="batchId" value="{{$batch->id}}">
                    <input type="hidden" name="contentId" value="{{$currentContent->id}}">

                <div class="">
                    {{-- <div class="text-sm-center text-md-left mb-3 mb-md-1 mb-lg-2 ">
                        <span class="badge badge-pill badge-primary bg-primary-alt-2 text-primary text-center lead m-1">Add Course Content</span>
                      </div> --}}
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
                      <div class="form-floating mb-2 mt-2">
                        <input type="text" value="{{$currentContent->accessOn}}" class="form-control" id="floatingInput" name="accessOn" placeholder="Content">
                        <label for="floatingInput">Access On</label>
                      </div>

                      
                      <div>
                        <button type="submit" class="save-btn">Save Course</button>
                        {{-- <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="dl-btn" type="submit">Delete</button>
                        </form> --}}
                        
                      </div>
                      
                </div>
                  </form>
            </div> 
            @else
            <div>
                
                <h1>No content available! Add the videos or assignments now.</h1>

            </div>
            @endif
        </div>
                </div>
                
                </div>
            </div>
                  
    </section>

    <div class="modal " id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add chapter item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addChapterForm" action="{{ route('addContent') }}" method="POST">
                        <input type="hidden" name="sectionId" id="sectionIdInput" value="">
                    <input type="hidden" name="batchId" value="{{$batch->id}}">

                        <p class="small mb-0 text-danger">Add 1 for assignments and 2 for recordings</p>
                        <div class="form-floating">
                            <input type="number" class="form-control" id="floatingInput" name="type" placeholder="Content Title" value="1">
                            <label for="floatingInput">Assignment / Recordings </label>
                          </div>
                          <div class="form-floating mt-2 mb-2">
                            <input type="text" class="form-control" id="floatingInput" name="title" placeholder="Content Title">
                            <label for="floatingInput">Assignment / Video Title</label>
                          </div>
                        <button type="submit" class="btn btn-primary">Add Chapter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- add course modal --}}

    <div class="modal fade" id="addSection" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add Section</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('addSection') }}" method="POST" class="">
                    @csrf
                    <input type="hidden" name="batchId" value="{{$batch->id}}">
                <div class="">
                      
                      
                    <div class="form-floating mb-2 mt-2">
                        <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Content">
                        <label for="floatingInput">Section Name</label>
                      </div>
            
                      
                      <div>
                        <button type="submit" class="btn btn-primary">Add Content</button>
                      </div>
            </div>
            
          </div>
        </div>
      </div>

    

          {{-- modal ends --}}





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
@if($currentContent)
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

{{-- sortable --}}

{{-- old sort ends and new start --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
      var sortableSections = new Sortable(document.getElementById('sortable-list'), {
          animation: 150,
          handle: '.sortable-section',
          onEnd: function (evt) {
              updateSortOrder('section', evt.oldIndex, evt.newIndex, evt);
          }
      });

      // Initialize Sortable for content independently for each section
      var sortableContents = document.querySelectorAll('.sortable-content');
      sortableContents.forEach(function (sortableContent) {
          new Sortable(sortableContent.querySelector('.sortable-content-list'), {
              animation: 150,
              handle: '.sortable-item',
              onEnd: function (evt) {
                  updateSortOrder('content', evt.oldIndex, evt.newIndex, evt);
              }
          });
      });

      function updateSortOrder(type, oldIndex, newIndex, evt) {
          var sortedOrder;
          if (type === 'section') {
              sortedOrder = Array.from(document.querySelectorAll('.sortable-section')).map(function (section) {
                  return {
                      batchId: section.getAttribute('data-batch-id'),
                      sectionId: section.getAttribute('data-section-id')
                  };
              });
          } else if (type === 'content') {
              // Get the section ID from the current dragged item's parent section
              var sectionId = evt.from.closest('.sortable-section').getAttribute('data-section-id');

              sortedOrder = Array.from(document.querySelectorAll('.sortable-section[data-section-id="' + sectionId + '"] .sortable-content-list li')).map(function (content) {
                  return content.getAttribute('data-id');
              });
          }

          fetch("{{ route('updateSortOrder') }}", {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': '{{ csrf_token() }}',
              },
              body: JSON.stringify({
                  sortedOrder: sortedOrder,
                  type: type
              }),
          })
              .then(response => response.json())
              .then(data => {
                  console.log(data)
              })
              .catch(error => {
                  console.log(error)
              });
      }
  });
</script>
<script>
    document.getElementById('sortable-list').addEventListener('click', function (event) {
        var addButton = event.target.closest('.addItems');
        if (addButton) {
            var sectionId = addButton.closest('.sortable-section').getAttribute('data-section-id');
            document.getElementById('sectionIdInput').value = sectionId;
        }
    });
</script>

@endif
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" async crossorigin="anonymous"></script>

@endsection


