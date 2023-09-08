
@extends('layouts.front')

@section('title')
{{$category->name}}
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div style="margin-left:0!important; margin-right:0!important;">
        <h6 class="mb-0 pl-5 font-weight-bold text-success">Category / {{$category->name}}</h6>
    </div>
</div>

<div class="py-2">
    <div class="container-fluid">
        <h5 style="margin-left:48%; margin-bottom:-1%; font-weight:bold;">{{$category->name}}</h5>
        <br>
        <div class="row">
            <div class="col-md-3">
                <div class="card mt-4">
                    <div class="card-header">
                    <h5><a href="{{url('all-products/')}}" class="text-dark">All Categories</a></h5>
                    </div>
                    <ul class="list-group">
                        @foreach ($allCate as $cate)
                        <li class="list-group-item">
                        <a href="{{url('category_product/'.$cate->id)}}" class="text-dark">{{$cate->name}}</a></li> 
                        @endforeach
                      </ul>
                </div>

            </div>



            <div class="col-md-9 mt-4">
                <div class="row">
                   @foreach ($products as $prod)
                       <div class="col-md-3 mb-3">
                           <div class="card">
                            <a href="{{url('category/'.$category->id.'/'.$prod->id)}}" class="text-dark">
                               <img class="w-100" height="200" src="{{asset('assets/upload/product/'.$prod->image)}}" alt="product image">
                                   <div class="card-body text-center ">
                                       <small class="font-weight-bold">{{$prod->name}}</small><br>
                                           <small class="ml-4 mt-2 font-weight-bold text-danger">৳ {{$prod->selling_price}}</small>
                                           <small class="mt-2 ml-2"><s>৳ {{$prod->original_price}}</s></small>
                                   </div>       
                                </a>
                        </div>
                    </div>                 
                @endforeach 
            </div>
            </div>                       
        </div>
    </div>
</div>

@endsection