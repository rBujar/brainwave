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
    <section class="hero container">
      <div class="row">
      <div class="hero__content col-12 col-lg-5 offset-lg-1">
        <div class="hero__title">
          <h2>Make your business powerful with Shade.</h2>
          <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.</p>
        </div>
        <div class="hero__button">
          <button class="blue-btn">get a free quote</button>
          <div class="hero__link">
            <i class="icon-play"></i>
            <a href="#" class="text-tiny text-bold">watch how we can help</a>
          </div>
        </div>
      </div>
      <div class="hero__img col-8 offset-2 col-lg-5 offset-lg-1 col-xl-5">
        <img src="/src/assets/hero.png" alt="hero-image">
      </div>
      </div>
    </section>
    <?php include 'components/video-banner.php' ?>
        <section class="preview container">
          <div class="row">
            <div class="preview__title col-12 col-lg-4">
                <h4 class="text-bold">Experienced experts are giving advices.</h4>
                <p class="text-md">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
                <a href="#"><button class="blue-btn">learn how we work</button></a>
            </div>
            <div class="preview__content col-12 col-lg-8">
              <div class="preview__img">
                <img src="./src/assets/preview.svg" alt="preview-img">
              </div>
              <div class="preview__stats">
                <div class="preview__item">
                  <h4 class="text-bold">1M+</h4>
                  <p class="text-md">Customers visit Albino every month to get their service done.</p>
                </div>
                <div class="preview__item">
                  <h4 class="text-bold">92%</h4>
                  <p class="text-md">Satisfaction rate comes from our awesome customers.</p>
                </div>
                <div class="preview__item">
                  <h4 class="text-bold">49/5.0</h4>
                  <p class="text-md">Average customer ratings we have got all over internet.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
    <div class="grey-bg">
      <section class="services container">
        <div class="row">
          <div class="services__title col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
            <h3 class="text-bold">Services we offer for you</h3>
            <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
          </div>
          <div class="services__cards col-12 col-md-6 offset-md-3 col-lg-10 offset-lg-1">
          <div class="services__item">
            <h5 class="text-lg text-bold">Digital Marketing</h5>
            <img src="./src/assets/services1.svg" alt="services-1">
            <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
            <div class="services__link">
              <a href="#" class="text-md text-bold">Learn more</a>
              <i class="icon-arrow_right"></i>
            </div>
          </div>
          <div class="services__item">
            <h5 class="text-lg text-bold">Business Growth</h5>
            <img src="./src/assets/services2.svg" alt="services-1">
            <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
            <div class="services__link">
              <a href="#" class="text-md text-bold">Learn more</a>
              <i class="icon-arrow_right"></i>
            </div>
          </div>
          <div class="services__item">
            <h5 class="text-lg text-bold">Content Marketing</h5>
            <img src="./src/assets/services1.svg" alt="services-1">
            <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
            <div class="services__link">
              <a href="#" class="text-md text-bold">Learn more</a>
              <i class="icon-arrow_right"></i>
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