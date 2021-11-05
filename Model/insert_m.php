<?php
	session_start();
    $_SESSION['error'] = $stock;
    session_destroy();
	include ('../Conexion/conexion.php');
	$conexion -> query("insert into PRODUCTOS values ('$_REQUEST[txtid]','$_REQUEST[txtnombre]','$_REQUEST[txtreferencia]','$_REQUEST[txtprecio]','$_REQUEST[txtpeso]', '$_REQUEST[txtcategoria]', '$_REQUEST[txtstock]', '$_REQUEST[txtcreacion]', null);")
	or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/index.php');
?>