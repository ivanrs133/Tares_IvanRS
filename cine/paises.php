<?php
	include_once ("variables.php");
	$titulo_pagina = "paises";
	$paises = mysql_query("SELECT * FROM paises");
?>
	<!DOCTYPE html>
	<html>
		<head>
		<?php include_once ("head.php"); ?>
		
		</head>
		<body>
			<header>
			<h1><?php echo $titulo_sitio; ?></h1>
			<?php include_once ("menu.php"); ?>
		</header>
		
		
		
		<?php
		//mysql_fetch_array descompone el arreglo en cada elemento
		while($fila = mysql_fetch_array($paises)){
			echo $fila['nombre'];
			echo "<br/>";
		}
		?>
		
		
		</body>
	</html>