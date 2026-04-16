<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'components/head.php'?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
</head>
<body>
    <?php include 'components/header.php' ?>
    <section class="product container">
        <div class="row">
            <div class="product__shop col-12">
                <div class="row">
                    <div class="product__swiperContainer col-12 col-lg-6" data-aos="fade" data-aos-delay="100">
                        <div class="swiper mySwiper2 product__swiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="./src/assets/product/lamp-1.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="./src/assets/product/lamp-2.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="./src/assets/product/lamp-3.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="./src/assets/product/lamp-4.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="swiper mySwiper product__swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide product__smallSlide"><img src="./src/assets/product/miniLamp-1.jpg"
                                        alt=""></div>
                                <div class="swiper-slide product__smallSlide"><img src="./src/assets/product/miniLamp-2.jpg"
                                        alt=""></div>
                                <div class="swiper-slide product__smallSlide"><img src="./src/assets/product/miniLamp-3.jpg"
                                        alt=""></div>
                                <div class="swiper-slide product__smallSlide"><img src="./src/assets/product/miniLamp-4.jpg"
                                        alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__info col-12 col-lg-5 offset-lg-1 col-xxl-6 offset-xxl-0" data-aos="fade" data-aos-delay="150">
                        <div class="product__stars">
                            <i class="icon-full_star"></i>
                            <i class="icon-full_star"></i>
                            <i class="icon-full_star"></i>
                            <i class="icon-full_star"></i>
                            <i class="icon-half_star"></i>
                        </div>
                        <div class="product__name">
                            <h3>Modern Wooden Adjustable Desk Lamp</h3>
                            <p class="text-md">by <a href="#">Nordic Home.</a></p>
                        </div>
                        <div class="product__price">
                            <p class="text-md">List Price: $95</p>
                            <h4>Price: <span>$68</span></h4>
                        </div>
                        <ul class="product__list">
                            <li>
                                <p class="text-sm">Adjustable wooden arm for flexible lighting angles</p>
                            </li>
                            <li>
                                <p class="text-sm">Minimalist Scandinavian-inspired design</p>
                            </li>
                            <li>
                                <p class="text-sm">Durable metal lampshade for focused light</p>
                            </li>
                            <li>
                                <p class="text-sm">Perfect for desks, study areas, and bedside tables</p>
                            </li>
                        </ul>
                        <div class="product__quantity">
                            <p class="text-md text-faded">Quantity: </p>
                            <button class="minus-btn" type="button"><i class="icon-minus"></i></button>
                            <div class="product__input"><span class="input-number">0</span></div>
                            <button class="plus-btn" type="button"><i class="icon-plus"></i></button>
                        </div>
                        <div class="product__buy">
                            <a href="checkout.php"><button class="blue-btn">Buy now</button></a>
                            <p class="text-md text-bold">Add to cart</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details col-12" data-aos="fade" data-aos-delay="100">
            <div class="product__content">
                <button class="product__detailBtn active"><h5 class="text-lg">Description</h5></button>
                <button class="product__detailBtn"><h5 class="text-lg">Specification</h5></button>
                <button class="product__detailBtn"><h5 class="text-lg">Reviews</h5></button>

            </div>
            <div class="product__detailInfo">
                <div class="product__item active">
                <p class="text-lg text-faded">Leverage agile frameworks to provide a robust synopsis for high level
                    overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the
                    overall value proposition. Organically grow the holistic world view of disruptive innovation via
                    workplace diversity and empowerment.Leverage agile frameworks to provide a robust synopsis for high
                    level overviews.</p>
                <p class="text-lg text-faded">terative approaches to corporate strategy foster collaborative thinking to
                    further the overall value proposition. Organically grow the holistic world view of disruptive
                    innovation via workplace diversity and empowerment.</p>
                <p class="text-lg text-faded">Capitalize on low hanging fruit to identify a ballpark value added
                    activity to beta test. Override the digital divide with additional clickthroughs from DevOps.
                    Nanotechnology immersion along the information highway will close the loop on focusing solely on the
                    bottom line.Capitalize on low hanging fruit to identify a ballpark value added activity to beta
                    test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology
                    immersion along the information highway will close the loop on focusing solely on the bottom line.
                </p>
            </div>
            <div class="product__item">
                <p class="text-lg text-faded">terative approaches to corporate strategy foster collaborative thinking to
                    further the overall value proposition. Organically grow the holistic world view of disruptive
                    innovation via workplace diversity and empowerment.</p>
                <p class="text-lg text-faded">Nanotechnology
                    immersion along the information highway will close the loop on focusing solely on the bottom line. terative approaches to corporate strategy foster collaborative thinking to
                    further the overall value proposition. Organically grow the holistic world view of disruptive
                    innovation via workplace diversity and empowerment.</p>
            </div>
            <div class="product__item">
                <p class="text-lg text-faded">terative approaches to corporate strategy foster collaborative thinking to
                    further the overall value proposition. Organically grow the holistic world view of disruptive
                    innovation via workplace diversity and empowerment.</p>
                <p class="text-lg text-faded">Leverage agile frameworks to provide a robust synopsis for high level
                    overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the
                    overall value proposition. Organically grow the holistic world view of disruptive innovation via
                    workplace diversity and empowerment.Leverage agile frameworks to provide a robust synopsis for high
                    level overviews.</p>
            </div>
            </div>
        </div>
        </div>
    </section>
    <div class="grey-bg">
        <section class="related container" data-aos="fade" data-aos-delay="100">
            <div class="row">
                <div class="related__title col-12">
                    <h3>Related Products</h3>
                </div>
                 <div class="related__cards col-12">
                    <a href="./shoe.php"><div class="related__item">
                        <img src="./src/assets/related-1.jpg" alt="related product 1">
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
                        <img src="./src/assets/related-2.jpg" alt="related product 2">
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
                    <a href="#"><div class="related__item">
                        <img src="./src/assets/related-3.jpg" alt="related product 3">
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
                    <a href="./airpods.php"><div class="related__item">
                        <img src="./src/assets/related-4.jpg" alt="related product 4">
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
    <?php viteEntry('src/js/product.js'); ?>
    <?php viteEntry('src/js/aos.js'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</body>
</html>