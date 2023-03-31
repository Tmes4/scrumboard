<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once './conn.php';
    $query = "SELECT * FROM user WHERE username = :username";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        ":username" => $username,
    ]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($stmt->rowCount() < 1)
    {
        $msg = "Error: account bestaat niet";
        header("Location:$base_url/login.php?msg=$msg");
        
    }

    if(!password_verify($password, $user['password']))
    {
        $msg = "Error: onjuist wachtwoord";
        header("Location:$base_url/login.php?msg=$msg");
    }
    
    $_SESSION['user_id'] = $user['id'];


?>