<?php
	//Crear la conexión con la base de datos.
   define('DB_SERVER', 'memorivas.com:3306');
   define('DB_USERNAME', 'rivas_web');
   define('DB_PASSWORD', 'Chavarysol2500');
   define('DB_DATABASE', 'rivas_web');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>