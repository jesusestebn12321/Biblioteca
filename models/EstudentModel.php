<?php
    include_once 'models/TableEstudent.php';
    class EstudentModel extends Model{
        public function __construct(){
            parent::__construct();
        }
        public function LoadEstudent(){
            $items=[];
            try{
                $query= $this->db->connect()->query('SELECT * FROM estudents');
                while($row = $query->fetch()){
                    $item=new TableEstudent();
                    $item->id=$row['id'];
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
        public function Update($request){
            $query= $this->db->connect()->prepare('UPDATE estudents SET dni=:dni, name=:name, lastname=:lastname, phone=:phone, email=:email WHERE id=:id');
            try{
                $query->execute([
                    'id'        => $request['id'],
                    'dni'       => $request['dni'],
                    'name'      => $request['name'],
                    'lastname'  => $request['lastname'],
                    'phone'     => $request['phone'],
                    'email'     => $request['email']
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }
        public function Delete($request){
            $query= $this->db->connect()->prepare('DELETE r, e FROM retiro_entrega AS r LEFT JOIN estudents AS e ON r.estudent_id=e.id  WHERE r.estudent_id=:id');
            $query->execute(['id' => $request['id']]);
            
        }
    }