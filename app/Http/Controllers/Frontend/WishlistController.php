<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index(){
        $wishlist = Wishlist::where('user_id',Auth::id())->get();
        return view('Frontend.wishlist', compact('wishlist'));
    }

    public function addtowishlist(Request $request){

        if(Auth::check()) 
        {
            $prod_id = $request->input('product_id');
    
            if(Product::find($prod_id))
            {
                $wishitem = new Wishlist();
                $wishitem ->user_id = Auth::id();
                $wishitem ->prod_id = $prod_id;
                $wishitem ->save();

                return response()->json(['status' => 'Product Added to Wishlist']);
               
            }
            else{
                return response()->json(['status' => 'Product doesnot exist']);
                }
        }
       else{
            return response()->json(['status' => 'Login to continue']);
          }

    }

    public function remove(Request $request){

        if(Auth::check())
        {

            $item_id = $request->input('prd_id');
            if(Wishlist::where('prod_id', $item_id)->where('user_id', Auth::id())->exists())
            {
                $wishitem = Wishlist::where('prod_id', $item_id)->where('user_id',Auth::id())->first();
                $wishitem->delete();
                return response()->json(['status' => 'Item Removed from Wishlist']); 
            }

        }
        else
        {
            return response()->json(['status' => 'Login to continue']);
        }



    }

    public function wishlistCount(){
    $wishlistCount = Wishlist::where('user_id', Auth::id())->count();
       return response()->json(['count' => $wishlistCount]); 
       
    }
}
