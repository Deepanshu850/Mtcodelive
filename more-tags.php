<section class="lead-section">
    <div class="lead-content">
        <h1 class="lead-title">"Transforming Dreams into Reality"</h1>
        <p class="lead-subtitle">
            Partner with Moneytree Realty for unparalleled real estate solutions.
        </p>

    </div>
    <div>
        <p>
            Call 
        </p>
        <a href="tel:+919999999999" class="lead-call-button">
            <p>📞 +91-9732300007</p>
        </a>
    </div>
</section>

<style>
    /* Lead Section */
    .lead-section {
        width: 100%;
        background: radial-gradient(circle at top right,
                /* Fade from green to transparent */
                rgba(0, 91, 82, 1) 0%,
                rgba(0, 91, 82, 0.9) 10%,
                rgba(0, 91, 82, 0.8) 20%,
                rgba(0, 91, 82, 0.7) 30%,
                /* rgba(0, 91, 82, 0.5) 40%, */
                /* rgba(0, 91, 82, 0.4) 45%, */
                /* rgba(0, 91, 82, 0.3) 47%, */
                /* rgba(0, 91, 82, 0.3) 49%, */
                /* rgba(0, 91, 82, 0.0) 50%, */
                /* Fade from transparent back to green */
                /* rgba(0, 91, 82, 0.0) 50%, */
                /* rgba(0, 91, 82, 0.2) 51%, */
                /* rgba(0, 91, 82, 0.3) 53%, */
                rgba(0, 91, 82, 0.5) 55%,
                rgba(0, 91, 82, 0.5) 60%,
                rgba(0, 91, 82, 0.6) 70%,
                rgba(0, 91, 82, 0.7) 80%,
                rgba(0, 91, 82, 0.75) 90%,
                rgba(0, 91, 82, 0.8) 100%);
        color: white;
        padding: 60px 20px;
        display: flex;

        justify-content: space-evenly;
        align-items: center;
        text-align: center;
    }

    /* Content Container */
    .lead-content {
        max-width: 550px;
    }

    /* Title */
    .lead-title {
        font-size: 40px;
        font-weight: bold;
        margin-bottom: 20px;
        line-height: 1.2;
        background: linear-gradient(90deg, #d39f51, #e5b566, #fff7a9, #e5b566, #d39f51);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Subtitle */
    .lead-subtitle {
        font-size: 16px;
        margin-bottom: 30px;
        font-weight: 300;
        line-height: 1.6;
        max-width: 400px;
        margin-inline: auto;
    }

    /* Call Button */
    .lead-call-button {
        display: inline-block;
        background: #ffffff;

        text-decoration: none;
        padding: 15px 30px;
        font-size: 18px;
        font-weight: bold;
        border-radius: 8px;
        transition: background-color 0.3s ease, color 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .lead-call-button p {
        background: linear-gradient(90deg, #00796b, #009688, #26a69a);
        color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .lead-call-button:hover {
        background: linear-gradient(90deg, #00796b, #009688, #26a69a);
        color: white;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }


    .lead-call-button p:has(.lead-call-button:hover) {
        color: #ffffff;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .lead-title {
            font-size: 32px;
        }

        .lead-subtitle {
            font-size: 16px;
        }

        .lead-call-button {
            font-size: 16px;
            padding: 12px 25px;
        }
    }

    @media (max-width: 480px) {
        .lead-title {
            font-size: 28px;
        }

        .lead-subtitle {
            font-size: 14px;
        }

        .lead-call-button {
            font-size: 14px;
            padding: 10px 20px;
        }
    }
</style>




<style>
    .more-tags {
        margin-top: 2rem;
        min-height: 22rem;

        display: flex;
        justify-content: center;
        justify-items: center;
        gap: 16px;
        width: 91vw;
        margin-inline: auto;
        padding-bottom: 4rem;
    }

    @media (width < 1000px) {
        .more-tags {
            flex-direction: column;
            align-items: center;
        }
    }

    .more-tags div {
        display: flex;
        flex-direction: column;
        width: 230px;
    }

    .more-tags div:last-child {
        width: auto;
    }

    @media (width < 900px) {
        .more-tags div:last-child {
            justify-content: center;
        }
    }

    .more-tags ul {
        list-style-type: none;
        text-align: left;
        margin: 0;
        padding: 0;
    }

    .more-tags h2 {
        text-transform: capitalize;
        color: #005b52;
        position: relative;
        margin-bottom: 34px;
        margin-left: 0;
        display: flex;
        align-items: center;
        font-size: 20px;

    }

    .more-tags h2::after {
        content: '';
        display: block;
        position: absolute;
        bottom: -14px;
        left: 0;
        height: 2px;
        width: 100%;
        background: #e2dede;

    }

    .more-tags li {
        font-size: 14px;
        color: #5e5d5d;
    }

    .more-tags button {
        background-color: #005b52;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        position: relative;

        font-weight: 500;
        height: 50px;
        width: 110px;
        overflow: hidden;
        margin-top: 1rem;


    }

    @media (width<900px) {
        .more-tags button {
            margin-top: 20px;
        }
    }

    .more-tags button::before {
        content: '';
        display: block;
        position: absolute;
        width: 100%;
        border-radius: 5px;
        height: 100%;
        background: linear-gradient(164deg, white, transparent 40%);
        top: 0;
        left: 0;
        opacity: 0;
        transition: opacity 150ms ease-in-out;


    }

    .more-tags button:hover::before {
        opacity: 0.4;
    }

    div.bigger-tag {
        width: auto;
    }

    @media (width < 1000px) {
        div.bigger-tag {
            width: 14rem;
        }
    }

    .more-tags a {
        background: linear-gradient(90deg, #00796b, #009688, #26a69a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>

<section class="more-tags">
    <style>
        .hidden {
            display: none;
        }
    </style>
    <div class="property-wrapper">
        <h2>Property in India</h2>
        <ul class="property-list">
            <li>
                <a href="./property-in-noida">
                    Property in Noida
                </a>
            </li>
            <li>
                <a href="./property-in-gurgaon">
                    Property in Gurgaon
                </a>
            </li>
            <li>
                <a href="./top-real-estate-poperty-consultant-in-india?search=goa">
                    Property in Goa
                </a>
            </li>
            <li class="hidden">
                <a href="./top-real-estate-poperty-consultant-in-india?search=mumbai">
                    Property in Mumbai
                </a>
            </li>
            <li class="hidden">
                <a href="./top-real-estate-poperty-consultant-in-india?search=ayodhya">
                    Property in Ayodhya
                </a>
            </li>
            <li class="hidden">
                <a href="./top-real-estate-poperty-consultant-in-india?search=alibaug">
                    Property in Alibaug
                </a>
            </li>
        </ul>
        <button class="toggle-btn">Read more</button>
    </div>

    <div class="property-wrapper">
        <h2> Real Estate in India </h2>
        <ul class="property-list">
            <li>
                <a href="./index">
                    Real Estate in Noida
                </a>
            </li>
            <li>
                <a href="./index">
                    Real Estate in Gurgaon
                </a>
            </li>
            <li>
                <a href="./index">
                    Real Estate in Goa
                </a>
            </li>
            <li class="hidden">
                <a href="./index">
                    Real Estate in Mumbai
                </a>
            </li>
            <li class="hidden">
                <a href="./index">
                    Real Estate in Ayodhya
                </a>
            </li>
            <li class="hidden">
                <a href="./index">
                    Real Estate in Alibaug
                </a>
            </li>
        </ul>
        <button class="toggle-btn">Read more</button>
    </div>
    <div class="property-wrapper">
        <h2>Flats in Noida</h2>
        <ul class="property-list">
            <li>
                <a href="./flats-for-sale-in-noida">
                    Flats in Noida
                </a>
            </li>
            <li>
                <a href="./flats-for-sale-in-gurgaon">
                    Flats in Gurgaon
                </a>
            </li>
            <li>
                <a href="./index">
                    Flats in Goa
                </a>
            </li>
            <li class="hidden">
                <a href="./category/residential-property-for-sale-mumbai">
                    Flats in Mumbai
                </a>
            </li>
            <li class="hidden">
                <a href="./index">
                    Flats in Ayodhya
                </a>
            </li>
            <li class="hidden">
                <a href="./index">
                    Flats in Alibaug
                </a>
            </li>
        </ul>
        <button class="toggle-btn">Read more</button>
    </div>
    <div class="bigger-tag property-wrapper">
        <h2>Real Estate Developers in India</h2>
        <ul class="property-list">
            <li>
                <a href="./real-estate-developers/ace-group">
                    Ace Group
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/ametek-buildtech">
                    Ametek Buildtech
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/au-real-estate">
                    AU Real Estate
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/axis-ecorp">
                    Axis Ecorp
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/devika-group">
                    Devika Group
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/elan-group">
                    Elan Group
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/godrej-properties">
                    Godrej Properties
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/krisumi-corporation">
                    Krisumi Corporation
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/l-t-realty">
                    L&T Realty
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/m3m-group">
                    M3M Group
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/mahagun-group">
                    Mahagun Group
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/mahindra-lifespaces-developers">
                    Mahindra Lifespace Developers
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/migsun-group">
                    Migsun Group
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/paras-buildtech">
                    Paras Buildtech
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/piramal-realty">
                    Piramal Realty
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/sarvottam-group">
                    Sarvottam Group
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/sikka-group">
                    Sikka Group
                </a>
            </li>
            <li>
                <a href="./real-estate-developers/the-house-of-abhinandan-lodha">
                    The House of Abhinandan Lodha
                </a>
            </li>
        </ul>

        <button class="toggle-btn">Read more</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const propertyContainers = document.querySelectorAll('.property-wrapper');

            propertyContainers.forEach(container => {
                const listItems = container.querySelectorAll('.property-list li');
                const toggleBtn = container.querySelector('.toggle-btn');

                function updateVisibility() {
                    listItems.forEach((item, index) => {
                        if (index >= 3) {
                            if (toggleBtn.textContent === 'Read more') {
                                item.classList.add('hidden');
                            } else {
                                item.classList.remove('hidden');
                            }
                        }
                    });
                }

                toggleBtn.addEventListener('click', function() {
                    if (this.textContent === 'Read more') {
                        this.textContent = 'Read less';
                    } else {
                        this.textContent = 'Read more';
                    }
                    updateVisibility();
                });


                updateVisibility();
            });
        });
    </script>

</section>