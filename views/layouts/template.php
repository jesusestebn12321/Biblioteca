<?php
$template=new Template();
    class Template{
        function __construct(){
            ?>
                <!DOCTYPE html>
                <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">    
                    <title> Biblioteca ASI </title>
                    <link rel="shortcut icon" href="<?php echo constant("URL")?>/img/portafolio.ico" />
                     <!-- Styles -->
                    <link rel="stylesheet" href="<?php echo constant("URL")?>/public/fonts/css/font-awesome.min.css">
                    <link rel="stylesheet" href="<?php echo constant("URL")?>/public/css/bootstrap.min.css">
                    <link rel="stylesheet" href="<?php echo constant("URL")?>/public/css/main.css">
                    <!-- Scripts -->
                    <script src="<?php echo constant("URL")?>/public/js/vendor/modernizr-2.8.3.min.js"></script>
                    <script src="<?php echo constant("URL")?>/public/js/vendor/bootstrap.min.js"></script>
                    <script src="<?php echo constant("URL")?>/public/js/vendor/jquery-1.11.2.min.js"></script>
                    <script src="<?php echo constant("URL")?>/public/js/vendor/vue.js"></script>
                    
                </head>
                <body>
                    <header class="app-diagonal" style='font-family:"Shrikhand", cursive'>
                        
                    </header>
                    <?php 
            }
            function __destruct(){
                ?>
                </body>
                
                <!-- Scripts   -->
                <script src="<?php echo constant("URL")?>/public/js/vendor/jquery-1.11.2.min.js"></script>
                <script src="<?php echo constant("URL")?>/public/js/vendor/bootstrap.min.js"></script>
                <script src="<?php echo constant("URL")?>/public/js/main.js"></script>
                <script src="<?php echo constant("URL")?>/public/js/vendor/vue.js"></script>
            </html>
            <?php 
            }
        }
        
        
                        ?>  