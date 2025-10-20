<?php
session_start();
$username = $_SESSION['username'] ?? '';
$role = $_SESSION['role'] ?? '';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
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
            <img src="assets/glitterblue.gif" class="divider-home" />
            <a href="">
                <img
                    src="assets/home-accents/gardenbutton.gif"
                    class="garden-button" />
            </a>
        </div>

        <!-- Header of the main home landing page-->
        <div class="main-content-home">
            <div class="header">

                <h1 class="titleHOME">Welcome to Jackson's Internet Garden</h1>
                <?php if ($username): ?>
                    <p class="user-info">Logged in as <?= htmlspecialchars($username) ?>
                        <?= $role ? ' (' . htmlspecialchars($role) . ')' : '' ?></p>
                <?php endif; ?>
                <div class="wavy-container">
                    <p class="wavy-text">
                        The <span>o</span><span>p</span><span>p</span><span>o</span><span>s</span><span>i</span><span>t</span><span>e</span> of a portfolio website.<br />
                    </p>
                </div>
            </div>

            <div class="ufo-sep">
                <img src="assets/home-accents/ufo.gif" class="ufo" />
            </div>

            <!-- main content area -->

            <div class="introHOME">
                <h2 class="introHOME-title">"What is an Internet Garden?"</h2>
                <p class="introHOME-text">
                    Well, that's a good question, Stranger!
                    <a href="https://jamesg.blog/2024/03/04/internet-gardening" target="_blank">James' Coffee Blog</a>
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
                    <a href="https://briankoberlein.com/tech/quiet-web/" target="_blank">Quiet Web</a>,
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
                <h2 class="introHOME-title">Featured Web Posts</h2>
                <div class="recent-post-list">
                    <div class="flex-items">
                        <a href="indev.php" target="_blank">
                            <img src="assets/music-posts/covers/gettingkilled.jpg" alt="Featured Thumbnail" class="music-img-post">
                        </a>
                        <div class="music-text-ele">
                            <a href="indev.php" target="_blank">
                                <h2 class="post-title">Geese - Getting Killed (2025)</h2>
                            </a>
                            <h4 style="color: #1d7edfff">Alternative/Indie</h4>
                            <p class="preview-text">Blah Blah Blah Blah Blah Blah</p>
                        </div>
                    </div>

                    <div class="flex-items">
                        <a href="indev.php" target="_blank">
                            <img src="assets/vg-accents/boxart/bf6.jpg" alt="Featured Thumbnail" class="vg-img-post">
                        </a>
                        <div class="music-text-ele">
                            <a href="indev.php" target="_blank">
                                <h2 class="post-title">Battlefield 6 (2025)</h2>
                            </a>
                            <h4 style="color: #1d7edfff">EA Games</h4>
                            <p class="preview-text">Blah Blah Blah Blah Blah Blah</p>
                        </div>
                    </div>

                    <div class="flex-items">
                        <a href="indev.php" target="_blank">
                            <img src="assets/projects-accents/project-thumbnails/emac.jpg" alt="Featured Thumbnail" class="music-img-post">
                        </a>
                        <div class="music-text-ele">
                            <a href="indev.php" target="_blank">
                                <h2 class="post-title">2005 Apple EMac Restoration</h2>
                            </a>
                            <h4 style="color: #1d7edfff">Test flavor text</h4>
                            <p class="preview-text">Originally something I saw on Facebook Marketplace, I couldn't resist its beautiful CRT monitor and at only $25 I had to bite. The only problem is, it doesnt boot to the OS. However I believe this to be totally fixable. Track my progress and see what else I have done with the Emac my reading more here.</p>
                        </div>
                    </div>

                    <div class="flex-items">
                        <a href="indev.php" target="_blank">
                            <img src="assets/music-posts/covers/rocket.jpg" alt="Featured Thumbnail" class="music-img-post">
                        </a>
                        <div class="music-text-ele">
                            <a href="indev.php" target="_blank">
                                <h2 class="post-title">Rocket - R is for Rocket (2025)</h2>
                            </a>
                            <h4 style="color: #1d7edfff">Alternative/Indie</h4>
                            <p class="preview-text">A very charming rock band reminiscent of late 90's and early 2000's rock/post-punk. This record has a lot of personality and I found myself to be a big fan of the band overall. if you would like to hear more detail about the standout tracks and why I like this band, then click to read the post.</p>
                        </div>
                    </div>

                    <div class="flex-items">
                        <a href="indev.php" target="_blank">
                            <img src="assets/projects-accents/project-thumbnails/monkey.jpg" alt="Featured Thumbnail" class="music-img-post">
                        </a>
                        <div class="music-text-ele">
                            <a href="indev.php" target="_blank">
                                <h2 class="post-title">Collage of Images I Like</h2>
                            </a>
                            <h4 style="color: #1d7edfff">Image Board</h4>
                            <p class="preview-text">I really just wanted a place to put a collection of images that I find online and like. I urdge anyone who likes any of the art shown under this page to please click on the images, as it will redirect you to the source of the image, so that you can find the creator and give them the proper love they deserve.</p>
                        </div>
                    </div>
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
                <a href="https://archive.org/" target="_blank"><img src="assets/home-accents/preserve.gif" class="btn-att-link" /></a>

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
                <a href="https://www.firefox.com/en-US/?utm_campaign=SET_DEFAULT_BROWSER" target="_blank"><img src="assets/home-accents/firefox.gif" class="btn-att-link-blink" /></a>
                <img src="assets/home-accents/anotherloser.jpg" class="btn-att" />
                <img src="assets/home-accents/i10.gif" class="btn-att" />
                <img src="assets/home-accents/x6.gif" class="btn-att" />
                <img src="assets/home-accents/stargazer2.gif" class="btn-att" />
                <img src="assets/home-accents/abduct.gif" class="btn-att" />
            </div>

            <img src="assets/glitterblue.gif" class="divider-home-right" />

            <a href="adminlogin.php">
                <p class="admin-login">Admin Login</p>
            </a>
            <?php if ($role === 'admin'): ?>
                <a href="admin-page.php">
                    <p class="admin-login">Admin Dashboard</p>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>