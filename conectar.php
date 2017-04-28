<!--
/* #################################################################### \
||                                                                     ||
|| Use of this software is strictly prohibited.                        *#
|| # Copyright (C) 2017  Moises Ramirez.                               *#
||---------------------------------------------------------------------*#
||---------------------------------------------------------------------*#
||              UNIVERSIDAD AUTONOMA DE CHIAPAS                        ||
\ ################################################################### */
-->
<?PHP
//parametros
$hostdb="localhost"; //Nombre Del Servidor 
$usuariodb="root";   //Nombre Del Usuarios
$clavedb="";		 //Clave Del Servidor 
$basededatos="AbarrotesBD"; //Nombre De La Base De Datos 
//Cadena De Conexion Completa
$cadenaConexion=mysqli_connect("$hostdb","$usuariodb","$clavedb","$basededatos");
?>