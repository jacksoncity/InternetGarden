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
  <title>Jackson's Internet Garden - Blog</title>
</head>

<body class="blog">
  <div class="container">
    <!-- side bar -->
    <div class="sidebar-blog-left">
      <a href="main.php"><img src="assets/logo.png" class="logo" /> </a>
      <img src="assets/dividerblog.gif" class="divider-blog" />
      <h2 class="sidebar-title">Navigation</h2>
      <img src="assets/dividerblog.gif" class="divider-blog" />
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
      <img src="assets/dividerblog.gif" class="divider-blog" />
      <img
        src="assets/home-accents/gardenbutton.gif"
        style="padding-top: 20px"
        class="garden-button" />
    </div>
    <div class="main-content-blog">
      <!-- Header of the main home landing page-->
      <div class="header-blog">
        <h1 class="titleHOME">Blog</h1>
        <?php if ($username): ?>
          <p class="user-info">Logged in as <?= htmlspecialchars($username) ?>
            <?= $role ? ' (' . htmlspecialchars($role) . ')' : '' ?></p>
        <?php endif; ?>
        <p class="flvrHOME">
          Read about things that I feel like writing about
        </p>
      </div>

      <div class="featured-blog-post">
        <div class="curr-title">
          <h2 class="introHOME-title">Featured Blog Post:</h2>
        </div>

        <div class="blog-container">
          <div class="flex-items-blog">
            <a href="indev.php" target="_blank">
              <img src="assets/blog-accents/blog-thumbnails/coolcat.jpg" alt="Blog Thumbnail" class="curr-blog">
            </a>
            <div class="project-text-ele">
              <a href="indev.php" target="_blank">
                <h2 class="post-title">Placeholder Featured Blog</h2>
              </a>
              <p class="preview-text"> Blah Blah Blah Blah Blah Blah </p>
            </div>
          </div>
        </div>
      </div>

      <div class="blog-posts">
        <h2 class="introHOME-title">Recent Blog Posts</h2>
        <div class="recent-post-list">

          <div class="flex-items-blog">
            <a href="indev.php" target="_blank">
              <img src="assets/blog-accents/blog-thumbnails/coolcat.jpg" alt="Blog Thumbnail" class="curr-blog">
            </a>
            <div class="project-text-ele">
              <a href="indev.php" target="_blank">
                <h2 class="post-title">Placeholder Title</h2>
              </a>
              <p class="preview-text"> Blah Blah Blah Blah Blah Blah </p>
            </div>
          </div>

          <div class="flex-items-blog">
            <div class="project-text-ele">
              <a href="indev.php" target="_blank">
                <h2 class="post-title">Placeholder Title</h2>
              </a>
              <p class="preview-text"> Blah Blah Blah Blah Blah Blah </p>
            </div>
          </div>

          <div class="flex-items-blog">
            <a href="indev.php" target="_blank">
              <img src="assets/blog-accents/blog-thumbnails/coolcat.jpg" alt="Blog Thumbnail" class="curr-blog">
            </a>
            <div class="project-text-ele">
              <a href="indev.php" target="_blank">
                <h2 class="post-title">Placeholder Title</h2>
              </a>
              <p class="preview-text"> Blah Blah Blah Blah Blah Blah </p>
            </div>
          </div>

          <div class="flex-items-blog">
            <div class="project-text-ele">
              <a href="indev.php" target="_blank">
                <h2 class="post-title">Placeholder Title</h2>
              </a>
              <p class="preview-text"> Blah Blah Blah Blah Blah Blah </p>
            </div>
          </div>

          <div class="flex-items-blog">
            <a href="indev.php" target="_blank">
              <img src="assets/blog-accents/blog-thumbnails/coolcat.jpg" alt="Blog Thumbnail" class="curr-blog">
            </a>
            <div class="project-text-ele">
              <a href="indev.php" target="_blank">
                <h2 class="post-title">Placeholder Title</h2>
              </a>
              <p class="preview-text"> Blah Blah Blah Blah Blah Blah </p>
            </div>
          </div>
        </div>
        <h2 class="introHOME-title"><a href="indev.php">[ Archive ]</a></h2>
      </div>
    </div>

    <div class="sidebar-blog-right">
      <img src="assets/blog-accents/computer.gif" class="blog-logo" />
      <img src="assets/dividerblog.gif" class="divider-blog-right" />
      <div class="btn-home">
        <img src="assets/blog-accents/dontleave.gif" class="btn-att" />
        <img src="assets/blog-accents/internet-roadkill.gif" class="btn-att" />

        <a href="https://www.firefox.com/en-US/?utm_campaign=SET_DEFAULT_BROWSER" target="_blank"><img src="assets/blog-accents/fftake.gif" class="btn-att-link" /></a>
        <img src="assets/blog-accents/stop.gif" class="btn-att" />

        <img src="assets/blog-accents/parental.gif" class="btn-att" />
        <img src="assets/blog-accents/kys_now.gif" class="btn-att" />

        <img src="assets/blog-accents/screw.gif" class="btn-att" />
        <img src="assets/blog-accents/bestviewedcomp.gif" class="btn-att" />
      </div>
      <img src="assets/dividerblog.gif" class="divider-blog-right" />
      <div class="blinkies-home">
        <img src="assets/blog-accents/bitemeblinkie.gif" class="btn-att" />
        <img src="assets/blog-accents/doxx.gif" class="btn-att" />
        <img src="assets/blog-accents/load.gif" class="btn-att" />
        <img src="assets/blog-accents/x8.gif" class="btn-att" />
        <img src="assets/blog-accents/v77.gif" class="btn-att" />
        <img src="assets/blog-accents/monstersofthedeep.gif" class="btn-att" />
        <img src="assets/blog-accents/nightperson.gif" class="btn-att" />
      </div>
      <img src="assets/dividerblog.gif" class="divider-blog-right" />
    </div>
  </div>
</body>

</html>