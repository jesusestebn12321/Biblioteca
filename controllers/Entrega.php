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
       
    }