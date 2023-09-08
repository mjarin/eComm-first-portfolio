<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
  

<title>
 @yield('title')
</title>

{{-- ....bootstrap/4.0.0....CDN --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- font-awesome CDN links -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Google FOnts Files -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<!-- Custom CSS Files -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet" />
<link href="{{asset('frontend/css/owl.theme.default.min.css')}}" rel="stylesheet" />
<link href="{{asset('frontend/css/frontendCustom.css')}}" rel="stylesheet" />
{{-- ................................... --}}

</head>
<body>

@include('layouts.inc.frontendnavbar')
<div class="container-fluid">
@yield('content')
</div>
<!-- End container-fluid -->  
<div class="whatsapp-chat">
<a href="https://wa.me/+8801995529568?text=I'm%20interested%20in%20your%20car%20for%20sale" target="_blank">
  <img src="{{asset('assets/images/whatsapp.png')}}" height="60" width="60" alt="whatsapp-logo">
</a>
</div>

 <!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/typed.js') }}"></script>
<script>
   var typed4 = new Typed('#search-bar-id', {
    strings: ['Search by Womens Category Product (Ex-Salware Kamez)', 'Search by Mens Category Product (Ex-Mens T-shart)', 'Search by Baby Category Product (Ex.-Baby Frok)'],
    typeSpeed: 60,
    backSpeed: 60,
    attr: 'placeholder',
    // bindInputFocusEvents: true,
    loop: true
  });
    
</script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/6232cae81ffac05b1d7f0250/1fub6h84n';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
 
    var availableTags = [];
    $.ajax({
      method: "GET",
      url: "/product-list",
      success: function (response) {
        //  console.log(response);
        startAutoComplete(response);
      }
    });

    function startAutoComplete(availableTags){
      $( "#search-bar-id" ).autocomplete({
      source: availableTags
    });
    }

</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
@if(Session::has("status"))
<script>
// swal("{!! Session::get('status') !!}");
swal("","{!! Session::get('status') !!}","success" );
</script>
@endif

<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
<script src="{{ asset('frontend/js/checkout.js') }}"></script>
<script src="{{ asset('frontend/js/frontendCustom.js') }}"></script>
 @yield('scripts') 
</body>
</html>
