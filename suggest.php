<?php
include './data/tempdata.php';

header('Content-Type: application/json');

// Get the search query from the request
$query = isset($_GET['query']) ? strtolower(trim($_GET['query'])) : '';

// Initialize an array for suggestions
$suggestions = [];

if (!empty($query)) {
    // Iterate through properties to find matching keywords
    foreach ($properties as $property) {
        // Collect keywords and make them searchable
        $keywords = explode(',', strtolower($property['keywords']));
        foreach ($keywords as $keyword) {
            if (strpos($keyword, $query) !== false) {
                $suggestions[] = trim($keyword);
            }
        }
    }
}

// Remove duplicates and limit results to 10 suggestions
$suggestions = array_slice(array_unique($suggestions), 0, 10);

// Return suggestions as JSON
echo json_encode($suggestions);
