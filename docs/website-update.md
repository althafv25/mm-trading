# Website Update: Products & Services Reorganization

**Project:** MM General Trading L.L.C (`mmgeneraltrading.com`)  
**Document:** Website Directory Reorganization & Link Configuration Audit  
**Date:** November 2026  
**Status:** Completed & Fully Verified  

---

## 1. Overview & Objective

The MM General Trading L.L.C website has been restructured to separate physical product pages and service lines from the root directory into dedicated subdirectories:
- `/products/` for all 25 industrial materials, sheets, extrusions, sealants, adhesives, and hardware lines.
- `/services/` for metal coating, PVD, coil slitting, and cut-to-length toll processing services.

This update establishes clean URL taxonomy, enhances SEO topic clustering, avoids root-level file clutter, and ensures all navigation menus, footers, carousels, breadcrumbs, forms, and asset references remain 100% operational without broken links (404 errors).

---

## 2. Directory Architecture & Inventory

### 2.1 Web Root (`/`)
The web root maintains core site-level templates, controllers, and pages:
- `index.php` — Homepage with hero banner and dynamic products carousel
- `about.php` — Corporate profile and quality certifications
- `products.php` — Central catalogue filtering grid (26 lines across 6 divisions)
- `projects.php` — Project showcase and case studies
- `contact.php` — Contact information, DIP-2 headquarters map, and inquiry form
- `product-detail.php` — Universal detail template controller for all products and services
- `products-data.php` — Structured catalog database array (metadata, specs, applications, images)
- `header.php`, `menu.php`, `footer.php` — Global layout components
- `sendemail.php` — RFQ & inquiry form handler
- `sitemap.xml` & `robots.txt` — Search engine indexing directives

---

### 2.2 Products Directory (`/products/`)
Contains 25 individual product entry files plus a directory index redirect:

| File Name | Division | Category | Status |
|:---|:---|:---|:---:|
| `plain-aluminium-sheets-plates.php` | Metals | Aluminium & Metal Products | Verified |
| `aluminium-chequered-sheets.php` | Metals | Aluminium & Metal Products | Verified |
| `aluminium-stucco-sheets.php` | Metals | Aluminium & Metal Products | Verified |
| `perforated-metal-sheets.php` | Metals | Aluminium & Metal Products | Verified |
| `stainless-steel-sheets.php` | Metals | Aluminium & Metal Products | Verified |
| `stainless-steel-profiles.php` | Metals | Aluminium & Metal Products | Verified |
| `architectural-aluminium-profiles.php` | Metals | Aluminium & Metal Products | Verified |
| `standard-aluminium-extrusions.php` | Metals | Aluminium & Metal Products | Verified |
| `guibao-1092-structural-silicone.php` | Chemicals | Construction Chemicals & Sealants | Verified |
| `guibao-992-structural-silicone.php` | Chemicals | Construction Chemicals & Sealants | Verified |
| `guibao-1098-weatherproofing-sealant.php` | Chemicals | Construction Chemicals & Sealants | Verified |
| `guibao-998-silicone-sealant.php` | Chemicals | Construction Chemicals & Sealants | Verified |
| `guibao-995-total-vision-sealant.php` | Chemicals | Construction Chemicals & Sealants | Verified |
| `guibao-specialty-sealants.php` | Chemicals | Construction Chemicals & Sealants | Verified |
| `tkk-pu-foam.php` | Chemicals | Construction Chemicals & Sealants | Verified |
| `bondtite-edge-d.php` | Adhesives | Wood & Industrial Adhesives | Verified |
| `bondtite-deluxe-d3.php` | Adhesives | Wood & Industrial Adhesives | Verified |
| `bondtite-multibond.php` | Adhesives | Wood & Industrial Adhesives | Verified |
| `monster-wood-adhesive.php` | Adhesives | Wood & Industrial Adhesives | Verified |
| `bondtite-multifix.php` | Adhesives | Wood & Industrial Adhesives | Verified |
| `sealz-drop-seals.php` | Fire & Acoustic | Passive Fire & Acoustic Solutions | Verified |
| `sealz-perimeter-astragal-seals.php` | Fire & Acoustic | Passive Fire & Acoustic Solutions | Verified |
| `sealz-intumescent-fire-seals.php` | Fire & Acoustic | Passive Fire & Acoustic Solutions | Verified |
| `sealz-vtape-hardware-pads.php` | Fire & Acoustic | Passive Fire & Acoustic Solutions | Verified |
| `architectural-hardware-fittings.php` | Hardware | Hardware & Accessories | Verified |
| `index.php` | Root Redirect | Redirects `/products/` to `../products.php` (301) | Active |

---

### 2.3 Services Directory (`/services/`)
Contains dedicated industrial processing service files:

| File Name | Division | Category | Status |
|:---|:---|:---|:---:|
| `coating-processing-services.php` | Services | Coating & Processing Services | Verified |
| `index.php` | Directory Redirect | Redirects `/services/` to `coating-processing-services.php` (301) | Active |

---

## 3. Technical Implementation & Link Audit

### 3.1 Template Inclusion & Controller Resolution
When files were relocated to subdirectories, direct `include __DIR__ . '/product-detail.php'` broke because `product-detail.php` resides in the project root.
- **Fix:** All 25 files in `products/*.php` and `services/*.php` were updated to:
  ```php
  <?php
  $PageRoot = '../';
  $slug = '<item-slug>';
  include __DIR__ . '/../product-detail.php';
  ```

