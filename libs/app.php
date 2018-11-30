 <?php
    class app{
        function __construct(){
            $url= isset($_GET['url']) ? $_GET['url']:null;
            $url= rtrim($url, '/');
            $url= explode('/',$url);
            if (empty($url[0])) {
                $fileControllers='controllers/login.php';
                require_once $fileControllers; 
                $controller=new Login();
                $controller->loadModel('index');
                $controller->render();
                return false;
            
            }

            $fileControllers='controllers/'.$url[0].'.php' ;
            if(file_exists($fileControllers)){
                require_once $fileControllers; 
                $controller= new $url[0];
                $controller->loadModel($url[0]);
                $nparam=sizeof($url);
                if($nparam>1){
                    if($nparam>2){
                        $param=[];
                        for($i=2;$i<$nparam;$i++){
                            array_push($param,$url[$i]);
                        }
                        $controller->{$url[1]}($param);
                    }else {
                        $controller->{$url[1]}();
                    }
                }else{
                    $controller->render();
                }


                if (isset($url[1])) {
                }else{
                    $controller->render();
                }
            }else{
                require_once 'controllers/errors.php'; 
                $controller= new Errors();
            }
        }
    }
    