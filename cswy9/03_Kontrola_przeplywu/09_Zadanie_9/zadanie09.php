<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 9</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$n = 5;
for($i = 1; $i <= $n; $i++)
{
    for($j = 1; $j <= $n; $j++)
    {
        if($j <= $i)
        {
            echo "* ";
        }
        else
        {
            echo "$j ";
        }
    }
    echo "<br>";
}
?>
<!--Powyżej wpisz kod PHP-->
