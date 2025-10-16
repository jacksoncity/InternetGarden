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
  <title>Jackson's Internet Garden - Resources</title>
</head>

<body class="resources">
  <div class="container">
    <!-- side bar -->
    <div class="sidebar-resources-left">
      <a href="main.php"><img src="assets/logo.png" class="logo" /> </a>
      <img src="assets/dividerresources.gif" class="divider-resources" />
      <h2 class="sidebar-title">Navigation</h2>
      <img src="assets/dividerresources.gif" class="divider-resources" />
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
      <img src="assets/dividerresources.gif" class="divider-resources" />
      <img
        src="assets/home-accents/gardenbutton.gif"
        style="padding-top: 20px"
        class="garden-button" />
    </div>
    <div class="main-content-res">
      <!-- Header of the main home landing page-->
      <div class="header">
        <h1 class="titleHOME">Resources</h1>
        <?php if ($username): ?>
          <p class="user-info">Logged in as <?= htmlspecialchars($username) ?>
            <?= $role ? ' (' . htmlspecialchars($role) . ')' : '' ?></p>
        <?php endif; ?>
        <p class="flvrHOME">
          A collection of links from where I got assets and inspiration from
        </p>
      </div>

      <!-- main content area -->
      <div class="resource-list">
        <div class="assets">
          <h2 class="resource-list-title">Assets Collected From:</h2>
          <table class="resource-table">
            <tr>
              <th>Website</th>
              <th>Type</th>
            </tr>
            <tr>
              <th>
                <a href="https://www.cursors-4u.com/" target="_blank">https://www.cursors-4u.com/</a>
              </th>
              <th>Custom Cursors <a href="https://www.cursors-4u.com/cursor/2013/02/28/firefly-pointer-set.html#" target="_blank">(Used on this Website)</a></th>
            </tr>
            <th>
              <a href="https://gifcities.org/" target="_blank">https://gifcities.org/</a>
            </th>
            <th>Various Gifs</th>
            <tr>
              <th>
                <a href="https://codepen.io/uchihaclan/full/QWZXLWa" target="_blank">https://codepen.io/uchihaclan/full/QWZXLWa</a>
              </th>
              <th>Backgrounds</th>
            </tr>
            <tr>
              <th>
                <a href="https://www.tooooools.app/effects/dithering" target="_blank">https://www.tooooools.app/effects/dithering</a>
              </th>
              <th>Dithering on logo</th>
            </tr>
            <tr>
              <th>
                <a href="https://pixelsafari.neocities.org/" target="_blank">https://pixelsafari.neocities.org/</a>
              </th>
              <th>Variouis graphic assets</th>
            </tr>
            <tr>
              <th>
                <a href="https://cyber.dabamos.de/88x31/index.html" target="_blank">https://cyber.dabamos.de/88x31/index.html</a>
              </th>
              <th>Variouis button assets</th>
            </tr>
            <tr>
              <th>
                <a href="https://adriansblinkiecollection.neocities.org/" target="_blank">https://adriansblinkiecollection.neocities.org/</a>
              </th>
              <th>Variouis blinkie assets</th>
            </tr>
            <tr>
              <th>
                <a href="https://leizy8499.neocities.org/resources" target="_blank">https://leizy8499.neocities.org/resources</a>
              </th>
              <th>Collection of various graphic resources</th>
            </tr>
            <tr>
              <th>
                <a href="https://bettysgraphics.neocities.org/webgraphics" target="_blank">https://bettysgraphics.neocities.org/webgraphics</a>
              </th>
              <th>Old web graphics</th>
            </tr>
            <tr>
              <th>
                <a href="https://dividers.crd.co/#hii" target="_blank">https://dividers.crd.co/#hii</a>
              </th>
              <th>Dividers</th>
            </tr>
          </table>
        </div>
        <div class="inspiration">
          <h2 class="resource-list-title">Inspiration Derived From:</h2>
          <table class="resource-table">
            <tr>
              <th>Website</th>
              <th>Type</th>
              <th>Creator</th>
            </tr>
            <tr>
              <th><a href="https://jamesg.blog/" target="_blank">https://jamesg.blog/</a></th>
              <th>Initial Idea Inspo</th>
              <th>James, from jamesg.blog</th>
            </tr>
            <tr>
              <th>
                <a href="https://neocities.org/browse" target="_blank">https://neocities.org/browse</a>
              </th>
              <th>Aesthetic/Style Inspo</th>
              <th>Neocities/Various Creators</th>
            </tr>
            <tr>
              <th>
                <a href="https://briankoberlein.com/tech/quiet-web" target="_blank">https://briankoberlein.com/tech/quiet-web</a>
              </th>
              <th>Inspiration for simplicity</th>
              <th>Brian Koberlein</th>
            </tr>
          </table>
        </div>
        <div class="other-sites">
          <h2 class="resource-list-title">Other Fun Sites:</h2>
          <table class="resource-table">
            <tr>
              <th>Website</th>
              <th>About</th>
            </tr>
            <tr>
              <th><a href="https://simone.computer/#/" target="_blank">https://simone.computer/#/</a></th>
              <th>Another cool indie web showcase</th>
            </tr>
            <tr>
              <th><a href="https://www.saltybet.com/" target="_blank">https://www.saltybet.com/</a></th>
              <th>Bet fake points and become the richest in this 24/7 Dreamcast Mugen fighter livestream</th>
            </tr>
            <tr>
              <th><a href="https://suricrasia.online/iceberg/" target="_blank">https://suricrasia.online/iceberg/</a></th>
              <th>Test your computer geek knowledge by browsing this extensive computer 'Iceberg' </th>
            </tr>
            <tr>
              <th><a href="https://cari.institute/aesthetics?asc=true&sort=name" target="_blank">https://cari.institute/aesthetics?asc=true&sort=name</a></th>
              <th>Ever liked the look of something aesthetically but didn't know what it was called? This site will help </th>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>