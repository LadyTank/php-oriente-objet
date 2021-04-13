<?php 

// class qui permet de charger automatiquement les class php poo

class Autoloader {
    static function autoload($class) {
        require "class/$class.php";
    }

    static function register(){
        spl_autoload_register([__CLASS__, "autoload"]);
    }
}