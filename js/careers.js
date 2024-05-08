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

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('search_job_form').addEventListener('submit', function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        formData.append('isSmallScreen', window.innerWidth < 992);
        fetch('connect/search_jobs.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('job-listings').innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
    });

    function toggleModalAttributes() {
        var jobLink = document.getElementById('viewjoblink');
        if (window.innerWidth < 992) {
            jobLink.setAttribute('data-bs-toggle', 'modal');
            jobLink.setAttribute('data-bs-target', '#smScreenModal');
        } else {
            jobLink.removeAttribute('data-bs-toggle');
            jobLink.removeAttribute('data-bs-target');
        }
    }
    toggleModalAttributes();
    window.addEventListener('resize', toggleModalAttributes);
});
