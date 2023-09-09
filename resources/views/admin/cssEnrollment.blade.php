@extends('layouts.ck-admin')
@section('content')





    {{-- Enrollment details --}}

    <section>
        <div class="container mt-5">
            @include('layouts.alert')
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12 col-sm-12 col-md-12 ">
                    
                    <div class="card mb-5">
                        <div class="card-boy">
                            <div class="p-3">
                                <h2 class="text-dark fw-bolder">CSS Bootcamp Enrollments</h1>
                            </div>
                            <div class="table-responsive">
                            <table class="table table-responsive">
                               
                                    <tr>
                                        <td scope="col">#</th>
                                        <td scope="col">Name</th>
                                        <td scope="col">Email</th>
                                        <th scope="col">Amount paid</th>
                                        <td scope="col">Paid at</th>
                                        
                                        <td scope="col">Campaign </th>
                                        <td scope="col">Purchased Recordings</th>

                                        

                                    </tr>
                               
                                    @foreach ($enrollments as $enrollment)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</th>
                                            <td> <img src="{{ $enrollment->students->avatar }}" alt=""
                                            class="avatar avatar-sm">
                                            <a class="text-dark td-none" href="{{action('AdminController@studentDetails', $enrollment->students->id  )}}">{{ $enrollment->students->name }}</a></td>
                                            <td>{{ $enrollment->students->email }}</td>
                                            
                                            <td>{{ ($enrollment->amountPaid) / 100 }}</td>
                                            <td>{{ $enrollment->created_at->format('d M ')}}</td>
                                            <td>{{$enrollment->students->field3}} </td>
                                            <td>
                                                @if($enrollment->certificateFee > 0)
                                                <div class="rounded-pill bg-success text-white d-inline px-2 py-1" style="font-size: 12px">Recordings</div>
                                                @else
                                                <div class="rounded-pill bg-danger text-white d-inline px-2 py-1" style="font-size: 12px">No Access</div>

                                                @endif
                                            </td>
                                            
                                            

                                            

                                        </tr>
                                    @endforeach

                                    
                            </table>
                            </div>
                            <div class="text-center d-flex justify-content-center">  

                                {{ $enrollments->links() }}
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </section>
@endsection
