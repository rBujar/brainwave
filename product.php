<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php viteClient(); ?>
    <?php viteEntry('src/css/style.scss'); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo viteAsset('src/assets/favicon.ico'); ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="src/assets/favicon.ico" />
    <title>Brainwave</title>
</head>
<body>
    <?php include 'components/header.php' ?>
    <section class="product container">
        <div class="row">
            <div class="product__shop col-12">
                <div class="row">
                <div class="product__prodPreview col-12 col-lg-6">
                    <div class="product__smallPrev">
                        <img src="./src/assets/smallProduct-1.svg" alt="small product 1">
                        <img src="./src/assets/smallProduct-2.svg" alt="small product 2">
                        <img src="./src/assets/smallProduct-3.svg" alt="small product 3">
                        <img src="./src/assets/smallProduct-4.svg" alt="small product 4">
                    </div>
                    <img class="product__mainImg" src="./src/assets/product.svg" alt="product img">
                </div>
                <div class="product__info col-12 col-lg-6">
                        <div class="product__stars">
                            <i class="icon-full_star"></i>
                            <i class="icon-full_star"></i>
                            <i class="icon-full_star"></i>
                            <i class="icon-full_star"></i>
                            <i class="icon-half_star"></i>
                        </div>
                        <div class="product__name">
                            <h3>Apple AirPods with Wired Charging Case</h3>
                            <p class="text-md">by <a href="#">Apple</a></p>
                        </div>
                        <div class="product__price">
                            <p class="text-md">List Price: $90</p>
                            <h4>Price: <span>$70</span></h4>
                        </div>
                        <ul class="product__list">
                            <li>
                                <p class="text-sm">Active noise cancellation for immersive sound</p>
                            </li>
                            <li>
                                <p class="text-sm">Transparency mode for hearing and connecting</p>
                            </li>
                            <li>
                                <p class="text-sm">Three sizes of soft, tapered silicone tips</p>
                            </li>
                            <li>
                                <p class="text-sm">Sweat and water resistant</p>
                            </li>
                        </ul>
                        <div class="product__quantity">
                            <p class="text-md text-faded">Quantity: </p>
                            <button class="minus-btn" type="button"><i class="icon-minus"></i></button>
                            <div class="product__input"><span class="input-number">0</span></div>
                            <button class="plus-btn" type="button"><i class="icon-plus"></i></button>
                        </div>
                        <div class="product__buy">
                            <button class="blue-btn">Buy now</button>
                            <a href="" class="text-md text-bold">Add to cart</a>
                        </div>
                </div>
                </div>
            </div>
            <div class="product__details col-12">
                <div class="product__content">
                    <h5 class="text-lg product__title active">Description</h5>
                    <h5 class="text-lg product__title">Specification</h5>
                    <h5 class="text-lg product__title">Reviews</h5>
                </div>
                    <div class="product__item active">
                    <p class="text-lg text-faded">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                    <p class="text-lg text-faded">terative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                    <p class="text-lg text-faded">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                </div>
                <div class="product__item">
                    <p class="text-lg text-faded">terative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                </div>
                  <div class="product__item">
                    <p class="text-lg text-faded">terative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                    <p class="text-lg text-faded">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="grey-bg">
    <section class="related container">
        <div class="row">
        <div class="related__title col-12"><h3>Related Products</h3></div>
        <div class="related__cards col-12">
            <div class="related__item">
                  <img src="./src/assets/related-1.svg" alt="related product 1">
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
            </div>
            <div class="related__item">
                  <img src="./src/assets/related-2.svg" alt="related product 2">
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
            </div>
            <div class="related__item">
                  <img src="./src/assets/related-3.svg" alt="related product 3">
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
            </div>
            <div class="related__item">
                  <img src="./src/assets/related-4.svg" alt="related product 4">
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
            </div>
        </div>
    </div>
    </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
    <?php viteEntry('src/js/product.js'); ?>
</body>
</html>