document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const alertBox = document.getElementById("formAlert");

    if (!form || !alertBox) return;

    form.addEventListener("submit", async function (e) {
        e.preventDefault();
        alertBox.innerHTML = '';

        const formData = new FormData(form);

        try {
            const res = await fetch('./send_mail.php', {
                method: 'POST',
                body: formData
            });
            const data = await res.json();

            const alertType = data.success ? 'success' : 'danger';
            alertBox.innerHTML = `<div class="uk-alert-${alertType}" uk-alert>
          <a class="uk-alert-close" uk-close></a>
          <p>${data.message}</p>
        </div>`;

            if (data.success) form.reset();
        } catch (err) {
            alertBox.innerHTML = `<div class="uk-alert-danger" uk-alert>
          <a class="uk-alert-close" uk-close></a>
          <p>Something went wrong. Please try again later.</p>
        </div>`;
        }
    });
});
