<?php
    class Estudent extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->mensaje= ''; 
            $this->view->estudent= []; 
        }
        public function render(){
            $this->view->render('estudent/index');
        }
        public function Index(){
            $estudent= $this->model->LoadEstudent();
            $this->view->estudent=$estudent;
            $this->view->render('estudent/index');
        }
        public function Store(){
            // echo '<h4>metodo store</h4>';
            $dni        =  $_POST['dni'];
            $name       =  $_POST['name'];
            $lastname   =  $_POST['lastname'];
            $phone      =  $_POST['phone'];
            $email      =  $_POST['email'];
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
            header('location:'.$url.'/Biblioteca/Estudent/Index');
        }
        public function Edit(){
            $id        =  $_POST['id'];
            $dni       =  $_POST['dni'];
            $name      =  $_POST['name'];
            $lastname  =  $_POST['lastname'];
            $phone     =  $_POST['phone'];
            $email     =  $_POST['email'];
            if($this->model->update([
                'id'     => $id,
                'dni'   => $dni,
                'name'  => $name,
                'lastname'  => $lastname,
                'phone'  => $phone,
                'email'  => $email,
            ])
            ){
                $estudent=new TableEstudent();
                $estudent->dni=$dni;
                $estudent->name=$name;
                $estudent->lastname=$lastname;
                $estudent->phone=$lastname;
                $estudent->email=$email;
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