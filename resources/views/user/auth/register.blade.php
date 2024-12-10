@extends('user.layouts.main')

@section('content')

        <!-- Start SignUP Area -->
        <section class="signup-area ptb-100">
            <div class="container">
                <div class="signup-content">
                    <h2>Create an Account</h2>

                    <form class="signup-form" method="post" action="{{ URL::to('/register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" id="fname" name="name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email" id="name" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label>Confirme Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password_confirmation">
                        </div>
                        <button type="submit" class="default-btn">Signup</button>

                        <a href="{{ URL('/')}}" class="return-store">or Return to Store</a>
                    </form>
                </div>
            </div>
        </section>
        <!-- End SignUP Area -->
@endsection