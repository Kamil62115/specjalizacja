<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator dystansu</title>
</head>
<body>

<h2>Kalkulator dystansu</h2>

<form action="<?php print(_APP_URL); ?>/app/calc.php" method="post">

    <label for="id_spalanie">Średnie spalanie (l/100km): </label>
    <input id="id_spalanie" type="text" name="spalanie" value="<?php print($spalanie ?? ''); ?>" /><br /><br />

    <label for="id_paliwo">Ilość paliwa w baku (litry): </label>
    <input id="id_paliwo" type="text" name="paliwo" value="<?php print($paliwo ?? ''); ?>" /><br /><br />

    <input type="submit" value="Oblicz dystans" />
</form>

<?php
if (isset($messages) && count($messages) > 0) {
    echo '<ol style="margin: 20px; padding: 10px; background-color: #f88; border-radius: 5px; width: 300px;">';
    foreach ($messages as $msg) {
        echo '<li>'.$msg.'</li>';
    }
    echo '</ol>';
}
?>

<?php if (isset($result)) { ?>
<div style="margin: 20px; padding: 10px; background-color: #9f9; border-radius: 5px; width: 300px;">
    <?php echo 'Możesz przejechać około <strong>'.round($result, 2).' km</strong>'; ?>
</div>
<?php } ?>

</body>
</html>
