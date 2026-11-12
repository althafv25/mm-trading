<?php
$Page = 'about';
$PageTitle = 'About MM General Trading L.L.C | Industrial Metal Trading Dubai';
$PageDescription = 'Learn about MM General Trading L.L.C, a premier industrial trading and metal distribution company in Dubai Investments Park 2 (DIP - 2), dedicated to certified aluminium, steel, and engineering solutions.';
$PageCanonical = 'https://www.mmgeneraltrading.com/about.php';
$PageOgImage = 'https://www.mmgeneraltrading.com/assets/images/resource/about-2.jpg';
$PageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'AboutPage',
    'name' => 'About MM General Trading L.L.C',
    'url' => $PageCanonical,
    'description' => $PageDescription
]);
include __DIR__ . '/header.php';
?>

<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
    <div class="line-box">
        <div class="line-1"></div>
        <div class="line-2"></div>
    </div>
    <div class="auto-container">
        <div class="content-box">
            <h1>About MM General Trading</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- about-style-two -->
<section class="about-style-two sec-pad">
    <div class="auto-container">
        <div class="row clearfix align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image image-1"><img src="assets/images/resource/about-2.jpg" alt="MM General Trading Facility"></figure>
                    <figure class="image image-2"><img src="assets/images/resource/about-3.jpg" alt="Industrial Metal Processing"></figure>
                    <div class="text-box" style="background: linear-gradient(135deg, #E6B555 0%, #D69A2D 55%, #B87F1C 100%);">
                        <h5>Industry Excellence</h5>
                        <h2>12+</h2>
                    </div>
                    <div class="icon-box" style="background: #122230; color: #D69A2D;"><i class="flaticon-factory"></i></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="slider-content" style="padding-left: 20px;">
                    <div class="sec-title">
                        <span class="sub-title">Corporate Profile</span>
                        <h2>Premier Industrial Metal & Trading Solutions in the UAE</h2>
                    </div>
                    <ul class="list-item clearfix" style="margin-bottom: 20px;">
                        <li><strong>MM GENERAL TRADING L.L.C</strong> (ام ام للتجاره العامه ذ.م.م)</li>
                        <li>Strategically located in Dubai Investments Park 2 (DIP - 2)</li>
                        <li>Certified mill sources, full traceability, and technical compliance</li>
                    </ul>
                    <div class="text">
                        <p>Established as a trusted industrial metal partner, MM General Trading L.L.C delivers comprehensive supply and custom processing solutions to construction, architectural, marine, oil & gas, and infrastructure leaders across the United Arab Emirates and the wider GCC region.</p>
                        <p>Our expansive stockholding includes plain aluminium sheets, 5-bar chequered tread plates, stucco embossed insulation coils, perforated metals, structural extrusions, and marine-grade alloys—all backed by rigorous quality standards and prompt logistical execution.</p>
                        <div class="btn-box" style="margin-top: 25px;">
                            <a href="products.php" class="theme-btn btn-one"><span>Explore Product Catalog</span></a>
                            <a href="contact.php" class="theme-btn btn-two"><span>Contact Sales</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->
