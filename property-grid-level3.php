<?php
function renderPropertiesGrid($properties, $urlprefix)
{
    ob_start(); // Start output buffering
?>
    <div class="properties-grid" id="propertiesGrid">

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
                <div class="property-card fade-in">

                    <!-- image part -->
                    <div class="property-card-image">
                        <?php foreach ($property['images'] as $image): ?>
                            <img src="<?php echo $urlprefix . $image; ?>" alt="<?php echo $property['name']; ?>">
                        <?php endforeach; ?>
                    </div>

                    <!-- data part -->
                    <div class="property-card-data">
                        <h2>
                            <a class="colored-link" href="<?php echo $urlprefix . 'propertydetail/' . $property['link']; ?>">
                                <?php echo $property['name'] ?>
                            </a>
                        </h2>


                        <div class="data-grid">
                            <div>
                                <p>Type</p>
                                <?php foreach ($property['type'] as $type): ?>
                                    <p><?php echo htmlspecialchars($type); ?></p>
                                <?php endforeach; ?>
                            </div>
                            <div>
                                <p>Possession</p>
                                <p><?php echo $property['possession']; ?></p>
                            </div>
                            <div>
                                <p>RERA</p>
                                <p>
                                    <a href="<?php echo $property['rera'][1]; ?>">
                                        <p style="max-width: 100px; overflow-wrap: break-word; font-size: 11px; line-height: 1.4; margin-top: 4px;">
                                            <?php echo $property['rera'][0]; ?>
                                        </p>
                                    </a>
                                    <?php
                                    if (count($property['rera']) > 2) {
                                        for ($i = 2; $i < count($property['rera']); $i++) {
                                            echo '<p style="max-width: 100px; overflow-wrap: break-word; font-size: 11px; line-height: 1.4; margin-top: 4px;">';
                                            echo $property['rera'][$i];
                                            echo '</p>';
                                        }
                                    }
                                    ?>
                                </p>
                            </div>
                            <div>
                                <p>Pricing*</p>
                                <p><?php echo $property['price']; ?></p>
                            </div>
                        </div>


                        <!-- button part -->
                        <div class="property-card-button">
                            <button class="card-button">Call Us</button>
                            <a href="<?php echo $urlprefix . 'propertydetail/' . $property['link']; ?>" class="card-button card-button--white">
                                More info
                            </a>
                        </div>
                    </div>



                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
<?php
    return ob_get_clean(); // Return the buffered output
}

?>



<!-- extra description thing  -->


<!-- <p class="read-more-content" id="text"> -->
<?php
//  echo $property['shortDescription'];
?>
<!-- </p>
<span class="read-more-toggle" id="toggle">
    Read more <span class="icon">▼</span>
</span> -->

<style>
    .property-card {
        display: grid;
        grid-template-columns: 14rem 1fr;
        gap: 10px;
        padding: 12px;
        outline: 3px solid hsl(210, 17%, 98%);
        border-radius: 6px;
        box-shadow: rgba(0, 0, 0, 0.13) 0px 10px 12px -5px, rgba(0, 0, 0, 0.05) 12px 10px 10px -5px;
        margin-bottom: 2rem;
        transition: transform 120ms ease, box-shadow 100ms ease;
        width: 100%;
    }

    .property-card:hover {
        transform: translateY(-1.2px);
        box-shadow: rgba(0, 0, 0, 0.23) 0px 12px 14px -7px, rgba(0, 0, 0, 0.15) 14px 12px 12px -7px;

    }

    .data-grid p,
    .property-card h3 {
        margin: 0;
    }

    .property-card h2 {
        font-size: 20px;
        /* margin-block: 6px 12px; */
    }

    .property-card p {
        font-size: 12px;
    }

    .property-card-image {
        display: flex;
        overflow: auto;
        max-height: 250px;
    }

    .property-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .property-card-text {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .data-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px 0;
        place-items: center;
        font-size: 12px;
        background: #f8f9fa;
        /* padding-block: 1rem; */
        width: 98%;
        margin-inline: auto;
        border-radius: 8px;
        transform: translateY(8px);
    }

    .data-grid>div {
        width: 100%;
        height: 100%;
        padding-left: 1.2rem;
    }

    .data-grid>div>p {
        margin-top: -8px;

    }


    .data-grid>div p:not(:first-child) {
        font-weight: 600;
    }

    .data-grid div:nth-child(odd) {
        border-right: 2px solid #dee2e6;

    }


    .read-more-content {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    #text {
        line-height: 1.5;
        margin-bottom: 0;

    }

    .show-more {
        display: none;
    }

    .read-more-toggle {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        font-weight: 400;
        font-size: 13px;
    }

    .read-more-toggle .icon {
        margin-left: 5px;
        font-weight: 400;
        font-size: 12px;
        color: #212529;
    }

    .property-card-button {
        display: flex;
        align-items: center;
        justify-content: center;
        /* width: 100%; */
        gap: 25px;
    }


    .card-button {
        background: radial-gradient(circle at top, #0e9688 0%, #007f70 30%, #005b52 100%);
        padding: 12px 10px;
        border-radius: 12px;
        color: white;
        text-transform: capitalize;
        /* width: 100%; */
        font-size: 14px;
        font-weight: 500;
        box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;
        position: relative;
        text-align: center;
        cursor: pointer;
    }


    .card-button:hover {
        transform: translateY(-1px);
        background: radial-gradient(circle at top, #0e9688 0%, #1c9486 30%, #005b52 100%);
        color: white;

    }

    .card-button--white {
        background: #fff;
        border: 2px solid #005b52;
        color: #005b52;

    }

    .card-button--white:hover {
        transform: translateY(-1px);
        background: radial-gradient(circle at top, #f3fdfc, #f6fdfc, #f3fffe);
        color: #005b52;

    }

    a.colored-link {
        background: radial-gradient(circle at top,
                rgba(14, 150, 136, 0.8) 0%,
                rgba(0, 127, 112, 0.95) 30%,
                rgba(0, 91, 82, 0.8) 100%);
        background-clip: text;
        color: transparent;
    }

    a.colored-link:hover {
        background: radial-gradient(circle at top,
                rgba(14, 150, 136, 0.8) 0%,
                rgba(0, 127, 112, 0.95) 30%,
                rgba(0, 91, 82, 0.8) 100%);
        background-clip: text;
        color: transparent;
    }


    @media (width < 900px) {
        .property-card {
            grid-template-columns: 1fr;
        }

        .property-card-button {
            flex-direction: row;
            gap: 12px;
        }

        .property-card p {
            font-size: 11px;
        }

    }
</style>