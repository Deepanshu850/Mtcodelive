<?php
// include './cookie.php';
?>

<div class="s-soft">
    <a href=https://www.facebook.com/moneytreerealtyofficial class="s-item facebook">
        <img src="./assets/img/FB.png" alt="">
    </a>
    <a href=https://www.linkedin.com/company/moneytree-realty-services/mycompany/ class="s-item linkedin">
        <img src="./assets/img/Insta.png" alt="">
    </a>
    <a href=https://www.instagram.com/moneytreerealtyofficial/ class="s-item instagram">
        <img src="./assets/img/Linkedin.png" alt="">
    </a>
</div>

<?php
include "./data/blogdata.php";
?>

<?php
// include './eventpop.php';
?>

<header class="header-area style-1">
    <?php
    include "./newsbanner.php"
    ?>
    <style>
        .img-fluid {
            max-width: 165px !important;
        }
    </style>
    <div class="header-logo d-lg-none d-flex"> <a href="index"><img alt="Best Real Estate Property Consultant in Delhi/NCR" class="img-fluid" src="./assets/img/logo.png"></a> </div>
    <div class="main-menu">
        <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
            <!-- <div class="mobile-logo-wrap"> <a href="index"><img alt="image" src="assets/img/logo.png"></a>
                </div> -->
        </div>

        <ul class="menu-list">
            <li>
                <a href="./index"><img src="./assets/img/logo.png" alt="Best Real Estate Property Consultant in Delhi/NCR" style="width: 130px;"></a>
            </li>
            <li> <a href="./index" class="drop-down">HOME</a> </li>


            <li>
                <a href="./career" class="drop-down">CAREER</a>

            </li>
            <li class="menu-item-has-children"> <a href="./top-real-estate-poperty-consultant-in-india" class="drop-down">PROJECTS </a><i class="bi bi-plus dropdown-icon"></i>
                <ul class="sub-menu">
                    <li class="menu-item-has-children"> <a href="./category/residential-property" class="drop-down">Residential </a></i>
                        <ul class="sub-menu">
                            <li>
                                <a href="./category/residential-property-for-sale-noida" class="drop-down">
                                    Noida
                                </a>
                            </li>
                            <li>
                                <a href="./category/residential-property-for-sale-gurgaon" class="drop-down">
                                    Gurgaon
                                </a>
                            </li>

                            <li>
                                <a href="./category/residential-property-for-sale-mumbai" class="drop-down">
                                    Mumbai
                                </a>
                            </li>
                            <li>
                                <a href="./category/residential-property-for-sale-goa" class="drop-down">
                                    Goa
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"> <a href="./category/commercial-property" class="drop-down">Commercial </a></i>
                        <ul class="sub-menu">
                            <li>
                                <a href="./category/commercial-property-for-sale-noida" class="drop-down">
                                    Noida
                                </a>
                            </li>
                            <li>
                                <a href="./category/commercial-property-for-sale-gurgaon" class="drop-down">
                                    Gurgaon
                                </a>
                            </li>

                            <li>
                                <a href="./category/commercial-property-for-sale-mumbai" class="drop-down">
                                    Mumbai
                                </a>
                            </li>
                            <li>
                                <a href="./category/commercial-property-for-sale-goa" class="drop-down">
                                    Goa
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"> <a href="./category/studio-apartments" class="drop-down">Studio Apartments </a></i>
                        <ul class="sub-menu">
                            <li>
                                <a href="./category/studio-apartments-for-sale-noida" class="drop-down">
                                    Noida
                                </a>
                            </li>
                            <li>
                                <a href="./category/studio-apartments-for-sale-gurgaon" class="drop-down">
                                    Gurgaon
                                </a>
                            </li>

                            <li>
                                <a href="./category/studio-apartments-for-sale-mumbai" class="drop-down">
                                    Mumbai
                                </a>
                            </li>
                            <li>
                                <a href="./category/studio-apartments-for-sale-goa" class="drop-down">
                                    Goa
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"> <a href="./category/plots" class="drop-down">Plots </a></i>
                        <ul class="sub-menu">
                            <li>
                                <a href="./category/plots-for-sale-noida" class="drop-down">
                                    Noida
                                </a>
                            </li>
                            <li>
                                <a href="./category/plots-for-sale-gurgaon" class="drop-down">
                                    Gurgaon
                                </a>
                            </li>

                            <li>
                                <a href="./category/plots-for-sale-mumbai" class="drop-down">
                                    Mumbai
                                </a>
                            </li>
                            <li>
                                <a href="./category/plots-for-sale-goa" class="drop-down">
                                    Goa
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </li>

            <li> <a href="./contact" class="drop-down">CONTACT</a> </li>


            <li class="nav-item">
                <a href="./blog/index" class="nav-link">BLOG</a>
                <div class="dropdown-content">
                    <?php
                    include './data/blogdata.php'; // Include the blog data

                    function generateSlug($title)
                    {
                        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
                    }

                    $posts = array_reverse($posts);

                    // Get the top 3 blog posts
                    $topPosts = array_slice($posts, 0, 3);

                    foreach ($topPosts as $post) {
                        echo '<a href="./blog/' . generateSlug($post['title']) . '" class="dropdown-link">
                        <div class="dropdown-item-content">
                        <div class="dropdown-text">
                        <p class="dropdown-title">' . $post['title'] . '</p>
                        <p class="dropdown-description">' . substr($post['description'], 0, 100) . '...</p>
                        </div>
                        <img src="./blog/' . $post['imageUrl'] . '" alt="' . $post['title'] . '" class="dropdown-image">
                        </div>
                        </a>';
                    }
                    ?>
                </div>
            </li>

            <style>
                /* Navigation Styles */
                .navbar {
                    background-color: #ffffff;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    padding: 16px;
                }

                .nav-list {
                    list-style: none;
                    display: flex;
                }

                .nav-item {
                    position: relative;
                    margin-right: 20px;
                }

                .nav-link {
                    text-decoration: none;
                    color: #333333;
                    font-weight: bold;
                    padding: 8px 12px;
                    display: inline-block;
                }

                .nav-link:hover {
                    color: #007bff;
                }

                /* Dropdown Styles */
                .dropdown-content {
                    display: none;
                    position: absolute;
                    left: 0;
                    top: 100%;
                    width: 500px;
                    background-color: #ffffff;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    border-radius: 8px;
                    z-index: 1000;
                    transition: opacity 0.3s ease, transform 0.3s ease;
                    opacity: 0;
                    transform: translateY(10px);
                }

                .nav-item:hover .dropdown-content {
                    display: block;
                    opacity: 1;
                    transform: translateY(0);
                }

                .dropdown-link {
                    display: block;
                    padding: 12px;
                    color: #333333;
                    text-decoration: none;
                    border-bottom: 1px solid #f0f0f0;
                }

                header.style-1 .main-menu ul>li a.dropdown-link {
                    transition-duration: 0.3s;

                }

                .dropdown-link:hover {
                    background-color: #f0f0f0;
                }

                .dropdown-item-content {
                    display: flex;
                    align-items: center;
                }

                .dropdown-text {
                    flex: 1;
                    padding-right: 10px;
                }

                .dropdown-image {
                    width: 120px;
                    height: 100px;
                    /* object-fit: cover; */
                    border-radius: 8px;
                }

                .dropdown-title {
                    margin: 0 0 4px;
                    font-size: 14px;
                    font-weight: 700;
                    color: #333333;
                    letter-spacing: 0.35px;
                }

                .dropdown-description {
                    font-size: 12px;
                    color: #666666;
                    line-height: 1.6;
                    text-transform: capitalize;
                }

                /* Responsive Design */
                @media (max-width: 768px) {
                    .nav-list {
                        flex-direction: column;
                    }

                    .nav-item {
                        margin-bottom: 10px;
                    }

                    .dropdown-content {
                        width: 100%;
                        left: 0;
                    }

                    .dropdown-item-content {
                        flex-direction: column;
                    }

                    .dropdown-text {
                        padding-right: 0;
                        margin-bottom: 10px;
                    }

                    .dropdown-image {
                        width: 100%;
                        height: auto;
                    }
                }
            </style>
            <li class="menu-item-has-children"> <a href="#" class="drop-down">Others </a><i class="bi bi-plus dropdown-icon"></i>
                <ul class="sub-menu">
                    <li> <a href="./about-us" class="drop-down">About</a> </li>
                    <li> <a href="./vision-and-mission" class="drop-down">VISION & MISSION</a> </li>
                    <li> <a href="./associated-developers" class="drop-down"> DEVELOPERS</a></li>
                    <li> <a href="./media" class="drop-down">MEDIA</a> </li>
                    <li> <a href="./calendar-tab" class="drop-down">CALENDAR </a> </li>
                    <li> <a href="./event" class="drop-down">Event </a> </li>

                </ul>

                <style>
                    @keyframes pop {

                        0%,
                        100% {
                            transform: rotate(0deg);
                            scale: 1;

                        }

                        50% {
                            transform: rotate(10deg);
                            scale: 1.1;
                        }
                    }

                    #number1 {
                        font-size: 18px;
                    }

                    #number1 svg {
                        width: 18px;
                        height: 18px;
                    }

                    #number1 {
                        font-size: 20px;
                        font-weight: 700;
                        display: flex;
                        align-items: center;
                        justify-content: center;

                        background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        background-clip: text;
                        text-fill-color: transparent;

                    }

                    #number1 svg {
                        width: 24px;
                        height: 24px;
                        fill: #d39f51;
                        margin-right: 8px;
                        animation: pop 600ms infinite;
                    }

                    #misc1 {
                        float: right;
                        color: gold;
                        margin-top: 10px;
                    }

                    @media (width<991px) {
                        #misc1 {
                            display: none;
                        }
                    }
                </style>


            <li>
                <!-- Search Icon -->

                <div>
                    <svg id="searchIcon" style="cursor: pointer;color: white;stroke-width: 1.5;stroke: white;" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </div>

                <style>
                    div> :has(svg) {
                        width: auto;
                        height: auto;
                    }

                    div>svg {
                        --size: 19px;
                        width: var(--size);
                        height: var(--size);
                        /* margin: 3px; */
                    }
                </style>

                <div id="searchContainer" style="display: none; width: max-content; background: transparent; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); position: fixed; left: 0%;right: 0%; top: 0; z-index: 1000; transform: translateY(80px);margin-inline: auto;min-width: 47%;">
                    <div style="max-width: 600px; margin: 0 auto;">
                        <form id="searchForm" style="display: flex; gap: 10px;">
                            <input type="text" name="q" id="searchInput" placeholder="Search..." style="flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
                            <button type="submit" style="padding: 10px 20px; background: #efb93f; border: none; border-radius: 5px; color: white; cursor: pointer;">Search</button>
                            <button type="button" id="closeSearch" style="padding: 10px; background: none; border: none; color: #666; cursor: pointer;">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </form>
                        <!-- Search Preview Container -->
                        <div id="searchPreview" style="background: #fff; border: 1px solid #ddd; border-radius: 5px; margin-top: 10px; max-height: 300px; overflow-y: auto;width: 95%;"></div>
                    </div>
                </div>

                <!-- JavaScript Code -->
                <script>
                    // Toggle Search Container
                    document.getElementById('searchIcon').addEventListener('click', function(e) {
                        e.preventDefault();
                        const container = document.getElementById('searchContainer');
                        if (container.style.display === 'none') {
                            container.style.display = 'block';
                            container.querySelector('input').focus();
                        } else {
                            container.style.display = 'none';
                        }
                    });

                    // Close Search Container
                    document.getElementById('closeSearch').addEventListener('click', function() {
                        document.getElementById('searchContainer').style.display = 'none';
                    });

                    // Hide Search Container on Escape Key
                    document.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape') {
                            document.getElementById('searchContainer').style.display = 'none';
                        }
                    });

                    // Hide Search Container on Click Outside
                    document.addEventListener('click', function(e) {
                        const container = document.getElementById('searchContainer');
                        const searchIcon = document.getElementById('searchIcon');
                        if (!container.contains(e.target) && e.target !== searchIcon) {
                            container.style.display = 'none';
                        }
                    });

                    // Show Search Icon Only on Wider Screens
                    function handleResize() {
                        const searchIcon = document.getElementById('searchIcon');
                        if (window.innerWidth > 700) {
                            searchIcon.style.display = 'block';
                        } else {
                            searchIcon.style.display = 'none';
                        }
                    }

                    window.addEventListener('resize', handleResize);
                    handleResize(); // Initial check

                    // Form Submission
                    document.getElementById('searchForm').addEventListener('submit', function(e) {
                        e.preventDefault();
                        const searchTerm = this.querySelector('input[name="q"]').value;
                        window.location.href = 'search.php?search=' + encodeURIComponent(searchTerm);
                    });

                    // Asynchronous Search Preview Functionality
                    const searchInput = document.getElementById('searchInput');
                    const searchPreview = document.getElementById('searchPreview');

                    let searchTimeout;
                    searchInput.addEventListener('input', function() {
                        const query = this.value.trim();
                        if (query.length === 0) {
                            searchPreview.innerHTML = '';
                            return;
                        }

                        // Debounce to prevent too many requests
                        clearTimeout(searchTimeout);
                        searchTimeout = setTimeout(() => {
                            fetchSearchResults(query);
                        }, 300); // Adjust the delay as needed
                    });

                    async function fetchSearchResults(query) {
                        try {
                            const response = await fetch('search_preview.php?q=' + encodeURIComponent(query));
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            const data = await response.json();
                            displaySearchPreview(data);
                        } catch (error) {
                            console.error('Error fetching search preview:', error);
                            // Optionally, display an error message to the user
                            searchPreview.innerHTML = '<p style="padding: 10px; color: red;">An error occurred while fetching results.</p>';
                        }
                    }

                    function displaySearchPreview(results) {
                        if (results.length === 0) {
                            searchPreview.innerHTML = '<p style="padding: 10px;">No results found.</p>';
                            return;
                        }

                        const previewHTML = results.map(result => `
            <div style="padding: 8px; border-bottom: 1px solid #eee; max-width: 500px;">
                <a href="./propertydetail/${encodeURIComponent(result.link)}" style="text-decoration: none; color: inherit; display: flex; align-items: center; gap: 10px;">
                    <img src="./${result.image}" style="width: 30%; height:auto;max-height: 100px; object-fit: cover; border-radius: 4px;">
                    <div>
                        <h5 style="margin: 0 0 4px 0; font-size: 14px;">${escapeHTML(result.name)}</h5>
                        <p style="margin: 0; font-size: 12px; color: #666;">${escapeHTML(result.builder)} - ${escapeHTML(result.location.join(', '))}</p>
                    </div>
                </a>
            </div>
        `).join('');

                        searchPreview.innerHTML = previewHTML;
                    }

                    // Helper function to escape HTML to prevent XSS attacks
                    function escapeHTML(str) {
                        if (typeof str !== 'string') return '';
                        return str.replace(/[&<>'"]/g, function(tag) {
                            const charsToReplace = {
                                '&': '&amp;',
                                '<': '&lt;',
                                '>': '&gt;',
                                "'": '&#39;',
                                '"': '&quot;'
                            };
                            return charsToReplace[tag] || tag;
                        });
                    }
                </script>
            </li>

            <li id="misc1">
                <a id="number1" href="tel:+919732300007" class="track-click" data-id="1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path class="gold-gradient" d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.17-.17c1.12.56 2.38.86 3.69.86a1 1 0 011 1v3.59a1 1 0 01-1 1C10.64 22.96 1.04 13.36 1.04 4a1 1 0 011-1H5.63a1 1 0 011 1c0 1.31.3 2.57.86 3.69a1 1 0 01-.17 1.17l-2.2 2.2z" />
                    </svg>

                    +91-9732300007
                </a>
            </li>


            <style>
                .frame {
                    width: 90%;
                    margin: 40px auto;
                    text-align: center;
                }



                .custom-btn {
                    width: 130px;
                    height: 40px;
                    color: #adcbb3;
                    border-radius: 5px;
                    padding: 10px 25px;
                    font-family: 'Lato', sans-serif;
                    font-weight: 500;
                    background: transparent;
                    cursor: pointer;
                    transition: all 0.3s ease;
                    position: relative;
                    display: inline-block;
                    box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                        7px 7px 20px 0px rgba(0, 0, 0, .1),
                        4px 4px 5px 0px rgba(0, 0, 0, .1);
                    outline: none;
                }

                /* 5 */
                .btn-5 {
                    width: 130px;
                    height: 40px;
                    line-height: 42px;
                    padding: 0;
                    border: none;
                    background: #efb93f;
                    background: linear-gradient(0deg, #efb93f 0%, #efb93f 100%);
                }

                .btn-5:hover {
                    color: #efb93f;
                    background: transparent;
                    box-shadow: none;
                }

                .btn-5:before,
                .btn-5:after {
                    content: '';
                    position: absolute;
                    top: 0;
                    right: 0;
                    height: 2px;
                    width: 0;
                    background: #efb93f;
                    box-shadow:
                        -1px -1px 5px 0px #fff,
                        7px 7px 20px 0px #0003,
                        4px 4px 5px 0px #0002;
                    transition: 400ms ease all;
                }

                .btn-5:after {
                    right: inherit;
                    top: inherit;
                    left: 0;
                    bottom: 0;
                }

                .btn-5:hover:before,
                .btn-5:hover:after {
                    width: 100%;
                    transition: 800ms ease all;
                }

                /* Existing .call-btn styles */
                .call-btn {
                    position: fixed;
                    bottom: 50%;
                    right: 0;
                    z-index: 1000;
                    background-color: #161718;
                    color: white;
                    padding: 10px 20px;
                    text-align: center;
                    text-decoration: none;
                    font-size: 16px;
                    border-radius: 10px 0 0 10px;
                    box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
                    transition: transform 0.3s ease-in-out;
                    /* Smooth transition for transform changes */
                    animation: pulse-animation 2s infinite;
                    /* Apply the pulse animation */
                }

                .call-btn:hover {
                    background-color: #9f9f07;
                }

                /* Keyframes for pulse animation */
                @keyframes pulse-animation {
                    0% {
                        transform: scale(1);
                    }

                    50% {
                        transform: scale(1.1);
                        /* Increase the size to 110% */
                    }

                    100% {
                        transform: scale(1);
                    }
                }
            </style>
            <!-- <li> <a href="request.php" class="drop-down"> <button style="color: black;"
                            class="custom-btn btn-5"><span>
                                REQUEST PRICE</span></button></a> </li> -->

        </ul>
        <div class="topbar-right d-lg-none d-block">


        </div>
        <style>
            .gold-gradient {
                stroke: url(#gold-gradient);
                stroke-width: 1;
                fill: none;
            }
        </style>
        <div class="hotline-area d-lg-none d-flex">
            <div class="icon"> <svg width="26" height="27" viewBox="0 0 26 27" xmlns="http://www.w3.org/2000/svg">


                    <defs>
                        <linearGradient id="gold-gradient" gradientUnits="userSpaceOnUse" x1="0" y1="0" x2="100%" y2="0">
                            <stop offset="0%" style="stop-color: #d39f51;" />
                            <stop offset="50%" style="stop-color: #e5b566;" />
                            <stop offset="100%" style="stop-color: #f0cb7b;" />
                        </linearGradient>

                    </defs>

                    <path class="gold-gradient" d="M13.5365 14.7303C12.5652 14.7257 11.6003 14.5735 10.6748 14.2788C9.94838 14.0358 9.29948 13.6044 8.79429 13.0286C8.28911 12.4529 7.94573 11.7534 7.79922 11.0016C7.47293 9.43032 8.06788 7.76895 9.43026 6.44297C9.57662 6.30051 9.7287 6.16404 9.88612 6.03391C10.5733 5.45852 11.3903 5.05903 12.2664 4.86992C13.1425 4.6808 14.0515 4.70775 14.9149 4.94843C15.7429 5.21282 16.4688 5.72699 16.9929 6.42036C17.5171 7.11374 17.8138 7.95233 17.8424 8.82106C17.906 9.84579 17.572 10.8556 16.9099 11.6403C16.6595 11.9557 16.3269 12.196 15.9488 12.3349C15.5708 12.4737 15.1617 12.5056 14.7667 12.4272C14.6037 12.3934 14.4491 12.327 14.3124 12.2321C14.1756 12.1371 14.0594 12.0156 13.9707 11.8747C13.891 11.7379 13.8399 11.5863 13.8202 11.4292C13.8006 11.2721 13.8128 11.1127 13.8563 10.9604C14.2354 9.52782 14.6206 7.35079 14.6245 7.32912C14.6344 7.27307 14.6553 7.21952 14.6859 7.17152C14.7165 7.12353 14.7562 7.08203 14.8029 7.04939C14.8495 7.01676 14.9021 6.99363 14.9577 6.98133C15.0133 6.96903 15.0707 6.96779 15.1268 6.97769C15.1828 6.9876 15.2364 7.00844 15.2844 7.03904C15.3324 7.06964 15.3739 7.10939 15.4065 7.15602C15.4391 7.20266 15.4623 7.25527 15.4746 7.31084C15.4869 7.36641 15.4881 7.42387 15.4782 7.47992C15.4622 7.57048 15.0826 9.71458 14.6943 11.1818C14.6806 11.2221 14.6753 11.2647 14.6787 11.3071C14.682 11.3495 14.694 11.3908 14.7138 11.4284C14.7738 11.5112 14.8642 11.5669 14.9651 11.5831C15.2071 11.6235 15.4554 11.597 15.6834 11.5065C15.9114 11.416 16.1103 11.2649 16.2586 11.0696C16.7728 10.4546 17.0303 9.66518 16.9779 8.86526C16.9573 8.17371 16.7231 7.5055 16.3075 6.95233C15.892 6.39916 15.3155 5.98813 14.657 5.77565C13.9317 5.57612 13.1686 5.55608 12.4338 5.71726C11.6989 5.87843 11.0143 6.21599 10.439 6.7008C10.2999 6.8165 10.1643 6.93739 10.0343 7.06393C9.36093 7.71912 8.28498 9.07889 8.64767 10.8252C8.76741 11.4247 9.04172 11.9826 9.44341 12.4435C9.8451 12.9044 10.3602 13.2524 10.9378 13.4529C12.9701 14.1011 15.8907 14.1796 17.429 12.2664C17.5019 12.1798 17.6058 12.1251 17.7185 12.114C17.8312 12.103 17.9438 12.1365 18.0321 12.2074C18.1203 12.2783 18.1774 12.381 18.1909 12.4934C18.2045 12.6058 18.1735 12.7191 18.1046 12.809C16.9667 14.2242 15.2351 14.7303 13.5365 14.7303Z" />
                    <path class="gold-gradient" d="M12.0531 12.4839C11.595 12.4919 11.1481 12.3418 10.7878 12.0588C9.9562 11.3933 9.93324 10.2367 10.1664 9.44935C10.2452 9.18719 10.3505 8.93369 10.4814 8.69319C10.8065 8.03717 11.3264 7.49763 11.9699 7.14839C12.3602 6.94593 12.8052 6.87437 13.2393 6.94429C13.6734 7.0142 14.0735 7.22188 14.3805 7.53665C14.6932 7.87932 14.9287 8.28509 15.0712 8.72656C15.107 8.83416 15.0992 8.95151 15.0495 9.05343C14.9998 9.15536 14.9121 9.23373 14.8052 9.27173C14.6984 9.30972 14.5809 9.30432 14.478 9.25668C14.3751 9.20903 14.295 9.12295 14.2548 9.01689C14.1521 8.69084 13.9813 8.39029 13.7539 8.13507C13.5751 7.95216 13.3414 7.83271 13.0884 7.79492C12.8354 7.75714 12.577 7.80309 12.3525 7.92577C11.8699 8.19795 11.4821 8.61118 11.241 9.11005C11.1398 9.29704 11.058 9.49394 10.9971 9.69765C10.8285 10.267 10.8658 11.0106 11.3303 11.3824C11.8381 11.7906 12.6953 11.6181 13.1776 11.2022C13.5368 10.8785 13.8454 10.5029 14.0932 10.0876C14.1232 10.0393 14.1624 9.99729 14.2087 9.96409C14.2549 9.93089 14.3073 9.90712 14.3627 9.89414C14.4181 9.88117 14.4756 9.87923 14.5317 9.88845C14.5879 9.89768 14.6417 9.91787 14.6901 9.94789C14.7384 9.97791 14.7804 10.0172 14.8136 10.0634C14.8468 10.1096 14.8706 10.162 14.8836 10.2174C14.8966 10.2728 14.8985 10.3303 14.8893 10.3864C14.88 10.4426 14.8598 10.4964 14.8298 10.5448C14.5361 11.0339 14.1705 11.4761 13.7452 11.8565C13.2714 12.2563 12.673 12.4782 12.0531 12.4839Z" />
                    <path class="gold-gradient" d="M24.7001 26.0015H1.30047C0.955797 26.0012 0.625342 25.8641 0.381624 25.6204C0.137905 25.3767 0.00083252 25.0462 0.000488366 24.7015V8.66847C0.000436861 8.58609 0.0238662 8.50541 0.0680306 8.43587C0.112195 8.36634 0.175264 8.31083 0.249847 8.27586C0.32443 8.24089 0.407436 8.2279 0.489137 8.23842C0.570838 8.24893 0.647849 8.28252 0.711144 8.33524L11.3432 17.1716C11.8096 17.557 12.3957 17.7678 13.0007 17.7678C13.6057 17.7678 14.1918 17.557 14.6582 17.1716L25.2894 8.33481C25.3527 8.28206 25.4298 8.24847 25.5115 8.23797C25.5933 8.22747 25.6763 8.24049 25.7509 8.27552C25.8255 8.31054 25.8886 8.36612 25.9327 8.43571C25.9768 8.50531 26.0002 8.58606 26.0001 8.66847V24.7015C25.9997 25.0462 25.8627 25.3767 25.6189 25.6204C25.3752 25.8641 25.0448 26.0012 24.7001 26.0015ZM0.867141 9.59189V24.7015C0.867141 24.9407 1.06127 25.1349 1.30047 25.1349H24.7001C24.815 25.1349 24.9252 25.0892 25.0065 25.008C25.0878 24.9267 25.1334 24.8165 25.1334 24.7015V9.59189L15.2111 17.8381C14.5891 18.3521 13.8075 18.6334 13.0007 18.6335C12.1938 18.6337 11.412 18.3527 10.7899 17.839L0.867141 9.59189Z" />
                    <path class="gold-gradient" d="M0.434172 9.10179C0.342147 9.10197 0.252454 9.07285 0.178087 9.01864C0.103719 8.96444 0.0485401 8.88797 0.020542 8.8003C-0.00745601 8.71264 -0.00681877 8.61834 0.0223615 8.53106C0.0515417 8.44379 0.10775 8.36807 0.182842 8.31487L4.08278 5.55025C4.17656 5.48377 4.29291 5.45726 4.40623 5.47656C4.51955 5.49586 4.62057 5.55939 4.68705 5.65316C4.75354 5.74694 4.78005 5.86329 4.76075 5.97662C4.74145 6.08994 4.67792 6.19095 4.58414 6.25744L0.684201 9.02206C0.611181 9.074 0.52378 9.10187 0.434172 9.10179ZM25.5662 9.10179C25.4766 9.10187 25.3892 9.074 25.3162 9.02206L21.4163 6.25744C21.3235 6.19062 21.2609 6.08984 21.242 5.97706C21.2232 5.86427 21.2498 5.74862 21.3159 5.65531C21.382 5.56201 21.4823 5.4986 21.5949 5.47892C21.7075 5.45924 21.8234 5.48488 21.9172 5.55025L25.8171 8.31487C25.8922 8.36802 25.9483 8.44367 25.9775 8.53086C26.0067 8.61805 26.0075 8.71227 25.9796 8.79989C25.9517 8.88751 25.8966 8.96399 25.8224 9.01826C25.7482 9.07253 25.6582 9.10179 25.5662 9.10179ZM17.0041 3.03522C16.9144 3.0353 16.8269 3.00744 16.7537 2.95549L14.6824 1.48651C14.2165 1.09272 13.6271 0.874976 13.0171 0.871254C12.4071 0.867532 11.8151 1.07807 11.3445 1.46615L9.24716 2.95549C9.15339 3.02198 9.03704 3.04848 8.92371 3.02918C8.81039 3.00988 8.70937 2.94635 8.64289 2.85258C8.57641 2.7588 8.5499 2.64245 8.5692 2.52912C8.5885 2.4158 8.65203 2.31479 8.74581 2.2483L10.8171 0.779325C11.4376 0.271931 12.2154 -0.00360176 13.017 3.55561e-05C13.8186 0.00367287 14.5938 0.286253 15.2097 0.799258L17.255 2.2483C17.3301 2.3015 17.3863 2.37722 17.4155 2.46449C17.4447 2.55177 17.4453 2.64607 17.4173 2.73373C17.3893 2.8214 17.3342 2.89787 17.2598 2.95207C17.1854 3.00628 17.0957 3.0354 17.0037 3.03522H17.0041ZM0.715401 25.7675C0.626173 25.7677 0.539066 25.7403 0.465979 25.6891C0.392892 25.638 0.337387 25.5655 0.307046 25.4815C0.276706 25.3976 0.273008 25.3064 0.296459 25.2203C0.31991 25.1342 0.369366 25.0575 0.438072 25.0005L10.3266 16.7847C10.3704 16.7483 10.4209 16.7209 10.4753 16.7041C10.5296 16.6873 10.5868 16.6813 10.6435 16.6865C10.7001 16.6918 10.7552 16.7082 10.8056 16.7347C10.8559 16.7612 10.9006 16.7974 10.9369 16.8412C10.9733 16.885 11.0007 16.9355 11.0175 16.9899C11.0343 17.0443 11.0403 17.1014 11.0351 17.1581C11.0298 17.2148 11.0134 17.2699 10.9869 17.3202C10.9604 17.3706 10.9242 17.4152 10.8804 17.4516L0.991863 25.6674C0.914246 25.7321 0.816424 25.7675 0.715401 25.7675ZM25.2846 25.7675C25.1835 25.7676 25.0857 25.7322 25.0081 25.6674L15.1196 17.4516C15.0747 17.4156 15.0374 17.371 15.0099 17.3204C14.9824 17.2699 14.9652 17.2143 14.9594 17.1571C14.9536 17.0998 14.9593 17.042 14.9761 16.9869C14.9929 16.9319 15.0205 16.8807 15.0573 16.8365C15.0941 16.7922 15.1393 16.7557 15.1903 16.7291C15.2414 16.7025 15.2972 16.6863 15.3546 16.6816C15.4119 16.6768 15.4697 16.6835 15.5244 16.7013C15.5791 16.719 15.6298 16.7475 15.6734 16.7851L25.5619 25.001C25.6306 25.0579 25.6801 25.1347 25.7035 25.2207C25.727 25.3068 25.7233 25.3981 25.6929 25.482C25.6626 25.5659 25.6071 25.6384 25.534 25.6896C25.4609 25.7408 25.3738 25.7677 25.2846 25.7675Z" />
                    <path class="gold-gradient" d="M21.667 12.343C21.5521 12.343 21.4419 12.2974 21.3606 12.2161C21.2793 12.1348 21.2337 12.0246 21.2337 11.9097V3.03864C21.2324 3.0473 21.2151 3.03517 21.186 3.03517H4.81495C4.80548 3.0346 4.79598 3.03595 4.78704 3.03916C4.77811 3.04236 4.76991 3.04734 4.76295 3.0538L4.76729 11.9097C4.76729 12.0246 4.72163 12.1348 4.64037 12.2161C4.5591 12.2974 4.44889 12.343 4.33396 12.343C4.21904 12.343 4.10882 12.2974 4.02755 12.2161C3.94629 12.1348 3.90063 12.0246 3.90063 11.9097V3.03517C3.90744 2.79916 4.00747 2.57546 4.17883 2.41303C4.35019 2.25061 4.57892 2.16269 4.81495 2.16852H21.186C21.4221 2.16269 21.6508 2.25061 21.8222 2.41303C21.9935 2.57546 22.0935 2.79916 22.1003 3.03517V11.9097C22.1003 12.0246 22.0547 12.1348 21.9734 12.2161C21.8922 12.2974 21.7819 12.343 21.667 12.343Z" />
                </svg> </div>
            <div class="content">
                <span>To More Inquiry</span>


                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Select all elements with the 'track-click' class
                        var trackableElements = document.querySelectorAll('.track-click');

                        trackableElements.forEach(function(element) {
                            element.addEventListener('click', function(event) {
                                // Get the unique ID from the data attribute
                                var id = element.getAttribute('data-id');

                                // Create an AJAX request
                                var xhr = new XMLHttpRequest();
                                xhr.open('POST', 'track_click.php', true);
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                                // Data to send in the POST request
                                var data = 'id=' + encodeURIComponent(id);

                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === XMLHttpRequest.DONE) {
                                        if (xhr.status === 200) {
                                            console.log('Click tracked successfully');
                                        } else {
                                            console.error('Error tracking click');
                                        }
                                    }
                                };

                                xhr.send(data);
                            });
                        });
                    });
                </script>



                <span>
                    <a href="tel:+919732300007" class="track-click" data-id="2">+91-9732300007</a>
                </span>
            </div>
        </div>

    </div>

    <style>
        header.style-1 .main-menu .hotline-area .content span {
            color: #c7c7c7;
        }

        header.style-1 .main-menu .hotline-area .content a {
            background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
            font-size: 18px;
            font-weight: 700;
        }

        header.style-1 .main-menu .hotline-area .content a:hover {
            background: linear-gradient(-45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }
    </style>

    <style>
        @keyframes pop {

            0%,
            100% {
                transform: rotate(0deg);
                scale: 1;

            }

            50% {
                transform: rotate(10deg);
                scale: 1.1;
            }
        }

        #number2 {
            font-size: 15px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;

            background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;

        }

        #number2 svg {
            width: 16px;
            height: 16px;
            fill: #d39f51;
            margin-right: 8px;
            animation: pop 600ms infinite;
        }


        @media (width>991px) {
            #number2 {
                display: none;
            }
        }

        @media (width<500px) {
            div[class="header-logo d-lg-none d-flex"] {
                width: 130px;
            }
        }
    </style>

    <a id="number2" class="track-click" data-id="3" href="tel:+919732300007">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.17-.17c1.12.56 2.38.86 3.69.86a1 1 0 011 1v3.59a1 1 0 01-1 1C10.64 22.96 1.04 13.36 1.04 4a1 1 0 011-1H5.63a1 1 0 011 1c0 1.31.3 2.57.86 3.69a1 1 0 01-.17 1.17l-2.2 2.2z" />
        </svg>

        +91-9732300007
    </a>

    <svg id="mobileSearchIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" style="display: none; cursor: pointer;color: white;">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
    </svg>

    <!-- Search Container Below Header -->
    <div id="mobileSearchContainer" style="display: none; width: 100vw; background: #fff; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); position: fixed; left: 0; top: 0; z-index: 1000; transform: translateY(80px);">
        <div style="max-width: 600px; margin: 0 auto;">
            <form id="mobileSearchForm" style="display: flex; gap: 10px;">
                <input type="text" name="q" placeholder="Search..." style="flex: 1; padding: 8px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                <button type="submit" style="padding: 8px 16px; background: #efb93f; border: none; border-radius: 5px; color: white; cursor: pointer;">Search</button>
                <button type="button" id="closeMobileSearch" style="padding: 8px; background: none; border: none; color: #666; cursor: pointer;">
                    <i class="bi bi-x-lg"></i>
                </button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('mobileSearchForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const searchTerm = this.querySelector('input[name="q"]').value;
            window.location.href = 'search.php?search=' + encodeURIComponent(searchTerm);
        });

        document.getElementById('mobileSearchIcon').addEventListener('click', function(e) {
            e.preventDefault();
            const container = document.getElementById('mobileSearchContainer');
            if (container.style.display === 'none') {
                container.style.display = 'block';
                container.querySelector('input').focus();
            } else {
                container.style.display = 'none';
            }
        });

        document.getElementById('closeMobileSearch').addEventListener('click', function() {
            document.getElementById('mobileSearchContainer').style.display = 'none';
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.getElementById('mobileSearchContainer').style.display = 'none';
            }
        });

        document.addEventListener('click', function(e) {
            const container = document.getElementById('mobileSearchContainer');
            const searchIcon = document.getElementById('mobileSearchIcon');
            if (!container.contains(e.target) && e.target !== searchIcon) {
                container.style.display = 'none';
            }
        });

        // Show mobile search icon only for screens narrower than 700px
        function handleResize() {
            const mobileSearchIcon = document.getElementById('mobileSearchIcon');
            if (window.innerWidth <= 700) {
                mobileSearchIcon.style.display = 'block';
            } else {
                mobileSearchIcon.style.display = 'none';
            }
        }

        window.addEventListener('resize', handleResize);
        handleResize(); // Initial check
    </script>


    <div class="nav-right d-flex jsutify-content-end align-items-center">

        <div class="sidebar-button mobile-menu-btn "> <span></span> </div>
    </div>

</header>




<style>
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }

    .bounce {
        animation: bounce 2s infinite;
    }

    a.float.bounce {
        color: white;
        transition: scale 150ms ease-in-out;
    }

    a.float.bounce:hover {
        color: white;
        scale: 1.05;
    }

    .bi::before,
    [class^=bi-]::before,
    [class*=" bi-"]::before {
        margin-top: 14px;
    }

    @keyframes bounce {

        0%,
        25%,
        50%,
        75%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-20px);
        }

        60% {
            transform: translateY(-12px);
        }
    }

    @media (width < 500px) {
        div[class="header-logo d-lg-none d-flex"] {
            width: 84px !important;
        }

        #number2 {
            font-size: 13px;
        }

        #number2 svg {
            width: 14px;
            height: 14px;
            margin-right: 4px;
        }
    }


    #number1 {
        font-size: 18px;
    }

    #number1 svg {
        width: 18px;
        height: 18px;
    }

    .nav-item {
        margin-right: 0;
    }
</style>


<a href="https://wa.me/+919732300007" class="track-click float bounce" data-id="4" target="_blank">
    <i class="bi bi-whatsapp my-float"></i>
</a>

<?php
// include "./slidefornfakenoti.php";
?>