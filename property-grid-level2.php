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
            <?php
            // Generate a URL slug from the property name
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $property['name'])));
            // Construct the details page path with the 'propertydetail' folder
            $detailsPagePath = './propertydetail/' . $slug;
            ?>
            <div class="property-card fade-in">
                

            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>