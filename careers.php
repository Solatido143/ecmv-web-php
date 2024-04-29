<?php
include_once('includes/header.php');
include_once('includes/navbar.php');
?>

<div class="join-team">
    <div class="container py-3">
        <div class="card border rounded-3">
            <div class="card-body text-center">
                <h1>Join our team!</h1>
                <p class="px-lg-5" style="font-size:14px">Welcome to ECMV I.T. Corp, your premier tech solution provider since 2022. Join us in leading the Philippines' I.T. industry. Explore exciting career opportunities with us today and be part of our innovative team!</p>
            </div>
        </div>
    </div>
</div>

<div class="search mb-5">
    <div class="container-fluid p-0">
        <div class="search-container-form position-relative">
            <form class="row gy-2 gx-3 align-items-center justify-content-center h-100">
                <div class="col-auto">
                    <label class="visually-hidden" for="autoSizingInput">Name</label>
                    <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
                </div>
                <div class="col-auto">
                    <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
                    </div>
                </div>
                <div class="col-auto">
                    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                    <select class="form-select" id="autoSizingSelect">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-dark border"><i class="fa fa-magnifying-glass"></i>&nbsp;Find</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="job-offers">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="container">
                    <div class="card mb-3">
                        <div class="card-header">
                            <span>Web developer - Backend</span>
                        </div>
                        <div class="card-body rounded-bottom">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            Web developer - Backend
                        </div>
                        <div class="card-body rounded-bottom">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            Web developer - Backend
                        </div>
                        <div class="card-body rounded-bottom">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container position-sticky">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="h5 m-0 fw-bold">Web developer - Backend</span>
                            <button class="btn text-light border rounded-3 px-3">Apply</button>
                        </div>
                        <div class="card-body rounded-bottom">
                            <h5>JOB DESCRIPTION</h5>
                            <ul>
                                <li>Design & develop full stack web applications.</li>
                                <li>Perform maintenance and implement progressive enhancements on delegated projects.</li>
                                <li>Conduct research and present proof of concepts for special projects & innovations.</li>
                                <li>Collaborate with other team members.</li>
                            </ul>
                            <hr>
                            <h5>REQUIREMENTS</h5>
                            <ul>
                                <li>Graduate of BS in Computer Science/Engineering or any IT-related course.</li>
                                <li>Fresh graduates are welcome to apply.</li>
                                <li>Male/Female, preferably 20-30 years old.</li>
                                <li>Excellent oral and written English communication skills.</li>
                                <li>Initiative and have ability to work with minimum supervision to support Work From Home environment.</li>
                                <li>Disciplined, hardworking, and possesses a positive attitude.</li>
                                <li>Willingness to learn new tools, programming languages, and other software.</li>
                            </ul>
                            <hr>
                            <h5>PROGRAMMING SKILLS</h5>
                            <ul>
                                <li>Advance Knowledge in HTML5, CSS/SCSS, PHP, JavaScript, MVC and OOP concept</li>
                                <li>Knowledge in PHP framework, preferably Laravel Knowledge in JavaScript framework/library (Node, NPM, React, Webpack).</li>
                                <li>Knowledge in SQL relational Database and MySQL</li>
                                <li>Knowledge in containerized application (Docker) is a plus.</li>
                                <li>Preferably have knowledge about UI/UX designs or have a good sense in website design.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once('includes/footer.php');
?>