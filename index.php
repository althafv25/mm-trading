<?php
$Page = 'home';
$PageTitle = 'MM General Trading L.L.C | Industrial Metal Trading & Project Solutions Dubai';
$PageDescription = 'MM General Trading L.L.C is a premier Dubai-based industrial trading and metal distribution partner supplying aluminium sheets, plates, chequered tread plates, coils, extrusions, and certified fabrication solutions.';
$PageCanonical = 'https://www.mmgeneraltrading.com/';
$PageOgImage = 'https://www.mmgeneraltrading.com/assets/images/banner/banner-1.jpg';
$PageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'MM General Trading L.L.C',
    'alternateName' => 'ام ام للتجاره العامه ذ.م.م',
    'url' => $PageCanonical,
    'description' => $PageDescription,
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'Dubai Investments Park 2 (DIP - 2)',
        'postOfficeBoxNumber' => '26737',
        'addressLocality' => 'Dubai',
        'addressCountry' => 'AE'
    ],
    'telephone' => '+97148878778',
    'email' => 'info@mmgeneraltrading.com'
]);
include __DIR__ . '/header.php';
?>


       <!-- banner-section -->
        <section class="banner-section">
            <div class="line-box">
                <div class="line-1"></div>
                <div class="line-2"></div>
            </div>
            <div class="banner-carousel owl-theme owl-carousel">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner1.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="special-text animation_text_word"></span>
                            <h2><span>Certified Industrial</span> <br /><span>Metal Solutions</span></h2>
                            <p>Direct supply and precision processing of industrial aluminium, structural extrusions, and certified sealants across UAE & GCC.</p>
                            <div class="btn-box">
                                <a href="products.php" class="theme-btn btn-one"><span>Explore Product Catalog</span></a>
                                <a href="contact.php" class="theme-btn btn-two"><span>Request a Quote</span></a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner2.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="special-text animation_text_word"></span>
                           <h2><span>Aluminium Sheets,</span> <br /><span>Plates & Extrusions</span></h2>
                            <p>Extensive inventory of plain sheets, 5-bar chequered plates, stucco coils, and marine alloys ready for prompt dispatch.</p>
                            <div class="btn-box">
                                <a href="plain-aluminium-sheets-plates.php" class="theme-btn btn-one"><span>View Specifications</span></a>
                                <a href="contact.php" class="theme-btn btn-two"><span>Contact Sales</span></a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner-3.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="special-text animation_text_word"></span>
                            <h2><span>Engineered for</span> <br /><span>Durability & Speed</span></h2>
                            <p>High-grade architectural hardware, passive fire protection systems, and weatherproofing sealants for landmark projects.</p>
                            <div class="btn-box">
                                <a href="products.php" class="theme-btn btn-one"><span>Explore All Products</span></a>
                                <a href="contact.php" class="theme-btn btn-two"><span>Request Project RFQ</span></a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="text-box">
                <div class="text-1"><h3>Aluminium Sheets & Plates</h3></div>
                <div class="text-2"><h3>Tread Plates & Extrusions</h3></div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                            <div class="text">
                                <h5>12+ Years Experienced</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">About Our Company</span>
                                <h2>Premier Industrial Metal & Trading Partner in Dubai</h2>
                            </div>
                            <div class="text">
                                <p>Headquartered in Dubai Investments Park 2, MM General Trading L.L.C supplies certified industrial metals, aluminium sheets, structural profiles, and custom cutting solutions to leading contracting and engineering firms across the UAE and GCC.</p>
                            </div>
                            <div class="single-box">
                                <h3>Certified Quality & Mill Traceability</h3>
                                <p>Every order is supplied with verified mill test reports, dimensional compliance, and protective packaging for seamless site deployment.</p>
                            </div>
                            <div class="inner-box">
                                <div class="curve-text">
                                    <div class="icon-box"><i class="flaticon-reward"></i></div>
                                    <span class="curved-circle">Manufactured with 100% quality</span>
                                </div>
                                <h4>Certified Standards</h4>
                                <p>Full Traceability & Compliance.</p>
                                <a href="products.php" class="theme-btn btn-two" style="padding: 6px 18px; font-size: 13px;"><span>View Catalog</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- funfact-section -->
        <section class="funfact-section">
            <span class="big-text">Numbers</span>
            <div class="outer-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-factory"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="45">0</span>
                                </div>
                                <div class="text">
                                    <h3>Branches</h3>
                                    <p>Branches Across The World</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-gas"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="32">0</span><span>k</span>
                                </div>
                                <div class="text">
                                    <h3>Projects</h3>
                                    <p>Projects with 100% Satisfaction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-engineer"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="867">0</span>
                                </div>
                                <div class="text">
                                    <h3>Engineers</h3>
                                    <p>Top Engineers around the World</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->


        <!-- service-section -->
        <section class="service-section sec-pad bg-color-1">
            <div class="line-box">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
                <div class="line line-4"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="sub-title">2026 Core Product Portfolio</span>
                    <h2>Premium Metals, Architectural Sealants & Industrial Solutions</h2>
                    <p style="max-width: 680px; margin: 10px auto 0 auto;">Supplying certified, mill-tested materials direct from Dubai Investments Park 2 to projects across the UAE and GCC.</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/products/plain-aluminium-sheets-plates.png" alt="Plain Aluminium Sheets & Plates" style="height: 220px; object-fit: contain; padding: 15px; background: #F8FAFC;"></figure>
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                                </div>
                                <div class="lower-content">
                                    <span class="big-text">AL</span>
                                    <h3><a href="plain-aluminium-sheets-plates.php">Plain Aluminium Sheets & Plates</a></h3>
                                    <p>Thickness 0.3mm to 150mm in 1100, 3003, 5083, 6082, and 7075 alloys with mill test certs.</p>
                                    <div class="btn-box">
                                        <a href="plain-aluminium-sheets-plates.php"><span>View Specifications</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/products/aluminium-chequered-sheets.png" alt="Aluminium Chequered Sheets" style="height: 220px; object-fit: contain; padding: 15px; background: #F8FAFC;"></figure>
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                                </div>
                                <div class="lower-content">
                                    <span class="big-text">CH</span>
                                    <h3><a href="aluminium-chequered-sheets.php">Chequered & Tread Plates</a></h3>
                                    <p>High-traction 5-bar and diamond pattern sheets in 5754-H114, 1100, and 3003 for walkways and vehicles.</p>
                                    <div class="btn-box">
                                        <a href="aluminium-chequered-sheets.php"><span>View Specifications</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/products/guibao-1092-structural-silicone.png" alt="GUIBAO Structural Glazing Silicone" style="height: 220px; object-fit: contain; padding: 15px; background: #F8FAFC;"></figure>
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                </div>
                                <div class="lower-content">
                                    <span class="big-text">GB</span>
                                    <h3><a href="guibao-1092-structural-silicone.php">GUIBAO® Structural Silicone</a></h3>
                                    <p>High performance two-part neutral cure silicone for skyscraper curtain walls (ASTM C1184 & ETAG 002).</p>
                                    <div class="btn-box">
                                        <a href="guibao-1092-structural-silicone.php"><span>View Specifications</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- clients-section -->
        <section class="clients-section bg-color-1">
            <div class="auto-container">
                <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <figure class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-1.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-2.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-3.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index.php"><img src="assets/images/clients/clients-5.png" alt=""></a></figure>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- chooseus-section -->
        <section class="chooseus-section">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 title-column">
                        <div class="sec-title">
                            <span class="sub-title">Why Choose Us</span>
                            <h2>Deliver On Time and On Budget</h2>
                            <p>Onethose defining moments a moment when our nation is at war our economy turmoil.</p>
                            <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-column">
                <div class="scroll-text">
                    <ul class="text-list clearfix"> 
                        <li>deliver on time & on budget</li>
                        <li>A dedicated service</li>
                    </ul>
                </div>
                <div class="content-box">
                    <div class="single-item">
                        <div class="static-content">
                            <span class="count-text">01</span>
                            <div class="text">
                                <h3>Smart Technology</h3>
                                <p>Lookout flogging bilge rat main shet bilge water fluke to go on account heave down.</p>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="icon-box"><i class="flaticon-manufacture"></i></div>
                            <div class="text">
                                <h3>Smart Technology</h3>
                                <p>Lookout flogging bilge rat main shet bilge water fluke to go on account heave down.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="static-content">
                            <span class="count-text">02</span>
                            <div class="text">
                                <h3>On-Time Delivery</h3>
                                <p>Get swash buckling with this trendy looking</p>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="icon-box"><i class="flaticon-manufacture"></i></div>
                            <div class="text">
                                <h3>On-Time Delivery</h3>
                                <p>Get swash buckling with this trendy looking</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="static-content">
                            <span class="count-text">03</span>
                            <div class="text">
                                <h3>Easy & Affordable</h3>
                                <p>Sheet bilge water nipper fluke to go on account </p>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="icon-box"><i class="flaticon-manufacture"></i></div>
                            <div class="text">
                                <h3>Easy & Affordable</h3>
                                <p>Sheet bilge water nipper fluke to go on account </p>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="static-content">
                            <span class="count-text">04</span>
                            <div class="text">
                                <h3>24/7 Support</h3>
                                <p>Coast schooner poop deck main sheet</p>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="icon-box"><i class="flaticon-manufacture"></i></div>
                            <div class="text">
                                <h3>24/7 Support</h3>
                                <p>Coast schooner poop deck main sheet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll-text">
                    <ul class="text-list clearfix"> 
                        <li>deliver on time & on budget</li>
                        <li>A dedicated service</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- industry-section -->
        <section class="industry-section">
            <div class="industry-tab">
                <div class="tab-btns industry-tab-btns centred border-top border-bottom">
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 single-btn">
                                <div class="p-tab-btn active-btn" data-tab="#tab-1">
                                    <div class="icon-box"><i class="flaticon-crane"></i></div>
                                    <h4>Construction Sector</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 single-btn">
                                <div class="p-tab-btn" data-tab="#tab-2">
                                    <div class="icon-box"><i class="flaticon-tanks"></i></div>
                                    <h4>Oil & Gas Energy</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 single-btn">
                                <div class="p-tab-btn" data-tab="#tab-3">
                                    <div class="icon-box"><i class="flaticon-vaccine"></i></div>
                                    <h4>Heath Care & Pharma</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 single-btn">
                                <div class="p-tab-btn" data-tab="#tab-4">
                                    <div class="icon-box"><i class="flaticon-radiator"></i></div>
                                    <h4>Automotive Chains</h4>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="auto-container">
                    <div class="p-tabs-content">
                        <div class="p-tab active-tab" id="tab-1">
                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                <div class="content-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2>Construction Sector</h2>
                                                </div>
                                                <div class="inner-box">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Mechanized Bridge Construction</li>
                                                        <li>Movable Scaffolding Systems</li>
                                                    </ul>
                                                    <p>Lookout flogging bilge rat main shet bilge water nipper fluke to go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                                    <div class="link-box">
                                                        <h6><a href="index.php">Make your Appointment</a></h6>
                                                    </div>
                                                    <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                    <div class="btn-box">
                                                        <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/industry-2.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2>Construction Sector</h2>
                                                </div>
                                                <div class="inner-box">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Mechanized Bridge Construction</li>
                                                        <li>Movable Scaffolding Systems</li>
                                                    </ul>
                                                    <p>Lookout flogging bilge rat main shet bilge water nipper fluke to go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                                    <div class="link-box">
                                                        <h6><a href="index.php">Make your Appointment</a></h6>
                                                    </div>
                                                    <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                    <div class="btn-box">
                                                        <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/industry-2.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2>Construction Sector</h2>
                                                </div>
                                                <div class="inner-box">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Mechanized Bridge Construction</li>
                                                        <li>Movable Scaffolding Systems</li>
                                                    </ul>
                                                    <p>Lookout flogging bilge rat main shet bilge water nipper fluke to go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                                    <div class="link-box">
                                                        <h6><a href="index.php">Make your Appointment</a></h6>
                                                    </div>
                                                    <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                    <div class="btn-box">
                                                        <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/industry-2.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-2">
                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                <div class="content-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2>Oil & Gas Energy</h2>
                                                </div>
                                                <div class="inner-box">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Mechanized Bridge Construction</li>
                                                        <li>Movable Scaffolding Systems</li>
                                                    </ul>
                                                    <p>Lookout flogging bilge rat main shet bilge water nipper fluke to go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                                    <div class="link-box">
                                                        <h6><a href="index.php">Make your Appointment</a></h6>
                                                    </div>
                                                    <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                    <div class="btn-box">
                                                        <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/industry-2.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2>Oil & Gas Energy</h2>
                                                </div>
                                                <div class="inner-box">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Mechanized Bridge Construction</li>
                                                        <li>Movable Scaffolding Systems</li>
                                                    </ul>
                                                    <p>Lookout flogging bilge rat main shet bilge water nipper fluke to go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                                    <div class="link-box">
                                                        <h6><a href="index.php">Make your Appointment</a></h6>
                                                    </div>
                                                    <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                    <div class="btn-box">
                                                        <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/industry-2.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2>Oil & Gas Energy</h2>
                                                </div>
                                                <div class="inner-box">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Mechanized Bridge Construction</li>
                                                        <li>Movable Scaffolding Systems</li>
                                                    </ul>
                                                    <p>Lookout flogging bilge rat main shet bilge water nipper fluke to go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                                    <div class="link-box">
                                                        <h6><a href="index.php">Make your Appointment</a></h6>
                                                    </div>
                                                    <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                    <div class="btn-box">
                                                        <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/industry-2.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-3">
                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                <div class="content-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2>Heath Care & Pharma</h2>
                                                </div>
                                                <div class="inner-box">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Mechanized Bridge Construction</li>
                                                        <li>Movable Scaffolding Systems</li>
                                                    </ul>
                                                    <p>Lookout flogging bilge rat main shet bilge water nipper fluke to go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                                    <div class="link-box">
                                                        <h6><a href="index.php">Make your Appointment</a></h6>
                                                    </div>
                                                    <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                    <div class="btn-box">
                                                        <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/industry-2.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2>Heath Care & Pharma</h2>
                                                </div>
                                                <div class="inner-box">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Mechanized Bridge Construction</li>
                                                        <li>Movable Scaffolding Systems</li>
                                                    </ul>
                                                    <p>Lookout flogging bilge rat main shet bilge water nipper fluke to go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                                    <div class="link-box">
                                                        <h6><a href="index.php">Make your Appointment</a></h6>
                                                    </div>
                                                    <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                    <div class="btn-box">
                                                        <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/industry-2.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2>Heath Care & Pharma</h2>
                                                </div>
                                                <div class="inner-box">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Mechanized Bridge Construction</li>
                                                        <li>Movable Scaffolding Systems</li>
                                                    </ul>
                                                    <p>Lookout flogging bilge rat main shet bilge water nipper fluke to go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                                    <div class="link-box">
                                                        <h6><a href="index.php">Make your Appointment</a></h6>
                                                    </div>
                                                    <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                    <div class="btn-box">
                                                        <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/industry-2.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-4">
                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                <div class="content-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2>Automotive Chains</h2>
                                                </div>
                                                <div class="inner-box">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Mechanized Bridge Construction</li>
                                                        <li>Movable Scaffolding Systems</li>
                                                    </ul>
                                                    <p>Lookout flogging bilge rat main shet bilge water nipper fluke to go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                                    <div class="link-box">
                                                        <h6><a href="index.php">Make your Appointment</a></h6>
                                                    </div>
                                                    <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                    <div class="btn-box">
                                                        <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/industry-2.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2>Automotive Chains</h2>
                                                </div>
                                                <div class="inner-box">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Mechanized Bridge Construction</li>
                                                        <li>Movable Scaffolding Systems</li>
                                                    </ul>
                                                    <p>Lookout flogging bilge rat main shet bilge water nipper fluke to go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                                    <div class="link-box">
                                                        <h6><a href="index.php">Make your Appointment</a></h6>
                                                    </div>
                                                    <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                    <div class="btn-box">
                                                        <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/industry-2.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2>Automotive Chains</h2>
                                                </div>
                                                <div class="inner-box">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Mechanized Bridge Construction</li>
                                                        <li>Movable Scaffolding Systems</li>
                                                    </ul>
                                                    <p>Lookout flogging bilge rat main shet bilge water nipper fluke to go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                                    <div class="link-box">
                                                        <h6><a href="index.php">Make your Appointment</a></h6>
                                                    </div>
                                                    <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                    <div class="btn-box">
                                                        <a href="index.php" class="theme-btn btn-two"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/industry-2.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- industry-section end -->


        <!-- video-section -->
        <section class="video-section">
            <div class="bg-layer" style="background-image: url(assets/images/background/video-bg.jpg);"></div>
            <div class="auto-container">
                <div class="sec-title light">
                    <span class="sub-title">produce the best</span>
                    <h2>Satisfaction is Our Motto</h2>
                    <div class="curve-text">
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                        </div>
                        <span class="curved-circle-2">Play Your Video</span>
                        <span class="curved-circle-3">Play Your Video</span>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="text">
                        <p>Partner with Dubai's premier industrial metal trading & custom processing facility.<br />Fast delivery and mill certification across UAE & GCC.</p>
                    </div>
                    <div class="btn-box">
                        <a href="contact.php" class="theme-btn btn-one"><span>Request a Consultation</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-section end -->


        <!-- working-section -->
        <section class="working-section bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="sub-title">How We Work</span>
                    <h2>Manufacturing Processes</h2>
                </div>
            </div>
            <div class="outer-container border-top border-bottom">
                <div class="bg-layer" style="background-image: url(assets/images/background/working-bg.jpg);"></div>
                <div class="auto-container">
                    <div class="tabs-box">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="tabs-content">
                                    <div class="tab active-tab" id="tab-5">
                                        <div class="content-box">
                                            <span>Step 01</span>
                                            <h3>Request Quotation</h3>
                                            <p>Bilge rat main shet bilge water nipper fluketo go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                            <div class="btn-box">
                                                <a href="index.php"><span>Request Your Quote</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-6">
                                        <div class="content-box">
                                            <span>Step 02</span>
                                            <h3>Planning Stage</h3>
                                            <p>Bilge rat main shet bilge water nipper fluketo go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                            <div class="btn-box">
                                                <a href="index.php"><span>Request Your Quote</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-7">
                                        <div class="content-box">
                                            <span>Step 03</span>
                                            <h3>Product Development</h3>
                                            <p>Bilge rat main shet bilge water nipper fluketo go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                            <div class="btn-box">
                                                <a href="index.php"><span>Request Your Quote</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-8">
                                        <div class="content-box">
                                            <span>Step 04</span>
                                            <h3>Production / Evaluation</h3>
                                            <p>Bilge rat main shet bilge water nipper fluketo go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                            <div class="btn-box">
                                                <a href="index.php"><span>Request Your Quote</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-9">
                                        <div class="content-box">
                                            <span>Step 05</span>
                                            <h3>Inspection & Delivery</h3>
                                            <p>Bilge rat main shet bilge water nipper fluketo go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct.</p>
                                            <div class="btn-box">
                                                <a href="index.php"><span>Request Your Quote</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 btn-column">
                                <div class="tab-btn-box">
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li class="tab-btn active-btn" data-tab="#tab-5">
                                            <span>01</span>
                                            <h4>Request&nbsp;Quotation</h4>
                                        </li>
                                        <li class="tab-btn" data-tab="#tab-6">
                                            <span>02</span>
                                            <h4>Planning&nbsp;Stage</h4>
                                        </li>
                                        <li class="tab-btn" data-tab="#tab-7">
                                            <span>03</span>
                                            <h4>Product&nbsp;Development</h4>
                                        </li>
                                        <li class="tab-btn" data-tab="#tab-8">
                                            <span>04</span>
                                            <h4>Production&nbsp;/&nbsp;Evaluation</h4>
                                        </li>
                                        <li class="tab-btn" data-tab="#tab-9">
                                            <span>05</span>
                                            <h4>Inspection&nbsp;&&nbsp;Delivery</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- working-section end -->


        <!-- case-section -->
        <section class="case-section">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Case Studies</span>
                    <h2>Explore Our Recent Projects</h2>
                </div>
            </div>
            <div class="outer-container border-top">
                <div class="case-carousel owl-carousel owl-theme">
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Construction & Engineering</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-1.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="projects.php">Pipeline System</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Technology</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-2.jpg" alt=" "></figure>
                                <div class="view-btn"><a href="assets/images/case/case-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="projects.php">Sheet Metal Bending</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Mechanical</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-3.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="projects.php">Van Drilling Service</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Material, Mechanical</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-4.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="projects.php">Steel Springs</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Construction & Engineering</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-1.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="projects.php">Pipeline System</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Technology</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-2.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="projects.php">Sheet Metal Bending</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Mechanical</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-3.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="projects.php">Van Drilling Service</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Material, Mechanical</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-4.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="projects.php">Steel Springs</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Construction & Engineering</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-1.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="projects.php">Pipeline System</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Technology</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-2.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="projects.php">Sheet Metal Bending</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Mechanical</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-3.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="projects.php">Van Drilling Service</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Material, Mechanical</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-4.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="projects.php">Steel Springs</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- case-section end -->


        <!-- testimonial-section -->
        <section class="testimonial-section bg-color-1 border-top border-bottom">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Testimonials</span>
                    <h2>Client Trust & Industry Partnerships</h2>
                    <a href="index.php" class="theme-btn btn-two"><span>all Reviews</span></a>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                    <div class="testimonial-content">
                        <div class="quote-box">
                            <div class="quote"><i class="flaticon-quote"></i></div>
                        </div>
                        <figure class="thumb-box"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                        <div class="inner-box">
                            <ul class="rating clearfix">
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                            <p>MM General Trading L.L.C has been an exceptional partner for our architectural cladding and metal packages in Dubai. Their material quality and mill cert compliance are consistently flawless.</p>
                            <h3>Nathan Felix</h3>
                            <span class="designation">CEO, High Rise Construction</span>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="quote-box">
                            <div class="quote"><i class="flaticon-quote"></i></div>
                        </div>
                        <figure class="thumb-box"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                        <div class="inner-box">
                            <ul class="rating clearfix">
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                            <p>MM General Trading L.L.C has been an exceptional partner for our architectural cladding and metal packages in Dubai. Their material quality and mill cert compliance are consistently flawless.</p>
                            <h3>Nathan Felix</h3>
                            <span class="designation">CEO, High Rise Construction</span>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="quote-box">
                            <div class="quote"><i class="flaticon-quote"></i></div>
                        </div>
                        <figure class="thumb-box"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                        <div class="inner-box">
                            <ul class="rating clearfix">
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                            <p>MM General Trading L.L.C has been an exceptional partner for our architectural cladding and metal packages in Dubai. Their material quality and mill cert compliance are consistently flawless.</p>
                            <h3>Nathan Felix</h3>
                            <span class="designation">CEO, High Rise Construction</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="tabs-box">
                <div class="upper-box">
                    <div class="auto-container">
                        <div class="sec-title centred">
                            <span class="sub-title">News & Updates</span>
                            <h2>Latest From Our Blog</h2>
                        </div>
                        <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab-10">View All</li>
                                <li class="tab-btn" data-tab="#tab-11">News</li>
                                <li class="tab-btn" data-tab="#tab-12">Press Realease</li>
                                <li class="tab-btn" data-tab="#tab-13">Tips & Tricks</li>
                            </ul>
                            <div class="btn-box">
                                <a href="products.php"><span>View All Post</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-content">
                    <div class="auto-container">
                        <div class="tab active-tab" id="tab-10">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/news/news-1.jpg" alt=""></figure>
                                                <div class="category"><a href="products.php">Manufacturing</a></div>
                                                <div class="view-btn"><a href="assets/images/news/news-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i>14.10.2022</li>
                                                    <li><i class="fa-regular fa-user"></i><a href="products.php">Lillian Grace</a></li>
                                                </ul>
                                                <h3><a href="products.php">Industry’s Imperatives For Sustainability in...</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/news/news-2.jpg" alt=""></figure>
                                                <div class="category"><a href="products.php">Smart Factory</a></div>
                                                <div class="view-btn"><a href="assets/images/news/news-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i>28.09.2022</li>
                                                    <li><i class="fa-regular fa-user"></i><a href="products.php">Oliver Jack</a></li>
                                                </ul>
                                                <h3><a href="products.php">Digital Manufacturing Week 2020 – Leading the Way</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/news/news-3.jpg" alt=""></figure>
                                                <div class="category"><a href="products.php">Innovation</a></div>
                                                <div class="view-btn"><a href="assets/images/news/news-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i>06.09.2022</li>
                                                    <li><i class="fa-regular fa-user"></i><a href="products.php">Jacob Harry</a></li>
                                                </ul>
                                                <h3><a href="products.php">Building Back a Sustainable Manufacturing Sector</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-11">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/news/news-2.jpg" alt=""></figure>
                                                <div class="category"><a href="products.php">Smart Factory</a></div>
                                                <div class="view-btn"><a href="assets/images/news/news-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i>28.09.2022</li>
                                                    <li><i class="fa-regular fa-user"></i><a href="products.php">Oliver Jack</a></li>
                                                </ul>
                                                <h3><a href="products.php">Digital Manufacturing Week 2020 – Leading the Way</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/news/news-1.jpg" alt=""></figure>
                                                <div class="category"><a href="products.php">Manufacturing</a></div>
                                                <div class="view-btn"><a href="assets/images/news/news-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i>14.10.2022</li>
                                                    <li><i class="fa-regular fa-user"></i><a href="products.php">Lillian Grace</a></li>
                                                </ul>
                                                <h3><a href="products.php">Industry’s Imperatives For Sustainability in...</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/news/news-3.jpg" alt=""></figure>
                                                <div class="category"><a href="products.php">Innovation</a></div>
                                                <div class="view-btn"><a href="assets/images/news/news-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i>06.09.2022</li>
                                                    <li><i class="fa-regular fa-user"></i><a href="products.php">Jacob Harry</a></li>
                                                </ul>
                                                <h3><a href="products.php">Building Back a Sustainable Manufacturing Sector</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-12">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/news/news-1.jpg" alt=""></figure>
                                                <div class="category"><a href="products.php">Manufacturing</a></div>
                                                <div class="view-btn"><a href="assets/images/news/news-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i>14.10.2022</li>
                                                    <li><i class="fa-regular fa-user"></i><a href="products.php">Lillian Grace</a></li>
                                                </ul>
                                                <h3><a href="products.php">Industry’s Imperatives For Sustainability in...</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/news/news-3.jpg" alt=""></figure>
                                                <div class="category"><a href="products.php">Innovation</a></div>
                                                <div class="view-btn"><a href="assets/images/news/news-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i>06.09.2022</li>
                                                    <li><i class="fa-regular fa-user"></i><a href="products.php">Jacob Harry</a></li>
                                                </ul>
                                                <h3><a href="products.php">Building Back a Sustainable Manufacturing Sector</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/news/news-2.jpg" alt=""></figure>
                                                <div class="category"><a href="products.php">Smart Factory</a></div>
                                                <div class="view-btn"><a href="assets/images/news/news-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i>28.09.2022</li>
                                                    <li><i class="fa-regular fa-user"></i><a href="products.php">Oliver Jack</a></li>
                                                </ul>
                                                <h3><a href="products.php">Digital Manufacturing Week 2020 – Leading the Way</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-13">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/news/news-1.jpg" alt=""></figure>
                                                <div class="category"><a href="products.php">Manufacturing</a></div>
                                                <div class="view-btn"><a href="assets/images/news/news-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i>14.10.2022</li>
                                                    <li><i class="fa-regular fa-user"></i><a href="products.php">Lillian Grace</a></li>
                                                </ul>
                                                <h3><a href="products.php">Industry’s Imperatives For Sustainability in...</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/news/news-2.jpg" alt=""></figure>
                                                <div class="category"><a href="products.php">Smart Factory</a></div>
                                                <div class="view-btn"><a href="assets/images/news/news-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i>28.09.2022</li>
                                                    <li><i class="fa-regular fa-user"></i><a href="products.php">Oliver Jack</a></li>
                                                </ul>
                                                <h3><a href="products.php">Digital Manufacturing Week 2020 – Leading the Way</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/news/news-3.jpg" alt=""></figure>
                                                <div class="category"><a href="products.php">Innovation</a></div>
                                                <div class="view-btn"><a href="assets/images/news/news-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i>06.09.2022</li>
                                                    <li><i class="fa-regular fa-user"></i><a href="products.php">Jacob Harry</a></li>
                                                </ul>
                                                <h3><a href="products.php">Building Back a Sustainable Manufacturing Sector</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


<?php include __DIR__.'/footer.php'; ?>