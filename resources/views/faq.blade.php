@extends('layouts.app')
@section('content')
<div class="navbar-container ">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white">
        @include('layouts.header')
    </nav>
</div>
<section>
<div class="container text-center">
    <h1 class="display-5">Questions about Codekaro? <br> We’ve got answers.</h1>
</div>
</section>  


<section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
            @foreach ($faqs as $faq)
          <a href="#" class="card card-dark card-body hover-shadow-sm" data-target="#panel-{{$faq->id}}" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false">
            <h4 class="mb-2 lead-1"  >{{$faq->title}}</h4>
            <span>This guide describes best practices when creating and managing assets</span>
            
              <div class="collapse" id="panel-{{$faq->id}}">
                <div class="pt-3">
                  <p class="lead">
                    {{$faq->description}}
                  </p>
                </div>
              </div>

            <div class="d-flex justify-content-between align-items-center mt-3">
              <div class="d-flex align-items-center">
                <img src="{{$faq->avatar}}" alt="Avatar" class="avatar">
                <div class="text-small ml-2">
                  <span class="d-block">Written by {{$faq->name}}</span>
                  <span class="text-muted">Last Updated {{$faq->updated_at->format('M Y')}}</span>
                </div>
              </div>
              
            </div>
          </a>
          @endforeach
@endsection