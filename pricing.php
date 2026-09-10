<?php require_once './vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'components/head.php' ?>
</head>
<body>
    <main>
        <?php include './components/header.php' ?>
        <div class="grey-bg">
            <section class="pricing container mx-auto px-4">
                <div class="grid grid-cols-12">
                    <div class="pricing__title col-span-12 md:col-span-8 md:col-start-3 text-center mb-[50px] lg:mb-[75px]" data-aos="fade" data-aos-delay="100">
                        <h1 class="font-bold lg:mb-[45px]">Pricing & Plans</h1>
                        <p class="p-style">With lots of unique blocks, you can easily build a page without
                            coding. Build
                            your next consultancy website within few minutes.</p>
                    </div>
                    <div class="pricing__cards col-span-12 flex flex-col items-center justify-center gap-7 [&>div]:flex [&>div]:flex-col [&>div]:items-center [&>div]:justify-center [&>div]:text-center [&>div]:w-full [&>div]:bg-general-white [&>div]:pt-6 [&>div]:px-5 [&>div]:pb-9 [&>div]:rounded-[10px] md:[&>div]:w-[350px] lg:flex-row lg:[&>div]:h-[510px] xl:[&>div]:h-[560px]" data-aos="fade" data-aos-delay="150">
                        <div class="pricing__item">
                            <div class="pricing__value mb-4">
                                <p class="text-sm font-bold text-primary-red mb-4">Starter</p>
                                <h1 class="font-bold">$19 <span class="text-lg">/ mo</span></h1>
                            </div>
                            <ul class="pricing__features mb-7 [&>li]:border-t [&>li]:border-[#a0a0a0]/50 [&>li>p]:p-4 xl:[&>li>p]:p-5">
                                <li>
                                    <p class="text-lg">Upto 100 Team Members</p>
                                </li>
                                <li>
                                    <p class="text-lg">100 GB Cloud Storage</p>
                                </li>
                                <li>
                                    <p class="text-lg">Unlimited Meetings</p>
                                </li>
                                <li>
                                    <p class="text-lg">Premium Support</p>
                                </li>
                            </ul>
                            <button class="pricing__button pricing__button--black capitalize max-w-[220px] text-general-white transition-colors duration-200 ease-in-out bg-general-black py-5 px-11 [&:hover]:bg-general-white [&:hover]:text-general-black [&:hover]:outline [&:hover]:outline-general-black">Get started now</button>
                        </div>
                        <div class="pricing__item">
                            <div class="pricing__value mb-4">
                                <p class="text-sm font-bold text-primary-red mb-4">Unlimited</p>
                                <h1 class="font-bold">$99 <span class="text-lg">/ mo</span></h1>
                            </div>
                            <ul class="pricing__features mb-7 [&>li]:border-t [&>li]:border-[#a0a0a0]/50 [&>li>p]:p-4 xl:[&>li>p]:p-5">
                                <li>
                                    <p class="text-lg">Unlimited Team Members</p>
                                </li>
                                <li>
                                    <p class="text-lg">Unlimited Cloud Storage</p>
                                </li>
                                <li>
                                    <p class="text-lg">Unlimited Meetings</p>
                                </li>
                                <li>
                                    <p class="text-lg">Premium Support</p>
                                </li>
                            </ul>
                            <button class="pricing__button pricing__button--red capitalize text-general-white transition-colors duration-200 ease-in-out bg-primary-red max-w-[280px] py-5 px-[70px] [&:hover]:bg-secondary-lightRed lg:px-15">Get started now</button>
                        </div>
                        <div class="pricing__item pricing__item--blue !bg-primary-blue text-general-white">
                            <div class="pricing__value mb-4">
                                <p class="text-sm font-bold text-general-white mb-4">Enterprise</p>
                                <span class="text-lg opacity-60">Advanced features for large teams with complex projects.</p>
                            </div>
                            <ul class="pricing__features mb-6 [&>li]:border-t [&>li]:border-[#a0a0a0]/50 [&>li>p]:p-4 xl:[&>li>p]:p-5">
                                <li>
                                    <p class="text-lg">Unlimited Team Members</p>
                                </li>
                                <li>
                                    <p class="text-lg">5TB Cloud Storage</p>
                                </li>
                                <li>
                                    <p class="text-lg">Unlimited Meetings</p>
                                </li>
                                <li>
                                    <p class="text-lg">Premium Support</p>
                                </li>
                            </ul>
                            <button class="pricing__button pricing__button--green capitalize max-w-[220px] text-general-white transition-colors duration-200 ease-in-out bg-primary-green py-5 px-[55px] [&:hover]:bg-secondary-lightGreen">Contact Sales</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="questions container mx-auto px-4">
                <div class="grid grid-cols-12">
                    <div class="questions__title col-span-12 md:col-span-6 md:col-start-4 text-center mb-[70px]" data-aos="fade" data-aos-delay="100">
                        <h2 class="font-bold mb-6">Frequently Asked Questions</h1>
                            <p class="p-style">With lots of unique blocks, you can easily build a page
                                without coding.
                                Build your next consultancy website within few minutes.</p>
                    </div>
                    <div class="questions__cards col-span-12 lg:col-span-8 lg:col-start-3 flex flex-col justify-center items-start gap-2 mb-11 [&>div]:flex [&>div]:flex-col [&>div]:items-start [&>div]:justify-start [&>div]:w-full [&>div]:border-0 [&>div]:rounded-[10px] [&>div]:bg-general-white [&>div]:p-5 [&>div]:transition-[height] [&>div]:duration-200 [&>div]:ease-in-out [&>div]:h-20" data-aos="fade" data-aos-delay="150">
                        <div class="questions__item [&.active]:h-fit [&.active]:gap-6">
                            <div class="questions__ask flex justify-between items-center w-full">
                                <p class="text-lg font-bold">Can I use Albino for my clients?</p>
                                <i class="icon-arrow_right rightArrow cursor-pointer transition-transform duration-200 ease-in-out [&.active]:-rotate-90"></i>
                            </div>
                            <p class="p-style questions__answer opacity-0 invisible transition-opacity duration-100 ease-in-out [&.active]:opacity-100 [&.active]:visible">With lots of unique blocks, you can easily
                                build a page
                                without coding. Build your next landing page. Integer ut Oberyn massa. Sed feugiat vitae
                                turpis a porta. Aliquam sagittis interdum Melisandre.</p>
                        </div>
                        <div class="questions__item [&.active]:h-fit [&.active]:gap-6">
                            <div class="questions__ask flex justify-between items-center w-full">
                                <p class="text-lg font-bold">Does it work with WordPress?</p>
                                <i class="icon-arrow_right rightArrow cursor-pointer transition-transform duration-200 ease-in-out [&.active]:-rotate-90"></i>
                            </div>
                            <p class="p-style questions__answer opacity-0 invisible transition-opacity duration-100 ease-in-out [&.active]:opacity-100 [&.active]:visible">With lots of unique blocks, you can easily build a page
                                without coding. Build your next landing page. Integer ut Oberyn massa. Sed feugiat vitae
                                turpis a porta. Aliquam sagittis interdum Melisandre.</p>
                        </div>
                        <div class="questions__item [&.active]:h-fit [&.active]:gap-6">
                            <div class="questions__ask flex justify-between items-center w-full">
                                <p class="text-lg font-bold">Do I get free updates?</p>
                                <i class="icon-arrow_right rightArrow cursor-pointer transition-transform duration-200 ease-in-out [&.active]:-rotate-90"></i>
                            </div>
                            <p class="p-style questions__answer opacity-0 invisible transition-opacity duration-100 ease-in-out [&.active]:opacity-100 [&.active]:visible">With lots of unique blocks, you can easily build a page
                                without coding. Build your next landing page. Integer ut Oberyn massa. Sed feugiat vitae
                                turpis a porta. Aliquam sagittis interdum Melisandre.</p>
                        </div>
                        <div class="questions__item [&.active]:h-fit [&.active]:gap-6">
                            <div class="questions__ask flex justify-between items-center w-full">
                                <p class="text-lg font-bold">Do I get free updates?</p>
                                <i class="icon-arrow_right rightArrow cursor-pointer transition-transform duration-200 ease-in-out group-[&.active]:-rotate-90"></i>
                            </div>
                            <p class="p-style questions__answer opacity-0 invisible transition-opacity duration-100 ease-in-out [&.active]:opacity-100 [&.active]:visible">With lots of unique blocks, you can easily build a page
                                without coding. Build your next landing page. Integer ut Oberyn massa. Sed feugiat vitae
                                turpis a porta. Aliquam sagittis interdum Melisandre.</p>
                        </div>
                    </div>
                    <div class="questions__link col-span-12 lg:col-span-8 lg:col-start-3" data-aos="fade" data-aos-delay="100">
                        <p class="text-lg flex flex-col justify-center items-center sm:flex-row sm:gap-2">Haven't got your answer? <a href="./contact.php" class="!text-primary-blue">Contact our support now</a>
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'components/footer.php' ?>
        <?php viteEntry('src/js/pricing.js'); ?>
        <?php viteEntry('src/js/aos.js'); ?>
    </main>
</body>

</html>