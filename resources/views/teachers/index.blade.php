@extends('layouts.app')
<style>

</style>
@section('content')
<div class="navbar-container ">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-0 " data-overlay >
        @include('layouts.header')
    </nav>
</div>


<!-- teachers dashboard starts -->

<section class="" style="padding-top: 5rem;">
    <div class="container pt-5 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
          
          {{-- user section --}}
          <div class="d-md-flex justify-content-between">
            <div class=" d-flex align-items-center mb-5" >
              <img src="{{Auth::User()->avatar}}" alt="Benjamin Cameron" class="avatar avatar-lg border-rounde mr-3">
              <div class="">
                <h3 class="mb-0" ><span id="time"></span> <span>{!!strtok(Auth::user()->name, " ")!!}</span> </h5>
                <a class="text-muted " style="font-weight: 400; font-size:18px;" href="#">codekaro.in/{{Auth::User()->user_name}}</a>
              </div>
            </div>
            <div>
              {{-- <a href="#" class="m-1 btn btn-primary-light">
                <img class="icon" src="assets/img/icons/theme/general/clip.svg" alt="heart icon" data-inject-svg />
                <span>Copy Link</span>
              </a> --}}

              {{-- <a href="#" class="m-1 btn btn-secondary">
                <img class="icon" src="assets/img/icons/social/twitter.svg" alt="heart icon" data-inject-svg />
                <span>Share</span>
              </a> --}}
            </div>
          </div>
          {{-- user section ends --}}
          {{-- alert start --}}
          {{-- <div class="alert alert-primary alert-dismissible fade show mb-3" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> --}}
          {{-- alert ends --}}
@if($batches->count()==0)
                    {{-- no course card --}}
                    <div class="card  card-ico shadow-3">
                      <div class="card-body">
                          <div class="flex-grow-1 text-cente">
                            {{-- <img src="assets/img/mask.svg" alt="Avatar" class="avatar avatar-lg mb-2"> --}}
                              <h3 class="mb-1">You have no classes to teach 😯</h4>
                              <p class="lea">
                                We will get back to you with a new batch as soon as possible. 🎉
                              </p>
                              
                              
                            </div>
                            
                            
                      </div>
                      
                      
                    </div>
                    {{--no course card  --}}
                    @else
                    <div class="text-sm-center text-md-left mb-3 mb-md-1 mb-lg-2 ">
                      <span class="badge badge-pill badge-primary bg-primary-alt-2 text-primary text-center lead m-1">Upcoming Classes</span>
                    </div>
          {{-- course card --}}
          @foreach($batches as $batch)
          <div class="card  card-ico shadow-3d">
            <div class="card-body">
                <div class="flex-grow-1">
                    <div class="h3">{{$batch->topic}}</div>
                    <p>
                     {!! $batch->desc !!}
                    </p>
                    <div class="d-md-flex justify-content-between">
                        <div class="">
                          <h5 class="mb-0 text-primary-3">{{Carbon\Carbon::parse($batch->nextClass)->format('D, d M Y')}} </h4>
                            <h6>{{Carbon\Carbon::parse($batch->nextClass)->format('h:i A')}}</h5>
                        </div>

                        <div class="text pt-md-2">
                            <a href="{{$batch->meetingLink}}" target="_blank" class=" btn btn-outline-primary">Launch Class</a>
                          </div>
                    </div>
                    <a href="{{action('BatchController@classDetails', $batch->id )}}" class="btn ck-c-btn">Details</a>
                    <a href="{{action('TeacherController@enrollments', $batch->id )}}" class="btn ck-c-btn">Enrollments</a>
                    <a href="{{action('TeacherController@addContent', $batch->id )}}" class="btn ck-c-btn">Add Content</a>
                    
                  </div>
                  
                  
            </div>
            <div class="border-top ">
                <div data-target="#panel-{{$batch->id}}" class="accordion-panel-title p-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                  <span class="h6 mb-0 text-primary-3">Batch Details</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
               
                <div class="collapse" id="panel-{{$batch->id}}">
                  <div class="p-3">
                    <form action="{{ route('updateClass') }}" method="POST" class="form-inlin ">
                      @csrf
                      {{-- <div class="row pl-0 pr-0"> --}}
                      <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Next Topic</label>
                        <input type="text" class="form-control" value="{{$batch->topic}}" name="topic" placeholder="Password">
                      </div>
                      <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Upcoming class Date</label>
                        <input type="password" class="form-control" name="nextClass" value="{{$batch->nextClass}}" placeholder="Next Class Timings" data-flatpickr data-enable-time="true" data-date-format="Y-m-d H:i">
                      <input type="hidden" value="{{$batch->id}}" name="batchId">
                      </div>
                      <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Meeting Link</label>
                        <input type="text" class="form-control" value="{{$batch->meetingLink}}" name="meetingLink" placeholder="Meeting Link">
                      </div>
                      <br>
                      <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Create the editor container -->
{{-- <input type="text" class="form-control" value="{{$batch->topic}}" name="topic" placeholder="Password"> --}}
<div id="quill_editor"></div>
<input type="hidden" id="quill_html" name="desc"></input>



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

                      <div class="mx-sm-3 mb-2">
                        <button type="submit" class="btn btn-outline-success ">Update</button>
                      </div>
                      
                      {{-- </div> --}}
                    </form>
                  </div>
                </div>
              </div>
            
          </div>
          @endforeach
          {{-- course card  --}}
          @endif
          
        </div>
      </div>
    </div>
    <div class="divider">
      <img class="bg-white" src="assets/img/dividers/divider-2.svg" alt="graphical divider" data-inject-svg />
    </div>
  </section>





<script>
  function timeOfDay() {
  let hour = new Date().getHours();
  if (hour >= 4 && hour <= 11) return 'Morning';
  if (hour >= 12 && hour <= 16) return 'Afternoon';
  if (hour >= 17 && hour <= 20) return 'Evening';
  if (hour >= 21 || hour <= 3) return 'Night';
}
document.getElementById("time").innerHTML = (`Good ${timeOfDay()},`);
console.log(timeOfDay());
if(timeOfDay()=='Morning')
document.getElementById("test").style.background = "#ffc10759";
if(timeOfDay()=='Afternoon')
document.getElementById("test").style.background = "rgb(255 193 7 / 55%)";
if(timeOfDay()=='Evening')
document.getElementById("test").style.background = "#28a74561";
if(timeOfDay()=='Night')
document.getElementById("test").style.background = "#5ba0f561";
</script>

@endsection
