<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 2</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$nr1 = 5;
$nr2 = 7;
$nr3 = 9;

if($nr1 > $nr2 && $nr1 > $nr3)
{
    echo "Największa z liczb " . $nr1 . ", " . $nr2 . ", " . $nr3 . " to " . $nr1;
}
elseif($nr2 > $nr1 && $nr2 > $nr3)
{
    echo "Największa z liczb " . $nr1 . ", " . $nr2 . ", " . $nr3 . " to " . $nr2;
}
else
{
    echo "Największa z liczb " . $nr1 . ", " . $nr2 . ", " . $nr3 . " to " . $nr3;
}
?>
<br>
<!--Powyżej wpisz kod PHP-->
</body>
</html>