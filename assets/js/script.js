 
document.addEventListener('DOMContentLoaded', (event) => {
    // Show the popup form when the page loads
    document.getElementById('popupForm').style.display = 'block';

    // Close the popup form
    document.querySelector('.close-btn').addEventListener('click', function() {
        document.getElementById('popupForm').style.display = 'none';
    });

    // Form submission with validation and AJAX
    const form = document.getElementById("realEstateInquiryForm");
    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission for validation
        let formIsValid = true;

        // Name validation
        const name = document.getElementById("name");
        const errorName = document.getElementById("error-name");
        if (name.value.trim() === "") {
            errorName.textContent = "Name is required.";
            formIsValid = false;
        } else {
            errorName.textContent = "";
        }

        // Email validation
        const email = document.getElementById("email");
        const errorEmail = document.getElementById("error-email");
        if (email.value.trim() === "") {
            errorEmail.textContent = "Email is required.";
            formIsValid = false;
        } else if (!email.checkValidity()) {
            errorEmail.textContent = "Please enter a valid email address.";
            formIsValid = false;
        } else {
            errorEmail.textContent = "";
        }

        // Phone validation with length check
        const phone = document.getElementById("phone");
        const errorPhone = document.getElementById("error-phone");
        if (phone.value.trim() === "") {
            errorPhone.textContent = "Phone number is required.";
            formIsValid = false;
        } else if (phone.value.trim().length < 10 || phone.value.trim().length > 10) {
            errorPhone.textContent = "Phone number must be 10 digits.";
            formIsValid = false;
        } else {
            errorPhone.textContent = "";
        }

        // Message validation
        const message = document.getElementById("message");
        const errorMessage = document.getElementById("error-message");
        if (message.value.trim() === "") {
            errorMessage.textContent = "Message is required.";
            formIsValid = false;
        } else {
            errorMessage.textContent = "";
        }

        // If the form is valid, proceed with AJAX submission
        if (formIsValid) {
            $.ajax({
                type: "POST",
                url: "submit_inquiry.php",
                data: $(form).serialize(), // Serialize the form data
                success: function(response) {
                    // Handle success
                    // alert("Inquiry Submitted Successfully!");
                    $('#realEstateInquiryForm')[0].reset(); // Reset form fields
                    document.getElementById('popupForm').style.display = 'none'; // Hide the popup
                },
                error: function() {
                    // Handle error
                    alert("There was an error. Please try again later.");
                }
            });
        }
    });
});
 
