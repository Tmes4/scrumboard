<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'backend/config.php'; ?>

    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="<?php echo $base_url; ?>./css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>./css/main.css"> -->
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

<body>
    <header>
        <div class="header-logo">
            <a href="#99 "><img src="img/logo-big-fill-only.png" alt=""></a>
            <a href="#99 "><h2>Developer <span>Land</span></h2></a>
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
                    <img src="img/avatar-demo.svg" alt=""  style="border-radius: 100%;">
                </div>
                <div class="line-between-nav">
                    <img src="img/lijn tussen acount.svg" alt="">
                </div>
                <p>Yacoub der Bakker</p>
            </div>
        </div>
    </header>

    <div class="main">
            <div class="hero" id="99">
                <!-- <div class="background-hero"><img src="img/hero-background.png" style="width:100vw;height:auto;" alt=""></div> -->
                <div class="hero-nonebck">
                    <h2><span>Welkom,</span>
                        Dit is de officiële website
                        van DeveloperLand.
                    </h2>
                    <div class="device-hero"><img src="img/mockup-hero.png" alt=""></div>
                </div>
            </div>
            <div class="section-1" id="91">
                <div class="section-1-txt">
                    <h2>Welkom bij Developer Land</h2>
                    <p>Het bedrijf dat zich richt op de perfecte combinatie van technologie en entertainment! Onze passie voor programmeren heeft ons geleid naar de oprichting van een pretpark waar de nieuwste technologieën en attracties elkaar ontmoeten.</p>
                </div>
                <img src="img/ipad-n-homepg.png" alt="">
            </div>
            <div class="section-2">
                <div class="section-2-txt">
                    <h2>Onze missie</h2>
                    <p>Bij Developer Land geloven we dat iedereen kan leren programmeren en we zijn vastbesloten om deze boodschap uit te dragen. Ons team van experts heeft jarenlange ervaring in het ontwikkelen van software en het geven van trainingen.</p>
                </div>
            </div>
            <div class="section-3">
                <div class="section-3-txt">
                    <h2>Onze scrumboard tool</h2>
                    <p>Om onze medewerkers optimaal te ondersteunen bij hun werkzaamheden, hebben we een innovatief scrumboard ontwikkeld. Met deze tool kunnen onze teams hun projecten plannen, prioriteren en monitoren. Het stelt ons in staat om onze processen te stroomlijnen en ervoor te zorgen dat we onze doelen op tijd bereiken.</p>
                </div>
            </div>
            <div class="section-4">
                <div class="section-4-txt">
                    <h2>Onze producten en diensten</h2>
                    <p>Bij Developer Land zijn we trots op onze producten en diensten. We zijn voortdurend bezig met het ontwikkelen van nieuwe ideeën en het verbeteren van onze bestaande projecten. Ons doel is om een brug te slaan tussen technologie en entertainment en om iedereen de kans te geven om te genieten van de wonderen van programmeren.</p>
                </div>
            </div>
            <div class="section-5">
                <div class="section-5-txt">
                    <h2>Contact</h2>
                    <p>We hopen dat u geniet van uw bezoek aan onze website en we kijken ernaar uit om u binnenkort te verwelkomen in ons pretpark! Neem gerust contact met ons op voor vragen of opmerkingen via <a href="mailto:info@developerland.com">info@developerland.com</a>.</p>
                </div>
            </div>

    </div>
    <footer class="footer">
        <div class="container-footer">
            <div class="row-footer">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#91">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">comming soon</a></li>
                        <li><a href="#">comming soon</a></li>   
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/curioonderwijs/?locale=nl_NL"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/CurioOnderwijs"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/curioonderwijsgroep/"><i class="fab fa-instagram"></i></a>
                        <a href="https://nl.linkedin.com/school/curioonderwijsgroep/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
</body>

</html>




