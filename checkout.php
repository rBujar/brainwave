<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
<?php include 'components/head.php'?>
</head>
<body>
    <?php include 'components/header.php' ?>
    <div class="grey-bg">
        <section class="checkout container mx-auto px-4">
            <div class="grid grid-cols-12">
                <div class="checkout__title col-span-6 col-start-4 text-center mb-[50px] lg:mb-20" data-aos="fade" data-aos-delay="100">
                    <h1 class="mb-5 font-bold lg:mb-10">Checkout</h1>
                    <p class="p-style">
                        2 Items on your cart
                    </p>
                </div>
                <div class="checkout__content col-span-12 flex flex-col items-center justify-center gap-10 lg:flex-row lg:items-start lg:gap-[95px]">
                    <div class="checkout__card border-0 rounded-[10px] bg-general-white py-7 px-6 w-full max-w-[480px]" data-aos="fade" data-aos-delay="100">
                        <div class="checkout__billing flex flex-col items-start justify-center gap-6 [&>h5]:mb-2 mb-[55px] [&>div]:w-full">
                            <h5 class="text-xl font-bold">Billing Details</h5>
                            <div class="checkout__field">
                                <label class="text-md font-bold capitalize block mb-1" for="fname">First & Last name</label>
                                <input class="rounded-[8px] border border-[#a0a0a0]/30 w-full p-2 [&:placeholder]:p-8 [&:placeholder]:text-sm [&:placeholder]:opacity-70 [&:placeholder]:overflow-hidden" type="text" id="fname" name="fname" placeholder="i.e. John Doe">
                                <span class="error nameError"></span>
                            </div>
                            <div class="checkout__field">
                                <label class="text-md font-bold capitalize block mb-1" for="email">Email</label>
                                <input class="rounded-[8px] border border-[#a0a0a0]/30 w-full p-2 [&:placeholder]:p-8 [&:placeholder]:text-sm [&:placeholder]:opacity-70 [&:placeholder]:overflow-hidden" type="email" id="email" name="email" placeholder="i.e. john@email.com">
                                <span class="error emailError"></span>
                            </div>
                            <div class="checkout__field">
                                <label class="text-md font-bold capitalize block mb-1" for="country">Country</label>
                                <select class="rounded-[8px] border border-[#a0a0a0]/30 w-full p-2" name="country" id="country" autocomplete="country">
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
                            <div class="checkout__fieldGroup flex items-start justify-start gap-7">
                                <div class="checkout__field">
                                    <label class="text-md font-bold capitalize block mb-1" for="city">City/State</label>
                                    <input class="rounded-[8px] border border-[#a0a0a0]/30 w-full p-2 [&:placeholder]:p-8 [&:placeholder]:text-sm [&:placeholder]:opacity-70 [&:placeholder]:overflow-hidden" type="text" id="city" name="city" placeholder="City">
                                    <span class="error cityError"></span>
                                </div>
                                <div class="checkout__field">
                                    <label class="text-md font-bold capitalize block mb-1" for="zip">Zip/Postal Code</label>
                                    <input class="rounded-[8px] border border-[#a0a0a0]/30 w-full p-2 [&:placeholder]:p-8 [&:placeholder]:text-sm [&:placeholder]:opacity-70 [&:placeholder]:overflow-hidden" type="number" id="zip" name="zip" placeholder="Zip Code">
                                    <span class="error zipError"></span>
                                </div>

                            </div>
                        </div>
                        <div class="checkout__payment flex flex-col items-start justify-center gap-6 [&>h5]:mb-2 [&>div]:w-full">
                            <h5 class="text-xl font-bold">Payment Method</h5>
                            <div class="checkout__payMethod flex items-center justify-between rounded-[8px] border border-[#a0a0a0]/30 w-full p-3 w-auto">
                                <div class="checkout__radio flex items-center justify-start gap-2">
                                    <input class="border-0 bg-transparent" type="radio" name="paymentType" id="card" value="credit">
                                    <label class="text-md font-bold capitalize block" for="card">Credit Cards</label>
                                </div>
                                <img class="w-[100px]" src="./src/assets/credit-cards.svg" alt="credit cards">

                            </div>
                            <div class="checkout__field">
                                <label class="text-md font-bold capitalize block mb-1" for="cardNum">Card Number</label>
                                <div class="checkout__cardNum flex items-center justify-between rounded-[8px] border border-[#a0a0a0]/30 w-full p-2">
                                    <input class="border-0 bg-transparent" type="number" id="cardNum" name="cardNum"
                                        placeholder="i.e. 11154 5665 6464 565">
                                    <img src="./src/assets/visa.svg" alt="visa card">
                                </div>
                            </div>
                            <div class="checkout__fieldGroup flex items-start justify-start gap-7">
                                <div class="checkout__field">
                                    <label class="text-md font-bold capitalize block mb-1" for="expDate">Expire Date</label>
                                    <input class="rounded-[8px] border border-[#a0a0a0]/30 w-full p-2 [&:placeholder]:p-8 [&:placeholder]:text-sm [&:placeholder]:opacity-70 [&:placeholder]:overflow-hidden" type="text" id="expDate" name="expDate" placeholder="Month/Year">
                                    <span class="error cityError"></span>
                                </div>
                                <div class="checkout__field">
                                    <label class="text-md font-bold capitalize block mb-1" for="pin">Security Code</label>
                                    <input class="rounded-[8px] border border-[#a0a0a0]/30 w-full p-2 [&:placeholder]:p-8 [&:placeholder]:text-sm [&:placeholder]:opacity-70 [&:placeholder]:overflow-hidden" type="number" id="pin" name="pin" placeholder="PIN">
                                    <span class="error pinError"></span>
                                </div>
                            </div>
                            <div class="checkout__payMethod flex items-center justify-between rounded-[8px] border border-[#a0a0a0]/30 w-full p-3 w-auto">
                                <div class="checkout__radio flex items-center justify-start gap-2">
                                    <input class="border-0 bg-transparent" type="radio" name="paymentType" id="paypal" value="paypal">
                                    <label class="text-md font-bold capitalize" for="paypal">Paypal</label>
                                </div>
                                <img src="./src/assets/paypal.svg" alt="paypal">
                            </div>
                        </div>
                        <div class="checkout__proceed">
                            <p class="text-sm text-faded checkout__link flex flex-col items-center justify-center my-7 lg:flex-row">By clicking the button you agree the 
                                <a href="./terms.php" class="text-primary-blue transition-colors duration-200 ease-in-out [&:hover]:bg-primary-hoverBlue lg:ml-1">Terms and Conditions</a></p>
                            <button class="blue-btn checkout__button w-full py-4 px-9">Proceed to checkout</button>
                        </div>
                    </div>
                    <div class="checkout__orderDetails flex flex-col items-center justify-center bg-general-white rounded-[10px] p-6 w-full max-w-[365px]" data-aos="fade" data-aos-delay="150">
                        <div class="checkout__details w-full">
                            <div class="checkout__detailsTitle mb-6">
                                <h5 class="text-sm mb-7 font-bold">Order Details</h5>
                                <div class="checkout__detailsInfo flex items-start justify-between w-full">
                                    <p class="text-lg opacity-70">Total items</p>
                                    <p class="text-lg opacity-70">02 items</p>
                                </div>
                            </div>
                            <div class="checkout__detailCard mb-3 bg-general-white rounded-[10px] p-4 shadow-[0px_0px_1px_0px_rgba(0,0,0,0.1)]">
                                <div class="checkout__product flex items-center justify-between gap-4">
                                    <img src="./src/assets/checkoutAirpods.jpg" alt="airpods">
                                    <div class="checkout__productInfo">
                                        <p class="text-lg font-bold">Apple AirPods Pro…</p>
                                        <div class="checkout__detailsInfo flex items-start justify-between w-full">
                                            <span class="text-sm">2 ITEMS</span>
                                            <span class="text-sm text-bold">$280</span>
                                        </div>
                                    </div>
                                    <i class="icon-cross text-bold"></i>
                                </div>
                            </div>
                            <div class="checkout__detailCard mb-2 bg-general-white rounded-[10px] p-4 shadow-[0px_0px_1px_0px_rgba(0,0,0,0.1)]">
                                <div class="checkout__product flex items-center justify-between gap-4">
                                    <img src="./src/assets/checkoutAirpods.jpg" alt="airpods">
                                    <div class="checkout__productInfo">
                                        <p class="text-lg font-bold">Apple AirPods Pro…</p>
                                        <div class="checkout__detailsInfo flex items-start justify-between w-full">
                                            <span class="text-sm">2 ITEMS</span>
                                            <span class="text-sm text-bold">$280</span>
                                        </div>
                                    </div>
                                    <i class="icon-cross text-bold"></i>
                                </div>
                            </div>
                            <div class="checkout__detailsInfo flex items-start justify-between w-full mb-7">
                                <p class="p-style">Delivery Fee</p>
                                <p class="text-lg text-primary-green">FREE</p>
                            </div>
                            <div class="checkout__detailsInfo flex items-start justify-between w-full">
                                <p class="text-lg font-bold">Total Price</p>
                                <p class="text-lg font-bold">$560</p>
                            </div>
                            <button class="blue-btn mt-5 py-5 px-9 w-full">Proceed to checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/aos.js'); ?>
</body>
</html>