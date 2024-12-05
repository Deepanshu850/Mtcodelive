<div>
    <!-- form slide -->

    <style>
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(3px);
            z-index: 999;
        }

        .overlay.active {
            display: block;
        }

        .no-scrollbar {

            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }


        .slide-in-form {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 400px;
            background-color: #f8f9fa;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease-in-out, visibility 0.5s;
            z-index: 1000;
            border-radius: 5px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .slide-in-form.active {
            opacity: 1;
            visibility: visible;
        }



        .slide-in-form form {
            display: flex;
            flex-direction: column;
        }

        .slide-in-form label {
            margin-top: 23px;
            margin-bottom: 5px;
            font-size: 12px;
            font-weight: 500;
        }

        .slide-in-form input[type="text"],
        .slide-in-form input[type="tel"],
        .slide-in-form select,
        .slide-in-form textarea {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        .slide-in-form .checkbox-container {
            display: flex;
            align-items: center;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .slide-in-form input[type="checkbox"] {
            margin-right: 10px;
            width: 24px;
            height: 24px;
        }

        .slide-in-form button {
            background-color: #007bff;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .slide-in-form button {
            background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b);
        }


        .slide-in-form .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 30px;
            cursor: pointer;
            color: white;
        }

        @media (max-width: 768px) {
            .slide-in-form {
                width: 90%;
                right: -100%;
            }

            .slide-in-form button {
                font-size: 1rem;
                background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b);

                text-shadow: 2px 0px 6px black;

            }
        }

        .slide-in-form {
            background: #005b53;
            color: white;

            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.42);
            background: linear-gradient(697deg, rgba(0, 91, 83, 0.98), rgba(0, 30, 18, 0.3), rgba(0, 91, 83, 0.9));
        }


        .slide-in-form .form-title {

            display: flex;

        }

        .slide-in-form .form-title img {
            width: 30px;
            height: 40px;
        }

        .slide-in-form .form-title p {
            font-size: 14px;
            margin-top: 10px;
            background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .slide-in-form h3 {
            color: white;
            font-size: 11px;
            margin-bottom: 20px;
            font-weight: 400;
        }

        .slide-in-form p {
            font-weight: 700;
            letter-spacing: 0.78px;
            font-size: 23px;
            margin-bottom: 7px;
        }

        /* new */

        .entryarea {
            position: relative;
            height: 32px;
            margin: 0;
            padding: 0;
            width: 100%;
            margin-block: 1rem;
        }

        .entryarea input,
        .entryarea textarea {
            position: absolute;
            width: 100%;
            outline: none;
            padding: 0px 30px;
            border-radius: 6px;
            background: transparent;
            transition: 200ms ease;
            z-index: 111;
            border: 2px solid transparent;
            transition: border 0.3s ease;
        }

        .entryarea textarea {
            border: 1px solid white;
            resize: none;
        }



        .entryarea label {
            position: absolute;
            color: white;
            padding: 10px 14px;
            margin: 0;
            /* background: #005b53; */
            transition: 0.2s ease;
            font-weight: 500;
            font-size: 13px;

        }

        .entryarea input:focus,
        .entryarea input:valid,
        .entryarea textarea:focus,
        .entryarea textarea:valid {
            color: white;
            border-image-source: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
            border-image-slice: 1;
            border-width: 2px;
            border-radius: 10px;
        }

        .entryarea input:focus+label,
        .entryarea input:valid+label,
        .entryarea textarea:focus+label,
        .entryarea textarea:valid+label {
            color: #e5b566;
            height: 30px;
            border-radius: 10px;
            transform: translate(4px, -15px) scale(0.83);
            z-index: 1111;
            padding-block: 0;
            padding-inline: 11px 10px;
        }

        .error-message {
            color: #e83737;
            font-size: 11px;
            margin-top: 5px;
            display: none;
            line-height: 14px;
            margin-top: 14px;
        }


        .slide-in-form .nice-select.open .list {
            z-index: 200;
            width: 102%;
            transform: translateX(-1%);
            padding-bottom: 4rem;
        }

        .nice-select,
        .nice-select:hover,
        .nice-select:focus {
            background: transparent;
        }

        select:focus {
            border-color: gold;
        }

        select option {
            background: #005b52;
            color: white;
            z-index: 257;
        }

        .nice-select .list {
            color: white;
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.42);
            background: linear-gradient(697deg, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1));
        }


        .nice-select .option:hover,
        .nice-select .option.focus,
        .nice-select .option.selected.focus {
            background: #005b52;
            background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nice-select .current,
        .nice-select .list .option {
            color: white;
        }

        .entryarea input:focus,
        .entryarea input:valid,
        .entryarea textarea:focus,
        .entryarea textarea:valid {
            font-size: 13px;
        }

        .slide-in-form .checkbox-container {
            display: flex;
            align-items: baseline;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .checkbox-container label {
            transform: translateY(-8px);
        }

        .slide-in-form .checkbox-container {
            margin: 0;
        }

        .entryarea label {
            left: 0;
        }

        /* slide in form styles */

        .slide-in-form input[type="text"],
        .slide-in-form input[type="tel"],
        .slide-in-form textarea {
            position: relative;
            border-top: none;
        }

        .slide-in-form .entryarea:has(input[type="text"]):before,
        .slide-in-form .entryarea:has(input[type="text"]):after,
        .slide-in-form .entryarea:has(input[type="tel"]):before,
        .slide-in-form .entryarea:has(input[type="tel"]):after,
        .slide-in-form .entryarea:has(textarea):before,
        .slide-in-form .entryarea:has(textarea):after {
            content: '';
            position: absolute;
            display: block;
            background: #ccc;
        }


        /* name input */

        .slide-in-form .entryarea:has(input[type="text"]):before {
            height: 1px;
            width: 5%;
            top: 0;
            left: 4px;
            transition:
                background 300ms ease,
                height 300ms ease;
        }

        .slide-in-form .entryarea:has(input[type="text"]:focus):before,
        .slide-in-form .entryarea:has(input[type="text"]:valid):before {
            height: 2px;
            left: 0;
            background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
        }

        .slide-in-form .entryarea:has(input[type="text"]):after {
            content: '';
            position: absolute;
            height: 1px;
            width: 95%;
            display: block;
            top: 0;
            right: 5px;
            background: #ccc;
            transition:
                background 300ms ease,
                height 300ms ease;
        }

        .slide-in-form .entryarea:has(input[type="text"]:focus):after,
        .slide-in-form .entryarea:has(input[type="text"]:valid):after {
            height: 2px;
            width: 70%;
            right: 0;
            background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
        }


        /*  mobile number input */

        .slide-in-form .entryarea:has(input[type="tel"]):before {
            height: 1px;
            width: 5%;
            top: 0;
            left: 4px;
            transition:
                background 300ms ease,
                height 300ms ease;
        }

        .slide-in-form .entryarea:has(input[type="tel"]:focus):before,
        .slide-in-form .entryarea:has(input[type="tel"]:valid):before {
            height: 2px;
            left: 0;
            background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
        }

        .slide-in-form .entryarea:has(input[type="tel"]):after {
            content: '';
            position: absolute;
            height: 1px;
            width: 95%;
            display: block;
            top: 0;
            right: 5px;
            background: #ccc;
            transition:
                background 300ms ease,
                height 300ms ease;
        }

        .slide-in-form .entryarea:has(input[type="tel"]:focus):after,
        .slide-in-form .entryarea:has(input[type="tel"]:valid):after {
            height: 2px;
            width: 62%;
            right: 0;
            background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
        }

        /* message input aka textarea */


        .slide-in-form .entryarea:has(textarea):before {
            height: 1px;
            width: 5%;
            top: 0;
            left: 4px;
            transition:
                background 300ms ease,
                height 300ms ease;
        }

        .slide-in-form .entryarea:has(textarea:focus):before,
        .slide-in-form .entryarea:has(textarea:valid):before {
            height: 2px;
            left: 0;
            background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
        }

        .slide-in-form .entryarea:has(textarea):after {
            content: '';
            position: absolute;
            height: 1px;
            width: 95%;
            display: block;
            top: 0;
            right: 5px;
            background: #ccc;
            transition:
                background 300ms ease,
                height 300ms ease;
        }

        .slide-in-form .entryarea:has(textarea:focus):after,
        .slide-in-form .entryarea:has(textarea:valid):after {
            height: 2px;
            width: 66%;
            right: 0;
            background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div id="slideInForm" class=" no-scrollbar slide-in-form">
        <button class="close-button" onclick="closeForm()">&times;</button>
        <form id="propertyForm">
            <div class="form-title">
                <img src="./assets/img/treelogo.png" alt="">
                <p>Moneytree Realty</p>
            </div>
            <p style="color: white;">Connect With Us</p>
            <p style="font-size: 11px;">Discover Your Dream Property Now!</p>

            <div class="entryarea">
                <input type="text" id="name" name="name" required>
                <label for="name">Your Name</label>
            </div>

            <div class="entryarea">
                <input type="tel" id="phoneNumber" name="phoneNumber" required>
                <label for="phoneNumber">Phone Number</label>
            </div>
            <span id="phoneError" class="error-message">Please enter a valid 10-digit phone number.</span>



            <div class="entryarea">
                <textarea id="message" name="message" required></textarea>
                <label for="message">Your Message</label>
            </div>



            <label for="query">What are you looking for?</label>
            <select id="query" name="query" required>

                <option>Choose an option</option>
                <option value="studio">Studio Apartment</option>
                <option value="2bhk">2BHK</option>
                <option value="3bhk">3BHK</option>
                <option value="retail">Retail Shops</option>
                <option value="other">Other</option>
            </select>

            <style>
                .checkbox-container input[type="checkbox"] {
                    display: none;
                }

                .checkbox-container label {
                    position: relative;
                    padding-left: 35px;
                    cursor: pointer;
                    user-select: none;
                    color: #000;
                    font-size: 16px;
                }

                .checkbox-container label:before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 5px;
                    width: 25px;
                    height: 25px;
                    border: 2px solid #dc35459e;
                    border-radius: 5px;
                    background-color: transparent;
                    transition: background-color 0.3s, transform 0.3s;
                }

                .checkbox-container label:after {
                    content: '';
                    position: absolute;
                    left: 13px;
                    top: -11px;
                    width: 14px;
                    height: 37px;
                    border: solid #053c36;
                    border-width: 0 4px 4px 0;
                    transform: rotate(45deg);
                    opacity: 0;
                    transition: opacity 0.2s, transform 0.25s;
                }

                .checkbox-container input[type="checkbox"]:checked+label:before {
                    background: #3f8c85a6;
                    transform: scale(1.1);
                    border-color: #198754;
                }

                .checkbox-container input[type="checkbox"]:checked+label:after {
                    opacity: 1;
                }

                .checkbox-container label {
                    position: relative;
                    padding-left: 35px;
                    cursor: pointer;
                    user-select: none;
                    color: white;
                    font-size: 14px;
                    line-height: 24px;
                }
            </style>

            <div class="checkbox-container">
                <input type="checkbox" id="consent" name="consent" required>
                <label for="consent">I agree to be contacted by MoneyTree Realty via RCS/SMS or CALL.</label>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const overlay = document.createElement('div');
            overlay.className = 'overlay';
            document.body.appendChild(overlay);

            setTimeout(function() {
                var form = document.getElementById('slideInForm');
                form.classList.add('active');
                overlay.classList.add('active');
            }, 5000);
            // change  this timer to change the time it takes for the form to slide in
        });

        function closeForm() {
            var form = document.getElementById('slideInForm');
            const overlay = document.querySelector('.overlay');
            form.classList.remove('active');
            overlay.classList.remove('active');
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#propertyForm').on('submit', function(e) {
                e.preventDefault();

                const phoneNumberInput = document.getElementById('phoneNumber');
                const phoneError = document.getElementById('phoneError');
                const phoneNumber = phoneNumberInput.value.trim();

                // Custom phone number validation
                if (phoneNumber.length !== 10 || !/^\d{10}$/.test(phoneNumber)) {
                    phoneError.style.display = 'block';
                    phoneError.innerText = `You have entered ${phoneNumber.length} digits. Please enter a valid 10-digit phone number.`;
                    return;
                } else {
                    phoneError.style.display = 'none';
                }

                $.ajax({
                    url: 'notiprocess.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Your form has been submitted successfully.',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                closeForm();
                                document.getElementById('propertyForm').reset();
                            }
                        });
                    },
                    error: function() {
                        Swal.fire({
                            title: 'Error!',
                            text: 'There was an error submitting your form.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>

    <!-- form slide -->
</div>