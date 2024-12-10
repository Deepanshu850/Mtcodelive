<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Square Meter to Katha Converter</title>

    <meta name="description" content="Easily convert square meters to katha and vice versa using our precise calculator. Discover the conversion ratio and tools for accurate land area measurements. Convert 1 katha to square meter effortlessly with our online converter, essential for property transactions in India." />
    <meta name="keywords" content="square meter to katha, katha to square meter, 1 katha to square meter, katha to square meter converter, 1 square meter to katha, 1 katha equal to square meter, convert katha to square meter, 1 katha equal to how many square meter, 1 katha is equal to square meter, 1 square meter to katha in hazaribagh, 1500 square meter to katha, 20 katha to square meter, 750 square meter to katha, convert katha to square meter in india, half katha is equal to how many square meters, square meter to katha conversion" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimum-scale=1.0" />
    <meta name="Owner" content="Moneytreerealty.com" />
    <meta name="Copyright" content="Moneytreereal.com" />
    <meta name="classification" content="Real Estate Property Search" />
    <meta name="distribution" content="India" />
    <meta name="rating" content="General" />
    <meta name="subject" content="Search Property for Sale And Rent, Search New	Projects, Builders And Property Consultant in India" />
    <meta name="audience" content="All" />




    <meta property="og:title" content="Square Meter to Katha Converter">
    <meta property="og:site_name" content="Moneytree Realty">
    <meta property="og:url" content="https://moneytreerealty.com/converters/square-meter-to-katha">
    <meta property="og:description" content="Easily convert square meters to katha and vice versa using our precise calculator. Discover the conversion ratio and tools for accurate land area measurements. Convert 1 katha to square meter effortlessly with our online converter, essential for property transactions in India.">
    <meta property="og:type" content="property">

    <link rel="canonical" href="https://moneytreerealty.com/converters/square-meter-to-katha" />


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
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/');
    include 'header-demo.php';
    ?>
    <main>
        <div class="flex-wrapper">



            <div class="container">
                <h1>Square Meter to Katha</h1>

                <div class="form-wrapper">
                    <input type="number" id="input" placeholder="Enter square meters">
                    <button onclick="convertSquareMeterToKatha()">Convert</button>
                </div>
                <p class="output">
                    In Kathas : <span id="result"></span>
                </p>

                <canvas id="conversionChart"></canvas>
            </div>

            <script>
                function convertSquareMeterToKatha() {
                    const input = document.getElementById("input").value;
                    const result = input * 0.0148378;

                    document.getElementById("result").innerText = result.toFixed(4) + " Kathas";

                    const ctx = document.getElementById('conversionChart').getContext('2d');
                    const data = {
                        labels: ['Square Meters', 'Kathas'],

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
                    convertSquareMeterToKatha();
                };
                document.getElementById("input").addEventListener("keypress", function(event) {
                    if (event.key === "Enter") {
                        convertSquareMeterToKatha();
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