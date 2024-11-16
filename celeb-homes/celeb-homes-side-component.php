<div class="single-widgets widget_egns_recent_post mb-20">
    <div class="widget-title blog-title mb-20">
        <h6>More Celebrity Homes</h6>
        <div class="slider-btn-group2 d-flex align-items-center justify-content-between">
            <div class="slider-btn prev-51">
                <svg width="7" height="12" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                </svg>
            </div>
            <div class="slider-btn next-51">
                <svg width="7" height="12" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="recent-post-wraper">
        <div class="swiper recent-post-sidebar-slider">
            <div class="swiper-wrapper" id="property-posts-container">
                <?php foreach ($celebHomesData as $home): ?>
                    <?php $postUrl = './' . $home['link']; ?>
                    <div class="swiper-slide">
                        <div class="widget-cnt">
                            <div class="wi">
                                <a href="<?= $postUrl; ?>"><img class="sliderImage" src="./assets/<?= $home['images'][0]; ?>" alt="<?= $home['name']; ?> image"></a>
                            </div>
                            <div class="wc">
                                <h6><a class="page-title" href="<?= $postUrl; ?>"><?= $home['name']; ?></a></h6>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<style>
    .swiper-slide img {
        height: 220px;
        object-fit: cover;
    }
</style>


<div class="contactFormWrapper">

    <div>
        <a href="tel:+919732300007" class="card-button" style="display: block; text-align: center; padding: 6px 20px;width: 40%;margin-inline: auto;">
            Call us
        </a>
        <span style="font-weight: bold; color: #808080; display: flex; justify-content: center;">
            or
        </span>
        <p style="color: #808080; font-size: 14px;">
            Fill the form below
        </p>
    </div>

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
</div>


<style>
    .contactFormWrapper {
        padding: 1.5rem 1rem;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1), inset 0 0 5px rgba(0, 0, 0, 0.05);
        margin: 1rem;
        margin-right: 0;
    }

    .contactFormWrapper label {
        font-size: 12px;
        color: #ced4da;
    }

    .contactFormWrapper textarea {
        border: none;
    }

    .contactFormWrapper input::placeholder,
    .contactFormWrapper textarea::placeholder {
        color: #6c757d;
    }

    .contactFormWrapper form {
        display: flex;
        flex-direction: column;
        padding: 1rem 0.8rem;
    }

    .contactFormWrapper form input,
    .contactFormWrapper form textarea {
        margin-bottom: 1em;
        border-radius: 6px;
        outline: 1.85px solid #e9ecef;
        padding: 4px 10px;
        font-size: 14px;
    }

    .contactFormWrapper p {
        text-transform: capitalize;

        background: linear-gradient(45deg,
                #000000 0%,
                #333333 20%,
                #666666 40%,
                #4d4d4d 70%,
                #262626 80%,
                #000000 100%);

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
        border-radius: 0.25rem;
        padding: 0.25rem 0.65rem 0.25rem 0.45rem;
        font-size: 14px;
        color: #6c757d;
        margin-right: 10px;
    }

    .contactFormWrapper .button-div {
        display: flex;
        justify-content: center;
        gap: 1rem;
    }

    .contactFormWrapper .button-div button {
        width: 30%;
        border-radius: 12px;
        transform: none;
    }

    .contactFormWrapper input:not(:placeholder-shown):valid {
        outline-color: #52b788;
    }

    .contactFormWrapper input:not(:placeholder-shown):invalid {
        outline-color: #ee6055;
    }

    .contactFormWrapper input:focus:invalid,
    .contactFormWrapper textarea:focus {
        outline-color: #ced4da;
    }

    .card-button {
        background: radial-gradient(circle at top,
                #0e9688 0%,
                #007f70 30%,
                #005b52 100%);
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
        background: radial-gradient(circle at top,
                #0e9688 0%,
                #1c9486 30%,
                #005b52 100%);
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
</style>