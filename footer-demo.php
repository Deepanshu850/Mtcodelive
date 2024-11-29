<style>
    /* Footer Section */
    .footer {
        background: linear-gradient(to left, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.8));
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3);
        /* padding: 40px 20px; */
        color: rgba(255, 255, 255, 0.9);
        font-size: 14px;
        height: 86dvh;
    }

    .footer-wrapper {
        width: 100%;
        height: 100%;


        background: radial-gradient(circle at top right,
                /* Fade from green to transparent */
                rgba(0, 91, 82, 1) 0%,
                rgba(0, 91, 82, 0.9) 10%,
                rgba(0, 91, 82, 0.8) 20%,
                rgba(0, 91, 82, 0.7) 30%,
                /* rgba(0, 91, 82, 0.5) 40%, */
                /* rgba(0, 91, 82, 0.4) 45%, */
                /* rgba(0, 91, 82, 0.3) 47%, */
                /* rgba(0, 91, 82, 0.3) 49%, */
                /* rgba(0, 91, 82, 0.0) 50%, */
                /* Fade from transparent back to green */
                /* rgba(0, 91, 82, 0.0) 50%, */
                /* rgba(0, 91, 82, 0.2) 51%, */
                /* rgba(0, 91, 82, 0.3) 53%, */
                rgba(0, 91, 82, 0.5) 55%,
                rgba(0, 91, 82, 0.5) 60%,
                rgba(0, 91, 82, 0.6) 70%,
                rgba(0, 91, 82, 0.7) 80%,
                rgba(0, 91, 82, 0.75) 90%,
                rgba(0, 91, 82, 0.8) 100%);


        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);

        display: grid;
        grid-template-columns: repeat(12, 1fr);
        grid-template-rows: repeat(12, 1fr);
        padding: 40px 20px;


    }

    .footer>* {
        /* outline: 1px solid red; */
    }


    .footer-address {
        grid-column: 2/6;
        grid-row: 1/10;
    }


    .footer-links {
        grid-column: 6/12;
        grid-row: 1/10;
    }


    .footer-bottom {
        grid-column: 2/12;
        grid-row: 10/13;
    }



    .footer-logo {
        margin-bottom: 20px;
    }

    .footer-logo img {
        max-width: 180px;
        filter: drop-shadow(0 2px 8px rgba(6, 98, 99, 1));
        transition: filter 200ms ease;
    }

    .footer-logo img:hover {
        filter: drop-shadow(0 0 15px rgba(240, 203, 123, 0.5));
    }


    .footer-text p {
        margin: 0 0 10px;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.8);
    }

    .footer-text a {
        font-size: 16px;
        font-weight: 600;
        background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }


    .footer-contact a {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        color: rgba(255, 255, 255, 0.9);
        background: linear-gradient(300deg, #e5b566, #f0cb7b, #f8e292, #f8e292, #e5b566, #fff7a9);
        font-size: 16px;
        font-weight: 600;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .footer-contact svg {
        margin-right: 10px;
        width: 20px;
        height: 20px;
        fill: #c88e35;
    }

    .footer-social {
        margin-top: 20px;
        display: flex;
        gap: 6px;
    }

    .footer-social a img {
        width: 24px;
        height: 24px;
        margin-right: 10px;
        transition: transform 0.3s ease;
    }

    .footer-social a img:hover {
        scale: 1.1;
    }

    .footer-links {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        gap: 15px;

    }

    .footer-links h3 {
        color: white;
        font-size: 18px;
        border-bottom: 2px solid;
    }

    .footer-links-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        place-items: center;
    }

    .footer-links li {
        margin-bottom: 10px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.8);
        font-weight: 500;
    }

    .footer-bottom {
        margin-top: 40px;
        text-align: center;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.7);
    }
</style>

<footer class="footer">

    <div class="footer-wrapper">

        <!-- Column 1: Logo and Contact -->
        <div class="footer-address">
            <div class="footer-logo">
                <a href="./index.php"><img src="./assets/img/footer-logo.png" alt="Moneytree Realty Logo"></a>
            </div>
            <!-- <div class="footer-text">
            </div> -->
            <address class="footer-text">
                <p>Floor no-2, Tapasya Corp Heights,<br> Subarea, Sector 126, Noida, <br> Uttar Pradesh 201303</p>
            </address>
            <div class="footer-contact">
                <a href="tel:+919266313539">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.17-.17c1.12.56 2.38.86 3.69.86a1 1 0 011 1v3.59a1 1 0 01-1 1C10.64 22.96 1.04 13.36 1.04 4a1 1 0 011-1H5.63a1 1 0 011 1c0 1.31.3 2.57.86 3.69a1 1 0 01-.17 1.17l-2.2 2.2z" />
                    </svg>
                    +91-9266313539
                </a>
                <a href="mailto:info@moneytreerealty.com">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path d="M29 4H3a3 3 0 0 0-3 3v18a3 3 0 0 0 3 3h13v-2H3a1 1 0 0 1-1-1V7.23l13.42 9.58a1 1 0 0 0 1.16 0L30 7.23V17h2V7a3 3 0 0 0-3-3zM16 14.77 3.72 6h24.56z" />
                        <path d="m24.29 18.29-4 4 1.41 1.41 2.3-2.29V29h2v-7.59l2.29 2.29 1.41-1.41-4-4a1 1 0 0 0-1.41 0z" />
                    </svg>
                    info@moneytreerealty.com
                </a>
            </div>
            <div class="footer-social">
                <a target="_blank" href="https://www.facebook.com/moneytreerealtyofficial"><img src="./assets/img/home2/icon/facebook.svg" alt="Facebook"></a>
                <a target="_blank" href="https://www.instagram.com/moneytreerealtyofficial/"><img src="./assets/img/home2/icon/insta.svg" alt="Instagram"></a>
                <a target="_blank" href="https://www.linkedin.com/company/moneytree-realty-services/mycompany/"><img src="./assets/img/home2/icon/linkedin.svg" alt="LinkedIn"></a>
                <a target="_blank" href="https://www.youtube.com/@Moneytreerealtyofficial"><img src="./assets/img/home2/icon/youtube.svg" alt="LinkedIn"></a>
            </div>
        </div>

        <!-- Column 2: Useful Links -->
        <div class="footer-links">
            <h3>Useful Links</h3>
            <ul class="footer-links-list">
                <li><a href="./index">Home</a></li>
                <li><a href="./real-estate-consultant">Our Services</a></li>
                <li><a href="./contact">Contact Us</a></li>
                <li><a href="./about-us">About Us</a></li>
                <li><a href="./blog/index">Latest News</a></li>
                <li><a href="./sitemap">Sitemap</a></li>
                <li><a href="./privacy-policy">Privacy Policy</a></li>
            </ul>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024, All rights reserved. Moneytree Realty Services Private Limited</p>
            <p>RERA Numbers: Noida: UPRERAAGT25048, Gurugram: RC/HARERA/GGM/2569/2164/2024/282</p>
        </div>
    </div>
</footer>