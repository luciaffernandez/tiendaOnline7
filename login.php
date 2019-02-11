<?php
error_reporting(0);
require_once "Smarty.class.php";
spl_autoload_register(function($clase) {
    include "$clase.php";
});
session_start();
//Creamos un objeto para gestionar plantillas
$smarty = new Smarty();

//Configuramos los directorios
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

if (isset($_POST['enviar'])) {
    $nombre = $_POST['name'];
    $pass = $_POST['pass'];
    $conexion = new BD();
    if ($conexion->comprueboUsuario($nombre, $pass)) {
        $_SESSION['user'] = $nombre;
        $_SESSION['pass'] = $pass;
        header("Location:sitio.php");
        exit();
    } else {
        $error = "Datos incorrectos";
        $smarty->assign('error', $error);
        $smarty->display('login.tpl');
    }
} else {
    $error = "";
    $smarty->assign('error', $error);
    
    if (isset($_GET['error'])) {
        $error = "No has iniciado sesión";
        
    }
    if (isset($_POST['desconectar'])) {
        session_destroy();
        $error = "Te has desconectado";
        $smarty->assign('error', $error);
    }
    //Mostramos plantilla
    $smarty->display('login.tpl');
}
?>