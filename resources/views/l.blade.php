@extends ('layouts.app')
@section ('content')
<div class="navbar-container">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
        @include('layouts.header')
    </nav>

</div>


<section class=mt-0">
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