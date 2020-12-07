<?php

#Conectarse a la base de datos
$db_host="localhost";
$db_user="felipe";
$db_password="f6625438";
$db_connection = mysqli_connect($db_host, $db_user, $db_password);
if (!$db_connection) {
	echo 'no se pudo';
}
 else {
    echo 'si se pudo';
 }

#Seleccionar la base de datos y la tabla con la cual trabajar
$db_name="VentasCelulares";
$db_table_name="ventas_detalle";
$db=mysqli_select_db($db_connection,$db_name);
if(!$db){
    echo 'No se ha podido encontrar la tabla';
}else{
    echo ' Tabla seleccionada';
}
?>