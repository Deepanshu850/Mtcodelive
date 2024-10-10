<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header, Hero, and Footer</title>
    <style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
    scroll-behavior: smooth;
}

/* Header */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #005b52;
    padding: 15px 20px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
}

.logo img {
    max-width: 130px;
}

nav {
    display: flex;
    align-items: center;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
    font-weight: 500;
    font-size: 16px;
    border-radius: 4px;
    transition: background 0.3s ease, color 0.3s ease;
}

nav ul li a:hover {
    background-color: #009688;
}

.phone-number {
    color: #fff;
    margin-left: 20px;
    font-size: 18px;
}

.hamburger {
    display: none;
    font-size: 30px;
    color: #fff;
    background: none;
    border: none;
    cursor: pointer;
}

/* Hero Section */
.hero {
    background: url('https://lh3.googleusercontent.com/p/AF1QipO6K8NjdcX1tHJYpAksB6sOvU24fVopaNxbD5q2=s1360-w1360-h1020') center/cover no-repeat;
    padding: 120px 20px;
    color: white;
    text-align: center;
    position: relative;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 91, 82, 0.6);
    z-index: 0;
}

.hero h1 {
    font-size: 50px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: bold;
    z-index: 1;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1.5s ease forwards;
}

.hero p {
    font-size: 20px;
    color: #f1f1f1;
    max-width: 800px;
    margin-bottom: 40px;
    z-index: 1;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1.5s ease forwards 0.5s;
}

/* Search Bar */
.search-bar {
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1.5s ease forwards 1s;
}

