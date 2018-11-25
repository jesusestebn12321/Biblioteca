<?php require 'views/layouts/admin.template.php'; ?>
<?php require 'views/modales/search.estudent.php'; ?>
<?php require 'views/modales/asignar.book.php'; ?>
<main id='dashboard'>
    <div class="container app-dashboard">
        <div class="row">
            <h1 class='app-sub-titulo'> <i class='fa fa-dashboard'></i> <span clasS='app-resaltar-letras'>D</span>ashboard</h1><hr>   
            <div class="col-md-6" v-for='articulo in articulos'>
                <div class="small-stat clearfix">
                    <div class="container-fluid">
                        <div class='row'>
                            <div class='col-lg-4'>
                                <span v-html='articulo.color'></span>
                            </div>
                            <div class='col-lg-8'>
                                <div class="small-stat-info">    
                                    <span>{{articulo.name}}</span>
                                    {{articulo.descripcion}}
                                </div>
                            </div>
                            <div class='col-lg-12'>
                                <br><span v-html='articulo.button'></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>