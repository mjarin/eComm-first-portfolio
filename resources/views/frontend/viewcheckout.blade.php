@extends('layouts.front')

@section('title')
 Checkout 
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0 font-weight-bold">
        <a href="{{url('/')}}" class="text-dark">Home /</a>
        <a href="{{url('checkout')}}" class="text-dark">Checkout</a>
        </h6>
    </div>
</div>

<div class="container mt-5">
    <form action="{{url('place-order')}}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-7">
                <div class="card py-2">
                    <div class="card-body">
                        <h6 class="font-weight-bold">Shipping Details</h6>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6 mt-3">
                                <label for="first_name">First Name</label>
                                <input type="text" name="fname" class="form-control firstname" value="{{Auth::user()->name}}">
                                <span id="fname_error" class="text-danger mt-5"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="lname" class="form-control lastname" value="{{Auth::user()->lname}}">
                                <span id="lname_error" class="text-danger mt-3"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="Email">Email</label>
                                <input type="text" name="email" class="form-control email" value="{{Auth::user()->email }}">
                                <span id="email_error" class="text-danger mt-3"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="phone number">Phone Number</label>
                                <input type="text" name="phone" class="form-control phone" value="{{Auth::user()->phone}}">
                                <span id="phone_error" class="text-danger mt-3"></span>
                            </div>
    
                            <div class="col-md-6 mt-3">
                                <label for="Address 1">Address 1</label>
                                <input type="text" name="address1" class="form-control address1" value="{{Auth::user()->address1}}">
                                <span id="address1_error" class="text-danger mt-3"></span>
                            </div>
    
                            <div class="col-md-6 mt-3">
                                <label for="Address2">Address 2</label>
                                <input type="text" name="address2" class="form-control address2" value="{{Auth::user()->address2}}">
                                <span id="address2_error" class="text-danger mt-3"></span>
                            </div>
    
                            <div class="col-md-6 mt-3">
                                <label for="City">City</label>
                                <input type="text" name="city" class="form-control city" value="{{Auth::user()->city}}">
                                <span id="city_error" class="text-danger mt-3"></span>
                            </div>
    
                            <div class="col-md-6 mt-3">
                                <label for="state">State</label>
                                <input type="text" name="state" class="form-control state" value="{{Auth::user()->state}}">
                                <span id="state_error" class="text-danger"></span>
                            </div>
    
                            <div class="col-md-6 mt-3">
                                <label for="country">Country</label>
                                <input type="text" name="country" class="form-control country" value="{{Auth::user()->country}}">
                                <span id="country_error" class="text-danger"></span>
                            </div>
    
                            <div class="col-md-6 mt-3">
                                <label for="pinCode">Pin Code</label>
                                <input type="text" name="pincode" class="form-control pincode" value="{{Auth::user()->pincode}}">
                                <span id="pincode_error" class="text-danger"></span>
                            </div>
                            
                            
    
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h6>Order Details</h6>
                        @if($cartitems->count()>0)
                        <div class="mb-5">
                            <table class="table table-striped mt-4">
                                <thead>
                                    <tr>
                                        <th>Product's Name</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                    $total = 0;
                                    @endphp
                                    @foreach($cartitems as $item)
                                    <tr>
                                        <td>{{$item->products->name}}</td>
                                        <td>
                                            @if($item->products->qty >= $item->prod_qty )
                                            {{$item->prod_qty}}
                                            @else
                                                <b class="text-danger">Out of Stock</b>
                                            
                                            @endif
                                        </td>
                                        <td><b>&#2547;</b>&nbsp;{{$item->products->selling_price}}</td>
                                    </tr>
                                    @php 
                                    $total += $item->products->selling_price * $item->prod_qty ;
                                    @endphp
                                    @endforeach
                                    
                                </tbody>
                            </table>
    
                            <h6 class="float-right mt-3 mb-5"><b>Grand Total :&nbsp;&nbsp;&#2547;</b>&nbsp;{{$total}}<span class="mr-5"></span></h6> 
                            <hr>
                        </div>
                        <div class="PYOdiV">
                            <input type="hidden" name="payment_mode" value="COD">
                            <h4 class="text-center text-success font-weight-bold">Place You Order</h4>
                            <button type="submit" class="btn btn-success text-dark my-3 ml-5 font-weight-bold">Cash On Delivery</button>
                            <a href="{{url('/checkout-online')}}" class="btn btn-warning text-dark font-weight-bold">Pay Online (sslcommerz)</a>
                            {{-- <button type="button" class="btn btn-warning text-dark font-weight-bold bKashpay-button">Pay Online</button> --}}
                        </div> 
                    </div>
                </div>
            </div>
        </div>{{-- end of row --}}
    </form>
    @else
    <hr>
    <div class="card-body text-center">
    <h5>No Products in&nbsp;&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Cart</h5> 
    </div>

    @endif 
</div>{{-- end of container --}}
@endsection

{{-- @section('scripts')  
@endsection --}}



                    
                        
