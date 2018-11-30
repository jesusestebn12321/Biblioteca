<?php

    class Dashboard extends Controller{
        public function __construct(){
            parent::__construct();
            // echo '<h3> nuevo controlador main</h3>';
        }
        public function render(){
            $this->view->render('dashboard/index');
        }
        public function Index(){
            $this->view->render('dashboard/index');
        }
       
    }