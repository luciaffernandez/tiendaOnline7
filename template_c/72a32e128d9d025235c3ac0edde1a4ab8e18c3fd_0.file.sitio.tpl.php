<?php
/* Smarty version 3.1.33, created on 2019-02-07 13:11:36
  from '/var/www/tiendaOnline/template/sitio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5c2078046cd1_02816954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72a32e128d9d025235c3ac0edde1a4ab8e18c3fd' => 
    array (
      0 => '/var/www/tiendaOnline/template/sitio.tpl',
      1 => 1549541490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5c2078046cd1_02816954 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div id="productos">
                <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

            </div>
            <div id="desconectar">
                <form action="login.php" method="POST">
                    <input type="submit" value="Desconectar" name="desconectar"/>
                </form>
            </div>
        </div>
    </body>
</html><?php }
}
