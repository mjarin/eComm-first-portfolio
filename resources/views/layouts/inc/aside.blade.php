
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-5 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    {{-- <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">eComm</span>
      </a>
    </div> --}}
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav mt-3">
        <li class="nav-item {{Request::is('/admin/dashboard') ? 'active':''}} ">
          <a class="nav-link text-white  bg-gradient-primary" href="{{url('/admin/dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>       
      {{-- FOR CATEGORY --}}
      
        <li class="nav-item {{ Request::is('category') ? 'active':'' }}">
          <a class="nav-link text-white " href="{{url('category')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">category</i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
        
        <li class="nav-item {{ Request::is('add-category') ? 'active':'' }}">
          <a class="nav-link text-white " href="{{url('add-category')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Add Category</span>
          </a>
        </li>
         {{-- FOR SUB-CATEGORY --}}
      
         <li class="nav-item {{ Request::is('/view-sub-categories') ? 'active':'' }}">
          <a class="nav-link text-white " href="{{url('/view-sub-categories')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">category</i>
            </div>
            <span class="nav-link-text ms-1">Sub Categories</span>
          </a>
        </li>
        
        <li class="nav-item {{ Request::is('add-sub-category') ? 'active':'' }}">
          <a class="nav-link text-white " href="{{url('add-sub-category')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Add Sub Category</span>
          </a>
        </li>

          {{-- FOR Products --}}
          <li class="nav-item {{ Request::is('products') ? 'active':'' }}">
            <a class="nav-link text-white " href="{{url('products')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">category</i>
              </div>
              <span class="nav-link-text ms-1">Products</span>
            </a>
          </li>
          <li class="nav-item {{ Request::is('add-product') ? 'active':'' }}">
            <a class="nav-link text-white " href="{{url('add-product')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">add</i>
              </div>
              <span class="nav-link-text ms-1">Add Products</span>
            </a>
          </li>

        <li class="nav-item {{ Request::is('orders') ? 'active':'' }}">
          <a class="nav-link text-white " href="{{url('orders')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Orders</span>
          </a>
        </li> 
        <li class="nav-item {{ Request::is('users') ? 'active':'' }}">
          <a class="nav-link text-white " href="{{url('users')}}">
            <div class="text-white" style="
            width: 28px!important;">
              <i class="material-icons opacity-10">persons</i>
            </div>
            <span class="nav-link-text">Users</span>
          </a>
        </li>      
      </ul>
    </div>

  </aside>