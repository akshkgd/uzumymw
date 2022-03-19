@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-9 col-md-9">
                <div class="card pb-0 shadow-lg" style="border:0px solid;">
                    <div class="card-boy">

                        <section class="bg-primary-alt t has-divider mt-0 pt-0 rounded-lg"  style="background-color: #ceead6;" data-overlay>
                            <div class="container pt-4 pb-0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 col-xl-8 text-center">
                                        <h1 class="h2 m-0 ck-font" style="color:#4eb76a;"> Payment Invoice </h1>

                                        
                                    </div>
                                </div>
                            </div>
                            <div class="divider">
                                <img src="{{asset('assets/img/dividers/divider-2.svg')}}" alt="graphical divider" data-inject-svg />
                            </div>
                        </section>
                        <div class="px-3">
                            <img src="{{asset('assets/img/codekaro-dark.png')}}" alt="" class="avatar avatar-lg">
                            <p class=" m-0">Codekaro</p>
                            <p class=" m-0 small">585/9 Lohatti Road</p>
                            <p class=" m-0 small">Prayagraj, 211003</p>

                        </div>

                        <div class="p-3">
                            <div class="d-lg-flex justify-content-lg-between">
                                
                                <div class="">
                                    <h1 class="lead m-0">Billing To</h1>
                                        <p class=" m-0">{{$invoice->students->name}}</p>
                                        <p class=" m-0">{{$invoice->students->email}}</p>
                                        <p class=" m-0">{{$invoice->students->mobile}}</p>
                                </div>

                                <div class="pt-3">
                                    @if ($invoice->hasPaid == 1)
                                    <span class="badge badge-pill badge-ck-success lead m-o ">Paid</span>
                                    @endif
                                    @if ($invoice->hasPaid == 0)
                                    <span class="badge badge-pill badge-ck-danger lead m-o ">Payment Due</span>
                                    @endif
                                    <h1 class="lead m-0">Invoice Id: {{$invoice->invoiceId}}</h1>
                                    <p class=" text-muted mb-1">Generated at: {{$invoice->created_at->format('d-M-Y')}}</p>
                                    
                                </div>
                                
                            </div>
                            
                            @if ($invoice->hasPaid == 1)
                                <div class="div pt-3">
                                    <p class="m-0">Transaction Id: <span class="text-dark">{{$invoice->transactionId}}</span> </p>
                                    <p class="m-0">Payment Method: <span class="text-dark">{{$invoice->paymentMethod}}</span></p>
                                    <p class="m-0">Amount Paid: <span class="text-dark">{!!($invoice->amountPaid/100)!!}</span></p>
                                    <p class="m-0">Paid On: <span class="text-dark">{{$invoice->paidAt}}</span></p>
                                </div>
                            @endif
                            <div class="mt-5" style="border:0px solid;"> 
                                <table class="table table-responsie " style="border:1px solid white;">
                                    <tr style="border:0px solid;">
                                        <th>Description</th>
                                        <th>Rate</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                        <td>{{$invoice->batch->name}}</td>
                                        <td>{{$invoice->amountPayable}}</td>
                                        <td>{{$invoice->amountPayable}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><h4 class="ck-font">Total</h1></td>
                                        <td><p class="lead">₹{{$invoice->amountPayable}}</p></td>
                                    </tr>
                                    
                                </table>
                                <div class="text-right">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="bg-primary-3-alt">
                            <p class="m-0 px-5 text-center small p-2">This is computer generated invoice no signature required.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection