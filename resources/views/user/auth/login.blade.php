@extends('user.layouts.main')

@section('content')

        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>My Account</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Login Area -->
        <section class="login-area ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login-content">
                            <h2>Login</h2>
                            <form class="login-form" method="post" action="{{ URL::to('/login') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <button type="submit" class="default-btn">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="new-customer-content">
                            <h2>New Customer</h2>
                            <span>Create A Account</span>
                            <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p>
                            <a href="{{URL::to('/register')}}" class="optional-btn">Create A Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Area -->

 @endsection