.search-bar input[type="text"] {
    padding: 15px 20px;
    font-size: 18px;
    border: none;
    border-radius: 4px 0 0 4px;
    width: 550px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.search-bar button {
    padding: 15px 20px;
    background-color: #009688;
    color: #fff;
    border: none;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
    font-size: 18px;
    transition: background 0.3s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.search-bar button:hover {
    background-color: #00796b;
}

/* Animation */
@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Footer */
footer {
    background-color: #005b52;
    color: #fff;
    padding: 40px 20px;
    text-align: center;
}

.footer-logo img {
    max-width: 120px;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 30px;
}

.footer-section {
    flex: 1;
    min-width: 200px;
}

.footer-section h3 {
    margin-bottom: 15px;
}

.footer-section ul {
    list-style: none;
}

.footer-section ul li a {
    color: #fff;
    text-decoration: none;
    padding: 5px 0;
    display: block;
    transition: color 0.3s ease;
}

.footer-section ul li a:hover {
    text-decoration: underline;
}

.social-icons a {
    margin-right: 10px;
    color: #fff;
    font-size: 24px;
    transition: color 0.3s ease;
}

.social-icons a:hover {
    color: #009688;
}

.subscribe-input {
    padding: 10px;
    border: none;
    border-radius: 4px;
    margin-right: 10px;
}

.subscribe-button {
    padding: 10px 15px;
    background-color: #009688;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}

.subscribe-button:hover {
    background-color: #00796b;
}

.footer-bottom {
    margin-top: 20px;
    font-size: 14px;
}

/* Mobile Styles */
@media (max-width: 768px) {
    nav {
        display: none;
        flex-direction: column;
        background-color: #005b52;
        position: absolute;
        top: 60px;
        right: 0;
        width: 100%;
        text-align: center;
        padding-top: 15px;
    }

    nav ul {
        flex-direction: column;
    }

    nav ul li {
        margin-bottom: 15px;
    }

    .hamburger {
        display: block;
    }

    nav.active {
        display: flex;
    }

    .phone-number {
        margin: 15px 0;
        font-size: 20px;
    }

    .footer-content {
        flex-direction: column;
        align-items: center;
    }

    .footer-section {
        text-align: center;
    }

    .hero h1 {
        font-size: 36px;
    }

    .hero p {
        font-size: 16px;
    }
}
 /* General Section Styling */
.property-section,
.real-estate-property-section {
    padding: 60px 20px;
    background-color: #f4f4f4;
    text-align: center;
}

/* Section Titles and Subtitles */
.section-title {
    font-size: 28px;
    color: #005b52;
    margin-bottom: 20px;
    font-weight: 600;
}

.section-subtitle {
    font-size: 18px;
    color: #333;
    margin-bottom: 40px;
}

.property-info {
    max-width: 900px;
    margin: 0 auto 40px;
    font-size: 16px;
    line-height: 1.8;
    color: #555;
}

.highlight-text {
    font-weight: bold;
    color: #333;
    margin-bottom: 15px;
}

/* Property Grid Layout */
.property-grid,
.property-types {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Dynamic grid layout */
    gap: 20px;
    justify-content: center;
    align-items: stretch;
}

/* Property Card Styling */
.property-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 30px 20px;
    text-align: left;
    text-decoration: none;
    color: #333;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}

.property-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Property Card Content */
.property-image img {
    width: 100%;
    height: auto;
    display: block;
}

.property-content {
    padding: 20px;
}

.property-content h3 {
    font-size: 22px;
    color: #005b52;
    margin-bottom: 10px;
}

.property-price {
    font-size: 18px;
    color: #009688;
    font-weight: bold;
    margin-bottom: 10px;
}

.property-content p {
    font-size: 14px;
    color: #666;
    margin-bottom: 15px;
}

/* Property Meta Info */
.property-meta {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    font-size: 12px;
    color: #555;
}

.property-meta span a {
    color: #009688;
    text-decoration: none;
}

.property-meta span a:hover {
    text-decoration: underline;
}

/* Button Styling */
.property-btn {
    color: #009688;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.property-btn:hover {
    color: #00796b;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .property-card {
        width: 100%;
        margin-bottom: 20px;
    }
}/* General Container Styling */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Why Only MoneyTree Realty Section */
.why-moneytree-section {
    padding: 60px 20px;
    background-color: #f9f9f9;
    text-align: center;
}

.section-title {
    font-size: 28px;
    color: #005b52;
    margin-bottom: 20px;
    font-weight: 600;
}

.section-subtitle {
    font-size: 18px;
    color: #333;
    margin-bottom: 20px;
}

.section-description {
    font-size: 16px;
    color: #666;
    margin-bottom: 40px;
}

/* Reasons Grid */
.reasons-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
}

/* Reason Card Styling */
.reason-card {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: left;
}

.reason-card h3 {
    font-size: 22px;
    color: #005b52;
    margin-bottom: 15px;
}

.reason-card p {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
}

.reason-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Responsive Design */
@media (min-width: 768px) {
    .reasons-grid {
        grid-template-columns: repeat(2, 1fr); /* Two columns on tablet and larger screens */
    }
}/* Message Banner Styling */
.message-banner {
    background-color: #005b52;
    color: #fff;
    padding: 40px 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.message-banner h2 {
    font-size: 28px;
    margin-bottom: 15px;
    font-weight: 600;
    color: #fff;
}

.message-banner p {
    font-size: 16px;
    margin-bottom: 20px;
    max-width: 800px;
    color: #f1f1f1;
    line-height: 1.6;
}

.banner-btn {
    padding: 12px 25px;
    background-color: #009688;
    color: #fff;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 600;
    font-size: 16px;
    transition: background 0.3s ease;
}

.banner-btn:hover {
    background-color: #00796b;
}

/* Responsive Design */
@media (max-width: 768px) {
    .message-banner h2 {
        font-size: 24px;
    }

    .message-banner p {
        font-size: 14px;
    }

    .banner-btn {
        font-size: 14px;
        padding: 10px 20px;
    }
}

/* Property by City Section */
.property-by-city {
    padding: 60px 20px;
    background-color: #f4f4f4;
    position: relative;
    overflow: hidden;
}

.property-by-city .section-title {
    text-align: center;
    font-size: 28px;
    color: #005b52;
    margin-bottom: 40px;
}

.slider {
    display: flex;
    transition: transform 0.4s ease-in-out;
    gap: 20px;
}

.slide {
    min-width: 300px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: center;
    position: relative;
}

.slide img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.slide-info {
    padding: 15px;
    background-color: #005b52;
    color: white;
}

.slide-info h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.slide-info p {
    font-size: 16px;
    margin: 0;
}

/* Slider Buttons */
.prev-btn,
.next-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #009688;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
    font-size: 20px;
    transition: background-color 0.3s ease;
}

.prev-btn:hover,
.next-btn:hover {
    background-color: #00796b;
}

.prev-btn {
    left: 20px;
}

.next-btn {
    right: 20px;
}

/* Responsive Styling */
@media (max-width: 768px) {
    .slide {
        min-width: 90%;
    }
}
/* Member Slider Section */
.member-slider-section {
    padding: 60px 20px;
    background-color: #f4f4f4;
    position: relative;
    overflow: hidden;
}

.member-slider-section .section-title {
    text-align: center;
    font-size: 28px;
    color: #005b52;
    margin-bottom: 40px;
}

.slider {
    display: flex;
    transition: transform 0.4s ease-in-out;
    gap: 20px;
}

.slide {
    min-width: 300px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: center;
    position: relative;
}

.slide img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-bottom: 3px solid #009688;
}

