
@extends('dashboard.layouts.main')

@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
              <div class="col-11 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Product</h4>
                    <form class="forms-sample"  enctype="multipart/form-data" action="{{ URL::to('/dashboard/updateProduct') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Product Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Product Price</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                        </div>
                      
                        <div class="form-group">
                            <label for="floatingSelect">Collection name</label>
                            <select class="form-select" id="floatingSelect" name="collection_id" aria-label="Floating label select example">
                                <option value="-1">Nothing Selected</option>
                                @foreach($collections as $collection)
                                @if($collection->id == $product->collection['id'])
                                <option value="{{$collection->id}}" selected>{{$collection->name}}</option>
                                @else
                                <option value="{{$collection->id}}">{{$collection->name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" name="img" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="{{ $product->img }}">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection