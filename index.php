<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
  <head>
<?php include 'components/head.php'?>
</head>
  <body>
    <?php include 'components/header.php' ?>
    <section class="hero container">
      <div class="row">
      <div class="hero__content col-12 col-lg-5 offset-lg-1" data-aos="fade" data-aos-delay="100">
        <div class="hero__title">
          <h2>Make your business powerful with Shade.</h2>
          <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.</p>
        </div>
        <div class="hero__button">
          <button class="blue-btn">get a free quote</button>
          <div class="hero__link">
            <i class="icon-play"></i>
            <a href="#video" class="text-tiny text-bold">watch how we can help</a>
          </div>
        </div>
      </div>
      <div class="hero__img col-8 offset-2 col-lg-5 offset-lg-1 col-xl-5" data-aos="fade" data-aos-delay="150">
        <img src="/src/assets/hero.png" alt="hero-image">
      </div>
      </div>
    </section>
    <?php include 'components/video-banner.php'?>
        <section class="preview container">
          <div class="row">
            <div class="preview__title col-12 col-lg-4" data-aos="fade" data-aos-delay="100">
                <h4 class="text-bold">Experienced experts are giving advices.</h4>
                <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
                <a href="#"><button class="blue-btn">learn how we work</button></a>
            </div>
            <div class="preview__content col-12 col-lg-8" data-aos="fade" data-aos-delay="150">
              <div class="preview__img">
                <img src="./src/assets/preview.jpg" alt="preview-img">
              </div>
              <div class="preview__stats">
                <div class="preview__item">
                  <h4 class="text-bold">1M+</h4>
                  <p class="text-md text-faded">Customers visit Albino every month to get their service done.</p>
                </div>
                <div class="preview__item">
                  <h4 class="text-bold">92%</h4>
                  <p class="text-md text-faded">Satisfaction rate comes from our awesome customers.</p>
                </div>
                <div class="preview__item">
                  <h4 class="text-bold">49/5.0</h4>
                  <p class="text-md text-faded">Average customer ratings we have got all over internet.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
    <div class="grey-bg">
      <section class="services container">
        <div class="row">
          <div class="services__title col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3" data-aos="fade" data-aos-delay="100">
            <h3 class="text-bold">Services we offer for you</h3>
            <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
          </div>
          <div class="services__cards col-12 col-md-6 offset-md-3 col-lg-10 offset-lg-1" data-aos="fade" data-aos-delay="150">
          <div class="services__item">
            <h5 class="text-lg text-bold">Digital Marketing</h5>
            <img src="./src/assets/service-1.jpg" alt="service-1">
            <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
            <div class="services__link">
              <a href="#" class="text-md text-bold">Learn more</a>
              <i class="icon-arrow_right"></i>
            </div>
          </div>
          <div class="services__item">
            <h5 class="text-lg text-bold">Business Growth</h5>
            <img src="./src/assets/service-2.jpg" alt="service-1">
            <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
            <div class="services__link">
              <a href="#" class="text-md text-bold">Learn more</a>
              <i class="icon-arrow_right"></i>
            </div>
          </div>
          <div class="services__item">
            <h5 class="text-lg text-bold">Content Marketing</h5>
            <img src="./src/assets/service-3.jpg" alt="services-2">
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
    <section class="reasons container">
      <div class="row">
        <div class="reasons_img col-8 offset-2 col-lg-4 offset-lg-1" data-aos="fade" data-aos-delay="100">
          <img src="./src/assets/reason-person.png" alt="reason-img">
        </div>
        <div class="reasons__content col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-1 col-xl-5 offset-xl-2" data-aos="fade" data-aos-delay="150">
          <div class="reasons__title">
            <h3 class="text-bold">Reasons you should choose us to grow today.</h3>
            <p class="text-md text-faded">We share common trends and strategies for improving your rental income and making sure you stay in high demand.</p>
          </div>
          <div class="reasons__features">
            <div class="reasons__item">
              <i class="icon-check"></i>
              <p class="text-md text-bold">Fully Responsive</p>
            </div>
            <div class="reasons__item">
              <i class="icon-check"></i>
              <p class="text-md text-bold">Beautiful Layouts</p>
            </div>
            <div class="reasons__item">
              <i class="icon-check"></i>
              <p class="text-md text-bold">Easy to Edit</p>
            </div>
            <div class="reasons__item">
              <i class="icon-check"></i>
              <p class="text-md text-bold">Google Font Included</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="previewVideo" id="video">
      <div class="previewVideo__content content container" data-aos="fade" data-aos-delay="100">
        <button class="play-btn"><i class="icon-play"></i></button>
        <div class="previewVideo__title">
        <h3>How do we help you to grow?</h3>
        <p class="text-md">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
        </div>
      </div>
      <video class="previewVideo__video-bg video-bg" muted>
        <source src="./src/assets/grow-video.webm" type="video/webm"> 
      </video>
    </section>
    <section class="reviews container">
      <div class="row">
        <div class="reviews__title col-12 col-lg-8 offset-lg-2" data-aos="fade" data-aos-delay="100">
          <h3 class="text-bold">What people say about us</h3>
          <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
        </div>
        <div class="reviews__cards col-12" data-aos="fade" data-aos-delay="150">
          <div class="reviews__item">
            <img src="./src/assets/review1.png" alt="review-1">
            <p class="text-lg">
            With lots of unique blocks, you can easily build a page without coding. Build your next landing page.
            </p>
            <div class="reviews__name">
              <p class="text-lg text-bold">Isabella Chavez</p>
              <span class="text-sm">Graphic Designer</span>
            </div>
          </div>
          <div class="reviews__item">
            <img src="./src/assets/review2.png" alt="review-2">
            <p class="text-lg">
            “Simply the best. Better than all the rest. I'd recommend this product to beginners and advanced users.”
            </p>
            <div class="reviews__name">
              <p class="text-lg text-bold">Curtis Rhodes</p>
              <span class="text-sm">Digital Marketer</span>
            </div>
          </div>
          <div class="reviews__item">
            <img src="./src/assets/review3.png" alt="review-3">
            <p class="text-lg">
            “Must have book for all, who want to be Product Designer or Interaction Designer.”
            </p>
            <div class="reviews__name">
              <p class="text-lg text-bold">Lucas Mann</p>
              <span class="text-sm">Lucas Mann</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include 'components/quote.php' ?>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/video.js'); ?>
    <?php viteEntry('src/js/aos.js'); ?>
    </body>
</html>