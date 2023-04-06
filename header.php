

<head>
<?php require_once 'backend/config.php' ?>
<meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $base_url; ?>./css/home.css">


    <script src="https://kit.fontawesome.com/06a9306cce.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<header>
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
    </header>
