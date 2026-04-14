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
    <section class="careerHero container">
        <div class="row">
            <div class="careerHero__title col-12 col-lg-8 offset-lg-2">
                <h1>Join at Grayic</h1>
                <p class="text-md text-faded">By accessing and placing an order with UXTheme, you confirm that you are in agreement
                    with and bound by the terms and conditions</p>
            </div>
        </div>
        </div>
    </section>
    <div class="careerHero__video">
                <button class="play-btn"><i class="icon-play"></i></button>
                <video class="careerHero__video-bg" muted>
                    <source src="./src/assets/meeting.webm" type="video/webm"> Expand commentComment on line R83
                </video>
    </div>
    <section class="benefits container">
        <div class="row">
        <div class="benefits__title col-12 col-lg-8 offset-lg-2">
            <h2>Why you should join us?</h2>
            <p class="text-md text-faded">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.</p>
        </div>
        <div class="benefits__cards col-12">
            <div class="benefits__item">
                <i class="icon-bubbles" style="color: #416FF4"></i>
                <div class="benefits__info">
                    <h5 class="text-lg" >Personal growth</h5>
                    <p class="text-sm text-faded">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
            <div class="benefits__item">
                <i class="icon-dollarcircle" style="color: #2BD67B"></i>
                <div class="benefits__info">
                    <h5 class="text-lg" >Competitive salary</h5>
                    <p class="text-sm text-faded">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
            <div class="benefits__item">
                <i class="icon-user" style="color: #F7E36D"></i>
                <div class="benefits__info">
                    <h5 class="text-lg" >Casual dress code</h5>
                    <p class="text-sm text-faded">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
        </div>
        <div class="benefits__cards col-12">
            <div class="benefits__item">
                <i class="icon-timer" style="color: #F7776D"></i>
                <div class="benefits__info">
                    <h5 class="text-lg" >Unlimited time off</h5>
                    <p class="text-sm text-faded">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
            <div class="benefits__item">
                <i class="icon-bonus" style="color: #CB41F4"></i>
                <div class="benefits__info">
                    <h5 class="text-lg" >Yearly bonuses</h5>
                    <p class="text-sm text-faded">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
            <div class="benefits__item">
                <i class="icon-earth" style="color: #416FF4"></i>
                <div class="benefits__info">
                    <h5 class="text-lg" >Global community</h5>
                    <p class="text-sm text-faded">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="grey-bg">
    <section class="openJobs container">
        <div class="row">
            <div class="openJobs__title col-12">
                <h2>Current job openings</h2>
            </div>
            <div class="openJobs__cards col-12">
                <div class="openJobs__item">
                    <div class="openJobs__info">
                        <h5 class="text-lg">Account Manager</h5>
                        <p class="text-md text-faded">Full Time, New York</p>
                    </div><a href="#">
                    <i class="icon-arrow_right"></i></a>
                </div>
                <div class="openJobs__item">
                    <div class="openJobs__info">
                        <h5 class="text-lg">Full Stack Developer</h5>
                        <p class="text-md text-faded">Full Time, Remote</p>
                    </div><a href="#">
                    <i class="icon-arrow_right"></i></a>
                </div>
                <div class="openJobs__item">
                    <div class="openJobs__info">
                        <h5 class="text-lg">Senior Project Manager</h5>
                        <p class="text-md text-faded">Full Time, New York</p>
                    </div><a href="#">
                    <i class="icon-arrow_right"></i></a>
                </div>
                <div class="openJobs__item">
                    <div class="openJobs__info">
                        <h5 class="text-lg">UX Designer</h5>
                        <p class="text-md text-faded">Full Time, Remote</p>
                    </div><a href="#">
                    <i class="icon-arrow_right"></i></a>
                </div>
                <div class="openJobs__item">
                    <div class="openJobs__info">
                        <h5 class="text-lg">Software Engineer</h5>
                        <p class="text-md text-faded">Full Time, Remote</p>
                    </div><a href="#">
                    <i class="icon-arrow_right"></i></a>
                </div>
            </div>
        </div>
    </section>
    </div>
    <?php include 'components/footer.php' ?>
</body>

</html>