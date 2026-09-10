<?php require_once '../vite-helper.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <?php include '../components/head.php' ?>
</head>

<body>
    <?php include '../components/header.php' ?>
    <section class="job container mx-auto px-4">
        <div class="grid grid-cols-12">
            <div class="job__title col-span-12 md:col-span-6 md:col-start-4 text-center mb-[50px]" data-aos="fade" data-aos-delay="100">
                <h1 class="mb-7">Account Manager</h1>
                <p class="p-style">Full Time, New York</p>
            </div>
            <div class="job__content col-span-12 md:col-span-8 md:col-start-3">
                <div class="job__intro mb-[60px]" data-aos="fade" data-aos-delay="100">
                    <p class="p-style">Headquartered in New York, our company is dedicated to helping businesses grow through innovative digital solutions and strong client partnerships. We operate with a global mindset while maintaining a collaborative and fast-paced work culture that encourages creativity, communication, and professional development.</p>
                    <p class="p-style my-[50px]">Since our founding, we have worked with a wide range of clients across industries, helping them improve their digital presence, optimize their services, and build long-term success. Our team is passionate about delivering high-quality solutions and creating meaningful relationships with our customers.</p>
                    <p class="p-style">With a growing team of professionals and a strong client base, we continue to expand our services and opportunities for talented individuals who want to contribute to a dynamic and evolving company environment
                    </p>
                </div>
                <div class="job__desc mb-9" data-aos="fade" data-aos-delay="100">
                    <h4 class="text-xl text-bold mb-7">What you'll be doing</h4>
                    <p class="p-style">As an Account Manager, you will be responsible for managing and developing relationships with key clients. You will act as the main point of contact between the company and its customers, ensuring that projects are delivered successfully and that clients receive the best possible service.</p>
                </div>
                <div class="job__skills mb-11" data-aos="fade" data-aos-delay="150">
                    <h4 class="text-xl text-bold mb-4">Skills & Qualifications</h4>
                    <ul class="job__list flex flex-col items-start justify-start gap-7 pl-4 [&>li]:list-disc">
                        <li>
                            <p class="p-style">Strong client relationship management skills</p>
                        </li>
                        <li>
                            <p class="p-style">Excellent communication and presentation abilities</p>
                        </li>
                        <li>
                            <p class="p-style">Experience with CRM platforms (Salesforce, HubSpot, or similar)</p>
                        </li>
                        <li>
                            <p class="p-style">Ability to manage multiple client accounts simultaneously</p>
                        </li>
                        <li>
                            <p class="p-style">Strong problem-solving and negotiation skills</p>
                        </li>
                        <li>
                            <p class="p-style">Understanding of sales strategies and customer success practices</p>
                        </li>
                        <li>
                            <p class="p-style">Organizational and time-management skills</p>
                        </li>
                        <li>
                            <p class="p-style">Ability to work in a fast-paced team environment</p>
                        </li>
                    </ul>
                </div>
                <div class="job__apply mb-[50px]" data-aos="fade" data-aos-delay="100">
                    <h4 class="text-xl text-bold mb-7">How to apply</h4>
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