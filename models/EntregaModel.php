<?php
include_once 'models/TableBook.php';
include_once 'models/TableRetiro_Entrega.php';
    class EntregaModel extends Model{
        public function __construct(){
            parent::__construct();
        }
        public function LoadBook(){
            $items=[];
            $rowss=[];
            try{
                // $query= $this->db->connect()->query('SELECT * FROM books');
                // while($row = $query->fetch()){
                //     $item=new TableBook();
                //     $item->id=$row['id'];
                //     $item->code=$row['code'];
                //     $item->autor=$row['autor'];
                //     $item->title=$row['title'];
                //     $item->status=$row['status'];

                //     array_push($items, $item);
                $querys= $this->db->connect()->query('SELECT * FROM retiro_entrega');
                while($row = $querys->fetch()){
                    $rows=new TableRetiro_Entrega();
                    $rows->id=$row['id'];
                    $rows->dni=$row['dni'];
                    $rows->book_id=$row['book_id'];
                    
                    array_push($rowss, $rows);

                }
                return $rowss;
            }catch(PDOException $e){
                return [];
            }
        }
    }