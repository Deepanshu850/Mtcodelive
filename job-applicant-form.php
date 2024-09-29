<form id="job-application-form" action="" class="job-application-form" method="post" enctype="multipart/form-data" autocomplete="off">
    <div>
        <label>Your Name :</label>
        <input type="text" name="name" placeholder="" required pattern="[A-Za-z\s]+" title="Name should only contain letters and spaces." autocomplete="off">
    </div>
    <div>
        <label>Your Email :</label>
        <input type="email" name="email" placeholder="example@gmail.com" required autocomplete="off">
    </div>
    <div>
        <label>Mobile :</label>
        <input type="tel" name="mobile" placeholder="Mobile" required pattern="\d{10}" title="Mobile number should be 10 digits." minlength="10" maxlength="10" autocomplete="off">
    </div>
    <div style="display: flex;">
        <div>
            <label>Experience Years :</label>
            <input style="max-width: 100px;" type="number" name="experience_years" placeholder="" required min="0" max="50" title="Experience should be between 1 and 50 years." autocomplete="off">
        </div>

        <div class="file-upload-wrapper">
            <label for="resume">Drop your resume :</label>
            <label for="" class="file-upload-label">
                <i class="bi bi-paperclip form-icon"></i>
                <div class="file-details">
                    <p style="margin-bottom: 0; max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" id="file-chosen-text">
                        Drop or Attach file here
                    </p>
                    <span><small>(Max 5MB size)</small> </span>
                </div>
            </label>
            <input type="file" name="resume" id="exampleFormControlFile1" accept=".pdf,.doc,.docx" onchange="validateFile()" required autocomplete="off">
        </div>
    </div>

    <div>
        <button type="submit" class="apply-button">Submit Now</button>
    </div>
</form>

<div class="notification" id="notification"></div>

<style>
    /* Hide the number input spinner buttons */
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* For Firefox */
    input[type="number"] {
        -moz-appearance: textfield;
    }

    .form-icon {
        font-size: 2.7rem;
        color: #005b52;
        margin-inline: 2px 10px;
    }

    .form-icon::before {
        font-weight: 400 !important;
        transform: rotate(33deg);
    }

    /* Style for file input wrapper */

    .file-upload-wrapper {
        position: relative;
        width: fit-content;
        /* max-width: 12rem; */
        margin: 10px 0;
        display: flex;
        gap: 2rem;
    }


    .job-application-form {
        display: none;
        flex-direction: column;
        padding: 2rem 1.8rem;
        width: 50%;
        position: relative;
        left: 10vw;
        border: 1px solid rgba(0, 91, 82, 0.34);
        border-radius: 8px;
    }


    /* Hides the default file input */
    .job-application-form input[type="file"] {
        width: 60%;
        position: absolute;
        top: 0;
        right: 0;
        opacity: 0;
        cursor: pointer;
        height: 100%;
    }

    /* Style for the custom file label */
    .file-upload-label {
        display: flex;
        align-items: center;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #f9f9f9;
        cursor: pointer;
        background: #fff;
        border: 1px solid #005b52;

    }

    .file-icon {
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .file-details {
        display: flex;
        flex-direction: column;
    }

    .file-details small {
        color: #adb5bd;
        font-size: 12px;
    }

    .file-details p {
        color: #005b52;
        font-size: 14px;
        margin-top: 5px;
    }

    #file-preview-icon {
        width: 40px;
        height: 40px;
        object-fit: contain;
    }

    .job-application-form label {
        font-size: 12px;
        color: #ced4da;
        width: max-content;
    }

    .job-application-form input::placeholder {
        color: #6c757d;

    }


    .job-application-form input {
        margin-bottom: 1em;
        border-radius: 6px;
        outline: 1.85px solid #e9ecef;
        padding: 4px 10px;
        font-size: 14px;
        width: 100%;
    }


    .job-application-form input:not(:placeholder-shown):valid {
        outline-color: #52b788;
    }


    .job-application-form input:not(:placeholder-shown):invalid {
        outline-color: #ee6055;
    }

    .job-application-form input:focus:invalid {
        outline-color: #ced4da;
    }

    @media (width < 700px) {
        .job-application-form {
            /* display: flex; */
            flex-direction: column;
            padding: 1.2rem 1rem;
            width: 96%;
            position: relative;
            left: 0;
            margin-inline: auto;

        }

        .file-upload-wrapper {
            flex-direction: column;
        }

        .job-application-form div[style="display: flex;"] {
            flex-direction: column;
            margin-top: 1rem;
        }

        .job-application-form input[type="file"] {
            width: 100%;
            position: absolute;
            top: auto;
            bottom: 0;
            right: 0;
            opacity: 0;
            cursor: pointer;
            height: 50%;
        }

        .job-application-form button {
            margin-inline: auto;

        }
    }

    .notification {
        position: fixed;
        bottom: 10%;
        left: 1rem;
        padding: 10px;
        background: radial-gradient(circle at top,
                rgba(14, 150, 136, 0.8) 0%,
                rgba(0, 127, 112, 0.95) 30%,
                rgba(0, 91, 82, 0.8) 100%);
        color: #ffffff;
        border-radius: 5px;
        display: none;
        font-size: 14px;
        z-index: 1000;
        padding-inline: 1.5rem;

    }
</style>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.form-toggle').click(function() {
            $('.job-application-form').fadeToggle(300, function() {
                if ($(this).is(':visible')) {
                    var scrollToPosition = $(this).offset().top - (window.innerHeight * 0.25);
                    $('html, body').animate({
                        scrollTop: scrollToPosition
                    }, 300); // 300 milliseconds for the scroll animation
                }
            });
        });
    });



    function updateFileName() {
        var fileInput = document.getElementById('exampleFormControlFile1');
        var fileChosenText = document.getElementById('file-chosen-text');

        if (fileInput.files.length > 0) {
            var fileName = fileInput.files[0].name;
            fileChosenText.textContent = fileName;
        } else {
            fileChosenText.textContent = "No file chosen";
        }
    }

    function validateFile() {
        const fileInput = document.getElementById('exampleFormControlFile1');
        const filePath = fileInput.value;
        const allowedExtensions = /(\.pdf|\.doc|\.docx)$/i;
        if (!allowedExtensions.exec(filePath)) {
            alert('Please upload a file with extensions .pdf/.doc/.docx only.');
            fileInput.value = '';
            return false;
        }
        if (fileInput.files[0].size > 5242880) { // 5MB
            alert('File size exceeds 5 MB');
            fileInput.value = '';
            return false;
        }
        updateFileName();
    }

    $(document).ready(function() {
        $('#job-application-form').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Create a FormData object to handle both form fields and file upload
            var formData = new FormData(this);

            $.ajax({
                url: './applicantprocess.php',
                type: 'POST',
                data: formData,
                contentType: false, // Important for file upload
                processData: false, // Important for file upload
                success: function(response) {
                    console.log('Form submitted successfully');
                    $('#notification').text('Success!').fadeIn().delay(2000).fadeOut();
                    $('#job-application-form')[0].reset();
                    $('.job-application-form').fadeOut(300);
                },
                error: function(xhr, status, error) {
                    alert('An error occurred: ' + error);
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>