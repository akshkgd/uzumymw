@extends('layouts.t-admin-sidebar')
@section('content')
@include('layouts.alert')
<section class="mt-4 mb-12  sm:max-w-9xl w-full mx-auto ">
    <div class="container mx-auto px-4">
        @include('layouts.alert')
        <div class="flex justify-center">
            <div class="w-full">
                <div class="fle justify-between items-center mb-4">
                    <h1 class="text-xl font-bold">Batches</h1>
                    <h1>Total batches: {{$batches->count()}}</h1>
                    <div class="flex gap-2 mt-4">
                        
                        <button onclick="filterBatches('1')" 
                            class="filter-btn px-4 py-2 rounded text-sm font-medium transition-colors focus:outline-none bg-gray-5 text-neutral-800 hover:bg-neutral-200"
                            data-status="1">
                            Active
                        </button>
                        <button onclick="filterBatches('2')" 
                            class="filter-btn px-4 py-2 rounded text-sm font-medium transition-colors focus:outline-none bg-gray-5 text-neutral-800 hover:bg-neutral-200"
                            data-status="2">
                            In Progress
                        </button>
                        <button onclick="filterBatches('3')" 
                            class="filter-btn px-4 py-2 rounded text-sm font-medium transition-colors focus:outline-none bg-gray-5 text-neutral-800 hover:bg-neutral-200"
                            data-status="3">
                            Completed
                        </button>
                        <button onclick="filterBatches('0')" 
                            class="filter-btn px-4 py-2 rounded text-sm font-medium transition-colors focus:outline-none bg-gray-5 text-neutral-800 hover:bg-neutral-200"
                            data-status="0">
                            Private
                        </button>
                        <button onclick="filterBatches('all')" 
                            class="filter-btn px-4 py-2 rounded text-sm font-medium transition-colors focus:outline-none bg-gray-5 text-neutral-800 hover:bg-neutral-200"
                            data-status="all">
                            All
                        </button>
                    </div>
                </div>
        <div class="">
            <h1></h1>
            
        </div>
        
        
        
        <!-- Search Bar -->
        <div class="my-4">
            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search by batch id or batch name" class="w-80 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:border-neutral-500 focus:ring-neutral-200">
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
                                        
                                        <span>{{ \Vinkla\Hashids\Facades\Hashids::encode($batch->id) }}</span>
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
function filterBatches(status) {
    // Update button styles - reset all buttons to default state
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('bg-neutral-200');
    });

    // Add active style to clicked button
    const activeBtn = document.querySelector(`[data-status="${status}"]`);
    if (activeBtn) {
        activeBtn.classList.add('bg-neutral-200');
    }

    // Filter table rows
    const table = document.getElementById("enrollmentTable");
    const tr = table.getElementsByTagName("tr");

    for (let i = 1; i < tr.length; i++) {
        const statusCell = tr[i].querySelector('td:nth-child(4)');
        if (statusCell) {
            const rowStatus = getStatusFromCell(statusCell);
            if (status === 'all' || rowStatus === status) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function getStatusFromCell(cell) {
    // Extract status based on the span class and text content
    const span = cell.querySelector('span');
    if (!span) return 'all';

    const text = span.textContent.trim().toLowerCase();
    if (text === 'active') return '1';
    if (text === 'in progress') return '2';
    if (text === 'completed') return '3';
    if (text === 'private') return '0';
    return 'all';
}

function searchTable() {
    const input = document.getElementById("searchInput");
    const filter = input.value.toLowerCase();
    const table = document.getElementById("enrollmentTable");
    const tr = table.getElementsByTagName("tr");
    
    // Get current active filter
    const activeFilter = document.querySelector('.filter-btn.bg-neutral-200');
    const currentStatus = activeFilter ? activeFilter.getAttribute('data-status') : '1'; // Default to active

    for (let i = 1; i < tr.length; i++) {
        let display = "none";
        const td = tr[i].getElementsByTagName("td");
        
        // Check if row matches current status filter
        const statusCell = td[3]; // Status is in 4th column
        const rowStatus = getStatusFromCell(statusCell);
        const matchesFilter = currentStatus === 'all' || rowStatus === currentStatus;

        // Check if row matches search text
        let matchesSearch = false;
        for (let j = 0; j <= 3; j++) {
            if (td[j]) {
                const txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    matchesSearch = true;
                    break;
                }
            }
        }

        // Show row only if it matches both filter and search
        tr[i].style.display = (matchesFilter && matchesSearch) ? "" : "none";
    }
}

// Make sure the DOM is fully loaded before running the initialization
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        filterBatches('1'); // Show active batches by default
    });
} else {
    // If DOMContentLoaded has already fired, run immediately
    filterBatches('1');
}
</script>
 
@endsection