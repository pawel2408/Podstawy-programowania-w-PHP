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
$n = 5;
$counter = 0;
while($counter <= $n)
{
    if($counter % 2 == 0)
    {
        echo $counter . " - parzysta";
    }
    else
    {
        echo $counter . " - nieparzysta";
    }
    echo "<br>";
    $counter++;
}
echo "<br>";
for($i = 0; $i <= $n; $i++)
{
    if($i % 2 == 0)
    {
        echo $i . " - parzysta";
    }
    else
    {
        echo $i . " - nieparzysta";
    }
    echo "<br>";
}
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>