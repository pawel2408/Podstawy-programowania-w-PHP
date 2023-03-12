<?php
//$numbers = array(24, 45, 17, 9, 52, 81, 33, 76, 11, 13);
$numbers = array(-24, -45, -17, -9, -52, -81, -33, -76, -11, -13);
$max = $numbers[0];
// modyfikacja: (podpowiedź była nie za użyteczna)
// $max = -INF;
for ($i = 1; $i < count($numbers); $i++)
{
    if ($numbers[$i] > $max)
    {
        $max = $numbers[$i];
    }
}
echo "Największa liczba w tablicy to: " . $max . ".";
?>