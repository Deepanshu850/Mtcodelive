<div>
    <div class="single-widgets widget_egns_recent_post mb-20">
        <div class="widget-title blog-title mb-20">
            <h6>Explore Celeb Homes</h6>
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

        <?php
        include '../data/celeb-homes-data.php';
        ?>

        <div class="recent-post-wraper">
            <div class="swiper recent-post-sidebar-slider">
                <div class="swiper-wrapper" id="property-posts-container">
                    <?php foreach ($celebHomesData as $home): ?>
                        <?php $postUrl = '../celeb-homes/' . $home['link']; ?>
                        <div class="swiper-slide">
                            <div class="widget-cnt">
                                <div class="wi">
                                    <a href="<?= $postUrl; ?>">
                                        <img class="sliderImage" src="../celeb-homes/assets/<?= $home['images'][0]; ?>" alt="<?= $home['name']; ?> image">
                                    </a>
                                </div>
                                <div class="wc">
                                    <h6>
                                        <a class="page-title" href="<?= $postUrl; ?>"><?= $home['name']; ?></a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

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
</div>