@extends ('layouts.t-student')
@section ('content')


<div class="max-w-5xl 2xl:max-w-7xl mx-auto mt-32 mb-12">
    <div class="my-8 text-center">
        <h1 class="text-3xl font-black tracking-tight">Student Reviews & Feedback</h1>
        <p class="text-base mt-1 text-neutral-800">Here's what 32,160+ satisfied students have to say about learning with Codekaro.</p>
    </div>
    <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
        @foreach($feedbacks as $feedback)
        @if($feedback->status == 0)
        <div class="break-inside-avoid  p-3 feedback-card bg-white border rounded-3xl">
            <div class="flex mb-3 justify-content-between align-items-center">
                <div class="flex items-center gap-3">
                    <img loading="lazy" src="{{$feedback->user->avatar}}" class="avatar-sm-sm w-12 h-12 rounded-full" alt="{{$feedback->user->name}}">
                    <div>
                        <p class="m-0 text-dark font-bol">{{$feedback->user->avatar}}</p>
                        <p class="-mt-1 text-sm text-neutral-600">{{$feedback->user->college}}</p>
                    </div>
                </div>
            </div>{{$feedback->feedback}}</p>
            
        </div>
        @endif
        @endforeach
    </div>
</div>






<section class="mt-0 hidden">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-xl-8 col-lg-9 text-center">
                <h2 class="display-5 mx-xl-8 ">Hear more from people like you</h2>
                <p class="lead">
                    Here's what satisfied 9000+  students have to say about learning with codekaro.
                </p>
            </div>
        </div>
        <div class="row" data-isotope-collection data-ignore-hash="true">
            @foreach($feedbacks as $feedback)
            <div class="col-sm-6 col-lg-4" data-isotope-item>
                <div class="card card-body">
                    <div class="flex-grow-1 mb-3">
                        <p class="lead">
                            {{$feedback->feedback}}
                        </p>
                    </div>
                    <div class="avatar-author align-items-center">
                        <img src="{{$feedback->user->avatar}}" alt="{{$feedback->user->name}}" class="avatar">
            
                        <div class="ml-2">
                            <h6>{{$feedback->user->name}}</h6>
                            <span class="small">{{$feedback->user->college}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection