<!DOCTYPE>
<html  lang =" es-US ">
    <h1> Programación: Backend Developer </h1>
    <br>
    <h2> TRABAJO PRÁCTICO Nº5 </h2><hr>
    <h2> Ejercios: </h2> 
    <br> Mostrar los números del 1 al 100  <br>
     <?php
     $numero = 1;
     while ($numero <= 100) {
        echo $numero, "-";
        span style="color: #000088;">$numero ++;
     }
     ?>
     <br> Mostrar los números del 100 al 1  <br>
     <?php
     $numero = 100;
     while (100 >= $numero) {
        echo $numero, "-";
        span style="color: #000088;">$numero ++;
     }
     ?>
     <br> Mostrar los números impares del 1 al 100  <br>
     <?php
     int j = 1;
     while (j < 100) {
        j = j + 2;
     }
     ?>
     <br> Mostrar la suma de los números de 1 a 20  <br>
     <?php
     $suma = 0;
     for ($i = 0; $i <= 20; $i ++) {
        echo "la suma es: $suma + $i =", "<br>";
        $suma += $i;
     }
     print "el resultado de la suma total es: $suma";
     ?>
     <br> Mostrar la suma de números pares de 1 a 20  <br>
     <?php
     int j = 1;
     $suma = 0;
     for ($i = 2; $i <= 20; $i = $n + 2) {
        echo "la suma es: $suma + $i =", "<br>";
        $suma += $i;
     }
     print "el resultado de la suma total es: $suma";
     ?>
    </html>