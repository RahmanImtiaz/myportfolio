<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
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
                <h1>My Blog</h1>
            </div>
            <div id="mainContentContainer">

                <div class="MainBlogPageContainer">
                    
                    <?php
                        // Include the database connection file
                        require_once 'connect.php';

                        // get blog posts from database
                        $sql = "SELECT BLOG_ID, title, content, post_datetime FROM POSTS";
                        $result = $conn->query($sql);

                        $posts = array();

                        if ($result->num_rows > 0) {
                            // stores data of each row in array
                            while($row = $result->fetch_assoc()) {
                                $posts[] = $row;
                            }
                        } else {
                            echo "<p class='noneFoundMsg'>No blog posts found</p>";
                        }

                        // group posts by month and year
                        $postsByMonth = array();
                        foreach ($posts as $post) {
                            $date = new DateTime($post['post_datetime']);
                            $monthYear = $date->format('F Y');

                            if (!isset($postsByMonth[$monthYear])) {
                                $postsByMonth[$monthYear] = array();
                            }

                            $postsByMonth[$monthYear][] = $post;
                        }

                        function bubbleSort($posts) {
                            $size = count($posts);
                            for ($i=0; $i<$size; $i++) {
                                for ($j=0; $j<$size-1-$i; $j++) {
                                    $dateA = new DateTime($posts[$j]['post_datetime']);
                                    $dateB = new DateTime($posts[$j+1]['post_datetime']);
                                    if ($dateA < $dateB) {
                                        // Swap the posts
                                        $temp = $posts[$j+1];
                                        $posts[$j+1] = $posts[$j];
                                        $posts[$j] = $temp;
                                    }
                                }
                            }
                            return $posts;
                        }

                        // sort posts by date within each month
                        foreach ($postsByMonth as $monthYear => $posts) {
                            
                            $postsByMonth[$monthYear] = bubbleSort($posts);

                        }

                        // sort month-year groups in ascending order - this is because the content is in reverse flex flow
                        function bubbleSortKeys($array) {
                            $keys = array_keys($array);
                            $size = count($keys);
                            for ($i=0; $i<$size; $i++) {
                                for ($j=0; $j<$size-1-$i; $j++) {
                                    $dateA = new DateTime($keys[$j]);
                                    $dateB = new DateTime($keys[$j+1]);
                                    if ($dateA > $dateB) {
                                        // Swap the keys
                                        $temp = $keys[$j+1];
                                        $keys[$j+1] = $keys[$j];
                                        $keys[$j] = $temp;
                                    }
                                }
                            }
                        
                            // Create a new array with the sorted keys
                            $sortedArray = [];
                            foreach ($keys as $key) {
                                $sortedArray[$key] = $array[$key];
                            }
                        
                            return $sortedArray;
                        }
                        
                        $postsByMonth = bubbleSortKeys($postsByMonth);

                        // display posts
                        foreach ($postsByMonth as $monthYear => $posts) {
                            echo '<div id="' . $monthYear . '" class="monthPosts card-container">';
                            echo '<h1 id="monthTitle">' . $monthYear . '</h1>';
                            echo '<div class="card-row">'; 
                            foreach ($posts as $post) {
                                echo '<div class="card">
                                <img src="./Images/redbrush-bg.jpg">
                                <div class="card-content">
                                    <h2>' . $post["title"] . '</h2>
                                    <div class="blog-details">
                                    <h3>' . (new DateTime($post["post_datetime"], new DateTimeZone('Europe/London')))->setTimezone(new DateTimeZone('UTC'))->format('jS F Y, H:i T') . '</h3>                                    </div>
                                    <p>' . $post["content"] . '</p>
                                    <a href="blogTemplate.php?BLOG_ID=' . $post['BLOG_ID'] . '">Read More</a>
                                </div>';
                                if (isset($_SESSION['ID']) && $_SESSION['ID'] == 1) {
                                    echo "<form class='deleteCommentForm' method='POST' action='deleteEntry.php'>";
                                    echo "<input type='hidden' name='BLOG_ID' value='" . $post['BLOG_ID'] . "'>"; 
                                    echo "<button type='submit' class='deleteButton'>Delete</button>";
                                    echo "</form>";
                                }
                                echo '</div>';
                            }
                            echo '</div>'; 
                            echo '</div>'; 
                        }
                        $conn->close();
                    ?>

               

                <div id="blogMenuContainer">
                    <?php
                    // create drop-down menu
                    echo '<select id="monthSelect" onchange="showPosts(this.value)">';
                    echo '<option value="all">All Posts</option>';
                    foreach ($postsByMonth as $monthYear => $posts) {
                        echo '<option value="' . $monthYear . '">' . $monthYear . '</option>';
                    }
                    echo '</select>';
                    ?>
                </div>

                </div>

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