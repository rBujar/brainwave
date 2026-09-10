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
                                <div class="swiper-slide"><img src="./src/assets/product/airmax-1.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="./src/assets/product/airmax-2.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="./src/assets/product/airmax-3.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="./src/assets/product/airmax-4.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="swiper mySwiper product__swiper mt-2 md:order-1 md:mt-0 md:max-h-[310px] md:min-w-[70px]">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide product__smallSlide group"><img
                                        class="group-[.swiper-slide-thumb-active]:border group-[.swiper-slide-thumb-active]:border-general-black rounded-[10px]"
                                        src="./src/assets/product/miniAirmax-1.jpg" alt=""></div>
                                <div class="swiper-slide product__smallSlide group"><img
                                        class="group-[.swiper-slide-thumb-active]:border group-[.swiper-slide-thumb-active]:border-general-black rounded-[10px]"
                                        src="./src/assets/product/miniAirmax-2.jpg" alt=""></div>
                                <div class="swiper-slide product__smallSlide group"><img
                                        class="group-[.swiper-slide-thumb-active]:border group-[.swiper-slide-thumb-active]:border-general-black rounded-[10px]"
                                        src="./src/assets/product/miniAirmax-3.jpg" alt=""></div>
                                <div class="swiper-slide product__smallSlide group"><img
                                        class="group-[.swiper-slide-thumb-active]:border group-[.swiper-slide-thumb-active]:border-general-black rounded-[10px]"
                                        src="./src/assets/product/miniAirmax-4.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__info col-span-12 lg:col-span-5 lg:col-start-8 flex flex-col items-start justify-center"
                        data-aos="fade" data-aos-delay="150">
                        <div class="product__stars mb-2 [&>i]:text-[#ffac4d] [&>i]:text-xl">
                            <i class="icon-full_star"></i>
                            <i class="icon-full_star"></i>
                            <i class="icon-full_star"></i>
                            <i class="icon-full_star"></i>
                            <i class="icon-half_star"></i>
                        </div>
                        <div class="product__name mb-4">
                            <h3 class="text-4xl mb-2">Apple AirPods Max</h3>
                            <p class="text-lg">by <a
                                    class="text-primary-blue transition-colors duration-200 ease-in-out [&:hover]:bg-primary-hoverBlue"
                                    href="#">Apple</a></p>
                        </div>
                        <div class="product__price mb-4">
                            <p class="text-lg mb-2 text-[#7d818d]">List Price: $549</p>
                            <h4 class="text-[#7d818d]">Price: <span class="text-general-black">$479</span></h4>
                        </div>
                        <ul class="product__list !pl-5 mb-7 [&>li]:list-disc </div>  [&>li]:mb-2">
                            <li>
                                <p class="text-md">Active noise cancellation for immersive sound</p>
                            </li>
                            <li>
                                <p class="text-md">Transparency mode to hear and interact with the world around you</p>
                            </li>
                            <li>
                                <p class="text-md">Custom acoustic design with Apple-engineered drivers</p>
                            </li>
                            <li>
                                <p class="text-md">Spatial audio with dynamic head tracking for theater-like sound</p>
                            </li>
                        </ul>
                        <div class="product__quantity flex items-center justify-center mb-7">
                            <p class="p-style mr-4">Quantity: </p>
                            <button class="minus-btn border-0 rounded-full w-7 h-7 text-center" type="button"><i
                                    class="icon-minus"></i></button>
                            <div
                                class="product__input max-w-[50px] w-[50px] h-[35px] text-lg rounded-[8px] border border-[#a0a0a0]/30 text-center p-0.5 mx-2">
                                <span class="input-number">0</span></div>
                            <button class="plus-btn border-0 rounded-full w-7 h-7 text-center" type="button"><i
                                    class="icon-plus"></i></button>
                        </div>
                        <div class="product__buy flex items-center justify-center gap-7">
                            <a class="transition-opacity duration-200 ease-in-out [&:hover]:opacity-70 "
                                href="checkout.php"><button class="blue-btn max-w-[155px] py-4 px-11">Buy
                                    now</button></a>
                            <p class="text-lg text-bold">Add to cart</p>
                        </div>
                    </div>
                </div>
            </div>
              <div class="product__details col-span-12 mt-[65px]" data-aos="fade" data-aos-delay="100">
            <div
                class="product__content flex justify-between items-center border-b border-[#a0a0a0]/30 [&>button]bg-transparent [&>button]cursor-pointer [&>button]transition-opacity [&>button]duration-200 [&>button]ease-in-out pb-4 lg:justify-start lg:gap-[100px]">
                <button
                    class="product__detailBtn [&:hover]:opacity-70 [&.active]:text-primary-blue [&.active]:border-b [&.active]:border-primary-blue active">
                    <h5 class="text-xl">Description</h5>
                </button>
                <button
                    class="product__detailBtn [&:hover]:opacity-70 [&.active]:text-primary-blue [&.active]:border-b [&.active]:border-primary-blue">
                    <h5 class="text-xl">Specification</h5>
                </button>
                <button
                    class="product__detailBtn [&:hover]:opacity-70 [&.active]:text-primary-blue [&.active]:border-b [&.active]:border-primary-blue">
                    <h5 class="text-xl">Reviews</h5>
                </button>

            </div>
            <div class="product__detailInfo pt-10 [&>div]:hidden">
                <div
                    class="product__item [&.active]:flex [&.active]:flex-col [&.active]:items-start [&.active]:justify-start [&.active]:gap-9 active">
                    <p class="text-lg opacity-70">Leverage agile frameworks to provide a robust synopsis for high level
                        overviews. Iterative approaches to corporate strategy foster collaborative thinking to further
                        the
                        overall value proposition. Organically grow the holistic world view of disruptive innovation via
                        workplace diversity and empowerment.Leverage agile frameworks to provide a robust synopsis for
                        high
                        level overviews.</p>
                    <p class="text-lg opacity-70">terative approaches to corporate strategy foster collaborative
                        thinking to
                        further the overall value proposition. Organically grow the holistic world view of disruptive
                        innovation via workplace diversity and empowerment.</p>
                    <p class="text-lg opacity-70">Capitalize on low hanging fruit to identify a ballpark value added
                        activity to beta test. Override the digital divide with additional clickthroughs from DevOps.
                        Nanotechnology immersion along the information highway will close the loop on focusing solely on
                        the
                        bottom line.Capitalize on low hanging fruit to identify a ballpark value added activity to beta
                        test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology
                        immersion along the information highway will close the loop on focusing solely on the bottom
                        line.
                    </p>
                </div>
                <div
                    class="product__item [&.active]:flex [&.active]:flex-col [&.active]:items-start [&.active]:justify-start [&.active]:gap-9">
                    <p class="text-lg opacity-70">terative approaches to corporate strategy foster collaborative
                        thinking to
                        further the overall value proposition. Organically grow the holistic world view of disruptive
                        innovation via workplace diversity and empowerment.</p>
                    <p class="text-lg opacity-70">Nanotechnology
                        immersion along the information highway will close the loop on focusing solely on the bottom
                        line. terative approaches to corporate strategy foster collaborative thinking to
                        further the overall value proposition. Organically grow the holistic world view of disruptive
                        innovation via workplace diversity and empowerment.</p>
                </div>
                <div
                    class="product__item [&.active]:flex [&.active]:flex-col [&.active]:items-start [&.active]:justify-start [&.active]:gap-9">
                    <p class="text-lg opacity-70">terative approaches to corporate strategy foster collaborative
                        thinking to
                        further the overall value proposition. Organically grow the holistic world view of disruptive
                        innovation via workplace diversity and empowerment.</p>
                    <p class="text-lg opacity-70">Leverage agile frameworks to provide a robust synopsis for high level
                        overviews. Iterative approaches to corporate strategy foster collaborative thinking to further
                        the
                        overall value proposition. Organically grow the holistic world view of disruptive innovation via
                        workplace diversity and empowerment.Leverage agile frameworks to provide a robust synopsis for
                        high
                        level overviews.</p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <div class="grey-bg">
        <section class="related container mx-auto px-4" data-aos="fade" data-aos-delay="100">
            <div class="grid grid-cols-12">
                <div class="related__title col-span-12 text-center mb-[60px]">
                    <h3 class="font-bold">Products</h3>
                </div>
                <div
                    class="related__cards col-span-12 flex flex-col items-center justify-center gap-[40px] [&>a>div]:text-center [&>a>div]:cursor-pointer [&>a>div>img]:mb-6 lg:flex-row lg:items-start lg:justify-evenly">
                    <a href="./shoe.php">
                        <div class="related__item">
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
                        </div>
                    </a>
                    <a href="#">
                        <div class="related__item">
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
                        </div>
                    </a>
                    <a href="./lamp.php">
                        <div class="related__item">
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
                        </div>
                    </a>
                    <a href="./airpods.php">
                        <div class="related__item">
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
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/product.js'); ?>
    <?php viteEntry('src/js/aos.js'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</body>

</html>