@extends('layouts.t-student')
@section('content')
@section('title', 'Crash Course Schedule')
<style>
    a{
        font-size:14px;
    }
    ::-webkit-scrollbar {
        display: none;
    }
</style>
<div class="max-w-7xl mx-auto p-5">
<div class="my-12 "> 
    <h1 class="text-xl font-bold">Frontend Crash Course</h1>
    <p class="text-gray-500">Crash course live class schedule</p>
    <p>Attend live classes on Zoom using this link <a class="text-blue-600 underline" href="https://us06web.zoom.us/j/5086054844?pwd=2uiiEpZRz8WqFDmSIGwHSibwbZnSg2.1" title="https://us06web.zoom.us/j/5086054844?pwd=2uiiEpZRz8WqFDmSIGwHSibwbZnSg2.1">https://us06web.zoom.us/j/5086054844?pwd=2uiiEpZRz8WqFDmSIGwHSibwbZnSg2.1</a></p>
</div>
    <div class="overflow-x-auto">
        <table class="w-full min-w-max">
        <thead>
            <tr class="font-normal  border-b border-neutral-200">
                <td class="py-1 px-2 w-60 border-r border-neutral-200 whitespace-nowrap">Title</td>
                <td class="py-1 px-2 w-60 border-r border-neutral-200 whitespace-nowrap">Schedule</td>
                {{-- <td class="py-1 px-2 w-60 border-r border-neutral-200">Recorded Session</td> --}}
                <td class="py-1 px-2 w-60 border-r border-neutral-200">Source Code</td> 
                <td class="py-1 px-2 ">Status</td>
            </tr>
            <tr class="font-normal  border-b border-neutral-200 p-3">
                <td class="px-3 py-2 border-r border-neutral-200 whitespace-nowrap">How to Use Tailwind CSS</td>
                <td class="px-3 py-2 border-r border-neutral-200 whitespace-nowrap">08 PM 18th August</td>
                {{-- <td class="px-3 py-2 border-r border-neutral-200"><a class="inline-block max-w-[18ch] truncate align-bottom hover:underline text-neutral-700 underline" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" title="https://www.youtube.com/watch?v=dQw4w9WgXcQ">https://www.youtube.com/watch?v=dQw4w9WgXcQ</a> </td> --}}
                <td class="px-3 py-2 border-r border-neutral-200"><a class="inline-block max-w-[18ch] truncate align-bottom hover:underline text-neutral-700 underlin" href="-" title="-">-</a> </td>
                <td class="px-3 py-2 "><div class="bg-green-100  inline-block text-green-700 px-2 py-1 text-sm rounded-md">Upcoming</div></td>
            </tr>

            <tr class="font-normal  border-b border-neutral-200 p-3">
                <td class="px-3 py-2 border-r border-neutral-200 whitespace-nowrap">Fundamentals of Javascript</td>
                <td class="px-3 py-2 border-r border-neutral-200 whitespace-nowrap">08 PM 19th August</td>
                {{-- <td class="px-3 py-2 border-r border-neutral-200"><a class="inline-block max-w-[18ch] truncate align-bottom hover:underline text-neutral-700 underline" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" title="https://www.youtube.com/watch?v=dQw4w9WgXcQ">https://www.youtube.com/watch?v=dQw4w9WgXcQ</a> </td> --}}
                <td class="px-3 py-2 border-r border-neutral-200"><a class="inline-block max-w-[18ch] truncate align-bottom hover:underline text-neutral-700 underlin" href="-" title="-">-</a> </td>
                <td class="px-3 py-2 "><div class="bg-green-100  inline-block text-green-700 px-2 py-1 text-sm rounded-md">Upcoming</div></td>
            </tr>


            <tr class="font-normal  border-b border-neutral-200 p-3">
                <td class="px-3 py-2 border-r border-neutral-200 whitespace-nowrap">Masterning ES6 & DOM</td>
                <td class="px-3 py-2 border-r border-neutral-200 whitespace-nowrap">08 PM 20th August</td>
                {{-- <td class="px-3 py-2 border-r border-neutral-200"><a class="inline-block max-w-[18ch] truncate align-bottom hover:underline text-neutral-700 underline" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" title="https://www.youtube.com/watch?v=dQw4w9WgXcQ">https://www.youtube.com/watch?v=dQw4w9WgXcQ</a> </td> --}}
                <td class="px-3 py-2 border-r border-neutral-200"><a class="inline-block max-w-[18ch] truncate align-bottom hover:underline text-neutral-700 underlin" href="-" title="-">-</a> </td>
                <td class="px-3 py-2 "><div class="bg-green-100  inline-block text-green-700 px-2 py-1 text-sm rounded-md">Upcoming</div></td>
            </tr>


            <tr class="font-normal  border-b border-neutral-200 p-3">
                <td class="px-3 py-2 border-r border-neutral-200 whitespace-nowrap">Async JavaScript & Movie App</td>
                <td class="px-3 py-2 border-r border-neutral-200 whitespace-nowrap">08 PM 21st August</td>
                {{-- <td class="px-3 py-2 border-r border-neutral-200"><a class="inline-block max-w-[18ch] truncate align-bottom hover:underline text-neutral-700 underline" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" title="https://www.youtube.com/watch?v=dQw4w9WgXcQ">https://www.youtube.com/watch?v=dQw4w9WgXcQ</a> </td> --}}
                <td class="px-3 py-2 border-r border-neutral-200"><a class="inline-block max-w-[18ch] truncate align-bottom hover:underline text-neutral-700 underlin" href="-" title="-">-</a> </td>
                <td class="px-3 py-2 "><div class="bg-green-100  inline-block text-green-700 px-2 py-1 text-sm rounded-md">Upcoming</div></td>
            </tr>


            <tr class="font-normal  border-b border-neutral-200 p-3">
                <td class="px-3 py-2 border-r border-neutral-200 whitespace-nowrap">Understanding React js</td>
                <td class="px-3 py-2 border-r border-neutral-200 whitespace-nowrap">08 PM 22nd August</td>
                {{-- <td class="px-3 py-2 border-r border-neutral-200"><a class="inline-block max-w-[18ch] truncate align-bottom hover:underline text-neutral-700 underline" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" title="https://www.youtube.com/watch?v=dQw4w9WgXcQ">https://www.youtube.com/watch?v=dQw4w9WgXcQ</a> </td> --}}
                <td class="px-3 py-2 border-r border-neutral-200"><a class="inline-block max-w-[18ch] truncate align-bottom hover:underline text-neutral-700 underlin" href="-" title="-">-</a> </td>
                <td class="px-3 py-2 "><div class="bg-green-100  inline-block text-green-700 px-2 py-1 text-sm rounded-md">Upcoming</div></td>
            </tr>
        </thead>
        </table>
    </div>
</div>

@endsection()