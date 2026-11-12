<?php
$Page = 'products';
$PageTitle = 'Products & Materials Catalog | MM General Trading L.L.C Dubai';
$PageDescription = 'Explore the complete MM General Trading L.L.C product portfolio: Aluminium sheets, chequered plates, stucco coils, stainless steel, GUIBAO architectural sealants, TKK PU foam, Astral Bondtite adhesives, and SEALz passive fire solutions.';
$PageCanonical = 'https://www.mmgeneraltrading.com/products.php';
$PageOgImage = 'https://www.mmgeneraltrading.com/assets/images/service/service-1.jpg';
$PageKeywords = 'aluminium sheets UAE, aluminium plates Dubai, chequered plate, stucco embossed sheet, perforated metal, GUIBAO silicone sealant, Astral Bondtite, SEALz fire seals, TKK PU foam Dubai';

$PRODUCTS_DB = include __DIR__ . '/products-data.php';

$PageSchema = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'CollectionPage',
    'name' => 'MM General Trading L.L.C Full Product Catalogue',
    'url' => $PageCanonical,
    'description' => $PageDescription
]);

include __DIR__ . '/header.php';

$divisions = [
    'all' => [
        'name' => 'All Product Families',
        'short_name' => 'All Products',
        'icon' => 'fa-solid fa-boxes-stacked',
        'badge' => '26 Verified Product Lines'
    ],
    'metals' => [
        'name' => 'Aluminium & Metal Products',
        'short_name' => 'Aluminium & Metals',
        'icon' => 'fa-solid fa-layer-group',
        'badge' => '8 Core Products · Ex-Stock DIP-2',
        'lead' => 'Ex-stock in our Dubai DIP - 2 warehouses, MM General Trading L.L.C maintains extensive ready inventories of plain aluminium sheets, 5-bar chequered plates, stucco embossed coils, perforated metal sheets, stainless steel, and architectural extrusions in alloys 1100, 3003, 5005, 5052, 5083, 6082, and 7075 with complete mill test certification (EN 10204 3.1).'
    ],
    'chemicals' => [
        'name' => 'Construction Chemicals & Sealants',
        'short_name' => 'Chemicals & Sealants',
        'icon' => 'fa-solid fa-flask-vial',
        'badge' => '7 Systems · Authorized UAE Distribution',
        'lead' => 'Direct authorized UAE distribution of GUIBAO high-performance structural glazing silicone sealants, weatherproofing sealants, total vision systems (TVS), fire-resistant sealants, and TKK polyurethane (PU) expanding foams for curtain walls, architectural façades, and insulated glass units.'
    ],
    'adhesives' => [
        'name' => 'Wood & Industrial Adhesives',
        'short_name' => 'Wood & Adhesives',
        'icon' => 'fa-solid fa-cubes-stacked',
        'badge' => '5 Formulations · Industrial Grade',
        'lead' => 'Premium industrial woodworking and construction adhesive systems by Astral Bondtite and Monster. Featuring D3 water-resistant wood adhesives, edge-banding PVA, high-tack neoprene contact cements, and no-nail hybrid MS polymers engineered for the Gulf climate.'
    ],
    'fire-acoustic' => [
        'name' => 'Passive Fire & Acoustic Solutions',
        'short_name' => 'Passive Fire & Acoustic',
        'icon' => 'fa-solid fa-shield-halved',
        'badge' => '4 Certified Lines · Civil Defence Compliant',
        'lead' => 'Civil Defence compliant passive fire and acoustic sealing solutions by SEALz®. Including BS 476 and UL 10C certified intumescent fire and smoke seals, automatic drop seals, perimeter acoustic seals, and intumescent hardware protection pads for fire-rated doors and partitions.'
    ],
    'hardware' => [
        'name' => 'Hardware & Accessories',
        'short_name' => 'Hardware & Accessories',
        'icon' => 'fa-solid fa-toolbox',
        'badge' => 'Façade & Door Solutions',
        'lead' => 'Heavy-duty architectural glazing hardware, concealed door closers, floor springs, stainless steel patch fittings, and high-performance silicone applicator tooling for commercial and residential façades and architectural glass systems.'
    ],
    'services' => [
        'name' => 'Coating & Processing Services',
        'short_name' => 'Coating & Processing',
        'icon' => 'fa-solid fa-gears',
        'badge' => 'Precision Processing · Toll Coating',
        'lead' => 'State-of-the-art toll processing and value-added coil services in the UAE: precision coil slitting, cut-to-length sheet leveling, protective PE/PVC surface film lamination, paper interleaving, and custom architectural PVDF and powder coating.'
    ]
];

$productsByDivision = [];
foreach ($PRODUCTS_DB as $slug => $product) {
    $div = $product['division'];
    if (!isset($productsByDivision[$div])) {
        $productsByDivision[$div] = [];
    }
    $productsByDivision[$div][$slug] = $product;
}

$activeFilter = $_GET['cat'] ?? 'all';
if (!isset($divisions[$activeFilter])) {
    $activeFilter = 'all';
}

function renderProductBox($slug, $product) {
    ?>
    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
        <a href="<?= htmlspecialchars($slug, ENT_QUOTES, 'UTF-8') ?>.php" class="d-block home-product-box">
            <span class="brand-tag"><?= htmlspecialchars($product['brand'], ENT_QUOTES, 'UTF-8') ?></span>
            <div class="img-wrapper">
                <img src="<?= htmlspecialchars($product['hero_image'], ENT_QUOTES, 'UTF-8') ?>" class="img-fluid w-100" alt="<?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?>">
            </div>
            <span class="overlay-gradient"></span>
            <h3 class="home-prod-title"><?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?></h3>
        </a>
    </div>
    <?php
}
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
            <h1>Product Catalogue & Materials</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li id="breadcrumb-division-label"><?= $activeFilter !== 'all' ? htmlspecialchars($divisions[$activeFilter]['short_name'], ENT_QUOTES, 'UTF-8') : 'All Products' ?></li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->
