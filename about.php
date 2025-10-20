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
  <title>Jackson's Internet Garden - About Me</title>
</head>

<body class="about">
  <div class="container">
    <!-- side bar -->
    <div class="sidebar-about-left">
      <a href="main.php"><img src="assets/logo.png" class="logo" /> </a>
      <img src="assets/dividerabout.gif" class="divider-about" />
      <h2 class="sidebar-title">Navigation</h2>
      <img src="assets/dividerabout.gif" class="divider-about" />
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
      <img src="assets/dividerabout.gif" class="divider-about" />
      <img
        src="assets/home-accents/gardenbutton.gif"
        style="padding-top: 20px"
        class="garden-button" />
    </div>
    <div class="main-content-about">
      <!-- Header of the main home landing page-->
      <div class="header-about">
        <h1 class="titleABOUT"><span>About Me</span></h1>
        <?php if ($username): ?>
          <p class="user-info">Logged in as <?= htmlspecialchars($username) ?>
            <?= $role ? ' (' . htmlspecialchars($role) . ')' : '' ?></p>
        <?php endif; ?>
        <p class="flvrABOUT">
          <span> Curious about the creator of this website?</span>
        </p>
      </div>
      <div class="about-page-main">
        <h1>What's up! I'm Jackson, the creator of this website.</h1>
        <br>
        <p>I am in my mid 20's and am from the United States. Ever since I could be on a computer I was on one so for a lot of my life I've been interested in learning as much as I can about them.
          I even ended up graduating from college for Computer Science. For a while now I've been interested in web design but have never been able to apply the aesthetics that I want in order to get me interested.
          I see this as a way to express my facination with the early internet, and an attempt to return to a less corporate feel to the place that I, and I assume you if you are here, regularly visit to relax and escape.</p>

      </div>
    </div>
  </div>
</body>

</html>