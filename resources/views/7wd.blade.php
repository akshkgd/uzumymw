@extends('layouts.ck')
@section('title', '' . e('Web Development Live Bootcamp | Codekaro'))
@section('meta_description', '' . e('Master in-demand web development skills with real work experience of building
professional work-like projects'))



<style>
.js-player{
    color: inherit !important;
}
.ck-btn:focus{
    outline: none !important;
    box-shadow:none;
}

    .razorpay-payment-button{
        /* background-image: linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120)); */
        /* background-image: linear-gradient(99deg, rgb(10, 255, 2), rgb(0, 255, 153)); */
        background-color: rgb(25, 208, 124);;
        border:none;
        color: white;
        padding: 16px !important;
        width:100%;
        font-weight:400;
        display: inline-block;
        cursor: pointer;
        font-size: 22px;
        font-weight: bolder;
        border-radius: 16px;
        margin: 20px 0 0 0;
    }
  .ck-btn{
        
        background-image: linear-gradient(99deg, rgb(247, 69, 48), rgb(255, 50, 120));
        border: 1px solid transparent;
        border:none;
        text-decoration: none;
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
    .gray-tag{
        background-color:rgb(235, 213, 255);
        display: inline-block;
        color: blueviolet !important;
        font-size: 18px;
        padding: 5px 30px;
        border-radius: 100px;
        font-weight: 400;
        margin:20px 0 0 0 ;
    }
    .text-light{
        color: #fff !important;
    }
    .white{
            color: white !important;
      }
</style>
@section('content')
    {{-- <div class="alert bg-primary-alt text-primary m-0 text-center fw-400 ck-font" role="alert" style="border-radius:0">
    New masterclasses has been launched ???? <a href="{{url('/event')}}" class="alert-link">Check Now</a>. Limited seats available.
  </div> --}}
    
    {{-- @include('layouts.ck-header') --}}
    <div class="container">
        @include('layouts.alert')
    </div>

    <section>
        <div class="container pt-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-9 mx-auto p-3 " style="height: 100vh; display:flex; align-items: center">
            
                    
    
                    <main class="text-center">
                        <div class="cwr my-5 border d-inline p-3 rounded-pill px-5">Inititive of Code with Random</div>
                        <h1 class="display-5 fw-bolder mt-5">Want to master <span class="wd_highlight"> frontend dev?</span>Join 30 days live Bootcamp</h1>
                       
                        <div class="row justify-content-center">
                            <p class="fs-5 text-muted col-md-10 text-center">Modern CSS from the beginning - all the way up to Javascript expert level with real world scenarios and examples! The must-have Frontend Bootcamp in 2022. </p>
                        </div>
        
        
                        <h4 class="fw-500 py-4"> <span class="fs-6">Starting From</span> <strong> 25th June</strong></h3>
        
                            <div class="my-3 white">
                                <a href="" class=" ck-btn ck-rounded btn-lg mt-3  px-5" class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal"
                                data-bs-target="#enroll">
                                    <h2 class="fs-3 mb-1 text-white fw-bold">Enroll now at just Rs 499</h2>
                                    <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                                </a>
                            </div>

                            
                    </main>
                </div>
            </div>
    
        </div>
    </section>


    


    <section class="py-5">
        <div class="container  pt-5">
            <div class="text-center">
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
            Bonus Gift ????
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
                  <br /><i class='bi bi-dot fs-4'></i>Number guessing game   <br /><i class='bi bi-dot fs-4'></i>Control Statements: Using If-Else Conditionals & Logic Comparators and Equality   <br /><i class='bi bi-dot fs-4'></i>Combining Comparators    <br /><i class='bi bi-dot fs-4'></i>Introducing the Leap Year Code    <br /><i class='bi bi-dot fs-4'></i>Collections: Working with Javascript Arrays   <br /> 
                 <i class='bi bi-dot fs-4'></i>Array Mapping <br /><i class='bi bi-dot fs-4'></i>Array Filter <br /><i class='bi bi-dot fs-4'></i>Array Reduce <br />
                  <i class='bi bi-dot fs-4'></i>Adding Elements and Intermediate Array Techniques   <br /><i class='bi bi-dot fs-4'></i>Control Statements: While Loops  <br /><i class='bi bi-dot fs-4'></i> Improving the game    <br /><i class='bi bi-dot fs-4'></i>Control Statements: For Loops   <br /><i class='bi bi-dot fs-4'></i>Introducing the Fibonacci Code Challenge<i class='bi bi-dot fs-4'></i>Async Await <br />
                  <i class='bi bi-dot fs-4'></i>Promises in Javascript <br />
                  <i class='bi bi-dot fs-4'></i>Higher Order Function <br /> <i class='bi bi-dot fs-4'></i>JSON stringify <br /><i class='bi bi-dot fs-4'></i>How to Use API's <br />
                  <i class='bi bi-dot fs-4'></i><strong>Random Quotes App : Project</strong> <br />
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
            Movies App
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

                        
                    <div class="my-5 text-center">
                        <a href="" data-bs-toggle="modal"
                        data-bs-target="#enroll" class="btn ck-btn ck-rounded btn-lg   px-5">
                            <h2 class="fs-3 mb-1 text-white fw-bold">Enroll now at just Rs 499</h2>
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
                <h1 class=" mx-xl-8 mb-0 fw-600">Loved by 2700+ students</h1>
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
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/akshkgd?ref_src=twsrc%5Etfw">@akshkgd</a> webdevlopment bootcamp day-1 was too good....we learnt a lot from today&#39;s session ....4 more days to go..... ????</p>&mdash; Shrushti Rajanhire (@ShrushtiRajanh1) <a href="https://twitter.com/ShrushtiRajanh1/status/1422553338265153536?ref_src=twsrc%5Etfw">August 3, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
            <div class="my-5 text-center">
                <a href="" data-bs-toggle="modal"
                data-bs-target="#enroll" class="btn ck-btn ck-rounded btn-lg   px-5" data-bs-toggle="modal"
                        data-bs-target="#enroll">
                            <h2 class="fs-3 mb-1 text-white fw-bold">Enroll now at just Rs 499</h2>
                            <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                        </a>
            </div>
        </div>
    </section>
    


    <section>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="text-center mb-5">
                    {{-- <h1 class="fw-bold">Learn by building  <br>
                        amazing projects</h1> --}}
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card h-100 mt-3 border-none ck-rounded f-1 px-5 py-3 my-3 text-center">
                        <img src="{{asset('assets/img/CardThree.webp')}}" class="project"  alt="">
                        <h2 class="fs-5">Work like frontend Developer at AirBnb</h2>
                        <p>Build a highly responsive frontend for a travel app.</p>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="card h-100 mt-3 border-none ck-rounded f-4 my-3 px-5 py-3 text-center">
                        <img src="{{asset('assets/img/CardSix.webp')}}" class="project" alt="">
                        <h2 class="fs-5">Create Movies App with Javascript & API</h2>
                        <p>Understand how APIs work and how to use them with javascript.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card h-100 mt-3 border-none ck-rounded f-3 px-5 py-3 my-3 text-center">
                        <img src="{{asset('assets/img/CardTwo.webp')}}" class="project" alt="">
                        <h2 class="fs-5">Solve challenges in food ordering App</h2>
                        <p>Build a dynamic frontend for food ordering app using React.js</p>
                        
                    </div>
                </div>
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
                    <span>????</span>
                    <span>????</span>
                    <span>????</span>
                    <p id="headline"></p>
                  </div> --}}
            </div>
            
            <div class="my-5">
                <a href="" data-bs-toggle="modal"
                data-bs-target="#enroll" class="btn ck-btn ck-rounded btn-lg   px-5">
                    <h2 class="fs-3 mb-1 text-white fw-bold">Enroll now at just Rs 499</h2>
                    <p class="mb-0 text-white fw-lighter small">Enroll now limited seats are available</p>
                </a>
            </div>
            <p class="text-danger">Once the timer hits zero, pricing will be increased to 2199.00/-</p>
          </div>
        </div>
  </section>


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
            <h2 class=" mb-0 fs-4 ">Join 30 days live web development bootcamp!</h2>
            <div class="col-md-12 text-center mt-4">
                <div id="countdown" class="">
                    <ul type="none" class="navbar justify-content-around p-0 text-center">
                      <li class="d-inlin fs-6"><span id="days1" class="d-block display-6 fw-bold"></span> <span>days</span> </li>
                      <li class="d-inlin fs-6"><span id="hours1" class="d-block display-6 fw-bold "></span>Hours</li>
                      <li class="d-inlin fs-6"><span id="minutes1" class="d-block display-6 fw-bold"></span>Minutes</li>
                      <li class="d-inlinx fs-6"><span id="seconds1" class="d-block display-6 fw-bold"></span>Seconds</li>
                    </ul>
                  </div>
            </div>
            <form action="{{ route('course-payment') }}" method="POST" class="">
                @csrf
                <script src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key='rzp_live_YFwQzuSuorFCPM' 
    
                    data-amount="49900"
                    data-buttontext="Pay ??? 499 Now" data-name="Codekaro" 
                    data-description="wd 30"
                    data-image="{{ asset('assets/img/codekaro-dark.png') }}"
                    data-theme.color="#0066ff">
                    @auth
                    data-prefill.name="{{Auth::user()->name}}"
                    data-prefill.email="{{Auth::user()->email}}"
                    data-prefill.contact="{{Auth::user()->mobile}}"  
                    @endauth
                    
                </script>
                <input type="hidden" name="courseId" value="23">
            </form>
            
            <p class="" style="color:red">Once the timer hits zero, pricing will be increased to 2199.00/-</p>

           
           </div>
            
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


    let birthday = "june" + offerDate +  " 2022 " +  offerHour + ':' + ':00' + ':00';
    countDown = new Date(birthday).getTime(),
    console.log(birthday);
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
@endsection