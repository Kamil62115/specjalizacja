<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Kalkulator</title>
</head>
<body>

<h2>Kalkulator dystansu</h2>

<form method="post">
	<label>Spalanie:</label><br>
	<input name="spalanie"><br><br>

	<label>Paliwo:</label><br>
	<input name="paliwo"><br><br>

	<input type="submit" value="Oblicz">
</form>

<?php
if ($messages){
	echo '<ul style="color:red">';
	foreach ($messages as $m) echo "<li>$m</li>";
	echo '</ul>';
}
if ($result!==null){
	echo "<p>Możesz przejechać: <b>".round($result,2)." km</b></p>";
}
?>

<p>
<a href="<?php echo _APP_URL ?>/app/inna_chroniona.php">Inna chroniona</a> |
<a href="<?php echo _APP_URL ?>/app/security/logout.php">Wyloguj</a>
</p>

</body>
</html>
