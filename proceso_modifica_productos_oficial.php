<?php
  

 
include("abrir_conexion.php");
      
$id =$_REQUEST['id'];
$producto1= $_POST['producto1'];
$CARACTERISTICAS2= $_POST['CARACTERISTICAS2'];
$PRECIO2= $_POST['PRECIO2'];
$STOCK2= $_POST['STOCK2'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        $_UPDATE_SQL="UPDATE $tabla_db1 Set 
  producto='$producto1', 
  caracteristicas='$CARACTERISTICAS2',
  precio='$PRECIO2', 
  stock='$STOCK2',
  imagen= '$imagen'

  WHERE id='$id'"; 

  mysqli_query($conexion,$_UPDATE_SQL); 
  
echo "LA ACTUALIZACION FUE EXITOSA";
header("Location: Monstrar_tabla_productos_oficial.php");


?>