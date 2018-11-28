<?php

    class Entrega extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->mensaje= ''; 
            $this->view->book= []; 
        }
        public function render(){
           
            $this->view->render('Entrega/index');
        }
        public function Index(){
            $book= $this->model->LoadBook();
            $this->view->book=$book;
            $this->render();
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