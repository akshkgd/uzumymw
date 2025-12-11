@extends('layouts.t-admin-sidebar')
@section('content')
@include('layouts.t-alert')

{{-- Enrollment details --}}

<section class="mt-6  sm:max-w-8xl w-full mx-auto">
    <div class="container mx-auto px-4">
       
        <div class="flex justify-center">
            <div class="w-full">
                
        
        <div class="flex my-3 gap-3">
            
            <div class="">
                <div class="px-0">
                            <h2 class="text-lg font-semibold mb- px-4">How to CSS Enrollments</h2>
                            <h1 class="text-neutral-70 px-4 -mt-1">All paid students list</h1>
                        </div>
                <div class="relative inline-block">
                    <button id="columnToggleBtn" class="bg-white hidden border rounded-lg px-4 py-2 inline-flex items-center gap-2 text-sm">
                        <span>Toggle Columns</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div id="columnToggleDropdown" class="hidden absolute z-10 mt-2 w-56 bg-white border rounded-lg shadow-lg">
                        <div class="p-2 space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="0" checked> 
                                <span class="ml-2">#</span>
                            </label>
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
                                <input type="checkbox" class="column-toggle" data-column="6"> 
                                <span class="ml-2">Source</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="7"> 
                                <span class="ml-2">Medium</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="8"> 
                                <span class="ml-2">College</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="9"> 
                                <span class="ml-2">Course</span>
                            </label>
                            
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column="10"> 
                                <span class="ml-2">Progress</span>
                            </label>
                            
                            <label class="flex items-center">
                                <input type="checkbox" class="column-toggle" data-column=""> 
                                <span class="ml-2">Date</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
        
        <!-- Add this before the search bar -->
        

        <!-- Search Bar -->
        <div class="my-4">
            {{-- <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search by name, email, or phone number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500"> --}}
        </div>

                <div class="bg-white border rounded-lg">
                    <div class="">
                       
                        <div class="m-4">
                            <input type="tex" id="searchInput" onkeyup="searchTable()" placeholder="Search user" class="w-full px-4  inline-block py-2 border border-neutral-200 rounded-lg focus:outline-none focus:ring-0">
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
                                    <th class="px-5 py-3  font-medium text-left">Source</th>
                                    <th class="px-5 py-3  font-medium text-left">Medium</th>
                                    <th class="px-5 py-3  font-medium text-left">Campaign</th>
                                    <th class="px-5 py-3  font-medium text-left">Profession</th>
                                    <th class="px-5 py-3  font-medium text-left">Date</th>
                                    
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($enrollments as $enrollment)
                    <tr class="text-sm">
                        <td class="px-4 py-4">{{ ++$i }}</td>
                        <td class="px-4 py-4">
                            <a href="{{action('AdminController@studentDetails', $enrollment->students->id)}}" class="text-violet-600">{{ $enrollment->students->name }}</a>
                        </td>
                        <td class="px-4 py-4">{{ $enrollment->students->email }}</td>
                        <td class="px-4 py-4">{{ $enrollment->students->mobile }}</td>
                        <td class="px-4 py-4">{{ number_format($enrollment->amountPaid / 100, 2) }}</td>
                        
                        <td class="px-4 py-4">{{ $enrollment->students->field1 ?: 'organic' }}</td>
                        <td class="px-4 py-4">{{ $enrollment->students->field2 ?: '-' }}</td>
                        <td class="px-4 py-4">{{ $enrollment->students->field3 ?: '-' }}</td>
                        <td class="px-4 py-4">{{ $enrollment->students->college ?: '-' }}</td>
                        <td class="px-4 py-4">{{ $enrollment->students->course ?: '-' }}</td>
                        <td class="px-4 py-4">{{ Carbon\Carbon::parse($enrollment->paidAt)->format('D, d M Y') }}</td>
                        
                    </tr>
                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Unpaid Enrollments Section --}}
                <div class="px-6 py-4">
                <div class="flex w-full justify-center items-center gap-5">
                    {{ $enrollments->appends(request()->query())->links('pagination::tailwind') }}
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
    const table = document.getElementById('enrollmentTable');
    

    // Toggle dropdown
    toggleBtn.addEventListener('click', function(e) {
        e.preventDefault();
        dropdown.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!toggleBtn.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });

    function toggleColumn(columnIndex, isVisible) {
        if (!table) return;
        
        const rows = table.getElementsByTagName('tr');
        const lastColumnIndex = rows[0].cells.length - 1; // Index of Actions column
        
        // Debug log
        console.log('Toggling column:', columnIndex, 'Visible:', isVisible);
        
        for (let row of rows) {
            const cells = row.cells;
            // Skip if this is the Actions column
            if (columnIndex === lastColumnIndex) return;
            
            if (cells[columnIndex]) {
                cells[columnIndex].style.display = isVisible ? '' : 'none';
            }
        }
    }

    // Initialize columns on page load
    function initializeColumns() {
        const dateColumnIndex = isType1 ? 11 : 10;
        
        checkboxes.forEach(checkbox => {
            const columnIndex = parseInt(checkbox.getAttribute('data-column'));
            if (!checkbox.checked) {
                toggleColumn(columnIndex, false);
            }
        });
    }

    // Handle column visibility changes
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const columnIndex = parseInt(this.getAttribute('data-column'));
            toggleColumn(columnIndex, this.checked);
        });
    });

    // Initialize on page load
    initializeColumns();
});
</script>

@endsection
