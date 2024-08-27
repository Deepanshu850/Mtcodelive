<?php
include "db.php";
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $to_whom = mysqli_real_escape_string($conn, $_POST['to_whom']);
    $no_of_person = mysqli_real_escape_string($conn, $_POST['no_of_person']);
    $associate_nar = mysqli_real_escape_string($conn, $_POST['associate_nar']);
    $purpose = mysqli_real_escape_string($conn, $_POST['purpose']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);
    
    // Insert data into database
    $sql = "INSERT INTO client_entries (name, phone_no, address, city, to_whom, no_of_person, associate_nar, purpose, remarks)
    VALUES ('$name', '$phone_no', '$address', '$city', '$to_whom', '$no_of_person', '$associate_nar', '$purpose', '$remarks')";
    
    if ($conn->query($sql) === TRUE) {
        // Redirect to entryform.php with a query parameter
        header('Location: entryform.php?submission=success');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
    // Close connection
    $conn->close();
} else {
    // Not a POST request, redirect to form or handle accordingly
    echo "Form not submitted correctly.";
}
?>