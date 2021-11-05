<?php
	session_start();
    $_SESSION['error'] = $stock;
    session_destroy();
	include ('../Conexion/conexion.php');
	$conexion -> query("delete from PRODUCTOS where ID='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/index.php');
?>