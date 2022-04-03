@extends('layouts.ck')
@section('title', '' . e('Web Development Live Bootcamp | Codekaro'))
@section('meta_description', '' . e('Master in-demand web development skills with real work experience of building
professional work-like projects'))
<link rel="stylesheet" href="{{asset('css/plyr.css')}}" />

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
    @media(max-width: 586px){
        .text-sm-center{
            text-align: center !important;
        }
    }
    @media(min-width: 586px){
        .text-sm-center{
            text-align: left !important;
        }
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

    
    <section class="pt-0 pt-md-0 pt-lg-5 pb-5 mb-5 ">
        <div class="container mt-0 hero">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 text-center">
                    <h1 class="fw-bold display-5 mt-5">Master Web Development skills with <span class="wd_highligh">7 days live Bootcamp</span></h1>
                    <p>Master in-demand web development skills with real work experience of building
                        professional work-like projects. Gain the skills and experience needed to crack jobs
                        in unicorns, MNCs, & more.</p>
                        
                        {{-- <a href="" class="btn btn-dark btn-lg px-5 rounded-pill">Enroll Now</a> --}}
                </div>
                
                {{-- <div class="col-lg-6">
                    <img src="{{asset('assets/img/A.png')}}" class="img-fluid hidden-sm" alt="">
                </div> --}}
                <div class="col-lg-7 mt-5 ck-rounded">
                    <div id="player" class="ck-rounded d-inline" data-plyr-provider="youtube" data-plyr-embed-id="C_H9IHbMj4g"></div>
                    <div class="text-center">
                        <a href="https://codekaro.in/enroll/22" class="btn ck-btn ck-rounded btn-lg mt-3  px-5"
                    >
                            <h2 class="fs-3 mb-1 text-white fw-bold">Enroll now at just Rs 299</h2>
                            <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                        </a>
                    </div>
                </div>
                

            </div>
        </div>
    </section>


    <section>
        <div class="container d-none ">
            <div class="row justify-content-center">
                <div class="text-center">
                    <h1 class="fw-bold">Learn by building  <br>
                        amazing projects</h1>
                </div>

            </div>
        </div>
    </section>


    <section>
        <div class="container pt-5 mt-5">
            <div class="row justify-content-center">
                <div class="text-center mb-5">
                    <h1 class="fw-bold">Learn by building  <br>
                        amazing projects</h1>
                </div>
                <div class="col-md-4">
                    <div class="card  border-none ck-rounded f-1 px-5 py-3 my-3 text-center">
                        <img src="{{asset('assets/img/CardThree.webp')}}" class="project"  alt="">
                        <h2 class="fs-5">Work like frontend Developer at AirBnb</h2>
                        <p>Build a highly responsive frontend for a travel app.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-none ck-rounded f-4 my-3 px-5 py-3 text-center">
                        <img src="{{asset('assets/img/CardSix.webp')}}" class="project" alt="">
                        <h2 class="fs-5">Create Random Quotes App with Javascript</h2>
                        <p>Understand how APIs work and how to use them with js.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-none ck-rounded f-3 px-5 py-3 my-3 text-center">
                        <img src="{{asset('assets/img/CardTwo.webp')}}" class="project" alt="">
                        <h2 class="fs-5">Solve challenges in food ordering App</h2>
                        <p>Build a dynamic frontend for a food ordering app.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="my-4">
                        <h1 class="fw-bold">Course Curriculum</h1>
                    </div>
                    <div class="accordion my-5" id="accordionExample">

                        <div class="accordion-item">
    <h2 class="accordion-header" id="heading84">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse84" aria-expanded="true"
            aria-controls="collapse84">
            Introduction to HTML
        </button>
    </h2>
    <div id="collapse84"
        class="accordion-collapse collapse  show "
        aria-labelledby="heading84" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p class="mb-2 pl-2 " style="font-size:17px;">
                  <br /><i class='bi bi-dot fs-4'></i>Introduction to HTML   <br /><i class='bi bi-dot fs-4'></i>The Anatomy of an HTML Tag   <br /><i class='bi bi-dot fs-4'></i>What we're building - HTML Personal Site   <br /><i class='bi bi-dot fs-4'></i>What is The HTML Boilerplate?   <br /><i class='bi bi-dot fs-4'></i>How to Structure Text in HTML   <br /><i class='bi bi-dot fs-4'></i>HTML Lists   <br /><i class='bi bi-dot fs-4'></i>HTML Image Elements   <br /><i class='bi bi-dot fs-4'></i>HTML Links and Anchor Tags   <br /><i class='bi bi-dot fs-4'></i>HTML advanced Tags
            </p>

        </div>
    </div>
</div>
                        <div class="accordion-item">
    <h2 class="accordion-header" id="heading85">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse85" aria-expanded="true"
            aria-controls="collapse85">
            Intermediate HTML
        </button>
    </h2>
    <div id="collapse85"
        class="accordion-collapse collapse  hide "
        aria-labelledby="heading85" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p class="mb-2 pl-2 " style="font-size:17px;">
                  <br /><i class='bi bi-dot fs-4'></i>HTML Tables   <br /><i class='bi bi-dot fs-4'></i>Using HTML Tables    <br /><i class='bi bi-dot fs-4'></i>How to Type Emojis    <br /><i class='bi bi-dot fs-4'></i>HTML Forms   <br /><i class='bi bi-dot fs-4'></i>Forms in Practice - Create a Contact Me Form   <br /><i class='bi bi-dot fs-4'></i>HTML Challenge Publish Your First  Website!
            </p>

        </div>
    </div>
</div>
                        <div class="accordion-item">
    <h2 class="accordion-header" id="heading86">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse86" aria-expanded="true"
            aria-controls="collapse86">
            Introduction to CSS
        </button>
    </h2>
    <div id="collapse86"
        class="accordion-collapse collapse  hide "
        aria-labelledby="heading86" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p class="mb-2 pl-2 " style="font-size:17px;">
                  <br /><i class='bi bi-dot fs-4'></i>Introduction to CSS   <br /><i class='bi bi-dot fs-4'></i>Inline CSS   <br /><i class='bi bi-dot fs-4'></i>Internal CSS   <br /><i class='bi bi-dot fs-4'></i>External CSS   <br /><i class='bi bi-dot fs-4'></i>How to Debug CSS Code   <br /><i class='bi bi-dot fs-4'></i>The Anatomy of CSS Syntax   <br /><i class='bi bi-dot fs-4'></i>CSS Selectors   <br /><i class='bi bi-dot fs-4'></i>Classes vs. Ids
            </p>

        </div>
    </div>
</div>
                        <div class="accordion-item">
    <h2 class="accordion-header" id="heading87">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse87" aria-expanded="true"
            aria-controls="collapse87">
            Intermediate CSS
        </button>
    </h2>
    <div id="collapse87"
        class="accordion-collapse collapse  hide "
        aria-labelledby="heading87" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p class="mb-2 pl-2 " style="font-size:17px;">
                  <br /><i class='bi bi-dot fs-4'></i><strong>Project - AirBnb Clone</strong>   <br/> <i class='bi bi-dot fs-4'></i>What Are Favicons?   <br /><i class='bi bi-dot fs-4'></i>HTML Divs   <br /><i class='bi bi-dot fs-4'></i>The Box Model of Website   <br /><i class='bi bi-dot fs-4'></i>Styling CSS   <br /><i class='bi bi-dot fs-4'></i>Display Property   <br /><i class='bi bi-dot fs-4'></i>Learn More About Web Design   <br /><i class='bi bi-dot fs-4'></i>CSS Static and Relative Positioning   <br /><i class='bi bi-dot fs-4'></i>Absolute positioning   <br /><i class='bi bi-dot fs-4'></i>The Dark Art of Centering Elements with CSS   <br /><i class='bi bi-dot fs-4'></i>Font Styling in Our Personal Site   <br /><i class='bi bi-dot fs-4'></i>Learn More About Typography   <br /><i class='bi bi-dot fs-4'></i>Adding Content to Our Website   <br /><i class='bi bi-dot fs-4'></i>CSS Sizing   <br /><i class='bi bi-dot fs-4'></i>CSS Font Property    <br /><i class='bi bi-dot fs-4'></i>CSS Float and Clear    <br /><i class='bi bi-dot fs-4'></i>More Practice HTML and CSS
            </p>

        </div>
    </div>
</div>
                        
                        
                        <div class="accordion-item">
    <h2 class="accordion-header" id="heading90">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse90" aria-expanded="true"
            aria-controls="collapse90">
            Introduction to Javascript
        </button>
    </h2>
    <div id="collapse90"
        class="accordion-collapse collapse  hide "
        aria-labelledby="heading90" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p class="mb-2 pl-2 " style="font-size:17px;">
                  <br /><i class='bi bi-dot fs-4'></i>Introduction to Javascript   <br /><i class='bi bi-dot fs-4'></i>Javascript Alerts    <br /><i class='bi bi-dot fs-4'></i>Adding Behaviour to Websites   <br /><i class='bi bi-dot fs-4'></i>Data Types   <br /><i class='bi bi-dot fs-4'></i>Javascript Variables   <br /><i class='bi bi-dot fs-4'></i>Naming and Naming Conventions for Javascript Variables   <br /><i class='bi bi-dot fs-4'></i>String Concatenation   <br /><i class='bi bi-dot fs-4'></i>String Lengths and Retrieving the Number of Characters   <br /><i class='bi bi-dot fs-4'></i>Slicing and Extracting Parts of a String   <br /><i class='bi bi-dot fs-4'></i>Changing Casing in Text   <br /><i class='bi bi-dot fs-4'></i>Basic Arithmetic and the Modulo Operator in Javascript   <br /><i class='bi bi-dot fs-4'></i>Increment and Decrement Expressions   <br /><i class='bi bi-dot fs-4'></i>Javascript Numbers    <br /><i class='bi bi-dot fs-4'></i>Creating and Calling Functions   <br /><i class='bi bi-dot fs-4'></i>Functions Part 2: Parameters and Arguments   <br /><i class='bi bi-dot fs-4'></i>Functions Part 3: Outputs & Return Values
            </p>

        </div>
    </div>
</div>
                        <div class="accordion-item">
    <h2 class="accordion-header" id="heading91">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse91" aria-expanded="true"
            aria-controls="collapse91">
            Bonus Gift 🎁
        </button>
    </h2>
    <div id="collapse91"
        class="accordion-collapse collapse  hide "
        aria-labelledby="heading91" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p class="mb-2 pl-2 " style="font-size:17px;">
                  <br /><i class='bi bi-dot fs-4'></i>Tools for unlimited SVG   <br /><i class='bi bi-dot fs-4'></i>2 UI Kits   <br /><i class='bi bi-dot fs-4'></i>Custom Project Allocation to everyone
            </p>

        </div>
    </div>
</div>
                        <div class="accordion-item">
    <h2 class="accordion-header" id="heading92">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse92" aria-expanded="true"
            aria-controls="collapse92">
            Intermediate Javascript
        </button>
    </h2>
    <div id="collapse92"
        class="accordion-collapse collapse  hide "
        aria-labelledby="heading92" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p class="mb-2 pl-2 " style="font-size:17px;">
                  <br /><i class='bi bi-dot fs-4'></i>Number guessing game   <br /><i class='bi bi-dot fs-4'></i>Control Statements: Using If-Else Conditionals & Logic Comparators and Equality   <br /><i class='bi bi-dot fs-4'></i>Combining Comparators    <br /><i class='bi bi-dot fs-4'></i>Introducing the Leap Year Code    <br /><i class='bi bi-dot fs-4'></i>Collections: Working with Javascript Arrays   <br /><i class='bi bi-dot fs-4'></i>Adding Elements and Intermediate Array Techniques   <br /><i class='bi bi-dot fs-4'></i>Control Statements: While Loops  <br /><i class='bi bi-dot fs-4'></i> Improving the game    <br /><i class='bi bi-dot fs-4'></i>Control Statements: For Loops   <br /><i class='bi bi-dot fs-4'></i>Introducing the Fibonacci Code Challenge
            </p>

        </div>
    </div>
</div>
                        <div class="accordion-item">
    <h2 class="accordion-header" id="heading93">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse93" aria-expanded="true"
            aria-controls="collapse93">
            The Document Object Model (DOM)
        </button>
    </h2>
    <div id="collapse93"
        class="accordion-collapse collapse  hide "
        aria-labelledby="heading93" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p class="mb-2 pl-2 " style="font-size:17px;">
                  <br /><i class='bi bi-dot fs-4'></i>Adding Javascript to Websites   <br /><i class='bi bi-dot fs-4'></i>Introduction to the Document Object Model (DOM)   <br /><i class='bi bi-dot fs-4'></i>Selecting HTML Elements with Javascript   <br /><i class='bi bi-dot fs-4'></i>Manipulating and Changing Styles of HTML Elements with Javascript   <br /><i class='bi bi-dot fs-4'></i>The Separation of Concerns: Structure vs Style vs Behaviour   <br /><i class='bi bi-dot fs-4'></i>Text Manipulation and the Text Content Property Manipulating   <br /><i class='bi bi-dot fs-4'></i>HTML Element Attributes
            </p>

        </div>
    </div>
</div>
                        <div class="accordion-item">
    <h2 class="accordion-header" id="heading94">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse94" aria-expanded="true"
            aria-controls="collapse94">
            Random Quotes App
        </button>
    </h2>
    <div id="collapse94"
        class="accordion-collapse collapse  hide "
        aria-labelledby="heading94" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p class="mb-2 pl-2 " style="font-size:17px;">
                Major Project
            </p>

        </div>
    </div>
</div>
                    </div>
                    <div class="my-5 text-center">
                        <a href="https://codekaro.in/enroll/22" class="btn ck-btn ck-rounded btn-lg   px-5">
                            <h2 class="fs-3 mb-1 text-white fw-bold">Enroll now at just Rs 299</h2>
                            <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container mt-5">
            <div class="text-center">
                <h1 class=" mx-xl-8 mb-0 fw-600">Loved by 15000+ students</h1>
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
            <div class="my-5 text-center">
                <a href="https://codekaro.in/enroll/22" class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal"
                        data-bs-target="#enroll">
                            <h2 class="fs-3 mb-1 text-white fw-bold">Enroll now at just Rs 299</h2>
                            <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
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
                <a href="https://codekaro.in/enroll/22" class="btn ck-btn ck-rounded btn-lg   px-5">
                    <h2 class="fs-3 mb-1 text-white fw-bold">Enroll now at just Rs 299</h2>
                    <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                </a>
            </div>
            <p>Once the timer hits zero, pricing will be increased to 2499.00/-</p>
          </div>
        </div>
  </section>

@include('layouts.ck-footer')
  {{-- enrollment model  starts --}}

  <script src="{{asset('css/plyr.min.js')}}"></script>
  <script>
    (function () {
    const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

let birthday = "apr 3, 2022 23:30:00",
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

const player = new Plyr('#player');
</script>
@endsection