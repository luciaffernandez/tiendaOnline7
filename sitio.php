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

$listado = obtenerListado($conexion);
$cesta = Cesta::generaCesta();
$contenidoCesta = $cesta->mostrarCesta();
$smarty->assign('contenidoCesta', $contenidoCesta);
$cesta->guardaCesta();

if ($_POST['cestaAccion']) {
    $codigo = $_POST['codigo'];
    $precio = $_POST['precio'];
    switch ($_POST['cestaAccion']) {
        case 'Añadir':
            $cesta->nuevoProd($precio, $codigo);
            break;
        case 'Vaciar':
            $cesta->vacia();
            break;
        case 'Eliminar':
            $cesta->eliminoProd($codigo);
            break;
        case 'Pagar':
            header("Location:pagar.php");
            break;
    }
}
$cesta->guardaCesta();
$contenidoCesta = $cesta->mostrarCesta();
$smarty->assign('contenidoCesta', $contenidoCesta);
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
                . " <input type='submit' value='Añadir' name='cestaAccion'>"
                . " <input type='hidden' value='$precio' name='precio'>"
                . " <input type='hidden' value='$codigo' name='codigo'>"
                . "  " . $n_corto . " - " . $precio
                . "</form>";
    }
    return $listado;
}

?>