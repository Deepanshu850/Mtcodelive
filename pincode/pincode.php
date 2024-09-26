
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pincode Finder</title>
    <style>
    /* Enhanced CSS styles */
    /* Container */
    .finder-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fafafa;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .finder-container:hover {
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }

    /* Heading */
    .finder-heading {
        color: #2c3e50;
        text-align: center;
        font-size: 28px;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 30px;
        font-family: 'Arial', sans-serif;
        text-transform: uppercase;
        position: relative;
    }

    .finder-heading:after {
        content: '';
        width: 80px;
        height: 3px;
        background-color: #007bff;
        display: block;
        margin: 10px auto 0;
        border-radius: 2px;
    }

    /* Search Form */
    .finder-form {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
    }

    .finder-input {
        padding: 12px 15px;
        font-size: 18px;
        border: 2px solid #ddd;
        border-radius: 30px;
        width: 100%;
        max-width: 400px;
        transition: border-color 0.3s ease;
    }

    .finder-input:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
    }

    .finder-button {
        padding: 12px 25px;
        font-size: 18px;
        font-weight: 600;
        border: none;
        background-color: #007bff;
        color: white;
        border-radius: 30px;
        cursor: pointer;
        margin-left: 15px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .finder-button:hover {
        background-color: #0056b3;
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
    }

    /* Cards */
    .finder-card {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 25px;
        margin: 15px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease, opacity 0.3s ease;
        cursor: pointer;
        width: 100%;
        max-width: 320px;
        opacity: 0;
        animation: fadeInUp 0.5s ease forwards;
    }

    .finder-card:nth-child(odd) {
        animation-delay: 0.1s;
    }

    .finder-card:nth-child(even) {
        animation-delay: 0.2s;
    }

    .finder-card:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .finder-card h2 {
        font-size: 22px;
        margin: 0 0 15px;
        color: #333;
        font-weight: 600;
    }

    .finder-card p {
        margin: 0;
        color: #777;
        font-size: 16px;
        line-height: 1.5;
    }

    .finder-card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* Animation for cards */
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Media Queries for Mobile Responsiveness */
    @media (max-width: 768px) {
        .finder-card {
            width: 90%;
            max-width: 100%;
        }

        .finder-button {
            margin-left: 0;
            margin-top: 10px;
            width: 100%;
        }

        .finder-form {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
</head>
<body>

<div class="finder-container">
    <h1 class="finder-heading">Pincode Finder</h1>
    <form class="finder-form" method="POST">
        <input type="text" id="search" name="query" class="finder-input" placeholder="Search for Pincode or Locality" required>
        <button type="submit" class="finder-button">Search</button>
    </form>

    <?php
    // Pincode data with locality and pincode
    $pincode_data = [
        ['locality' => 'Sector 15', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 16', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 17', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 19', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 2', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 4', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 5', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Ambedkar City', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Bahlolpur', 'pincode' => '227808', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Bhangel', 'pincode' => '201008', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Buddha', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Chaukhandi', 'pincode' => '201307', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Chhajarsi Colony', 'pincode' => '201307', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Chi 1', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Chi 2', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Devla', 'pincode' => '201306', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Kakrala', 'pincode' => '242221', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Kidawali', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Kulesara', 'pincode' => '201306', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Mangrouli', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Nagla Nagli', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Nagli Bahrampur', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Nagli Sabapur', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Nalgada Village', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Omaxe Forest Sector 92', 'pincode' => '201305', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Phase 2', 'pincode' => '201305', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Raipur Village', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Saralpur', 'pincode' => '201008', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector - 106', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 1', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 10', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 100', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 101', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 102', 'pincode' => '201008', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 104', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 105', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 107', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 108', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 11', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 110', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 112', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 113', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 116', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 117', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 118', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 119', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 120', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 121', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 122', 'pincode' => '201316', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 123', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 124', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 125', 'pincode' => '201303', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 126', 'pincode' => '201303', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 127', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 128', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 129', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 130', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 131', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 132', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 133', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 134', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 135', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 136', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 137', 'pincode' => '201305', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 138', 'pincode' => '201305', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 14', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 140', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 140A', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 141', 'pincode' => '201305', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 142', 'pincode' => '201305', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 143', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 143A', 'pincode' => '201306', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 143B', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 144', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 145', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 146', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 147', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 148', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 149', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 14A', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 150', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 151', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 152', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 153', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 154', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 155', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 156', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 157', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 158', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 159', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 15A', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 160', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 161', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 162', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 163', 'pincode' => '201306', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 164', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 165', 'pincode' => '201306', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 166', 'pincode' => '201306', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 167 A', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 167 B', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 167', 'pincode' => '201306', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 168', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 16A', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 16B', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 18', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 20', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 21', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 21A', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 22', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 23', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 24', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 25', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 25A', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 26', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 27', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 28', 'pincode' => '201303', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 29', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 3', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 30', 'pincode' => '201303', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 31', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 32', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 33', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 34', 'pincode' => '201307', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 35', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 36', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 37', 'pincode' => '201303', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 38', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 39', 'pincode' => '201303', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 40', 'pincode' => '201303', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 41', 'pincode' => '201303', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 42', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 43', 'pincode' => '201303', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 44', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 45', 'pincode' => '201303', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 46', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 47', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 48', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 49', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 50', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 51', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 52', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 53', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 54', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 55', 'pincode' => '201307', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 56', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 57', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 58', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 59', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 6', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 60', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 61', 'pincode' => '201307', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 62', 'pincode' => '201309', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 62A', 'pincode' => '201309', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 63 A', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 63', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 64', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 65', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 66', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 67', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 68', 'pincode' => '201307', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 69', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 7', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 70', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 71', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 72', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 73', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 74', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 75', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 76', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 77', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 78', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 79', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 8', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 80', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 81', 'pincode' => '201305', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 82', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 83', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 84', 'pincode' => '201305', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 85', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 86', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 87', 'pincode' => '201305', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 88', 'pincode' => '201305', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 89', 'pincode' => '201305', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 9', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 90', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 91', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 92', 'pincode' => '201305', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 93', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 93A', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 93B', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 94', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 95', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 96', 'pincode' => '201301', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 97', 'pincode' => '201303', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 98', 'pincode' => '201303', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sector 99', 'pincode' => '201304', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sigma 1 Greater Noida', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
        ['locality' => 'Sigma 2 Greater Noida', 'pincode' => '201310', 'city' => 'Noida', 'state' => 'Uttar Pradesh'],
    ];

   // Helper function to create SEO-friendly URLs
function create_seo_friendly_url($locality, $pincode) {
    // Convert locality name to lowercase and replace spaces with hyphens
    $locality_slug = strtolower(str_replace(' ', '-', $locality));
    // Return the SEO-friendly URL format
    return $locality_slug . '-pincode-' . $pincode . '.php';
}

// Check if there was a search request
$results = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query = trim($_POST['query']);
    $results = array_filter($pincode_data, function($location) use ($query) {
        return stripos($location['locality'], $query) !== false || stripos($location['pincode'], $query) !== false;
    });
} else {
    // If no search request, show all the pincode data
    $results = $pincode_data;
}

// Display results
if (!empty($results)) {
    echo '<div class="finder-card-container">';
    foreach ($results as $location) {
        // Generate dynamic SEO-friendly URL
        $seo_friendly_url = create_seo_friendly_url($location['locality'], $location['pincode']);
        echo '<div class="finder-card" onclick="window.location.href=\'' . $seo_friendly_url . '\'">';
        echo '<h2>' . htmlspecialchars($location['locality']) . '</h2>';
        echo '<p>Pincode: ' . htmlspecialchars($location['pincode']) . '</p>';
        echo '<p>' . htmlspecialchars($location['city']) . ', ' . htmlspecialchars($location['state']) . '</p>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<p>No results found.</p>';
}
    ?>
</div>

</body>
</html>
