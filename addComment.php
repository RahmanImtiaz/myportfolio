<?php

// Start the session
session_start();


// Check if user is logged in
if (!isset($_SESSION['ID'])) {
    // User is not logged in Redirect them to the login page
    header("Location: loginForm.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

    // collect value of input field
    $userID = $_POST['USER_ID'];
    $blogID = $_POST['BLOG_ID'];
    $comment = $_POST['comment'];

    // Include the database connection file
    include 'connect.php';

    // enter blog post into database
    $sql = "INSERT INTO COMMENTS (BLOG_ID, USER_ID, comment) VALUES ('$blogID', '$userID', '$comment')";

    if ($conn->query($sql) === TRUE) {
        header("Location: blogTemplate.php?BLOG_ID=" . $blogID);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("Location: viewBlog.php");
    }

    $conn->close();
}
