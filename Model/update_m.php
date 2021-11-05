<?php
	session_start();
    $_SESSION['error'] = $stock;
    session_destroy();
	include ('../Conexion/conexion.php');
	$conexion -> query("update PRODUCTOS set NOMBRE_PRODUCTO='$_REQUEST[txtnombre]', REFERENCIA='$_REQUEST[txtreferencia]',
		PRECIO='$_REQUEST[txtprecio]', PESO='$_REQUEST[txtpeso]', CATEGORIA='$_REQUEST[txtcategoria]', STOCK='$_REQUEST[txtstock]',
		FECHA_CREACION='$_REQUEST[txtcreacion]' where ID='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/index.php');
?>