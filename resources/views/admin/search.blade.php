@extends('layouts.t-admin-sidebar')
@section('content')
<section class="mt-2 mb-12 sm:max-w-9xl w-full mx-auto">
    <div class="container mx-auto px-4">
        @include('layouts.alert')

        <!-- Heading -->
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-bold">Search results for <span class="text-neutral-600">{{$search}}</span></h1>
        </div>

        <!-- Search Bar -->
        <div class="my-4">
            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search by name, email, or mobile" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500">
        </div>

        <!-- Students Table -->
        <div class="bg-white border rounded-lg
        ">
            <div class="overflow-x-auto">
                <table id="studentsTable" class="min-w-full divide-y divide-neutral-200">
                    <thead class="">
                        <tr class="text-neutral-800">
                            <th class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mobile</th>
                            <th class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class=" divide-y divide-gray-200">
                        @foreach ($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ ++$i }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-violet-700 hover:text-violet-800">
                                <a href="{{ action('AdminController@studentDetails', $user->id) }}">{{ $user->name }}</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->mobile }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <a href="{{ action('AdminController@studentDetails', $user->id) }}" class="text-violet-700 hover:text-violet-800">View Details</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for filtering the table -->
<script>
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toLowerCase();
        table = document.getElementById("studentsTable");
        tr = table.getElementsByTagName("tr");

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
