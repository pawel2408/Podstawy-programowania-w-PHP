<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 13</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$points = 85;

if($points < 0)
{
    echo "Ilość punktów mniejsza niż 0";
}
elseif($points > 100)
{
    echo "Ilość punktów większa niż 100";
}
elseif($points <= 39)
{
    echo "Wynik: ocena niedostateczna";
}
elseif($points <= 54)
{
    echo "Wynik: ocena dopuszczająca";
}
elseif($points <= 69)
{
    echo "Wynik: ocena dostateczna";
}
elseif($points <= 84)
{
    echo "Wynik: ocena dobra";
}
elseif($points <= 98)
{
    echo "Wynik: ocena bardzo dobra";
}
else
{
    echo "Wynik: ocena celująca";
}
echo "<br>";
switch (true) {
    case $points < 0:
        echo "Ilość punktów mniejsza niż 0";
        break;
    case $points > 100:
        echo "Ilość punktów większa niż 100";
        break;
    case $points <= 39:
        echo "Wynik: ocena niedostateczna";
        break;
    case $points <= 54:
        echo "Wynik: ocena dopuszczająca";
        break;
    case $points <= 69:
        echo "Wynik: ocena dostateczna";
        break;
    case $points <= 84:
        echo "Wynik: ocena dobra";
        break;
    case $points <= 98:
        echo "Wynik: ocena bardzo dobra";
        break;
    default:
        echo "Wynik: ocena celująca";
}
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>