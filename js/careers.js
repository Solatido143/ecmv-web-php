function viewJob(jobId) {
    // AJAX request to fetch job details
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Update job details section with fetched details
            document.getElementById("job-details").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "connect/get_job_details.php?jobId=" + jobId, true);
    xhttp.send();
    
    // Add class to highlight the clicked job card
    var jobCards = document.querySelectorAll('.card-link');
    jobCards.forEach(function(card) {
        // Remove 'cardJobs' class from all cards
        card.classList.remove('cardJobs');
        // Check if the card corresponds to the clicked job
        if (card.dataset.jobId === jobId) {
            // Add 'cardJobs' class to the clicked job card
            card.querySelector('.card').classList.add('cardJobs');
        }
    });
}
