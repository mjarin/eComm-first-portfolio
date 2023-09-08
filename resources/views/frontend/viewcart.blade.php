@extends('layouts.front')

@section('title')
 My Cart 
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0 font-weight-bold">
        <a href="{{url('/')}}" class="text-dark">Home/</a>
        <a href="{{url('cart')}}" class="text-dark">Cart</a>
        </h6>
    </div>
</div>

<div class="container py-5">
    <div class="card shadow cartDivReload">
        @if ($cartitems->count() > 0 ) 

        <div class="card-body"> 
            @php $total = 0; @endphp
            @foreach ($cartitems as $item)
            <div class="row product_data">
                <div class="col-md-2 mt-5">
                    <img class="ml-5" width="80" height="80" src="{{asset('assets/upload/product/'.$item->products->image)}}" alt="Product image">
                </div>
                <div class="col-md-3 my-auto">
                 <p><b>{{$item->products->name}}</b></p>
                </div>{{-- end of col-md-3 --}}

                <div class="col-md-2 my-auto">
                    <p><b><b>&#2547;</b>&nbsp;{{$item->products->selling_price}}</b></p>
                   </div>{{-- end of col-md-2 --}}

                <div class="col-md-2 mt-3">
                    <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                    @if($item->products->qty >= $item->prod_qty )
                    <label for="Quantity">Quantity</label>
                    <div class="input-group mb-3">
                         <button class="input-group-text changeQuantity decrement-btn">-</button>
                         <input type="text" name="quantity" value="{{$item->prod_qty}}" class="form-control font-weight-bold text-center qty-input">
                         <button class="input-group-text changeQuantity increment-btn">+</button>
                    </div>
                    @php $total += $item->products->selling_price * $item->prod_qty ; @endphp  
                    @else 
                     <h6 class="mt-4 text-danger font-weight-bold"><b>Out of stock</b></h6>
                   @endif
                </div>{{-- end of col-md-3 --}} 

                <div class="col-md-3 mt-5 divcartRemovebutton">
                <button href="" class="btn btn-danger rounded-circle delete-cartItem cartRemovebutton">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
                </div>{{-- end of col-md-2 --}}
            </div>{{-- end of row --}}         
            @endforeach
        </div>{{-- end of card-body --}}
        <hr>
        <div class="total-price-div py-4 ">
        <h5 class="mb-5"><span class="float-left"><b id="total-price">Total Price :</b></span><span><b  id="total-price-value"><b>&#2547;</b>&nbsp;{{$total }}</b>&nbsp;&nbsp;&nbsp;&nbsp;</span></h5>
        <h5 class="returnToHome">&nbsp;&nbsp;&nbsp;&nbsp;<a class="text-success" href="{{url('/')}}"> <-- Return to home</a>    
        <a href="{{url('/checkout')}}" class="btn btn-outline-success float-right font-weight-bold">Proceed to Checkout </a>
        </h5>
        </div>
            
        @else
        <div class="card-body text-center">
         <h2>Your&nbsp;&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Cart is empty</h2>
         <a href="{{url('/')}}" class="btn btn-outline-success float-right mt-3">Continue Shopping</a>
        </div>
        @endif
        
    </div>{{-- end of card --}}
</div>{{-- end of container-fluid --}}
 
@endsection