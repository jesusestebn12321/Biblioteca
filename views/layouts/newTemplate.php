<?php
$newTe=new newTemplate();
    class newTemplate{
        function __construct(){
            ?>
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="UTF-8"> 
                <title>Admin | Dashboard</title>
                <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
                <!-- Theme style -->
                <link href="<?php echo constant("URL")?>/public/img/portafolio.ico"              rel="shortcut icon" />
                <link href="<?php echo constant("URL")?>/public/fonts/css/font-awesome.min.css"  rel="stylesheet" type="text/css"/>
                <link href="<?php echo constant("URL")?>/public/admin-lte/bootstrap/css/bootstrap.min.css"           rel="stylesheet" type="text/css"/>
                <link href="<?php echo constant("URL")?>/public/admin-lte/plugins/datatables/dataTables.bootstrap.css"     rel="stylesheet" type="text/css"/>
                <link href="<?php echo constant("URL")?>/public/admin-lte/dist/css/AdminLTE.min.css"           rel="stylesheet" type="text/css"/>
                <link href="<?php echo constant("URL")?>/public/admin-lte/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css"/>
                <link href="<?php echo constant("URL")?>/public/css/main.css" rel="stylesheet" type="text/css"/>

                <script src="<?php echo constant("URL")?>/public/sweetalert/docs/assets/sweetalert/sweetalert.min.js"></script>
                <script src="<?php echo constant("URL")?>/public/js/vendor/vue.js"></script>
            </head>
            <body class="hold-transition skin-blue sidebar-mini">
                <div class="wrapper">
                    <header class="main-header">
                        <?php include  'newHeader.php' ?>
                    </header> 
                    <aside class="main-sidebar">
                        <?php include  'newSidebar.php' ?>
                    </aside>
                    <div class="content-wrapper">      
                        
                            <?php 
                        }
                        function __destruct(){
                        ?>
                    </div>
                    <footer class="main-footer">
                        <div class="pull-right hidden-xs">
                        <b>Version</b> 0.1
                        </div>
                        <strong>Copyright &copy; 2018 <a href="#!">JEVG</a>.</strong> 
                    </footer>
                <div>
                <script src="<?php echo constant("URL")?>/public/js/vendor/jquery-2.2.3.min.js"></script>
                <!-- Bootstrap 3.3.6 -->
                <script src="<?php echo constant("URL")?>/public/admin-lte/bootstrap/js/bootstrap.min.js"></script>
                <!-- DataTables -->
                <script src="<?php echo constant("URL")?>/public/admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
                <script src="<?php echo constant("URL")?>/public/admin-lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
                <!-- SlimScroll -->
                <script src="<?php echo constant("URL")?>/public/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
                <!-- FastClick -->
                <script src="<?php echo constant("URL")?>/public/admin-lte/plugins/fastclick/fastclick.js"></script>
                <!-- AdminLTE App -->
                <script src="<?php echo constant("URL")?>/public/admin-lte/dist/js/app.min.js"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="<?php echo constant("URL")?>/public/admin-lte/dist/js/demo.js"></script>
                <script src="<?php echo constant("URL")?>/public/js/main.js"></script>
            </body>
        </html>
            <?php 
            }
        }
        ?>  