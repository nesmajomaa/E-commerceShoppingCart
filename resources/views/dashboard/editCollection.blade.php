
@extends('dashboard.layouts.main')

@section('content')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
             
              <div class="col-11 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Collection</h4>
                    <form class="forms-sample"  enctype="multipart/form-data" action="{{ URL::to('/dashboard/updateCollection') }}" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="id" value="{{ $collection->id }}">
                      <div class="form-group">
                        <label for="name">Collection Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $collection->name }}">
                      </div>
                      <div class="form-group">
                        <label for="description">Collection Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $collection->description }}">
                      </div>
                      <div class="form-group">
                        <label>Collection Image</label>
                        <input type="file" name="img" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="{{ $collection->img }}">
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