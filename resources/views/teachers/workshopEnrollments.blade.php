@extends('layouts.app')
@section('content')
    <div class="navbar-container ">
        <nav class="navbar navbar-expand-lg navbar-light border-bottom-0 " data-overlay>
            @include('layouts.header')
        </nav>
    </div>

    {{-- Enrollment details --}}

    <section>
        <div class="container pt-5 mt-5">
            @include('layouts.alert')
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12 col-sm-12 col-md-12 ">
                    <div class="card">
                        <div class="card-boy">
                            <div class="p-3">
                                <h3 class="ck-font">Students Enrolled {{$enrollments->count()}}</h3>
                            </div>

                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="">#</th>
                                        <th scope="">Name</th>
                                        <th scope="">Email</th>
                                        <th scope="">Source</th>
                                        <th scope="">Medium</th>
                                        <th scope="">Campaign</th>
                                        <th scope="">Enrolled on </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enrollments as $enrollment)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td> <img src="{{ $enrollment->student->avatar }}" alt=""
                                            class="avatar avatar-sm"> {{ $enrollment->student->name }}</td>
                                            <td>{{ $enrollment->student->email }}</td>
                                            <td> {{ $enrollment->student->field1 }}</td>
                                            <td>{{ $enrollment->student->field2 }}</td>
                                            <td>{{ $enrollment->student->field3 }}</td>
                                            <td>{{ $enrollment->created_at->format('d M ')}}</td>
                                            <td>{{ $enrollment->created_at}}</td>
                                            
                                            
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-boy">
                            <div class="p-3">
                                <h4 class="ck-font">Students failed to book the slot</h3>
                            </div>

                            <table class="table table-responsive-lg">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">College</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Enrolled on </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($failedEnrollments as $enrollment)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td> <img src="{{ $enrollment->student->avatar }}" alt=""
                                            class="avatar avatar-sm"> {{ $enrollment->student->name }}</td>
                                            <td>{{ $enrollment->student->email }}</td>
                                            <td>{{ $enrollment->student->college }}</td>
                                            <td>{{ $enrollment->student->course }}</td>
                                            <td>{{ $enrollment->created_at->format('d M')}}</td>

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
@endsection
