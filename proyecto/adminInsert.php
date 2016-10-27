<?php
   //Se incluye el archivo sessionAdmin.
   include('sessionAdmin.php');
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $siniestro = $_POST['siniestro'];
      $nombre = $_POST['nombre'];
      $marca = $_POST['marca'];
      $modelo = $_POST['modelo'];
      $ano = $_POST['ano'];
      $placas =$_POST['placas'];
      $actual = $_POST['actual'];
      $fechaSalida =$_POST['edate'];
      $mecanica = 0;
      $laminado = 0;
      $pintura = 0;
      $detallado = 0;
      if(isset($_POST['m'])){
        $mecanica = 1;
      }
      if(isset($_POST['l'])){
        $laminado = 1;
      }
      if(isset($_POST['p'])){
        $pintura = 1;
      }
      if(isset($_POST['d'])){
        $detallado = 1;
      }


      //Se insertan los datos obtenidos del POST a la base de datos.
      $insert = "INSERT INTO Accidents (noSiniestro, placas, fechaSalida, areaActual, mecanica, laminado, pintura, detallado, nombre) VALUES ('$siniestro', '$placas', '$fechaSalida', '$actual', '$mecanica', '$laminado', '$pintura', '$detallado', '$nombre')";

      $insert2 = "INSERT INTO Vehicles VALUES ('$placas', '$modelo', '$marca', '$ano')";

      mysqli_query($db, $insert); 
      mysqli_query($db, $insert2);

      header("location: adminList.php");

    }

?>

<html>
<head>
  <meta charset="utf-8">
  <title>Crear registro</title>
  <link rel = "stylesheet" href="css/admin.css">
</head>
<body>
  <div class="contenedor">

    <div class="left">
      <h2>Nuevo registro</h2>

      <div class="texto">
        <form action = "" method = "POST">
        
        <br>
        <br>

        <p>Siniestro: <input type="text" name="siniestro"> <p>
        <p>Nombre: <input type="text" name="nombre"><p>
        <p>Marca: <input type="text" name="marca"><p>
        <p>Modelo: <input type="text" name="modelo"><p>
        <p>Año: <input type="text" name="ano"><p>
        <p>Placas: <input type="text" name="placas"><p>

        <div class="wrapper_foto">
          <p><button type = "button">Subir foto</button></p>
        </div>

      </div>
    </div>
    <div class="right" style="margin-top:5vh">
      <div align="right">
      <a  style ="padding-right:2em"  href="adminList.php">Regresar</a>
      </div>
      <div class="texto">
        <p style="margin-top:2em;">Área actual del vehículo: <p>
        <select name = "actual">
          <option value="Mecanica">Mecánica</option>
          <option value="Laminado">Laminado</option>
          <option value="Pintura">Pintura</option>
          <option value="Detallado">Detallado</option>
        </select>


        <p>Fecha estimada de entrega: <input type="date" name="edate"><p>

        <p class="areas">Áreas pendientes: </p>
        <div class = "pendientes">
          <p style="margin-top: 2em;"></p>
          <input type="checkbox" name="m">Mecánica
          <br>
          <input type="checkbox" name="l">Laminado
          <br>
          <input type="checkbox" name="p">Pintura
          <br>
          <input type="checkbox" name="d">Detallado
          <br>
        </div>
        <br>

        <div class="wrapper_options">
          <br>
          <input class="button" type="submit" style="margin-top:2em; width:33% v" value = "Guardar">
          </form>

        </div>
      </div>
    </div>
  </div>

</body>
</html>
