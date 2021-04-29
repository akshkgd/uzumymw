@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<section class="pb-0">
    <div class="container pt-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                @include('layouts.alert')
                <h1>{{$batch->name}}</h1>
                <h5>Add Topics for batch</h5>
                <form action="{{ route('storeTopic') }}" method="POST" class="form-inlin ">
                    @csrf
                    {{-- <div class="row pl-0 pr-0"> --}}
                    <div class="form-floating mt-3 mb-2 ">
                      
                      <input type="text" id="floatingInput"  class="form-control" name="title" placeholder="Password">
                      <label for="floatingInput" >Add Topic</label>
                    </div>
            
                    <div class="form-floating mt-3 mb-2">
                      <input type="text" class="form-control" name="modules" placeholder="Meeting Link"><label for="inputPassword2" >Meeting Link</label>
                      <label for="inputPassword2" >Meeting Link</label>
                      <input type="hidden" name="batchId" value="{{$batch->id}}">
                    </div>
                    <button type="submit" class="btn btn-outline-primary ">Add Topics</button>
  
  
  
  
  
  
                    <div class="">
                      
                    </div>
                    
                    {{-- </div> --}}
                  </form>

                  <div class="pt-5">
                      <div class="card shadow-3d ">
                  @forelse ($topics as $topic)
                  
                   
                        
                    
                    <div class="border-bottom px-2 ">
                      <div data-target="#abc{{$topic->id}}" class="accordion-panel-title pr-2" data-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="panel-1">
                        <span class="h5  m-0 ck-font fw-400 py-3  pl-2 ">{{$topic->title}}</span> 
                       <span> <b>.</b> vkdlfd<img class="icon ml-1" style="height: 16px" src="{{asset('assets/img/icons/interface/plus.svg')}}" alt="plus interface icon"
                          data-inject-svg /></span>
                      </div>
                      <div class="collapse" id="abc{{$topic->id}}">
                        <div class="pt-0">
                          <p class="mb-2 pl-2 lead">
                            {!! str_replace("~" , "<br /> <i class='bi bi-file-earmark-text-fill'></i> ", $topic->modules) !!}
                          </p>
                          <div class="mx-2 mb-2">
                            <a href="" class="link"> Edit </a>  <a href="{{action('AdminController@deleteTopic', $topic->id) }}" class="link text-danger ml-2">Delete</a>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    
                    
                    
                 
                  @empty
                      <h1 class="lead">No Topics added yet</h1>
                  @endforelse
                  <div class="py-2 px-3">
                    <p class="lead m-0 p-0"> <li>14 Modules</li> </p>
                </div>
                  </div>
                  
            </div>
        </div>
    </div>
</section>
@endsection
