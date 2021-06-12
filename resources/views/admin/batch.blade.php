@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row ">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Product Details</h2>
            </div>
            <div class="pull-right pb-20 ">
                <a class="btn btn-primary" href="{{url('/admin/create/batch')}}"> Add New Batch</a>
            </div>
        </div>
    </div>

   

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Start date</th>
                <th>Enrollments</th>
                <th>Paid</th>
                <td>Unpaid</td>
                <th>Earnings</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($batches as $batch)
            <tr>
               <td>{{ ++$i }}</td>
               <td>  <a href="{{action('AdminController@batchEnrollment', $batch->id )}}">{{$batch->name}}</a>   </td>
               <td>{{$batch->startDate}}</td>
               <td>{{$batch->enrollments}}</td>
               <td>{{$batch->paidEnrollments}}</td>   
               <td>{{$batch->unpaidEnrollments}}</td> 
               <td>{{$batch->earnings}}</td>
               <td> 
                   <a href="{{action('AdminController@addTopics', Crypt::encrypt($batch->id) )}}" class="">Add Topics</a>
               </td>
            </tr> 
            @endforeach
        </table>
</div>
 
@endsection