<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ml-5" href="{{url('/')}}">eComm</a>

    {{-- ................................ --}}
    <div class="search-bar">
      <form action="{{url('search-product')}}" method="POST">
        @csrf
      <div class="input-group">
        <input type="search" name="product_name" class="form-control" id="search-bar-id" placeholder="Search product" required aria-describedby="basic-addon1">
        <div class="input-group-append">
          <button type="submit" class="input-group-text"><i class="fa fa-search"></i></button>
      </div>
      </div>
    </form>
    </div>
    {{-- ................................ --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-3 ml-3" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/fronendcategory')}}">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('all-products/')}}">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link PositionCartCount" href="{{url('cart')}}">
          <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> 
            <span class="cart-count badge badge-pill bg-danger text-white PositionCartSpan ">0</span>
          </a>
        </li>
        
        <li class="nav-item px-4">
          <a class="nav-link PositionWishlistCount" href="{{url('wishlist')}}">
            <i class="fa fa-heart fa-lg " aria-hidden="true"></i>
            <span class="wishlist-count badge badge-pill bg-danger text-white PositionWishlistSpan">0</span>
          </a>
        </li>
         <!-- Authentication Links --> 
         @guest
         @if (Route::has('login'))
             <li class="nav-item pl-3">
                 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
             </li>
         @endif

         @if (Route::has('register'))
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
             </li>
         @endif
     @else
         <li class="nav-item dropdown">
             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
             </a>
             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
               <li>
                 <a href="{{url('/my-orders')}}" class="dropdown-item">My Orders</a>
                </li>

                <li>
                  <a href="{{url('#')}}" class="dropdown-item">My Profile</a>
                 </li>

                 <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                </li>
             </ul>

             {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
             </div> --}}
         </li>
     @endguest
      </ul>
    </div>
  </nav>