<!-- statements-section -->
<section class="statements-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred" style="margin-bottom: 45px;">
            <span class="sub-title">Core Principles</span>
            <h2>Our Mission, Vision & Quality Commitment</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom: 30px;">
                <div class="inner-box" style="background: #ffffff; border-radius: 12px; padding: 35px 28px; border: 1px solid #E2E8F0; height: 100%; box-shadow: 0 4px 16px rgba(15,28,38,0.05);">
                    <div style="width: 52px; height: 52px; border-radius: 10px; background: rgba(214,154,45,0.12); color: #D69A2D; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 20px;">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3 style="font-size: 22px; font-weight: 700; color: #0F1C26; margin-bottom: 12px;">Our Mission</h3>
                    <p style="font-size: 14.5px; color: #64748B; line-height: 1.65; margin: 0;">To supply certified, premium-grade industrial metals and engineered solutions with unmatched consistency, transparent pricing, and rapid delivery that empower our clients to build safer, more durable projects.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom: 30px;">
                <div class="inner-box" style="background: #ffffff; border-radius: 12px; padding: 35px 28px; border: 1px solid #E2E8F0; height: 100%; box-shadow: 0 4px 16px rgba(15,28,38,0.05);">
                    <div style="width: 52px; height: 52px; border-radius: 10px; background: rgba(80,109,133,0.12); color: #506D85; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 20px;">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <h3 style="font-size: 22px; font-weight: 700; color: #0F1C26; margin-bottom: 12px;">Our Vision</h3>
                    <p style="font-size: 14.5px; color: #64748B; line-height: 1.65; margin: 0;">To be recognised as the foremost industrial trading and metal distribution authority in Dubai and the GCC, renowned for technical competence, ethical partnership, and unwavering material integrity.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom: 30px;">
                <div class="inner-box" style="background: #ffffff; border-radius: 12px; padding: 35px 28px; border: 1px solid #E2E8F0; height: 100%; box-shadow: 0 4px 16px rgba(15,28,38,0.05);">
                    <div style="width: 52px; height: 52px; border-radius: 10px; background: rgba(214,154,45,0.12); color: #D69A2D; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 20px;">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <h3 style="font-size: 22px; font-weight: 700; color: #0F1C26; margin-bottom: 12px;">Quality Assurance</h3>
                    <p style="font-size: 14.5px; color: #64748B; line-height: 1.65; margin: 0;">Every batch in our Dubai inventory adheres to ASTM, EN, and ISO benchmarks, accompanied by verified mill test certificates, precise dimensional inspections, and protective packaging.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- statements-section end -->
<!-- funfact-section -->
<section class="funfact-section sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one text-center">
                    <div class="inner-box">
                        <div class="icon-box" style="margin: 0 auto 16px auto;"><i class="flaticon-factory"></i></div>
                        <div class="count-outer count-box" style="font-size: 42px; font-weight: 700; color: #D69A2D;">
                            <span class="count-text" data-speed="1500" data-stop="12">0</span>+
                        </div>
                        <h4 style="color: #ffffff; margin-top: 8px;">Years of Excellence</h4>
                        <p style="color: #94A3B8; font-size: 13px;">Serving UAE & GCC Industries</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one text-center">
                    <div class="inner-box">
                        <div class="icon-box" style="margin: 0 auto 16px auto;"><i class="flaticon-gas"></i></div>
                        <div class="count-outer count-box" style="font-size: 42px; font-weight: 700; color: #D69A2D;">
                            <span class="count-text" data-speed="1500" data-stop="750">0</span>+
                        </div>
                        <h4 style="color: #ffffff; margin-top: 8px;">Completed Projects</h4>
                        <p style="color: #94A3B8; font-size: 13px;">100% On-Spec Material Delivery</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one text-center">
                    <div class="inner-box">
                        <div class="icon-box" style="margin: 0 auto 16px auto;"><i class="flaticon-engineer"></i></div>
                        <div class="count-outer count-box" style="font-size: 42px; font-weight: 700; color: #D69A2D;">
                            <span class="count-text" data-speed="1500" data-stop="15000">0</span>+
                        </div>
                        <h4 style="color: #ffffff; margin-top: 8px;">Metric Tons Supplied</h4>
                        <p style="color: #94A3B8; font-size: 13px;">Aluminium & Alloy Products</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one text-center">
                    <div class="inner-box">
                        <div class="icon-box" style="margin: 0 auto 16px auto;"><i class="flaticon-reward"></i></div>
                        <div class="count-outer count-box" style="font-size: 42px; font-weight: 700; color: #D69A2D;">
                            <span class="count-text" data-speed="1500" data-stop="100">0</span>%
                        </div>
                        <h4 style="color: #ffffff; margin-top: 8px;">Certified Standards</h4>
                        <p style="color: #94A3B8; font-size: 13px;">Mill Certs & 3.1 Traceability</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-section end -->
