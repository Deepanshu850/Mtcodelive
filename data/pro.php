<?php
// Include properties data
include "./propertydata.php";

// Check if there's a search query
$searchQuery = isset($_GET['search']) ? strtolower($_GET['search']) : null;

// Filter properties based on search query
if ($searchQuery) {
    $properties = array_filter($properties, function ($property) use ($searchQuery) {
        // Convert property name and location to lowercase for case-insensitive search
        $propertyName = strtolower($property['name']);
        $propertyLocation = strtolower($property['location']);
        // Check if search query is in the property name or location
        return strpos($propertyName, $searchQuery) !== false || strpos($propertyLocation, $searchQuery) !== false;
    });
}
?>


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
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f4f4f4;
}

.properties-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.property-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: calc(50% - 10px);
    max-width: 300px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    /* Add transition for smooth effect */
}

.property-card:hover {
    transform: scale(1.05);
    /* Slightly scale up */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    /* Increase shadow for depth effect */
}


.property-images img {
    width: 100%;
    height: auto;
    display: block;
}

h2,
p {
    margin: 10px;
}

.details-link {
    display: inline-block;
    background-color: #007bff;
    color: #ffffff;
    padding: 10px;
    border-radius: 5px;
    text-decoration: none;
    margin: 10px;
}

@media (max-width: 768px) {
    .property-card {
        width: calc(100% - 20px);
    }
}
</style>
<form method="GET" action="">
    <input type="text" name="search" placeholder="Search by name or location"
        value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
    <button type="submit">Search</button>
</form>


<div class="properties-grid">
    <?php foreach ($properties as $property): ?>
    <?php 
                // Generate a URL slug from the property name
                $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $property['name'])));
                // Construct the details page path
                $detailsPagePath = $slug . '.php'; // Assuming the files are named as the slug with .php extension
            ?>
    <div class="property-card">
        <div class="property-images" onclick="nextImage(this)">
            <?php foreach ($property['images'] as $index => $image): ?>
            <img src="<?php echo $image; ?>" alt="Property Image"
                style="<?php echo $index > 0 ? 'display:none;' : ''; ?>">
            <?php endforeach; ?>
        </div>
        <h2><?php echo $property['name']; ?></h2>
        <p>Location: <?php echo $property['location']; ?></p>
        <p><?php echo $property['price']; ?></p>
        <a href="<?php echo $detailsPagePath; ?>" class="details-link">View Details</a>
    </div>
    <?php endforeach; ?>
</div>