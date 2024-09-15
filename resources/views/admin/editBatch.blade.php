@extends('layouts.t-admin-sidebar')
@section('content')

<section class="max-w-xl mx-auto border p-3 my-3">
    <div class="relative bg-white  dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
            <div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Edit {{$batch->name}}</h3>
                <p class="text-xs text-neutral-600">Update batch details.</p>
            </div>
        </div>
        <!-- Modal body -->
        <div class="px-4 pb-4  md:px-5 md:pb-5">
            <form method="POST" action="{{ route('updateBatch', $batch->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Course ID -->
                <div class="mb-4">
                    <label for="courseId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic Id</label>
                    <input type="number" name="courseId" value="{{ $batch->topicId }}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Course Id">
                </div>

                <!-- Batch Name -->
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batch Name</label>
                    <input type="text" name="name" value="{{ $batch->name }}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Batch Name">
                </div>

                <!-- Assign Teacher -->
                <div class="mb-4">
                    <label for="teacher" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Assign Teacher</label>
                    <select name="teacherId" id="teacher" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                        <option value="">Select a Teacher</option>
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}" {{ $batch->teacherId == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Price -->
                <div class="mb-4">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="number" name="price" value="{{ $batch->price }}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Price">
                </div>

                <!-- Amount Payable -->
                <div class="mb-4">
                    <label for="payable" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount Payable</label>
                    <input type="number" name="payable" value="{{ $batch->payable }}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Amount Payable">
                </div>

                <!-- Seat Limit -->
                <div class="mb-4">
                    <label for="limit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seat Limit</label>
                    <input type="number" name="limit" value="{{ $batch->limit }}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Seat Limit">
                </div>

                <!-- Class Type -->
                <div class="mb-4">
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class Type</label>
                    <p class="text-xs text-gray-500 mb-2">1 for course, 2 for workshops</p>
                    <input type="number" name="type" value="{{ $batch->type }}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Class Type">
                </div>

                <!-- Start Date -->
                <div class="mb-4">
                    <label for="startDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
                    <input type="date" name="startDate" value="{{ $batch->startDate }}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 ">
                </div>

                <!-- End Date -->
                <div class="mb-4">
                    <label for="endDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Date</label>
                    <input type="date" name="endDate" value="{{ $batch->endDate }}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 ">
                </div>

                <!-- Group Link 1 -->
                <div class="mb-4">
                    <label for="groupLink" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">WhatsApp group</label>
                    <input type="text" name="groupLink" value="{{ $batch->groupLink }}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Group Link 1">
                </div>

                <!-- Group Link 2 -->
                <div class="mb-4">
                    <label for="groupLink2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resources link</label>
                    <input type="text" name="groupLink2" value="{{ $batch->groupLink2 }}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Group Link 2">
                </div>

                <!-- Next Class Topic -->
                <div class="mb-4">
                    <label for="topic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Next Class Topic</label>
                    <input type="text" name="topic" value="{{ $batch->topic }}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Class Topic">
                </div>

                <!-- Next Class Schedule -->
                <div class="mb-4">
                    <label for="nextClass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Next Class Schedule</label>
                    <input type="datetime-local" name="nextClass" value="{{ $batch->nextClass }}" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Class Schedule">
                </div>

                <!-- Batch Status -->
                <div class="mb-4">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batch Status</label>
                    <select name="status" id="status" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                        <option value="0" {{ $batch->status == 0 ? 'selected' : '' }}>Private</option>
                        <option value="1" {{ $batch->status == 1 ? 'selected' : '' }}>Live</option>
                        <option value="2" {{ $batch->status == 2 ? 'selected' : '' }}>In Progress</option>
                        <option value="3" {{ $batch->status == 3 ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-black hover:bg-black text-white font-normal py-2.5 px-4 ">Update Batch</button>
            </form>
        </div>
    </div>
</section>

@endsection
