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
        <section class="related container" data-aos="fade" data-aos-delay="100">
            <div class="row">
                <div class="related__title col-12">
                    <h3>Products</h3>
                </div>
                 <div class="related__cards col-12">
                    <a href="./shoe.php"><div class="related__item">
                        <img src="../src/assets/related-1.jpg" alt="related product 1">
                        <div class="related__info">
                            <div class="related__price">
                                <p class="text-lg text-bold">$120</p>
                                <p class="text-sm">$350</p>
                            </div>
                            <p class="text-lg text-bold">Men Shoe</p>
                            <div class="related__stars">
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-half_star"></i>
                            </div>
                        </div>
                    </div></a>
                    <a href="./airmax.php"><div class="related__item">
                        <img src="../src/assets/related-2.jpg" alt="related product 2">
                        <div class="related__info">
                            <div class="related__price">
                                <p class="text-lg text-bold">$170</p>
                                <p class="text-sm">$190</p>
                            </div>
                            <p class="text-lg text-bold">Apple Airpod 2</p>
                            <div class="related__stars">
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-half_star"></i>
                            </div>
                        </div>
                    </div></a>
                    <a href="./lamp.php"><div class="related__item">
                        <img src="../src/assets/related-3.jpg" alt="related product 3">
                        <div class="related__info">
                            <div class="related__price">
                                <p class="text-lg text-bold">$640</p>
                                <p class="text-sm">$890</p>
                            </div>
                            <p class="text-lg text-bold">Wooden Speaker</p>
                            <div class="related__stars">
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-half_star"></i>
                            </div>
                        </div>
                    </div></a>
                    <a href="./lamp.php"><div class="related__item">
                        <img src="../src/assets/related-4.jpg" alt="related product 4">
                        <div class="related__info">
                            <div class="related__price">
                                <p class="text-lg text-bold">$640</p>
                                <p class="text-sm">$890</p>
                            </div>
                            <p class="text-lg text-bold">Apple Airpod</p>
                            <div class="related__stars">
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-half_star"></i>
                            </div>
                        </div>
                    </div></a>
                </div>
            </div>
        </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/aos.js'); ?>
</body>

</html>