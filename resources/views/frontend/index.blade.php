@extends('layouts.front')

@section('title')
 Welceme to eComm
@endsection

@section('content')
 @include('layouts.inc.slider')
 <div class="py-5">
     <div class="container-fluid">
         <div class="row">
             <h2 class="mt-3 mb-5" >Featured Products</h2>
             {{-- owl carousel --}}
             <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $item)
                        <div class="item">
                        <a href="{{url('featured-product/'.$item->id)}}" class="text-decoration-none text-dark " >
                            <div class="card h-100">
                             <input type="hidden" name="prod_id" value="{{$item->id}}">
                                <img style="width:100%!important;" class="trending-img" src="{{asset('assets/upload/product/'.$item->image)}}" alt="product image">
                                    <div class="card-body text-center">
                                        <small class="font-weight-bold ">{{$item->name}}</small><br>
                                            <small class="mt-3 font-weight-bold text-danger">৳ {{$item->selling_price}}</small>
                                            <small class="mt-3 ml-2"><s>৳ {{$item->original_price}}</s></small>
                                    </div>
                            </div>
                        </a>  
                        </div>                 
                    @endforeach   
            </div>
            {{-- End of owl carousel --}}                  
         </div>
     </div>
 </div>

 <div class="py-5">
    <div class="container-fluid">
        <div class="row">
            <h2 class="mt-3 mb-5" >Trending Category</h2>
            {{-- owl carousel --}}
            <div class="owl-carousel featured-carousel owl-theme">
                   @foreach ($trending_category as $cate)
                       <div class="item">
                        <a  class="text-decoration-none text-dark "  href="{{url('category_product/'.$cate->id)}}">
                           <div class="card h-100">
                               <img class="w-100" height="200" class="" src="{{asset('assets/upload/category/'.$cate->image)}}" alt="product image">
                                   <div class="card-body text-center">

                                       <h6 class="font-weight-bold">{{$cate->name}}</h6>
                                       
                                   </div>
                           </div>
                        </a>
                       </div>                 
                   @endforeach   
           </div>
           {{-- End of owl carousel --}}                  
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>

@endsection