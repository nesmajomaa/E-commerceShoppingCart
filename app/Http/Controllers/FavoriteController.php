<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
class FavoriteController extends Controller
{
    public function addToFavorite($productId)
    {
        $favorite= Favorite::where('product_id', $productId)->first();
        if(!$favorite){
            $favorite = new Favorite;
            $favorite->user_id = Auth::guard('user')->user()->id;
            $favorite->product_id = $productId;
            $favorite->save();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
    
    public function removeFromFavorite($productId)
    {
        Favorite::where('product_id', $productId)->where('user_id' , Auth::guard('user')->user()->id)->delete();
    	return redirect()->back();
    }
}
