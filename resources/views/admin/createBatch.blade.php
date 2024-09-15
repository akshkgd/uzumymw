@extends('layouts.t-admin-sidebar')
@section('content')

<!-- Quill CSS -->
{{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> --}}

<section class="max-w-xl mx-auto border p-3 my-3">
    <div class="relative bg-white  dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
            <div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Create Course</h3>
                <p class="text-xs text-neutral-600">Enter details to create a course.</p>
            </div>
            
        </div>
        <!-- Modal body -->
        <div class="px-4 pb-4  md:px-5 md:pb-5">
                <form method="POST" action="{{ action('BatchController@store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        
                        <div class="mb-4">
                            <label for="courseId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course Id</label>
                            <input type="number" name="courseId" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Course Id">
                        </div>

                        <div class="mb-4">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batch Name</label>
                            <input type="text" name="name" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Batch Name">
                        </div>

                       
                        <div class="mb-4">
                            <label for="teacher" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Assign Teacher</label>
                            <select name="teacherId" id="teacher" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                                <option value="">Select a Teacher</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                            <input type="number" name="price" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Price">
                        </div>

                        <div class="mb-4">
                            <label for="payable" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount Payable</label>
                            <input type="number" name="payable" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Amount Payable">
                        </div>

                       

                        <div class="mb-4">
                            <label for="limit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seat Limit</label>
                            <input type="number" name="limit" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Seat Limit">
                        </div>

                        <div class="mb-4">
                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class Type</label>
                            <p class="text-xs text-gray-500 mb-2">1 for course, 2 for workshops</p>
                            <input type="number" name="type" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Class Type">
                        </div>

                        <div class="mb-4">
                            <label for="startDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
                            <input type="date" name="startDate" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 ">
                        </div>

                        <div class="mb-4">
                            <label for="endDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Date</label>
                            <input type="date" name="endDate" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 ">
                        </div>

                        {{-- <div class="mb-4">
                            <label for="timing" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Timing</label>
                            <input type="text" name="timing" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Class Timing">
                        </div> --}}

                        {{-- <div class="mb-4">
                            <label for="about" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">About</label>
                            <div id="quillAbout" class="h-40"></div>
                            <input type="hidden" id="qeAbout" name="about">
                        </div> --}}

                        <div class="mb-4">
                            <label for="groupLink" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Group Link 1</label>
                            <input type="text" name="groupLink" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Group Link 1">
                        </div>

                        <div class="mb-4">
                            <label for="groupLink2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Group Link 2</label>
                            <input type="text" name="groupLink2" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Group Link 2">
                        </div>

                        
                        <div class="mb-4">
                            <label for="meetingLink" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Next Class Topic</label>
                            <input type="text" name="topic" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Meeting Link">
                        </div>
                        <div class="mb-4">
                            <label for="meetingLink" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Next Class schedule</label>
                            <input type="datetime-local" name="nextClass" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 " placeholder="Meeting Link">
                        </div>

                        {{-- <div class="mb-4">
                            <label for="img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Image</label>
                            <input type="file" name="img" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5 ">
                        </div> --}}
                        <div class="mb-4">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batch Status</label>
                            <select name="status" id="status" class="border border-gray-300 text-gray-900 text-sm focus:ring-0 focus:border-violet-500 focus:outline-none block w-full p-2.5">
                                <option value="0">Private</option>
                                <option value="1">Live</option>
                                <option value="2">In Progress</option>
                                <option value="3">Completed</option>
                            </select>
                        </div>

                        <button type="submit" class="w-full bg-black hover:bg-black text-white font-normal py-2.5 px-4 ">Create Batch</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Quill JS -->
{{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#quillAbout', {
        theme: 'snow'
    });

    quill.on('text-change', function (delta, oldDelta, source) {
        document.getElementById("qeAbout").value = quill.root.innerHTML;
    });
</script> --}}

@endsection
