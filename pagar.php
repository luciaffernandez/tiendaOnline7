<?php

error_reporting(0);
require_once "Smarty.class.php";
spl_autoload_register(function($clase) {
    include "$clase.php";
});

session_start();

$conexion = new BD();

$smarty = new Smarty();
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {
    $nombre = $_SESSION['user'];
    $pass = $_SESSION['pass'];
} else {
    header("Location:login.php?error");
}

$cesta = $_SESSION['cesta'];
$productos = $cesta->getProductos();
$resumenPagoTabla1 = "";
$contador = 0;

$usuario = $_SESSION['user'];
$smarty->assign('usuario', $usuario);

$fecha = date("d-m-y");
$smarty->assign('fecha', $fecha);

foreach ($productos as $producto => $valores) {
    $resumenPago .= "<tr class = 'pago'>"
            . "<td class = 'pago'>" . $producto . "</td>"
            . "<td class = 'pago'>$valores[0]</td>"
            . "<td class = 'pago'>$valores[1]</td>"
            . "</tr>"
            . "<input name='item_name_$contador' type = 'hidden' value = '$producto' />"
            . "<input name='item_number_$contador' type = 'hidden' value = '$producto' />"
            . "<input name='amount_$contador' type='hidden' value='$valores[1]' />"
            . "<input name='quantity_$contador' type='hidden' value='$valores[0]' />";
    $contador++;
}


$cantidadProductos = $cesta->contarProductos();
$smarty->assign('cantidadProductos', $cantidadProductos);
$total = $cesta->getTotal();
$smarty->assign('total', $total);
$IVA = $cesta->calculoIVA();
$smarty->assign('IVA', $IVA);
$totalIVA = $total + $IVA;
$smarty->assign('totalIVA', $totalIVA);

$resumenPago .= "<input name='item_name_$contador' type = 'hidden' value = 'IVA' />"
        . "<input name='item_number_$contador' type = 'hidden' value = 'IVA' />"
        . "<input name='amount_$contador' type='hidden' value='$IVA' />"
        . "<input name='quantity_$contador' type='hidden' value='1' />";

$smarty->assign('resumenPago', $resumenPago);
$smarty->display("pagar.tpl");
?>

