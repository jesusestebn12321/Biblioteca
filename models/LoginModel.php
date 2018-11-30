<?php
    class LoginModel extends Model{
        public function __construct(){
            parent::__construct();  
        }
        public function verificar($request){
            $query=$this->db->connect()->prepare("SELECT * FROM users WHERE user= :user AND password= :password");
            $query->execute([
                 'user'      => $request['user'],
                 'password'  => $request['password']
                ]);
            if($query->fetch()){
                return true;
            }else{
                return false;
            }            
        }
    }