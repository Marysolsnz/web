<?php
   //Se incluye el archivo sessionAdmin
   include('sessionAdmin.php');

   //Se obtiene el número de siniestro y las placas con el método GET.
   $noSin = $_GET['no'];
   $placas = $_GET['pl'];

   
   //Se elimina los registros en Accidents y Vehicles que coincidan con el número de siniestro y placas.
   $delete = "DELETE FROM Accidents WHERE noSiniestro = '$noSin'";
   $delete2 = "DELETE FROM Vehicles WHERE placas = '$placas'";
   mysqli_query($db, $delete);
   mysqli_query($db, $delete2);

   //Se vuelve a cargar la página adminList.
   header("Location: adminList.php");

?>