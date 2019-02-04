<?php
spl_autoload_register(function($clase) {
    include "$clase.php";
});

require_once "Smarty.class.php";

//Creamos un objeto para gestionar plantillas
$smarty = new Smarty();

//Configuramos los directorios
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

if (isset($_POST['enviar'])) {
    $nombre = $_POST['name'];
    $pass = $_POST['pass'];
    $conexion = new BD();
    $campos = $conexion->comprueboUsuario($nombre, $pass);
    $smarty->assign('error', var_dump($campos));
//    if () {
//       $smarty->display("sitio.tpl");
//    } else {
//        $error = "Datos icorrectos";
//        $smarty->assign('error', $error);
    $smarty->display('login.tpl');
//    }
} else {
    //Mostramos plantilla
    $smarty->display('login.tpl');
}
?>