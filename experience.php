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
                    <h1>Experience</h1>
                </div>
            </section>

            <div id="mainContentContainer">
                <section class="mainContentSection">

                    <h1>Experience</h1>

                    <div class="section zoom">
                        <h3>Microsoft Hackathon</h3>
                        <h4>Microsoft EMBRACE</h4>
                        <p>Mar 2024</p>
                    </div>

                    <div class="section zoom">
                        <h3>Web Development | Virtual Work Experience</h3>
                        <h4>Moreton Bay Regional Council</h4>
                        <p>Mar 2024</p>
                    </div>

                    <div class="section zoom">
                        <h3>1 to 1 Tutor</h3>
                        <h4>Dormers Wells High School</h4>
                        <p>Oct 2021 - Mar 2023</p>
                    </div>
                </section>

                <section class="mainContentSection">
                    <h1>Qualifications</h1>

                    <div class="section zoom">
                        <h3>Duke of Edinburgh Award</h3>
                        <h4>Bronze | Achieved</h4>
                        <p>2021</p>
                    </div>

                    <div class="section zoom">
                        <h3>UKMT Senior Mathematical Challenge</h3>
                        <h4>Gold Award | Achieved</h4>
                        <p>2021</p>
                    </div>

                    <div class="section zoom">
                        <h3>UK Bebras Challenge | Elite</h3>
                        <h4>Certificate of Distinction | Achieved</h4>
                        <p>2021</p>
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