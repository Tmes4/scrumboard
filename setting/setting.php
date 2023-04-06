<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../head.php'; ?>
    <title>account instellingen</title>
</head>

<body>
    <header>
        <?php require_once '../header.php'; ?>
        
    </header>
    <main>
        <div class="container-home" style="
    padding: 30px 0;
">
    <div class="container-home">
        <?php
        session_start();
        // Controleer of de gebruiker is ingelogd voordat toegang wordt verleend tot de accountinstellingenpagina
        // if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
        //     header("location: ../login.php");
        //     exit;
        // }

        // Verbinden met de database
        require_once '../backend/conn.php';
        $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

        // Controleer de verbinding
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Wanneer het formulier wordt ingediend, verwerk dan de gegevens en sla ze op in de database
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            // Valideer de ingevoerde gegevens voordat deze in de database worden opgeslagen
            // ...

            // Sla de gegevens op in de database
            $sql = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id=" . $_SESSION['id'];
            if(mysqli_query($conn, $sql)){
                // Geef de gebruiker feedback over de status van hun accountinstellingen
                $message = "Je accountinstellingen zijn succesvol bijgewerkt.";
            } else{
                $error_message = "Er is een fout opgetreden bij het bijwerken van je accountinstellingen.";
            }
        }

        mysqli_close($conn);
        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Accountinstellingen</title>
        </head>
        <body>
            <?php
        // Toon eventuele feedback aan de gebruiker
        if(isset($message)){
            echo '<p>' . $message . '</p>';
        }
        if(isset($error_message)){
            echo '<p>' . $error_message . '</p>';
        }
        ?>
        <div class="wrapper">
            <h2 class="title">Accountinstellingen</h2>
            <img src="<?php echo $base_url; ?>./img/logo-big-outlines-only.png" class="inlog-img">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label class="formlabelsetting" for="name">Naam:</label>
            <input class="formsettinginput" type="text" name="name" placeholder="Je naam" value="<?php echo $_SESSION['name'] ?? ''; ?>">
            <br>
            <label class="formlabelsetting" for="email">E-mailadres:</label>
            <input class="formsettinginput" type="email" name="email" placeholder="Je E-mailadres" value="<?php echo $_SESSION['email'] ?? ''; ?>">
            <br>
            <label class="formlabelsetting" for="password">Wachtwoord:</label>
            <input class="formsettinginput" type="password" name="password" placeholder="Je wachtwoord" value="<?php echo $_SESSION['password'] ?? ''; ?>">
            <br>
            <label class="formlabelsetting" for="confirm_password">Bevestig wachtwoord:</label>
            <input class="formsettinginput" type="password" name="confirm_password" placeholder="Bevestig wachtwoord">
            <br><br>
            <input class="buttonSetting" type="submit" value="Opslaan">
        </form>
        </div>

        </div>


        </div>
<!-- Bootstrap JS -->
<script src="../js/bootstrap.min.js"></script>
    </main>
</body>
</html>