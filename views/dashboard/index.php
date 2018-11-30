<?php require 'views/layouts/newTemplate.php'; ?>
<main id='dashboard'>
    <div class="container">
        <div class="row">
            <h1 class='app-sub-titulo'> <i class='fa fa-dashboard'></i> <span clasS='app-resaltar-letras'>D</span>ashboard</h1><hr>   
            <hr>

            <div class='col-xs-6 col-lg-6 col-md-6'>
                <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>Estudiantes</h3>
                            <p>Agrega, Borra, Modifica y Visualisar Estudiantes Registrado en la Biblioteca</p>
                        </div>
                    <div class="icon" style='margin-top:1rem'>
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="<?php echo constant('URL')?>/Estudent/Index" class="small-box-footer">IR <i class="fa fa-arrow-eye"></i></a>
                </div>
            </div>
            <div class='col-xs-6 col-lg-6 col-md-6'>
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>Libro</h3>
                        <p>Agrega, Borra, Modifica y Visualisar los Libros de la Biblioteca</p>
                    </div>
                    <div class="icon" style='margin-top:1rem'>
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="<?php echo constant('URL')?>/Book/Index" class="small-box-footer">IR <i class="fa fa-arrow-eye"></i></a>
                </div>
            </div>
            <div class='col-xs-12 col-lg-12 col-md-12'>
                <div class="small-box bg-navy">
                    <div class="inner">
                    <h3>Retiros y Entregas</h3>
                                    <p>En lista los estudiante que retiran libros y Elimina el registro de los que ya lo entregaron los libros </p>
                                </div>
                    <div class="icon" style='margin-top:1rem'>
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <a href="<?php echo constant('URL')?>/Entrega/Index" class="small-box-footer">IR <i class="fa fa-arrow-eye"></i></a>
                </div>
            </div>
        
        </div>
    </div>
</main>