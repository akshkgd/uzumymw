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
                                <input type="checkbox" class="column-toggle" data-column="8"> 
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
                                <input type="checkbox" class="column-toggle" data-column="{{ $batch->type == 1 ? '11' : '10' }}"> 
                                <span class="ml-2">Date</span>
                            </label>
                        </div>
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
                        <td class="px-4 py-4" id="enrollment-amount-cell-{{ $enrollment->id }}">
                            <div class="flex items-center justify-between">
                                <span>₹{{ number_format($enrollment->amountPaid / 100, 2) }}</span>
                                <button onclick="event.preventDefault(); openPaymentSidebar({{ $enrollment->id }})" class="text-neutral-400 hover:text-violet-600 focus:outline-none" title="View transactions & Add Payment">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="16" x2="12" y2="12"></line>
                                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                    </svg>
                                </button>
                            </div>
                            <div id="enrollment-pending-badge-{{ $enrollment->id }}">
                                @if($enrollment->partiallyPaid())
                                    <div class="mt-1">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-semibold bg-yellow-100 text-yellow-800">
                                            Pending: ₹{{ number_format($enrollment->payable_in_rupees - ($enrollment->amountPaid / 100)) }}
                                        </span>
                                    </div>
                                @endif
                            </div>
                        </td>
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
                                        onclick="event.preventDefault(); openPaymentSidebar({{ $enrollment->id }});"
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
                                    <a href="{{ url('/admin-progress/' . $enrollment->id) }}" class="text-neutral-700 hover:text-violet-800">
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
                                                        onclick="event.preventDefault(); openPaymentSidebar({{ $enrollment->id }});"
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
    const table = document.getElementById('enrollmentTable');
    const isType1 = {{ $batch->type == 1 ? 'true' : 'false' }};

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

