<?php
include_once '../BD/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

#Post


$consulta = 'SELECT
Vendedores.nombre
FROM Vendedores,
(
    SELECT Vendedores.codigo_vendedor, COUNT(Ventas_Detalles.codigo_producto) AS cantidad
    FROM Vendedores, Ventas, Ventas_Detalles
    WHERE
        Vendedores.codigo_vendedor = Ventas.codigo_vendedor
        AND Ventas.codigo_venta = Ventas_Detalles.codigo_venta
    GROUP BY
        Vendedores.codigo_vendedor
) AS x
WHERE
x.cantidad =(
    SELECT
        MAX(y.cantidad)
    FROM
        (
            SELECT
                COUNT(Ventas_Detalles.codigo_producto) AS cantidad
            FROM
                Vendedores, Ventas, Ventas_Detalles
            WHERE
                Vendedores.codigo_vendedor = Ventas.codigo_vendedor
                AND Ventas.codigo_venta = Ventas_Detalles.codigo_venta
                AND Ventas_Detalles.codigo_producto =(
                    SELECT
                        e.codigo_producto
                    FROM
                        (
                            SELECT
                                Ventas_Detalles.codigo_producto,COUNT(*) AS conteo
                            FROM
                                Ventas_Detalles
                            GROUP BY
                                Ventas_Detalles.codigo_producto
                        ) AS e
                    WHERE
                        e.conteo =(
                            SELECT
                                MIN(d.conteo)
                            FROM
                                (
                                    SELECT
                                        COUNT(*) AS conteo
                                    FROM
                                        Ventas_Detalles
                                    GROUP BY
                                        Ventas_Detalles.codigo_producto
                                ) AS d
                            LIMIT
                                1
                        )
                    LIMIT
                        1
                )
            GROUP BY
                Vendedores.nombre
        ) AS y
    LIMIT
        1
)
AND x.codigo_vendedor = Vendedores.codigo_vendedor
GROUP BY
Vendedores.nombre;'
;



$ejecucion = $conexion->prepare($consulta);
$ejecucion->execute();

$resultado=$ejecucion->fetchAll(PDO::FETCH_ASSOC);
//print_r($resultado);



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
              <h1 class="display-4">Lista de los nombre de los vendedores, que más veces vendieron el producto que menos se vendió en la tienda</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="tablaventas_detalle" class="table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <th>Nombre de los Vendedores</th>
                        </thead>
                        <tbody>
                            <?php
                                foreach($resultado as $ojo){
                            ?>
                            <tr class="text-center text-light">
                                <td><?php echo $ojo['nombre']?></td>
        
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

