<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
  

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
 
    {{-- ................................... --}}
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- Material-Dashboard CSS Files -->
   <link href="{{asset('admin/css/material-dashboard.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- custom CSS File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet" />
 <style>
   .custom-btn-admin > a:hover{
    color: #28a745!important;
}
 </style>

</head>
<body>
<!-- Navbar -->
@include('layouts.inc.admin-nav') 
@include('layouts.inc.aside') 
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<!-- End Navbar --> 
<div class="container-fluid py-4">
@yield('content')
</div><!-- End container-fluid -->  
</main><!-- End main -->

 <!--   Core JS Files   -->
 {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="{{ asset('admin/js/material-dashboard.js') }}"></script>
 <script src="{{ asset('admin/js/material-dashboard.min.js') }}"></script>
 <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}"></script>
 <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}"></script>
 <script src="{{ asset('admin/js/chartjs.min.js') }}"></script>
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<script src="{{ asset('admin/js/adminCustom.js') }}"></script> 
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
{{-- For Sweet Alert ...............................--}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
  @if(Session::has("status"))
  <script>
   swal("","{!! Session::get('status') !!}","success" );
  </script>
   @endif

 @yield('scripts') 
</body>
</html>


