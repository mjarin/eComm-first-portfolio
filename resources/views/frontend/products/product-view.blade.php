@extends('layouts.front')

@section('title')
    {{$product->name}}
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0 font-weight-bold">
        <a href="#" class="text-success">All Products /</a>
        <a href="#" class="text-success">{{ $product->name}}
    </div>
</div>

{{-- end of py-3 mb-4 shadow-sm bg-warning border-top --}}
    <div class="container mt-5">
        <div class="card shadow h-100 product_data"> 
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img class="w-100" src="{{asset('assets/upload/product/'.$product->image)}}" alt="Product image">
                    </div>
                    {{-- end of col-md-4 --}}
        
                    <div class="col-md-8" style="position:relative;">
                        <h2 class="mb-0 mr-auto">
                            <span class="text-success">{{$product->name}}</span>
                            @if ($product->trending == '1') 
                            <label style="font-size:16px; position:absolute; right:30px;" class="float-end badge badge-danger tranding-tag">
                           Trending</label>
                            @endif
                        </h2>
                        <hr>
                        
                        <label class="mb-3 text-dark">Original Price : <s><b>&#2547;</b>&nbsp;{{$product->original_price}}</s></label>
                    &nbsp;&nbsp;&nbsp;<label class="font-weight-bold text-dark">Selling Price :&nbsp;&nbsp;<span class="text-danger" style="font-size:20px"><b>&#2547;</b>&nbsp;{{$product->selling_price}}</span></label>
                    <p class="mt-3 text-dark">{!! $product->small_description	!!}</p>
                    <hr>

                    @if ($product->qty > 0)

                    <label class="badge badge-success">In stock</label>  (<small class="text-danger m-2 font-weight-bold">{{ $product->qty}} available</small>)  
                    @else
                    <label class="badge badge-danger">Out of stock</label> 
                    @endif

                    <div class="row mt-2">
                       <div class="col-md-3">
                           <input type="hidden" value="{{$product->id}}" class="prod_id">
                           <label for="Quantity">Quantity</label>
                           <div class="input-group text-center mb-3">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity" value="1" class="form-control qty-input">
                                <button class="input-group-text increment-btn">+</button>
                           </div>
                        </div> 
                <div class="col-md-9 mt-2 mb-3">
                <br>
                @if ($product->qty > 0)
                <button type="button" class="btn btn-warning addToCart  float-start"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;<b>Add to Cart</b></button>
                @endif 
                <button type="button" class="btn btn-outline-success addToWishlist float-start"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp;&nbsp;<b>Add to Wishlist</b></button>
                </div>
                </div>    
                </div>
                {{-- end of col-md-8 --}}
        
                </div>{{-- end of row --}}
            </div>
        </div>
    </div>{{-- end of container-fluid --}}
@endsection

