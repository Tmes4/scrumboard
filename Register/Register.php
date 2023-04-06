<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../head.php'; ?>
    <title>Registreren</title>
</head>

<body>

<header>
<link rel="stylesheet" href="<?php echo $base_url; ?>./css/home.css">

        <div class="header-logo">
            <a href="./index.php"><img src="img/logo-big-fill-only.png" alt=""></a>
            <a href="./index.php">
                <h2>Developer <span>Land</span></h2>
            </a>
        </div>
        <div class="navbar"> 
            <div class="nav-holder">
                <ul>
                    <li><a href="index.php"><img src="img/home.svg" alt=""></a></li>
                    <li><a href="<?php echo $base_url; ?>./task/index.php"><img src="img/scrum.svg" alt=""></a></li>
                    <li><a href="<?php echo $base_url; ?>./setting/setting.php"><img src="img/accsettings.svg" alt=""></a></li>
                    <li><a href="<?php echo $base_url; ?>./login.php"><img src="img/2nd-accimg.svg" alt=""></a></li>
                </ul>
            </div>
            <div class="homepage-profile">
                <div class="avatar-header-navbar">
                    <img src="img/avatar-demo.svg" alt="" style="border-radius: 100%;">
                </div>
                <div class="line-between-nav">
                    <img src="img/lijn tussen acount.svg" alt="">
                </div>
                <p>Yacoub der Bakker</p>
            </div>
        </div>
    </header>    <main>
        <div class="wrapper">
            <h2 class="title">Registreren</h2>
            <img src="<?php echo $base_url; ?>./img/logo-big-outlines-only.png" class="inlog-img">
            <form action="./backend/loginController.php" method="POST">
                <input type="hidden" name="Register" value="create">
                <label for="name">Naam:</label>
                <input type="text" name="name" id="name" placeholder="Je vul naam" required>
                <label for="username">Gebruiknaam:</label>
                <input type="text" name="username" id="username" placeholder="Je gebruikernaam" required>
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password" placeholder="Je wachtwoord" required>
                <input class="button" type="submit" value="Registreren">
            </form>
        </div>
    </main>
</body>

</html>