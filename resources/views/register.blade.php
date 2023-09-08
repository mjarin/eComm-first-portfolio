@extends('master')
@section('content')

<div class="container custom-css mt-4">
    <div class="row d-flex justify-content-center">
        
        <div class="col-sm-6">
        <form action="register" method="POST" class="border p-5">
            @csrf   
            <h3 class="ml-5 mb-4" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCreate an account.</h3>
            <div class="form-group">
            <label>User Name </label>
            <input type="text" name="name" class="form-control" placeholder="Full Name" >   
          </div>

        <div class="form-group">
            <label>Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Email" >   
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <!-- <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" name="conpass" class="form-control" placeholder="Re-enter Password">
        </div> -->

        <div class="mt-4">
        <button type="submit" class="btn btn-block btn-secondary">Create Account</button>
      </div>
        </form>
       
        </div>   
    </div>
</div>

@endsection