<!-- why choose us -->
<section class="chooseus-style-two bg-color-1 border-top border-bottom sec-pad" style="padding: 70px 0;">
    <div class="auto-container">
        <div class="sec-title centred" style="margin-bottom: 45px;">
            <span class="sub-title">Why MM General Trading</span>
            <h2>Our Operational Advantages</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom: 25px;">
                <div class="inner-box" style="background: #ffffff; padding: 28px; border-radius: 10px; border: 1px solid #E2E8F0; height: 100%;">
                    <div style="font-size: 28px; color: #D69A2D; margin-bottom: 12px;"><i class="flaticon-target"></i></div>
                    <h4 style="font-weight: 700; margin-bottom: 8px; color: #0F1C26;">Dubai DIP - 2 Hub</h4>
                    <p style="font-size: 14px; color: #64748B; margin: 0;">Direct access to UAE highways, Jebel Ali Port, and GCC freight arteries ensures fast turnaround and dispatch.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom: 25px;">
                <div class="inner-box" style="background: #ffffff; padding: 28px; border-radius: 10px; border: 1px solid #E2E8F0; height: 100%;">
                    <div style="font-size: 28px; color: #D69A2D; margin-bottom: 12px;"><i class="flaticon-agreement"></i></div>
                    <h4 style="font-weight: 700; margin-bottom: 8px; color: #0F1C26;">Complete Product Scope</h4>
                    <p style="font-size: 14px; color: #64748B; margin: 0;">One-stop partner for plain sheets, chequered plates, stucco coils, perforated metal, and structural extrusions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom: 25px;">
                <div class="inner-box" style="background: #ffffff; padding: 28px; border-radius: 10px; border: 1px solid #E2E8F0; height: 100%;">
                    <div style="font-size: 28px; color: #D69A2D; margin-bottom: 12px;"><i class="flaticon-engineer"></i></div>
                    <h4 style="font-weight: 700; margin-bottom: 8px; color: #0F1C26;">Engineering Expertise</h4>
                    <p style="font-size: 14px; color: #64748B; margin: 0;">Experienced metallurgists and sales engineers assisting with alloy selection, temper, and custom fabrication drawings.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Major Vendor & Manufacturer Partnerships -->
<section class="clients-section sec-pad" style="background: #ffffff; padding: 60px 0; border-top: 1px solid #E2E8F0;">
    <div class="auto-container">
        <div class="sec-title centred" style="margin-bottom: 35px;">
            <span class="sub-title">Global Vendor Alliances</span>
            <h2>Our Manufacturing & Brand Partners</h2>
            <p style="max-width: 680px; margin: 10px auto 0 auto;">We bridge world-class global manufacturers with major construction and engineering projects across the UAE and GCC.</p>
        </div>
        <div class="row clearfix justify-content-center text-center" style="gap: 20px 0;">
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 15px;">
                <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 25px 15px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <h4 style="font-size: 20px; font-weight: 700; color: #0F1C26; margin: 0;">GUIBAO<sup>®</sup></h4>
                    <span style="font-size: 12px; color: #D69A2D; font-weight: 600; margin-top: 4px;">Architectural Sealants</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 15px;">
                <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 25px 15px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <h4 style="font-size: 20px; font-weight: 700; color: #0F1C26; margin: 0;">TKK<sup>®</sup></h4>
                    <span style="font-size: 12px; color: #506D85; font-weight: 600; margin-top: 4px;">Polyurethane PU Foam</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 15px;">
                <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 25px 15px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <h4 style="font-size: 19px; font-weight: 700; color: #0F1C26; margin: 0;">ASTRAL BONDTITE<sup>®</sup></h4>
                    <span style="font-size: 12px; color: #D69A2D; font-weight: 600; margin-top: 4px;">Industrial Adhesives</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 15px;">
                <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 25px 15px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <h4 style="font-size: 20px; font-weight: 700; color: #0F1C26; margin: 0;">SEALz<sup>®</sup></h4>
                    <span style="font-size: 12px; color: #506D85; font-weight: 600; margin-top: 4px;">Fire & Acoustic Seals</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 15px;">
                <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 25px 15px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <h4 style="font-size: 19px; font-weight: 700; color: #0F1C26; margin: 0;">HINDALCO</h4>
                    <span style="font-size: 12px; color: #D69A2D; font-weight: 600; margin-top: 4px;">Stucco Embossed Alloys</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action -->
