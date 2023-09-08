<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontenduserController extends Controller
{
    public function myOrders(){

        $customer_orders =Order::where('user_id',Auth::id())->get() ;
        return view('frontend.orders.viewmyorders',compact('customer_orders'));
    }

    public function viewSingleOrder($id){
       
        $orders = Order::where('id', $id)->where('user_id',Auth::id())->first();
        return view('frontend.orders.viewsingleorder',compact('orders'));

    }
}