.slide-info {
    padding: 15px;
    background-color: #005b52;
    color: white;
}

.slide-info h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.slide-info p {
    font-size: 16px;
    margin: 0;
}

/* Slider Buttons */
.prev-btn,
.next-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #009688;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
    font-size: 20px;
    transition: background-color 0.3s ease;
}

.prev-btn:hover,
.next-btn:hover {
    background-color: #00796b;
}

.prev-btn {
    left: 20px;
}

.next-btn {
    right: 20px;
}

/* Responsive Styling */
@media (max-width: 768px) {
    .slide {
        min-width: 90%;
    }
}
/* Customer Reviews Section */
.customer-reviews-section {
    padding: 60px 20px;
    background-color: #f9f9f9;
    
    position: relative;
    overflow: hidden;
}

.customer-reviews-section .section-title {
    text-align: center;
    font-size: 28px;
    color: #005b52;
    margin-bottom: 40px;
}

.slider {
    display: flex;
    transition: transform 0.4s ease-in-out;
    gap: 20px;
}

.slide {
    min-width: 300px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: left;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.reviewer-photo {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 15px;
}

.reviewer-info h3 {
    font-size: 18px;
    color: #005b52;
    margin-bottom: 10px;
}

.reviewer-info p {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
    text-align: center;
}

/* Slider Buttons */
.prev-btn,
.next-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #009688;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
    font-size: 20px;
    transition: background-color 0.3s ease;
}

.prev-btn:hover,
.next-btn:hover {
    background-color: #00796b;
}

.prev-btn {
    left: 20px;
}

.next-btn {
    right: 20px;
}

/* Responsive Styling */
@media (max-width: 768px) {
    .slide {
        min-width: 90%;
    }
}
/* Developer Logo Slider Section */
.developer-logo-slider-section {
    padding: 60px 20px;
    background-color: #f4f4f4;
    position: relative;
    overflow: hidden;
}

.developer-logo-slider-section .section-title {
    text-align: center;
    font-size: 28px;
    color: #005b52;
    margin-bottom: 40px;
}

.slider {
    display: flex;
    transition: transform 0.4s ease-in-out;
    gap: 20px;
}

.slide {
    min-width: 200px;
    text-align: center;
}

.slide img {
    max-width: 100%;
    height: auto;
    border: none;
}

/* Slider Buttons */
.prev-btn,
.next-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #009688;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
    font-size: 20px;
    transition: background-color 0.3s ease;
}

.prev-btn:hover,
.next-btn:hover {
    background-color: #00796b;
}

.prev-btn {
    left: 20px;
}

