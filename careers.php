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
                <p class="text-md">By accessing and placing an order with UXTheme, you confirm that you are in agreement
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
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
</body>

</html>