<?php
/* Smarty version 3.1.33, created on 2019-02-23 11:24:06
  from 'C:\xampp\htdocs\tiendaOnline\template\sitio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c711f469f89b2_87604647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8d82f85c01bfc315bb09296b01541278673c2dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline\\template\\sitio.tpl',
      1 => 1550917445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cesta.tpl' => 1,
    'file:listadoProductos.tpl' => 1,
  ),
),false)) {
function content_5c711f469f89b2_87604647 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php $_smarty_tpl->_subTemplateRender("file:cesta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:listadoProductos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div id="pie">
                <form action="login.php" method="POST">
                    <input type="submit" value="Desconectar" name="desconectar"/>
                </form>
            </div>
        </div>
    </body>
</html><?php }
}
