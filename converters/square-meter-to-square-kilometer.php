<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Square Meter to Square Kilometer Converter</title>

    <meta name="description" content="Convert square meters to square kilometers and vice versa with our efficient calculator. Explore conversion tools and formulas for accurate area measurements. Convert 1 square meter to square kilometers or 1000 square meters to kilometers effortlessly with our online converter, ideal for land area and geographical calculations." />
    <meta name="keywords" content=" square meters to square kilometers, square meter to kilometer, kilometer to square meter, square kilometers to square meters, 1 square kilometer is equal to how many meters, convert square meters to square kilometers, kilometers per hour to meters per second squared, 1000 square meter to kilometers, meters to kilometers squared, 20000 square meters to kilometers, how to convert square meter to square kilometer, kilometers squared to meters squared, 1 kilometer is equal to how many square meters, convert square meters to kilometers, meter to square kilometer, meters per second squared to kilometers per hour squared, square kilometer to meter, 1 square kilometers to square meters, 1 square meter is equal to how many kilometers, 1 square meter is equal to how many square kilometers, 1 square meter to square kilometers, 10000 square meters to kilometers, 10000 square meters to square kilometers, 1200 square kilometers to meters, 15 square kilometers to square meters, 2.02 square kilometer to meters, 4.55 kilometer to square meter, 5 cm square to meter square conversion kilometer, 9.8 meters per second squared to kilometers per hour squared, 97000 square meters to square kilometers, calculate meter to square kilometer, change square kilometers to meters, change square kilometers to square meters, conversion from kilometer to square meter, convert kilometers to meters squared, convert meter per second squared to kilometers per hour squared, convert meters per second squared to kilometers per hour, convert square kilometers to square meters calculator, converter square meter to kilometers, how to convert kilometers to square meters, how to convert square kilometers to square meters formula, kilometer square to meter, kilometer square to meter squre, kilometer to meter square, kilometer to square meter conversion formula, kilometers per hour squared to meters per second squared, kilometers to meters squared, meter per second squared to kilometer per hour square, meter square to kilometer, meter square to square kilometer, meter to kilometer square, meter to square kilometers, meters to kilometer square, million cubic meters to square kilometers, one kilometer is equal to how many square meters, one square kilometer is equal to how many meters, one square kilometer is equal to how many square meters, one square meter is equal to how many square kilometer, square kilometer to meter converter, square meter to dquare kilometer conversion, square meter to square kilometer converter, square meters to kilometers converter, square meters to square kilometers converter" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimum-scale=1.0" />
    <meta name="Owner" content="Moneytreerealty.com" />
    <meta name="Copyright" content="Moneytreereal.com" />
    <meta name="classification" content="Real Estate Property Search" />
    <meta name="distribution" content="India" />
    <meta name="rating" content="General" />
    <meta name="subject" content="Search Property for Sale And Rent, Search New	Projects, Builders And Property Consultant in India" />
    <meta name="audience" content="All" />




    <meta property="og:title" content="Square Meter to Square Kilometer Converter">
    <meta property="og:site_name" content="Moneytree Realty">
    <meta property="og:url" content="https://moneytreerealty.com/converters/square-meter-to-square-kilometer">
    <meta property="og:description" content="Convert square meters to square kilometers and vice versa with our efficient calculator. Explore conversion tools and formulas for accurate area measurements. Convert 1 square meter to square kilometers or 1000 square meters to kilometers effortlessly with our online converter, ideal for land area and geographical calculations.">
    <meta property="og:type" content="property">

    <link rel="canonical" href="https://moneytreerealty.com/converters/square-meter-to-square-kilometer" />


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
    <link rel="icon" href="../assets/img/favicon_io/favicon.ico" type="image/x-icon" sizes="20x20">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="./assets/converters.css">

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

<body>

    <?php
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/mtcodelive');
    include 'header-demo.php';
    ?>
    <main>
        <div class="flex-wrapper">



            <div class="container">
                <h1>Square Meter to Square Kilometer</h1>

                <div class="form-wrapper">
                    <input type="number" id="input" placeholder="Enter square meters">
                    <button onclick="convertSquareMeterToSquareKilometer()">Convert</button>
                </div>
                <p class="output">
                    In Square Kilometers : <span id="result"></span>
                </p>

                <canvas id="conversionChart"></canvas>
            </div>

            <script>
                function convertSquareMeterToSquareKilometer() {
                    const input = document.getElementById("input").value;
                    const result = input * 0.000001;

                    document.getElementById("result").innerText = result.toFixed(4) + " sq. km";

                    const ctx = document.getElementById('conversionChart').getContext('2d');
                    const data = {
                        labels: ['Square Meters', 'Square Kilometers'],

                        datasets: [{
                            label: 'Conversion',
                            data: [input, result],
                            backgroundColor: [
                                'rgba(0, 91, 82, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                            ],
                            borderColor: [
                                'rgba(0, 91, 82, 1)',
                                'rgba(255, 99, 132, 1)', // Red
                            ],
                            borderWidth: 1.5
                        }]
                    };

                    const config = {
                        type: 'bar',
                        data: data,
                        options: {
                            responsive: true,
                            animation: {
                                duration: 1000,
                                easing: 'easeOutBounce'
                            },
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    };

                    if (window.conversionChart instanceof Chart) {
                        window.conversionChart.destroy();
                    }

                    window.conversionChart = new Chart(ctx, config);
                }
                window.onload = function() {
                    convertSquareMeterToSquareKilometer();
                };
                document.getElementById("input").addEventListener("keypress", function(event) {
                    if (event.key === "Enter") {
                        convertSquareMeterToSquareKilometer();
                    }
                });
            </script>

            <?php
            include './links-1.php';

            ?>
        </div>
        <?php

        include './links-2.php';
        ?>
    </main>


    <?php
    include 'more-tags.php';
    include 'footer-demo.php';
    ?>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".faq h3").click(function() {


                $(this).next(".answer").slideToggle();
                $(this).find(".arrow").toggleClass("collapsed expanded");
            });
        });
    </script>

    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.fancybox.min.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>