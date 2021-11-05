<?php
	session_start();
	if(isset($_SESSION['error'])){
		echo '<script language="javascript">alert("No hay productos en stock");</script>';
	}
?>	
<!DOCTYPE html>
<html>
    <head>
        <title>Productos</title>
        <meta chatset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../Assets/style.css"/>
    </head>
    <body>
        <div class="panelprincipal">
            <div class="panel1">
                <h1>Productos</h1>
                <div class='subpanel1'>
                    <iframe src="Consultas/consulta.php" height="100%" width="100%"></iframe>
                </div>
            </div>
            <div class="panel">
                <form id="form">
                    <br><br><br>
                    <label>Código:</label>
                    <input class="textbox" type="text" name="txtid" autofocus="" pattern="\d*" title="Solo se permite escribir numeros" required><br><br>
                    <label>Nombre:</label>       
                    <input class="textbox" type="text" name="txtnombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" 
                    title="Solo se permite escribir letras" required><br><br>
                    <label>Referencia:</label>     
                    <input class="textbox" type="text" name="txtreferencia" required><br><br>
                    <label>Precio:</label>      
                    <input class="textbox" type="text" name="txtprecio" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required><br><br>
                    <label>Peso(lb):</label>         
                    <input class="textbox" type="text" name="txtpeso" pattern="[0-9,.]+" title="Solo se permite escribir numeros"><br><br>
                    <label>Categoría:</label>      
                    <input class="textbox" type="text" name="txtcategoria" required><br><br>
                    <label>Stock:</label>      
                    <input class="textbox" type="text" name="txtstock" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required><br><br>
                    <label>Fecha de creación:</label>      
                    <input class="textbox" type="date" name="txtcreacion" required><br><br>
                    <br><br>
                    <input class="btns" type="submit" name="btninsertar" value="Insertar" onclick="this.form.action = '../Controller/insert_c.php'"><br><br>
                    <input class="btns" type="submit" name="btnmodificar" value="Modificar" onclick="this.form.action = '../Controller/update_c.php'"><br><br><br><br>
                </form>
                <form id="form">
                    Código:
                    <input class="textbox" type="text" name="txtid" pattern="\d*" title="Solo se permite escribir numeros"><br><br>
                    <input class="btns" type="submit" name="btneliminar" value="Eliminar" onclick="this.form.action = '../Controller/delete_c.php'"><br><br>
                </form>
            </div>
        </div>
        <div class="panel2">
            <form id="form">
                <h2>Compra</h2>
                <label>Producto:</label>
                <input class="textbox" type="text" name="txtid" pattern="\d*" title="Solo se permite escribir numeros" required><br><br>
                <label>Fecha:</label>      
                <input class="textbox" type="date" name="txtultima" value="<?php echo date('Y-m-d');?>" required><br><br>
                <input class="btns" type="submit" name="btncomprar" value="Comprar" onclick="this.form.action = '../Controller/compra_c.php'"><br><br>
            </form>
        </div>
    </body>
</html>
