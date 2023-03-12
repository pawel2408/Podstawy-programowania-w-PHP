<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Prework PHP - zadanie 8</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$n = 5;
for ($i = 0; $i < $n; $i++) {
    $row = '';
    for ($j = 0; $j < $n; $j++) {
        $row .= '* ';
    }
    echo $row . '<br>';
}
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>