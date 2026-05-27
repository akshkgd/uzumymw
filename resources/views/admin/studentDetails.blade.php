@extends('layouts.t-admin-sidebar')
@section('content')
@include('layouts.t-alert')

<!-- Add Alpine.js initialization -->
<div x-data="{ 
    showEditModal: false,
    name: '{{$user->name}}',
    email: '{{$user->email}}',
    mobile: '{{$user->mobile}}',
    originalEmail: '{{$user->email}}',
    emailExists: false,
    errors: {},
    async checkEmail() {
        if (this.email !== this.originalEmail) {
            const response = await fetch('/api/check-email?email=' + this.email);
            const data = await response.json();
            this.emailExists = data.exists;
        } else {
            this.emailExists = false;
        }
    },
    validateMobile() {
        return /^[0-9]{10}$/.test(this.mobile);
    },
    async submitForm() {
        try {
            this.errors = {};
            
            if (!this.validateMobile()) {
                this.errors.mobile = ['Phone number must be exactly 10 digits'];
                return;
            }

            const response = await fetch('/admin/update-user-profile/{{$user->id}}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    name: this.name,
                    email: this.email,
                    mobile: this.mobile
                })
            });
            
            const data = await response.json();
            
            if (response.ok && data.success) {
                window.location.reload();
            } else {
                this.errors = data.errors || {};
            }
        } catch (error) {
            console.error('Error:', error);
        }
    }
}">

<!-- Add Modal HTML -->
<div 
    x-show="showEditModal"
    class="fixed inset-0 z-[60] overflow-y-auto"
    style="display: none;"
