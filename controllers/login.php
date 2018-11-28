<?php
    class Login extends Controller{
        public function __construct(){
            parent::__construct();
            $urlDashboard=constant('URL');
        }
        public function render(){
            $this->view->render('login/index');
        }
        public function Index(){
            session_start();
            $user=$_GET['user'];
            $password=$_GET['password'];
            if($this->model->verificar(['user'=>$user,'password'=>$password])){
                $_SESSION['nombre']=$user;
                header('Location:'.$this->urlDashboard.'/Dashboard');
            }
        }
        public function Logout(){
            session_start();
            session_destroy();
            header('Location:'.$this->urlDashboard.'/Biblioteca/');
            
        }
        
    }