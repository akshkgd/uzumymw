@extends('layouts.app')
@section('content')
<div class="navbar-container ">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-0 " data-overlay >
        @include('layouts.header')
    </nav>
</div>

{{-- Enrollment details --}}

<section >
    <div class="container pt-5 mt-5">
        @include('layouts.alert')
        <div class="row justify-content-center">
          <div class="col-lg-12 col-xl-12 col-sm-12 col-md-12 ">
              <div class="card">
                <div class="card-boy"><div class="p-3">
                    <h3 class="">Student Details</h3>
                    <a href="{{ action('TeacherController@generateAllCertificate', $batch->id) }}" class="btn btn-primary px-5">Generate All certificates</a>
                </div>

                    <table class="table table-responsive">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col" class="text-small">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Date</th>
                            <th scope="col">Certificate</th>
                            <th scope="col">Progress</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($enrollments as $enrollment)
                            <tr>
                                <th scope="row">{{++$i}}</th>
                                <td> {{$enrollment->students->name}}</td>
                                <td class="">{{$enrollment->students->email}}</td>
                                <td class=""><a href="tel:+{{$enrollment->students->mobile}}">{{$enrollment->students->mobile}}</a></td>
                                <td>
                                    <div>
                                        {{ \Carbon\Carbon::parse($enrollment->paidAt)->format('d M y') }}  {{$enrollment->amountPaid / 100}}Rs
                                    </div>
                                </td>
                                
        
                                
                                <td>
                                    @if ($enrollment->certificateId =='')
                                    <a href="{{action('TeacherController@generateCertificate', $enrollment->id )}}" class="card-link">generate certificate</a>
                                    @else
                                    {{$enrollment->certificateId}}    
                                    @endif
                                </td>
                                <td><a href="{{ url('/progress/' . $enrollment->id) }}">Progress</a></td>

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