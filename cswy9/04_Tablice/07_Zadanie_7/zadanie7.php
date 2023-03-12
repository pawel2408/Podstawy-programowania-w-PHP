<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 7</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$randNumbers = array();
for ($i = 0; $i < 100; $i++) {
    $randNumbers[] = mt_rand(0, 20);
}
echo '<div class="numbersList">';
foreach ($randNumbers as $number) {
    echo $number . ',';
}
echo '</div>';
$sum = array_sum($randNumbers);
echo '<div class="result">Suma 100 losowych liczb od 0 do 20 to: ' . $sum . '.</div>';
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>