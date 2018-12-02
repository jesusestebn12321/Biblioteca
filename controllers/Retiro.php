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
            $estudent_id     =  $_POST['estudent_id'];
            if($this->model->Retiro([
                'book_id'    => $book_id,
                'estudent_id'=> $estudent_id
            ])){
                exit('Exito');
            }else{
                exit('Error');
            }
        }
        public function Entrega(){
            $book_id =  $_POST['id_book'];
            $id_row =  $_POST['id_row'];
            if($this->model->Entrega([
                'book_id' => $book_id,
                'id_row' => $id_row
            ])){
                exit('Exito');
            }else{
                exit('Error');
            }
        }
    }