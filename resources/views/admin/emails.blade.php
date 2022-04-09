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
                                <h3 class="ck-font">Students Newsletter</h3>
                            </div>

                            <table class="table table-responsive-lg">
                                <thead>
                                    <tr>
                                        <th scope="col">Email for Newsletter</th>
                                        <th>Name</th>
                                        <th>mobile</th>
                                        <th>college</th>
                                        <th>course</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->email }}</td>
                                            <td>{{$user->name }}</td>
                                            <td>{{$user->mobile }}</td>
                                            <td>{{$user->college }}</td>
                                            <td>{{$user->course }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
