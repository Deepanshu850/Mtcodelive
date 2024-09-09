<!-- main property div and styles -->
<style>
    .properties-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        width: 95vw;
        padding: 20px;
        padding-inline: 0;
        margin-inline-start: auto;
    }

    .property-card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 16px;
        margin-bottom: 20px;
        transition: transform 0.3s;
        display: grid;
        min-height: 30rem;


    }

    .property-card:hover {
        transform: translateY(-5px);
    }

    .property-card.no-results-card {
        width: 100%;
        max-width: 370px;
        min-height: 420px;
        text-align: center;
    }

    .property-info-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        justify-items: start;
        align-items: start;
    }

    .property-info-wrapper>div {
        display: flex;
        align-items: flex-start;
        gap: 4px;
    }



    .property-card h2 {
        font-size: 22px;
        margin: 0;

    }

    .property-card h2 a {
        color: black;
        font-weight: 600;

    }

    .property-card h2 a:hover {
        color: black;

        background: linear-gradient(90deg, #00796b, #009688, #26a69a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;


    }


    .property-card p {
        font-size: 16px;
        margin-bottom: 4px;
    }

    .property-card p:has(span) {
        font-size: 15px;
        margin-bottom: 4px;
        display: flex;
        gap: 4px 0;
        padding-top: 5px;
        flex-wrap: wrap;
        flex-direction: column;
    }

    .property-card span {
        font-size: 12px;
        display: inline-block;
        border: 1px solid grey;
        height: 20px;
        display: flex;
        width: max-content;
        padding-inline: 4px;
        align-items: center;
        border-radius: 3px;

        background: linear-gradient(90deg, #00796b, #009688, #26a69a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 600;
    }

    .property-images img {
        width: 100%;
        display: block;
        height: 250px;
        /* object-fit: cover; */
        border-radius: 8px 8px 0 0;
    }

    .details-link {
        display: inline-flex;
        margin-top: 10px;
        padding: 0 15px;
        background-color: #005b52;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        position: relative;
        max-width: 135px;
        font-size: 14px;
        height: 40px;
        font-size: 14px;
        align-items: center;
        justify-content: center;
    }

    .details-link:hover {
        color: white;
    }

    .details-link::before {

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

    .details-link:hover::before {
        opacity: 0.4;
    }

    .read-more-container {
        text-align: center;
        margin-top: 20px;
    }

    #readMoreBtn {
        padding: 10px 20px;
        background-color: #016a5f;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #readMoreBtn:hover {
        background-color: #005b52;
    }


    @media (width < 972px) {
        .properties-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (width < 670px) {
        .properties-grid {
            width: 100%;
            grid-template-columns: repeat(1, 1fr);
            padding: 14px;
        }

        .property-card span {
            font-size: 10px;
        }

        .property-card h2 {
            font-size: 24px;
        }

        .property-card p,
        .property-info-wrapper>div {
            font-size: 14px;
        }

        .property-card img {
            height: 240px;
            object-fit: cover;
        }

        .property-card {
            margin-bottom: 0;
        }

    }

    .properties-grid>.property-card:nth-child(1):only-child {
        grid-column: 2;
    }

    /* @media (max-width: 768px) {
        .property-card {
            width: calc(50% - 20px);
           
        }
    }

    @media (max-width: 480px) {
        .property-card {
            width: 100%;
           
        }
    } */
</style>



<!-- property cards -->




<div class="properties-grid" id="propertiesGrid">

    <?php
    function getTypeLink($type)
    {
        switch ($type) {
            case 'Residential':
                return './category/residential-property';
            case 'Commercial':
                return './category/commercial-property';
            case 'Studio Apartments':
                return './category/studio-apartments';
            case 'Plots':
                return './category/plots';
            default:
                return './404';
        }
    }
    ?>


    <?php if (empty($properties)) : ?>
        <!-- No Results Card -->
        <div class="property-card no-results-card">
            <img src="../assets/img/logo.png" alt="No Results Found">
            <h2>Can't find what you're looking for?</h2>
            <p>Unfortunately, we don't have properties in this location at the moment. But we're always adding new listings!</p>
            <a href="../contact.php#contact-form" class="details-link">Contact Us</a>
        </div>
    <?php else : ?>
        <?php foreach ($properties as $property) : ?>
            <?php
            // Generate a URL slug from the property name
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $property['name'])));
            // Construct the details page path with the 'propertydetail' folder
            $detailsPagePath = './propertydetail/' . $slug . '.php';
            ?>
            <div class="property-card fade-in">
                <div class="property-images" onclick="nextImage(this)">
                    <?php foreach ($property['images'] as $imgIndex => $image) : ?>
                        <img src="<?php echo htmlspecialchars('./' . $image); ?>" alt="Property Image" style="<?php echo $imgIndex > 0 ? 'display:none;' : ''; ?>">
                    <?php endforeach; ?>
                </div>
                <h2>
                    <a href="<?php echo htmlspecialchars($detailsPagePath); ?>">
                        <?php echo htmlspecialchars($property['name']); ?>
                    </a>
                </h2>
                <div class="property-info-wrapper">
                    <p><b>Location:</b> <?php echo htmlspecialchars($property['location']); ?></p>
                    <p><b>Price:</b> <?php echo htmlspecialchars($property['price']); ?></p>


                    <div>
                        <b>RERA:</b>
                        <p>

                            <span style="font-size: 11px;">
                                UPRERAPRJ297873
                            </span>
                        </p>
                    </div>
                    <div>
                        <b>Type:</b>
                        <p>

                            <?php foreach ($property['type'] as $type) : ?>
                                <a href="<?php echo htmlspecialchars(getTypeLink($type)); ?>">
                                    <span><?php echo htmlspecialchars($type); ?></span>
                                </a>
                            <?php endforeach; ?>

                        </p>
                    </div>
                    <a href="<?php echo htmlspecialchars($detailsPagePath); ?>" class="details-link">View Details</a>

                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>





<!-- slight fade in script and style -->
<style>
    .property-card {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 1s ease-out, transform 1s ease-out;
    }

    .property-card.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    function nextImage(container) {
        const images = container.getElementsByTagName('img');
        let currentIndex;
        for (let i = 0; i < images.length; i++) {
            if (images[i].style.display !== 'none') {
                currentIndex = i;
                images[i].style.display = 'none';
                break;
            }
        }
        const nextIndex = (currentIndex + 1) % images.length;
        images[nextIndex].style.display = 'flex';
    }

    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.property-card').forEach(card => {
            observer.observe(card);
        });
    });
</script>

<!-- image changing on click script -->
<script>
    function nextImage(element) {
        const images = element.querySelectorAll('img');
        const totalImages = images.length;
        let currentIndex = [...images].findIndex(img => img.style.display !== 'none');

        images[currentIndex].style.display = 'none';
        currentIndex = (currentIndex + 1) % totalImages;
        images[currentIndex].style.display = 'block';
    }
</script>