@extends('layouts.app')

@section('content')
<section class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mb-2">
                <div class="home-slider slide-animate owl-carousel owl-theme custom-nav" data-owl-options="{
                    'loop': false
                }">
                    <div class="home-slide home-slide-1 banner">
                        <img class="slide-bg" src="{{asset("images/demoes/demo22/slider/home_slide1.jpg")}}" alt="slider image" width="772" height="434">
                        <div class="banner-layer banner-layer-middle banner-layer-right">
                            <div class="appear-animate" data-animation-name="rotateInUpLeft">

                                <h2 class="font1 ls-10 text-uppercase text-right m-b-4">Today<br>Deals
                                </h2>
                                <div class="coupon-sale-text">
                                    <h4 class="m-b-2 font1 d-block text-white bg-dark skew-box">Exclusive COUPON
                                    </h4>
                                    <h5 class="mb-0 font1 d-inline-block bg-dark skew-box"><i class="text-dark ls-0">UP
                                            TO</i><b class="text-white">$100</b><sub class="text-dark">OFF</sub>
                                    </h5>
                                </div>

                                <a href="#" class="btn btn-light btn-lg ls-10">View All
                                    Now</a>
                            </div>
                        </div>

                    </div>
                    <div class="home-slide home-slide-2 banner">
                        <img class="slide-bg" src="{{asset("images/demoes/demo22/slider/home_slide2.jpg")}}" alt="slider image" width="772" height="434">
                        <div class="banner-layer banner-layer-middle banner-layer-left">
                            <div class="appear-animate" data-animation-name="rotateInUpLeft">
                                <h2 class="font1 ls-10 text-uppercase m-b-4">Top Selling
                                    <br>Machine</h2>
                                <div class="coupon-sale-text d-flex flex-column align-items-start">
                                    <h4 class="m-b-2 font1 d-block text-uppercase text-white bg-dark skew-box">
                                        Starting From
                                    </h4>
                                    <h5 class="mb-0 font1 d-inline-block bg-dark skew-box"><b class="text-white">$199</b>
                                    </h5>
                                </div>

                                <a href="#" class="btn btn-light btn-lg ls-10">View All
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-2">
                <div class="featured-products-slider owl-carousel owl-theme dot-inside dots-small">
                    <div class="product-default count-down">
                        <h3 class="product-name">Flash Deals</h3>
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("images/demoes/demo22/products/featured-sale.jpg")}}" width="217" height="217" alt="product">
                            </a>

                            <div class="product-countdown-container">
                                <span class="product-countdown-title">offer ends in:</span>
                                <div class="product-countdown countdown-compact" data-until="2022, 12, 5" data-compact="true">
                                </div>
                                <!-- End .product-countdown -->
                            </div>
                            <!-- End .product-countdown-container -->
                        </figure>
                        <div class="product-details">
                            <h3 class="product-title">
                                <a href="product.html">One-C-Doser </a>
                            </h3>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">$596.00</span>
                                <span class="product-price">$299.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default count-down">
                        <h3 class="product-name">Flash Deals</h3>
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("images/demoes/demo22/products/featured-sale-2.jpg")}}" width="217" height="217" alt="product">
                            </a>

                            <div class="product-countdown-container">
                                <span class="product-countdown-title">offer ends in: </span>
                                <div class="product-countdown countdown-compact" data-until="2022, 12, 5" data-compact="true">
                                </div>
                                <!-- End .product-countdown -->
                            </div>
                            <!-- End .product-countdown-container -->
                        </figure>
                        <div class="product-details">
                            <h3 class="product-title">
                                <a href="product.html">DUOS MIXER</a>
                            </h3>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">$299.00</span>
                                <span class="product-price">$199.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="most-viewed-products appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
    <div class="container">
        <h2 class="section-title ls-n-10 pb-3 m-b-4 text-center">MAIN PRODUCTS</h2>
        <div class="row">
            <div class="col-6 col-sm-4 col-xl-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/cpms.jpg")}}" width="217" height="217" alt="product">
                        </a>
                    </figure>

                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">CPMS ®</a>
                        </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                    </div>
                    <!-- End .product-details -->
                    <div>
                        <a href="ajax/ask-price.html" class="btn btn-primary btn-block btn-sm" title="Ask Price">Ask Price</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/duos-mixer.jpg")}}" width="217" height="217" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">DUOS MIXER</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                    </div>
                    <!-- End .product-details -->
                    <div>
                        <a href="ajax/ask-price.html" class="btn btn-primary btn-block btn-sm" title="Ask Price">Ask Price</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/arc.jpg")}}" width="217" height="217" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">ARC</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                    </div>
                    <!-- End .product-details -->
                    <div>
                        <a href="ajax/ask-price.html" class="btn btn-primary btn-block btn-sm" title="Ask Price">Ask Price</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/corona-treatment-system.jpg")}}" width="217" height="217" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Corona Treatment System</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                    </div>
                    <!-- End .product-details -->
                    <div>
                        <a href="ajax/ask-price.html" class="btn btn-primary btn-block btn-sm" title="Ask Price">Ask Price</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/wvis.jpg")}}" width="217" height="217" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">WVIS ®</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                    </div>
                    <!-- End .product-details -->
                    <div>
                        <a href="ajax/ask-price.html" class="btn btn-primary btn-block btn-sm" title="Ask Price">Ask Price</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/mechatronics.jpg")}}" width="217" height="217" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Mechatronics</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                    </div>
                    <!-- End .product-details -->
                    <div>
                        <a href="ajax/ask-price.html" class="btn btn-primary btn-block btn-sm" title="Ask Price">Ask Price</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/stroboscope.jpg")}}" width="217" height="217" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Stroboscope</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                    </div>
                    <!-- End .product-details -->
                    <div>
                        <a href="ajax/ask-price.html" class="btn btn-primary btn-block btn-sm" title="Ask Price">Ask Price</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/stroboscope.jpg")}}" width="217" height="217" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Stroboscope</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                    </div>
                    <!-- End .product-details -->
                    <div>
                        <a href="ajax/ask-price.html" class="btn btn-primary btn-block btn-sm" title="Ask Price">Ask Price</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/saapl.jpg")}}" width="217" height="217" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                    </div>
                    <!-- End .product-details -->
                    <div>
                        <a href="ajax/ask-price.html" class="btn btn-primary btn-block btn-sm" title="Ask Price">Ask Price</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/saapl.jpg")}}" width="217" height="217" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                    </div>
                    <!-- End .product-details -->
                    <div>
                        <a href="ajax/ask-price.html" class="btn btn-primary btn-block btn-sm" title="Ask Price">Ask Price</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/saapl.jpg")}}" width="217" height="217" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                    </div>
                    <!-- End .product-details -->
                    <div>
                        <a href="ajax/ask-price.html" class="btn btn-primary btn-block btn-sm" title="Ask Price">Ask Price</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/saapl.jpg")}}" width="217" height="217" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                    </div>
                    <!-- End .product-details -->
                    <div>
                        <a href="ajax/ask-price.html" class="btn btn-primary btn-block btn-sm" title="Ask Price">Ask Price</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="top-categories">
    <div class="container">
        <h2 class="section-title line-height-1 ls-10 pb-4 mb-4 text-center">Top Categories</h2>
        <div class="mb-2 appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
            <div class="categories-slider owl-carousel owl-theme" data-owl-options="{
                'margin': 0,
                'nav': false,
                'responsive': {
                    '480': {
                        'items': 3
                    },
                    '576': {
                        'items': 4
                    },
                    '768': {
                        'items': 5
                    },
                    '992': {
                        'items': 6
                    },
                    '1200': {
                        'items': 7
                    }
                }
            }">
                <a href="#">
                    <img src="{{asset("images/demoes/demo22/pro-cat-icon.png")}}" alt="saapl">
                    <span>Category 1</span>
                </a>
                <a href="#">
                    <img src="{{asset("images/demoes/demo22/pro-cat-icon.png")}}" alt="saapl">
                    <span>Category 2</span>
                </a>
                <a href="#">
                    <img src="{{asset("images/demoes/demo22/pro-cat-icon.png")}}" alt="saapl">
                    <span>Category 3</span>
                </a>
                <a href="#">
                    <img src="{{asset("images/demoes/demo22/pro-cat-icon.png")}}" alt="saapl">
                    <span>Category 4</span>
                </a>
                <a href="#">
                    <img src="{{asset("images/demoes/demo22/pro-cat-icon.png")}}" alt="saapl">
                    <span>Category 5</span>
                </a>
                <a href="#">
                    <img src="{{asset("images/demoes/demo22/pro-cat-icon.png")}}" alt="saapl">
                    <span>Category 6</span>
                </a>
                <a href="#">
                    <img src="{{asset("images/demoes/demo22/pro-cat-icon.png")}}" alt="saapl">
                    <span>Category 7</span>
                </a>
                <a href="#">
                    <img src="{{asset("images/demoes/demo22/pro-cat-icon.png")}}" alt="saapl">
                    <span>Category 8</span>
                </a>
                <a href="#">
                    <img src="{{asset("images/demoes/demo22/pro-cat-icon.png")}}" alt="saapl">
                    <span>Category 9</span>
                </a>
                <a href="#">
                    <img src="{{asset("images/demoes/demo22/pro-cat-icon.png")}}" alt="saapl">
                    <span>Category 10</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="recent-products">
    <div class="container">
        <div class="appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
            <h2 class="section-title ls-n-10 pb-3 m-b-4 text-center">Latest Products</h2>

            <div class="row">
                <div class="products-slider 5col owl-carousel owl-theme owl-nav-outisde show-nav-hover" data-owl-options="{
                'margin': 0
            }">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("images/demoes/demo22/products/product-20.jpg")}}" width="217" height="217" alt="product">
                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$129.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("images/demoes/demo22/products/product-21.jpg")}}" width="217" height="217" alt="product">
                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Black Watches</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">

                                <span class="product-price">$129.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("images/demoes/demo22/products/product-12.jpg")}}" width="217" height="217" alt="product">
                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">USB Speaker</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$68.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("images/demoes/demo22/products/product-17.jpg")}}" width="217" height="217" alt="product">
                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Classic Earphone</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$68.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("images/demoes/demo22/products/product-10.jpg")}}" width="217" height="217" alt="product">
                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Bluetooth Speaker</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$49.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="top-rated-products appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
    <div class="container">
        <h2 class="section-title ls-n-10 pb-3 m-b-4 text-center">Top Rated Products</h2>

        <div class="row">
            <div class="products-slider 5col owl-carousel owl-theme owl-nav-outisde show-nav-hover" data-owl-options="{
                'margin': 0
            }">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/product-13.jpg")}}" width="217" height="217" alt="product">
                        </a>
                        <div class="btn-icon-group">
                            <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$108.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/product-22.jpg")}}" width="217" height="217" alt="product">
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$199.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default inner-icon inner-quickview">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/product-4.jpg")}}" width="217" height="217" alt="product">
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>

                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Name</a>
                        </h3>

                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->

                        <div class="price-box">
                            <span class="product-price">$299.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/product-9.jpg")}}" width="217" height="217" alt="product">
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:90%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$1,699.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/product-8.jpg")}}" width="217" height="217" alt="product">
                            <img src="{{asset("images/demoes/demo22/products/product-8-2.jpg")}}" width="217" height="217" alt="product">
                        </a>
                        <div class="btn-icon-group">
                            <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price"> $111.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset("images/demoes/demo22/products/product-big-1.jpg")}}" width="217" height="217" alt="product">
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">category</a>
                            </div>
                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                    class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">DUOS MIXER</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$299.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="brands-section mt-3">
    <div class="container">
        <h2 class="section-title text-center line-height-1 ls-10 pb-4 mb-5 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200" data-animation-duration="400">
            Top Brands</h2>

        <div class="brands-slider owl-carousel owl-theme images-center appear-animate" data-animation-name="fadeIn" data-animation-delay="400" data-owl-options="{
            'margin': 30,
            'responsive': {
                '991': {
                    'items': 4
                },
                '1200': {
                    'items': 5
                }
            }
        }">
            <img src="{{asset("images/demoes/demo22/brands/brand1.png")}}" width="200" height="50" alt="brand">
            <img src="{{asset("images/demoes/demo22/brands/brand2.png")}}" width="200" height="50" alt="brand">
            <img src="{{asset("images/demoes/demo22/brands/brand3.png")}}" width="200" height="50" alt="brand">
            <img src="{{asset("images/demoes/demo22/brands/brand4.png")}}" width="200" height="50" alt="brand">
            <img src="{{asset("images/demoes/demo22/brands/brand5.png")}}" width="200" height="50" alt="brand">
        </div>
        <!-- End .brands-slider -->
    </div>