<section class="cta-section sec-pad" style="background: linear-gradient(135deg, #0F1C26 0%, #172C3D 60%, #354D5E 100%); color: #ffffff;">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 text-column">
<!-- Quality Policy & Health & Safety -->
<section class="sec-pad bg-color-1" style="border-top: 1px solid #E2E8F0;">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12" style="margin-bottom: 30px;">
                <div style="background: #ffffff; border-radius: 12px; padding: 35px 30px; border: 1px solid #E2E8F0; height: 100%; box-shadow: 0 4px 16px rgba(15,28,38,0.05);">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                        <div style="width: 48px; height: 48px; border-radius: 8px; background: rgba(214,154,45,0.12); color: #D69A2D; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <h3 style="font-size: 22px; font-weight: 700; color: #0F1C26; margin: 0;">Quality Policy</h3>
                    </div>
                    <p style="font-size: 14.5px; color: #475569; line-height: 1.7; margin-bottom: 15px;">
                        M M General Trading LLC is committed to an operating philosophy based on openness in communication, integrity in serving our customers, fairness and concern for our employees, and responsibility to the communities within which we operate.
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 13.5px; color: #334155; line-height: 1.8;">
                        <li><i class="fa-solid fa-check" style="color: #D69A2D; margin-right: 8px;"></i> Creating and nurturing an environment based on honesty and integrity</li>
                        <li><i class="fa-solid fa-check" style="color: #D69A2D; margin-right: 8px;"></i> Equitable sharing in the success of the company and empowerment through training</li>
                        <li><i class="fa-solid fa-check" style="color: #D69A2D; margin-right: 8px;"></i> Adhering to all applicable standards and customer-specific specifications</li>
                        <li><i class="fa-solid fa-check" style="color: #D69A2D; margin-right: 8px;"></i> Proactive compliance with safety, environmental, legal and regulatory requirements</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12" style="margin-bottom: 30px;">
                <div style="background: #ffffff; border-radius: 12px; padding: 35px 30px; border: 1px solid #E2E8F0; height: 100%; box-shadow: 0 4px 16px rgba(15,28,38,0.05);">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                        <div style="width: 48px; height: 48px; border-radius: 8px; background: rgba(80,109,133,0.12); color: #506D85; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                            <i class="fa-solid fa-heart-pulse"></i>
                        </div>
                        <h3 style="font-size: 22px; font-weight: 700; color: #0F1C26; margin: 0;">Health & Safety</h3>
                    </div>
                    <p style="font-size: 14.5px; color: #475569; line-height: 1.7; margin-bottom: 15px;">
                        At M M General Trading LLC, we are unwavering in our commitment to prioritizing the health and safety of all individuals associated with our operations across all activities.
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 13.5px; color: #334155; line-height: 1.8;">
                        <li><i class="fa-solid fa-check" style="color: #506D85; margin-right: 8px;"></i> Compliance with local, national, and international health & safety regulations</li>
                        <li><i class="fa-solid fa-check" style="color: #506D85; margin-right: 8px;"></i> Proactive hazard identification and systematic risk assessments</li>
                        <li><i class="fa-solid fa-check" style="color: #506D85; margin-right: 8px;"></i> Comprehensive workforce training programs and continuous awareness</li>
                        <li><i class="fa-solid fa-check" style="color: #506D85; margin-right: 8px;"></i> Robust emergency preparedness and transparent incident communication</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

                <span style="color: #D69A2D; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 0.1em; display: inline-block; margin-bottom: 8px;">Partner With Excellence</span>
                <h2 style="color: #ffffff; font-size: 34px; font-weight: 700; line-height: 1.25; margin-bottom: 10px;">Ready to Discuss Your Industrial Material Needs?</h2>
                <p style="color: #CBD5E1; font-size: 16px; margin: 0;">Connect with our Dubai head office today at +971 4 8878778 or send your inquiry to info@mmgeneraltrading.com.</p>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 btn-column text-lg-right" style="margin-top: 20px;">
                <a href="contact.php" class="theme-btn btn-one" style="padding: 16px 36px; font-size: 15px;">
                    <span>Contact Head Office</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
