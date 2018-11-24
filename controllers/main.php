<?php

    class Main extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->render('main/index');
            // echo '<h3> nuevo controlador main</h3>';
        }
        public function Index(){
            echo '<h4>metodo index</h4>';
        }
        public function Store(){
            echo '<h4>metodo store</h4>';
        }
        public function Update(){
            echo '<h4>metodo Updata</h4>';
        }
        public function Destroy(){
            echo '<h4>metodo Destroy</h4>';
        }
    }