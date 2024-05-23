<?php
    session_start();
    if (isset($_SESSION['ID']) && $_SESSION['ID'] == 1 && isset($_POST['BLOG_ID'])) {
        $blog_id = $_POST['BLOG_ID'];

        require_once 'connect.php';

        // Delete comments associated with the blog
        $sql = "DELETE FROM COMMENTS WHERE BLOG_ID = $blog_id";

        if ($conn->query($sql) !== TRUE) {
            echo "Error deleting comments: " . $conn->error;
        }

        // Delete the blog after deleting the comments
        $sql = "DELETE FROM POSTS WHERE BLOG_ID = $blog_id";

        if ($conn->query($sql) === TRUE) {
            header('Location: viewBlog.php');
        } else {
            echo "Error deleting blog: " . $conn->error;
        }

        $conn->close();
    }
?>