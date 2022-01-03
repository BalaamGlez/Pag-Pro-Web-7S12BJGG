<html>
<head>
  <script type="text/javascript">

function ConfirmDelate(){
var respuesta = confirm("SEGURO QUE LA QUIERES ELIMINAR PERRO ?");

if
(respuesta ==true){
return true;

}
else{
return false;

}

}
</script>

  <title>REGISTRO DE PRODUCTOS</title>
  <style>
    body {
      background: url(1.jpg)  ; 
      background-size: 103.1% 100%;
      background-repeat: no-repeat;
      margin: 0;
      height: 100vh;}
      h3{
        background:#FFFFFF;
      }

  </style>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

<div class="row">
  <div class="col-md-4"></div>

<!-- INICIA LA COLUMNA -->


  <div class="col-md-4">

    <center><h1 style="color: #FFFFFF">REGISTRO DE NUEVOS PRODUCTOS EN LA TIENDA </h1></center>

    <form method="POST" action="registro.php" enctype="multipart/form-data" >

    <div class="form-group">
      <label for="doc" style="color: #FFFFFF">PRODUCTO</label>
      <input type="text" name="producto" class="form-control" id="producto" placeholder="PRODUCTO">
    </div>

    <div class="form-group" class="p-3 mb-2 bg-secondary text-white">
        <label for="nombre" style="color: #FFFFFF">DESCRIPCION</label>
        <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="DESCRIPCION" >
    </div>

    <div class="form-group">
        <label for="dir" style="color: #FFFFFF">PRECIO </label>
        <input type="text" name="precio" class="form-control" id="precio" placeholder="PRECIO">
    </div>

    <div class="form-group">
        <label for="tel" style="color: #FFFFFF">STOCK </label>
        <input type="text" name="stock" class="form-control" id="stock" placeholder="STOCK">
    </div>


    <div class="form-group">
        <label for="tel" style="color: #FFFFFF">IMAGEN DEL PRODUCTO </label>
       <input type="FILE" name="imagen" class="form-file" >



    </div>
    
    
    <center>
      <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">
      <input type="submit" value="Consultar" class="btn btn-primary" name="btn_consultar">
      <input type="submit" value="Actualizar" class="btn btn-info" name="btn_actualizar">
      <input type="submit" value="Eliminar" class="btn btn-danger" name="btn_eliminar" onclick="return ConfirmDelate()">


    </center>
 <center>
  </form>
      <form action="mostrar.php">
    <br>  <input type="submit" value="Mostrar" class="btn btn-warning" name="btn_mostrar">   <br> 
      </form>
       </center>
  <?php
    include("abrir_conexion.php");
      
      $producto    ="";
      $descripcion ="";
      $precio    ="";
      $stock  ="";

      if(isset($_POST['btn_registrar']))
      { 
$producto= $_POST['producto'];
$descripcion= $_POST['descripcion'];
$precio= $_POST['precio'];
$stock= $_POST['stock'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        if ($producto==""||$descripcion==""||$precio==""||$stock=="") {
          echo "LOS CAMPOS SON OBLIGATORIOS";
        }else{

  //INSERTAR
  mysqli_query($conexion, "INSERT INTO $tabla_db1 
  (producto,caracteristicas,precio,stock,imagen) 
    values 
  ('$producto','$descripcion','$precio','$stock','$imagen')");


      }
}

      if(isset($_POST['btn_consultar']))
      {
        $producto= $_POST['producto'];
        $valido =0;

        if ($producto=="") {
          echo "EL DOCUMENTO ES UN CAMPO OBLIGATORIO";
        }else{
                   //CONSULTAR
               $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1  WHERE producto = '$producto'");
               while($consulta = mysqli_fetch_array($resultados))
  {
        echo"<h3>";
         echo $consulta['producto']."<br>";
         echo $consulta['caracteristicas']."<br>";
         echo $consulta['precio']."<br>";
         echo $consulta['stock']."<br>";
         echo $consulta['imagen']."<br>";
         echo"</h3>";
         $valido++;
  } 

        }if ($valido==0) {echo "EL PRODUCTO NO EXISTE EN LA TIENDA ";  }
      }






      if(isset($_POST['btn_actualizar']))
      {
      $producto= $_POST['producto'];
      $descripcion= $_POST['descripcion'];
      $precio= $_POST['precio'];
      $stock= $_POST['stock'];
      $imagen=$_POST['imagen'];

        if ($producto==""||$descripcion==""||$precio==""||$stock=="") {
          echo "LOS CAMPOS SON OBLIGATORIOS";
        }else{
          $valido=0;
                   //CONSULTAR
               $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1  WHERE producto = '$producto'");
               while($consulta = mysqli_fetch_array($resultados))
  {

         $valido++;
  } 

        }if ($valido==0) 
        {
          echo "EL PRODUCTO NO EXISTE EN LA TIENDA "; 
           }
           else{

    //ACTUALIZAR 
  $_UPDATE_SQL="UPDATE $tabla_db1 Set 
  producto='$producto', 
  caracteristicas='$descripcion',
  precio='$precio', 
  stock='$stock',
  imagen= '$imagen'

  WHERE producto='$producto'"; 

  mysqli_query($conexion,$_UPDATE_SQL); 
  
echo "LA ACTUALIZACION FUE TODO UN EXITO CRACK";
           }





      
      }
      if(isset($_POST['btn_eliminar']))
      {
      $producto= $_POST['producto'];
        $valido =0;

        if ($producto=="") {
          echo "EL DOCUMENTO ES UN CAMPO OBLIGATORIO";
        }else{
                   //CONSULTAR
               $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1  WHERE producto = '$producto'");
               while($consulta = mysqli_fetch_array($resultados))
  {
               $valido++;
  } 

        }if ($valido==0) {echo "EL PRODUCTO NO EXISTE EN LA TIENDA ";  }
        else{
           //ELIMINAR
            $_DELETE_SQL =  "DELETE FROM $tabla_db1 WHERE producto = '$producto'";
            mysqli_query($conexion,$_DELETE_SQL); 

        }
      }

    include("cerrar_conexion.php");
  ?>

  </div>


<!-- TERMINA LA COLUMNA -->



  <div class="col-md-4"></div>
</div>



            
  
  
</body>
</html>