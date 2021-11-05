<?php
    session_start();
    $_SESSION['error'] = $stock;
    session_destroy();
    
    include ('../Conexion/conexion.php');
    $result = $conexion -> query("select STOCK from PRODUCTOS where ID='$_REQUEST[txtid]';")
    or die("Error");

    $stock = 0;
    if ($result) {
        $fila = $result->fetch_assoc();
        $stock = ($result->num_rows === 0) ? 0 :  $fila["STOCK"];
    }
    $stck = (int)$stock; 

    if ($stck > 0){
        $conexion -> query("update PRODUCTOS set STOCK = (SELECT STOCK FROM PRODUCTOS WHERE ID='$_REQUEST[txtid]') - 1, ULTIMA_VENTA='$_REQUEST[txtultima]' where ID='$_REQUEST[txtid]';")
        or die("Error");
        $conexion -> close();
    
        header('Location: ../View/index.php');
    } else if ($stck <= 0){
        session_start();
		$_SESSION['error'] = $stock;	
		header('Location: ../View/index.php');
    }
?>