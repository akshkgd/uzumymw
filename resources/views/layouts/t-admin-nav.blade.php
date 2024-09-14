<header id="sticky-header" class="fixed top-0 z-[60] h-14 flex items-center justify-center w-full duration-500 ease-out bg-white border-b bg-opacity-90 backdrop-blur-md border-neutral-300 border-opacity-40">
      <div class="flex items-center justify-between w-full px-5  mx-auto 2xl:px-5  py-1">
        <div class="relative z-10 flex gap-4 items-center max-auto leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
        <a href="#" class="sm:mr-8 font-sans text-lg flex items-center gap-2 text-left text-black no-underline bg-transparent cursor-pointer group focus:no-underline">
          <svg class="text-white rotate-90" fill="black" width="24" height="24" viewBox="0 0 32 32" version="1.1" aria-labelledby="unsplash-home" aria-hidden="false" style="flex-shrink:0"><desc lang="en-US">Unsplash logo</desc><title id="unsplash-home">Codekaro</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg>
        </a>

        {{-- add links --}}
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="hover:text-violet-900" type="button">Add User</button>
        <button data-modal-target="access-modal" data-modal-toggle="access-modal" class="hover:text-violet-900" type="button">Grant Access</button>
        
        
        <a href="" class="">Create Course</a>
        <a href="" class="">Batches</a>


          
          <nav class="items-center hidden space-x-5 text-sm font-medium lg:flex"></nav>
        </div>
        @auth
        
        <div class="flex gap-3 items-center">
          {{-- <a href="{{url('/my-classes')}}" class="">My batches</a> --}}
          <form method="post" action="{{ route('users.search') }}" class="fle hidde items-center">
            <input type="text" name="query" placeholder="Search user" class="w-fu text-s px-4 py-2 border-none focus:ring-0  focus:outline-none focus:border-none">
            {{-- <button  type="submit" class="bt text-whit px-4 py- pt-3 box-border">Search --}}
            </button>
        </form>

        
        <div class="relative">
          <div x-data="{ dropdownOpen: false }" class="relative">
            <div class="flex items-center">
              <button
              :class="{ 'hover:bg-white' : !dropdownOpen, 'bg-white' : dropdownOpen }"
              @click="dropdownOpen=true"
              class="inline-flex items-center justify-center h-12 py-2 pl-3 pr-0 text-sm font-medium transition-colors bg-white border-0 rounded-md text-neutral-700 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
            >
              <img
                src="{{Auth::user()->avatar}}"
                class="object-cover w-8 h-8 border rounded-full border-neutral-200"
              />
              <span
                class="flex flex-col items-start flex-shrink-0 h-full ml-2 leading-none translate-y-px"
              >
                <!-- Replace with your button content -->
              </span>
            </button>
            </div>
            
            <div
              x-show="dropdownOpen"
              @click.away="dropdownOpen=false"
              x-transition:enter="ease-out duration-200"
              x-transition:enter-start="-translate-y-2"
              x-transition:enter-end="translate-y-0"
              class="absolute top-0 right-0 z-50 w-56 mt-12"
              x-cloak
            >
              <div
                class="p-1 mt-1 bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700"
              >
              @php
                  $email = Auth::user()->email;
                  $obfuscatedEmail = substr($email, 0, 2) . str_repeat('•', strlen($email) - 6) . substr($email, -4);
              @endphp
                <div class="py-2 px-2 text-neutral-600">
                  <div class="px-2 text-sm">Signed in as</div>
                  <div class="px-2  text-sm text-neutral-500">{{$obfuscatedEmail}}</div>
                </div>

                <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                <a
                  href="{{url('/my-account')}}"
                  class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="w-4 h-4 mr-2"
                  >
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <span>Profile</span>
                  <span class="ml-auto text-xs tracking-widest opacity-60"
                    >⇧⌘P</span
                  >
                </a>
                <a
                  href="{{url('/sessions')}}"
                  class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="w-4 h-4 mr-2"
                  >
                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                    <line x1="2" x2="22" y1="10" y2="10"></line>
                  </svg>
                  <span>Sessions</span
                  ><span class="ml-auto text-xs tracking-widest opacity-60"
                    >⌘B</span
                  >
                </a>
                
                <!-- <div class="h-px my-1 -mx-1 bg-neutral-200"></div> -->
                <a
                  href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                  class="relative flex cursor-default select-none hover:bg-red-100 items-center hover:cursor-pointer hover:text-red-700 rounded px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="w-4 h-4 mr-2"
                  >
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" x2="9" y1="12" y2="12"></line>
                  </svg>
                  <span>Log out</span>
                  <span class="ml-auto text-xs tracking-widest opacity-60"
                    >⇧⌘Q</span
                  >
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
              </div>
            </div>
          </div>
        </div>
        </div>
        @endauth
        @guest
          <div class="py-2 flex gap-4 items-center">
            <a href="/login" class="text-sm">Login</a>
            <a href="/login" class="border bg-black border-black text-white rounded-md text-sm px-3 py-1">Sign Up</a>
          </div>

        @endguest
      </div>
    </header>

    {{-- add user modal --}}
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-md max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white  dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5  rounded-t">
                  <div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Add learner</h3>
                  <p class="text-xs text-neutral-600">Enter details to create learner account manually</p>
                  </div>
                  <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900  text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 md:p-5">
                  <form class="space-y-4" action="#">
                      <div>
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name*</label>
                          <input type="name" name="name" id="email" class="bg-gray-5 border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Enter learner name" required />
                      </div>
                      <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email*</label>
                        <input type="email" name="email" id="email" class="bg-gray-5 border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Enter learner email" required />
                    </div>
                    <div>
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile</label>
                      <input type="name" name="email" id="email" class="bg-gray-5 border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Enter learner phone" required />
                  </div>
                <div class="flex justify-end">
                  <button type="submi" class="w-ful ml-auto text-white bg-black hover:bg-neutral-800 focus:ring-0 focus:outline-none  font-normal  text-sm px-5 py-3 text-center">Add learner</button>

                </div>      
                  </form>
              </div>
          </div>
      </div>
  </div> 

    {{-- add user modal ends--}}

