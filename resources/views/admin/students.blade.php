@extends('layouts.t-admin-sidebar')
@section('content')
{{-- @include('layouts.t-admin-nav') --}}

{{-- Enrollment details --}}

<section class="mt-2  sm:max-w-6xl w-full mx-auto">
    <div class="container mx-auto px-4">
        @include('layouts.alert')
        <div class="flex justify-center">
            <div class="w-full">
                <h1 class="text-xl font-bold">Learners</h1>
                <p class="text-sm text-neutral-700">Manage your learners</p>
        
        
        
        
        <!-- Search Bar -->
        <div class="my-4">
            <input type="tex" id="searchInput" onkeyup="searchTable()" placeholder="Search by name, email, or phone number" class="w-full px-4 py-2 border border-neutral-200 rounded-lg focus:outline-none focus:ring-0">
        </div>

                <div class="bg-white border rounded-lg">
                    <div class="overflow-x-auto ">
                        <table id="enrollmentTable" class="min-w-full divide-y divide-neutral-200">
                            <thead class="">
                                <tr class="text-black">
                                    <th class="px-5 py-3  font-medium text-left ">#</th>
                                    <th class="px-5 py-3  font-medium text-left ">Name</th>
                                    <th class="px-5 py-3  font-medium text-left">Email</th>
                                    <th class="px-5 py-3  font-medium text-left">Mobile</th>
                                    <th class="px-5 py-3  font-medium text-left">Date</th>
                                    <th class="px-5 py-3  font-medium text-left">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ ++$i }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm"><a href="{{action('AdminController@studentDetails', $user->id )}}" class="text-violet-700 hover:text-violet-800"> <img src="{{$user->avatar}}" alt=""> {{ $user->name }}</a></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-violet-700"><a href="tel:+{{$user->mobile}}">{{ $user->mobile }}</a></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->created_at }}  </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        @if ($user->hasPaid == 1)
                                        <span class="bg-green-100 text-green-800 text-xs font-normal px-2.5 py-0.5 rounded-full">Paid</span>
                                            
                                        @else
                                        <span class="bg-red-100 text-red-800 text-xs font-normal px-2.5 py-0.5 rounded-full">Free Lead</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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