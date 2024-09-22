<?php
function getTypeLink($type)
{
    switch ($type) {
        case 'Residential':
            return './category/residential-property';
        case 'Commercial':
            return './category/commercial-property';
        case 'Studio Apartments':
            return './category/studio-apartments';
        case 'Plots':
            return './category/plots';
        default:
            return './404';
    }
}
?>
<br>

<div class="properties-grid" id="propertiesGrid">

    <?php if (empty($properties)) : ?>
        <!-- No Results Card -->
        <div class="property-card no-results-card">
            <img src="../assets/img/logo.png" alt="No Results Found">
            <h2>Can't find what you're looking for?</h2>
            <p>Unfortunately, we don't have properties in this location at the moment. But we're always adding new listings!</p>
            <a href="../contact.php#contact-form" class="details-link">Contact Us</a>
        </div>
    <?php else : ?>
        <?php foreach ($properties as $property) : ?>

            <div class="property-card fade-in">

                <!-- image part -->

                <div class="property-card-image">
                    <?php foreach ($property['images'] as $image): ?>
                        <img src="<?php echo $image; ?>" alt="<?php echo $property['name']; ?>">
                    <?php endforeach; ?>
                </div>


                <!-- data part -->
                <div class="property-card-text">
                    <h3>
                        <?php echo $property['name'] ?>
                    </h3>
                    <div class="data-grid">
                        <div>
                            <!-- type -->
                            <p>
                                Type
                            </p>

                            <?php foreach ($property['type'] as $type): ?>
                                <p>
                                    <?php echo htmlspecialchars($type); ?>
                                </p>
                            <?php endforeach; ?>

                        </div>
                        <div>
                            <!-- sector location -->
                            <p>
                                Possession
                            </p>
                            <p>
                                <?php echo $property['possession']; ?>

                            </p>
                        </div>
                        <div>
                            <!-- rera id -->
                            <p>
                                RERA
                            </p>
                            <p>
                                <a href="<?php echo $property['rera'][1]; ?>">
                                    <p style="max-width: 100px; overflow-wrap: break-word; font-size: 11px; line-height: 1.4; margin-top: 4px;">
                                        <?php echo $property['rera'][0]; ?>
                                    </p>
                                </a>

                                <?php
                                if (count($property['rera']) > 2) {
                                    for ($i = 2; $i < count($property['rera']); $i++) {
                                        echo '<p style="max-width: 100px; overflow-wrap: break-word; font-size: 11px; line-height: 1.4; margin-top: 4px;">';
                                        echo $property['rera'][$i];
                                        echo '</p>';
                                    }
                                }
                                ?>
                            </p>
                        </div>
                        <div>
                            <!-- pricing info -->
                            <p>
                                Pricing*
                            </p>
                            <p>
                                <?php echo $property['price']; ?>
                            </p>
                        </div>
                    </div>
                    <!-- <p class="read-more-content" id="text"> -->
                    <?php
                    // echo $property['shortDescription']; 
                    ?>
                    <!-- </p> -->

                    <!-- <span class="read-more-toggle" id="toggle">
                                        Read more <span class="icon">▼</span>
                                    </span> -->


                </div>

                <!-- button part -->

                <div class="property-card-button">
                    <button class="callback-button card-button">
                        Request callback
                    </button>
                    <a href="<?php echo $urlprefix . $property['link']; ?>" class="card-button card-button--white">
                        More info
                    </a>
                </div>

            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</div>

<div class="notification" id="notification"></div>
<!-- Backdrop for the dialog -->
<div class="backdrop" id="backdrop"></div>

<!-- Dialog with form -->
<dialog class="dialogue" id="dialog">
    <p>Contact Us</p>
    <form id="dialog-form" autocomplete="off">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" required autocomplete="off" placeholder="Your name here" maxlength="30">
        <label for="number">Number :</label>
        <div class="number-input-wrapper">
            <span class="country-code">+91</span>
            <input type="tel" id="number" name="number" required autocomplete="off" minlength="10" maxlength="10" placeholder="Enter 10 digits" pattern="[0-9]{10}" inputmode="numeric">
        </div>
        <label for="message">Message (optional) :</label>
        <textarea id="message" name="message" rows="3" autocomplete="off" placeholder="Your message"></textarea>

        <div class="button-div">
            <button class="card-button" type="submit">Submit</button>
            <button class="card-button--white" type="button" id="cancel-button">Cancel</button>
        </div>
    </form>

