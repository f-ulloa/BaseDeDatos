<?php
include_once '../BD/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

#Post
$consulta = 'SELECT * FROM Bodegas';
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$ventas_detalle=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="en">
  <head>
    <link href="../estilos.css" rel="stylesheet" type="text/css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <title></title>
    <style>
        table.dataTable thead {
            background: linear-gradient(to right, #0575E6, #00F260);
            color:white;
        }
    </style>  
      
  </head>

  <body>
  <nav class="navbar navbar-dark" id="navbar">
        <a class="navbar-brand" href="../index.php">Inicio</a>

    </nav>
    <div class="group">
        <div class="jumbotron jumbotron-fluid text-center" id="jumbo">
            <div class="container">
              <h1 class="display-4">Detalles de las Bodegas</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="tablaventas_detalle" class="table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <th>codigo_bodega</th>
                            <th>codig_producto</th>
                            <th>cantidad</th>
                        </thead>
                        <tbody>
                            <?php
                                foreach($ventas_detalle as $detalle){
                            ?>
                            <tr class="text-center">
                                <td><?php echo $detalle['codigo_bodega']?></td>
                                <td><?php echo $detalle['codigo_producto']?></td>
                                <td><?php echo $detalle['cantidad']?></td>
        
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
      
    <script>
      $(document).ready(function(){
         $('#tablaventas_detalle').DataTable(); 
      });
      $(document).ready(function(){

        var height = $(window).height();

        $('.group').height(height);
      });
    </script>
      
      
  </body>
</html>