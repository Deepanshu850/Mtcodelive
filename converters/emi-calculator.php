<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        EMI calculator
    </title>

    <meta name="description" content="Explore our comprehensive EMI calculator for various loans including home, car, personal, education, bike, and more. Calculate your EMI with leading banks like SBI, HDFC, ICICI, Axis, and others. Our online tool also supports prepayment and provides detailed insights for accurate financial planning." />


    <meta name="keywords" content="emi calculator, home loan emi calculator, car loan emi calculator, loan emi calculator, personal loan emi calculator, car emi calculator, housing loan emi calculator, sbi emi calculator, sbi home loan emi calculator, hdfc emi calculator, sbi personal loan emi calculator, bike emi calculator, emi calculator online, hdfc home loan emi calculator, hdfc personal loan emi calculator, sbi car loan emi calculator, bike loan emi calculator, education loan emi calculator, home emi calculator, student loan emi calculator, icici bank personal loan emi calculator, icici personal loan emi calculator, lic home loan emi calculator, business loan emi calculator, credit card emi calculator, gold loan emi calculator, pnb home loan emi calculator, axis bank emi calculator, axis emi calculator, hdfc car loan emi calculator, icici bank emi calculator, icici emi calculator, land loan emi calculator, plot loan emi calculator, canara bank home loan emi calculator, canara bank housing loan emi calculator, emi calculator excel, emi calculator excel sheet, emi interest calculator, hdfc credit card emi calculator, how to calculate emi, pnb emi calculator, reducing emi calculator, sbi loan emi calculator, cardekho emi calculator, emi calculator with prepayment, hdfc loan emi calculator, home loan emi calculator india, icici home loan emi calculator, personal emi calculator, pl emi calculator, axis bank personal loan emi calculator, axis personal loan emi calculator, bank of baroda emi calculator, bob emi calculator, emi calculation formula in excel, emi calculator india, home loan emi calculator with prepayment, icici credit card emi calculator, mortgage loan emi calculator, sbi education loan emi calculator, second hand car loan emi calculator, simple interest emi calculator, swift emi calculator, thar emi calculator, two wheeler loan emi calculator, used car loan emi calculator, vehicle loan emi calculator, auto loan emi calculator, axis bank credit card emi calculator, bajaj emi calculator, baleno emi calculator, bank emi calculator, bike emi calculator with down payment, car emi calculator sbi, car loan emi calculator icici, emi interest rate calculator, flat emi calculator, house emi calculator, mobile emi calculator, monthly emi calculator, sbi credit card emi calculator, alto k10 emi calculator, axis bank home loan emi calculator, bajaj finance emi calculator, bikedekho emi calculator, easy emi calculator, flat rate emi calculator, how to calculate home loan emi, mt 15 emi calculator, personal loan emi calculator sbi 2022, pnb personal loan emi calculator, sbi housing loan emi calculator, tata punch emi calculator, two wheeler emi calculator, union bank emi calculator, bank loan emi calculator, best emi calculator, bob home loan emi calculator, brezza emi calculator" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimum-scale=1.0" />
    <meta name="Owner" content="Moneytreerealty.com" />
    <meta name="Copyright" content="Moneytreereal.com" />
    <meta name="classification" content="Real Estate Property Search" />
    <meta name="distribution" content="India" />
    <meta name="rating" content="General" />
    <meta name="subject" content="Search Property for Sale And Rent, Search New	Projects, Builders And Property Consultant in India" />
    <meta name="audience" content="All" />





    <meta property="og:title" content="EMI calculator">
    <meta property="og:site_name" content="Moneytree Realty">
    <meta property="og:url" content="https://moneytreerealty.com/converters/emi-calculator">
    <meta property="og:description" content="Explore our comprehensive EMI calculator for various loans including home, car, personal, education, bike, and more. Calculate your EMI with leading banks like SBI, HDFC, ICICI, Axis, and others. Our online tool also supports prepayment and provides detailed insights for accurate financial planning.">
    <meta property="og:type" content="property">

    <link rel="canonical" href="https://moneytreerealty.com/converters/emi-calculator" />



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
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/mtcodelive/');
    include 'header.php';
    ?>
    <main>
        <div class="flex-wrapper">



            <div class="container">
                <h1>EMI Calculator</h1>

                <div class="form-wrapper">
                    <h6>Enter amount (in Rupees) :</h6>
                    <input type="number" id="principal" placeholder="Enter principal amount (in Rupees)" step="1">
                    <h6>Enter annual interest rate (%) :</h6>
                    <input type="number" id="interest" placeholder="Enter annual interest rate (%)" step="1">
                    <h6>
                        Enter tenure (in years) :
                    </h6>
                    <input type="number" id="tenure" placeholder="Enter tenure (in years)" step="1">
                    <button onclick="calculateEMI()">Calculate EMI</button>
                </div>
                <p class="output">
                    Monthly EMI: <span id="result"></span>
                </p>
                <canvas id="emiChart"></canvas>
            </div>

            <script>
                function calculateEMI() {
                    const principal = parseFloat(document.getElementById("principal").value);
                    const annualInterestRate = parseFloat(document.getElementById("interest").value);
                    const tenureYears = parseFloat(document.getElementById("tenure").value);

                    const monthlyInterestRate = (annualInterestRate / 12) / 100;
                    const tenureMonths = tenureYears * 12;

                    const emi = (principal * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, tenureMonths)) / (Math.pow(1 + monthlyInterestRate, tenureMonths) - 1);
                    document.getElementById("result").innerText = isNaN(emi) ? '0.00 ₹' : emi.toFixed(2) + " ₹";


                    const ctx = document.getElementById('emiChart').getContext('2d');
                    const data = {
                        labels: ['Principal', 'Interest'],
                        datasets: [{
                            label: 'EMI Breakdown',
                            data: [principal, emi * tenureMonths - principal],
                            backgroundColor: [
                                'rgba(0, 91, 82, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                            ],
                            borderColor: [
                                'rgba(0, 91, 82, 1)',
                                'rgba(255, 99, 132, 1)',
                            ],
                            borderWidth: 1.5
                        }]
                    };

                    const config = {
                        type: 'pie',
                        data: data,
                        options: {
                            responsive: false,
                            animation: {
                                duration: 1000,
                                easing: 'easeOutBounce'
                            }
                        }
                    };

                    if (window.emiChart instanceof Chart) {
                        window.emiChart.destroy();
                    }

                    window.emiChart = new Chart(ctx, config);
                }

                window.onload = function() {
                    calculateEMI();
                };

                document.querySelectorAll('input').forEach(input => {
                    input.addEventListener('keypress', function(event) {
                        if (event.key === "Enter") {
                            calculateEMI();
                        }
                    });
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