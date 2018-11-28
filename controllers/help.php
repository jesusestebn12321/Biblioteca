<?php
    class Help extends Controller{
        public function __construct(){
            parent::__construct();
            // echo '<h3> nuevo controlador main</h3>';
        }
        public function render(){
            $this->view->render('help/index');
        }
        public function Index(){
            echo '<h4>metodo index</h4>';
        }
    }