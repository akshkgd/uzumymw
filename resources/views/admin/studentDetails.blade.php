
@extends('layouts.admin')

@section('content')
<!-- Content -->
<div class="content card p-0 pt-20">
    <div class="text-center">
        <img src="{{$user->avatar}}" class="img-fluid rounded-circle" alt="">
        <h2 class="m-0">{{$user->name}}</h1>
        <p class="m-0 p-0"> <span class="text-muted">Joined On</span> {{$user->created_at->format('d M Y')}}</p>
        <p class="text-muted p-0 mt-0 pb-5">Last Activity {{$user->lastActivity->format('D, d M Y h:i A')}}</p>
        <div class="pt-10">
            @if ($user->status == 1)
            <a href="{{action('AdminController@banStudent', $user->id)}}" class="btn btn-danger">Ban Account</a> 
            @else
            <a href="{{action('AdminController@activateStudent', $user->id)}}" class="btn btn-success">Activate Account</a>
            @endif
            @if($user->role == 0)
            <a href="{{action('AdminController@makeTeacher', $user->id)}}" class="btn btn-primary">Upgrade</a>
            @else
            <a href="{{action('AdminController@downgradeTeacher', $user->id)}}" class="btn btn-secondary">Downgrade</a>
            
            @endif
            
            
           
            
        </div>
       
    </div>
<div class="table-responsive">
    <table class="table table-responsive border-top mt-20 pl-0 pr-0">
        <tr>
            <th>Email</th>
            <th>Mobile</th>
            <th>College</th>
            <th>Level</th>
            <th width="280px">Action</th>
        </tr>
        
        <tr>
           <td>{{$user->email}}</td>
           <td>  <a href="{{action('AdminController@studentDetails', $user->id )}}">{{$user->name}}</a>   </td>
           <td>{{$user->mobile}}</td>
           <td>{{$user->college}}</td>
           <td>Begginer</td>    
        </tr> 
       
    </table>
</div>
    
</div>

<div class="content">
    <h3>Enrollments</h2>
        <div class="card p-0">
            <table class="table pl-0 pr-0">
                <tr>
                    <th>#</th>
                    <th>Course</th>
                    <th>Enrolled On</th>
                    <th>Fees</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($enrollments as $enrollment)
                @if ($enrollment->hasPaid ==1)
                <tr class="table-success">
                @else
                   <tr>
                @endif
                
                   <td>{{$enrollment->batchId}}</td>
                   <td>{{$enrollment->userId}} </td>
                   <td>{{$user->mobile}}</td>
                   <td>{{$user->college}}</td>
                   <td>Begginer</td>    
                </tr>  
                @endforeach
                
               
            </table>
        </div>
</div>
@endsection