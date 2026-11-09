<?php
$PageTitle = $PageTitle ?? 'MM Trading | Industrial Trading & Project Solutions';
$PageDescription = $PageDescription ?? 'MM Trading supplies dependable industrial products and project solutions for construction, infrastructure and manufacturing requirements.';
$PageCanonical = $PageCanonical ?? 'https://www.mmgeneraltrading.com/';
$PageOgImage = $PageOgImage ?? 'https://www.mmgeneraltrading.com/assets/images/banner/banner-1.jpg';
$PageOgType = $PageOgType ?? 'website';
$PageKeywords = $PageKeywords ?? 'MM Trading, industrial trading, industrial products, project solutions, construction supplies';
$PageRoot = $PageRoot ?? './';
$Page = $Page ?? '';
$PageSchema = $PageSchema ?? '';
$safe = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $safe($PageTitle) ?></title>
  <meta name="description" content="<?= $safe($PageDescription) ?>">
  <meta name="keywords" content="<?= $safe($PageKeywords) ?>">
  <meta name="author" content="MM Trading">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <meta name="theme-color" content="#102f4f">
  <link rel="canonical" href="<?= $safe($PageCanonical) ?>">
  <link rel="icon" href="<?= $safe($PageRoot) ?>assets/images/favicon.ico" type="image/x-icon">

  <meta property="og:type" content="<?= $safe($PageOgType) ?>">
  <meta property="og:url" content="<?= $safe($PageCanonical) ?>">
  <meta property="og:title" content="<?= $safe($PageTitle) ?>">
  <meta property="og:description" content="<?= $safe($PageDescription) ?>">
  <meta property="og:image" content="<?= $safe($PageOgImage) ?>">
  <meta property="og:site_name" content="MM Trading">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= $safe($PageTitle) ?>">
  <meta name="twitter:description" content="<?= $safe($PageDescription) ?>">
  <meta name="twitter:image" content="<?= $safe($PageOgImage) ?>">

  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Monda:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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

   
  <link rel="stylesheet" href="<?= $safe($PageRoot) ?>assets/css/mmtrading.css">
  <?php if ($PageSchema): ?><script type="application/ld+json"><?= $PageSchema ?></script><?php endif; ?>
</head>
<?php include __DIR__ . '/menu.php'; ?>