@extends('layouts.t-admin-sidebar')
@section('content')
<section class="max-w-xl mx-auto border p-3 my-3">
    <div class="relative bg-white  dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
            <div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{$batch->name}}</h3>
                <p class="text-xs text-neutral-600">Update the next live class schedule</p>
            </div>
            
        </div>
        <!-- Modal body -->
        <div class="px-4 pb-4  md:px-5 md:pb-5">
            <form class="space-y-4" action="{{ route('updateLiveClass') }}" method="POST" id="accessForm">
                @csrf
                <div class="mb-4">
                    <label for="meetingLink" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Next Class Topic</label>
                    <input type="text" name="topic" value="{{$batch->topic}}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Topic">
                    <input type="hidden" name="batchId" value="{{$batch->id}}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Topic">
                    
                </div>
                <div class="mb-4">
                    <label for="meetingLink" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Next Class schedule</label>
                    <input type="datetime-local" name="nextClass" value="{{$batch->nextClass}}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Meeting Link">
                </div>
                <div class="mb-4">
                    <label for="groupLink2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meeting Link</label>
                    <input type="text" name="meetingLink" value="{{$batch->meetingLink}}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Zoom Link">
                </div>
                <!-- WhatsApp Checkbox -->
        <div class="mb-4 flex items-center">
            <input type="checkbox" name="sendWhatsApp" id="sendWhatsApp" class="h-4 w-4 text-indigo-600 focus:ring-0 border-gray-300 rounded">
            <label for="sendWhatsApp" class="ml-2 block text-sm font-medium text-gray-900 dark:text-white">Notify on WhatsApp</label>
        </div>

                <div class="flex justify-en">
                    <button type="submi" class="w-ful text-white bg-black hover:bg-neutral-800 focus:ring-0 focus:outline-none font-normal text-sm px-5 py-3 text-center">Schedule Class</button>
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