>
    <!-- Modal Backdrop -->
    <div class="fixed inset-0 bg-black bg-opacity-50 z-[60]"></div>

    <!-- Modal Content -->
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="relative bg-white rounded-xl shadow-xl max-w-md w-full mx-4 z-[70]">
            <div class="p-6">
                <h3 class="text-lg font-bold ">Edit Profile</h3>
                <p class="text-sm text-neutral-600 mb-4">Make changes to account here. Click save when you're done.</p>
                <form @submit.prevent="submitForm()">
                    <!-- Name Input -->
                    <div class="mb-4">
                        <input 
                            type="text" 
                            x-model="name"
                            class="w-full px-3 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-neutral-300 focus:border-neutral-500"
                            :class="{'border-red-500': errors.name}"
                            required
                            placeholder="Enter name"
                        >
                        <template x-if="errors.name">
                            <div class="text-red-500 text-sm mt-1" x-text="errors.name[0]"></div>
                        </template>
                    </div>

                    <!-- Email Input -->
                    <div class="mb-4">
                        <input 
                            type="email" 
                            x-model="email"
                            @blur="checkEmail()"
                            class="w-full px-3 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-neutral-300 focus:border-neutral-500"
                            :class="{'border-red-500': errors.email || emailExists}"
                            required
                            placeholder="Enter email"
                        >
                        <template x-if="emailExists">
                            <div class="text-red-500 text-sm mt-1">This email is already in use</div>
                        </template>
                        <template x-if="errors.email">
                            <div class="text-red-500 text-sm mt-1" x-text="errors.email[0]"></div>
                        </template>
                    </div>

                    <!-- Mobile Input -->
                    <div class="mb-4">
                        <input 
                            type="tel" 
                            x-model="mobile"
                            class="w-full px-3 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-neutral-300 focus:border-neutral-500"
                            :class="{'border-red-500': errors.mobile}"
                            required
                            maxlength="10"
                            pattern="[0-9]{10}"
                            placeholder="Enter mobile"
                        >
                        <template x-if="errors.mobile">
                            <div class="text-red-500 text-sm mt-1" x-text="errors.mobile[0]"></div>
                        </template>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end gap-2">
                        <button 
                            type="button"
                            @click="showEditModal = false"
                            class="px-4 py-2 text-neutral-700 hover:text-neutral-800"
                        >
                            Cancel
                        </button>
                        <button 
                            type="submit"
                            class="px-4 py-3 bg-black text-white rounded-lg"
                            :disabled="emailExists || !validateMobile()"
                        >
                            Update Profile
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Rest of your existing content -->
@php
$imageUrl = (filter_var($user->avatar, FILTER_VALIDATE_URL) && preg_match('/^http(s)?:\/\//', $user->avatar)) 
? $user->avatar
: 'https://plus.unsplash.com/premium_vector-1722167430275-348e8d11d82e?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bWFufGVufDB8fDB8fHww';
@endphp
<section class="mt-4  sm:max-w-4xl w-full mx-auto ">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full">
                <h1 class="text-xl font-bold">{{$user->name}} Profile</h1>
                <p class="text-sm">Joined on {{ $user->created_at->format('F j, Y g:i A') }}</p>

                <div class="">
                <div class="border border-neutral-5 bg-green-5 rounded-lg p-5 my-8 w-">
                    <div class="my-4 flex items-center gap-4">
                        <img src="{{$imageUrl}}" class="h-16 w-16 rounded-full inline-block object-cover " alt="">
                        <div class="flex-1">
                            <h1 class="text-lg font-bold text-neutral-900 leading-tight">{{$user->name}}</h1>
                            @if($user->college || $user->course)
                            <p class="text-sm text-neutral-600 mt-1">
                                <span class="capitalize">{{ $user->college == 'professional' ? 'Working Professional' : ($user->college == 'student' ? 'Student' : $user->college) }}</span>
                                @if($user->college && $user->course)
                                    - {{ $user->course }}
                                @elseif($user->course)
                                    {{ $user->course }}
                                @endif
                            </p>
                            @else
                            <p class="text-sm text-neutral-400 italic mt-1">Profile incomplete (no profession/role specified)</p>
                            @endif

                            <div class="mt-3 flex flex-col gap-1.5 text-sm text-neutral-700">
                                <div class="flex items-center gap-1.5 group">
                                    <span class="font-medium text-neutral-500 w-12">Email:</span>
                                    <span>{{$user->email}}</span>
                                    <button onclick="copyToClipboard('{{ $user->email }}', this)" class="text-neutral-400 hover:text-neutral-600 transition-colors p-0.5 rounded hover:bg-neutral-100/50 ml-2" title="Copy Email">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy inline-block align-middle"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                    </button>
                                </div>
                                <div class="flex items-center gap-1.5 group">
                                    <span class="font-medium text-neutral-500 w-12">Phone:</span>
                                    <span>{{$user->mobile}}</span>
                                    <button onclick="copyToClipboard('{{ $user->mobile }}', this)" class="text-neutral-400 hover:text-neutral-600 transition-colors p-0.5 rounded hover:bg-neutral-100/50 ml-2" title="Copy Mobile Number">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy inline-block align-middle"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-">
                        <button 
                            @click="showEditModal = true" 
                            class="bg-neutral-100 text-black text-sm py-2 px-4 hover:bg-neutral-200"
                        >
                            Edit Profile
                        </button>
                        @if ($user->status == 1)
                            <a href="{{ action('AdminController@banStudent', $user->id) }}" class="bg-neutral-100 text-black text-sm py-2 px-4 hover:bg-red-100 hover:text-red-800">Ban Account</a>
                        @else
                            <a href="{{ action('AdminController@activateStudent', $user->id) }}" class="bg-green-100 text-green-900 text-sm py-2 px-4  hover:bg-green-200">Activate Account</a>
                        @endif

                        <!-- Add Edit Profile Button -->
                        

                        @if ($user->role == 0)
                            <a href="{{ action('AdminController@makeTeacher', $user->id) }}" class="bg-violet-100 text-violet-800 py-2 px-4 rounde text-sm hover:bg-violet-200">Change role to teacher</a>
                        @else
                            <a href="{{ action('AdminController@downgradeTeacher', $user->id) }}" class="bg-neutral-100 text-black py-2 px-4 rounde text-sm hover:bg-orange-100 hover:text-orange-800">Change role to student</a>
                        @endif
                    </div>
                    <div class="mt-5">


                    </div>
                </div>
            </div>
        
        
        
        



                <div class="bg-whit border rounded-lg">
                    <div class="flex justify-between items-center py-4">
                        <div class="px-0">
                            <h2 class="text-lg font-semibold mb- px-4">Courses</h2>
                            <h1 class="text-neutral-70 px-4 -mt-1">Courses enrolled {{$enrollments->where('hasPaid', 1)->count()}}</h1>
                        </div>
                        <div class="mr-4">
                            <input type="tex" id="searchInput" onkeyup="searchTable()" placeholder="Search course" class="w-full px-4 mr-4 inline-block py-2 border border-neutral-200 rounded-lg focus:outline-none focus:ring-0">
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto ">
                        <table id="enrollmentTable" class="min-w-full divide-y divide-neutral-200">
                            <thead class="">
                                <tr class="text-black">
                                    <th class="px-5 py-3  font-medium text-left ">#</th>
                                    <th class="px-5 py-3  font-medium text-left ">Course</th>
                                    <th class="px-5 py-3  font-medium text-left">Enrolled On</th>
                                    <th class="px-5 py-3  font-medium text-left">Amount</th>
                                    <th class="px-5 py-3  font-medium text-left">Progress</th>
                                    <th class="px-5 py-3  font-medium text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-whit divide-y divide-gray-200">
                                @foreach ($enrollments as $enrollment)
                                @if($enrollment->hasPaid == 1)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ ++$i }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $enrollment->batch->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ \Carbon\Carbon::parse($enrollment->paidAt)->format('d M Y h:i A') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $enrollment->amountPaid / 100 }} - {{$enrollment->paymentMethod}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $enrollment->progress ?? 0 }}% 
                                        <span class="text-neutral-500 text-xs ml-1">
                                            (@php
                                                $ts = $enrollment->time_spent ?? 0;
                                                $hrs = floor($ts / 60);
                                                $mins = $ts % 60;
                                                if ($hrs > 0) {
                                                    echo "{$hrs}h {$mins}m";
                                                } else {
                                                    echo "{$mins}m";
                                                }
                                            @endphp)
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div class="flex gap-2 items-center">
                                            <!-- General Actions -->
                                            <div class="flex items-center gap-1">
                                                <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id))}}" class="text-neutral-500 hover:text-neutral-800 transition-colors p-1 rounded-lg hover:bg-neutral-100/60 inline-flex items-center justify-center" title="Edit Payment">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                                                </a>
                                                @if($enrollment->batch->type == 1)
                                                <a href="{{ url('/admin-progress/' . $enrollment->id) }}" class="text-neutral-500 hover:text-neutral-800 transition-colors p-1 rounded-lg hover:bg-neutral-100/60 inline-flex items-center justify-center" title="View Progress">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                                                </a>
                                                @endif
                                            </div>
                                            
                                            <!-- Separator Line -->
                                            <span class="text-neutral-200 select-none">|</span>
                                            
                                            <!-- Certificate Actions -->
                                            <div class="flex items-center gap-1">
                                                @if($enrollment->certificateId)
                                                    <button onclick="copyToClipboard('{{ url('/course-certificate/' . $enrollment->certificateId) }}', this)" 
                                                            class="text-violet-600 hover:text-violet-800 transition-colors p-1 rounded-lg hover:bg-violet-50 inline-flex items-center justify-center" title="Copy Certificate Link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                    </button>
                                                @else
                                                    <a href="{{ action('TeacherController@generateCertificate', $enrollment->id) }}" 
                                                       class="text-neutral-400 hover:text-violet-600 transition-colors p-1 rounded-lg hover:bg-violet-50 inline-flex items-center justify-center" title="Generate Certificate">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- sessions --}}
        <div class="bg-white border rounded-lg p- mt-8 mb-20">
            <div class="py-4 flex justify-between items-center px-4">
                <div>
                    <h2 class="text-lg font-semibold mb-">Session Details</h2>
                    <h1 class="text-neutral-700 text-sm">Last activity {{ $user->lastActivity->format('F j, Y g:i A') }}</h1>
                </div>
                <div>
                    <button onclick="deleteAllSessions()" class="bg-red-50 text-red-600 hover:bg-red-100 px-4 py-2 rounded-lg text-sm font-semibold transition-colors duration-150">
                        Delete All Sessions
                    </button>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table id="sessionTable" class="min-w-full divide-y divide-neutral-200">
                    <thead class="bg-gray-50">
                        <tr class="text-left text-neutral-800">
                            <th class="px-5 py-3 font-medium">IP Address</th>
                            <th class="px-5 py-3 font-medium">Browser</th>
                            <th class="px-5 py-3 font-medium">Device</th>
                            <th class="px-5 py-3 font-medium">Last Activity</th>
                            <th class="px-5 py-3 font-medium text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-whit divide-y divide-gray-200" id="sessionTableBody">
                        <!-- Session data will be injected here -->
                    </tbody>
                </table>
            </div>
        </div>
    
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetchStudentSessions();
        });
    
        function fetchStudentSessions() {
            // Fetch session data for the specific student
            fetch(`/api/students/{{ $user->id }}/sessions`)
                .then(response => response.json())
                .then(data => {
                    const sessions = data.devices;
                    const currentSessionId = data.current_session_id;
                    const tableBody = document.getElementById('sessionTableBody');
    
                    // Clear previous data
                    tableBody.innerHTML = '';
    
                    // Loop through the sessions and insert them into the table
                    sessions.forEach(session => {
                        const row = document.createElement('tr');
                        const isCurrent = session.id === currentSessionId;
                        row.innerHTML = `
                            <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-900">${session.ip_address}</td>
                            <td class="px-6 py-3 whitespace-nowrap text-sm">${session.browser}</td>
                            <td class="px-6 py-3 whitespace-nowrap text-sm">${session.device_name}</td>
                            <td class="px-6 py-3 whitespace-nowrap text-sm">${session.last_activity} ${isCurrent ? '<span class="ml-2 px-2 py-0.5 text-xs font-semibold bg-neutral-200 text-neutral-800 rounded">Current</span>' : ''}</td>
                            <td class="px-6 py-3 whitespace-nowrap text-sm text-right">
                                <button onclick="deleteSession('${session.id}')" class="text-neutral-700 hover:text-red-600 transition-colors duration-150 mr-4 inline-flex items-center justify-center p-1.5 rounded-lg hover:bg-red-50" title="Delete Session">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2-icon lucide-trash-2"><path d="M10 11v6"/><path d="M14 11v6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                </button>
                            </td>
                        `;
                        // Highlight the current session
                        if (isCurrent) {
                            row.classList.add('bg-neutral-100');
                        }
                        tableBody.appendChild(row);
                    });
                })
                .catch(error => {
                    console.error('Error fetching session data:', error);
                });
        }

        function deleteSession(sessionId) {
            fetch(`/admin/students/{{ $user->id }}/sessions/${sessionId}/delete`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    fetchStudentSessions();
                } else {
                    alert(data.message || 'Failed to delete session');
                }
            })
            .catch(error => {
                console.error('Error deleting session:', error);
                alert('An error occurred while deleting the session.');
            });
        }
    
        function deleteAllSessions() {
            if (!confirm('Are you sure you want to delete ALL sessions for this student? This will log them out of all devices.')) {
                return;
            }
    
            fetch(`/admin/students/{{ $user->id }}/sessions/delete-all`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    fetchStudentSessions();
                } else {
                    alert(data.message || 'Failed to delete all sessions');
                }
            })
            .catch(error => {
                console.error('Error deleting all sessions:', error);
                alert('An error occurred while deleting sessions.');
            });
        }

        function copyToClipboard(text, element) {
            navigator.clipboard.writeText(text).then(() => {
                const originalHTML = element.innerHTML;
                element.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check inline-block align-middle text-green-600"><path d="M20 6 9 17l-5-5"/></svg>`;
                element.title = "Copied!";
                setTimeout(() => {
                    element.innerHTML = originalHTML;
                    element.title = "Copy";
                }, 1500);
            }).catch(err => {
                console.error('Failed to copy text: ', err);
            });
        }
    </script>
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

