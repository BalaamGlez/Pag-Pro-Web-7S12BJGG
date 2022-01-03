<html>
<head>
  


  <title>REGISTRO DE USUARIOS </title>
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

    <center><h1 style="color: #FFFFFF">LOGIN </h1></center>

    <form action="index.html">

    <div class="form-group" class="p-3 mb-2 bg-secondary text-white">
        <label for="nombre" style="color: #FFFFFF">CORREO</label>
        <input type="text" name="correo" class="form-control" id="correo" placeholder="CORREO.." >
    </div>

    <div class="form-group">
        <label for="dir" style="color: #FFFFFF">CONTRASEÑA</label>
        <input type="text" name="password" class="form-control" id="password" placeholder="CONTRASEÑA...">
    </div>


    
    <center>
      <input type="submit" value="iniciar" class="btn btn-success" name="btn_registrar">
    </center>
</form>


  <?php
    include("abrir_conexion.php");
      
      $nombre    ="";
      $descripcion ="";
      $precio    ="";
      $stock  ="";

      if(isset($_POST['btn_registrar']))
      { 

$correo= $_POST['correo'];
$password= $_POST['password'];


  //CONSULTAR
  $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db2 WHERE correo = '$correo' AND password = '$password'");
  $nr=mysqli_num_rows($query);
while($consulta = mysqli_fetch_array($resultados))
  {
    echo $consulta['nombre'];
    echo $consulta['sexo'];
  }

}

    include("cerrar_conexion.php");
  ?>
<form action="registro_usuarios.php">
 <input type="submit" value="REGISTRARME" class="btn btn-warning" name="btn_registrar">
</form>
<form action="loginAdmin.php">
   <input type="submit" value="INICIO ADMIN" class="btn btn-warning" name="btn_registrar">
</form>
</form>
  </div>


<!-- TERMINA LA COLUMNA -->

  <div class="col-md-4"></div>
</div>



            
  
  
</body>
</html>