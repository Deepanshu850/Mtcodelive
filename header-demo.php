<div class="s-soft">
    <a href=https://www.facebook.com/moneytreerealtyofficial class="s-item facebook"><i class="bi bi-facebook"></i> </a>
    <a href=https://www.linkedin.com/company/moneytree-realty-services/mycompany/ class="s-item linkedin"><i class="bi bi-linkedin"></i> </a>
    <a href=https://www.instagram.com/moneytreerealtyofficial/ class="s-item instagram"><i class="bi bi-instagram"></i></a>
</div>

<header class="custom-header" id="mainHeader">
    <div class="custom-logo">
        <a href="index"><img src="./assets/img/logo.png" alt="Best Real Estate Property Consultant in Delhi/NCR"></a>
    </div>
    <nav class="custom-nav">
        <ul class="custom-menu">
            <li><a href="./index">Home</a></li>
            <li><a href="./career">Career</a></li>
            <li class="custom-dropdown">
                <a href="./projects">Projects</a>
                <ul class="custom-submenu">
                    <li>
                        <a href="./category/residential-property">Residential</a>
                        <ul class="custom-sub-submenu">
                            <li><a href="./category/residential-property-for-sale-noida">Noida</a></li>
                            <li><a href="./category/residential-property-for-sale-gurgaon">Gurgaon</a></li>
                            <li><a href="./category/residential-property-for-sale-mumbai">Mumbai</a></li>
                            <li><a href="./category/residential-property-for-sale-goa">Goa</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="./category/commercial-property">Commercial</a>
                        <ul class="custom-sub-submenu">
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
            <li><a href="./blog">Blog</a></li>
        </ul>
    </nav>
    <div class="custom-actions">

        <div class="custom-search">
            <svg id="searchIcon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
            <a href="tel:+919732300007" class="custom-contact"><i class="bi bi-telephone-fill"></i>+91-9732300007</a>
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const header = document.querySelector(".custom-header");
        let lastScrollPosition = 0;

        window.addEventListener("scroll", () => {
            const currentScrollPosition = window.scrollY;

            if (currentScrollPosition > lastScrollPosition && currentScrollPosition > 50) {
                // Scrolling Down
                header.classList.add("scrolled");
            } else if (currentScrollPosition < lastScrollPosition && currentScrollPosition < 100) {
                // Scrolling Up
                header.classList.remove("scrolled");
            }

            lastScrollPosition = currentScrollPosition;
        });
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

    /* Responsive Design for Submenu */
    @media (max-width: 768px) {
        .custom-submenu {
            position: static;
            transform: none;
            box-shadow: none;
        }

        .custom-sub-submenu {
            position: static;
            display: block;
            padding: 8px 0;
            box-shadow: none;
            border: none;
        }
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

    /* Responsive Design */
    @media (max-width: 768px) {
        .custom-header {
            flex-wrap: wrap;
        }

        .custom-logo img {
            max-width: 120px;
        }

        .custom-menu {
            display: none;
            flex-direction: column;
            gap: 10px;
            background: #fff;
            padding: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 60px;
            right: 16px;
        }

        .custom-menu.show {
            display: flex;
        }

        .custom-search svg {
            display: block;
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
    function handleResize() {
        const searchIcon = document.getElementById('searchIcon');
        if (window.innerWidth > 700) {
            searchIcon.style.display = 'inline-block';
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