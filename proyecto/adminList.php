<?php
    //incluye el archivo sessionAdmin.
   include('sessionAdmin.php');

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Autos registrados</title>
	<link rel = "stylesheet" href="css/admin.css">
</head>
<body>


	<div class="contenedor">

		<div class="left1">
			<div align="left" style="margin-top:3em ; margin-left:3em ;" >
				<h1>Registro de Autos</h1>

				<input type="text" name="reporte">
				<button id="enviar" style="width:12%">Buscar</button>
			</div>
		</div>

		<div class="right1">
			<div align="right">
				<br>
				<a style ="padding-right:2em"  href="logoutAdmin.php">Cerrar sesión</a>
			</div>
		</div>

		<div align="center">
			<div align="right">
				<br>
				<button style="width: 13%; margin-right:3em" id="blue"  onclick="window.location.href='adminInsert.php'">+ Agregar Siniestro</button>
			</div>
			<br>

			<div class="scroll">
				<table style="width:95%">
				  <tr>
				    <th>#Siniestro</th>
				    <th>Placas</th>
						<th>Cliente</th>
						<th>Vehiculo</th>
						<th>Fecha de ingreso</th>
				    <th>Opciones</th>
				  </tr>

					<?php
               while ($row = mysqli_fetch_array($qresult, MYSQLI_ASSOC)) {
               		//Se rellena la tabla con todos los registros.
                   	echo "<tr>";
						echo "<td>".$row["noSiniestro"]."</td>";
						echo "<td>".$row["placas"]."</td>";
                   		echo "<td>".$row["nombre"]."</td>";
						echo "<td>".$row["marca"]." ".$row["modelo"]." ".$row["ano"]."</td>";
						echo "<td>".$row["fechaArribo"]."</td>";
                   		echo "<td><a href='adminView.php?no=".$row["noSiniestro"]."'>Editar</a> <a href='adminDelete.php?no=".$row["noSiniestro"]."&pl=".$row["placas"]."'>Eliminar</a></td>";

                   echo "</tr>";
								 }

            ?>

				</table>
			</div>
		</div>


	</div>

</body>
</html>
