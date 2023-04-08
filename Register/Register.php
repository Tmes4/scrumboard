<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../head.php'; ?>
    <title>Registreren | Developer Land</title>
</head>

<body>
    <?php require_once '../header.php'; ?>

    <main>
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