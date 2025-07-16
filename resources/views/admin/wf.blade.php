@extends('layouts.t-admin-sidebar')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="mb-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-neutral-900">Professional Users</h1>
                <p class="text-neutral-600 mt-1">Manage users with professional college status</p>
            </div>
            <div class="flex items-center space-x-2">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                    Total: {{ $professionalUsersCount }}
                </span>
            </div>
        </div>
    </div>

    @if($professionalUsers->count() > 0)
        <!-- Table Card -->
        <div class="bg-white rounded-lg shadow-s border border-neutral-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-neutral-200">
                    <thead class="bg-neutral-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                                Mobile
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                                Last Activity
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-neutral-200">
                        @foreach($professionalUsers as $user)
                            <tr class=" transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">
                                                <span class="text-white font-medium text-sm">
                                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-neutral-900">
                                                {{ $user->name }}
                                            </div>
                                            
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-neutral-900">{{ $user->email }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-neutral-900">
                                        {{ $user->mobile ?? 'N/A' }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-neutral-900">
                                        @if($user->lastActivity)
                                            {{ \Carbon\Carbon::parse($user->lastActivity)->diffForHumans() }}
                                        @else
                                            <span class="text-neutral-400">Never</span>
                                        @endif
                                    </div>
                                    <div class="text-xs text-neutral-500">
                                        @if($user->lastActivity)
                                            {{ \Carbon\Carbon::parse($user->lastActivity)->format('M d, Y H:i') }}
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                    <a href="{{url('/admin/students/{ $user->id }')}}" 
                                       class="inline-flex items-center px-3 py-1 rounded-md text-sm font-medium bg-blue-100 text-blue-700 hover:bg-blue-200 transition-colors duration-150">
                                        View
                                    </a>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex items-center justify-between">
            <div class="flex-1 flex justify-between sm:hidden">
                @if ($professionalUsers->onFirstPage())
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-neutral-500 bg-white border border-neutral-300 cursor-default leading-5 rounded-md">
                        Previous
                    </span>
                @else
                    <a href="{{ $professionalUsers->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-neutral-700 bg-white border border-neutral-300 leading-5 rounded-md hover:text-neutral-500 focus:outline-none focus:ring ring-blue-300 focus:border-blue-300 active:bg-neutral-100 active:text-neutral-700 transition ease-in-out duration-150">
                        Previous
                    </a>
                @endif

                @if ($professionalUsers->hasMorePages())
                    <a href="{{ $professionalUsers->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-neutral-700 bg-white border border-neutral-300 leading-5 rounded-md hover:text-neutral-500 focus:outline-none focus:ring ring-blue-300 focus:border-blue-300 active:bg-neutral-100 active:text-neutral-700 transition ease-in-out duration-150">
                        Next
                    </a>
                @else
                    <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-neutral-500 bg-white border border-neutral-300 cursor-default leading-5 rounded-md">
                        Next
                    </span>
                @endif
            </div>

            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-neutral-700">
                        Showing
                        <span class="font-medium">{{ $professionalUsers->firstItem() }}</span>
                        to
                        <span class="font-medium">{{ $professionalUsers->lastItem() }}</span>
                        of
                        <span class="font-medium">{{ $professionalUsers->total() }}</span>
                        results
                    </p>
                </div>
                <div>
                    {{ $professionalUsers->links() }}
                </div>
            </div>
        </div>
    @else
        <!-- Empty State -->
        <div class="bg-white rounded-lg shadow-sm border border-neutral-200 p-12 text-center">
            <div class="mx-auto h-12 w-12 text-neutral-400">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                </svg>
            </div>
            <h3 class="mt-4 text-lg font-medium text-neutral-900">No professional users found</h3>
            <p class="mt-2 text-neutral-500">There are currently no users with professional college status.</p>
        </div>
    @endif
</div>
@endsection