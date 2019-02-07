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
    header("Location:login.php");
}
$listado = $conexion->obtenerListado();
$smarty->assign('listado', $listado);

if(isset($_POST['desconectar'])){
    session_unset();
    session_destroy();
}

$smarty->display("sitio.tpl");
?>