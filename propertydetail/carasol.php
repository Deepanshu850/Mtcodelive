<style>
    .carousel-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        margin-bottom: 3rem;
    }

    .carousel-track {
        display: flex;
        transition: transform 0.3s ease-in-out;
    }

    .project-card {
        min-width: 100%;
        box-sizing: border-box;
    }

    .project-card img {
        width: 100%;
        display: block;
        height: 400px;
        object-fit: cover;
    }

    @media (width < 500px) {
        .project-card img {
            height: 260px;
        }
    }

    .carousel-button {
        position: absolute;
        top: 50%;
        width: 35px;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
    }

    .carousel-button.left {
        left: 10px;
    }

    .carousel-button.right {
        right: 10px;
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        display: flex;
        gap: 5px;
    }

    .carousel-indicator {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: rgba(236, 235, 235, 0.42);
    }

    .carousel-indicator.active {
        background: white;
    }
</style>


<div class="property-summary">
    <h2 style="color: #005B52" style="padding: 20px 10px;">Gallery</h2><br>
</div>


<!-- show more function  -->
<?php

$currentURL = $_SERVER['REQUEST_URI'];

$pattern = "/\/propertydetail\/(.*?)(?:\.php)?$/";
preg_match($pattern, $currentURL, $matches);
if (isset($matches[1])) {
    $pageTitle = $matches[1];

} else {
    $pageTitle = "";

}

$pageTitleNormalized = str_replace('-', ' ', strtolower($pageTitle));

include '../data/propertydata.php';


$matchedProperty = null;
foreach ($properties as $property) {
    $propertyNameNormalized = str_replace('-', ' ', strtolower($property['name']));
    if ($propertyNameNormalized === $pageTitleNormalized) {
        $matchedProperty = $property;
        break;
    }
}




if (!$matchedProperty && $pageTitleNormalized === 'l t elixir reserve') {
    $matchedProperty = [
        'id' => 23,
        'name' => 'L&T Elixir Reserve',
        'location' => 'Mumbai',
        'images' => [
            'assets/img/projectdetails/ltelixir1.jpg',
            'assets/img/projectdetails/ltelixir2.png',
            'assets/img/projectdetails/ltelixir3.jpg',
        ],
        'price' => 'On Request',
        'detailsPage' => '#',
        'type' => ['Residential']
    ];
} elseif (!$matchedProperty && $pageTitleNormalized === 'devika vibe panache bazaar') {
    $matchedProperty = [
        'id' => 26,
        'name' => 'Devika VIBE | Panache Bazaar',
        'location' => 'Noida',
        'images' => [
            'assets/img/projectdetails/devikavibe1.jpeg',
            'assets/img/projectdetails/devikavibe2.jpeg',
            'assets/img/projectdetails/devikavibe3.jpeg',
        ],
        'price' => 'On Request',
        'detailsPage' => '#',
        'type' => ['Commercial']
    ];
} 

if ($matchedProperty) {
    echo '<div class="carousel-container">
            <div class="carousel-track">';

    foreach ($matchedProperty['images'] as $index => $image) {
        echo '<div class="project-card">
                <img src="../' . $image . '" alt="' . htmlspecialchars($matchedProperty['name']) . '">
            </div>';
    }

    echo '</div>
        <button class="carousel-button left"><i class="bi bi-caret-left-fill"></i></button>
        <button class="carousel-button right"><i class="bi bi-caret-right-fill"></i></button>
        <div class="carousel-indicators">';

    for ($i = 0; $i < count($matchedProperty['images']); $i++) {
        if ($i === 0) {
            echo '<div class="carousel-indicator active"></div>';
        } else {
            echo '<div class="carousel-indicator"></div>';
        }
    }
    echo '</div>
        </div>';
} else {
    echo "No matching property found.<br>";
}
?>



<script>
    // JavaScript for swipe and button functionality
    const carousel = document.querySelector('.carousel-container');
    const track = document.querySelector('.carousel-track');
    const leftButton = document.querySelector('.carousel-button.left');
    const rightButton = document.querySelector('.carousel-button.right');
    const indicators = document.querySelectorAll('.carousel-indicator');
    let startX = 0;
    let currentX = 0;
    let isDragging = false;
    let currentSlide = 0;
    let slideInterval;

    const updateSlidePosition = () => {
        track.style.transform = `translateX(-${currentSlide * 100}%)`;
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentSlide);
        });
    };

    const startSlideShow = () => {
        slideInterval = setInterval(() => {
            currentSlide = (currentSlide + 1) % track.children.length;
            updateSlidePosition();
        }, 5000);
    };

    const stopSlideShow = () => {
        clearInterval(slideInterval);
    };

    // Swipe functionality
    carousel.addEventListener('touchstart', (e) => {
        stopSlideShow();
        startX = e.touches[0].pageX;
        isDragging = true;
    });

    carousel.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        currentX = e.touches[0].pageX;
        const deltaX = currentX - startX;
        track.style.transform = `translateX(${-currentSlide * 100 + deltaX / carousel.offsetWidth * 100}%)`;
    });

    carousel.addEventListener('touchend', (e) => {
        if (!isDragging) return;
        isDragging = false;
        const deltaX = currentX - startX;
        if (deltaX > 50 && currentSlide > 0) {
            currentSlide--;
        } else if (deltaX < -50 && currentSlide < track.children.length - 1) {
            currentSlide++;
        }
        updateSlidePosition();
        startSlideShow();
    });

    // Button functionality
    leftButton.addEventListener('click', () => {
        stopSlideShow();
        if (currentSlide > 0) {
            currentSlide--;
        } else {
            currentSlide = track.children.length - 1;
        }
        updateSlidePosition();
        startSlideShow();
    });

    rightButton.addEventListener('click', () => {
        stopSlideShow();
        if (currentSlide < track.children.length - 1) {
            currentSlide++;
        } else {
            currentSlide = 0;
        }
        updateSlidePosition();
        startSlideShow();
    });

    // Start the automatic slide show
    startSlideShow();
</script>