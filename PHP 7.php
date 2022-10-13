<!DOCTYPE>
<html  lang =" es-US ">
    <h1> Programación: Backend Developer </h1>
    <br>
    <h2> TRABAJO PRÁCTICO Nº8 </h2><hr>
    <h2> Ejercios: </h2> 
    <br> Ingresar los siguientes datos utilizando la interfaz gráfica de phpMyAdmin y almacenarlo en la
base de datos anteriormente creada en la Tarea N°.
a. buzo, nike, xxl, 600
b. buzo, addidas, l, 400 <br>
    <?php 
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$db=mysql_connect($servidor,$usuario,$contrasena);
mysql_select_db("prendas en stock",$db);
$sql = "create table `stock` (`IDstock` int(6) not null auto_increment primary key) type = MyISAM;";
mysql_select_db("prendas en stock",$con);
$sql1 = "insert into `prendas en stock` 
        (`tipo`, `marca`, `talle`, `precio`)
        value ('buzo','nike','xxl','600');";
$sql2 = "insert into `agenda` 
       (`tipo`, `marca`, `talle`, `precio`)
        value ('buzo','addidas','l', '400');";
mysql_query($sql1,$con);
mysql_query($sql2,$con);
mysql_close($db)
?>
<br> Mediante código PHP, consultar a la base de datos lo siguiente:
a. Listar todos los registros
b. Listar todos los registros cuyo tipo de prenda sea ‘buzo’
c. Listar todos los registros cuya marca sea ‘nike’
d. Listar todos los registros cuyo precio sea mayor a ‘500 <br>
    <?php 
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$db=mysql_connect($servidor,$usuario,$contrasena);
mysql_select_db("prendas en stock",$db);
mysql_select_db("prendas en stock",$con);
$sql="$sql * from `prendas en stock`";
$sql="`buzo` * from `prendas en stock`";
$sql="`nike` * from `prendas en stock`";
$sql="`500` * from `prendas en stock`";
mysql_close($db)
?>
    </html>