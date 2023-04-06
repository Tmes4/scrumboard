<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../head.php'; ?>
    <title>Scrumboard</title>
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
    </header>

    <?php
    require_once '../backend/conn.php';
    $query = "SELECT * FROM tasks";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $task = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="container">
        <h1>Scrumboard</h1>
        <a href="./create.php">Nieuwe Taak &gt;</a>
    </div>


    <Section class="main">

        <div class="content-area">
            <aside>
                <nav>
                    <a href="#">Horeca</a>
                    <a href="#">Techniek</a>
                    <a href="#">Inkoop</a>
                    <a href="#">Klantservice</a>
                    <a href="#">Gr.Onderhoud</a>
                    <a href="#">Personeel</a>
                </nav>
            </aside>

            <div class="row-container">
                <div class="card-row" id="first-row">
                    <h5 contenteditable="true">To Do</h5>
                    <div class="card-holder" id="row1">
                        <?php foreach ($task as $t) : ?>
                            <?php if ($t['status'] == "To Do") : ?>
                                <div class="card">

                                    <h6>Title:<span><?php echo $t['title']; ?></span></h6><br>
                                    <h6>Gebruiker:<span><?php echo $t['user']; ?></span></h6><br>
                                    <h6>Afdeling::<span><?php echo $t['department']; ?></span></h6><br>
                                    <h6>Status:<span><?php echo $t['status']; ?></span></h6><br>
                                    <h6>Datum::<span><?php echo $t['time']; ?></span></h6><br>
                                    <h6>Deadline:<span><?php echo $t['deadline']; ?></span></h6><br>
                                    <h6>Beschrijving:<span><?php echo $t['description']; ?></span></h6><br>

                                    <a class="edit-link" href="edit.php?id=<?php echo $t['id']; ?>">Edit</a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>


                </div>

                <div class="card-row" id="second-row">
                    <h5 contenteditable="true">In Progers</h5>
                    <div class="card-holder" id="row2">
                        <?php foreach ($task as $t) : ?>
                            <?php if ($t['status'] == "In Progers") : ?>
                                <div class="card">
                                    <h6>Title:<span><?php echo $t['title']; ?></span></h6><br>
                                    <h6>Gebruiker:<span><?php echo $t['user']; ?></span></h6><br>
                                    <h6>Afdeling::<span><?php echo $t['department']; ?></span></h6><br>
                                    <h6>Status:<span><?php echo $t['status']; ?></span></h6><br>
                                    <h6>Datum::<span><?php echo $t['time']; ?></span></h6><br>
                                    <h6>Deadline:<span><?php echo $t['deadline']; ?></span></h6><br>
                                    <h6>Beschrijving:<span><?php echo $t['description']; ?></span></h6><br>

                                    <a class="edit-link" href="edit.php?id=<?php echo $t['id']; ?>">Edit</a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                </div>


                <div class="card-row" id="third-row">
                    <h5 contenteditable="true">Done</h5>
                    <div class="card-holder" id="row3">
                        <?php foreach ($task as $t) : ?>
                            <?php if ($t['status'] == "Done") : ?>
                                <div class="card">
                                    <h6>Title:<span><?php echo $t['title']; ?></span></h6><br>
                                    <h6>Gebruiker:<span><?php echo $t['user']; ?></span></h6><br>
                                    <h6>Afdeling::<span><?php echo $t['department']; ?></span></h6><br>
                                    <h6>Status:<span><?php echo $t['status']; ?></span></h6><br>
                                    <h6>Datum::<span><?php echo $t['time']; ?></span></h6><br>
                                    <h6>Deadline:<span><?php echo $t['deadline']; ?></span></h6><br>
                                    <h6>Beschrijving:<span><?php echo $t['description']; ?></span></h6><br>

                                    <a class="edit-link" href="edit.php?id=<?php echo $t['id']; ?>">Edit</a>

                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </Section>

</body>

</html>