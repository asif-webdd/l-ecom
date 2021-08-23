<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 16:27:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart eCommmerce</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Wolmart eCommmerce Marketplace HTML Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/images/icons/favicon.png') }}') }}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="{{ asset('assets/frontend/vendor/fontawesome-free/webfonts/fa-regular-400.woff2') }}" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="{{ asset('assets/frontend/vendor/fontawesome-free/webfonts/fa-solid-900.woff2') }}" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="{{ asset('assets/frontend/vendor/fontawesome-free/webfonts/fa-brands-400.woff2') }}" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="{{ asset('assets/frontend/fonts/wolmart87d5.ttf?png09e') }}" as="font" type="font/ttf" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendor/fontawesome-free/css/all.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendor/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/frontend/css/demo1.min.css") }}">

</head>

<body class="home">
<div class="page-wrapper">
    <!-- Start of Header -->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <p class="welcome-msg">Welcome to Wolmart Store message or remove it!</p>
                </div>
                <div class="header-right">
                    <div class="dropdown">
                        <a href="#currency">USD</a>
                        <div class="dropdown-box">
                            <a href="#USD">USD</a>
                            <a href="#EUR">EUR</a>
                        </div>
                    </div>
                    <!-- End of DropDown Menu -->

                    <div class="dropdown">
                        <a href="#language"><img src="{{ asset('assets/frontend/images/flags/eng.png') }}" alt="ENG Flag" width="14"
                                                 height="8" class="dropdown-image" /> ENG</a>
                        <div class="dropdown-box">
                            <a href="#ENG">
                                <img src="{{ asset('assets/frontend/images/flags/eng.png') }}" alt="ENG Flag" width="14" height="8"
                                     class="dropdown-image" />
                                ENG
                            </a>
                            <a href="#FRA">
                                <img src="{{ asset('assets/frontend/images/flags/fra.png') }}" alt="FRA Flag" width="14" height="8"
                                     class="dropdown-image" />
                                FRA
                            </a>
                        </div>
                    </div>
                    <!-- End of Dropdown Menu -->
                    <span class="divider d-lg-show"></span>
                    <a href="blog.html" class="d-lg-show">Blog</a>
                    <a href="contact-us.html" class="d-lg-show">Contact Us</a>
                    <a href="my-account.html" class="d-lg-show">My Account</a>
                    <a href="assets/ajax/login.html" class="d-lg-show login sign-in"><i
                            class="w-icon-account"></i>Sign In</a>
                    <span class="delimiter d-lg-show">/</span>
                    <a href="assets/ajax/login.html" class="ml-0 d-lg-show login register">Register</a>
                </div>
            </div>
        </div>
        <!-- End of Header Top -->

        <div class="header-middle">
            <div class="container">
                <div class="header-left mr-md-4">
                    <a href="#" class="mobile-menu-toggle  w-icon-hamburger">
                    </a>
                    <a href="demo1.html" class="logo ml-lg-0">
                        <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo" width="144" height="45" />
                    </a>
                    <form method="get" action="#" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                        <div class="select-box">
                            <select id="category" name="category">
                                <option value="">All Categories</option>
                                <option value="4">Fashion</option>
                                <option value="5">Furniture</option>
                                <option value="6">Shoes</option>
                                <option value="7">Sports</option>
                                <option value="8">Games</option>
                                <option value="9">Computers</option>
                                <option value="10">Electronics</option>
                                <option value="11">Kitchen</option>
                                <option value="12">Clothing</option>
                            </select>
                        </div>
                        <input type="text" class="form-control" name="search" id="search"
                               placeholder="Search in..." required />
                        <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                        </button>
                    </form>
                </div>
                <div class="header-right ml-4">
                    <div class="header-call d-xs-show d-lg-flex align-items-center">
                        <a href="tel:#" class="w-icon-call"></a>
                        <div class="call-info d-lg-show">
                            <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                            <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                        </div>
                    </div>
                    <a class="wishlist label-down link d-xs-show" href="wishlist.html">
                        <i class="w-icon-heart"></i>
                        <span class="wishlist-label d-lg-show">Wishlist</span>
                    </a>
                    <a class="compare label-down link d-xs-show" href="compare.html">
                        <i class="w-icon-compare"></i>
                        <span class="compare-label d-lg-show">Compare</span>
                    </a>
                    <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                        <div class="cart-overlay"></div>
                        <a href="#" class="cart-toggle label-down link">
                            <i class="w-icon-cart">
                                <span class="cart-count">2</span>
                            </i>
                            <span class="cart-label">Cart</span>
                        </a>
                        <div class="dropdown-box">
                            <div class="cart-header">
                                <span>Shopping Cart</span>
                                <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                            </div>

                            <div class="products">
                                <div class="product product-cart">
                                    <div class="product-detail">
                                        <a href="product-default.html" class="product-name">Beige knitted
                                            elas<br>tic
                                            runner shoes</a>
                                        <div class="price-box">
                                            <span class="product-quantity">1</span>
                                            <span class="product-price">$25.68</span>
                                        </div>
                                    </div>
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/cart/product-1.jpg') }}" alt="product" height="84"
                                                 width="94" />
                                        </a>
                                    </figure>
                                    <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="product product-cart">
                                    <div class="product-detail">
                                        <a href="product-default.html" class="product-name">Blue utility
                                            pina<br>fore
                                            denim dress</a>
                                        <div class="price-box">
                                            <span class="product-quantity">1</span>
                                            <span class="product-price">$32.99</span>
                                        </div>
                                    </div>
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/cart/product-2.jpg') }}" alt="product" width="84"
                                                 height="94" />
                                        </a>
                                    </figure>
                                    <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="cart-total">
                                <label>Subtotal:</label>
                                <span class="price">$58.67</span>
                            </div>

                            <div class="cart-action">
                                <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                            </div>
                        </div>
                        <!-- End of Dropdown Box -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Header Middle -->

        <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
            <div class="container">
                <div class="inner-wrap">
                    <div class="header-left">
                        <div class="dropdown category-dropdown has-border" data-visible="true">
                            <a href="#" class="category-toggle text-dark" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="true" data-display="static"
                               title="Browse Categories">
                                <i class="w-icon-category"></i>
                                <span>Browse Categories</span>
                            </a>

                            <div class="dropdown-box">
                                <ul class="menu vertical-menu category-menu">
                                    <li>
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-tshirt2"></i>Fashion
                                        </a>
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Women</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                            Watches</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Sale</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Men</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                            Watches</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="banner-fixed menu-banner menu-banner2">
                                                    <figure>
                                                        <img src="{{ asset('assets/frontend/images/menu/banner-2.jpg') }}" alt="Menu Banner"
                                                             width="235" height="347" />
                                                    </figure>
                                                    <div class="banner-content">
                                                        <div class="banner-price-info mb-1 ls-normal">Get up to
                                                            <strong
                                                                class="text-primary text-uppercase">20%Off</strong>
                                                        </div>
                                                        <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                        <a href="shop-banner-sidebar.html"
                                                           class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-furniture"></i>Furniture
                                        </a>
                                        <ul class="megamenu type2">
                                            <li class="row">
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Furniture</h4>
                                                    <hr class="divider" />
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Sofas & Couches</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bed Frames</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Beside Tables</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Dressing Tables</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Lighting</h4>
                                                    <hr class="divider" />
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Light Bulbs</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Lamps</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Celling Lights</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Wall Lights</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Bathroom
                                                                Lighting</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Home Accessories</h4>
                                                    <hr class="divider" />
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Decorative
                                                                Accessories</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Candals &
                                                                Holders</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Home Fragrance</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Clocks</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Garden & Outdoors</h4>
                                                    <hr class="divider" />
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Garden
                                                                Furniture</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Lawn Mowers</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Pressure
                                                                Washers</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">All Garden
                                                                Tools</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Outdoor Dining</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-6">
                                                    <div class="banner banner-fixed menu-banner5 br-xs">
                                                        <figure>
                                                            <img src="{{ asset('assets/frontend/images/menu/banner-5.jpg') }}" alt="Banner"
                                                                 width="410" height="123"
                                                                 style="background-color: #D2D2D2;" />
                                                        </figure>
                                                        <div class="banner-content text-right y-50">
                                                            <h4
                                                                class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                                New Arrivals</h4>
                                                            <h3
                                                                class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                                Amazing Sofa</h3>
                                                            <div
                                                                class="banner-price-info font-weight-normal ls-normal">
                                                                Starting at <strong>$125.00</strong></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="banner banner-fixed menu-banner5 br-xs">
                                                        <figure>
                                                            <img src="{{ asset('assets/frontend/images/menu/banner-6.jpg') }}" alt="Banner"
                                                                 width="410" height="123"
                                                                 style="background-color: #9F9888;" />
                                                        </figure>
                                                        <div class="banner-content y-50">
                                                            <h4
                                                                class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                                Best Seller</h4>
                                                            <h3
                                                                class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                                Chair &amp; Lamp</h3>
                                                            <div
                                                                class="banner-price-info font-weight-normal ls-normal text-white">
                                                                From <strong>$165.00</strong></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-electronics"></i>Electronics
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="vendor-dokan-store-list.html">Store Listing</a>
                                                <ul>
                                                    <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                                    <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                                    <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                                    <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="vendor-dokan-store.html">Vendor Store</a>
                                                <ul>
                                                    <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                                    <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a>
                                                    </li>
                                                    <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a>
                                                    </li>
                                                    <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-banner-sidebar.html"
                                           class="font-weight-bold text-primary text-uppercase ls-25">
                                            View All Categories<i class="w-icon-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <nav class="main-nav">
                            <ul class="menu active-underline">
                                <li class="active">
                                    <a href="demo1.html">Home</a>
                                </li>
                                <li>
                                    <a href="shop-banner-sidebar.html">Shop</a>

                                    <!-- Start of Megamenu -->
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Shop Pages</h4>
                                            <ul>
                                                <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                                <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Full Width Banner</a></li>
                                                <li><a href="shop-horizontal-filter.html">Horizontal Filter<span
                                                            class="tip tip-hot">Hot</span></a></li>
                                                <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span
                                                            class="tip tip-new">New</span></a></li>
                                                <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a>
                                                </li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Shop Layouts</h4>
                                            <ul>
                                                <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                                <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                <li><a href="shop-list.html">List Mode</a></li>
                                                <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Product Pages</h4>
                                            <ul>
                                                <li><a href="product-variable.html">Variable Product</a></li>
                                                <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                                <li><a href="product-accordion.html">Data In Accordion</a></li>
                                                <li><a href="product-section.html">Data In Sections</a></li>
                                                <li><a href="product-swatch.html">Image Swatch</a></li>
                                                <li><a href="product-extended.html">Extended Info</a>
                                                </li>
                                                <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                                <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span
                                                            class="tip tip-new">New</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Product Layouts</h4>
                                            <ul>
                                                <li><a href="product-default.html">Default<span
                                                            class="tip tip-hot">Hot</span></a></li>
                                                <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                                <li><a href="product-grid.html">Grid Images</a></li>
                                                <li><a href="product-masonry.html">Masonry</a></li>
                                                <li><a href="product-gallery.html">Gallery</a></li>
                                                <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                                <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                                <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- End of Megamenu -->
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
                        <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of Header -->

    <!-- Start of Main-->
    <main class="main">
        <section class="intro-section">
            <div class="owl-carousel owl-theme owl-nav-inner owl-dot-inner owl-nav-lg animation-slider gutter-no row cols-1"
                 data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'items': 1,
                    'responsive': {
                        '1600': {
                            'nav': true,
                            'dots': false
                        }
                    }
                }">
                <div class="banner banner-fixed intro-slide intro-slide1"
                     style="background-image: url({{ asset('assets/frontend/images/demos/demo1/sliders/slide-1.jpg') }}); background-color: #ebeef2;">
                    <div class="container">
                        <figure class="slide-image skrollable slide-animate">
                            <img src="{{ asset('assets/frontend/images/demos/demo1/sliders/shoes.png') }}" alt="Banner"
                                 data-bottom-top="transform: translateY(10vh);"
                                 data-top-bottom="transform: translateY(-10vh);" width="474" height="397">
                        </figure>
                        <div class="banner-content y-50 text-right">
                            <h5 class="banner-subtitle font-weight-normal text-default ls-50 lh-1 mb-2 slide-animate"
                                data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.2s'
                                }">
                                Custom <span class="p-relative d-inline-block">Men’s</span>
                            </h5>
                            <h3 class="banner-title font-weight-bolder ls-25 lh-1 slide-animate"
                                data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.4s'
                                }">
                                RUNNING SHOES
                            </h3>
                            <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.6s'
                                }">
                                Sale up to <span class="font-weight-bolder text-secondary">30% OFF</span>
                            </p>

                            <a href="shop-list.html"
                               class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                               data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.8s'
                                }">SHOP NOW<i class="w-icon-long-arrow-right"></i></a>

                        </div>
                        <!-- End of .banner-content -->
                    </div>
                    <!-- End of .container -->
                </div>
                <!-- End of .intro-slide1 -->

                <div class="banner banner-fixed intro-slide intro-slide2"
                     style="background-image: url({{ asset('assets/frontend/images/demos/demo1/sliders/slide-2.jpg') }}); background-color: #ebeef2;">
                    <div class="container">
                        <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                'name': 'fadeInUpShorter',
                                'duration': '1s'
                            }">
                            <img src="{{ asset('assets/frontend/images/demos/demo1/sliders/men.png') }}" alt="Banner"
                                 data-bottom-top="transform: translateX(10vh);"
                                 data-top-bottom="transform: translateX(-10vh);" width="480" height="633">
                        </figure>
                        <div class="banner-content d-inline-block y-50">
                            <h5 class="banner-subtitle font-weight-normal text-default ls-50 slide-animate"
                                data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s',
                                    'delay': '.2s'
                                }">
                                Mountain-<span class="text-secondary">Climbing</span>
                            </h5>
                            <h3 class="banner-title font-weight-bolder text-dark mb-0 ls-25 slide-animate"
                                data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s',
                                    'delay': '.4s'
                                }">
                                Hot & Packback
                            </h3>
                            <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s',
                                    'delay': '.8s'
                                }">
                                Only until the end of this week.
                            </p>
                            <a href="shop-banner-sidebar.html"
                               class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                               data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s',
                                    'delay': '1s'
                                }">
                                SHOP NOW<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                        <!-- End of .banner-content -->
                    </div>
                    <!-- End of .container -->
                </div>
                <!-- End of .intro-slide2 -->

                <div class="banner banner-fixed intro-slide intro-slide3"
                     style="background-image: url({{ asset('assets/frontend/images/demos/demo1/sliders/slide-3.jpg') }}); background-color: #f0f1f2;">
                    <div class="container">
                        <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                'name': 'fadeInDownShorter',
                                'duration': '1s'
                            }">
                            <img src="{{ asset('assets/frontend/images/demos/demo1/sliders/skate.png') }}" alt="Banner"
                                 data-bottom-top="transform: translateY(10vh);"
                                 data-top-bottom="transform: translateY(-10vh);" width="310" height="444">
                        </figure>
                        <div class="banner-content text-right y-50">
                            <p class="font-weight-normal text-default text-uppercase mb-0 slide-animate"
                               data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'duration': '1s',
                                    'delay': '.6s'
                                }">
                                Top weekly Seller
                            </p>
                            <h5 class="banner-subtitle font-weight-normal text-default ls-25 slide-animate"
                                data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'duration': '1s',
                                    'delay': '.4s'
                                }">
                                Trending Collection
                            </h5>
                            <h3 class="banner-title p-relative font-weight-bolder ls-50 slide-animate"
                                data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'duration': '1s',
                                    'delay': '.2s'
                                }"><span class="text-white mr-4">Roller</span>-skate
                            </h3>
                            <div class="btn-group slide-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'duration': '1s',
                                    'delay': '.8s'
                                }">
                                <a href="shop-list.html"
                                   class="btn btn-dark btn-outline btn-rounded btn-icon-right">SHOP
                                    NOW<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                            <!-- End of .banner-content -->
                        </div>
                        <!-- End of .container -->
                    </div>
                </div>
                <!-- End of .intro-slide3 -->
            </div>
            <!-- End of .owl-carousel -->
        </section>
        <!-- End of .intro-section -->

        <div class="container">
            <div class="owl-carousel owl-theme row cols-md-4 cols-sm-3 cols-1icon-box-wrapper appear-animate br-sm mt-6 mb-6"
                 data-owl-options="{
                    'nav': false,
                    'dots': false,
                    'loop': false,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        },
                        '992': {
                            'items': 3
                        },
                        '1200': {
                            'items': 4
                        }
                    }
                }">
                <div class="icon-box icon-box-side icon-box-primary">
                        <span class="icon-box-icon icon-shipping">
                            <i class="w-icon-truck"></i>
                        </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold mb-1">Free Shipping & Returns</h4>
                        <p class="text-default">For all orders over $99</p>
                    </div>
                </div>
                <div class="icon-box icon-box-side icon-box-primary">
                        <span class="icon-box-icon icon-payment">
                            <i class="w-icon-bag"></i>
                        </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold mb-1">Secure Payment</h4>
                        <p class="text-default">We ensure secure payment</p>
                    </div>
                </div>
                <div class="icon-box icon-box-side icon-box-primary icon-box-money">
                        <span class="icon-box-icon icon-money">
                            <i class="w-icon-money"></i>
                        </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold mb-1">Money Back Guarantee</h4>
                        <p class="text-default">Any back within 30 days</p>
                    </div>
                </div>
                <div class="icon-box icon-box-side icon-box-primary icon-box-chat">
                        <span class="icon-box-icon icon-chat">
                            <i class="w-icon-chat"></i>
                        </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold mb-1">Customer Support</h4>
                        <p class="text-default">Call or email us 24/7</p>
                    </div>
                </div>
            </div>
            <!-- End of Iocn Box Wrapper -->

            <div class="row category-banner-wrapper appear-animate pt-6 pb-8">
                <div class="col-md-6 mb-4">
                    <div class="banner banner-fixed br-xs">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/demos/demo1/categories/1-1.jpg') }}" alt="Category Banner"
                                 width="610" height="160" style="background-color: #ecedec;" />
                        </figure>
                        <div class="banner-content y-50 mt-0">
                            <h5 class="banner-subtitle font-weight-normal text-dark">Get up to <span
                                    class="text-secondary font-weight-bolder text-uppercase ls-25">20% Off</span>
                            </h5>
                            <h3 class="banner-title text-uppercase">Sports Outfits<br><span
                                    class="font-weight-normal                       text-capitalize">Collection</span>
                            </h3>
                            <div class="banner-price-info font-weight-normal">Starting at <span
                                    class="text-secondary                       font-weight-bolder">$170.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="banner banner-fixed br-xs">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/demos/demo1/categories/1-2.jpg') }}" alt="Category Banner"
                                 width="610" height="160" style="background-color: #636363;" />
                        </figure>
                        <div class="banner-content y-50 mt-0">
                            <h5 class="banner-subtitle font-weight-normal text-capitalize">New Arrivals</h5>
                            <h3 class="banner-title text-white text-uppercase">Accessories<br><span
                                    class="font-weight-normal text-capitalize">Collection</span></h3>
                            <div class="banner-price-info text-white font-weight-normal text-capitalize">Only From
                                <span class="text-secondary font-weight-bolder">$90.00</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Category Banner Wrapper -->

            <div class="row deals-wrapper appear-animate mb-8">
                <div class="col-lg-9 mb-4">
                    <div class="single-product h-100 br-sm">
                        <h4 class="title-sm title-underline font-weight-bolder ls-normal">Deals Hot Of The Day</h4>
                        <div class="owl-carousel owl-theme owl-nav-top owl-nav-lg row cols-1 gutter-no"
                             data-owl-options="{
                                'nav': true,
                                'dots': false,
                                'margin': 20,
                                'items': 1
                            }">
                            <div class="product product-single row">
                                <div class="col-md-6">
                                    <div class="product-gallery product-gallery-vertical mb-0">
                                        <div
                                            class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/1-1-600x675.jpg') }}"
                                                     data-zoom-image="{{ asset('assets/frontend/images/demos/demo1/products/1-1-800x900.jpg') }}"
                                                     alt="Product Image" width="800" height="900">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/1-2-600x675.jpg') }}"
                                                     data-zoom-image="{{ asset('assets/frontend/images/demos/demo1/products/1-2-800x900.jpg') }}"
                                                     alt="Product Image" width="362" height="408">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/1-3-600x675.jpg') }}"
                                                     data-zoom-image="{{ asset('assets/frontend/images/demos/demo1/products/1-3-800x900.jpg') }}"
                                                     alt="Product Image" width="362" height="408">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/1-4-600x675.jpg') }}"
                                                     data-zoom-image="{{ asset('assets/frontend/images/demos/demo1/products/1-4-800x900.jpg') }}"
                                                     alt="Product Image" width="362" height="408">
                                            </figure>
                                        </div>
                                        <div class="product-thumbs-wrap">
                                            <div class="product-thumbs">
                                                <div class="product-thumb active">
                                                    <img src="{{ asset('assets/frontend/images/demos/demo1/products/1-1-600x675.jpg') }}"
                                                         alt="Product thumb" width="60" height="68" />
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="{{ asset('assets/frontend/images/demos/demo1/products/1-2-600x675.jpg') }}"
                                                         alt="Product thumb" width="60" height="68" />
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="{{ asset('assets/frontend/images/demos/demo1/products/1-3-600x675.jpg') }}"
                                                         alt="Product thumb" width="60" height="68" />
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="{{ asset('assets/frontend/images/demos/demo1/products/1-4-600x675.jpg') }}"
                                                         alt="Product thumb" width="60" height="68" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">25% Off</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-details scrollable">
                                        <h2 class="product-title mb-1"><a href="product-default.html">Coat Pool
                                                Comfort Jacket</a></h2>

                                        <hr class="product-divider">

                                        <div class="product-price"><ins class="new-price ls-50">$150.00 -
                                                $180.00</ins></div>

                                        <div class="product-countdown-container flex-wrap">
                                            <label class="mr-2 text-default">Offer Ends In:</label>
                                            <div class="product-countdown countdown-compact"
                                                 data-until="2022, 12, 31" data-compact="true">
                                                629 days, 11: 59: 52</div>
                                        </div>

                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#" class="rating-reviews">(3 Reviews)</a>
                                        </div>

                                        <div class="product-form product-variation-form product-size-swatch mb-3">
                                            <label class="mb-1">Size:</label>
                                            <div class="flex-wrap d-flex align-items-center product-variations">
                                                <a href="#" class="size">Extra Large</a>
                                                <a href="#" class="size">Large</a>
                                                <a href="#" class="size">Medium</a>
                                                <a href="#" class="size">Small</a>
                                            </div>
                                            <a href="#" class="product-variation-clean">Clean All</a>
                                        </div>

                                        <div class="product-variation-price">
                                            <span></span>
                                        </div>

                                        <div class="product-form pt-4">
                                            <div class="product-qty-form mb-2 mr-2">
                                                <div class="input-group">
                                                    <input class="quantity form-control" type="number" min="1"
                                                           max="10000000">
                                                    <button class="quantity-plus w-icon-plus"></button>
                                                    <button class="quantity-minus w-icon-minus"></button>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-cart">
                                                <i class="w-icon-cart"></i>
                                                <span>Add to Cart</span>
                                            </button>
                                        </div>

                                        <div class="social-links-wrapper mt-1">
                                            <div class="social-links">
                                                <div class="social-icons social-no-color border-thin">
                                                    <a href="#"
                                                       class="social-icon social-facebook w-icon-facebook"></a>
                                                    <a href="#"
                                                       class="social-icon social-twitter w-icon-twitter"></a>
                                                    <a href="#"
                                                       class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                    <a href="#"
                                                       class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                    <a href="#"
                                                       class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                </div>
                                            </div>
                                            <span class="divider d-xs-show"></span>
                                            <div class="product-link-wrapper d-flex">
                                                <a href="#"
                                                   class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                                <a href="#"
                                                   class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Single -->
                            <div class="product product-single row">
                                <div class="col-md-6">
                                    <div class="product-gallery product-gallery-vertical mb-0">
                                        <div
                                            class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-1-600x675.jpg') }}"
                                                     data-zoom-image="{{ asset('assets/frontend/images/demos/demo1/products/2-1-800x900.jpg') }}"
                                                     alt="Product Image" width="800" height="900">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-2-600x675.jpg') }}"
                                                     data-zoom-image="{{ asset('assets/frontend/images/demos/demo1/products/2-2-800x900.jpg') }}"
                                                     alt="Product Image" width="362" height="408">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-3-600x675.jpg') }}"
                                                     data-zoom-image="{{ asset('assets/frontend/images/demos/demo1/products/2-3-800x900.jpg') }}"
                                                     alt="Product Image" width="362" height="408">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-4-600x675.jpg') }}"
                                                     data-zoom-image="{{ asset('assets/frontend/images/demos/demo1/products/2-4-800x900.jpg') }}"
                                                     alt="Product Image" width="362" height="408">
                                            </figure>
                                        </div>
                                        <div class="product-thumbs-wrap">
                                            <div class="product-thumbs">
                                                <div class="product-thumb active">
                                                    <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-1-600x675.jpg') }}"
                                                         alt="Product thumb" width="60" height="68" />
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-2-600x675.jpg') }}"
                                                         alt="Product thumb" width="60" height="68" />
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-3-600x675.jpg') }}"
                                                         alt="Product thumb" width="60" height="68" />
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-4-600x675.jpg') }}"
                                                         alt="Product thumb" width="60" height="68" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">25% Off</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-details scrollable">
                                        <h2 class="product-title mb-1"><a href="product-default.html">Beyond OTP
                                                Shirt</a></h2>

                                        <hr class="product-divider">

                                        <div class="product-price"><ins class="new-price ls-50">$26.00</ins></div>

                                        <div class="product-countdown-container flex-wrap">
                                            <label class="mr-2 text-default">Offer Ends In:</label>
                                            <div class="product-countdown countdown-compact"
                                                 data-until="2022, 12, 31" data-compact="true">
                                                629 days, 11: 59: 52</div>
                                        </div>

                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#product-tab-reviews" class="rating-reviews">(3 Reviews)</a>
                                        </div>

                                        <div class="product-form product-variation-form product-size-swatch mb-3">
                                            <label class="mb-1">Size:</label>
                                            <div class="flex-wrap d-flex align-items-center product-variations">
                                                <a href="#" class="size">Extra Large</a>
                                                <a href="#" class="size">Large</a>
                                                <a href="#" class="size">Medium</a>
                                                <a href="#" class="size">Small</a>
                                            </div>
                                            <a href="#" class="product-variation-clean">Clean All</a>
                                        </div>

                                        <div class="product-variation-price">
                                            <span></span>
                                        </div>

                                        <div class="product-form pt-4">
                                            <div class="product-qty-form mb-2 mr-2">
                                                <div class="input-group">
                                                    <input class="quantity form-control" type="number" min="1"
                                                           max="10000000">
                                                    <button class="quantity-plus w-icon-plus"></button>
                                                    <button class="quantity-minus w-icon-minus"></button>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-cart">
                                                <i class="w-icon-cart"></i>
                                                <span>Add to Cart</span>
                                            </button>
                                        </div>

                                        <div class="social-links-wrapper mt-1">
                                            <div class="social-links">
                                                <div class="social-icons social-no-color border-thin">
                                                    <a href="#"
                                                       class="social-icon social-facebook w-icon-facebook"></a>
                                                    <a href="#"
                                                       class="social-icon social-twitter w-icon-twitter"></a>
                                                    <a href="#"
                                                       class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                    <a href="#"
                                                       class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                    <a href="#"
                                                       class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                </div>
                                            </div>
                                            <span class="divider d-xs-show"></span>
                                            <div class="product-link-wrapper d-flex">
                                                <a href="#"
                                                   class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                                <a href="#"
                                                   class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Single -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="widget widget-products widget-products-bordered h-100">
                        <div class="widget-body br-sm h-100">
                            <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2">Top 20 Best
                                Seller</h4>
                            <div class="owl-carousel owl-theme owl-nav-top row cols-lg-1 cols-md-3"
                                 data-owl-options="{
                                    'nav': true,
                                    'dots': false,
                                    'margin': 20,
                                    'responsive': {
                                        '0': {
                                            'items': 1
                                        },
                                        '576': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3
                                        },
                                        '992': {
                                            'items': 1
                                        }
                                    }
                                }">
                                <div class="product-widget-wrap">
                                    <div class="product product-widget bb-no">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-1.jpg') }}" alt="Product"
                                                     width="105" height="118" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Kitchen Cooker</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$150.60</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-widget bb-no">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-2.jpg') }}" alt="Product"
                                                     width="105" height="118" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Professional Pixel Camera</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$215.68</ins><del
                                                    class="old-price">$230.45</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-3.jpg') }}" alt="Product"
                                                     width="105" height="118" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Sport Women’s Wear</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$220.20</ins><del
                                                    class="old-price">$300.62</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-widget-wrap">
                                    <div class="product product-widget bb-no">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-4.jpg') }}" alt="Product"
                                                     width="105" height="118" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Latest Speaker</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$250.68</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-widget bb-no">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-5.jpg') }}" alt="Product"
                                                     width="105" height="118" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Men's Black Wrist Watch</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$135.60</ins><del
                                                    class="old-price">$155.70</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-6.jpg') }}" alt="Product"
                                                     width="105" height="118" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Wash Machine</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$215.68</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-widget-wrap">
                                    <div class="product product-widget bb-no">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-7.jpg') }}" alt="Product"
                                                     width="105" height="118" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Security Guard</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$320.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-widget bb-no">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-8.jpg') }}" alt="Product"
                                                     width="105" height="118" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Apple Super Notecom</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$243.30</ins><del
                                                    class="old-price">$253.50</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/2-9.jpg') }}" alt="Product"
                                                     width="105" height="118" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">HD Television</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$450.68</ins><del
                                                    class="old-price">$500.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Deals Wrapper -->
        </div>

        <section class="category-section top-category bg-grey pt-10 pb-10 appear-animate">
            <div class="container pb-2">
                <h2 class="title justify-content-center pt-1 ls-normal mb-5">Top Categories Of The Month</h2>
                <div class="owl-carousel owl-theme row cols-lg-6 cols-md-5 cols-sm-3 cols-2" data-owl-options="{
                        'nav': false,
                        'dots': false,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '576': {
                                'items': 3
                            },
                            '768': {
                                'items': 5
                            },
                            '992': {
                                'items': 6
                            }
                        }
                    }">
                    <div class="category category-classic category-absolute overlay-zoom br-xs">
                        <a href="shop-banner-sidebar.html" class="category-media">
                            <img src="{{ asset('assets/frontend/images/demos/demo1/categories/2-1.jpg') }}" alt="Category" width="130"
                                 height="130">
                        </a>
                        <div class="category-content">
                            <h4 class="category-name">Fashion</h4>
                            <a href="shop-banner-sidebar.html" class="btn btn-primary btn-link btn-underline">Shop
                                Now</a>
                        </div>
                    </div>
                    <div class="category category-classic category-absolute overlay-zoom br-xs">
                        <a href="shop-banner-sidebar.html" class="category-media">
                            <img src="{{ asset('assets/frontend/images/demos/demo1/categories/2-2.jpg') }}" alt="Category" width="130"
                                 height="130">
                        </a>
                        <div class="category-content">
                            <h4 class="category-name">Furniture</h4>
                            <a href="shop-banner-sidebar.html" class="btn btn-primary btn-link btn-underline">Shop
                                Now</a>
                        </div>
                    </div>
                    <div class="category category-classic category-absolute overlay-zoom br-xs">
                        <a href="shop-banner-sidebar.html" class="category-media">
                            <img src="{{ asset('assets/frontend/images/demos/demo1/categories/2-3.jpg') }}" alt="Category" width="130"
                                 height="130">
                        </a>
                        <div class="category-content">
                            <h4 class="category-name">Shoes</h4>
                            <a href="shop-banner-sidebar.html" class="btn btn-primary btn-link btn-underline">Shop
                                Now</a>
                        </div>
                    </div>
                    <div class="category category-classic category-absolute overlay-zoom br-xs">
                        <a href="shop-banner-sidebar.html" class="category-media">
                            <img src="{{ asset('assets/frontend/images/demos/demo1/categories/2-4.jpg') }}" alt="Category" width="130"
                                 height="130">
                        </a>
                        <div class="category-content">
                            <h4 class="category-name">Sports</h4>
                            <a href="shop-banner-sidebar.html" class="btn btn-primary btn-link btn-underline">Shop
                                Now</a>
                        </div>
                    </div>
                    <div class="category category-classic category-absolute overlay-zoom br-xs">
                        <a href="shop-banner-sidebar.html" class="category-media">
                            <img src="{{ asset('assets/frontend/images/demos/demo1/categories/2-5.jpg') }}" alt="Category" width="130"
                                 height="130">
                        </a>
                        <div class="category-content">
                            <h4 class="category-name">Games</h4>
                            <a href="shop-banner-sidebar.html" class="btn btn-primary btn-link btn-underline">Shop
                                Now</a>
                        </div>
                    </div>
                    <div class="category category-classic category-absolute overlay-zoom br-xs">
                        <a href="shop-banner-sidebar.html" class="category-media">
                            <img src="{{ asset('assets/frontend/images/demos/demo1/categories/2-6.jpg') }}" alt="Category" width="130"
                                 height="130">
                        </a>
                        <div class="category-content">
                            <h4 class="category-name">Computers</h4>
                            <a href="shop-banner-sidebar.html" class="btn btn-primary btn-link btn-underline">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of .category-section top-category -->

        <div class="container">
            <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate">Popular Departments
            </h2>
            <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                    <li class="nav-item mr-2 mb-2">
                        <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">New arrivals</a>
                    </li>
                    <li class="nav-item mr-2 mb-2">
                        <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Best seller</a>
                    </li>
                    <li class="nav-item mr-2 mb-2">
                        <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-3">most popular</a>
                    </li>
                    <li class="nav-item mr-0 mb-2">
                        <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-4">Featured</a>
                    </li>
                </ul>
            </div>
            <!-- End of Tab -->
            <div class="tab-content product-wrapper appear-animate">
                <div class="tab-pane active pt-4" id="tab1-1">
                    <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-1-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-1-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$53.00</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women’s White
                                            Handbag</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$26.62</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-3.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-discount">7% Off</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                            iPhone</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">136.26</ins>
                                        <del class="old-price">$145.90</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-4-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-4-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$26.55 - $29.99</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-5.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-discount">4% Off</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$243.30</ins>
                                        <del class="old-price">$253.50</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-6-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-6-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$32.00 - $33.26</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-7.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$260.59 - $297.83</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-8-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-8-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$45.90</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-9.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                        </a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <span class="price">$64.47</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-10.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <span class="price">$173.84</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Tab Pane -->
                <div class="tab-pane pt-4" id="tab1-2">
                    <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-4-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-4-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$26.55 - $29.99</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-3.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-discount">7% Off</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                            iPhone</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">136.26</ins>
                                        <del class="old-price">$145.90</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-8-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-8-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$45.90</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-9.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                        </a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <span class="price">$64.47</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-5.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-discount">4% Off</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$243.30</ins>
                                        <del class="old-price">$253.50</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-6-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-6-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$32.00 - $33.26</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-7.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$260.59 - $297.83</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-1-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-1-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$53.00</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women’s White
                                            Handbag</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$26.62</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-10.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <span class="price">$173.84</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Tab Pane -->
                <div class="tab-pane pt-4" id="tab1-3">
                    <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-9.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                        </a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <span class="price">$64.47</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-1-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-1-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$53.00</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-3.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-discount">7% Off</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                            iPhone</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">136.26</ins>
                                        <del class="old-price">$145.90</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women’s White
                                            Handbag</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$26.62</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-10.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <span class="price">$173.84</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-8-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-8-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$45.90</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-5.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-discount">4% Off</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$243.30</ins>
                                        <del class="old-price">$253.50</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-7.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$260.59 - $297.83</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-6-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-6-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$32.00 - $33.26</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-4-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-4-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$26.55 - $29.99</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Tab Pane -->
                <div class="tab-pane pt-4" id="tab1-4">
                    <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-4-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-4-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$26.55 - $29.99</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-10.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <span class="price">$173.84</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-9.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                        </a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <span class="price">$64.47</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-8-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-8-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$45.90</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women’s White
                                            Handbag</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$26.62</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-5.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-discount">4% Off</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$243.30</ins>
                                        <del class="old-price">$253.50</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-3.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-discount">7% Off</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                            iPhone</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">136.26</ins>
                                        <del class="old-price">$145.90</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-7.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$260.59 - $297.83</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-6-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-6-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$32.00 - $33.26</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-1-1.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                        <img src="{{ asset('assets/frontend/images/demos/demo1/products/3-1-2.jpg') }}" alt="Product"
                                             width="300" height="338" />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                           title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                           title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                           title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                           title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 60%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$53.00</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Tab Pane -->
            </div>
            <!-- End of Tab Content -->

            <div class="row category-cosmetic-lifestyle appear-animate mb-5">
                <div class="col-md-6 mb-4">
                    <div class="banner banner-fixed category-banner-1 br-xs">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/demos/demo1/categories/3-1.jpg') }}" alt="Category Banner"
                                 width="610" height="200" style="background-color: #3B4B48;" />
                        </figure>
                        <div class="banner-content y-50 pt-1">
                            <h5 class="banner-subtitle font-weight-bold text-uppercase">Natural Process</h5>
                            <h3 class="banner-title font-weight-bolder text-capitalize text-white">Cosmetic
                                Makeup<br>Professional</h3>
                            <a href="shop-banner-sidebar.html"
                               class="btn btn-white btn-link btn-underline btn-icon-right">Shop Now<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="banner banner-fixed category-banner-2 br-xs">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/demos/demo1/categories/3-2.jpg') }}" alt="Category Banner"
                                 width="610" height="200" style="background-color: #E5E5E5;" />
                        </figure>
                        <div class="banner-content y-50 pt-1">
                            <h5 class="banner-subtitle font-weight-bold text-uppercase">Trending Now</h5>
                            <h3 class="banner-title font-weight-bolder text-capitalize">Women's
                                Lifestyle<br>Collection</h3>
                            <a href="shop-banner-sidebar.html"
                               class="btn btn-dark btn-link btn-underline btn-icon-right">Shop Now<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Category Cosmetic Lifestyle -->

            <div class="product-wrapper-1 appear-animate mb-5">
                <div class="title-link-wrapper pb-1 mb-4">
                    <h2 class="title ls-normal mb-0">Clothing & Apparel</h2>
                    <a href="shop-boxed-banner.html" class="font-size-normal font-weight-bold ls-25 mb-0">More
                        Products<i class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-4 mb-4">
                        <div class="banner h-100 br-sm" style="background-image: url({{ asset('assets/frontend/images/demos/demo1/banners/2.jpg') }});
                                background-color: #ebeced;">
                            <div class="banner-content content-top">
                                <h5 class="banner-subtitle font-weight-normal mb-2">Weekend Sale</h5>
                                <hr class="banner-divider bg-dark mb-2">
                                <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                                    New Arrivals<br> <span
                                        class="font-weight-normal text-capitalize">Collection</span>
                                </h3>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-dark btn-outline btn-rounded btn-sm">shop Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Banner -->
                    <div class="col-lg-9 col-sm-8">
                        <div class="owl-carousel owl-theme row cols-xl-4 cols-lg-3 cols-2" data-owl-options="{
                                'nav': false,
                                'dots': true,
                                'margin': 20,
                                'responsive': {
                                    '0': {
                                        'items': 2
                                    },
                                    '576': {
                                        'items': 2
                                    },
                                    '992': {
                                        'items': 3
                                    },
                                    '1200': {
                                        'items': 4
                                    }
                                }
                            }">
                            <div class="product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/4-1.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Men’s Clothing</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$23.99</ins><del class="old-price">$25.68</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/4-5-1.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/4-5-2.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Best Travel Bag</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$25.68</ins><del class="old-price">$28.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/4-2-1.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/4-2-2.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s Fashion
                                                Handbag </a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$25.68</ins><del class="old-price">$25.89</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/4-6.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Gray Leather
                                                Shoes</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.88</ins><del class="old-price">$27.89</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/4-3.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Black Winter
                                                Skating</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$40.86</ins><del class="old-price">$45.89</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/4-7.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Men's Black Wrist
                                                Watch</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$135.60</ins><del class="old-price">$155.70</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/4-4-1.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/4-4-2.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Sport Women's
                                                Wear</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$220.20</ins><del class="old-price">$300.62</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/4-8.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s Hiking
                                                Hat</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$53.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Product Wrapper 1 -->

            <div class="product-wrapper-1 appear-animate mb-8">
                <div class="title-link-wrapper pb-1 mb-4">
                    <h2 class="title ls-normal mb-0">Consumer Electric</h2>
                    <a href="shop-boxed-banner.html" class="font-size-normal font-weight-bold ls-25 mb-0">More
                        Products<i class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-4 mb-4">
                        <div class="banner h-100 br-sm" style="background-image: url({{ asset('assets/frontend/images/demos/demo1/banners/3.jpg') }});
                            background-color: #252525;">
                            <div class="banner-content content-top">
                                <h5 class="banner-subtitle text-white font-weight-normal mb-2">New Collection</h5>
                                <hr class="banner-divider bg-white mb-2">
                                <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">
                                    Top Camera <br> <span
                                        class="font-weight-normal text-capitalize">Mirrorless</span>
                                </h3>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-white btn-outline btn-rounded btn-sm">shop now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Banner -->
                    <div class="col-lg-9 col-sm-8">
                        <div class="owl-carousel owl-theme row cols-xl-4 cols-lg-3 cols-2" data-owl-options="{
                                'nav': false,
                                'dots': true,
                                'margin': 20,
                                'responsive': {
                                    '0': {
                                        'items': 2
                                    },
                                    '576': {
                                        'items': 2
                                    },
                                    '992': {
                                        'items': 3
                                    },
                                    '1200': {
                                        'items': 4
                                    }
                                }
                            }">
                            <div class="product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/5-1-1.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/5-1-2.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">6% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Professional Pixel
                                                Camera</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$215.68</ins><del class="old-price">$230.45</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/5-5.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Latest Speaker</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$250.68</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/5-2-1.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/5-2-2.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Wash Machine</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(9 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$215.68</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/5-6.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Security Guard</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$320.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/5-3.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">10% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">HD Television</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$450.68</ins><del class="old-price">$500.00</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/5-7.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">10% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">USB Receipt</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.89</ins><del class="old-price">$29.79</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/5-4.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Data Transformer
                                                Tool</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$64.47</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/5-8.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">7% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi Functional
                                                Apple iPhone</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(9 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$136.26</ins><del class="old-price">$145.90</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Produts -->
                    </div>
                </div>
            </div>
            <!-- End of Product Wrapper 1 -->

            <div class="banner banner-fashion appear-animate br-sm mb-9" style="background-image: url({{ asset('assets/frontend/images/demos/demo1/banners/4.jpg') }});
                    background-color: #383839;">
                <div class="banner-content align-items-center">
                    <div class="content-left d-flex align-items-center mb-3">
                        <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">
                            25
                            <sup class="font-weight-bold">%</sup><sub class="font-weight-bold ls-25">Off</sub>
                        </div>
                        <hr class="banner-divider bg-white mt-0 mb-0 mr-8">
                    </div>
                    <div class="content-right d-flex align-items-center flex-1 flex-wrap">
                        <div class="banner-info mb-0 mr-auto pr-4 mb-3">
                            <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">For Today's
                                Fashion</h3>
                            <p class="text-white mb-0">Use code
                                <span
                                    class="text-dark bg-white font-weight-bold ls-50 pl-1 pr-1 d-inline-block">Black
                                        <strong>12345</strong></span> to get best offer.</p>
                        </div>
                        <a href="shop-banner-sidebar.html"
                           class="btn btn-white btn-outline btn-rounded btn-icon-right mb-3">Shop Now<i
                                class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- End of Banner Fashion -->

            <div class="product-wrapper-1 appear-animate mb-7">
                <div class="title-link-wrapper pb-1 mb-4">
                    <h2 class="title ls-normal mb-0">Home Garden & Kitchen</h2>
                    <a href="shop-boxed-banner.html" class="font-size-normal font-weight-bold ls-25 mb-0">More
                        Products<i class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-4 mb-4">
                        <div class="banner h-100 br-sm" style="background-image: url({{ asset('assets/frontend/images/demos/demo1/banners/5.jpg') }});
                            background-color: #EAEFF3;">
                            <div class="banner-content content-top">
                                <h5 class="banner-subtitle font-weight-normal mb-2">Deals And Promotions</h5>
                                <hr class="banner-divider bg-dark mb-2">
                                <h3 class="banner-title font-weight-bolder text-uppercase ls-25">
                                    Trending <br> <span class="font-weight-normal text-capitalize">House
                                            Utensil</span>
                                </h3>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-dark btn-outline btn-rounded btn-sm">shop now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Banner -->
                    <div class="col-lg-9 col-sm-8">
                        <div class="owl-carousel owl-theme row cols-xl-4 cols-lg-3 cols-2" data-owl-options="{
                                'nav': false,
                                'dots': true,
                                'margin': 20,
                                'responsive': {
                                    '0': {
                                        'items': 2
                                    },
                                    '576': {
                                        'items': 2
                                    },
                                    '992': {
                                        'items': 3
                                    },
                                    '1200': {
                                        'items': 4
                                    }
                                }
                            }">
                            <div class="product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/6-1.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Home Sofa</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$75.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/6-5.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Electric
                                                Rice-Cooker</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$215.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/6-2-1.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/6-2-2.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">21% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Kitchen Table</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(9 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$75.50</ins><del class="old-price">$95.68</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/6-6.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Kitchen Cooker</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$150.60</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/6-3-1.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/6-3-2.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Table Lamp</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$45.60</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/6-7.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">12% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Electric Frying
                                                Pan</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$137.35</ins><del class="old-price">$155.65</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/6-4.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">18% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Latest Chair</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$70.00</ins><del class="old-price">$85.00</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/6-8-1.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                            <img src="{{ asset('assets/frontend/images/demos/demo1/products/6-8-2.jpg') }}" alt="Product"
                                                 width="216" height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                               title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                               title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Automatic
                                                Crusher</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(9 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$220.25</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Produts -->
                    </div>
                </div>
            </div>
            <!-- End of Product Wrapper 1 -->

            <h2 class="title title-underline mb-4 ls-normal appear-animate">Our Clients</h2>
            <div class="owl-carousel owl-theme brands-wrapper mb-9 row gutter-no cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2 appear-animate"
                 data-owl-options="{
                    'nav': false,
                    'dots': false,
                    'margin': 0,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 4
                        },
                        '992': {
                            'items': 5
                        },
                        '1200': {
                            'items': 6
                        }
                    }
                }">
                <div class="brand-col">
                    <figure class="brand-wrapper">
                        <img src="{{ asset('assets/frontend/images/demos/demo1/brands/1.png') }}" alt="Brand" width="410" height="186" />
                    </figure>
                    <figure class="brand-wrapper">
                        <img src="{{ asset('assets/frontend/images/demos/demo1/brands/2.png') }}" alt="Brand" width="410" height="186" />
                    </figure>
                </div>
                <div class="brand-col">
                    <figure class="brand-wrapper">
                        <img src="{{ asset('assets/frontend/images/demos/demo1/brands/3.png') }}" alt="Brand" width="410" height="186" />
                    </figure>
                    <figure class="brand-wrapper">
                        <img src="{{ asset('assets/frontend/images/demos/demo1/brands/4.png') }}" alt="Brand" width="410" height="186" />
                    </figure>
                </div>
                <div class="brand-col">
                    <figure class="brand-wrapper">
                        <img src="{{ asset('assets/frontend/images/demos/demo1/brands/5.png') }}" alt="Brand" width="410" height="186" />
                    </figure>
                    <figure class="brand-wrapper">
                        <img src="{{ asset('assets/frontend/images/demos/demo1/brands/6.png') }}" alt="Brand" width="410" height="186" />
                    </figure>
                </div>
                <div class="brand-col">
                    <figure class="brand-wrapper">
                        <img src="{{ asset('assets/frontend/images/demos/demo1/brands/7.png') }}" alt="Brand" width="410" height="186" />
                    </figure>
                    <figure class="brand-wrapper">
                        <img src="{{ asset('assets/frontend/images/demos/demo1/brands/8.png') }}" alt="Brand" width="410" height="186" />
                    </figure>
                </div>
                <div class="brand-col">
                    <figure class="brand-wrapper">
                        <img src="{{ asset('assets/frontend/images/demos/demo1/brands/9.png') }}" alt="Brand" width="410" height="186" />
                    </figure>
                    <figure class="brand-wrapper">
                        <img src="{{ asset('assets/frontend/images/demos/demo1/brands/10.png') }}" alt="Brand" width="410" height="186" />
                    </figure>
                </div>
                <div class="brand-col">
                    <figure class="brand-wrapper">
                        <img src="{{ asset('assets/frontend/images/demos/demo1/brands/11.png') }}" alt="Brand" width="410" height="186" />
                    </figure>
                    <figure class="brand-wrapper">
                        <img src="{{ asset('assets/frontend/images/demos/demo1/brands/12.png') }}" alt="Brand" width="410" height="186" />
                    </figure>
                </div>
            </div>
            <!-- End of Brands Wrapper -->

            <div class="post-wrapper appear-animate mb-4">
                <div class="title-link-wrapper pb-1 mb-4">
                    <h2 class="title ls-normal mb-0">From Our Blog</h2>
                    <a href="blog-listing.html" class="font-weight-bold font-size-normal">View All Articles</a>
                </div>
                <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-sm-2 cols-1" data-owl-options="{
                        'items': 4,
                        'nav': false,
                        'dots': true,
                        'loop': false,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '576': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4,
                                'dots': false
                            }
                        }
                    }">
                    <div class="post text-center overlay-zoom">
                        <figure class="post-media br-sm">
                            <a href="post-single.html">
                                <img src="{{ asset('assets/frontend/images/demos/demo1/blogs/1.jpg') }}" alt="Post" width="280" height="180"
                                     style="background-color: #4b6e91;" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date mr-0">03.05.2021</a>
                            </div>
                            <h4 class="post-title"><a href="post-single.html">Aliquam tincidunt mauris eurisus</a>
                            </h4>
                            <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="post text-center overlay-zoom">
                        <figure class="post-media br-sm">
                            <a href="post-single.html">
                                <img src="{{ asset('assets/frontend/images/demos/demo1/blogs/2.jpg') }}" alt="Post" width="280" height="180"
                                     style="background-color: #cec9cf;" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date mr-0">03.05.2021</a>
                            </div>
                            <h4 class="post-title"><a href="post-single.html">Cras ornare tristique elit</a></h4>
                            <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="post text-center overlay-zoom">
                        <figure class="post-media br-sm">
                            <a href="post-single.html">
                                <img src="{{ asset('assets/frontend/images/demos/demo1/blogs/3.jpg') }}" alt="Post" width="280" height="180"
                                     style="background-color: #c9c7bb;" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date mr-0">03.05.2021</a>
                            </div>
                            <h4 class="post-title"><a href="post-single.html">Vivamus vestibulum ntulla nec ante</a>
                            </h4>
                            <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="post text-center overlay-zoom">
                        <figure class="post-media br-sm">
                            <a href="post-single.html">
                                <img src="{{ asset('assets/frontend/images/demos/demo1/blogs/4.jpg') }}" alt="Post" width="280" height="180"
                                     style="background-color: #d8dce0;" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date mr-0">03.05.2021</a>
                            </div>
                            <h4 class="post-title"><a href="post-single.html">Fusce lacinia arcuet nulla</a></h4>
                            <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post Wrapper -->

            <h2 class="title title-underline mb-4 ls-normal appear-animate">Your Recent Views</h2>
            <div class="owl-carousel owl-theme owl-shadow-carousel appear-animate row cols-xl-8 cols-lg-6 cols-md-4 cols-2 pb-2 mb-10"
                 data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 5
                        },
                        '992': {
                            'items': 6
                        },
                        '1200': {
                            'items': 8,
                            'dots': false
                        }
                    }
                }">
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/7-1.jpg') }}" alt="Category image"
                                     width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Women's Fashion Handbag</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/7-2.jpg') }}" alt="Category image"
                                     width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Electric Frying Pan</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/7-3.jpg') }}" alt="Category image"
                                     width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Black Winter Skating</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/7-4.jpg') }}" alt="Category image"
                                     width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">HD Television</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/7-5.jpg') }}" alt="Category image"
                                     width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Home Sofa</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/7-6.jpg') }}" alt="Category image"
                                     width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">USB Receipt</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/7-7.jpg') }}" alt="Category image"
                                     width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Electric Rice-Cooker</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                <img src="{{ asset('assets/frontend/images/demos/demo1/products/7-8.jpg') }}" alt="Category image"
                                     width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Table Lamp</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
            </div>
            <!-- End of Reviewed Producs -->
        </div>
        <!--End of Catainer -->
    </main>
    <!-- End of Main -->

    <!-- Start of Footer -->
    <footer class="footer appear-animate" data-animation-options="{
            'name': 'fadeIn'
        }">
        <div class="footer-newsletter bg-primary">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="icon-box icon-box-side text-white">
                            <div class="icon-box-icon d-inline-flex">
                                <i class="w-icon-envelop3"></i>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title text-white text-uppercase font-weight-bold">Subscribe To
                                    Our Newsletter</h4>
                                <p class="text-white">Get all the latest information on Events, Sales and Offers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                        <form action="#" method="get"
                              class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                            <input type="email" class="form-control mr-2 bg-white" name="email" id="email"
                                   placeholder="Your E-mail Address" />
                            <button class="btn btn-dark btn-rounded" type="submit">Subscribe<i
                                    class="w-icon-long-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget widget-about">
                            <a href="demo1.html" class="logo-footer">
                                <img src="{{ asset('assets/frontend/images/logo_footer.png') }}" alt="logo-footer" width="144"
                                     height="45" />
                            </a>
                            <div class="widget-body">
                                <p class="widget-about-title">Got Question? Call us 24/7</p>
                                <a href="tel:18005707777" class="widget-about-call">1-800-570-7777</a>
                                <p class="widget-about-desc">Register now to get updates on pronot get up icons
                                    & coupons ster now toon.
                                </p>

                                <div class="social-icons social-icons-colored">
                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                    <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                    <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                    <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h3 class="widget-title">Company</h3>
                            <ul class="widget-body">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Team Member</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="#">Affilate</a></li>
                                <li><a href="#">Order History</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title">My Account</h4>
                            <ul class="widget-body">
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="cart.html">View Cart</a></li>
                                <li><a href="login.html">Sign In</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="wishlist.html">My Wishlist</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title">Customer Service</h4>
                            <ul class="widget-body">
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back guarantee!</a></li>
                                <li><a href="#">Product Returns</a></li>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Term and Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="widget widget-category">
                    <div class="category-box">
                        <h6 class="category-name">Consumer Electric:</h6>
                        <a href="#">TV Television</a>
                        <a href="#">Air Condition</a>
                        <a href="#">Refrigerator</a>
                        <a href="#">Washing Machine</a>
                        <a href="#">Audio Speaker</a>
                        <a href="#">Security Camera</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="category-box">
                        <h6 class="category-name">Clothing & Apparel:</h6>
                        <a href="#">Men's T-shirt</a>
                        <a href="#">Dresses</a>
                        <a href="#">Men's Sneacker</a>
                        <a href="#">Leather Backpack</a>
                        <a href="#">Watches</a>
                        <a href="#">Jeans</a>
                        <a href="#">Sunglasses</a>
                        <a href="#">Boots</a>
                        <a href="#">Rayban</a>
                        <a href="#">Acccessories</a>
                    </div>
                    <div class="category-box">
                        <h6 class="category-name">Home, Garden & Kitchen:</h6>
                        <a href="#">Sofa</a>
                        <a href="#">Chair</a>
                        <a href="#">Bed Room</a>
                        <a href="#">Living Room</a>
                        <a href="#">Cookware</a>
                        <a href="#">Utensil</a>
                        <a href="#">Blender</a>
                        <a href="#">Garden Equipments</a>
                        <a href="#">Decor</a>
                        <a href="#">Library</a>
                    </div>
                    <div class="category-box">
                        <h6 class="category-name">Health & Beauty:</h6>
                        <a href="#">Skin Care</a>
                        <a href="#">Body Shower</a>
                        <a href="#">Makeup</a>
                        <a href="#">Hair Care</a>
                        <a href="#">Lipstick</a>
                        <a href="#">Perfume</a>
                        <a href="#">View all</a>
                    </div>
                    <div class="category-box">
                        <h6 class="category-name">Jewelry & Watches:</h6>
                        <a href="#">Necklace</a>
                        <a href="#">Pendant</a>
                        <a href="#">Diamond Ring</a>
                        <a href="#">Silver Earing</a>
                        <a href="#">Leather Watcher</a>
                        <a href="#">Rolex</a>
                        <a href="#">Gucci</a>
                        <a href="#">Australian Opal</a>
                        <a href="#">Ammolite</a>
                        <a href="#">Sun Pyrite</a>
                    </div>
                    <div class="category-box">
                        <h6 class="category-name">Computer & Technologies:</h6>
                        <a href="#">Laptop</a>
                        <a href="#">iMac</a>
                        <a href="#">Smartphone</a>
                        <a href="#">Tablet</a>
                        <a href="#">Apple</a>
                        <a href="#">Asus</a>
                        <a href="#">Drone</a>
                        <a href="#">Wireless Speaker</a>
                        <a href="#">Game Controller</a>
                        <a href="#">View all</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-left">
                    <p class="copyright">Copyright © 2021 Wolmart Store. All Rights Reserved.</p>
                </div>
                <div class="footer-right">
                    <span class="payment-label mr-lg-8">We're using safe payment for</span>
                    <figure class="payment">
                        <img src="{{ asset('assets/frontend/images/payment.png') }}" alt="payment" width="159" height="25" />
                    </figure>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</div>
