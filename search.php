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


            <!-- Ensure method is GET and 'action' points to the correct endpoint -->
            <form action="search" method="GET" class="search-form">
                <div class="input-group position-relative">
                    <input type="text" name="search" id="search-input" class="form-control" placeholder="Search..." required autocomplete="off">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <!-- Suggestions List -->
                    <ul id="suggestions" class="list-group suggestions-box"></ul>
                </div>
            </form>


        </section>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const searchInput = document.getElementById('search-input');
                const suggestionsBox = document.getElementById('suggestions');
                let activeIndex = -1;

                // Fetch suggestions on input
                searchInput.addEventListener('input', function() {
                    const query = searchInput.value.trim();
                    if (query.length > 0) {
                        fetch(`/Mtcodelive/suggest.php?query=${encodeURIComponent(query)}`)
                            .then((response) => response.json())
                            .then((data) => {
                                suggestionsBox.innerHTML = '';
                                if (data.length > 0) {
                                    data.forEach((keyword, index) => {
                                        const listItem = document.createElement('li');
                                        listItem.classList.add('list-group-item');
                                        listItem.textContent = keyword;

                                        listItem.addEventListener('click', function() {
                                            searchInput.value = keyword;
                                            suggestionsBox.style.display = 'none';
                                            window.location.href = `/Mtcodelive/search?search=${encodeURIComponent(keyword)}`;
                                        });

                                        suggestionsBox.appendChild(listItem);
                                    });
                                    suggestionsBox.classList.add('show');
                                    activeIndex = -1;
                                } else {
                                    suggestionsBox.classList.remove('show');
                                }
                            });
                    } else {
                        suggestionsBox.classList.remove('show');
                    }
                });

                // Handle keyboard navigation
                searchInput.addEventListener('keydown', function(event) {
                    const suggestions = suggestionsBox.querySelectorAll('.list-group-item');
                    if (event.key === 'ArrowDown') {
                        event.preventDefault();
                        activeIndex = (activeIndex + 1) % suggestions.length;
                        highlightSuggestion(suggestions, activeIndex);
                    } else if (event.key === 'ArrowUp') {
                        event.preventDefault();
                        activeIndex = (activeIndex - 1 + suggestions.length) % suggestions.length;
                        highlightSuggestion(suggestions, activeIndex);
                    } else if (event.key === 'Enter') {
                        event.preventDefault();
                        const searchQuery = activeIndex >= 0 && suggestions.length > 0 ?
                            suggestions[activeIndex].textContent :
                            searchInput.value.trim();
                        window.location.href = `./search?search=${encodeURIComponent(searchQuery)}`;
                    }
                });

                function highlightSuggestion(suggestions, index) {
                    suggestions.forEach((item, i) => {
                        if (i === index) {
                            item.classList.add('active');
                        } else {
                            item.classList.remove('active');
                        }
                    });
                }
            });
        </script>

        <style>
            .search-section {
                padding-block: 1.5rem;
                max-width: 600px;
                margin-inline: auto;
            }



            /* Suggestions styling */
            .suggestions-box {
                position: absolute;
                top: calc(100% + 5px);
                /* Sticks just below the input field */
                left: 0;
                width: 100%;
                max-height: 200px;
                /* Add a max height for better UX */
                overflow-y: auto;
                /* Scroll if there are too many suggestions */
                background: #fff;
                border: 1px solid #ddd;
                border-radius: 4px;
                z-index: 500;
                display: none;
                /* Hidden by default */
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            }

            .suggestions-box .list-group-item {
                padding: 10px 15px;
                font-size: 1rem;
                cursor: pointer;
                border: none;
            }

            .suggestions-box .list-group-item.active {
                background-color: #007bff;
                /* Highlight background */
                color: #fff;
                /* Highlight text */
            }

            .suggestions-box.show {
                display: block;
            }


            .card-img-top {
                height: 200px;
            }

            .card-text {
                font-size: 14px;
                margin-bottom: 10px;
            }


            .card-title {
                background: linear-gradient(-90deg, #00796b, #009688, #26a69a);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;

            }

            .btn-primary {
                background: radial-gradient(circle at top, #0e9688 0%, #007f70 30%, #005b52 100%);
                border: none;
                font-size: 14px;
                font-weight: 600;
            }

            .search-section .btn-primary {
                border-top-right-radius: 4px !important;
                border-bottom-right-radius: 4px !important;
            }
        </style>





        <?php
        include './data/tempdata.php';

        function normalize($string)
        {
            return str_replace(' ', '', strtolower(trim($string)));
        }

        // List of common helping words to ignore
        $helpingWords = ['of', 'in', 'the', 'and', 'or', 'on', 'to', 'a', 'an', 'for', 'with', 'at'];

        // List of multi-word terms to preserve
        $multiWordTerms = ['5 bhk', '4 bhk', '3 bhk', '2 bhk', '1 bhk'];

        // Check if there's a search query
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $search = strtolower(trim($_GET['search']));

            // Preserve multi-word terms by replacing spaces with underscores
            foreach ($multiWordTerms as $term) {
                $search = str_replace($term, str_replace(' ', '_', $term), $search);
            }

            // Split search into words and remove helping words
            $words = array_filter(
                explode(' ', $search),
                function ($word) use ($helpingWords) {
                    return !in_array($word, $helpingWords) && !empty($word);
                }
            );

            // Replace underscores back to spaces in multi-word terms
            $words = array_map(function ($word) {
                return str_replace('_', ' ', $word);
            }, $words);

            // Debug: Print search words
            // echo '<pre>Search Words: ' . print_r($words, true) . '</pre>';

            // Initialize results with all properties
            $results = $properties;

            // Filter properties based on each word
            foreach ($words as $word) {
                $word = normalize($word);
                $results = array_filter($results, function ($property) use ($word) {
                    // Debug: Check which properties are being checked
                    // echo '<pre>Checking Word: ' . $word . ' Against Property: ' . $property['name'] . '</pre>';

                    // Check name, builder, location, type, typeDetail, RERA, and keywords
                    if (
                        str_contains(normalize($property['name']), $word) ||
                        str_contains(normalize($property['builder']), $word)
                    ) {
                        return true;
                    }

                    // Check location array
                    foreach ($property['location'] as $loc) {
                        if (str_contains(normalize($loc), $word)) {
                            return true;
                        }
                    }

                    // Check type array
                    foreach ($property['type'] as $type) {
                        if (str_contains(normalize($type), $word)) {
                            return true;
                        }
                    }

                    // Check typeDetail array
                    foreach ($property['typeDetail'] as $detail) {
                        if (str_contains(normalize($detail), $word)) {
                            return true;
                        }
                    }

                    // Check RERA array
                    foreach ($property['rera'] as $rera) {
                        if (str_contains(normalize($rera), $word)) {
                            return true;
                        }
                    }

                    // Check keywords
                    if (isset($property['keywords'])) {
                        if (str_contains(normalize($property['keywords']), $word)) {
                            return true;
                        }
                    }

                    return false; // Exclude property if none of the fields match
                });

                // Debug: Print filtered results after each word
                // echo '<pre>Results After Filtering "' . $word . '": ' . print_r(array_column($results, 'name'), true) . '</pre>';
            }

            if (!empty($results)) {
                echo '<div class="container mt-4">';
                echo '<div class="row">';
                foreach ($results as $result) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $result['images'][0] . '" class="card-img-top" alt="Property Image">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title"><a href="propertydetail/' . $result['link'] . '" class="text-decoration-none text-primary">' . $result['name'] . '</a></h5>';
                    echo '<p class="card-text"><b>Builder:</b> ' . $result['builder'] . '</p>';
                    echo '<p class="card-text"><b>Location:</b> ' . implode(', ', $result['location']) . '</p>';
                    echo '<p class="card-text"><b>Price:</b> ' . $result['price'] . '</p>';
                    echo '<p class="card-text"><b>Type:</b> ' . implode(', ', $result['type']) . '</p>'; // Display property types
                    echo '<a href="propertydetail/' . $result['link'] . '" class="btn btn-primary">View Details</a>';
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