
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
                                      <h4 class="card-title card-title-dash">Order Items</h4>
                                    </div>
                                  </div>
                                  <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                      <thead>
                                        <tr>
                                          <th>Product Id</th>
                                          <th>Product Name</th>
                                          <th>Quantity</th>
                                          <th>Total Price</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($orderItems as $item)
                                        <tr>
                                          <td>
                                            <h6>{{$item->product['id']}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$item->product['name']}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$item->quantity}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$item->total_price}}</h6>
                                          </td>
                                          
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