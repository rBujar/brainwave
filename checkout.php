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
        <section class="checkout container">
            <div class="row">
                <div class="checkout__title col-8 offset-2">
                    <h1>Checkout</h1>
                    <p class="text-md text-faded">
                        2 Items on your cart
                    </p>
                </div>
                <div class="checkout__content col-12">
                    <div class="checkout__card">
                        <div class="checkout__billing">
                            <h5 class="text-lg">Billing Details</h5>
                            <div class="checkout__field">
                                <label for="fname" class="text-xs text-bold">First & Last name</label>
                                <input type="text" id="fname" name="fname" placeholder="i.e. John Doe">
                                <span class="error nameError"></span>
                            </div>
                            <div class="checkout__field">
                                <label for="email" class="text-xs text-bold">Email</label>
                                <input type="email" id="email" name="email" placeholder="i.e. john@email.com">
                                <span class="error emailError"></span>
                            </div>
                            <div class="checkout__field">
                                <label for="country" class="text-xs text-bold">Country</label>
                                <select name="country" id="country" autocomplete="country">
                                    <option>select country</option>
                                    <option value="US">United States Of America</option>
                                    <option value="XK">Kosovo</option>
                                    <option value="AL">Albania</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AD">Andorra</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="GB">United Kingdom</option>
                                </select>
                                <span class="error countryError"></span>
                            </div>
                            <div class="checkout__fieldGroup">
                                <div class="checkout__field">
                                    <label for="city" class="text-xs text-bold">City/State</label>
                                    <input type="text" id="city" name="city" placeholder="City">
                                    <span class="error cityError"></span>
                                </div>
                                <div class="checkout__field">
                                    <label for="zip" class="text-xs text-bold">Zip/Postal Code</label>
                                    <input type="number" id="zip" name="zip" placeholder="Zip Code">
                                    <span class="error zipError"></span>
                                </div>

                            </div>
                        </div>
                        <div class="checkout__payment">
                            <h5 class="text-lg">Payment Method</h5>
                            <div class="checkout__payMethod">
                                <div class="checkout__radio">
                                    <input type="radio" name="paymentType" id="card" value="credit">
                                    <label for="card" class="text-xs text-bold">Credit Cards</label>
                                </div>
                                <img src="./src/assets/credit-cards.svg" alt="credit cards">

                            </div>
                            <div class="checkout__field">
                                <label for="cardNum" class="text-xs text-bold">Card Number</label>
                                <div class="checkout__cardNum">
                                    <input type="number" id="cardNum" name="cardNum"
                                        placeholder="i.e. 11154 5665 6464 565">
                                    <img src="./src/assets/visa.svg" alt="visa card">
                                </div>
                            </div>

                            <div class="checkout__fieldGroup">
                                <div class="checkout__field">
                                    <label for=expDate" class="text-xs text-bold">Expire Date</label>
                                    <input type="text" id=expDate" name=expDate" placeholder=Month/Year">
                                    <span class="error cityError"></span>
                                </div>
                                <div class="checkout__field">
                                    <label for="pin" class="text-xs text-bold">Security Code</label>
                                    <input type="number" id="pin" name="pin" placeholder="PIN">
                                    <span class="error pinError"></span>
                                </div>
                            </div>
                            <div class="checkout__payMethod">
                                <div class="checkout__radio">
                                    <input type="radio" name="paymentType" id="paypal" value="paypal">
                                    <label for="paypal" class="text-xs text-bold">Paypal</label>
                                </div>
                                <img src="./src/assets/paypal.svg" alt="paypal">
                            </div>
                        </div>
                        <div class="checkout__proceed">
                            <p class="text-xs text-faded checkout__link">By clicking the button you agree the <a
                                    href="./term.php" target="_blank">Terms and Conditions</a></p>
                            <button class="blue-btn checkout__button">Proceed to checkout</button>
                        </div>
                    </div>
                    <div class="checkout__orderDetails">
                        <div class="checkout__details">
                            <div class="checkout__detailsTitle">
                                <h5 class="text-xs">Order Details</h5>
                                <div class="checkout__detailsInfo">
                                    <p class="text-md text-faded">Total items</p>
                                    <p class="text-md text-faded">02 items</p>
                                </div>
                            </div>
                            <div class="checkout__detailCard">
                                <div class="checkout__product">
                                    <img src="./src/assets/checkoutAirpods.svg" alt="airpods">
                                    <div class="checkout__productInfo">
                                        <p class="text-md text-bold">Apple AirPods Pro…</p>
                                        <div class="checkout__detailsInfo">
                                            <span class="text-sm">2 ITEMS</span>
                                            <span class="text-sm text-bold">$280</span>
                                        </div>
                                    </div>
                                    <i class="icon-cross text-bold"></i>
                                </div>
                            </div>
                            <div class="checkout__detailCard">
                                <div class="checkout__product">
                                    <img src="./src/assets/checkoutAirpods.svg" alt="airpods">
                                    <div class="checkout__productInfo">
                                        <p class="text-md text-bold">Apple AirPods Pro…</p>
                                        <div class="checkout__detailsInfo">
                                            <span class="text-sm">2 ITEMS</span>
                                            <span class="text-sm text-bold">$280</span>
                                        </div>
                                    </div>
                                    <i class="icon-cross text-bold"></i>
                                </div>
                            </div>
                            <div class="checkout__detailsInfo">
                                <p class="text-md text-faded">Delivery Fee</p>
                                <p class="text-md" style="color: var(--primary-color-green)">FREE</p>
                            </div>
                            <div class="checkout__detailsInfo">
                                <p class="text-md text-bold">Total Price</p>
                                <p class="text-md text-bold">$560</p>
                            </div>
                            <button class="blue-btn">Proceed to checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
</body>
</html>