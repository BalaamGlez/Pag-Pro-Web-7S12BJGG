<!DOCTYPE html>
<html>
<head>
  
  <title>REGISTRO DE PRODUCTOS</title>
  <!-- Latest compiled and minified CSS -->
<body background="#">

  <a href="Monstrar_tabla_productos_oficial.php">
    
  <br><input type="button" value="REGRESAR"><br>
</a>

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

  <center><h1><strong>DATOS DEL PRODUCTO</strong></h1></center>


<center>
<?php
include("abrir_conexion.php");

          

  //CONSULTAR
   if(isset($_POST['enviar']))
      {
        $bus= $_POST['bus'];
        $valido =0;

        if ($bus=="") {
          echo "EL DOCUMENTO ES UN CAMPO OBLIGATORIO";
        }else{


         //CONSULTAR
               $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1  WHERE producto = '$bus'");
               while($consulta = mysqli_fetch_array($resultados))
  {   echo"<h4>";
         echo 'EL NOMBRE DEL PRODUCTO ES:'.$consulta['producto']."<br>";
         echo "<br>".'CARACTERISTICAS: '.$consulta['caracteristicas']."<br>";
         echo "<br>".'EL PRECIO ES:   '.$consulta['precio']."<br>";
         echo "<br>".'STOCK'.$consulta['stock'].''."<br>";
         echo"</h4>";
         ?>
<br><img width="500" src="data:image/jpg;base64,<?php  echo base64_encode($consulta['imagen'])?>">
<?php
        $valido++;
  } 


        }if ($valido==0) {echo "EL USUARIO NO EXISTE EN LA TIENDA ";  }
      }
  ?>
</center>
  </html>
