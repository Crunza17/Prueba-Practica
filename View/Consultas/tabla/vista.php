<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Personas</title>
		<link rel="stylesheet" type="text/css" href="../../Assets/tablas.css">
	</head>
	<body>
		<center>
			<table id="tabla" border="1"><th>Id.</th><th>Nombre</th><th>Referencia</th><th>Precio</th><th>Peso</th><th>Categoría</th><th>Stock</th><th>Creación</th><th>Ultima Venta</th>
				<?php
					foreach($datos as $dato)
					{
						echo '<tr> 
						<td>'.$dato["ID"].'</br>'.'</td>
						<td>'.$dato["NOMBRE_PRODUCTO"].'</br>'.'</td> 
						<td>'.$dato["REFERENCIA"].'</br>'.'</td> 
						<td>'.$dato["PRECIO"].'</br>'.'</td> 
						<td>'.$dato["PESO"].'</br>'.'</td>
						<td>'.$dato["CATEGORIA"].'</br>'.'</td>
						<td>'.$dato["STOCK"].'</br>'.'</td>
						<td>'.$dato["FECHA_CREACION"].'</br>'.'</td>
                        <td>'.$dato["ULTIMA_VENTA"].'</br>'.'</td>
						</tr>';
					}
				?>
			</table>
		</center>
	</body>
</html>