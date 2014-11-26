<?php
	
$conexion = mysql_connect('localhost','root','root');
//signo de ! php distinto de--- die mata la conexion y muestra mensaje no se pudo conectar
if (!$conexion){
	die('No se pudo conectar:' . mysql_error());
}
//conexion con la base de datos licenciaturas
//mysql_select_db mysql_set_charset mysql_connect  instrucciones de php
$bd = mysql_select_db('cine', $conexion);
mysql_set_charset('utf-8', $conexion);
mysql_query("SET NAMES 'utf8'");
	
?>