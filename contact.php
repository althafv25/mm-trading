<?php
$Page = 'contact';
$PageTitle = 'Contact MM General Trading L.L.C | Dubai DIP 2, UAE';
$PageDescription = 'Get in touch with MM General Trading L.L.C in Dubai Investments Park 2 (DIP - 2). Direct contact for aluminium sheets, plates, coils, extrusions, sealants and industrial trading enquiries.';
$PageCanonical = 'https://www.mmgeneraltrading.com/contact.php';
$PageOgImage = 'https://www.mmgeneraltrading.com/assets/images/resource/contact-1.jpg';
$PageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ContactPage',
    'name' => 'Contact MM General Trading L.L.C',
    'url' => $PageCanonical,
    'mainEntity' => [
        '@type' => 'Organization',
        'name' => 'MM General Trading L.L.C',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Dubai Investments Park 2 (DIP - 2)',
            'postOfficeBoxNumber' => '26737',
            'addressLocality' => 'Dubai',
            'addressCountry' => 'AE'
        ],
        'telephone' => '+97148872112',
        'email' => 'info@mmgeneraltrading.com'
    ]
]);
include __DIR__ . '/header.php';
$status = $_GET['status'] ?? '';
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
            <h1>Get in Touch</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- contact-info-section -->
<section class="contact-info-section centred sec-pad" style="padding-bottom: 50px;">
    <div class="auto-container">
        <div class="title-box">
            <div class="icon-box"><i class="flaticon-headphones"></i></div>
            <h2>Industrial Materials & Project Enquiries</h2>
            <h3>Direct Lines: <a href="tel:+97148872112">+971 4 8872112</a> / <a href="tel:+97148878778">+971 4 8878778</a></h3>
        </div>
        <div class="inner-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-pin"></i></div>
                            <h3>Headquarters</h3>
                            <p>P.O. Box : 26737, DIP - 2<br />Dubai, United Arab Emirates</p>
                            <div class="link-box">
                                <a href="https://maps.google.com/?q=Dubai+Investments+Park+2" target="_blank" rel="noopener"><span>View Location</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-mail"></i></div>
                            <h3>Direct Email</h3>
                            <p>
                                <span>General :</span> <a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a><br />
                                <span>Mobile :</span> <a href="tel:+971525923184">+971 52 5923184</a> / <a href="tel:+971507998334">+971 50 7998334</a>
                            </p>
                            <div class="link-box">
                                <a href="#enquiry-form"><span>Submit Enquiry</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-clock"></i></div>
                            <h3>Working Hours</h3>
                            <p>Mon - Fri : 08:00 AM to 06:00 PM <br />Saturday & Sunday : Closed</p>
                            <div class="link-box">
                                <a href="tel:+97148872112"><span>Call Reception</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-section end -->