.next-btn {
    right: 20px;
}

/* Responsive Styling */
@media (max-width: 768px) {
    .slide {
        min-width: 90%;
    }
}
/* Blog Section */
.blog-section {
    padding: 60px 20px;
    background-color: #f9f9f9;
}

.blog-section .section-title {
    text-align: center;
    font-size: 28px;
    color: #005b52;
    margin-bottom: 40px;
}

/* Blog Grid Layout */
.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

/* Blog Card Styling */
.blog-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: left;
    display: flex;
    flex-direction: column;
}

.blog-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.blog-info {
    padding: 20px;
    flex-grow: 1;
}

.blog-info h3 {
    font-size: 20px;
    color: #005b52;
    margin-bottom: 10px;
}

.blog-info .author {
    font-size: 14px;
    color: #888;
    margin-bottom: 15px;
}

.blog-info .description {
    font-size: 16px;
    color: #555;
    margin-bottom: 20px;
    flex-grow: 1;
}

.blog-info .read-more {
    font-size: 16px;
    color: #009688;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.blog-info .read-more:hover {
    color: #00796b;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .blog-grid {
        grid-template-columns: 1fr; /* Single column on mobile */
    }
}

</style>
<script async defer>
document.addEventListener('DOMContentLoaded', function () {
    // Utility function to duplicate the first and last slides
    function cloneSlides(slider, slides) {
        const firstSlide = slides[0].cloneNode(true);
        const lastSlide = slides[slides.length - 1].cloneNode(true);
        slider.appendChild(firstSlide);
        slider.insertBefore(lastSlide, slides[0]);
    }

    // Continuous slider functionality
    function setupContinuousSlider(slider, slides, nextBtn, prevBtn, slideWidth, slideGap) {
        let index = 1;  // Start on the first real slide
        let isTransitioning = false;
        
        // Clone slides
        cloneSlides(slider, slides);
        
        // Adjust the initial position
        slider.style.transform = `translateX(-${(slideWidth + slideGap) * index}px)`;

        // Handle the transition end to reset position for seamless looping
        slider.addEventListener('transitionend', () => {
            isTransitioning = false;
            if (index === slides.length) {
                index = 1;
                slider.style.transition = 'none';
                slider.style.transform = `translateX(-${(slideWidth + slideGap) * index}px)`;
            } else if (index === 0) {
                index = slides.length - 1;
                slider.style.transition = 'none';
                slider.style.transform = `translateX(-${(slideWidth + slideGap) * index}px)`;
            }
        });

        // Move to the next slide
        nextBtn.addEventListener('click', () => {
            if (isTransitioning) return;
            isTransitioning = true;
            slider.style.transition = 'transform 0.5s ease-in-out';
            index++;
            slider.style.transform = `translateX(-${(slideWidth + slideGap) * index}px)`;
        });

        // Move to the previous slide
        prevBtn.addEventListener('click', () => {
            if (isTransitioning) return;
            isTransitioning = true;
            slider.style.transition = 'transform 0.5s ease-in-out';
            index--;
            slider.style.transform = `translateX(-${(slideWidth + slideGap) * index}px)`;
        });
    }

    // Example usage for the Property by City Slider
    const citySlider = document.querySelector('.property-by-city .slider');
    const citySlides = document.querySelectorAll('.property-by-city .slide');
    const cityNextBtn = document.querySelector('.property-by-city .next-btn');
    const cityPrevBtn = document.querySelector('.property-by-city .prev-btn');
    setupContinuousSlider(citySlider, citySlides, cityNextBtn, cityPrevBtn, 320, 20);

    // Example usage for the Member Slider
    const memberSlider = document.querySelector('.member-slider-section .slider');
    const memberSlides = document.querySelectorAll('.member-slider-section .slide');
    const memberNextBtn = document.querySelector('.member-slider-section .next-btn');
    const memberPrevBtn = document.querySelector('.member-slider-section .prev-btn');
    setupContinuousSlider(memberSlider, memberSlides, memberNextBtn, memberPrevBtn, 320, 20);

    // Example usage for the Customer Reviews Slider
    const reviewSlider = document.querySelector('.customer-reviews-section .slider');
    const reviewSlides = document.querySelectorAll('.customer-reviews-section .slide');
    const reviewNextBtn = document.querySelector('.customer-reviews-section .next-btn');
    const reviewPrevBtn = document.querySelector('.customer-reviews-section .prev-btn');
    setupContinuousSlider(reviewSlider, reviewSlides, reviewNextBtn, reviewPrevBtn, 320, 20);

    // Example usage for the Developer Logo Slider
    const logoSlider = document.querySelector('.developer-logo-slider-section .slider');
    const logoSlides = document.querySelectorAll('.developer-logo-slider-section .slide');
    const logoNextBtn = document.querySelector('.developer-logo-slider-section .next-btn');
    const logoPrevBtn = document.querySelector('.developer-logo-slider-section .prev-btn');
    setupContinuousSlider(logoSlider, logoSlides, logoNextBtn, logoPrevBtn, 220, 20);
});
</script>

