<?php

// Database connection settings
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "travel_website"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $place = $_POST['place']; // Get place from form submission

    // Debugging: Print received values
    echo "Name: $name, Contact: $contact, Place: $place<br>";

    // SQL query to insert data into visitors table
    $sql = "INSERT INTO visitors (name, contact, place) VALUES ('$name', '$contact', '$place')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Print any SQL errors
    }
}

$conn->close();
?>
