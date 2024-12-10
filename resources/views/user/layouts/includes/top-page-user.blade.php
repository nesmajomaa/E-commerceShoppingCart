<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from templates.hibootstrap.com/xton/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 11:56:43 GMT -->
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/rangeSlider.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/dark.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

        <title>Xton - eCommerce Website</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>
        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="xton-responsive-nav">
                <div class="container">
                    <div class="xton-responsive-menu">
                        <div class="logo">
                            <a href="{{URL::to('/user')}}">
                                <img src="assets/img/logo.png" class="main-logo" alt="logo">
                                <img src="assets/img/white-logo.png" class="white-logo" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xton-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{URL::to('/user')}}">
                            <img src="assets/img/logo.png" class="main-logo" alt="logo">
                            <img src="assets/img/white-logo.png" class="white-logo" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="#" class="nav-link active">Home <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link active">Home 1</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Home 2</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Home 3</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Home 4</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Home 5</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Shop <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Shop 1</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Shop 2</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Shop 3</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Shop 4</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Shop 5</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Pages <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Page 1</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Page 2</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Page 3</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Page 4</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Page 5</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Women's <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Women 1</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Women 2</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Women 3</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Women 4</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Women Men5</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Men's <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Men 1</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Men 2</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Men 3</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Men 4</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Men 5</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Account<i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="" class="nav-link">{{ Auth::guard('user')->user()->name }}</a></li>

                                        <li class="nav-item"><a href="" class="nav-link">{{ Auth::guard('user')->user()->email }}</a></li>

                                        <li class="nav-item"><a href="{{URL::to('/logout')}}" class="nav-link">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <div class="others-option">
                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-shopping-bag'></i>
                                            <span>{{$favorites->count()}}</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#shoppingCartModal">
                                            <i class='bx bx-shopping-bag'></i>
                                            <span>{{$carts->count()}}</span>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Sticky Navbar Area -->
        <div class="navbar-area header-sticky">
            <div class="xton-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" class="main-logo" alt="logo">
                            <img src="assets/img/white-logo.png" class="white-logo" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="#" class="nav-link active">Home <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link active">Home 1</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Home 2</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Home 3</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Home 4</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Home 5</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Shop <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Shop 1</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Shop 2</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Shop 3</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Shop 4</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Shop 5</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Pages <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Page 1</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Page 2</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Page 3</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Page 4</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Page 5</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Women's <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Women 1</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Women 2</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Women 3</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Women 4</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Women 5</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Men's <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Men 1</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Men 2</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Men 3</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Men 4</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Men 5</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="" class="nav-link">Account<i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="" class="nav-link">{{ Auth::guard('user')->user()->name }}</a></li>

                                        <li class="nav-item"><a href="" class="nav-link">{{ Auth::guard('user')->user()->email }}</a></li>

                                        <li class="nav-item"><a href="{{URL::to('/logout')}}" class="nav-link">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>

                            
                            <div class="others-option">
                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-shopping-bag'></i>
                                            <span>{{$favorites->count()}}</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal">
                                            <i class='bx bx-shopping-bag'></i>
                                            <span>{{$carts->count()}}</span>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Header Area -->

        <!-- Start Shopping Cart Modal -->
        <div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class='bx bx-x'></i></span>
                    </button>

                    <div class="modal-body">
                        <h3>My Cart ({{$carts->count()}})</h3>
                        <div class="products-cart-content">
                            @foreach($carts as $cart)
                            <div class="products-cart">
                                <div class="products-image">
                                    <a href=""><img src="{{asset($cart->cartProduct['img'])}}" alt="image"></a>
                                </div>
                                <div class="products-content">
                                    <h3><a href="#">{{$cart->cartProduct['name']}}</a></h3>
                                    <span>{{$cart->cartProduct['description']}}</span>
                                    <div class="products-price">
                                        <span>{{$cart->quantity}}</span>
                                        <span>x</span>
                                        <span class="price">${{$cart->cartProduct['price']}}</span>
                                    </div>
                                    <a href="{{URL::to('/removeFromCart/'. $cart->id)}}" class="remove-btn"><i class='bx bx-trash'></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="products-cart-subtotal">
                            <span>Subtotal</span>
                            <span class="subtotal">${{$subTotal}}</span>
                        </div>
                        <div class="products-cart-btn">
                            <a href="{{URL::to('/checkout/' . $subTotal)}}" class="default-btn">Proceed to Checkout</a>
                            <a href="{{URL::to('/cart')}}" class="optional-btn">View Shopping Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Shopping Cart Modal -->

        <!-- Start Wishlist Modal -->
        <div class="modal right fade shoppingWishlistModal" id="shoppingWishlistModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class='bx bx-x'></i></span>
                    </button>
                    <div class="modal-body">
                        <h3>My Wish List ({{$favorites->count()}})</h3>
                        <div class="products-cart-content">
                            @foreach($favorites as $fav)
                            <div class="products-cart">
                                <div class="products-image">
                                    <a href=""><img src="{{asset($fav->favoriteProduct['img'])}}" alt="image"></a>
                                </div>
                                <div class="products-content">
                                    <h3><a href="#">{{$fav->favoriteProduct['name']}}</a></h3>
                                    <span>{{$fav->favoriteProduct['description']}}</span>
                                    <div class="products-price">
                                        <span>1</span>
                                        <span>x</span>
                                        <span class="price">${{$fav->favoriteProduct['price']}}</span>
                                    </div>
                                    <a href="{{URL::to('/removeFromFavorite/' . $fav->id)}}" class="remove-btn"><i class='bx bx-trash'></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="products-cart-btn">
                            <a href="{{URL::to('/cart')}}" class="optional-btn">View Shopping Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wishlist Modal -->







