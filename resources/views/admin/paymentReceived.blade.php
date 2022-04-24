@extends('layouts.app')
@section('content')
<section class="pb-5">
    <div class="container pt-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9 col-sm-10 col-md-10 ">
                @include('layouts.alert')
                <h1>{{$batch->name}}</h1>
                <p>{{$enrollment->students->name}}</p>
                <p>{{$enrollment->students->email}}</p>
                <p>{{$enrollment->students->mobile}}</p>
                <h5>Payment Status</h5>
                <form action="{{ route('updatePaymentStatus') }}" method="POST" class="form-inlin ">
                    @csrf
                    {{-- <div class="row pl-0 pr-0"> --}}
                      <div class="form-floating mt-3 mb-2 ">
                      
                        <input type="text" id="floatingInput"  class="form-control" name="batchId" placeholder="Password" value="{{$enrollment->batchId}}">
                        <label for="floatingInput" >Batch Id</label>
                      </div>
                    <div class="form-floating mt-3 mb-2 ">
                      
                      <input type="text" id="floatingInput"  class="form-control" name="invoiceId" placeholder="Password" value="{{$enrollment->invoiceId}}">
                      <label for="floatingInput" >Invoice Id</label>
                    </div>
                    <div class="form-floating mt-3 mb-2 ">
                      
                        <input type="text" id="floatingInput"  class="form-control" name="transactionId" placeholder="Password" value="{{$enrollment->transactionId}}">
                        <label for="floatingInput" >Transaction Id</label>
                    </div>
                    <div class="form-floating mt-3 mb-2 ">
                      
                        <input type="text" id="floatingInput"  class="form-control" name="paymentMethod" placeholder="Password" value="{{$enrollment->paymentMethod}}">
                        <label for="floatingInput" >Payment Method</label>
                      </div>
                      <div class="form-floating mt-3 mb-2 ">
                      
                        <input type="text" id="floatingInput"  class="form-control" name="amountPaid" placeholder="Password" value="{{$enrollment->amountPaid}}">
                        <label for="floatingInput" >Amount Paid</label>
                      </div>
                      <div class="form-floating mt-3 mb-2 ">
                      
                        <input type="text" id="floatingInput"  class="form-control" name="hasPaid" placeholder="Password" value="{{$enrollment->hasPaid}}">
                        <label for="floatingInput" >Has Paid</label>
                      </div>
                      <input type="hidden" name="enrollmentId" value="{{$enrollment->id}}">
                    <button type="submit" class="btn btn-outline-primary ">Update Payment Details</button>
  
  
  
  
  
  
                    <div class="">
                      
                    </div>
                    
                    {{-- </div> --}}
                  </form>

@endsection