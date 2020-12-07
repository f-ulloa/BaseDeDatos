<?php
session_start();

if ($_POST && $_SESSION["actualizado"]== "SI")
{
header("Location: redirect.php");
exit();
}


?>


<!DOCTYPE html>
<html>

<head>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <title>Ventas Celulares</title>
</head>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <script>
        function AbrirFunciones(){
            $('#BotonActivar').trigger("click");
        }
    </script>

<body >
    <nav class="navbar navbar-light" id="navbar">
        <a class="navbar-brand" href="">Inicio</a>
        <a class="navbar-brand" href="">Clientes</a>
        <a class="navbar-brand" href="">Productos</a>
        <a class="navbar-brand" href="">Vendedores</a>
        <a class="navbar-brand" href="">Ventas</a>
        <a class="navbar-brand" href="./Tablas/VentasDetalle.php">Detalles Ventas</a>
        <a class="navbar-brand navbar-left" href="#">Login</a>

    </nav>
    <div class="group" >
        <div class="jumbotron jumbotron-fluid text-center" id="jumbo">
            <div class="container">
              <h1 class="display-4">Bienvenido a GBD</h1>
              <p class="lead">Es un gestor de base de datos, para una venta de celulares </p>
            </div>
          </div>

        <h1 id="texto"><em>Base de datos de la empresa</em></h1>
        <div class="accordion" id="accordionExample" style='padding-left: 15%; padding-right: 15%'>
            <div class="card ">
                <div class="card-header " id="headingOne">
                    <h2 class="mb-0">
                        <button id="BotonActivar" class="btn btn-primary btn-block text-center text-white" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Consultas a la Base de Datos
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <form action="./Query/CantidadProductosVendidos.php" method="POST">
                            <label for="codigo_venta">Cantidad de productos vendidos en una venta
                                <span><em>(codigo de la venta)</em></span></label>
                                <br/>
                            <input type="text" name="codigo_venta" class="form-input" required />
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <?php
                         
                            if(!$_POST){
                                $_SESSION["actualizado"]="NO";
                            }else{
                                $_SESSION["actualizado"]="SI";  
                                echo '<p> Resultado: '.$_POST['Consulta1'].'</p>';
                                echo "<script>";
                                echo "AbrirFunciones()";
                                echo "</script>";
                            }
                            

                        ?>
                        <br/>

                        <form action="" method="POST">
                            <label for="codigo_venta">Obtener garantia de un producto
                                <span><em>(codigo del producto)</em></span></label>
                                <br/>
                            <input type="text" name="codigo_venta" class="form-input" required />
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <br/>


                        <form action="" method="POST">
                            <label for="codigo_venta">Obtener el nombre del cliente de una determinada venta
                                <span><em>(codigo de la venta)</em></span></label>
                                <br/>
                            <input type="text" name="codigo_venta" class="form-input" required />
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <br/>


                        <form action="" method="POST">
                            <label for="codigo_venta">Obtener el nombre del vendedor de una venta
                                <span><em>(codigo de la venta)</em></span></label>
                                <br/>
                            <input type="text" name="codigo_venta" class="form-input" required />
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <br/>
                        
                        <form action="" method="POST">
                            <label for="codigo_venta">Obtener ingresos mensuales de la tienda
                                <span><em>(Mes a analizar)</em></span></label>
                                <br/>
                            <input type="text" name="codigo_venta" class="form-input" required />
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <br/>

                        <form action="" method="POST">
                            <label for="codigo_venta">Monto obtenido por cada vendedor en un dia
                                <span><em>(fecha a analizar)</em></span></label>
                                <br/>
                            <input type="text" name="codigo_venta" class="form-input" required />
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <br/>

                        <form action="" method="POST">
                            <label for="codigo_venta">Cual es el producto que mas se vende, en un determinado mes
                                <span><em>(mes a analizar)</em></span></label>
                                <br/>
                            <input type="text" name="codigo_venta" class="form-input" required />
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <br/>

                        <form action="" method="POST">
                            <label for="codigo_venta">Stock actual de los productos
                            <br/>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <br/>
                        <br/>


                        <form action="" method="POST">
                            <label for="codigo_venta">Cantidad de vendedores que hay en el local
                            <br/>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <br/>
                        <br/>

                        <form action="" method="POST">
                            <label for="codigo_venta">Nombre y precio de los productos
                            <br/>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <br/>
                        <br/>



                        <form action="" method="POST">
                            <label for="codigo_venta">El total de remueraciones de los vendedores
                            <br/>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <br/>
                        <br/>

                        <form action="" method="POST">
                            <label for="codigo_venta">Productos con sy determinado proveedor
                            <br/>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <br/>
                        <br/>

                        <form action="" method="POST">
                            <label for="codigo_venta">Precios de los productos comprados a los proveedores
                            <br/>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>
                        <br/>
                        <br/>


                        <form action="" method="POST">
                            <label for="codigo_venta">Nombre del producto y precios de los productos comprados a los proveedores 
                            <br/>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" />
                        </form>

                    </div>



                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-primary btn-block text-center text-white" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Modificar Base de datos
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <center>
                            <form action="./Formularios/ventas_detalle.html" method="POST">
                                <button class="btn btn-info btn-lg" type="submit">
                                    Insertar detalles de una venta
                                </button>
                            </form>
                            <br />

                            <form action="./Formularios/ventas_detalle.html" method="POST">
                                <button class="btn btn-danger btn-lg" type="submit">
                                    Eliminar detalles de una venta
                                </button>
                            </form>
                            <br />

                            <form action="./Formularios/" method="POST">
                                <button class="btn btn-info btn-lg" type="submit">
                                    Insertar datos de una venta
                                </button>
                            </form>
                            <br />

                            <form action="./Formularios/ventas_detalle.html" method="POST">
                                <button class="btn btn-danger btn-lg" type="submit">
                                    Eliminar datos de una venta
                                </button>
                            </form>
                            <br />
                            <form action="./Formularios/" method="POST">
                                <button class="btn btn-info btn-lg" type="submit">
                                    Insertar datos vendedor
                                </button>
                            </form>
                            <br />

                            <form action="./Formularios/ventas_detalle.html" method="POST">
                                <button class="btn btn-danger btn-lg" type="submit">
                                    Eliminar datos de un vendedor
                                </button>
                            </form>
                            <br />

                            <form action="./Formularios/ventas_detalle.html" method="POST">
                                <button class="btn btn-info btn-lg" type="submit">
                                    Insertar datos de un cliente
                                </button>
                            </form>
                            <br />

                            <form action="./Formularios/ventas_detalle.html" method="POST">
                                <button class="btn btn-danger btn-lg" type="submit">
                                    Eliminar datos de un cliente
                                </button>
                            </form>
                            <br />

                            <form action="./Formularios/ventas_detalle.html" method="POST">
                                <button class="btn btn-info btn-lg" type="submit">
                                    Insertar datos de un producto
                                </button>
                            </form>
                            <br />

                            <form action="./Formularios/ventas_detalle.html" method="POST">
                                <button class="btn btn-danger btn-lg" type="submit">
                                    Eliminar datos de un producto
                                </button>
                            </form>
                            <br />

                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</body>

</html>