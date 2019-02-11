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

if ($_POST['accionCesta']) {
    $cesta = Cesta::generaCesta();
    $contenidoCesta = $cesta->mostrarCesta();
    $smarty->assign('contenidoCesta', $contenidoCesta);
    switch ($_POST['accionCesta']) {
        case 'Añadir':
            $codigo = $_POST['codigo'];
            $precio = $_POST['precio'];
            $cesta->nuevoProd($precio, $codigo);
            $contenidoCesta = $cesta->mostrarCesta();
            $smarty->assign('contenidoCesta', $contenidoCesta);
            $total = $cesta->calculoTotal();
            $smarty->assign('total', $total);
            $cesta->guardaCesta();
            break;
        case 'Vaciar':
            
            break;
        case 'Eliminar':
            
            break;
        case 'Pagar':
            
            break;
    }
}
$listado = obtenerListado($conexion);
$smarty->assign('listado', $listado);

$smarty->display("sitio.tpl");

function obtenerListado($conexion) {
    $listado = "";
    $datos = $conexion->seleccion("SELECT * FROM producto");
    foreach ($datos as $dato) {
        $n_corto = $dato['nombre_corto'];
        $precio = $dato['PVP'];
        $codigo = $dato['cod'];
        $listado .= "<form action='sitio.php' method='post'>"
            . " <input type='submit' value='Añadir' name='accionCesta'>"
            . " <input type='hidden' value='$precio' name='precio'>"
            . " <input type='hidden' value='$codigo' name='codigo'>"
            . "  " . $n_corto . " - " . $precio
            . "</form>";
    }
    return $listado;
}
 
?>