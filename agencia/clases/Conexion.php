<?php

    class Conexion
    {

        private static $link;

        private function __construct()
        {}

        static function conectar()
        {
            if ( !isset( self::$link ) ){
                self::$link = new PDO(
                    'mysql:host=localhost;dbname=agencia',
                    'root',
                    'root'
                );
            }
            return self::$link;
        }
    }