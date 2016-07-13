<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('PATH', __DIR__);
define('BASE', 'http://'.$_SERVER['HTTP_HOST'].'/index.php'/*.'/WORKS/trabmvc'*/);

$c = key_exists('c', $_GET)?$_GET['c']:'index';
$a = key_exists('a', $_GET)?$_GET['a']:'index';

$sep = DIRECTORY_SEPARATOR;
$className = ucfirst($c);
$pathClassBC = PATH.$sep.'controladores'.$sep.'ControladorBase.php';
$pathClassBM = PATH.$sep.'modelos'.$sep.'ModeloBase.php';
$pathClassC  = PATH.$sep.'controladores'.$sep.$className.'.php';

$ctrl = new stdClass();
$vars = NULL;
if(file_exists($pathClassC)){
    include_once $pathClassBC; // Incluyendo Base Controlador
    include_once $pathClassBM; // Incluyendo Base Modelo
    include_once $pathClassC; // Incluyendo Controlador
    $ctrl = new $className($a, $c);
}else{
    echo "<b>$pathClass</b>: Load: No existe!<hr />"; exit;
}
?>