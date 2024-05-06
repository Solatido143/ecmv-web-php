<?php
include_once('includes/header.php');
include_once('includes/navbar.php');
?>
<div class="modal-apply">
    <div class="modal fadev modal-sm" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <img src="image/logo.png" alt="E-CMV Logo" width="175" height="50">
                    </div>
                    <button type="button" class="btn-close" style="background-color: red" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="cv" class="form-label">CV/Resume</label>
                            <input type="file" class="form-control" id="cv" name="cv">
                        </div>
                        <div class="mb-3">
                            <label for="pitch" class="form-label">Pitch</label>
                            <textarea class="form-control" id="pitch" name="pitch" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-light rounded-3">Apply Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="join-team py-3">
    <div class="container">
        <div class="card border rounded-3">
            <div class="card-body text-center">
                <h1>Join our team!</h1>
                <p class="px-lg-5" style="font-size:14px">Welcome to ECMV I.T. Corp, your premier tech solution provider
                    since 2022. Join us in leading the Philippines' I.T. industry. Explore exciting career opportunities
                    with us today and be part of our innovative team!</p>
            </div>
        </div>
    </div>
</div>

<div class="search">
    <div class="container-fluid p-0">
        <div class="search-container-form h-100">
            <div class="container h-100 d-flex align-items-center position-relative">
                <form id="search_job_form" class="row gy-2 gx-3 align-items-end" action="#">
                    <div class="col-auto">
                        <label class="form-label" for="autoSizingInput">WHAT</label>
                        <input type="text" class="form-control" id="autoSizingInput" placeholder="Programmer">
                    </div>
                    <div class="col-auto">
                        <label class="form-label" for="autoSizingInputGroup">WHERE</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Bulacan">
                        </div>
                    </div>
                    <div class="col-auto">
                        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                        <select class="form-select" id="autoSizingSelect">
                            <option selected>Choose...</option>
                            <option value="1">Full Time</option>
                            <option value="2">Part Time</option>
                            <option value="2">Intern</option>

                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn text-light rounded-3"><i class="fa fa-magnifying-glass"></i>&nbsp;Find</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="job-offers py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="container overflow-y-auto" style="height:100vh">
                    <div class="card mb-3">
                        <div class="card-header">
                            <span class="h4 m-0 fw-bold">Field Engineer</span>
                        </div>
                        <div class="card-body rounded-bottom">
                            <p class="card-title h6">Full Time</h5>
                            <p class="card-text">Field Engineers handle on-site equipment installation, maintenance,
                                repair, and troubleshooting, while providing direct technical support to clients.
                            </p>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <span class="h4 m-0 fw-bold">Programmer</span>
                        </div>
                        <div class="card-body rounded-bottom">
                            <p class="card-title h6">Full Time</h5>
                            <p class="card-text">Programmers develop, test, and maintain software applications,
                                collaborating with clients or project managers to meet specific requirements.</p>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <span class="h4 m-0 fw-bold">Human Resources(HR)</span>
                        </div>
                        <div class="card-body rounded-bottom">
                            <p class="card-title h6">Full Time</h5>
                            <p class="card-text">HR professionals manage employee recruitment, training, and relations,
                                overseeing tasks such as benefits administration and compliance with labor laws.</p>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <span class="h4 m-0 fw-bold">Intern IT</span>
                        </div>
                        <div class="card-body rounded-bottom">
                            <p class="card-title h6">OJT</h5>
                            <p class="card-text">On-the-Job Training (OJT) in IT typically involves hands-on learning
                                and practical experience in various IT-related tasks such as software development,
                                network administration, or technical support.
                            </p>
                        </div>
                    </div>
                    <ul class="pagination justify-content-center text-nowrap">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>

            </div>

            <div class="col-md-8 d-none d-lg-block">
                <div class="container position-sticky">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="h4 m-0 fw-bold">Web developer - Backend</span>
                            <button type="button" class="btn text-light rounded-3 px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Apply
                            </button>

                        </div>
                        <div class="card-body rounded-bottom overflow-x-auto" style="height: 25rem;">
                            <h5>JOB DESCRIPTION</h5>
                            <ul>
                                <li>Design & develop full stack web applications.</li>
                                <li>Perform maintenance and implement progressive enhancements on delegated projects.
                                </li>
                                <li>Conduct research and present proof of concepts for special projects & innovations.
                                </li>
                                <li>Collaborate with other team members.</li>
                            </ul>
                            <hr>
                            <h5>REQUIREMENTS</h5>
                            <ul>
                                <li>Graduate of BS in Computer Science/Engineering or any IT-related course.</li>
                                <li>Fresh graduates are welcome to apply.</li>
                                <li>Male/Female, preferably 20-30 years old.</li>
                                <li>Excellent oral and written English communication skills.</li>
                                <li>Initiative and have ability to work with minimum supervision to support Work From
                                    Home environment.</li>
                                <li>Disciplined, hardworking, and possesses a positive attitude.</li>
                                <li>Willingness to learn new tools, programming languages, and other software.</li>
                            </ul>
                            <hr>
                            <h5>PROGRAMMING SKILLS</h5>
                            <ul>
                                <li>Advance Knowledge in HTML5, CSS/SCSS, PHP, JavaScript, MVC and OOP concept</li>
                                <li>Knowledge in PHP framework, preferably Laravel Knowledge in JavaScript
                                    framework/library (Node, NPM, React, Webpack).</li>
                                <li>Knowledge in SQL relational Database and MySQL</li>
                                <li>Knowledge in containerized application (Docker) is a plus.</li>
                                <li>Preferably have knowledge about UI/UX designs or have a good sense in website
                                    design.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- why join us -->
