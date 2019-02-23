<?php
/* Smarty version 3.1.33, created on 2019-02-23 12:45:06
  from 'C:\xampp\htdocs\tiendaOnline\template\cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c71324269d166_10803712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '489429e453fd9db0cac9c738b76b4e9ebb1af798' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline\\template\\cesta.tpl',
      1 => 1550922297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c71324269d166_10803712 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="cesta">
    <h3><img src="img/cesta.png" alt="Cesta" width="26" height="24">Cesta</h3>
    <hr>
    <?php echo $_smarty_tpl->tpl_vars['contenidoCesta']->value;?>

    <div id="botonesCesta">
        <form action="sitio.php" method="post">
            <input class="cestaAccion" type="submit" name="cestaAccion" value="Pagar">
            <input class="cestaAccion" type="submit" name="cestaAccion" value="Vaciar">
        </form>
    </div>
</div><?php }
}
