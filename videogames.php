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
        <?php if ($username): ?>
          <form action="logout.php" method="post" style="display:inline">
            <button type="submit" class="logout-btn">Logout</button>
          </form>
        <?php endif; ?>
      </ul>
      <img src="assets/dividervg.gif" class="divider-vg" />

      <img
        src="assets/home-accents/gardenbutton.gif"
        style="padding-top: 20px"
        class="garden-button" />
    </div>
    <div class="main-content-vg">
      <!-- Header of the main home landing page-->
      <div class="header">
        <h1 class="titleHOME">Videogames</h1>
        <?php if ($username): ?>
          <p class="user-info">Logged in as <?= htmlspecialchars($username) ?>
            <?= $role ? ' (' . htmlspecialchars($role) . ')' : '' ?></p>
        <?php endif; ?>
        <p class="flvrHOME">
          This is where I'll talk about some of my favorite games, and what
          I've been playing recently.
        </p>
      </div>
      <div class="currently-playing-vg">
        <div class="curr-title">
          <h2 class="introHOME-title">What I'm Currently Playing:</h2>

          <!--WHAT IM PLAYING UPDATE TIME-->
          <p style="color: #e7d8d4">as of October 8th, 2025</p>
        </div>

        <div class="album-container">
          <div class="pic-display">
            <a href="https://store.epicgames.com/en-US/p/rocket-league" target="_blank">
              <img
                src="assets/vg-accents/boxart/Rocket_League_cover.png"
                class="curr-playing-img" />
            </a>
            <p>Rocket League</p>
          </div>
          <div class="pic-display">
            <a href="https://store.steampowered.com/app/2807960/Battlefield_6/" target="_blank">
              <img
                src="assets/vg-accents/boxart/bf6.jpg"
                class="curr-playing-img" />
            </a>
            <p>Battlefield 6</p>
          </div>
          <div class="pic-display">
            <a href="https://store.steampowered.com/app/2288350/RAIDOU_Remastered_The_Mystery_of_the_Soulless_Army/" target="_blank">
              <img
                src="assets/vg-accents/boxart/raidou.jpg"
                class="curr-playing-img" />
            </a>
            <p>RAIDOU</p>
          </div>
        </div>
      </div>

      <!-- VIDEOGAME BOARD POSTS-->
      <div class="vg-posts">
        <h2 class="introHOME-title">Recent Videogame Posts</h2>
        <div class="recent-post-list">
          <div class="flex-items-vg">
            <a href="https://store.steampowered.com/app/1875830/Shin_Megami_Tensei_V_Vengeance/" target="_blank">
              <img src="assets/vg-accents/boxart/smt5v.jpg" alt="Cover Art" class="vg-img-post">
            </a>
            <div class="vg-text-ele">
              <a href="indev.php" target="_blank">
                <h2 class="post-title">Shin Megami Tensei 5: Vengeance</h2>
              </a>
              <h4 style="color: #e7d8d4">Atlus</h4>
              <p class="preview-text"></p>
            </div>
          </div>
          <div class="flex-items-vg">
            <a href="https://store.steampowered.com/app/1091500/Cyberpunk_2077/" target="_blank">
              <img src="assets/vg-accents/boxart/Cyberpunk_2077_box_art.jpg" alt="Cover Art" class="vg-img-post">
            </a>
            <div class="vg-text-ele">
              <a href="indev.php" target="_blank">
                <h2 class="post-title">Cyberpunk 2077 (2020)</h2>
              </a>
              <h4 style="color: #e7d8d4">CD PROJEKT RED</h4>
              <p class="preview-text"></p>
            </div>
          </div>
          <div class="flex-items-vg">
            <a href="https://store.steampowered.com/app/250900/The_Binding_of_Isaac_Rebirth/" target="_blank">
              <img src="assets/vg-accents/boxart/boi.jpg" alt="Cover Art" class="vg-img-post">
            </a>
            <div class="vg-text-ele">
              <a href="indev.php" target="_blank">
                <h2 class="post-title">The Binding of Isaac: Rebirth (2014)</h2>
              </a>
              <h4 style="color: #e7d8d4">Nicalis Inc</h4>
              <p class="preview-text"></p>
            </div>
          </div>
          <div class="flex-items-vg">
            <a href="https://store.steampowered.com/app/275850/No_Mans_Sky/" target="_blank">
              <img src="assets/vg-accents/boxart/nms.jpg" alt="Cover Art" class="vg-img-post">
            </a>
            <div class="vg-text-ele">
              <a href="indev.php" target="_blank">
                <h2 class="post-title">No Mans Sky (2016)</h2>
              </a>
              <h4 style="color: #e7d8d4">Hello Games</h4>
              <p class="preview-text"></p>
            </div>
          </div>

          <div class="flex-items-vg">
            <a href="https://store.steampowered.com/app/3354750/skate/" target="_blank">
              <img src="assets/vg-accents/boxart/skate.jpg" alt="Cover Art" class="vg-img-post">
            </a>
            <div class="vg-text-ele">
              <a href="indev.php" target="_blank">
                <h2 class="post-title">Skate (2025)</h2>
              </a>
              <h4 style="color: #e7d8d4">EA Games</h4>
              <p class="preview-text"></p>
            </div>
          </div>
        </div>
        <h2 class="introHOME-title"><a href="indev.php">[ Archive ]</a></h2>
      </div>
      <div class="adSpace">
        <img src="assets/vg-accents/jesuspsp.gif" class="fakepspad">
      </div>
    </div>
    <div class="sidebar-videogames-right">
      <img src="assets/vg-accents/joystick.gif" class="vg-logo" />
      <img src="assets/dividervg.gif" class="divider-vg-right" />
      <div class="btn-home">
        <img src="assets/vg-accents/fl-squall.gif" class="btn-att" />
        <img src="assets/vg-accents/blink-0.gif" class="btn-att" />

        <img src="assets/vg-accents/persona.gif" class="btn-att" />
        <a href="https://store.steampowered.com/app/413150/Stardew_Valley/" target="_blank"><img src="assets/vg-accents/stardew_valley.gif" class="btn-att-link" /> </a>

        <a href="https://steamcommunity.com/id/jacksoncity/" target="_blank"><img src="assets/vg-accents/steam.gif" class="btn-att-link" /></a>
        <img src="assets/vg-accents/vocaloid.gif" class="btn-att" />

        <img src="assets/vg-accents/cs3.gif" class="btn-att" />
        <img src="assets/vg-accents/newlambda.gif" class="btn-att" />

        <a href="https://fmhy.net/gaming#emulation-roms" target="_blank"><img src="assets/vg-accents/emulate.gif" class="btn-att-link" /></a>
        <img src="assets/vg-accents/gamefly-88x31.gif" class="btn-att" />

        <img src="assets/vg-accents/bob.gif" class="btn-att" />
        <img src="assets/vg-accents/pokemon.gif" class="btn-att" />
      </div>
      <img src="assets/dividervg.gif" class="divider-vg-right" />
      <div class="blinkies-home">
        <a href="https://store.steampowered.com/app/250900/The_Binding_of_Isaac_Rebirth/" target="_blank"><img src="assets/vg-accents/h20.gif" class="btn-att-link-blink" /></a>
        <img src="assets/vg-accents/ren.gif" class="btn-att" />
        <img src="assets/vg-accents/bulb.gif" class="btn-att" />
        <img src="assets/vg-accents/iheartTES.gif" class="btn-att" />
        <a href="https://store.steampowered.com/app/413150/Stardew_Valley/" target="_blank"><img src="assets/vg-accents/d22.gif" class="btn-att-link-blink" /></a>
        <a href="https://www.minecraft.net/en-us" target="_blank"><img src="assets/vg-accents/z14.gif" class="btn-att-link-blink" /></a>
        <img src="assets/vg-accents/v66.gif" class="btn-att" />
        <img src="assets/vg-accents/vi16.gif" class="btn-att" />
        <img src="assets/vg-accents/bug.gif" class="btn-att" />
      </div>
      <img src="assets/dividervg.gif" class="divider-vg-right" />
    </div>
  </div>
</body>

</html>