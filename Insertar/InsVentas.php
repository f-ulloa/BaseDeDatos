<?php
#conectar a la base de datos
include_once '../BD/conexion.php';
$objeto= new Conexion();
$conn=$objeto->Conectar();

#POST

$codigo_venta=$_POST[codigo_venta];
$codigo_cliente=$_POST[codigo_cliente];
$codigo_vendedor=$_POST[codigo_vendedor];
$monto=$_POST[monto];
$fecha_venta=$_POST[fecha_venta];

#insertar datos recibidos por post
$consulta="INSERT INTO Ventas (codigo_venta, codigo_cliente, codigo_vendedor, monto, fecha_venta) VALUES ('$codigo_venta' ,'$codigo_cliente','$codigo_vendedor','$monto','$fecha_venta');";
//echo $consulta;

$resultado=$conn->prepare($consulta);
$resultado->execute();


#Comprobar si se inserto
if($resultado){
    echo '<script language="javascript">alert("Insertado Correctamente");window.location.href="../Tablas/Ventas.php"</script>'; 
}else{
    echo '<script language="javascript">alert("No se pudo insertar");window.location.href="../index.html"</script>';  

}


?>