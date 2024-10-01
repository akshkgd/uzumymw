@extends('layouts.t-admin-sidebar')
@section('content')
<section class="mt-2 mb-12  sm:max-w-9xl w-full mx-auto">
    <div class="container mx-auto px-4">
        @include('layouts.alert')
        <div class="flex justify-center">
            <div class="w-full">
                <h1 class="text-xl font-bold">Batches</h1>
        <div class="">
            <h1></h1>
            <h1>Total batches: {{$batches->count()}}</h1>
        </div>
        
        
        
        <!-- Search Bar -->
        <div class="my-4">
            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search by batch id or batch name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500">
        </div>

                <div class="bg-white border rounded-lg">
                    <div class="overflow-x-auto ">
                        <table id="enrollmentTable" class="min-w-full divide-y divide-neutral-200">
                            <thead class="">
                                <tr class="text-neutral-800">
                                    <th class="px-5 py-3  font-medium text-left ">Batch Id</th>
                                    <th class="px-5 py-3  font-medium text-left ">Name</th>
                                    <th class="px-5 py-3  font-medium text-left">Schedule</th>
                                    <th class="px-5 py-3  font-medium text-left">Status</th>
                                    <th class="px-5 py-3  font-medium text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($batches as $batch)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">B-{{ $batch->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm"><a href="{{ action('AdminController@editBatch', $batch->id) }}" class="text-violet-700 hover:text-violet-800">{{ $batch->name }}</a></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ \Carbon\Carbon::parse($batch->startDate)->format('d M y') }} - {{ \Carbon\Carbon::parse($batch->endDate)->format('d M y') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-violet-700">
                                        @if($batch->status == 0)
                                            <span class="bg-red-100 text-red-800 text-xs font-normal px-2.5 py-0.5 rounded-full">Private</span>
                                        @elseif($batch->status == 1)
                                            <span class="bg-green-100 text-green-800 text-xs font-normal px-2.5 py-0.5 rounded-full">Active</span>
                                        @elseif($batch->status == 2)
                                            <span class="bg-yellow-100 text-yellow-800 text-xs font-normal px-2.5 py-0.5 rounded-full">In Progress</span>
                                        @elseif($batch->status == 3)
                                            <span class="bg-red-100 text-red-800 text-xs font-normal px-2.5 py-0.5 rounded-full">Completed</span>
                                        @endif
                                    </td>
                                    
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex gap-4 ">
                                            <div class='has-tooltip'>
                                                <span class='tooltip rounded shadow-lg p-1 px-2 bg-black text-white -mt-8'>Schedule</span>
                                                <a href="{{ action('AdminController@addLiveClass', $batch->id) }}"
                                                    class="text-neutral-700 hover:text-violet-800"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16"><path d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707m2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708m5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708m2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0"/></svg>
                                                 </a>
                                              </div>
                                              <div class='has-tooltip'>
                                                <span class='tooltip rounded shadow-lg p-1 px-2 bg-black text-white -mt-8'>Enrollments</span>
                                                <a href="{{ action('AdminController@batchEnrollment', $batch->id) }}"
                                                    class="btn ck-c-btn text-neutral-700 hover:text-violet-800"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></a>
                                              </div>
                                              <div class='has-tooltip'>
                                                <span class='tooltip rounded shadow-lg p-1 px-2 bg-black text-white -mt-8'>Content</span>
                                                <a target="_blank" href="{{ action('TeacherController@addContent', $batch->id) }}"
                                                    class="text-neutral-700 hover:text-violet-800"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="16"></line><line x1="8" x2="16" y1="12" y2="12"></line></svg></a>
                                              </div>
                                            {{-- <a href="{{ action('AdminController@addLiveClass', $batch->id) }}"
                                                class="text-neutral-700 hover:text-violet-800"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16"><path d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707m2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708m5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708m2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0"/></svg>
                                             </a> --}}
                                             
                                            {{-- <a href="{{ action('AdminController@batchEnrollment', $batch->id) }}"
                                                class="btn ck-c-btn text-neutral-700 hover:text-violet-800"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></a> --}}
                                            {{-- <a target="_blank" href="{{ action('TeacherController@addContent', $batch->id) }}"
                                                class="text-neutral-700 hover:text-violet-800"><svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="16"></line><line x1="8" x2="16" y1="12" y2="12"></line></svg></a> --}}

                                                
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
            
            // Search through Batch Id (first column), Batch Name (second column), and Status (fourth column)
            for (var j = 0; j <= 3; j++) { 
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