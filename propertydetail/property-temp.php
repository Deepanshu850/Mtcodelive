<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>

    </title>


    <meta name="description" content="" />


    <meta name="keywords" content="" />



    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimum-scale=1.0" />
    <meta name="Owner" content="Moneytreerealty.com" />
    <meta name="Copyright" content="Moneytreereal.com" />
    <meta name="classification" content="Real Estate Property Search" />
    <meta name="distribution" content="India" />
    <meta name="rating" content="General" />
    <meta name="subject" content="Search Property for Sale And Rent, Search New	Projects, Builders And Property Consultant in India" />
    <meta name="audience" content="All" />



    <link rel="canonical" href="https://moneytreerealty.com/propertydetail/paras-avenue-sector-129-noida" />



    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <link rel="stylesheet" href="./assets/projects.css"> -->
    <link rel="stylesheet" href="property-temp.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="../assets/img/favicon_io/favicon.ico" type="image/x-icon" sizes="20x20">



    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N2ZBWP94');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JZJY23MWW7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-JZJY23MWW7');
    </script>
    <!-- End Google Analytics -->
    <!--G-JZJY23MWW7-->
</head>

<body class="light-theme">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2ZBWP94" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    <?php
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/mtcodelive');
    include 'header-demo.php';
    include '../data/tempdata.php';

    ?>

    <main>
        <section class="headingSection wrapper">
            <div class="headingImages">

                <?php
                $property = $properties[25];

                if ($property) {
                    foreach ($property['images'] as $img): ?>
                        <div class="imageContainer">
                            <img src="../<?php echo $img; ?>" alt="<?php echo $property['name']; ?>">
                        </div>
                <?php endforeach;
                }
                ?>
                <div class="popup-gallery" style="display: none;">
                    <div class="popup-content">
                        <span class="close-popup">&times;</span>

                        <div class="popup-images">
                            <?php
                            if ($property) {
                                foreach ($property['images'] as $img): ?>
                                    <div class="popup-image">
                                        <img src="../<?php echo $img; ?>" alt="<?php echo $property['name']; ?>">
                                    </div>
                            <?php endforeach;
                            }
                            ?>
                            <button class="prev-btn" style="display: flex; align-items: center; justify-content: center;"><i class="fas fa-chevron-left" style="margin: auto;"></i></button>
                            <button class="next-btn" style="display: flex; align-items: center; justify-content: center;"><i class="fas fa-chevron-right" style="margin: auto;"></i></button>
                        </div>
                    </div>

                </div>
        </section>

        <section class="mainSection wrapper">
            <div>

                <h1 class="headingTitle">
                    <?php echo $property['name']; ?>
                </h1>
                <span>
                    <?php echo $property['location'][1] . ', ' . $property['location'][0]; ?>
                </span>


                <div class="insideSection">
                    <h2>Property Description</h2>

                    <p>Discover luxurious living with Paras Avenue, where comfort meets convenience. Our properties offer modern designs, high-end finishes, and a welcoming environment. Each unit is crafted with attention to detail to ensure you have a place to call home. Contact us to learn more about availability and viewing options.</p>
                </div>

                <div class="insideSection">
                    <h2>Property Features</h2>
                    <div class="custom-features-list">
                        <span class="custom-feature-item">Spacious Balcony</span>
                        <span class="custom-feature-item">Built-in Wardrobes</span>
                        <span class="custom-feature-item">Advanced Intercom System</span>
                        <span class="custom-feature-item">24/7 Secure Parking</span>
                        <span class="custom-feature-item">Building Size: 120m²</span>
                        <span class="custom-feature-item">1-Car Garage</span>
                        <span class="custom-feature-item">Remote-Controlled Garage Door</span>
                        <span class="custom-feature-item">2 Bathrooms</span>
                    </div>

                </div>



                <div class="insideSection">
                    <h2>Floor Plans</h2>
                    <p>Experience the thoughtful layout of Paras Avenue. Our floor plans are designed to maximize space, providing both privacy and open areas to suit your lifestyle needs.</p>


                </div>

                <div class="insideSection">
                    <h2>Property Location</h2>
                    <p>Paras Avenue is located in Sector 129, Noida, offering easy access to major highways, shopping centers, and schools. Enjoy the convenience of living in a prime location with all the amenities you need nearby.</p>
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
        </section>






    </main>



    <?php
    include 'more-tags.php';
    include 'footer-demo.php';
    ?>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../assets/js/jquery-3.7.0.min.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.fancybox.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="./assets/projects.js"></script>
    <script src="property-temp.js"></script>



</body>

</html>