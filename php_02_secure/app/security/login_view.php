<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>Logowanie</title>
</head>
<body>

<h2>Logowanie</h2>

<form action="<?php echo _APP_URL ?>/app/security/login.php" method="post">

	<label>Login:</label><br>
	<input type="text" name="login" value="<?php out($form['login']); ?>"><br><br>

	<label>Hasło:</label><br>
	<input type="password" name="pass"><br><br>

	<input type="submit" value="Zaloguj">
</form>

<?php
if (isset($messages) && count($messages)>0){
	echo '<ul style="color:red">';
	foreach ($messages as $m) echo "<li>$m</li>";
	echo '</ul>';
}
?>

</body>
</html>
