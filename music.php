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
  <title>Jackson's Internet Garden - Music</title>
</head>

<body class="music">
  <div class="container">
    <!-- side bar -->
    <div class="sidebar-music-left">
      <a href="main.php"><img src="assets/logo.png" class="logo" /> </a>
      <img src="assets/planets.png" class="divider-music" />
      <h2 class="sidebar-title">Navigation</h2>
      <img src="assets/planets.png" class="divider-music" />
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
      <img src="assets/planets.png" class="divider-music" />
      <img
        src="assets/home-accents/gardenbutton.gif"
        class="garden-button" />
    </div>

    <div class="main-content-music">
      <!-- Header of the main home landing page-->
      <div class="header">
        <h1 class="titleHOME">Music</h1>
        <?php if ($username): ?>
          <p class="user-info">Logged in as <?= htmlspecialchars($username) ?>
            <?= $role ? ' (' . htmlspecialchars($role) . ')' : '' ?></p>
        <?php endif; ?>
        <p class="flvrHOME">
          This is where I'll talk about some of my favorite bands/musicians,
          and what I've been listening to recently.
        </p>
      </div>
      <div class="currently-listening">
        <div class="curr-title">
          <h2 class="introHOME-title">What I'm Currently Listening To:</h2>
          <!--WHAT IM LISTENING TO UPDATE TIME-->
          <p style="color: white; color: #e5e764ff">as of July 10th, 2025</p>
        </div>

        <div class="album-container">
          <div class="music-display">
            <a
              href="https://open.spotify.com/album/7dJPDPUi94jA91VxG4vZb3?si=riXerinhT9i32wcOoHzMfA">
              <img
                src="assets/music-accents/music-covers/mitec.jpg"
                class="curr-listening" /></a>
            <p>Men I Trust - Equus Caballus</p>
          </div>

          <div class="music-display">
            <a
              href="https://open.spotify.com/album/4lVMhVIgEdxIoTu7gS7CoT?si=iYgUTWPoT3CPFAjDgoigmw">
              <img
                src="assets/music-accents/music-covers/flh.jpg"
                class="curr-listening" /></a>
            <p>feeble little horse - Girl with Fish</p>
          </div>

          <div class="music-display">
            <a
              href="https://open.spotify.com/album/6ChJPrYiWkcJeEWIDKDE48?si=eS-H6GgGRiSJ7Bp99Jlk6w">
              <img
                src="assets/music-accents/music-covers/shesgreen.jpg"
                class="curr-listening" /></a>
            <p>she's green - Wisteria</p>
          </div>
        </div>
      </div>

      <!-- MUSIC BOARD POSTS-->
      <div class="music-posts">
        <h2 class="introHOME-title">Recent Music Posts</h2>
        <h4>Click the titles to read more!</h4>
        <!-- START LIST OF BOARD POSTS -->
        <div class="recent-post-list">
          <!-- INDIVIDUAL BOARD POST -->
          <div class="flex-items-music">
            <!--ALBUM ART -->
            <a href="https://notdummy.bandcamp.com/album/dumb-eps-2">
              <img src="assets/music-posts/covers/dummy.jpg" alt="Album Art" class="music-img-post">
            </a>
            <!-- TEXT ELEMENTS -->
            <div class="music-text-ele">
              <a href="indev.php">
                <h2 style="color: white; text-decoration: underline;">Dummy - Dumb EPs (2025)</h2>
              </a>
              <h4 style="color: #c5c762ff">Alternative/Indie</h4>
              <p class="preview-text"></p>
            </div>
          </div>
          <!-- REPEAT -->
          <div class="flex-items-music">
            <a href="https://swordii.bandcamp.com/album/spirit-world-tour">
              <img src="assets/music-posts/covers/sword2.jpg" alt="Album Art" class="music-img-post">
            </a>
            <div class="music-text-ele">
              <a href="indev.php">
                <h2 style="color: white; text-decoration: underline;">Sword II - Spirit World Tour (2023)</h2>
              </a>
              <h4 style="color: #c5c762ff">Alternative/Indie</h4>
              <p class="preview-text"></p>
            </div>
          </div>
          <div class="flex-items-music">
            <a href="https://wetleg.bandcamp.com/album/moisturizer">
              <img src="assets/music-posts/covers/moisturizer.jpg" alt="Album Art" class="music-img-post">
            </a>
            <div class="music-text-ele">
              <a href="indev.php">
                <h2 style="color: white; text-decoration: underline;">Wet Leg - Moisturizer (2025)</h2>
              </a>
              <h4 style="color: #c5c762ff">Alternative/Indie</h4>
              <p></p>
            </div>
          </div>
          <div class="flex-items-music">
            <a href="indev.php">
              <img src="assets/music-posts/covers/rocket.jpg" alt="Album Art" class="music-img-post">
            </a>
            <div class="music-text-ele">
              <a href="https://rockettheband.bandcamp.com/album/r-is-for-rocket">
                <h2 style="color: white; text-decoration: underline;">Rocket - R is for Rocket (2025)</h2>
              </a>
              <h4 style="color: #c5c762ff">Alternative/Indie</h4>
              <p class="preview-text"></p>
            </div>
          </div>
          <div class="flex-items-music">
            <a href="https://geesebandnyc.bandcamp.com/album/getting-killed">
              <img src="assets/music-posts/covers/gettingkilled.jpg" alt="Album Art" class="music-img-post">
            </a>
            <div class="music-text-ele">
              <a href="indev.php">
                <h2 style="color: white; text-decoration: underline;">Geese - Getting Killed (2025)</h2>
              </a>
              <h4 style="color: #c5c762ff">Alternative/Indie</h4>
              <p class="preview-text"></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sidebar-music-right">
      <img src="assets/music-accents/radio.gif" class="music-logo" />
      <img src="assets/planets.png" class="divider-music-right" />
      <div class="btn-home">
        <img src="assets/music-accents/disccontent.gif" class="btn-att" />
        <img src="assets/music-accents/nekojiru2.gif" class="btn-att" />

        <img src="assets/music-accents/ravenow3.gif" class="btn-att" />
        <img src="assets/music-accents/plasticlove.gif" class="btn-att" />

        <a
          href="https://open.spotify.com/user/jacksoncity101?si=02a542503bcc4139"><img src="assets/music-accents/spotify.gif" class="btn-att" /></a>
        <img src="assets/music-accents/volta.gif" class="btn-att" />
      </div>
      <img src="assets/planets.png" class="divider-music-right" />
      <div class="blinkies-home">
        <img src="assets/music-accents/e116.gif" class="btn-att" />
        <img src="assets/music-accents/pigsfly.gif" class="btn-att" />
        <img src="assets/music-accents/k29.gif" class="btn-att" />
        <img src="assets/music-accents/x14.gif" class="btn-att" />
        <img src="assets/music-accents/e107.gif" class="btn-att" />
      </div>
      <img src="assets/planets.png" class="divider-music-right" />
    </div>
  </div>
</body>

</html>