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
                <div class="cart__title col-12">
                    <h1>Your cart</h1>
                    <p class="text-md text-faded">
                        2 Items on your cart
                    </p>
                </div>
                <div class="cart__list col-12">
                    <div class="cart__header">
                        <span>Products</span>
                        <span>Price</span>
                        <span>Quantity</span>
                        <span>Total</span>
                    </div>
                    <div class="cart__cards">
                        <div class="cart__item">
                            <div class="cart__product">
                                <img src="./src/assets/echo.svg" alt="ech image">
                                <p class="text-md text-bold">Amazon Echo Super Extra Bass Home System</p>
                            </div>
                            <div class="cart__price">
                            <span class="cart__price text-md text-bold">$70</span>
                            <div class="cart__quantity">
                                <p class="text-md text-faded">Quantity: </p>
                                <button class="minus-btn" type="button"><i class="icon-minus"></i></button>
                                <div class="cart__input"><span class="input-number">0</span></div>
                                <button class="plus-btn" type="button"><i class="icon-plus"></i></button>
                                </div>
                            </div>
                            <span class="cart__productTotal text-md text-bold">$140</span>
                            <button class="cart__remove"><i class="icon-cross text-bold"></i></button>
                        </div>
                        <div class="cart__item">
                            <div class="cart__product">
                                <img src="./src/assets/airpods.svg" alt="airpods image">
                                <p class="text-md text-bold">Apple AirPods with Wired Charging Case</p>
                            </div>
                            <div class="cart__price">
                            <span class="cart__price text-md text-bold">$150</span>
                            <div class="cart__quantity">
                                <p class="text-md text-faded">Quantity: </p>
                                <button class="minus-btn" type="button"><i class="icon-minus"></i></button>
                                <div class="cart__input"><span class="input-number">0</span></div>
                                <button class="plus-btn" type="button"><i class="icon-plus"></i></button>
                                </div>
                            </div>
                            <span class="cart__productTotal text-md text-bold">$150</span>
                            <button class="cart__remove"><i class="icon-cross text-bold"></i></button>
                        </div>
                    </div>

                </div>
                <div class="cart__proceed col-12">
                    <button class="white-btn">
                        <p class="text-sm text-bold">Continue Shopping</p>
                    </button>
                    <div class="cart__total">
                        <p class="text-sm text-bold">Order Details</p>
                        <div class="cart__details">
                            <div class="cart__info">
                                <p class="text-md text-faded">02 items</p>
                                <p class="text-md text-bold">$290</p>
                            </div>
                            <div class="cart__info">
                                <p class="text-md text-faded">Delivery Fee</p>
                                <p class="text-md text-bold">Free</p>
                            </div>
                        </div>
                            <div class="cart__info">
                                <p class="text-lg text-bold">Total Price</p>
                                <p class="text-lg text-bold">$290</p>
                            </div>
                        <button class="blue-btn">Proceed to checkout</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
    <?php viteEntry('src/js/cart.js'); ?>
</body>

</html>