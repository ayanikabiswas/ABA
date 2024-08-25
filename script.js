// Simple JavaScript for handling form submission
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("#contact form");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Get form data
        const name = document.querySelector("#name").value;
        const email = document.querySelector("#email").value;
        const message = document.querySelector("#message").value;

        // Simple form validation
        if (name === "" || email === "" || message === "") {
            alert("Please fill out all fields.");
            return;
        }

        // Here, you could add AJAX to submit the form without refreshing the page
        // For this example, we'll just log the form data to the console
        console.log(`Name: ${name}`);
        console.log(`Email: ${email}`);
        console.log(`Message: ${message}`);

        // Display a success message
        alert("Thank you for contacting us!");

        // Optionally, reset the form
        form.reset();
    });
});
