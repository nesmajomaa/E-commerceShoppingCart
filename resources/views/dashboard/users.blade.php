
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
                                      <h4 class="card-title card-title-dash">Users</h4>
                                    </div>
                                  </div>
                                  <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                      <thead>
                                        <tr>
                                          <th>User Name</th>
                                          <th>Email</th>
                                          <th>Orders</th>
                                          <th>Sign Up Date</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                          <td>
                                            <h6>{{$user->name}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$user->email}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$user->orders()->count()}}</h6>
                                          </td>
                                          <td>
                                            <h6>{{$user->created_at}}</h6>
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