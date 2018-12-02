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
                $querys=$this->db->connect()->prepare('INSERT INTO retiro_entrega (estudent_id,book_id) VALUES (:estudent_id,:book_id)');
                $querys->execute([
                    'estudent_id'       => $request['estudent_id'],
                    'book_id'   => $request['book_id']
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }
        public function Entrega($request){
            try{
                $querys=$this->db->connect()->prepare('UPDATE books SET status=1 WHERE id=:id');
                $querys->execute(['id'=>$request['book_id']]);
                $query= $this->db->connect()->prepare('DELETE FROM retiro_entrega WHERE id=:id');
                $query->execute(['id'  => $request['id_row']]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }
    }