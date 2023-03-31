<!DOCTYPE html>
<html>

<head>
	<?php require_once '../head.php' ?>
	<title>Create new task</title>
</head>

<body>
	<?php require_once '../header.php' ?>
<div class="new">
<img src="<?php echo $base_url; ?>./img/logo-big-outlines-only.png" class="inlog-img">
	<h1>Create new task</h1>
	<form method="POST" action="tasksController.php">
		<input type="hidden" id="task" value="create">
		<label for="title">Title:</label><br>
		<input type="text" id="title" name="title" placeholder="titel"><br><br>

		<label for="description">Beschrijving:</label><br>
		<textarea id="description" name="description" placeholder="beschrijving"></textarea><br><br>

		<label for="department">Afdeling:</label><br>
		<select id="department" name="department">
			<option value="personeel">Personeel</option>
			<option value="horeca">Horeca</option>
			<option value="techniek">Techniek</option>
			<option value="inkoop">Inkoop</option>
			<option value="klantenservice">Klantenservice</option>
			<option value="groen">Groen</option>
		</select><br><br>

		<input type="submit" value="create">
	</form>
</div>
</body>

</html>