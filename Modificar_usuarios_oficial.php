<!DOCTYPE html>
<html>
<head>
	
	<title>MODIFICAR/ACTUALIZAR/ELIMINAR</title>
</head>
<body>
	<?php
					include("abrir_conexion.php");

					$id = $_REQUEST['id'];
					

					$query = "SELECT * FROM usuarios WHERE id = '$id'";
					$resultado = $conexion ->query($query);

					$row = $resultado ->fetch_assoc();
						
					
				?>
				<<body background="faro.gif">
	<center>
		<table>
		<form action="proceso_modifica_usuarios_oficial.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data"/>

	


		<img width="200" height="150"src="data:image/jpg;base64,<?php  echo base64_encode($row['imagen'])?>">
		
		<table>
	<table>
	<th > <?php echo 'NOMBRE DEL USUARIO'.$row['nombre'];?></th><br>
</table>
<table>
	<th > <?php echo 'CORREO'.$row['correo'];?></th><br><br>
</table>

		<table>
		<th > <?php echo 'PASSWORD'.$row['password'];?></th><br>
		</table>
		<table>
		<th > <?php echo 'SEXO'.$row['sexo'];?></th><br>
		</table>

			<table>
		<th > <?php echo 'INGRESE DATOS A ACTUALIZAR';?></th><br>
		</table>
		
</table>
</table>


		

<div class="form-group">
      <center><label for="doc">NOMBRE DEL USUARIO</label>
      <input type="text" name="USUARIO" class="form-control" id="USUARIO" placeholder="nombre USUARIO"></center>
    </div>

    <div class="form-group">
        <center><label for="nombre">CORREO <br></label>
        <input type="text" name="CORREO" class="form-control" id="CORREO" placeholder="CORREO" ></center>
    </div>

    <div class="form-group">
       <center> <label for="dir"><br>PASSWORD</label>
        <input type="text" name="PASSWORD" class="form-control" id="PASSWORD" placeholder="PASSWORD"></center>
    </div>

    <div class="form-group">
       <center><label for="tel">SEXO<br> </label>
        <input type="text" name="SEXO" class="form-control" id="SEXO" placeholder="SEXO"></center> 
    </div>

 </table>



    <div class="form-group">
        <br><center><label for="tel"><br><center>ACTUALIZAR IMAGEN</label></center>
       <center><input type="FILE" name="imagen" class="form-file" ></center></center><br>



    </div>
   
    
    <center>
      <h1><input type="submit" value="ACTUALIZAR" class="btn btn" name="btn_registrar"></h1>
      

</form>

</body>

</html>