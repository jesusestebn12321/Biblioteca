<?php
    class Login extends Controller{
        public function __construct(){
            parent::__construct();
            $this->view->mensaje= ''; 
            $urlDashboard=constant('URL');
        }
        public function render(){
            $this->view->render('login/index');
        }
        public function Index(){
            $mensaje='';
            $user=$_GET['user'];
            $password=$_GET['password'];
            if($this->model->verificar(['user'=>$user,'password'=>$password])){
                session_start();
                $_SESSION['user']=$user;
                header('Location:'.$this->urlDashboard.'/Biblioteca/Dashboard');
            }else{
                $mensaje= '<script>swal("Success", "Nuevo Libro Registrado",{
                    icon:"success"
                });</script>';
               $this->view->mensaje=$mensaje;
               $this->view->render('login/index');
            }
        }
        public function Out(){
            session_start();
            session_unset();
            session_destroy();
            header('Location:'.$this->urlDashboard.'/Biblioteca');
            
        }
        
    }