</dialog>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function() {
        $('#dialog-form').append('<input type="hidden" name="page_url" value="' + window.location.href + '">');

        $('#dialog-form').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: 'request-callback-form-process.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    console.log('Form submitted successfully');
                    $('#notification').text('Thanks for filling, We will get back soon!').fadeIn().delay(1600).fadeOut();
                    $('#dialog-form')[0].reset();

                    const dialog = document.getElementById('dialog');
                    const backdrop = document.getElementById('backdrop');
                    backdrop.classList.remove('show');
                    document.body.classList.remove('no-scroll');
                    dialog.close();
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'There was an error submitting your form.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });

        const dialog = document.getElementById('dialog');
        const backdrop = document.getElementById('backdrop');
        const callbackButtons = document.querySelectorAll('.callback-button'); // Changed: Renamed to callbackButtons
        const cancelButton = document.getElementById('cancel-button');

        callbackButtons.forEach(button => {
            button.addEventListener('click', function() {
                backdrop.classList.add('show');
                document.body.classList.add('no-scroll');
                dialog.showModal();
            });
        });

        cancelButton.addEventListener('click', function() {
            backdrop.classList.remove('show');
            document.body.classList.remove('no-scroll');
            dialog.close();
        });

        $('#dialog-form').on('submit', function(event) {
            backdrop.classList.remove('show');
            document.body.classList.remove('no-scroll');
            dialog.close();
            $('#dialog-form')[0].reset();
        });

        $('#cancel-button').on('click', function(event) {
            backdrop.classList.remove('show');
            document.body.classList.remove('no-scroll');
            dialog.close();
            $('#dialog-form')[0].reset();
        });
    });

    const toggleButton = document.getElementById('toggle');
    const textContent = document.getElementById('text');

    toggleButton.addEventListener('click', function() {
        // Toggle between showing full content and truncated content
        if (textContent.classList.contains('read-more-content')) {
            textContent.classList.remove('read-more-content');
            toggleButton.innerHTML = 'Read less <span class="icon">▲</span>';
        } else {
            textContent.classList.add('read-more-content');
            toggleButton.innerHTML = 'Read more <span class="icon">▼</span>';
        }
    });
</script>



