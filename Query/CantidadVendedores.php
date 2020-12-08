<?php
include_once '../BD/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$consulta = 'SELECT count(*) FROM vendedor ';
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$CantidadVendedores=$resultado->fetchAll(PDO::FETCH_ASSOC);
//print_r($CantidadVendedores);
//echo $CantidadVendedores[0]['count(*)'];


?>


<!doctype html>
<html lang="en">
    <form id="myForm" action="../index.php" method="post">
        <?php
            echo '<input type="hidden" name="Consulta2" value="'.$CantidadVendedores[0]['count(*)'].'">';
            
        ?>
    </form>


    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>    
    <script>
      document.getElementById('myForm').submit()
    </script>
      
  </body>
</html>
