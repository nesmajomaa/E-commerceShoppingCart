<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $user = User::find(Auth::guard('user')->user()->id);
        $carts = $user->carts()->with('cartProduct')->get();
        $favorites = $user->favorites()->with('favoriteProduct')->get();
        $subTotal = $carts->sum('total_price');
        return view('user.cart')->with(['carts' => $carts, 'favorites' => $favorites, 'subTotal' => $subTotal]); 
    }

    public function addToCart($itemId){
        $cart= Cart::where('product_id', $itemId)->first();
        $product = Product::find($itemId);

        if(!$cart){
            $cart = new Cart;
            $cart->product_id = $itemId;
            $cart->user_id = Auth::guard('user')->user()->id;
            $cart->quantity = 1;
            $cart->total_price = $product->price;
            $status = $cart->save();
            return redirect()->back()->with('status', $status);
        }else{
            $cart->quantity = $cart->quantity + 1;
            $cart->total_price = $cart->total_price + $product->price;
            $status = $cart->save();
            return redirect()->back()->with('status', $status);
        }
    }

    public function removeFromCart($itemId)
    {
        Cart::where('id', $itemId)->forceDelete();
    	return redirect()->back();
    }

    public function increaseItem($itemId){
        $cart= Cart::where('product_id', $itemId)->first();
        $product = $cart->cartProduct();
        $cart->quantity = $cart->quantity + 1;
        $cart->total_price = $cart->total_price + $product->price;
        $status = $cart->save();
        return redirect()->back()->with('status', $status);
        
    }

    public function decreaseItem($itemId){
        $cart= Cart::where('product_id', $itemId)->first();
        $product = $cart->cartProduct();
        $newQuantity = $cart->quantity - 1;
        if($newQuantity <= 0){
            return redirect()->back();
        }else{
            $cart->quantity = $cart->quantity - 1;
            $cart->total_price = $cart->total_price - $product->price;
            $status = $cart->save();
            return redirect()->back()->with('status', $status);
        }
    }

    public function updateCartQuantity(Request $request){
        $productIds = $request->input('product_ids');
        $quantities = $request->input('quantities');

        // Iterate through product IDs and quantities
        foreach ($productIds as $index => $productId) {
            $quantity = $quantities[$index];

            // Update the cart item with the new quantity
            $cartItem = Cart::with('cartProduct')->where('product_id', $productId)->first();
            if ($cartItem) {
                $cartItem->quantity = $quantity;
                $cartItem->total_price = $quantity * $cartItem->cartProduct->price;
                $cartItem->save();
            }
        }
        return redirect('/cart')->with('success', 'Cart updated successfully');
    }
}