<script>
function submitForm() {
    fetch('/admin/update-user-profile/{{$user->id}}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            name: this.name,
            email: this.email,
            mobile: this.mobile
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.reload();
        }
    });
}
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


{{-- 
@extends('layouts.admin')

@section('content')
<!-- Content -->
<div class="content card p-0 pt-20">
    <div class="text-center">
        <img src="{{$user->avatar}}" class="img-fluid rounded-circle" alt="">
        <h2 class="m-0">{{$user->name}}</h1>
        <p class="m-0 p-0"> <span class="text-muted">Joined On</span> {{$user->created_at->format('d M Y')}}</p>
        <p class="text-muted p-0 mt-0 pb-5">Last Activity {{$user->lastActivity->format('D, d M Y h:i A')}}</p>
        <div class="pt-10">
            @if ($user->status == 1)
            <a href="{{action('AdminController@banStudent', $user->id)}}" class="btn btn-danger">Ban Account</a> 
            @else
            <a href="{{action('AdminController@activateStudent', $user->id)}}" class="btn btn-success">Activate Account</a>
            @endif
            @if($user->role == 0)
            <a href="{{action('AdminController@makeTeacher', $user->id)}}" class="btn btn-primary">Upgrade</a>
            @else
            <a href="{{action('AdminController@downgradeTeacher', $user->id)}}" class="btn btn-secondary">Downgrade</a>
            
            @endif
            
            
           
            
        </div>
       
    </div>
<div class="table-responsive">
    <table class="table table-responsive border-top mt-20 pl-0 pr-0">
        <tr>
            <th>Email</th>
            <th>Mobile</th>
            <th>Mobile</th>
            <th>Level</th>
            <th width="280px">Action</th>
        </tr>
        
        <tr>
           <td>{{$user->email}}</td>
           <td>  <a href="{{action('AdminController@studentDetails', $user->id )}}">{{$user->name}}</a>   </td>
           <td>{{$user->mobile}}</td>
           <td>{{$user->college}}</td>
           <td>Begginer</td>    
        </tr> 
       
    </table>
</div>
    
</div>

<div class="content">
    <h3>Enrollments</h2>
        <div class="card p-0">
            <table class="table pl-0 pr-0">
                <tr>
                    
                    <th>Course</th>
                    <th>Enrolled On</th>
                    <th>Fees</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($enrollments as $enrollment)
                @if ($enrollment->hasPaid ==1)
                <tr class="table-success">
                @else
                   <tr>
                @endif
                
                   <td>{{$enrollment->batch->name}}</td>
                   <td>{{ \Carbon\Carbon::parse($enrollment->paidAt)->format('D d M y') }}</td>
                   <td>{{$enrollment->amountPaid > 0 ? $enrollment->amountPaid/100 : 0}}</td>
                   <td>{{$user->college}}</td>
                   <td>Begginer</td>    
                </tr>  
                @endforeach
                
               
            </table>
        </div>
</div>
@endsection --}}
