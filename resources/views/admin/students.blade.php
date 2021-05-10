@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row ">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Product Details</h2>
            </div>
            <div class="pull-right pb-20 ">
                <a class="btn btn-primary" href="{{url('/product/create')}}"> Add New Product</a>
            </div>
        </div>
    </div>

   

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>College</th>
                <th>Course</th>
                <th>Last Activity</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($users as $user)
            <tr>
               <td>{{ ++$i }}</td>
               <td>  <a href="{{action('AdminController@studentDetails', $user->id )}}">{{$user->name}}</a>   </td>
               <td>{{$user->email}}</td>
               <td>
                   <a href="tel:{{$user->mobile}}" class='link'>{{$user->mobile}}</a>
               </td>
               <td>{{$user->college}}</td>
               <td>{{$user->course}}</td>
               <td>{{$user->lastActivity->format('D, d M Y h:i A')}}</td>   
               <td></td> 
            </tr> 
            @endforeach
        </table>
</div>
 
@endsection