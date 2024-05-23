<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['ID'])) {
    // User is logged in. Redirect them to the index page
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/reset.css">
    <link rel="stylesheet" href="./CSS/style1.css">
    <link rel="stylesheet" type="text/css" href="./CSS/mobile.css" media="screen and (max-width: 867px)">

</head>

<body id="loginBody">
    <header id="formHeader">
        <h1><a id="logo" href="index.php">
                < R I />
            </a></h1>
        <?php include 'navbar.php'; ?>
    </header>

    <main class="formMain">

        <section class="Form-box" id="Login-Form-box">
            <form class="Login-form" action="login.php" method="post">
                <h1>Login</h1>
                <div class="loginMsg">
                    <?php
                        if (isset($_SESSION['msg'])) {
                            echo "<p>" . $_SESSION['msg'] . "</p>";
                            unset($_SESSION['msg']);
                        }
                    ?>
                </div>
                <input type="email" name="Email" placeholder="Email" id="email" required>
                <input type="password" name="Password" placeholder="Password" id="password" required>
                <a href="signUpForm.php">Sign Up</a>
                <button type="submit" name="submit" class="submit-btn">Submit</button>
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