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




    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="./assets/css/nice-select.css" rel="stylesheet">
    <link rel="icon" href="./assets/img/favicon_io/favicon.ico" type="image/x-icon" sizes="20x20">
    <link rel="stylesheet" href="./assets/css/property-page.css">


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
    include './header.php';
    ?>


    <?php
    $events = [
        [
            'name' => 'PropTree Mela 2024',
            'videoId' => '5QlTFPx8ZXM',
            'description' => 'PropTree Mela exhibits state-of-the-art commercial and residential properties from leading real estate developers in India such as M3M Group, Paras Buildtech, Godrej Properties, Devika Group, Axis Ecorp, Krisumi Corp and many more.',
            'link' => 'proptree-mela'
        ],
        [
            'name' => 'Navratree Property Mela',
            'videoId' => '83U_hexyXE0',
            'description' => 'Navratree, MoneyTree Realty Expo 2024 features best residential and commercial projects from various top developers under one roof.',
            'link' => 'navratree-property-mela'
        ],
    ];
    ?>

    <div class="events-container">
        <div class="events-grid">
            <?php foreach ($events as $event): ?>
                <div class="event-card" data-video-id="<?php echo $event['videoId']; ?>">
                    <div class="video-thumbnail">
                        <img src="https://img.youtube.com/vi/<?php echo $event['videoId']; ?>/hqdefault.jpg" alt="<?php echo $event['name']; ?>">
                        <button class="play-button">Play</button>
                    </div>
                    <div class="event-content">
                        <h2><?php echo $event['name']; ?></h2>
                        <p><?php echo $event['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div id="player-overlay" class="player-overlay">
        <div id="player-container">
            <div id="player"></div>
            <button id="close-player" class="close-button">Close</button>
        </div>
    </div>

    <style>
        .events-container {
            max-width: 1200px;
            margin: 50px auto;
            width: 90%;
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .event-card {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
            position: relative;
        }

        .event-card:hover {
            transform: translateY(-5px);
        }

        .video-thumbnail {
            position: relative;
            width: 100%;
            height: 200px;
        }

        .video-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            opacity: 0;
            visibility: hidden;
            transition: opacity 150ms ease-in, visibility 150ms ease-in;
        }

        .video-thumbnail:hover .play-button {
            visibility: visible;
            opacity: 1;
            transition: opacity 150ms ease-in;
        }

        .video-thumbnail:hover .play-button {
            animation: fadeOut 1s ease-out 1s forwards;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

        .event-content {
            padding: 20px;
        }

        .event-content h2 {
            margin: 0 0 10px 0;
            font-size: 18px;
            color: #333;
        }

        .event-content p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }

        .player-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        #player-container {
            width: 90%;
            max-width: 800px;
            position: relative;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            aspect-ratio: 16 / 9;
            /* Ensures the player maintains a 16:9 aspect ratio */
        }

        #player {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .close-button {
            position: absolute;
            top: 4px;
            right: 4px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            z-index: 1001;
            border: 2px solid white;
        }


        /* Responsive Design */
        @media (max-width: 768px) {
            .event-content h2 {
                font-size: 16px;
            }

            .event-content p {
                font-size: 12px;
            }

            .video-thumbnail {
                height: 150px;
            }

            .play-button {
                font-size: 14px;
                padding: 8px 16px;
            }

            #player-container {
                width: 100%;
                max-width: 100%;
            }

            .close-button {
                font-size: 12px;
                padding: 8px;
            }
        }
    </style>
    <script>
        // Load YouTube API
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                playerVars: {
                    'playsinline': 1
                }
            });
        }

        // Event listener for video cards
        document.querySelectorAll('.event-card').forEach(card => {
            card.addEventListener('click', function() {
                var videoId = this.getAttribute('data-video-id');
                player.loadVideoById(videoId);
                document.getElementById('player-overlay').style.display = 'flex';
            });
        });

        // Close player
        document.getElementById('close-player').addEventListener('click', function() {
            document.getElementById('player-overlay').style.display = 'none';
            player.stopVideo();
        });
    </script>

    <?php
    include './more-tags.php';
    include './footer.php';
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