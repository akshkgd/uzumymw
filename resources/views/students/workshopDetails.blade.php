@extends('layouts.app')
@section('content')
    <style>
        .twitter-share-button{
            padding-top: px !important;
        }
    </style>
    <div class="navbar-container ">
        <nav class="navbar navbar-expand-lg navbar-light border-bottom-0" data-overlay>
            @include('layouts.header')
        </nav>
    </div>
    
    {{-- workshop details start --}}

    <section class="">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                    <div class="my-2">
                        @include('layouts.alert')
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2 class="lead-1 m-0">{{ $workshop->name }}</h3>
                                <p>{!! $workshop->desc !!}</p>
                                <a href="{{url('/home')}}" class="btn ck-c-btn">Dashboard</a>
                                <a href="{{ $workshop->groupLink}}" target="_blank" class="btn ck-c-btn">Join WhatsApp Group</a>
                                <p class="small pt-3 m-0 pb-0">joining the whatsApp group is important as all the information will be shared on the group! </p>
                        </div>

                        <div class="d-non card-body border-top">
                          @if($workshop->status <= 2)
                            <span class="badge badge-pill badge-ck-primary text-center lead mb-2">Upcoming Class</span>
                            <h4 class="lead-1 mb-2">{{ $workshop->topic }}</h4>
                            <span>
                                {!! $workshop->desc !!}
                            </span>
                            <div class="">
                                <h5 class="mb-0 ck-font text-primary-3">
                                    {{ Carbon\Carbon::parse($workshop->nextClass)->format('D, d M Y') }}
                                    </h4>
                                    <h6 class="ck-font">
                                        {{ Carbon\Carbon::parse($workshop->nextClass)->format('h:i A') }}
                                </h5>
                            </div>

                            <div class="text pt-md-2">
                                <a href="{{ $workshop->meetingLink }}" class=" btn btn-primary fw-400 @if ($workshop->meetingLink == '') disabled @endif"
                                    target="_blank">Launch Class</a>

                            </div>
                            @endif
                            @if($workshop->status == 3)
                            {{-- <span class="badge badge-pill badge-ck-primary text-center lead mb-2">Certificate Generated</span> --}}
                            <h4 class="lead m-0">Certificate Generated</h4>
                            <p class="">Certificate Id: {{$Enrollment->certificateId}}</p>
                            <a class="btn ck-c-btn" href="https://codekaro.in/workshop-certificate/{{$Enrollment->certificateId}}" target="_blank">View Certificate</a>
                            @endif
                            
                        </div>
                    </div>



                    @isset($feedback)


                        @if ($feedback->count() != 0)
                        @endisset

                        <div class="card mt-5">
                            <div class="card-body">

                                <h3 class="m-0 lead-1">Your Feedback</h3>
                                <p class='text-dark'>Thanks for the feedback. That’s how we improve.</p>

                                <form action="{{ route('feedback.update', $feedback->id) }}" method="POST" class="">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="feedback" value="">{{ $feedback->feedback }}</textarea>
                                        <input type="hidden" name="workshopId" value="{{ $feedback->workshop }}">
                                        <input type="hidden" name="topicId" value="{{ $workshop->topicId }}">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn ck-c-btn">Update
                                            Feedback</button>
                                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"  class="twitter-share-button" data-size="large" data-text="{{ $feedback->feedback }}" data-url="https://codekaro.in" data-hashtags="codekaro" data-show-count="true">Share Now</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                            
                                        {{-- <a href="#" class="m-1 btn btn-outline-primary-3">
                                            <img class="icon" src="{{ asset('assets/img/icons/social/linkedin.svg') }}"
                                                alt="heart icon" data-inject-svg />
                                            <span>Share it!</span>
                                        </a> --}}
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
                                        <input type="hidden" name="workshopId" value="{{ $workshop->id }}">
                                        <input type="hidden" name="topicId" value="{{ $workshop->topicId }}">
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
    {{-- workshop details ends --}}
    <a href="https://api.whatsapp.com/send/?phone=917355191435&text=Hi, I am {{Auth::user()->name}} my registered mail id is {{Auth::user()->email}} i have issue in {{$workshop->name}}" target="_blank" class="btn btn-dark p-3 bg-dark btn-round btn-floating">
        <img class="icon " src="{{asset('assets/img/icons/theme/communication/chat-4.svg')}}" alt="twitter social icon"
            data-inject-svg />
    </a>
    {{-- <a href="" class="btn btn-dark p-3 bg-dark btn-round  btn-floating">  <img src="/assets/img/icons/communication/chat4.svg" alt=""></a> --}}


    {{-- <a href="#" class="list-group-item-card list-group-item-action ">
                Cras justo odio
              </a>
              @if ($Enrollment->hasPaid == 1 && $workshop->status > 0)
              <a href="{{$workshop->meetingLink}}" class="list-group-item-card list-group-item-action">Join Next Class : {{Carbon\Carbon::parse($Enrollment->nextClass)->format('D, d M h:i A')}}</a>
              @endif
              @if ($workshop->groupLink2 != '')
              <a href="#" class="list-group-item-card list-group-item-action">Join Group Link</a>
              @endif
              @if ($Enrollment->certificateId != '')
              <a href="#" class="list-group-item-card list-group-item-action">Your Certificate Id: {{$Enrollment->certificateId}}</a>
              @endif
              
              <a href="#" class="list-group-item-card list-group-item-action">Morbi leo risus</a> --}}
@endsection()
