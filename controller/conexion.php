<?php

 $conex= mysqli_connect('localhost','enrique','dexsel','fweb');


 if(!$conex){
 	echo "Error al conectarse a la base de datos".mysqli_connect_error();
 }

echo "Conexión establecida";

mysqli_close($conex);
?>
