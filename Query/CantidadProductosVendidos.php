<?php
include_once '../BD/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

#Post

$codigo_venta=$_POST['codigo_venta'];
#echo $codigo_venta;
$consulta = 'SELECT cantidad FROM ventas_detalle WHERE codigo_venta='.$codigo_venta;
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$ventas_detalle=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="en">
    <form id="myForm" action="../index.php" method="post">
        <?php
            echo '<input type="hidden" name="Consulta1" value="'.$ventas_detalle[0]['cantidad'].'">';
            
        ?>
    </form>


    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>    
    <script>
      document.getElementById('myForm').submit()
    </script>
      
  </body>
</html>