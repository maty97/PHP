<!DOCTYPEhtml>
<html  lang =" es ">
<cabeza>
    <juego de caracteres meta  =" UTF-8 ">
    <meta  http-equiv =" X-UA-Compatible " content =" IE=edge ">
    <meta  name =" viewport " content =" ancho=ancho-del-dispositivo, escala-inicial=1.0 ">
    <título > TP_1 </título>
</cabeza>
<cuerpo>
    <h1> Programación: Backend Developer </h1>
    <br>
    <h2> TRABAJO PRÁCTICO Nº2 </h2><hr>
    <h2> Ejercios: </h2> <br>
    <viejo>
        <li> Crea una variable n y validar que sea un numero positivo </li> <br> _
        <?php
                $n1 = 20 ;
                if ($n1 < 0){
                    echo "numero negativo";
                }
            ?>
        <br> <hora>
        <li> Crear una variable n y validar que sea un número mayor a 1 y menor a 10. </li> <br> _
            <?php
            $n2 = 5;
            if (1 < $n1 < 10){
                echo "el numero se encuentra dentro del rango";
            }
            ?>
        <br> <hora>
        <li> Crear una variable n y validar que sea un número mayor a 1 y menor a 10. </li> <br> _
            <?php
            $n3 = -1;
            if ( $n3 > 10){
                echo "se encuentra dentro del rango de numeros mayores que 10";
            }
            elseif ( $n3 < 2){
                echo "se encuentra dentro del rango de numeros menores que 2";
            }
            ?>
        <br> <hora>
        <li> Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales” </li> <br> _
            <?php
            $numero1 = readline("ingrese el primer numero: ");
            $numero2 = readline("ingrese el segundo numero: ");
            if ( $numero1 > $numero2 ){
                print " <p>Suma : $ num_1 + $ num_2 = " . $num_1 + $num_2 . "\n </p> ";
                print " <p>Resta : $ num_1 - $ num_2 = " . $num_1 - $num_2 . "\n </p> ";
            }
            elseif ( $numero1 < $numero2 ){
                print " <p>Multiplicación : $ num_1 x $ num_2 = " . $num_1 * $num_2 . "\n </p> ";
                print " <p>División : $ num_1 / $ num_2 = " . $num_1 / $num_2 . "\n </p> ";
                print " <p>Resto Entero : $ num_1 % $ num_2 = " . $num_1 % $num_2 ;
            }
            elseif ( $numero1 == $numero2 ){
                print " los numeros son iguales ";
            }
            ?>