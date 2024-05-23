<?php
    // Include the database connection file
    require_once 'connect.php'; 
    

    // get blog post from database
    $id = intval($_GET['BLOG_ID']); // Ensure the id is an integer
    $sql = "SELECT title, content, post_datetime FROM POSTS WHERE BLOG_ID = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $post = $result->fetch_assoc();
    } else {
        echo "No post found with the given ID";
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./CSS/reset.css">
    <link rel="stylesheet" href="./CSS/style1.css">
    <link rel="stylesheet" type="text/css" href="./CSS/mobile.css" media="screen and (max-width: 867px)">

</head>

<body>
    <header>
        <h1><a id="logo" href="index.php">
                < R I />
            </a></h1>
            <?php include 'navbar.php'; ?>
    </header>
    <main>
        <div id="gridContainerSecondPage">

            <section id="secondPageTitle">
                <div id="cardPage-title">
                    <h1><?php echo $post["title"]; ?></h1>
                </div>
                <h2><?php echo (new DateTime($post["post_datetime"], new DateTimeZone('Europe/London')))->setTimezone(new DateTimeZone('UTC'))->format('jS F Y, H:i T'); ?></h2>
            </section>

            <div id="mainContentContainer">
                <section class="mainContentSection">

                    <p><?php echo nl2br($post["content"]); ?></p>

                </section>

                <section class="mainComentSection">

                    <h1>Comments</h1>
                    <?php
                        // Check if user is logged in
                        if (isset($_SESSION['ID'])) {
                            // User is logged in. Show comment form
                            echo '<form action="addComment.php" method="post" id="commentForm">
                                    <input type="hidden" name="USER_ID" value="' . $_SESSION['ID'] . '">
                                    <input type="hidden" name="BLOG_ID" value="' . $id . '">
                                    <textarea id="commentTextArea" name="comment" placeholder="Enter your comment here" required></textarea>
                                    <button id="commentSubmit" type="submit" name="submit" class="submit-btn">Post</button>
                                </form>';
                        } else {
                            // User is not logged in. Show message
                            echo "<p>Please <a href='loginForm.php'>login</a> to post a comment</p>";
                        }
                    ?>

                    <div id="commentsContentSection">
                    <?php

                        $sql = "SELECT COMMENTS.*, USERS.firstName 
                        FROM COMMENTS 
                        INNER JOIN USERS ON COMMENTS.USER_ID = USERS.ID 
                        WHERE COMMENTS.BLOG_ID = $id 
                        ORDER BY COMMENTS.comment_datetime DESC";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<div class='message-box'>";
                                    echo "<div class='messageDetails'>";
                                        echo "<p>" . $row['firstName'] . "</p>";
                                        echo "<p>" . (new DateTime($row['comment_datetime'], new DateTimeZone('Europe/London')))->setTimezone(new DateTimeZone('UTC'))->format('d/m/y g:i A T') . "</p>";                                    
                                    echo "</div>";
                                    echo "<p>" . $row['comment'] . "</p>";
                                    if (isset($_SESSION['ID']) && $_SESSION['ID'] == 1) {
                                        echo "<form class='deleteCommentForm' method='POST' action='deleteComment.php'>";
                                        echo "<input type='hidden' name='COMMENT_ID' value='" . $row['COMMENT_ID'] . "'>";
                                        echo "<input type='hidden' name='BLOG_ID' value='" . $row['BLOG_ID'] . "'>"; 
                                        echo "<button type='submit' class='deleteButton'>Delete</button>";
                                        echo "</form>";
                                    }
                                echo "</div>";
                            }
                        } else {
                            echo "<p class='noneFoundMsg'> No comments found for this post. </p>";
                        }
                    ?>
                    </div>

                </section>
            </div>

            <footer>
                <div class="footerSection">

                    <div class="footerLinks">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="projects.php" class="navItems">Projects</a></li>
                            <li><a href="viewBlog.php" class="navItems">Blogs</a></li>
                            <li><a href="addEntry.php">Add Blog</a></li>
                            <li><a href="loginForm.php">Login</a></li>
                        </ul>
                    </div>

                </div>
                <div class="socials">
                    <a href="https://www.linkedin.com/in/rahman-imtiaz/"><img src="./Images/linkedInIcon.jpg" alt="linkedin"
                            class="iconImgs"></a>
                    <a href="https://github.com/RahmanImtiaz"><img src="./Images/githubIcon.jpg" alt="github"
                            class="iconImgs"></a>
                    <a href="mailto:rahmanimtiaz1@gmail.com"><img src="./Images/emailIcon.jpg" alt="email" class="iconImgs"></a>
                </div>
                <p>Copyright &copy; 2024 Rahman Imtiaz</p>
            </footer>
        </div>

    </main>

    <script src="./JavaScript/script.js"></script>


</body>

</html>