@extends('layouts.front')

@section('title')
 Categories
@endsection
@section('content')
<div class="py-3 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0 font-weight-bold">
        <a href="#" class="text-success">Category / All Categories</a>
        </h6>
    </div>
</div>

<div class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" style="margin-top:9%;">
                <div class="card">
                    <div class="card-header">
                        <h5><a href="{{url('all-products/')}}" class="text-dark">Categories</a></h5>
                    </div>
                    <ul class="list-group">
                        @foreach ($category as $cate)
                        <li class="list-group-item">
                        <a href="{{url('category_product/'.$cate->id)}}" class="text-dark">{{$cate->name}}</a></li> 
                        @endforeach
                      </ul>
                </div>
            </div>

            <div class="col-md-9">
                <h4 class="my-5" style="margin-left:32%; margin-bottom:-1%; font-weight:bold;">All Categories</h4>
                <div class="row">
                    @foreach ($category as $cate)
                    <div class="col-md-3 mb-3">
                        <a  class="text-decoration-none text-dark " href="{{url('category_product/'.$cate->id)}}">
                        <div class="card">
                            <img class="w-100" height="200" src="{{asset('assets/upload/category/'.$cate->image)}}" alt="category image">
                                <div class="card-body">
                                    <small class="font-weight-bold">{{$cate->name}}</small>
                                </div>
                            </div>
                        </a>
                    </div>            
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection