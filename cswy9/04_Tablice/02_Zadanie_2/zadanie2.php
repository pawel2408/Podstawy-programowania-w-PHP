<?php
$fruits = ["jabłko", "banan", "kiwi"];

echo "Pierwszy owoc to: " . $fruits[0] . "<br>";

echo "Ostatni owoc to: " . $fruits[count($fruits)-1] . "<br>";

$arraySize = count($fruits);
for($i = 0; $i < $arraySize; $i++)
{
    echo $fruits[$i] . "<br>";
}