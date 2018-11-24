<?php
    class Estudent extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->render('estudent/index');
            // echo '<h3> nuevo controlador main</h3>';
        }
        public function Index(){
            echo '<h4>metodo index</h4>';
        }
        public function Store(){
            // echo '<h4>metodo store</h4>';
            $dni   =  $_POST['dni'];
            $name   =  $_POST['name'];
            $lastname   =  $_POST['lastname'];
            $phone  =  $_POST['phone'];
            $email  =  $_POST['email'];
            if ($this->model->insert([
                'dni'   => $dni,
                'name'   => $name,
                'lastname'  => $lastname,
                'phone'  => $phone,
                'email'  => $email
                ])){
                echo '<script>swal("Success", "Nuevo Estudiante Creado",{
                    icon:"success"
                });</script>';
            }
            

        }
        public function Create(){
            echo '<h4>metodo Create</h4>';
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