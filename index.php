// Dos maneras de hacer Random:
// La primera un número aleatorio
// la segunda un número entre el mínimo y el máximo
// rand();
// rand(min,max);
// ************************************************
<?php
$nombres = ['toni','jorge', 'julia', 'jose', 'mateo', 'jaume', 'petro', 'alejandro', 'fran', 'adrian', 'lolo', 'cristian','jordi', 'david', 'luis', 'alex'];
?>
<?php

echo (rand(10, 30) . "<br>");
echo (rand(1, 1000000) . "<br>");
echo (rand());
?>

// Resultado
// 20
// 442549
// 830380191