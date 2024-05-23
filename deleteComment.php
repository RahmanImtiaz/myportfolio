<?php
    session_start();
    if (isset($_SESSION['ID']) && $_SESSION['ID'] == 1 && isset($_POST['COMMENT_ID'])) {
        $id = $_POST['COMMENT_ID'];
        $blog_id = $_POST['BLOG_ID'];

        require_once 'connect.php';

        $sql = "DELETE FROM COMMENTS WHERE COMMENT_ID = $id";

        if ($conn->query($sql) === TRUE) {
            header('Location: blogTemplate.php?BLOG_ID=' . $blog_id);
        } else {
            echo "Error deleting comment: " . $conn->error;
        }

        $conn->close();
    }
?>