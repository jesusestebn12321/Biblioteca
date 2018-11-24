 <?php
    class app{
        function __construct(){
            // echo '<h1>App</h1>';
            $url= isset($_GET['url']) ? $_GET['url']:null;
            $url= rtrim($url, '/');
            $url= explode('/',$url);
            if (empty($url[0])) {
                $fileControllers='controllers/login.php';
                require_once $fileControllers; 
                $controller=new Login();
                $controller->loadModel('index');
                return false;
            
            }

            $fileControllers='controllers/'.$url[0].'.php' ;
            if(file_exists($fileControllers)){
                require_once $fileControllers; 
                $controller= new $url[0];
                $controller->loadModel($url[0]);
                if (isset($url[1])) {
                    $controller->{$url[1]}();
                }
            }else{
                require_once 'controllers/errors.php'; 
                $controller= new Errors();
            }
        }
    }
    