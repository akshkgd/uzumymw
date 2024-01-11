@extends('layouts.ck-admin')
@section('content')
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"> --}}
<section class="pb-0">
    <div class="container pt-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-5 ">
                @include('layouts.alert')
                <h4 class="text-dark fw-600">Add Access of Batch</h4>
                <p>Add batchId 67 for full stack and 68 for frontend!</p>
                <form action="{{ route('addAccess') }}" method="POST" class="form-inlin ">
                    @csrf
                    {{-- <div class="row pl-0 pr-0"> --}}
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
                    
                    {{-- </div> --}}
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
@endsection
