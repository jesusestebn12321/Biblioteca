<?php
include_once 'models/TableBook.php';
    class BookModel extends Model{
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
        public function Insert($request){
            try{
                $query= $this->db->connect()->prepare('INSERT INTO books (code, autor, title, status) VALUE (:code, :autor, :title, :status)');
                $query->execute([
                    'code'  => $request['code'],
                    'autor'  => $request['autor'],
                    'title'  => $request['title'],
                    'status'  => $request['status']
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }
        public function Update($request){
            $query= $this->db->connect()->prepare('UPDATE books SET code=:code, autor=:autor, title=:title, status=1 WHERE id=:id');
            try{
                $query->execute([
                    'id'  => $request['id'],
                    'code'  => $request['code'],
                    'autor'  => $request['autor'],
                    'title'  => $request['title']
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }
        public function Delete($request){
            $query= $this->db->connect()->prepare('DELETE FROM books WHERE id=:id');
            $query->execute(['id' => $request['id']]);
            
        }
    }