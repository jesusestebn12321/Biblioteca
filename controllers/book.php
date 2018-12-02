<?php
    class Book extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->mensaje= ''; 
            $this->view->book= [];
            $this->view->estudent=[];
            $url=constant('URL');
        }
        public function render(){
            $this->view->render('book/index');
        }
        public function Index(){
            $book= $this->model->LoadBook();
            $estudent= $this->model->LoadEstudent();
            $this->view->book=$book;
            $this->view->estudent=$estudent;
            $this->view->render('book/index');
        }
        public function Store(){
            // echo 'estoy en el controlador';
            
            $code   =  $_POST['code'];
            $autor   =  $_POST['autor'];
            $title  =  $_POST['title'];
            $status  =  $_POST['status'];
            if($this->model->insert([
                'code'   => $code,
                'autor'  => $autor,
                'title'  => $title,
                'status'  => $status
            ])
            ){
              
            }
            $this->view->mensaje=$mensaje;
            header('location:'.$url.'/Biblioteca/Book/Index');
        }
        public function Edit(){
            $code   =  $_POST['code'];
            $autor   =  $_POST['autor'];
            $title  =  $_POST['title'];
            $id  =  $_POST['id'];
            if($this->model->update([
                'id'     => $id,
                'code'   => $code,
                'autor'  => $autor,
                'title'  => $title,
            ])
            ){
                $book=new TableBook();
                $book->code=$code;
                $book->autor=$autor;
                $book->title=$title;
                exit('Exito');
            }else{
                exit('Error');
            }
        }
        public function Destroy(){
            $id=$_POST['id'];
            if($this->model->Delete(['id' => $id ])){
                exit('error');
            }else{
                exit('Exito');
            }
        }
    }