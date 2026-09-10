<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
<?php include 'components/head.php'?>
</head>
<body>
    <?php include 'components/header.php' ?>
    <div class="grey-bg">
        <section class="cart container mx-auto px-4">
            <div class="grid grid-cols-12">
                <div class="cart__title col-span-12 text-center mb-[100px]" data-aos="fade" data-aos-delay="100">
                    <h1 class="mb-10 font-bold">Your cart</h1>
                    <p class="p-style">
                        2 Items on your cart
                    </p>
                </div>
                <div class="cart__content col-span-12">
                    <div class="grid grid-cols-12">
                        <div class="cart__header col-span-12 hidden uppercase lg:block" data-aos="fade" data-aos-delay="100">
                            <div class="grid grid-cols-12">
                                <p class="text-md col-span-5">Product</p>
                                <p class="text-md col-span-2">Price</p>
                                <p class="text-md col-span-2">Quantity</p>
                                <p class="text-md col-span-2">Total</p>
                            </div>
                        </div>
                        <div class="cart__card col-span-12 bg-general-white rounded-[10px] py-5 px-6 mb-2 relative xl:py-6 xl:px-9" data-aos="fade" data-aos-delay="100">
                            <div class="grid grid-cols-12">
                                <div class="cart__product col-span-12 lg:col-span-5 flex items-center justify-start gap-5 mb-2 lg:m-0">
                                    <img src="./src/assets/echo.svg" alt="ech image">
                                    <p class="text-lg font-bold">Amazon Echo Super Extra Bass Home System</p>
                                </div>
                                <div class="cart__priceGroup col-span-12 lg:col-span-4 mb-5 lg:m-0 flex items-center justify-start">
                                    <div class="grid grid-cols-12">
                                        <span class="cart__price text-lg font-bold col-span-6">$70</span>
                                        <div class="cart__quantity col-span-6 col-start-8 flex justify-start items-center">
                                            <p class="p-style hidden lg:content-start">Quantity: </p>
                                            <button class="minus-btn flex flex-col items-center justify-center border-0 rounded-full w-7 h-7 [&>i]:text-xs" type="button"><i class="icon-minus"></i></button>
                                            <div class="cart__input max-w-[50px] w-[50px] h-[35px] text-lg rounded-[8px] border border-[#a0a0a0]/30 text-center p-0.5 mx-1"><span class="input-number">0</span></div>
                                            <button class="plus-btn flex flex-col items-center justify-center border-0 rounded-full w-7 h-7 [&>i]:text-xs" type="button"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart__productTotal col-span-12 lg:col-span-3 flex items-center justify-between">
                                    <span class="text-lg font-bold lg:hidden" id="totalText">Total:</span>
                                    <span class="text-lg font-bold ml-3">$140</span>
                                    <button class="cart__remove bg-transparent flex items-center absolute top-0 right-0 translate-[-15px]/[10px] p-2 lg:static"><i class="icon-cross font-bold text-sm"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="cart__card col-span-12 bg-general-white rounded-[10px] py-5 px-6 mb-2 relative xl:py-6 xl:px-9" data-aos="fade" data-aos-delay="200">
                            <div class="grid grid-cols-12">
                                <div class="cart__product col-span-12 lg:col-span-5 flex items-center justify-start gap-5 mb-2">
                                    <img src="./src/assets/airpods.svg" alt="airpods image">
                                    <p class="text-lg font-bold">Apple AirPods with Wired Charging Case</p>
                                </div>
                                <div class="cart__priceGroup col-span-12 lg:col-span-4 mb-5 lg:m-0 flex items-center justify-start">
                                    <div class="grid grid-cols-12">
                                        <span class="cart__price text-lg font-bold col-span-6">$150</span>
                                         <div class="cart__quantity col-span-6 col-start-8 flex justify-start items-center">
                                            <p class="p-style hidden lg:content-start">Quantity: </p>
                                            <button class="minus-btn flex flex-col items-center justify-center border-0 rounded-full w-7 h-7 [&>i]:text-xs" type="button"><i class="icon-minus"></i></button>
                                            <div class="cart__input max-w-[50px] w-[50px] h-[35px] text-lg rounded-[8px] border border-[#a0a0a0]/30 text-center p-0.5 mx-1"><span class="input-number">0</span></div>
                                            <button class="plus-btn flex flex-col items-center justify-center border-0 rounded-full w-7 h-7 [&>i]:text-xs" type="button"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart__productTotal col-span-12 lg:col-span-3 flex items-center justify-between">
                                    <span class="text-lg font-bold lg:hidden" id="totalText">Total:</span>
                                    <span class="text-lg font-bold ml-3">$150</span>
                                    <button class="cart__remove bg-transparent flex items-center absolute top-0 right-0 translate-[-15px]/[10px] p-2 lg:static"><i class="icon-cross font-bold text-sm"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart__proceed col-span-12 flex flex-col items-start justify-center gap-7 mt-9 md:flex-row md:justify-between md:gap-0" data-aos="fade" data-aos-delay="100">
                    <a href="./product.php"><button class="white-btn  py-3 px-5">
                        <p class="text-lg font-bold">Continue Shopping</p>
                    </button></a>
                    <div class="cart__total flex flex-col items-start justify-center bg-general-white rounded-[10px] p-6 w-full md:w-auto lg:w-[365px]">
                        <p class="text-lg font-bold">Order Details</p>
                        <div class="cart__details flex flex-col items-start justify-center my-9 gap-2 w-full border-dotted border-general-grey pb-4 [&>div]:flex [&>div]:items-start [&>div]:justify-between [&>div]:w-full">
                            <div class="cart__info">
                                <p class="p-style">02 items</p>
                                <p class="text-lg font-bold">$290</p>
                            </div>
                            <div class="cart__info">
                                <p class="p-style">Delivery Fee</p>
                                <p class="text-lg font-bold" style="color: var(--primary-color-green)">Free</p>
                            </div>
                        </div>
                        <div class="cart__info flex items-start justify-between w-full">
                            <p class="text-lg font-bold">Total Price</p>
                            <p class="text-lg font-bold">$290</p>
                        </div>
                        <a href="./checkout.php"><button class="blue-btn mt-5 py-5 px-9 w-full">Proceed to checkout</button></a>
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