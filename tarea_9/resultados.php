<?php
	include_once('conexion.php');
	$titulo = "GET Y POST";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
	</head>
	<body>
		<h1><?php echo $titulo; ?> </h1>
		
		<?php include_once('menu.php'); 
			echo "La variable pasada por GET es : " . $_GET['id']	
		?>		
	</body>
</html>