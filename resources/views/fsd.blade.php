
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<style>
    li {
        margin-bottom: 3px;
    }

    .bg-mute {
        background-color: #e6e6e6 !important;
    }

    .sticky-lg-top {
        margin-top: 20px;
        top: 20 !important;
    }

    .accordion-button:not(.collapsed) {
        color: black;
        background-color: white;
        */ box-shadow: 0 0 0 white !important;
    }

    .accordion-button {
        color: black;
        background-color: white;
        */ box-shadow: 0 0 0 white;
    }

    @media(max-width:786px) {
        .slider-menu {
            align-items: center;
            background-color: #fff;
            box-shadow: 0 -2px 4px rgb(0 0 0 / 8%), 0 -4px 12px rgb(0 0 0 / 8%);
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            overflow-y: hidden;
            padding: 0.8rem 1.6rem;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            /* z-index: 1000; */
        }

        .btn-round {
            display: none !important;
        }
    }

    @media(min-width:786px) {
        .slider-menu {
            display: none
        }
    }

    .ck-btn {
        /* background-color: #4b2aad; */
        background-image: linear-gradient(99deg, rgb(48, 124, 247), rgb(50, 122, 255));
        border: 1px solid transparent;
        width: 100%;
        margin-top: 24px;
        border: none;
        color: white !important;
        padding: 12px 46px !important;
        font-weight: 400;
        display: inline-block;
        cursor: pointer;
        font-size: 16px;
        border-radius: 12px;
        /* box-shadow: rgb(247 123 155 / 71%) 0px 3px 16px 0px; */
    }

</style>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Web Development Bootcamp (MERN)</title>
    <meta name="keywords" content="Full Stack Web Development Bootcamp (MERN)">
    <meta name="og:description" content="Welcome to the Complete Web Development Bootcamp, the only course you need to learn to code and become a full-stack web developer.">
    <link rel="canonical" href="https://codekaro.in/explore-course/39"/>
    <link rel="icon" href="https://codekaro.in/assets/img/chrome-icon.png">
    <meta name="facebook-domain-verification" content="sqxnqkagio33ipi426hafktfp1x76s" />
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    

    <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-K8B392D');</script>
  <!-- End Google Tag Manager -->
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11206387820"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11206387820');
</script>

    <style>
      @keyframes  hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes  typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link rel="stylesheet" href="https://codekaro.in/assets/css/ck.css" />
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <script>
      var myModal = document.getElementById('staticBackdrop');
var modal = bootstrap.Modal.getOrCreateInstance(myModal)
modal.show()
  
    </script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11206387820"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11206387820');
</script>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8B392D"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <div class="d-none m-0 alert bg-primary text-center text-white fw-light rounded-0 border-0 smal d-non">
      New masterclasses has been launched! <a href="" class="text-white stretched-link nav-link d-inline p-0">Check Now</a> Limited seats available.
    </div>
    <div class="loader">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
        <a class="navbar-brand fw-bold fs-5" href="https://codekaro.in">Codekaro</a>
            <span class="ms-auto">
            <a href="" type="button" class="btn btn-dark px-4 rounded-pill hidden-lg" data-bs-toggle="modal"
      data-bs-target="#login">
      Login </a>
            
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
    </span>
    
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      
      <div class="navbar-nav">
        <a class="nav-link " aria-current="page" href="https://codekaro.in/event">Free Classes</a>
        <a class="nav-link" href="https://codekaro.in/course">Course</a>
        <a class="nav-link" href="https://codekaro.in/about">About us</a>
      </div>
      <div class="ms-auto">
                <ul class="navbar-nav">
                    <a href="" class="nav-link " data-bs-toggle="modal" data-bs-target="#register">Register</a>
                    <a href="" type="button" class="btn btn-dark px-4 rounded-pill hidden-sm" data-bs-toggle="modal"
                        data-bs-target="#login">
                        Login </a>
                      </ul>
                                                  
      </div>
    </div>
  </div>
</nav>
                
        