<div class="container-svg">
    <svg viewBox="0 0 1320 300">
        <text x="50%" y="50%" dy=".35em" text-anchor="middle">
            Why Join Us?
        </text>
    </svg>

</div>
<div class="container-join">
    <div class="row-join">
        <div class="col-join" id="innovative-env">
            <h2 class="info-join-1"><img src="image/bulb.png" class="icon-join" alt=""> Innovative Environment</h2>
            <p class="info-join">Join a team that thrives in an innovative environment, where creativity is encouraged,
                and ideas are valued. Be part of shaping the future of technology solutions.</p>
        </div>
        <div class="col-join" id="impactful-work">
            <h2 class="info-join-1"><img src="image/bulb.png" class="icon-join" alt="">Impactful Work</h2>
            <p class="info-join">Make a difference by working on projects that have a real impact on our clients and the
                industry. At ECMV I.T. Corp, your work will contribute to driving technological advancements and shaping
                the future of I.T.</p>
        </div>
    </div>
    <div class="row-join">
        <div class="col-join" id="career-growth">
            <h2 class="info-join-1"><img src="image/bulb.png" class="icon-join" alt="">Career Growth Opportunities</h2>
            <p class="info-join">At ECMV 1.T. Corp, we prioritize the growth and development of our employees. From
                mentorship programs to ongoing training, we provide the resources you need to advance your career.</p>
        </div>
        <div class="col-join" id="benefits-package">
            <h2 class="info-join-1"><img src="image/bulb.png" class="icon-join" alt="">Competitive Benefits Package</h2>
            <p class="info-join">Enjoy a competitive benefits package that includes comprehensive health coverage,
                retirement plans, and other perks. We believe in taking care of our employees so they can focus on their
                work and personal growth.</p>
        </div>
    </div>
    <div class="row-join">
        <div class="col-join" id="collaborative-culture">
            <h2 class="info-join-1"><img src="image/bulb.png" class="icon-join" alt="">Collaborative Culture</h2>
            <p class="info-join">Experience the power of collaboration in a supportive and inclusive work culture. Join
                a team that values teamwork and fosters an environment where everyone's contributions are recognized and
                appreciated.</p>
        </div>
        <div class="col-join" id="work-life-balance">
            <h2 class="info-join-1"><img src="image/bulb.png" class="icon-join" alt="">Work-Life Balance</h2>
            <p class="info-join">We understand the importance of maintaining a healthy work-life balance. Join us and
                enjoy flexible work hours, remote work options, and a supportive environment that prioritizes your
                well-being.</p>
        </div>
    </div>
</div>

<?php
include_once('includes/footer.php');
?>