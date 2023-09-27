<?php

define ('APP_NAME','Veterinaria Pet Cat - ServiciosDisponibles');
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemaveterinario');

$URL = "http://localhost/sistemaveterinario";

date_default_timezone_set("America/Bogota");
$fechaHora = date('Y-m-d H:i:s');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    echo "La conexión a la base de datos fue con exito";
}catch (PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}


?>
