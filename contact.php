<?php
$Page='contact'; $PageTitle='Contact MM Trading | Metal Fabrication Enquiries'; $PageDescription='Contact MM Trading about metal fabrication, industrial manufacturing, sheet metal bending, cutting, grinding and welding requirements.'; $PageCanonical='https://mmtrading.example/contact.php'; $PageOgImage='https://mmtrading.example/assets/images/resource/contact-1.jpg'; $PageSchema=json_encode(['@context'=>'https://schema.org','@type'=>'ContactPage','name'=>'Contact MM Trading','url'=>$PageCanonical]); include __DIR__.'/header.php';
$status=$_GET['status']??'';
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
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-info-section -->
        <section class="contact-info-section centred">
            <div class="auto-container">
                <div class="title-box">
                    <div class="icon-box"><i class="flaticon-headphones"></i></div>
                    <h2>Need Support? Talk with Team</h2>
                    <h3>Toll Free: <a href="tel:6132456789">(+61) 324 56 789</a></h3>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="info-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-pin"></i></div>
                                    <h3>Headquarters</h3>
                                    <p>54 Berrick 2nd Street Boston, MA <br />02115,United States.</p>
                                    <div class="link-box">
                                        <a href="https://www.google.com/maps" target="_blank"><span>Find On Map</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="info-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-mail"></i></div>
                                    <h3>Send Mail</h3>
                                    <p><span>Supplier :</span> <a href="mailto:buss@example.com">buss@example.com</a><br /><span>Customer :</span> <a href="mailto:support@example.com">support@example.com</a></p>
                                    <div class="link-box">
                                        <a href="contact.html"><span>Contact Form</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="info-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-clock"></i></div>
                                    <h3>Off. Hours</h3>
                                    <p>Mon - Satday : 08.00 am to 08.45 pm <br />Sunday : Closed. </p>
                                    <div class="link-box">
                                        <a href="contact.html"><span>Make Appoitnment</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section end -->


        <!-- contact-section -->
        <section class="contact-section sec-pad border-top border-bottom bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="sub-title">Get In Touch</span>
                    <h2>Here to Help Our Customers</h2>
                </div>
            </div>
            <div class="tabs-box">
                <div class="tab-btn-box">
                    <div class="auto-container">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">Boston</li>
                            <li class="tab-btn" data-tab="#tab-2">California</li>
                            <li class="tab-btn" data-tab="#tab-3">Portland</li>
                            <li class="tab-btn" data-tab="#tab-4">New Orleans</li>
                        </ul>
                    </div>
                </div>
                <div class="outer-container">
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 map-column">
                                    <div class="map-inner">
                                        <div 
                                            class="google-map" 
                                            id="contact-google-map" 
                                            data-map-lat="40.712776" 
                                            data-map-lng="-74.005974" 
                                            data-icon-path="assets/images/icons/map-marker.png"  
                                            data-map-title="Brooklyn, New York, United Kingdom" 
                                            data-map-zoom="12" 
                                            data-markers='{
                                                "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                            }'>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                    <div class="content-inner">
                                        <div class="image-layer" style="background-image: url(assets/images/resource/contact-1.jpg);"></div>
                                        <div class="content-box">
                                            <div class="upper-box">
                                                <h6>Location</h6>
                                                <p>54 Berrick 2nd Street <br />Boston, MA02115, United States.</p>
                                            </div>
                                            <div class="single-item">
                                                <h6>Contact Info</h6>
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>Phone</p>
                                                            <p><a href="tel:8004567890102">+800 45 6789 01 & 02</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>E-mail</p>
                                                            <p><a href="mailto:enquiry@example.com">enquiry@example.com</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <h6>Office Hours</h6>
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>Mon to Fri</p>
                                                            <p>07.00 am to 10.00pm</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>Sat & Sun</p>
                                                            <p>08.00 am to 08.00pm</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-box">
                                                <a href="contact.html" class="theme-btn btn-one"><span>Send Message</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 map-column">
                                    <div class="map-inner">
                                        <div 
                                            class="google-map" 
                                            id="contact-google-map-2" 
                                            data-map-lat="40.712776" 
                                            data-map-lng="-74.005974" 
                                            data-icon-path="assets/images/icons/map-marker.png"  
                                            data-map-title="Brooklyn, New York, United Kingdom" 
                                            data-map-zoom="12" 
                                            data-markers='{
                                                "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                            }'>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                    <div class="content-inner">
                                        <div class="image-layer" style="background-image: url(assets/images/resource/contact-1.jpg);"></div>
                                        <div class="content-box">
                                            <div class="upper-box">
                                                <h6>Location</h6>
                                                <p>54 Berrick 2nd Street <br />Boston, MA02115, United States.</p>
                                            </div>
                                            <div class="single-item">
                                                <h6>Contact Info</h6>
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>Phone</p>
                                                            <p><a href="tel:8004567890102">+800 45 6789 01 & 02</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>E-mail</p>
                                                            <p><a href="mailto:enquiry@example.com">enquiry@example.com</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <h6>Office Hours</h6>
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>Mon to Fri</p>
                                                            <p>07.00 am to 10.00pm</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>Sat & Sun</p>
                                                            <p>08.00 am to 08.00pm</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-box">
                                                <a href="contact.html" class="theme-btn btn-one"><span>Send Message</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 map-column">
                                    <div class="map-inner">
                                        <div 
                                            class="google-map" 
                                            id="contact-google-map-3" 
                                            data-map-lat="40.712776" 
                                            data-map-lng="-74.005974" 
                                            data-icon-path="assets/images/icons/map-marker.png"  
                                            data-map-title="Brooklyn, New York, United Kingdom" 
                                            data-map-zoom="12" 
                                            data-markers='{
                                                "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                            }'>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                    <div class="content-inner">
                                        <div class="image-layer" style="background-image: url(assets/images/resource/contact-1.jpg);"></div>
                                        <div class="content-box">
                                            <div class="upper-box">
                                                <h6>Location</h6>
                                                <p>54 Berrick 2nd Street <br />Boston, MA02115, United States.</p>
                                            </div>
                                            <div class="single-item">
                                                <h6>Contact Info</h6>
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>Phone</p>
                                                            <p><a href="tel:8004567890102">+800 45 6789 01 & 02</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>E-mail</p>
                                                            <p><a href="mailto:enquiry@example.com">enquiry@example.com</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <h6>Office Hours</h6>
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>Mon to Fri</p>
                                                            <p>07.00 am to 10.00pm</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>Sat & Sun</p>
                                                            <p>08.00 am to 08.00pm</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-box">
                                                <a href="contact.html" class="theme-btn btn-one"><span>Send Message</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-4">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 map-column">
                                    <div class="map-inner">
                                        <div 
                                            class="google-map" 
                                            id="contact-google-map-4" 
                                            data-map-lat="40.712776" 
                                            data-map-lng="-74.005974" 
                                            data-icon-path="assets/images/icons/map-marker.png"  
                                            data-map-title="Brooklyn, New York, United Kingdom" 
                                            data-map-zoom="12" 
                                            data-markers='{
                                                "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                            }'>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                    <div class="content-inner">
                                        <div class="image-layer" style="background-image: url(assets/images/resource/contact-1.jpg);"></div>
                                        <div class="content-box">
                                            <div class="upper-box">
                                                <h6>Location</h6>
                                                <p>54 Berrick 2nd Street <br />Boston, MA02115, United States.</p>
                                            </div>
                                            <div class="single-item">
                                                <h6>Contact Info</h6>
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>Phone</p>
                                                            <p><a href="tel:8004567890102">+800 45 6789 01 & 02</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>E-mail</p>
                                                            <p><a href="mailto:enquiry@example.com">enquiry@example.com</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <h6>Office Hours</h6>
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>Mon to Fri</p>
                                                            <p>07.00 am to 10.00pm</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                                        <div class="text">
                                                            <p>Sat & Sun</p>
                                                            <p>08.00 am to 08.00pm</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-box">
                                                <a href="contact.html" class="theme-btn btn-one"><span>Send Message</span></a>
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
        <!-- contact-section end -->


        <!-- contact-style-two -->
        <section class="contact-style-two">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-13.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">Send a Message</span>
                                <h2>Feel Free to Say Hello or Send Your Questions</h2>
                                <p>Complete the enquiry form & we will be in touch as soon as possible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <form method="post" action="pricing-2.html">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <div class="select-box">
                                        <select class="selectmenu">
                                            <option>Massachusetts</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Houston</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-two"><span>Send Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->
<?php include __DIR__.'/footer.php'; ?>