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
  <title>Jackson's Internet Garden - Videogames</title>
</head>

<body class="videogames">
  <div class="container">
    <!-- side bar -->
    <div class="sidebar-videogames-left">
      <a href="main.php"><img src="assets/logo.png" class="logo" /> </a>
      <img src="assets/dividervg.gif" class="divider-vg" />
      <h2 class="sidebar-title">Navigation</h2>
      <img src="assets/dividervg.gif" class="divider-vg" />
      <ul class="sidebar-list-vg">
        <li><a href="main.php">Home</a></li>
        <li><a href="videogames.php">Video Games</a></li>
        <li><a href="music.php">Music</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="resources.php">Resources</a></li>
        <li><a href="about.php">About Me</a></li>
      </ul>
      <img src="assets/dividervg.gif" class="divider-vg" />
      <img
        src="assets/home-accents/gardenbutton.gif"
        style="padding-top: 20px" />
    </div>
    <div class="main-content-vg">
      <!-- Header of the main home landing page-->
      <div class="header">
        <h1 class="titleHOME">Videogames</h1>
        <p class="flvrHOME">
          This is where I'll talk about some of my favorite games, and what
          I've been playing recently.
        </p>
      </div>
      <div class="currently-playing-vg">
        <div class="curr-title">
          <h2 class="introHOME-title">What I'm Currently Playing:</h2>
          <!--WHAT IM PLAYING UPDATE TIME-->
          <p style="color: white">as of July 10th, 2025</p>
        </div>

        <div class="album-container">
          <div class="pic-display">
            <img
              src="assets/vg-accents/boxart/p5tact.jpg"
              class="curr-playing-img" />
            <p>Persona 5: Tactica</p>
          </div>
          <div class="pic-display">
            <img
              src="assets/vg-accents/boxart/mgs.jpg"
              class="curr-playing-img" />
            <p>Metal Gear Solid</p>
          </div>
          <div class="pic-display">
            <img
              src="assets/vg-accents/boxart/raidou.jpg"
              class="curr-playing-img" />
            <p>RAIDOU Remastered: The Mystery of the Soulless Army</p>
          </div>
        </div>
      </div>
      <div class="vg-posts">
        <h2 class="introHOME-title">Recent Videogame Posts</h2>
        <div class="recent-post-list">
          <div class="flex-items-vg">
            <h2 style="color: white">Test 1</h2>
          </div>
          <div class="flex-items-vg">
            <h2 style="color: white">Test 2</h2>
          </div>
          <div class="flex-items-vg">
            <h2 style="color: white">Test 3</h2>
          </div>
          <div class="flex-items-vg">
            <h2 style="color: white">Test 4</h2>
          </div>
          <div class="flex-items-vg">
            <h2 style="color: white">Test 5</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="sidebar-videogames-right">
      <img src="assets/vg-accents/joystick.gif" class="vg-logo" />
      <img src="assets/dividervg.gif" class="divider-vg-right" />
      <div class="btn-home">
        <img src="assets/vg-accents/fl-squall.gif" class="btn-att" />
        <img src="assets/vg-accents/blink-0.gif" class="btn-att" />

        <img src="assets/vg-accents/persona.gif" class="btn-att" />
        <img src="assets/vg-accents/stardew_valley.gif" class="btn-att" />

        <a href="https://steamcommunity.com/id/jacksoncity/"><img src="assets/vg-accents/steam.gif" class="btn-att" /></a>
        <img src="assets/vg-accents/vocaloid.gif" class="btn-att" />

        <img src="assets/vg-accents/cs3.gif" class="btn-att" />
        <img src="assets/vg-accents/newlambda.gif" class="btn-att" />

        <img src="assets/vg-accents/emulate.gif" class="btn-att" />
        <img src="assets/vg-accents/gamefly-88x31.gif" class="btn-att" />

        <img src="assets/vg-accents/bob.gif" class="btn-att" />
        <img src="assets/vg-accents/pokemon.gif" class="btn-att" />
      </div>
      <img src="assets/dividervg.gif" class="divider-vg-right" />
      <div class="blinkies-home">
        <img src="assets/vg-accents/h20.gif" class="btn-att" />
        <img src="assets/vg-accents/ren.gif" class="btn-att" />
        <img src="assets/vg-accents/bulb.gif" class="btn-att" />
        <img src="assets/vg-accents/iheartTES.gif" class="btn-att" />
        <img src="assets/vg-accents/d22.gif" class="btn-att" />
        <img src="assets/vg-accents/z14.gif" class="btn-att" />
        <img src="assets/vg-accents/v66.gif" class="btn-att" />
        <img src="assets/vg-accents/vi16.gif" class="btn-att" />
        <img src="assets/vg-accents/bug.gif" class="btn-att" />
      </div>
      <img src="assets/dividervg.gif" class="divider-vg-right" />
    </div>
  </div>
</body>

</html>