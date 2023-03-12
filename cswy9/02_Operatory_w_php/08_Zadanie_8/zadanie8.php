<?php

/*
operatory równości:

a) == luźna róność porównuje tylko wartość zmiennych.
oznacza to, że 5 == "5" = true.
podobnie zachowują się: !=, <>

b) === ścisła róność porównuje wartości oraz typ zmiennych.
oznacza to, że 6 === "6" = folse.
podobnie zachowują się: !==

wynikiem jest wartość logiczna (boolean) czyli true lub false.

dzieje się tak z powodu rzutowania zmiennych, silnik PHP
będzie zmieniał typ zmiennej, próbując dopasować dane.
*/