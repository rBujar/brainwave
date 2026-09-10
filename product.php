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
        <section class="related container mx-auto px-4" data-aos="fade" data-aos-delay="100">
            <div class="grid grid-cols-12">
                <div class="related__title col-span-12 text-center mb-[60px]">
                    <h3 class="font-bold">Products</h3>
                </div>
                 <div class="related__cards col-span-12 flex flex-col items-center justify-center gap-[40px] [&>a>div]:text-center [&>a>div]:cursor-pointer [&>a>div>img]:mb-6 lg:flex-row lg:items-start lg:justify-evenly">
                    <a href="./shoe.php"><div class="related__item">
                        <img src="../src/assets/related-1.jpg" alt="related product 1">
                        <div class="related__info">
                            <div class="related__price flex items-center justify-center gap-2 mb-5">
                                <p class="text-lg font-bold">$120</p>
                                <p class="text-md">$350</p>
                            </div>
                            <p class="text-lg font-bold">Men Shoe</p>
                            <div class="related__stars mt-5 [&>i]:text-[#ffac4d] [&>i]:text-[20px]">
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
                            <div class="related__price flex items-center justify-center gap-2 mb-5">
                                <p class="text-lg font-bold">$170</p>
                                <p class="text-md">$190</p>
                            </div>
                            <p class="text-lg font-bold">Apple Airpod 2</p>
                            <div class="related__stars mt-5 [&>i]:text-[#ffac4d] [&>i]:text-[20px]">
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
                            <div class="related__price flex items-center justify-center gap-2 mb-5">
                                <p class="text-lg font-bold">$640</p>
                                <p class="text-md">$890</p>
                            </div>
                            <p class="text-lg font-bold">Wooden Speaker</p>
                            <div class="related__stars mt-5 [&>i]:text-[#ffac4d] [&>i]:text-[20px]">
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-full_star"></i>
                                <i class="icon-half_star"></i>
                            </div>
                        </div>
                    </div></a>
                    <a href="./airpods.php"><div class="related__item">
                        <img src="../src/assets/related-4.jpg" alt="related product 4">
                        <div class="related__info">
                            <div class="related__price flex items-center justify-center gap-2 mb-5">
                                <p class="text-lg font-bold">$640</p>
                                <p class="text-md">$890</p>
                            </div>
                            <p class="text-lg font-bold">Apple Airpod</p>
                            <div class="related__stars mt-5 [&>i]:text-[#ffac4d] [&>i]:text-[20px]">
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