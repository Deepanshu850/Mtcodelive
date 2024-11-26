<style>
    /* General Reset */
    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    a {
        text-decoration: none;
        transition: color 0.3s ease;
    }

    a:hover {
        color: #c88e35;
    }

    /* Footer Section */
    .footer {
        background: rgba(0, 91, 82, 0.85);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3);
        padding: 40px 20px;
        color: rgba(255, 255, 255, 0.9);
        font-size: 14px;
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 20px;
    }

    .footer-logo {
        margin-bottom: 20px;
    }

    .footer-logo img {
        max-width: 180px;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.4));
    }

    .footer-text {
        margin-bottom: 20px;
    }

    .footer-text p {
        margin: 0 0 10px;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.8);
    }

    .footer-contact a {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        color: rgba(255, 255, 255, 0.9);
    }

    .footer-contact svg {
        margin-right: 10px;
        width: 20px;
        height: 20px;
        fill: #c88e35;
    }

    .footer-social {
        margin-top: 20px;
    }

    .footer-social a img {
        width: 24px;
        height: 24px;
        margin-right: 10px;
        transition: transform 0.3s ease;
    }

    .footer-social a:hover img {
        transform: scale(1.1);
    }

    .footer-links {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .footer-links li {
        margin-bottom: 10px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.8);
        font-weight: 500;
    }

    .footer-subscribe {
        margin-top: 20px;
    }

    .footer-subscribe form {
        position: relative;
        display: flex;
        align-items: center;
    }

    .footer-subscribe input {
        flex: 1;
        padding: 12px 16px;
        border: none;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
        font-size: 14px;
    }

    .footer-subscribe input::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    .footer-subscribe button {
        position: absolute;
        right: 0;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b);
        color: #fff;
        font-size: 14px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .footer-subscribe button:hover {
        background: #c88e35;
    }

    .footer-bottom {
        margin-top: 40px;
        text-align: center;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.7);
    }

    .footer-bottom a {
        color: #c88e35;
        font-weight: 600;
    }
</style>

<footer class="footer">
    <div class="container footer-container">
        <!-- Column 1: Logo and Contact -->
        <div class="footer-column">
            <div class="footer-logo">
                <a href="./index.php"><img src="./assets/img/footer-logo.png" alt="Moneytree Realty Logo"></a>
            </div>
            <div class="footer-text">
                <p>Floor no-2, Tapasya Corp Heights,<br> Subarea, Sector 126, Noida, Uttar Pradesh 201303</p>
            </div>
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
                <a href="https://www.facebook.com/moneytreerealtyofficial"><img src="./assets/img/facebook.svg" alt="Facebook"></a>
                <a href="https://www.instagram.com/moneytreerealtyofficial/"><img src="./assets/img/instagram.svg" alt="Instagram"></a>
                <a href="https://www.linkedin.com/company/moneytree-realty-services/mycompany/"><img src="./assets/img/linkedin.svg" alt="LinkedIn"></a>
            </div>
        </div>

        <!-- Column 2: Useful Links -->
        <div class="footer-column">
            <h3>Useful Links</h3>
            <ul class="footer-links">
                <li><a href="./index">Home</a></li>
                <li><a href="./real-estate-consultant">Our Services</a></li>
                <li><a href="./contact">Contact Us</a></li>
                <li><a href="./about-us">About Us</a></li>
                <li><a href="./blog/index">Latest News</a></li>
                <li><a href="./sitemap">Sitemap</a></li>
                <li><a href="./privacy-policy">Privacy Policy</a></li>
            </ul>
        </div>

        <!-- Column 3: Subscribe -->
        <div class="footer-column">
            <h3>Subscribe</h3>
            <div class="footer-text">
                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
            </div>
            <div class="footer-subscribe">
                <form action="#">
                    <input type="email" placeholder="Email Address">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024, All rights reserved. <a href="./index">Moneytree Realty Services Private Limited</a></p>
        <p>RERA Numbers: Noida: UPRERAAGT25048, Gurugram: RC/HARERA/GGM/2569/2164/2024/282</p>
    </div>
</footer>