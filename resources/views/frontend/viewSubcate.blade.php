@extends('layouts.front')

@section('title')
 Categories
@endsection

@section('content')
<div class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 mt-5">
                <div class="card  mt-4">
                    <div class="card-header">
                        <h5>All Categories</h5>
                    </div>
                    <ul class="list-group">
                        @foreach ($sub_category as $subcate)
                        <li class="list-group-item"><a href="" class="text-dark">{{$subcate->name}}</a></li> 
                        @endforeach
                    
                      </ul>

                </div>
            </div>
            <div class="col-md-10">
                <h4 class="my-4 ml-5">All Categories</h4>
                <div class="row">
                    {{-- @foreach ($category as $cate)
                    <div class="col-md-3 mb-3">
                        <a  class="text-decoration-none text-dark " href="{{url('category_product/'.$cate->slug)}}">
                        <div class="card h-100">
                            <img style="width:100%!important;" class="trending-cate" src="{{asset('assets/upload/category/'.$cate->image)}}" alt="category image">
                                <div class="card-body">
                                    <h5>{{$cate->name}}</h5>
                                    {{-- <p>{{$cate->description}}</p> --}}
                                {{-- </div>
                            </div>
                        </a>
                    </div>            
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection