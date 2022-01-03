<?php
  

 
include("abrir_conexion.php");
      
$id =$_REQUEST['id'];
$USUARIO= $_POST['USUARIO'];
$CORREO= $_POST['CORREO'];
$PASSWORD= $_POST['PASSWORD'];
$SEXO= $_POST['SEXO'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        $_UPDATE_SQL="UPDATE $tabla_db2 Set 
  nombre='$USUARIO', 
  correo='$CORREO',
  password='$PASSWORD', 
  sexo='$SEXO',
  imagen= '$imagen'

  WHERE id='$id'"; 

  mysqli_query($conexion,$_UPDATE_SQL); 
  
echo "LA ACTUALIZACION FUE EXITOSA";
header("Location: Monstrar_tabla_user_oficial.php");


?>