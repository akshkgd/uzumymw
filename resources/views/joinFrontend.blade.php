@extends('layouts.t-student')
@section('content')
@auth
@include('layouts.t-student-nav')
@endauth


<body>

  <main class="min-h-screen flex flex-col justify-center align-middle px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <div class="mt-1 flex justify-center">
        
      </div>
      <h2 class="text-center text-2xl -mt-1 font-bold leading-9 tracking-tight text-gray-900">Join frontend cohort.</h2>

      <p class="bg-white px-6 text-gray-500 text-center">Full access to cohort's starting on 3rd Aug, live sessions and Interview prepration.</p>
      
      @auth
      <div class="border rounded-xl mt-4">
            <div class="p-4">
                <p class="m-0">{{Auth::user()->name}}</p>
            </div>
            <div class="borde border-t p-4">
                <p class="m-0">{{Auth::user()->email}}</p>
            </div>
            <div class="borde border-t p-4">
              <p class="m-0">{{Auth::user()->mobile}}</p>
          </div>
      </div>
      <input placeholder="your name"  name="name" class="" type="hidden" value="{{Auth::user()->name}}"/>
      <input  placeholder="youremail@gmail.com"  name="email" type="hidden" value="{{Auth::user()->email}}" />
      <input  placeholder="phone number" name="phone" type="hidden" value="{{Auth::user()->mobile}}"/>
      
      @else
      <input type="text" placeholder="your name" id="name" name="name" class="mt-2 flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-xl peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"/>
      <input type="text" placeholder="youremail@gmail.com" id="email" name="email" class="mt-2 flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-xl peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"/>
      <input type="text" placeholder="phone number" id="mobile" name="phone" class="mt-2 flex w-full h-10 px-3 py-6 text-sm bg-white border rounded-xl peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"/>
      @endauth

      <div class="text-center">
        <button type="submit" class="bg-black text-white w-full px-5 py-4 rounded-xl inline-block mt-4" id="joinBtn" onclick="initiateCheckout()" >Join now at 4999/-</a>
      </div>
      </form>
      
      <div class="">
      <!-- <p class="bg-white px-6 text-gray-500 text-center">Uh-Oh! The page you're looking for seems to be missing</p> -->

        <p class="text-sm text-gray-600 mt-3">By joining, you agree to our Terms of Use. </p>
      </div>
    </div>
  </main>

    
      <script>   
      @auth
      function initiateCheckout() {
    let nameOfUser = '{{ auth()->user() ? auth()->user()->name : '' }}';
    let emailOfUser = '{{ auth()->user() ? auth()->user()->email : '' }}';
    let phoneNumber = '+91{{ auth()->user() ? auth()->user()->mobile : '' }}';
    console.log(nameOfUser, emailOfUser, phoneNumber)

	const params = new URLSearchParams({
		'discount-code': '',
		'course-slug': 'fsd',
		'prefilled-name': nameOfUser || '',
		'prefilled-email': emailOfUser || '',
		'prefilled-phone-number': phoneNumber || '',
        'smart-checkout-redirect': 'true',
	})

	// remove extra parameters
	params.forEach((value, key) => {
		if (value === '') params.delete(key)
	})

	window.location.href = `https://codekaro.pro/api/buy-course?${params.toString()}`
}

      @endauth  
      @guest
      function initiateCheckout() {
    let nameOfUser = document.getElementById('name').value;
    let emailOfUser = document.getElementById('email').value;
    let phoneNumber = document.getElementById('mobile').value;
    phoneNumber = `+91${phoneNumber}`;
    console.log(nameOfUser, emailOfUser, phoneNumber)

	const params = new URLSearchParams({
		'discount-code': '',
		'course-slug': 'fsd',
		'prefilled-name': nameOfUser || '',
		'prefilled-email': emailOfUser || '',
		'prefilled-phone-number': phoneNumber || '',
        'smart-checkout-redirect': 'true',
	})

	// remove extra parameters
	params.forEach((value, key) => {
		if (value === '') params.delete(key)
	})

	window.location.href = `https://codekaro.pro/api/buy-course?${params.toString()}`
}
      @endguest  
    

        function join(){
          let btn = document.getElementById('joinBtn');
          btn.innerText = 'please wait...'
        }
      </script>

</body>

</html>