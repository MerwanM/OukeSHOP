<?php

class Bdd {

    private static $instance;

    private function  __construct()
    {
        self::$instance = new PDO('localhost','toor','root');
    }

    public static function getInstance() {
        if(is_null(self::$instance)){
            self::$instance = new PDO('mysql:dbname=oukeshop;host=localhost','toor','root');
        }

        return self::$instance;
    }
}