<?php
// Include the database connection settings from configure.php
include('configure.php');

$success_message = ""; // Initialize the success message variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($connection, $_POST['fname']);
    $size = mysqli_real_escape_string($connection, $_POST['sizes']);

    // Insert data into the specific table (e.g., "user_sizes")
    $tableName = "user_sizes"; // Replace with your table name
    $sql = "INSERT INTO $tableName (name, size) VALUES ('$name', '$size')";

    if (mysqli_query($connection, $sql)) {
        // Set the success message when data is inserted successfully
        $success_message = "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
