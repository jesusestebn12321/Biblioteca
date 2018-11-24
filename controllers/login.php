<?php
    class Login extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->render('login/index');
            // echo '<h3> nuevo controlador main</h3>';
        }
        public function Index(){
            echo '<h4>metodo index</h4>';
            $this->model->insert();
        }
        
    }