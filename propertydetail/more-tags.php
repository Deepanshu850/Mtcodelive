    <style>
        .more-tags {
            background: white;
            width: 100%;
            margin-top: 2rem;
            min-height: 22rem;

            display: flex;
            justify-content: center;
            justify-items: center;
            gap: 16px;
            width: 91vw;
            margin-inline: auto;
            padding-bottom: 4rem;
            border-radius: 8px;
            padding-top: 3rem;
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
                    <a href="../property-in-noida">
                        Property in Noida
                    </a>
                </li>
                <li>
                    <a href="../property-in-gurgaon">
                        Property in Gurgaon
                    </a>
                </li>
                <li>
                    <a href="../top-real-estate-poperty-consultant-in-india?search=goa">
                        Property in Goa
                    </a>
                </li>
                <li class="hidden">
                    <a href="../top-real-estate-poperty-consultant-in-india?search=mumbai">
                        Property in Mumbai
                    </a>
                </li>
                <li class="hidden">
                    <a href="../top-real-estate-poperty-consultant-in-india?search=ayodhya">
                        Property in Ayodhya
                    </a>
                </li>
                <li class="hidden">
                    <a href="../top-real-estate-poperty-consultant-in-india?search=alibaug">
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
                    <a href="../best-property-dealers-in-noida">
                        Real Estate in Noida
                    </a>
                </li>
                <li>
                    <a href="../property-dealers-in-gurgaon">
                        Real Estate in Gurgaon
                    </a>
                </li>
                <li>
                    <a href="../real-estate-advisor-and-property-consulting-firm-in-india">
                        Real Estate in Goa
                    </a>
                </li>
                <li class="hidden">
                    <a href="../real-estate-advisor-and-property-consulting-firm-in-india">
                        Real Estate in Mumbai
                    </a>
                </li>
                <li class="hidden">
                    <a href="../real-estate-advisor-and-property-consulting-firm-in-india">
                        Real Estate in Ayodhya
                    </a>
                </li>
                <li class="hidden">
                    <a href="../real-estate-advisor-and-property-consulting-firm-in-india">
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
                    <a href="../flats-for-sale-in-noida">
                        Flats in Noida
                    </a>
                </li>
                <li>
                    <a href="../flats-for-sale-in-gurgaon">
                        Flats in Gurgaon
                    </a>
                </li>
                <li>
                    <a href="../index">
                        Flats in Goa
                    </a>
                </li>
                <li class="hidden">
                    <a href="../category/residential-property-for-sale-mumbai">
                        Flats in Mumbai
                    </a>
                </li>
                <li class="hidden">
                    <a href="../index">
                        Flats in Ayodhya
                    </a>
                </li>
                <li class="hidden">
                    <a href="../index">
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
                    <a href="../real-estate-developers/ace-group">
                        Ace Group
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/ametek-buildtech">
                        Ametek Buildtech
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/au-real-estate">
                        AU Real Estate
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/axis-ecorp">
                        Axis Ecorp
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/devika-group">
                        Devika Group
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/elan-group">
                        Elan Group
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/godrej-properties">
                        Godrej Properties
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/krisumi-corporation">
                        Krisumi Corporation
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/l-t-realty">
                        L&T Realty
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/m3m-group">
                        M3M Group
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/mahagun-group">
                        Mahagun Group
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/mahindra-lifespace-developers">
                        Mahindra Lifespace Developers
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/migsun-group">
                        Migsun Group
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/paras-buildtech">
                        Paras Buildtech
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/piramal-realty">
                        Piramal Realty
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/sarvottam-group">
                        Sarvottam Group
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/sikka-group">
                        Sikka Group
                    </a>
                </li>
                <li>
                    <a href="../real-estate-developers/the-house-of-abhinandan-lodha">
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