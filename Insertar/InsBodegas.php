<?php
#conectar a la base de datos
include_once '../BD/conexion.php';
$objeto= new Conexion();
$conn=$objeto->Conectar();

#POST

$codigo_bodega=$_POST['codigo_bodega'];
$codigo_producto=$_POST['codigo_producto'];
$cantidad=$_POST['cantidad'];

print_r($_POST);



#insertar datos recibidos por post
$consulta="INSERT INTO Bodegas (codigo_bodega, codigo_producto, cantidad) 
VALUES ('$codigo_bodega' ,'$codigo_producto','$cantidad');";
echo $consulta;


$resultado=$conn->prepare($consulta);
$resultado->execute();


#Comprobar si se inserto
if($resultado){
    echo '<script language="javascript">alert("Insertado Correctamente");window.location.href="../Tablas/Bodegas.php"</script>'; 
}else{
    echo '<script language="javascript">alert("No se pudo insertar");window.location.href="../index.html"</script>';  

}


?>