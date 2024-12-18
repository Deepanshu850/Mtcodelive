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
            width: 100%;


        }

        .footer-wrapper {
            width: 100%;
            height: 100%;


            background: radial-gradient(circle at top right,
                    rgba(0, 91, 82, 1) 0%,
                    /* Base color */
                    rgba(0, 91, 82, 0.95) 10%,
                    rgba(0, 91, 82, 0.9) 20%,
                    rgba(0, 91, 82, 0.85) 30%,
                    rgba(0, 91, 82, 0.7) 55%,
                    rgba(0, 91, 82, 0.7) 60%,
                    rgba(0, 91, 82, 0.75) 70%,
                    rgba(0, 91, 82, 0.8) 80%,
                    rgba(0, 91, 82, 0.85) 90%,
                    rgba(0, 91, 82, 0.9) 100%);


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

        @media (width < 700px) {
            .footer-links {
                padding-top: 2rem;
            }
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
            width: 36px;
            height: 36px;
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
            padding-bottom: 12px;
        }

        .footer-links-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            /* place-items: center; */
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links .footer-links-list a {
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
            font-size: 16px;
            padding: 10px;
            outline: none;
            transition: outline 100ms ease;
            border-radius: 6px;

        }

        .footer-links .footer-links-list a:hover {
            outline: 2px solid rgba(255, 255, 255, 0.43);

        }

        .footer-bottom {
            margin-top: 40px;
            margin-bottom: 3rem;
        }

        .footer-bottom p {
            text-align: center;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.7);
            line-height: 14px;
        }
    </style>


    <footer class="footer">
        <div class="footer-wrapper">

            <!-- Column 1: Logo and Contact -->
            <div class="footer-address">
                <div class="footer-logo">
                    <a href="<?php echo internalLink('index-demo-1'); ?>"><img src="<?php echo internalLink('assets/img/footer-logo.png'); ?>" alt="Moneytree Realty Logo"></a>
                </div>
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
                    <a class="social facebook" target="_blank" href="https://www.facebook.com/moneytreerealtyofficial">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a class="social instagram" target="_blank" href="https://www.instagram.com/moneytreerealtyofficial/">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a class="social linkedin" target="_blank" href="https://www.linkedin.com/company/moneytree-realty-services/mycompany/">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a class="social youtube" target="_blank" href="https://www.youtube.com/@Moneytreerealtyofficial">
                        <i class="bi bi-youtube"></i>
                    </a>
                </div>


                <style>
                    .footer-social {
                        display: flex;
                        /* justify-content: center; */
                        gap: 0px;
                        /* Spacing between icons */
                    }

                    .footer-social a {
                        display: inline-block;
                        width: 50px;
                        height: 50px;
                        border-radius: 50%;
                        /* Circular background for glow */
                        position: relative;
                        text-align: center;
                        text-decoration: none;
                        background-color: transparent;
                        /* Icon background color (dark for contrast) */
                        transition: transform 0.3s ease-in-out;
                        /* Smooth hover effect */
                    }

                    .footer-social a i {
                        font-size: 24px;
                        /* Fixed size for icons */
                        color: #fff;
                        /* White icon color */
                        line-height: 50px;
                        /* Center icon vertically */
                        position: relative;
                        z-index: 2;
                        /* Keep icon above the glow */
                    }



                    .footer-social a::before {
                        content: "";
                        position: absolute;
                        top: 50%;
                        left: 50%;


                        width: 0;
                        height: 0;

                        border-radius: 50%;
                        transform: translate(-50%, -50%);
                        z-index: 1;
                        background: transparent;
                        transition: all 0.3s ease-in-out;
                        box-shadow: 0 0 50px 20px transparent;
                        /* Default glow is off */
                    }

                    .footer-social a.facebook:hover::before {
                        background: #3b5998;
                        /* Facebook blue glow */
                        box-shadow: 0px 0px 15px 15px #3b5998;
                    }

                    .footer-social a.instagram:hover::before {
                        background: #E1306C;
                        /* Instagram pink glow */
                        box-shadow: 0px 0px 15px 15px #E1306C;
                    }

                    .footer-social a.linkedin:hover::before {
                        background: #007bb6;
                        /* LinkedIn blue glow */
                        box-shadow: 0px 0px 15px 15px #007bb6;
                    }

                    .footer-social a.youtube:hover::before {
                        background: #FF0000;
                        /* YouTube red glow */
                        box-shadow: 0px 0px 15px 15px #FF0000;
                    }

                    @media (width<700px) {
                        .footer {
                            height: min-content;
                        }

                        .footer-wrapper {
                            display: flex;
                            flex-direction: column;


                        }



                        .footer-social a.facebook::before {
                            background: #3b5998;
                            /* Facebook blue glow */
                            box-shadow: 0px 0px 8px 12px #3b5998;
                        }

                        .footer-social a.instagram::before {
                            background: #E1306C;
                            /* Instagram pink glow */
                            box-shadow: 0px 0px 8px 12px #E1306C;
                        }

                        .footer-social a.linkedin::before {
                            background: #007bb6;
                            /* LinkedIn blue glow */
                            box-shadow: 0px 0px 8px 12px #007bb6;
                        }

                        .footer-social a.youtube::before {
                            background: #FF0000;
                            /* YouTube red glow */
                            box-shadow: 0px 0px 8px 12px #FF0000;
                        }
                    }
                </style>
            </div>
            <!-- Column 2: Useful Links -->
            <div class="footer-links">
                <h3>Useful Links</h3>
                <ul class="footer-links-list">
                    <li><a href="<?php echo internalLink('index-demo-1'); ?>">Home</a></li>
                    <li><a href="<?php echo internalLink('real-estate-consultant'); ?>">Our Services</a></li>
                    <li><a href="<?php echo internalLink('contact'); ?>">Contact Us</a></li>
                    <li><a href="<?php echo internalLink('about-us'); ?>">About Us</a></li>
                    <li><a href="<?php echo internalLink('blog/index'); ?>">Latest News</a></li>
                    <li><a href="<?php echo internalLink('sitemap'); ?>">Sitemap</a></li>
                    <li><a href="<?php echo internalLink('privacy-policy'); ?>">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; 2024, All rights reserved. Moneytree Realty Services Private Limited</p>
                <p>RERA Numbers: Noida: UPRERAAGT25048, Gurugram: RC/HARERA/GGM/2569/2164/2024/282</p>
            </div>
        </div>
    </footer>


    <?php
    include './sticky-call-component.php';
    ?>