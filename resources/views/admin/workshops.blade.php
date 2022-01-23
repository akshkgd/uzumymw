@extends('layouts.ck-admin')
@section('content')

    <div class="container mt-5">
        <div class="card card-body">
            <h4 class="text-dark">Workshops Overview</h4>
            <div class="row mt-4">
                <div class="col-6 col-md">
                    <div class="stat-cell stat-cell-red p-2">
                        <p class="stat-cell-title">Total Workshops</p>
                        <p class="stat-cell-value">{{ $totalWorkshops }}</p>
                    </div>

                </div>

                <div class="col-6 col-md">
                    <div class="stat-cell stat-cell-purple p-2">
                        <p class="stat-cell-title">Total Users</p>
                        <p class="stat-cell-value">{{ $totalUsers }}</p>
                    </div>

                </div>
                <div class="col-6 col-md">
                    <div class="stat-cell stat-cell-yellow p-2">
                        <p class="stat-cell-title">Paid Users</p>
                        <p class="stat-cell-value">{{ $paidUsers }}</p>
                    </div>

                </div>

                <div class="col-6 col-md">
                    <div class="stat-cell stat-cell-green p-2">
                        <p class="stat-cell-title">Conversions</p>
                        <p class="stat-cell-value">{{ $conversionRate }}</p>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <section>
        <div class="container mt-5">
            @include('layouts.alert')
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12 col-sm-12 col-md-12 ">

                    <div class="card mb-5">
                        <div class="card-boy">
                            <div class="p-3">
                                <h3 class="fs-5 text-dark">Latest Workshops</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-responsive">

                                    <tr>
                                        <td scope="col">#</th>
                                        <td scope="col">Name</th>
                                        <td scope="col">Teacher</th>
                                        <td scope="col">Total Students</th>
                                        <td scope="col">Duration</th>
                                        <td scope="col">Conversions </th>
                                        <td scope="col">Actions</th>

                                    </tr>

                                    @foreach ($workshops as $workshop)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</th>
                                            <td>{{$workshop->name}}</td>
                                            <td>{{$workshop->teacher->name}}</td>
                                            <td>{{ $workshop->users }}</td>
                                            <td>{{ Carbon\Carbon::parse($workshop->startDate)->format('D, d M Y') }}</td>
                                            <td>{{ round($workshop->conversions, 0)  }}</td>
                                            <td>
                                                <a href=""
                                                    class="">Edit</a>
                                            </td>

                                        </tr>
                                    @endforeach


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Enrollment details --}}

@endsection
