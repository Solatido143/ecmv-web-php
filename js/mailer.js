document.querySelector('form').addEventListener('submit', function (event) {
    event.preventDefault();

    const spinner = document.querySelector('.spinnerborder');
    spinner.classList.remove('d-none');

    const formData = new FormData(event.target);
    const email = formData.get('email');
    const message = formData.get('message');

    const queryParams = new URLSearchParams();
    queryParams.append('email', email);
    queryParams.append('message', message);

    const url = `https://aep.e-cmv.ph/api/contact-us?${queryParams.toString()}`;

    fetch(url, {
        method: 'GET',
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            alert('Email sent successfully! Thank you for contacting us!');
        } else {
            alert(data.message || 'Something went wrong. Please try again later.');
        }
        spinner.classList.add('d-none');
        document.getElementById('email').value = '';
        document.getElementById('message').value = '';
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to send email. Please try again later.');
        spinner.classList.add('d-none');
    });
});
