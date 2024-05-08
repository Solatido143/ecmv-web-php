<?php
include_once('connect/dbcon.php');
include_once('includes/header.php');
include_once('includes/navbar.php');

$searchSelectOptions = '';

$status_query = "SELECT * FROM employment_status";
$result = $conn->query($status_query);

if ($result->num_rows > 0) {
    $searchSelectOptions .= '<select class="form-select" id="jobStatus" name="job-status">';
    $searchSelectOptions .= '<option selected>-- Select</option>';
    while ($row = $result->fetch_assoc()) {
        $searchSelectOptions .= '<option value="' . $row['id'] . '">' . $row['status'] . '</option>';
    }
    $searchSelectOptions .= '</select>';
} else {
    $searchSelectOptions = '<p>No employment statuses found</p>';
}
?>

<!-- Header -->
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
                <form id="search_job_form" class="row gy-2 gx-3 align-items-end" action="#" method="POST">
                    <div class="col-auto">
                        <label class="form-label" for="autoSizingInput">WHAT</label>
                        <input type="text" name="jobname" class="form-control" id="autoSizingInput" placeholder="Programmer">
                    </div>
                    <div class="col-auto">
                        <label class="form-label" for="autoSizingInputGroup">WHERE</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Bulacan">
                        </div>
                    </div>
                    <div class="col-auto">
                        <?= $searchSelectOptions ?>
                    </div>
                    <div class="col-auto">
                        <button type="submit" id="findButton" class="btn text-light rounded-3"><i class="fa fa-magnifying-glass"></i>&nbsp;Find</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JOBS -->
