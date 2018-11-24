<?php

    class Book extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->render('book/index');
            // echo '<h3> nuevo controlador main</h3>';
        }
        public function Index(){
            echo '<h4>metodo index</h4>';
        }
        public function Store(){
            // echo 'estoy en el controlador';
            $code   =  $_POST['code'];
            $autor   =  $_POST['autor'];
            $title  =  $_POST['title'];
            if($this->model->insert([
                'code'   => $code,
                'autor'  => $autor,
                'title'  => $title
            ])
            ){
                echo '<script>swal("Success", "Nuevo Libro Registrado",{
                icon:"success"
                });</script>';
            }
        }
        public function Update(){
            echo '<h4>metodo Updata</h4>';
        }
        public function Edit(){
            echo '<h4>metodo edit</h4>';
        }
        public function Destroy(){
            echo '<h4>metodo Destroy</h4>';
        }
    }