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
          <p class="text-md text-regular">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.</p>
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
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
    </body>
</html>