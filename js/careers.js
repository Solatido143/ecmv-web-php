function viewJob(jobId) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("job-details").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "connect/get_job_details.php?jobId=" + jobId, true);
    xhttp.send();

    var xhttp2 = new XMLHttpRequest();
    xhttp2.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("modalContentSmScreen").innerHTML = this.responseText;
        }
    };
    xhttp2.open("GET", "connect/get_job_details_sm.php?jobId=" + jobId, true);
    xhttp2.send();

    var jobCards = document.querySelectorAll('.card-link');
    jobCards.forEach(function (card) {
        card.classList.remove('cardJobs');
        if (card.dataset.jobId === jobId.toString()) {
            card.querySelector('.card').classList.add('cardJobs');
        } else {
            card.querySelector('.card').classList.remove('cardJobs');
        }
    });
}

function smModalScreen(x) {
    var cardLinks = document.querySelectorAll('.card-link');
    if (x.matches) { // If media query matches
        cardLinks.forEach(function (cardLink) {
            cardLink.removeAttribute('data-bs-toggle');
            cardLink.removeAttribute('data-bs-target');
        });
    } else {
        cardLinks.forEach(function (cardLink) {
            cardLink.setAttribute('data-bs-toggle', 'modal');
            cardLink.setAttribute('data-bs-target', '#smScreenModal');
        });
    }
}

var x = window.matchMedia("(min-width: 700px)");
smModalScreen(x);

x.addEventListener("change", function () {
    smModalScreen(x);
});
