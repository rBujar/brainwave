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
           <section class="contact container">
            <div class="row">
                <div class="contact__title col-12" data-aos="fade" data-aos-delay="100">
                    <h1 class="text-bold">Contact us</h1>
                    <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.</p>
                </div>
                <div class="contact__content col-12 col-lg-11" data-aos="fade" data-aos-delay="150">
                    <div class="contact__card">
                        <i class="icon-phone"></i>
                        <div class="contact__info">
                            <p class="text-xl text-bold">Call us</p>
                            <a href="tel:19403942948" class="text-lg text-faded">
                                +1-940-394-2948</a>
                            <a href="tel:+13893853807" class="text-lg">+1-389-385-3807</a>
                        </div>
                    </div>
                    <div class="contact__card">
                        <i class="icon-mail"></i>
                        <div class="contact__info">
                            <p class="text-xl text-bold">Call us</p>
                            <a href="mail:support@brainwave.io" class="text-lg text-faded">
                                mail:support@brainwave.io8</a>
                            <a href="mail:contact@brainwave.io" class="text-lg">contact@brainwave.io</a>
                        </div>
                    </div>
                    <div class="contact__card">
                        <i class="icon-location"></i>
                        <div class="contact__info">
                            <p class="text-xl text-bold">Visit us</p>
                            <a href="https://share.google/hjtBs7tkqhIGg9VRC" class="text-lg text-faded">
                                34 Madison Street,
                                NY, USA 10005</a>
                        </div>
                    </div>
                </div>
                <div class="contact__formWrapper col-12" data-aos="fade" data-aos-delay="200">
                    <form class="contact__form" id="form">
                        <div class="contact__fields">
                            <div class="contact__item">
                            <label for="fname" class="text-xs text-bold" >Your Name</label>
                            <input type="text" id="fname" name="name" placeholder="i.e. John Doe">
                            <span class="error nameError"></span>
                            </div>
                            <div class="contact__item">
                            <label for="email" class="text-xs text-bold">Email</label>
                            <input type="email" id="email" name="email" placeholder="i.e. john@mail.com">
                            <span class="error emailError"></span>
                            </div>
                        </div>
                        <div class="contact__fields">
                            <div class="contact__item">
                            <label for="phone" class="text-xs text-bold">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="i.e. +1-234-567-7890">
                            <span class="error phoneError"></span>
                            </div>
                            <div class="contact__item">
                            <label for="subject" class="text-xs text-bold">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="i.e. I need a help">
                            <span class="error subjectError"></span>
                            </div>
                        </div>
                        <div class="contact__fields">
                            <div class="contact__item">
                            <label for="message" class="text-xs text-bold">Your Message</label>
                            <textarea name="message" id="message" placeholder="Type your message" ></textarea>
                            <span class="error messageError"></span>
                            </div>
                        </div>
                        <button class="blue-btn contact__button" id="submit" type="submit">Send</button>
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