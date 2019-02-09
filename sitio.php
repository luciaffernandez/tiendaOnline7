<?php

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
    switch ($_POST['accionCesta']) {
        case 'Añadir':
            $_SESSIO['cesta'] = generaCesta();
            break;
    }
}
$listado = $conexion->obtenerListado();
$smarty->assign('listado', $listado);

$smarty->display("sitio.tpl");
?>