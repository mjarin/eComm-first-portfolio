
 $(document).ready(function(){
      loadcart();
      loadwishlist();

    $('.addToCart ').click(function (e) { 
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var prod_qty = $(this).closest('.product_data').find('.qty-input').val();
        
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id' : prod_id,
                'product_qty' : prod_qty,
            },
            success: function (response) {

                swal("",response.status,"success");
                 loadcart();
                
            }
        });
        
    });

// for increment.........................................    
    $(document).on('click','.increment-btn', function (e) {   
        e.preventDefault();

        var incValue =$(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(incValue , 10);
        value =isNaN(value) ? 0 : value;
        if(value < 10){   
            value++;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
        
    });

// for decrement.........................................
 
 $(document).on('click','.decrement-btn', function (e) { 
        e.preventDefault();

        var decValue = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(decValue , 10);
        value =isNaN(value) ? 0 : value;

        if(value > 1){    
            value--;
            $(this).closest('.product_data').find('.qty-input').val(value); 
        }
        
    }); 

// for CSRF Token........................................ 

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

//Count cart item ........................................

    function loadcart(){
        $.ajax({
            method: "GET",
            url: "/load-cart-item",
            success: function (response){
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
                // console.log(response.count);
                
            }
        });
    }

// for Delete cart item.........................................

    // $('.delete-cartItem').click(function (e) { 
        $(document).on('click', '.delete-cartItem', function (e) {
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();

        $.ajax({
            method: "POST",
            url: "delete_cart_item",
            data: {

            "product_id":prod_id,

            },
            success: function (response) {
            loadcart();
            $('.cartDivReload').load(location.href + " .cartDivReload");
            swal("",response.status,"success");
            }

        });
        
    });

// for wishlist  item.........................................

        $(document).on('click', '.remove-wishlist-item', function (e) {
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method : "POST",
              url: "/delete_wishlist_item",
             data: {

            "prd_id":prod_id,

            },
            
            success: function (response) {

                // window.location.reload();
                loadwishlist();
                $('.wishlistDivReload').load(location.href + " .wishlistDivReload");
                swal("",response.status,"success");
            
           
            }

        });
       
        
    });



 
    $(document).on('click','.changeQuantity', function (e) {
            
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var qty = $(this).closest('.product_data').find('.qty-input').val();

        $.ajax({
            method : "POST",
            url: "update-cart",
            data: {
                "product_id" : prod_id , 
                 "quantity"  :qty, 
                 },
            success: function (response) {
                $('.cartDivReload').load(location.href + " .cartDivReload");
            }
        });

        
    });

   $('.addToWishlist').click(function (e) { 
       e.preventDefault();

       var prod_id = $(this).closest('.product_data').find('.prod_id').val();


       $.ajax({
        method: "POST",
        url: "/add-to-wishlist",
        data: {
            'product_id' : prod_id,
        },
        success: function (response) {

            swal("",response.status,"success");
             loadwishlist();
            
        }
    });
       
   });

   //Count cart item ........................................

   function loadwishlist(){
    $.ajax({
        method: "GET",
        url: "/load-wishlist-item",
        success: function (response) {
            $('.wishlist-count').html('');
            $('.wishlist-count').html(response.count);
            // console.log(response.count);
            
        }
    });
}


});// end of document   
