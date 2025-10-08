<?php
session_start();
$username = $_SESSION['username'] ?? '';
$role = $_SESSION['role'] ?? '';
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css" />
  <link rel="javacript" href="script.js" />
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <title>Jackson's Internet Garden - Projects</title>
</head>

<body class="projects">
  <div class="container">
    <!-- side bar -->
    <div class="sidebar-projects-left">
      <a href="main.php"><img src="assets/logo.png" class="logo" /> </a>
      <img src="assets/starsgrey.gif" class="divider-projects" />
      <h2 class="sidebar-title">Navigation</h2>
      <img src="assets/starsgrey.gif" class="divider-projects" />
      <ul class="sidebar-list">
        <li><a href="main.php">Home</a></li>
        <li><a href="videogames.php">Video Games</a></li>
        <li><a href="music.php">Music</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="resources.php">Resources</a></li>
        <li><a href="about.php">About Me</a></li>
        <?php if ($username): ?>
          <form action="logout.php" method="post" style="display:inline">
            <button type="submit" class="logout-btn">Logout</button>
          </form>
        <?php endif; ?>
      </ul>
      <img src="assets/starsgrey.gif" class="divider-projects" />
      <img
        src="assets/home-accents/gardenbutton.gif"
        class="garden-button" />
    </div>
    <div class="main-content-project">
      <!-- Header of the main home landing page-->
      <div class="header-project">
        <h1 class="titleHOME">Projects</h1>
        <?php if ($username): ?>
          <p class="user-info">Logged in as <?= htmlspecialchars($username) ?>
            <?= $role ? ' (' . htmlspecialchars($role) . ')' : '' ?></p>
        <?php endif; ?>
        <p class="flvrHOME">
          Just some insight into some of my other creative interests.
        </p>
      </div>
      <div class="currently-working-project">
        <div class="curr-title">
          <h2 class="introHOME-title">Currently Showcased Project:</h2>
        </div>

        <div class="project-container">
          <div class="project-display">
            <a
              href="indev.php">
              <img
                src="assets/music-accents/music-covers/"
                class="curr-project"
                alt="project thumbnail" /></a>
            <p>2005 EMac Restoration</p>
          </div>
        </div>
      </div>

      <div class="project-posts">
        <h2 class="introHOME-title">Recent Project Posts</h2>
        <div class="recent-post-list">
          <div class="flex-items-pro">
            <a href="indev.php">
              <img src="assets/projects-posts/" alt="Project Thumbnail" class="project-img-post">
            </a>
            <div class="project-text-ele">
              <a href="indev.php">
                <h2 style="color: white; text-decoration: underline;">Collage of Images I Like</h2>
              </a>
              <p class="preview-text"></p>
            </div>
          </div>
          <div class="flex-items-pro">
            <a href="indev.php">
              <img src="assets/projects-posts/" alt="Project Thumbnail" class="project-img-post">
            </a>
            <div class="project-text-ele">
              <a href="indev.php">
                <h2 style="color: white; text-decoration: underline;">Begining to Learn Basic Electronics</h2>
              </a>
              <p class="preview-text"></p>
            </div>
          </div>
          <div class="flex-items-pro">
            <a href="indev.php">
              <img src="assets/projects-posts/" alt="Project Thumbnail" class="project-img-post">
            </a>
            <div class="project-text-ele">
              <a href="indev.php">
                <h2 style="color: white; text-decoration: underline;">Switch to Physical Media</h2>
              </a>
              <p class="preview-text"></p>
            </div>
          </div>
          <div class="flex-items-pro">
            <a href="indev.php">
              <img src="assets/projects-posts/" alt="Project Thumbnail" class="project-img-post">
            </a>
            <div class="project-text-ele">
              <a href="indev.php">
                <h2 style="color: white; text-decoration: underline;">Development of this Website</h2>
              </a>
              <p class="preview-text"></p>
            </div>
          </div>
          <div class="flex-items-pro">
            <a href="indev.php">
              <img src="assets/projects-posts/" alt="Project Thumbnail" class="project-img-post">
            </a>
            <div class="project-text-ele">
              <a href="indev.php">
                <h2 style="color: white; text-decoration: underline;">2005 Apple EMac Restoration</h2>
              </a>
              <p class="preview-text"></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sidebar-projects-right">
      <img src="assets/starsgrey.gif" class="divider-projects" />
      <div class="btn-home">
        <img src="assets/projects-accents/gardenbutton.gif" class="btn-att" />
        <img src="assets/projects-accents/gimp.gif" class="btn-att" />

        <img src="assets/projects-accents/github.gif" class="btn-att" />
        <img src="assets/projects-accents/htmldream.gif" class="btn-att" />

        <img src="assets/projects-accents/now.jpg" class="btn-att" />
        <img src="assets/projects-accents/vscbutton.gif" class="btn-att" />
      </div>
      <img src="assets/starsgrey.gif" class="divider-projects" />
      <div class="blinkies-home"></div>
      <img src="assets/starsgrey.gif" class="divider-projects" />
    </div>
  </div>
</body>

</html>