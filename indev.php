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
    <title>In Development</title>
</head>

<body class="dev">
    <div class="container-dev">
        <div class="main-content-dev">
            <div class="header-dev">
                <?php if ($username): ?>
                    <p class="user-info">Logged in as <?= htmlspecialchars($username) ?>
                        <?= $role ? ' (' . htmlspecialchars($role) . ')' : '' ?></p>
                <?php endif; ?>
            </div>
            <img src="assets/logo.png" class="logo-dev">
            <br>
            <h1 style="color: white">This page is currently under development :)</h1>
            <h2 style="color: white"><a href="main.php"><-- Back to Home </a></h2>
            <br>
            <img src="assets/projects-accents/underconstruction.gif" class="logo-dev-bollard">
        </div>
    </div>
</body>

</html>