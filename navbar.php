<?php
session_start();
?>
<nav>
    <ul>
        <li><a href="index.php#aboutme">About Me</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="experience.php">Experience</a></li>
        <li><a href="viewBlog.php">Blog</a></li>
        <?php if (isset($_SESSION['ID']) && $_SESSION['ID']==1): ?>
            <li><a id="loggedInNav"><?php echo $_SESSION['firstName'] . ' ' . $_SESSION['lastName']; ?> ▼</a>
                <ul class="dropdown">
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="addEntry.php">Add Blog</a></li>
                </ul>
            </li>
        <?php elseif (isset($_SESSION['ID']) && $_SESSION['ID'] > 1): ?>
            <li><a id="loggedInNav"><?php echo $_SESSION['firstName'] . ' ' . $_SESSION['lastName']; ?> ▼</a>
                <ul class="dropdown">
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </li>
        <?php else: ?>
            <li><a id="loggedOutNav" href="loginForm.php">Login</a></li>
        <?php endif; ?>
     </ul>
</nav>