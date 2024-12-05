document.addEventListener("DOMContentLoaded", function () {
	var swiper = new Swiper(".blogSwiper", {
		slidesPerView: 1,
		spaceBetween: 10,
		loop: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		breakpoints: {
			// when window width is >= 700px
			700: {
				slidesPerView: 3,
				spaceBetween: 30,
			},
		},
	});
});


$(document).ready(function () {
    // Add hidden input field for current page URL
    $('#dialog-form').append('<input type="hidden" name="page_url" value="' + window.location.href + '">');

    // Phone number validation
    $('#number').on('input', function () {
        var phone = $(this).val();
        if (phone.length !== 10 || isNaN(phone)) {
            showError('#number', 'Phone number must be 10 digits');
        } else {
            hideError('#number');
        }
    });

    // Form submission
    $('#dialog-form').on('submit', function (e) {
        e.preventDefault();

        // Validate phone number
        var phone = $('#number').val();
        if (phone.length !== 10 || isNaN(phone)) {
            showError('#number', 'Phone number must be 10 digits');
            return;
        }

        // Serialize form data
        var formData = $(this).serialize();

        // AJAX call to process the form
        $.ajax({
            url: '../real-estate-page-form-process.php',
            type: 'POST',
            data: formData,
            success: function (response) {
                // Replace form content with a success message
                $('#dialog-form').html(`
                    <div class="success-message">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                        </svg>
                        <p>Submission Successful!</p>
                        <p>Our team will contact you shortly.</p>
                    </div>
                `);
            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', status, error);
                Swal.fire({
                    title: 'Error!',
                    text: 'There was an error submitting your form. Please try again.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    });

    // Cancel button functionality
    $('#cancel-button').on('click', function () {
        $('#dialog-form')[0].reset();
        hideError('#number');
    });

    // Show error message
    function showError(inputId, message) {
        if (!$(inputId).next('.error-message').length) {
            $(inputId).after(`<span class="error-message" style="color: red; font-size: 12px;">${message}</span>`);
        }
    }

    // Hide error message
    function hideError(inputId) {
        $(inputId).next('.error-message').remove();
    }
});
