<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
<?php include 'components/head.php'?>
</head>
<body>
    <?php include 'components/header.php' ?>
    <section class="terms container mx-auto px-4">
        <div class="grid grid-cols-12">
            <div class="terms__title col-span-12 lg:col-span-6 lg:col-start-4 text-center mb-10">
                <h1 class="mb-9 lg:mb-11">Terms & Conditions</h1>
                <p class="p-style">By accessing and placing an order with UXTheme, you confirm that you are in agreement
                    with and bound by the terms and conditions</p>
            </div>
            <div class="terms__content col-span-12 lg:col-span-8 lg:col-start-3 flex flex-col items-start justify-start gap-11">
                <p class="p-style" data-aos="fade" data-aos-delay="100">
                    By accessing and placing an order with UXTheme, you confirm that you are in agreement with and bound
                    by
                    the terms and conditions contained in the Terms Of Use outlined below. These terms apply to the
                    entire
                    website and any email or other type of communication between you and UXTheme. Under no circumstances
                    shall UXTheme team be liable for any direct, indirect, special, incidental or consequential damages,
                    including, but not limited to, loss of data or profit, arising out of the use, or the inability to
                    use,
                    the materials on this site, even if UXTheme team or an authorized representative has been advised of
                    the
                    possibility of such damages. If your use of materials from this site results in the need for
                    servicing,
                    repair or correction of equipment or data, you assume any costs thereof. UXTheme will not be
                    responsible
                    for any outcome that may occur during the course of usage of our resources.
                </p>
                <div class="terms__license" data-aos="fade" data-aos-delay="100">
                    <h5 class="text-lg font-bold mb-5">License</h5>
                    <p class="p-style">By purchasing or downloading resource (“item” or “file”) you are being granted a
                        license to use these files for specific uses under certain conditions. Ownership remains with
                        UXTheme, and you are required to abide by the following licensing terms.</p>
                </div>
                <div class="terms__security" data-aos="fade" data-aos-delay="150">
                    <h5 class="text-lg font-bold mb-5">Security</h5>
                    <ul class="terms__list pl-4 [&>li]:list-disc">
                        <li>
                            <p class="p-style">You have rights for royalty free use of our resources for any or all of
                                your personal.</p>
                        </li>
                        <li class="my-5">
                            <p class="p-style">You are not required to attribute or link to UXTheme in any of projects.
                            </p>
                        </li>
                        <li>
                            <p class="p-style">We reserve the rights to change prices and revise the resources usage
                                policy in any moment.</p>
                        </li>
                    </ul>
                </div>
                <div class="terms__embContent" data-aos="fade" data-aos-delay="200">
                    <h5 class="text-lg font-bold mb-5">Embedded content from other websites</h5>
                    <p class="p-style">Articles on this site may include embedded content (e.g. videos, images,
                        articles, etc.). Embedded content from other websites behaves in the exact same way as if the
                        visitor has visited the other website.</p>
                    <p class="p-style">These websites may collect data about you, use cookies, embed additional
                        third-party tracking, and monitor your interaction with that embedded content, including
                        tracking your interaction with the embedded content if you have an account and are logged in to
                        that website.</p>
                </div>
                <div class="terms__changes" data-aos="fade" data-aos-delay="250">
                    <h5 class="text-lg font-bold mb-5">Changes about terms</h5>
                    <p class="p-style">If we change our terms of use we will post those changes on this page. Registered
                        users will be sent an email that outlines changes made to the terms of use.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/aos.js'); ?>
</body>
</html>