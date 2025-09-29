<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator Dystansu</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

<h1>Kalkulator Dystansu Samochodowego 🚗</h1>

<form action="dystans.php" method="post">
    <label for="zuzycie">Średnie spalanie (l/100km): </label>
    <input type="text" name="zuzycie" value="<?php if (isset($zuzycie)) echo $zuzycie; ?>" placeholder="Np. 7.5" /><br>

    <label for="paliwo">Ilość paliwa w baku (l): </label>
    <input type="text" name="paliwo" value="<?php if (isset($paliwo)) echo $paliwo; ?>" placeholder="Np. 50" /><br>

    <input type="submit" value="Oblicz Dystans" />
</form>

<?php
if (isset($messages) && count($messages) > 0) {
    echo '<h3> Błędy w formularzu:</h3>';
    echo '<ul class="error-list">';
    foreach ($messages as $msg) {
        echo '<li>'.$msg.'</li>';
    }
    echo '</ul>';
}

if (isset($wynik) && is_numeric($wynik)) {
    $zuzycie_pokaz = round($zuzycie, 2);
    $paliwo_pokaz = round($paliwo, 2);
    
    echo '<div class="result-box">';
    echo "<h3> Wynik:</h3>";
    echo "<p>Przy spalaniu $zuzycie_pokaz l/100km i paliwie w baku $paliwo_pokaz l możesz przejechać około <strong>".round($wynik, 1)." km</strong>.</p>";
    echo '</div>';
}
?>

</body>
</html>