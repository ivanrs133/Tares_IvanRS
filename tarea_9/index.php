<?php

 // Es importante primero extablecer la conexion para despues hacer un query.
 include_once('conexion.php');
  $titulo = "Licenciaturas";

 
 //definimos una variable llamada licenciaturas que sea igual a mysql_query para poder seleccionar y traernos todo acerca de nuestra base de datos que es la de carreras.
 $licenciaturas = mysql_query("SELECT * FROM licenciaturas");
 //$alumnos = mysql_query("SELECT * FROM alumnos");

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
		<!--echo muestra lo almacenado en una variable-->
		
		<style type="text/css">
	
			/* http://meyerweb.com/eric/tools/css/reset/ 
		   	v2.0 | 20110126
		   	License: none (public domain)
			*/

			html, body, div, span, applet, object, iframe,
			h1, h2, h3, h4, h5, h6, p, blockquote, pre,
			a, abbr, acronym, address, big, cite, code,
			del, dfn, em, img, ins, kbd, q, s, samp,
			small, strike, strong, sub, sup, tt, var,
			b, u, i, center,
			dl, dt, dd, ol, ul, li,
			fieldset, form, label, legend,
			table, caption, tbody, tfoot, thead, tr, th, td,
			article, aside, canvas, details, embed, 
			figure, figcaption, footer, header, hgroup, 
			menu, nav, output, ruby, section, summary,
			time, mark, audio, video {
				margin: 0;
				padding: 0;
				border: 0;
				font-size: 100%;
				font: inherit;
				vertical-align: baseline;
			}
			/* HTML5 display-role reset for older browsers */
			article, aside, details, figcaption, figure, 
			footer, header, hgroup, menu, nav, section {
				display: block;
			}
			body {
				line-height: 1;
			}
			ol, ul {
				list-style: none;
			}
			blockquote, q {
				quotes: none;
			}
			blockquote:before, blockquote:after,
			q:before, q:after {
				content: '';
				content: none;
			}
			table {
				border-collapse: collapse;
				border-spacing: 0;
			}
		
			h1{
				font-family: Helvetica, sans-serif;
				font-size: 100px;
				font-weight: bold;
				text-align: center;
			}
		
			li{
				font-family: Helvetica, sans-serif;
				font-size: 50px;
				font-weight: bold;
				text-align: center;
			}
		
			p{
				font-family: Helvetica, sans-serif;
				font-size: 20px;
				font-weight: bold;
				text-align: center;
				margin-left: auto;
				margin-right: auto;
			}
			
			a:link {
			    color: #000;
			}

			a:visited {
			    color: #000;
			}

			a:hover {
			    color: #000;
			}

			a:active {
			    color: #000;
			}
			
		</style>
		
	</head>
	<body>
		<h1><?php echo $titulo; ?> </h1>
		<br>
		<?php 
			include_once('menu.php');
			echo "<br><br>";
			while($row = mysql_fetch_array($licenciaturas)){
				echo "<p>".$row['nombre']."</p>";
			}
			
			//while($rows2 = mysql_fetch_array($alumnos)){
				//echo "<h2>".$rows2['nombre']."</h2>";
			//}
			?>	
		
	</body>
</html>