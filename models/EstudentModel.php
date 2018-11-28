<?php
    include_once 'models/TableEstudent.php';
    class EstudentModel extends Model{
        public function __construct(){
            parent::__construct();
        }
        public function Showestudent(){
            $items=[];
            try{
                $query= $this->db->connect()->query('SELECT * FROM estudents');
                while($row = $query->fetch()){
                    $item=new TableEstudent();
                    $item->dni=$row['dni'];
                    $item->name=$row['name'];
                    $item->lastname=$row['lastname'];
                    $item->phone=$row['phone'];
                    $item->email=$row['email'];
                    array_push($items, $item);
                }
                return $items;
            }catch(PDOException $e){
                return [];
            }
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
                return false;
            }

        }
    }