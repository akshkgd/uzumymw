@extends('layouts.ck-admin')
@section('content')
    

    {{-- Enrollment details --}}

    <section>
        <div class="container pt-5 mt-5">
            @include('layouts.alert')
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12 col-sm-12 col-md-12 ">
                    <h4 class="">{{$batch->name}}</h1>
                    <div class="card">
                        <div class="card-boy">
                            <div class="p-3">
                                <h3 class="ck-font">Students Enrolled</h3>
                            </div>

                            <table class="table table-fluid">
                                <tdead>
                                    <tr>
                                        <td scope="col">#</th>
                                        <td scope="col">Name</th>
                                        <td scope="col">Email</th>
                                        <td scope="col">Mobile</th>
                                        <td scope="col">Enrolled on </th>
                                        <td scope="col">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paidEnrollments as $enrollment)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</th>
                                            <td> <img src="{{ $enrollment->students->avatar }}" alt=""
                                            class="avatar avatar-sm"> {{ $enrollment->students->name }}</td>
                                            <td>{{ $enrollment->students->email }}</td>
                                            <td>{{ $enrollment->students->mobile }}</td>
                                            <td>{{ $enrollment->created_at->format('d M ')}}</td>
                                            <td>
                                                <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id) )}}" class="">Payment Received</a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-boy">
                            <div class="p-3">
                                <h4 class="ck-font">Students with pending Payment</h3>
                            </div>

                            <table class="table table-responsive-lg">
                                
                                    <tr>
                                        <td scope="col">#</th>
                                        <td scope="col">Name</th>
                                        <td scope="col">Email</th>
                                        <td scope="col">Mobile</th>
                                        <td scope="col">Enrolled on </th>
                                        <td scope="col">Actions</th>
                                    </tr>
                               
                                <tbody>
                                    @foreach ($unpaidEnrollments as $enrollment)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</th>
                                            <td> <img src="{{ $enrollment->students->avatar }}" alt=""
                                            class="avatar avatar-sm"> {{ $enrollment->students->name }}</td>
                                            <td>{{ $enrollment->students->email }}</td>
                                            <td>{{ $enrollment->students->mobile }}</td>
                                            <td>{{ $enrollment->created_at->format('d M')}}</td>
                                            <td>
                                                <a href="{{action('AdminController@paymentReceived', Crypt::encrypt($enrollment->id) )}}" class="">Payment Received</a>
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
@endsection
