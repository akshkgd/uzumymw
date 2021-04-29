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
                <h2 class="lead-1 m-0">{{$batch->name}}</h3>
                <p>{!!$batch->desc!!}</p>
                <a href="" class="btn ck-c-btn">Notes & Assignments</a>
                <a href="" class="btn ck-c-btn">Recording sessions</a>
                </div>    
              
                <div class="d-non card-body border-top">
                  @if ($Enrollment->hasPaid==1 && $batch->status == 0)
                  <p class="text-primary mb-0">Upcoming Class</p>
                  <h5 class="lead-1">{{$batch->topic}}</h5>
                    
                    <div class="">
                        <h5 class="mb-0 text-primary-3 ck-font">{{Carbon\Carbon::parse($Enrollment->nextClass)->format('D, d M Y')}} </h4>
                            <h6 class="ck-font">{{Carbon\Carbon::parse($Enrollment->nextClass)->format('h:i A')}}</h5>
                    </div>
                  <a href="{{$batch->meetingLink}}" target="_blank" class="btn btn-outline-primary">Join Class</a>
                  @else
                  <h4><span class="add-countdown-time" %} data-countdown-date="{{$Enrollment->batch->startDate->format('Y/m/d')}}"> </span>  Remaining</h3>
                  
                 
                  <a href="{{action('CourseEnrollmentController@checkout', $Enrollment->id )}}" class="btn btn-lg btn-outline-primary">Complete Payment</a>  
                  @endif
                  @if($batch->status >0)
                <div class="progress text-success mt-3">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  
                  </div>
                  <p class="lead">45% Compleated</p>
                  @endif
                </div>
              </div> 
              
            

            @isset($feedback)
              
            
            @if($feedback->count()!=0)
            @endisset

            <div class="card mt-5">
              <div class="card-body">

                <h3 class="m-0 lead-1">Your Feedback</h3>
                <p>Thanks for the feedback. That’s how we improve.</p>

                <form action="{{ route('feedback.update' , $feedback->id)}}" method="POST" class="">
                  @csrf
        @method('PUT')
                  <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="feedback" value="">{{$feedback->feedback}}</textarea>
    <input type="hidden" name="batchId" value="{{$feedback->batch}}">
  </div>
                  <div>
                    <button type="submit" class="btn btn-primary">Update Feedback</button>
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
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="feedback" ></textarea>
    <input type="hidden" name="batchId" value="{{$batch->id}}">
  </div>
                  <div>
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
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
    <img class="icon " src="assets/img/icons/theme/communication/chat-4.svg" alt="twitter social icon" data-inject-svg />
  </a>
{{-- <a href="" class="btn btn-dark p-3 bg-dark btn-round  btn-floating">  <img src="/assets/img/icons/communication/chat4.svg" alt=""></a> --}}


{{-- <a href="#" class="list-group-item-card list-group-item-action ">
                Cras justo odio
              </a>
              @if ($Enrollment->hasPaid==1 && $batch->status > 0)
              <a href="{{$batch->meetingLink}}" class="list-group-item-card list-group-item-action">Join Next Class : {{Carbon\Carbon::parse($Enrollment->nextClass)->format('D, d M h:i A')}}</a>
              @endif
              @if ($batch->groupLink2 !="")
              <a href="#" class="list-group-item-card list-group-item-action">Join Group Link</a>
              @endif
              @if ($Enrollment->certificateId !="")
              <a href="#" class="list-group-item-card list-group-item-action">Your Certificate Id: {{$Enrollment->certificateId}}</a>
              @endif
              
              <a href="#" class="list-group-item-card list-group-item-action">Morbi leo risus</a>   --}}
@endsection()