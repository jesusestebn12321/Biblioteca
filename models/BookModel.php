<?php
    class BookModel extends Model{
        public function __construct(){
            parent::__construct();
        }
        public function show(){
            echo 'show';
        }
        public function insert($request){
            // ensertar datos de la db
            try{
                $query= $this->db->connect()->prepare('INSERT INTO books (code, autor, title) VALUE (:code, :autor, :title)');
                $query->execute([
                    'code'  => $request['code'],
                    'autor'  => $request['autor'],
                    'title'  => $request['title']
                ]);
                return true;
            }catch(PDOException $e){
                echo '<script>swal("Error", "Libro Registrado",{
                    icon:"error"
                });</script>';
                return false;
            }
        }
    }