<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">

function ConfirmDelate(){
var respuesta = confirm("SEGURO QUE QUIERES ELIMINAR EL PRODUCTO ?");

if
(respuesta ==true){
return true;
}
else{
return false;
}

}
</script>


	<style>
   p {display:inline}
</style>
  <title>MOSTRAR REGISTROS DE LA TIENDA </title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div style="float: right; width: 300px;">
					<form action="indexadministrador.html">
										<p align="right">
					<div style="float: left; width: 130px"><input class="btn btn-warning" type="submit" name="volver" value="VOLVER"></div>
										</p>
	
					</form>
	
										<form action="proceso_busqueda_pruductos_oficial.php">
										<p  align="right">
			<div style="float: right; width: 130px"><input class="btn btn-warning" type="submit" name="buscar" value="BUSCAR"></div>
										</p>
					</form>
	</div>
		<table border="2" class="table table-striped">

			<thead>
				<tr>
					<th colspan="9"><h1 align="center">PRODUCTOS  REGISTRADOS</h1></th>

					
				</tr>
				<tr>
					<th class="danger" scope="col" >ID</th>
					<th class="danger" scope="col" >PRODUCTO</th>
					<th class="danger" scope="col" >CARACTERISTICAS</th>
					<th class="danger" scope="col" >PRECIO</th>
					<th class="danger" scope="col" >STOCK</th>
					<th class="danger" scope="col" >IMG DEL PRODUCTO</th>
					<th class="danger" scope="col" colspan="3" >MODIFICACIONES</th>
					

					
					
				</tr>
			</thead>
			<tbody>
				<?php
					include("abrir_conexion.php");
					$query = "SELECT * FROM $tabla_db1";
					$resultado = $conexion ->query($query);

					while ($row = $resultado ->fetch_assoc()) {
						
					
				?>

					<tr >
						<td class="info"> <?php echo $row['id'];?></td>
						<td class="success"> <?php echo $row['producto'];?></td>
						<td class="info"> <?php echo $row['caracteristicas'];?></td>
						<td class="success"> <?php echo $row['precio'];?></td>
						<td class="info"> <?php echo $row['stock'];?></td>
						<td class="success"> <img class="img-thumbnail" width="100" height="100"src="data:image/jpg;base64,<?php  echo base64_encode($row['imagen'])?>"></td>

						<th><a href="Eliminar_productos_oficial.php?id=<?php echo $row['id'];?>"onclick="return ConfirmDelate()">ELIMINAR</a></th>
						<th style="color: white;"><a href="Modificar_productos_oficial.php?id=<?php echo $row['id'];?>">ACTUALIZAR</a></th>
					<!--	<th style="color: white;"><a href="ejemplo.php?id=<?php echo $row['id'];?>">GENERAR PDF</a></th>-->
						
						
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	

				
</body>
</html>