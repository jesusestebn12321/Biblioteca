<?php

    class Book extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->mensaje= ''; 
            $this->view->book= [];
            $url=constant('URL');
        }
        public function render(){
            $this->view->render('book/index');
        }
        public function Index(){
            $book= $this->model->LoadBook();
            $this->view->book=$book;
            $this->view->render('book/index');
        }
        public function Store(){
            // echo 'estoy en el controlador';
            $mensaje='';
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
                $mensaje= '<script>swal("Error", "Libro Registrado",{
                    icon:"error"
                });</script>';
            }else{
                $mensaje= '<script>swal("Success", "Nuevo Libro Registrado",{
                    icon:"success"
                });</script>';
               
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