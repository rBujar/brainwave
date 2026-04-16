<?php require_once '../vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include '../components/head.php' ?>
</head>
<body>
    <?php include '../components/header.php' ?>
    <section class="job container">
        <div class="row">
            <div class="job__title col-12 col-lg-8 offset-lg-2" data-aos="fade" data-aos-delay="100">
                <h1>Software Engineer</h1>
                <p class="text-md">Full Time, Remote</p>
            </div>
            <div class="job__content col-12 col-lg-8 offset-lg-2">
                <div class="job__intro" data-aos="fade" data-aos-delay="100">
                    <p class="text-md">Headquartered in New York, USA, our company is a technology-driven organization
                        focused on building scalable, high-performance software solutions used by customers worldwide.
                        We are passionate about clean code, innovation, and continuous improvement.</p>
                    <p class="text-md">Since our founding, we have developed and maintained a range of digital products
                        that help businesses operate more efficiently and deliver better experiences to their users. Our
                        engineering team plays a critical role in shaping the future of our platform.</p>
                    <p class="text-md">With a fully remote and globally distributed team, we value collaboration,
                        autonomy, and ownership. We are growing rapidly and looking for engineers who are excited to
                        solve complex problems and build impactful products.</p>
                </div>

                <div class="job__desc" data-aos="fade" data-aos-delay="100">
                    <h4 class="text-xl text-bold">What you'll be doing</h4>
                    <p class="text-md">As a Software Engineer, you will design, develop, and maintain scalable web
                        applications and backend systems. You will collaborate with product managers, designers, and
                        other engineers to deliver high-quality features, write clean and maintainable code, and
                        contribute to architectural decisions. You will also participate in code reviews, debugging, and
                        performance optimization.</p>
                </div>

                <div class="job__skills" data-aos="fade" data-aos-delay="150">
                    <h4 class="text-xl text-bold">Skills & Qualifications</h4>
                    <ul class="job__list">
                        <li>
                            <p class="text-md">Strong experience with JavaScript/TypeScript and modern frameworks</p>
                        </li>
                        <li>
                            <p class="text-md">Experience with backend development (Node.js, Express, or similar)</p>
                        </li>
                        <li>
                            <p class="text-md">Knowledge of databases (MySQL, PostgreSQL, or NoSQL systems)</p>
                        </li>
                        <li>
                            <p class="text-md">Understanding of REST APIs and system architecture</p>
                        </li>
                        <li>
                            <p class="text-md">Familiarity with version control systems (Git)</p>
                        </li>
                        <li>
                            <p class="text-md">Experience with testing, debugging, and performance optimization</p>
                        </li>
                        <li>
                            <p class="text-md">Strong problem-solving and analytical thinking skills</p>
                        </li>
                        <li>
                            <p class="text-md">Ability to work independently in a remote environment</p>
                        </li>
                        <li>
                            <p class="text-md">Good communication and teamwork skills</p>
                        </li>
                    </ul>
                </div>

                <div class="job__apply" data-aos="fade" data-aos-delay="100">
                    <h4 class="text-xl text-bold">How to apply</h4>
                    <p class="text-md">If we make updates to this job posting, they will be reflected on this page.
                        Registered users will receive an email notification outlining any changes to the job details.
                    </p>
                </div>

                <button class="blue-btn" data-aos="fade" data-aos-delay="150">Apply for this job</button>
            </div>
        </div>
    </section>
    <?php include '../components/footer.php' ?>
    <?php viteEntry('../src/js/aos.js'); ?>
</body>
</html>