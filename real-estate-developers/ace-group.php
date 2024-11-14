<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>

    </title>

    <meta name="description" content="">

    <meta name="keywords" content="" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimum-scale=1.0" />
    <meta name="Owner" content="Moneytreerealty.com" />
    <meta name="Copyright" content="Moneytreereal.com" />
    <meta name="classification" content="Real Estate Property Search" />
    <meta name="distribution" content="India" />
    <meta name="rating" content="General" />
    <meta name="subject" content="Search Property for Sale And Rent, Search New	Projects, Builders And Property Consultant in India" />
    <meta name="audience" content="All" />


    <meta property="og:title" content="">
    <meta property="og:site_name" content="Moneytree Realty">
    <meta property="og:url" content="https://moneytreerealty.com/converters/acre-to-bigha">
    <meta property="og:description" content="">
    <meta property="og:type" content="property">


    <link rel="canonical" href="https://moneytreerealty.com/converters/acre-to-bigha" />




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
    <link rel="stylesheet" href="../blog/assets/blog.css">
    <link rel="stylesheet" href="../assets/css/property-page.css">
    <style>
        .card-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 6px 0;
            margin-top: 10px;
        }

        .card-grid div p:first-child {
            font-weight: 700;
        }

        .card-grid p {
            font-size: 11px;
            line-height: 1.6;
            margin-bottom: 0;
        }

        .card-grid span {
            font-size: 10px;
            margin: 0;
            display: inline-block;
        }

        ol.custom-list {
            padding-left: 0;
        }
    </style>



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
    include '../category/header.php';
    ?>

    <main>

        <div class="builderData">
            <h1>Explore Upcoming Real Estate Projects from ACE Group </h1>

            <h2>ACE Group | An Overview </h2>

            <p>ACE Group has emerged as the eminent real estate builder in Noida with the vision to bring contemporary changes in the real estate industry in India, and shaping lifestyles with its respective real estate projects. The real estate builder is well-versed in offering well-curated and state-of-the-art residential and commercial spaces at strategic locations and is widely regarded for its exceptional quality in planning and execution of properties with the mission to offer an extraordinary living experience to its buyers.</p>

            <p>Established in the year 2010 by the exemplary leader, Ajay Choudhary, ACE Group has achieved its renowned position in the real estate market through delivering future-centric and high-end residential and commercial projects and continuously maintaining its commitment for a better tomorrow. </p>

            <h3>Key Insights into ACE Group </h3>

            <table class="beautiful-table">
                <tbody>
                    <tr>
                        <td>
                            <p><strong>Founded in</strong></p>
                        </td>
                        <td>
                            <p>2010</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Completed Projects</strong></p>
                        </td>
                        <td>
                            <p>15+ Million sq ft of projects delivered</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>On-going Projects</strong></p>
                        </td>
                        <td>
                            <p>21+ Million sq ft of on-going projects</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Owner of Group</strong></p>
                        </td>
                        <td>
                            <p>Ajay Choudhary</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Operating in Cities</strong></p>
                        </td>
                        <td>
                            <p>Greater Noida, Noida, Pune, Thane, Goa, Gurgaon</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Official Website</strong></p>
                        </td>
                        <td>
                            <p><a href="http://www.acegroupindia.com/">http://www.acegroupindia.com</a></p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h3>ACE Group Office Address </h3>

            <p><strong>ACE Group India,</strong></p>

            <p>Corporate Office: Plot No - 01B, Sector 126, Noida, Uttar Pradesh 201001, IN</p>

            <h2>Upcoming Real Estate Projects from ACE Group </h2>


            <?php
            include '../data/tempdata.php';
            include '../property-grid-level3.php';
            $urlprefix = '../';

            $groupName = 'ACE Group';

            $aceGroupProperties = array_filter($properties, function ($property) use ($groupName) {
                return strtolower($property['builder']) === strtolower($groupName);
            });

            echo renderPropertiesGrid($aceGroupProperties, $urlprefix);
            ?>



            <h2>Explore other Real Estate Builders </h2>



            <h2>Check out Latest Blogs on the Real Estate Market </h2>

            <p><strong>&lt;&lt;add latest blogs&gt;&gt;</strong></p>

            <h2>Frequently Asked Questions (FAQs)</h2>


            <section class="questions">
                <h2>What Does ACE Group do?</h2>
                <p>ACE Group is the rising real estate builders in Noida which is recognised for its futuristic and high-end commercial and residential properties in leading cities such as Noida, Pune, Thane, Greater Noida etc.</p>
            </section>

            <section class="questions">
                <h2>Which real estate projects of ACE Group are available for sale below 1 Cr?</h2>
                <p>ACE Terra, ACE Aviana, ACE Platinum, and ACE YXP are some promising real estate projects in the catalogue of ACE Group available for sale under 1 Cr. These projects are strategically located and feature top-notch amenities and offer a premium and leisure living experience.</p>
            </section>

            <section class="questions">
                <h2>What are the leading real estate companies in Noida?</h2>
                <p>Noida real estate is flourishing with high-end infrastructural development. MoneyTree Realty, Paras Buildtech, M3M Group, Devika Group, Sarvottam Group, and ACE Group are the leading real estate companies in Noida.</p>
            </section>

        </div>

    </main>


    <?php
    include '../propertydetail/more-tags.php';
    include '../category/footer.php';
    ?>




    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.fancybox.min.js"></script>
    <script src="../assets/js/custom.js"></script>

</body>

</html>