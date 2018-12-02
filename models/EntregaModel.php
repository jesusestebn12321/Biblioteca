<?php
include_once 'models/TableBook.php';
include_once 'models/TableRetiro_Entrega.php';
    class EntregaModel extends Model{
        public function __construct(){
            parent::__construct();
        }
        public function LoadBook(){
            $items=[];
            try{
                $query= $this->db->connect()->query('SELECT * FROM books');
                while($row = $query->fetch()){
                    $item=new TableBook();
                    $item->id=$row['id'];
                    $item->code=$row['code'];
                    $item->autor=$row['autor'];
                    $item->title=$row['title'];
                    $item->status=$row['status'];
                    array_push($items, $item);
                    
                }
                return $items;
            }catch(PDOException $e){
                return [];
            }
        }
        public function LoadEntrega(){
            $items=[];
            try{
                $query= $this->db->connect()->query('SELECT * FROM retiro_entrega');
                while($row = $query->fetch()){
                    $item=new TableRetiro_Entrega();
                    $item->id=$row['id'];
                    $item->book_id=$row['book_id'];
                    array_push($items, $item);
                    
                }
                return $items;
            }catch(PDOException $e){
                return [];
            }
        }
    }