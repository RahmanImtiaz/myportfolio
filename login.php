<?php

// Start the session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    // collect value of input field
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Include the database connection file
    require_once 'connect.php'; 

    // validate login info
    $query = "SELECT * FROM USERS WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);

    $row = $result->fetch_assoc(); // Fetch the row

    if ($result->num_rows == 1 && $row['ID'] > 0) {
        // login successful

        // Set session variables - Store the names in a session variable
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];
        $_SESSION['msg'] = "Welcome back " . $_SESSION['firstName'] . " " . $_SESSION['lastName'];
        header("Location: addEntry.php");
        exit();
    } else {
        // login failed
        $_SESSION['msg'] = "Invalid email or password";
        header("Location: loginForm.php");
        exit();
    }

    $conn->close();
}
