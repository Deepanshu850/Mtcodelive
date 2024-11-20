<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">
  <link href="assets/css/nice-select.css" rel="stylesheet">


</head>

<body>
  <?php include "./header.php" ?>




  <style>
    /* General Styles */

    .hero-section {
      position: relative;
      width: 100%;
      height: 100vh;
      background: url('./best-real-estate-property-consultant-in-india.jpeg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      z-index: 1;
    }

    .search-bar-container {
      position: relative;
      z-index: 500;
      width: 90%;
      max-width: 1000px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 15px;
      padding: 30px 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      text-align: center;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .search-bar-container h1 {
      font-size: 2.5rem;
      font-weight: bold;
      color: #fff;
      margin-bottom: 20px;
    }

    .search-bar-container p {
      font-size: 1rem;
      color: #ddd;
      margin-bottom: 20px;
    }

    .search-form {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: center;
      align-items: center;
    }

    .form-group {
      position: relative;
      width: 50%;
    }

    .form-group input {
      width: 100%;
      padding: 6px 20px;
      font-size: 1rem;
      border: 2px solid rgba(255, 255, 255, 0.3);
      border-radius: 30px;
      outline: none;
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      font-weight: bold;
    }

    .form-group input::placeholder {
      color: #ddd;
    }

    .form-group input:focus {
      border: 2px solid #00aaff;
      background: rgba(255, 255, 255, 0.5);
      color: #fff;
      box-shadow: 0 0 8px rgba(0, 170, 255, 0.5);
    }

    .search-btn {
      padding: 8px 16px;
      font-size: 15px;
      background: radial-gradient(circle at top, #0e9688 0%, #007f70 30%, #005b52 100%);
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .search-btn:hover {
      background: radial-gradient(circle at top, #0e9688 0%, #1c9486 30%, #005b52 100%);
      transform: translateY(-1px);
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
      .search-bar-container {
        padding: 20px;
      }

      .search-bar-container h1 {
        font-size: 2rem;
      }

      .search-btn {
        font-size: 1rem;
        padding: 12px;
      }

      .search-form {
        flex-direction: column;
      }
    }
  </style>

  <style>
    /* Suggestions styling */
    .suggestions-box {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      max-height: 200px;
      overflow-y: auto;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      z-index: 500;
      display: none;
      /* Hidden by default */
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      margin-top: 5px;
    }

    .suggestions-box .list-group-item {
      padding: 10px 15px;
      font-size: 1rem;
      cursor: pointer;
      border: none;
      text-align: left;
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
  </style>



  <div class="hero-section">
    <div class="overlay"></div>
    <div class="search-bar-container">
      <h1>Find Your Dream Property</h1>
      <p>Search properties for sale, rent, or lease across top locations.</p>
      <form class="search-form" action="search.php" method="GET" onsubmit="event.preventDefault(); window.location.href='search?search=' + document.querySelector('input[name=search]').value;">
        <!-- Location Input -->
        <div class="form-group position-relative">
          <input type="text" name="search" placeholder="Enter City, Location, or Project Name" autocomplete="off" oninput="fetchSuggestions(this.value)" onkeydown="handleKeyNavigation(event)">
          <!-- Suggestions List -->
          <ul id="suggestions" class="list-group suggestions-box"></ul>
        </div>

        <!-- Search Button -->
        <button type="submit" class="search-btn">Search</button>
      </form>
    </div>
  </div>
  <script>
    let activeIndex = -1; // Tracks the active suggestion

    function fetchSuggestions(query) {
      const suggestionsBox = document.getElementById('suggestions');

      if (query.trim().length > 0) {
        fetch(`suggest.php?query=${encodeURIComponent(query)}`)
          .then((response) => response.json())
          .then((data) => {
            suggestionsBox.innerHTML = '';
            if (data.length > 0) {
              data.forEach((keyword, index) => {
                const listItem = document.createElement('li');
                listItem.classList.add('list-group-item');
                listItem.textContent = keyword;

                // Handle click event
                listItem.addEventListener('click', () => {
                  document.querySelector('input[name=search]').value = keyword;
                  suggestionsBox.classList.remove('show');
                  document.querySelector('.search-form').submit();
                });

                suggestionsBox.appendChild(listItem);
              });
              suggestionsBox.classList.add('show');
              activeIndex = -1; // Reset active index
            } else {
              suggestionsBox.classList.remove('show');
            }
          })
          .catch((error) => {
            console.error('Error fetching suggestions:', error);
          });
      } else {
        suggestionsBox.classList.remove('show');
      }
    }

    function handleKeyNavigation(event) {
      const suggestionsBox = document.getElementById('suggestions');
      const suggestions = suggestionsBox.querySelectorAll('.list-group-item');

      if (suggestions.length > 0) {
        if (event.key === 'ArrowDown') {
          // Move down
          event.preventDefault();
          activeIndex = (activeIndex + 1) % suggestions.length;
          highlightSuggestion(suggestions, activeIndex);
        } else if (event.key === 'ArrowUp') {
          // Move up
          event.preventDefault();
          activeIndex = (activeIndex - 1 + suggestions.length) % suggestions.length;
          highlightSuggestion(suggestions, activeIndex);
        } else if (event.key === 'Enter') {
          // Select the highlighted suggestion
          event.preventDefault();
          if (activeIndex >= 0) {
            const selectedSuggestion = suggestions[activeIndex].textContent;
            document.querySelector('input[name=search]').value = selectedSuggestion;
            suggestionsBox.classList.remove('show');
          }
          document.querySelector('.search-form').submit();
        }
      }
    }

    function highlightSuggestion(suggestions, index) {
      suggestions.forEach((item, i) => {
        if (i === index) {
          item.classList.add('active');
          // Ensure the active suggestion is in view
          item.scrollIntoView({
            block: 'nearest',
            behavior: 'smooth'
          });
        } else {
          item.classList.remove('active');
        }
      });
    }

    // Hide suggestions when clicking outside
    document.addEventListener('click', function(event) {
      const suggestionsBox = document.getElementById('suggestions');
      if (!event.target.closest('.form-group')) {
        suggestionsBox.classList.remove('show');
      }
    });
  </script>



  <?php include "./footer.php" ?>
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

</body>

</html>