<!-- End of Page-wrapper-->

<!-- Start of Sticky Footer -->
<div class="sticky-footer sticky-content fix-bottom">
    <a href="demo1.html" class="sticky-link active">
        <i class="w-icon-home"></i>
        <p>Home</p>
    </a>
    <a href="shop-banner-sidebar.html" class="sticky-link">
        <i class="w-icon-category"></i>
        <p>Shop</p>
    </a>
    <a href="my-account.html" class="sticky-link">
        <i class="w-icon-account"></i>
        <p>Account</p>
    </a>
    <div class="cart-dropdown dir-up">
        <a href="cart.html" class="sticky-link">
            <i class="w-icon-cart"></i>
            <p>Cart</p>
        </a>
        <div class="dropdown-box">
            <div class="products">
                <div class="product product-cart">
                    <div class="product-detail">
                        <h3 class="product-name">
                            <a href="product-default.html">Beige knitted elas<br>tic
                                runner shoes</a>
                        </h3>
                        <div class="price-box">
                            <span class="product-quantity">1</span>
                            <span class="product-price">$25.68</span>
                        </div>
                    </div>
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="{{ asset('assets/frontend/images/cart/product-1.jpg') }}" alt="product" height="84" width="94" />
                        </a>
                    </figure>
                    <button class="btn btn-link btn-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="product product-cart">
                    <div class="product-detail">
                        <h3 class="product-name">
                            <a href="product-default.html">Blue utility pina<br>fore
                                denim dress</a>
                        </h3>
                        <div class="price-box">
                            <span class="product-quantity">1</span>
                            <span class="product-price">$32.99</span>
                        </div>
                    </div>
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="{{ asset('assets/frontend/images/cart/product-2.jpg') }}" alt="product" width="84" height="94" />
                        </a>
                    </figure>
                    <button class="btn btn-link btn-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="cart-total">
                <label>Subtotal:</label>
                <span class="price">$58.67</span>
            </div>

            <div class="cart-action">
                <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
            </div>
        </div>
        <!-- End of Dropdown Box -->
    </div>

    <div class="header-search hs-toggle dir-up">
        <a href="#" class="search-toggle sticky-link">
            <i class="w-icon-search"></i>
            <p>Search</p>
        </a>
        <form action="#" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                   required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
    </div>
