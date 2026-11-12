<?php
$Page = 'projects';
$PageTitle = 'Projects & Fabrication Portfolio | MM General Trading L.L.C';
$PageDescription = 'View MM General Trading L.L.C project portfolio across infrastructure, marine, architectural cladding, and precision industrial metal fabrication in Dubai, UAE.';
$PageCanonical = 'https://www.mmgeneraltrading.com/projects.php';
$PageOgImage = 'https://www.mmgeneraltrading.com/assets/images/project/project-1.jpg';
$PageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'CollectionPage',
    'name' => 'MM General Trading L.L.C Projects and Portfolio',
    'url' => $PageCanonical,
    'description' => $PageDescription
]);
include __DIR__ . '/header.php';

$categories = [
    'All' => 'all',
    'Architectural' => 'architectural',
    'Marine & Offshore' => 'marine',
    'Industrial & HVAC' => 'industrial',
    'Infrastructure' => 'infrastructure'
];

$projects = [
    [
        'title' => 'Precision Architectural Cladding Panels',
        'category' => 'architectural',
        'categoryLabel' => 'Architectural',
        'image' => 'project/project-1.jpg',
        'desc' => 'PVDF coated plain aluminium sheets custom-cut and CNC routed for high-rise building envelope.'
    ],
    [
        'title' => 'Marine-Grade 5083 Vessel Structures',
        'category' => 'marine',
        'categoryLabel' => 'Marine & Offshore',
        'image' => 'project/project-2.jpg',
        'desc' => 'Certified 5083-H116 corrosion-resistant aluminium supply for commercial shipyard construction.'
    ],
    [
        'title' => 'Industrial Tread Walkway & Platform Decking',
        'category' => 'infrastructure',
        'categoryLabel' => 'Infrastructure',
        'image' => 'project/project-3.jpg',
        'desc' => '5-bar non-slip chequered plate flooring fabricated for petrochemical processing catwalks.'
    ],
    [
        'title' => 'Thermal Insulation Stucco Ducting System',
        'category' => 'industrial',
        'categoryLabel' => 'Industrial & HVAC',
        'image' => 'project/project-4.jpg',
        'desc' => 'Moisture-barrier backed stucco embossed coils for large-scale district cooling plant lines.'
    ],
    [
        'title' => 'Perforated Acoustic Screening Façade',
        'category' => 'architectural',
        'categoryLabel' => 'Architectural',
        'image' => 'project/project-5.jpg',
        'desc' => 'Custom slotted perforation panels engineered for modern transport terminal sound reduction.'
    ],
    [
        'title' => 'Structural Extrusion Modular Frame Arrays',
        'category' => 'infrastructure',
        'categoryLabel' => 'Infrastructure',
        'image' => 'project/project-6.jpg',
        'desc' => 'Heavy-duty 6082-T6 alloy architectural profiles supplied for airport expansion concourses.'
    ],
    [
        'title' => 'Offshore Gangway & Landing Components',
        'category' => 'marine',
        'categoryLabel' => 'Marine & Offshore',
        'image' => 'project/project-7.jpg',
        'desc' => 'High-strength marine plate and custom extrusion assembly for offshore platform crew access.'
    ],
    [
        'title' => 'Heavy Commercial Vehicle Tread Flooring',
        'category' => 'industrial',
        'categoryLabel' => 'Industrial & HVAC',
        'image' => 'project/project-8.jpg',
        'desc' => 'Durable slip-resistant tread sheets precision sheared for regional transport fleet manufacturing.'
    ],
    [
        'title' => 'Refinery Tank Cryogenic Cladding',
        'category' => 'industrial',
        'categoryLabel' => 'Industrial & HVAC',
        'image' => 'project/project-9.jpg',
        'desc' => 'Stucco embossed sheets with polysurlyn moisture barrier for LNG pipeline and storage tank protection.'
    ],
    [
        'title' => 'Custom CNC Formed Sub-Assemblies',
        'category' => 'architectural',
        'categoryLabel' => 'Architectural',
        'image' => 'project/project-10.jpg',
        'desc' => 'Tight-tolerance sheared and bent aluminium brackets and gusset components for façade anchors.'
    ],
    [
        'title' => 'Solar Substation Mounting Arrays',
        'category' => 'infrastructure',
        'categoryLabel' => 'Infrastructure',
        'image' => 'project/project-11.jpg',
        'desc' => 'Anodised structural aluminium extrusion frames deployed in utility-scale renewable installations.'
    ],
    [
        'title' => 'High-Speed Automated Slit Coil Processing',
        'category' => 'industrial',
        'categoryLabel' => 'Industrial & HVAC',
        'image' => 'project/project-12.jpg',
        'desc' => 'Custom-width slit coils delivered just-in-time for automated roll forming continuous production.'
    ]
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
            <h1>Featured Projects & Case Studies</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>Projects & Portfolio</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- Projects Section -->
<section class="project-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred" style="margin-bottom: 40px;">
            <span class="sub-title">Proven Track Record</span>
            <h2>Industrial & Architectural Deliveries</h2>
            <p style="max-width: 680px; margin: 10px auto 0 auto;">Representative supply and metal processing contracts executed for leading EPC contractors, fabricators, and infrastructure entities in Dubai and the GCC.</p>
        </div>

        <!-- Filter Bar -->
        <div class="filter-bar" style="margin-bottom: 45px;">
            <?php foreach ($categories as $label => $slug): ?>
                <button type="button" class="filter-button <?= $slug === 'all' ? 'is-active' : '' ?>" data-filter="<?= $slug ?>">
                    <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Projects Grid -->
        <div class="row clearfix">
            <?php foreach ($projects as $item): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 project-column" data-category="<?= htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8') ?>" style="margin-bottom: 30px;">
                    <div class="project-block-one" style="height: 100%;">
                        <div class="inner-box" style="height: 100%; display: flex; flex-direction: column; background: #ffffff; border-radius: 12px; overflow: hidden; border: 1px solid #E2E8F0; box-shadow: 0 4px 16px rgba(15,28,38,0.05);">
                            <figure class="image-box" style="margin: 0; overflow: hidden; height: 230px; position: relative;">
                                <img src="assets/images/<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
                                <span style="position: absolute; top: 14px; left: 14px; background: rgba(15, 28, 38, 0.85); backdrop-filter: blur(4px); color: #D69A2D; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; padding: 4px 12px; border-radius: 9999px; border: 1px solid rgba(214,154,45,0.3);">
                                    <?= htmlspecialchars($item['categoryLabel'], ENT_QUOTES, 'UTF-8') ?>
                                </span>
                            </figure>
                            <div class="content-box" style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column;">
                                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 10px; line-height: 1.35;">
                                    <a href="contact.php?interest=<?= urlencode($item['title']) ?>" style="color: #0F1C26;"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></a>
                                </h3>
                                <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 18px; flex-grow: 1;">
                                    <?= htmlspecialchars($item['desc'], ENT_QUOTES, 'UTF-8') ?>
                                </p>
                                <div style="margin-top: auto; padding-top: 14px; border-top: 1px solid #F1F5F9; display: flex; justify-content: space-between; align-items: center;">
                                    <span style="font-size: 12px; color: #94A3B8; font-weight: 600;">Dubai, UAE</span>
                                    <a href="contact.php?interest=<?= urlencode($item['title']) ?>" style="color: #D69A2D; font-weight: 700; font-size: 13px; display: inline-flex; align-items: center; gap: 4px;">
                                        Enquire Similar <i class="fa-solid fa-arrow-right" style="font-size: 11px;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Call to Action Banner -->
<section class="cta-section sec-pad" style="background: linear-gradient(135deg, #0F1C26 0%, #172C3D 60%, #354D5E 100%); color: #ffffff;">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 text-column">
                <span style="color: #D69A2D; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 0.1em; display: inline-block; margin-bottom: 8px;">Direct Mill Distribution</span>
                <h2 style="color: #ffffff; font-size: 34px; font-weight: 700; line-height: 1.25; margin-bottom: 10px;">Have an Upcoming Industrial or Infrastructure Project?</h2>
                <p style="color: #CBD5E1; font-size: 16px; margin: 0;">Our sales engineers in DIP - 2 Dubai can review your bill of quantities and provide certified material quotations within 24 hours.</p>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 btn-column text-lg-right" style="margin-top: 20px;">
                <a href="contact.php" class="theme-btn btn-one" style="padding: 16px 36px; font-size: 15px;">
                    <span>Request Project Quotation</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
