<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
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


        <div id="cardPagegridContainer">
            <div id="cardPage-title">
                <h1>My Projects</h1>
            </div>
            <section id="mainContentContainer">
                <div class="card-row">
                    <div class="card">
                        <img src="./Images/projectGameImg.png">
                        <div class="card-content">
                            <h2>2D top down game</h2>
                            <h3>Java, JavaFx</h3>
                            <p>A 2D platformer game that utilises multiple game mechanics, and introduces a tower of 100
                                rooms, all virtually connected to each other. Made use of algorithms suchs as Depth
                                first search.</p>
                            <a href="https://github.com/RahmanImtiaz/AlevelProject2023">Github Code</a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="./Images/codingImg1.jpg">
                        <div class="card-content">
                            <h2>Online Portfolio Website</h2>
                            <h3>HTML, CSS, JavaScript, PHP</h3>
                            <p>Front End + Back End</p>
                            <a href="">Website</a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="./Images/AIProject.jpg">
                        <div class="card-content">
                            <h2>AI for Education</h2>
                            <h3>Python, API, openAI models</h3>
                            <p>Made during the Embrace University Outreach AI Hackathon by Microsoft. This AI model help
                                students on overcoming their weeknesses and makes use of openAI's api. </p>
                            <a href="https://github.com/nm-04/hackathon-24">GitHub Code</a>
                        </div>
                    </div>
                </div>
            </section>




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