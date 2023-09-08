@extends('layouts.admin')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
         <h5>Category List</h5> 
        </div>
        <div class="card-body">
           <div class="row">               
                <table class="table table-bodrted table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($category as $data)
                        <tr>
                            <td class="pl-4">{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td><img class="cate-img" src="{{asset('assets/upload/category/'.$data->image)}}" alt=""></td>
                            <td>
                                <a href="{{url('edit-cate/'.$data->id)}}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{url('delete-category/'.$data->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr> 
                        @endforeach
                        
                    </tbody>
                </table>
            
           </div>
        </div>
    </div>
@endsection