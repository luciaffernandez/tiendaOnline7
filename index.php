<?php

require_once "Smarty.class.php";
spl_autoload_register(function($clase) {
    include "$clase.php";
});



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
        $smarty->display('sitio.tpl');
    } else {
        $error = "Datos icorrectos";
        $smarty->assign('error', $error);
        $smarty->display('login.tpl');
    }
} else {
    $error = "";
    $smarty->assign('error', $error);
    //Mostramos plantilla
    $smarty->display('login.tpl');
}
?>