<!-- Products Project Cards Section (https://dinco.ae/products/ concept) -->
<div class="row mx-0 mt-5 py-4 project-cards">
    <div class="container px-0">

        <!-- Filter Bar -->
        <div class="filter-bar text-center" style="margin-bottom: 45px; display: flex; flex-wrap: wrap; gap: 8px; justify-content: center;">
            <button type="button" class="product-filter-btn <?= $activeFilter === 'all' ? 'is-active' : '' ?>" data-division="all">
                <i class="fa-solid fa-boxes-stacked"></i> All Products <span class="badge-count">26</span>
            </button>
            <?php foreach ($divisions as $divKey => $divInfo): ?>
                <?php if ($divKey === 'all') continue; ?>
                <?php $count = isset($productsByDivision[$divKey]) ? count($productsByDivision[$divKey]) : 0; ?>
                <button type="button" class="product-filter-btn <?= $activeFilter === $divKey ? 'is-active' : '' ?>" data-division="<?= htmlspecialchars($divKey, ENT_QUOTES, 'UTF-8') ?>">
                    <i class="<?= $divInfo['icon'] ?>"></i> <?= htmlspecialchars($divInfo['short_name'], ENT_QUOTES, 'UTF-8') ?> <span class="badge-count"><?= $count ?></span>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Categorized Sections (Dinco.ae Concept) -->
        <div id="division-sections-container">
            <?php foreach ($divisions as $divKey => $divInfo): ?>
                <?php if ($divKey === 'all' || !isset($productsByDivision[$divKey])) continue; ?>
                <div class="division-section" id="section-<?= $divKey ?>" data-division="<?= $divKey ?>" style="<?= ($activeFilter !== 'all' && $activeFilter !== $divKey) ? 'display: none;' : '' ?>">
                    <div class="col-12 text-center">
                        <a href="#section-<?= $divKey ?>">
                            <h3 class="section-title-1"><?= htmlspecialchars($divInfo['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                        </a>
                        <p class="category-lead-text"><?= htmlspecialchars($divInfo['lead'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                    <div class="row mx-0 mt-2 mb-5 justify-content-center w-100">
                        <?php foreach ($productsByDivision[$divKey] as $slug => $product): ?>
                            <?php renderProductBox($slug, $product); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<!-- Closer to you Section (https://dinco.ae/products/ concept) -->
<div class="row mx-0 py-5 closerbox">
    <div class="container py-4 px-0">
        <div class="row mx-0 align-items-center justify-content-center">
            <div class="col-lg-8 col-md-12 col-12">
                <span style="color: #D69A2D; font-weight: 700; text-transform: uppercase; font-size: 12px; letter-spacing: 0.1em; display: inline-block; margin-bottom: 6px;">Strategic Warehousing & Quick Dispatch</span>
                <h3>We are closer to you in Dubai DIP - 2</h3>
                <p>With expansive warehouse and processing facilities in Dubai Investments Park 2 (DIP - 2), MM General Trading L.L.C ensures speedy deliveries of certified industrial metals, sealants, and fire protection systems across the UAE and GCC.</p>
            </div>
            <div class="col-lg-4 col-md-12 col-12 text-lg-right text-center" style="margin-top: 20px;">
                <a href="contact.php" class="theme-btn btn-one" style="padding: 14px 34px; font-size: 14px;">
                    <span>Contact Sales Engineers</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Filter Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.product-filter-btn');
    const divisionSections = document.querySelectorAll('.division-section');
    const breadcrumbLabel = document.getElementById('breadcrumb-division-label');

    const divisionLabels = {
        'all': 'All Products',
        'metals': 'Aluminium & Metals',
        'chemicals': 'Chemicals & Sealants',
        'adhesives': 'Wood & Adhesives',
        'fire-acoustic': 'Passive Fire & Acoustic',
        'hardware': 'Hardware & Accessories',
        'services': 'Coating & Processing'
    };

    function applyFilter(division, updateUrl = true, shouldScroll = false) {
        filterButtons.forEach(btn => {
            if (btn.getAttribute('data-division') === division) {
                btn.classList.add('is-active');
            } else {
                btn.classList.remove('is-active');
            }
        });

        divisionSections.forEach(section => {
            const secDiv = section.getAttribute('data-division');
            if (division === 'all' || secDiv === division) {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        });

        if (breadcrumbLabel && divisionLabels[division]) {
            breadcrumbLabel.textContent = divisionLabels[division];
        }

        if (updateUrl) {
            const newUrl = division === 'all' ? 'products.php' : 'products.php?cat=' + encodeURIComponent(division);
            window.history.pushState({ division: division }, '', newUrl);
        }

        if (shouldScroll && division !== 'all') {
            const targetSection = document.getElementById('section-' + division);
            if (targetSection) {
                const headerOffset = 120;
                const elementPosition = targetSection.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }
    }

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const div = this.getAttribute('data-division');
            applyFilter(div, true, true);
        });
    });

    window.addEventListener('popstate', function(e) {
        const urlParams = new URLSearchParams(window.location.search);
        const cat = urlParams.get('cat') || 'all';
        applyFilter(cat, false, false);
    });

    const initialParams = new URLSearchParams(window.location.search);
    const initialCat = initialParams.get('cat');
    if (initialCat && divisionLabels[initialCat]) {
        applyFilter(initialCat, false, true);
    }
});
</script>

<?php include __DIR__ . '/footer.php'; ?>
