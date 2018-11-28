<?php
    class Estudent extends Controller{
        public function __construct(){
            parent::__construct();
            // echo '<h3> nuevo controlador main</h3>';
            $this->view->mensaje= ''; 
            $this->view->estudent= []; 
        }
        public function render(){
            $this->view->render('estudent/index');
        }
        public function Index(){
            $estudent= $this->model->Showestudent();
            $this->view->estudent=$estudent;
            $this->view->render('estudent/index');
        }
        public function Store(){
            // echo '<h4>metodo store</h4>';
            $dni   =  $_POST['dni'];
            $name   =  $_POST['name'];
            $lastname   =  $_POST['lastname'];
            $phone  =  $_POST['phone'];
            $email  =  $_POST['email'];
            if ($this->model->insert(['dni'=>$dni, 'name'=>$name, 'lastname'=>$lastname, 'phone'=>$phone, 'email'=>$email])){
                $mensaje= '<script>swal("Success", "Nuevo Estudiante Creado",{
                    icon:"success"
                });</script>';
            }else{
                $mensaje= '<script>swal("Error", "Estudiante Registrado",{
                    icon:"error"
                });</script>' ;
            }
            $this->view->mensaje=$mensaje;
            $this->view->render('estudent/index');
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