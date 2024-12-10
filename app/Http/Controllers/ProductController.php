<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Collection;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\EditProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $collections = Collection::select('*')->get();
        return view('dashboard.addProduct')->with(['collections' => $collections]);
    }
    public function store(ProductRequest $request)
    {
        $product = new Product;
		$filename = time().'_'.rand(1,10000).'.'.$request->img->extension();
		$request->img->move(public_path('product_images'), $filename);
		$product->img = 'product_images/' . $filename;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->collection_id = $request->collection_id;
        $product->price = $request->price;
        $product->sales = 0;
	    $status = $product->save();
    	return redirect()->back()->with('status', $status);
    }
    
    public function edit($id)
    {
        $product = Product::select('*')->where('id', $id)->first();
        $collections = Collection::select('*')->get();
        return view('dashboard.editProduct')->with(['product' => $product,'collections' => $collections]);
    }

    public function update(EditProductRequest $request)
    {
        $product = Product::find($request->id);
        if(!empty($request->img)){
            unlink(public_path($product->img));
            $filename = time().'_'.rand(1,10000).'.'.$request->img->extension();
		    $request->img->move(public_path('product_images'), $filename);
		    $product->img = 'product_images/' . $filename;
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->collection_id = $request->collection_id;
        $product->price = $request->price;
    	$status = $product->save();
		return redirect()->back()->with('status', $status);
    }
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
    	return redirect()->back();
    }

    public function restore($id)
    {
        Product::onlyTrashed()->where('id', $id)->restore();
    	return redirect()->back();
    }
}
