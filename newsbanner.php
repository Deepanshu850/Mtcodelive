<style>
/* Notification Slider Styles */
.notification-slider {
    background: linear-gradient(90deg, #ff4500, #ff8c00); /* Gradient for vibrant look */
    color: white;
    margin-top: 75px;
    padding: 5px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer; /* Make the entire div clickable */
    overflow: hidden;
}

/* Pause animation on hover */
.notification-slider:hover .notification-content p {
    animation-play-state: paused; /* Pause the text scrolling when hovered */
}

/* Responsive for smaller screens */
@media (max-width: 768px) {
    .notification-slider {
        font-size: 14px;
        padding: 5px;
    }
}

/* Notification Text Styles */
.notification-content {
    display: flex;
    white-space: nowrap;
    overflow: hidden;
    width: 100%;
}

.notification-content p {
    margin: 0;
    display: inline-block;
    white-space: nowrap;
    animation: infiniteScroll 30s linear infinite; /* Continuous scrolling effect */
}

.notification-content p span {
    padding-left: 80px; /* Space between repeated text */
}

/* Continuous Scrolling Keyframes */
@keyframes infiniteScroll {
    0% {
        transform: translateX(30%);
    }
    100% {
        transform: translateX(-100%);
    }
}

/* Call-to-Action Link Styles */
.notification-content .cta-link {
    background-color: #28a745; /* Change Learn More color to green */
    color: white;
    padding: 5px 10px;
    border-radius: 20px;
    text-decoration: none;
    font-weight: bold;
    margin-left: 15px;
    transition: background-color 0.3s ease-in-out;
    border: 2px solid white;
}

/* Hover Effect for Call-to-Action Link */
.notification-content .cta-link:hover {
    background-color: #218838; /* Darker green on hover */
}

/* Make phone number bold and larger */
.notification-content .phone-number {
    color: #ffffff;
    font-size: 16px;
    margin-left: 15px;
    font-weight: bold;
}
</style>

<div class="notification-slider" onclick="window.location.href='tel:9732300007'">
    <div class="notification-content">
        <p>🚨  New Launch:   <strong>SIP  </strong>In Real Estate. <a href="tel:9732300007" class="cta-link">Learn More</a>
            <span>🚨  New Launch: </strong>  <strong> SIP </strong>In Real Estate. <a href="tel:9732300007" class="cta-link">Learn More</a></span>
            <span>🚨  New Launch: </strong> <strong>SIP </strong>In Real Estate. <a href="tel:9732300007" class="cta-link">Learn More</a></span>
        </p>
    </div>
</div>