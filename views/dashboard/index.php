<?php require 'views/layouts/admin.template.php'; ?>
<?php require 'views/modales/search.estudent.php'; ?>
<?php require 'views/modales/add.book.php'; ?>
<?php require 'views/modales/asignar.book.php'; ?>
<main id='dashboard'>
<section class="content">
    <div class="row">
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
</section>
</main>