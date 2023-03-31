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
      <img src="<?php echo $base_url; ?>./img/logo-big-outlines-only.png" class="inlog-img">
      <h2 class="title">Login</h2>
      <form action="./backend/loginController.php" method="POST">
        <label for="username">Gebruiknaam:</label>
        <input type="text" name="username" id="username" placeholder="Je gebruikernaam">
        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" id="password" placeholder="Je wachtwoord">
        <input type="submit">
      </form>
    </div>
  </main>
</body>

</html>