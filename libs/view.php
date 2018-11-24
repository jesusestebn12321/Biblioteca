<?php
    class View{
        public function __construct(){
            // echo '<h2>vista base</h2>';
        }
        public function render($name){
            require_once 'views/'.$name.'.php';
        }
    }