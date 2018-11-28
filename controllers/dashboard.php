<?php

    class Dashboard extends Controller{
        public function __construct(){
            parent::__construct();
            // echo '<h3> nuevo controlador main</h3>';
        }
        public function render(){
            $this->view->render('dashboard/index');
        }
        public function Index(){
            $this->view->render('dashboard/index');
        }
        public function Store(){
            echo '<h1>metodo store</h1>';
            $this->model->insert();
        }
        public function Update(){
            echo '<h4>metodo Updata</h4>';
        }
        public function Destroy(){
            echo '<h4>metodo Destroy</h4>';
        }
    }