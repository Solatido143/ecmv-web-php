<?php
include_once('dbcon.php');

if (isset($_GET['jobId']) && is_numeric($_GET['jobId'])) {
    $jobId = $_GET['jobId'];

    // Fetch job details
    $jobQuery = "SELECT * FROM jobs WHERE id = $jobId";
    $jobResult = $conn->query($jobQuery);

    if ($jobResult && $jobResult->num_rows > 0) {
        $job = $jobResult->fetch_assoc();
        $descriptions = fetchDetails($conn, 'job_description', $jobId);
        $requirements = fetchDetails($conn, 'job_requirements', $jobId);
        $skills = fetchDetails($conn, 'job_required_skills', $jobId);
        $html = '
        <div class="modal-header">
            <span class="modal-title fs-5" id="smScreenModalLabel">' . $job['job_title'] . '</span>
        </div>
        <div class="modal-body">
            <h5>JOB DESCRIPTION</h5>
            <ul>';
        foreach ($descriptions as $description) {
            $html .= '<li>' . $description . '</li>';
        }
        $html .= '</ul>
            <hr>
            <h5>REQUIREMENTS</h5>
            <ul>';
        foreach ($requirements as $requirement) {
            $html .= '<li>' . $requirement . '</li>';
        }
        $html .= '</ul>
            <hr>
            <h5>REQUIRED SKILLS</h5>
            <ul>';
        foreach ($skills as $skill) {
            $html .= '<li>' . $skill . '</li>';
        }
        $html .= '</ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#applyModal" data-custom-value="' . $job['id'] . '">Apply</button>
        </div>';

        echo $html;
    } else {
        echo "<p>No job details found for the selected job.</p>";
    }
} else {
    echo "<p>Invalid job ID.</p>";
}

// Function to fetch job details from the database
function fetchDetails($conn, $table, $jobId) {
    $query = "SELECT * FROM $table WHERE fk_job = $jobId";
    $result = $conn->query($query);
    $details = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $details[] = $row[$table == 'job_description' ? 'description' : ($table == 'job_requirements' ? 'requirements' : 'required_skills')];
        }
    } else {
        $details[] = "No " . ($table == 'job_description' ? 'description' : ($table == 'job_requirements' ? 'requirements' : 'required skills')) . " available";
    }
    return $details;
}
?>
