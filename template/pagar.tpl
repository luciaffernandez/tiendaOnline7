<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Listado de Productos a Pagar</title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
    </head>

    <body class="pagproductos">

        <div id="contenedor">
            <h1>Resumen de factura del usuario dwes</h1>
            <h4 style="text-align:right">Fecha :23-03-19 03-02-10</h4>
            <hr />
            <br class="divisor" />
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <!--
                Datos para pagar paypal
                -->





                <input name="cmd" type="hidden" value="_xclick" />
                <input name="upload" type="hidden" value="1" />

                <!--
                Mi correo de pay pall
                -->
                <input name="business" type="hidden" value="manuelromeromiguel-facilitator@gmail.com" />


                <input name="shopping_url" type="hidden" value="http://manuel.infenlaces.com/dwes/TiendaPagar/pagar.php" />
                <input name="currency_code" type="hidden" value="EUR" />
                <input name="return" type="hidden" value="http://manuel.infenlaces.com/dwes/TiendaPagar/pago_realizado.php" />
                <input name="notify_url" type="hidden" value="http://manuel.infenlaces.com/dwes/TiendaPagar/paypal_ipn.php" />
                <input name="rm" type="hidden" value="2" />
                <div class="pago">
                    <table id="tablaPagar" class="pago">
                        <thead>
                            <tr class="pago"><th class="pago">Articulo</th>
                                <th class="pago">Cantidad</th>
                                <th class="pago">Precio Unitario</th></tr>

                        </thead>
                        
                                                    <tr class="pago"><td class="pago">Acer AX3950 I5-650 4GB 1TB W7HP</td>
                                <td class="pago">1</td>
                                <td class="pago">338.84</td>

                            </tr>
                           <!-- <input name="item_number_" type="hidden" value="ACERAX3950" />
                            <input name="item_name_" type="hidden" value=""Acer AX3950 I5-650 4GB 1TB W7HP" />
                            <input name="amount_" type="hidden" value="410.00" />
                            <input name="quantity_" type="hidden" value="1" />
                            -->                        
                                                    <tr class="pago"><td class="pago">Sony Bravia 32IN FULLHD KDL-32BX400</td>
                                <td class="pago">1</td>
                                <td class="pago">294.96</td>

                            </tr>
                           <!-- <input name="item_number_" type="hidden" value="BRAVIA2BX400" />
                            <input name="item_name_" type="hidden" value=""Sony Bravia 32IN FULLHD KDL-32BX400" />
                            <input name="amount_" type="hidden" value="356.90" />
                            <input name="quantity_" type="hidden" value="1" />
                            -->                        
                        
                    </table>
                    <hr />
                    <table>
                        <thead>
                            <tr class="pago"><th class="pago" colspan=2><strong>RESUMEN DE LA FACTURA</strong></th>
                        </thead>
                        <tr  class="pago">
                            <td class="pago">Total articulos</td>
                            <td class="pago">2</td>
                        </tr>
                        <tr>
                            <td class="pago">Precio total Sin iva</td>
                            <td class="pago">633.80</td>
                        </tr>
                        <tr>
                            <td class="pago">IVA</td>
                            <td class="pago">133.10</td></td>
                        </tr>
                        <tr>
                            <td class="pago">TOTAL pagar</td>
                            <td class="pago">766.9</td>
                        </tr>
                    </table>
                </div>



                <input type="hidden" name="item_name" value="Compra de dwes">
                <input type="hidden" name="amount" value="766.9">
             
            </form>
           

            <div id="pie">
                <form action='logoff.php' method='post'>
                    <input type='submit' name='desconectar' value='Desconectar usuario dwes'/>
                </form>
            </div>

        </div>
    </div>
</body>
</html>