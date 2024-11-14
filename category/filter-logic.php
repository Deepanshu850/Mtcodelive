<?php
function filterProperties($properties, $requiredLocation, $requiredType)
{
    // Convert location and type arrays to lowercase
    $requiredLocation = array_map('strtolower', $requiredLocation);
    $requiredType = array_map('strtolower', $requiredType);

    $searchQuery = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : '';

    return array_filter($properties, function ($item) use ($searchQuery, $requiredLocation, $requiredType) {
        // Convert item types to lowercase for comparison
        $itemTypes = array_map('strtolower', $item['type']);

        // Check required property type - at least one type must match
        $typeMatch = false;
        foreach ($itemTypes as $itemType) {
            foreach ($requiredType as $reqType) {
                if (strpos($itemType, $reqType) !== false) {
                    $typeMatch = true;
                    break 2;
                }
            }
        }
        if (!$typeMatch) {
            return false;
        }

        // Check required location
        $location = strtolower($item['location']);
        $locationMatch = false;
        foreach ($requiredLocation as $loc) {
            if (strpos($location, $loc) !== false) {
                $locationMatch = true;
                break;
            }
        }
        if (!$locationMatch) {
            return false;
        }

        // If no search query, return all matching properties
        if (empty($searchQuery)) {
            return true;
        }

        // Check property name, location and property type
        $searchTerms = explode(' ', $searchQuery);

        foreach ($searchTerms as $term) {
            if (strpos($location, $term) !== false) {
                return true;
            }

            foreach ($itemTypes as $type) {
                if (strpos($type, $term) !== false) {
                    return true;
                }
            }

            if (strpos(strtolower($item['name']), $term) !== false) {
                return true;
            }
        }

        return false;
    });
}
