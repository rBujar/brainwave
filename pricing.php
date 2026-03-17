<?php require_once './vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php viteClient(); ?>
    <?php viteEntry('src/css/style.scss'); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo viteAsset('src/assets/favicon.ico'); ?>" />
    <title>Brainwave</title>
</head>
<body>
    <main>
        <?php include './components/header.php' ?>
        <div class="grey-bg">
            <section class="pricing container">
                <div class="row">
                    <div class="pricing__title col-12 col-md-8 offset-md-2">
                        <h1 class="text-bold">Pricing & Plans</h1>
                        <p class="text-md">With lots of unique blocks, you can easily build a page without coding. Build
                            your next consultancy website within few minutes.</p>
                    </div>
                    <div class="pricing__cards col-12">
                        <div class="pricing__item">
                            <div class="pricing__value">
                                <p class="text-tiny text-bold">Starter</p>
                                <h1 class="text-bold">$19 <span class="text-md text-regular">/ mo</span></h1>
                            </div>
                            <ul class="pricing__features">
                                <li>
                                    <p class="text-md">Upto 100 Team Members</p>
                                </li>
                                <li>
                                    <p class="text-md">100 GB Cloud Storage</p>
                                </li>
                                <li>
                                    <p class="text-md">Unlimited Meetings</p>
                                </li>
                                <li>
                                    <p class="text-md">Premium Support</p>
                                </li>
                            </ul>
                            <button class="pricing__button pricing__button--black">Get started now</button>
                        </div>
                        <div class="pricing__item">
                            <div class="pricing__value">
                                <p class="text-tiny text-bold">Unlimited</p>
                                <h1 class="text-bold">$99 <span class="text-md text-regular">/ mo</span></h1>
                            </div>
                            <ul class="pricing__features">
                                <li>
                                    <p class="text-md">Unlimited Team Members</p>
                                </li>
                                <li>
                                    <p class="text-md">Unlimited Cloud Storage</p>
                                </li>
                                <li>
                                    <p class="text-md">Unlimited Meetings</p>
                                </li>
                                <li>
                                    <p class="text-md">Premium Support</p>
                                </li>
                            </ul>
                            <button class="pricing__button pricing__button--red">Get started now</button>
                        </div>
                        <div class="pricing__item pricing__item--blue">
                            <div class="pricing__value">
                                <p class="text-tiny text-bold">Enterprise</p>
                                <span class="text-md">Advanced features for large teams with complex projects.</p>
                            </div>
                            <ul class="pricing__features">
                                <li>
                                    <p class="text-md">Unlimited Team Members</p>
                                </li>
                                <li>
                                    <p class="text-md">5TB Cloud Storage</p>
                                </li>
                                <li>
                                    <p class="text-md">Unlimited Meetings</p>
                                </li>
                                <li>
                                    <p class="text-md">Premium Support</p>
                                </li>
                            </ul>
                            <button class="pricing__button pricing__button--green">Contact Sales</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="questions container">
                <div class="row">
                    <div class="questions__title col-8 offset-2">
                        <h2 class="text-bold">Frequently Asked Questions</h1>
                            <p class="text-md">With lots of unique blocks, you can easily build a page without coding.
                                Build your next consultancy website within few minutes.</p>
                    </div>
                    <div class="questions__cards col-12 col-lg-8 offset-lg-2">
                        <div class="questions__item">
                            <div class="questions__ask">
                                <p class="text-md text-bold">Can I use Albino for my clients?</p>
                                <i class="icon-arrow_right rightArrow"></i>
                            </div>
                            <p class="text-md questions__answer">With lots of unique blocks, you can easily build a page
                                without coding. Build your next landing page. Integer ut Oberyn massa. Sed feugiat vitae
                                turpis a porta. Aliquam sagittis interdum Melisandre.</p>
                        </div>
                        <div class="questions__item">
                            <div class="questions__ask">
                                <p class="text-md text-bold">Does it work with WordPress?</p>
                                <i class="icon-arrow_right rightArrow"></i>
                            </div>
                            <p class="text-md questions__answer">With lots of unique blocks, you can easily build a page
                                without coding. Build your next landing page. Integer ut Oberyn massa. Sed feugiat vitae
                                turpis a porta. Aliquam sagittis interdum Melisandre.</p>
                        </div>
                        <div class="questions__item">
                            <div class="questions__ask">
                                <p class="text-md text-bold">Do I get free updates?</p>
                                <i class="icon-arrow_right rightArrow"></i>
                            </div>
                            <p class="text-md questions__answer">With lots of unique blocks, you can easily build a page
                                without coding. Build your next landing page. Integer ut Oberyn massa. Sed feugiat vitae
                                turpis a porta. Aliquam sagittis interdum Melisandre.</p>
                        </div>
                        <div class="questions__item">
                            <div class="questions__ask">
                                <p class="text-md text-bold">Do I get free updates?</p>
                                <i class="icon-arrow_right rightArrow"></i>
                            </div>
                            <p class="text-md questions__answer">With lots of unique blocks, you can easily build a page
                                without coding. Build your next landing page. Integer ut Oberyn massa. Sed feugiat vitae
                                turpis a porta. Aliquam sagittis interdum Melisandre.</p>
                        </div>
                    </div>
                    <div class="questions__link col-12 col-lg-8 offset-lg-2">
                        <p class="text-md">Haven't got your answer? <a href="#">Contact our support now</a></p>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'components/footer.php' ?>
        <?php viteEntry('src/js/main.js'); ?>
    </main>
</body>
</html>