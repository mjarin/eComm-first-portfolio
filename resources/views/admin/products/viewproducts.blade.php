@extends('layouts.admin')

@section('content')
    <div class="card" style="margin-top:8%;">
        <div class="card-header">
         <h5>Products List</h5> 
        </div>
        <div class="card-body">
           <div class="row">               
                <table class="table table-bodrted">
                    <thead>
                        <th>Id</th>
                        <th>Product</th>
                        <th>Name</th>
                        <th style="margin-right:20px;">Category Id</th>
                        <th>Info</th>
                        <th>Options</th>
                    </thead>
                    <tbody>
                        @foreach ($products as $data)
                        <tr>
                            <td class="pl-4">{{$data->id}}</td>
                            <td class="pl-4"><img class="cate-img" src="{{asset('assets/upload/product/'.$data->image)}}" alt=""></td>
                            <td>{{$data->name}}</td>
                            <td class="pl-5">{{$data->cate_id}}</td>
                            <td><p class="font-weight-bold" >Original Price:&nbsp&nbsp{{$data->original_price}} TK</p>
                                <p class="font-weight-bold" >Selling Price:&nbsp&nbsp{{$data->selling_price}} Tk</p>
                                <p class="font-weight-bold" >Total Stock:&nbsp&nbsp{{$data->qty}}</p>
                            </td>
                            <td>
                                <a href="{{url('view-product/'.$data->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="{{url('edit-product/'.$data->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{url('delete-product/'.$data->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                               
                            </td>
                        </tr> 
                        @endforeach
                        
                    </tbody>
                </table>
            
           </div>
        </div>
    </div>
@endsection