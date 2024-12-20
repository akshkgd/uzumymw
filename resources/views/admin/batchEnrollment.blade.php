@extends('layouts.t-admin-sidebar')

@section('content')

<div class="container mx-auto mt5 hidde">
    <div class="p-6">
        <div class="flex justify-between items-center">
            <div class="">
                <h2 class="text-xl font-bold text-gray-800">{{$batch->name}}</h2>
                <p class="mt-1 text-gray-600">From {{Carbon\Carbon::parse($batch->startDate)->format('d M Y')}} to {{ Carbon\Carbon::parse($batch->endDate)->format('d M Y') }} 
                    <span class="text-green-600"> {{$batch->payable}} </span> 
                </p>   
            </div>
            @if($batch->type == 1)
            <button onclick="updateAllProgress({{ $batch->id }})" 
                    class="px-4 py-2 bg-violet-100 text-violet-600  rounded-lg hover:bg-violet-200 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                    <path d="M3 3v18h18"></path>
                    <path d="m19 9-5 5-4-4-3 3"></path>
                </svg>
                Update course Progress
            </button>
            @endif
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
            <div class="p-4 border rounded-lg">
                <p class="text-sm font- mb-2 text-neutral-700">Users</p>
                <p class="text-2xl">{{ $totalPaidUsers }} <span class="text-xs text-green-600">paid</span>  {{ $totalUnpaidUsers }} <span class="text-xs text-red-600">unpaid</span></p>
            </div>

            <div class="p-4 border rounded-lg">
                <p class="text-sm font- mb-2 text-neutral-700">Total Earnings</p>
                <p class="text-2xl">{{ $totalEarning }}</p>
            </div>

            <div class="p-4 border rounded-lg">
                <p class="text-sm font- mb-2 text-neutral-700">Live Course Earning</p>
                <p class="text-2xl">{{ $classEarning }} <span class="text-xs">{{ $classEarningPercentage }}%</span></p>
            </div>

            <div class="p-4 border rounded-lg">
                <p class="text-sm font- mb-2 text-neutral-700">Recordings Earnings</p>
                <p class="text-2xl">{{ $certificateFeeEarning }} <span class="text-xs">{{ $certificateFeePercentage }}%</span></p>
            </div>
        </div>
    </div>
</div>

<div class="w-full">
    <!-- Search Bar -->
    
</div>

{{-- Enrollment details --}}

<section class="container mx-auto mt-5">
    <div class=" p-6">
        <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search by name, email, or phone number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500">
    </div>
    @include('layouts.alert')
    <div class=" p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Students Enrolled</h3>
        <div class="overflow-x-auto border rounded-xl">
            <table class="min-w-full table-auto borde rounded-xl border-gray-300" id="enrollmentTable">
                <thead class="bg-gray-10 border-b">
                    <tr>
                        <th class="px-5 py-3  font-medium text-left">#</th>
                        <th class="px-5 py-3  font-medium text-left">Name</th>
                        <th class="px-5 py-3  font-medium text-left">Email</th>
                        <th class="px-5 py-3  font-medium text-left">Mobile</th>
                        <th class="px-5 py-3  font-medium text-left">Source</th>
                        <th class="px-5 py-3  font-medium text-left">Amount</th>
                        @if($batch->type == 1)
                        <th class="px-5 py-3  font-medium text-left">Time Spent</th>
                        <th class="px-5 py-3  font-medium text-left">Progress</th>
                        @endif
                        <th class="px-5 py-3  font-medium text-left">Date</th>
                        <th class="px-5 py-3  font-medium text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($paidEnrollments as $enrollment)
                    <tr class="text-sm">
                        <td class="px-4 py-4">{{ ++$i }}</td>
                        <td class="px-4 py-4">
                            <a href="{{action('AdminController@studentDetails', $enrollment->students->id)}}" class="text-violet-600">{{ $enrollment->students->name }}</a>
                        </td>
                        <td class="px-4 py-4">{{ $enrollment->students->email }}</td>
                        <td class="px-4 py-4">{{ $enrollment->students->mobile }}</td>
                        <td class="px-4 py-4">{{ $enrollment->students->field1 ?: 'organic' }}</td>
                        <td class="px-4 py-4">{{ number_format($enrollment->amountPaid / 100, 2) }}</td>
                        @if($batch->type == 1)
                        <td class="px-4 py-4">
                            @if($enrollment->time_spent)
                                @if($enrollment->time_spent >= 60)
                                    {{ floor($enrollment->time_spent / 60) }}h 
                                    @if($enrollment->time_spent % 60 > 0)
                                        {{ $enrollment->time_spent % 60 }}m
                                    @endif
                                @else
                                    {{ $enrollment->time_spent }}m
                                @endif
                            @else
                                -
                            @endif
                        </td>
                        <td class="px-4 py-4">
                            @if($enrollment->progress)
                                <div class="flex items-center gap-2">
                                    <div class="w-16 bg-gray-200 rounded-full h-1.5">
                                        <div class="bg-violet-600 h-1.5 rounded-full" style="width: {{ $enrollment->progress }}%"></div>
                                    </div>
                                    <span>{{ round($enrollment->progress) }}%</span>
                                </div>
                            @else
                                -
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
                                    <span class='tooltip rounded shadow-lg p-1 px-2 bg-black text-white -mt-8'>Track Progress</span>
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

    {{-- Students with Pending Payment --}}
    
    <div class="bg-white p-6 mt-5">
        <h4 class="text-lg font-bold text-gray-800 mb-4">Students with Pending Payment</h4>
        <div class="overflow-x-auto border rounded-xl">
            <table class="min-w-full table-auto borde border-gray-300" id="enrollmentTable2">
                <thead class="bg-gray-10 border-b">
                    <tr>
                        <th class="px-5 py-3 font-medium text-left text-gray-600">#</th>
                        <th class="px-5 py-3 font-medium text-left text-gray-600">Name</th>
                        <th class="px-5 py-3 font-medium text-left text-gray-600">Email</th>
                        <th class="px-5 py-3 font-medium text-left text-gray-600">Mobile</th>
                        <th class="px-5 py-3 font-medium text-left text-gray-600">Source</th>
                        <th class="px-5 py-3 font-medium text-left text-gray-600">Enrolled On</th>
                        <th class="px-5 py-3 font-medium text-left text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @php $unpaidIndex = 1; @endphp
                    @foreach ($unpaidEnrollments as $enrollment)
                    <tr class="text-sm">
                        <td class="px-5 py-4">{{ $unpaidIndex++ }}</td>
                        <td class="px-5 py-4 flex items-center">
                            <a href="{{action('AdminController@studentDetails', $enrollment->students->id)}}" class="text-violet-600">
                                {{ $enrollment->students->name }}
                            </a>
                        </td>
                        <td class="px-5 py-4">{{ $enrollment->students->email }}</td>
                        <td class="px-5 py-4">{{ $enrollment->students->mobile }}</td>
                        <td class="px-5 py-4">{{ $enrollment->students->field1 ?: 'organic' }}</td>
                        <td class="px-5 py-4">{{ $enrollment->created_at->format('D, d M Y') }}</td>
                        <td class="px-5 py-4">
                            <div class="flex gap-4">
                                <div class='has-tooltip'>
                                    <span class='tooltip rounded shadow-lg p-1 px-2 bg-black text-white -mt-8'>Payment Received</span>
                                    <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id))}}"
                                        class="text-neutral-700 hover:text-violet-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
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
    
</section>
@endsection

<script>
function searchTable() {
    var input = document.getElementById("searchInput");
    var filter = input.value.toLowerCase();
    var tables = document.querySelectorAll("#enrollmentTable, #enrollmentTable2");

    tables.forEach(function(table) {
        var rows = table.getElementsByTagName("tr");
        
        // Skip header row (index 0)
        for (var i = 1; i < rows.length; i++) {
            var row = rows[i];
            var cells = row.getElementsByTagName("td");
            
            if (cells.length > 0) {
                var nameCell = cells[1].textContent || cells[1].innerText;
                var emailCell = cells[2].textContent || cells[2].innerText;
                var phoneCell = cells[3].textContent || cells[3].innerText;
                
                if (nameCell.toLowerCase().includes(filter) || 
                    emailCell.toLowerCase().includes(filter) || 
                    phoneCell.toLowerCase().includes(filter)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        }
    });
}

function updateAllProgress(batchId) {
    // Get CSRF token
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
    
    if (!csrfToken) {
        alert('CSRF token not found. Please refresh the page.');
        return;
    }

    if (confirm('Are you sure you want to update progress for all users? This will run in the background.')) {
        fetch(`/admin/batch/update-all-progress/${batchId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message);
                // Optionally reload the page after a delay
                setTimeout(() => location.reload(), 1000);
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error updating progress');
        });
    }
}
</script>
