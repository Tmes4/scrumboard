<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php require_once './head.php';?>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php require_once './header.php';?>
    <div class="login">
        <h1>Inloggen</h1>
    </div>
    <form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="./img/logo-big-fill-only.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>