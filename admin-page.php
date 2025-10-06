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
  <title>Jackson's Internet Garden - Admin Page</title>
</head>

<body class="panel">
  <div class="container">
    <!-- side bar -->
    <div class="sidebar-panel-left">
      <a href="main.php"><img src="assets/logo.png" class="logo" /> </a>
      <img src="assets/starsgrey.gif" class="divider-panel" />
      <h2 class="sidebar-title">Navigation</h2>
      <img src="assets/starsgrey.gif" class="divider-panel" />
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
      <img src="assets/starsgrey.gif" class="divider-panel" />
      <img
        src="assets/home-accents/gardenbutton.gif"
        style="padding-top: 20px" />
    </div>
    <div class="main-content-panel">
      <!-- Header of the main home landing page-->
      <div class="header-panel">
        <h1 class="titleHOME">Admin Panel</h1>
        <?php if ($username): ?>
          <p class="user-info">Logged in as <?= htmlspecialchars($username) ?>
            <?= $role ? ' (' . htmlspecialchars($role) . ')' : '' ?></p>
        <?php endif; ?>
      </div>

    </div>
    <div class="sidebar-panel-right">
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