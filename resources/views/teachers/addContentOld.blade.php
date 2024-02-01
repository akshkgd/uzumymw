@extends('layouts.app')
@section('content')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<div class="navbar-container ">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-0 " data-overlay >
        @include('layouts.header')
    </nav>
</div>

{{-- Enrollment details --}}

{{-- batch details start --}}

<section class="pb-0">
    <div class="container pt-5 mt-lg-5 mt-xlg-5 mt-sm-0">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                @include('layouts.alert')

                <div class="card card-dark">
                    <div class="card-body">
                        <h3 class="pb-2">Course: {{$batch->name}}</h3>
                        <div class="my-1">
                          <a href="{{action('BatchController@classDetails', $batch->id )}}" class="btn ck-c-btn">Course Details</a>
                    <a href="{{action('TeacherController@enrollments', $batch->id )}}" class="btn ck-c-btn">Course Enrollments</a>
                        </div>
                    </div>
                </div>

                <form action="{{ route('addContent') }}" method="POST" class="">
                    @csrf
                    <input type="hidden" name="batchId" value="{{$batch->id}}">
                <div class="card card-body">
                    <div class="text-sm-center text-md-left mb-3 mb-md-1 mb-lg-2 ">
                        <span class="badge badge-pill badge-primary bg-primary-alt-2 text-primary text-center lead m-1">Add Course Content</span>
                      </div>
                    {{-- <h3 class="pb-2">Course: {{$batch->name}}</h3> --}}

                    <div class="form-floating mt-3 mb-2">
                        <input type="number" class="form-control" id="floatingInput" name="type" placeholder="Content Title" value="1">
                        <label for="floatingInput">Assignment / Recordings </label>
                      </div>
                      <p class="small">Add 1 for assignments and 2 for recordings</p>

                    
                      <div class="form-floating mt-3 mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="title" placeholder="Content Title">
                        <label for="floatingInput">Assignment / Video Title</label>
                      </div>
                    

                      <div id="quill_editor"></div>
                    <input type="hidden" id="quill_html" name="desc"></input>
                      
                    <div class="form-floating mb-2 mt-2">
                        <input type="text" class="form-control" id="floatingInput" name="videoLink" placeholder="Content">
                        <label for="floatingInput">Youtube Video Id</label>
                      </div>

                      
                      <div>
                        <button type="submit" class="btn btn-primary">Add Content</button>
                      </div>
                      
                </div>

            </div>
        </div>
    </div>
</section>
{{-- batch details ends --}}


<section >
    <div class="container ">
        @include('layouts.alert')
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
              <div class="card">
                <div class="card-boy"><div class="p-3">
                    <h3 class="">Course Content Details</h3>
                </div>

                    <table class="table table-responsive-lg">
                        <thead>
                          <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Title</th>
                            <th scope="col">Youtube Video ID</th>
                            <th scope="col">Added On</th>
                        
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($batchContent as $content)
                            <tr>
                                
                                <td>  {{$content->title}}</td>
                                <td>{{$content->videoLink}}</td>
                                <td>{{$content->created_at->format('D, d M Y h:i A')}}</td>
                              </tr>  
                              @empty
                              <p>nothing</p>
                            @endforelse
                          
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
        </div>
    </div>
</section>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#quill_editor', {
        theme: 'snow'
  });
quill.on('text-change', function(delta, oldDelta, source) {
    document.getElementById("quill_html").value = quill.root.innerHTML;
});
</script>
@endsection






