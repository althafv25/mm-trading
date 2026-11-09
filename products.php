<?php
$Page = 'products';
$PageTitle = 'Aluminium & Industrial Metal Products | MM Trading';
$PageDescription = 'Explore MM Trading product families: aluminium sheets and plates, tread plates, stucco sheets, perforated metal, marine-grade aluminium, extrusions and coils.';
$PageCanonical = 'https://mmtrading.example/products.php';
$PageOgImage = 'https://mmtrading.example/assets/images/service/service-1.jpg';
$PageKeywords = 'aluminium sheets UAE, aluminium plates, chequered plate, stucco embossed sheet, perforated metal, marine grade aluminium, aluminium extrusions, aluminium coils';
$PageSchema = json_encode(['@context' => 'https://schema.org', '@type' => 'CollectionPage', 'name' => 'MM Trading Aluminium and Industrial Metal Products', 'url' => $PageCanonical, 'description' => $PageDescription]);
include __DIR__ . '/header.php';

$productFamilies = [
    ['name' => 'Plain Aluminium Sheets & Plates', 'summary' => 'Flat aluminium products for fabrication, cladding, signage, equipment panels and general industrial work.', 'grades' => 'Commonly requested grades include 1100, 3003, 5005, 5052, 5083, 6061, 6082 and 7075.', 'image' => 'service/service-1.jpg', 'applications' => 'Fabrication · cladding · signage · general engineering'],
    ['name' => 'Aluminium Tread & Chequered Plates', 'summary' => 'Patterned aluminium plate selected where a durable, slip-resistant surface and practical appearance are required.', 'grades' => 'Available patterns and grades can include 1100, 3003, 3105 and 5754; confirm pattern, temper and thickness for each order.', 'image' => 'service/service-2.jpg', 'applications' => 'Walkways · platforms · vehicle bodies · ramps · workshops'],
    ['name' => 'Stucco Embossed Aluminium Sheets', 'summary' => 'Embossed aluminium sheet with a textured finish for protective, decorative and functional applications.', 'grades' => 'Commonly specified in 1100 and 3003 aluminium; finish, backing and dimensions are confirmed against the enquiry.', 'image' => 'service/service-3.jpg', 'applications' => 'Insulation cladding · ducting · cold rooms · interior panels'],
    ['name' => 'Perforated Sheet Metal', 'summary' => 'Perforated sheets for airflow, screening, acoustic, architectural and equipment protection requirements.', 'grades' => 'Aluminium, galvanised iron and stainless steel options can be considered with hole shape, pitch, open area and thickness.', 'image' => 'service/service-4.jpg', 'applications' => 'HVAC · screening · façades · machinery guards · acoustic panels'],
    ['name' => 'Marine-Grade Aluminium', 'summary' => 'Corrosion-conscious aluminium solutions for marine, coastal and demanding outdoor environments.', 'grades' => '5083 is a commonly requested marine-grade alloy. Confirm temper, certification and welding requirements before purchase.', 'image' => 'service/service-5.jpg', 'applications' => 'Marine fabrication · tanks · coastal structures · heavy-duty assemblies'],
    ['name' => 'Aluminium Extrusions & Profiles', 'summary' => 'Extruded sections for framing, trims, supports, architectural details and engineered assemblies.', 'grades' => '6063-T6 and 6082-T6 are common specification references; profile shape, finish and cut length are project-specific.', 'image' => 'service/service-6.jpg', 'applications' => 'Frames · supports · façades · partitions · equipment assemblies'],
    ['name' => 'Aluminium Coils', 'summary' => 'Coil supply for continuous processing, cut-to-length work and high-volume sheet conversion.', 'grades' => 'Plain and stucco coil options may be requested, including moisture-barrier requirements where appropriate.', 'image' => 'service/service-7.jpg', 'applications' => 'Cut-to-length · roofing · insulation · ducting · fabrication lines'],
];
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
                    <h1>Industries Served</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Industries</li>
                        <li>Classic</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- industry-style-three -->
        <section class="industry-style-three industries-page-one">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/industry-3.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="light-icon"><i class="flaticon-crane"></i></div>
                                    <div class="link-box"><a href="industrie-details.html"><i class="flaticon-diagonal-arrow"></i></a></div>
                                    <h3><a href="industrie-details.html">Construction <br />Sector</a></h3>
                                    <p>Lookout flogging bilge rather main shet bilge water nipper pounders skysail...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/industry-4.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="light-icon"><i class="flaticon-tanks"></i></div>
                                    <div class="link-box"><a href="industrie-details.html"><i class="flaticon-diagonal-arrow"></i></a></div>
                                    <h3><a href="industrie-details.html">Oil & Gas <br />Energy</a></h3>
                                    <p>Matters to this principle of se- lections he rejects pleasure to secure other greater...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/industry-5.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="light-icon"><i class="flaticon-vaccine"></i></div>
                                    <div class="link-box"><a href="industrie-details.html"><i class="flaticon-diagonal-arrow"></i></a></div>
                                    <h3><a href="industrie-details.html">Heathcare & Pharma</a></h3>
                                    <p>Blinded desire that they cannot foresee the pain & trouble that are bound to ensue...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/industry-6.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="light-icon"><i class="flaticon-radiator"></i></div>
                                    <div class="link-box"><a href="industrie-details.html"><i class="flaticon-diagonal-arrow"></i></a></div>
                                    <h3><a href="industrie-details.html">Automotive <br />Chains</a></h3>
                                    <p>Lookout flogging bilge rather main shet bilge water nipper pounders skysail...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/industry-7.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="light-icon"><i class="flaticon-windmill"></i></div>
                                    <div class="link-box"><a href="industrie-details.html"><i class="flaticon-diagonal-arrow"></i></a></div>
                                    <h3><a href="industrie-details.html">Renewable <br />Energy</a></h3>
                                    <p>Matters to this principle of se- lections he rejects pleasure to secure other greater...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/industry-8.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="light-icon"><i class="flaticon-robotic-arm"></i></div>
                                    <div class="link-box"><a href="industrie-details.html"><i class="flaticon-diagonal-arrow"></i></a></div>
                                    <h3><a href="industrie-details.html">Agriculture & Food</a></h3>
                                    <p>Blinded desire that they cannot foresee the pain & trouble that are bound to ensue...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- industry-style-three end -->
<?php include __DIR__ . '/footer.php'; ?>