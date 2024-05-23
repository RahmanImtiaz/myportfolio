<?php
session_start(); // Start the session
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
        <div id="gridContainer">
            <section id="intro" class="mainContentSection">
                <div class="text-over-image">
                    <h1>I am <span>Rahman Imtiaz</span></h1>
                    <code></code>

                </div>
            </section>

            <div id="mainContentContainer">

                <section id="aboutme" class="mainContentSection">
                    <article class="imgParagraphs">
                        <h1>About Me</h1>
                        <p>My name is Rahman Imtiaz, and I am a computer science student. I am a passionate programmer
                            that is always eager to learn new technologies and improve my skills. </p>
                        <br>
                        <p>I am currently looking for a placement opportunity where I can apply my knowledge and skills
                            in computer science. I am particularly interested in roles related to software development,
                            data analysis, or machine learning. </p>
                    </article>
                    <figure>
                        <img id="profile-picture" src="./Images/AboutMeemoji.png" alt="Profile Picture">
                    </figure>
                </section>

                <section id="education" class="mainContentSection">
                    <h1>Education</h1>

                    <div class="section zoom">
                        <h3>Queen Mary University of London</h3>
                        <h4>Msci Computer Science</h4>
                        <p>2023 - Current</p>
                    </div>

                    <div class="section zoom">
                        <h3>Dormers Wells High School</h3>
                        <h4>A Level | Maths, Computer Science, Physics, EPQ | A*A*AA</h4>
                        <p>2021 - 2023</p>
                    </div>

                </section>

                <section id="skills" class="mainContentSection">
                    <h1>Skills</h1>
                    <div class="scroller">
                        <ul class="tag-list scroller-inner">
                            <li>Java</li>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                            <li>Python</li>
                            <li>SQL</li>
                        </ul>
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