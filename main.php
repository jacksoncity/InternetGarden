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
    <title>Jackson's Internet Garden</title>
  </head>

  <body class="home">
    <!-- side bar -->
    <div class="container">
      <div class="sidebar-home-left">
        <a href="main.php"><img src="assets/logo.png" class="logo" /> </a>
        <img src="assets/glitterblue.gif" class="divider-home" />
        <h2 class="sidebar-title">Navigation</h2>
        <img src="assets/glitterblue.gif" class="divider-home" />
        <ul class="sidebar-list">
          <li><a href="main.php">Home</a></li>
          <li><a href="videogames.html">Video Games</a></li>
          <li><a href="music.html">Music</a></li>
          <li><a href="projects.html">Projects</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="resources.html">Resources</a></li>
          <li><a href="about.html">About Me</a></li>
        </ul>
        <img src="assets/glitterblue.gif" class="divider-home" />
        <img
          src="assets/home-accents/gardenbutton.gif"
          style="padding-top: 20px"
        />
      </div>
      <!-- Header of the main home landing page-->
      <div class="main-content-home">
        <div class="header">
          <h1 class="titleHOME">Welcome to Jackson's Internet Garden</h1>
          <?php if ($username): ?>
            <p class="user-info">Logged in as <?= htmlspecialchars($username) ?>
              <?= $role ? ' (' . htmlspecialchars($role) . ')' : '' ?></p>
          <?php endif; ?>
          <p class="flvrHOME">
            The <i>opposite</i> of a portfolio website.<br />
            Where I let my creative outlets grow.
          </p>
        </div>

        <div class="ufo-sep">
          <img src="assets/home-accents/ufo.gif" class="ufo" />
        </div>

        <!-- main content area -->

        <div class="introHOME">
          <h2 class="introHOME-title">"What is an Internet Garden?"</h2>
          <p class="introHOME-text">
            Well, that's a good question, Stranger!
            <a href="https://jamesg.blog/2024/03/04/internet-gardening"
              >James' Coffee Blog</a
            >
            first brought this concept on to my radar. The way they describe it
            is more like an idea, where, while some people take the time and
            energy to tend to their plants in a garden, they received the
            comment that the way they look after and care for their websites is
            like internet gardening. And I really liked the correlation there,
            it reminded me of the carefree nature that we are allowed in the
            indieweb. You can display interests that are personal and meaningful
            to you.
            <br />
            I really enjoy the aesthetics of the early internet. I love the
            creativity and ingenuity that comes from only having a few resources
            to build what you want. It was also a time before ads festered in
            every nook where your eyes wander on a webpage. So when designing my
            Garden here, this was something that was important that I tried and
            portray, because that's the kind of website I would like to visit.
            It’s a part of the web called the
            <a href="https://briankoberlein.com/tech/quiet-web/">Quiet Web</a>,
            as dubbed by Brian Koberlein. It’s a part of the web that is
            detached from the external resources. There are no ads, no
            WordPress, no SEO optimization. I wanted something quiet and
            interesting, a corner of the web that I can claim as my own.
            <br />
            I hope that through this site, my Garden on the Internet, I can
            express how fun the indie web can be, and a call to explore the
            Quiet Web, there are so many fun and interesting websites to find
            and plenty of space for more to join. Please have fun clicking
            around and seeing what you find, and feel free to inspect element if
            you are curious how I did something. I've tried to document it as
            best as I can. ˙ᵕ˙
          </p>
        </div>

        <div class="recents-home">
          <h2 class="introHOME-title">Recent Web Posts</h2>
          <div class="recent-post-list">
            <div class="flex-items">
              <h2 style="color: white">Test 1</h2>
            </div>
            <div class="flex-items"><h2 style="color: white">Test 2</h2></div>
            <div class="flex-items"><h2 style="color: white">Test 3</h2></div>
            <div class="flex-items"><h2 style="color: white">Test 4</h2></div>
            <div class="flex-items"><h2 style="color: white">Test 5</h2></div>
          </div>
        </div>
      </div>
      <div class="sidebar-home-right">
        <img src="assets/home-accents/planet.gif" class="planet-home-logo" />
        <img src="assets/glitterblue.gif" class="divider-home-right" />
        <div class="btn-home">
          <img src="assets/home-accents/digitalme.gif" class="btn-att" />
          <img src="assets/home-accents/miku.gif" class="btn-att" />

          <img src="assets/home-accents/tiredalien2.gif" class="btn-att" />
          <a href="https://archive.org/"
            ><img src="assets/home-accents/preserve.gif" class="btn-att"
          /></a>

          <img src="assets/home-accents/dumbass.gif" class="btn-att" />
          <img src="assets/home-accents/planetb.gif" class="btn-att" />

          <img src="assets/home-accents/seedyourtorrents.gif" class="btn-att" />
          <img src="assets/home-accents/logopicture2.gif" class="btn-att" />

          <img src="assets/home-accents/phonechump.gif" class="btn-att" />
          <img src="assets/home-accents/pepsi.gif" class="btn-att" />

          <img src="assets/home-accents/sucks.gif" class="btn-att" />
          <img src="assets/home-accents/got_html.gif" class="btn-att" />

          <img src="assets/home-accents/2xp.gif" class="btn-att" />
          <img src="assets/home-accents/coffee.gif" class="btn-att" />
        </div>
        <img src="assets/glitterblue.gif" class="divider-home-right" />
        <div class="blinkies-home">
          <img src="assets/home-accents/kindcomputer.gif" class="btn-att" />
          <img src="assets/home-accents/e103.gif" class="btn-att" />
          <img src="assets/home-accents/firefox.gif" class="btn-att" />
          <img src="assets/home-accents/anotherloser.jpg" class="btn-att" />
          <img src="assets/home-accents/i10.gif" class="btn-att" />
          <img src="assets/home-accents/x6.gif" class="btn-att" />
          <img src="assets/home-accents/stargazer2.gif" class="btn-att" />
          <img src="assets/home-accents/abduct.gif" class="btn-att" />
        </div>
        <img src="assets/glitterblue.gif" class="divider-home-right" />
        <a href="adminlogin.php"><p class="admin-login">Admin Login</p></a>
      </div>
    </div>
  </body>
</html>
