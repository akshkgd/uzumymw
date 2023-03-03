@extends('layouts.app')
@section('content')
    <style>

    </style>
    <div class="navbar-container ">
        <nav class="navbar navbar-expand-lg navbar-light border-bottom-0" data-overlay>
            @include('layouts.header')
        </nav>
    </div>
    
    {{-- batch details start --}}

    <section class="">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                    <div class="my-2">
                        @include('layouts.alert')
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2 class="lead-1 m-0">{{ $batch->name }}</h3>
                                <p>{!! $batch->desc !!}</p>
                                <a href="" class="btn ck-c-btn">Notes & Assignments</a>
                                <a href="{{ action('StudentController@recordings', Crypt::encrypt($Enrollment->id)) }}" class="btn ck-c-btn">Recording sessions</a>
                                <a href="{{ action('CourseEnrollmentController@invoice', Crypt::encrypt($Enrollment->id)) }}" target="_blank" class="btn ck-c-btn">View Invoice</a>
                        </div>
                        

                        <div class="d-non card-body border-top">
                            @if ($Enrollment->hasPaid == 1 && $batch->status < 3)
                                <p class="text-primary mb-0">Upcoming Class</p>
                                <h5 class="lead-1">{{ $batch->topic }}</h5>

                                <div class="">
                                    <h5 class="mb-0 text-primary-3 ck-font">
                                        {{ Carbon\Carbon::parse($Enrollment->batch->nextClass)->format('D, d M Y') }} </h4>
                                        <h6 class="ck-font">
                                            {{ Carbon\Carbon::parse($Enrollment->batch->nextClass)->format('h:i A') }}
                                    </h5>
                                </div>
                                <a href="{{ $batch->meetingLink }}" target="_blank" class="btn btn-outline-primary">Join
                                    Class</a>
                            @else
                              @if($Enrollment->hasPaid == 0)
                                <h4 class="lead-1"><span class="add-countdown-time " %}
                                        data-countdown-date="{{ $Enrollment->batch->startDate->format('Y/m/d') }}"> </span>
                                    Remaining</h3>


                                    <a href="{{ action('CourseEnrollmentController@checkout', Crypt::encrypt($Enrollment->id)) }}"
                                        class="btn  btn-outline-primary" style="font-weight: 400">Complete Payment</a>
                              @endif
                            @endif
                            @if ($batch->status == 3 && $Enrollment->hasPaid == 1)
                            <h4 class="lead m-0">Certificate Generated</h4>
                            <p class="">Certificate Id: {{$Enrollment->certificateId}}</p>
                            <a class="btn ck-c-btn" href="https://codekaro.in/course-certificate/{{$Enrollment->certificateId}}" target="_blank">View Certificate</a>
                            @endif
                        </div>
                    </div>

                    <div class="card my-4">
                        @if($Enrollment->hasPaid == 1)
                        <h2 class="lead-1 mx-3 mt-3 mb-0">Important Links</h3>
                            <p class="mx-3 mt-1">Join all the groups to make sure you do not miss any upcoming updates!!</p>
                            
                            <div class="mt-2">
                                <a href="{{$batch->groupLink}}" class="list-group-item-card list-group-item-action ">Join WhatsApp Group</a>
                                <a href="{{$batch->groupLink}}" class="list-group-item-card list-group-item-action ">Join Discussion Group</a>
                                <a href="{{$batch->groupLink}}" class="list-group-item-card list-group-item-action ">Join Discord Community</a>
                              
                            </div>
                            @else
                            <div class="p-2">
                                <h2 class="lead-1 mx-3 mt-3 mb-0">Important Links</h3>
                                    <p class="mx-3 mt-1">Join all the groups to make sure you do not miss any upcoming updates!!</p>
                                    
                                <img src="{{asset('assets/img/default_blank_view_image.svg')}}" alt="">
                            </div>
                            @endif
                        
                        
                      </div>

                    @isset($feedback)


                        @if ($feedback->count() != 0)
                        @endisset

                        <div class="card mt-5">
                            <div class="card-body">

                                <h3 class="m-0 lead-1">Your Feedback</h3>
                                <p>Thanks for the feedback. That’s how we improve.</p>

                                <form action="{{ route('feedback.update', $feedback->id) }}" method="POST" class="">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="feedback" value="">{{ $feedback->feedback }}</textarea>
                                        <input type="hidden" name="batchId" value="{{ $feedback->batch }}">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" style="font-weight: 400">Update Feedback</button>
                                    </div>
                                </form>
                            </div>
                        </div>




                    @else
                        <div class="card mt-5">
                            <div class="card-body">

                                <h3 class="m-0 lead-1">Your Feedback</h3>
                                <p>We love students who give us feedback. That’s how we improve.</p>

                                <form action="{{ route('feedback.store') }}" method="POST" class="">
                                    @csrf
                                    <div class="form-group">
                                        {{-- <label for="exampleFormControlTextarea1">Example textarea</label> --}}
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="feedback"></textarea>
                                        <input type="hidden" name="batchId" value="{{ $batch->id }}">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" style="font-weight: 400">Submit Feedback</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    @endif


                </div>
            </div>
        </div>
    </section>
    {{-- batch details ends --}}
    <a href="#" class="btn btn-dark p-3 bg-dark btn-round btn-floating">
        <img class="icon " src="assets/img/icons/theme/communication/chat-4.svg" alt="twitter social icon"
            data-inject-svg />
    </a>
    {{-- <a href="" class="btn btn-dark p-3 bg-dark btn-round  btn-floating">  <img src="/assets/img/icons/communication/chat4.svg" alt=""></a> --}}


    {{-- <a href="#" class="list-group-item-card list-group-item-action ">
                Cras justo odio
              </a>
              @if ($Enrollment->hasPaid == 1 && $batch->status > 0)
              <a href="{{$batch->meetingLink}}" class="list-group-item-card list-group-item-action">Join Next Class : {{Carbon\Carbon::parse($Enrollment->nextClass)->format('D, d M h:i A')}}</a>
              @endif
              @if ($batch->groupLink2 != '')
              <a href="#" class="list-group-item-card list-group-item-action">Join Group Link</a>
              @endif
              @if ($Enrollment->certificateId != '')
              <a href="#" class="list-group-item-card list-group-item-action">Your Certificate Id: {{$Enrollment->certificateId}}</a>
              @endif
              
              <a href="#" class="list-group-item-card list-group-item-action">Morbi leo risus</a> --}}
@endsection()
