<?php $PageRoot = $PageRoot ?? './'; $safe = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8'); ?>
</div><!-- End of .page_wrapper -->

<!-- main-footer -->
<footer class="main-footer">
    <div class="auto-container">
        <div class="footer-top">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-sm-12 logo-column">
                    <figure class="footer-logo">
                        <a href="<?= $safe($PageRoot) ?>index.php">
                            <img src="<?= $safe($PageRoot) ?>assets/images/logo-white-text.png" alt="MM GENERAL TRADING L.L.C" style="max-height: 68px; width: auto;">
                        </a>
                    </figure>
                    <!-- <div class="footer-company-tag">MM GENERAL TRADING L.L.C</div>
                    <div class="footer-arabic-title">ام ام للتجاره العامه ذ.م.م</div> -->
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                    <div class="subscribe-form">
                        <form action="<?= $safe($PageRoot) ?>contact.php" method="get">
                            <div class="form-group">
                                <label style="color:#CBD5E1; font-weight: 600; font-family: 'D-DIN', sans-serif;">Subscribe for Industrial Product Catalog & Enquiries</label>
                                <input type="email" name="email" placeholder="Enter your business email address..." required>
                                <button type="submit"><i class="flaticon-send"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-section">
            <div class="row clearfix">
                <!-- Contact & Location Widget -->
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Corporate Office</h3>
                        </div>
                        <div class="widget-content">
                            <div class="info-box">
                                <div class="single-item">
                                    <h4>Headquarters</h4>
                                    <p>P.O. Box : 26737, DIP - 2<br>Dubai, United Arab Emirates</p>
                                </div>
                                <div class="single-item">
                                    <h4>Direct Enquiries</h4>
                                    <p>
                                        Office: <a href="tel:+97148872112">+971 4 8872112</a> / <a href="tel:+97148878778">+971 4 8878778</a><br>
                                        Mobile: <a href="tel:+971525923184">+971 52 5923184</a> / <a href="tel:+971507998334">+971 50 7998334</a><br>
                                        Email: <a href="mailto:info@mmgeneraltrading.com">info@mmgeneraltrading.com</a><br>
                                        Web: <a href="https://www.mmgeneraltrading.com">www.mmgeneraltrading.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation Links -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Company</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="<?= $safe($PageRoot) ?>index.php">Home</a></li>
                                <li><a href="<?= $safe($PageRoot) ?>about.php">About Us</a></li>
                                <li><a href="<?= $safe($PageRoot) ?>products.php">Products</a></li>
                                <li><a href="<?= $safe($PageRoot) ?>projects.php">Projects</a></li>
                                <li><a href="<?= $safe($PageRoot) ?>contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Products & Materials -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Key Materials</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="<?= $safe($PageRoot) ?>plain-aluminium-sheets-plates.php">Aluminium Sheets & Plates</a></li>
                                <li><a href="<?= $safe($PageRoot) ?>aluminium-chequered-sheets.php">Chequered & Tread Plates</a></li>
                                <li><a href="<?= $safe($PageRoot) ?>aluminium-stucco-sheets.php">Stucco Embossed Sheets</a></li>
                                <li><a href="<?= $safe($PageRoot) ?>stainless-steel-sheets.php">Stainless Steel Sheets</a></li>
                                <li><a href="<?= $safe($PageRoot) ?>guibao-1092-structural-silicone.php">GUIBAO Structural Silicone</a></li>
                                <li><a href="<?= $safe($PageRoot) ?>tkk-pu-foam.php">TKK PU Foam</a></li>
                                <li><a href="<?= $safe($PageRoot) ?>sealz-drop-seals.php">SEALz Fire & Acoustic Seals</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Operational Excellence -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Quality Assurance</h3>
                        </div>
                        <div class="widget-content" style="color: #CBD5E1; font-size: 14px; line-height: 1.7;">
                            <p style="margin-bottom: 12px; color: #CBD5E1;">Precision industrial metal supply and fabrication partner delivering compliant, tested materials across the UAE and Gulf region.</p>
                            <div style="display: inline-flex; align-items: center; gap: 8px; padding: 6px 14px; border-radius: 9999px; background: rgba(214, 154, 45, 0.12); border: 1px solid rgba(214, 154, 45, 0.35); color: #D69A2D; font-weight: 700; font-size: 12px; text-transform: uppercase;">
                                <i class="fa-solid fa-award"></i> Certified Industrial Standards
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="bottom-inner">
                <div class="copyright">
                    <p>Copyright &copy; <?= date('Y') ?> <a href="<?= $safe($PageRoot) ?>index.php">MM GENERAL TRADING L.L.C</a>. All Rights Reserved.</p>
                </div>
                <ul class="footer-nav clearfix">
                    <li><a href="<?= $safe($PageRoot) ?>about.php">About</a></li>
                    <li><a href="<?= $safe($PageRoot) ?>products.php">Products</a></li>
                    <li><a href="<?= $safe($PageRoot) ?>contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->

<!-- scroll to top -->
<button class="scroll-top scroll-to-target" data-target="html" aria-label="Scroll to Top">
    <i class="flaticon-down-chevron"></i>
</button>

</div><!-- End .boxed_wrapper -->

<!-- scripts -->
<script src="<?= $safe($PageRoot) ?>assets/js/jquery.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/popper.min.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/bootstrap.min.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/owl.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/wow.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/validation.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/jquery.fancybox.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/appear.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/scrollbar.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/isotope.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/jquery.nice-select.min.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/jquery.lettering.min.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/jquery.circleType.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/text_animation.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/text_plugins.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/script.js"></script>
<script src="<?= $safe($PageRoot) ?>assets/js/mmtrading.js"></script>

</body>
</html>
