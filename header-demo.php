<?php
define('BASE_PATH', '/Mtcodelive');

function internalLink($relativePath)
{
    return BASE_PATH . $relativePath;
}
?>
<!-- <div class="socialLinks">
    <ul>
        <li>
            <a href="https://www.facebook.com/moneytreerealtyofficial" class="social-link">
                <img src="<?php echo internalLink('/assets/img/FB.png'); ?>" alt="Facebook">
            </a>
        </li>
        <li>
            <a href="https://www.linkedin.com/company/moneytreerealtyservices/mycompany/" class="social-link">
                <img src="<?php echo internalLink('/assets/img/Linkedin.png'); ?>" alt="LinkedIn">
            </a>
        </li>

        <li>
            <a href="https://www.instagram.com/moneytreerealtyofficial/" class="social-link">
                <img src="<?php echo internalLink('/assets/img/Insta.png'); ?>" alt="Instagram">
            </a>
        </li>


    </ul>



</div> -->


<div class="socialLinks">
    <ul>
        <li>
            <a href="https://www.facebook.com/moneytreerealtyofficial" class="social-link">
                <i class="bi bi-facebook"></i>
            </a>
        </li>
        <li>
            <a href="https://www.linkedin.com/company/moneytreeryservices/mycompany/" class="social-link">
                <i class="bi bi-linkedin"></i>
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/moneytreerealtyofficial/" class="social-link">
                <i class="bi bi-instagram"></i>
            </a>
        </li>
        <li>
            <a href="https://www.youtube.com/@Moneytreerealtyofficial" class="social-link">
                <i class="bi bi-youtube"></i>
            </a>
        </li>
    </ul>
</div>


