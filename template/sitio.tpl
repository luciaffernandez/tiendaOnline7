<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Listado de Productos con Plantillas</title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
    </head>
    <body class="pagproductos">
        <div id="contenedor">
            <div id="encabezado">
                <h1>Listado de productos</h1>
            </div>
            <div id="productos">
                {$listado}
            </div>
            <div id="desconectar">
                <form action="login.php" method="POST">
                    <input type="submit" value="Desconectar" name="desconectar"/>
                </form>
            </div>
        </div>
    </body>
</html>