<!-- Payment Details Sidebar -->
<div id="paymentSidebar" class="fixed top-0 right-0 h-full w-[450px] bg-white border-l border-neutral-200 z-[100] transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col shadow-none">
    <!-- Sidebar Header -->
    <div class="flex items-center justify-between p-4 border-b border-neutral-200">
        <div>
            <h3 class="font-bold text-gray-900 text-lg" id="sidebarStudentName">Student Payments</h3>
            <p class="text-xs text-neutral-500" id="sidebarCourseInfo">Manage installments and renewals</p>
        </div>
        <button onclick="closePaymentSidebar()" class="text-gray-400 hover:text-gray-600 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Sidebar Content (Scrollable) -->
    <div class="flex-1 overflow-y-auto p-4">
        <!-- Details View (Shown by default) -->
        <div id="sidebarDetailsView" class="space-y-6">
            <!-- Totals Summary Card -->
            <div class="bg-neutral-50 p-4 rounded-lg border border-neutral-100">
                <div class="grid grid-cols-2 gap-4 text-sm">
                    <div>
                        <span class="text-neutral-500 block text-xs">Total Payable</span>
                        <span class="text-gray-900 text-sm block mt-1" id="summaryPayable">₹0.00</span>
                    </div>
                    <div>
                        <span class="text-neutral-500 block text-xs">Total Paid</span>
                        <span class="text-gray-900 text-sm block mt-1" id="summaryPaid">₹0.00</span>
                    </div>
                </div>
                <div class="mt-3 pt-3 border-t border-neutral-200 text-sm flex justify-between items-center">
                    <span class="text-neutral-700">Remaining Balance</span>
                    <span class="text-red-600 text-sm" id="summaryPending">₹0.00</span>
                </div>
            </div>

            <!-- Previous Transactions -->
            <div>
                <h4 class="font-semibold text-gray-900 text-sm mb-3">Transaction History</h4>
                <div class="space-y-3" id="sidebarTransactionsList">
                    <!-- Populated via JS -->
                </div>
            </div>

            <!-- Add Transaction Button (Black, py-3) -->
            <button type="button" onclick="showSidebarForm()" class="w-full bg-black hover:bg-neutral-900 text-white font-medium py-3 rounded text-sm transition-colors mt-2">
                Add Transaction
            </button>
        </div>

        <!-- Add New Payment Form (Hidden by default) -->
        <div id="sidebarFormView" class="hidden space-y-4">
            <div class="flex items-center justify-between pb-2 border-b border-neutral-100">
                <h4 class="font-semibold text-gray-900 text-sm">Record New Payment</h4>
                <button type="button" onclick="hideSidebarForm()" class="text-xs text-neutral-500 hover:text-neutral-800 flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Back to details
                </button>
            </div>

            <form id="sidebarPaymentForm" onsubmit="submitSidebarPayment(event)">
                @csrf
                <input type="hidden" name="enrollmentId" id="sidebarEnrollmentId">

                <div class="mb-3">
                    <label for="side_amount" class="block text-xs font-semibold text-neutral-600 mb-1">Amount (in Rupees)</label>
                    <input type="number" id="side_amount" name="amount" required step="0.01" min="1"
                           class="border border-neutral-200 text-sm block w-full p-2 rounded focus:outline-none focus:border-violet-500">
                </div>

                <div class="mb-3">
                    <label for="side_paidAt" class="block text-xs font-semibold text-neutral-600 mb-1">Payment Date</label>
                    <input type="date" id="side_paidAt" name="paidAt" required
                           class="border border-neutral-200 text-sm block w-full p-2 rounded focus:outline-none">
                </div>

                <div class="mb-3">
                    <label for="side_paymentMethod" class="block text-xs font-semibold text-neutral-600 mb-1">Payment Method</label>
                    <select name="paymentMethod" id="side_paymentMethod" class="border border-neutral-200 text-sm block w-full p-2 rounded focus:outline-none">
                        <option value="cash">Cash</option>
                        <option value="upi">UPI / QR Code</option>
                        <option value="bank_transfer">Bank Transfer</option>
                        <option value="card">Card</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="side_transactionId" class="block text-xs font-semibold text-neutral-600 mb-1">Transaction Ref / ID (Optional)</label>
                    <input type="text" id="side_transactionId" name="transactionId" placeholder="UPI Ref / Cash Receipt #"
                           class="border border-neutral-200 text-sm block w-full p-2 rounded focus:outline-none">
                </div>

                <div class="mb-3">
                    <label for="side_invoiceId" class="block text-xs font-semibold text-neutral-600 mb-1">Invoice Number (Optional)</label>
                    <input type="text" id="side_invoiceId" name="invoiceId" placeholder="e.g. INV-2026-X"
                           class="border border-neutral-200 text-sm block w-full p-2 rounded focus:outline-none">
                </div>

                <div class="mb-3">
                    <label for="side_purpose" class="block text-xs font-semibold text-neutral-600 mb-1">Payment Purpose</label>
                    <select name="purpose" id="side_purpose" class="border border-neutral-200 text-sm block w-full p-2 rounded focus:outline-none">
                        <option value="enrollment">Enrollment / Installment</option>
                        <option value="renewal">Renewal</option>
                    </select>
                </div>

                <div class="mb-3 flex items-center">
                    <input type="checkbox" id="side_is_gst_applicable" name="is_gst_applicable" value="1" checked
                           class="w-4 h-4 text-violet-600 bg-gray-100 border-neutral-200 rounded">
                    <label for="side_is_gst_applicable" class="ml-2 text-xs font-medium text-neutral-600">Include in GST Reports</label>
                </div>

                <div class="mb-3">
                    <label for="side_remarks" class="block text-xs font-semibold text-neutral-600 mb-1">Remarks / Comments</label>
                    <textarea id="side_remarks" name="remarks" rows="2" placeholder="Internal comments..."
                               class="border border-neutral-200 text-sm block w-full p-2 rounded focus:outline-none"></textarea>
                </div>

                <div class="flex gap-2 mt-4">
                    <button type="button" onclick="hideSidebarForm()" class="w-1/3 border border-neutral-300 hover:bg-neutral-50 text-neutral-700 font-medium py-2 rounded text-sm transition-colors">
                        Cancel
                    </button>
                    <button type="submit" id="sidebarSubmitBtn"
                            class="flex-1 bg-violet-600 hover:bg-violet-700 text-white font-medium py-2 rounded text-sm transition-colors">
                        Log Transaction
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function showSidebarForm() {
    document.getElementById('sidebarDetailsView').classList.add('hidden');
    document.getElementById('sidebarFormView').classList.remove('hidden');
}

function hideSidebarForm() {
    document.getElementById('sidebarDetailsView').classList.remove('hidden');
    document.getElementById('sidebarFormView').classList.add('hidden');
}

