@extends('layouts.ck-admin')
@section('content')
<div class="container">
    <div class="row mb-5 justify-content-center">
        <div class="col-xl-8 col-lg-9 text-center">
            
            
        </div>
    </div>
</div>
<section class="mt-5 pt-5">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-xl-8 col-lg-9 text-center">
                <h2 class="fs-1 fw-bold text-dark">Students Feedback</h2>
                
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 my-3">
                @include('layouts.alert')
            </div>
            @foreach($feedbacks as $feedback)
            <div class="col-md-10 col-lg-10 mb-3" data-isotope-item>
                <div class="card card-body">
                    <div class="flex-grow-1 mb-3">
                        <p class="text-dark">
                            {{$feedback->feedback}}
                        </p>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{$feedback->user->avatar}}"  alt="{{$feedback->user->name}}" class="rounded-circle" height="40">
            
                        <div class="mx-2">
                            <h6 class="m-0 text-dark">{{$feedback->user->name}}</h6>
                            <span class="small m-0">{{$feedback->user->college}}</span>
                        </div>
                        <div class="mx-3">
                            @if($feedback->status == 0)
                            <a href="{{action('AdminController@removeFeedback', $feedback->id)}}" class="btn btn-danger text-white">Remove</a>
                            @else
                            <a href="{{action('AdminController@addFeedback', $feedback->id)}}" class="btn btn-primary">Approve</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection