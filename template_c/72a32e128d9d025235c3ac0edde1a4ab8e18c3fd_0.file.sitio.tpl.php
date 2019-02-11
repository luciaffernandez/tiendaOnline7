<?php
/* Smarty version 3.1.33, created on 2019-02-11 13:14:24
  from '/var/www/tiendaOnline/template/sitio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c616720c18cc4_30921544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72a32e128d9d025235c3ac0edde1a4ab8e18c3fd' => 
    array (
      0 => '/var/www/tiendaOnline/template/sitio.tpl',
      1 => 1549887262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c616720c18cc4_30921544 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
            <div id="cesta">
                    <h3><img src="img/cesta.png" alt="Cesta" width="26" height="24">Cesta</h3>
                    <hr>
                    <?php echo $_smarty_tpl->tpl_vars['contenidoCesta']->value;?>

                    <hr>
                    <p><span class="total1">Total:</span><span class="total2"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span></p>
                    <hr>
                    <div id="botonesCesta">
                        <form action="productos.php" method="post">
                            <input class="cestaAccion" type="submit" name="cestaAccion" value="Pagar">
                            <input class="cestaAccion" type="submit" name="cestaAccion" value="Vaciar">
                        </form>
                    </div>
            </div>
            <div id="productos">
                <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

            </div>
            <div id="pie">
                <form action="login.php" method="POST">
                    <input type="submit" value="Desconectar" name="desconectar"/>
                </form>
            </div>
        </div>
    </body>
</html><?php }
}
