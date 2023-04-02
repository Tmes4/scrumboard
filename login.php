<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once './head.php'; ?>
  <title>Login</title>
</head>

<body>
  <?php require_once './header.php'; ?>
  <main>
    <div class="wrapper">
      <h2 class="title">Login</h2>
      <img src="<?php echo $base_url; ?>./img/logo-big-outlines-only.png" class="inlog-img">
      <form action="./backend/loginController.php" method="POST">
        <input type="hidden" name="login" id="login">
        <label for="username">Gebruiknaam:</label>
        <input type="text" name="username" id="username" placeholder="Je gebruikernaam">
        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" id="password" placeholder="Je wachtwoord">
        <input class="button" type="submit" value="Login">
      </form>
    </div>
  </main>
</body>

</html>