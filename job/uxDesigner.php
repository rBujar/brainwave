<?php require_once '../vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include '../components/head.php' ?>
</head>
<body>
    <?php include '../components/header.php' ?>
    <section class="job container mx-y px-4">
        <div class="grid grid-cols-12">
            <div class="job__title col-span-12 md:col-span-6 md:col-start-4 text-center mb-[50px]" data-aos="fade" data-aos-delay="100">
                <h1 class="mb-7">UX Designer</h1>
                <p class="p-style">Full Time, Remote</p>
            </div>
            <div class="job__content col-span-12 md:col-span-8 md:col-start-3">
                <div class="job__intro mb-[60px]" data-aos="fade" data-aos-delay="100">
                    <p class="p-style">Headquartered in New York, USA, our company is a product-driven organization
                        focused on creating intuitive and impactful digital experiences for users around the world. We
                        believe great design is at the core of every successful product.</p>
                    <p class="p-style my-[50px]">Since our founding, we have worked on a wide range of digital platforms, helping
                        businesses improve user engagement, accessibility, and overall product usability. Our design
                        team plays a key role in shaping experiences that are both functional and visually compelling.
                    </p>
                    <p class="p-style">With a growing remote-first team of designers, developers, and product managers,
                        we are committed to building user-centered solutions that solve real-world problems and deliver
                        measurable impact.</p>
                </div>
                <div class="job__desc mb-9" data-aos="fade" data-aos-delay="100">
                    <h4 class="text-xl text-bold mb-7">What you'll be doing</h4>
                    <p class="p-style">As a UX Designer, you will be responsible for researching user needs, creating
                        wireframes and prototypes, and designing intuitive user interfaces. You will collaborate closely
                        with product managers and developers to ensure a seamless user experience from concept to final
                        implementation. Your work will directly influence how users interact with our digital products.
                    </p>
                </div>
                <div class="job__skills mb-11" data-aos="fade" data-aos-delay="150">
                    <h4 class="text-xl text-bold mb-4">Skills & Qualifications</h4>
                    <ul class="job__list flex flex-col items-start justify-start gap-7 pl-4 [&>li]:list-disc">
                        <li>
                            <p class="p-style">Strong portfolio demonstrating UX/UI design projects</p>
                        </li>
                        <li>
                            <p class="p-style">Experience with design tools such as Figma, Sketch, or Adobe XD</p>
                        </li>
                        <li>
                            <p class="p-style">Knowledge of user research methods and usability testing</p>
                        </li>
                        <li>
                            <p class="p-style">Understanding of interaction design and information architecture</p>
                        </li>
                        <li>
                            <p class="p-style">Ability to create wireframes, prototypes, and high-fidelity designs</p>
                        </li>
                        <li>
                            <p class="p-style">Strong communication and collaboration skills</p>
                        </li>
                        <li>
                            <p class="p-style">Experience working in agile or cross-functional teams</p>
                        </li>
                        <li>
                            <p class="p-style">Attention to detail and a user-first mindset</p>
                        </li>
                        <li>
                            <p class="p-style">Ability to translate complex requirements into simple and intuitive
                                designs</p>
                        </li>
                    </ul>
                </div>
                <div class="job__apply mb-[50px]" data-aos="fade" data-aos-delay="100">
                    <h4 class="text-xl text-bold mb-7">How to apply</h4>
                    <p class="p-style">If we make updates to this job posting, they will be reflected on this page.
                        Registered users will receive an email notification outlining any changes to the job details.
                    </p>
                </div>
                <button class="blue-btn max-w-[210px] py-5 px-6" data-aos="fade" data-aos-delay="150">Apply for this job</button>
            </div>
        </div>
    </section>
    <?php include '../components/footer.php' ?>
    <?php viteEntry('../src/js/aos.js'); ?>
</body>
</html>