<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$hased_password = password_hash($password, PASSWORD_DEFAULT);
$Register = $_POST['Register'];

require_once './conn.php';
$query = "SELECT * FROM users WHERE username = :username";
$stmt = $conn->prepare($query);
$stmt->execute([
    ":username" => $username,
]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($stmt->rowCount() < 1) {
    $msg = "Error: account bestaat niet";
    header("Location:$base_url/login.php?msg=$msg");
}

if (!password_verify($password, $user['password'])) {
    $msg = "Error: onjuist wachtwoord";
    header("Location:$base_url/login.php?msg=$msg");
}


if ($Register == "create") {
    $name = $_POST['name'];

    require_once 'conn.php';

    if ($stmt->rowCount() > 0) {
        $msg = "Error: gebruiksnaam bestaat all";
        header("Location:$base_url/login.php?msg=$msg");
    } else {
        $query = "INSERT INTO users (name , username, password)
        VALUES ('$name', '$username', '$hased_password')";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $reslut = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
$_SESSION['user_id'] = $user['id'];
