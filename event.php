<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0, minimum-scale=1.0">

    <title>
        Event - Moneytree Realty
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


    <meta property="og:title" content="PropTree Mela, Property Mela | MoneyTree Realty’s Grand Property Mela">
    <meta property="og:site_name" content="Moneytree Realty">
    <meta property="og:url" content="https://moneytreerealty.com/proptree-mela">
    <meta property="og:description" content="PropTree Mela in Noida—top real estate consultants, brokers, and advisory firm. Expert property dealers for buying, selling, and investing in prime properties.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://moneytreerealty.com/assets/img/proptree-mela-banner.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="">
    <meta property="og:locale" content="en_IN">



    <link rel="canonical" href="https://moneytreerealty.com/event" />


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




    <link href="assets/img/favicon_io/favicon.ico" rel="icon" sizes="20x20" type="image/x-icon">
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">


    <!-- Google Analytics -->


    <script src="https://www.googletagmanager.com/gtag/js?id=G-JZJY23MWW7"></script>
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
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/mtcodelive/');
    include 'header.php';
    ?>


    <?php
    $events = [
        [
            'name' => 'PropTree Mela 2024',
            'image' => './assets/img/proptree-mela-banner.webp',
            'description' => 'PropTree Mela exhibits state-of-the-art commercial and residential properties from leading real estate developers in India such as M3M Group, Paras Buildtech, Godrej Properties, Devika Group, Axis Ecorp, Krisumi Corp and many more.',
            'link' => 'proptree-mela'
        ],
        [
            'name' => 'Navratree Property Mela',
            'image' => './event.jpeg',
            'description' => 'Navratree, MoneyTree Realty Expo 2024 features best residential and commercial projects from various top developers under one roof.',
            'link' => 'navratree-property-mela'
        ]
    ];
    ?>

    <div class="events-container">
        <div class="events-grid">
            <?php foreach ($events as $event): ?>
                <a href="./<?php echo $event['link']; ?>" class="text-decoration-none">
                    <div class="event-card">
                        <img src="<?php echo $event['image']; ?>" alt="<?php echo $event['name']; ?>">
                        <div class="event-content">
                            <h2><?php echo $event['name']; ?></h2>
                            <p><?php echo $event['description']; ?></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>


    <style>
        .events-container {
            max-width: 1200px;
            width: 90%;
            margin: 50px auto;
            padding: 0 20px;
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .event-card {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .event-card:hover {
            transform: translateY(-5px);
        }

        .event-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .event-content {
            padding: 20px;
        }

        .event-content h2 {
            padding: 0;
            color: #333;
            margin: 0 0 15px 0;
            font-size: 24px;
        }

        .event-content p {
            color: #666;
            line-height: 1.6;
            margin: 0;
        }
    </style>

    <?php
    include 'more-tags.php';
    include 'footer-demo.php';
    ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/slick.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/jquery.magnific-popup.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.fancybox.min.js"></script>
    <script src="./assets/js/custom.js"></script>


</body>

</html>