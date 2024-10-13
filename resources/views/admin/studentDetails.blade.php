@extends('layouts.t-admin-sidebar')
@section('content')
{{-- @include('layouts.t-admin-nav') --}}

{{-- Enrollment details --}}
                @php
                $imageUrl = (filter_var($user->avatar, FILTER_VALIDATE_URL) && preg_match('/^http(s)?:\/\//', $user->avatar)) 
                ? $user->avatar
                : 'https://plus.unsplash.com/premium_vector-1722167430275-348e8d11d82e?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bWFufGVufDB8fDB8fHww';
                @endphp
<section class="mt-2  sm:max-w-9xl w-full mx-auto">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full">
                <h1 class="text-xl font-bold">{{$user->name}} Profile</h1>
                <p class="text-sm text-neutral-700">Manage profile</p>
                <div class="">
                <div class="border border-neutral-5 bg-green-5 rounded-lg p-5 my-8 w-">
                    <div class="my-4 flex items-center gap-4">
                        <img src="{{$imageUrl}}" class="h-16 w-16 rounded-full inline-block object-cover " alt="">
                        <div class="">
                            <h1>{{$user->name}}</h1>
                            <h1 class="">{{$user->email}}</h1>
                            <p class="text-sm">{{ $user->created_at->format('F j, Y g:i A') }}</p>

                        </div>
                    </div>
                    <div class="my-">
                        @if ($user->status == 1)
                            <a href="{{ action('AdminController@banStudent', $user->id) }}" class="bg-red-100 text-red-800 text-sm py-2 px-4 hover:bg-red-200">Ban Account</a>
                        @else
                            <a href="{{ action('AdminController@activateStudent', $user->id) }}" class="bg-green-100 text-green-900 text-sm py-2 px-4  hover:bg-green-200">Activate Account</a>
                        @endif
                    
                        @if ($user->role == 0)
                            <a href="{{ action('AdminController@makeTeacher', $user->id) }}" class="bg-violet-100 text-violet-800 py-2 px-4 rounde text-sm hover:bg-violet-200">Change role to teacher</a>
                        @else
                            <a href="{{ action('AdminController@downgradeTeacher', $user->id) }}" class="bg-orange-100 text-orange-700 py-2 px-4 rounde text-sm hover:bg-orange-200">Change role to student</a>
                        @endif
                    </div>
                    <div class="mt-5">


                    </div>
                </div>
            </div>
        
        
        
        



                <div class="bg-whit border rounded-lg">
                    <div class="flex justify-between items-center py-4">
                        <div class="px-0">
                            <h2 class="text-lg font-semibold mb- px-4">Courses</h2>
                            <h1 class="text-neutral-70 px-4 -mt-1">Courses enrolled {{$enrollments->count()}}</h1>
                        </div>
                        <div class="mr-4">
                            <input type="tex" id="searchInput" onkeyup="searchTable()" placeholder="Search course" class="w-full px-4 mr-4 inline-block py-2 border border-neutral-200 rounded-lg focus:outline-none focus:ring-0">
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto ">
                        <table id="enrollmentTable" class="min-w-full divide-y divide-neutral-200">
                            <thead class="">
                                <tr class="text-black">
                                    <th class="px-5 py-3  font-medium text-left ">#</th>
                                    <th class="px-5 py-3  font-medium text-left ">Course</th>
                                    <th class="px-5 py-3  font-medium text-left">Enrolled On</th>
                                    <th class="px-5 py-3  font-medium text-left">Amount</th>
                                    <th class="px-5 py-3  font-medium text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-whit divide-y divide-gray-200">
                                @foreach ($enrollments as $enrollment)
                                @if($enrollment->hasPaid == 1)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ ++$i }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $enrollment->batch->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ \Carbon\Carbon::parse($enrollment->paidAt)->format('d M Y h:i A') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $enrollment->amountPaid / 100 }} - {{$enrollment->paymentMethod}}</td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div class="flex gap-2">
                                            <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id))}}" class="text-neutral-600"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                              </svg></a>
                                              @if($enrollment->batch->type == 1)
                                              <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07"/>
                                              </svg></a>
                                              @endif
                                        </div>
                                        
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- sessions --}}
        <div class="bg-white border rounded-lg p- mt-8 mb-20">
            <div class="py-4">
                <h2 class="text-lg font-semibold mb- px-4">Session Details</h2>
                <h1 class="text-neutral-70 px-4 ">Last activity {{ $user->lastActivity->format('F j, Y g:i A') }}</h1>

            </div>
            
            <div class="overflow-x-auto">
                <table id="sessionTable" class="min-w-full divide-y divide-neutral-200">
                    <thead class="bg-gray-5">
                        <tr class="text-left text-neutral-800">
                            <th class="px-5 py-3 font-medium">IP Address</th>
                            <th class="px-5 py-3 font-medium">Browser</th>
                            <th class="px-5 py-3 font-medium">Device</th>
                            <th class="px-5 py-3 font-medium">Last Activity</th>
                        </tr>
                    </thead>
                    <tbody class="bg-whit divide-y divide-gray-200" id="sessionTableBody">
                        <!-- Session data will be injected here -->
                    </tbody>
                </table>
            </div>
        </div>
    
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetchStudentSessions();
        });
    
        function fetchStudentSessions() {
            // Fetch session data for the specific student
            fetch(`/api/students/{{ $user->id }}/sessions`)
                .then(response => response.json())
                .then(data => {
                    const sessions = data.devices;
                    const currentSessionId = data.current_session_id;
                    const tableBody = document.getElementById('sessionTableBody');
    
                    // Clear previous data
                    tableBody.innerHTML = '';
    
                    // Loop through the sessions and insert them into the table
                    sessions.forEach(session => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${session.ip_address}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">${session.browser}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">${session.device_name}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">${session.last_activity}</td>
                        `;
                        // Highlight the current session
                        if (session.id === currentSessionId) {
                            row.classList.add('bg-yellow-100');
                        }
                        tableBody.appendChild(row);
                    });
                })
                .catch(error => {
                    console.error('Error fetching session data:', error);
                });
        }
    </script>
            </div>
        </div>
    </div>
</section>

<script>
function searchTable() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toLowerCase();
    table = document.getElementById("enrollmentTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 1; i < tr.length; i++) { // start from 1 to skip the header row
        tr[i].style.display = "none"; // hide the row initially
        td = tr[i].getElementsByTagName("td");
        
        // Search through Name, Email, and Mobile columns
        for (var j = 1; j <= 3; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = ""; // show the row if match found
                    break; // stop searching once we find a match
                }
            }
        }
    }
}
</script>

@endsection



{{-- 

@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row ">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Product Details</h2>
            </div>
            <div class="pull-right pb-20 ">
                <a class="btn btn-primary" href="{{url('/product/create')}}"> Add New Product</a>
            </div>
        </div>
    </div>

   

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>College</th>
                <th>Course</th>
                <th>Last Activity</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($users as $user)
            <tr>
               <td>{{ ++$i }}</td>
               <td>  <a href="{{action('AdminController@studentDetails', $user->id )}}">{{$user->name}}</a>   </td>
               <td>{{$user->email}}</td>
               <td>
                   <a href="tel:{{$user->mobile}}" class='link'>{{$user->mobile}}</a>
               </td>
               <td>{{$user->college}}</td>
               <td>{{$user->course}}</td>
               <td>{{$user->lastActivity->format('D, d M Y h:i A')}}</td>   
               <td></td> 
            </tr> 
            @endforeach
        </table>
</div>
 
@endsection --}}


{{-- 
@extends('layouts.admin')

@section('content')
<!-- Content -->
<div class="content card p-0 pt-20">
    <div class="text-center">
        <img src="{{$user->avatar}}" class="img-fluid rounded-circle" alt="">
        <h2 class="m-0">{{$user->name}}</h1>
        <p class="m-0 p-0"> <span class="text-muted">Joined On</span> {{$user->created_at->format('d M Y')}}</p>
        <p class="text-muted p-0 mt-0 pb-5">Last Activity {{$user->lastActivity->format('D, d M Y h:i A')}}</p>
        <div class="pt-10">
            @if ($user->status == 1)
            <a href="{{action('AdminController@banStudent', $user->id)}}" class="btn btn-danger">Ban Account</a> 
            @else
            <a href="{{action('AdminController@activateStudent', $user->id)}}" class="btn btn-success">Activate Account</a>
            @endif
            @if($user->role == 0)
            <a href="{{action('AdminController@makeTeacher', $user->id)}}" class="btn btn-primary">Upgrade</a>
            @else
            <a href="{{action('AdminController@downgradeTeacher', $user->id)}}" class="btn btn-secondary">Downgrade</a>
            
            @endif
            
            
           
            
        </div>
       
    </div>
<div class="table-responsive">
    <table class="table table-responsive border-top mt-20 pl-0 pr-0">
        <tr>
            <th>Email</th>
            <th>Mobile</th>
            <th>Mobile</th>
            <th>Level</th>
            <th width="280px">Action</th>
        </tr>
        
        <tr>
           <td>{{$user->email}}</td>
           <td>  <a href="{{action('AdminController@studentDetails', $user->id )}}">{{$user->name}}</a>   </td>
           <td>{{$user->mobile}}</td>
           <td>{{$user->college}}</td>
           <td>Begginer</td>    
        </tr> 
       
    </table>
</div>
    
</div>

<div class="content">
    <h3>Enrollments</h2>
        <div class="card p-0">
            <table class="table pl-0 pr-0">
                <tr>
                    
                    <th>Course</th>
                    <th>Enrolled On</th>
                    <th>Fees</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($enrollments as $enrollment)
                @if ($enrollment->hasPaid ==1)
                <tr class="table-success">
                @else
                   <tr>
                @endif
                
                   <td>{{$enrollment->batch->name}}</td>
                   <td>{{ \Carbon\Carbon::parse($enrollment->paidAt)->format('D d M y') }}</td>
                   <td>{{$enrollment->amountPaid > 0 ? $enrollment->amountPaid/100 : 0}}</td>
                   <td>{{$user->college}}</td>
                   <td>Begginer</td>    
                </tr>  
                @endforeach
                
               
            </table>
        </div>
</div>
@endsection --}}