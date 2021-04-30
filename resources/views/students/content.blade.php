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

<section class="pb-0">
    <div class="container pt-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                <div class="text-center">
                    <h1 class="display5">{{$batch->name}}</h1>
                </div>
                <div class="card shadow-3d mt-6">
                    @foreach ($content as $b)
                        
                    
                    <div class="border-bottom px-2 ">
                      <div data-target="#abc{{$b->id}}" class="accordion-panel-title pr-2" data-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="panel-1">
                        <span class="h6 pt-3 pl-2">{{$b->title}} </span>
                        <img class="icon" src="{{asset('assets/img/icons/interface/plus.svg')}}" alt="plus interface icon"
                          data-inject-svg />
                      </div>
                      <div class="collapse" id="abc{{$b->id}}">
                        <div class="pt-2 px-2">
                          {!!$b->desc!!}
                          <br>
                          <p class=" p-1">{{Carbon\Carbon::parse($b->updated_at)->format('h:i A, d M Y')}}</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    <div class="p-3">
                        <p></p>
                   
                    </div>
                    
                  </div> 
                  
                  
                </div>
              </div>
          </div>

            </div>
        </div>
    </div>
</section>