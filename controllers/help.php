<?php
    class Help extends Controller{
        public function __construct(){
            parent::__construct();
        }
        public function render(){
            $this->view->render('help/index');
        }
        public function Index(){
            echo '<h4>metodo index</h4>';
        }
    }