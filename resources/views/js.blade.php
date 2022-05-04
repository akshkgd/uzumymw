@extends('layouts.ck')
<style>
    .ck-btn{
          
          background-image: linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));
          border: 1px solid transparent;
          border:none;
          color: white !important;
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
      .btn-desc{
          font-size: .825rem
      }
      .white{
            color: white !important;
      }
      .cd{
          border-radius: 0 0 16px 16px;
      }
  </style>
@section('content')
{{-- @include('layouts.ck-header') --}}
    <div class="container">
        @include('layouts.alert')
    </div>
    <div class="container pt-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 mx-auto p-3 " style="height: 100vh">
        

                <main class="text-center mt-5">
                    <h1 class="display-5 fw-bolder">How to create <span class="wd_highlight"> Instagram Clone ?</span> 2 Hours Live Masterclass</h1>
                   
                    <div class="row justify-content-center">
                        <p class="fs-5 text-muted col-md-10 text-center">Modern CSS from the beginning - all the way up to CSS expert level with real world scenarios and examples! The must-have CSS masterclass in 2022. </p>
                    </div>
    
    
                    <h4 class="fw-500 py-4"> <strong>Sunday, 1st May</strong>  | 11:00 AM IST</h3>
    
                        <div class="my-3 white">
                            <a href="https://codekaro.in/enroll/26" class="btn ck-btn ck-rounded btn-lg text-light  px-5">
                                <h2 class="fs-3 mb-1 fw-bold white">Enroll for live masterclass now</h2>
                                <p class="mb-0 btn-desc white">Enroll now at just Rs <del class="white">399</del> 47 only</p>
                            </a>
                        </div>
                </main>
            </div>
        </div>

    </div>

    {{-- test --}}
    <section class="mb-5">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-4 mt-4">
                    <div class="card text-center f-1">
                        <div class="p-2">
                            <img src="{{asset('assets/img/missed-class-logo-1.svg')}}" alt="">
                            <h2 class="fs-4 mt-2">Missed a class?</h2>
                            <p class="">No worries, watch the recordings later at your convenience from your Archive.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card text-center f-3">
                        <div class="p-2">
                            <img src="{{asset('assets/img/hd.svg')}}" alt="">
                            <h2 class="fs-4 mt-2">Have doubts?</h2>
                            <p class="">Fear not, peer to peer group will help you out any issue, big or small.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card text-center f-2">
                        <div class="p-2">
                            <img src="{{asset('assets/img/wtr.svg')}}" alt="">
                            <h2 class="fs-4 mt-2">Get Certificate!</h2>
                            <p>Receive a linkedIn shareable certificate after the completion of live classes</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card text-center f-4">
                        <div class="p-2">
                            <img src="{{asset('assets/img/time.svg')}}" alt="">
                            <h2 class="fs-4 mt-2">All Live classes</h2>
                            <p class="">Watch all the classes live and clear your doubts instantly.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card text-center f-5">
                        <div class="p-2">
                            <img src="{{asset('assets/img/project.svg')}}" alt="" height="70">
                            <h2 class="fs-4 mt-2">Project-based Learning</h2>
                            <p class="">An immersive project-based curriculum focused on practical developer skills.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- test --}}

<section class="mt-5 pt-5">
    <div class="container mb-5">
        <div class="row d-flex justify-content-center">
          <div class="text-center">
            <h2 class="fw-bold">What's inside</h2>
          </div>
            
            
            <div class="col-md-8 d-n">
              <div class="card f-1 ">
                <div class="p-3">
                  {{-- <h4>Course Curriculam</h4> --}}
                  <ul>
                    <li>Introduction to CSS</li>
                    <li>CSS Box Model</li>
                    <li>CSS Positions</li>
                    <li>CSS Flexbox</li>
                    <li><strong>Project - Instagram Clone</strong> </li>
                  </ul>
                </div>
              <div class="cd f-1-bottom p-3">
                Understand CSS with Instagram Clone
              </div>
            </div>
            </div>
            
            
            <div class="my-5 white text-center">
                <a href="https://codekaro.in/enroll/26" class="btn ck-btn ck-rounded btn-lg text-light  px-5">
                    <h2 class="fs-3 mb-1 fw-bold white">Enroll for live masterclass now</h2>
                    <p class="mb-0 btn-desc white">Enroll now at just Rs <del class="white">399</del> 47 only</p>
                </a>
            </div>
            
            
        </div>
    </div>
