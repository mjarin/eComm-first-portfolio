<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use Session;

class CartController extends Controller 
{

    
    public function viewcart(){

        $cartitems =Cart::where('user_id', Auth::id())->get();
        return view('frontend.viewcart',compact('cartitems'));

    }

    public function addProducts(Request $req){

        $product_id = $req->input('product_id');
        $product_qty = $req->input('product_qty');

        if(Auth::check())
        {
            $prod_check = Product::where('id', $product_id)->first();

            if($prod_check)
            {
                if(Cart::where('prod_id' , $product_id)->where('user_id',Auth::id())->exists())
                {
                    return response()->json(['status' =>$prod_check->name.' already added to cart.']);
                }
                else
                {
                    $cartitem = new Cart();
                    $cartitem->prod_id = $product_id;
                    $cartitem->user_id = Auth::id();
                    $cartitem->prod_qty = $product_qty;
                    $cartitem-> save();
                    return response()->json(['status' =>$prod_check->name.' added to cart.']);

                }

            }
     
        }
        else
        {
            return response()->json(['status' => 'Login to continue']);
        }

    }


    public function updateCart(Request $request){
                
        $product_id = $request->input('product_id');  
        $product_qty = $request->input('quantity');

        if(Auth::check())
        {
            if(Cart::where('prod_id' , $product_id)->where('user_id',Auth::id())->exists())
            {
            $cart = Cart::where('prod_id' , $product_id)->where('user_id',Auth::id())->first();
            $cart -> prod_qty = $product_qty; 
            $cart ->update();
            return response()->json(['status' => 'Quantity updated']);
            }
        }

    }

    public function deleteCartItem(Request $request){

        if(Auth::check())
        {

            $product_id = $request->input('product_id');
            if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
            {
                $cartitem = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
                $cartitem->delete();
                return response()->json(['status' =>$cartitem->products->name. ' deleted successfully']);
            }

        }
        else
        {
            return response()->json(['status' => 'Login to continue']);
        }

     

}

  public function cartCount(){

    $cartCount = Cart::where('user_id', Auth::id())->count();

    return response()->json(['count' => $cartCount]);

   }



}// end of class CartController 
 