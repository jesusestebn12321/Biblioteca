<?php
    class Help extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->render('help/index');
            // echo '<h3> nuevo controlador main</h3>';
        }
        public function Index(){
            echo '<h4>metodo index</h4>';
        }
    }