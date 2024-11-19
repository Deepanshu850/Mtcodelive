<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">



</head>

<body>


    <?php include './header.php' ?>

    <main style="min-height: 100vh;width: 100%;">

        <section class="search-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="" method="GET" class="search-form">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search..." required>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include './data/tempdata.php';

        function normalize($string)
        {
            return str_replace(' ', '', strtolower($string));
        }

        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $search = normalize($_GET['search']);
            $results = [];

            foreach ($properties as $property) {
                // Check name, builder
                if (
                    str_contains(normalize($property['name']), $search) ||
                    str_contains(normalize($property['builder']), $search)
                ) {
                    $results[] = $property;
                    continue;
                }

                // Check location array
                foreach ($property['location'] as $loc) {
                    if (str_contains(normalize($loc), $search)) {
                        $results[] = $property;
                        continue 2;
                    }
                }

                // Check type array
                foreach ($property['type'] as $type) {
                    if (str_contains(normalize($type), $search)) {
                        $results[] = $property;
                        continue 2;
                    }
                }

                // Check typeDetail array
                foreach ($property['typeDetail'] as $detail) {
                    if (str_contains(normalize($detail), $search)) {
                        $results[] = $property;
                        continue 2;
                    }
                }

                // Check RERA array
                foreach ($property['rera'] as $rera) {
                    if (str_contains(normalize($rera), $search)) {
                        $results[] = $property;
                        continue 2;
                    }
                }

                // Check keywords
                if (isset($property['keywords'])) {
                    if (str_contains(normalize($property['keywords']), $search)) {
                        $results[] = $property;
                        continue;
                    }
                }
            }

            // Display results
            if (!empty($results)) {
                echo '<div class="container mt-4">';
                echo '<div class="row">';
                foreach ($results as $result) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $result['images'][0] . '" class="card-img-top" alt="Property Image">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $result['name'] . '</h5>';
                    echo '<p class="card-text">Builder: ' . $result['builder'] . '</p>';
                    echo '<p class="card-text">Location: ' . implode(', ', $result['location']) . '</p>';
                    echo '<p class="card-text">Price: ' . $result['price'] . '</p>';
                    echo '<a href="property.php?link=' . $result['link'] . '" class="btn btn-primary">View Details</a>';
                    echo '</div></div></div>';
                }
                echo '</div></div>';
            } else {
                echo '<div class="container mt-4"><div class="alert alert-info">No properties found matching your search.</div></div>';
            }
        }
        ?>




    </main>







    <?php include './footer.php' ?>

</body>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
<script src="assets/js/jquery-3.7.0.min.js" defer></script>
<script src="assets/js/slick.js" defer></script>
<script src="assets/js/waypoints.min.js" defer></script>
<script src="assets/js/jquery.counterup.min.js" defer></script>
<script src="assets/js/jquery.magnific-popup.min.js" defer></script>
<script src="assets/js/jquery.marquee.min.js" defer></script>
<script src="assets/js/jquery.nice-select.min.js" defer></script>
<script src="assets/js/jquery.fancybox.min.js" defer></script>
<script src="assets/js/custom.js" defer></script>
<script defer>
    document.addEventListener("DOMContentLoaded", function() {
        $(".marquee_text").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true
        });

        $(".marquee_text2").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true
        });
    });
</script>

</html>