<?php
session_start();

// Check if the user is logged in, and if not, redirect them to the login page
if (!isset($_SESSION['id'])) {
    header("Location: login.php"); // Change 'login.php' to your actual login page
    exit();
}

// Include database configuration
include('configure.php');

// Check if the 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare a DELETE statement
    $delete_query = "DELETE FROM med_school_data WHERE id = '$id'";

    // Execute the DELETE statement
    if (mysqli_query($connection, $delete_query)) {
        // Redirect to the view page after successful deletion
        header("Location: View_Details.php?id=" . $_SESSION['id']);
        exit();
    } else {
        echo "Error: " . mysqli_error($connection);
    }
} else {
    // Handle the case where the 'id' parameter is not provided in the URL
    echo "Error: ID not provided in the URL.";
}
?>
