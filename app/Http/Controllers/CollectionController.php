<?php

namespace App\Http\Controllers;
use App\Models\Collection;
use Illuminate\Http\Request;
use App\Http\Requests\CollectionRequest;
use App\Http\Requests\EditCollectionRequest;

class CollectionController extends Controller
{
    public function create()
    {
        return view('dashboard.addCollection');
    }

    public function store(CollectionRequest $request)
    {
        $collection = new Collection;
		$filename = time().'_'.rand(1,10000).'.'.$request->img->extension();
		$request->img->move(public_path('collection_images'), $filename);
		$collection->img = 'collection_images/' . $filename;
    	$collection->name = $request->name;
        $collection->description = $request->description;
	    $status = $collection->save();
    	return redirect()->back()->with('status', $status);
    }

    public function edit($id)
    {
        $collection = Collection::select('*')->where('id', $id)->first();
        return view('dashboard.editCollection')->with('collection', $collection);
    }

    public function update(EditCollectionRequest $request)
    {
        $collection = Collection::find($request->id);
        if(!empty($request->img)){
		    unlink(public_path( $collection->img));
		    $filename = time().'_'.rand(1,10000).'.'.$request->img->extension();
		    $request->img->move(public_path('collection_images'), $filename);
		    $collection->img = 'collection_images/' . $filename;
        }
        $collection->name = $request->name;
        $collection->description = $request->description;
    	$status = $collection->save();
		return redirect()->back()->with('status', $status);
    }

    public function destroy($id)
    {
        Collection::where('id', $id)->delete();
    	return redirect()->back();
    }

    public function restore($id)
    {
        Collection::onlyTrashed()->where('id', $id)->restore();
    	return redirect()->back();
    }
}
