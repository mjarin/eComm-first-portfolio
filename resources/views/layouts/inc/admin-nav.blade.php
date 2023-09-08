<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand ml-5" href="{{url('/admin/dashboard')}}">eComm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Auth::guard('admin')->user()->name}}&nbsp;&nbsp;&nbsp;
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fa fa-user-md" aria-hidden="true"></i>&nbsp;&nbsp;Profile</a>
          <a class="dropdown-item" href="{{url('/admin/logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a>
        </div>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img  class="rounded-circle" src="{{asset('assets/images/admin.png')}}" alt="admin-img">
    </ul>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </div>
</nav>