</section>

<div class="container mt-3">
    <div class="info-boxes-container">
        <div class="row m-0 divide-line">
            <div class="info-box info-box-icon-left col-sm-6 col-lg-3">
                <i class="icon-shipping text-primary"></i>

                <div class="info-box-content">
                    <h4 class="font1 line-height-1 ls-10">FREE SHIPPING &amp; RETURN</h4>
                    <p class="font-weight-light">Free shipping on orders over $99.</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->
            <div class="info-box info-box-icon-left col-sm-6 col-lg-3">
                <i class="icon-money text-primary"></i>

                <div class="info-box-content">
                    <h4 class="font1 line-height-1 ls-10">MONEY BACK GUARANTEE</h4>
                    <p class="font-weight-light">100% money back guarantee</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->
            <div class="info-box info-box-icon-left col-sm-6 col-lg-3">
                <i class="icon-support text-primary"></i>

                <div class="info-box-content">
                    <h4 class="font1 line-height-1 ls-10">ONLINE SUPPORT 24/7</h4>
                    <p class="font-weight-light">Lorem ipsum dolor sit amet.</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->
            <div class="info-box info-box-icon-left col-sm-6 col-lg-3">
                <i class="icon-secure-payment text-primary"></i>

                <div class="info-box-content">
                    <h4 class="font1 line-height-1 ls-10">SECURE PAYMENT</h4>
                    <p class="font-weight-light">Lorem Ipsum dolor sit amet.</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->
        </div>
    </div>
</div>
@endsection