<!-- navbar ends -->

    <section>
        <div class="container pt-0 pt-lg-5 pt-xlg-5 pt-md-5 mt-5 ">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="fw-bold m-0"> Full Stack Web Development Cohort (MERN)</h1>
                    <p class="mt-2 fs-6">Welcome to the Complete Web Development cohort, the only course you need to learn to code and become a full-stack web developer.</p>


                    <div>
                        <div class="car card-bod">
                            <h3>Requirements</h3><ul><li>No programming experience needed - I'll teach you everything you need to know</li><li>A Mac or PC computer with access to the internet</li><li>No paid software required - all websites will be created with VS Code (which is free)</li><li>I'll walk you through, step-by-step how to get all the software installed and set up</li></ul>
                        </div>

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
                                              <br /><i class='bi bi-dot fs-4'></i>Project - Stylised Personal Site   <br /><i class='bi bi-dot fs-4'></i>What Are Favicons?   <br /><i class='bi bi-dot fs-4'></i>HTML Divs   <br /><i class='bi bi-dot fs-4'></i>The Box Model of Website   <br /><i class='bi bi-dot fs-4'></i>Styling CSS   <br /><i class='bi bi-dot fs-4'></i>Display Property   <br /><i class='bi bi-dot fs-4'></i>Learn More About Web Design   <br /><i class='bi bi-dot fs-4'></i>CSS Static and Relative Positioning   <br /><i class='bi bi-dot fs-4'></i>Absolute positioning   <br /><i class='bi bi-dot fs-4'></i>The Dark Art of Centering Elements with CSS   <br /><i class='bi bi-dot fs-4'></i>Font Styling in Our Personal Site   <br /><i class='bi bi-dot fs-4'></i>Learn More About Typography   <br /><i class='bi bi-dot fs-4'></i>Adding Content to Our Website   <br /><i class='bi bi-dot fs-4'></i>CSS Sizing   <br /><i class='bi bi-dot fs-4'></i>CSS Font Property    <br /><i class='bi bi-dot fs-4'></i>CSS Float and Clear    <br /><i class='bi bi-dot fs-4'></i>More Practice HTML and CSS
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading88">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse88" aria-expanded="true"
                                        aria-controls="collapse88">
                                        Introduction to Bootstrap 5.0
                                    </button>
                                </h2>
                                <div id="collapse88"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading88" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>What is Bootstrap?   <br /><i class='bi bi-dot fs-4'></i>Installing Bootstrap   <br /><i class='bi bi-dot fs-4'></i>Web Design 101 - Wireframing   <br /><i class='bi bi-dot fs-4'></i>The Bootstrap Navigation Bar   <br /><i class='bi bi-dot fs-4'></i>Download the Starting Files   <br /><i class='bi bi-dot fs-4'></i>Setting Up Our New Project   <br /><i class='bi bi-dot fs-4'></i>Bootstrap Grid Layout System   <br /><i class='bi bi-dot fs-4'></i>Getting Montserrat Black and other Font Weights   <br /><i class='bi bi-dot fs-4'></i>Adding Grid Layouts to Our Website   <br /><i class='bi bi-dot fs-4'></i>A Note About CSS Link Order   <br /><i class='bi bi-dot fs-4'></i>Bootstrap Containers   <br /><i class='bi bi-dot fs-4'></i>Bootstrap Buttons & Font Awesome   <br /><i class='bi bi-dot fs-4'></i>Project: Multi page Website Bootstrap   <br /><i class='bi bi-dot fs-4'></i>Challenge 1 How to Deal with Procrastination
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading89">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse89" aria-expanded="true"
                                        aria-controls="collapse89">
                                        Intermediate Bootstrap
                                    </button>
                                </h2>
                                <div id="collapse89"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading89" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>The Bootstrap Carousel Part 1   <br /><i class='bi bi-dot fs-4'></i>The Bootstrap Carousel Part 2   <br /><i class='bi bi-dot fs-4'></i>Bootstrap Cards   <br /><i class='bi bi-dot fs-4'></i>The CSS Z-Index and Stacking Order   <br /><i class='bi bi-dot fs-4'></i>Media Query   <br /><i class='bi bi-dot fs-4'></i>Breakpoints Bootstrap   <br /><i class='bi bi-dot fs-4'></i>Challenge 2 How to become a Better Programmer    <br /><i class='bi bi-dot fs-4'></i>Code Refactoring Put it into Practice   <br /><i class='bi bi-dot fs-4'></i>Refactor our Website Part 1   <br /><i class='bi bi-dot fs-4'></i>Advanced CSS - Selector Priority Project : Completing the Website
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
                                        The Dicee Game
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
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading95">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse95" aria-expanded="true"
                                        aria-controls="collapse95">
                                        The Command Line
                                    </button>
                                </h2>
                                <div id="collapse95"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading95" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>Understanding the Command Line. Long Live the Command Line!   <br /><i class='bi bi-dot fs-4'></i>Command Line Techniques and Directory Navigation   <br /><i class='bi bi-dot fs-4'></i>Creating, Opening, and Removing Files through the Command Line
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading96">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse96" aria-expanded="true"
                                        aria-controls="collapse96">
                                        Git, GitHub and Version Control
                                    </button>
                                </h2>
                                <div id="collapse96"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading96" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>Introduction to Version Control and Git   <br /><i class='bi bi-dot fs-4'></i>Version Control Using Git and the Command Line   <br /><i class='bi bi-dot fs-4'></i>GitHub and Remote Repositories   <br /><i class='bi bi-dot fs-4'></i>GitHub Private Repos are now Free!    <br /><i class='bi bi-dot fs-4'></i>Branching and Merging   <br /><i class='bi bi-dot fs-4'></i>Forking and Pull Requests
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading97">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse97" aria-expanded="true"
                                        aria-controls="collapse97">
                                        NODE.JS
                                    </button>
                                </h2>
                                <div id="collapse97"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading97" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>Explore the components of back-end development   <br /><i class='bi bi-dot fs-4'></i>Working with an MVC framework   <br /><i class='bi bi-dot fs-4'></i>Apply concepts like data types, objects, methods, object- oriented programming, and classes in the context of back- end development.   <br /><i class='bi bi-dot fs-4'></i>Server-Side JavaScript Using Node on the command line   <br /><i class='bi bi-dot fs-4'></i>NPM JavaScript Build Processes   <br /><i class='bi bi-dot fs-4'></i>Event Loop and Emitters   <br /><i class='bi bi-dot fs-4'></i>File System Interaction   <br /><i class='bi bi-dot fs-4'></i>Modules Native Node drivers
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading98">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse98" aria-expanded="true"
                                        aria-controls="collapse98">
                                        EXPRESS.JS
                                    </button>
                                </h2>
                                <div id="collapse98"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading98" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>Understand how to install and use express in Node applications   <br /><i class='bi bi-dot fs-4'></i>Creating Node and Express based servers   <br /><i class='bi bi-dot fs-4'></i>RESTful Routing with Express   <br /><i class='bi bi-dot fs-4'></i>Understand and use middleware for Node applications
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading99">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse99" aria-expanded="true"
                                        aria-controls="collapse99">
                                        Major Project E-commerce Website
                                    </button>
                                </h2>
                                <div id="collapse99"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading99" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                            Complete E-commerce Website frontend and backend
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading100">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse100" aria-expanded="true"
                                        aria-controls="collapse100">
                                        APPLICATION PROGRAM INTERFACES (APIS)
                                    </button>
                                </h2>
                                <div id="collapse100"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading100" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>Understand what APIs are and how they work.   <br /><i class='bi bi-dot fs-4'></i>HTTP in Depth   <br /><i class='bi bi-dot fs-4'></i>Calling APIs   <br /><i class='bi bi-dot fs-4'></i>Reading API documentation   <br /><i class='bi bi-dot fs-4'></i>Basic API Authentication   <br /><i class='bi bi-dot fs-4'></i>Server to server communication   <br /><i class='bi bi-dot fs-4'></i>JSON vs. XML, sending data over the wire.
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading101">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse101" aria-expanded="true"
                                        aria-controls="collapse101">
                                        NOSQL DATABASES WITH MONGODB AND MONGOOSE
                                    </button>
                                </h2>
                                <div id="collapse101"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading101" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>Serialization   <br /><i class='bi bi-dot fs-4'></i>How to model NoSQL data   <br /><i class='bi bi-dot fs-4'></i>Document Databases (MongoDB)   <br /><i class='bi bi-dot fs-4'></i>Create-Read-Update-Destroy (CRUD)   <br /><i class='bi bi-dot fs-4'></i>NoSQL Best Practices   <br /><i class='bi bi-dot fs-4'></i>Mongo Shell and command line use Installing MongoDB   <br /><i class='bi bi-dot fs-4'></i>Mapping relationships with MongoDB Using an object-data modelling library (Mongoose) to work easily with your data.
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading102">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse102" aria-expanded="true"
                                        aria-controls="collapse102">
                                        DEPLOYMENT
                                    </button>
                                </h2>
                                <div id="collapse102"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading102" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>Understand hosting and deployment.   <br /><i class='bi bi-dot fs-4'></i>Hosting static websites with GitHub Pages.    <br /><i class='bi bi-dot fs-4'></i>Deploying server based applications with Heroku.    <br /><i class='bi bi-dot fs-4'></i>Deploying Databases with Mongo Atlas.   <br /><i class='bi bi-dot fs-4'></i>100$ free credit🎁 for VPS Server
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading103">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse103" aria-expanded="true"
                                        aria-controls="collapse103">
                                        AUTHENTICATION and SECURITY
                                    </button>
                                </h2>
                                <div id="collapse103"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading103" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>Understand the need for authentication and keeping user details secure.   <br /><i class='bi bi-dot fs-4'></i>Learn about Encryption and use encryption to keep your database secure.   <br /><i class='bi bi-dot fs-4'></i>Learn and implement Hashing and Salting with bcrypt Using Sessions and Cookies to persist user log in sessions.   <br /><i class='bi bi-dot fs-4'></i>Setting up local authentication from scratch.   <br /><i class='bi bi-dot fs-4'></i>Implementing Passport to authenticate users quickly and effectively.   <br /><i class='bi bi-dot fs-4'></i>Understand and use environment variables to keep secret keys secure.   <br /><i class='bi bi-dot fs-4'></i>Understand and use OAuth 2.0 to log in users using Google and Facebook.
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading104">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse104" aria-expanded="true"
                                        aria-controls="collapse104">
                                        REACT.JS
                                    </button>
                                </h2>
                                <div id="collapse104"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading104" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>Learn front-end development with React.   <br /><i class='bi bi-dot fs-4'></i>Understand when and how to use React Components.   <br /><i class='bi bi-dot fs-4'></i>Learn to pass Props and work with them.   <br /><i class='bi bi-dot fs-4'></i>Learn to write JSX and understand JSX syntax.   <br /><i class='bi bi-dot fs-4'></i>Learn about the React DOM.   <br /><i class='bi bi-dot fs-4'></i>Learn State Management in React.   <br /><i class='bi bi-dot fs-4'></i>Learn about React Hooks.   <br /><i class='bi bi-dot fs-4'></i>Learn about conditional rendering in React.   <br /><i class='bi bi-dot fs-4'></i>Understand the difference between class and functional components.
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading105">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse105" aria-expanded="true"
                                        aria-controls="collapse105">
                                        React Project
                                    </button>
                                </h2>
                                <div id="collapse105"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading105" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>Todo list using react and Firebase
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading106">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse106" aria-expanded="true"
                                        aria-controls="collapse106">
                                        Bonus Gift 🎁
                                    </button>
                                </h2>
                                <div id="collapse106"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading106" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i>Resume Building   <br /><i class='bi bi-dot fs-4'></i>How to build your LinkedIn Profile
                                        </p>

                                    </div>
                                </div>
                            </div>
                                                    <div class="accordion-item">
                                <h2 class="accordion-header" id="heading179">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse179" aria-expanded="true"
                                        aria-controls="collapse179">
                                        Mentors Session 🎁
                                    </button>
                                </h2>
                                <div id="collapse179"
                                    class="accordion-collapse collapse  hide "
                                    aria-labelledby="heading179" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="mb-2 pl-2 " style="font-size:17px;">
                                              <br /><i class='bi bi-dot fs-4'></i> Live sessions with mentors and previous students
                                        </p>

                                    </div>
                                </div>
                            </div>
                        
                    </div>

                    <div class="mentor mt-3">
                        <div class="card " style="background:#f3f3f3">

                            <div class=" rounded p-2">
                                <h5 class="fw-600">About Mentor</h5>
                                <div class=" d-flex align-items-center mb-2">
                                    <img src="https://lh3.googleusercontent.com/a/ACg8ocJP7rmdOI5Z-_r4zTJVH6XOtbT22LLxahPrM5SmVdwQ80U=s96-c" alt="Ashish  Shukla"
                                        class="rounded-circle ml-3" height="80">
                                    <div class="m-2">
                                        <h6 class="mb-0 ck-font">Ashish Shukla</h6>
                                        <a href="#" class="text-dark fw-400">Instructor</a>
                                    </div>

                                </div>
                                <p class="pt-0 mt-0">I am a freelance web developer and instructor passionate about educating students through engaging lessons. Ex AOSPL, Lido Learning</p>
                            </div>
                        </div>


                    </div>

                </div>




                <div class="col-md-4 mb-5 mb-lg-0 mb-xlg-0 ">

                    <div class="card card-primary sticky-lg-top border-none shadow-lg" style="padding: 10px">
                        <img src="{{asset('assets/img/cmern.png')}}" alt="Image"
                            class="card-img-to course-car ck-rounded">
                        <div class="pills mt-3">
                            <span class="badge badge-pill badge-primary bg-mute text-dark fw-light">On demand Videos</span>
                            <span class="badge badge-pill badge-primary bg-mute text-dark fw-lighter">English</span>
                            <span
                                class="badge badge-pill badge-primary bg-mute text-dark fw-lighter">24
                                Modules</span>


                        </div>
                        
                        <div class="bg-primary-al rounded-lg">
                            <div class="mt-2">
                                <h1 class="fs-5 my-3 text-dark text-cente">Full Stack Web Development Cohort (MERN)</h3>

                                    <div class="d-flex fs-4 justify-content-cente ">
                                        <span class="fs-5  mr-1 js-dollar-sign text-dark ck-font">Rs</span>
                                        <span class="fs-5 mr-2 js-price-per-month text-muted px-2"
                                            style="text-decoration:line-through; font-weight:400">48999</span>
                                        <span
                                            class="display- px-1 fs-5  js-price-per-month fw-400">17999/-</span>
                                    </div>

                                    

                                    <p class="ck-font fw-400  m-0 d-none">Starts From
                                        Mon, 04 Sep</p>
                                    
                                        
                                        <div class="car p-2 d-non">
                                            
                                            <div class="col-md-12 text-cente mt-2">
                                                <div id="countdown" class="">
                                                    <ul type="none" class="navbar justify-content-around p-0 text-center">
                                                      <li class="d-inlin d-none fs-6"><span id="days" class="d-block display-6 fw-bold"></span> <span>days</span> </li>
                                                      <li class="d-inlin fs-6"><span id="hours" class="d-block display-6 fw-bold "></span>Hours</li>
                                                      <li class="d-inlin fs-6"><span id="minutes" class="d-block display-6 fw-bold"></span>Minutes</li>
                                                      <li class="d-inlinx fs-6"><span id="seconds" class="d-block display-6 fw-bold"></span>Seconds</li>
                                                    </ul>
                                                  </div>
                                            </div>
                                        </div>
                                       
                                                                            <div class="">
                                        
                                            <a href="https://rzp.io/l/mern-cohort" class="btn btn-dark w-100 py-3 fw-light ck-rounded mb-3">Join bootcamp at 17999/-</a>
                                            <div class="text-center small">Once the timer hits zero, pricing will be increased to 48999.00/-</div>
                                        
                                        </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <h1 class="fw-bold  text-center fw-400 p-3 mt-5">We have designed a <br> <span
                        class="text-prima wd_highlight1">flexible program</span> for you</h2>
                    <div class="col-md-4 mt-4">
                        <div class="card text-center f-1">
                            <div class="p-2">
                                <img src="https://codekaro.in/assets/img/missed-class-logo-1.svg" alt="">
                                <h2 class="fs-4 mt-2">Missed a class?</h2>
                                <p class="">No worries of missing a class, get a video on every alternate day to learn and practice at your pace.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card text-center f-3">
                            <div class="p-2">
                                <img src="https://codekaro.in/assets/img/hd.svg" alt="">
                                <h2 class="fs-4 mt-2">Have doubts?</h2>
                                <p class="">Fear not, attend team lead doubt solving sessions from 8:00 PM live.
                                    Or ask the questions inside the community.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card text-center f-2">
                            <div class="p-2">
                                <img src="https://codekaro.in/assets/img/wtr.svg" alt="">
                                <h2 class="fs-4 mt-2">Get Certificate!</h2>
                                <p>Receive a linkedIn shareable certificate after the completion of cohort and it's validated across the globe.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card text-center f-4">
                            <div class="p-2">
                                <img src="https://codekaro.in/assets/img/time.svg" alt="">
                                <h2 class="fs-4 mt-2">Timings clash?</h2>
                                <p class="">You get on demand videos to make sure college schedules or office hours
                                    do not clash with our classes.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card text-center f-5">
                            <div class="p-2">
                                <img src="https://codekaro.in/assets/img/project.svg" alt="" height="70">
                                <h2 class="fs-4 mt-2">College or office needs time??</h2>
                                <p class="">Pause your course and restart a month later with the next batch!
                                </p>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </section>
    
    <section class="d-none">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <h2 class="display-5 text-sm-center fw-400 p-3">We have designed a <span
                        class="text-prima ck-highlight">flexible program</span> for you</h2>
                <div class="col-md-4">
                    <div class="card card-dark p-2 text-center">
                        <div class="text-center">
                            <img src="https://codekaro.in/assets/img/missed-class-logo.svg" alt="" class="avatar avatar-lg ">
                        </div>
                        <h4 class="ck-font">Missed a class?</h4>
                        <p class="lead">Watch the recording later, with teaching assistants available to solve
                            your doubts
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dark p-2 text-center">
                        <div class="text-center">
                            <img src="https://codekaro.in/assets/img/office.svg" alt="" class="avatar avatar-lg ">
                        </div>
                        <h4 class="ck-font">Jobs & class timings clash?</h4>
                        <p class="lead">Our classes are held in the evening to make sure college schedules do not
                            clash with
                            our classes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dark p-2 text-center">
                        <div class="text-center">
                            <img src="https://codekaro.in/assets/img/revise.svg" alt="" class="avatar avatar-lg ">
                        </div>
                        <h4 class="ck-font">Want to revise?</h4>
                        <p class="lead">Access assignments/notes lifelong and recordings upto 6 months post course
                            completion
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dark p-2 text-center">
                        <div class="text-center">
                            <img src="https://codekaro.in/assets/img/doubts.svg" alt="" class="avatar avatar-lg ">
                        </div>
                        <h4 class="ck-font">Have Doubts?</h4>
                        <p class="lead">Get them resolved over text / video by our expert teaching assistants!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dark p-2 text-center">
                        <div class="text-center">
                            <img src="https://codekaro.in/assets/img/family-logo.svg" alt="" class="avatar avatar-lg ">
                        </div>
                        <h4 class="ck-font">College / family needs time??</h4>
                        <p class="lead">Pause your course and restart a month later with the next batch!
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="mt-5 pt-5 d-none">
        <div class="container mb-sm-5 pt-0">
            <div class="row justify-content-center">
                <h1 class="fw-bold text-sm-center fw-400 p-3">We built codekaro for <span
                        class="text-prima wd_highlight1">
                        college students </span> <br> and they love us</h2>
                    <div class="col-md-4 d-flex">
                        <div class="card my-2 card-dark p-2 ">
                            <div class=" d-flex align-items-center mb-2">
                                <img src="https://codekaro.in/assets/img/testimonials/bhanu-397d99374e67f29c99c907f25fe8e1bb6d8c8bdfbf3b78c780daddb3686941ef.png.gz"
                                    class="rounded-circle  m-" height="60">
                                <div class="mx-2">
                                    <h6 class="mb-0">Bhanu Pratap Singh Rathore</h6>
                                    <p class="m-0 p-0 text-muted">Student</p>
                                </div>
                            </div>
                            <p class="">All the interactive live classes with experienced instructors, the
                                sessions with veteran
                                mentors and the rigorous mock interviews helped bridge the gap in my learning process.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card my-2 card-dark p-2 flex-grow-1">
                            <div class=" d-flex align-items-center mb-2">
                                <img src="https://codekaro.in/assets/img/testimonials/suryakant-0a0b8726c67de8fe3464ac8ce00746a4ff6e8e61fef846f8c4c9825570fec2b4.png.gz"
                                    class="avatar  mr-3">
                                <div class="mx-2">
                                    <h6 class="mb-0">Suryakant Mishra</h6>
                                    <p class="m-0 p-0 text-muted">Student</p>
                                </div>
                            </div>
                            <p class="">The mentorship arrangement and the peer culture has helped me evolve
                                as a
                                coder, and I
                                am genuinely grateful for my association with codekaro.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card my-2 card-dark p-2 d-flex">
                            <div class=" d-flex align-items-center mb-2">
                                <img src="https://codekaro.in/assets/img/testimonials/suman-b8c6c6d44724e249c439ba0c7e24afa71cbcd8197f90c28d4ee776346cdbb175.png.gz"
                                    class="avatar  mr-3">
                                <div class="mx-2">
                                    <h6 class="m-0 p-0">Suman Mahato</h6>
                                    <p class="m-0 p-0 text-muted">Student</p>
                                </div>
                            </div>
                            <p class="">I still watch the recorded classes of Codekaro, and try to hone my
                                skills
                                more, codekaro
                                has helped me gain confidence and constantly strengthen my core concepts.</p>
                        </div>
                    </div>

            </div>
        </div>
    </section>


    <section class="p-0 my-5 d-non">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-10 my-5">
                    <div class="border shadow-3d ck-rounded p-5 d-md-flex align-items-center">
                        <div class="text-left">
                            <h2 class="text-left fw-bold">Still have doubts? <span
                                    class="text-prima ck-highlight">Request Callback</span></h2>
                            <p class="">Still have doubts or query, you can simply request callback and our team will get back to you as soon as possible</p>
                            <a href="" class="btn btn-dark px-3 m-0 fw-400">Request Callback</a>
                        </div>
                        <img src="https://codekaro.in/assets/img/ttu_illustration_new.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="slider-menu mt-5">

        <h3 class="ck-font ">₹17999 <span class="lead "
                style="text-decoration: line-through;">₹48999</span> </h3>
        <br>

        <div class="">
            <a href="https://rzp.io/l/mern-cohort"
                class="btn btn-primary w-10 fw-light py-2 px-5 rounded-pil">Enroll Now</a>
        </div>
    </div>

    
    <div class="m-1 ">
        
        <div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img class="icon bg-dark" src="https://codekaro.in/assets/img/icons/interface/cross.svg"
                                alt="cross interface icon" data-inject-svg />
                        </button>
                        <div class="m-xl-4 m-3">
                            
                            <div class="text-center mb-4">
                                <h4 class="h3 mb-1">Hi, <strong></strong> 👋</h4>
                                <p>Before you start your coding journey with codekaro let us know a bit more about
                                    you.</p>
                                </p>
                            </div>
                            <form method="POST" action="https://codekaro.in/complete-profile">
                                <input type="hidden" name="_token" value="iYEAHbn96ibQt3ip4MrFKGyk8kyTTS19VpqeqKCb">                                <div class="form-row">

                                    <div class="col-md-12">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="floatingInput" name="mobile"
                                                placeholder="name@example.com" value="">
                                            <label for="floatingInput">Mobile Number</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="floatingInput" name="college"
                                                placeholder="name@example.com" value="">
                                            <label for="floatingInput">Your School / College</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="floatingInput" name="course"
                                                placeholder="name@example.com" value="">
                                            <label for="floatingInput">Course</label>
                                        </div>
                                    </div>



                                    <div data-recaptcha data-sitekey="6Lemz4gUAAAAAElq4ZHFBzI7j8QUiYMn9I0mzQWG"
                                        data-size="invisible" data-badge="bottomleft">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-loading btn-block"
                                        data-loading-text="Sending">
                                        <img class="icon" src="assets/img/icons/theme/code/loading.svg"
                                            alt="loading icon" data-inject-svg />
                                        <span class="fw-400">Add Details</span>
                                    </button>
                                    <small class="text-muted form-text fw-400">We’ll never share your details. See
                                        our <a href="#">Privacy Policy</a>
                                    </small>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#subscribe-modal').modal('show');
        });

        function show(id) {
            console.log("fc", id)
        }
    </script>
    {{-- <script>
        (function () {
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

        let birthday = "november 19, 2023 16:00:00",
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

        
        if (distance < 0) {
          let headline = document.getElementById("headline"),
              countdown = document.getElementById("countdown"),
              content = document.getElementById("content");

          headline.innerText = "Class has Started!";
          countdown.style.display = "none";
          content.style.display = "block";

          clearInterval(x);
        }
        
      }, 0)
  }());
    </script> --}}
    
    <footer>
    <div class="container my-4">
      <div class="row">
        <div class="col-lg-6">
          <ul class="nav justify-content-center align-items-center h-100 justify-content-lg-start text-dark text-center mx-0 p-0" type="none">
            <li class="nav-item">
              <a class="nav-link text-dark active" aria-current="page" href="https://codekaro.in/about">About Us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link text-dark" href="https://codekaro.in/contact-us">Contact Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-dark"  href="https://codekaro.in/privacy">Privacy Policy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark"  href="https://codekaro.in/teach">Start Teaching</a>
            </li>
            
          </ul>
        </div>
        <div class="col-lg-6 text-right">
          <ul class="d-flex justify-content-center justify-content-lg-end text-dark m-0 p-0" type="none">
            
            <li class="nav-item">
              <a class="nav-link text-dark" target="_blank" href="https://facebook.com/codekaro.in"><img height="30" src="https://codekaro.in/assets/img/facebook.svg" alt=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark mt-1" target="_blank" href="https://instagram.com/codekaro.in"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg></a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-dark fs-5" target="_blank" href="https://twitter.com/akshkgd"><img height="30" src="https://codekaro.in/assets/img/twitter.svg" alt=""></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
    

        
