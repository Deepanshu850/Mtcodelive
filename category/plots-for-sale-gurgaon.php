<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimum-scale=1.0">

    <title>
        Plots for Sale in Gurgaon
    </title>
    <meta name="description" content="">
    <meta name="keywords" content="" />

    <meta name="Owner" content="Moneytreerealty.com" />
    <meta name="Copyright" content="Moneytreereal.com" />
    <meta name="classification" content="New Real Estate Projects and Developments" />
    <meta name="distribution" content="India" />
    <meta name="rating" content="General" />
    <meta name="subject" content="Stay updated with the latest property projects, including residential and commercial developments in Delhi/NCR by MoneyTree Realty." />
    <meta name="audience" content="Property Buyers, Investors, Real Estate Enthusiasts" />




    <link rel="canonical" href="https://moneytreerealty.com/category/plots-for-sale-gurgaon" />





    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
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



    <style>
        .search-container {
            background: #f3f3f4;
        }

        .search-form {
            width: 100%;
            max-width: 600px;
            /* Adjust the form width as needed */
            margin: auto;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background: #ffffff;
        }

        .form-group {
            display: flex;
            gap: 10px;
            /* Spacing between input and button */
        }

        .form-control {
            flex-grow: 1;
            /* Allows the input to grow and fill available space */
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        .black-btn {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .black-btn:hover {
            background-color: #555;
        }

        @media (max-width: 768px) {
            .form-group {
                flex-direction: column;
                /* Stack input and button on smaller screens */
            }

            .form-control,
            .black-btn {
                width: 100%;
            }
        }

        .property-container {
            background: #f3f3f4;
        }
    </style>



</head>


<body class="light-theme">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2ZBWP94" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->




    <?php
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/');
    include 'header-demo.php';
    ?>


    <!-- property -->
    <div class="search-container">
        <form method="GET" action="" class="search-form">
            <div class="form-group d-flex flex-wrap justify-content-center">
                <h1 style="font-size: 20px;">
                    Plots for Sale in Gurgaon
                </h1>
                <input type="text" class="form-control" name="search" id="exampleInputtext1" placeholder="Enter City or Property Name to search properties here" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit" class="black-btn">Search</button>
            </div>
        </form>
    </div>

    <div class="property-container">
        <?php
        include '../data/propertydata.php';
        include './filter-logic.php';

        $properties = filterProperties($properties, ['gurugram'], ['plots']);

        include '../property-grid.php';
        ?>

    </div>
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
</body>

</html>