<?php require_once './vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
<?php include 'components/head.php'?>
</head>
<body>
    <main>
        <?php include './components/header.php' ?>
        <div class="grey-bg">
           <section class="contact container mx-auto px-4">
            <div class="grid grid-cols-12">
                <div class="contact__title col-span-12 md:col-span-6 md:col-start-4 text-center mb-[60px] xl:mb-[100px]" data-aos="fade" data-aos-delay="100">
                    <h1 class="font-bold mb-5 lg:mb-9 xl:mb-[45px]">Contact us</h1>
                    <p class="p-style">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.</p>
                </div>
                <div class="contact__content col-span-12 lg:col-span-11 flex flex-col items-start justify-center gap-[30px] mb-[50px] [&>div]:flex [&>div]:items-start [&>div]:justify-center [&>div]:gap-6 [&>div>i]:text-primary-blue [&>div>i]:border-0 [&>div>i]:rounded-full [&>div>i]:bg-general-white [&>div>i]:text-[20px] [&>div>i]:p-2 lg:flex-row lg:items-start lg:justify-between lg:gap-[65px] lg:[&>div>i]:text-[16px] lg:[&>div>i]:p-1 xl:[&>div>i]:text-[20px] xl:[&>div>i]:p-2" data-aos="fade" data-aos-delay="150">
                    <div class="contact__card">
                        <i class="icon-phone"></i>
                        <div class="contact__info flex flex-col items-start justify-start">
                            <p class="text-xl font-bold mb-4">Call us</p>
                            <a href="tel:19403942948" class="p-style">
                                +1-940-394-2948</a>
                            <a href="tel:+13893853807" class="p-style">+1-389-385-3807</a>
                        </div>
                    </div>
                    <div class="contact__card">
                        <i class="icon-mail"></i>
                        <div class="contact__info flex flex-col items-start justify-start">
                            <p class="text-xl font-bold mb-4">Call us</p>
                            <a href="mail:support@brainwave.io" class="p-style">
                                mail:support@brainwave.io8</a>
                            <a href="mail:contact@brainwave.io" class="p-style">contact@brainwave.io</a>
                        </div>
                    </div>
                    <div class="contact__card">
                        <i class="icon-location"></i>
                        <div class="contact__info flex flex-col items-start justify-start">
                            <p class="text-xl font-bold mb-4">Visit us</p>
                            <a href="https://share.google/hjtBs7tkqhIGg9VRC" class="p-style">
                                34 Madison Street,
                                NY, USA 10005</a>
                        </div>
                    </div>
                </div>
                <div class="contact__formWrapper col-span-12 border-0 rounded-[10px] bg-general-white p-6 lg:pt-[45px] lg:pr-[40px] lg:pb-[50px] lg:pl:[45px]" data-aos="fade" data-aos-delay="200">
                    <form class="contact__form flex flex-col items-center justify-center gap-7 [&>div]:flex [&>div]:items-start [&>div]:justify-start [&>div]:w-full [&>div]:gap-7 md:items-start" id="form">
                        <div class="contact__fields">
                            <div class="contact__item w-full relative [&>label]:capitalize [&>label]:block [&>label]:mb-1">
                            <label for="fname" class="text-md font-bold" >Your Name</label>
                            <input class="w-full max-w-[495px] rounded-[8px] border border-[rgba(160,160,160,0.2)] p-[10px] outline-none placeholder:p-[10px] placeholder:text-[14px] placeholder:opacity-70" type="text" id="fname" name="name" placeholder="i.e. John Doe">
                            <span class="error nameError"></span>
                            </div>
                            <div class="contact__item w-full relative [&>label]:capitalize [&>label]:block [&>label]:mb-1">
                            <label for="email" class="text-md font-bold">Email</label>
                            <input class="w-full max-w-[495px] rounded-[8px] border border-[rgba(160,160,160,0.2)] p-[10px] outline-none placeholder:p-[10px] placeholder:text-[14px] placeholder:opacity-70" type="email" id="email" name="email" placeholder="i.e. john@mail.com">
                            <span class="error emailError"></span>
                            </div>
                        </div>
                        <div class="contact__fields">
                            <div class="contact__item w-full relative [&>label]:capitalize [&>label]:block [&>label]:mb-1">
                            <label for="phone" class="text-md font-bold">Phone Number</label>
                            <input class="w-full max-w-[495px] rounded-[8px] border border-[rgba(160,160,160,0.2)] p-[10px] outline-none placeholder:p-[10px] placeholder:text-[14px] placeholder:opacity-70" type="tel" id="phone" name="phone" placeholder="i.e. +1-234-567-7890">
                            <span class="error phoneError"></span>
                            </div>
                            <div class="contact__item w-full relative [&>label]:capitalize [&>label]:block [&>label]:mb-1">
                            <label for="subject" class="text-md font-bold">Subject</label>
                            <input class="w-full max-w-[495px] rounded-[8px] border border-[rgba(160,160,160,0.2)] p-[10px] outline-none placeholder:p-[10px] placeholder:text-[14px] placeholder:opacity-70" type="text" id="subject" name="subject" placeholder="i.e. I need a help">
                            <span class="error subjectError"></span>
                            </div>
                        </div>
                        <div class="contact__fields">
                            <div class="contact__item w-full relative [&>label]:capitalize [&>label]:block [&>label]:mb-1">
                            <label for="message" class="text-md font-bold">Your Message</label>
                            <textarea class="w-full rounded-[8px] border border-[rgba(160,160,160,0.2)] p-[10px] outline-none h-[150px] placeholder:p-[10px] placeholder:text-[14px] placeholder:opacity-70" name="message" id="message" placeholder="Type your message" ></textarea>
                            <span class="error messageError"></span>
                            </div>
                        </div>
                        <button class="blue-btn contact__button max-w-[215px] py-4 px-[90px]" id="submit" type="submit">Send</button>
                         <input type="hidden" name="access_key" value="345091b9-6a48-43b9-af01-b6c53d4e1899">
                    </form>
                </div>
            </div>
           </section>
        </div>
        <?php include 'components/footer.php' ?>
        <?php viteEntry('src/js/contact.js'); ?>
        <?php viteEntry('src/js/aos.js'); ?>
    </main>
</body>
</html>