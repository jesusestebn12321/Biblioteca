<?php

    class Entrega extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->mensaje= ''; 
            $this->view->book= []; 
            $this->view->entrega= []; 
        }
        public function render(){
           
            $this->view->render('Entrega/index');
        }
        public function Index(){
            $book= $this->model->LoadBook();
            $entrega= $this->model->LoadEntrega();
            $this->view->book=$book;
            $this->view->entrega=$entrega;
            $this->render();
        }
       
    }