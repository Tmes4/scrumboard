<?php require_once 'backend/config.php' ?>

<header>
    <div class="header-area">
        <div class="logo">
            <img src="<?php echo $base_url; ?>./img/logo-big-v4.png" alt="">
            <!-- <h2>Developer Land</h2> -->
        </div>
        <div class="navbar-area">
            <div class="nav-holder">
                <ul>
                    <li><a href="<?php echo $base_url; ?>./index.php"><i class="fa-solid fa-house"></i></a></li>
                    <li><a href="<?php echo $base_url; ?>./task/index.php"><i class="fa-solid fa-chess-board"></i></a></li>
                    <li><a href="<?php echo $base_url; ?>./setting/setting.php"><i class="fa-solid fa-gear"></i></a></li>
                    <li><a href="<?php echo $base_url; ?>./login.php"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </div>
            <div class="profile">
                <img src="<?php echo $base_url; ?>./img/img_avatar.png" alt="">
                <p>EIGEN NAAM</p>
            </div>
        </div>
    </div>
</header>