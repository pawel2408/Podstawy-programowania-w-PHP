<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 12</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$a = 2;
$b = 1;
$c = 6;

while($a > $b || $b > $c)
{
    if($a > $b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    if($b > $c)
    {
        $temp = $b;
        $b = $c;
        $c = $temp;
    }
}
echo "Liczby w kolejności rosnącej to: $a, $b, $c";
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>