</div>
<!-- End of Sticky Footer -->

<!-- Start of Scroll Top -->
<a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="fas fa-chevron-up"></i></a>
<!-- End of Scroll Top -->

<!-- Start of Mobile Menu -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay"></div>
    <!-- End of .mobile-menu-overlay -->

    <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
    <!-- End of .mobile-menu-close -->

    <div class="mobile-menu-container scrollable">
        <form action="#" method="get" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                   required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
        <!-- End of Search Form -->
        <div class="tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="#main-menu" class="nav-link active">Main Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#categories" class="nav-link">Categories</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="main-menu">
                <ul class="mobile-menu">
                    <li><a href="demo1.html">Home</a></li>
                    <li>
                        <a href="vendor-dokan-store.html">Vendor</a>
                        <ul>
                            <li>
                                <a href="#">Store Listing</a>
                                <ul>
                                    <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                    <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                    <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                    <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Vendor Store</a>
                                <ul>
                                    <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                    <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a></li>
                                    <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a></li>
                                    <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="categories">
                <ul class="mobile-menu">
                    <li>
                        <a href="shop-fullwidth-banner.html">
                            <i class="w-icon-tshirt2"></i>Fashion
                        </a>
                        <ul>
                            <li>
                                <a href="#">Women</a>
                                <ul>
                                    <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                    </li>
                                    <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                    </li>
                                    <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                    <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                    <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                    <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                    <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                    </li>
                                    <li><a href="shop-fullwidth-banner.html">Jewlery &
                                            Watches</a></li>
                                    <li><a href="shop-fullwidth-banner.html">Sale</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Men</a>
                                <ul>
                                    <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                    </li>
                                    <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                    </li>
                                    <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                    <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                    <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                    <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                    <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                    </li>
                                    <li><a href="shop-fullwidth-banner.html">Jewlery &
                                            Watches</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="shop-banner-sidebar.html"
                           class="font-weight-bold text-primary text-uppercase ls-25">
                            View All Categories<i class="w-icon-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End of Mobile Menu -->

