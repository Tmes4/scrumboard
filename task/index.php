<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../head.php'; ?>
    <title>Scrumboard</title>
</head>

<body>
    <?php require_once '../header.php'; ?>
    <?php require_once '../header.php'; ?>

<div class="container">
    <h1>Meldingen</h1>
    <a href="./create.php">Nieuwe Taak &gt;</a>

    <?php if (isset($_GET['msg'])) {
        echo "<div class='msg'>" . $_GET['msg'] . "</div>";
    } ?>

    <?php
    require_once '../backend/conn.php';
    $query = "SELECT * FROM  task";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $meldingen = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
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
    </Section>

    <section class="main">

    </section>
</body>

</html>