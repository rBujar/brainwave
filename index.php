<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
  <head>
<?php include 'components/head.php'?>
</head>
  <body>
    <?php include 'components/header.php' ?>
    <section class="hero container mx-auto px-4 !pb-0 xl:px-10">
      <div class="grid grid-cols-12">
      <div class="hero__content col-span-12 lg:col-span-5 mb-[50px] flex flex-col justify-center items-center lg:items-start" data-aos="fade" data-aos-delay="100">
        <div class="hero__title text-center mb-5 md:mb-7 lg:text-left">
          <h2 class="md:text-[36px]/[48px] xl:[48px]/[58px] font-bold mb-4">Make your business powerful with Shade.</h2>
          <p class="p-style">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.</p>
        </div>
        <div class="hero__button flex flex-col justify-center items-center lg:items-start">
          <button class="blue-btn max-w-[200px] py-5 px-8 mb-6 md:mb-5">get a free quote</button>
          <div class="hero__link flex justify-center items-center">
            <i class="icon-play text-general-grey border-[1px] border-solid border-general-grey outline-0 rounded-[50%] p-1 text-xs"></i>
            <a href="#video" class="uppercase transition-colors duration-200 ml-2 ease-in-out [&:hover]:text-primary-blue">watch how we can help</a>
          </div>
        </div>
      </div>
      <div class="hero__img col-span-8 col-start-3 lg:col-span-6 lg:col-start-8 xl:col-start-9" data-aos="fade" data-aos-delay="150">
        <img src="/src/assets/hero.png" alt="hero-image">
      </div>
      </div>
    </section>
    <?php include 'components/video-banner.php'?>
        <section class="preview container mx-auto px-4 xl:px-10">
          <div class="grid grid-cols-12">
            <div class="preview__title col-span-12 md:col-span-8 md:col-start-3 lg:col-span-4 lg:col-start-1 flex flex-col justify-center items-center text-center gap-6 mb-[50px] lg:items-start lg:text-left lg:mb-0" data-aos="fade" data-aos-delay="100">
                <h4 class="font-bold">Experienced experts are giving advices.</h4>
                <p class="p-style">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
                <a href="#"><button class="blue-btn py-3 px-7 sm:mt-2">learn how we work</button></a>
            </div>
            <div class="preview__content col-span-12 lg:col-span-8 flex flex-col justify-center items-center sm:flex-row sm:gap-4 xl:gap-20" data-aos="fade" data-aos-delay="150">
              <div class="preview__img mb-[50px] sm:mb-0">
                <img src="./src/assets/preview.jpg" alt="preview-img">
              </div>
              <div class="preview__stats text-left xl:max-w-[320px]">
                <div class="preview__item">
                  <h4 class="font-bold">1M+</h4>
                  <p class="p-style mt-2 mb-7">Customers visit Albino every month to get their service done.</p>
                </div>
                <div class="preview__item">
                  <h4 class="font-bold">92%</h4>
                  <p class="p-style mt-2 mb-7">Satisfaction rate comes from our awesome customers.</p>
                </div>
                <div class="preview__item">
                  <h4 class="font-bold">49/5.0</h4>
                  <p class="p-style">Average customer ratings we have got all over internet.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
    <div class="grey-bg">
      <section class="services container mx-auto px-4 xl:px-10">
        <div class="grid grid-cols-12">
          <div class="services__title col-span-10 col-start-2 md:col-span-8 md:col-start-3  xl:col-col-6 text-center mb-[50px]" data-aos="fade" data-aos-delay="100">
            <h3 class="font-bold mb-4">Services we offer for you</h3>
            <p class="p-style">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
          </div>
          <div class="services__cards col-span-10 col-start-2 md:col-span-8 md:col-start-3  lg:col-span-12 lg:col-start-1 flex flex-col items-center justify-center gap-7 [&>div]:flex [&>div]:flex-col [&>div]:items-center [&>div]:justify-center [&>div]:text-center [&>div]:gap-5 lg:flex-row lg:justify-between lg:gap-0 lg:[&>div]:items-start lg:[&>div]:text-left lg:[&>div]:max-w-[300px] xl:[&>div]:max-w-[350px]" data-aos="fade" data-aos-delay="150">
          <div class="services__item">
            <h5 class="text-xl font-bold">Digital Marketing</h5>
            <img src="./src/assets/service-1.jpg" alt="service-1">
            <p class="p-style">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
            <div class="services__link flex items-center justify-center gap-1 text-primary-blue mb-2 transition-colors duration-200 ease-in-out [&:hover]:text-primary-hoverBlue">
              <a href="#" class="text-lg font-bold">Learn more</a>
              <i class="icon-arrow_right"></i>
            </div>
          </div>
          <div class="services__item">
            <h5 class="text-xl font-bold">Business Growth</h5>
            <img src="./src/assets/service-2.jpg" alt="service-1">
            <p class="p-style">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
            <div class="services__link flex items-center justify-center gap-1 text-primary-blue mb-2 transition-colors duration-200 ease-in-out [&:hover]:text-primary-hoverBlue">
              <a href="#" class="text-lg font-bold">Learn more</a>
              <i class="icon-arrow_right"></i>
            </div>
          </div>
          <div class="services__item">
            <h5 class="text-xl font-bold">Content Marketing</h5>
            <img src="./src/assets/service-3.jpg" alt="services-2">
            <p class="p-style">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
            <div class="services__link flex items-center justify-center gap-1 text-primary-blue mb-2 transition-colors duration-200 ease-in-out [&:hover]:text-primary-hoverBlue">
              <a href="#" class="text-lg font-bold">Learn more</a>
              <i class="icon-arrow_right"></i>
            </div>
          </div>
          </div>
        </div>
      </section>
    </div>
    <section class="reasons container mx-auto px-4 xl:px-10 lg:!pb-0">
      <div class="grid grid-cols-12">
        <img class="col-span-8 col-start-3 lg:col-span-5 lg:col-start-1" src="./src/assets/reason-person.png" alt="reason-img" data-aos="fade" data-aos-delay="100">
        <div class="reasons__content col-span-12 md:col-span-8 md:col-start-3 lg:col-span-6 xl:col-start-7 flex flex-col justify-center items-start gap-7 lg:items-start" data-aos="fade" data-aos-delay="150">
          <div class="reasons__title text-center mt-7 lg:text-left lg:mt-0">
            <h3 class="font-bold mb-5">Reasons you should choose us to grow today.</h3>
            <p class="p-style">We share common trends and strategies for improving your rental income and making sure you stay in high demand.</p>
          </div>
          <div class="reasons__features flex flex-col justify-center gap-7 [&>div]:flex [&>div]:justify-center [&>div]:justify-start [&>div]:gap-4 [&>div>i]:text-primary-blue md:flex-row md:justify-between md:flex-wrap md:[&>div]:justify-start md:[&>div]:min-w-[220px]">
            <div class="reasons__item">
              <i class="icon-check"></i>
              <p class="text-lg font-bold">Fully Responsive</p>
            </div>
            <div class="reasons__item">
              <i class="icon-check"></i>
              <p class="text-lg font-bold">Beautiful Layouts</p>
            </div>
            <div class="reasons__item">
              <i class="icon-check"></i>
              <p class="text-lg font-bold">Easy to Edit</p>
            </div>
            <div class="reasons__item">
              <i class="icon-check"></i>
              <p class="text-lg font-bold">Google Font Included</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="previewVideo flex justify-center items-center relative overflow-hidden !pt-0 !pb-0 min-h-[30vh] bg-black/35 sm:min-h-[50vh] lg:min-h-[70vh]" id="video">
      <div class="previewVideo__content content container flex flex-col justify-center items-center text-general-white text-center p-4 transition-opacity duration-300 ease-in-out [&.active]:opacity-0 [&.active]:invisible" data-aos="fade" data-aos-delay="100">
        <button class="play-btn !rounded-full outline-0 flex flex-col justify-center items-center p-2 mb-2 cursor-pointer transition-all duration-200 ease-in-out [&:hover]:bg-primary-blue [&:hover>i]:text-general-white bg-general-white lg:p-4"><i class="icon-play text-primary-blue border-0 fz-xs"></i></button>
        <div class="previewVideo__title">
        <h3 class="mb-1 lg:mb-2">How do we help you to grow?</h3>
        <p class="text-lg max-w-[590px]">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
        </div>
      </div>
      <video class="previewVideo__video-bg video-bg absolute top-0 left-0 min-w-full min-h-full -z-10" muted>
        <source src="./src/assets/grow-video.webm" type="video/webm"> 
      </video>
    </section>
    <section class="reviews container mx-auto px-4 xl:px-10">
      <div class="grid grid-cols-12">
        <div class="reviews__title col-span-12 lg:col-span-8 lg:col-start-3 text-center mb-[50px]" data-aos="fade" data-aos-delay="100">
          <h3 class="font-bold mb-4">What people say about us</h3>
          <p class="p-style">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
        </div>
        <div class="reviews__cards col-span-12 flex flex-col items-center justify-center gap-7 [&>div]:flex [&>div]:flex-col [&>div]:items-start [&>div]:justify-center [&>div]:border [&>div]:border-[#e7e9ed] [&>div]:outline-0 [&>div]:rounded-[10px] [&>div]:pt-[32px] [&>div]:pr-[48px] [&>div]:pb-[30px] [&>div]:pl-[32px] [&>div]:gap-6 [&>div>img]:mb-6 [&>div]:w-[350px] lg:flex-row lg:items-start lg:[&>div]:h-[450px]" data-aos="fade" data-aos-delay="150">
          <div class="reviews__item">
            <img src="./src/assets/review1.png" alt="review-1">
            <p class="text-xl">
            With lots of unique blocks, you can easily build a page without coding. Build your next landing page.
            </p>
            <div class="reviews__name">
              <p class="text-lg font-bold">Isabella Chavez</p>
              <span class="text-lg">Graphic Designer</span>
            </div>
          </div>
          <div class="reviews__item">
            <img src="./src/assets/review2.png" alt="review-2">
            <p class="text-xl">
            “Simply the best. Better than all the rest. I'd recommend this product to beginners and advanced users.”
            </p>
            <div class="reviews__name">
              <p class="text-lg font-bold">Curtis Rhodes</p>
              <span class="text-lg">Digital Marketer</span>
            </div>
          </div>
          <div class="reviews__item">
            <img src="./src/assets/review3.png" alt="review-3">
            <p class="text-xl">
            “Must have book for all, who want to be Product Designer or Interaction Designer.”
            </p>
            <div class="reviews__name">
              <p class="text-lg font-bold">Lucas Mann</p>
              <span class="text-lg">Lucas Mann</span>
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