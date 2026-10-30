document.addEventListener('DOMContentLoaded', function () {
    console.log('Here');

    const form = document.querySelector('#birdForm');
    const phone = document.querySelector('#phone');
    const sightedAt = document.querySelector('[name="sighted_at"]');

    if (!form || !phone || !sightedAt) {
        return;
    }

    form.addEventListener('submit', function (event) {

        // Validate phone (optional)
        const phoneValue = phone.value.trim();

        if (phoneValue !== '') {
            const phoneRegex = /^\+?[\d\s()-]{7,20}$/;

            if (!phoneRegex.test(phoneValue)) {
                event.preventDefault();
                alert('Please enter a valid phone number.');
                phone.focus();
                return;
            }
        }

        // Validate sighting date/time
        const selectedDate = new Date(sightedAt.value);
        const currentDate = new Date();

        if (selectedDate > currentDate) {
            event.preventDefault();
            alert('Sighting date and time cannot be in the future.');
            sightedAt.focus();
            return;
        }

    });
});