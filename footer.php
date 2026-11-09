<?php $PageRoot = $PageRoot ?? './'; $safe = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8'); ?>
 
</div><!-- End of .page_wrapper -->
<!-- main-footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <div class="footer-top">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 logo-column">
                            <figure class="footer-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""></a></figure>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12 form-column">
                            <div class="subscribe-form">
                                <form action="contact.html" method="post">
                                    <div class="form-group">
                                        <label>Subscribe Us</label>
                                        <input type="email" name="email" placeholder="Enter your email address here..." required>
                                        <button type="submit"><i class="flaticon-send"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-content">
                                    <div class="select-box">
                                        <div class="flag"><img src="assets/images/icons/flag-1.png" alt=""></div>
                                        <select class="selectmenu">
                                            <option>Massachusetts</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Houston</option>
                                        </select>
                                    </div>
                                    <div class="info-box">
                                        <div class="single-item">
                                            <h3>Enquiry</h3>
                                            <p><a href="tel:8004567890102">+800 45 6789 01 & 02</a><br /><a href="mailto;businessenquiry@example.com">businessenquiry@example.com</a></p>
                                        </div>
                                        <div class="single-item">
                                            <h3>Reach</h3>
                                            <p>54 Berrick 2nd Street Boston, MA <br />02115, United States.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Company</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Overview</a></li>
                                        <li><a href="index.html">CEO Greeting</a></li>
                                        <li><a href="index.html">Certifications</a></li>
                                        <li><a href="index.html">History</a></li>
                                        <li><a href="index.html">Management</a></li>
                                        <li><a href="index.html">Organization</a></li>
                                        <li><a href="index.html">Vision</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Useful Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Industries</a></li>
                                        <li><a href="index.html">Features</a></li>
                                        <li><a href="index.html">Process</a></li>
                                        <li><a href="index.html">Feedback</a></li>
                                        <li><a href="index.html">News & Updates</a></li>
                                        <li><a href="index.html">Get In Touch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>Popular Post</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-1.jpg" alt=""></a></figure>
                                        <h6>Industries</h6>
                                        <h4><a href="blog-details.html">Best for any Indutrial and Business Solution.</a></h4>
                                        <span class="post-date"><i class="fa-regular fa-calendar"></i>06.09.2022</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
                                        <h6>Technology</h6>
                                        <h4><a href="blog-details.html">Won Best Factory Award of the Year 2016 & 17.</a></h4>
                                        <span class="post-date"><i class="fa-regular fa-calendar"></i>05.09.2022</span>
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
                        <div class="copyright"><p>Copyright &copy; 2023 <a href="index.html">Machino.</a> All Rights Reserved.</p></div>
                        <ul class="footer-nav clearfix">
                            <li><a href="index.html">Terms & Conditions</a></li>
                            <li><a href="index.html">Privacy Policy</a></li>
                            <li><a href="index.html">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->
        


        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="flaticon-down-chevron"></i>
        </button>
        
    </div>


    <!-- jequery plugins -->
     
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

    <!-- main-js -->
    <script src="<?= $safe($PageRoot) ?>assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
