<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../head.php'; ?>
    <title>Scrumboard</title>
</head>

<body>
    <?php require_once '../header.php'; ?>
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
                    <h5 contenteditable="true">ToDo</h5>
                    <div class="card-holder" id="row1">
                        <div class="card">
                            <?php foreach ($task as $t) : ?>
                                <h6>Title:<span><?php echo $t['title']; ?></span></h6><br>
                                <h6>Gebruiker:<span><?php echo $t['user']; ?></span></h6><br>
                                <h6>Afdeling::<span><?php echo $t['department']; ?></span></h6><br>
                                <h6>Status:<span><?php echo $t['status']; ?></span></h6><br>
                                <h6>Datum::<span><?php echo $t['time']; ?></span></h6><br>
                                <h6>Deadline:<span><?php echo $t['deadline']; ?></span></h6><br>
                                <h6>Beschrijving:<span><?php echo $t['description']; ?></span></h6><br>

                                <a class="edit-link" href="edit.php?id=<?php echo $t['id']; ?>">Edit</a>
                            <?php endforeach; ?>
                        </div>
                        <div class="card">
                            <?php foreach ($task as $t) : ?>
                                <h6>Title:<span></span></h6><br>
                                <h6>Gebruiker:<span></span></h6><br>
                                <h6>Afdeling::<span></span></h6><br>
                                <h6>Status:<span></span></h6><br>
                                <h6>Datum::<span></span></h6><br>
                                <h6>Deadline:<span></span></h6><br>
                                <h6>Beschrijving:<span></span></h6><br>

                                <a class="edit-link" href="edit.php?id=<?php echo $t['id']; ?>">Edit</a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="card-row" id="second-row">
                    <h5 contenteditable="true">In Progers</h5>
                    <div class="card-holder" id="row2">
                        <div class="card">
                            <?php foreach ($task as $t) : ?>
                                <h6>Title:<span></span></h6><br>
                                <h6>Gebruiker:<span></span></h6><br>
                                <h6>Afdeling::<span></span></h6><br>
                                <h6>Status:<span></span></h6><br>
                                <h6>Datum::<span></span></h6><br>
                                <h6>Deadline:<span></span></h6><br>
                                <h6>Beschrijving:<span></span></h6><br>

                                <a class="edit-link" href="edit.php?id=<?php echo $t['id']; ?>">Edit</a>
                            <?php endforeach; ?>
                        </div>
                        <div class="card">
                            <?php foreach ($task as $t) : ?>
                                <h6>Title:<span></span></h6><br>
                                <h6>Gebruiker:<span></span></h6><br>
                                <h6>Afdeling::<span></span></h6><br>
                                <h6>Status:<span></span></h6><br>
                                <h6>Datum::<span></span></h6><br>
                                <h6>Deadline:<span></span></h6><br>
                                <h6>Beschrijving:<span></span></h6><br>

                                <a class="edit-link" href="edit.php?id=<?php echo $t['id']; ?>">Edit</a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


                <div class="card-row" id="third-row">
                    <h5 contenteditable="true">Done</h5>
                    <div class="card-holder" id="row3">
                        <div class="card">
                            <?php foreach ($task as $t) : ?>
                                <h6>Title:<span></span></h6><br>
                                <h6>Gebruiker:<span></span></h6><br>
                                <h6>Afdeling::<span></span></h6><br>
                                <h6>Status:<span></span></h6><br>
                                <h6>Datum::<span></span></h6><br>
                                <h6>Deadline:<span></span></h6><br>
                                <h6>Beschrijving:<span></span></h6><br>

                                <a class="edit-link" href="edit.php?id=<?php echo $t['id']; ?>">Edit</a>
                            <?php endforeach; ?>
                        </div>

                        <div class="card">
                            <?php foreach ($task as $t) : ?>
                                <h6>Title:<span></span></h6><br>
                                <h6>Gebruiker:<span></span></h6><br>
                                <h6>Afdeling::<span></span></h6><br>
                                <h6>Status:<span></span></h6><br>
                                <h6>Datum::<span></span></h6><br>
                                <h6>Deadline:<span></span></h6><br>
                                <h6>Beschrijving:<span></span></h6><br>

                                <a class="edit-link" href="edit.php?id=<?php echo $t['id']; ?>">Edit</a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </Section>




</body>

</html>