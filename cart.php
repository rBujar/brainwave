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
    <div class="grey-bg">
        <section class="cart container">
            <div class="row">
                <div class="cart__title col-12" data-aos="fade" data-aos-delay="100">
                    <h1>Your cart</h1>
                    <p class="text-md text-faded">
                        2 Items on your cart
                    </p>
                </div>
                <div class="cart__content col-12">
                    <div class="row">
                        <div class="cart__header col-12" data-aos="fade" data-aos-delay="100">
                            <div class="row">
                                <p class="text-sm col-4 col-xl-5">Product</p>
                                <p class="text-sm col-2">Price</p>
                                <p class="text-sm col-2">Quantity</p>
                                <p class="text-sm col-4 col-xl-3">Total</p>
                            </div>
                        </div>
                        <div class="cart__card col-12" data-aos="fade" data-aos-delay="100">
                            <div class="row">
                                <div class="cart__product col-12 col-lg-4 col-xl-5">
                                    <img src="./src/assets/echo.svg" alt="ech image">
                                    <p class="text-md text-bold">Amazon Echo Super Extra Bass Home System</p>
                                </div>
                                <div class="cart__priceGroup col-12 col-lg-4">
                                    <div class="row">
                                        <span class="cart__price text-md text-bold col-6">$70</span>
                                        <div class="cart__quantity col-6">
                                            <p class="text-md text-faded">Quantity: </p>
                                            <button class="minus-btn" type="button"><i class="icon-minus"></i></button>
                                            <div class="cart__input"><span class="input-number">0</span></div>
                                            <button class="plus-btn" type="button"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart__productTotal col-12 col-lg-4 col-xl-3">
                                    <span class="text-md text-bold" id="totalText">Total:</span>
                                    <span class="text-md text-bold">$140</span>
                                    <button class="cart__remove"><i class="icon-cross text-bold"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="cart__card col-12" data-aos="fade" data-aos-delay="200">
                            <div class="row">
                                <div class="cart__product col-12 col-lg-4 col-xl-5">
                                    <img src="./src/assets/airpods.svg" alt="airpods image">
                                    <p class="text-md text-bold">Apple AirPods with Wired Charging Case</p>
                                </div>
                                <div class="cart__priceGroup col-12 col-lg-4">
                                    <div class="row">
                                        <span class="cart__price text-md text-bold col-6">$150</span>
                                        <div class="cart__quantity col-6">
                                            <p class="text-md text-faded">Quantity: </p>
                                            <button class="minus-btn" type="button"><i class="icon-minus"></i></button>
                                            <div class="cart__input"><span class="input-number">0</span></div>
                                            <button class="plus-btn" type="button"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart__productTotal col-12 col-lg-4 col-xl-3">
                                    <span class="text-md text-bold" id="totalText">Total:</span>
                                    <span class="text-md text-bold">$150</span>
                                    <button class="cart__remove"><i class="icon-cross text-bold"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart__proceed col-12" data-aos="fade" data-aos-delay="100">
                    <a href="./product.php"><button class="white-btn">
                        <p class="text-sm text-bold">Continue Shopping</p>
                    </button></a>
                    <div class="cart__total">
                        <p class="text-sm text-bold">Order Details</p>
                        <div class="cart__details">
                            <div class="cart__info">
                                <p class="text-md text-faded">02 items</p>
                                <p class="text-md text-bold">$290</p>
                            </div>
                            <div class="cart__info">
                                <p class="text-md text-faded">Delivery Fee</p>
                                <p class="text-md text-bold" style="color: var(--primary-color-green)">Free</p>
                            </div>
                        </div>
                        <div class="cart__info">
                            <p class="text-lg text-bold">Total Price</p>
                            <p class="text-lg text-bold">$290</p>
                        </div>
                        <a href="./checkout.php"><button class="blue-btn">Proceed to checkout</button></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/cart.js'); ?>
    <?php viteEntry('src/js/aos.js'); ?>
</body>
</html>