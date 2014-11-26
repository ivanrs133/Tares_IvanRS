<?php
	$conexion = mysql_connect("localhost","root","root");

	if (!$conexion){
		die("No se pudo conectar:" . mysql_error());
	}

	$bd = mysql_select_db('prueba', $conexion);

	mysql_set_charset('utf-8', $conexion);
?>
