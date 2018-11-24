<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/portafolio.ico" />
                    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/WOW-master/css/libs/animate.css">
                    <!-- Scripts -->
    <script src="<?php echo constant('URL')?>public/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="<?php echo constant('URL')?>public/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo constant('URL')?>public/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="<?php echo constant('URL')?>public/js/vendor/vue.js"></script>
</head>
<body class='body'>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class='center'>
                    <!-- <h1 class='text-blanco box-titulo'>Biblioteca ASI</h1> -->
                </div>
            </div>
        </div> 
    </header>
    <div class="container-fluid">	
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 panel app-panel-gray">
                <div class="panel-heading app-panel-gray">
                    <h2 class='center text-black'>Iniciar Sección</h2>
                </div>
                <form action="<?php echo constant('URL')?>Login/Index" method="POST">
                    <div class="panel-body app-panel-gray">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 col-lg-12 col-xs-12">
                                        <input type="text" class="form-control" id="user" placeholder="Usuario" required> <br>         
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 col-lg-12 col-xs-12">
                                        <input type="password" class="form-control" id="pass" placeholder="Clave" required><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer app-panel-gray">
                        <div class="container-fluid">
                            <div class="row">
                                <input class='btn btn-primary btn-block' type="submit" value="Iniciar Sesión">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="<?php echo constant('URL')?>public/js/vendor/jquery-1.11.2.min.js"></script>
<script src="<?php echo constant('URL')?>public/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo constant('URL')?>public/WOW-master/dist/wow.js"></script>
<script src="<?php echo constant('URL')?>public/js/main.js"></script>
<script src="<?php echo constant('URL')?>public/js/vendor/vue.js"></script>
</html>