<?php

$task = $_POST['task'];
$id = $_POST['id'];

if ($task == "create") {
    $title = $_POST['title'];
    if (empty($title)) {
        $errors[] = "Vul de title in";
    }

    $user = $_POST['user'];
    if (empty($user)) {
        $errors[] = "Vul de gebruiker in";
    }

    $department = $_POST['department'];
    if (empty($department)) {
        $errors[] = "Kies een afdeling";
    }

    $description = $_POST['description'];
    $status = $_POST['status'];

    $time = $_POST['time'];
    if (empty($time)) {
        $errors[] = "Vull de tijd in";
    }

    $deadline = $_POST['deadline'];
    if (empty($deadline)) {
        $errors[] = "Vul de deadline in";
    }


    require_once  'conn.php';
    $query = "INSERT INTO tasks ( title, user, department, description, status, time, deadline)
    VALUES (:title, :user, :department, :description, :status, :time, :deadline)";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        ":title" => $title,
        ":user" => $user,
        ":department" => $department,
        ":description" => $description,
        ":status" => $status,
        ":time" => $time,
        ":deadline" => $deadline,
    ]);

    $reslut = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header("Location:../task/index.php?msg=Task added");
}

if($task == "update") 
{
    $description = $_POST['description'];
    $status = $_POST['status'];
    $deadline = $_POST['deadline'];

    require_once '../backend/conn.php';
    $query = "UPDATE tasks SET description = :description, status = :status, deadline = :deadline WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        ":description" => $description,
        "status" => $status,
        ":deadline" => $deadline,
        ":id" => $id,
    ]);

    header("Location:../task/index.php?msg=Task update it");

}

if($task == "delete")
{
    require_once '../backend/conn.php';
    $query = "DELETE FROM tasks WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->execute([":id" => $id]);

    header("Location:../task/index.php?msg=Task delete it");

}


