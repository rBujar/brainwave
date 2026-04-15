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
    <section class="job container">
        <div class="row">
            <div class="job__title col-12 col-lg-8 offset-lg-2">
                <h1>Full Stack Developer</h1>
                <p class="text-md">Full Time, Remote</p>
            </div>
            <div class="job__content col-12 col-lg-8 offset-lg-2">
                <div class="job__intro">
                    <p class="text-md">Headquartered in Melbourne, Australia, Envato is a completely online company with
                        an ecosystem of sites and services to help people get creative. We've consistently been named as
                        one of the Best Places to Work in Australia, since 2015, in the BRW Awards, and we've also been
                        awarded the title of Australia's Coolest Company for Women and Diversity by JobAdvisor.</p>
                    <p class="text-md">Envato was found in 2006 and, since then, we've helped a community of creative
                        sellers earn more than $500 Million. Millions of people around the world choose our marketplace,
                        studio and courses to buy files, hire freelancers, or learn the skills needed to build websites,
                        videos, apps, graphics and more. Find out more at Envato Market, Envato Elements, Envato Sites,
                        Envato Studio and Tuts+.</p>
                    <p class="text-md">You might be surprised to know that not only do we run some of the biggest
                        websites in the world; we're also growing really fast! We have close to 600 staff and
                        contractors worldwide, adding more than 100 people to the business, year on year, since 2017.
                    </p>
                </div>
                <div class="job__desc">
                    <h4 class="text-xl text-bold">What you'll be doing</h4>
                    <p class="text-md">A Senior Data Engineer provides technical and delivery leadership for a team of developers working on data integration and processing projects. This role will work with stakeholders and other developers to design and implement technical data solutions for the business in a way that balances quality, cost, time and maintainability.</p>
                </div>
                <div class="job__skills">
                    <h4 class="text-xl text-bold">Skills & Qualifications</h4>
                    <ul class="job__list">
                        <li>
                            <p class="text-md">Business Intelligence solutions</p>
                        </li>
                        <li>
                            <p class="text-md">Cloud computing platforms (AWS)</p>
                        </li>
                        <li>
                            <p class="text-md">Relevant server-side programming languages (C# .NET)</p>
                        </li>
                        <li>
                            <p class="text-md">SQL and NoSQL database solutions (AWS Redshift and AWS DynamoDB)</p>
                        </li>
                        <li>
                            <p class="text-md">Big data processing frameworks and concepts </p>
                        </li>
                        <li>
                            <p class="text-md">DevOps practices</p>
                        </li>
                        <li>
                            <p class="text-md">Serverless Architecture</p>
                        </li>
                        <li>
                            <p class="text-md">*NIX operating systems</p>
                        </li>
                        <li>
                            <p class="text-md">Demonstrates ability to communicate effectively with the rest of the team</p>
                        </li>
                    </ul>
                </div>
                <div class="job__apply">
                    <h4 class="text-xl text-bold">How to apply</h4>
                    <p class="text-md">If we change our job of use we will post those changes on this page. Registered
                        users will be sent an email that outlines changes made to the job of use.</p>
                </div>
                <button class="blue-btn">Apply for this job</button>
            </div>
        </div>
    </section>
    <?php include 'components/footer.php' ?>
    <?php viteEntry('src/js/main.js'); ?>
</body>
</html>