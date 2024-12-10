
@extends('dashboard.layouts.main')

@section('content')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
             
              <div class="col-11 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ِAdd Product</h4>
                    <form class="forms-sample"  enctype="multipart/form-data" action="{{ URL::to('/dashboard/storeProduct') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
                        </div>
                        <div class="form-group">
                            <label for="description">Product Description</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Product Description">
                        </div>
                        <div class="form-group">
                            <label for="price">Product Price</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Product Price">
                        </div>
                      
                        <div class="form-group">
                            <label for="floatingSelect">Collection name</label>
                            <select class="form-select" id="floatingSelect" name="collection_id" aria-label="Floating label select example">
                                <option value="-1">Nothing Selected</option>
                                @foreach ($collections as $collection)
                                <option value="{{$collection->id}}">{{$collection->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" name="img" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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