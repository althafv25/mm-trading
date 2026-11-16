<?php
$PRODUCTS_DB = include __DIR__ . '/services-data.php';

$currentSlug = $slug ?? ($_GET['product'] ?? ($_GET['id'] ?? ''));

$Page = 'services';
$PageRoot = $PageRoot ?? (
    (isset($_SERVER['SCRIPT_FILENAME']) && in_array(basename(dirname($_SERVER['SCRIPT_FILENAME'])), ['products', 'services'], true))
    ? '../' : './'
);

if (!isset($PRODUCTS_DB[$currentSlug])) {
    http_response_code(404);
    $PageTitle = 'Service Not Found | MM General Trading L.L.C Dubai';
    $PageDescription = 'The requested service page could not be found.';
    $PageCanonical = 'https://www.mmgeneraltrading.com/services/coating-processing-services.php';
    include __DIR__ . '/header.php';
    ?>
    <section class="page-title centred">
        <div class="auto-container">
            <div class="content-box">
                <h1>Service Not Found</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?= htmlspecialchars($PageRoot, ENT_QUOTES, 'UTF-8') ?>index.php">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sec-pad centred">
        <div class="auto-container">
            <p>The service you asked for is not available. Browse our services below.</p>
            <a href="<?= htmlspecialchars($PageRoot, ENT_QUOTES, 'UTF-8') ?>services/coating-processing-services.php" class="theme-btn btn-one"><span>View Our Services</span></a>
        </div>
    </section>
    <?php
    include __DIR__ . '/footer.php';
    exit;
}

$product = $PRODUCTS_DB[$currentSlug];

$PageTitle = $product['title'] . ' | MM General Trading L.L.C Dubai';
$PageDescription = $product['summary'];
$folder = ($product['division'] === 'services') ? 'services/' : 'products/';
$PageCanonical = 'https://www.mmgeneraltrading.com/' . $folder . $product['slug'] . '.php';
$PageOgImage = 'https://www.mmgeneraltrading.com/' . $product['hero_image'];
$PageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Product',
    'name' => $product['title'],
    'image' => $PageOgImage,
    'description' => $product['summary'],
    'brand' => [
        '@type' => 'Brand',
        'name' => $product['brand']
    ],
    'offers' => [
        '@type' => 'AggregateOffer',
        'priceCurrency' => 'AED',
        'availability' => 'https://schema.org/InStock',
        'areaServed' => ['United Arab Emirates', 'GCC']
    ]
]);

include __DIR__ . '/header.php';

// Get other products in the same division for sidebar and related section
$relatedProducts = array_filter($PRODUCTS_DB, fn($p) => $p['division'] === $product['division'] && $p['slug'] !== $currentSlug);
$allProductsInDivision = array_filter($PRODUCTS_DB, fn($p) => $p['division'] === $product['division']);
?>

<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(<?= $safe($PageRoot) ?>assets/images/banner/banner-inner.jpg);"></div>
    <div class="line-box">
        <div class="line-1"></div>
        <div class="line-2"></div>
    </div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $safe($PageRoot) ?>index.php">Home</a></li>
                <li><a href="<?= $safe($PageRoot) ?>products.php">Products</a></li>
                <li><?= htmlspecialchars($product['category'], ENT_QUOTES, 'UTF-8') ?></li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->
