@extends('layouts.ck')
@section('title', '' . e('Web Development Live Bootcamp | Codekaro'))
@section('meta_description',
    '' .
    e('Master in-demand web development skills with real work experience of building
    professional work-like projects'))



    <style>
        * {
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
        .recording-container {
            padding: 1rem 0.75rem;
            border: 1px solid lightgray;
            display: flex;
        }

        .recording-container p {
            margin: 0;
        }

        input {
            border-radius: 12px !important;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #efa30e;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            position: relative;
            overflow: hidden;
            animation: gradientAnimation 3s infinite linear;
        }

        .enrollment-button {
            background-image: linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));
            /* background-image: linear-gradient(99deg, rgb(0, 184, 46), rgb(0, 224, 134)); */
            border: none;
            color: white;
            padding: 16px !important;
            width: 100%;
            font-weight: 400 !important;
            display: inline-block;
            cursor: pointer;
            font-size: 18px;
            font-weight: bolder;
            border-radius: 12px;
            margin: 1px 0 0 0;
        }

        @keyframes shakeAnimation {

            0%,
            100% {
                transform: translateX(0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translateX(-5px);
            }

            20%,
            40%,
            60%,
            80% {
                transform: translateX(5px);
            }
        }

        .button.shake {
            animation: shakeAnimation 0.3s linear;
        }

        @media(max-width:586px) {
            .modal-dialog {
                align-items: end !important;
            }

            .modal-dialog-centered {
                align-items: end !important;
            }

            .m-cta {
                display: flex;
                justify-content: space-between;
                padding: 10px 16px;
                width: 100%;
                background-color: #fff;
                position: fixed;
                bottom: 0;
                background-color: #272727
            }

            .btn-floating {
                display: none !important;
            }

            .ck-btn {
                display: none;
            }

            .l-cta {
                display: none;
            }
        }

        @media(min-width:586px) {
            .modal-dialog {
                align-items: center !important;
            }

            .modal-dialog-centered {
                align-items: center !important;
            }

            .m-cta {
                display: none;
            }

            .l-cta {
                display: block;
            }

            .ck-btn {

                background-image: linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));
                border: 1px solid transparent;
                border: none;
                text-decoration: none;
                color: white;
                padding: 12px 46px !important;
                font-weight: 400;
                display: inline-block;
                cursor: pointer;
                font-size: 16px;
                border-radius: 100px;
                /* box-shadow: rgb(247 123 155 / 71%) 0px 3px 16px 0px; */
            }
        }

        .bg-dark {
            background-color: #272727 !important;
            border-radius: 16px;
            padding: 16px
        }

        .js-player {
            color: inherit !important;
        }

        .ck-btn:focus {
            outline: none !important;
            box-shadow: none;
        }

        .razorpay-payment-button {
            /* background-image: linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120)); */
            /* background-image: linear-gradient(99deg, rgb(10, 255, 2), rgb(0, 255, 153)); */
            background-color: rgb(25, 208, 124);
            ;
            text-decoration: none;
            border: none;
            color: white;
            padding: 16px !important;
            width: 100%;
            font-weight: 400;
            display: inline-block;
            cursor: pointer;
            font-size: 22px;
            font-weight: bolder;
            border-radius: 16px;
            margin: 20px 0 0 0;
        }

        .razorpay-payment-button:hover {
            color: white !important;
        }



        .avatar-sm {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .project {
            padding: 0 40px;

        }

        @media(max-width: 586px) {
            .text-sm-center {
                text-align: center !important;
            }
        }

        @media(min-width: 586px) {
            .text-sm-center {
                text-align: left !important;
            }
        }

        .card-dark {
            background-color: #000000;
            border-radius: 12px;
            padding: 10px;
        }

        .gray-tag {
            background-color: rgb(235, 213, 255);
            display: inline-block;
            color: blueviolet !important;
            font-size: 18px;
            padding: 5px 30px;
            border-radius: 100px;
            font-weight: 400;
            margin: 20px 0 0 0;
        }

        .text-light {
            color: #fff !important;
        }

        .white {
            color: white !important;
        }

        .plyr--video {
            border-radius: 16px
        }

        .you-checkbox-item {
            box-shadow: none;
            cursor: pointer;
            background-color: #fff;
            border: 1px solid rgb(255 141 0 / 30%);
            margin-bottom: 10px;
            border-radius: 16px;
            justify-content: center;
            align-items: flex-start;
            padding-top: 12px;
            padding-bottom: 12px;
            padding-left: 15px;
            display: flex;
        }

        .green {
            box-shadow: none;
            cursor: pointer;
            background-color: #fff;
            border: 1px solid rgb(0, 255, 60 / 30%);
            margin-bottom: 10px;
            border-radius: 16px;
            justify-content: center;
            align-items: flex-start;
            padding-top: 12px;
            padding-bottom: 12px;
            padding-left: 15px;
            display: flex;
        }

        .you-checkbox {
            width: 40px;
            height: 40px;
            background-color: #fff;
            background-image: linear-gradient(125deg, #fab804, #e28c19);
            border-radius: 8px;
            flex: none;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .you-checkbox-green {
            width: 40px;
            height: 40px;
            background-color: #fff !important;
            background-image: linear-gradient(125deg, #29cf84, #00fd8b) !important;
            border-radius: 8px;
            flex: none;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .you-checkbox-check {
            width: 38px;
            height: 36px;
            cursor: pointer;
            background-color: #fff;
            border-radius: 6px;
            flex: 0 36px;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .you-checkbox-text {
            cursor: pointer;
            flex: 0 auto;
            margin-left: 10px;
            margin-right: 20px;
            font-size: 16px;
            font-weight: 500;
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

        .item::before {
            content: url({{ asset('assets/img/arrow2.svg') }});
            width: 100px;
            height: 40px;
        }

        .you-checkbox-check-tick {
            display: none;
        }

        .you-checkbox-item.checked .you-checkbox-check-tick {
            display: block;
        }
        .animate-text {
            overflow: hidden;
            white-space: nowrap;
            display: flex;
            gap: 50px;
            align-items:center;
            height:50px;
            background-color: #efa30e;
            color:#030a21;
            /* color: white !important; */
        }
        .animate-text p{
            margin: 0
        }

.animated-text {
    /* color:  !important; */
    animation-name: slideRightToLeft;
    animation-duration: 8s;
    animation-iteration-count: infinite;
    animation-timing-function: linear !important;
}

@keyframes slideRightToLeft {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%);
  }
}

    </style>
@section('content')
    {{-- <div class="alert bg-primary-alt text-primary m-0 text-center fw-400 ck-font" role="alert" style="border-radius:0">
    New masterclasses has been launched 🥳 <a href="{{url('/event')}}" class="alert-link">Check Now</a>. Limited seats available.
  </div> --}}

    {{-- @include('layouts.ck-header') --}}
    <div class="container">
        @include('layouts.alert')
    </div>
    <div class="animate-text">
        <p class="animated-text"> Diwali special 80% Off</p>
        
        <p class="animated-text">Diwali special 80% Off</p>
        <p class="animated-text">Diwali special 80% Off</p>
        <p class="animated-text">Diwali special 80% Off</p>
        <p class="animated-text">Diwali special 80% Off</p>
        <p class="animated-text">Diwali special 80% Off</p>
        <p class="animated-text">Diwali special 80% Off</p>
        <p class="animated-text">Diwali special 80% Off</p>


      </div>
      
    <section class="pt-5" style=" background-color: #212121;">
        <div class="container">
            <div class="row justify-content-center align-items-cente">
                <div class="col-md-10">
                    <main class="text-center">
                        <h1 class="fs-2 fw-bod  " style="font-size: 3vmax; line-height:1.5; color:aliceblue; font-weight:600">Master <span
                                class="wd_highligh" style="color:#efa30e;">Advance concepts of CSS</span> to create websites
                            like YouTube, Netflix and ChatGPT in just 5 days</h1>


                        <p style="font-size:1vw;" class="fs-5 text-white text-center">How to CSS - kickstart your journey of full stack developer
                            the must-have Bootcamp in 2023.</p>




                    </main>
                </div>

                <div class="col-lg-5 mt-5  mb-4 order-2 order-lg-1">
                    <div class="bg-dark container" style="background-color: #333333 !important; opacity:90%">
                        <div class="row">

                            <div class="col-6 mb-3">
                                <div class="card-dark">
                                    <div class="  text-white fs-6 d-flex align-items-center" style="gap:12px">
                                        <img src="{{ asset('assets/img/l1.svg') }}" alt="">
                                        5 Days Live Bootcamp
                                    </div>
                                </div>

                            </div>
                            <div class="col-6 mb-3">
                                <div class="card-dark">
                                    <div class="  text-white fs-6 d-flex align-items-center" style="gap:12px">
                                        <img src="{{ asset('assets/img/l2.svg') }}" alt="">
                                        All live sessions on Zoom
                                    </div>
                                </div>

                            </div>
                            <div class="col-6 mb-3">
                                <div class="card-dark">
                                    <div class="  text-white fs-6 d-flex align-items-center" style="gap:12px">
                                        <img src="{{ asset('assets/img/l3.svg') }}" alt="">
                                        From 29th Nov to 3rd Dec
                                    </div>
                                </div>

                            </div>
                            <div class="col-6 mb-3">
                                <div class="card-dark">
                                    <div class="  text-white fs-6 d-flex align-items-center" style="gap:12px">
                                        <img src="{{ asset('assets/img/l4.svg') }}" alt="">
                                        8 PM IST (1 hours live)
                                    </div>
                                </div>
                            </div>
                            {{-- <h5 class="text-whitbe">More than 30,000 students have attended the bootcamp so far</h5> --}}
                            <div class="d-flex align-items-center" style="gap:20px">
                                <img src="{{ asset('assets/img/team/ashish black.png') }}" height="100" width="100"
                                    style="border-radius: 14px" alt="">
                                <div class="text-white">
                                    <h4 class="fs-5 m-0 text-white">Ashish Shukla</h4>
                                    <p class="small m-0 mt-1 text-white">I am a full stack developer and instructor
                                        passionate about educating students through engaging lessons. Ex AOSPL, Lido
                                        Learning
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 mt-5 order-1 order-lg-2">
                    <div class="bg-dark p-2" style="background-color: #333333 !important">
                        <script src="https://fast.wistia.com/embed/medias/jqqnsy9mj6.jsonp" async></script>
                        <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
                        <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                            <div class="wistia_responsive_wrapper"
                                style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                <div class="wistia_embed wistia_async_jqqnsy9mj6 videoFoam=true"
                                    style="height:100%;position:relative;width:100%">
                                    <div class="wistia_swatch"
                                        style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
                                        <img src="https://fast.wistia.com/embed/medias/jqqnsy9mj6/swatch"
                                            style="filter:blur(5px);height:100%;object-fit:contain;width:100%;"
                                            alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div id="js-player" style="border-radius: 16px; color:white;" class="js-player" data-plyr-provider="youtube" data-plyr-embed-id="slentvTk3gY"></div> --}}

                </div>
                <div class="col-lg-10 order-3 l-cta">
                    <div class="mb-5 white">
                        <a href="" style="width:100% !important"
                            class="text-center ck-btn ck-rounded btn-lg mt-3  px-5"
                            class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal" data-bs-target="#enroll">
                            <h2 class="fs-3 mb-1 text-white fw-bold">Kickstart your webdev journey for just ₹199! </h2>
                            <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section class="py-5">
        <div class="container  pt-5">
            <div class="text-center">
                <h1 class="fw-bold fs-2 " style="">We have designed a <br> flexible program for you</h1>
            </div>
            <div class="row justify-content-center">

                <div class="col-md-5 mt-4">
                    <div class="card text-center f-3">
                        <div class="p-2">
                            <img src="{{ asset('assets/img/hd.svg') }}" alt="">
                            <h2 class="fs-5 mt-2">Have doubts?</h2>
                            <p class="">Fear not, peer to peer group will help you out any issue, big or small.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 mt-4">
                    <div class="card text-center f-2">
                        <div class="p-2">
                            <img src="{{ asset('assets/img/wtr.svg') }}" alt="">
                            <h2 class="fs-5 mt-2">Get Certificate!</h2>
                            <p>Receive a linkedIn shareable certificate after the completion of live classes</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 mt-4">
                    <div class="card text-center f-4">
                        <div class="p-2">
                            <img src="{{ asset('assets/img/time.svg') }}" alt="">
                            <h2 class="fs-5 mt-2">All Live classes</h2>
                            <p class="">Watch all the classes live and clear your doubts instantly.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 mt-4">
                    <div class="card text-center f-5">
                        <div class="p-2">
                            <img src="{{ asset('assets/img/project.svg') }}" alt="" height="70">
                            <h2 class="fs-5 mt-2">Project-based Learning</h2>
                            <p class="">An immersive project-based curriculum focused on practical developer skills.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="">
                    <h1 class="fw-bold fs-2 text-center">What exactly we will build?</h1>
                </div>
                <div class="text-center mb-5">
                    {{-- <h1 class="fw-bold">Learn by building  <br>
                        amazing projects</h1> --}}
                </div>


                <div class="col-md-4 ">
                    <div class="card h-100 mt-3 border-none ck-rounded f-4 my-3 px-5 py-3 text-center">
                        <img src="{{ asset('assets/img/CardSix.webp') }}" class="project" alt="">
                        <h2 class="fs-5">Create Responsive Youtube Clone</h2>
                        <p>Understand how to clone any webpage and create a complete responsive design.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 mt-3 border-none ck-rounded f-3 px-5 py-3 my-3 text-center">
                        <img src="{{ asset('assets/img/CardTwo.webp') }}" class="project" alt="">
                        <h2 class="fs-5">Solve challenges in food ordering App</h2>
                        <p>Build a complex ui of food ordering App</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mb-5">
                    <div class="shadow-card mt-5">
                        <div class="day">Day 1</div>
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
                                <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Understanding Usecases</div>
                    </div>
                    <div class="shadow-card mt-5">
                        <div class="day">Day 2</div>
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
                        <div class="day">Day 3</div>
                        <h3 class="fs-3 fw-bold">Master Flexbox</h2>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Master Flexbox</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Responsive design using
                                flexbox</div>
                                <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Understanding Usecases</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt=""> Creating a zomato clone</div>
                    </div>
                    <div class="shadow-card mt-5">
                        <div class="day">Day 4</div>
                        <h3 class="fs-3 fw-bold">Master Responsive designs</h2>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Media Queries</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Media queries examples and usecases</div>
                                <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Creating Animations</div>
                            <div class="mt-3"> <img height="10" class="me-3"
                                    src="{{ asset('assets/img/arrow2.svg') }}" alt="">Using animations in real world examples.</div>
                    </div>

                    <div class="shadow-card mt-5">
                        <div class="day">Day 5</div>
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

                    

                    <div class="my-5 text-center l-cta">
                        <a href="" data-bs-toggle="modal" data-bs-target="#enroll"
                            class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal" data-bs-target="#enroll">
                            <h2 class="fs-3 mb-1 text-white fw-bold">Kickstart your webdev journey for just ₹199</h2>
                            <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <section class="mt-5">
        <div class="container mt-5">
            <div class="text-center">
                <h1 class=" mx-xl-8 mb-0 fw-600">Loved by 30000+ students</h1>
                <p class="lead mb-4">Here's what some of our students have to say about learning with codekaro.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> Congrats Codekaro team.., you are doing a wonderful job and your session are helpful for my carrer..thankyou</p>&mdash; Nandhakumar (@nandhank_) <a href="https://twitter.com/nandhank_/status/1407353108187996172?ref_src=twsrc%5Etfw">June 22, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a
                                href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                            The session was awesome .. Really very much helpful ....i must refer to my friends too
                            .....you are doing awesome sir.</p>&mdash; Chinam (@Chinam22154291) <a
                            href="https://twitter.com/Chinam22154291/status/1409510674724622343?ref_src=twsrc%5Etfw">June
                            28, 2021</a>
                    </blockquote>
                    <script asy src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a
                                href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                            Great explanations and good session of web development masterclass. Thank you so much for
                            your excellent sessions.</p>&mdash; Santhosh G (@Santhos49708756) <a
                            href="https://twitter.com/Santhos49708756/status/1407722856121651202?ref_src=twsrc%5Etfw">June
                            23, 2021</a>
                    </blockquote>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a
                                href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                            Really a great tutor for learning web development</p>&mdash; Ravi Sadariya (@ravi_1821) <a
                            href="https://twitter.com/ravi_1821/status/1409494936139960325?ref_src=twsrc%5Etfw">June 28,
                            2021</a>
                    </blockquote>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                    {{-- <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> attended your bootcamp of web development really enjoyed and got to learn alot of new things thanks alot</p>&mdash; Pranjal Sharma (@sharmapranjal51) <a href="https://twitter.com/sharmapranjal51/status/1406267633264074756?ref_src=twsrc%5Etfw">June 19, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a
                                href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                            you are simply superb in delivering the content in a simple manner, hoping to learn lot more
                            stuff from you</p>&mdash; Akhilesh (@Akhiles34785868) <a
                            href="https://twitter.com/Akhiles34785868/status/1409496613207216134?ref_src=twsrc%5Etfw">June
                            28, 2021</a>
                    </blockquote>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>

                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a
                                href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a>
                            Nice explanations for every single word of coding, and to so much interactive and so much
                            learnable and so on</p>&mdash; saravanachandru S K (@saravanachandr8) <a
                            href="https://twitter.com/saravanachandr8/status/1409863395700928514?ref_src=twsrc%5Etfw">June
                            29, 2021</a>
                    </blockquote>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a
                                href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> webdevlopment bootcamp
                            day-1 was too good....we learnt a lot from today&#39;s session ....4 more days to go..... 😌</p>
                        &mdash; Shrushti Rajanhire (@ShrushtiRajanh1) <a
                            href="https://twitter.com/ShrushtiRajanh1/status/1422553338265153536?ref_src=twsrc%5Etfw">August
                            3, 2021</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>

                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a
                                href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> sir you are doing a
                            great job and I learnt a lot from you.</p>&mdash; Rahul Yadav (@RahulYa26176535) <a
                            href="https://twitter.com/RahulYa26176535/status/1416029077455065095?ref_src=twsrc%5Etfw">July
                            17, 2021</a>
                    </blockquote>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a
                                href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> sir,realy helpfull your
                            masterclass for learn html css js and bootstrap</p>&mdash; Aswanth M (@_YMS___) <a
                            href="https://twitter.com/_YMS___/status/1416030098801631233?ref_src=twsrc%5Etfw">July 17,
                            2021</a>
                    </blockquote>
                    {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a
                                href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> thankyou Ashish sir it
                            was an amazing Bootcamp with you. I have learned a lot from you than I have ever before. Keep on
                            giving us these bootcamp more.</p>&mdash; mahreen ahmed (@mahreenrizwan55) <a
                            href="https://twitter.com/mahreenrizwan55/status/1439225168795213825?ref_src=twsrc%5Etfw">September
                            18, 2021</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a
                                href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> Class was
                            interesting..I learned lot in a very short span of time...thank you so much..keep on sharing
                            your knowledge...</p>&mdash; Bhuvaneshwari Dinesh (@Bhuvane06893457) <a
                            href="https://twitter.com/Bhuvane06893457/status/1435963326622679043?ref_src=twsrc%5Etfw">September
                            9, 2021</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a
                                href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> <a
                                href="https://twitter.com/CodeKaro?ref_src=twsrc%5Etfw">@CodeKaro</a> Classes with Ashish
                            have been so worthwhile! Ashish has an amazing way of breaking things down so that they are
                            understandable, and always keeping it light, fun and Enjoyable.</p>&mdash; Rahul Majukar
                        (@RahulMajukar) <a
                            href="https://twitter.com/RahulMajukar/status/1434885297657958401?ref_src=twsrc%5Etfw">September
                            6, 2021</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-md-6">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr"><a
                                href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> thank you sir ,for
                            having wonderful time having with us and providing much knowledge for us.<br>its great time and
                            willing to have more time and more classes. thank you sir</p>&mdash; sudarsan (@sudarsa26414724)
                        <a href="https://twitter.com/sudarsa26414724/status/1480915539958632454?ref_src=twsrc%5Etfw">January
                            11, 2022</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

            </div>
            <div class="my-5 text-center l-cta">
                <a href="" data-bs-toggle="modal" data-bs-target="#enroll"
                    class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal" data-bs-target="#enroll">
                    <h2 class="fs-3 mb-1 text-white fw-bold">Kickstart your webdev journey for just ₹199</h2>
                    <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                </a>
            </div>
        </div>
    </section>




    {{-- <section class="pt-0 pt-md-0 pt-lg-5 pb-5 mb-5 ">
        <div class="container mt-0 hero">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="fw-bold display-6 mt-5">Grab your <span class="wd_highlight">Internship certificate</span> after completing 30 days live Bootcamp</span></h1>
                    
                        <img src="{{asset('assets/img/dummy-certificate.png')}}" class=" mt-5 img-fluid shadow-lg ck-rounded" style="padding:-20px" alt="">
                        
                </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="fs-2"></h1>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center mb-5">
                    <h1 class="fs-2 fw-bold">Still Wondering If the Program is for YOU?</h1>
                    <p class="m-0">Please check all boxes, where your answer is YES!</p>
                </div>
                <div class="col-md-5">
                    <div class="you-checkbox-item" onclick="toggleCheckbox(this)">
                        <div class="you-checkbox">
                            <div class="you-checkbox-check">
                                <img src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/60cb9e9002293160e1b739d6_tick.svg"
                                    loading="lazy" alt="" class="you-checkbox-check-tick">
                            </div>
                        </div>
                        <div class="you-checkbox-text">I am a student and I want to kickstart my web dev journey.</div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="you-checkbox-item" onclick="toggleCheckbox(this)">
                        <div class="you-checkbox">
                            <div class="you-checkbox-check">
                                <img src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/60cb9e9002293160e1b739d6_tick.svg"
                                    loading="lazy" alt="" class="you-checkbox-check-tick">
                            </div>
                        </div>
                        <div class="you-checkbox-text">I have been learning web dev for a while now but still I am
                            confused!</div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="you-checkbox-item" onclick="toggleCheckbox(this)">
                        <div class="you-checkbox">
                            <div class="you-checkbox-check">
                                <img src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/60cb9e9002293160e1b739d6_tick.svg"
                                    loading="lazy" alt="" class="you-checkbox-check-tick">
                            </div>
                        </div>
                        <div class="you-checkbox-text">I am an aspiring web developer but I have no clue on where to start
                            from.</div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="you-checkbox-item" onclick="toggleCheckbox(this)">
                        <div class="you-checkbox">
                            <div class="you-checkbox-check">
                                <img src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/60cb9e9002293160e1b739d6_tick.svg"
                                    loading="lazy" alt="" class="you-checkbox-check-tick">
                            </div>
                        </div>
                        <div class="you-checkbox-text">I am in job and I want to switch my profile as a full stack
                            developer</div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="you-checkbox-item" onclick="toggleCheckbox(this)">
                        <div class="you-checkbox">
                            <div class="you-checkbox-check">
                                <img src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/60cb9e9002293160e1b739d6_tick.svg"
                                    loading="lazy" alt="" class="you-checkbox-check-tick">
                            </div>
                        </div>
                        <div class="you-checkbox-text">I am a freelancer and I want to widen my skills as a freelance
                            developer</div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="you-checkbox-item" onclick="toggleCheckbox(this)">
                        <div class="you-checkbox">
                            <div class="you-checkbox-check">
                                <img src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/60cb9e9002293160e1b739d6_tick.svg"
                                    loading="lazy" alt="" class="you-checkbox-check-tick">
                            </div>
                        </div>
                        <div class="you-checkbox-text">I am from non IT background but i want to build my career in the
                            field of web dev</div>
                    </div>
                </div>

            </div>
        </div>
        <p class="text-center my-2">If you checked ANY of the boxes above, then you’re invited to join The How to CSS
            Bootcamp😁</p>
        <div class="my-5 text-center l-cta">
            <a href="" data-bs-toggle="modal" data-bs-target="#enroll"
                class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal" data-bs-target="#enroll">
                <h2 class="fs-3 mb-1 text-white fw-bold">Kickstart your webdev journey for just ₹199</h2>
                <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
            </a>
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
                    <img src="{{ asset('assets/img/team/ashish black.png') }}" alt="" class="rounded-circle"
                        height="130px">
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
                            <li class="d-inlin fs-5 fw-bold d-none"><span id="days"
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
                        <h2 class="fs-3 mb-1 text-white fw-bold">Kickstart your webdev journey for just ₹199</h2>
                        <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                    </a>
                </div>
                <p class="text-danger">Once the timer hits zero, pricing will be increased to 899.00/-</p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-centr">
                    <h1 class="fs-2 fw-bold text-center">Frequently Asked Questions
                    </h1>

                    <div class="accordion my-3" id="accordionExample">
                        <div class="accordion-item" style="background-color: #efa30e" style="background-color: #efa30e">
                            <h2 class="accordion-header" id="heading85">
                                <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse85" aria-expanded="true" aria-controls="collapse85">
                                    How does the program work?
                                </button>
                            </h2>
                            <div id="collapse85" class="accordion-collapse collapse" aria-labelledby="heading85"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"
                                    style="background-color: #fff5e0; border-radius: 0 0 12px 12px"
                                    style="background-color: #fff5e0; border-radius: 0 0 12px 12px">
                                    <p>The program is a live bootcamp where you can attend all sessions in real-time.
                                        Support is available for any queries. The bootcamp offers an immersive learning
                                        experience to acquire knowledge and skills for web development.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion my-3" id="accordionExample">
                        <div class="accordion-item" style="background-color: #efa30e">
                            <h2 class="accordion-header" id="heading86">
                                <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse86" aria-expanded="true" aria-controls="collapse86">
                                    I made the payment but didn’t receive any confirmation or email from codekaro, what do I
                                    do?
                                </button>
                            </h2>
                            <div id="collapse86" class="accordion-collapse collapse" aria-labelledby="heading86"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"
                                    style="background-color: #fff5e0; border-radius: 0 0 12px 12px">
                                    <p>Well, in most cases it should not happen. Make sure you give us 5-10 minutes in case
                                        you don’t receive any emails right away. Even then if you don’t receive anything
                                        from us, then please write to info@codekaro.in and our awesome support team will
                                        clarify your problems in 24-48 hours.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion my-3" id="accordionExample">
                        <div class="accordion-item" style="background-color: #efa30e">
                            <h2 class="accordion-header" id="heading87">
                                <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse87" aria-expanded="true" aria-controls="collapse87">
                                    I don't know a lot about web dev but I want to become a web developer. Should I take the
                                    Program?
                                </button>
                            </h2>
                            <div id="collapse87" class="accordion-collapse collapse" aria-labelledby="heading87"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"
                                    style="background-color: #fff5e0; border-radius: 0 0 12px 12px">
                                    <p>Definitely. You should take the program as it will help you kickstart your journey as
                                        a web developer and also pick you up from the bed and make you stop procrastinating
                                        on the idea of becoming a web developer.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion my-3" id="accordionExample">
                        <div class="accordion-item" style="background-color: #efa30e">
                            <h2 class="accordion-header" id="heading88">
                                <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse88" aria-expanded="true" aria-controls="collapse88">
                                    I am not from computer science background. Will this program help me?
                                </button>
                            </h2>
                            <div id="collapse88" class="accordion-collapse collapse" aria-labelledby="heading88"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"
                                    style="background-color: #fff5e0; border-radius: 0 0 12px 12px">
                                    <p>The goal of this program is to help you start your journey no matter what your
                                        situation is. It doesn't matter if you are from comouter science background or not,
                                        you'll be able to do it :)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion my-3" id="accordionExample">
                        <div class="accordion-item" style="background-color: #efa30e">
                            <h2 class="accordion-header" id="heading89">
                                <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse89" aria-expanded="true" aria-controls="collapse89">
                                    Can I get a refund?
                                </button>
                            </h2>
                            <div id="collapse89" class="accordion-collapse collapse" aria-labelledby="heading89"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"
                                    style="background-color: #fff5e0; border-radius: 0 0 12px 12px">
                                    <p>No, currently we don’t have a refund policy.</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="accordion my-3" id="accordionExample">
                        <div class="accordion-item" style="background-color: #efa30e">
                            <h2 class="accordion-header" id="heading91">
                                <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse91" aria-expanded="true" aria-controls="collapse91">
                                    How will I access the content?
                                </button>
                            </h2>
                            <div id="collapse91" class="accordion-collapse collapse" aria-labelledby="heading91"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"
                                    style="background-color: #fff5e0; border-radius: 0 0 12px 12px">
                                    <p>After you purchase the program, you’ll receive an email with all the details.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-5 l-cta text-center">
                        <a href="" data-bs-toggle="modal" data-bs-target="#enroll"
                            class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal" data-bs-target="#enroll">
                            <h2 class="fs-3 mb-1 text-white fw-bold">Kickstart your webdev journey for just ₹199</h2>
                            <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <div class="m-cta text-light">
        <div class="">
            <p class="m-0 fw-bold text-light">₹199 <span class="small text-white fw-light"
                    style="text-decoration: line-through"> ₹ 899 </span></p>
            <p class="small m-0 text-light">Offer ends in <span class="text-light" id="hours2"></span> : <span
                    class="text-light" id="minutes2"></span> : <span class="text-light" id="seconds2"></span> </p>
        </div>
        <button data-bs-toggle="modal" data-bs-target="#enroll" class="bt button ">Join Bootcamp Now</button>
    </div>


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
                    <div class="col-md-12 text-center mt-0 d-none">
                        <div id="countdown" class="">
                            <ul type="none" class="navbar justify-content-around p-0 text-center">
                                <li class="d-inlin fs-6"><span id="days1" class="d-block display-6 fw-bold"></span>
                                    <span>days</span> </li>
                                <li class="d-inlin fs-6"><span id="hours1"
                                        class="d-block display-6 fw-bold "></span>Hours</li>
                                <li class="d-inlin fs-6"><span id="minutes1"
                                        class="d-block display-6 fw-bold"></span>Minutes</li>
                                <li class="d-inlinx fs-6"><span id="seconds1"
                                        class="d-block display-6 fw-bold"></span>Seconds</li>
                            </ul>
                        </div>
                    </div>
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
                        <div class="you-checkbox-item" onclick="toggleRecordingCheckbox(this)"
                            style="border: 1px solid #29cf84;">
                            <div class="you-checkbox-green">
                                <div class="you-checkbox-check">
                                    <img height="26px"
                                        src="https://uploads-ssl.webflow.com/5fdb2866020c200cd7fd7369/5feb5c987b9f08745a9463d2_check-mark-black-outline.svg"
                                        loading="lazy" alt="" class="you-checkbox-check-tick">
                                </div>
                            </div>
                            <div class="you-checkbox-text text-left">Add Recordings of live Bootcamp at Rs 199 <span
                                    class="small text-success">(Most Popular)</span></div>
                        </div>
                        <p class="">Three months access of recordings. Only available if you attend. This is <strong>EARLY
                                Bird</strong> offer, It will increase to 499 once the timer hits zero.
                        </p>
                        <input type="hidden" name="courseId" value="59">
                        <input type="hidden" id="recordingsCheckbox" name="recordingsCheckbox" value="0">
                        <button type="submit" class="enrollment-button d-flex align-items-center justify-content-center"
                            onclick="startLoader()">Join bootcamp now at Rs.<span class="text-white"
                                id="price">199</span>
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




    {{-- enrollment model old  starts --}}
    {{-- <div class="modal" id="enroll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-5 shadow">

                <div class="modal-body p-4 pt-0 text-center mt-4">
                    <h2 class=" mb-0 fs-3 fw-bold ">Join 5 days live web dev bootcamp!</h2>
                    <div class="col-md-12 text-center mt-4">
                        <div id="countdown" class="d-non">
                            <ul type="none" class="navbar justify-content-around p-0 text-center">
                                <li class="d-inlin fs-6"><span id="days1" class="d-block display-6 fw-bold"></span>
                                    <span>days</span>
                                </li>
                                <li class="d-inlin fs-6"><span id="hours1"
                                        class="d-block display-6 fw-bold "></span>Hours</li>
                                <li class="d-inlin fs-6"><span id="minutes1"
                                        class="d-block display-6 fw-bold"></span>Minutes</li>
                                <li class="d-inlinx fs-6"><span id="seconds1"
                                        class="d-block display-6 fw-bold"></span>Seconds</li>
                            </ul>
                        </div>
                    </div>
                    @guest
                        <form action="{{ route('payment-success') }}" method="POST" class="">
                            @csrf
                            <script src="https://checkout.razorpay.com/v1/checkout.js" data-key='rzp_live_YFwQzuSuorFCPM' data-amount="9900"
                                data-buttontext="Join the bootcamp now" 
                                data-name="Codekaro" 
                                data-description="How to CSS"
                                data-image="{{ asset('assets/img/codekaro-dark.png') }}" data-theme.color="#0066ff">
                                @auth
                                data - prefill.name = "{{ Auth::user()->name }}"
                                data - prefill.email = "{{ Auth::user()->email }}"
                                data - prefill.contact = "{{ Auth::user()->mobile }}"
                                @endauth
                            </script>
                            <input type="hidden" name="courseId" value="33">
                        </form>
                    @endguest
                    @auth
                        <a href="{{ url('/enroll/33') }}" class=" razorpay-payment-button">Join the bootcamp now</a>

                    @endauth
                    <p class="" style="color:red">Once the timer hits zero, pricing will be increased to 899.00/-
                    </p>


                </div>

            </div>
        </div>
    </div>
    </div> --}}
    {{-- enrollment mode ends --}}

    <script>
        function toggleRecordingCheckbox(checkboxItem) {
            const checkbox = document.getElementById("recordingsCheckbox");
            const priceElement = document.getElementById("price");


            if (checkbox.value === "0") {
                checkbox.value = "1";
                checkboxItem.classList.add("checked");
                priceElement.innerText = "398";

            } else {
                checkbox.value = "0";
                checkboxItem.classList.remove("checked");
                priceElement.innerText = "199";

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

                document.getElementById("days1").innerText = days;
                document.getElementById("hours1").innerText = hours;
                document.getElementById("minutes1").innerText = minutes;
                document.getElementById("seconds1").innerText = seconds;

                document.getElementById("hours2").innerText = hours;
                document.getElementById("minutes2").innerText = minutes;
                document.getElementById("seconds2").innerText = seconds;
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

        function addShakeAnimation() {
            var button = document.querySelector('.button');
            button.classList.add('shake');
            setTimeout(function() {
                button.classList.remove('shake');
            }, 300);
        }

        setInterval(addShakeAnimation, 3000);
    </script>
@endsection