<div class="">
  <div class="btn-g dropup d-non">
    <button type="button" class="btn btn-dark p-3 bg-light btn-round btn-floating dropdown-toggl" data-bs-toggle="dropdown" aria-expanded="false">
      ?
    </button>
    <ul class="dropdown-menu shadow">
      <!-- Dropdown menu links -->
      <li><a class="dropdown-item" href="https://codekaro.in/help">Help</a></li>
      <li><a class="dropdown-item" href="https://api.whatsapp.com/send/?phone=+917355191435&text=ok" target="_blank">WhatsApp Us</a></li>
      <li><a class="dropdown-item" href="https://codekaro.freshdesk.com/support/home">Raise Ticket</a></li>
    </ul>
  </div>
</div>


    <!-- register modal -->
    <div class="modal" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-5 shadow">
          <div class="modal-header p-5 pb-4 border-bottom-0">
            <!-- <h5 class="modal-title">Modal title</h5> -->
            <h2 class="fw-bold mb-0">Sign up for free</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
          <div class="modal-body p-5 pt-0">
            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" style="border-radius: 33px;">Continue with Google</button>
            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-outline-dark" onclick="displayRegisterForm()" id="continue-email-register-button" style="border-radius: 33px;">Continue with Email</button>
            <form class="" id="register-form">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Your Name</label>
                  </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
              
              
            </form>
            <small class="text-muted text-center">By clicking Sign up, you agree to the terms of use.</small>
          </div>
        </div>
      </div>
      </div>

    
      <!-- register modal ends -->


      
       
    <div class="card d-none border-none shadow p-fixe p-4 " style="position: fixed;
    z-index: 1030;
    left: 1.5rem; bottom:1.5rem; width:400px">
      <div class="d-md-flex align-items-center ">
        <img src="https://codekaro.in/assets/img/clockNudge.svg" height="80" alt=""> 
      <div class="mx-2">
        
      <p style="font-size: 14px">Complete your payment now & kickstart your NTA-UGC-NET & SET Exams preparation</p>  
      <a href="" class="btn btn-primary fw-lighter px-4 rounded-pil rounded" style="border-radius: 9px !important;">Enroll Now</a>
      
      </div>  
      </div>
    </div>
      
      
      <!-- login modal -->
    <div class="modal" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-5 shadow">
              <div class="modal-header px-lg-5 p-4 border-bottom-0">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <h2 class="display- fw-bolder">Login Now </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
        
              <div class="modal-body px-lg-5 p-4  pt-0">
                <p class="fs-6">Login to your account to see all your upcoming classes.</p>
                <button onclick="originalLoginForm()" id="goBackBtn" class="btn ck-outline-btn">Go back</button>
                <a href="https://codekaro.in/redirect" class="w-100 mb-3 btn btn-lg rounded-pill fw-light btn-primary " style="font-size: 16px; padding: 10px 0;" id="continue-gmail-login-button" type="submit">Continue with Google</a>
                <button class="w-100 mb-2 btn btn-lg rounded-pill btn-outline-muted text-dark" style="font-size: 16px; padding: 10px 0;" onclick="displayLoginForm()" id="continue-email-login-button" style="border-radius: 33px;">Continue with Email</button>
                <form method="POST" action="https://codekaro.in/login" class="d-non " id="login-form">
                  <input type="hidden" name="_token" value="iYEAHbn96ibQt3ip4MrFKGyk8kyTTS19VpqeqKCb">
                  <div class="form-group row">



                      <div class="col-md-12">

                          <div class="form-floating mt-0 ">
                              <input id="email" type="email"
                                  class="form-control input-email " name="email"
                                  value="" required autocomplete="email" placeholder="email">
                                                            <label for="email">Email</label>
                          </div>



                      </div>
                  </div>

                  <div class="form-group row mb-2">



                      <div class="col-md-12">
                          <div class="form-floating mt-0 ">
                              <input id="password" type="password"
                                  class="form-control input-password " name="password"
                                  required autocomplete="current-password" placeholder="password"
                                  style="background-color: white !important">
                                                                                          <label for="password">Password</label>
                          </div>



                      </div>

                  </div>
                  <div class="form-group row mb-0">
                      <div class="col-md-12 ">
                          <button type="submit" class="btn  btn-dark rounded-pill px-4 mb-2 fw-400">
                              Login
                          </button>

                          </p>
                          <div class="text-center mt-3">
                              
                          </div>
                      </div>
                  </div>
              </form>
                  
              </div>
            </div>
          </div>
          </div>
    
        
          <!-- login modal ends -->
          <!-- masterclass modal -->
    <div class="modal" id="masterclass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered" role="document">
          <div class="modal-content rounded-5 shado">
            <div class="modal-header pt-4 pb-4 px-3 pb-4 border-bottom-0">
              <!-- <h5 class="modal-title">Modal title</h5> -->
              <h4 class="fw-bol fs-4 fw-70 mb-0">Book your free masterclass</h2>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
      
            <div class="modal-body py-2 px-3 pt-0">
              
              
              <div class="card masterclass-hover  mb-3 p-3">
                <a href="" class="btn m-0 p-0" style="text-align: left;">
                  
                    <div class="">
                      <h5 class=" m-0">Web Development Bootcamp</h3>
                      <p>From Wed, 16 January 6:00 PM to 7:00 PM</p>
                    </div>
                   <div class=""> <p class="success-pill">5 seats left</p></div>
                  
                </a>
                
              </div>
              
              
              <!-- <a href="" class="btn btn-primary fw-light rounded-pill px-4">Enroll Now</a> -->
            <p class="small">Enroll Now and join now for free</p>
            </div>
          </div>
        </div>
        </div>
  
      
        <!-- masterclass modal ends -->


          <script>
            document.getElementById('goBackBtn').style.display = "none";
              displayLoginForm = ()=>{
                  document.getElementById('login-form').style.display = "block";
                  document.getElementById('continue-email-login-button').style.display = "none";
                  document.getElementById('continue-gmail-login-button').style.display = "none";
                  document.getElementById('goBackBtn').style.display = "block";
              }
            displayRegisterForm = ()=>{
                document.getElementById('register-form').style.display = "block";
                document.getElementById('continue-email-register-button').style.display = "none";
                document.getElementById('goBackBtn').style.display = "block";
            }
            originalLoginForm =() =>{
              document.getElementById('login-form').style.display = "none";
              document.getElementById('continue-email-login-button').style.display = "block";
              document.getElementById('continue-gmail-login-button').style.display = "block";
              document.getElementById('goBackBtn').style.display = "none";
            }
        </script>

        <script>
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

        </script>
<button type="button" id="e" class="d-none" data-bs-toggle="modal" data-bs-target="#enroll">
  
</button>
    <script src="https://codekaro.in/js/codekaro.js"></script>
    <script>
      // document.getElementById('e').click();
      // document.getElementById('enroll').style.display = "block";
    </script>
  </body>
</html>
