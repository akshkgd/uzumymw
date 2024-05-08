@extends('layouts.t-student')
@section('content')
    @include('layouts.t-student-nav')
    <!-- student dashboard starts -->
    <style>
        .mantine-n6j944{
            display: none !important;
        }
    </style>
    <main  class="mt-32 ">
        

        <div style="height: 80vh" class="sm:mx-auto sm:w-full sm:max-w-6xl">
            <iframe
    src="https://app.droxy.ai/guest-chatbot/663b1ac65951e055ab050f75"
    width="100%"
    height="100%"
    frameborder="0">
</iframe>

        </div>
    </main>
  
</div>
<!-- <div class="mt-4 px-4">
                <div
                  class="sm:w-[650px] p-4 w-full none mx-auto border border-gray-200 rounded-2xl"
                >
                  <div class="flex-auto">
                    <p class="text-2xl font-medium leading-6 text-gray-900">
                      How to CSS
                    </p>
                    <p class="mt-1 truncate text-sm leading-5 text-gray-500">
                      By Ashish Shukla
                    </p>
                  </div>
      
                  <div class="flex flex-col sm:flex-row gap-x-5 my-2">
                    <p>&centerdot; Starting on 26th Jan &centerdot;</p>
                    <p>&centerdot; 6 months &centerdot;</p>
                  </div>
                  <div class="flex flex-col sm:flex-row gap-3">
                    <button
                      type="button"
                      class="inline-flex items-center justify-center gap-x-2 px-[30px] py-[14px] text-[15px] text-white transition-colors duration-200 rounded-[10px] bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none"
                    >
                      <img src="whatsapp.png" class="h-5" alt="" />
                      <span>Join Whatsapp Group</span>
                    </button>
                    <div class="h-full grid grid-cols-2 gap-3 sm:flex">
                      <button
                        href=""
                        class="inline-flex items-center justify-center px-[30px] py-[14px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] text-neutral-500 hover:text-neutral-700 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline"
                      >
                        Recordings
                      </button>
                      <button
                        href=""
                        class="inline-flex items-center justify-center px-[30px] py-[14px] text-[15px] transition-colors duration-200 bg-white border rounded-[10px] text-neutral-500 hover:text-neutral-700 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline"
                      >
                        Certificate
                      </button>
                    </div>
                  </div>
                </div>
              </div> -->

<!-- Invoice Card  -->
<!-- <div class="mt-4 px-4">
                <div
                  class="sm:w-[650px] p-4 w-full mx-auto border border-gray-200 rounded-2xl"
                >
                  <div class="grid grid-cols-2">
                    <div class="justify-self-start">
                      <div class="flex-auto">
                        <p class="text-2xl font-medium leading-6 text-gray-900">
                          How to CSS
                        </p>
                      </div>
      
                      <div class="flex flex-col sm:flex-row gap-x-4 my-2">
                        <p class="text-xl items-center">₹ 17,999</p>
                        <span class="hidden md:block text-2xl items-center"
                          >&centerdot;</span
                        >
                        <p class="flex text-md text-gray-500 items-center">
                          17th Nov 2023
                        </p>
                      </div>
                    </div>
                    <div class="justify-self-end">
                      <a
                        class="text-gray-700 hover:text-gray-900 cursor-pointer"
                        href=""
                        >Get Quote &nearr;</a
                      >
                    </div>
                  </div>
                </div>
              </div> -->
</div>
</main>









<script>
    // fetch("https://type.fit/api/quotes")
    // .then(function(response) {
    //   return response.json();
    // })
    // .then(function(data) {
    //   console.log(data);
    // });

    //   function timeOfDay() {
    //   let hour = new Date().getHours();
    //   if (hour >= 4 && hour <= 11) return 'Morning';
    //   if (hour >= 12 && hour <= 16) return 'Afternoon';
    //   if (hour >= 17 && hour <= 20) return 'Evening';
    //   if (hour >= 21 || hour <= 3) return 'Night';
    // }
    // document.getElementById("time").innerHTML = (`Good ${timeOfDay()},`);
    // // time.innerHtml(`Good ${timeOfDay()}!`);


    function timeOfDay() {
        let hour = new Date().getHours();
        if (hour >= 4 && hour <= 11) return 'Morning';
        if (hour >= 12 && hour <= 16) return 'Afternoon';
        if (hour >= 17 && hour <= 20) return 'Evening';
        if (hour >= 21 || hour <= 3) return 'Night';
    }
    document.getElementById("time").innerHTML = (`Good ${timeOfDay()}`);
    console.log(timeOfDay());
    if (timeOfDay() == 'Morning') {
        document.getElementById("test").style.background = "#f8d2c3";
        document.getElementById("greet").style.color = "#f28b82";
    }
    if (timeOfDay() == 'Afternoon') {
        document.getElementById("test").style.background = "#ffefc3";
        document.getElementById("greet").style.color = "#fbc129";
    }
    if (timeOfDay() == 'Evening') {
        document.getElementById("test").style.background = "#ceead6";
        document.getElementById("greet").style.color = "#4185f4";
    }
    if (timeOfDay() == 'Night') {
        document.getElementById("test").style.background = "#d2e3fc";
        document.getElementById("greet").style.color = "#4185f4";
    }
    window.addEventListner('load', ()=>{
        let a = document.querySelector('.mantine-n6j944');
        console.log(a);
    })
</script>
@endsection
