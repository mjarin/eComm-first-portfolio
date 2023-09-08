@extends('layouts.front')

@section('title')
 My Wishlist 
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0 font-weight-bold">
        <a href="{{url('/')}}" class="text-dark">Home/</a>
        <a href="{{url('wishlist')}}" class="text-dark">Wishlist</a>
        </h6>
    </div>
</div>

<div class="container py-5">
    <div class="card shadow wishlistDivReload">
        @if($wishlist->count() > 0)

        @foreach ($wishlist as $item)
            <div class="row py-4 px-5 product_data "> 
                <div class="col-md-2 ml-4">
                    <img class="ml-4" width="80" height="70" src="{{asset('assets/upload/product/'.$item->products->image)}}" alt="Product image">
                </div>
                <div class="col-md-2 ml-4">
                 <h5 class="mt-3 font-weight-bold"><b>{{$item->products->name}}</b></h5>
                </div>{{-- end of col-md-3 --}}

                <div class="col-md-2 ml-4">
                    <h5 class="mt-3 font-weight-bold ml-4"><b><b>&#2547;</b>&nbsp;{{$item->products->selling_price}}</b></h5>
                   </div>{{-- end of col-md-2 --}}

                <div class="col-md-2 ml-4">
                <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                    @if($item->products->qty >= $item->prod_qty )
                    <label for="Quantity" class="ml-5">Quantity</label>
                    <div class="input-group mb-3">
                         <button class="input-group-text decrement-btn">-</button>
                         <input type="text" name="quantity" value="1" class="form-control font-weight-bold text-center qty-input">
                         <button class="input-group-text increment-btn">+</button>
                    </div>
                    @else 
                     <h5 class="text-danger font-weight-bold mt-3"><b>Out of stock</b></h5>
                   @endif
                </div>{{-- end of col-md-3 --}} 

                <div class="col-md-2 divcartRemovebutton mt-3 ml-3">
                <button type="button" class="addToCart btn btn-success rounded-circle ml-3"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>   
                <button type="button"  class="btn btn-danger remove-wishlist-item rounded-circle ml-4 ">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
                </div>{{-- end of col-md-2 --}}


            </div>{{-- end of row --}}         
            @endforeach

        @else
        <h4 class="text-center font-weight-bold">No item in your  <i class="fa fa-heart" aria-hidden="true"></i>   Wishlist</h4>
        @endif
        
    </div>{{-- end of card --}}
</div>{{-- end of container --}}
 
@endsection