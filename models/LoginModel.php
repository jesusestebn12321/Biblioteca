<?php
    class LoginModel extends Model{
        private $sessionLocation = "LoggedIn";
        private $sessionUsername = "Username";
        public function __construct(){
            parent::__construct();
            $urlDashboard= constant('URL');
            
        }
        public function verificar($request){
            // ensertar datos de la db
            echo '<h1>hola</h1>';
            // $query=$this->db->connect()->prepare("SELECT user, password FROM users WHERE user=':user', password=':password' ");
            // $query->execute([
            //      'user'  => $request['user'],
            //      'password'  => $request['password']
            //     ]);
            if($request['user'] == "Admin" && $request['password'] == "Password"){
                $_SESSION[$this->sessionLocation] = true;
                $_SESSION[$this->sessionUsername] = $request['user'];
                //$_SESSION["httpAgent"] = $_SERVER["HTTP_USER_AGENT"];
                header('Location:'.$this->urlDashboard.'/Biblioteca/Dashboard');
            }else{
                header('Location:'.$this->urlDashboard.'/Biblioteca?Error');
            }            
        }
        public function doLogout(){
            $_SESSION[$this->sessionLocation] = null;
        }
    }