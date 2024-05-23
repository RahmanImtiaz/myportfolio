<?php

// Start the session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    // collect value of input field
    $firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Include the database connection file
    require_once 'connect.php'; 


    $sql = "INSERT INTO USERS (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: loginForm.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("Location: signUpForm.php");
    }

    $conn->close();
}
