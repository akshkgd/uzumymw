@extends('layouts.t-student')
@section('content')
@include('layouts.t-student-nav')

{{-- Enrollment details --}}

<section class="mt-32  sm:max-w-5xl w-full mx-auto">
    <div class="container mx-auto px-4">
        @include('layouts.alert')
        <div class="flex justify-center">
            <div class="w-full">
                <h1 class="text-xl font-bold">Batches Taught</h1>
        <div class="">
            <h1></h1>
            <h1>Total batches: {{$batches->count()}}</h1>
        </div>
        
        <div class="flex my-3 gap-3">
            <a href="{{url()->previous()}}" class=" bg-neutral-100 inline-block border  text-neutral-900 hover:border-neutral-300 hover:bg-white rounded-full py-2 px-4 ">Back to enrollments</a>

            {{-- <a href="{{ action('TeacherController@generateAllCertificate', $batch->id) }}" class="bg-violet-100 inline-block border border-violet-300 text-violet-700 rounded-full py-2 px-4">Generate All Certificates</a> --}}

        </div>
        
        <!-- Search Bar -->
        <div class="my-4">
            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search by name, email, or phone number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500">
        </div>

                <div class="bg-white border rounded-lg">
                    <div class="overflow-x-auto ">
                        <table id="enrollmentTable" class="min-w-full divide-y divide-neutral-200">
                            <thead class="">
                                <tr class="text-neutral-800">
                                    <th class="px-5 py-3  font-medium text-left ">#</th>
                                    <th class="px-5 py-3  font-medium text-left ">Name</th>
                                    <th class="px-5 py-3  font-medium text-left">Schedule</th>
                                    <th class="px-5 py-3  font-medium text-left">Status</th>
                                    <th class="px-5 py-3  font-medium text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($batches as $batch)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ ++$i }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm"><a href="{{ action('BatchController@classDetails', $batch->id) }}" class="text-violet-700 hover:text-violet-800">{{ $batch->name }}</a></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ \Carbon\Carbon::parse($batch->startDate)->format('d M y') }} - {{ \Carbon\Carbon::parse($batch->endDate)->format('d M y') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-violet-700">
                                        @if($batch->status == 0)
                                            <span class="bg-gray-100 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Private</span>
                                        @elseif($batch->status == 1)
                                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Active</span>
                                        @elseif($batch->status == 2)
                                            <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">In Progress</span>
                                        @elseif($batch->status == 3)
                                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Completed</span>
                                        @endif
                                    </td>
                                    
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex-gap-2">
                                            <a href="{{ action('TeacherController@enrollments', $batch->id) }}"
                                                class="btn ck-c-btn text-violet-700 hover:text-violet-800">Enrollments</a>
                                            <a href="{{ action('TeacherController@addContent', $batch->id) }}"
                                                class="text-violet-700 hover:text-violet-800">Add Content</a>
                                        </div>
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
