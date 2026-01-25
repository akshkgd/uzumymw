@extends('layouts.t-admin-sidebar')
@section('content')
    @include('layouts.alert')
    <section class="mt-4 mb-12  sm:max-w-9xl w-full mx-auto ">
        <div class="container mx-auto px-4">
            @include('layouts.alert')
            <div class="flex justify-center">
                <div class="w-full">
                    <div class="fle justify-between items-center mb-4">
                        <h1 class="text-xl font-bold">Upcoming Sessions</h1>
                        <h1>Total sessions: {{$batches->count()}}</h1>
                    </div>

                    <!-- Search Bar -->
                    <div class="my-4">
                        <input type="text" id="searchInput" onkeyup="searchTable()"
                            placeholder="Search by batch id or batch name"
                            class="w-80 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:border-neutral-500 focus:ring-neutral-200">
                    </div>

                    <div class="bg-white border rounded-lg">
                        <div class="overflow-x-auto ">
                            <table id="enrollmentTable" class="min-w-full divide-y divide-neutral-200">
                                <thead class="">
                                    <tr class="text-neutral-800">
                                        <th class="px-5 py-3  font-medium text-left ">Batch Id</th>
                                        <th class="px-5 py-3  font-medium text-left ">Batch Name</th>
                                        <th class="px-5 py-3  font-medium text-left ">Next Class Topic</th>
                                        <th class="px-5 py-3  font-medium text-left">Dummy Count</th>
                                        <th class="px-5 py-3  font-medium text-left">Next Class</th>

                                        <th class="px-5 py-3  font-medium text-left">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($batches as $batch)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                B-{{ $batch->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                <a href="{{ action('AdminController@editBatch', $batch->id) }}"
                                                    class="text-violet-700 hover:text-violet-800 mr-2">{{ $batch->name }}</a>
                                                @if($batch->status == 0)
                                                    <span class="bg-red-100 text-red-800 text-xs font-normal px-2.5 py-0.5 rounded-full">Private</span>
                                                @elseif($batch->status == 1)
                                                    <span class="bg-green-100 text-green-800 text-xs font-normal px-2.5 py-0.5 rounded-full">Live</span>
                                                @elseif($batch->status == 2)
                                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-normal px-2.5 py-0.5 rounded-full">Ongoing</span>
                                                @elseif($batch->status == 3)
                                                    <span class="bg-gray-100 text-gray-800 text-xs font-normal px-2.5 py-0.5 rounded-full">Completed</span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                <a href="https://live.codekaro.in/s/{{ \Vinkla\Hashids\Facades\Hashids::encode($batch->id) }}" target="_blank" class="text-violet-700 hover:text-violet-800 hover:underline">
                                                    {{ $batch->topic }}
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $batch->field2 }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ \Carbon\Carbon::parse($batch->nextClass)->format('D jS M Y g:iA') }}
                                            </td>


                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                <div class="flex gap-4 ">
                                                    <div class='has-tooltip'>
                                                        <span
                                                            class='tooltip rounded shadow-lg p-1 px-2 bg-black text-white -mt-8'>Schedule</span>
                                                        <a href="{{ action('AdminController@addLiveClass', $batch->id) }}"
                                                            class="text-neutral-700 hover:text-violet-800"><svg
                                                                xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                                                fill="currentColor" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707m2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708m5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708m2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class='has-tooltip'>
                                                        <span class='tooltip rounded shadow-lg p-1 px-2 bg-black text-white -mt-8'>Copy Link</span>
                                                        <button onclick="copyToClipboard('https://live.codekaro.in/s/{{ \Vinkla\Hashids\Facades\Hashids::encode($batch->id) }}', this)" class="text-neutral-700 hover:text-violet-800 focus:outline-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                        </button>
                                                    </div>
                                                    <div class='has-tooltip'>
                                                        <span class='tooltip rounded shadow-lg p-1 px-2 bg-black text-white -mt-8'>Stats</span>
                                                        <a href="https://live.codekaro.in/a/{{ \Vinkla\Hashids\Facades\Hashids::encode($batch->id) }}" target="_blank" class="text-neutral-700 hover:text-violet-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up-icon lucide-trending-up w-4 h-4"><path d="M16 7h6v6"/><path d="m22 7-8.5 8.5-5-5L2 17"/></svg>
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
    </section>


    <script>
        function searchTable() {
            const input = document.getElementById("searchInput");
            const filter = input.value.toLowerCase();
            const table = document.getElementById("enrollmentTable");
            const tr = table.getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) {
                let display = "none";
                const td = tr[i].getElementsByTagName("td");

                // Check if row matches search text
                let matchesSearch = false;
                // Search in Batch ID (0) and Name (1)
                for (let j = 0; j <= 1; j++) {
                    if (td[j]) {
                        const txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toLowerCase().indexOf(filter) > -1) {
                            matchesSearch = true;
                            break;
                        }
                    }
                }

                // Show row only if it matches search
                tr[i].style.display = matchesSearch ? "" : "none";
            }
        }

        function copyToClipboard(text, btnElement) {
            navigator.clipboard.writeText(text).then(function() {
                // Update tooltip text to "Copied!"
                if (btnElement) {
                    const tooltip = btnElement.parentElement.querySelector('.tooltip');
                    if (tooltip) {
                        const originalText = tooltip.innerText;
                        tooltip.innerText = 'Copied!';
                        setTimeout(() => {
                            tooltip.innerText = originalText;
                        }, 2000);
                    }
                }
                console.log('Copied to clipboard: ' + text);
            }, function(err) {
                console.error('Async: Could not copy text: ', err);
            });
        }
    </script>

@endsection