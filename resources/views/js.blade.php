@extends('layouts.app')
@section('content')
<div class="navbar-container mb-5">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-0" data-overlay >
        @include('layouts.header')
    </nav>
</div>

<section class="pt-0 pt-md-0 pt-lg-0 pt-xlg-0 mt-1 ">
    <div class="container mt-5">
        
       <div class="row justify-content-center text-center">
        <div class="col-lg-5 col-md-4 mt-md-2 hidden-s">
            <img src="{{asset('assets/img/js.png')}}" alt="" class="img-flui" height="150">
            

        </div>
    </div>
      <div class="row justify-content-center text-center ">
        <div class="col-xl-8 col-lg-9 col-md-10">
          <h1 class="display-4 ck-font">Master Javascript in 5 days</h1>
          <p class="lead ">I've designed this course to make the most of your limited time by cutting out any unnecessary theory and diving right into using Git. The course is very hands-on and guides you through using Git and GitHub effectively.</p>
          {{-- <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center align-items-sm-start mt-5"> --}}
            {{-- <div class="d-flex flex-column mx-1 text-center"> --}}
              
             <h4>13 July 2021</h4>
            {{-- </div> --}}
            <a href="#" class="mx-1 fw-400 m-1 btn btn-lg btn-primary-3 btn-sm-block ">Enroll now at 90% off</a>
            <a href="#" class="mx-1 fw-400 m-1 btn btn-lg btn-outline-primary-3 btn-sm-block ">Explore Course</a>
          </div>
        </div>
       
      </div>
      
      
    </div>
  </section> 
  <section class="pt-0 d-none">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <small class="">Used by companies like</small>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <ul class="d-flex flex-wrap justify-content-center list-unstyled">
            <li class="mx-4 mb-md-5" data-aos="fade-up" data-aos-delay="100">
              <img class="bg-primary-3 icon icon-md opacity-20" src="assets/img/logos/brand/apple.svg" alt="icon" data-inject-svg />
            </li>
            <li class="mx-4 mb-md-5" data-aos="fade-up" data-aos-delay="200">
              <img class="bg-primary-3 icon icon-md opacity-20" src="assets/img/logos/brand/buzzfeed.svg" alt="icon" data-inject-svg />
            </li>
            <li class="mx-4 mb-md-5" data-aos="fade-up" data-aos-delay="300">
              <img class="bg-primary-3 icon icon-md opacity-20" src="assets/img/logos/brand/intercom.svg" alt="icon" data-inject-svg />
            </li>
            <li class="mx-4 mb-md-5" data-aos="fade-up" data-aos-delay="400">
              <img class="bg-primary-3 icon icon-md opacity-20" src="assets/img/logos/brand/slack.svg" alt="icon" data-inject-svg />
            </li>
            <li class="mx-4 mb-md-5" data-aos="fade-up" data-aos-delay="500">
              <img class="bg-primary-3 icon icon-md opacity-20" src="assets/img/logos/brand/spotify.svg" alt="icon" data-inject-svg />
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 text-center mb-3">
                <h2 class="display-5 mx-xl-8 ">What will you learn?</h2>
                <p class="lead">
                    Master the essentials and the tricky bits: commits, branches, merging, rebasing and more!
            </div>
        </div>
      <div class="row justify-content-center">
        <div class="col">
          <div class="row">
            <div class="col-md-6 col-lg-6 d-flex">
              <div class="card card-icon-2 card-body justify-content-between border-none shadow-lg" style="min-height: 18rem;">
                <div class="d-flex">
                    <div class="icon-round mb-3 mb-md-4 bg-primary">
                        <img class="icon bg-primary" src="assets/img/icons/theme/devices/airpods.svg" alt="icon" data-inject-svg />
                      </div>
                      <h3 class="lead-1 ml-3 mt-1">Introduction to git and Shell Commands</h3>
                </div>
                
                
                <div>
                  <p class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum non est nam inventore vitae ipsum ducimus dolor saepe facilis! Vel debitis repellat quidem odit ab quasi molestias, in ea pariatur.
                  </p>
                  <span class="badge badge-pill badge-ck-primary  m-1">Live Session</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="card card-icon-2 card-body justify-content-between border-none shadow-lg" style="min-height: 18rem;">
                  <div class="d-flex">
                      <div class="icon-round mb-3 mb-md-4 bg-primary">
                          <img class="icon bg-primary" src="assets/img/icons/theme/devices/airpods.svg" alt="icon" data-inject-svg />
                        </div>
                        <h3 class="lead-1 ml-3 mt-1">Introduction to git and Shell Commands</h3>
                  </div>
                  
                  
                  <div>
                    <p class="lead">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum non est nam inventore vitae ipsum ducimus dolor saepe facilis! Vel debitis repellat quidem odit ab quasi molestias, in ea pariatur.
                    </p>
                    <span class="badge badge-pill badge-ck-primary  m-1">Live Session</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 d-flex">
                <div class="card card-icon-2 card-body justify-content-between border-none shadow-lg" style="min-height: 18rem;">
                  <div class="d-flex">
                      <div class="icon-round mb-3 mb-md-4 bg-primary">
                          <img class="icon bg-primary" src="assets/img/icons/theme/food/pizza.svg" alt="icon" data-inject-svg />
                        </div>
                        <h3 class="lead-1 ml-3 mt-1">Introduction to git and Shell Commands</h3>
                  </div>
                  
                  
                  <div>
                    <p class="lead">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum non est nam inventore vitae ipsum ducimus dolor saepe facilis! Vel debitis repellat quidem odit ab quasi molestias, in ea pariatur.
                    </p>
                    <span class="badge badge-pill badge-ck-primary  m-1">Live Session</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 d-flex">
                <div class="card card-icon-2 card-body justify-content-between border-none shadow-lg" style="min-height: 18rem;">
                  <div class="d-flex">
                      <div class="icon-round mb-3 mb-md-4 bg-primary">
                          <img class="icon bg-primary" src="assets/img/icons/theme/files/pictures-1.svg" alt="icon" data-inject-svg />
                        </div>
                        <h3 class="lead-1 ml-3 mt-1">Introduction to git and Shell Commands</h3>
                  </div>
                  
                  
                  <div>
                    <p class="lead">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum non est nam inventore vitae ipsum ducimus dolor saepe facilis! Vel debitis repellat quidem odit ab quasi molestias, in ea pariatur.
                    </p>
                    <span class="badge badge-pill badge-ck-primary  m-1">Live Session</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 d-flex">
                <div class="card card-icon-2 card-body justify-content-between border-none shadow-lg" style="min-height: 18rem;">
                  <div class="d-flex">
                      <div class="icon-round mb-3 mb-md-4 bg-primary">
                          <img class="icon bg-primary" src="assets/img/icons/theme/shopping/box-2.svg" alt="icon" data-inject-svg />
                        </div>
                        <h3 class="lead-1 ml-3 mt-1">Introduction to git and Shell Commands</h3>
                  </div>
                  
                  
                  <div>
                    <p class="lead">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum non est nam inventore vitae ipsum ducimus dolor saepe facilis! Vel debitis repellat quidem odit ab quasi molestias, in ea pariatur.
                    </p>
                    <span class="badge badge-pill badge-ck-primary  m-1">Live Session</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 d-flex">
                <div class="card card-icon-2 card-body justify-content-between border-none shadow-lg" style="min-height: 18rem;">
                  <div class="d-flex">
                      <div class="icon-round mb-3 mb-md-4 bg-primary">
                          <img class="icon bg-primary" src="assets/img/icons/theme/shopping/gift.svg" alt="icon" data-inject-svg />
                        </div>
                        <h3 class="lead-1 ml-3 mt-1">Introduction to git and Shell Commands</h3>
                  </div>
                  
                  
                  <div>
                    <p class="lead">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum non est nam inventore vitae ipsum ducimus dolor saepe facilis! Vel debitis repellat quidem odit ab quasi molestias, in ea pariatur.
                    </p>
                    <span class="badge badge-pill badge-ck-primary  m-1">Live Session</span>
                  </div>
                </div>
              </div>

            
          </div>
        </div>
      </div>
      <div class="text-center">
        <a href="#" class="mx-1 fw-400 m-1 btn btn-lg btn-primary-3 btn-sm-block ">Enroll now at 90% off @rs 99</a>
      </div>
     
    </div>
  </section>
 <section>
   <div class="container">
    <div class="text-center">
      <h1 class="display-5 mx-xl-8 mb-0">Students love Codekaro</h1>
      <p class="lead mb-4">Here's what some of our 1123 satisfied students have to say about learning with codekaro.</p>
    </div>
     <div class="row">
       <div class="col-md-4">
        {{-- <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> Congrats Codekaro team.., you are doing a wonderful job and your session are helpful for my carrer..thankyou</p>&mdash; Nandhakumar (@nandhank_) <a href="https://twitter.com/nandhank_/status/1407353108187996162?ref_src=twsrc%5Etfw">June 22, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
        <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> The session was awesome .. Really very much helpful ....i must refer to my friends too .....you are doing awesome sir.</p>&mdash; Chinam (@Chinam22154291) <a href="https://twitter.com/Chinam22154291/status/1409510674724622343?ref_src=twsrc%5Etfw">June 28, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
      </div>
       <div class="col-md-4">
        <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> Great explanations and good session of web development masterclass. Thank you so much for your excellent sessions.</p>&mdash; Santhosh G (@Santhos49708756) <a href="https://twitter.com/Santhos49708756/status/1407722856121651202?ref_src=twsrc%5Etfw">June 23, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
       </div>
       <div class="col-md-4">
        <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> attended your bootcamp of web development really enjoyed and got to learn alot of new things thanks alot</p>&mdash; Pranjal Sharma (@sharmapranjal51) <a href="https://twitter.com/sharmapranjal51/status/1406267633264074756?ref_src=twsrc%5Etfw">June 19, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
       </div>
       <div class="col-md-4">
        <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> you are simply superb in delivering the content in a simple manner, hoping to learn lot more stuff from you</p>&mdash; Akhilesh (@Akhiles34785868) <a href="https://twitter.com/Akhiles34785868/status/1409496613207216134?ref_src=twsrc%5Etfw">June 28, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
       </div>
       <div class="col-md-4">
        <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> Congrats Codekaro team.., you are doing a wonderful job and your session are helpful for my carrer..thankyou</p>&mdash; Nandhakumar (@nandhank_) <a href="https://twitter.com/nandhank_/status/1407353108187996162?ref_src=twsrc%5Etfw">June 22, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
       </div>
       <div class="col-md-4">
         <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> Nice explanations for every single word of coding, and to so much interactive and so much learnable and so on</p>&mdash; saravanachandru S K (@saravanachandr8) <a href="https://twitter.com/saravanachandr8/status/1409863395700928514?ref_src=twsrc%5Etfw">June 29, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
       </div>
     </div>
   </div>
 </section>

  <section class="has-divider bg-primary-alt">
    <div class="divider flip-y">
      <img src="assets/img/dividers/divider-2.svg" alt="graphical divider" data-inject-svg />
    </div>
    <div class="container" data-aos="fade-up">
      <div class="row align-items-center justify-content-around">
        <div class="col-md-5">
          <img src="{{asset('assets/img/team/ashish black.png')}}" alt="Image" class="rounded-circle layer-2">
          <div class="decoration bottom left" data-aos="fade-up">
            <img class="bg-primary" src="assets/img/decorations/deco-blob-10.svg" alt="deco-blob-10 decoration" data-inject-svg />
          </div>
          <div class="decoration bottom left" data-aos="fade-right">
            {{-- <img class="bg-primary" src="assets/img/decorations/deco-lines-4.svg" alt="deco-lines-4 decoration" data-inject-svg /> --}}
          </div>
        </div>
        <div class="col-xl-5 col-md-6">
          <div class="h1">
            <div>Howdy, I'm Ashish,</div>
            <span>A</span>
            <div class="highlight">
              <span data-typed-text data-loop="true" data-type-speed="65" data-strings='["Instructor","full stack developer","product creator","freelancer"]'></span>
            </div>
          </div>
          <p class="lead">I am a freelance web developer and instructor passionate about educating students through engaging lessons. Ex AOSPL, Lido Learning

        </p>
          <a href="https://codekaro.in/ashish" class="lead" target="_blank">@ashish</a>
        </div>
      </div>
    </div>
  </section>
@endsection