<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../head.php'; ?>
    <title>Scrumboard</title>
</head>

<body>
    <?php require_once '../header.php'; ?>

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
                            <span>Title: </span><br>
                            <span>Gebruiker:</span><br>
                            <span>Afdeling:</span><br>
                            <span>Status:</span><br>
                            <span>Datum:</span><br>
                            <span>Deadline:</span><br>
                            <a href="./edit.php" class="edit-link">Edit</a>
                        </div>
                        <div class="card"><span>Mijn Taak Hallo</span><br><a href="./edit.php" class="edit-link">Edit</a></div>
                    </div>
                </div>

                <div class="card-row" id="second-row">
                    <h5 contenteditable="true">In Progers</h5>
                    <div class="card-holder" id="row2">
                        <div class="card">
                            <span>Title: </span><br>
                            <span>Gebruiker:</span><br>
                            <span>Afdeling:</span><br>
                            <span>Status:</span><br>
                            <span>Datum:</span><br>
                            <span>Deadline:</span><br>
                            <a href="./edit.php" class="edit-link">Edit</a>
                        </div>
                        <div class="card"><span>Mijn Taak Hallo</span><br><a href="./edit.php" class="edit-link">Edit</a></div>
                    </div>
                </div>


                <div class="card-row" id="third-row">
                    <h5 contenteditable="true">Done</h5>
                    <div class="card-holder" id="row3">
                        <div class="card">
                            <span>Title: </span><br>
                            <span>Gebruiker:</span><br>
                            <span>Afdeling:</span><br>
                            <span>Status:</span><br>
                            <span>Datum:</span><br>
                            <span>Deadline:</span><br>
                            <a href="./edit.php" class="edit-link">Edit</a>
                        </div>

                    <div class="card">
                        <span>Title: </span><br>
                        <span>Gebruiker:</span><br>
                        <span>Afdeling:</span><br>
                        <span>Status:</span><br>
                        <span>Datum:</span><br>
                        <span>Deadline:</span><br>
                        <a href="./edit.php" class="edit-link">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        </div>


    </Section>




</body>

</html>