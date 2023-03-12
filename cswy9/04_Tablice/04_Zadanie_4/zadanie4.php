<?php
/**
 * Oto przykładowy kod w PHP, który tworzy tablicę z 10 dowolnymi liczbami, 
 * znajduje największą liczbę w tablicy za pomocą pętli for i wypisuje ją na stronie:
 * 
 */
// Tworzenie tablicy z 10 dowolnymi liczbami
$numbers = array(24, 45, 17, 9, 52, 81, 33, 76, 11, 13);
//$numbers = array(-24, -45, -17, -9, -52, -81, -33, -76, -11, -13);
// Inicjalizacja zmiennej max
$max = $numbers[0];
//$max = -INF;
// Znajdowanie największej liczby w tablicy
for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
}

// Wypisanie największej liczby na stronie
echo "Największa liczba w tablicy to: " . $max . ".";


/**
 * W tym przykładzie, zmienna $numbers przechowuje tablicę z 10 liczbami, a zmienna $max jest inicjalizowana na wartość pierwszego elementu w tablicy. Następnie, za pomocą pętli for, każda liczba z tablicy jest porównywana z wartością zmiennej $max, a jeśli jest większa, wartość zmiennej $max jest aktualizowana. Na końcu, wynik jest wypisywany na stronie przy użyciu funkcji echo.
 * 
 * 
 */
?>