<style>
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



    dialog {
        border: none;
        border-radius: 6px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        height: min-content;
        padding: 1em;
        max-width: 40svw;
        margin: auto;
    }

    .dialogue {
        width: 100%;
        background: radial-gradient(circle at top, #fff, #f9f9f9);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .dialogue label {
        font-size: 12px;
        color: #ced4da;
    }

    .dialogue textarea {
        border: none;
    }

    .dialogue input::placeholder,
    .dialogue textarea::placeholder {
        color: #6c757d;
    }

    .dialogue form {
        display: flex;
        flex-direction: column;
        padding: 1rem 0.8rem;

    }

    .dialogue form input,
    .dialogue form textarea {
        margin-bottom: 1em;
        border-radius: 6px;
        outline: 1.85px solid #e9ecef;
        padding: 4px 10px;
        font-size: 14px;
    }

    .dialogue p {
        text-transform: capitalize;
        background: radial-gradient(circle at top, #0e9688 0%, #007f70 30%, #005b52 100%);
        background: linear-gradient(45deg,
                #d39f51 0%,
                #e5b566 20%,
                #f2e19e 40%,
                #e5b566 60%,
                #f2e19e 70%,
                #d39f51 80%,
                #b28e4c 100%);


        background-clip: text;
        color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 700;
        font-size: 22px;
        width: max-content;
        margin-inline: auto;
        margin-bottom: -16px;
        letter-spacing: 1.6px;

    }

    .number-input-wrapper {
        display: flex;
        align-items: start;
    }

    .number-input-wrapper input {
        width: 100%;
    }

    .country-code {
        background: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        padding: .25rem .65rem .25rem .45rem;
        font-size: 14px;
        color: #6c757d;
        margin-right: 10px;
    }

    .dialogue .button-div {
        display: flex;
        justify-content: center;
        gap: 1rem;
    }

    .dialogue .button-div button {
        width: 30%;
        border-radius: 12px;
        transform: none;

    }



    .dialogue input:not(:placeholder-shown):valid {
        outline-color: #52b788;
    }


    .dialogue input:not(:placeholder-shown):invalid {
        outline-color: #ee6055;
    }

    .dialogue input:focus:invalid,
    .dialogue textarea:focus {
        outline-color: #ced4da;
    }

    /* Styles for the backdrop */
    .backdrop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: none;
        z-index: 1000;
    }

    .backdrop.show {
        display: block;
    }

    /* Prevent scrolling when the dialog is open */
    body.no-scroll {
        overflow: hidden;
    }



    .property-card {
        display: grid;
        grid-template-columns: 14rem 2fr 10rem;
        gap: 10px;
        padding: 12px;
        outline: 3px solid hsl(210, 17%, 98%);
        border-radius: 6px;
        box-shadow: rgba(0, 0, 0, 0.13) 0px 10px 12px -5px, rgba(0, 0, 0, 0.05) 12px 10px 10px -5px;
        margin-bottom: 2rem;
        transition: transform 120ms ease, box-shadow 100ms ease;
        width: 100%;
    }

    .property-card:hover {
        transform: translateY(-1.2px);
        box-shadow: rgba(0, 0, 0, 0.23) 0px 12px 14px -7px, rgba(0, 0, 0, 0.15) 14px 12px 12px -7px;

    }

    .data-grid p,
    .property-card h3 {
        margin: 0;
    }

    .property-card h3 {
        font-size: 20px;
        margin-block: 6px 12px;
    }

    .property-card p {
        font-size: 12px;
    }



    .property-card-image {
        display: flex;
        overflow: auto;
    }


    .property-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .property-card-text {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }



    .data-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px 0;
        place-items: center;
        font-size: 12px;
        background: #f8f9fa;
        padding-block: 1rem;
        margin-bottom: 8px;
        width: 98%;
        margin-inline: auto;
        border-radius: 8px;
        transform: translateY(8px);
        margin-bottom: 20px;
    }

    .data-grid>div {
        width: 100%;
        height: 100%;
        padding-left: 1.2rem;
    }

    .data-grid>div>p {
        margin-top: -8px;

    }


    .data-grid>div p:not(:first-child) {
        font-weight: 600;
    }

    .data-grid div:nth-child(odd) {
        border-right: 2px solid #dee2e6;

    }


    .read-more-content {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    #text {
        line-height: 1.5;
        margin-bottom: 0;

    }

    .show-more {
        display: none;
    }

    .read-more-toggle {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        font-weight: 400;
        font-size: 13px;
    }

    .read-more-toggle .icon {
        margin-left: 5px;
        font-weight: 400;
        font-size: 12px;
        color: #212529;
    }

    .property-card-button {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        gap: 25px;
        height: 100%;
    }


    .card-button {
        background: radial-gradient(circle at top, #0e9688 0%, #007f70 30%, #005b52 100%);
        padding: 12px 10px;
        border-radius: 12px;
        color: white;
        text-transform: capitalize;
        width: 100%;
        font-size: 14px;
        font-weight: 500;
        box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;
        position: relative;
        text-align: center;
        cursor: pointer;
    }


    .card-button:hover {
        transform: translateY(-1px);
        background: radial-gradient(circle at top, #0e9688 0%, #1c9486 30%, #005b52 100%);
        color: white;

    }

    .card-button--white {
        background: #fff;
        border: 2px solid #005b52;
        color: #005b52;

    }

    .card-button--white:hover {
        transform: translateY(-1px);
        background: radial-gradient(circle at top, #f3fdfc, #f6fdfc, #f3fffe);
        color: #005b52;

    }



    @media (width < 900px) {
        .property-card {
            grid-template-columns: 1fr;
        }

        .property-card-button {
            flex-direction: row;
            gap: 12px;
        }

        .property-card p {
            font-size: 11px;
        }

        dialog {
            max-width: 85%;
        }
    }
</style>