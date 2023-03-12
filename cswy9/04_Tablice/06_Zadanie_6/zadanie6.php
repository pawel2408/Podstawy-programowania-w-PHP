<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 6</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$numbers = array();
for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(1, 100);
}

for ($i = count($numbers) - 1; $i >= 0; $i--) {
    echo $numbers[$i] . "<br>";
}
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>