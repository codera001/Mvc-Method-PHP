<?php 
require_once 'config/config.php';
// load libraries
// require_once 'libraries/Controller.php';
// require_once 'libraries/Core.php';
// require_once 'libraries/Database.php';


// autoload core libraries, so we dont have to manually include libraries 
spl_autoload_register(function($classname){
    require_once 'libraries/' .$classname. '.php';
});