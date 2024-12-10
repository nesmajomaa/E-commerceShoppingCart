@extends('user.layouts.main-user')

@section('content')

        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Cart</h2>
                    <ul>
                        <li><a href="{{ URL::to('/user')}}">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Cart Area -->
		<section class="cart-area ptb-100">
            <div class="container">
                <form enctype="multipart/form-data" action="{{ URL::to('/updateCartQuantity') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $item)
                                <input type="hidden" name="product_ids[]" value="{{ $item->cartProduct->id }}">

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="{{ asset($item->cartProduct->img) }}" alt="item">
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="#">{{ $item->cartProduct->name}}</a>
                                        <ul>
                                            <li><span>{{ $item->cartProduct->description}}</span></li>
                                        </ul>
                                    </td>
                                    <td class="product-price">
                                        <span class="unit-amount">${{ $item->cartProduct->price}}</span>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="input-counter"> 
                                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                            <input type="text" min="1" name="quantities[]" value="{{$item->quantity}}" data-product-id="{{ $item->cartProduct->id }}">
                                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                        </div>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">${{$item->total_price}}</span>

                                        <a href="{{ URL::to('/removeFromCart/' . $item->id)}}" class="remove"><i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-buttons">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-sm-7 col-md-7">
                                <a href="{{URL::to('/user')}}" class="optional-btn">Continue Shopping</a>
                            </div>
                            <div class="col-lg-5 col-sm-5 col-md-5 text-end">
                                <button class="default-btn" type="submit">Update Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="cart-totals">
                        <h3>Cart Totals</h3>
                        <ul>
                            <li>Subtotal <span>${{$subTotal}}</span></li>
                            <li>Shipping <span>$30.00</span></li>
                            <li>Total <span>${{$subTotal+30}}</span></li>
                        </ul>
                        <a href="{{ URL('/checkout/' . $subTotal+30)}}" class="default-btn">Continue to Checkout</a>
                    </div>
                </form>
            </div>
        </section>
        <!-- End Cart Area -->
        
@endsection