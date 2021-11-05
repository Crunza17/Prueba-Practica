<?php
	require_once("../../Model/consulta_m.php");
	$per = new personas_mod();
	$datos = $per -> get_personas();

	require_once("tabla/vista.php");
?>