<?php
    // connect to database
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbname = "MyPortfolio";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
