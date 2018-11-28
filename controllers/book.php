<?php

    class Book extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->mensaje= ''; 
            $this->view->book= [];
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
                $mensaje= '<script>swal("Success", "Nuevo Libro Registrado",{
                icon:"success"
                });</script>';
            }else{
                $mensaje= '<script>swal("Error", "Libro Registrado",{
                    icon:"error"
                });</script>';
            }
            $this->view->mensaje=$mensaje;
            $this->index();
        }
        public function Update(){
            echo '<h4>metodo Updata</h4>';
        }
        public function Edit($request, $id){
            echo '<h4>metodo edit</h4>';
        }
        public function Destroy($request){
            $requests=$_GET['request'];
            
            echo '<h4>'.$requests.'</h4>';
        }
    }