function openPaymentSidebar(enrollmentId) {
    // Reset form
    document.getElementById('sidebarPaymentForm').reset();
    document.getElementById('sidebarEnrollmentId').value = enrollmentId;
    document.getElementById('side_paidAt').value = new Date().toISOString().split('T')[0];
    document.getElementById('side_is_gst_applicable').checked = true;

    // Show details view by default when opening
    hideSidebarForm();

    // Fetch details
    fetch(`/admin/enrollment/${enrollmentId}/payments-json`)
        .then(response => response.json())
        .then(data => {
            const e = data.enrollment;
            const payments = data.payments;

            // Update summary values
            document.getElementById('sidebarStudentName').innerText = e.student_name;
            document.getElementById('summaryPayable').innerText = '₹' + parseFloat(e.amount_payable).toFixed(2);
            document.getElementById('summaryPaid').innerText = '₹' + parseFloat(e.amount_paid).toFixed(2);
            document.getElementById('summaryPending').innerText = '₹' + parseFloat(e.pending_balance).toFixed(2);

            // Load transaction timeline list
            const listContainer = document.getElementById('sidebarTransactionsList');
            listContainer.innerHTML = '';

            if (payments.length === 0) {
                listContainer.innerHTML = '<p class="text-xs text-neutral-400">No payment transactions recorded.</p>';
            } else {
                payments.forEach(p => {
                    const item = document.createElement('div');
                    item.className = 'border-b border-neutral-100 pb-2 text-xs space-y-1';
                    item.innerHTML = `
                        <div class="flex justify-between items-center">
                            <span class="text-gray-900 text-sm">₹${parseFloat(p.amount / 100).toFixed(2)}</span>
                            <span class="px-2 py-0.5 rounded text-[10px] ${p.purpose === 'Renewal' ? 'bg-blue-50 text-blue-700' : 'bg-green-50 text-green-700'}">${p.purpose}</span>
                        </div>
                        <div class="flex justify-between text-neutral-400 text-[10px]">
                            <span>Date: ${p.paid_at}</span>
                            <span>Method: ${p.payment_method}</span>
                        </div>
                        ${p.remarks ? `<div class="text-neutral-400 italic text-[10px]">Remarks: ${p.remarks}</div>` : ''}
                    `;
                    listContainer.appendChild(item);
                });
            }

            // Open sidebar
            document.getElementById('paymentSidebar').classList.remove('translate-x-full');
        });
}

function closePaymentSidebar() {
    document.getElementById('paymentSidebar').classList.add('translate-x-full');
}

function submitSidebarPayment(event) {
    event.preventDefault();
    const form = document.getElementById('sidebarPaymentForm');
    const btn = document.getElementById('sidebarSubmitBtn');
    btn.disabled = true;
    btn.innerText = 'Saving...';

    const formData = new FormData(form);

    fetch("{{ route('addManualPayment') }}", {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(err => { throw err; });
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            // Reload the sidebar details
            const enrollmentId = document.getElementById('sidebarEnrollmentId').value;
            openPaymentSidebar(enrollmentId);

            // Dynamically update the main table Amount column
            const amountCell = document.getElementById(`enrollment-amount-cell-${enrollmentId}`);
            const badgeCell = document.getElementById(`enrollment-pending-badge-${enrollmentId}`);
            if (amountCell) {
                // Update amount paid
                const formattedAmount = '₹' + parseFloat(data.enrollment.amount_paid).toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                const buttonHTML = `
                    <button onclick="event.preventDefault(); openPaymentSidebar(${enrollmentId})" class="text-neutral-400 hover:text-violet-600 focus:outline-none" title="View transactions & Add Payment">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                    </button>
                `;
                amountCell.querySelector('div').innerHTML = `<span>${formattedAmount}</span>${buttonHTML}`;
                
                // Update pending badge
                if (data.enrollment.partially_paid) {
                    const formattedPending = parseFloat(data.enrollment.pending_balance).toLocaleString('en-IN', { maximumFractionDigits: 0 });
                    badgeCell.innerHTML = `
                        <div class="mt-1">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-semibold bg-yellow-100 text-yellow-800">
                                Pending: ₹${formattedPending}
                            </span>
                        </div>
                    `;
                } else {
                    badgeCell.innerHTML = '';
                }
            }
        }
    })
    .catch(err => {
        alert(err.message || 'Error occurred while saving payment.');
    })
    .finally(() => {
        btn.disabled = false;
        btn.innerText = 'Log Transaction';
    });
}
</script>

@endsection
