
@extends('dashboard.layouts.main')

@section('content')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                        <div class="col-lg-11 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">Collections</h4>
                                    </div>
                                    <div>
                                      <a href="{{ URL::to('/dashboard/addCollection')}}">
                                        <button class="btn btn-primary" type="button">
                                          <i class="mdi mdi-account-plus"></i>
                                            Add New Collection
                                        </button>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                      <thead>
                                        <tr>
                                          <th>Image</th>
                                          <th>Collection</th>
                                          <th>Description</th>
                                          <th>Products</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($collections as $collection)
                                        <tr>
                                          <td>
                                            <div class="d-flex ">
                                              <img src="{{ asset($collection->img)}}" alt="">
                                            </div>
                                          </td>
                                          <td>
                                            <h6>{{$collection->name}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$collection->description}}</h6>
                                          </td>
                                          @if($collection->products->isEmpty())
                                          <td>-</td>
                                          @else
                                          <td>
                                            <h6>{{ $collection->products->count()}}</h6>
                                          </td>
                                          @endif
                                          <th scope="row">
                                            <div class="template-demo">
                                                <a href="{{URL::to('/dashboard/editCollection/' . $collection->id )}}">
                                                  <button type="button" class="btn btn-social-icon btn-info"><i class="fa fa-edit"></i></button>
                                                </a>
                                                <span style="margin-right:10px;"></span>
                                                @if(@empty($collection->deleted_at))
                                                <a href="{{URL::to('/dashboard/deleteCollection/' . $collection->id )}}">
                                                  <button type="button" class="btn btn-social-icon btn-youtube"><i class="fa fa-trash-o"></i></button>
                                                </a>
                                                @else
                                                <a href="{{URL::to('/dashboard/restoreCollection/' . $collection->id )}}">
                                                  <button type="button" class="btn btn-social-icon btn-youtube"><i class="fa fa-undo"></i></button>
                                                </a>
                                                @endif
                                            </div>
                                          </th>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>     
          </div>
          <!-- content-wrapper ends -->
          
@endsection