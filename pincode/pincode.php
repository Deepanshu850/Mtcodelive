
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pincode Finder</title>
    <style>/* Enhanced CSS styles */
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
    background-color: #005b52;
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
    border-color: #005b52;
    box-shadow: 0 0 8px rgba(0, 91, 82, 0.2);
}

.finder-button {
    padding: 12px 25px;
    font-size: 18px;
    font-weight: 600;
    border: none;
    background-color: #005b52;
    color: white;
    border-radius: 30px;
    cursor: pointer;
    margin-left: 15px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.finder-button:hover {
    background-color: #004741;
    box-shadow: 0 4px 15px rgba(0, 91, 82, 0.3);
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
    color: #005b52;
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
}</style>
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
        
            ['locality' => 'Dwarka Sector 11', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 19', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 20', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 5', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 6', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 9', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Sector 11 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Sector 19 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Sector 20 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Sector 5 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Sector 6 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Sector 9 Dwarka', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Sector 2 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => '1688 Barracks', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Adarsh Nagar', 'pincode' => '110033', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Adchini', 'pincode' => '110017', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Agar Nagar', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'AGCR Enclave', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ajmeri Gate', 'pincode' => '110002', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Akbar Pur Mazra', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Akbarpur Majra', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Alaknanda', 'pincode' => '110019', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ali', 'pincode' => '110019', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Alipur Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Anand Niketan', 'pincode' => '110021', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Anand Parbat', 'pincode' => '110005', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Anand Vihar', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Andrews Ganj', 'pincode' => '110049', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ansari Nagar East', 'pincode' => '110029', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ansari Nagar West', 'pincode' => '110029', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Arjun Nagar', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Asalatpur Khadar', 'pincode' => '110058', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ashok Nagar', 'pincode' => '110018', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ashok Vihar', 'pincode' => '110052', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Asola', 'pincode' => '110074', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Auchandi', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Aurangzeb Road', 'pincode' => '110011', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Aya Nagar', 'pincode' => '110047', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ayurvigyan Nagar', 'pincode' => '110049', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Azadpur', 'pincode' => '110033', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Baba Haridas Nagar', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Baba Kharak Singh Marg Area', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Babarpur', 'pincode' => '110032', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Badusarai', 'pincode' => '110071', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bahapur', 'pincode' => '110065', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bajitpur Thakran', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bakargarh', 'pincode' => '110040', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bakhtawar Pur Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bakkar Wala Colony', 'pincode' => '110041', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bakkarwala', 'pincode' => '110041', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bakoli', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bali Nagar', 'pincode' => '110015', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Baljeet Nagar', 'pincode' => '110008', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Baljit Nagar', 'pincode' => '110008', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Baljit Vihar', 'pincode' => '110086', 'city' => 'New Delhi','state' => 'New Delhi'],
            ['locality' => 'Balola', 'pincode' => '122003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bankner', 'pincode' => '110040', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bankoli Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Baprola', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Barakhamba', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Baroda House', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Barwala', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bawana', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Begumpur', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Behlolpur', 'pincode' => '110013', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ber Sarai', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bhalswa', 'pincode' => '110033', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bharat Vihar', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bharthal', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bharti Nagar', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bhatti Kalan', 'pincode' => '110074', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Biharipur', 'pincode' => '110094', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bindapur', 'pincode' => '110059', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'BK Dutt Colony', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Block L 1', 'pincode' => '110080', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Budh Vihar', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Budhpur Bijapur Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Budhpur', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Bulla Colony', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Burari', 'pincode' => '110084', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Central Ridge Reserve Forest', 'pincode' => '110012', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Central Secretariat', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Chanakyapuri', 'pincode' => '110021', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Chandan Hola', 'pincode' => '110074', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Chandni Chowk', 'pincode' => '110006', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Chandpur Kalan', 'pincode' => '281201', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Chandpur Village', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Chandra Park', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Chatesar', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Chattarpur', 'pincode' => '110074', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Chhattarpur', 'pincode' => '110074', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Chhawla', 'pincode' => '110071', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Chirag Dilli', 'pincode' => '110017', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Chittaranjan Park', 'pincode' => '110019', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Civil Lines', 'pincode' => '110054', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Connaught Place', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Copernicus Marg', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'CR Park', 'pincode' => '110019', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Cullak Pur', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dabri', 'pincode' => '110045', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dakshinpuri', 'pincode' => '110062', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dallupura', 'pincode' => '110096', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Darayapur Kalan Village', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dariyapur Khurd', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Daryaganj', 'pincode' => '110002', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Daryapur Khurd Village', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dasghara', 'pincode' => '110012', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dashrath Puri', 'pincode' => '110045', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Daulatpur', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dauralla', 'pincode' => '250221', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Daya Basti', 'pincode' => '110035', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Deenpur', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Defence Colony', 'pincode' => '110024', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Delhi Cantonment', 'pincode' => '110010', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Delhi Gymkhana Club', 'pincode' => '110011', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Delhi Race Club', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dera Mandi', 'pincode' => '110074', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dhansa', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dhaula Kuan', 'pincode' => '110010', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dhul Siras', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dichaon Kalan', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dilshad Garden', 'pincode' => '110095', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'DLF Farms', 'pincode' => '110030', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Mor', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 1', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 10', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 12', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 13', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 14', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 15', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 16', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 16A', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 17', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 18', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 2', 'pincode' => '110075', 'city' => 'New Delhi', 'state' =>'New Delhi'],
            ['locality' => 'Dwarka Sector 22', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 23', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 24', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 25', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 26', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 28', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 3', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 4', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 7', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector 8', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Dwarka Sector16B', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'East Of Kailash', 'pincode' => '110065', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Fateh Nagar', 'pincode' => '110018', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Fatehpur Beri', 'pincode' => '110074', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Fatehpur Jat', 'pincode' => '247001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ferozpur Bangar Village', 'pincode' => '131402', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Gandhi Square', 'pincode' => '110007', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ganesh Nagar', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Garhi', 'pincode' => '110068', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Gautam Nagar', 'pincode' => '110049', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Gazipur', 'pincode' => '110096', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Geeta Colony', 'pincode' => '110031', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ghalibpur', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Gharoli', 'pincode' => '110096', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ghevra', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ghitorni', 'pincode' => '110030', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ghoga', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ghumanhera', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Gobhna Village', 'pincode' => '124507', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Gokalpur', 'pincode' => '110094', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Gole Market', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Golf Links', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Gopalpur Village', 'pincode' => '110009', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Govindpuri Extension', 'pincode' => '110019', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Govindpuri', 'pincode' => '110019', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Goyla Khurd', 'pincode' => '110071', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Goyla Vihar', 'pincode' => '110071', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Greater Kailash 1', 'pincode' => '110048', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Greater Kailash I', 'pincode' => '110048', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Greater Kailash', 'pincode' => '110048', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Green Park', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'GTB Nagar', 'pincode' => '110009', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Gujranwala Town', 'pincode' => '110009', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Gulabi Bagh', 'pincode' => '110007', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Gulmohar Park', 'pincode' => '110049', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Haibutpur', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Haiderpur', 'pincode' => '110088', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Hamdard Nagar', 'pincode' => '110062', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Hamidpur Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Hamidpur', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Harewali', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Hari Nagar Ashram', 'pincode' => '110014', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Hari Nagar', 'pincode' => '110064', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Hasanpur Village', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Hasanpur', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Hastsal', 'pincode' => '110059', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Hauz Khas', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'HC Mathur Lane', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Hiran Kudna', 'pincode' => '110041', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Hiranki', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Holambi Kalan', 'pincode' => '110082', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Holambi Khurd Village', 'pincode' => '110082', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Holambi Khurd', 'pincode' => '110082', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Hyderabad House', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ibrahimpur', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'INA Colony', 'pincode' => '110023', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Inder Puri', 'pincode' => '110012', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Inderlok', 'pincode' => '110035', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'India Gate', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Indira Gandhi International Airport', 'pincode' => '110037', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'IP Estate', 'pincode' => '110002', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Iradat Nagar', 'pincode' => '283112', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Isherheri', 'pincode' => '124507', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jaffarpur Kalan', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jafrabad', 'pincode' => '110053', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jagjit Nagar', 'pincode' => '110053', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jahangirpuri', 'pincode' => '110033', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jahanpanah City Forest', 'pincode' => '110062', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jainpur Village', 'pincode' => '131027', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jaitpur', 'pincode' => '110044', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jakhoda', 'pincode' => '124505', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jal Vihar', 'pincode' => '110024', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jamia Nagar', 'pincode' => '110025', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Janakpuri', 'pincode' => '110058', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jangpura', 'pincode' => '110014', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jasola Vihar', 'pincode' => '110025', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jasola', 'pincode' => '110025', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jat Khor', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jaunapur', 'pincode' => '110047', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jawahar Nagar', 'pincode' => '201102', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jawaharlal Nehru University', 'pincode' => '110067', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jhandewalan', 'pincode' => '110055', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jhangola', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jharoda Kalan', 'pincode' => '110072', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jharoda Majra Burari', 'pincode' => '110084', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jhatikra', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jhilmil Colony', 'pincode' => '110095', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jhinjoli Village', 'pincode' => '131001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Johripur', 'pincode' => '110094', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Jor Bagh', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Juanapur', 'pincode' => '110047', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kabir Basti', 'pincode' => '110007', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kadipur Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kair', 'pincode' => '110028', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kalkaji', 'pincode' => '110019', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kalu Sarai', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kalyan Puri', 'pincode' => '110091', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kalyan Vihar', 'pincode' => '110009', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kamla Nagar', 'pincode' => '110007', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kamruddin Nagar', 'pincode' => '110041', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kanganheri', 'pincode' => '110071', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kanjhawala Village', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kapas Hera Estate', 'pincode' => '110037', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kapashera', 'pincode' => '110037', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Karala', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Karampura', 'pincode' => '110015', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Karawal Nagar', 'pincode' => '110090', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Karol Bagh', 'pincode' => '110005', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kashmere Gate', 'pincode' => '110006', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Katevda', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Katewara Village', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Katlupur', 'pincode' => '131103', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Katwaria Sarai', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kazipur', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'KG 3', 'pincode' => '110018', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'KG-III', 'pincode' => '110018', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Khaira', 'pincode' => '110028', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Khajoori Khas', 'pincode' => '110094', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Khampur Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Khampur', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Khanpur Tyagi', 'pincode' => '245101', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Khanpur', 'pincode' => '110062', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kharkhari Jatmal', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kharkhari Round', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Khera Dabar', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Khera Kalan Village', 'pincode' => '110082', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Khera Khurd Village', 'pincode' => '110082', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Khirki Extension', 'pincode' => '110017', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kidwai Nagar', 'pincode' => '110023', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kirari Suleman Nagar', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kirti Nagar', 'pincode' => '110015', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kishan Ganj', 'pincode' => '110007', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Kondli', 'pincode' => '110096', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Krishan Vihar', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Krishna Manon Lane Area', 'pincode' => '110011', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Krishna Nagar', 'pincode' => '110051', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Lado Sarai', 'pincode' => '110030', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Ladpur', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Lajpat Nagar', 'pincode' => '110024', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Lal Bagh Jafarpur Village', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Lal Kuan', 'pincode' => '110044', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Lampur Village', 'pincode' => '110040', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Laxmi Bai Nagar', 'pincode' => '110023', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Laxmi Nagar', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Lodhi Colony', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Lodi Estate', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Lohat', 'pincode' => '124105', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Madangir', 'pincode' => '110062', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Madanpur Dabas Village', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Madanpur Dabas', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Madanpur Khadar', 'pincode' => '110076', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Madhu Vihar', 'pincode' => '110059', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Maharani Bagh', 'pincode' => '110065', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mahatma Jyoti Rao Phule Marg Area', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mahavir Enclave', 'pincode' => '110045', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mahipalpur', 'pincode' => '110037', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Maidan Garhi', 'pincode' => '110068', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Maidangarhi', 'pincode' => '110068', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Malcha', 'pincode' => '110021', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Malikpur Zer', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Malikpur', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Malka Ganj', 'pincode' => '110007', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Malviya Nagar', 'pincode' => '110017', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Man Singh Road Area', 'pincode' => '110011', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mandawali', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mandi House', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mandi', 'pincode' => '110047', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mandoli', 'pincode' => '110093', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Manglapuri', 'pincode' => '110045', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mangolpuri', 'pincode' => '110083', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mansa Ram Park', 'pincode' => '110059', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mansarover Garden', 'pincode' => '110015', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Marmurpur', 'pincode' => '110040', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Masjid Moth Village', 'pincode' => '110048', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Masjid Moth', 'pincode' => '110048', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Matiala', 'pincode' => '110059', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Maulana Azad Medical College Campus', 'pincode' => '110002', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mayapuri', 'pincode' => '110064', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mayur Enclave', 'pincode' => '110034', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mayur Vihar 2', 'pincode' => '110091', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mayur Vihar II', 'pincode' => '110091', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mayur Vihar Phase 1', 'pincode' => '110091', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mayur Vihar Phase 3', 'pincode' => '110034', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mayur Vihar', 'pincode' => '110091', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'MCD Slum Colony', 'pincode' => '110042', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mehram Nagar', 'pincode' => '110037', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mehrauli', 'pincode' => '110030', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mirpur Turk', 'pincode' => '110094', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mithapur', 'pincode' => '110044', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mittal Garden', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Model Town', 'pincode' => '110009', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Model Town', 'pincode' => '110009', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Molarband', 'pincode' => '110044', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mori Gate', 'pincode' => '110006', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Moti Bagh North', 'pincode' => '110021', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Moti Bagh South', 'pincode' => '110021', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Moti Bagh', 'pincode' => '110021', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Moti Nagar', 'pincode' => '110015', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Motilal Nehru Marg Area', 'pincode' => '110011', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mubarakpur Dabas', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mubarkpur', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mukherjee Nagar', 'pincode' => '110009', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mukherji Park', 'pincode' => '110018', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mukhmelpur Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mukundpur', 'pincode' => '110042', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mundhela Kalan', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mundhela Khurd', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mundka', 'pincode' => '110041', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Mungeshpur', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Munirka', 'pincode' => '110067', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Najafgarh Road Industrial Area', 'pincode' => '110015', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Najafgarh', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nanak Heri Village', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nangal Thakuran Village', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nangli Puna Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nangli Puna', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nangli Sakrawati', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nangli Vihar', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nangloi', 'pincode' => '110041', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Naraina', 'pincode' => '110028', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Narela', 'pincode' => '110040', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nasirpur', 'pincode' => '110045', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nawada', 'pincode' => '110059', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Neb Sarai', 'pincode' => '110068', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Neelwal', 'pincode' => '110041', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Neeti Bagh', 'pincode' => '110049', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nehru Nagar', 'pincode' => '110065', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nehru Place', 'pincode' => '110019', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Netaji Nagar', 'pincode' => '110023', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'New Aruna Nagar', 'pincode' => '110054', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'New Ashok Nagar', 'pincode' => '110096', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'New Friends Colony', 'pincode' => '110025', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'New Layal Pur', 'pincode' => '110051', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'New Moti Bagh', 'pincode' => '110021', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'New Mustafabad', 'pincode' => '110094', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'New Rajinder Nagar', 'pincode' => '110060', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nilothi', 'pincode' => '110041', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nizampur', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nizamuddin East', 'pincode' => '110013', 'city' => 'New Delhi', 'state' => 'New Delhi'],
            ['locality' => 'Nizamuddin West', 'pincode' => '110013', 'city' => 'New Delhi', 'state' => 'New Delhi'],
        
    ['locality' => 'Okhla Industrial Area', 'pincode' => '110020', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Old Delhi', 'pincode' => '110006', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Old Seemapuri', 'pincode' => '110095', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Paharganj', 'pincode' => '110055', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Palam', 'pincode' => '110045', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Palla', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Panchsheel Enclave', 'pincode' => '110017', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Panchsheel Park', 'pincode' => '110017', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pandav Nagar', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pandwalan Kalan', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pandwalan Khurd', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Paprawat Village', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Paprawat', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Paschim Vihar', 'pincode' => '110063', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pataudi House', 'pincode' => '110002', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Patel Garden', 'pincode' => '110059', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Patel Nagar', 'pincode' => '110008', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Patparganj', 'pincode' => '110091', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pind Wala Khurd Village', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pitampura', 'pincode' => '110034', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pochanpur Colony', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pochanpur', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pooth Kalan', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pragati Maidan', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pragati Vihar', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Preet Vihar', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Prem Nagar', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => "President's Estate", 'pincode' => '110004', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pul Prahlad Pur', 'pincode' => '110044', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Punjab Khor', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Punjabi Bagh', 'pincode' => '110026', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pur Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pusa', 'pincode' => '110012', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pushp Vihar', 'pincode' => '110017', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Pushpanjali Farms', 'pincode' => '110061', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Puth Khurd Village', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Puth Khurd', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Qila Rai Pithora', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Qutab Enclave', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Qutab Institutional Area', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Qutabgarh', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Qutub Vihar', 'pincode' => '110071', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'R.K. Puram', 'pincode' => '110022', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rabindra Nagar', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Radhey Mohan Drive', 'pincode' => '110030', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Raj Ghat', 'pincode' => '110002', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Raja Garden', 'pincode' => '110027', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rajendra Place', 'pincode' => '110008', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rajinder Nagar', 'pincode' => '110060', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rajokri', 'pincode' => '110038', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rajouri Garden', 'pincode' => '110027', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rajpur', 'pincode' => '110068', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Raju Park Extension', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rakab Ganj', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Ramesh Nagar', 'pincode' => '110015', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rampur', 'pincode' => '131402', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Ramzanpur', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rangpuri', 'pincode' => '110037', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Ranhola Extension', 'pincode' => '110041', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Ranhola', 'pincode' => '110041', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rani Khera', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Ranjeet Nagar', 'pincode' => '110008', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Raota', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Razapur Khurd', 'pincode' => '110059', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rewla Khanpur', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rithala', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Extension', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 1', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 10', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 11', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 12', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 13', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 14', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 15', 'pincode' => '110089', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 16', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 17', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 18', 'pincode' => '110089', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 19', 'pincode' => '110089', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 2', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 20', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 21', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 22', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 23', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 24', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 25', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 26', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 27', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 28', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 29', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 3', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 30', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 31', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 32', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 33', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 34', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 35', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 36', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 37', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 38', 'pincode' => '110089', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 39', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 4', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 5', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 6', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 7', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 8', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Rohini Sector 9', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Roop Nagar', 'pincode' => '110007', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sabhapur', 'pincode' => '110094', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Saboli', 'pincode' => '110093', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sabzi Mandi Old', 'pincode' => '110007', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sadar Bazaar', 'pincode' => '110006', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sadiq Nagar', 'pincode' => '110049', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Safdarjung Development Area', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Safdarjung Enclave', 'pincode' => '110029', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sagar Pur', 'pincode' => '110046', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sagarpur', 'pincode' => '110046', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Said-Ul-Ajaib', 'pincode' => '110030', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Saidabad', 'pincode' => '500059', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Saidpur', 'pincode' => '131402', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sainik Farm', 'pincode' => '110062', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Saket', 'pincode' => '110017', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Samalka', 'pincode' => '110037', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Samashpur Khalsa', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Samay Pur', 'pincode' => '110042', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sangam Vihar', 'pincode' => '110080', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sanjay Gandhi Transport Nagar', 'pincode' => '110042', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sanoth Village', 'pincode' => '110040', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sanoth', 'pincode' => '110040', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sansad Marg Road Area', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sant Nagar', 'pincode' => '110065', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sarai Kale Khan', 'pincode' => '110013', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sarai Rohilla', 'pincode' => '110035', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sarangpur', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sarita Vihar', 'pincode' => '110076', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sarojini Nagar', 'pincode' => '110023', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sarvapriya Vihar', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sarvodaya Enclave', 'pincode' => '110017', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sat Bari', 'pincode' => '110074', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Satya Sadan', 'pincode' => '110021', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Savitri Nagar', 'pincode' => '110017', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sawda', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'SDA', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 1 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 1 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 10 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 10 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 11 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 12 Dwarka', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 12 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 13 Dwarka', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 13 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 14 Dwarka', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 14 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 15 Dwarka', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 15 Rohini', 'pincode' => '110089', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 16 Dwarka', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 16 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 16A Dwarka', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 16B Dwarka', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 17 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 17 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 18 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 18 Rohini', 'pincode' => '110089', 'city' => 'New Delhi', 'state' =>  'New Delhi'],
    ['locality' => 'Sector 18 Rohini', 'pincode' => '110089', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 19 Rohini', 'pincode' => '110089', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 2 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 20 Rohini', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 21 Rohini', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 21', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 22 Dwarka', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 22 Rohini', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 23 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 23 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 23B Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 24 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 24 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 25 Dwarka', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 25 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 26 Dwarka', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 26 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 27 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 27 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 28 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 28 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 28', 'pincode' => '124507', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 29 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 29 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 3 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 3 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 30 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 31 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 32 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 33 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 34 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 35 Rohini', 'pincode' => '110039', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 36 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 37 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 37', 'pincode' => '124507', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 38 Rohini', 'pincode' => '110089', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 39 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 4 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 4 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 5 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 6 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 7 Dwarka', 'pincode' => '110075', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 7 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 7G', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 8 Dwarka', 'pincode' => '110077', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 8 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sector 9 Rohini', 'pincode' => '110085', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Seemapuri', 'pincode' => '110095', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sewa Nagar', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sewak Park', 'pincode' => '110059', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shadipur', 'pincode' => '110008', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shahabad Daulatpur Village', 'pincode' => '110042', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shahabad Mohammadpur', 'pincode' => '110061', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shahdara', 'pincode' => '110032', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shakarpur Khas', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shakti Nagar', 'pincode' => '110007', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shakur Basti', 'pincode' => '110056', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shakurpur', 'pincode' => '110034', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shalimar Bagh', 'pincode' => '110088', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shankar Vihar', 'pincode' => '110010', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shanti Niketan', 'pincode' => '110021', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shastri Nagar', 'pincode' => '110052', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sheikh Sarai', 'pincode' => '110017', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sherpur Deri', 'pincode' => '110094', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sherpur Extention', 'pincode' => '110094', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sherpur', 'pincode' => '110094', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shikarpur', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shiv Park', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Shri Hans Nagar', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Siddhartha Extension', 'pincode' => '110014', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sidhartha Nagar', 'pincode' => '110014', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Singhola', 'pincode' => '110040', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Singhu', 'pincode' => '110040', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Siraspur', 'pincode' => '110042', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Siri Fort', 'pincode' => '110049', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sitapuri', 'pincode' => '110045', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Soami Nagar', 'pincode' => '110017', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sonia Vihar', 'pincode' => '110090', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'South Extension 1', 'pincode' => '110049', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'South Extension 2', 'pincode' => '110049', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'South Extension I', 'pincode' => '110049', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'South Extension II', 'pincode' => '110049', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sri Niwaspuri', 'pincode' => '110065', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Subhash Nagar', 'pincode' => '110027', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Subroto Park', 'pincode' => '110010', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Subzi Mandi', 'pincode' => '110007', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sudarshan Park', 'pincode' => '110015', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sujan Singh Park', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sukhdev Vihar', 'pincode' => '110025', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sultanpur', 'pincode' => '110030', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sultanpuri', 'pincode' => '110086', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sundar Nagar', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sundar Nagar', 'pincode' => '110003', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sungarpur', 'pincode' => '127029', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Sunlight Colony', 'pincode' => '110014', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Suraj Vihar', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Surajmal Vihar', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Surakhpur', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Surhera', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Surya Nagar', 'pincode' => '124507', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Swasthya Vihar', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tagore Garden Extension', 'pincode' => '110027', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tajpur Kalan Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tajpur Kalan', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tajpur Khurd', 'pincode' => '110071', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tara Nagar', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Teen Murti Marg Area', 'pincode' => '110011', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tehari Dawlatpur', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tetesar Village', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tiggi Pur Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tiggipur', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tihar Jail', 'pincode' => '110058', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tihar Village', 'pincode' => '110018', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tikri Kalan', 'pincode' => '110041', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tikri Khurd', 'pincode' => '110040', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tilak Nagar', 'pincode' => '110018', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tilangpur Kotla', 'pincode' => '110043', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Timarpur', 'pincode' => '110054', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tis Hazari', 'pincode' => '110054', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Todapur', 'pincode' => '110012', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Transit Camp', 'pincode' => '110078', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tri Nagar', 'pincode' => '110035', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Trilokpuri', 'pincode' => '110091', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tughlak Road Area', 'pincode' => '110011', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Tughlakabad', 'pincode' => '110044', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Uday Vihar Colony', 'pincode' => '110081', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Udhan Pana', 'pincode' => '110040', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Ujwa', 'pincode' => '110073', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'University Enclave', 'pincode' => '110007', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Uttam Nagar', 'pincode' => '110059', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vasant Kunj', 'pincode' => '110070', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vasant Vihar', 'pincode' => '110057', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vasundhara Enclave', 'pincode' => '110096', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vayusenabad', 'pincode' => '110062', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vijay Nagar', 'pincode' => '110009', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vikas Nagar', 'pincode' => '110059', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vikaspuri', 'pincode' => '110018', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vikram Nagar', 'pincode' => '110002', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vinod Nagar East', 'pincode' => '110091', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vinod Nagar North', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vinod Nagar West', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vishnu Garden', 'pincode' => '110018', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Vivek Vihar', 'pincode' => '110095', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Wazirabad', 'pincode' => '110084', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'West End', 'pincode' => '110021', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'West Sagarpur', 'pincode' => '110046', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Windsor Palace', 'pincode' => '110001', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Yamuna Bank', 'pincode' => '110092', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Yusuf Sarai', 'pincode' => '110016', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Zakhira', 'pincode' => '110015', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Zindpur Village', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi'],
    ['locality' => 'Zindpur', 'pincode' => '110036', 'city' => 'New Delhi', 'state' => 'New Delhi']
    
    ];

   // Helper function to create SEO-friendly URLs
function create_seo_friendly_url($locality, $pincode) {
    // Convert locality name to lowercase and replace spaces with hyphens
    $locality_slug = strtolower(str_replace(' ', '-', $locality));
    // Return the SEO-friendly URL format
    return $locality_slug . '-pincode-' . $pincode  ;
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
