<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
<?php include 'components/head.php'?>
</head>
<body>
    <?php include 'components/header.php' ?>
    <section class="careerHero container mx-auto px-4">
        <div class="grid grid-cols-12">
            <div class="careerHero__title col-span-12 lg:col-span-6 lg:col-start-4 text-center" data-aos="fade" data-aos-delay="100">
                <h1 class="font-bold mb-9"></h1>
                <p class="p-style"></p>
            </div>
        </div>
    </section>
    <section class="previewVideo flex justify-center items-center relative overflow-hidden !pt-0 !pb-0 min-h-[30vh] bg-black/35 sm:min-h-[50vh] lg:min-h-[100vh]" id="video">
      <div class="previewVideo__content content container flex flex-col justify-center items-center text-general-white text-center p-4 transition-opacity duration-300 ease-in-out [&.active]:opacity-0 [&.active]:invisible" data-aos="fade" data-aos-delay="100">
        <button class="play-btn !rounded-full outline-0 flex flex-col justify-center items-center p-2 mb-2 cursor-pointer transition-all duration-200 ease-in-out bg-primary-blue [&:hover]:bg-general-white [&:hover>i]:text-primary-blue lg:p-4"><i class="icon-play text-general-white border-0 fz-xs"></i></button>
      </div>
      <video class="previewVideo__video-bg video-bg absolute top-0 left-0 min-w-full min-h-full -z-10" muted>
         <source src="" type="video/webm">
      </video>
    </section>
    <section class="benefits container mx-auto py-4">
        <div class="grid grid-cols-12">
        <div class="benefits__title col-span-12 lg:col-span-6 lg:col-start-4 text-center mb-11 lg:mb-[90px]" data-aos="fade" data-aos-delay="100">
            <h2 class="mb-7"></h2>
            <p class="p-style"></p>
        </div>
        <div class="benefits__cards col-span-12 flex flex-col items-center justify-center gap-[50px] [&:last-child]:mt-[50px] [&>div]:flex [&>div]:items-start [&>div]:justify-center [&>div]:gap-1 [&>div>i]:text-[30px] md:flex-row md:items-start lg:justify-between lg:gap-0" data-aos="fade" data-aos-delay="150">
            <div class="benefits__item">
                <i class=""></i>
                <div class="benefits__info max-w-[260px]">
                    <h5 class="text-lg mb-4 font-bold"></h5>
                    <p class="p-style"></p>
                </div>
            </div>
        </div>
        <div class="benefits__cards col-span-12 flex flex-col items-center justify-center gap-[50px] [&:last-child]:mt-[50px] [&>div]:flex [&>div]:items-start [&>div]:justify-center gap-1 [&>div>i]:text-[30px] md:flex-row md:items-start lg:justify-between lg:gap-0" data-aos="fade" data-aos-delay="200">
            <div class="benefits__item">
                <i class=""></i>
                <div class="benefits__info max-w-[260px]">
                    <h5 class="text-lg mb-4 font-bold"></h5>
                    <p class="p-style"></p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="grey-bg">
    <section class="openJobs container mx-auto px-4">
        <div class="grid grid-cols-12">
            <div class="openJobs__title col-span-12 text-center mb-20" data-aos="fade" data-aos-delay="100">
                <h2></h2>
            </div>
            <div class="openJobs__cards col-span-12 flex flex-col items-start justify-center gap-4 [&>div]:flex [&>div]:items-center [&>div]:justify-between [&>div]:bg-general-white [&>div]:border-0 [&>div]:outline-0 [&>div]:br-2 [&>div]:py-[32px] [&>div]:pr-[40px] [&>div]:pl-[50px] [&>div]:w-full">
                <div class="openJobs__item" data-aos="fade" data-aos-delay="150">
                    <div class="openJobs__info">
                        <h5 class="text-lg"></h5>
                        <p class="p-style"></p>
                    </div><a class="transition-colors duration-200 ease-in-out [&:hover>i]:text-primary-blue" href="">
                    <i class="icon-arrow_right text-[#7d818d]"></i></a>
                </div>
            </div>
        </div>
    </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/displays/displayCareer.js'); ?>
    <?php viteEntry('src/js/aos.js'); ?>
    <?php viteEntry('src/js/video.js'); ?>
</body>
</html>