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

<body id="body">
    <nav class="navbar navbar-dark" id="navbar">
        <a class="navbar-brand" href="">Inicio</a>
         <a class="navbar-brand" href="./Tablas/Ventas.php">Ventas</a>
        <a class="navbar-brand" href="./Tablas/Ventas_Detalles.php">Ventas_Detalles</a>
        <a class="navbar-brand" href="./Tablas/Productos.php">Productos</a>
        <a class="navbar-brand" href="./Tablas/Bodegas.php">Bodegas</a>

    </nav>
    <div class="group" id="group" >
        <div class="jumbotron jumbotron-fluid text-center" id="jumbo">
            <div class="container">
              <h1 class="display-4">Bienvenido a GBD</h1>
              <p class="lead">Es un gestor de base de datos, para una tienda de venta de celulares </p>
            </div>
          </div>

        <center><h1 id="texto"><em>Base de datos de la empresa</em></h1></center>
        <div class="accordion" id="accordionExample" style='padding-left: 15%; padding-right: 15%'>
            <div class="card" id="card">
                <div class="card-header " id="headingOne">
                    <h2 class="mb-0">
                        <button id="BotonActivar" class="btn btn-light btn-block text-center text-dark" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Consultas a la Base de Datos
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <form action="./Query/Query1.php" method="POST">
                            <label for="codigo_venta">1. Stock de celulares a partir del codigo_producto
                                <br>
                                <br/>
                           <center> <input type="text" name="codigo_producto" class="form-input" required /> </center>   
                           <br><center> <input class="form-btn" name="submit" type="submit" value="Consultar" /> </center>
                        </form>
                        <?php
                         
                            if(!$_POST){
                                $_SESSION["actualizado"]="NO";
                            }else{
                                $_SESSION["actualizado"]="SI";  
                                echo '<p> Stock: '.$_POST['Q1Stock'].'</p>';
                                echo "<script>";
                                echo "AbrirFunciones()";
                                echo "</script>";
                            }
                            

                        ?>
                        <br/>

                        <form action="./Query/Query2.php" method="POST">
                            <label for="codigo_venta">2. Obtener garantia de un producto vendido a partir del codigo del producto y del vendedor
                                <br/>
                                <br>
                           <center><input type="text" name="codigo_producto" class="form-input" placeholder='codigo_Producto' required /></br></br>
                            <input type="text" name="codigo_venta" class="form-input" placeholder='codigo_venta' required />
                            <br><br><input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>


                        <form action="./Query/Query3.php" method="POST">
                            <label for="codigo_venta">3. Obtener los ganancia de un mes/año de la tienda.
                            <br>
                                <br/>
                           <center> <input type="text" name="año" class="form-input" placeholder='año' required /></br></br>
                            <input type="text" name="mes" class="form-input" placeholder='mes' required />
                            <br><br><input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>


                        <form action="./Query/Query4.php" method="POST">
                            <label for="codigo_venta">4. Lista de montos obtenidos por cada vendedor en un día “FechaAConsultar”
                                <br><br/>
                           <center>  <input type="text" name="fecha" class="form-input" required placeholder='YYYY-MM-DD'/>
                            <br><br><input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>
                        
                        <form action="./Query/Query5.php" method="POST">
                            <label for="codigo_venta">5. Nombres de los producto que más y que menos se vende, en un determinado mes
                            <br>
                            <br>
                          <center>  <input type="text" name="mes" class="form-input" placeholder='mes 02' required /></br></br>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>

                        <form action="./Query/Query6.php" method="POST">
                            <label for="codigo_venta">6. Nombres de los productos con stock menores a X</br></br>
                       <center>      <input type="text" name="stock" class="form-input" required />
                            <br><br><input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>
                        <br/>

                        <form action="./Query/Query7.php" method="POST">
                            <label for="codigo_venta">7. Lista de productos, nombre, precio venta, precio compra y nombre del proveedor del producto para un codigo de proveedor X
                                <br/>
                                <br>
                            <center>  <input type="text" name="codigo_proveedor" class="form-input" required placeholder='codigo_proveedor'/>
                            <br><br><input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>

                        <form action="./Query/Query8.php" method="POST">
                            <label for="codigo_venta">8. Datos de contacto de un proveedor  de código X
                            <br/>
                            <br>
                         <center>   <input type="text" name="codigo_proveedor" class="form-input" required placeholder='codigo_proveedor'/>
                          <br><br>  <input class="form-btn" name="submit" type="submit" value="Consultar" /> </center>            
                        </form>
                        <br/>
                        <br/>


                        <form action="./Query/Query9.php" method="POST">
                            <label for="codigo_venta">9. Productos que no tienen garantía 
                            <br/>
                            <br>
                           <center> <input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>
                        <br/>

                        <form action="./Query/Query10.php" method="POST">
                            <label for="codigo_venta">10. Nombre del proveedor cuyo producto, otorga mayor ganancia neta
                            <br/>
                            <br>
                           <center>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>
                        <br/>



                        <form action="./Query/Query11.php" method="POST">
                            <label for="codigo_venta">11. Lista de comunas con su cantidad de Ventas realizadas por los clientes residentes de las respectivas comunas, y el monto  promedio de venta
                            <br/>
                            <br>
                           <center>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>
                        <br/>

                        <form action="./Query/Query12.php" method="POST">
                            <label for="codigo_venta">12. Bodega(s) la(s) cual(es) contiene la menor cantidad de productos
                            <br/>
                             <br>
                           <center>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>
                        <br/>

                        

                        <form action="./Query/Query13.php" method="POST">
                            <label for="codigo_venta">13.Lista de los nombre de los vendedores, que más veces vendieron el producto que menos se vendió en la tienda
                            <br/>
                            <br/>
                            <center>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>
                        <br/>
                        

                        <form action="./Query/Query14.php" method="POST">
                            <label for="codigo_venta">14. Calcular el porcentaje de variación en la cantidad de ventas de dos meses consecutivos(2019-01 Y 2019-02)
                            <br/>
                            <br/>
                            <center>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>
                        <br/>
                        

                        <form action="./Query/Query15.php" method="POST">
                            <label for="codigo_venta">15.Porcentaje de variación de las monto obtenido en las ventas por la tienda, en 2 meses consecutivos.
                            <br/>
                            <br/>
                            <center>
                            <input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>
                        <br/>
                        

                        <form action="./Query/Query19.php" method="POST">
                            <label for="codigo_venta"> 16. productos entre un rango de precio de venta, precio_min, precio_max
                                <br/>
                                <br/>
                                <center>
                            <input type="text" name="precio_min" class="form-input" placeholder='precio_min' required /></br></br>
                            <input type="text" name="precio_max" class="form-input" placeholder='precio_max' required />
                            <input class="form-btn" name="submit" type="submit" value="Consultar" /></center>
                        </form>
                        <br/>
                        <br/>
                        

                    </div>
                    



                </div>
            </div>

            <div class="card" id="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-light btn-block text-center text-dark" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Modificar Base de datos
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <center>
                            <form action="./Formularios/FVentas.html" method="POST">
                                <button class="btn btn-info btn-lg" type="submit">
                                    Insertar datos de una venta
                                </button>
                            </form>
                            <br />

                            <form action="./Eliminar/EVentas.php" method="POST">
                                <button class="btn btn-danger btn-lg" type="submit">
                                    Eliminar datos de una venta
                                </button></br>
                                <input type="text" name="codigo_venta" class="form-input" placeholder='Eliminar por Codigo Venta' required />
                            </form>
                            <br />
                            <form action="./Formularios/FVDetalles.html" method="POST">
                                <button class="btn btn-info btn-lg" type="submit">
                                    Insertar detalles de una venta
                                </button>
                            </form>
                            <br />

                            <form action="./Eliminar/EVDetalles.php" method="POST">
                                <button class="btn btn-danger btn-lg" type="submit">
                                    Eliminar detalles de una venta
                                </button>
                                <br />
                                <input type="text" name="codigo_venta" class="form-input" placeholder='Eliminar por Codigo Venta' required />

                            </form>
                            <br />

                            <form action="./Formularios/FProductos.html" method="POST">
                                <button class="btn btn-info btn-lg" type="submit">
                                    Insertar datos de un producto
                                </button>
                            </form>
                            <br />

                            <form action="./Eliminar/EProductos.php" method="POST">
                                <button class="btn btn-danger btn-lg" type="submit">
                                    Eliminar datos de un producto
                                </button>
                                <br />
                                <input type="text" name="codigo_producto" class="form-input" placeholder='Eliminar por Codigo Producto' required />

                            </form>
                            <br />

                            <form action="./Formularios/FBodegas.html" method="POST">
                                <button class="btn btn-info btn-lg" type="submit">
                                    Insertar datos Bodegas
                                </button>
                            </form>
                            <br />

                            <form action="./Eliminar/EBodegas.php" method="POST">
                                <button class="btn btn-danger btn-lg" type="submit">
                                    Eliminar datos de una Bodega
                                </button>
                                <br />
                                
                                <input type="text" name="codigo_bodega" class="form-input" placeholder='Eliminar por Codigo Bodega' required />
                                <input type="text" name="codigo_producto" class="form-input" placeholder='y por el codigo del producto' required />
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