@extends('layouts.t-admin-sidebar')
@section('content')

<section class="mt-2 sm:max-w-9xl w-full mx-auto">
    <div class="container mx-auto px-4">
        @include('layouts.alert')
        <div class="flex justify-center">
            <div class="w-full">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-xl font-bold">Course Progress</h1>
                        <p class="text-sm text-neutral-700">Track learner engagement and progress</p>
                    </div>
                </div>

                <!-- Search and Column Toggle -->
                <div class="flex items-center justify-between my-4">
                    <div class="relative inline-block text-left mr-4">
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
                                    <input type="checkbox" data-column="email" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                                    <span class="ml-2">Email</span>
                                </label>
                            </div>
                            <div class="py-1 px-3">
                                <label class="flex items-center">
                                    <input type="checkbox" data-column="course" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                                    <span class="ml-2">Course</span>
                                </label>
                            </div>
                            <div class="py-1 px-3">
                                <label class="flex items-center">
                                    <input type="checkbox" checked data-column="video" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                                    <span class="ml-2">Video Watching</span>
                                </label>
                            </div>
                            <div class="py-1 px-3">
                                <label class="flex items-center">
                                    <input type="checkbox" checked data-column="timeSpent" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                                    <span class="ml-2">Time Spent</span>
                                </label>
                            </div>
                            <div class="py-1 px-3">
                                <label class="flex items-center">
                                    <input type="checkbox" checked data-column="visited" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                                    <span class="ml-2">Times Visited</span>
                                </label>
                            </div>
                            <div class="py-1 px-3">
                                <label class="flex items-center">
                                    <input type="checkbox" data-column="firstAccess" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                                    <span class="ml-2">First Access</span>
                                </label>
                            </div>
                            <div class="py-1 px-3">
                                <label class="flex items-center">
                                    <input type="checkbox" checked data-column="lastAccess" onchange="toggleColumn(this)" class="form-checkbox h-4 w-4 text-violet-600">
                                    <span class="ml-2">Last Access</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="text" id="searchInput" onkeyup="searchTable()" 
                        placeholder="Search by name, email, or course" 
                        class="w-full px-4 py-2 border border-neutral-200 rounded-lg focus:outline-none focus:ring-0">
                </div>

                <div class="bg-white border rounded-lg">
                    <div class="overflow-x-auto">
                        <table id="progressTable" class="min-w-full divide-y divide-neutral-200">
                            <thead>
                                <tr class="text-black">
                                    <th class="px-5 py-3 font-medium text-left column-name">Name</th>
                                    <th class="px-5 py-3 font-medium text-left column-email hidden">Email</th>
                                    <th class="px-5 py-3 font-medium text-left column-course hidden">Course</th>
                                    <th class="px-5 py-3 font-medium text-left column-video">Video Watching</th>
                                    <th class="px-5 py-3 font-medium text-left column-timeSpent">Time Spent</th>
                                    <th class="px-5 py-3 font-medium text-left column-visited">Times Visited</th>
                                    <th class="px-5 py-3 font-medium text-left column-firstAccess hidden">First Access</th>
                                    <th class="px-5 py-3 font-medium text-left column-lastAccess">Last Access</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($courseProgress as $progress)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm column-name">
                                            <a href="{{action('AdminController@studentDetails', $progress->students->id )}}" 
                                               class="text-violet-700 hover:text-violet-800">
                                                {{ $progress->students->name }}
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm column-email hidden">{{ $progress->students->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm column-course hidden">{{ $progress->batch->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm column-video">{{ $progress->content->title }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm column-timeSpent">{{ $progress->timeSpent }}m</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm column-visited">{{ $progress->visited }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm column-firstAccess hidden">
                                            {{ \Carbon\Carbon::parse($progress->firstAccess)->format('D, d M Y h:i A') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm column-lastAccess">
                                            {{ \Carbon\Carbon::parse($progress->lastAccess)->format('D, d M Y h:i A') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                    <div class="px-6 py-4">
                        <div class="flex w-full justify-center items-center gap-5">
                            {{ $courseProgress->links('pagination::tailwind') }}
                        </div>
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
    table = document.getElementById("progressTable");
    tr = table.getElementsByTagName("tr");

    for (i = 1; i < tr.length; i++) {
        tr[i].style.display = "none";
        td = tr[i].getElementsByTagName("td");
        
        for (var j = 0; j < td.length; j++) {
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

<style>
nav[aria-label="Pagination Navigation"] {
    display: flex;
    align-items: center;
    gap: 16px;
}

nav[aria-label="Pagination Navigation"] .relative {
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 0 0 transparent !important;
}

nav[aria-label="Pagination Navigation"] span,
nav[aria-label="Pagination Navigation"] a {
    border: none !important;
}

.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between {
    align-items: center !important;
    justify-content: space-between !important;
    gap: 10px !important;
}

span[aria-current="page"] .relative {
    color: blueviolet;
    border-color: blueviolet;
    background-color: #f9f5ff;
    cursor: pointer;
}

span[aria-current="page"] .relative:hover {
    background-color: #eae2ff;
}
</style>

@endsection
