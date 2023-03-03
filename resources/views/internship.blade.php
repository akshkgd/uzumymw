@extends('layouts.ck')
<style>
  .ck-btn{
        
        background-image: linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));
        border: 1px solid transparent;
        border:none;
        color: white;
        padding: 12px 46px !important;
        font-weight:400;
        display: inline-block;
        cursor: pointer;
        font-size: 16px;
        border-radius: 100px;
        /* box-shadow: rgb(247 123 155 / 71%) 0px 3px 16px 0px; */
    }
    .avatar-sm{
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
    .project{
        padding:0 40px;

    }
</style>
@section('content')
    {{-- <div class="alert bg-primary-alt text-primary m-0 text-center fw-400 ck-font" role="alert" style="border-radius:0">
    New masterclasses has been launched 🥳 <a href="{{url('/event')}}" class="alert-link">Check Now</a>. Limited seats available.
  </div> --}}
    
    @include('layouts.ck-header')
    <div class="container">
        @include('layouts.alert')
    </div>

    
    <section class="pt-0 pt-md-0 pt-lg-0 pb-5 mb-5 ">
        <div class="container mt-0 pt-lg-5 hero">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <h1 class="fw-bold display-5 mt-5">Internship Program In
                      <span class="wd_highligh">Frontend Development</span>  </h1>
                    <p>Master in-demand full-stack or backend skills with real work experience of building
                        professional work-like projects. Gain the skills and experience needed to crack jobs
                        in unicorns, MNCs, & more.</p>
                        <a href="https://codekaro.in/workshop-enroll/73" class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal"
                        data-bs-target="#enroll">
                            <h2 class="fs-3 mb-1 text-white fw-bold">Enroll now for free</h2>
                            <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                        </a>
                        {{-- <a href="" class="btn btn-dark btn-lg px-5 rounded-pill">Enroll Now</a> --}}
                </div>
                <div class="col-lg-5">
                    <img src="{{asset('assets/img/IN_HERO_C.png')}}" class="img-fluid hidden-sm" alt="">
                </div>

            </div>
        </div>
    </section>


    <section>
        <div class="container d-none ">
            <div class="row justify-content-center">
                <div class="text-center">
                    <h1 class="fw-bold">Developers From Crio <br>
                        Have Cracked Careers In</h1>
                </div>
                <div class="col-md-12">
                    @foreach ($users as $user)
                        <div class="card rounded-pill  d-inline-block  m-2">
                            <div class="d-flex px-2  py-1">
                                <img src="{{$user->user->avatar}}" class="avatar-sm" alt="">
                                <div class="mx-3">
                                    <h4 class="fs-5 m-0">{{$user->user->name}}</h4>
                                    <p class="m-0">{{$user->user->college}}</p>
                                </div>
                            </div>
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container pt-5 mt-5">
            <div class="row justify-content-center">
                <div class="text-center mb-5">
                    <h1 class="fw-bold">Developers From Crio <br>
                        Have Cracked Careers In</h1>
                </div>
                <div class="col-md-4">
                    <div class="card  border-none ck-rounded f-1 px-5 py-3 text-center">
                        <img src="{{asset('assets/img/CardThree.webp')}}" class="project"  alt="">
                        <h2 class="fs-5">Work like frontend Developer at AirBnb</h2>
                        <p>Build a highly responsive frontend for a travel app.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-none ck-rounded f-4  px-5 py-3 text-center">
                        <img src="{{asset('assets/img/CardSix.webp')}}" class="project" alt="">
                        <h2 class="fs-5">Work like frontend Developer at AirBnb</h2>
                        <p>Build a highly responsive frontend for a travel app.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-none ck-rounded f-3 px-5 py-3 text-center">
                        <img src="{{asset('assets/img/CardTwo.webp')}}" class="project" alt="">
                        <h2 class="fs-5">Work like frontend Developer at AirBnb</h2>
                        <p>Build a highly responsive frontend for a travel app.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container my-5 pt-5">
            <div class="text-center my-5">
                <h1 class="fw-bold">We have designed a <br> flexible program for you</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mt-4">
                    <div class="card text-center f-1">
                        <div class="p-2">
                            <img src="{{asset('assets/img/missed-class-logo-1.svg')}}" alt="">
                            <h2 class="fs-5 mt-2">Missed a class?</h2>
                            <p class="">No worries, watch the recordings later at your convenience from your Archive.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card text-center f-3">
                        <div class="p-2">
                            <img src="{{asset('assets/img/hd.svg')}}" alt="">
                            <h2 class="fs-5 mt-2">Have doubts?</h2>
                            <p class="">Fear not, peer to peer group will help you out any issue, big or small.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card text-center f-2">
                        <div class="p-2">
                            <img src="{{asset('assets/img/wtr.svg')}}" alt="">
                            <h2 class="fs-5 mt-2">Get Certificate!</h2>
                            <p>Receive a linkedIn shareable certificate after the completion of live classes</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card text-center f-4">
                        <div class="p-2">
                            <img src="{{asset('assets/img/time.svg')}}" alt="">
                            <h2 class="fs-5 mt-2">All Live classes</h2>
                            <p class="">Watch all the classes live and clear your doubts instantly.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card text-center f-5">
                        <div class="p-2">
                            <img src="{{asset('assets/img/project.svg')}}" alt="" height="70">
                            <h2 class="fs-5 mt-2">Project-based Learning</h2>
                            <p class="">An immersive project-based curriculum focused on practical developer skills.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container my-5 pt-5">
            <div class="text-center">
                <h1 class=" mx-xl-8 mb-0 fw-600">Meet Your Mentor</h1>
                {{-- <p class="lead mb-4">Here's what some of our 1123 satisfied students have to say about learning with codekaro.</p> --}}
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 mt-4 text-center">
                    <img src="{{ asset('assets/img/team/ashish black.png') }}" alt="" class="rounded-circle" height="130px">
                    <h2 class="mt-3 fw-bold">Ashish Shukla</h2>
                    <p class="fs-5 ">I am a freelance web developer and instructor, passionate about educating students
                        through engaging lessons. Ex AOSPL, Lido Learning</p>
                </div>
                
            </div>
        </div>
    </section>

    <section>
        <div class="container text-center ct my-5 py-5  ">
            <div class="row justify-content-center">
            <h1 id=" my-3 " class="fw-bold my-5">Time Is Running Out. <br> Grab Your Spot Fast!</h1>
            <div class="col-md-7 text-center">
                <div id="countdown" class="text-center">
                    <ul type="none" class="navbar">
                      <li class="d-inlin fs-5 fw-bold"><span id="days" class="d-block display-3 fw-bold"></span>days</li>
                      <li class="d-inlin fs-5 fw-bold"><span id="hours" class="d-block display-3 fw-bold"></span>Hours</li>
                      <li class="d-inline fs-5 fw-bold"><span id="minutes" class="d-block display-3 fw-bold"></span>Minutes</li>
                      <li class="d-inline fs-5 fw-bold"><span id="seconds" class="d-block display-3 fw-bold"></span>Seconds</li>
                    </ul>
                  </div>
                  {{-- <div id="content" class="emoji">
                    <span>🥳</span>
                    <span>🎉</span>
                    <span>🎂</span>
                    <p id="headline"></p>
                  </div> --}}
            </div>
            
            <div class="my-5">
                <a href="https://codekaro.in/workshop-enroll/73" class="btn ck-btn ck-rounded btn-lg   px-5">
                    <h2 class="fs-3 mb-1 text-white fw-bold">Enroll now for free</h2>
                    <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                </a>
            </div>
          </div>
        </div>
  </section>


  {{-- enrollment model  starts --}}
  <div class="modal" id="enroll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-5 shadow">
          <div class="modal-header p-5 pb-4 border-bottom-0">
            <!-- <h5 class="modal-title">Modal title</h5> -->
            <h2 class="fw-bold mb-0">Select Batch</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
          <div class="modal-body p-5 pt-0">
           <div class="mb-3">
            <div class="card border-none ck-rounded bg-primary p-3">
                <h4 class=" fs-5 text-white m-0">6th September</h3>
                    <p class="text-white small">Lorem ipsum dolor sit amet consectetur.</p>
            </div>
           </div>
           <div class="mb-3">
            <div class="card border-non ck-rounded bg- p-3">
                <h4 class=" fs-5 text-whit m-0">6th September</h3>
                    <p class="text-whit small">Lorem ipsum dolor sit amet consectetur.</p>
            </div>
           </div>
            
            <small class="text-mute text-cente mt-2">By clicking Sign up, you agree to the terms of use.</small>
          </div>
        </div>
      </div>
      </div>
  {{-- enrollment mode ends --}}

  <script>
    (function () {
    const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

let birthday = "mar 14, 2022 18:30:00",
  countDown = new Date(birthday).getTime(),
  x = setInterval(function() {    

    let now = new Date().getTime(),
        distance = countDown - now;

    document.getElementById("days").innerText = Math.floor(distance / (day)),
      document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
      document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
      document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

    //do something later when date is reached
    if (distance < 0) {
      let headline = document.getElementById("headline"),
          countdown = document.getElementById("countdown"),
          content = document.getElementById("content");

      headline.innerText = "Class has Started!";
      countdown.style.display = "none";
      content.style.display = "block";

      clearInterval(x);
    }
    //seconds
  }, 0)
}());
</script>
@endsection