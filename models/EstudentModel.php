<?php
    class EstudentModel extends Model{
        public function __construct(){
            parent::__construct();
        }
        public function insert($request){
            // ensertar datos de la db
            // echo '<h1>hola</h1>';
            try{
                $query= $this->db->connect()->prepare('INSERT INTO estudents (dni, name, lastname, phone, email) VALUE (:dni, :name, :lastname, :phone, :email)');
                $query->execute([
                    'dni'       => $request['dni'],
                    'name'      => $request['name'],
                    'lastname'  => $request['lastname'],
                    'phone'     => $request['phone'],
                    'email'     => $request['email']
                ]);
                return true;
            }catch (PDOException $e){
                echo '<script>swal("Error", "Estudiante Registrado",{
                    icon:"error"
                });</script>';
                return false;
            }

        }
    }