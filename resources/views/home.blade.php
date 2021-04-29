@extends('layouts.app')
<style>

</style>
@section('content')
<div class="navbar-container ">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-0" data-overlay >
        @include('layouts.header')
    </nav>
</div>


<!-- student dashboard starts -->

<section class="">
    <div class="container pt-5 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
          
          {{-- user section --}}
          <div class="d-flex justify-content-between">
            <div class=" d-flex align-items-center mb-5" >
              <img src="{{Auth::User()->avatar}}" alt="Benjamin Cameron" class="avatar avatar-lg border-rounde mr-3">
              <div class="">
                <h3 class="mb-0">{{Auth::User()->name}}</h5>
                <a class="text-muted " style="font-weight: 400; font-size:18px;" href="#">codekaro.in/{{Auth::User()->user_name}}</a>
              </div>
            </div>
            <div>
              <a href="#" class="m-1 btn btn-primary-light">
                <img class="icon" src="assets/img/icons/theme/general/clip.svg" alt="heart icon" data-inject-svg />
                <span>Copy Link</span>
              </a>

              <a href="#" class="m-1 btn btn-secondary">
                <img class="icon" src="assets/img/icons/social/twitter.svg" alt="heart icon" data-inject-svg />
                <span>Share</span>
              </a>
            </div>
          </div>
          {{-- user section ends --}}
          {{-- alert start --}}
          {{-- <div class="alert alert-primary alert-dismissible fade show mb-3" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> --}}
          {{-- alert ends --}}

                    {{-- no course card --}}
                    <div class="card  card-ico shadow-3">
                      <div class="card-body">
                          <div class="flex-grow-1 text-cente">
                            {{-- <img src="assets/img/mask.svg" alt="Avatar" class="avatar avatar-lg mb-2"> --}}
                              <h3 class="mb-1">You haven't enrolled in any courses yet 😯</h4>
                              <p class="lea">
                                Start Learning with our free live courses 🎉
                              </p>
                              
                              
                            </div>
                            
                            
                      </div>
                      
                      
                    </div>
                    {{--no course card  --}}

          {{-- course card --}}
          <div class="card  card-ico shadow-3">
            <div class="card-body">
                <div class="flex-grow-1">
                    <div class="h3">Introduction to Loops</div>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>
                    <div class="">
                        <h5 class="mb-0 text-primary-3">20 Nov 2020 </h4>
                            <h6>04:00 pm - 06:00 pm</h5>
                    </div>
                    
                  </div>
                  <div class="text-right">
                    <a href="#" class="hover-arrow">join Class</a>
                  </div>
                  
            </div>
            <div class="border-top ">
                <div data-target="#panel-3" class="accordion-panel-title p-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                  <span class="h6 mb-0">Batch Details</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-3">
                  <div class="pt-3">
                    <p class="mb-0 p-3">
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                  </div>
                </div>
              </div>
            
          </div>
          {{-- course card  --}}
          
        </div>
      </div>
    </div>
    <div class="divider">
      <img class="bg-white" src="assets/img/dividers/divider-2.svg" alt="graphical divider" data-inject-svg />
    </div>
  </section>






<section class="pb-0 pt-0 mt-0">
<div class="container ">
    <div class="row">
        <div class="col-lg-8">
            


         

            <div class="card  card-ico shadow-3">
                <div class="card-body">
                    <div class="flex-grow-1">
                        <div class="h3">Introduction to Loops</div>
                        <p>
                          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                        </p>
                        <div class="">
                            <h5 class="mb-0 text-primary-3">20 Nov 2020 </h4>
                                <h6>04:00 pm - 06:00 pm</h5>
                        </div>
                        
                      </div>
                      <div class="text-right">
                        <a href="#" class="hover-arrow">join Class</a>
                      </div>
                      
                </div>
                <div class="border-top ">
                    <div data-target="#panel-3" class="accordion-panel-title p-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                      <span class="h6 mb-0">Batch Details</span>
                      <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                    </div>
                    <div class="collapse" id="panel-3">
                      <div class="pt-3">
                        <p class="mb-0 p-3">
                          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                      </div>
                    </div>
                  </div>
                
              </div>
            </div>
        
        <div class="col-lg-4">
            <div class="card   text-center shadow-3d">
                <div class="card-body">
                    <div class="mb-3 mb-md-2">
                        <img src="assets/img/mask.svg" alt="Avatar" class="avatar avatar-lg">
                      </div>
                      <div class="flex-grow-1 pt-md-3">
                        <h4>
              “Wear a mask.Save lives.”
          </h4>
                      </div>
                      <div class="avatar-author d-block mt-2">
                        <p>Wear a face cover <br>
                            Wash your hands <br>
                            Keep a safe distance</p>
                      </div>
                </div>
                
               
              </div>
              
            </div>
        </div>
    
</section>

<section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <div class="row">
            <div class="col-md-8 col-lg-8 d-flex">
              <div class="card card-icon-2 card-body justify-content-between">
                <div class="icon-round mb-3 mb-md-4 bg-primary  ">
                  <img class="icon bg-primary" src="assets/img/icons/theme/communication/contact-1.svg" alt="icon" data-inject-svg />
                 
                </div>
                
                
                <div>
                  <h5>Tell us a little bit about yourself.</h3>
                  
                  <form>
                    <div class="form-group">
                      
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="form-group">
                     
                      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                    </div>
                    <button class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


 

@endsection
