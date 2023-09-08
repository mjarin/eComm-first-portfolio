@extends('layouts.front')

@section('title')
 My Orders
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header bg-warning">
                <h4 class="pl-2 mt-2  text-success font-weight-bold text-border"> View Order Details
                    <a href="{{url('/my-orders')}}" class="btn btn-outline-success float-right">Go Back to Orders</a>
                </h4>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mt-4 ">
                            <h4 class="text-center">Shipping Details</h4>
                            <label for="">First Name</label>
                            <div class="border p-2 mb-2">{{$orders->fname}}</div>
                            <label for="">Last Name</label>
                            <div class="border p-2 mb-2">{{$orders->lname}}</div>
                            <label for="">Email</label>
                            <div class="border p-2 mb-2">{{$orders->email}}</div>
                            <label for="">Contact No.</label>
                            <div class="border p-2 mb-2">{{$orders->phone}}</div>
                            <label for="">Shipping Address</label>
                            <div class="border p-2 mb-2">
                                {{$orders->address1}},
                                {{$orders->address2}},
                                {{$orders->city}},
                                {{$orders->state}},
                                {{$orders->country}}
                            </div>
                            <label for="">Zip Code</label>
                            <div class="border p-2 mb-2">{{$orders->pincode}}</div>
                            
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <h5 class="text-center">Order Details</h5>
                            <table class="table table-bordered mt-5 text-center">
                                <thead>
                                    <tr class="text-success">
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                    $total =0;
                                  @endphp
                                    @foreach ($orders->orderItems as $items)
                                        <tr>
                                            <td>{{$items->products->name}}</td>
                                            <td>{{$items->qty}}</td>
                                            <td>{{$items->unit_price}}</td>
                                            <td>
                                            <img height="50" width="50" src="{{asset('assets/upload/product/'.$items->products->image)}}" alt=""> 
                                            </td>
                                        </tr> 
                                        @php 
                                        $total += $items->unit_price * $items->qty ;
                                @endphp
                                   @endforeach
                               </tbody>
                            </table>
                            
                            <h6 class="float-right mt-3 mb-3"><b>Grand Total&nbsp;&nbsp;:&nbsp;&nbsp;&#2547;</b>&nbsp;{{$total}}</h6>
                           
                        </div>
                    </div>{{-- end of row --}}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection