<?php

session_start();

if (isset($_SESSION['ID'])){
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
} else {
    header("Location: loginForm.php");
    exit();
}