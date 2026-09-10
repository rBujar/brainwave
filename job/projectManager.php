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
                <h1 class="mb-7">Senior Project Manager</h1>
                <p class="p-style">Full Time, On-site</p>
            </div>
            <div class="job__content col-span-12 md:col-span-8 md:col-start-3">
                <div class="job__intro mb-[60px]" data-aos="fade" data-aos-delay="100">
                    <p class="p-style">Headquartered in New York, USA, our company is a fast-growing organization
                        delivering innovative digital and technology-driven solutions to clients worldwide. We pride
                        ourselves on building high-performing teams that value collaboration, transparency, and
                        excellence in execution.</p>
                    <p class="p-style my-[50px]">Since our founding, we have successfully delivered complex projects across
                        multiple industries, helping businesses streamline operations, improve performance, and scale
                        effectively. Our team works closely with clients to ensure every project meets strategic goals
                        while maintaining the highest standards of quality.</p>
                    <p class="p-style">With a strong and expanding team of professionals, we continue to grow year after
                        year. We are looking for experienced leaders who can drive results, manage cross-functional
                        teams, and ensure successful project delivery from initiation to completion.</p>
                </div>
                <div class="job__desc mb-9" data-aos="fade" data-aos-delay="100">
                    <h4 class="text-xl text-bold mb-7">What you'll be doing</h4>
                    <p class="p-style">As a Senior Project Manager, you will lead complex projects from planning through
                        execution and delivery. You will collaborate with stakeholders, manage timelines and budgets,
                        mitigate risks, and ensure projects are delivered on time and within scope. This role requires
                        strong leadership, strategic thinking, and the ability to balance quality, cost, and efficiency
                        while maintaining clear communication across all teams.</p>
                </div>
                <div class="job__skills mb-11" data-aos="fade" data-aos-delay="150">
                    <h4 class="text-xl text-bold mb-4">Skills & Qualifications</h4>
                    <ul class="job__list flex flex-col items-start justify-start gap-7 pl-4 [&>li]:list-disc">
                        <li>
                            <p class="p-style">Proven experience managing large-scale projects and cross-functional
                                teams</p>
                        </li>
                        <li>
                            <p class="p-style">Strong knowledge of project management methodologies (Agile, Scrum,
                                Waterfall)</p>
                        </li>
                        <li>
                            <p class="p-style">Excellent leadership, communication, and stakeholder management skills
                            </p>
                        </li>
                        <li>
                            <p class="p-style">Experience with project management tools (Jira, Asana, MS Project, or
                                similar)</p>
                        </li>
                        <li>
                            <p class="p-style">Ability to manage budgets, timelines, and risk assessments effectively
                            </p>
                        </li>
                        <li>
                            <p class="p-style">Strong analytical and problem-solving skills</p>
                        </li>
                        <li>
                            <p class="p-style">Experience working in fast-paced, dynamic environments</p>
                        </li>
                        <li>
                            <p class="p-style">Bachelor's degree in Business, Management, or related field (PMP
                                certification is a plus)</p>
                        </li>
                        <li>
                            <p class="p-style">Demonstrates ability to communicate effectively with executive leadership
                                and technical teams</p>
                        </li>
                    </ul>
                </div>
                <div class="job__apply mb-[50px]" data-aos="fade" data-aos-delay="100">
                    <h4 class="text-xl text-bold mb-7">How to apply</h4>
                    <p class="p-style">If we make changes to this job posting, we will update this page accordingly.
                        Registered users will receive an email notification outlining any updates or modifications to
                        the job description.</p>
                </div>
                <button class="blue-btn max-w-[210px] py-5 px-6" data-aos="fade" data-aos-delay="150">Apply for this job</button>
            </div>
        </div>
    </section>
    <?php include '../components/footer.php' ?>
    <?php viteEntry('../src/js/aos.js'); ?>
</body>
</html>