<?php
$PageTitle = $PageTitle ?? 'MM General Trading L.L.C | Industrial Trading & Project Solutions Dubai';
$PageDescription = $PageDescription ?? 'MM General Trading L.L.C supplies dependable industrial products and engineering project solutions for construction, infrastructure, and manufacturing across the UAE & GCC.';
$PageCanonical = $PageCanonical ?? 'https://www.mmgeneraltrading.com/';
$PageOgImage = $PageOgImage ?? 'https://www.mmgeneraltrading.com/assets/images/banner/banner-1.jpg';
$PageOgType = $PageOgType ?? 'website';
$PageKeywords = $PageKeywords ?? 'MM General Trading, industrial trading, industrial products, metal fabrication, aluminium sheets, Dubai DIP 2, UAE supplies';
$PageRoot = $PageRoot ?? './';
$Page = $Page ?? '';
$PageSchema = $PageSchema ?? '';
$safe = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <title><?= $safe($PageTitle) ?></title>
  <meta name="description" content="<?= $safe($PageDescription) ?>">
  <meta name="keywords" content="<?= $safe($PageKeywords) ?>">
  <meta name="author" content="MM General Trading L.L.C">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <meta name="theme-color" content="#122230">
  <link rel="canonical" href="<?= $safe($PageCanonical) ?>">

  <!-- Favicon -->
  <link rel="icon" href="<?= $safe($PageRoot) ?>assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $safe($PageRoot) ?>assets/images/favicon.png">
  <link rel="apple-touch-icon" href="<?= $safe($PageRoot) ?>assets/images/apple-touch-icon.png">

  <!-- Open Graph / Social -->
  <meta property="og:type" content="<?= $safe($PageOgType) ?>">
  <meta property="og:url" content="<?= $safe($PageCanonical) ?>">
  <meta property="og:title" content="<?= $safe($PageTitle) ?>">
  <meta property="og:description" content="<?= $safe($PageDescription) ?>">
  <meta property="og:image" content="<?= $safe($PageOgImage) ?>">
  <meta property="og:site_name" content="MM General Trading L.L.C">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= $safe($PageTitle) ?>">
  <meta name="twitter:description" content="<?= $safe($PageDescription) ?>">
  <meta name="twitter:image" content="<?= $safe($PageOgImage) ?>">

  <!-- Fonts: D-DIN (Brand Font) + Complementary Typefaces -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.cdnfonts.com" crossorigin>
  <link href="https://fonts.cdnfonts.com/css/d-din" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Inter+Tight:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link href="<?= $safe($PageRoot) ?>assets/css/font-awesome-all.css" rel="stylesheet">
  <link href="<?= $safe($PageRoot) ?>assets/css/flaticon.css" rel="stylesheet">
  <link href="<?= $safe($PageRoot) ?>assets/css/owl.css" rel="stylesheet">
  <link href="<?= $safe($PageRoot) ?>assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?= $safe($PageRoot) ?>assets/css/jquery.fancybox.min.css" rel="stylesheet">
  <link href="<?= $safe($PageRoot) ?>assets/css/animate.css" rel="stylesheet">
  <link href="<?= $safe($PageRoot) ?>assets/css/nice-select.css" rel="stylesheet">
  <link href="<?= $safe($PageRoot) ?>assets/css/color.css" rel="stylesheet">
  <link href="<?= $safe($PageRoot) ?>assets/css/style.css" rel="stylesheet">
  <link href="<?= $safe($PageRoot) ?>assets/css/responsive.css" rel="stylesheet">
  <link href="<?= $safe($PageRoot) ?>assets/css/mmtrading.css?v=4" rel="stylesheet">

  <?php if ($PageSchema): ?><script type="application/ld+json"><?= $PageSchema ?></script><?php endif; ?>
</head>
<?php include __DIR__ . '/menu.php'; ?>
