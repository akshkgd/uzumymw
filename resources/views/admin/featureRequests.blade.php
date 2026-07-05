@extends('layouts.t-admin-sidebar')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-xl font-bold text-neutral-900">Feature Requests</h1>
        <p class="text-neutral-600">Review feature requests submitted by students for the new dashboard</p>
    </div>

    <div class="mb-6" id="alert-container">
        @include('layouts.t-alert')
    </div>

    <div class="bg-white border rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-5 text-left text-xs font-medium text-neutral-600 uppercase tracking-wider">Student</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-neutral-600 uppercase tracking-wider">Email</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-neutral-600 uppercase tracking-wider">Feature Request</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-neutral-600 uppercase tracking-wider">Submitted On</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($featureRequests as $request)
                <tr class="hover:bg-neutral-50 transition-all duration-300">
                    <td class="px-6 py-3 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ $request->user->avatar ?? 'https://avatar.iran.liara.run/public' }}" alt="{{ $request->user->name ?? 'Student' }}">
                            </div>
                            <div class="ml-4 max-w-56 truncate">
                                <div class="text-sm font-medium text-gray-900">{{ $request->user->name ?? 'Guest User' }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-neutral-600">{{ $request->user->email ?? 'N/A' }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900 max-w-xl whitespace-pre-line leading-relaxed">{{ $request->text }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-neutral-500">{{ $request->created_at->format('M d, Y') }}</div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-12 text-center text-sm text-neutral-500">
                        No feature requests submitted yet.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($featureRequests->hasPages())
    <div class="mt-6">
        {{ $featureRequests->appends(request()->query())->links('pagination::tailwind') }}
    </div>
    @endif
</div>
@endsection
