<?php
    class Errors extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->mensaje='Mensaje del controlador error';
            $this->view->render('error/index');
            
        }
    }