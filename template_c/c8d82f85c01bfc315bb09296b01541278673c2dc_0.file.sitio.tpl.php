<?php
/* Smarty version 3.1.33, created on 2019-02-06 22:34:14
  from 'C:\xampp\htdocs\tiendaOnline\template\sitio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5b52d6e5cb04_61073059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8d82f85c01bfc315bb09296b01541278673c2dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline\\template\\sitio.tpl',
      1 => 1549488668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5b52d6e5cb04_61073059 (Smarty_Internal_Template $_smarty_tpl) {
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
        </div>
    </body>
</html><?php }
}
