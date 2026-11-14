<?php
$Page = 'blog';
$PageTitle = 'Industrial Materials Blog & Technical Guides | MM General Trading L.L.C';
$PageDescription = 'Technical guides from MM General Trading L.L.C on aluminium plate, structural silicone, fire and smoke door seals, wood adhesives, and metal coating and coil processing in Dubai, UAE.';
$PageCanonical = 'https://www.mmgeneraltrading.com/blog.php';
$PageOgImage = 'https://www.mmgeneraltrading.com/assets/images/products/plain-aluminium-sheets-plates.png';
$PageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Blog',
    'name' => 'MM General Trading L.L.C Blog',
    'url' => $PageCanonical,
    'description' => $PageDescription,
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'MM General Trading L.L.C'
    ]
]);
include __DIR__ . '/header.php';

$BLOG_POSTS = include __DIR__ . '/blog-data.php';

$filters = [
    'All' => 'all',
    'Aluminium & Metals' => 'metals',
    'Sealants & Chemicals' => 'chemicals',
    'Adhesives' => 'adhesives',
    'Fire & Acoustic' => 'fire-acoustic',
    'Processing Services' => 'services'
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
            <h1>Blog & Technical Guides</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- Blog Section -->
<section class="news-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred" style="margin-bottom: 40px;">
            <span class="sub-title">News & Updates</span>
            <h2>Material Guides & Specification Tips</h2>
            <p style="max-width: 680px; margin: 10px auto 0 auto;">Practical notes on choosing the right aluminium, sealant, fire seal, adhesive, and finish for your project. Each guide links to the matching product or service page.</p>
        </div>

        <!-- Filter Bar -->
        <div class="filter-bar" style="margin-bottom: 45px;">
            <?php foreach ($filters as $label => $slug): ?>
                <button type="button" class="filter-button <?= $slug === 'all' ? 'is-active' : '' ?>" data-filter="<?= $slug ?>">
                    <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Posts Grid -->
        <div class="row clearfix">
            <?php foreach ($BLOG_POSTS as $post): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block" data-category="<?= htmlspecialchars($post['category'], ENT_QUOTES, 'UTF-8') ?>" style="margin-bottom: 30px;">
                    <div class="news-block-one" style="height: 100%;">
                        <div class="inner-box" style="height: 100%; display: flex; flex-direction: column; background: #ffffff; border-radius: 12px; overflow: hidden; border: 1px solid #E2E8F0; box-shadow: 0 4px 16px rgba(15,28,38,0.05);">
                            <div class="image-box" style="position: relative; height: 230px; overflow: hidden; background: #F1F5F9;">
                                <figure class="image" style="margin: 0; height: 100%;"><img src="assets/images/<?= htmlspecialchars($post['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8') ?>" style="width: 100%; height: 100%; object-fit: cover;"></figure>
                                <div class="category" style="position: absolute; top: 14px; left: 14px;">
                                    <span style="background: rgba(15, 28, 38, 0.85); color: #D69A2D; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; padding: 4px 12px; border-radius: 9999px; border: 1px solid rgba(214,154,45,0.3);"><?= htmlspecialchars($post['categoryLabel'], ENT_QUOTES, 'UTF-8') ?></span>
                                </div>
                            </div>
                            <div class="lower-content" style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column;">
                                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 10px; line-height: 1.35;">
                                    <a href="<?= htmlspecialchars($post['link'], ENT_QUOTES, 'UTF-8') ?>" style="color: #0F1C26;"><?= htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8') ?></a>
                                </h3>
                                <p style="font-size: 14px; line-height: 1.6; color: #64748B; margin-bottom: 18px; flex-grow: 1;"><?= htmlspecialchars($post['excerpt'], ENT_QUOTES, 'UTF-8') ?></p>
                                <div style="margin-top: auto; padding-top: 14px; border-top: 1px solid #F1F5F9;">
                                    <a href="<?= htmlspecialchars($post['link'], ENT_QUOTES, 'UTF-8') ?>" style="color: #D69A2D; font-weight: 700; font-size: 13px; display: inline-flex; align-items: center; gap: 4px;">
                                        Read more <i class="fa-solid fa-arrow-right" style="font-size: 11px;"></i>
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
                <h2 style="color: #ffffff; font-size: 34px; font-weight: 700; line-height: 1.25; margin-bottom: 10px;">Need Help Specifying Materials for Your Project?</h2>
                <p style="color: #CBD5E1; font-size: 16px; margin: 0;">Send us your drawings or bill of quantities. Our sales engineers in DIP - 2 Dubai will recommend certified materials and send a quotation.</p>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 btn-column text-lg-right" style="margin-top: 20px;">
                <a href="contact.php" class="theme-btn btn-one" style="padding: 16px 36px; font-size: 15px;">
                    <span>Request a Quote</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
