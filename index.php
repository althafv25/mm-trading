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
$PRODUCTS_DB = include __DIR__ . '/products-data.php';
$BLOG_POSTS = include __DIR__ . '/blog-data.php';
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
                                <a href="products/plain-aluminium-sheets-plates.php" class="theme-btn btn-one"><span>View Specifications</span></a>
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


        <!-- Product-section -->
        <section class="case-section">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Our Products</span>
                    <h2>Explore Our Core Materials &amp; Products</h2>
                </div>
            </div>
            <div class="outer-container border-top">
                <div class="case-carousel owl-carousel owl-theme">
                    <?php foreach ($PRODUCTS_DB as $slug => $product): 
                        $targetDir = ($product['division'] === 'services') ? 'services/' : 'products/';
                        $prodUrl = htmlspecialchars($targetDir . $slug . '.php', ENT_QUOTES, 'UTF-8');
                    ?>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5><?= htmlspecialchars($product['category'], ENT_QUOTES, 'UTF-8') ?></h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><a href="<?= $prodUrl ?>"><img src="<?= htmlspecialchars($product['hero_image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?>"></a></figure>
                                <div class="view-btn"><a href="<?= htmlspecialchars($product['hero_image'], ENT_QUOTES, 'UTF-8') ?>" class="lightbox-image" data-fancybox="gallery" title="<?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?>"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="<?= $prodUrl ?>" title="<?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- case-section end -->


        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/about1.png" alt=""></figure>
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
                                    <span class="count-text" data-speed="1500" data-stop="26">0</span>
                                </div>
                                <div class="text">
                                    <h3>Product Lines</h3>
                                    <p>Metals, chemicals, adhesives, fire seals, and hardware in stock</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-gas"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="12">0</span><span>+</span>
                                </div>
                                <div class="text">
                                    <h3>Years Experience</h3>
                                    <p>Serving industrial clients across the UAE and GCC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-engineer"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="6">0</span>
                                </div>
                                <div class="text">
                                    <h3>Divisions</h3>
                                    <p>Metals, chemicals, adhesives, fire seals, hardware, and services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->


     


        <!-- clients-section -->
        <section class="clients-section bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="sub-title">Trusted Partners</span>
                    <h2>Our Vendors</h2>
                </div>
                <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/1.png" alt="Vendor logo 1"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/2.png" alt="Vendor logo 2"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/3.png" alt="Vendor logo 3"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/4.png" alt="Vendor logo 4"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/5.png" alt="Vendor logo 5"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/6.png" alt="Vendor logo 6"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/7.png" alt="Vendor logo 7"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/8.png" alt="Vendor logo 8"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/9.png" alt="Vendor logo 9"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/10.png" alt="Vendor logo 10"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/11.png" alt="Vendor logo 11"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/12.png" alt="Vendor logo 12"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/13.png" alt="Vendor logo 13"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/14.png" alt="Vendor logo 14"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/15.png" alt="Vendor logo 15"></a></figure>
                    <figure class="clients-logo"><a href="products.php"><img src="assets/images/vendors/16.png" alt="Vendor logo 16"></a></figure>
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
                            <h2>Certified Materials, Fast Dispatch</h2>
                            <p>Certified industrial metals and sealants, stocked at our DIP - 2 base in Dubai.</p>
                            <a href="about.php" class="theme-btn btn-two"><span>More Details</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-column">
                <div class="scroll-text">
                    <ul class="text-list clearfix">
                        <li>certified mill sources</li>
                        <li>fast dispatch from Dubai</li>
                    </ul>
                </div>
                <div class="content-box">
                    <div class="single-item">
                        <div class="static-content">
                            <span class="count-text">01</span>
                            <div class="text">
                                <h3>Certified Mill Sources</h3>
                                <p>Full traceability and technical compliance documents with every order.</p>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="icon-box"><i class="flaticon-manufacture"></i></div>
                            <div class="text">
                                <h3>Certified Mill Sources</h3>
                                <p>Full traceability and technical compliance documents with every order.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="static-content">
                            <span class="count-text">02</span>
                            <div class="text">
                                <h3>Dubai DIP - 2 Hub</h3>
                                <p>Fast turnaround across the UAE and GCC via major highways and Jebel Ali Port.</p>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="icon-box"><i class="flaticon-manufacture"></i></div>
                            <div class="text">
                                <h3>Dubai DIP - 2 Hub</h3>
                                <p>Fast turnaround across the UAE and GCC via major highways and Jebel Ali Port.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="static-content">
                            <span class="count-text">03</span>
                            <div class="text">
                                <h3>One Supplier, Full Scope</h3>
                                <p>Sheets, plates, extrusions, sealants, adhesives, and fire seals in one place.</p>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="icon-box"><i class="flaticon-manufacture"></i></div>
                            <div class="text">
                                <h3>One Supplier, Full Scope</h3>
                                <p>Sheets, plates, extrusions, sealants, adhesives, and fire seals in one place.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="static-content">
                            <span class="count-text">04</span>
                            <div class="text">
                                <h3>Engineering & Processing</h3>
                                <p>Help with alloy and temper selection, plus slitting and coating services.</p>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="icon-box"><i class="flaticon-manufacture"></i></div>
                            <div class="text">
                                <h3>Engineering & Processing</h3>
                                <p>Help with alloy and temper selection, plus slitting and coating services.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll-text">
                    <ul class="text-list clearfix">
                        <li>certified mill sources</li>
                        <li>fast dispatch from Dubai</li>
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
                                    <div class="icon-box"><i class="flaticon-globe"></i></div>
                                    <h4>Marine & Offshore</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 single-btn">
                                <div class="p-tab-btn" data-tab="#tab-4">
                                    <div class="icon-box"><i class="flaticon-radiator"></i></div>
                                    <h4>Industrial & HVAC</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="auto-container">
                    <div class="p-tabs-content">
                        <div class="p-tab active-tab" id="tab-1">
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
                                                    <li>Architectural building cladding and curtain wall backing panels</li>
                                                    <li>Commercial curtain walls, unitized façades, and shopfronts</li>
                                                    <li>Structural glazing and façade joint sealing</li>
                                                    <li>Window frame insulation and perimeter fire and acoustic sealing</li>
                                                </ul>
                                                <p>Products used: <a href="products/plain-aluminium-sheets-plates.php">plain aluminium sheets</a>, <a href="products/architectural-aluminium-profiles.php">architectural aluminium profiles</a>, <a href="products/guibao-1092-structural-silicone.php">GUIBAO structural silicones</a>, <a href="products/tkk-pu-foam.php">TKK PU foam</a>, and <a href="products/sealz-perimeter-astragal-seals.php">SEALz perimeter seals</a>.</p>
                                                <div class="link-box">
                                                    <h6><a href="contact.php">Request a Quote</a></h6>
                                                </div>
                                                <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                <div class="btn-box">
                                                    <a href="products.php" class="theme-btn btn-two"><span>View Products</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/products/architectural-aluminium-profiles.png" alt="Architectural aluminium profiles"></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-2">
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
                                                    <li>Pipeline weather jacketing and refinery storage tank cladding</li>
                                                    <li>Chemical storage tanks and process equipment</li>
                                                    <li>Petrochemical catwalks, stair treads, and access decks</li>
                                                    <li>Offshore structural framing</li>
                                                </ul>
                                                <p>Products used: <a href="products/aluminium-stucco-sheets.php">stucco embossed sheets</a>, <a href="products/stainless-steel-sheets.php">stainless steel sheets</a>, <a href="products/aluminium-chequered-sheets.php">chequered tread plates</a>, and <a href="products/stainless-steel-profiles.php">stainless steel profiles</a>.</p>
                                                <div class="link-box">
                                                    <h6><a href="contact.php">Request a Quote</a></h6>
                                                </div>
                                                <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                <div class="btn-box">
                                                    <a href="products.php" class="theme-btn btn-two"><span>View Products</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/products/aluminium-stucco-sheets.png" alt="Aluminium stucco embossed sheets"></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-3">
                            <div class="content-inner">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                        <div class="content-box">
                                            <div class="sec-title">
                                                <span class="sub-title">Industry</span>
                                                <h2>Marine & Offshore</h2>
                                            </div>
                                            <div class="inner-box">
                                                <ul class="list-style-one clearfix">
                                                    <li>Marine hulls, offshore superstructures, and fuel tanks</li>
                                                    <li>Maritime gangways, offshore platforms, and ship deck covers</li>
                                                    <li>Marine deck fittings and coastal handrails</li>
                                                    <li>Marine railings and offshore structural framing</li>
                                                </ul>
                                                <p>Products used: <a href="products/plain-aluminium-sheets-plates.php">plain aluminium plate (5083)</a>, <a href="products/aluminium-chequered-sheets.php">chequered tread plates</a>, <a href="products/stainless-steel-sheets.php">stainless steel sheets</a>, and <a href="products/stainless-steel-profiles.php">stainless steel profiles</a>.</p>
                                                <div class="link-box">
                                                    <h6><a href="contact.php">Request a Quote</a></h6>
                                                </div>
                                                <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                <div class="btn-box">
                                                    <a href="products.php" class="theme-btn btn-two"><span>View Products</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/products/plain-aluminium-sheets-plates.png" alt="Plain aluminium sheets and plates"></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-4">
                            <div class="content-inner">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                        <div class="content-box">
                                            <div class="sec-title">
                                                <span class="sub-title">Industry</span>
                                                <h2>Industrial & HVAC</h2>
                                            </div>
                                            <div class="inner-box">
                                                <ul class="list-style-one clearfix">
                                                    <li>HVAC ductwork protection and chilled water pipe insulation</li>
                                                    <li>HVAC intake grilles, exhaust louvers, and chiller plant screening</li>
                                                    <li>Cold storage rooms, walk-in freezers, and refrigerated containers</li>
                                                    <li>Factory walkways, conveyor screens, and machine safety guards</li>
                                                </ul>
                                                <p>Products used: <a href="products/aluminium-stucco-sheets.php">stucco embossed sheets</a>, <a href="products/perforated-metal-sheets.php">perforated metal sheets</a>, <a href="products/aluminium-chequered-sheets.php">chequered plates</a>, and <a href="products/standard-aluminium-extrusions.php">standard aluminium extrusions</a>.</p>
                                                <div class="link-box">
                                                    <h6><a href="contact.php">Request a Quote</a></h6>
                                                </div>
                                                <div class="email"><a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a></div>
                                                <div class="btn-box">
                                                    <a href="products.php" class="theme-btn btn-two"><span>View Products</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/products/perforated-metal-sheets.png" alt="Perforated metal sheets"></figure>
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
            <div class="bg-layer" style="background-image: url(assets/images/banner/banner2.jpg);"></div>
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
                    <h2>From Enquiry to Delivery</h2>
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
                                            <h3>Send Your Requirement</h3>
                                            <p>Share your drawings, bill of quantities, dimensions, alloy grade, or product name. Our sales team reviews the request and confirms what is needed.</p>
                                            <div class="btn-box">
                                                <a href="contact.php"><span>Request Your Quote</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-6">
                                        <div class="content-box">
                                            <span>Step 02</span>
                                            <h3>Technical Review</h3>
                                            <p>Our sales engineers confirm alloy, temper, thickness, and finish, and recommend the right sealant, adhesive, or fire seal for the application.</p>
                                            <div class="btn-box">
                                                <a href="contact.php"><span>Request Your Quote</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-7">
                                        <div class="content-box">
                                            <span>Step 03</span>
                                            <h3>Stock Check & Quotation</h3>
                                            <p>We check stock at our DIP - 2 Dubai facility and send a certified material quotation, typically within 24 hours.</p>
                                            <div class="btn-box">
                                                <a href="contact.php"><span>Request Your Quote</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-8">
                                        <div class="content-box">
                                            <span>Step 04</span>
                                            <h3>Processing</h3>
                                            <p>Cut-to-length, coil slitting, and powder, PVDF, or PVD coating are carried out to your specification before dispatch.</p>
                                            <div class="btn-box">
                                                <a href="contact.php"><span>Request Your Quote</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-9">
                                        <div class="content-box">
                                            <span>Step 05</span>
                                            <h3>Inspection & Delivery</h3>
                                            <p>Every order ships with mill test reports, dimensional checks, and protective packaging for site delivery across the UAE and GCC.</p>
                                            <div class="btn-box">
                                                <a href="contact.php"><span>Request Your Quote</span></a>
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
                                            <h4>Send Your Requirement</h4>
                                        </li>
                                        <li class="tab-btn" data-tab="#tab-6">
                                            <span>02</span>
                                            <h4>Technical Review</h4>
                                        </li>
                                        <li class="tab-btn" data-tab="#tab-7">
                                            <span>03</span>
                                            <h4>Stock &amp; Quotation</h4>
                                        </li>
                                        <li class="tab-btn" data-tab="#tab-8">
                                            <span>04</span>
                                            <h4>Processing</h4>
                                        </li>
                                        <li class="tab-btn" data-tab="#tab-9">
                                            <span>05</span>
                                            <h4>Inspection &amp; Delivery</h4>
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
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="sub-title">News & Updates</span>
                    <h2>Latest From Our Blog</h2>
                </div>
                <div class="row clearfix">
                    <?php foreach (array_slice($BLOG_POSTS, 0, 3) as $post): ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/<?= $safe($post['image']) ?>" alt="<?= $safe($post['title']) ?>"></figure>
                                        <div class="category"><a href="blog.php"><?= $safe($post['categoryLabel']) ?></a></div>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="<?= $safe($post['link']) ?>"><?= $safe($post['title']) ?></a></h3>
                                        <p><?= $safe($post['excerpt']) ?></p>
                                        <a href="<?= $safe($post['link']) ?>" class="read-more">Read more <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="btn-box centred" style="margin-top: 30px;">
                    <a href="blog.php" class="theme-btn btn-one"><span>View All Posts</span></a>
                </div>
            </div>
        </section>
        <!-- news-section end -->


<?php include __DIR__.'/footer.php'; ?>