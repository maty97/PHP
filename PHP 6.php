<!DOCTYPE>
<html  lang =" es-US ">
    <h1> Programación: Backend Developer </h1>
    <br>
    <h2> TRABAJO PRÁCTICO Nº7 </h2><hr>
    <h2> Ejercios: </h2> 
    <br> Una tienda de ropa tiene como objetivo almacenar en una base de datos las prendas en stock <br>
    <?php 
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$db=mysql_connect($servidor,$usuario,$contrasena);
mysql_select_db("prendas en stock",$db);
$sql = "create table `stock` (`IDstock` int(6) not null auto_increment primary key) type = MyISAM;";
mysql_select_db("prendas en stock",$con);
$sql = "alter table `stock` 
        add `tipo` text(50) not null default 'buzo', 
        add `marca` text(25) not null default 'nike', 
        add `talle` text(10) not null default 'xl', 
        add `precio` int(1000) not null default '500' ";
mysql_query($sql,$db);
mysql_select_db("prendas en stock",$con);
$sql = "alter table `stock` 
        add `tipo` text(50) not null default 'buzo', 
        add `marca` text(25) not null default 'addidas', 
        add `talle` text(10) not null default 'xxl', 
        add `precio` int(1000) not null default '600' ";
mysql_query($sql,$db);
mysql_select_db("prendas en stock",$con);
$sql = "alter table `stock` 
        add `tipo` text(50) not null default 'buzo', 
        add `marca` text(25) not null default 'supreme', 
        add `talle` text(10) not null default 'l', 
        add `precio` int(1000) not null default '300' ";
mysql_query($sql,$db);
mysql_select_db("prendas en stock",$con);
$sql = "alter table `stock` 
        add `tipo` text(50) not null default 'remera', 
        add `marca` text(25) not null default 'nike', 
        add `talle` text(10) not null default 's', 
        add `precio` int(1000) not null default '800' ";
mysql_query($sql,$db);
mysql_select_db("prendas en stock",$con);
$sql = "alter table `stock` 
        add `tipo` text(50) not null default 'remera', 
        add `marca` text(25) not null default 'addidas', 
        add `talle` text(10) not null default 'xxxl', 
        add `precio` int(1000) not null default '500' ";
mysql_query($sql,$db);
mysql_select_db("prendas en stock",$con);
$sql = "alter table `stock` 
        add `tipo` text(50) not null default 'remera', 
        add `marca` text(25) not null default 'supreme', 
        add `talle` text(10) not null default 'm', 
        add `precio` int(1000) not null default '400' ";
mysql_query($sql,$db);
mysql_close($db)
?>
    </html>