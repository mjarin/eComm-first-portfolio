@extends('layouts.admin')

@section('content')
<div class="container">               
    <div class="row">
        <div class="col-md-12">
    <div class="card mt-5">
        <div class="card-header bg-secondary  mb-5">
        <h4 class="text-white font-weight-bold">Registered Users</h4> 
        </div>
        <div class="card-body">
           <div class="row">               
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>View User</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td  class="pl-4">{{$user->id}}</td>
                            <td class="pl-4">{{$user->name.' '.$user->lname}}</td>
                            <td class="pl-4">{{$user->role_as == '0' ? 'Customer' : 'Admin'}}</td> 
                            <td class="pl-4">{{$user->email}}</td>
                            <td class="pl-4">{{$user->phone}}</td>
                            <td class="pl-5">
                                <a href="{{url('view-user/'.$user->id)}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr> 
                        @endforeach
                        
                    </tbody>
                </table>
            
           </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection