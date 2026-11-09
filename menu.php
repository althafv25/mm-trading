<?php
$PageRoot = $PageRoot ?? './';
$Page = $Page ?? '';
$safe = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
?>
<body>
  
    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="m" class="letters-loading">
                                m
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="c" class="letters-loading">
                                c
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                h
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


     


        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="outer-container">
                    <ul class="social-links clearfix">
                        <li><h5>Social Connect</h5></li>
                        <li><a href="index.html"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="index.html"><i class="fa-brands fa-square-twitter"></i></a></li>
                        <li><a href="index.html"><i class="fa-solid fa-basketball"></i></a></li>
                        <li><a href="index.html"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                    <div class="text">
                        <h5>ISM Certificate Manufacturer</h5>
                    </div>
                    <ul class="links-list clearfix">
                        <li><a href="index.html">News & Media</a></li>
                        <li><a href="index.html">Investors</a></li>
                        <li><a href="index.html">Downloads</a></li>
                        <li><a href="index.html">Career</a></li>
                    </ul>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-left-content">
                            <figure class="logo-box"><a href="index.html"><img src="assets/images/logo.png" alt="" width="150px" ></a></figure>
                           
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li><a href="index-3.html">Home Page 03</a></li>
                                            </ul>
                                        </li>  
                                        <li class="dropdown"><a href="index.html">About</a>
                                            <ul>
                                                <li><a href="about.html">Company</a></li>
                                                <li><a href="history.html">History</a></li>
                                                <li class="dropdown"><a href="index.html">Team</a>
                                                    <ul>
                                                        <li><a href="team-1.html">Our Leaders 01</a></li>
                                                        <li><a href="team-2.html">Our Leaders 02</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="index.html">Projects</a>
                                                    <ul>
                                                        <li><a href="project.html">Gallery</a></li>
                                                        <li><a href="project-2.html">Full Width</a></li>
                                                        <li><a href="project-3.html">By Category</a></li>
                                                        <li><a href="project-4.html">With Title</a></li>
                                                        <li><a href="project-details.html">Project Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="index.html">Pricing & Plans</a>
                                                    <ul>
                                                        <li><a href="pricing-1.html">Pricing & Plans 01</a></li>
                                                        <li><a href="pricing-2.html">Pricing & Plans 02</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="index.html">Shop</a>
                                                    <ul>
                                                        <li><a href="shop.html">Products</a></li>
                                                        <li><a href="shop-details.html">Single Product</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="account.html">My Account</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="faq.html">Faq’s</a></li>
                                                <li><a href="error.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Services</a>
                                            <ul>
                                                <li><a href="services.html">Carousel</a></li>
                                                <li><a href="services-2.html">Classic</a></li>
                                                <li><a href="services-3.html">Modern</a></li>
                                                <li><a href="service-details.html">Service Details</a></li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="index.html">Industries</a>
                                            <ul>
                                                <li><a href="industries.html">Classic</a></li>
                                                <li><a href="industries-2.html">Modern</a></li>
                                                <li><a href="industrie-details.html">Industries Details</a></li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="index.html">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Grid View</a></li>
                                                <li><a href="blog-2.html">List View 01</a></li>
                                                <li><a href="blog-3.html">List View 02</a></li>
                                                <li><a href="blog-details.html">Single Post</a></li>
                                            </ul>
                                        </li>  
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            
                            <div class="btn-box">
                                <div class="icon-box"><i class="flaticon-estimation"></i></div>
                                <a href="index.html">Get a quote<i class="flaticon-right-chevron"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-left-content">
                            <figure class="logo-box"><a href="index.html"><img src="assets/images/logo.png" alt="" width="150px" ></a></figure>
                            
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                           
                            <div class="btn-box">
                                <div class="icon-box"><i class="flaticon-estimation"></i></div>
                                <a href="index.html">Get a quote<i class="flaticon-right-chevron"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
 