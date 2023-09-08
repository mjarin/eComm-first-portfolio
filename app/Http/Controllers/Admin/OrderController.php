<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
   public function orders(){

    $orders = Order::where('status', '0')->get();
    return view('admin.orders.view',compact('orders'));
       
   }

   public function view($id){

      $orders =Order::where('id', $id)->first();
      return view('admin.orders.single-order-view',compact('orders'));

   }

   public function updateorder(Request $req, $id){

      $order = Order::find($id);
      $order->status = $req->input('order_status');
      $order->update();

      return redirect('orders')->with('status', 'Order updated successfully');
   }

   public function orderhistry(){

      $orders =Order::where('status','1')->get();
      return view('admin.orders.history',compact('orders'));

   }



}
