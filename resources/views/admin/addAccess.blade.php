@extends('layouts.t-admin-sidebar')
@section('content')
<section class="max-w-xl mx-auto border p-3 my-3">
    <div class="relative bg-white  dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
            <div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Add learner to course</h3>
                <p class="text-xs text-neutral-600">Enter details to grant course access manually</p>
            </div>
            
        </div>
        <!-- Modal body -->
        <div class="px-4 pb-4  md:px-5 md:pb-5">
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
                <div class="flex justify-en">
                    <button type="submi" class="w-ful text-white bg-black hover:bg-neutral-800 focus:ring-0 focus:outline-none font-normal text-sm px-5 py-3 text-center">Grant Access</button>
                </div>      
            </form>
        </div>
    </div>
</section>

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
@endsection
{{-- @extends('layouts.ck-admin')
@section('content')
<section class="pb-0">
    <div class="container pt-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-5 ">
                @include('layouts.alert')
                <h4 class="text-dark fw-600">Add Access of Batch</h4>
                <p>Add batchId 67 for full stack and 68 for frontend!</p>
                <form action="{{ route('addAccess') }}" method="POST" class="form-inlin ">
                    @csrf
                    
                    <div class="form-floating mt-3 mb-2 ">
                      <input style="border-radius:12px" type="text" id="email"  class="form-control" name="email" placeholder="Password">
                      <label for="floatingInput">Add Email Id</label>
                    </div>
                    <div class="my-2 text-success" id="userDetails"></div>
                    <div class="form-floating mt-3 mb-2 ">
                        <input style="border-radius:12px" type="text" id="floatingInput"  class="form-control" name="batchId" placeholder="Password">
                        <label for="floatingInput">Select Course Id</label>
                      </div>
                      <div class="form-floating mt-3 mb-2 ">
                      
                        <input type="text" id="floatingInput" style="border-radius:12px"  class="form-control" name="invoiceId" placeholder="Password">
                        <label for="floatingInput" >Invoice Id</label>
                      </div>
                      <div class="form-floating mt-3 mb-2 ">
                        
                          <input type="text" id="floatingInput" style="border-radius:12px"  class="form-control" name="transactionId" placeholder="Password" value="">
                          <label for="floatingInput" >Transaction Id</label>
                      </div>
                      <div class="form-floating mt-3 mb-2 ">
                        
                          <input type="text" id="floatingInput" style="border-radius:12px"  class="form-control" name="paymentMethod" placeholder="Password" value="">
                          <label for="floatingInput" >Payment Method</label>
                        </div>
                      <div class="form-floating mt-3 mb-2 ">
                        <input style="border-radius:12px" type="text" id="floatingInput"  class="form-control" name="amount" placeholder="Password">
                        <label for="floatingInput">Amount Paid</label>
                      </div>
                      <div class="form-floating mt-3 mb-2 ">
                        <input style="border-radius:12px" type="date" id="floatingInput"  class="form-control" name="paidAt" placeholder="Password">
                        <label for="floatingInput">Paid at</label>
                      </div>
            
                    
                    <button type="submit" class="btn btn-dark w-10 mt-1" style="padding: 17px 30px; border-radius:12px">Grant Access</button>
  
                    
  
  
  
  
                    <div class="">
                      
                    </div>
                    
                  </form>

                  
                  
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var emailInput = document.getElementById('email');
        var userDetails = document.getElementById('userDetails');

        emailInput.addEventListener('input', function () {
            var email = emailInput.value;

            
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
            console.log(data)
            if (isObjectBlank(data)){
                userDetails.innerHTML = 'User does not exist. <a href="{{ route('getUser') }}?email=' + encodeURIComponent(email) + '">Create User</a>';
            } else {
                console.log(data)
                userDetails.innerHTML = 'User details: ' + data.name + ', ' + data.email + ', ' + data.mobile;

            }
        }
    });
</script>
@endsection --}}
