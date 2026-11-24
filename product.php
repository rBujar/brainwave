<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'components/head.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
</head>
<body>
    <?php include 'components/header.php' ?>
    <section class="product container mx-auto px-4">
        <div class="grid grid-cols-12">
            <div class="product__shop col-span-12">
                <div class="grid grid-cols-12">
                    <div class="product__swiperContainer col-span-12 lg:col-span-6 mb-7 md:gap-2 md:flex md:justify-start md:items-start"
                        data-aos="fade" data-aos-delay="100">
                        <div class="swiper mySwiper2 product__swiper2 md:order-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="" alt=""></div>
                            </div>
                        </div>
                        <div class="swiper mySwiper product__swiper mt-2 md:order-1 md:mt-0 md:max-h-[310px] md:min-w-[70px]">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide product__smallSlide group"><img
                                        class="group-[.swiper-slide-thumb-active]:border group-[.swiper-slide-thumb-active]:border-general-black rounded-[10px]"
                                        src="" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__info col-span-12 lg:col-span-5 lg:col-start-8 flex flex-col items-start justify-center"
                        data-aos="fade" data-aos-delay="150">
                        <div class="product__stars mb-2 [&>i]:text-[#ffac4d] [&>i]:text-xl"></div>
                        <div class="product__name mb-4">
                            <h3 class="text-4xl mb-2"></h3>
                            <p class="text-lg"> <a
                                    class="text-primary-blue transition-colors duration-200 ease-in-out [&:hover]:bg-primary-hoverBlue"
                                    href=""></a></p>
                        </div>
                        <div class="product__price mb-4">
                            <p class="text-lg mb-2 text-[#7d818d]"></p>
                            <h4 class="text-[#7d818d]"><span class="text-general-black"></span></h4>
                        </div>
                        <ul class="product__list !pl-5 mb-7 [&>li]:list-disc [&>li]:mb-2">
                            <li>
                                <p class="text-md"></p>
                            </li>
                        </ul>
                        <div class="product__quantity flex items-center justify-center mb-7">
                            <p class="p-style mr-4"></p>
                            <button class="minus-btn border-0 rounded-full w-7 h-7 text-center" type="button"><i
                                    class="icon-minus"></i></button>
                            <div
                                class="product__input max-w-[50px] w-[50px] h-[35px] text-lg rounded-[8px] border border-[#a0a0a0]/30 text-center p-0.5 mx-2">
                                <span class="input-number"></span></div>
                            <button class="plus-btn border-0 rounded-full w-7 h-7 text-center" type="button"><i
                                    class="icon-plus"></i></button>
                        </div>
                        <div class="product__buy flex items-center justify-center gap-7">
                            <a class="transition-opacity duration-200 ease-in-out [&:hover]:opacity-70 "
                                href="checkout.php"><button class="blue-btn max-w-[155px] py-4 px-11"></button></a>
                            <p class="text-lg text-bold"></p>
                        </div>
                    </div>
                </div>
            </div>
              <div class="product__details col-span-12 mt-[65px]" data-aos="fade" data-aos-delay="100">
            <div
                class="product__content flex justify-between items-center border-b border-[#a0a0a0]/30 [&>button]bg-transparent [&>button]cursor-pointer [&>button]transition-opacity [&>button]duration-200 [&>button]ease-in-out pb-4 lg:justify-start lg:gap-[100px]">
                <button
                    class="product__detailBtn [&:hover]:opacity-70 [&.active]:text-primary-blue [&.active]:border-b [&.active]:border-primary-blue active">
                    <h5 class="text-xl"></h5>
                </button>
                <button
                    class="product__detailBtn [&:hover]:opacity-70 [&.active]:text-primary-blue [&.active]:border-b [&.active]:border-primary-blue">
                    <h5 class="text-xl"></h5>
                </button>
                <button
                    class="product__detailBtn [&:hover]:opacity-70 [&.active]:text-primary-blue [&.active]:border-b [&.active]:border-primary-blue">
                    <h5 class="text-xl"></h5>
                </button>

            </div>
            <div class="product__detailInfo pt-10 [&>div]:hidden">
                <div
                    class="product__item [&.active]:flex [&.active]:flex-col [&.active]:items-start [&.active]:justify-start [&.active]:gap-9 active">
                    <p class="text-lg opacity-70"></p>
                </div>
                <div
                    class="product__item [&.active]:flex [&.active]:flex-col [&.active]:items-start [&.active]:justify-start [&.active]:gap-9">
                    <p class="text-lg opacity-70"></p>
                </div>
                <div
                    class="product__item [&.active]:flex [&.active]:flex-col [&.active]:items-start [&.active]:justify-start [&.active]:gap-9">
                    <p class="text-lg opacity-70"></p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <div class="grey-bg">
        <?php include './components/related-products.php' ?>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/displays/displayProductDetails.js'); ?>
    <?php viteEntry('src/js/displays/displayProduct.js');?>
    <?php viteEntry('src/js/aos.js'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</body>
</html>