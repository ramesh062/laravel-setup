<header class="header">
    <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
        <div class="container">
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="{{asset("images/logo.png")}}" alt="SAAPL">
                </a>
                <div class="header-col">
                    <div class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control" name="q" id="q" placeholder="I'm searching for..." required>
                                <div class="select-custom">
                                    <select id="cat" name="cat">
                                        <option value="">All Categories</option>
                                        <option value="4">Name of Category</option>
                                        <option value="12">Name of Category</option>
                                        <option value="13">Name of Category</option>
                                        <option value="66">Name of Category</option>
                                        <option value="67">Name of Category</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->
                                <button class="btn icon-magnifier" title="search" type="submit"></button>
                            </div>
                            <!-- End .header-search-wrapper -->
                        </form>
                    </div>
                    <!-- End .header-search -->

                </div>
            </div>

            <div class="header-right ml-0 ml-lg-auto">
                <a href="login.html" class="header-icon d-md-block d-none mr-0">
                    <div class="header-user text-dark">
                        <i class="icon-user-2"></i>
                        <div class="header-userinfo">
                            <span class="d-inline-block line-height-1 ls-10">Hello!</span>
                            <h4 class="font1 mb-0 text-dark">My Account</h4>
                        </div>
                    </div>
                </a>

                <a href="wishlist.html" class="header-icon text-dark">
                    <i class="icon-wishlist-2"></i>
                </a>

                <div class="dropdown cart-dropdown">
                    <a href="#" title="Cart" class="dropdown-toggle cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="minicart-icon"></i>
                        <span class="cart-count badge-circle">3</span>
                    </a>

                    <div class="cart-overlay"></div>

                    <div class="dropdown-menu mobile-cart">
                        <a href="#" title="Close (Esc)" class="btn-close">×</a>

                        <div class="dropdownmenu-wrapper custom-scrollbar">
                            <div class="dropdown-cart-header">Shopping Cart</div>
                            <!-- End .dropdown-cart-header -->

                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="product.html">Ultimate 3D Bluetooth Speaker</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span> × $99.00
                                        </span>
                                    </div>
                                    <!-- End .product-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset("images/products/product-1.jpg")}}" alt="product" width="80" height="80">
                                        </a>

                                        <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                    </figure>
                                </div>
                                <!-- End .product -->

                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="product.html">Brown Women Casual HandBag</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span> × $35.00
                                        </span>
                                    </div>
                                    <!-- End .product-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset("images/products/product-2.jpg")}}" alt="product" width="80" height="80">
                                        </a>

                                        <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                    </figure>
                                </div>
                                <!-- End .product -->

                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="product.html">Circled Ultimate 3D Speaker</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span> × $35.00
                                        </span>
                                    </div>
                                    <!-- End .product-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{asset("images/products/product-3.jpg")}}" alt="product" width="80" height="80">
                                        </a>
                                        <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                    </figure>
                                </div>
                                <!-- End .product -->
                            </div>
                            <!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>SUBTOTAL:</span>

                                <span class="cart-total-price float-right">$134.00</span>
                            </div>
                            <!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                    Cart</a>
                                <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                            </div>
                            <!-- End .dropdown-cart-total -->
                        </div>
                        <!-- End .dropdownmenu-wrapper -->
                    </div>
                    <!-- End .dropdown-menu -->
                </div>
                <!-- End .dropdown -->
            </div>
        </div>
    </div>

        <div class="header-bottom sticky-header" data-sticky-options="{'mobile': false, 'offset': 684}">
            <div class="container">
                <div class="header-center">
                    <button class="mobile-menu-toggler" type="button">
                        <i class="fas fa-bars"></i>
                    </button>

                    <nav class="main-nav d-none d-lg-flex flex-wrap">
                        <div class="menu-depart show-always">
                            <a href="#" class="toggle"><i class="fas fa-bars"></i>Shop by Category</a>
                            <div class="submenu">
                                <a href="#" class="active"><i class="icon-angle-double-right"></i>Home</a>
                                <a href="#"><i class="icon-angle-double-right"></i>CPMS</a>
                                <a href="#"><i class="icon-angle-double-right"></i>ARC</a>
                                <a href="#"><i class="icon-angle-double-right"></i>DUOS MIXER</a>
                                <a href="#"><i class="icon-angle-double-right"></i>CORONA TREATMENT SYSTEM</a>
                                <a href="#"><i class="icon-angle-double-right"></i>WVIS</a>
                                <a href="#"><i class="icon-angle-double-right"></i>MECHATRONICS</a>
                                <a href="#"><i class="icon-angle-double-right"></i>STROBOSCOPE</a>
                                <a href="#">VIEW ALL <i class="icon-angle-right"></i></a>
                            </div>
                        </div>
                        <ul class="menu">
                            <li class="active">
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="products-listing.html">PRODUCTS & SERVICES</a>
                                <div class="megamenu megamenu-fixed-width">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul class="submenu">
                                                <li><a href="#">CPMS</a></li>
                                                <li><a href="#">ARC</a></li>
                                                <li><a href="#">Duos Mixer</a></li>
                                                <li><a href="#">Corona Treatment System</a></li>
                                                <li><a href="#">WVIS</a></li>
                                                <li><a href="#">MECHATRONICS</a></li>
                                                <li><a href="#">STROBOSCOPE</a></li>
                                                <li><a href="#">SAAPL Products</a></li>
                                            </ul>
                                        </div>
                                        <!-- End .col-lg-4 -->

                                        <div class="col-lg-4">
                                            <ul class="submenu">
                                                <li><a href="#">CNC Machining Service</a></li>
                                                <li><a href="#">Milling Components</a></li>
                                                <li><a href="#">Turning Components</a></li>
                                                <li><a href="#">Mechanical Assembly</a></li>
                                                <li><a href="#">Extrusion</a></li>
                                                <li><a href="#">Printing</a></li>
                                                <li><a href="#">Laminating Equipment</a></li>
                                                <li><a href="#">Slitting</a></li>
                                            </ul>
                                        </div>
                                        <!-- End .col-lg-4 -->

                                        <div class="col-lg-4 p-0">
                                            <ul class="submenu">
                                                <li><a href="#">Surface Finishing</a></li>
                                                <li><a href="#">Part Marking</a></li>
                                                <li><a href="#">Sports Goods</a></li>
                                                <li><a href="#">Miscellaneous Product</a></li>
                                                <li><a href="#">Material</a></li>
                                                <li><a href="#">Machine Tools</a></li>
                                                <li><a href="#">Machinery</a></li>
                                                <li><a href="#">All Products</a></li>
                                            </ul>
                                        </div>
                                        <!-- End .col-lg-4 -->
                                    </div>
                                    <!-- End .row -->
                                </div>
                                <!-- End .megamenu -->
                            </li>

                            <li>
                                <a href="#">About Us</a>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Certifications</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Policy</a></li>
                                    <li><a href="#">Trusted Customer</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Support</a>
                                <ul>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Enquiry</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Dealer & Distributor Form</a></li>
                                    <li><a href="#">Payment Method</a></li>
                                    <li><a href="#">Login & Registration</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Contact Us</a></li>

                            <li><a href="#">SPECIAL OFFER!</a></li>

                        </ul>
                    </nav>
                    <div class="header-dropdowns ml-auto">
                        <div class="header-dropdown">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="header-dropdown">
                            <a href="#"><i class="flag-us flag"></i>ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                    </li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End .header -->
</div>
