<!DOCTYPE>
<html  lang =" es-US ">
    <h1> Programación: Backend Developer </h1>
    <br>
    <h2> TRABAJO PRÁCTICO Nº6 </h2><hr>
    <h2> Ejercios: </h2> 
    <br> Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro <br>
    <?php
$numeros_pares = [2,4,6,8,10,12,14,16,18,20];
$todos_los_numeros = array_merge($numeros_pares);
print_r($todos_los_numeros);
?>
<br> Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r() <br>
    <?php
$nombre = ["Pedro", "Ana"];
$edad = [34];
$hijo = [1];
$datos = array_marge($nombre, $edad, $hijo);
print_r($datos);
?>
<br> Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455 <br>
    <?php
$nombre1 = ["Pedro"];
$apellido = ["Torres"];
$direccion = ["Av. Mayor 3703"];
$telefono = [1122334455];
$datos1 = array_marge($nombre1, $apellido, $direccion, $telefono);
print_r($datos1);
?>
<br> Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid <br>
    <?php
$ciudad = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
$datos2 = array_marge($ciudad);
print_r($datos2);
?>
<br> Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD <br>
    <?php
$ciudad2 = array("MD" => "Madrid", "BCL" => "Barcelona", "LD" => "Londres", "NY" => "New York", "LA" => "Los Angeles", "CCG" => "Chicago");
asort($ciudad2);
foreach ($ciudad2 as $key => $val) {
    echo $key. "=" . $val . "<br>";
}
?>
    </html>