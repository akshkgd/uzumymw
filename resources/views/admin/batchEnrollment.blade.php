@extends('layouts.t-admin-sidebar')
@section('content')
@include('layouts.t-alert')

{{-- Enrollment details --}}

<section class="mt-6  sm:max-w-8xl w-full mx-auto">
    <div class="container mx-auto px-4">
       
        <div class="flex justify-center">
            <div class="w-full">
                <h1 class="text-xl font-bold">{{$batch->name}} Enrollments - B{{$batch->id}}</h1>
        <div class="">
            <h1>Schedule: {{ \Carbon\Carbon::parse($batch->startDate)->format('d M Y') }} - {{ \Carbon\Carbon::parse($batch->endDate)->format('d M Y') }}</h1>
            <h1>Total users: {{$paidEnrollments->count()}} - ₹{{ number_format($totalEarning, 0, '', ',') }}</h1>
        </div>
        
        <div class="flex my-3 gap-3">
            
            <div class="">
                <div class="relative inline-block">
                    <button id="columnToggleBtn" class="bg-white border rounded-lg px-4 py-2 inline-flex items-center gap-2 text-sm">
                        <span>Toggle Columns</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div id="columnToggleDropdown" class="hidden absolute z-10 mt-2 w-56 bg-white border rounded-lg shadow-lg">
                        <div class="p-2 space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="1" checked> 
                                <span class="ml-2">Name</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="2" checked> 
                                <span class="ml-2">Email</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="3" checked> 
                                <span class="ml-2">Mobile</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="4" checked> 
                                <span class="ml-2">Amount</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="5"> 
                                <span class="ml-2">Certificate</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="6"> 
                                <span class="ml-2">Source</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="7"> 
                                <span class="ml-2">Medium</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="8" checked> 
                                <span class="ml-2">College</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="9"> 
                                <span class="ml-2">Course</span>
                            </label>
                            @if($batch->type == 1)
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="10"> 
                                <span class="ml-2">Progress</span>
                            </label>
                            @endif
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="11"> 
                                <span class="ml-2">Date</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative inline-block">
                <button id="filterBtn" class="bg-white border rounded-lg px-4 py-2 inline-flex items-center gap-2 text-sm">
                    <span>Filter Status</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div id="filterDropdown" class="hidden absolute z-10 mt-2 w-48 bg-white border rounded-lg shadow-lg">
                    <div class="p-2 space-y-2">
                        <label class="flex items-center">
                            <input type="radio" name="status-filter" value="all" checked class="status-filter"> 
                            <span class="ml-2">All</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="status-filter" value="student" class="status-filter"> 
                            <span class="ml-2">Student</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="status-filter" value="professional" class="status-filter"> 
                            <span class="ml-2">Working Professional</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="status-filter" value="other" class="status-filter"> 
                            <span class="ml-2">Other</span>
                        </label>
                    </div>
                </div>
            </div>
            <a href="{{ action('TeacherController@generateAllCertificate', $batch->id) }}" class="bg-white border rounded-lg px-4 py-2 inline-flex items-center gap-2 text-sm">Generate All Certificates</a>

        </div>
        
        <!-- Add this before the search bar -->
        

        <!-- Search Bar -->
        <div class="my-4">
            {{-- <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search by name, email, or phone number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500"> --}}
        </div>

                <div class="bg-white border rounded-lg">
                    <div class="flex justify-between items-center py-4">
                        <div class="px-0">
                            <h2 class="text-lg font-semibold mb- px-4">Courses</h2>
                            <h1 class="text-neutral-70 px-4 -mt-1">Courses enrolled 1</h1>
                        </div>
                        <div class="mr-4">
                            <input type="tex" id="searchInput" onkeyup="searchTable()" placeholder="Search user" class="w-full px-4 mr-4 inline-block py-2 border border-neutral-200 rounded-lg focus:outline-none focus:ring-0">
                        </div>
                    </div>
                    <div class="overflow-x-auto ">
                        <table id="enrollmentTable" class="min-w-full divide-y divide-neutral-200">
                            <thead class="">
                                <tr class="text-neutral-800">
                                    <th class="px-5 py-3  font-medium text-left">#</th>
                                    <th class="px-5 py-3  font-medium text-left">Name</th>
                                    <th class="px-5 py-3  font-medium text-left">Email</th>
                                    <th class="px-5 py-3  font-medium text-left">Mobile</th>
                                    <th class="px-5 py-3  font-medium text-left">Amount</th>
                                    <th class="px-5 py-3  font-medium text-left">Certificate</th>
                                    <th class="px-5 py-3  font-medium text-left">Source</th>
                                    <th class="px-5 py-3  font-medium text-left">Medium</th>
                                    <th class="px-5 py-3  font-medium text-left">College</th>
                                    <th class="px-5 py-3  font-medium text-left">Course</th>
                                    @if($batch->type == 1)
                                    <th class="px-5 py-3  font-medium text-left">Progress</th>
                                    @endif
                        <th class="px-5 py-3  font-medium text-left">Date</th>
                        <th class="px-5 py-3  font-medium text-left">Actions</th>
                                    
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($paidEnrollments as $enrollment)
                    <tr class="text-sm">
                        <td class="px-4 py-4">{{ ++$i }}</td>
                        <td class="px-4 py-4">
                            <a href="{{action('AdminController@studentDetails', $enrollment->students->id)}}" class="text-violet-600">{{ $enrollment->students->name }}</a>
                        </td>
                        <td class="px-4 py-4">{{ $enrollment->students->email }}</td>
                        <td class="px-4 py-4">{{ $enrollment->students->mobile }}</td>
                        <td class="px-4 py-4">{{ number_format($enrollment->amountPaid / 100, 2) }}</td>
                        <td class="px-4 py-4">
                            @if($enrollment->certificateId)
                                <div class="flex items-center gap-2">
                                    <span>{{ $enrollment->certificateId }}</span>
                                    <button onclick="copyCertificateUrl('{{ url('/course-certificate/' . $enrollment->certificateId) }}')" 
                                            class="text-neutral-500 hover:text-violet-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                        </svg>
                                    </button>
                                </div>
                            @else
                                <a href="{{ action('TeacherController@generateCertificate', $enrollment->id) }}" 
                                   class="text-violet-600 hover:text-violet-800">
                                    Generate Certificate
                                </a>
                            @endif
                        </td>
                        <td class="px-4 py-4">{{ $enrollment->students->field1 ?: 'organic' }}</td>
                        <td class="px-4 py-4">{{ $enrollment->students->field2 ?: '-' }}</td>
                        <td class="px-4 py-4">{{ $enrollment->students->college ?: '-' }}</td>
                        <td class="px-4 py-4">{{ $enrollment->students->course ?: '-' }}</td>

                        @if($batch->type == 1)
                        
                        <td class="px-4 py-4 flex gap-2 items-center">
                            @if($enrollment->progress)
                                <div class="flex items-center gap-2">
                                    
                                    <span class="text-red-60">{{ round($enrollment->progress) }}%</span>
                                </div>
                            @else
                                0%
                            @endif
                            <span> in </span>
                            @if($enrollment->time_spent)
                                @if($enrollment->time_spent >= 60)
                                    {{ floor($enrollment->time_spent / 60) }}H 
                                    @if($enrollment->time_spent % 60 > 0)
                                        {{ $enrollment->time_spent % 60 }}M
                                    @endif
                                @else
                                    {{ $enrollment->time_spent }}m
                                @endif
                            @else
                                0M
                            @endif
                        </td>
                        @endif
                        <td class="px-4 py-4">{{ Carbon\Carbon::parse($enrollment->paidAt)->format('D, d M Y') }}</td>
                        <td class="px-4 py-4">
                            <div class="flex gap-4">
                                <div class='has-tooltip'>
                                    <span class='tooltip rounded shadow-lg p-1 px-2 bg-black text-white -mt-8'>Edit Payment</span>
                                    <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id))}}" 
                                        class="text-neutral-700 hover:text-violet-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                            <path d="M20 7h-9"></path>
                                            <path d="M14 17H5"></path>
                                            <circle cx="17" cy="17" r="3"></circle>
                                            <circle cx="7" cy="7" r="3"></circle>
                                        </svg>
                                    </a>
                                </div>
                                @if($batch->type == 1)
                                <div class='has-tooltip'>
                                    <span class='tooltip rounded shadow-lg p-1 px-2 bg-black text-white -mt-8'>Progress</span>
                                    <a href="#" class="text-neutral-700 hover:text-violet-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                            <path d="M3 3v18h18"></path>
                                            <path d="m19 9-5 5-4-4-3 3"></path>
                                        </svg>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Unpaid Enrollments Section --}}
                <div class="mt-8">
                    <h2 class="text-xl font-bold ">Unpaid Enrollments</h2>
                    <p class="mb-4">Total unpaid users: {{$unpaidEnrollments->count()}}</p>
                    <div class="bg-white border rounded-lg">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-neutral-200">
                                <thead>
                                    <tr class="text-neutral-800">
                                        <th class="px-5 py-3 font-medium text-left">#</th>
                                        <th class="px-5 py-3 font-medium text-left">Name</th>
                                        <th class="px-5 py-3 font-medium text-left">Email</th>
                                        <th class="px-5 py-3 font-medium text-left">Mobile</th>
                                        <th class="px-5 py-3 font-medium text-left">Source</th>
                                        <th class="px-5 py-3 font-medium text-left">Date</th>
                                        <th class="px-5 py-3 font-medium text-left">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($unpaidEnrollments as $enrollment)
                                    <tr class="text-sm">
                                        <td class="px-4 py-4">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-4">
                                            <a href="{{action('AdminController@studentDetails', $enrollment->students->id)}}" class="text-violet-600">
                                                {{ $enrollment->students->name }}
                                            </a>
                                        </td>
                                        <td class="px-4 py-4">{{ $enrollment->students->email }}</td>
                                        <td class="px-4 py-4">{{ $enrollment->students->mobile }}</td>
                                        <td class="px-4 py-4">{{ $enrollment->students->field1 ?: 'organic' }}</td>
                                        <td class="px-4 py-4">{{ Carbon\Carbon::parse($enrollment->created_at)->format('D, d M Y') }}</td>
                                        <td class="px-4 py-4">
                                            <div class="flex gap-4">
                                                <div class='has-tooltip'>
                                                    <span class='tooltip rounded shadow-lg p-1 px-2 bg-black text-white -mt-8'>Mark as Paid</span>
                                                    <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id))}}" 
                                                        class="text-neutral-700 hover:text-violet-800">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                                            <path d="M20 7h-9"></path>
                                                            <path d="M14 17H5"></path>
                                                            <circle cx="17" cy="17" r="3"></circle>
                                                            <circle cx="7" cy="7" r="3"></circle>
                                                        </svg>
                                                    </a>
                                                </div>
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
    </div>
