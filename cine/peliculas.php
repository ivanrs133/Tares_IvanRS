<?php
	include_once ("variables.php");
	$titulo_pagina = "Películas de Terror";
	$peliculas = mysql_query("SELECT * FROM peliculas");
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
			while($fila = mysql_fetch_array($peliculas)){
				echo "<a href='pelicula.php?id=" .$fila['id']. "'>";
				echo "<div class='pelicula'>";
				if($fila['poster'] == ""){
					echo "<img src='img/peliculas/posters/disponible.png'/>";
				}else{
					echo "<img src='img/peliculas/posters/" . $fila['poster'] . "'>";
					};
					echo "<div class='datopelicula nombrepelicula'>" . $fila['titulo'] . " </div>";
					echo "<div class='datopelicula'>" . $fila['fecha_estreno'] . "</div>";
					echo "<div class='datopelicula'>" . $fila['duracion'] . "min</div>";
					echo "</div>";
					echo "</a>";
			}
			?>
		
		</body>
	</html>