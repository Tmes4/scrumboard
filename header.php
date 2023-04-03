<?php require_once 'backend/config.php' ?>

<header>
    <!-- <div class="header-area"> -->
    <div class="logo">
        <img src="<?php echo $base_url; ?>./img/logo-big-fill-only.png" alt="">
        <h2>Developer <span>Land</span> </h2>
    </div>
    <div class="navbar-area">
        <div class="nav-holder">
            <ul>
                <li><a href="<?php echo $base_url; ?>./index.php"> <img src="img/home.svg" alt=""></a></li>
                <li><a href="<?php echo $base_url; ?>./task/index.php"><img src="img/scrum.svg" alt=""></a></li>
                <!-- <li><a href="<?php echo $base_url; ?>./setting/setting.php"><img src="img/accsettings.svg" alt=""></a></li> -->

                <li><a href="<?php echo $base_url; ?>./login.php"><i class="fas fa-user"></i></a></li>

            </ul>
        </div>

        <div class="profile">
            <img src="<?php echo $base_url; ?>./img/img_avatar.png" alt="">
            <p>EIGEN NAAM</p>
        </div>
    </div>
    <!-- </div> -->

</header>