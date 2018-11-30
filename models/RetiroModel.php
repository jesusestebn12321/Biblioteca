<?php
include_once 'models/TableRetiro_Entrega.php';
    class RetiroModel extends Model{
        public function __construct(){
            parent::__construct();
        }
        public function Retiro($request){
            try{
                $query=$this->db->connect()->prepare('UPDATE books SET status=0 WHERE id=:id');
                $query->execute(['id'=>$request['book_id']]);
                $querys=$this->db->connect()->prepare('INSERT INTO retiro_entrega (dni,book_id) VALUES (:dni,:book_id)');
                $querys->execute([
                    'dni'       => $request['dni'],
                    'book_id'   => $request['book_id']
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }
        public function Entrega($request){
            try{
                $query= $this->db->connect()->prepare('DELETE FROM retiro_entrega WHERE id=:id');
                $querys=$this->db->connect()->prepare('UPDATE books SET status=1 WHERE id=:id');
                $query->execute(['id'=>$request['book_id']]);
                $query->execute([
                    'id'  => $request['id_row']
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }
    }