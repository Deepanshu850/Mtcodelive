<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0, minimum-scale=1.0">

    <title>


    </title>

    <meta name="description" content="" />

    <meta name="keywords" content="" />

    <meta name="Owner" content="Moneytreerealty.com" />
    <meta name="Copyright" content="Moneytreereal.com" />
    <meta name="classification" content="About Real Estate Consulting" />
    <meta name="distribution" content="India" />
    <meta name="rating" content="General" />
    <meta name="subject" content="Learn about MoneyTree Realty's mission, services, and how we can assist you in navigating the real estate market in India" />
    <meta name="audience" content="All" />

    <meta property="og:title" content="">
    <meta property="og:site_name" content="Moneytree Realty">
    <meta property="og:url" content="https://moneytreerealty.com/real-estate-in-noida">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://moneytreerealty.com/assets/img/real-estate-in-noida-banner.webp">
    <meta property="og:image:alt" content="">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_IN">



    <link rel="canonical" href="https://moneytreerealty.com/real-estate-in-noida" />



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




    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/nice-select.css">
    <link rel="icon" href="./assets/img/favicon_io/favicon.ico" type="image/x-icon" sizes="20x20">
    <link rel="stylesheet" href="./assets/css/property-page.css">




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




    <?php include './header.php';  ?>


    <?php
    include './data/propertydata.php';

    $typeToFilter = isset($_GET['search']) ? $_GET['search'] : '';

    $properties = array_filter($properties, function ($item) use ($typeToFilter) {
        if (empty($typeToFilter)) {
            return $item['location'] === 'Noida';
        }


        $typeToFilter = strtolower(trim($typeToFilter));
        $pattern = '/' . preg_quote($typeToFilter, '/') . '/i';

        if (
            preg_match($pattern, strtolower($item['name'])) ||
            preg_match($pattern, strtolower($item['location'])) ||
            array_filter($item['type'], function ($type) use ($pattern) {
                return preg_match($pattern, strtolower($type));
            })
        ) {
            return true;
        }

        return false;
    });

    include './property-grid-level2.php';
    // print_r($properties);
    ?>




    <div class="blog-tag-social-area">
        <div class="tag-wrapper">
            <h6>Similar Properties:</h6>
            <ul class="tags">
                <li>
                    <a href="./index.php">

                        marathahalli
                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        marathahalli bengaluru karnataka,

                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        govind nagar delhi

                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        govindpuri metro

                    </a>
                </li>


                <li>
                    <a href="./index.php">
                        property dealers in noida

                    </a>
                </li>
                <li>
                    <a href="./Property-in-noida.php">
                        property in noida

                    </a>
                </li>
                <li>
                    <a href="./4-bhk-flats-in-noida.php">
                        4 BHK flats in noida

                    </a>
                </li>
                <li>
                    <a href="./property-in-gurgaon.php">
                        Property in Gurgaon

                    </a>
                </li>
                <li>
                    <a href="./apartments-in-gurgaon.php">
                        Apartments in Gurgaon

                    </a>
                </li>
                <li>
                    <a href="./flats-in-gurgaon.php">
                        Flats in Gurgaon

                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        3 BHK Flats in Gurgaon
                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        4 BHK Flats in Gurgaon
                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        Plots for Sale

                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        Top 10 Best Real Estate Companies in Gurgaon

                    </a>
                </li>



                <li>
                    <a href="./index.php">
                        Residential property in Noida

                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        Noida apartments for sale

                    </a>
                </li>
                <li>
                    <a href="./studio-apartments-in-noida.php">
                        studio apartment

                    </a>
                </li>


                <li>
                    <a href="./index.php">
                        best property in noida

                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        Buy property in Noida

                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        best commercial property in noida

                    </a>
                </li>
                <li>
                    <a href="./studio-apartments-in-noida.php">
                        Noida Real Estate

                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        Real estate builders in Noida

                    </a>
                </li>



            </ul>
        </div>


        <?php
        include './more-tags.php';
        include './footer.php';
        ?>


    </div>



    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/slick.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/jquery.magnific-popup.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.fancybox.min.js"></script>
    <script src="./assets/js/custom.js"></script>



</body>

</html>