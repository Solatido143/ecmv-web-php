<?php
include_once('dbcon.php');

if (isset($_GET['jobId']) && is_numeric($_GET['jobId'])) {
    $jobId = $_GET['jobId'];

    $jobQuery = "SELECT * FROM jobs WHERE id = $jobId";
    $jobResult = $conn->query($jobQuery);

    if ($jobResult && $jobResult->num_rows > 0) {
        $job = $jobResult->fetch_assoc();

        $descriptionQuery = "SELECT description FROM job_description WHERE fk_job = $jobId";
        $descriptionResult = $conn->query($descriptionQuery);
        $descriptions = [];
        if ($descriptionResult && $descriptionResult->num_rows > 0) {
            while ($row = $descriptionResult->fetch_assoc()) {
                $descriptions[] = $row['description'];
            }
        } else {
            $descriptions[] = "No description available";
        }

        $requirementsQuery = "SELECT requirements FROM job_requirements WHERE fk_job = $jobId";
        $requirementsResult = $conn->query($requirementsQuery);
        $requirements = [];
        if ($requirementsResult && $requirementsResult->num_rows > 0) {
            while ($row = $requirementsResult->fetch_assoc()) {
                $requirements[] = $row['requirements'];
            }
        } else {
            $requirements[] = "No requirements available";
        }

        $skillsQuery = "SELECT required_skills FROM job_required_skills WHERE fk_job = $jobId";
        $skillsResult = $conn->query($skillsQuery);
        $skills = [];
        if ($skillsResult && $skillsResult->num_rows > 0) {
            while ($row = $skillsResult->fetch_assoc()) {
                $skills[] = $row['required_skills'];
            }
        } else {
            $skills[] = "No required skills available";
        }

        $html = '<div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="h4 m-0 fw-bold">' . $job['job_title'] . '</span>
                        <button type="button" class="btn text-light rounded-3 px-3" data-bs-toggle="modal" data-bs-target="#applyModal" data-custom-value="' . $job['id'] . '">
                            Apply
                        </button>
                    </div>
                    <div class="card-body rounded-bottom overflow-x-auto" style="height: 25rem;">
                        <h5>JOB DESCRIPTION</h5>
                        <ul>';
                            foreach ($descriptions as $description) {
                                $html .= '<li>' . $description . '</li>';
                            }
        $html .=       '</ul>
                        <hr>
                        <h5>REQUIREMENTS</h5>
                        <ul>';
                            foreach ($requirements as $requirement) {
                                $html .= '<li>' . $requirement . '</li>';
                            }
        $html .=       '</ul>
                        <hr>
                        <h5>REQUIRED SKILLS</h5>
                        <ul>';
                            foreach ($skills as $skill) {
                                $html .= '<li>' . $skill . '</li>';
                            }
        $html .=       '</ul>
                    </div>
                </div>';

        // Output the HTML content
        echo $html;
    } else {
        echo "<p>No job details found for the selected job.</p>";
    }
} else {
    echo "<p>Invalid job ID.</p>";
}
?>
