@extends('user.layouts.main')

@section('content')

        
        <!-- Start Main Banner Area -->
        <div class="home-slides owl-carousel owl-theme">
            <div class="main-banner banner-bg1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="main-banner-content">
                                <span class="sub-title">Limited Time Offer!</span>
                                <h1>Winter-Spring!</h1>
                                <p>Take 20% Off ‘Sale Must-Haves'</p>
                                <div class="btn-box">
                                    <a href="products-left-sidebar.html" class="default-btn">Shop Women's</a>
                                    <a href="products-right-sidebar-2.html" class="optional-btn">Shop Men's</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-banner banner-bg2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="main-banner-content">
                                <span class="sub-title">Exclusive Offer!</span>
                                <h1>Spring-Show!</h1>
                                <p>Leap year offer ‘Sale Must-Haves'</p>
                                <div class="btn-box">
                                    <a href="products-left-sidebar.html" class="default-btn">Shop Women's</a>
                                    <a href="products-right-sidebar-2.html" class="optional-btn">Shop Men's</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-banner banner-bg3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="main-banner-content">
                                <span class="sub-title">Buy Now From Xton!</span>
                                <h1>New Season Canvas</h1>
                                <p>Take 20% Off ‘Sale Must-Haves'</p>
                                <div class="btn-box">
                                    <a href="products-left-sidebar.html" class="default-btn">Shop Women's</a>
                                    <a href="products-right-sidebar-2.html" class="optional-btn">Shop Men's</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->
        
        <!-- Start Categories Banner Area -->
        <section class="categories-banner-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    @foreach ($collections as $collection)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-categories-box">
                            <img src="{{ asset($collection->img) }}" classs="image" alt="image">
                        </div>
                        <div style="margin-top:-15px;" class="products-content">
                            <h3><a href="">{{ $collection->name }}</a></h3>
                            <p>{{ $collection->description }}</p>
                            <a href="" class="default-btn">Discover Now</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Categories Banner Area -->

        <!-- Start Products Area -->
        <section class="products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2>Recent Products</h2>
                </div>
                <div class="row justify-content-center">
                    @foreach ($recentProducts as $product)     
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="">
                                    <img src="{{ asset($product->img) }}" class="image" alt="image">
                                </a>
                                <div class="products-button">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                               <a href="{{ URL::to('/addToFavorite/' . $product->id )}}" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="products-content">
                                <h3><a href="">{{ $product->name }}</a></h3>
                                <p>{{ $product->description }}</p>
                                <div class="price">
                                    <span class="new-price">${{ $product->price  }}</span>
                                </div>
                                <a href="{{ URL::to('/addToCart/' . $product->id )}}" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- End Products Area -->

        <!-- Start Offer Area -->
        <section class="offer-area bg-image1 ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="offer-content">
                            <span class="sub-title">Limited Time Offer!</span>
                            <h2>-40% OFF</h2>
                            <p>Get The Best Deals Now</p>
                            <a href="products-one-row.html" class="default-btn">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Offer Area -->

        <!-- Start Products Area -->
        <section class="products-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2>Best Selling Products</h2>
                </div>
                <div class="row justify-content-center">
                    @foreach ($topSellingProducts as $product)     
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="#">
                                    <img src="{{ asset($product->img) }}" class="image" alt="image">
                                </a>
                                <div class="products-button">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                               <a href="{{ URL::to('/addToFavorite/' . $product->id )}}" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="products-content">
                                <h3><a href="">{{ $product->name }}</a></h3>
                                <p>{{ $product->description }}</p>
                                <div class="price">
                                    <span class="new-price">${{ $product->price }}</span>
                                </div>
                                <a href="{{ URL::to('/addToCart/' . $product->id )}}" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Products Area -->

@endsection
