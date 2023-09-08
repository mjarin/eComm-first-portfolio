@extends('master')
@section('content')

<div class="container mt-5 custom-css">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
        <form action="login" method="POST" class="border p-5">
            @csrf
            <h3 class="ml-5 mb-5" >Login to your account</h3>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" >
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-block btn-secondary">Login</button>
        </form>
       
        </div>   
    </div>
</div>

@endsection