</head>
<body>
    <?php include "./data/propertydata.php" ;
    include "./data/developerslogodata.php";
    include "./data/teammemberdata.php";
    include "./data/googlereview.php";
    
   
    include "./data/blogdata.php" ?>

    <!-- Header -->
    <header>
        <div class="logo">
            <img src="https://moneytreerealty.com/assets/img/logo.png" alt="Moneytree Realty">
        </div>
        <button class="hamburger" id="hamburger-btn">&#9776;</button>
        <nav id="nav-menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="phone-number">
                <a href="tel:+9732300007" style="color: #fff; text-decoration: none;">📞 9732300007</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Best Real Estate Consultant in Delhi NCR</h1>
        <p>The MONEYTREE REALTY SERVICES PVT. LTD. (RERA REG.) offers world-class Real Estate Service under the leadership of Mr. Sachin Arora, a renowned Real Estate Tycoon.</p>
        <div class="search-bar">
            <input type="text" placeholder="Search for properties...">
            <button type="submit">Search</button>
        </div>
    </section>
    <!-- Property Cards Section -->
<!-- Property Cards Section -->
 <!-- Property Cards Section -->
<section class="property-section">
    <div class="container">
        <h2 class="section-title">Our Properties</h2>
        <div id="property-grid" class="property-grid">
            <?php foreach ($properties as $index => $property): ?>
                <div class="property-card <?php if ($index >= 9) echo 'hidden'; ?>">
                    <!-- Property Image -->
                    <img src="<?= $property['images'][0] ?>" alt="<?= $property['name'] ?>">
                    
                    <!-- Property Information -->
                    <div class="property-info">
                        <h3><?= $property['name'] ?></h3>
                        <p class="location"><?= $property['location'] ?></p>
                        <p class="price"><?= $property['price'] ?></p>
                        <p class="description"><?= $property['shortDescription'] ?></p>
                        <a href="propertydetail/<?= urlencode(str_replace(' ', '-', strtolower($property['name']))) ?>" class="read-more">View Details</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button id="show-more-btn" class="show-more-btn">Show More</button>
    </div>
</section>

<!-- Property Cards Section -->
 
<!-- Real Estate Property Section -->
<section class="real-estate-property-section">
    <div class="container">
        <h2 class="section-title">Best Real Estate Property Consultant in Delhi/NCR</h2>
        <p class="section-subtitle">Get To Know About MoneyTree Realty</p>

        <div class="property-info">
            <p class="highlight-text">
                Mr. Sachin Arora, CEO & Founder, often remarked as the brand trust in the Indian Real Estate Market with 
                an experience spanning across more than a decade, led its foundation to make real estate experience 
                easier and accessible. 
            </p>
            <p>MoneyTree Realty Services Pvt. Ltd. (RERA Reg.) brings together a group of energised real estate consultants offering a diverse catalogue. We manage a portfolio of all kinds of commercial and residential properties including apartments, flats, villas, plots, duplexes, and much more.</p>
        </div>

        <div class="property-types">
            <!-- Residential Property Section -->
            <div class="property-card">
                <h3>Residential Property</h3>
                <p>This sector focuses on properties used for residential purposes.</p>
                <a href="#" class="property-btn">Explore Residential Properties →</a>
            </div>

            <!-- Commercial Property Section -->
            <div class="property-card">
                <h3>Commercial Property</h3>
  c        <p>This sector focuses on properties used for commercial purposes.</p>
                <a href="#" class="property-btn">Explore Commercial Properties →</a>
            </div>
        </div>
    </div>
</section>

<!-- Why Only MoneyTree Realty Section -->
<section class="why-moneytree-section">
    <div class="container">
        <h2 class="section-title">Why Only MoneyTree Realty</h2>
        <p class="section-subtitle">Why Trust MoneyTree Realty</p>
        <p class="section-description">MoneyTree Realty is the Best Real Estate Consultant in Delhi/NCR with a record number of sales through sustaining quality of service with each sale with the help of our dedicated property consultant.</p>

        <div class="reasons-grid">
            <!-- Customer Oriented -->
            <div class="reason-card">
                <h3>Customer Oriented</h3>
                <p>What makes us the best real estate consultant In Delhi/NCR is our client-centric approach. Our group of property consultants takes into consideration your unique style, budget, and other preferences and ensures to present you with properties that match your preferences.</p>
            </div>

            <!-- Tech Enabled -->
            <div class="reason-card">
                <h3>Tech Enabled</h3>
                <p>Discover your dream property with us. Explore listings that match your lifestyle and budget, from modern city apartments to cozy country homes. Let the Best Real Estate Consultant In Delhi/NCR guide you to your dream home.</p>
            </div>
        </div>
    </div>
</section>

<!-- Message Banner Section -->
<section class="message-banner">
    <div class="container">
        <h2>Your Dream Property Awaits</h2>
        <p>Discover the best real estate options with MoneyTree Realty. We are here to guide you through every step of the process to find your perfect property in Delhi/NCR.</p>
        <a href="#contact" class="banner-btn">Get in Touch</a>
    </div>
</section>

<!-- Property by City Slider Section -->
<section class="property-by-city">
    <div class="container">
        <h2 class="section-title">Property By Cities</h2>
        <div class="slider">
            <div class="slide">
                <img src="https://source.unsplash.com/400x300/?noida,city" alt="Noida">
                <div class="slide-info">
                    <h3>Noida</h3>
                    <p>09 Properties</p>
                </div>
            </div>
            <div class="slide">
                <img src="https://source.unsplash.com/400x300/?goa,city" alt="Goa">
                <div class="slide-info">
                    <h3>Goa</h3>
                    <p>04 Properties</p>
                </div>
            </div>
            <div class="slide">
                <img src="https://source.unsplash.com/400x300/?gurugram,city" alt="Gurugram">
                <div class="slide-info">
                    <h3>Gurugram</h3>
                    <p>11 Properties</p>
                </div>
            </div>
            <div class="slide">
                <img src="https://source.unsplash.com/400x300/?mumbai,city" alt="Mumbai">
                <div class="slide-info">
                    <h3>Mumbai</h3>
                    <p>04 Properties</p>
                </div>
            </div>
            <div class="slide">
                <img src="https://source.unsplash.com/400x300/?ayodhya,city" alt="Ayodhya">
                <div class="slide-info">
                    <h3>Ayodhya</h3>
                    <p>03 Properties</p>
                </div>
            </div>
        </div>
        <!-- Slider Controls -->
        <button class="prev-btn">‹</button>
        <button class="next-btn">›</button>
    </div>
