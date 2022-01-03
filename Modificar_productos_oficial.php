<!DOCTYPE html>
<html>
<head>
	
	<title>MODIFICAR/ACTUALIZAR/ELIMINAR</title>
</head>
<body>
	<?php
					include("abrir_conexion.php");

					$id = $_REQUEST['id'];
					

					$query = "SELECT * FROM productos WHERE id = '$id'";
					$resultado = $conexion ->query($query);

					$row = $resultado ->fetch_assoc();
						
					
				?>
				<body background="#">
	<center>
		<table>
		<form action="proceso_modifica_productos_oficial.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">

	


		<img width="200" height="150"src="data:image/jpg;base64,<?php  echo base64_encode($row['imagen'])?>">
		
		<table>
	<table>
	<th > <?php echo 'NOMBRE DEL PRODUCTO'.$row['producto'];?></th><br>
</table>
<table>
	<th > <?php echo 'CARACTERISTICAS'.$row['caracteristicas'];?></th><br><br>
</table>

		<table>
		<th > <?php echo 'PRECIO'.$row['precio'];?></th><br>
		</table>
		<table>
		<th > <?php echo 'STOCK'.$row['stock'];?></th><br>
		</table>

			<table>
		<th > <?php echo 'INGRESE DATOS A ACTUALIZAR';?></th><br>
		</table>
		
</table>
</table>


		

<div class="form-group">
      <center><label for="doc">NOMBRE DEL PRODCUTO<br></label>
      <input type="text" name="producto1" class="form-control" id="producto1" placeholder="producto1"></center>
    </div>

    <div class="form-group">
        <center><label for="nombre">CARACTERISTICAS<br></label>
        <input type="text" name="CARACTERISTICAS2" class="form-control" id="CARACTERISTICAS2" placeholder="correo2" ></center>
    </div>

    <div class="form-group">
       <center> <label for="dir">PRECIO<br></label>
        <input type="text" name="PRECIO2" class="form-control" id="PRECIO2" placeholder="password2"></center>
    </div>

    <div class="form-group">
       <center><label for="tel">STOCK<br> </label>
        <input type="text" name="STOCK2" class="form-control" id="STOCK2" placeholder="STOCK2"></center> 
    </div>

 </table>



    <div class="form-group">
        <br><center><label for="tel"><br><center>ACTUALIZAR IMAGEN DEL PRODUCTO </label></center>
       <center><input type="FILE" name="imagen" class="form-file" ></center></center><br>



    </div>
   
    
    <center>
      <h1><input type="submit" value="ACTUALIZAR" class="btn btn" name="btn_registrar"></h1>
      

</form>

</body>

</html>