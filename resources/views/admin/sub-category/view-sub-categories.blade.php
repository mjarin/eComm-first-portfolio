@extends('layouts.admin')

@section('content')

{{-- show Session message style="margin-top:12%;" --}}

    <div class="card" style="margin-top:5rem;">
        <div class="card-header" style="position:relative;">
         <h5>Sub Category List</h5> 
         {{-- show Session message --}}
                @if(Session::get('message'))
                <span class="alert text-center font-weight-bold" style="position: absolute; bottom:5%; right:15%!important;color:#155724!important; background-color: #d4edda!important; width:550px;">
                @php
                $message=Session::get('message');
                if($message){
                    echo $message;
                }else{
                    Session::put('message',null);
                }
                @endphp
                </span>
                @endif 
        </div>
        <div class="card-body">
           <div class="row">               
                <table class="table table-bodrted table-striped">
                    <thead>
                        <th style="width:3%;">SubCategory Id</th>
                        <th style="width:10%;" >SubCategory Name</th>
                        <th style="width:10%;">Catrogry Name</th>
                        <th style="width:10%;">Description</th>
                        <th style="width:10%;">Change Status</th>
                        <th style="width:20%;" class="text-center">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($sub_categories as $data)
                        <tr>
                            <td class="text-center">{{$data->id}}</td>
                            <td class="text-left">{{$data->name}}</td>
                            <td class="text-left">{{$data->category->name}}</td>
                            <td class="text-left">{{$data->description}}</td>
                            {{-- <td class="text-left">{{$data->Status}}</td> --}}
                            
                            <td class="text-center">
                                {{-- {{$data->status}} --}}
                                @if($data->status == '1')
                                
                                <a href="#" class="btn btn-success btn-sm">Active</a>
                                @else
                                <a href="#" class="btn btn-danger btn-sm">Deactive</a>
                                @endif
                            </td>
                            <td class="text-center" >
                                @if($data->status == '1')
                                <a href="{{url('change-subcate-status/'.$data->id)}}" class="btn btn-success btn-sm"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                @else
                                <a href="{{url('change-subcate-status/'.$data->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                                @endif
                                <a href="{{url('edit-sub-cate/'.$data->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{url('delete-sub-category/'.$data->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr> 
                        @endforeach
                        
                    </tbody>
                </table>
            
           </div>
        </div>
    </div>
@endsection