<!-- product-details section -->
<section class="service-details sec-pad bg-color-1">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Main Content Column (8 cols) -->
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content" style="background: #ffffff; padding: 40px 35px; border-radius: 14px; border: 1px solid #E2E8F0; box-shadow: 0 4px 20px rgba(15,28,38,0.05);">
                    
                    <!-- Header Info Badge & Title -->
                    <div style="margin-bottom: 25px;">
                        <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 10px; margin-bottom: 12px;">
                            <span style="background: rgba(214,154,45,0.12); border: 1px solid rgba(214,154,45,0.35); color: #D69A2D; font-weight: 700; font-size: 12px; text-transform: uppercase; letter-spacing: 0.06em; padding: 4px 14px; border-radius: 9999px;">
                                <?= htmlspecialchars($product['brand'], ENT_QUOTES, 'UTF-8') ?>
                            </span>
                            <?php if (!empty($product['badge'])): ?>
                                <span style="background: rgba(80,109,133,0.12); border: 1px solid rgba(80,109,133,0.3); color: #506D85; font-weight: 700; font-size: 12px; text-transform: uppercase; letter-spacing: 0.06em; padding: 4px 14px; border-radius: 9999px;">
                                    <?= htmlspecialchars($product['badge'], ENT_QUOTES, 'UTF-8') ?>
                                </span>
                            <?php endif; ?>
                            <span style="color: #64748B; font-size: 13px; margin-left: auto;">
                                <i class="fa-solid fa-book-open" style="color: #D69A2D; margin-right: 4px;"></i> Catalogue Page <?= (int)$product['catalogue_page'] ?>
                            </span>
                        </div>
                        <h2 style="font-size: 32px; font-weight: 700; color: #0F1C26; line-height: 1.25; margin-bottom: 8px;">
                            <?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?>
                        </h2>
                        <div style="color: #D69A2D; font-weight: 700; font-size: 14px; letter-spacing: 0.05em; text-transform: uppercase;">
                            MM GENERAL TRADING L.L.C · DUBAI DIP - 2
                        </div>
                    </div>

                    <!-- Main Product Hero Image Card -->
                    <div class="image-box" style="margin-bottom: 35px; border-radius: 12px; overflow: hidden; border: 1px solid #E2E8F0; background: #F8FAFC; text-align: center; position: relative;">
                        <img src="<?= $safe($PageRoot) . htmlspecialchars($product['hero_image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?>" style="max-height: 440px; width: auto; max-width: 100%; object-fit: contain; margin: 0 auto; display: block; padding: 20px;">
                    </div>

                    <!-- Product Summary & Full Description -->
                    <div class="text" style="margin-bottom: 35px;">
                        <h4 style="font-size: 20px; font-weight: 700; color: #0F1C26; margin-bottom: 12px; border-left: 3px solid #D69A2D; padding-left: 12px;">
                            Product Overview
                        </h4>
                        <p style="font-size: 15.5px; line-height: 1.7; color: #334155; margin-bottom: 14px;">
                            <?= htmlspecialchars($product['full_description'], ENT_QUOTES, 'UTF-8') ?>
                        </p>
                    </div>

                    <!-- Key Features & Advantages -->
                    <div style="margin-bottom: 35px;">
                        <h4 style="font-size: 20px; font-weight: 700; color: #0F1C26; margin-bottom: 16px; border-left: 3px solid #D69A2D; padding-left: 12px;">
                            Key Features & Technical Advantages
                        </h4>
                        <div class="row clearfix">
                            <?php foreach ($product['features'] as $feat): ?>
                                <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 10px;">
                                    <div style="display: flex; align-items: flex-start; gap: 12px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; padding: 12px 16px;">
                                        <i class="fa-solid fa-circle-check" style="color: #D69A2D; font-size: 16px; margin-top: 3px; flex-shrink: 0;"></i>
                                        <span style="font-size: 14.5px; color: #1E293B; font-weight: 600; line-height: 1.5;"><?= htmlspecialchars($feat, ENT_QUOTES, 'UTF-8') ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Technical Specifications Table -->
                    <div style="margin-bottom: 35px;">
                        <h4 style="font-size: 20px; font-weight: 700; color: #0F1C26; margin-bottom: 16px; border-left: 3px solid #D69A2D; padding-left: 12px;">
                            Technical Specifications
                        </h4>
                        <div class="table-responsive" style="border-radius: 8px; overflow: hidden; border: 1px solid #E2E8F0;">
                            <table class="table table-striped" style="margin: 0; font-size: 14.5px;">
                                <tbody>
                                    <?php foreach ($product['specs'] as $specKey => $specVal): ?>
                                        <tr>
                                            <th style="width: 32%; background: #0F1C26; color: #ffffff; font-weight: 700; padding: 12px 18px; border-bottom: 1px solid #1E293B;">
                                                <?= htmlspecialchars($specKey, ENT_QUOTES, 'UTF-8') ?>
                                            </th>
                                            <td style="background: #ffffff; color: #1E293B; font-weight: 500; padding: 12px 18px; border-bottom: 1px solid #E2E8F0;">
                                                <?= htmlspecialchars($specVal, ENT_QUOTES, 'UTF-8') ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Applications -->
                    <div style="margin-bottom: 35px;">
                        <h4 style="font-size: 20px; font-weight: 700; color: #0F1C26; margin-bottom: 16px; border-left: 3px solid #D69A2D; padding-left: 12px;">
                            Recommended Applications
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 10px;">
                            <?php foreach ($product['applications'] as $app): ?>
                                <li style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; padding: 10px 14px; font-size: 13.5px; color: #334155; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa-solid fa-arrow-right" style="color: #D69A2D; font-size: 12px;"></i>
                                    <span><?= htmlspecialchars($app, ENT_QUOTES, 'UTF-8') ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <?php if (!empty($product['catalogue_page_img'])): ?>
                    <!-- Catalogue Reference Box -->
                    <div style="background: linear-gradient(135deg, #0F1C26 0%, #172C3D 100%); border-radius: 12px; padding: 24px; color: #ffffff; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px; margin-bottom: 30px;">
                        <div>
                            <span style="color: #D69A2D; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 4px;">Verified Catalogue Listing</span>
                            <h5 style="color: #ffffff; font-size: 18px; font-weight: 700; margin: 0;">Featured on Page <?= (int)$product['catalogue_page'] ?> of MM Trading 2026 Catalogue</h5>
                            <p style="color: #94A3B8; font-size: 13px; margin: 4px 0 0 0;">Complete engineering diagrams, tolerances and alloy compositions available.</p>
                        </div>
                        <a href="<?= $safe($PageRoot) . htmlspecialchars($product['catalogue_page_img'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" class="theme-btn btn-one" style="padding: 10px 22px; font-size: 13px;">
                            <span>View Catalogue Sheet</span>
                        </a>
                    </div>

                    <?php endif; ?>

                    <!-- Direct Request for Quotation Form -->
                    <div id="product-rfq" class="rfq-card">
                        <div class="rfq-head">
                            <span class="rfq-kicker">Request for Quotation</span>
                            <h4>Request Quotation for <?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?></h4>
                            <p>Share your quantity, alloy or grade, and delivery destination. Our sales engineers in Dubai DIP - 2 reply within 24 hours.</p>
                            <ul class="rfq-points">
                                <li><i class="fa-solid fa-clock"></i>Reply within 24 hours</li>
                                <li><i class="fa-solid fa-shield-halved"></i>Mill certificates on request</li>
                                <li><i class="fa-solid fa-warehouse"></i>Ready stock in DIP - 2</li>
                            </ul>
                        </div>
                        <form method="post" action="<?= $safe($PageRoot) ?>sendemail.php">
                            <input type="hidden" name="interest" value="<?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?>">
                            <div class="rfq-body">
                                <div class="rfq-row">
                                    <div class="rfq-field">
                                        <label for="rfq-name">Full Name <span>*</span></label>
                                        <input id="rfq-name" type="text" name="name" placeholder="e.g. Ahmed Al Mansoori" required>
                                    </div>
                                    <div class="rfq-field">
                                        <label for="rfq-email">Business Email <span>*</span></label>
                                        <input id="rfq-email" type="email" name="email" placeholder="name@company.com" required>
                                    </div>
                                    <div class="rfq-field">
                                        <label for="rfq-phone">Phone Number</label>
                                        <input id="rfq-phone" type="text" name="phone" placeholder="+971 __ ___ ____">
                                    </div>
                                    <div class="rfq-field">
                                        <label for="rfq-company">Company / Project Name</label>
                                        <input id="rfq-company" type="text" name="company" placeholder="Organization or project">
                                    </div>
                                    <div class="rfq-field full">
                                        <label for="rfq-message">Specifications &amp; Requirements <span>*</span></label>
                                        <textarea id="rfq-message" name="message" rows="4" placeholder="Alloy grade, thickness or dimensions, quantity, and delivery requirements..." required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="rfq-foot">
                                <small>Fields marked <span style="color:#D69A2D;">*</span> are required.</small>
                                <button type="submit" class="rfq-submit">
                                    <i class="fa-solid fa-paper-plane"></i> Submit RFQ to Sales Engineers
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- Sidebar Column (4 cols) -->
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar">
                    
                    <!-- Category Navigation Widget -->
                    <div class="category-widget" style="background: #ffffff; border-radius: 12px; padding: 25px; border: 1px solid #E2E8F0; margin-bottom: 30px; box-shadow: 0 4px 16px rgba(15,28,38,0.05);">
                        <div class="widget-title" style="margin-bottom: 18px; border-bottom: 2px solid #F1F5F9; padding-bottom: 12px;">
                            <h3 style="font-size: 19px; font-weight: 700; color: #0F1C26; margin: 0;">In This Category</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="cat-list">
                                <?php foreach ($allProductsInDivision as $pSlug => $pItem):
                                    $targetDir = ($pItem['division'] === 'services') ? 'services/' : 'products/';
                                    $targetUrl = $safe($PageRoot) . $targetDir . $pSlug . '.php';
                                ?>
                                    <li>
                                        <a href="<?= $targetUrl ?>" class="cat-item<?= $pSlug === $currentSlug ? ' is-active' : '' ?>">
                                            <span><?= htmlspecialchars($pItem['title'], ENT_QUOTES, 'UTF-8') ?></span>
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Direct Sales Engineer Contact Widget -->
                    <div class="contact-widget" style="background: #0F1C26; color: #ffffff; border-radius: 12px; padding: 30px 25px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(15,28,38,0.15); border: 1px solid rgba(214,154,45,0.25);">
                        <div class="widget-title" style="margin-bottom: 15px;">
                            <span style="color: #D69A2D; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em;">Direct Engineering Support</span>
                            <h3 style="color: #ffffff; font-size: 20px; font-weight: 700; margin-top: 4px;">Need Immediate Quotation?</h3>
                        </div>
                        <p style="font-size: 13.5px; color: #94A3B8; margin-bottom: 20px; line-height: 1.6;">
                            Talk directly with our material specialists in Dubai DIP - 2 for mill certifications, cut-to-length orders, and project deliveries.
                        </p>
                        <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; line-height: 2; font-size: 14px;">
                            <li><strong style="color: #D69A2D;"><i class="fa-solid fa-phone" style="width: 20px;"></i> Office:</strong> <a href="tel:+97148872112" style="color: #CBD5E1;">+971 4 8872112</a></li>
                            <li><strong style="color: #D69A2D;"><i class="fa-solid fa-phone" style="width: 20px;"></i> Office 2:</strong> <a href="tel:+97148878778" style="color: #CBD5E1;">+971 4 8878778</a></li>
                            <li><strong style="color: #D69A2D;"><i class="fa-solid fa-mobile-screen" style="width: 20px;"></i> Mobile:</strong> <a href="tel:+971525923184" style="color: #CBD5E1;">+971 52 5923184</a></li>
                            <li><strong style="color: #D69A2D;"><i class="fa-solid fa-envelope" style="width: 20px;"></i> Email:</strong> <a href="mailto:info@mmgeneraltrading.com" style="color: #CBD5E1;">info@mmgeneraltrading.com</a></li>
                        </ul>
                        <a href="#product-rfq" class="theme-btn btn-one" style="display: block; text-align: center; padding: 11px 20px; font-size: 13.5px;">
                            <span>Submit Fast RFQ</span>
                        </a>
                    </div>

                    <!-- Quality Standards Card -->
                    <div style="background: #ffffff; border-radius: 12px; padding: 25px; border: 1px solid #E2E8F0; box-shadow: 0 4px 16px rgba(15,28,38,0.05);">
                        <h4 style="font-size: 17px; font-weight: 700; color: #0F1C26; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-shield-halved" style="color: #D69A2D;"></i> Certified Material Supply
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13.5px; color: #475569; line-height: 1.8;">
                            <li><i class="fa-solid fa-check" style="color: #D69A2D; margin-right: 6px;"></i> Mill Test Certificates EN 10204 3.1</li>
                            <li><i class="fa-solid fa-check" style="color: #D69A2D; margin-right: 6px;"></i> Full heat number traceability</li>
                            <li><i class="fa-solid fa-check" style="color: #D69A2D; margin-right: 6px;"></i> ASTM, EN & ISO compliant alloys</li>
                            <li><i class="fa-solid fa-check" style="color: #D69A2D; margin-right: 6px;"></i> Strategic ready stock in Dubai DIP-2</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-details end -->

<?php include __DIR__ . '/footer.php'; ?>
