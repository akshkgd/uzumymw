@extends('layouts.app')
<style>

</style>
@section('content')
<div class="navbar-container ">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-0 " data-overlay >
        @include('layouts.header')
    </nav>
</div>

<section class="" style="margin-top:100px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
            @foreach ($workshops as $batch)
          <div class="card  card-ico shadow-3d">
            <div class="card-body">
                <div class="flex-grow-1">
                    <div class="d-md-flex justify-content-between">
                    <div class="h3">{{ $batch->name }} </div>
                    <div class="">
                        @if($batch->status == 0)
                    <p class=" badge-ck-danger rounded-pill px-2 fw-400 d-inline text-danger" style="font-size: 14px">Private</p>
                        @elseif($batch->status == 1)
                    <p class=" badge-ck-primary rounded-pill px-2 fw-400 d-inline text-primary" style="font-size: 14px">Open For Enrollment</p>
                      @elseif($batch->status == 2)
                    <p class=" badge-ck-warning rounded-pill px-2 fw-400 d-inline text-warning" style="font-size: 14px">Live</p> 
                    @else()
                    <p class=" badge-ck-success rounded-pill px-2 fw-400 small d-inline text-success" style="font-size: 14px">Completed</p>
                        @endif
                    </div>
                    </div>
                    <p>
                        {!! $batch->desc !!}
                    </p>
                    <div class="d-md-flex justify-content-between">
                        <div class="">
                                <h4 class="text-primary-3 m-0"><strong>Total Enrollments: </strong>{{$batch->totalEnrollments}}
                                </h4>
                                <p class="mt-0 mb-3 text-primary-3">
                                  <strong>From</strong>  {{ Carbon\Carbon::parse($batch->startDate)->format('d M') }} to {{ Carbon\Carbon::parse($batch->endDate)->format('d M Y') }}
                                </p>
                        </div>

                        <div class="text pt-md-2">
                            @if ($batch->meetingLink != '')
                                <a href="{{ $batch->meetingLink }}" target="_blank"
                                    class="fw-400 btn btn-primary">Launch Class</a>
                            @endif
                        </div>
                    </div>
                  </div>
                  <a href="{{ action('TeacherController@workshopDetails', $batch->id) }}"
                    class="btn ck-c-btn">Details</a>
                <a href="{{ action('TeacherController@workshopEnrollments', $batch->id) }}"
                    class="btn ck-c-btn">Enrollments</a>
                <a href="{{ action('TeacherController@addContent', $batch->id) }}"
                    class="btn ck-c-btn">Add Content</a>

              </div>
              <div class="border-top ">
                <div data-target="#panel-{{ $batch->id }}" class="accordion-panel-title p-3"
                    data-toggle="collapse" role="button" aria-expanded="false"
                    aria-controls="panel-1">
                    <span class="h6 mb-0 text-primary-3">Update Next Class</span>
                    <img class="icon" src="assets/img/icons/interface/plus.svg"
                        alt="plus interface icon" data-inject-svg />
                </div>

                <div class="collapse" id="panel-{{ $batch->id }}">
                    <div class="px-3">
                        <form action="{{ route('updateWorkshopClass') }}" method="POST"
                            class="form-inlin ">
                            @csrf
                            {{-- <div class="row pl-0 pr-0"> --}}
                            <div class="form-floating mt-3 mb-2 ">

                                <input type="text" id="floatingInput" class="form-control"
                                    value="{{ $batch->topic }}" name="topic"
                                    placeholder="Password">
                                <label for="floatingInput">Next Topic</label>
                            </div>
                            <div class="form-floating mt-3 mb-2">
                                <input type="password" class="form-control" name="nextClass"
                                    value="{{ $batch->nextClass }}"
                                    placeholder="Next Class Timings" data-flatpickr
                                    data-enable-time="true" data-date-format="Y-m-d H:i">
                                <label for="inputPassword2">Date and time</label>
                                <input type="hidden" value="{{ $batch->id }}" name="batchId">
                            </div>
                            <div class="form-floating mt-3 mb-2">
                                <input type="text" class="form-control"
                                    value="{{ $batch->meetingLink }}" name="meetingLink"
                                    placeholder="Meeting Link"><label for="inputPassword2">Meeting
                                    Link</label>
                                <label for="inputPassword2">Meeting Link</label>
                            </div>

                            <button type="submit"
                                class="btn btn-outline-primary mt-2">Update</button>
                            <div class="">
                            </div>

                            {{-- </div> --}}
                        </form>
                    </div>
                </div>
                </div>
          </div>
          @endforeach
        </div>
          
      </div>
    </div></section>
@endsection