</section>
<!-- Member Slider Section -->
<section class="member-slider-section">
    <div class="container">
        <h2 class="section-title">Meet Our Team</h2>
        <div class="slider">
            <?php foreach ($teamMembers as $member): ?>
                <div class="slide">
                    <img src="<?= htmlspecialchars($member['image'], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($member['name'], ENT_QUOTES) ?>">
                    <div class="slide-info">
                        <h3><?= htmlspecialchars($member['name'], ENT_QUOTES) ?></h3>
                        <p><?= htmlspecialchars($member['role'], ENT_QUOTES) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Slider Controls -->
        <button class="prev-btn">‹</button>
        <button class="next-btn">›</button>
    </div>
</section>

<!-- Customer Reviews Section -->
<section class="customer-reviews-section">
    <div class="container">
        <h2 class="section-title">Our Customer Reviews</h2>
        <div class="slider">
            <?php foreach ($reviews as $review): ?>
                <div class="slide">
                    <img src="<?= $review['pic'] ?>" alt="<?= htmlspecialchars($review['name'], ENT_QUOTES) ?>" class="reviewer-photo">
                    <div class="reviewer-info">
                        <h3><?= htmlspecialchars($review['name'], ENT_QUOTES) ?></h3>
                        <p>"<?= htmlspecialchars($review['review'], ENT_QUOTES) ?>"</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Slider Controls -->
        <button class="prev-btn">‹</button>
        <button class="next-btn">›</button>
    </div>
</section>

<!-- Developer Logo Slider Section -->
<section class="developer-logo-slider-section">
    <div class="container">
        <h2 class="section-title">Our Trusted Developers</h2>
        <div class="slider">
            <?php foreach ($developerLogos as $developer): ?>
                <div class="slide">
                    <img src="<?= $developer['src'] ?>" alt="<?= $developer['alt'] ?>">
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Slider Controls -->
        <button class="prev-btn">‹</button>
        <button class="next-btn">›</button>
    </div>
</section>

<!-- Blog Card Section -->
<section class="blog-section">
    <div class="container">
        <h2 class="section-title">Latest Blog Posts</h2>
        <div class="blog-grid">
            <?php foreach ($posts as $post): ?>
                <div class="blog-card">
                    <img src="<?= $post['imageUrl'] ?>" alt="<?= htmlspecialchars($post['title'], ENT_QUOTES) ?>">
                    <div class="blog-info">
                        <h3><?= htmlspecialchars($post['title'], ENT_QUOTES) ?></h3>
                        <p class="author">By <?= htmlspecialchars($post['writer'], ENT_QUOTES) ?> | <?= $post['date'] ?></p>
                        <p class="description"><?= htmlspecialchars($post['description'], ENT_QUOTES) ?></p>
                        <a href="blog-post.php?id=<?= $post['id'] ?>" class="read-more">Read More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <div class="footer-logo">
                    <img style="max-width: 120px;" src="https://moneytreerealty.com/assets/img/logo.png" alt="Moneytree Realty">
                </div>
                <p>Floor no-2, Tapasya Corp Heights, Sector 126, Noida, UP 201303</p>
            </div>
            <div class="footer-section">
                <h3>Customer Care</h3>
                <p>Phone: +91-9266313539<br>Email: <a href="mailto:info@moneytreerealty.com" style="color: #fff;">info@moneytreerealty.com</a></p>
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Expert Team</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Subscribe</h3>
                <form>
                    <input type="email" class="subscribe-input" placeholder="Email Address">
                    <button type="submit" class="subscribe-button">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 , All rights reserved. MONEYTREE REALTY SERVICES PRIVATE LIMITED | RERA: Noida: UPRERAAGT25048, Gurugram: RC/HARERA/GGM/2569/2164/2024/282</p>
        </div>
    </footer>

    <script>
        // Toggle the menu on hamburger click
        document.getElementById('hamburger-btn').addEventListener('click', function () {
            const navMenu = document.getElementById('nav-menu');
            navMenu.classList.toggle('active');
        });
    </script>
</body>
</html>
