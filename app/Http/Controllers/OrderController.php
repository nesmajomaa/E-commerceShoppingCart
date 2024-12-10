<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout($subTotal){
        $cartItems = Cart::where('user_id', Auth::guard('user')->user()->id )->where('deleted_at', null)->get();

        $order = new Order;
        $order->user_id = Auth::guard('user')->user()->id;
        $order->status = 'in progress';
        $order->total_price = $subTotal + 30;
        $order->save();
        
        foreach($cartItems as $cartItem){
            $orderItem = new OrderItem;
            $orderItem->order_id = $order->id;
            $orderItem->product_id =  $cartItem->product_id;
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->total_price = $cartItem->total_price;
            $orderItem->save();
            $product = Product::find($cartItem->product_id);
            $product->sales = $product->sales + $cartItem->quantity;
            $product->update();
            Cart::where('id', $cartItem->id)->delete();
        }

        //return redirect()->route('index.success')->with('success', 'Checkout successful!');
        return redirect()->back()->with('status', 'Checkout successful!');
    }
}
