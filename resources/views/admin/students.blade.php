@extends('layouts.t-admin-sidebar')
@section('content')
{{-- @include('layouts.t-admin-nav') --}}

{{-- Enrollment details --}}

<section class="mt-2  sm:max-w-9xl w-full mx-auto">
    <div class="container mx-auto px-4">
        @include('layouts.alert')
        <div class="flex justify-center">
            <div class="w-full">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-xl font-bold">Learners</h1>
                        <p class="text-sm text-neutral-700">Manage your learners</p>
                    </div>
                    
                    
                    <!-- Existing filter dropdown -->
                    <form action="{{ route('admin.students') }}" method="GET">
                        <select name="filter" onchange="this.form.submit()">
                            <option value="">Last 30 days</option>
                            <option value="today" {{ request('filter') == 'today' ? 'selected' : '' }}>Today</option>
                            <option value="yesterday" {{ request('filter') == 'yesterday' ? 'selected' : '' }}>Yesterday</option>
                            <option value="last_7_days" {{ request('filter') == 'last_7_days' ? 'selected' : '' }}>Last 7 Days</option>
                            <option value="this_month" {{ request('filter') == 'this_month' ? 'selected' : '' }}>This Month</option>
                            <option value="last_month" {{ request('filter') == 'last_month' ? 'selected' : '' }}>Last Month</option>
                            <option value="last_30_days" {{ request('filter') == 'last_30_days' ? 'selected' : '' }}>Last 30 Days</option>
                            <option value="last_3_months" {{ request('filter') == 'last_3_months' ? 'selected' : '' }}>Last 3 Months</option>
                            <option value="last_6_months" {{ request('filter') == 'last_6_months' ? 'selected' : '' }}>Last 6 Months</option>
                        </select>
                    </form>
                </div>
                
        
        
        
        
        <!-- Search Bar -->
        <div class="my-4">
            <input type="tex" id="searchInput" onkeyup="searchTable()" placeholder="Search by name, email, or phone number" class="w-full px-4 py-2 border border-neutral-200 rounded-lg focus:outline-none focus:ring-0">
        </div>
        <div>
            <!-- Column Toggle Dropdown -->
            <div class="relative inline-block text-left mr-4 mb-5">
                <button type="button" onclick="toggleColumnMenu()" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                    Columns
                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="columnMenu" class="hidden border origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white z-50">
                    <div class="py-1 px-3">
                        <label class="flex items-center">
                            <input type="checkbox" checked data-column="name" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                            <span class="ml-2">Name</span>
                        </label>
                    </div>
                    <div class="py-1 px-3">
                        <label class="flex items-center">
                            <input type="checkbox" checked data-column="email" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                            <span class="ml-2">Email</span>
                        </label>
                    </div>
                    <div class="py-1 px-3">
                        <label class="flex items-center">
                            <input type="checkbox" checked data-column="mobile" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                            <span class="ml-2">Mobile</span>
                        </label>
                    </div>
                    <div class="py-1 px-3">
                        <label class="flex items-center">
                            <input type="checkbox" checked data-column="last_activity" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                            <span class="ml-2">Last Activity</span>
                        </label>
                    </div>
                    <div class="py-1 px-3">
                        <label class="flex items-center">
                            <input type="checkbox" data-column="source" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                            <span class="ml-2">Source</span>
                        </label>
                    </div>
                    <div class="py-1 px-3">
                        <label class="flex items-center">
                            <input type="checkbox" data-column="medium" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                            <span class="ml-2">Medium</span>
                        </label>
                    </div>
                    <div class="py-1 px-3">
                        <label class="flex items-center">
                            <input type="checkbox" data-column="campaign" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                            <span class="ml-2">Campaign</span>
                        </label>
                    </div>
                    <div class="py-1 px-3">
                        <label class="flex items-center">
                            <input type="checkbox" data-column="joined" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                            <span class="ml-2">Joined On</span>
                        </label>
                    </div>
                    <div class="py-1 px-3">
                        <label class="flex items-center">
                            <input type="checkbox" checked data-column="status" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                            <span class="ml-2">Status</span>
                        </label>
                    </div>
                </div>
            </div>

        </div>

                <div class="bg-white border rounded-lg">
                    <div class="overflow-x-auto ">
                        <table id="enrollmentTable" class="min-w-full divide-y divide-neutral-200">
                            <thead>
                                <tr class="text-black">
                                    <th class="px-5 py-3 font-medium text-left">#</th>
                                    <th class="px-5 py-3 font-medium text-left column-name">Name</th>
                                    <th class="px-5 py-3 font-medium text-left column-email">Email</th>
                                    <th class="px-5 py-3 font-medium text-left column-mobile">Mobile</th>
                                    <th class="px-5 py-3 font-medium text-left column-last_activity">Last Activity</th>
                                    <th class="px-5 py-3 font-medium text-left column-source hidden">Source</th>
                                    <th class="px-5 py-3 font-medium text-left column-medium hidden">Medium</th>
                                    <th class="px-5 py-3 font-medium text-left column-campaign hidden">Campaign</th>
                                    <th class="px-5 py-3 font-medium text-left column-joined hidden">Joined On</th>
                                    <th class="px-5 py-3 font-medium text-left column-status">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">{{ ++$i }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm column-name">
                                        <a href="{{action('AdminController@studentDetails', $user->id )}}" class="text-violet-700 hover:text-violet-800">
                                            <img src="{{$user->avatar}}" alt=""> {{ $user->name }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm column-email">{{ $user->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm column-mobile">
                                        <a href="tel:+{{$user->mobile}}" class="text-violet-700">{{ $user->mobile }}</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm column-last_activity">
                                        {{ $user->last_activity ? $user->last_activity->format('D, d M Y h:i A') : 'Never' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm column-source hidden">{{ $user->field1 ?? '-' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm column-medium hidden">{{ $user->field2 ?? '-' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm column-campaign hidden">{{ $user->field3 ?? '-' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm column-joined hidden">{{ $user->created_at->format('D, d M Y') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm column-status">
                                        @if ($user->hasPaid)
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
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toLowerCase();
    table = document.getElementById("enrollmentTable");
    tr = table.getElementsByTagName("tr");

    for (i = 1; i < tr.length; i++) {
        tr[i].style.display = "none";
        td = tr[i].getElementsByTagName("td");
        
        // Search through Name, Email, Mobile, Source, Medium, and Campaign columns
        for (var j = 1; j <= 7; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                }
            }
        }
    }
}

function toggleColumnMenu() {
    const menu = document.getElementById('columnMenu');
    menu.classList.toggle('hidden');
}

function toggleColumn(checkbox) {
    const columnName = checkbox.dataset.column;
    const cells = document.querySelectorAll(`.column-${columnName}`);
    cells.forEach(cell => {
        cell.classList.toggle('hidden');
    });

    // Save column preferences to localStorage
    saveColumnPreferences();
}

function saveColumnPreferences() {
    const preferences = {};
    document.querySelectorAll('[data-column]').forEach(checkbox => {
        preferences[checkbox.dataset.column] = checkbox.checked;
    });
    localStorage.setItem('columnPreferences', JSON.stringify(preferences));
}

function loadColumnPreferences() {
    const preferences = JSON.parse(localStorage.getItem('columnPreferences'));
    if (preferences) {
        Object.entries(preferences).forEach(([column, isVisible]) => {
            const checkbox = document.querySelector(`[data-column="${column}"]`);
            if (checkbox) {
                checkbox.checked = isVisible;
                const cells = document.querySelectorAll(`.column-${column}`);
                cells.forEach(cell => {
                    cell.classList.toggle('hidden', !isVisible);
                });
            }
        });
    }
}

// Close column menu when clicking outside
document.addEventListener('click', function(event) {
    const menu = document.getElementById('columnMenu');
    const button = event.target.closest('button');
    if (!menu.contains(event.target) && !button?.contains(event.target)) {
        menu.classList.add('hidden');
    }
});

// Load saved preferences when page loads
document.addEventListener('DOMContentLoaded', loadColumnPreferences);
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