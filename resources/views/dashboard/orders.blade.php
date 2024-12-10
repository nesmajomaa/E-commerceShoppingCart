
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
                                      <h4 class="card-title card-title-dash">Orders</h4>
                                    </div>
                                  </div>
                                  <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                      <thead>
                                        <tr>
                                          <th>Order Id</th>
                                          <th>User Name</th>
                                          <th>Status</th>
                                          <th>Total Price</th>
                                          <th>Shipping Price</th>
                                          <th>Order Date</th>
                                          <th>Details</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                          <td>
                                            <h6>{{$order->id}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$order->user['name']}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$order->status}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$order->total_price}}$</h6>
                                          </td>
                                          <td>
                                            <h6>30$</h6>
                                          </td>
                                          <td>
                                            <h6>{{$order->created_at}}</h6>
                                          </td>
                                          <th scope="row">
                                            <div class="template-demo">
                                              <a href="{{URL::to('/dashboard/orderItems/' . $order->id )}}">
                                                <button type="button" class="btn btn-social-icon btn-info"><i class="fa fa-info"></i></button>
                                              </a>
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