<div class="job-offers py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="container overflow-y-auto" style="height:100vh" id="job-listings">
                    <?php
                    $maxCards = 5;
                    $query = "SELECT jobs.*, employment_status.status AS job_type
                            FROM jobs
                            INNER JOIN employment_status ON jobs.fk_employment_status = employment_status.id
                            LIMIT 5";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $cardId = $row['id'];
                    ?>
                            <div class="card-link" id="viewjoblink" onclick="viewJob('<?php echo $cardId; ?>')" data-job-id="<?php echo $cardId; ?>" data-bs-toggle="modal" data-bs-target="#smScreenModal">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <span class="h4 m-0 fw-bold"><?php echo $row['job_title']; ?></span>
                                    </div>
                                    <div class="card-body rounded-bottom">
                                        <p class="card-title h6"><?php echo $row['job_type']; ?></p>
                                        <p class="card-text"><?php echo $row['job_description']; ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "<p>No jobs found</p>";
                    }
                    ?>
                    <ul class="pagination justify-content-center text-nowrap d-none" id="pagination-links">
                        <li class="page-item active"><a class="page-link text-light">1</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 d-none d-lg-block">
                <div class="container position-sticky" id="job-details">
                    <?php
                    function fetchJobData($conn)
                    {
                        $query = "SELECT * FROM jobs LIMIT 1";
                        $result = $conn->query($query);
                        return ($result->num_rows > 0) ? $result->fetch_assoc() : false;
                    }
                    function fetchDetails($conn, $table, $fk)
                    {
                        $query = "SELECT * FROM $table WHERE fk_job = ?";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param("i", $fk);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $data = array();
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $data[] = $row[$table == 'job_description' ? 'description' : ($table == 'job_requirements' ? 'requirements' : 'required_skills')];
                            }
                        } else {
                            $data[] = "No " . ($table == 'job_description' ? 'description' : ($table == 'job_requirements' ? 'requirements' : 'required skills')) . " available";
                        }
                        return $data;
                    }
                    $job = fetchJobData($conn);
                    if ($job) {
                        $descriptions = fetchDetails($conn, 'job_description', $job['id']);
                        $requirements = fetchDetails($conn, 'job_requirements', $job['id']);
                        $skills = fetchDetails($conn, 'job_required_skills', $job['id']);
                    ?>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span class="h4 m-0 fw-bold"><?php echo $job['job_title']; ?></span>
                                <button type="button" class="btn text-light rounded-3 px-3" data-bs-toggle="modal" data-bs-target="#applyModal" data-custom-value="<?= $job['id'] ?>">
                                    Apply
                                </button>
                            </div>
                            <div class="card-body rounded-bottom overflow-x-auto" style="height: 25rem;">
                                <h5>JOB DESCRIPTION</h5>
                                <ul>
                                    <?php foreach ($descriptions as $description) : ?>
                                        <li><?php echo $description; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <hr>
                                <h5>REQUIREMENTS</h5>
                                <ul>
                                    <?php foreach ($requirements as $requirement) : ?>
                                        <li><?php echo $requirement; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <hr>
                                <h5>REQUIRED SKILLS</h5>
                                <ul>
                                    <?php foreach ($skills as $skill) : ?>
                                        <li><?php echo $skill; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php } else {
                        echo "<p>No jobs found</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal-apply">
    <div class="modal fade modal-sm" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <img src="image/logo.png" alt="E-CMV Logo" width="175" height="50">
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="applicationForm" action="#" method="post">
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
                        <button type="submit" id="applyButton" class="btn float-end">Apply Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal-smscreen">
    <div class="modal" id="smScreenModal" tabindex="-1" aria-labelledby="smScreenModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
            <div class="modal-content" id="modalContentSmScreen">
                <div class="modal-header">
                    <span class="modal-title fs-5" id="smScreenModalLabel">Modal</span>
                </div>
                <div class="modal-body">
                    <h5>JOB DESCRIPTION</h5>
                    <ul>
                        <li></li>
                    </ul>
                    <hr>
                    <h5>REQUIREMENTS</h5>
                    <ul>
                        <li></li>
                    </ul>
                    <hr>
                    <h5>REQUIRED SKILLS</h5>
                    <ul>
                        <li></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#applyModal" data-custom-value="<?= $job['id'] ?>">Apply</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- why join us -->
<div class="container py-3">
    <div class="container-svg">
        <svg viewBox="0 0 1320 300">
            <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                Why Join Us?
            </text>
        </svg>
    </div>
    <div class="row gap-3 gap-md-0">
        <div class="col-md-6">
            <h2 class="info-join-1"><img src="image/bulb.png" class="icon-join" alt=""> Innovative Environment</h2>
            <p class="info-join">Join a team that thrives in an innovative environment, where creativity is encouraged, and ideas are valued. Be part of shaping the future of technology solutions.</p>
        </div>
        <div class="col-md-6">
            <h2 class="info-join-1"><img src="image/bulb.png" class="icon-join" alt="">Impactful Work</h2>
            <p class="info-join">Make a difference by working on projects that have a real impact on our clients and the industry. At ECMV I.T. Corp, your work will contribute to driving technological advancements and shaping the future of I.T.</p>
        </div>
        <div class="col-md-6">
            <h2 class="info-join-1"><img src="image/bulb.png" class="icon-join" alt="">Career Growth Opportunities</h2>
            <p class="info-join">At ECMV 1.T. Corp, we prioritize the growth and development of our employees. From mentorship programs to ongoing training, we provide the resources you need to advance your career.</p>
        </div>
        <div class="col-md-6">
            <h2 class="info-join-1"><img src="image/bulb.png" class="icon-join" alt="">Competitive Benefits Package</h2>
            <p class="info-join">Enjoy a competitive benefits package that includes comprehensive health coverage retirement plans, and other perks. We believe in taking care of our employees so they can focus on their work and personal growth.</p>
        </div>
        <div class="col-md-6">
            <h2 class="info-join-1"><img src="image/bulb.png" class="icon-join" alt="">Collaborative Culture</h2>
            <p class="info-join">Experience the power of collaboration in a supportive and inclusive work culture. Join a team that values teamwork and fosters an environment where everyone's contributions are recognized and appreciated.</p>
        </div>
        <div class="col-md-6">
            <h2 class="info-join-1"><img src="image/bulb.png" class="icon-join" alt="">Work-Life Balance</h2>
            <p class="info-join">We understand the importance of maintaining a healthy work-life balance. Join us and enjoy flexible work hours, remote work options, and a supportive environment that prioritizes your well-being.</p>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<?php
include_once('includes/footer.php');
?>