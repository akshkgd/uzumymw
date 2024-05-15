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
    fbq('init', '606378664796034');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=606378664796034&ev=PageView&noscript=1"
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
        .avatar-sm-sm{
            height: 50px;
            border-radius: 50%;
        }
        .highlight {
            background-color: #fff1cf !important;
            transition: background-color 0.25s;
            padding: 0 6px;
        }
    </style>
    
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    
  
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
                        <div class="cwr my-5 border d-inline p-3 rounded-pill px-5">Fullstack Live Masterclass</div>
                        <h1 class="fs-1 fw-bolder mt-5" style="">Build your career in <span class="wd_highlight"> full stack dev!</span>Join 2 days live Bootcamp</h1>
                       
                        <div class="row justify-content-center">
                            <p class="fs-6 text-muted col-md-10 text-center" style="font-size: calc(0.01rem + 1.6vw);">Learn what matters - all the way up to react and node js with real world scenarios and examples! The must-have Bootcamp in 2024. </p>
                        </div>
        
                            <h4 class="fw-500 py-4"> <strong>Saturday, 25th May to 26th May </strong>  | 07:00 PM to 08:00 PM IST</h3>
                        
        
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
    <div class="container d-none">
        <div class="col-lg-12 mx-auto p-3 ">
            {{-- <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94"
                        role="img">
                        <title>Bootstrap</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v17.458H60.91c7.177 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="fs-4">Codekaro</span>
                </a>
            </header> --}}

            <main class="text-center mt-5 pt-lg-5">
                <h1 class="display-5 fw-bolder">Get started with 2 days  <span class="wd_highlight">Web Development</span> <br> Bootcamp for free</h1>
               
                <div class="row justify-content-center">
                    <p class="fs-5 text-muted col-md-10 text-center">Get started as a front-end web developer using HTML, CSS,
                         and JavaScript. <br> The modern web development course for everyone! </p>
                </div>


                <h4 class="fw-500 py-4"> <strong>Thu, 3th August to 14th August </strong>  | 06:00 PM IST</h3>

                    <div class="my-5">
                        <a href="https://codekaro.in/workshop-enroll/121" class="btn btn-dark btn-lg btn-block px-5">
                            <h2 class="fs-3 mb-1">Enroll now for free</h2>
                            <p class="mb-0 fw-200">Enroll now limited seats are available</p>
                        </a>
                    </div>
            </main>
        </div>

    </div>

    {{-- test --}}
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
    <section class="">
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
                        <li>CSS Positions</li>
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
                        <li><strong>BMI App 💪</strong> </li>
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



    <section class="d-none">
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
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> my three days in masterclass with <a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> was really great. Sir, is totally amazing teacher. Every single point , single line, single code explain very well. Thanku so much sir</p>&mdash; Vanshika (@Vanshika1408) <a href="https://twitter.com/Vanshika1408/status/1472578389038940163?ref_src=twsrc%5Etfw">December 19, 2021</a></blockquote> 
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
        {{-- feedbacks start --}}
        <section class="my-5 fb-s">
            <div class="container pt-lg-5 mt-lg-5">
              <div class="text-center">
              <h1 class=" fw-bolder fs-2">Codekaro Grads Have Cracked Their Dream Careers In</h1>
              {{-- <p class="fs-5 mb-5">Here's what 32160+ satisfied students have to say about learning with codekaro.</p> --}}
              </div>
              <div class="row" data-masonry='{"percentPosition": true }'>
                <div class="col-md-4 my-3">
                  <div class="card p-3 feedback-card">
                    <div class="d-flex mb-3 justify-content-between align-items-center" >
                        <div class="d-flex" style="align-items: center; gap:8px; ">
                            <img loading="lazy" src="{{asset('assets/img/ebin.jpeg')}}" class="avatar-sm-sm" alt="">
                            <div class="">
                                <p class="m-0 text-dark ">Ebin Joe</h4>
                                <p class="m-0 small">Mechanical Engineer to Full stack Developer</p>
                            </div>
                        </div>
                        
                      </div>
                    <p class="fs-6">Hey everyone, i am thrilled to share my 5 days how to css bootcamp journey was amazing. I used to stuck at CSS from a very long time and Ashish Shukla sir made this a cup of tea for me in a very less time.
    
                        <br> <br>Thanks Ashish Shukla
                        <br>Thanks codekaro.in
                        
                        <br> <br>certificate link: https://lnkd.in/dZkZdsC9</p>
                    
                  </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card p-3 feedback-card">
                      <div class="d-flex mb-3 justify-content-between align-items-center" >
                          <div class="d-flex" style="align-items: center; gap:8px; ">
                              <img loading="lazy" src="{{asset('assets/img/jitesh.jpeg')}}" class="avatar-sm-sm" alt="">
                              <div class="">
                                  <p class="m-0 text-dark ">Jitesh Kumar</h4>
                                  <p class="m-0 small">Btech student to Geeks for Geeks</p>
                              </div>
                          </div>
                          
                        </div>
                      <p class="fs-6">Hi guys 😄
                       <span class="highlight">I am excited to share i have got offers from physics wallah and Geeks for geeks 🎉</span><br><br>
                        Also got an offer to join a startup company. Joining the bootcamp i realized skills and showcasing the skills matters.<br><br>
                        @Ashish Thank you for making it easy for me get these offers. 😎 🚀 #howtoFullStack bootcamp helped me so much.
                        
                    </p>
                      
                    </div>
                  </div>
    
                  <div class="col-md-4 my-3">
                    <div class="card p-3 feedback-card">
                      <div class="d-flex mb-3 justify-content-between align-items-center" >
                          <div class="d-flex" style="align-items: center; gap:8px; ">
                              <img loading="lazy" src="{{asset('assets/img/esha.jpeg')}}" class="avatar-sm-sm" alt="">
                              <div class="">
                                  <p class="m-0 text-dark ">Esha Gunjekar</h4>
                                  <p class="m-0 small">Internship at Barclays at 75k/ month </p>
                              </div>
                          </div>
                          
                        </div>
                      <p class="fs-6">@ashish Really a great tutor for learning  web development</p>
                      <p class="fs-6">I recently participated in a Hackathon organized by barclays with my friend. <span class="highlight">I was not able to win the hackathon but my skills has helped me get internship at barclays on monthly stipend of 75k/ month.</span></p>
                      <p class="fs-6">It was not possible because of ashish and codekaro. You have made the most complex concepts easier for me.</p>
                      
                    </div>
                  </div>
    
    
                  <div class="col-md-4 my-3">
                    <div class="card p-3 feedback-card">
                      <div class="d-flex mb-3 justify-content-between align-items-center" >
                          <div class="d-flex" style="align-items: center; gap:8px; ">
                              <img loading="lazy" src="{{asset('assets/img/cssf2.jpeg')}}" class="avatar-sm-sm" alt="">
                              <div class="">
                                  <p class="m-0 text-dark ">Snehasri Motamarri</h4>
                                  <p class="m-0 small">Vice President at Pioneers club, Visakhapatnam </p>
                              </div>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                          </svg>
                        </div>
                      <p class="fs-6">I recently completed a 5-day CSS Bootcamp led by Ashish Shukla , the esteemed founder & CEO of Codekaro ✨</p>
                      <p class="fs-6">These 5 intensive days were nothing short of a rewarding journey, marked by insightful learning experiences that propelled me towards indulging in the art of CSS and HTML ! 🚀</p>
                      <p class="fs-6">The curriculum was thoughtfully structured, with each day dedicated to a distinct aspect of web design:</p>
                      <p class="fs-6">Ashish Shukla sir's guidance and the interactive learning environment made this bootcamp an unforgettable experience 💫</p>
                      
                    </div>
                  </div>
    
                  <div class="col-md-4 my-3">
                    <div class="card p-3 feedback-card">
                      <div class="d-flex mb-3 justify-content-between align-items-center" >
                          <div class="d-flex" style="align-items: center; gap:8px; ">
                              <img loading="lazy" src="{{asset('assets/img/laxmi.jpg')}}" class="avatar-sm-sm" alt="">
                              <div class="">
                                  <p class="m-0 text-dark ">Sripriya Laxmi</h4>
                                  <p class="m-0 small">From Infosys to Freshworks with 100% hike </p>
                              </div>
                          </div>
                          
                        </div>
                      <p class="fs-6">I am overwhelmed to share that I have completed the Fullstack cohort conducted by Codekaro .</p>
                      <p class="fs-6">Initially I didn't had any clue about frontend , i started with a complete blank mind but after attending the sessions for the first month I am able to do lots of stuff </p>
                      <p class="fs-6">like creating a clone of website like gumroad , AirBnB and Netflix on my own and share it on LinkedIN. 🥳</p>
                      <p class="fs-6"> <span class="highlight">I was able to make a switch from non IT role to Freshworks in just 4 months.</span> A very special thank you to Ashish Shukla who taught exceptionally well and cleared all my doubts.</p>
                      
                    </div>
                  </div>
                  <div class="col-md-4 my-3 ">
                    <div class="card p-3 feedback-card">
                      <div class="d-flex mb-3 justify-content-between align-items-center" >
                          <div class="d-flex" style="align-items: center; gap:8px; ">
                              <img loading="lazy" src="{{asset('assets/img/arpit.jpg')}}" class="avatar-sm-sm" alt="">
                              <div class="">
                                  <p class="m-0 text-dark">Arpit Khare</h4>
                                  <p class="m-0 small">From stats background to AMD</p>
                              </div>
                          </div>
                          
                        </div>
                      <p class="fs-6">@Ashish Shukla
                        It's an amazing bootcamp! by you sir, enjoyed a lot , learnt subtle things in javascript and react js, <span class="highlight">it's only 3 months bootcamp but still I believe I can build frontend on my own.</span> </p>
                      <p class="fs-6">I never thought I would master things in such short span, before taking the course, I was like it might a gimmik, ok anyway let me try this, and finally now,</p>
                      <p class="fs-6"> I am so glad that I have made the best possible decision! by joining this bootcamp as <span class="highlight"> it has helped me landed in AMD.</span>
                    </p>
                      
                    </div>
                  </div>
                
                
                
                
              </div>
            </div>
          </section>
    
        {{-- feedbacks end --}}

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
    <div class="container text-center ct my-5 py-5  ">
        <h1 id=" my-3 " class="fw-bold my-5">Time Is Running Out. <br> Grab Your Spot Fast!</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div id="countdown" class="text-center">
                    <ul type="none" class="navbar">
                        <li class="d-inlin fs-5 fw-bold"><span id="days"
                                class="d-block display-3  fw-bold"></span>days</li>
                        <li class="d-inlin fs-5 fw-bold"><span id="hours"
                                class="d-block display-3 fw-bold"></span>Hours</li>
                        <li class="d-inline fs-5 fw-bold"><span id="minutes"
                                class="d-block display-3 fw-bold"></span>Minutes</li>
                        <li class="d-inline fs-5 fw-bold"><span id="seconds"
                                class="d-block display-3 fw-bold"></span>Seconds</li>
                    </ul>
                </div>
                {{-- <div id="content" class="emoji">
                <span>🥳</span>
                <span>🎉</span>
                <span>🎂</span>
                <p id="headline"></p>
              </div> --}}
            </div>

            <div class="my-5 l-cta">
                <a href="" data-bs-toggle="modal" data-bs-target="#enroll"
                    class="btn ck-btn ck-rounded btn-lg   px-5">
                    <h2 class="fs-3 mb-1 text-white fw-bold">Enroll now for free</h2>
                    <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                </a>
            </div>
            <p class="text-danger">Once the timer hits zero, pricing will be increased to 899.00/-</p>
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
                <h2 class=" mb-0 fs-3 fw-bold">Join 5 days live CSS bootcamp!</h2>
                {{-- <p class="my-3 " style="font-size: 14px">Offer valid till</p> --}}
                
                <form action="{{ route('course-enrollment-auto') }}" method="POST" class="">
                    @csrf
                    <input type="hidden" name="source" value="{{ app('request')->input('utm_source') }}">
                    <input type="hidden" name="medium" value="{{ app('request')->input('utm_medium') }}">
                    <input type="hidden" name="campaign" value="{{ app('request')->input('utm_campaign') }}">


                    <div class="form-floating mt-3 mb-2">
                        <input type="text" required class="form-control" id="floatingInput" name="name"
                            placeholder="name@example.com" @auth value="{{ Auth::user()->name }}" @endauth>
                        <label for="floatingInput">Full Name</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" required class="form-control" id="floatingInput" name="email"
                            placeholder="name@example.com" @auth value="{{ Auth::user()->email }}" @endauth>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="number" required class="form-control" id="floatingInput" name="mobile"
                            placeholder="name@example.com" @auth value="{{ Auth::user()->mobile }}" @endauth>
                        <label for="floatingInput">Mobile Number</label>
                    </div>
                    <div class="text-left p-3 mb-2" style="border: 1px solid #29cf84; text-align:left; border-radius: 12px" >
                        {{-- <div class="py-2" style="color:green">57% of Learners Choose this option to get 3x value</div>     --}}
                        <div class="text-left fw-600 mb-3 fs-6">VIP upgrade <span style="color:#29cf84; ">(Most Loved)</span></div>
                            {{-- <div class="text-left  text-muted my-2" style="font-size: 14px">Get access to curated list of 100+ frontend Interview questions and 25+ projects with chatGPT prompts that will increase your productivity by 10x! </div> --}}
                            {{-- <div class="d-flex align-items-center mb-2" style="gap: 8px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#29cf84" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
                                  </svg>
                                  <span>1 Private zoom coaching call</span>
                            </div> --}}
                            {{-- <div class="d-flex align-items-center mb-2" style="gap: 8px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#29cf84" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
                                  </svg>
                                  <span>Career guidance from Ashish</span>
                            </div> --}}
                            <div class="d-flex align-items-center mb-2" style="gap: 8px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#29cf84" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
                                  </svg>
                                  <span>Get bootcamp recordings</span>
                            </div>
                            <div class="d-flex align-items-center mb-2" style="gap: 8px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#29cf84" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
                                  </svg>
                                  <span>Get Javascript Crash Course (Recorded)</span>
                            </div>
                            <div class="d-flex align-items-center mb-2" style="gap: 8px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#29cf84" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
                                  </svg>
                                  <span>Get 50+ Interview Questions</span>
                            </div>
                            <div class="d-flex align-items-center mb-2" style="gap: 8px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#29cf84" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
                                  </svg>
                                  <span>Get 25+ HTML, CSS & JS projects</span>
                            </div>
                            
                            
                            <div>
                                <span class="fs-6 fw-bold">₹199.00</span>
                                <span style="text-decoration: line-through">₹2999.00</span>
                            </div>
                            
                            <div class="">
                                <input type="checkbox" id="myCheckbox" name="myCheckbox" style="transform: scale(2); margin-left:6px; margin-right: 10px; margin-top:12px;" onchange="toggleRecordingCheckbox(this)">
                                <label for="myCheckbox" style="">Yes, I need this.</label>
                            </div>


                </div>
                    
                    <input type="hidden" name="courseId" value="1">
                    <input type="hidden" id="recordingsCheckbox" name="recordingsCheckbox" value="0">
                    <button type="submit" class="enrollment-button d-flex align-items-center justify-content-center"
                        onclick="startLoader()">Join bootcamp now for <span class="text-white"
                            id="price"> Free</span>
                        <div id="loader" class="loade d-inline-block ms-2"></div>
                    </button>
                    <p style="font-size: 12px;" class="mt-3 mb-0 text-left">By registering here, I agree to Codekaro's
                        Terms & Conditions and Privacy Policy</p>
                </form>

                {{-- <p class="" style="color:red">Once the timer hits zero, pricing will be increased to 2199.00/-</p> --}}


            </div>

        </div>
    </div>
</div>
</div>
{{-- enrollment model ends --}}



    {{-- <script>
        startLoader = ()=>{
            let loader = document.getElementById('loader');
            loader.classlist.add('loader')
        }
        (function () {
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;
            
  let birthday = "june 17, 2024 18:00:00",
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
    </script> --}}

    <script>
        function toggleRecordingCheckbox(checkboxItem) {
            const checkbox = document.getElementById("recordingsCheckbox");
            const priceElement = document.getElementById("price");


            if (checkbox.value === "0") {
                checkbox.value = "1";
                checkboxItem.classList.add("checked");
                priceElement.innerText = "298";

            } else {
                checkbox.value = "0";
                checkboxItem.classList.remove("checked");
                priceElement.innerText = "99";

            }
        }

        function toggleCheckbox(checkboxItem) {
            checkboxItem.classList.toggle('checked');
        }

        function startTimer() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let targetDate = localStorage.getItem("targetDate");
            let expiration = localStorage.getItem("expiration");

            if (!targetDate || !expiration || new Date().getTime() > expiration) {
                targetDate = new Date();
                targetDate.setDate(targetDate.getDate() + 1); // Set target date to tomorrow
                targetDate.setHours(0, 0, 0, 0); // Set target time to midnight (12:00 AM)
                expiration = new Date(targetDate.getFullYear(), targetDate.getMonth(), targetDate.getDate(), 23, 59, 59,
                    999).getTime(); // Set expiration to end of the target date

                localStorage.setItem("targetDate", targetDate.getTime());
                localStorage.setItem("expiration", expiration);
            } else {
                targetDate = new Date(parseInt(targetDate));
            }

            function updateCountdown() {
                const now = new Date().getTime();
                let distance = targetDate.getTime() - now;

                if (distance <= 0) {
                    // Reset target date to the next day
                    targetDate.setDate(targetDate.getDate() + 1);
                    targetDate.setHours(0, 0, 0, 0); // Set target time to midnight (12:00 AM)
                    expiration = new Date(targetDate.getFullYear(), targetDate.getMonth(), targetDate.getDate(), 23, 59, 59,
                        999).getTime(); // Set expiration to end of the target date

                    localStorage.setItem("targetDate", targetDate.getTime());
                    localStorage.setItem("expiration", expiration);

                    // Recalculate the distance with the updated target date
                    distance = targetDate.getTime() - now;
                }

                const days = Math.floor(distance / day);
                const hours = Math.floor((distance % day) / hour);
                const minutes = Math.floor((distance % hour) / minute);
                const seconds = Math.floor((distance % minute) / second);

                document.getElementById("days").innerText = days;
                document.getElementById("hours").innerText = hours;
                document.getElementById("minutes").innerText = minutes;
                document.getElementById("seconds").innerText = seconds;

                // document.getElementById("days1").innerText = days;
                // document.getElementById("hours1").innerText = hours;
                // document.getElementById("minutes1").innerText = minutes;
                // document.getElementById("seconds1").innerText = seconds;

                // document.getElementById("hours2").innerText = hours;
                // document.getElementById("minutes2").innerText = minutes;
                // document.getElementById("seconds2").innerText = seconds;
                if (distance < 0) {
                    clearInterval(timer);
                    document.getElementById("headline").innerText = "Class has Started!";
                    document.getElementById("countdown").style.display = "none";
                    document.getElementById("content").style.display = "block";
                    localStorage.removeItem("targetDate");
                    localStorage.removeItem("expiration");
                }
            }

            updateCountdown();
            const timer = setInterval(updateCountdown, 1000);
        }

        startTimer();

        // function addShakeAnimation() {
        //     var button = document.querySelector('.button');
        //     button.classList.add('shake');
        //     setTimeout(function() {
        //         button.classList.remove('shake');
        //     }, 300);
        // }

        // setInterval(addShakeAnimation, 3000);
    </script>
    
    <script src="{{asset('/js/codekaro.js')}}"></script>
</body>

</html>
