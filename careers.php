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
                <h1 class="font-bold mb-9">Join at Grayic</h1>
                <p class="p-style">By accessing and placing an order with UXTheme, you confirm that you are in agreement
                    with and bound by the terms and conditions</p>
            </div>
        </div>
    </section>
    <section class="previewVideo flex justify-center items-center relative overflow-hidden !pt-0 !pb-0 min-h-[30vh] bg-black/35 sm:min-h-[50vh] lg:min-h-[100vh]" id="video">
      <div class="previewVideo__content content container flex flex-col justify-center items-center text-general-white text-center p-4 transition-opacity duration-300 ease-in-out [&.active]:opacity-0 [&.active]:invisible" data-aos="fade" data-aos-delay="100">
        <button class="play-btn !rounded-full outline-0 flex flex-col justify-center items-center p-2 mb-2 cursor-pointer transition-all duration-200 ease-in-out bg-primary-blue [&:hover]:bg-general-white [&:hover>i]:text-primary-blue lg:p-4"><i class="icon-play text-general-white border-0 fz-xs"></i></button>
        </div>
      </div>
      <video class="previewVideo__video-bg video-bg absolute top-0 left-0 min-w-full min-h-full -z-10" muted>
         <source src="./src/assets/meeting.webm" type="video/webm">
      </video>
    </section>
    <section class="benefits container mx-auto py-4">
        <div class="grid grid-cols-12">
        <div class="benefits__title col-span-12 lg:col-span-6 lg:col-start-4 text-center mb-11 lg:mb-[90px]" data-aos="fade" data-aos-delay="100">
            <h2 class="mb-7">Why you should join us?</h2>
            <p class="p-style">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.</p>
        </div>
        <div class="benefits__cards col-span-12 flex flex-col items-center justify-center gap-[50px] [&:last-child]:mt-[50px] [&>div]:flex [&>div]:items-start [&>div]:justify-center [&>div]:gap-1 [&>div>i]:text-[30px] md:flex-row md:items-start lg:justify-between lg:gap-0" data-aos="fade" data-aos-delay="150">
            <div class="benefits__item">
                <i class="icon-bubbles" style="color: #416FF4"></i>
                <div class="benefits__info max-w-[260px]">
                    <h5 class="text-lg mb-4 font-bold" >Personal growth</h5>
                    <p class="p-style">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
            <div class="benefits__item">
                <i class="icon-dollarcircle" style="color: #2BD67B"></i>
                <div class="benefits__info max-w-[260px]">
                    <h5 class="text-lg mb-4 font-bold" >Competitive salary</h5>
                    <p class="p-style">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
            <div class="benefits__item">
                <i class="icon-user" style="color: #F7E36D"></i>
                <div class="benefits__info max-w-[260px]">
                    <h5 class="text-lg mb-4 font-bold" >Casual dress code</h5>
                    <p class="p-style">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
        </div>
        <div class="benefits__cards col-span-12 flex flex-col items-center justify-center gap-[50px] [&:last-child]:mt-[50px] [&>div]:flex [&>div]:items-start [&>div]:justify-center gap-1 [&>div>i]:text-[30px] md:flex-row md:items-start lg:justify-between lg:gap-0" data-aos="fade" data-aos-delay="200">
            <div class="benefits__item">
                <i class="icon-timer" style="color: #F7776D"></i>
                <div class="benefits__info max-w-[260px]">
                    <h5 class="text-lg mb-4 font-bold" >Unlimited time off</h5>
                    <p class="p-style">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
            <div class="benefits__item">
                <i class="icon-bonus" style="color: #CB41F4"></i>
                <div class="benefits__info max-w-[260px]">
                    <h5 class="text-lg mb-4 font-bold" >Yearly bonuses</h5>
                    <p class="p-style">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
            <div class="benefits__item">
                <i class="icon-earth" style="color: #416FF4"></i>
                <div class="benefits__info max-w-[260px]">
                    <h5 class="text-lg mb-4 font-bold" >Global community</h5>
                    <p class="p-style">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="grey-bg">
    <section class="openJobs container mx-auto px-4">
        <div class="grid grid-cols-12">
            <div class="openJobs__title col-span-12 text-center mb-20" data-aos="fade" data-aos-delay="100">
                <h2>Current job openings</h2>
            </div>
            <div class="openJobs__cards col-span-12 flex flex-col items-start justify-center gap-4 [&>div]:flex [&>div]:items-center [&>div]:justify-between [&>div]:bg-general-white [&>div]:border-0 [&>div]:outline-0 [&>div]:br-2 [&>div]:py-[32px] [&>div]:pr-[40px] [&>div]:pl-[50px] [&>div]:w-full">
                <div class="openJobs__item" data-aos="fade" data-aos-delay="150">
                    <div class="openJobs__info">
                        <h5 class="text-lg">Account Manager</h5>
                        <p class="p-style">Full Time, New York</p>
                    </div><a class="transition-colors duration-200 ease-in-out [&:hover>i]:text-primary-blue" href="./job/accountManager.php">
                    <i class="icon-arrow_right text-[#7d818d]"></i></a>
                </div>
                <div class="openJobs__item" data-aos="fade" data-aos-delay="200">
                    <div class="openJobs__info">
                        <h5 class="text-lg">Full Stack Developer</h5>
                        <p class="p-style">Full Time, Remote</p>
                    </div><a class="transition-colors duration-200 ease-in-out [&:hover>i]:text-primary-blue" href="./job/frontend.php">
                    <i class="icon-arrow_right text-[#7d818d]"></i></a>
                </div>
                <div class="openJobs__item" data-aos="fade" data-aos-delay="250">
                    <div class="openJobs__info">
                        <h5 class="text-lg">Senior Project Manager</h5>
                        <p class="p-style">Full Time, New York</p>
                    </div><a class="transition-colors duration-200 ease-in-out [&:hover>i]:text-primary-blue" href="./job/projectManager.php">
                    <i class="icon-arrow_right text-[#7d818d]"></i></a>
                </div>
                <div class="openJobs__item" data-aos="fade" data-aos-delay="300">
                    <div class="openJobs__info">
                        <h5 class="text-lg">UX Designer</h5>
                        <p class="p-style">Full Time, Remote</p>
                    </div><a class="transition-colors duration-200 ease-in-out [&:hover>i]:text-primary-blue" href="./job/uxDesigner.php">
                    <i class="icon-arrow_right text-[#7d818d]"></i></a>
                </div>
                <div class="openJobs__item" data-aos="fade" data-aos-delay="350">
                    <div class="openJobs__info">
                        <h5 class="text-lg">Software Engineer</h5>
                        <p class="p-style">Full Time, Remote</p>
                    </div><a class="transition-colors duration-200 ease-in-out [&:hover>i]:text-primary-blue" href="./job/softwareEngineer.php">
                    <i class="icon-arrow_right text-[#7d818d]"></i></a>
                </div>
            </div>
        </div>
    </section>
    </div>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/aos.js'); ?>
    <?php viteEntry('src/js/video.js'); ?>
</body>
</html>