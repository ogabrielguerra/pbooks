<?php

DEFINE ('SITEPATH', getcwd());
DEFINE ('CLASSPATH', SITEPATH.'/');
DEFINE ('BASEURL', 'http://localhost/');

//DATABASE
DEFINE('HOST', 'db');
DEFINE('DATABASE', 'nasa');
DEFINE('USERNAME', 'root');
DEFINE('PASSWORD', 'dbpassword');

spl_autoload_register("loadClasses");

function loadClasses($className){

    $classFile = CLASSPATH.$className.'.php';
    $classFile = str_replace('\\', '/', $classFile);

    try{
        require $classFile;
    }catch(Exception $e){
        echo $e->getMessage();
    }
}