</section>

<div id="notification" class="fixed top-2 z-[100] right-4 bg-black text-white px-4 py-2 rounded-lg transform transition-transform duration-300 translate-y-[-100px]">
    URL copied to clipboard
</div>

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

function copyCertificateUrl(url) {
    navigator.clipboard.writeText(url).then(function() {
        // Show notification
        const notification = document.getElementById('notification');
        notification.style.transform = 'translateY(0)';
        
        // Hide notification after 3 seconds
        setTimeout(() => {
            notification.style.transform = 'translateY(-100px)';
        }, 3000);
    }).catch(function(err) {
        console.error('Failed to copy URL: ', err);
    });
}

// Column toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('columnToggleBtn');
    const dropdown = document.getElementById('columnToggleDropdown');
    const checkboxes = document.querySelectorAll('.column-toggle');

    // Toggle dropdown
    toggleBtn.addEventListener('click', function() {
        dropdown.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!toggleBtn.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });

    // Handle column visibility
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            toggleColumn(this.getAttribute('data-column'), this.checked);
        });

        // Initial column visibility
        const columnIndex = checkbox.getAttribute('data-column');
        toggleColumn(columnIndex, checkbox.checked);
    });

    function toggleColumn(columnIndex, isVisible) {
        const table = document.getElementById('enrollmentTable');
        const rows = table.getElementsByTagName('tr');

        for (let row of rows) {
            const cell = row.cells[columnIndex];
            if (cell) {
                cell.style.display = isVisible ? '' : 'none';
            }
        }
    }
});

