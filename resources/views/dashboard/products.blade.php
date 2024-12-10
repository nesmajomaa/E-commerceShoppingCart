
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
                                      <h4 class="card-title card-title-dash">Products</h4>
                                    </div>
                                    <div>
                                      <a href="{{ URL::to('/dashboard/addProduct')}}">
                                        <button class="btn btn-primary" type="button">
                                          <i class="mdi mdi-account-plus"></i>
                                            Add New Product
                                        </button>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                      <thead>
                                        <tr>
                                          <th>Image</th>
                                          <th>Product</th>
                                          <th>Description</th>
                                          <th>Collection</th>
                                          <th>Price</th>
                                          <th>Sales</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                          <td>
                                            <div class="d-flex ">
                                              <img src="{{ asset($product->img)}}" alt="">
                                            </div>
                                          </td>
                                          <td>
                                            <h6>{{$product->name}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$product->description}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$product->collection['name']}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$product->price}}$</h6>
                                          </td>
                                          <td>
                                            <h6>{{$product->sales}}</h6>
                                          </td>
                                          <th scope="row">
                                            <div class="template-demo">
                                                <a href="{{URL::to('/dashboard/editProduct/' . $product->id )}}">
                                                  <button type="button" class="btn btn-social-icon btn-info"><i class="fa fa-edit"></i></button>
                                                </a>
                                                <span style="margin-right:10px;"></span>
                                                @if(@empty($product->deleted_at))
                                                <a href="{{URL::to('/dashboard/deleteProduct/' . $product->id )}}">
                                                  <button type="button" class="btn btn-social-icon btn-youtube"><i class="fa fa-trash-o"></i></button>
                                                </a>
                                                @else
                                                <a href="{{URL::to('/dashboard/restoreProduct/' . $product->id )}}">
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