<style>
    /* Container for Social Links */
    .socialLinks {
        position: fixed;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        padding: 0;
        margin: 0;
        z-index: 100;

    }

    .socialLinks * {
        padding: 0;
        margin: 0;
    }

    .socialLinks ul {
        list-style-type: none;
        display: flex;
        flex-direction: column;
        /* gap: 1px; */
        width: 200px;
        transform: translateX(-155px);
        border-radius: 12px;
    }

    .socialLinks li {
        background: rgba(58, 58, 58, 0.4);
        background: rgba(17, 17, 17, 0.5);

        /* Glassy effect */
        backdrop-filter: blur(6px);
        /* Apply blur for the glass effect */
        display: flex;
        justify-content: flex-end;
        padding-right: 5px;
        padding-block: 5px;
        transition: transform 250ms ease, background 250ms ease, border-radius 250ms ease;
    }

    .socialLinks li:hover {
        transform: translateX(8px);
    }

    /* Links */
    .socialLinks a {
        --link-size: 40px;
        width: var(--link-size);
        height: var(--link-size);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        overflow: hidden;
        color: #fff;
        font-size: 22px;
        /* Icon size */
        transition: transform 0.3s, background 0.3s;
    }

    .socialLinks a:hover {
        transform: scale(1.1);
    }

    /* Hover Effects for Individual Social Media */
    .socialLinks li:nth-child(1) {
        border-radius: 0 12px 0 0;
    }

    .socialLinks li:nth-child(1):hover {
        background: #305891;
        /* Facebook blue */
        border-radius: 0 12px 12px 0;
    }

    .socialLinks li:nth-child(2) {
        border-radius: 0 0 0 0;
    }

    .socialLinks li:nth-child(2):hover {
        background: #007bb6;
        /* LinkedIn blue */
        border-radius: 0 12px 12px 0;
    }

    .socialLinks li:nth-child(3) {
        border-radius: 0 0 0 0;
    }

    .socialLinks li:nth-child(3):hover {
        background: linear-gradient(165deg, #515bd4 20%, #8134af 40%, #dd2a7b 60%, #FEDA77 90%);
        /* Instagram gradient */
        border-radius: 0 12px 12px 0;
    }

    .socialLinks li:nth-child(4) {
        border-radius: 0 0 12px 0;
    }

    .socialLinks li:nth-child(4):hover {
        background: #af0606;
        /* YouTube red */
        border-radius: 0 12px 12px 0;
    }
</style>




<header class="custom-header scrolled" id="mainHeader">
    <div class="custom-logo">
        <a href="<?php echo internalLink('/index'); ?>">
            <img src="<?php echo internalLink('/assets/img/logo.png'); ?>" alt="Best Real Estate Property Consultant in Delhi/NCR">
        </a>
    </div>
    <nav class="custom-nav">
        <ul class="custom-menu">
            <li><a href="<?php echo internalLink('/index'); ?>">Home</a></li>
            <li><a href="<?php echo internalLink('/career'); ?>">Career</a></li>
            <li class="custom-dropdown">
                <a href="<?php echo internalLink('/projects'); ?>">Projects</a>
                <ul class="custom-submenu">
                    <li>
                        <a href="<?php echo internalLink('/category/residential-property'); ?>">Residential</a>
                        <ul class="custom-sub-submenu">
                            <li><a href="<?php echo internalLink('/category/residential-property-for-sale-noida'); ?>">Noida</a></li>
                            <li><a href="<?php echo internalLink('/category/residential-property-for-sale-gurgaon'); ?>">Gurgaon</a></li>
                            <li><a href="<?php echo internalLink('/category/residential-property-for-sale-mumbai'); ?>">Mumbai</a></li>
                            <li><a href="<?php echo internalLink('/category/residential-property-for-sale-goa'); ?>">Goa</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo internalLink('/category/commercial-property'); ?>">Commercial</a>
                        <ul class="custom-sub-submenu">
                            <li><a href="<?php echo internalLink('/category/commercial-property-for-sale-noida'); ?>">Noida</a></li>
                            <li><a href="<?php echo internalLink('/category/commercial-property-for-sale-gurgaon'); ?>">Gurgaon</a></li>
                            <li><a href="<?php echo internalLink('/category/commercial-property-for-sale-mumbai'); ?>">Mumbai</a></li>
                            <li><a href="<?php echo internalLink('/category/commercial-property-for-sale-goa'); ?>">Goa</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo internalLink('/category/studio-apartments'); ?>">Studio Apartments</a></li>
                    <li><a href="<?php echo internalLink('/category/plots'); ?>">Plots</a></li>
                </ul>
            </li>
            <li><a href="<?php echo internalLink('/contact'); ?>">Contact</a></li>
            <li>
                <a href="<?php echo internalLink('/blog'); ?>">Blog</a>
                <div class="blog-dropdown">
                    <?php
                    include $_SERVER['DOCUMENT_ROOT'] . BASE_PATH . '/data/blogdata.php';

                    function generateSlug($title)
                    {
                        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
                    }

                    $posts = array_reverse($posts);

                    $topPosts = array_slice($posts, 0, 3);

                    foreach ($topPosts as $post) {
                        echo '<a href="' . internalLink('/blog/' . generateSlug($post['title'])) . '">
                        <div class="blog-dropdown-blog">
                            <div class="blog-dropdown-text">
                                <p class="blog-dropdown-title">' . $post['title'] . '</p>
                                <p class="blog-dropdown-description">' . substr($post['description'], 0, 100) . '...</p>
                            </div>
                            <img src="' . internalLink('/blog/' . $post['imageUrl']) . '" alt="' . $post['title'] . '" class="blog-dropdown-image">
                        </div>
                        </a>';
                    }
                    ?>
                </div>
            </li>
        </ul>
    </nav>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const blogLink = document.querySelector('a[href="' + '<?php echo internalLink('/blog'); ?>' + '"]');
            const blogDropdown = document.querySelector('.blog-dropdown');

            if (blogLink && blogDropdown) {
                let hideTimeout;

                // Function to show the dropdown
                const showDropdown = () => {
                    clearTimeout(hideTimeout); // Clear any pending hide timeout
                    blogDropdown.style.display = 'block'; // Make the dropdown visible
                    requestAnimationFrame(() => {
                        blogDropdown.classList.add('active'); // Add the active class for smooth transition
                    });
                };

                // Function to hide the dropdown
                const hideDropdown = () => {
                    blogDropdown.classList.remove('active'); // Remove the active class
                    hideTimeout = setTimeout(() => {
                        blogDropdown.style.display = 'none'; // Hide the dropdown after the transition
                    }, 300); // Matches the CSS transition duration
                };

                // Add event listeners for mouse enter and leave
                blogLink.addEventListener('mouseenter', showDropdown);
                blogDropdown.addEventListener('mouseenter', showDropdown);
                blogLink.addEventListener('mouseleave', hideDropdown);
                blogDropdown.addEventListener('mouseleave', hideDropdown);
            }
        });
    </script>
    <style>
        .blog-dropdown {
            position: absolute;
            background: transparent;
            width: max-content;
            max-width: 600px;
            padding: 0;
            border: 1px solid #000;
            border-radius: 10px;
            display: none;
            opacity: 0;
            transform: translateX(-45%) translateY(0);
            overflow: hidden;

        }

        .blog-dropdown.active {
            display: block;
            opacity: 1;
            transform: translateX(-45%) translateY(10px);
        }

        .blog-dropdown-blog {
            display: flex;
            align-items: center;
            padding-block: 6px;
            padding-inline: 12px;
            border-bottom: 1px solid grey;
            background: white;
            /* backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px); */
            color: #000;

        }

        .blog-dropdown-blog:hover {
            background: radial-gradient(circle at top, #3eb6a8 0%, #1a9e8f 30%, #1a7b72 100%);
            color: #fff;

        }



        .blog-dropdown-text {
            padding-right: 10px;
        }

        .blog-dropdown-title {
            margin: 0 0 4px;
            font-size: 14px;
            font-weight: 700;
            /* color: #fff; */
            letter-spacing: 0.35px;
        }

        .blog-dropdown-description {
            font-size: 12px;
            /* color: #fff; */
            line-height: 1.6;
            text-transform: capitalize;
        }

        .blog-dropdown-image {
            width: 150px;
            height: 100px;
            /* object-fit: cover; */
            border-radius: 8px;
        }
    </style>

    <div class="custom-actions">

        <div class="custom-search">
            <svg id="searchIcon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
            <a href="tel:+919732300007" class="custom-contact"><i class="bi bi-telephone-fill"></i>+91-9732300007</a>

            <div class="mobile-hamburger" id="mobileHamburgerIcon">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>


    </div>

</header>

<!-- mobile side menu -->



<div class="mobile-menu" id="mobileMenu">
    <nav class="mobile-nav">
        <ul>
            <li><a href="./index">Home</a></li>
            <li><a href="./career">Career</a></li>
            <li class="mobile-dropdown">
                <a href="./projects">Projects</a>
                <ul class="mobile-submenu">
                    <li>
                        <a href="./category/residential-property">Residential</a>
                        <ul class="mobile-sub-submenu">
                            <li><a href="./category/residential-property-for-sale-noida">Noida</a></li>
                            <li><a href="./category/residential-property-for-sale-gurgaon">Gurgaon</a></li>
                            <li><a href="./category/residential-property-for-sale-mumbai">Mumbai</a></li>
                            <li><a href="./category/residential-property-for-sale-goa">Goa</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="./category/commercial-property">Commercial</a>
                        <ul class="mobile-sub-submenu">
                            <li><a href="./category/commercial-property-for-sale-noida">Noida</a></li>
                            <li><a href="./category/commercial-property-for-sale-gurgaon">Gurgaon</a></li>
                            <li><a href="./category/commercial-property-for-sale-mumbai">Mumbai</a></li>
                            <li><a href="./category/commercial-property-for-sale-goa">Goa</a></li>
                        </ul>
                    </li>
                    <li><a href="./category/studio-apartments">Studio Apartments</a></li>
                    <li><a href="./category/plots">Plots</a></li>
                </ul>
            </li>
            <li><a href="./contact">Contact</a></li>
            <li>
                <a href="./blog">Blog</a>


            </li>
            <li><a href="tel:+919732300007" class="mobile-phone"><i class="bi bi-telephone-fill"></i>+91-9732300007</a></li>
        </ul>
    </nav>
</div>




<style>
    /* Mobile Menu Container */
    div.mobile-menu {
        position: fixed;
        top: 0;
        left: -100%;
        height: 100vh;
        width: 75%;
        background: linear-gradient(296deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4));
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        transition: left 0.3s ease;
        z-index: 999;
        border: 1px solid rgba(255, 255, 255, 0.1);
        overflow-y: auto;
        -ms-overflow-style: none;
        /* Hide scrollbar for IE and Edge */
        scrollbar-width: none;
        /* Hide scrollbar for Firefox */
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    div.mobile-menu::-webkit-scrollbar {
        display: none;
    }

    /* Active State */
    div.mobile-menu.active {
        left: 0;
    }

    /* Navigation List */
    div.mobile-menu nav.mobile-nav ul {
        padding: 90px 40px 20px;
        list-style: none;
        max-width: 400px;
        margin: 0 auto;
    }

    /* List Items */
    div.mobile-menu nav.mobile-nav ul li {
        opacity: 0.9;
    }

    /* Links */
    div.mobile-menu nav.mobile-nav ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 17px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0;
        transition: all 0.3s ease;
    }

    div.mobile-menu nav.mobile-nav ul.mobile-submenu li a {
        font-size: 15px;
    }


    /* Hover Effect */
    div.mobile-menu nav.mobile-nav ul li a:hover {
        color: #f0cb7b;
    }

    /* Dropdown Icon */
    div.mobile-menu nav.mobile-nav ul li.mobile-dropdown>a::after {
        content: '\f282';
        font-family: 'bootstrap-icons';
        font-size: 16px;
        transition: transform 0.3s ease;
    }

    /* Dropdown Active State */
    div.mobile-menu nav.mobile-nav ul li.mobile-dropdown.active>a::after {
        transform: rotate(180deg);
    }

    /* Submenu */
    div.mobile-menu nav.mobile-nav ul li ul.mobile-submenu {
        display: none;
        padding-left: 20px;
        margin-top: 10px;
    }

    /* Submenu Active State */
    div.mobile-menu nav.mobile-nav ul li.mobile-dropdown.active ul.mobile-submenu {
        display: block;
        animation: slideDown 0.3s ease forwards;
        padding: 0 0 0 30px;
        margin-top: 0;
    }


    /* Sub-submenu */
    div.mobile-menu nav.mobile-nav ul li ul.mobile-submenu li ul.mobile-sub-submenu {
        display: none;
        padding-left: 20px;
        margin-top: 10px;
    }

    /* Sub-submenu Active State */
    div.mobile-menu nav.mobile-nav ul li ul.mobile-submenu li.active ul.mobile-sub-submenu {
        display: block;
        animation: slideDown 0.3s ease forwards;
    }

    /* Keyframe Animation */
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Phone Button */
    div.mobile-menu nav.mobile-nav ul li a.mobile-phone {
        border: 1px solid #f0cb7b;
        border-radius: 20px;
        padding: 12px 24px !important;
        font-size: 17px;
        margin-top: 20px;
        text-align: center;
        background: linear-gradient(45deg, #d39f51, #e5b566);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        box-shadow: 0 0 20px rgba(240, 203, 123, 0.2);
    }

    /* Scrollbar Styling */
    div.mobile-menu::-webkit-scrollbar {
        width: 6px;
    }

    div.mobile-menu::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
    }

    div.mobile-menu::-webkit-scrollbar-thumb {
        background: rgba(240, 203, 123, 0.5);
        border-radius: 3px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdowns = document.querySelectorAll('.mobile-dropdown');
        const submenus = document.querySelectorAll('.mobile-submenu li');

        dropdowns.forEach(dropdown => {
            const link = dropdown.querySelector('a');
            link.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const parent = this.parentElement;

                // Close other dropdowns
                dropdowns.forEach(other => {
                    if (other !== parent) {
                        other.classList.remove('active');
                    }
                });

                parent.classList.toggle('active');
            });
        });

        // Handle sub-submenu clicks
        submenus.forEach(submenu => {
            const link = submenu.querySelector('a');
            if (link && submenu.querySelector('.mobile-sub-submenu')) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    submenu.classList.toggle('active');
                });
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileHamburger = document.getElementById('mobileHamburgerIcon');
        const mobileMenu = document.getElementById('mobileMenu');
        const dropdowns = document.querySelectorAll('.mobile-dropdown');

        mobileHamburger.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
        });

        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', function(e) {
                e.preventDefault();
                this.classList.toggle('active');
            });
        });
    });
