<?php
/**
 * ZADANIE 3 - TABLICE
 * 
 * Oto przykładowy kod w PHP, który tworzy tablicę z 10 dowolnymi liczbami, 
 * oblicza sumę tych liczb za pomocą pętli for i wypisuje ją na stronie:
 */
// Tworzenie tablicy z 10 dowolnymi liczbami
$numbers = array(24, 45, 17, 9, 52, 81, 33, 76, 11, 13);

// Inicjalizacja zmiennej sum
$sum = 0;

// Obliczenie sumy liczb z tablicy
for ($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
}

// Wypisanie sumy na stronie
echo "Suma elementów tablicy to: " . $sum . ".";

/**
 * W tym przykładzie zmienna $numbers przechowuje tablicę z 10 liczbami, 
 * a zmienna $sum jest inicjalizowana na 0. Następnie, 
 * za pomocą pętli for, każda liczba z tablicy jest dodawana do zmiennej $sum. 
 * Na końcu, wynik jest wypisywany na stronie przy użyciu funkcji echo.
 * 
 */

 ?>