<!-- contact-location & form section -->
<section class="contact-section sec-pad border-top border-bottom bg-color-1" id="enquiry-form">
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="sub-title">Connect With Our Team</span>
            <h2>Dubai Operating Facility & Office</h2>
            <p style="max-width: 680px; margin: 10px auto 0 auto;">Situated in Dubai Investments Park 2 (DIP - 2) for immediate regional distribution across the UAE, GCC, and international shipping lanes.</p>
        </div>

        <?php if ($status === 'success' || $status === 'sent'): ?>
            <div class="alert alert-success text-center" style="max-width: 760px; margin: 20px auto 30px auto; border-radius: 8px; background: #e8f5e9; border: 1px solid #a5d6a7; color: #2e7d32; padding: 16px;">
                <i class="fa-solid fa-circle-check" style="font-size: 18px; margin-right: 8px;"></i>
                Thank you! Your enquiry has been received by MM General Trading L.L.C. Our specialists will respond promptly.
            </div>
        <?php elseif ($status === 'error'): ?>
            <div class="alert alert-danger text-center" style="max-width: 760px; margin: 20px auto 30px auto; border-radius: 8px; background: #ffebee; border: 1px solid #ef9a9a; color: #c62828; padding: 16px;">
                <i class="fa-solid fa-triangle-exclamation" style="font-size: 18px; margin-right: 8px;"></i>
                Please fill in all required fields (Name, Email, and Message) to submit your request.
            </div>
        <?php endif; ?>

        <div class="row clearfix align-items-stretch" style="margin-top: 40px;">
            <!-- Map & Office Column -->
            <div class="col-lg-6 col-md-12 col-sm-12 map-column" style="margin-bottom: 30px;">
                <div class="inner-box" style="background: #ffffff; border-radius: 12px; border: 1px solid #E2E8F0; overflow: hidden; height: 100%; box-shadow: 0 8px 24px rgba(15, 28, 38, 0.06); display: flex; flex-direction: column;">
                    <div style="width: 100%; height: 320px; flex-shrink: 0;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57813.06456073747!2d55.158142!3d24.978873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f72cf7f7a7d47%3A0x6a0f6735e83ec501!2sDubai%20Investments%20Park%202%20-%20Dubai!5e0!3m2!1sen!2sae!4v1700000000000!5m2!1sen!2sae" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Dubai Investments Park 2 Location Map">
                        </iframe>
                    </div>
                    <div style="padding: 28px; flex-grow: 1; background: #ffffff;">
                        <h4 style="font-family: 'D-DIN', sans-serif; font-weight: 700; color: #0F1C26; margin-bottom: 8px;">MM GENERAL TRADING L.L.C</h4>
                        <div style="font-size: 14px; color: #D69A2D; font-weight: 700; margin-bottom: 15px;">ام ام للتجاره العامه ذ.م.م</div>
                        <ul style="list-style: none; padding: 0; margin: 0; line-height: 2; font-size: 14.5px;">
                            <li><strong style="color: #0F1C26;"><i class="fa-solid fa-location-dot" style="color: #D69A2D; width: 20px;"></i> Address:</strong> P.O. Box : 26737, DIP - 2, Dubai - UAE</li>
                            <li><strong style="color: #0F1C26;"><i class="fa-solid fa-phone" style="color: #D69A2D; width: 20px;"></i> Office:</strong> <a href="tel:+97148872112" style="color: #506D85;">+971 4 8872112</a> / <a href="tel:+97148878778" style="color: #506D85;">+971 4 8878778</a></li>
                            <li><strong style="color: #0F1C26;"><i class="fa-solid fa-mobile-screen" style="color: #D69A2D; width: 20px;"></i> Mobile:</strong> <a href="tel:+971525923184" style="color: #506D85;">+971 52 5923184</a> / <a href="tel:+971507998334" style="color: #506D85;">+971 50 7998334</a></li>
                            <li><strong style="color: #0F1C26;"><i class="fa-solid fa-envelope" style="color: #D69A2D; width: 20px;"></i> Email:</strong> <a href="mailto:info@mmgeneraltrading.com" style="color: #506D85;">info@mmgeneraltrading.com</a></li>
                            <li><strong style="color: #0F1C26;"><i class="fa-solid fa-globe" style="color: #D69A2D; width: 20px;"></i> Web:</strong> <a href="https://www.mmgeneraltrading.com" style="color: #506D85;">www.mmgeneraltrading.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Form Column -->
            <div class="col-lg-6 col-md-12 col-sm-12 form-column" style="margin-bottom: 30px;">
                <div class="form-inner" style="background: #ffffff; border-radius: 12px; border: 1px solid #E2E8F0; padding: 35px 30px; box-shadow: 0 8px 24px rgba(15, 28, 38, 0.06); height: 100%;">
                    <div style="margin-bottom: 24px;">
                        <span class="sub-title" style="color: #D69A2D; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 0.08em;">Quick RFQ / Proposal</span>
                        <h3 style="font-family: 'D-DIN', sans-serif; font-weight: 700; color: #0F1C26; margin-top: 4px;">Request Product Quotation</h3>
                        <p style="font-size: 14px; color: #64748B; margin-top: 4px;">Submit your material specifications or project bill of quantities.</p>
                    </div>

                    <form method="post" action="sendemail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-size: 13px; font-weight: 600; color: #0F1C26;">Your Name *</label>
                                <input type="text" name="name" placeholder="Full name" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-size: 13px; font-weight: 600; color: #0F1C26;">Email Address *</label>
                                <input type="email" name="email" placeholder="name@company.com" value="<?= $safe($_GET['email'] ?? '') ?>" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-size: 13px; font-weight: 600; color: #0F1C26;">Phone Number</label>
                                <input type="text" name="phone" placeholder="+971 -- --- ----">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-size: 13px; font-weight: 600; color: #0F1C26;">Company Name</label>
                                <input type="text" name="company" placeholder="Organization / Entity">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label style="font-size: 13px; font-weight: 600; color: #0F1C26;">Product Required</label>
                                <div class="select-box">
                                    <select class="selectmenu" name="interest">
                                        <option value="Plain Aluminium Sheets & Plates">Plain Aluminium Sheets & Plates</option>
                                        <option value="Aluminium Chequered Sheets & Tread Plates">Aluminium Chequered Sheets & Tread Plates</option>
                                        <option value="Aluminium Stucco Embossed Sheets">Aluminium Stucco Embossed Sheets</option>
                                        <option value="Perforated Metal Sheets">Perforated Metal Sheets</option>
                                        <option value="Stainless Steel Sheets & Plates">Stainless Steel Sheets & Plates</option>
                                        <option value="Stainless Steel Profiles & Pipes">Stainless Steel Profiles & Pipes</option>
                                        <option value="Architectural Aluminium Profiles">Architectural Aluminium Profiles</option>
                                        <option value="Standard Aluminium Extrusions">Standard Aluminium Extrusions</option>
                                        <option value="GUIBAO Structural Glazing Silicone">GUIBAO Structural Glazing Silicone</option>
                                        <option value="GUIBAO Weatherproofing Sealants">GUIBAO Weatherproofing Sealants</option>
                                        <option value="TKK PU Foam – Top Foam">TKK PU Foam – Top Foam</option>
                                        <option value="Astral Bondtite Wood Adhesives">Astral Bondtite Wood Adhesives</option>
                                        <option value="SEALz Concealed Drop Seals">SEALz Concealed Drop Seals</option>
                                        <option value="SEALz Intumescent Fire Seals">SEALz Intumescent Fire Seals</option>
                                        <option value="Coating & Coil Cutting Services">Coating & Coil Cutting Services</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label style="font-size: 13px; font-weight: 600; color: #0F1C26;">Detailed Message / Material Specs *</label>
                                <textarea name="message" placeholder="Provide dimensions, alloy grade, quantity, or delivery requirements..." rows="4" required></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <button type="submit" class="theme-btn btn-one" style="width: 100%; padding: 14px 28px;">
                                    <span>Submit Request for Quotation</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->

<?php include __DIR__ . '/footer.php'; ?>
