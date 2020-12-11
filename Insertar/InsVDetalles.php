<?php
#conectar a la base de datos
include_once '../BD/conexion.php';
$objeto= new Conexion();
$conn=$objeto->Conectar();

#POST

$codigo_venta=$_POST['codigo_venta'];
$cantidad=$_POST['cantidad'];
$codigo_producto=$_POST['codigo_producto'];
//print_r($_POST);




#insertar datos recibidos por post
$consulta="INSERT INTO Ventas_Detalles (codigo_venta, cantidad, codigo_producto) VALUES ('$codigo_venta' ,'$cantidad','$codigo_producto');";
//echo $consulta;


$resultado=$conn->prepare($consulta);
$resultado->execute();


#Comprobar si se inserto
if($resultado){
    echo '<script language="javascript">alert("Insertado Correctamente");window.location.href="../Tablas/Ventas_Detalles.php"</script>'; 
}else{
    echo '<script language="javascript">alert("No se pudo insertar");window.location.href="../index.html"</script>';  

}


?>