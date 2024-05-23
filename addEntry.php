<?php
session_start();

// Check if user is logged in and is an admin
if (!isset($_SESSION['ID']) || $_SESSION['ID'] != 1) {
    // User is not logged in and/or not admin. Redirect them to the login page
    header("Location: loginForm.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
    <link rel="stylesheet" href="./CSS/reset.css">
    <link rel="stylesheet" href="./CSS/style1.css">
    <link rel="stylesheet" type="text/css" href="./CSS/mobile.css" media="screen and (max-width: 867px)">

</head>

<body id="blogBody">
    <header id="formHeader">
        <h1><a id="logo" href="index.php">
                < R I />
            </a></h1>
            <?php include 'navbar.php'; ?>
    </header>

    <main class="formMain">

        <aside class="WelcomeMsg">
            <?php
                if (isset($_SESSION['msg'])) {
                    echo "<p>" . $_SESSION['msg'] . "</p>";
                    unset($_SESSION['msg']);
                }
            ?>
        </aside>

        <section class="Form-box Blog-Form-box">
            <form class="Blog-form" action="addPost.php" method="post">
                <h1>Add Blog</h1>

                <input type="text" id="BlogTitle" name="BlogTitle" placeholder="Title" required>
                
                <label for="BlogContent">Blog Content</label>
                <textarea type="text" name="BlogContent" id="BlogContent" placeholder="Enter your blog text here" required></textarea>


                <div class="blog-button-box">
                    <button type="submit" name="submit" class="submit-btn" id="blogButton">Post</button>
                    <button id="clearButton" type="reset" class="submit-btn">Clear</button>
                </div>
            </form>
        </section>

    </main>
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

    <script src="./JavaScript/script.js"></script>
</body>

</html>