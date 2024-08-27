<!-- EMI Calculator Card -->
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
    <!-- Include SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="sticky-container emi-calculator-card">
    <h2>Contact Us</h2>
     <form id="contactForm">
        <input type="text" id="name" name="name" placeholder="Your Name" required>
        <input type="text" id="phone" name="phone" placeholder="Your Phone Number" required>
        <input type="text" id="subject" name="subject" placeholder="What Are You Looking For !!" required>
        <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>

    <script>
        $(document).ready(function () {
            $('#contactForm').on('submit', function (e) {
                e.preventDefault();

                // Validate form
                var isValid = true;
                $('#contactForm input, #contactForm textarea').each(function() {
                    if ($(this).val() === '') {
                        isValid = false;
                        return false;
                    }
                });

                // Validate phone number (basic validation, checks if it is numeric and 10 digits long)
                var phone = $('#phone').val();
                var phonePattern = /^[0-9]{10}$/;
                if (!phonePattern.test(phone)) {
                    isValid = false;
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please enter a valid 10-digit phone number!'
                    });
                    return;
                }

                if (!isValid) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please fill out all fields!'
                    });
                    return;
                }

                // AJAX submission
                $.ajax({
                    type: 'POST',
                    url: 'projectformprocess.php',
                    data: $('#contactForm').serialize(),
                    success: function (response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Message Sent',
                            text: 'Your message has been sent successfully!'
                        });
                        $('#contactForm')[0].reset();
                    },
                    error: function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong. Please try again later!'
                        });
                    }
                });
            });
        });
    </script>
    <h2>EMI Calculator</h2>
    <div class="input-group">
        <label for="principal">Principal Amount:</label>
        <input type="number" id="principal" placeholder="Enter principal amount">
    </div>
    <div class="input-group">
        <label for="rate">Annual Interest Rate (%):</label>
        <input type="number" id="rate" placeholder="Enter annual interest rate">
    </div>
    <div class="input-group">
        <label for="years">Loan Tenure (Years):</label>
        <input type="number" id="years" placeholder="Enter loan tenure in years">
    </div>
    <div class="input-group">
        <label for="months">Additional Months:</label>
        <input type="number" id="months" placeholder="Enter additional months">
    </div>
    <button onclick="calculateEMI()">Calculate EMI</button>
    <div id="emiResult"></div>
    <div id="emiDetails" style="display:none;">
        <h3>EMI Details</h3>
        <p id="monthlyEmi"></p>
        <p id="totalInterest"></p>
        <p id="totalPayment"></p>
    </div>
    <canvas id="emiChart"></canvas>
</div>