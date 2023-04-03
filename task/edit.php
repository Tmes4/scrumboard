<!DOCTYPE html>
<html>

<head>
    <?php require_once '../head.php' ?>
    <title>Create new task</title>
</head>

<body>
    <?php require_once '../header.php' ?>
    <div class="create-form">
        <?php
        $id = $_GET['id'];
        require_once '../backend/conn.php';
        $query = "SELECT * FROM tasks WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->execute([":id" => $id]);
        $task = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>

        <form action="../backend/tasksController.php" method="POST">
            <img src="<?php echo $base_url; ?>./img/logo-big-outlines-only.png" class="inlog-img">
            <h1>Taken Aanpassen</h1>
            <input type="hidden" name="task" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <div class="row-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title">
                </div>

                <div class="row-group">
                    <label for="user">gebruiker:</label>
                    <input type="text" name="user" id="user">
                </div>
            </div>

            <div class="form-group">
                <div class="row-group">
                    <label for="department">Afdeling:</label>
                    <select name="department" id="department">
                        <option value=""> -Kies je afdeling- </option>
                        <option value="personeel">Personeel</option>
                        <option value="horeca">Horeca</option>
                        <option value="techniek">Techniek</option>
                        <option value="inkoop">Inkoop</option>
                        <option value="klantenservice">Klantenservice</option>
                        <option value="greon">Groen</option>
                    </select>
                </div>

                <div class="row-group">
                    <label for="status">Status:</label>
                    <input type="text" name="status" id="status" value="To Do">
                </div>
            </div>

            <div class="form-group">

                <div class="row-group">
                    <label for="time">Datum:</label>
                    <?php echo $task['time']; ?>

                </div>

                <div class="row-group">
                    <label for="deadline">Deadline:</label>
                    <input type="date" name="deadline" value="<?php echo $task['deadline']; ?>">
                </div>
            </div>


            <div class="row-group">
                <label for="description">Beschrijving:</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <input type="submit" id="submit" value="Wijzingen Opslaan">

    </div>
    </form>
    </div>
</body>

</html>