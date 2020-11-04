<?php

    class Foo
    {
        private static $bar;

        private function __construct()
        {
            echo 'método constructor <br>';
        }
        public function publico()
        {
            echo 'método publico <br>';
            $this->privado();
        }
        private function privado()
        {
            echo 'método privado <br>';
        }
        static function estatico()
        {
            echo 'método estático <br>';
            //$this->publico();
        }

    }
/*
    en la práctica en el archivo de la clase
    va a ir sólo el código de declaración de clase
*/

### por lo tanto, en otro archivo
    //instanciamos cuando el constructor no lo impida
    //$Foo = new Foo; no se puede si el constructor es privado
    //invocamos al método público
    //$Foo->publico();

    //invocamos el método privado
    //$Foo->privado();  no se puede desde FUERA

    //invocamos el método estático
    //$Foo->estatico();
    Foo::estatico();