// Filter dropdown toggle
const filterBtn = document.getElementById('filterBtn');
const filterDropdown = document.getElementById('filterDropdown');
const statusFilters = document.getElementsByClassName('status-filter');

filterBtn.addEventListener('click', function() {
    filterDropdown.classList.toggle('hidden');
});

// Close filter dropdown when clicking outside
document.addEventListener('click', function(event) {
    if (!filterBtn.contains(event.target) && !filterDropdown.contains(event.target)) {
        filterDropdown.classList.add('hidden');
    }
});

// Handle status filtering
Array.from(statusFilters).forEach(filter => {
    filter.addEventListener('change', function() {
        filterTableByStatus(this.value);
    });
});

function filterTableByStatus(status) {
    const table = document.getElementById('enrollmentTable');
    const rows = table.getElementsByTagName('tr');
    
    for (let i = 1; i < rows.length; i++) { // Start from 1 to skip header
        const collegeCell = rows[i].cells[8]; // College column index
        if (collegeCell) {
            const collegeValue = collegeCell.textContent.toLowerCase().trim();
            
            if (status === 'all') {
                rows[i].style.display = '';
            } else if (status === 'student') {
                rows[i].style.display = collegeValue !== '-' && !collegeValue.includes('working') ? '' : 'none';
            } else if (status === 'professional') {
                rows[i].style.display = collegeValue.includes('working') ? '' : 'none';
            } else if (status === 'other') {
                rows[i].style.display = collegeValue === '-' ? '' : 'none';
            }
        }
    }
}
</script>

@endsection
