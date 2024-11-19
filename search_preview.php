<?php
include './data/tempdata.php';

header('Content-Type: application/json');

// Implementing output buffering to prevent any accidental output
ob_start();

try {
    if (isset($_GET['q']) && !empty($_GET['q'])) {
        function normalize($string)
        {
            return str_replace(' ', '', strtolower($string));
        }

        $search = normalize($_GET['q']);
        $results = [];

        // Iterate through properties and collect matching results
        foreach ($properties as $property) {
            // Normalize property data once to improve performance
            $normalizedProperty = [
                'name'        => normalize($property['name']),
                'builder'     => normalize($property['builder']),
                'location'    => array_map('normalize', $property['location']),
                'type'        => array_map('normalize', $property['type']),
                'typeDetail'  => array_map('normalize', $property['typeDetail']),
                'rera'        => array_map('normalize', $property['rera']),
                'keywords'    => isset($property['keywords']) ? normalize($property['keywords']) : ''
            ];

            // Check if the search term is in any of the normalized fields
            if (
                str_contains($normalizedProperty['name'], $search) ||
                str_contains($normalizedProperty['builder'], $search) ||
                array_filter($normalizedProperty['location'], fn($loc) => str_contains($loc, $search)) ||
                array_filter($normalizedProperty['type'], fn($type) => str_contains($type, $search)) ||
                array_filter($normalizedProperty['typeDetail'], fn($detail) => str_contains($detail, $search)) ||
                array_filter($normalizedProperty['rera'], fn($rera) => str_contains($rera, $search)) ||
                str_contains($normalizedProperty['keywords'], $search)
            ) {
                $results[] = [
                    'name'     => $property['name'],
                    'builder'  => $property['builder'],
                    'location' => $property['location'],
                    'link'     => $property['link'],
                    'image'    => isset($property['images'][0]) ? $property['images'][0] : ''
                ];
            }

            // Early exit if enough results are collected
            if (count($results) >= 5) {
                break;
            }
        }

        // Return the results as JSON
        echo json_encode($results);
    } else {
        echo json_encode([]);
    }
} catch (Exception $e) {
    // Log the exception and return an empty array
    error_log('Error in search_preview.php: ' . $e->getMessage());
    echo json_encode([]);
}

// Flush the output buffer
ob_end_flush();
