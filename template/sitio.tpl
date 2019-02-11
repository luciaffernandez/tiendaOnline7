<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Listado de Productos con Plantillas</title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
    </head>
    <body class="pagproductos">
        <div id="contenedor">
            <div id="cesta">
                    <h3><img src="img/cesta.png" alt="Cesta" width="26" height="24">Cesta</h3>
                    <hr>
                    <p>{$contenidoCesta}</p>
                    <hr>
                    <p>{$total}</p>
                    <hr>
                    <div id="botonesCesta">
                        <form action="productos.php" method="post">
                            <input class="cestaAccion" type="submit" name="cestaAccion" value="Pagar">
                            <input class="cestaAccion" type="submit" name="cestaAccion" value="Vaciar">
                        </form>
                    </div>
            </div>
            <div id="encabezado">
                <h1>Listado de productos</h1>
            </div>
            <div id="productos">
                {$listado}
            </div>
            <div id="pie">
                <form action="login.php" method="POST">
                    <input type="submit" value="Desconectar" name="desconectar"/>
                </form>
            </div>
        </div>
    </body>
</html>