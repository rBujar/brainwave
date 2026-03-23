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
    <!-- <?php include 'components/header.php' ?> -->
    <section class="terms container">
        <div class="row">
        <div class="terms__title col-12 col-lg-8 offset-lg-2">
            <h1>Terms & Conditions</h1>
            <p class="text-md">By accessing and placing an order with UXTheme, you confirm that you are in agreement
                with and bound by the terms and conditions</p>
        </div>
        <div class="terms__content col-12">
            <p class="text-md">
                By accessing and placing an order with UXTheme, you confirm that you are in agreement with and bound by
                the terms and conditions contained in the Terms Of Use outlined below. These terms apply to the entire
                website and any email or other type of communication between you and UXTheme. Under no circumstances
                shall UXTheme team be liable for any direct, indirect, special, incidental or consequential damages,
                including, but not limited to, loss of data or profit, arising out of the use, or the inability to use,
                the materials on this site, even if UXTheme team or an authorized representative has been advised of the
                possibility of such damages. If your use of materials from this site results in the need for servicing,
                repair or correction of equipment or data, you assume any costs thereof. UXTheme will not be responsible
                for any outcome that may occur during the course of usage of our resources.
            </p>
            <div class="terms__license">
            <h5 class="text-md text-bold">License</h5>
            <p class="text-md">By purchasing or downloading resource (“item” or “file”) you are being granted a license to use these files for specific uses under certain conditions. Ownership remains with UXTheme, and you are required to abide by the following licensing terms.</p>
            </div>
            <div class="terms__security">
                <h5 class="text-md text-bold">Security</h5>
                <ul class="terms__list">
                    <li><p class="text-md">You have rights for royalty free use of our resources for any or all of your personal.</p></li>
                    <li><p class="text-md">You are not required to attribute or link to UXTheme in any of projects.</p></li>
                    <li><p class="text-md">We reserve the rights to change prices and revise the resources usage policy in any moment.</p></li>
                </ul>
            </div>
            <div class="terms__embContent">
                <h5 class="text-md text-bold">Embedded content from other websites</h5>
                <p class="text-md">Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>
                <p class="text-md">These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>
            </div>
            <div class="terms__changes">
                <h5 class="text-md text-bold">Changes about terms</h5>
                <p class="text-md">If we change our terms of use we will post those changes on this page. Registered users will be sent an email that outlines changes made to the terms of use.</p>
            </div>

        </div>
        </div>
    </section>
    <!-- <?php include 'components/footer.php' ?> -->
    <?php viteEntry('src/js/main.js'); ?>
</body>

</html>