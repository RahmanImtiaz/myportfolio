<?php

// Start the session
session_start();


// Check if user is logged in and is an admin
if (!isset($_SESSION['ID']) || $_SESSION['ID'] != 1) {
    // User is not logged in and/or not admin. Redirect them to the login page
    header("Location: loginForm.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

    // collect value of input field
    $title = $_POST['BlogTitle'];
    $content = $_POST['BlogContent'];

    // Include the database connection file
    require_once 'connect.php'; 

    // enter blog post into database
    $sql = "INSERT INTO POSTS (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        header("Location: viewBlog.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("Location: addEntry.php");
    }

    $conn->close();
}
