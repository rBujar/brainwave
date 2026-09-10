<?php require_once '../vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
<?php include '../components/head.php'?>
</head>
<body>
    <?php include '../components/header.php' ?>
    <section class="job container mx-auto px-4">
        <div class="grid grid-cols-12">
            <div class="job__title col-span-12 md:col-span-6 md:col-start-4 text-center mb-[50px]" data-aos="fade" data-aos-delay="100">
                <h1 class="mb-7">Full Stack Developer</h1>
                <p class="p-style">Full Time, Remote</p>
            </div>
            <div class="job__content col-span-12 md:col-span-8 md:col-start-3">
                <div class="job__intro mb-[60px]" data-aos="fade" data-aos-delay="100">
                    <p class="p-style">Headquartered in Melbourne, Australia, Envato is a completely online company with
                        an ecosystem of sites and services to help people get creative. We've consistently been named as
                        one of the Best Places to Work in Australia, since 2015, in the BRW Awards, and we've also been
                        awarded the title of Australia's Coolest Company for Women and Diversity by JobAdvisor.</p>
                    <p class="p-style my-[50px]">Envato was found in 2006 and, since then, we've helped a community of creative
                        sellers earn more than $500 Million. Millions of people around the world choose our marketplace,
                        studio and courses to buy files, hire freelancers, or learn the skills needed to build websites,
                        videos, apps, graphics and more. Find out more at Envato Market, Envato Elements, Envato Sites,
                        Envato Studio and Tuts+.</p>
                    <p class="p-style">You might be surprised to know that not only do we run some of the biggest
                        websites in the world; we're also growing really fast! We have close to 600 staff and
                        contractors worldwide, adding more than 100 people to the business, year on year, since 2017.
                    </p>
                </div>
                <div class="job__desc mb-9" data-aos="fade" data-aos-delay="100">
                    <h4 class="text-xl font-bold mb-7">What you'll be doing</h4>
                    <p class="p-style">A Senior Data Engineer provides technical and delivery leadership for a team of developers working on data integration and processing projects. This role will work with stakeholders and other developers to design and implement technical data solutions for the business in a way that balances quality, cost, time and maintainability.</p>
                </div>
                <div class="job__skills mb-11" data-aos="fade" data-aos-delay="150">
                    <h4 class="text-xl font-bold mb-4">Skills & Qualifications</h4>
                    <ul class="job__list flex flex-col items-start justify-start gap-7 pl-4 [&>li]:list-disc">
                        <li>
                            <p class="p-style">Business Intelligence solutions</p>
                        </li>
                        <li>
                            <p class="p-style">Cloud computing platforms (AWS)</p>
                        </li>
                        <li>
                            <p class="p-style">Relevant server-side programming languages (C# .NET)</p>
                        </li>
                        <li>
                            <p class="p-style">SQL and NoSQL database solutions (AWS Redshift and AWS DynamoDB)</p>
                        </li>
                        <li>
                            <p class="p-style">Big data processing frameworks and concepts </p>
                        </li>
                        <li>
                            <p class="p-style">DevOps practices</p>
                        </li>
                        <li>
                            <p class="p-style">Serverless Architecture</p>
                        </li>
                        <li>
                            <p class="p-style">*NIX operating systems</p>
                        </li>
                        <li>
                            <p class="p-style">Demonstrates ability to communicate effectively with the rest of the team</p>
                        </li>
                    </ul>
                </div>
                <div class="job__apply mb-[50px]" data-aos="fade" data-aos-delay="100">
                    <h4 class="text-xl font-bold mb-7">How to apply</h4>
                    <p class="p-style">If we change our job of use we will post those changes on this page. Registered
                        users will be sent an email that outlines changes made to the job of use.</p>
                </div>
                <button class="blue-btn max-w-[210px] py-5 px-6" data-aos="fade" data-aos-delay="150">Apply for this job</button>
            </div>
        </div>
    </section>
    <?php include '../components/footer.php' ?>
    <?php viteEntry('../src/js/aos.js'); ?>
</body>
</html>