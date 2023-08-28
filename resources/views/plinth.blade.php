<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Development Masterclass</title>
    <meta name="keywords" content="Get started as a front-end web developer using HTML, CSS, JavaScript and Bootstrap. The modern web development course for everyone!">
    <meta name="og:description" content="Get started as a front-end web developer using HTML, CSS, JavaScript and Bootstrap. The modern web development course for everyone!">
    <link rel="canonical" href="https://codekaro.in/web-development-live-masterclass"/>
    <link rel="icon" href="https://codekaro.in/assets/img/chrome-icon.png">
    <meta name="facebook-domain-verification" content="nlndijpgith63pnf9skj942enj02m8" />
   <!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '438131724437018');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=438131724437018&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HC9ETJV29G"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HC9ETJV29G');
    </script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/wd.css')}}">
    <style>
        .my-underline {
            text-decoration: underline #7928ca;
        }
        .shadow-card {
            border: 1px solid gray;
            border-radius: 14px;
            padding: 12px;
            box-shadow: 6px 6px 0 -2px #000;
        }

        .day {
            background-color: #fab804;
            padding: 4px 24px;
            display: inline-block;
            border-radius: 40px;
            border: 1px solid black;
            margin-bottom: 20px;
        }
        .loader {
            border: 2px solid #f3f3f3a8; /* Light grey */
            border-top: 2px solid #ffffff; /* Blue */
            border-radius: 50%;
            width: 24px;
            height: 24px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    
    
  
</head>

<body>
    <div class="text-center">
        @include('layouts.alert')

    </div>
    <section>
        <div class="container pt-lg-">
            <div class="row justify-content-center">
                <div class="col-lg-8 mx-auto " style="height: 100vh; display:flex; align-items: center">
            
                    
                    <main class="text-center">
                        <div class="">
                            <img height="30" src="{{asset('assets/img/college1.png')}}" alt="">
                            <img height="70" class="ms-3" src="{{asset('assets/img/codekaro-dark.png')}}" alt="">
                            <img height="70" src="{{asset('assets/img/plinth.png')}}" alt="">
                            


                        </div>
                        <h1 class="display- fw-bolder mt-5" style="font-size: calc(1.0rem + 2.1vw); line-height:1.3em">Start your  <span class="wd_highlight">Web dev journey</span>  by creating websites like <span class="my-underline">Netflix, chatGPT and YouTube in 3 hours</span></h1>
                       
                        <div class="row justify-content-center">
                            <p class="fs-6 text-muted col-md-10 text-center" style="font-size: calc(0.01rem + 1.6vw);">Modern CSS from the beginning - all the way up to Javascript with real world scenarios and examples! The must-have Frontend Bootcamp in 2022. </p>
                        </div>
        
                            <h4 class="fw-500 py-4"> <strong>Sunday, 3rd September </strong>  | 02:00 PM at Student Activity Center</h3>
                        
        
                            <div class="my-3 white">
                                <a href="" class="btn ck-btn ck-rounded btn-lg mt-3  px-5" class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal"
                                data-bs-target="#enroll">
                                    <h2 class="fs-3 mb-1 text-white fw-bold">Enroll Now for Free</h2>
                                    <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                                </a>
                            </div>

                            
                    </main>
                </div>
            </div>
    
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mb-5">
                    <div class="shadow-card mt-5">
                        <div class="day">Module 1</div>
                        <h3 class="fs-3 fw-bold">Introduction to CSS</h2>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> CSS Implementation</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Typography</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Box Model & Usecases</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Creating login and
                                feedback pages</div>
                    </div>

                    <div class="shadow-card mt-5">
                        <div class="day">Module 2</div>
                        <h3 class="fs-3 fw-bold">Learn use of Positions</h2>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Pseudo Elements &amp;
                                Pseudo Classes</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Creating pages of Twitter
                                &amp; LinkedIn</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Creating Static Blog</div>

                    </div>

                    <div class="shadow-card mt-5">
                        <div class="day">Module 3</div>
                        <h3 class="fs-3 fw-bold">Master Flexbox</h2>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Master Flexbox</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Responsive design using
                                flexbox</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Creating a social media
                                website</div>
                    </div>

                    <div class="shadow-card mt-5">
                        <div class="day">Module 4</div>
                        <h3 class="fs-3 fw-bold">Creating Animations</h2>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Understanding media
                                Queries</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Transitions</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Improving our social media
                                website</div>
                    </div>

                    <div class="shadow-card mt-5">
                        <div class="day">Module 5</div>
                        <h3 class="fs-3 fw-bold">Major Project: Create YouTube Clone</h2>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Bonus: Host your project
                                Online</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Bonus: Get your linkedIn
                                shareable certificate</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Bonus: Full stack Roadmap
                            </div>

                    </div>

                    <div class="my-3 white text-center">
                        <a href="" class="btn ck-btn ck-rounded btn-lg mt-3  px-5" class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal"
                        data-bs-target="#enroll">
                            <h2 class="fs-3 mb-1 text-white fw-bold">Enroll Now for Free</h2>
                            <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                        </a>
                    </div>
                    
                </div>
            </div>
    </section>
            
    <section>
        <div class="container ">
            <div class="row justify-content-center">
                {{-- <div class="col-md-4 mt-4">
                    <div class="card text-center f-1">
                        <div class="p-2">
                            <img src="{{asset('assets/img/missed-class-logo-1.svg')}}" alt="">
                            <h2 class="fs-4 mt-2">Missed a class?</h2>
                            <p class="">No worries, watch the recordings later at your convenience from your Archive.</p>
                        </div>
                        
                    </div>
                </div> --}}
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
        <div class="container ">
            <div class="row justify-content-center">

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
            </div>
        </div>
    </section>
{{-- test --}}
    <section class="d-none">
        <div class="container mb-5">
            <div class="row d-flex justify-content-center">
              <div class="text-center">
                <h2>What's inside</h2>
                <p>This course contains 18 topics spread across 3 modules.</p>
              </div>
                
                <div class="col-md-4">
                  <div class="card f-1 ">
                    <div class="p-3">
                      <h4>Day 1</h4>
                      <ul>
                        <li>Introduction to HTML,  CSS</li>
                        <li>CSS Box Model</li>
                        <li>CSS Flexbox</li>
                        <li>CSS Animations</li>
                        <li>Bonus Gift 🎁</li>
                        <li><strong>Food Ordering Application </strong> </li>
                      </ul>
                    </div>
                    <div class="cd f-1-bottom p-3">
                        Understand CSS with Project
                    </div>
                  </div>
                </div>
                <div class="col-md-4 d-n">
                  <div class="card f-4 ">
                    <div class="p-3">
                      <h4>Day 2</h4>
                      <ul>
                        <li>Introduction to Javascript</li>
                        <li>Data Types & Variables</li>
                        <li>Functions and Arrays</li>
                        <li>Document Object Model</li>
                        <li>Currency Converter App</li>
                        <li><strong>Bill Split App 🪙</strong> </li>
                      </ul>
                    </div>
                  <div class="cd f-4-bottom p-3">
                    Understand JS with a Game
                  </div>
                </div>
                </div>
                
                <div class="col-md-4 d-none">
                    <div class="card f-2">
                      <div class="p-3">
                        <h4>Day 3</h4>
                        <ul>
                          <li>Introduction to React JS</li>
                          <li>Installing react Project</li>
                          <li>Creating Custom Component</li>
                          <li>Passing Values using Props</li>
                          <li>Event Management</li>
                          <li>Zomato Clone</li>
                        </ul>
                      </div>
                      <div class="cd f-2-bottom p-3">
                        Understand React with Project
                      </div>
                     
                    </div>
                  </div>
                
                  <div class="my-3 white text-center">
                    <a href="" class="btn ck-btn ck-rounded btn-lg mt-3  px-5" class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal"
                    data-bs-target="#enroll">
                        <h2 class="fs-3 mb-1 text-white fw-bold">Enroll Now for Free</h2>
                        <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                    </a>
                </div>
                
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="text-center">
                <h1 class=" mx-xl-8 mb-0 fw-600">Loved by 34000+ students</h1>
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
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> thankyou Ashish sir it was an amazing Bootcamp with you. I have learned a lot from you than I have ever before. Keep on giving us these bootcamp more.</p>&mdash; mahreen ahmed (@mahreenrizwan55) <a href="https://twitter.com/mahreenrizwan55/status/1439225168795213825?ref_src=twsrc%5Etfw">September 18, 2021</a></blockquote>
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
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> thank you sir ,for having wonderful time having with us and providing much knowledge for us.<br>its great time and willing to have more time and more classes. thank you sir</p>&mdash; sudarsan (@sudarsa26414724) <a href="https://twitter.com/sudarsa26414724/status/1480915539958632454?ref_src=twsrc%5Etfw">January 11, 2022</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
            </div>
            <div class="my-3 white text-center">
                <a href="" class="btn ck-btn ck-rounded btn-lg mt-3  px-5" class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal"
                data-bs-target="#enroll">
                    <h2 class="fs-3 mb-1 text-white fw-bold">Enroll Now for Free</h2>
                    <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <div class="text-center">
                <h1 class=" mx-xl-8 mb-0 fw-600">Meet Your Mentor</h1>
                {{-- <p class="lead mb-4">Here's what some of our 1123 satisfied students have to say about learning with codekaro.</p> --}}
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 mt-4 text-center">
                    <img src="{{ asset('assets/img/team/ashish black.png') }}" alt="" class="avatar">
                    <h2 class="mt-3">Ashish Shukla</h2>
                    <p class="fs-5 ">I am a freelance web developer and instructor, passionate about educating students
                        through engaging lessons. Ex AOSPL, Lido Learning</p>
                </div>
                
            </div>
        </div>
    </section>

    <section>
        <div class="container text-center ct">
            <h1 id="headlin fw-600 mb-0">Bootcamp is starting in</h1>
            <div id="countdown">
              <ul>
                <li><span id="days"></span>days</li>
                <li><span id="hours"></span>Hours</li>
                <li><span id="minutes"></span>Minutes</li>
                <li><span id="seconds"></span>Seconds</li>
              </ul>
            </div>
            <div id="content" class="emoji">
              <span>🥳</span>
              <span>🎉</span>
              <span>🎂</span>
              <p id="headline"></p>
            </div>
            <div class="my-3 white">
                <a href="" class="btn ck-btn ck-rounded btn-lg mt-3  px-5" class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal"
                data-bs-target="#enroll">
                    <h2 class="fs-3 mb-1 text-white fw-bold">Enroll Now for Free</h2>
                    <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                </a>
            </div>
          </div>
  </section>


  <a href="https://wa.me/917355191435?text=Hey I have issue while enrolling in free Web Development Bootcamp" target="_blank" class="btn btn-light p-3 bg-light btn-round btn-floating" >
    <img src="{{asset('assets/img/whatsapp.7130c1f8.png')}}" alt="" height="50" width="50">
      </a>

  <footer class="bd-footer p-3 p-md-5 mt-5 bg-light text-center text-sm-left">
    <div class="container">
    <ul class="bd-footer-links">
    <li><a href="https://codekaro.in/about">About</a></li>
    <li><a href="https://codekaro.in/contact">Contact</a></li>
    <li><a href="https://codekaro.in/privacy">Privacy Policy</a></li>
    </ul>
    <p>©2020-21 Codekaro All Rights Reserved.</p>
    </div>
    </footer>

{{-- enrollment model  starts --}}
<div class="modal" id="enroll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-5 shadow">
          {{-- <div class="modal-header px-5 pb-4 border-bottom-0 text-center"> --}}
            <!-- <h5 class="modal-title">Modal title</h5> -->
            {{-- <h2 class=" mb-0 fs-4">Join 30 days live Bootcamp</h2> --}}
            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
          {{-- </div> --}}
    
          <div class="modal-body p-4 pt-0 text-center mt-4">
              {{-- <p class="small pt-3 fs-6">Modern CSS from the beginning - all the way up to Javascript expert level!</p> --}}
            <h2 class=" mb-0 fs-3 fw-bold">Join 2 days live web dev bootcamp!</h2>
            <p class="my-3 " style="font-size: 14px">Starting in</p>
            <div class="col-md-12 text-center mt-0">
                <div id="countdown" class="">
                    <ul type="none" class="navbar justify-content-around p-0 text-center">
                      <li class="d-inlin fs-6"><span id="days1" class="d-block display-6 fw-bold"></span> <span>days</span> </li>
                      <li class="d-inlin fs-6"><span id="hours1" class="d-block display-6 fw-bold "></span>Hours</li>
                      <li class="d-inlin fs-6"><span id="minutes1" class="d-block display-6 fw-bold"></span>Minutes</li>
                      <li class="d-inlinx fs-6"><span id="seconds1" class="d-block display-6 fw-bold"></span>Seconds</li>
                    </ul>
                  </div>
            </div>
            <form action="{{ route('workshop-enrollment-auto') }}" method="POST" class="">
                @csrf
                <input type="hidden" name="source" value="{{app('request')->input('utm_source')}}">
                <input type="hidden" name="medium" value="{{app('request')->input('utm_medium')}}">
                <input type="hidden" name="campaign"  value="{{app('request')->input('utm_campaign')}}">


                <div class="form-floating mt-3 mb-2">
                    <input type="text" required class="form-control" id="floatingInput" name="name" placeholder="name@example.com" @auth value="{{Auth::user()->name}}" @endauth>
                    <label for="floatingInput">Full Name</label>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="text" required class="form-control" id="floatingInput" name="email" placeholder="name@example.com" @auth value="{{Auth::user()->email}}" @endauth>
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="number" required  class="form-control" id="floatingInput" name="mobile" placeholder="name@example.com" @auth value="{{Auth::user()->mobile}}" @endauth>
                    <label for="floatingInput">Mobile Number</label>
                  </div>
                <input type="hidden" name="courseId" value="201">
                <button type="submit" class="enrollment-button d-flex align-items-center justify-content-center" onclick="startLoader()">Enroll Now for Free <div id="loader" class="loade d-inline-block ms-2"></div></button>
                <p style="font-size: 12px;" class="mt-3 mb-0 text-left">By registering here, I agree to Codekaro's Terms & Conditions and Privacy Policy</p>
            </form>
            
            {{-- <p class="" style="color:red">Once the timer hits zero, pricing will be increased to 2199.00/-</p> --}}

           
           </div>
            
          </div>
        </div>
      </div>
      </div>
  {{-- enrollment model ends --}}



    <script>
        startLoader = ()=>{
            let loader = document.getElementById('loader');
            loader.classlist.add('loader')
        }
        (function () {
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;
            
  let birthday = "september 3, 2023 18:00:00",
      countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        let now = new Date().getTime(),
            distance = countDown - now;

          document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

          document.getElementById("days1").innerText = Math.floor(distance / (day)),
          document.getElementById("hours1").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes1").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds1").innerText = Math.floor((distance % (minute)) / second);

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
    
    <script src="{{asset('/js/codekaro.js')}}"></script>
</body>

</html>
