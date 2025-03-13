@extends('layouts.t-admin-sidebar')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8 text-cente">
        <h1 class="text-xl font-bold text-neutral-900">Student Feedback Management</h1>
        <p class="text-neutral-600">Review, approve, or remove student feedback</p>
    </div>

    <div class="mb-6" id="alert-containe">
        @include('layouts.t-alert')
    </div>

    <div class="bg-white border rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="">
                <tr>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium text-neutral-600 uppercase tracking-wider">Student</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-neutral-600 uppercase tracking-wider">Feedback</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-neutral-600 uppercase tracking-wider">Created On</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-neutral-600 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-neutral-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($feedbacks as $feedback)
                <tr class="hover:bg-neutral-50 transition-all duration-300" id="feedback-row-{{ $feedback->id }}">
                    <td class="px-6 py-3 whitespace-nowrap">
                        <div class="flex items-center ">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="{{ $feedback->user->avatar }}" alt="{{ $feedback->user->name }}">
                            </div>
                            <div class="ml-4 max-w-56 truncate">
                                <div class="text-sm font-medium text-gray-900">{{ $feedback->user->name }}</div>
                                <div class="text-sm text-neutral-600">{{ $feedback->user->college }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 max-w-md line-clamp-1 hover:line-clamp-none truncat">{{ $feedback->feedback }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $feedback->created_at->format('M d, Y') }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span id="status-badge-{{ $feedback->id }}" class="px-2 inline-flex text-sm leading-5  rounded-xs {{ $feedback->status == 0 ? 'bg-neutral-100 text-neutral-800' : 'bg-red-50 text-red-600' }}">
                            {{ $feedback->status == 0 ? 'Approved' : 'Removed' }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            @if($feedback->status == 1)
                            <button type="button" 
                                    class="approve-btn text-green-600 hover:text-green-900" 
                                    data-feedback-id="{{ $feedback->id }}"
                                    data-url="{{ action('AdminController@addFeedback', $feedback->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="=18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check"><path d="M20 6 9 17l-5-5"></path></svg>
                            </button>
                            @else
                            <button disabled class="text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check"><path d="M20 6 9 17l-5-5"></path></svg>
                            </button>
                            @endif
                            <button type="button" 
                                    class="delete-btn text-neutral-700 hover:text-red-600" 
                                    data-feedback-id="{{ $feedback->id }}"
                                    data-url="{{ action('AdminController@removeFeedback', $feedback->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2 mr-2 h-4 w-4"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{-- {{ $feedbacks->links() }} --}}
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Setup CSRF token for all AJAX requests
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
        // Handle approve button clicks
        document.querySelectorAll('.approve-btn').forEach(button => {
            button.addEventListener('click', function() {
                const feedbackId = this.dataset.feedbackId;
                const url = this.dataset.url;
                const button = this;
                
                // Disable button during request
                button.disabled = true;
                
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    // Check if the response is JSON
                    const contentType = response.headers.get('content-type');
                    if (contentType && contentType.includes('application/json')) {
                        return response.json();
                    } else {
                        throw new Error('Received non-JSON response from server');
                    }
                })
                .then(data => {
                    if (data.success) {
                        // Update status badge
                        const statusBadge = document.getElementById(`status-badge-${feedbackId}`);
                        statusBadge.classList.remove('bg-yellow-100', 'text-yellow-800');
                        statusBadge.classList.add('bg-green-100', 'text-green-800');
                        statusBadge.textContent = 'Approved';
                        
                        // Replace approve button with disabled button
                        const parentDiv = button.parentElement;
                        parentDiv.removeChild(button);
                        
                        const disabledButton = document.createElement('button');
                        disabledButton.disabled = true;
                        disabledButton.className = 'text-gray-400';
                        disabledButton.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        `;
                        
                        parentDiv.insertBefore(disabledButton, parentDiv.firstChild);
                        
                        // Show success message
                        showAlert('success', 'Feedback approved successfully!');
                    } else {
                        showAlert('error', data.message || 'Failed to approve feedback');
                        button.disabled = false;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showAlert('error', 'An error occurred while approving feedback. Please check the console for details.');
                    button.disabled = false;
                });
            });
        });
        
        // Handle delete button clicks - removed confirmation dialog
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                const feedbackId = this.dataset.feedbackId;
                const url = this.dataset.url;
                const row = document.getElementById(`feedback-row-${feedbackId}`);
                
                // Add loading state to button
                button.disabled = true;
                button.innerHTML = `
                    <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                `;
                
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    // Check if the response is JSON
                    const contentType = response.headers.get('content-type');
                    if (contentType && contentType.includes('application/json')) {
                        return response.json();
                    } else {
                        throw new Error('Received non-JSON response from server');
                    }
                })
                .then(data => {
                    if (data.success) {
                        // Remove the row with animation
                        row.style.transition = 'opacity 0.5s ease';
                        row.style.opacity = '0';
                        setTimeout(() => {
                            row.remove();
                        }, 500);
                        
                        // Show success message
                        showAlert('success', 'Feedback removed successfully!');
                    } else {
                        showAlert('error', data.message || 'Failed to remove feedback');
                        // Reset button
                        button.disabled = false;
                        button.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        `;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showAlert('error', 'An error occurred while removing feedback. Please check the console for details.');
                    // Reset button
                    button.disabled = false;
                    button.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    `;
                });
            });
        });
        
        // Function to show alerts
        function showAlert(type, message) {
            const alertContainer = document.getElementById('alert-container');
            const alertClass = type === 'success' ? 'bg-green-100 border-green-400 text-green-700' : 'bg-red-100 border-red-400 text-red-700';
            
            const alertHtml = `
                <div class="border px-4 py-3 rounded relative ${alertClass} mb-4 alert-message">
                    <span class="block sm:inline">${message}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                        </svg>
                    </span>
                </div>
            `;
            
            alertContainer.innerHTML = alertHtml;
            
            // Setup close button
            const closeButton = alertContainer.querySelector('svg[role="button"]');
            closeButton.addEventListener('click', function() {
                alertContainer.innerHTML = '';
            });
            
            // Auto-hide after 5 seconds
            setTimeout(() => {
                const alert = alertContainer.querySelector('.alert-message');
                if (alert) {
                    alert.style.transition = 'opacity 0.5s ease';
                    alert.style.opacity = '0';
                    setTimeout(() => {
                        alertContainer.innerHTML = '';
                    }, 500);
                }
            }, 5000);
        }
    });
</script>

@endsection