</section>
    



    <section>
        <div class="container">
            <div class="text-center">
                <h1 class=" mx-xl-8 mb-0 fw-600">Loved by 15100+ students</h1>
                <p class="lead mb-4">Here's what some of our students have to say about learning with codekaro.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> Congrats Codekaro team.., you are doing a wonderful job and your session are helpful for my carrer..thankyou</p>&mdash; Nandhakumar (@nandhank_) <a href="https://twitter.com/nandhank_/status/1407353108187996172?ref_src=twsrc%5Etfw">June 22, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                            The session was awesome .. Really very much helpful ....i must refer to my friends too
                            .....you are doing awesome sir.</p>&mdash; Chinam (@Chinam22154291) <a
                            href="https://twitter.com/Chinam22154291/status/1409510674724622343?ref_src=twsrc%5Etfw">June
                            28, 2021</a>
                    </blockquote>
                    <script asy src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                            Great explanations and good session of web development masterclass. Thank you so much for
                            your excellent sessions.</p>&mdash; Santhosh G (@Santhos49708756) <a
                            href="https://twitter.com/Santhos49708756/status/1407722856121651202?ref_src=twsrc%5Etfw">June
                            23, 2021</a>
                    </blockquote>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                            Really a great tutor for learning web development</p>&mdash; Ravi Sadariya (@ravi_1821) <a
                            href="https://twitter.com/ravi_1821/status/1409494936139960325?ref_src=twsrc%5Etfw">June 28,
                            2021</a>
                    </blockquote>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                    {{-- <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> attended your bootcamp of web development really enjoyed and got to learn alot of new things thanks alot</p>&mdash; Pranjal Sharma (@sharmapranjal51) <a href="https://twitter.com/sharmapranjal51/status/1406267633264074756?ref_src=twsrc%5Etfw">June 19, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                            you are simply superb in delivering the content in a simple manner, hoping to learn lot more
                            stuff from you</p>&mdash; Akhilesh (@Akhiles34785868) <a
                            href="https://twitter.com/Akhiles34785868/status/1409496613207216134?ref_src=twsrc%5Etfw">June
                            28, 2021</a>
                    </blockquote>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                            Congrats Codekaro team.., you are doing a wonderful job and your session are helpful for my
                            carrer..thankyou</p>&mdash; Nandhakumar (@nandhank_) <a
                            href="https://twitter.com/nandhank_/status/1407353108187996162?ref_src=twsrc%5Etfw">June 22,
                            2021</a>
                    </blockquote>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                            Nice explanations for every single word of coding, and to so much interactive and so much
                            learnable and so on</p>&mdash; saravanachandru S K (@saravanachandr8) <a
                            href="https://twitter.com/saravanachandr8/status/1409863395700928514?ref_src=twsrc%5Etfw">June
                            29, 2021</a>
                    </blockquote>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> webdevlopment bootcamp day-1 was too good....we learnt a lot from today&#39;s session ....4 more days to go..... 😌</p>&mdash; Shrushti Rajanhire (@ShrushtiRajanh1) <a href="https://twitter.com/ShrushtiRajanh1/status/1422553338265153536?ref_src=twsrc%5Etfw">August 3, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr">My first ever online class .Sir you were great,very clear with your concept .<a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a><br>10/10 from my side.</p>&mdash; Ritik Kumar Das (@1pieceViper) <a href="https://twitter.com/1pieceViper/status/1471850945562570753?ref_src=twsrc%5Etfw">December 17, 2021</a></blockquote> 
            
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> sir you are doing a great job and I learnt a lot from you.</p>&mdash; Rahul Yadav (@RahulYa26176535) <a href="https://twitter.com/RahulYa26176535/status/1416029077455065095?ref_src=twsrc%5Etfw">July 17, 2021</a></blockquote> 
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> sir,realy helpfull your masterclass for learn html css js and bootstrap</p>&mdash; Aswanth M (@_YMS___) <a href="https://twitter.com/_YMS___/status/1416030098801631233?ref_src=twsrc%5Etfw">July 17, 2021</a></blockquote> 
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> thankyou Ashish sir it was an amazing Bootcamp with you. I have learned a lot from you than I have ever before. Keep on giving us these bootcamp more.</p>&mdash; mahreen ahmed (@mahreenrizwan55) <a href="https://twitter.com/mahreenrizwan55/status/1439225168795213825?ref_src=twsrc%5Etfw">September 18, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> Class was interesting..I learned lot in a very short span of time...thank you so much..keep on sharing your knowledge...</p>&mdash; Bhuvaneshwari Dinesh (@Bhuvane06893457) <a href="https://twitter.com/Bhuvane06893457/status/1435963326622679043?ref_src=twsrc%5Etfw">September 9, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> <a href="https://twitter.com/CodeKaro?ref_src=twsrc%5Etfw">@CodeKaro</a> Classes with Ashish have been so worthwhile! Ashish has an amazing way of breaking things down so that they are understandable, and always keeping it light, fun and Enjoyable.</p>&mdash; Rahul Majukar (@RahulMajukar) <a href="https://twitter.com/RahulMajukar/status/1434885297657958401?ref_src=twsrc%5Etfw">September 6, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> thank you sir ,for having wonderful time having with us and providing much knowledge for us.<br>its great time and willing to have more time and more classes. thank you sir</p>&mdash; sudarsan (@sudarsa26414724) <a href="https://twitter.com/sudarsa26414724/status/1480915539958632454?ref_src=twsrc%5Etfw">January 11, 2022</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
            <div class="my-5 white text-center">
                <a href="https://codekaro.in/enroll/26" class="btn ck-btn ck-rounded btn-lg text-light  px-5">
                    <h2 class="fs-3 mb-1 fw-bold white">Enroll for live masterclass now</h2>
                    <p class="mb-0 btn-desc white">Enroll now at just Rs <del class="white">399</del> 47 only</p>
                </a>
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
                
                <div class="my-5 white text-center">
                    <a href="https://codekaro.in/enroll/26" class="btn ck-btn ck-rounded btn-lg text-light  px-5">
                        <h2 class="fs-3 mb-1 fw-bold white">Enroll for live masterclass now</h2>
                        <p class="mb-0 btn-desc white">Enroll now at just Rs <del class="white">399</del> 47 only</p>
                    </a>
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
            
            <div class="my-5 white text-center">
                <a href="https://codekaro.in/enroll/26" class="btn ck-btn ck-rounded btn-lg text-light  px-5">
                    <h2 class="fs-3 mb-1 fw-bold white">Enroll for live masterclass now</h2>
                    <p class="mb-0 btn-desc white">Enroll now at just Rs <del class="white">399</del> 47 only</p>
                </a>
            </div>
            <p class="mt-3 text-danger">*Price will increase to Rs 399 once the timer hits zero</p>
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
    
    let offerTime = new Date();
    let offerDate = offerTime.getDate();
    let offerHour = offerTime.getHours();
    
    if(offerHour <= 22){
        offerHour = offerHour + 1;
    }
    else{
        offerHour = offerHour + 2;
    }


    let birthday = "may" + offerDate +  " 2022 " +  offerHour + ':' + ':00' + ':00';
    countDown = new Date(birthday).getTime(),
    console.log(birthday);
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