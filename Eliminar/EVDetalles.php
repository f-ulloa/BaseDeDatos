<?php
#conectar a la base de datos
include_once '../BD/conexion.php';
$objeto= new Conexion();
$conn=$objeto->Conectar();

#POST
$codigo_venta=$_POST['codigo_venta'];


#insertar datos recibidos por post
$consulta='DELETE from Ventas_Detalles where Ventas_Detalles.codigo_venta='.$codigo_venta.';';
$resultado=$conn->prepare($consulta);
$resultado->execute();

#Comprobar si se inserto
if($resultado){
    echo '<script language="javascript">alert("Eliminado Correctamente");window.location.href="../Tablas/Ventas_Detalles.php"</script>'; 
}else{
    echo '<script language="javascript">alert("No se pudo Eliminar");window.location.href="../index.html"</script>';  

}


?>