</script>







<script>
    document.getElementById('mobileHamburgerIcon').addEventListener('click', function() {
        this.classList.toggle('active');
    });
</script>
<style>
    .custom-header {
        position: fixed;
        top: 6%;
        left: 10%;
        width: 80%;
        border-radius: 100px;
        padding: 16px 32px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1000;
        transition: all 0.3s ease;
        background: rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(10px);


    }

    /* Expanded Header State */
    .custom-header.scrolled {
        top: 0;
        left: 0;
        width: 100%;
        border-radius: 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        background: linear-gradient(to left bottom,
                rgba(0, 91, 82, 0.6) 0%,
                rgba(0, 0, 0, 0.6) 20%,
                rgba(0, 0, 0, 0.4) 40%,
                rgba(0, 91, 82, 0.6) 60%,
                rgba(0, 91, 82, 0.6) 80%,
                rgba(0, 91, 82, 0.8) 100%);



    }

    /* Optional: Styling for Children */
    .custom-header .logo {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .custom-header ul {
        list-style-type: none;
    }

    .custom-logo img {
        filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.8));
        transition: filter 0.3s ease;
    }

    .custom-logo img:hover {
        filter: drop-shadow(0 0 15px rgba(240, 203, 123, 0.6));
    }

    .custom-header .navigation {
        flex: 1;
        text-align: center;
        font-size: 1rem;
    }

    .custom-header .actions {
        font-size: 1rem;
    }

    .custom-logo img {
        max-width: 150px;
    }

    /* Navigation Menu */
    .custom-nav {
        flex: 1;
        margin-left: 32px;

    }

    .custom-menu {
        display: flex;
        align-items: center;
        /* gap: 20px; */

    }

    .custom-menu li {
        position: relative;

    }

    .custom-menu>li>a {
        font-size: 16px;
        font-weight: bold;
        color: #e1dbdb;
        padding: 8px 16px;
        transition: color 0.3s ease;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    .custom-menu>li>a:hover {
        color: transparent;
        background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 0 10px rgba(240, 203, 123, 0.5);
    }

    /* Dropdown Menu */
    .custom-dropdown {
        position: relative;
    }

    .custom-submenu {
        display: none;
        position: absolute;
        left: 0;
        bottom: 0;
        /* Sticks to the bottom of the header */
        transform: translateY(100%);
        background: #fff;
        border: 1px solid #005b52;
        border-radius: 6px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 10;
        /* padding: 8px 0; */
        min-width: 200px;
        /* Ensure a minimum width */
    }

    .custom-dropdown:hover .custom-submenu {
        display: grid;
    }

    .custom-submenu li {
        position: relative;
        /* padding: 8px 16px; */
    }

    .custom-submenu a {
        font-size: 14px;
        color: #333;
        text-decoration: none;
        transition: background 0.3s ease;
    }

    .custom-submenu a:hover {
        background: #f0f0f0;
    }

    /* Sub-submenu */
    .custom-sub-submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: 0;
        background: #fff;
        border: 1px solid #005b52;
        border-radius: 6px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* padding: 8px 0; */
        min-width: 200px;
    }

    .custom-submenu li:hover .custom-sub-submenu {
        display: grid;
    }

    /* Submenu Styling for Better UI */
    .custom-submenu li {
        border-bottom: 1px solid #eee;
    }

    .custom-submenu li:last-child {
        border-bottom: none;
    }

    .custom-submenu a {
        position: relative;
        padding: 12px 16px;
        font-size: 14px;
        display: block;
        color: #333;
        background: transparent;
        text-decoration: none;
        z-index: 1;
        transition: color 0.3s ease;
        overflow: hidden;

    }

    .custom-submenu a::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at top, #3eb6a8 0%, #1a9e8f 30%, #1a7b72 100%);
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease, color 250ms ease;
    }

    .custom-submenu a:hover {
        color: white;
    }

    .custom-submenu a:hover::before {
        opacity: 1;

    }


    /* Actions Section */
    .custom-actions {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .custom-contact {
        font-size: 16px;
        font-weight: bold;
        color: #007bff;
        background: none;
        padding: 8px 16px;
        border: 1px solid #f0cb7b;
        border-radius: 16px;
        transition: all 0.3s ease;
        background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
        /* text-shadow: 0 1px 2px rgb(240, 203, 123,0.3); */

    }


    /* Search Icon */
    .custom-search svg {
        --call-icon-size: 26px;
        width: var(--call-icon-size);
        height: var(--call-icon-size);
        cursor: pointer;
        color: #f0cb7b;
        transition: color 0.3s ease;
        margin-right: 1rem;
    }

    .custom-search svg:hover {
        scale: 1.1;
    }

    .mobile-hamburger {
        display: none;
        grid-template-columns: 1fr;
        width: 26px;
        gap: 4px;

    }

    .mobile-hamburger span {
        height: 2px;
        background: linear-gradient(-45deg, #d39f51, #e5b566, #f0cb7b, #f8e292);
        border-radius: 8px;
        transition: all 0.3s ease;
        transform-origin: center;
    }


    .mobile-hamburger.active span:first-child {
        transform: rotate(45deg) translate(4px, 4px);
        transition: transform 0.3s ease;
    }

    .mobile-hamburger.active span:nth-child(2) {
        opacity: 0;
        transition: opacity 0.2s ease;
    }

    .mobile-hamburger.active span:last-child {
        transform: rotate(-45deg) translate(5px, -5px);
        transition: transform 0.3s ease;
    }




    /* Responsive Design */

    @media (max-width: 768px) {
        .custom-header {
            padding: 10px 22px;
            top: 4%;
        }

        .custom-logo img {
            max-width: 85px;
        }

        .custom-search svg {
            --call-icon-size: 20px;
            display: inline-block;
        }

        .custom-nav {
            display: none;
        }

        .custom-contact {
            display: none;
        }

        .custom-search {
            display: flex;
            align-items: center;
        }

        .mobile-hamburger {
            display: grid;
        }
    }
</style>

<div id="searchContainer" class="search-container">
    <div class="search-wrapper">
        <form id="searchForm" class="search-form">
            <input type="text" name="q" id="searchInput" class="search-input" placeholder="Search...">
            <button type="submit" class="search-submit-btn">Search</button>
            <button type="button" id="closeSearch" class="search-close-btn">
                <i class="bi bi-x-lg"></i>
            </button>
        </form>
        <!-- Search Preview Container -->
        <div id="searchPreview" class="search-preview"></div>
    </div>
</div>


<style>
    .search-container {
        display: none;
        width: max-content;
        background: transparent;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        position: fixed;
        left: 0%;
        right: 0%;
        top: 30px;
        z-index: 1000;
        transform: translateY(80px);
        margin-inline: auto;
        min-width: 47%;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 14px;
    }

    .search-wrapper {
        max-width: 600px;
        margin: 0 auto;
    }

    .search-form {
        display: flex;
        gap: 10px;
    }

    .search-input {
        flex: 1;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
    }

    input.search-input {
        background: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
        color: #e1dbdb;

    }

    input.search-input::placeholder {
        color: #e1dbdb;

    }

    .search-submit-btn {
        padding: 10px 20px;
        background: #efb93f;
        border: none;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }

    .search-close-btn {
        padding: 10px;
        background: none;
        border: none;
        color: white;
        cursor: pointer;
    }

    .search-preview {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top: 10px;
        max-height: 300px;
        overflow-y: auto;
        width: 95%;
    }

    @media (width < 768px) {
        .search-submit-btn {
            padding: 6px 16px;
        }

        .search-input {
            padding: 5px 10px;
        }

        .search-input::placeholder {
            font-size: 14px;
        }

        .search-close-btn {
            padding: 10px 2px;
        }

        .search-container {
            padding: 10px;
            top: -8%;
        }

        .search-preview div {
            max-width: 90vw !important;
        }

        .search-preview h5 {
            font-size: 12px !important;
        }

        .search-preview p {
            font-size: 10px !important;
            line-height: 1.5;
        }
    }
</style>

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
    // function handleResize() {
    //     const searchIcon = document.getElementById('searchIcon');
    //     if (window.innerWidth > 700) {
    //         searchIcon.style.display = 'inline-block';
    //     } else {
    //         searchIcon.style.display = 'none';
    //     }
    // }

    // window.addEventListener('resize', handleResize);
    // handleResize(); 

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