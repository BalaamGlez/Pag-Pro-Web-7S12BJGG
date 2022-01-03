
<?php
include("abrir_conexion.php");
			$id = $_REQUEST['id'];
			

			$query = "DELETE FROM usuarios WHERE id = '$id'";
			$resultado = $conexion -> query ($query);

			if ($resultado) {
				header("Location: Monstrar_tabla_user_oficial.php");
			}else{
				echo "NO SE elimino";
			}





?>