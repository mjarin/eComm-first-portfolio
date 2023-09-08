<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top:140px;
  max-width: 600px;
  min-height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>
</head>
<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                      @if(Session::has('error-msg'))
                       <p class="text-danger my-2" >{{Session::get('error-msg')}}</p>
                      @endif
                        <form  method="POST" action="{{url('/admin-login')}}" id="login-form" class="form" >
                            @csrf
                            <h3 class="text-center text-info">Admin Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control" >
                                @if($errors->first('email'))
                                <div class="alert text-danger">{{$errors->first('email')}}</div>
                                @endif
                              </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" >
                                @if($errors->first('password'))
                                <div class="alert text-danger">{{$errors->first('password')}}</div>
                                @endif
                              </div>
                            <div class="form-group">
                                <label for="remember" class="text-info"><span>Remember</span> <span><input id="remember" name="remember" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                    {{-- <div class="col-md-12 mt-3">
                      @if ($errors->any())
                        <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                    </div> --}}
                </div>
            </div>
        </div>
    </div>   
 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 

{{-- For Sweet Alert ...............................--}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
  @if(Session::has("status"))
  <script>
   swal("{!! Session::get('status') !!}");
  </script>
   @endif

 @yield('scripts')   
</body>
</html>