<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'components/head.php'?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
</head>
<body>
    <?php include 'components/header.php' ?>
    <div class="grey-bg">
        <?php include 'components/related-products.php' ?>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/displays/displayProduct.js'); ?>
    <?php viteEntry('src/js/aos.js'); ?>
</body>
</html>