{{-- Access Modal --}}
<div id="access-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white  dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
              <div>
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Add learner to course</h3>
                  <p class="text-xs text-neutral-600">Enter details to grant course access manually</p>
              </div>
              <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900  text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="access-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5">
              <form class="space-y-4" action="{{ route('addAccess') }}" method="POST" id="accessForm">
                  @csrf
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email*</label>
                      <input type="email" name="email" id="accessEmail" class="bg-gray-5 border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Enter learner email" required />
                      <div class="my-2 text-success" id="userDetails"></div>
                  </div>
                  <div>
                      <label for="batchId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batch ID*</label>
                      <input type="tex" name="batchName" id="batchName" class="bg-gray-5 border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-neutral-500 focus:outline-none block w-full p-2.5" placeholder="Enter batch ID" required />
                      <input type="hidden" name="batchId" id="batchId" class="bg-gray-5 border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5" placeholder="Enter batch ID" required />
                      
                      <div id="batchSuggestions" class="absolut  z-10 bg-neutral-50 borde w-full max-h-40 overflow-y-auto box-border"></div> <!-- Container for batch suggestions -->
                    </div>
                  <div>
                      <label for="invoiceId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Invoice ID*</label>
                      <input type="text" name="invoiceId" id="invoiceId" class="bg-gray-5 border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5" placeholder="Enter invoice ID" required />
                  </div>
                  <div>
                      <label for="transactionId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Transaction ID*</label>
                      <input type="text" name="transactionId" id="transactionId" class="bg-gray-5 border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5" placeholder="Enter transaction ID" required />
                  </div>
                  <div>
                      <label for="paymentMethod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Method*</label>
                      <input type="text" name="paymentMethod" id="paymentMethod" class="bg-gray-5 border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5" placeholder="Enter payment method" required />
                  </div>
                  <div>
                      <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount Paid*</label>
                      <input type="text" name="amount" id="amount" class="bg-gray-5 border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5" placeholder="Enter amount paid" required />
                  </div>
                  <div>
                      <label for="paidAt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paid At*</label>
                      <input type="date" name="paidAt" id="paidAt" class="bg-gray-5 border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5" required />
                  </div>
                  <div class="flex justify-end">
                      <button type="submi" class="w-ful ml-auto text-white bg-black hover:bg-neutral-800 focus:ring-0 focus:outline-none font-normal text-sm px-5 py-3 text-center">Grant Access</button>
                  </div>      
              </form>
          </div>
      </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      var emailInput = document.getElementById('accessEmail');
      var userDetails = document.getElementById('userDetails');

      emailInput.addEventListener('input', function () {
          var email = emailInput.value;

          // Perform AJAX request
          var xhr = new XMLHttpRequest();
          xhr.open('POST', '{{ route('getUser') }}', true);
          xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  displayUserDetails(JSON.parse(xhr.responseText));
              }
          };
          xhr.send('_token={{ csrf_token() }}&email=' + encodeURIComponent(email));
      });

      function isObjectBlank(obj) {
          return Object.keys(obj).length === 0;
      }

      function displayUserDetails(data) {
          if (isObjectBlank(data)){
            userDetails.classList.add('text-sm', 'text-red-600')
              userDetails.innerHTML = 'Learner does not exist. Create learner and then assign course.';
          } else {
              userDetails.classList.add('text-sm', 'text-violet-600');
              userDetails.classList.remove('text-red-600')
              userDetails.innerHTML =  (data.name ? data.name : '') + 
                (data.email ? ', ' + data.email : '') + 
                (data.mobile ? ', ' + data.mobile : '');
          }
      }
  });

  document.addEventListener('DOMContentLoaded', function () {
    var batchNameInput = document.getElementById('batchName');
    var batchIdInput = document.getElementById('batchId');  // Hidden input for batch ID
    var batchSuggestions = document.getElementById('batchSuggestions');

    batchNameInput.addEventListener('input', function () {
        var batchName = batchNameInput.value;

        if (batchName.length > 2) {  // Only search when the input is longer than 2 characters
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '{{ route("getBatchSuggestions") }}?batchName=' + encodeURIComponent(batchName), true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    displayBatchSuggestions(JSON.parse(xhr.responseText));
                }
            };
            xhr.send();
        } else {
            batchSuggestions.innerHTML = '';  // Clear suggestions if input is too short
        }
    });

    function displayBatchSuggestions(batches) {
        batchSuggestions.innerHTML = ''; // Clear previous suggestions
        
        if (batches.length > 0) {
          batchSuggestions.classList.add('border')
            batches.forEach(function (batch) {
                var suggestionItem = document.createElement('div');
                suggestionItem.classList.add('p-2','text-sm', 'cursor-pointer', 'hover:bg-neutral-200');
                suggestionItem.innerText = batch.name + ' (B-' + batch.id + ')';  // Show name and ID

                // Event to populate the input fields when a suggestion is clicked
                suggestionItem.addEventListener('click', function () {
                    batchNameInput.value = batch.name;  // Set the batch name in the input
                    batchIdInput.value = batch.id;  // Set the batch ID in the hidden input
                    batchSuggestions.innerHTML = '';  // Clear suggestions after selection
                });

                batchSuggestions.appendChild(suggestionItem);
            });
        } else {
            batchSuggestions.innerHTML = '<div class="p-2 text-gray-500">No results found</div>';
        }
    }
});


</script>

