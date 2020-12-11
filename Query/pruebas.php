<?php

$dasdasd = 'SELECT
    Vendedores.nombre
from
    Vendedores,
    (
        select
            Vendedores.codigo_vendedor,
            count(Ventas_Detalles.codigo_producto) as cantidad
        from
            Vendedores,
            Ventas,
            Ventas_Detalles
        where
            Vendedores.codigo_vendedor = Ventas.codigo_vendedor
            and Ventas.codigo_venta = Ventas_Detalles.codigo_venta
        group by
            Vendedores.codigo_vendedor
    ) as x
where
    x.cantidad =(
        select
            Max(y.cantidad)
        from
            (
                select
                    count(Ventas_Detalles.codigo_producto) as cantidad
                from
                    Vendedores,
                    Ventas,
                    Ventas_Detalles
                where
                    Vendedores.codigo_vendedor = Ventas.codigo_vendedor
                    and Ventas.codigo_venta = Ventas_Detalles.codigo_venta
                    and Ventas_Detalles.codigo_producto =(
                        select
                            e.codigo_producto
                        from
                            (
                                select
                                    Ventas_Detalles.codigo_producto,
                                    count(*) as conteo
                                from
                                    Ventas_Detalles
                                group by
                                    Ventas_Detalles.codigo_producto
                            ) as e
                        where
                            e.conteo =(
                                select
                                    Min(d.conteo)
                                from
                                    (
                                        select
                                            count(*) as conteo
                                        from
                                            Ventas_Detalles
                                        group by
                                            Ventas_Detalles.codigo_producto
                                    ) as d
                                LIMIT
                                    1
                            )
                        LIMIT
                            1
                    )
                group by
                    Vendedores.nombre
            ) as y
        LIMIT
            1
    )
and x.codigo_vendedor=Vendedores.codigo_vendedor
group by Vendedores.nombre;';