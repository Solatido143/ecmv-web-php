<?php
include_once('dbcon.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobname = $_POST['jobname'];
    $jobstatus = $_POST['job-status']; // Retrieve the selected job status

    $query = "SELECT jobs.*, employment_status.status AS job_type
              FROM jobs
              INNER JOIN employment_status ON jobs.fk_employment_status = employment_status.id
              WHERE job_title LIKE '%$jobname%'";

    // Add condition for selected job status if it's not the default option
    if ($jobstatus != '-- Select' && $jobstatus != '') {
        $query .= " AND jobs.fk_employment_status = $jobstatus";
    }

    $query .= " LIMIT 5";

    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $html = '';
        while ($row = $result->fetch_assoc()) {
            $cardId = $row['id'];
            $html .= '<div class="card-link" id="viewjoblink" onclick="viewJob('.$cardId.')"';
            if (isset($_POST['isSmallScreen']) && $_POST['isSmallScreen'] === 'true') {
                $html .= ' data-bs-toggle="modal" data-bs-target="#smScreenModal"';
            }
            
            $html .= '>';
            $html .= '<div class="card mb-3">';
            $html .= '<div class="card-header">';
            $html .= '<span class="h4 m-0 fw-bold">' . $row['job_title'] . '</span>';
            $html .= '</div>';
            $html .= '<div class="card-body rounded-bottom">';
            $html .= '<p class="card-title h6">' . $row['job_type'] . '</p>';
            $html .= '<p class="card-text">' . $row['job_description'] . '</p>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }
        $html .= '</div>';

        // Output the generated HTML
        echo $html;
    } else {
        // No matching jobs found
        echo "<p>No jobs found</p>";
    }
} else {
    // Handle invalid requests
    echo "Invalid request";
}

?>