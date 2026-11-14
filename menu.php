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
                <div class="preloader-close">✕</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="M" class="letters-loading">M</span>
                            <span data-text-preloader="M" class="letters-loading">M</span>
                            <span data-text-preloader="·" class="letters-loading">·</span>
                            <span data-text-preloader="T" class="letters-loading">T</span>
                            <span data-text-preloader="R" class="letters-loading">R</span>
                            <span data-text-preloader="A" class="letters-loading">A</span>
                            <span data-text-preloader="D" class="letters-loading">D</span>
                            <span data-text-preloader="I" class="letters-loading">I</span>
                            <span data-text-preloader="N" class="letters-loading">N</span>
                            <span data-text-preloader="G" class="letters-loading">G</span>
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
                        <span class="top-badge"><i class="fa-solid fa-location-dot"></i> P.O. Box : 26737 DIP - 2, Dubai-U.A.E</span>
                    </div>
                    <ul class="links-list clearfix">
                        <li><i class="fa-solid fa-phone"></i><a href="tel:+97148872112">+971 4 8872112</a> / <a href="tel:+97148878778">+971 4 8878778</a></li>
                        <li><i class="fa-solid fa-envelope"></i><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></li>
                    </ul>
                </div>
            </div>
            <!-- <div class="header-top">
                <div class="outer-container">
                    <ul class="top-info-list clearfix">
                        <li><i class="fa-solid fa-phone"></i><a href="tel:+97148872112">+971 4 8872112</a> / <a href="tel:+97148878778">+971 4 8878778</a></li>
                        <li><i class="fa-solid fa-mobile-screen"></i><a href="tel:+971525923184">+971 52 5923184</a> / <a href="tel:+971507998334">+971 50 7998334</a></li>
                        <li><i class="fa-solid fa-envelope"></i><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></li>
                    </ul>
                    <div class="text">
                        <span class="top-badge"><i class="fa-solid fa-location-dot"></i> P.O. Box : 26737 DIP - 2, Dubai-U.A.E</span>
                    </div>
                    <ul class="social-links clearfix">
                        <li><h5>Connect</h5></li>
                        <li><a href="https://www.linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="mailto:info@mmgeneraltrading.com" aria-label="Email"><i class="fa-solid fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div> -->
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-left-content">
                            <figure class="logo-box">
                                <a href="<?= $safe($PageRoot) ?>index.php" title="MM GENERAL TRADING L.L.C">
                                    <img src="<?= $safe($PageRoot) ?>assets/images/logo.png" alt="MM GENERAL TRADING L.L.C" style="max-height: 78px; width: auto;">
                                </a>
                            </figure>
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
                                        <li class="<?= $Page === 'home' ? 'current' : '' ?>"><a href="<?= $safe($PageRoot) ?>index.php">Home</a></li>
                                        <li class="<?= $Page === 'about' ? 'current' : '' ?>"><a href="<?= $safe($PageRoot) ?>about.php">About Us</a></li>
                                        <li class="dropdown <?= $Page === 'products' ? 'current' : '' ?>"><a href="<?= $safe($PageRoot) ?>products.php">Products & Materials</a>
                                            <ul>
                                                <li><a href="<?= $safe($PageRoot) ?>products.php">All Products (26)</a></li>
                                                <li><a href="<?= $safe($PageRoot) ?>products.php?cat=metals">Aluminium & Metal Products</a></li>
                                                <li><a href="<?= $safe($PageRoot) ?>products.php?cat=chemicals">Construction Chemicals & Sealants</a></li>
                                                <li><a href="<?= $safe($PageRoot) ?>products.php?cat=adhesives">Wood & Industrial Adhesives</a></li>
                                                <li><a href="<?= $safe($PageRoot) ?>products.php?cat=fire-acoustic">Passive Fire & Acoustic Solutions</a></li>
                                                <li><a href="<?= $safe($PageRoot) ?>products.php?cat=hardware">Hardware & Accessories</a></li>
                                                <li><a href="<?= $safe($PageRoot) ?>services/coating-processing-services.php">Coating & Processing Services</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?= $Page === 'projects' ? 'current' : '' ?>"><a href="<?= $safe($PageRoot) ?>projects.php">Projects</a></li>
                                        <li class="<?= $Page === 'contact' ? 'current' : '' ?>"><a href="<?= $safe($PageRoot) ?>contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="btn-box">
                                <a href="<?= $safe($PageRoot) ?>contact.php">
                                    <div class="icon-box"><i class="flaticon-estimation"></i></div>
                                    <span>Request a Quote</span>
                                    <i class="flaticon-right-chevron"></i>
                                </a>
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
                            <figure class="logo-box">
                                <a href="<?= $safe($PageRoot) ?>index.php">
                                    <img src="<?= $safe($PageRoot) ?>assets/images/logo-white-text.png" alt="MM GENERAL TRADING L.L.C" style="max-height: 50px; width: auto;">
                                </a>
                            </figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="btn-box">
                                <a href="<?= $safe($PageRoot) ?>contact.php">
                                    <div class="icon-box"><i class="flaticon-estimation"></i></div>
                                    <span>Request a Quote</span>
                                    <i class="flaticon-right-chevron"></i>
                                </a>
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
                <div class="nav-logo">
                    <a href="<?= $safe($PageRoot) ?>index.php">
                        <img src="<?= $safe($PageRoot) ?>assets/images/logo-white-text.png" alt="MM GENERAL TRADING L.L.C" style="max-height: 48px; width: auto;">
                    </a>
                </div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="btn-box mobile-quote-box" style="padding: 16px 25px 8px 25px; width: 100%;">
                    <a href="<?= $safe($PageRoot) ?>contact.php" class="theme-btn btn-one" style="width: 100%; justify-content: center; text-align: center;">
                        <span>Request a Quote</span>
                    </a>
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><i class="fa-solid fa-location-dot" style="color: #D69A2D; margin-right: 6px;"></i> P.O. Box : 26737, DIP - 2, Dubai - UAE</li>
                        <li><i class="fa-solid fa-phone" style="color: #D69A2D; margin-right: 6px;"></i> <a href="tel:+97148872112">+971 4 8872112</a> / <a href="tel:+97148878778">+971 4 8878778</a></li>
                        <li><i class="fa-solid fa-mobile-screen" style="color: #D69A2D; margin-right: 6px;"></i> <a href="tel:+971525923184">+971 52 5923184</a> / <a href="tel:+971507998334">+971 50 7998334</a></li>
                        <li><i class="fa-solid fa-envelope" style="color: #D69A2D; margin-right: 6px;"></i> <a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="https://www.linkedin.com" target="_blank" rel="noopener"><span class="fab fa-linkedin"></span></a></li>
                        <li><a href="mailto:info@mmgeneraltrading.com"><span class="fa-solid fa-envelope"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
