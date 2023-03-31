<?php 
require_once '../backend/config.php';
if(!isset($_SESSION['user_id']))
{
    $msg = "Je moet eerste inloggen!";
    header("Location:$base_url/login.php?msg=$msg");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../head.php';?>
    <title>Scrumboard</title>
</head>
<body>
        <?php require_once '../header.php'; ?>
    <Section class="main">
        <div class="department">
            <img src="" alt="">
            <ul>
                <li>Horeca</li>
                <li>Techniek</li>
                <li>Inkoop</li>
                <li>Klantservice</li>
                <li>Gr.Onderhoud</li>
                <li>Personeel</li>
            </ul>
        </div>
    </Section>
</body>
</html>