<style>
    .contact-form {
        display: flex;
        flex-direction: column;
        padding: 6px;
        /* background: #f9f9f9; */
        background: linear-gradient(to bottom right, rgba(249, 249, 249, 0.51), rgba(50, 97, 92, 0.05));
        background-color: #f9f9f9;
        margin: 20px 16px 0 0;
        padding: 16px;
        border-radius: 10px;
        margin-bottom: 2rem;
        outline: 1px solid rgba(0, 91, 82, 0.15);
    }

    .contact-form h2 {
        padding-top: 1rem;
    }

    .contact-form>form {
        display: flex;
        flex-direction: column;
        font-size: 13px;
    }

    .contact-form input {
        padding: 10px 8px;
        margin-block: 8px;
        border-radius: 6px;
        outline: 1px solid rgba(241, 234, 234, 0.6);
    }

    .contact-form input:focus {
        outline: 1px solid rgb(110, 106, 106);
    }

    .contact-form textarea {
        outline: 1px solid rgba(241, 234, 234, 0.6);
        border: none;
        border-radius: 6px;
        padding: 10px 8px;
    }

    .contact-form textarea:focus {
        outline: 1px solid rgb(110, 106, 106);
    }

    .contact-form button {
        margin: 1rem 0;
        border-radius: 3px 12px;
        padding: 4px 10px;
        color: white;
        font-weight: 600;
        background: linear-gradient(to right, #0e9688, #005b52, #0e9688);


    }

    @media (width < 1000px) {
        .contact-form {
            margin-inline: 1.5rem;

        }

        .side-flex-right {
            /* padding-inline: 1.5rem; */
        }
    }



    /* .contact-form button:hover {
            background: linear-gradient(to right, #005b52, #0e9688, #005b52);

        } */
</style>


<!-- sucessfull submisson after effect -->
<style>
    .success-message {
        text-align: center;
        padding: 20px;
    }

    .checkmark {
        width: 100px;
        height: 100px;
        margin: 0 auto;
        border-radius: 50%;
        display: block;
        stroke-width: 2;
        stroke: #4caf50;
        stroke-miterlimit: 10;
        box-shadow: inset 0px 0px 0px #4caf50;
        animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
    }

    .checkmark__circle {
        stroke-dasharray: 166;
        stroke-dashoffset: 166;
        stroke-width: 2;
        stroke-miterlimit: 10;
        stroke: #4caf50;
        fill: #fff;
        animation: stroke .6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
    }

    .checkmark__check {
        transform-origin: 50% 50%;
        stroke-dasharray: 48;
        stroke-dashoffset: 48;
        animation: stroke .3s cubic-bezier(0.65, 0, 0.45, 1) .8s forwards;
    }

    @keyframes stroke {
        100% {
            stroke-dashoffset: 0;
        }
    }

    @keyframes scale {

        0%,
        100% {
            transform: none;
        }

        50% {
            transform: scale3d(1.1, 1.1, 1);
        }
    }

    @keyframes fill {
        100% {
            box-shadow: inset 0px 0px 0px 30px #4caf50;
        }
    }
</style>



<div class="contact-form emi-calculator-card">
    <h2>Contact Us</h2>
    <form id="contactForm">
        <input type="text" id="name" name="name" placeholder="Your Name" required>
        <input type="text" id="phone" name="phone" placeholder="Your Phone Number" required>
        <span id="phone-error" style="color: red; display: none;">Phone number must be 10 digits</span>
        <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function() {
        // Add hidden input field for current page URL
        $('#contactForm').append('<input type="hidden" name="page_url" value="' + window.location.href + '">');

        // Phone number validation
        $('#phone').on('input', function() {
            var phone = $(this).val();
            if (phone.length !== 10 || isNaN(phone)) {
                $('#phone-error').text('Phone number must be 10 digits').show();
            } else {
                $('#phone-error').hide();
            }
        });

        $('#contactForm').on('submit', function(e) {
            e.preventDefault();

            var phone = $('#phone').val();
            if (phone.length !== 10 || isNaN(phone)) {
                $('#phone-error').text('Phone number must be 10 digits').show();
                return;
            }

            console.log('Form submitted');

            $.ajax({
                url: '../real-estate-page-form-process.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    console.log('AJAX success:', response);
                    // Replace form content with a success message
                    $('.contact-form.emi-calculator-card').html(`
                        <div class="success-message">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                            </svg>
                            <h2>Submitted Successfully</h2>
                            <p>Your message has been sent.</p>
                        </div>
                    `);
                },
                error: function(xhr, status, error) {
                    console.error('AJAX error:', status, error);
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


<style>
    .wi img {
        width: 100%;
        height: auto;
        aspect-ratio: 16 / 9;
        object-fit: cover;
        border-radius: 6px;
        margin-bottom: 1rem;


    }

    .date {
        font-size: 13px;
        color: #000;
        margin: 0;
    }

    .page-title {
        color: #000000;
        margin-bottom: 6px;
        font-size: 16px;

    }

    div [ class="single-widgets widget_egns_recent_post mb-20"] {
        margin-top: 3rem;
        padding-inline: 1rem;
    }

    .single-widgets .wp-block-tag-cloud {
        margin-bottom: 0;
        line-height: 1;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px
    }

    .single-widgets .wp-block-tag-cloud a {
        color: var(--text-color);
        text-align: center;
        font-family: var(--font-open-sans);
        font-size: 14px;
        font-weight: 600;
        border-radius: 5px;
        border: 1px solid rgba(255, 255, 255, .8);
        line-height: 1;
        padding: 8px 18px;
        position: relative;
        overflow: hidden;
        z-index: 1;
        white-space: nowrap;
        transition: all .5s ease-out 0s
    }

    @media(max-width:1399px) {
        .single-widgets .wp-block-tag-cloud a {
            padding: 8px 14px
        }
    }

    .single-widgets .wp-block-tag-cloud a::after {
        position: absolute;
        content: "";
        display: block;
        left: -5%;
        right: -20%;
        top: -4%;
        height: 150%;
        width: 150%;
        bottom: 0;
        border-radius: 2px;
        background-color: var(--title-color);
        transform: skewX(45deg) scale(0, 1);
        z-index: -1;
        transition: all .5s ease-out 0s
    }

    .single-widgets .wp-block-tag-cloud a:hover {
        color: var(--white-color);
        border-color: var(--title-color)
    }

    .single-widgets .wp-block-tag-cloud a:hover::after {
        transform: skewX(45deg) scale(1, 1)
    }

    div[class="single-widgets widget_egns_tag"],
    .wp-block-tag-cloud {
        background: linear-gradient(to bottom right, rgba(249, 249, 249, 0.51), rgba(50, 97, 92, 0.05));
    }

    div[class="single-widgets widget_egns_tag"] {
        padding-top: 2rem;
        padding-inline: 14px;
        border-radius: 10px;
    }

    div[class="single-widgets widget_egns_tag"]>p {
        padding-bottom: 2rem;

    }
</style>



<?php
include '../data/tempdata.php';
$url = $_SERVER['REQUEST_URI'];


$posts = [];

if (strpos($url, 'noida-real-estate') !== false) {
    $posts = array_filter($properties, function ($property) {
        return $property['location'][0] === 'Noida';
    });
}

if (strpos($url, 'gurgaon-real-estate') !== false) {
    $posts = array_filter($properties, function ($property) {
        return $property['location'][0] === 'Gurugram';
    });
}

function titleToSlug($title)
{
    $slug = strtolower(trim($title));
    $slug = preg_replace('/[^a-z0-9-]+/', '-', $slug);
    return $slug;
}
?>

<div class="single-widgets widget_egns_recent_post mb-20">
    <div class="widget-title blog-title mb-20">
        <div class="slider-btn-group2 d-flex align-items-center justify-content-between">
            <div class="slider-btn prev-51">
                <svg width="7" height="12" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                </svg>
            </div>
            <h6>Similar Properties</h6>
            <div class="slider-btn next-51">
                <svg width="7" height="12" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                </svg>
            </div>
        </div>
    </div>


    <?php include '../data/tempdata.php'; ?>

    <div class="recent-post-wraper">
        <div class="swiper recent-post-sidebar-slider">
            <div class="swiper-wrapper" id="page-posts-container">
                <?php foreach ($posts as $post): ?>
                    <?php $postUrl = '../propertydetail/' . $post['link']; ?>
                    <div class="swiper-slide">
                        <div class="widget-cnt">
                            <div class="wi">
                                <a href="<?= $postUrl; ?>"><img class="mpmpmp" src="../<?= $post['images'][1]; ?>" alt="<?= $post['name']; ?> image"></a>
                            </div>
                            <div class="wc">
                                <h6><a class="page-title" href="<?= $postUrl; ?>"><?= $post['name']; ?></a></h6>
                            </div>
                            <div class="card-grid">
                                <div>
                                    <p>Location</p>
                                    <p><?php echo $post['location'][1]; ?></p>
                                </div>
                                <div>
                                    <p>Pincode</p>
                                    <p><?php echo $post['location'][2]; ?></p>

                                </div>
                                <div>
                                    <p>Price</p>
                                    <p><?php echo $post['price']; ?></p>
                                </div>
                                <div>
                                    <p>Type</p>
                                    <p>
                                        <?php foreach ($post['type'] as $type): ?>
                                            <span>
                                                <?php echo $type; ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </p>
                                </div>
                                <div>
                                    <p>Rera</p>
                                    <p><?php echo $post['rera'][0]; ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<style>
    .card-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 6px 0;
        margin-top: 10px;
    }

    .card-grid div p:first-child {
        font-weight: 700;
    }

    .card-grid p {
        font-size: 11px;
        line-height: 1.6;
        margin-bottom: 0;
    }

    .card-grid span {
        font-size: 10px;
        margin: 0;
        display: inline-block;
    }

    .card h2,
    .card a {
        background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;

    }

    .card a {
        font-weight: 600;
    }

    .side-flex>div {
        position: sticky;
        top: -23rem;
    }

    @media (width < 700px) {
        .side-flex>div {
            top: 0rem;
        }
    }
</style>



<div class="single-widgets widget_egns_recent_post mb-20">
    <div class="widget-title blog-title mb-20">
        <div class="slider-btn-group2 d-flex align-items-center justify-content-between">
            <div class="slider-btn prev-51">
                <svg width="7" height="12" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                </svg>
            </div>
            <h6>Recent Pages</h6>
            <div class="slider-btn next-51">
                <svg width="7" height="12" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                </svg>
            </div>
        </div>
    </div>


    <?php
    $pages = [
        [
            'id' => 1,
            'name' => '3 BHK Flats in Noida',
            'imageUrl' => './assets/img/3bhk-flats-in-noida.jpeg',
        ],
        [
            'id' => 2,
            'name' => '4 BHK Flats in Noida',
            'imageUrl' => './assets/img/4bhk-flats-in-noida.jpeg',
        ],
        [
            'id' => 3,
            'name' => 'Property in Noida',
            'imageUrl' => './assets/img/property-in-noida.webp',
        ],
    ];
    ?>

    <div class="recent-post-wraper">
        <div class="swiper recent-post-sidebar-slider">
            <div class="swiper-wrapper" id="page-posts-container">
                <?php foreach ($pages as $page): ?>
                    <?php $postUrl = '../' . titleToSlug($page['name']); ?>
                    <div class="swiper-slide">
                        <div class="widget-cnt">
                            <div class="wi">
                                <a href="<?= $postUrl; ?>"><img src="../<?= $page['imageUrl']; ?>" alt="<?= $page['name']; ?> image"></a>
                            </div>
                            <div class="wc">
                                <h6><a class="page-title" href="<?= $postUrl; ?>"><?= $page['name']; ?></a></h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>