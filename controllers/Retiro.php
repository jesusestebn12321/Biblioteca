<?php
    class Retiro extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->mensaje= ''; 
            $this->view->retiro= []; 
        }
        public function render(){
            $this->view->render('book/index');
        }
        public function Retiros(){
            $book_id =  $_POST['id'];
            $dni     =  $_POST['dni'];
            if($this->model->Retiro([
                'book_id'    => $book_id,
                'dni'=> $dni
            ])){
                exit('Exito');
            }else{
                exit('Error');
            }
        }
        public function Entrega(){
            $book_id =  $_POST['id'];
            $id_row =  $_POST['id_row'];
            if($this->model->Entregar([
                'book_id' => $book_id
            ])){
                exit('Exito');
            }else{
                exit('Error');
            }
        }
    }