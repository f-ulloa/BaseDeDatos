<?php
#conectar a la base de datos
include_once '../BD/conexion.php';
$objeto= new Conexion();
$conn=$objeto->Conectar();

#POST

$codigo_producto=$_POST['codigo_producto'];
$precio_venta=$_POST['precio_venta'];
$nombre=$_POST['nombre'];
$garantia=$_POST['garantia'];
//print_r($_POST);

#insertar datos recibidos por post
$consulta="INSERT INTO Productos (codigo_producto, precio_venta, nombre, garantia) 
VALUES ('$codigo_producto' ,'$precio_venta','$nombre','$garantia');";
//echo $consulta;


$resultado=$conn->prepare($consulta);
$resultado->execute();


#Comprobar si se inserto
if($resultado){
    echo '<script language="javascript">alert("Insertado Correctamente");window.location.href="../Tablas/Productos.php"</script>'; 
}else{
    echo '<script language="javascript">alert("No se pudo insertar");window.location.href="../index.html"</script>';  

}


?>