<?php
$template=new Template();
    class Template{
        function __construct(){
            ?>
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="UTF-8"> 
                <title>Admin | Dashboard</title>
                <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
                <!-- Theme style -->
                <link href="<?php echo constant("URL")?>public/img/portafolio.ico"              rel="shortcut icon" />
                <link href="<?php echo constant("URL")?>public/fonts/css/font-awesome.min.css"  rel="stylesheet" type="text/css"/>
                <link href="<?php echo constant("URL")?>public/css/bootstrap.min.css"           rel="stylesheet" type="text/css"/>
                <link href="<?php echo constant("URL")?>public/Director-free/css/style.css"     rel="stylesheet" type="text/css"/>
                <link href="<?php echo constant("URL")?>public/css/admin.main.css"           rel="stylesheet" type="text/css"/>
                <!-- Script -->
                
                <script src="<?php echo constant("URL")?>public/js/vendor/modernizr-2.8.3.min.js"></script>
                <script src="<?php echo constant("URL")?>public/js/vendor/bootstrap.min.js"></script>               
                <script src="<?php echo constant("URL")?>public/js/vendor/jquery-1.11.2.min.js"></script>
                <script src="<?php echo constant("URL")?>public/sweetalert/docs/assets/sweetalert/sweetalert.min.js"></script>
                <script src="<?php echo constant("URL")?>public/js/vendor/vue.js"></script>
                </head>
                <body class="skin-black">
                    <!-- header logo: style can be found in header.less -->
                    <header class="header" id='menu'>
                        <?php include 'header.admin.php'; ?>
                    </header>
                    <div class="wrapper row-offcanvas row-offcanvas-left">
                        <!-- Left side column. contains the logo and sidebar -->
                        <?php include 'sidebar.php'; ?>
                        <aside class="right-side">
                            <?php 
                        }
               
                    function __destruct(){
                        ?>
                    <div class="footer-main">
                        Copyright &copy JEVG, 2018
                    </div>
                </aside><!-- /.right-side -->
            </div>
            <!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
         <script src="<?php echo constant("URL")?>public/Director-free/js/jquery.min.js" type="text/javascript"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo constant("URL")?>public/Director-free/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo constant("URL")?>public/Director-free/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Director App -->
        <script src="<?php echo constant("URL")?>public/Director-free/js/Director/app.js" type="text/javascript"></script>
        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo constant("URL")?>public/Director-free/js/Director/dashboard.js" type="text/javascript"></script>
        <!-- Director for demo purposes -->
        <script src="<?php echo constant("URL")?>public/Director-free/js/Director/demo.js" type="text/javascript"></script>
        <!-- MyScript -->
        <script src="<?php echo constant("URL")?>public/js/main.js"></script>
        <script src="<?php echo constant("URL")?>public/js/vendor/vue.js"></script>
       
</body>
</html>
            <?php 
            }
        }
        ?>  