<!-- Start of Quick View -->
<div class="product product-single product-popup">
    <div class="row gutter-lg">
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="product-gallery product-gallery-sticky mb-0">
                <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                    <figure class="product-image">
                        <img src="{{ asset('assets/frontend/images/products/popup/1-440x494.jpg') }}"
                             data-zoom-image="{{ asset('assets/frontend/images/products/popup/1-800x900.jpg') }}"
                             alt="Water Boil Black Utensil" width="800" height="900">
                    </figure>
                    <figure class="product-image">
                        <img src="{{ asset('assets/frontend/images/products/popup/2-440x494.jpg') }}"
                             data-zoom-image="{{ asset('assets/frontend/images/products/popup/2-800x900.jpg') }}"
                             alt="Water Boil Black Utensil" width="800" height="900">
                    </figure>
                    <figure class="product-image">
                        <img src="{{ asset('assets/frontend/images/products/popup/3-440x494.jpg') }}"
                             data-zoom-image="{{ asset('assets/frontend/images/products/popup/3-800x900.jpg') }}"
                             alt="Water Boil Black Utensil" width="800" height="900">
                    </figure>
                    <figure class="product-image">
                        <img src="{{ asset('assets/frontend/images/products/popup/4-440x494.jpg') }}"
                             data-zoom-image="{{ asset('assets/frontend/images/products/popup/4-800x900.jpg') }}"
                             alt="Water Boil Black Utensil" width="800" height="900">
                    </figure>
                </div>
                <div class="product-thumbs-wrap">
                    <div class="product-thumbs">
                        <div class="product-thumb active">
                            <img src="{{ asset('assets/frontend/images/products/popup/1-103x116.jpg') }}" alt="Product Thumb" width="103"
                                 height="116">
                        </div>
                        <div class="product-thumb">
                            <img src="{{ asset('assets/frontend/images/products/popup/2-103x116.jpg') }}" alt="Product Thumb" width="103"
                                 height="116">
                        </div>
                        <div class="product-thumb">
                            <img src="{{ asset('assets/frontend/images/products/popup/3-103x116.jpg') }}" alt="Product Thumb" width="103"
                                 height="116">
                        </div>
                        <div class="product-thumb">
                            <img src="{{ asset('assets/frontend/images/products/popup/4-103x116.jpg') }}" alt="Product Thumb" width="103"
                                 height="116">
                        </div>
                    </div>
                    <button class="thumb-up disabled"><i class="w-icon-angle-left"></i></button>
                    <button class="thumb-down disabled"><i class="w-icon-angle-right"></i></button>
                </div>
            </div>
        </div>
        <div class="col-md-6 overflow-hidden p-relative">
            <div class="product-details scrollable pl-0">
                <h2 class="product-title">Electronics Black Wrist Watch</h2>
                <div class="product-bm-wrapper">
                    <figure class="brand">
                        <img src="{{ asset('assets/frontend/images/products/brand/brand-1.jpg') }}" alt="Brand" width="102" height="48" />
                    </figure>
                    <div class="product-meta">
                        <div class="product-categories">
                            Category:
                            <span class="product-category"><a href="#">Electronics</a></span>
                        </div>
                        <div class="product-sku">
                            SKU: <span>MS46891340</span>
                        </div>
                    </div>
                </div>

                <hr class="product-divider">

                <div class="product-price">$40.00</div>

                <div class="ratings-container">
                    <div class="ratings-full">
                        <span class="ratings" style="width: 80%;"></span>
                        <span class="tooltiptext tooltip-top"></span>
                    </div>
                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                </div>

                <div class="product-short-desc">
                    <ul class="list-type-check list-style-none">
                        <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                        <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                        <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                    </ul>
                </div>

                <hr class="product-divider">

                <div class="product-form product-variation-form product-color-swatch">
                    <label>Color:</label>
                    <div class="d-flex align-items-center product-variations">
                        <a href="#" class="color" style="background-color: #ffcc01"></a>
                        <a href="#" class="color" style="background-color: #ca6d00;"></a>
                        <a href="#" class="color" style="background-color: #1c93cb;"></a>
                        <a href="#" class="color" style="background-color: #ccc;"></a>
                        <a href="#" class="color" style="background-color: #333;"></a>
                    </div>
                </div>
                <div class="product-form product-variation-form product-size-swatch">
                    <label class="mb-1">Size:</label>
                    <div class="flex-wrap d-flex align-items-center product-variations">
                        <a href="#" class="size">Small</a>
                        <a href="#" class="size">Medium</a>
                        <a href="#" class="size">Large</a>
                        <a href="#" class="size">Extra Large</a>
                    </div>
                    <a href="#" class="product-variation-clean">Clean All</a>
                </div>

                <div class="product-variation-price">
                    <span></span>
                </div>

                <div class="product-form">
                    <div class="product-qty-form">
                        <div class="input-group">
                            <input class="quantity form-control" type="number" min="1" max="10000000">
                            <button class="quantity-plus w-icon-plus"></button>
                            <button class="quantity-minus w-icon-minus"></button>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-cart">
                        <i class="w-icon-cart"></i>
                        <span>Add to Cart</span>
                    </button>
                </div>

                <div class="social-links-wrapper">
                    <div class="social-links">
                        <div class="social-icons social-no-color border-thin">
                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                            <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                            <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                            <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                        </div>
                    </div>
                    <span class="divider d-xs-show"></span>
                    <div class="product-link-wrapper d-flex">
                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                        <a href="#"
                           class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Quick view -->

<!-- Plugin JS File -->
<script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/jquery.plugin/jquery.plugin.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/zoom/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendor/skrollr/skrollr.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/frontend/js/main.min.js') }}"></script>
</body>


<!-- Mirrored from portotheme.com/html/wolmart/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 16:30:11 GMT -->
</html>