### 3.2 Asset Pathing (`$PageRoot`)
The global layout (`header.php`, `menu.php`, `footer.php`) relies on `$PageRoot` to prefix CSS, JS, favicon, and image URLs.
- **Fix in Subdirectory Pages:** Explicitly set `$PageRoot = '../';` before including `product-detail.php`.
- **Defensive Fallback in `product-detail.php`:** Added automatic detection so that even if `$PageRoot` is undefined, the controller checks `dirname($_SERVER['SCRIPT_FILENAME'])` and falls back to `'../'` when executing from `products/` or `services/`.
- **Result:** Root pages render assets as `./assets/...`, while subdirectory pages render assets as `../assets/...`.

### 3.3 Dynamic Links in `products.php`
- **Previous:** `<a href="<?= htmlspecialchars($slug) ?>.php">` (assumed root files).
- **Updated:**
  ```php
  $targetDir = ($product['division'] === 'services') ? 'services/' : 'products/';
  $targetUrl = $root . $targetDir . $slug . '.php';
  ```
- **Result:** Metals, chemicals, adhesives, fire seals, and hardware link to `./products/{slug}.php`. Coating services link to `./services/coating-processing-services.php`.

### 3.4 Dynamic Links in `index.php`
- **Banner CTA:** Updated the aluminium specifications button from `plain-aluminium-sheets-plates.php` to `products/plain-aluminium-sheets-plates.php`.
- **Core Materials Carousel:** Updated the 26-item Owl Carousel loops to dynamically check `$product['division']`:
  - Physical products link to `products/{slug}.php`.
  - Services link to `services/coating-processing-services.php`.

### 3.5 Global Navigation (`menu.php`)
- Updated dropdown navigation item for Coating & Processing Services to direct to `<?= $safe($PageRoot) ?>services/coating-processing-services.php`.
- Verified all main menu links (`Home`, `About Us`, `Products & Materials`, `Projects`, `Contact`) correctly use `$PageRoot`.

### 3.6 Global Footer (`footer.php`)
- Updated the "Key Materials" widget links to reference `products/...`:
  - `products/plain-aluminium-sheets-plates.php`
  - `products/aluminium-chequered-sheets.php`
  - `products/aluminium-stucco-sheets.php`
  - `products/stainless-steel-sheets.php`
  - `products/guibao-1092-structural-silicone.php`
  - `products/tkk-pu-foam.php`
  - `products/sealz-drop-seals.php`
  - `services/coating-processing-services.php`

### 3.7 Product Detail Controller (`product-detail.php`)
The following elements inside `product-detail.php` were audited and adjusted:
1. **Canonical URLs:** Updated to include the folder prefix:
   `https://www.mmgeneraltrading.com/{products|services}/{slug}.php`
2. **Page Title Background Image:** Prepended `$safe($PageRoot)` to `assets/images/background/page-title.jpg`.
3. **Breadcrumbs:**
   - Home link: `<?= $safe($PageRoot) ?>index.php`
   - Products link: `<?= $safe($PageRoot) ?>products.php`
4. **Hero & Catalogue Images:** Prepended `$safe($PageRoot)` to `$product['hero_image']` and `$product['catalogue_page_img']`.
5. **In-Category Sidebar Navigation:**
   Computes `$pItem['division'] === 'services' ? 'services/' : 'products/'` and prefixes `$safe($PageRoot)`.
6. **Direct RFQ Form Action:**
   Updated `<form method="post" action="<?= $safe($PageRoot) ?>sendemail.php">` so inquiries correctly POST to `/sendemail.php` from subfolders.

### 3.8 Directory Browsing & 403 Protection
Added `index.php` in both `products/` and `services/` to prevent directory listing exposure or 403 Forbidden errors:
- `/products/index.php`: Issues a 301 Permanent Redirect to `../products.php`.
- `/services/index.php`: Issues a 301 Permanent Redirect to `coating-processing-services.php`.

### 3.9 Sitemap (`sitemap.xml`)
Updated all 26 product and service `<loc>` entries to reflect their canonical paths (`/products/...` and `/services/...`).

---

## 4. Verification & Testing Results

| Test Category | Command / Check | Result |
|:---|:---|:---:|
| PHP Syntax Validation | `php -l` on all 30+ files | 100% Passed (0 syntax errors) |
| Runtime Execution | CLI execution of root & subfolder scripts | 100% Passed (No warnings / notices) |
| CSS & JS Asset Resolution | Inspected `<link>` & `<script>` paths | 100% Correct (`../assets/...`) |
| Image Pathing | Inspected logo, hero, favicon, and background paths | 100% Correct |
| RFQ Form Submission | Form `action` points to root `sendemail.php` | 100% Correct |
| Sitemap Format | Valid XML structure with updated canonical URLs | 100% Valid |

---

## 5. Deployment & Web Server Best Practices

If deploying behind Apache or Nginx, the following 301 redirection rules are recommended to ensure existing search engine backlinks or bookmarks seamlessly map to the new URLs:

### Apache (`.htaccess`)
```apache
RewriteEngine On

# Redirect legacy root service page to /services/
RewriteRule ^coating-processing-services\.php$ /services/coating-processing-services.php [R=301,L]

# Redirect legacy root product pages to /products/
RewriteCond %{DOCUMENT_ROOT}/products/$1.php -f
RewriteRule ^([a-z0-9-]+)\.php$ /products/$1.php [R=301,L]
```

### Nginx (`nginx.conf`)
```nginx
location = /coating-processing-services.php {
    return 301 /services/coating-processing-services.php;
}

location ~ ^/([a-z0-9-]+)\.php$ {
    if (-f $document_root/products/$1.php) {
        return 301 /products/$1.php;
    }
}
```

