<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 5</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$resultFor = 0;
$resultWhile = 0;

$counter = 0;
while($counter <= 10)
{
    $resultWhile += $counter;
    $counter++;
}
echo $resultWhile;

echo "<br>";

for($i = 0; $i <= 10; $i++)
{
    $resultFor += $i;
}
echo $resultFor;
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>