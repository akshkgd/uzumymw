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
                                <h3 class="fs-5 text-dark">Progress Tracking</h3>
                            </div>
                            <div class="table-responsive">
                            <table class="table table-responsive">
                               
                                    <tr>
                                        
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Video Watching</th>
                                        <th scope="col">Time Spent</th>
                                        <th scope="col">Times Visited</th>
                                        <th scope="col">First Access</th>
                                        <th scope="col">Last Access</th>    
                                        
                                        

                    

                                    </tr>
                               
                                    @foreach ($courseProgress as $progress)
                                        <tr>
                                            
                                            <td class="d-fle " style="gap: 4px; align-items:center; "> 
                                                <a class="text-dark td-none" style="border:none" href="{{action('AdminController@studentDetails', $progress->students->id  )}}">{{ $progress->students->name }}</a>
                                        </td>
                                            <td>{{ $progress->students->email }}</td>
                                            <td>{{ $progress->batch->name }}</td>
                                            
                                            
                                            <td>{{ $progress->content->title }}</td>
                                            <td>{{ $progress->timeSpent }}m</td>

                                            <td>{{ $progress->visited }}</td>
                                            <td>{{ \Carbon\Carbon::parse($progress->firstAccess)->format('l, h:i A, d F Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($progress->lastAccess)->format('l, h:i A, d F Y') }}</td>




                                           
                                            

                                           

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
@endsection
