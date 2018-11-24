<?php require 'views/layouts/admin.template.php'; ?>
<main id='book'>
<?php require 'views/modales/add.book.php'; ?>
    <div class='container'>
        <div class="row"> <hr>
            <div class='col-xs-6 col-lg-6 col-md-6'>
                <h1> <i class='fa fa-address-book'></i> <b>L</b>ibros <b>ASI</b></h1>
            </div>
            <div class="col-xs-6 col-lg-6 col-md-6">
                <div class="small-stat clearfix">
                    <div class="container-fluid">
                        <div class='row'>
                            <span class="small-stat-icon pink">
                                <i class="fa fa-book"></i>
                            </span>
                            <div class='col-lg-8'>
                                <div class="small-stat-info">    
                                    <span>{{panelTitulo}}</span>
                                    <p>{{panelDescripcion}}</p>   
                                </div>
                            </div>
                            <div class='col-lg-12'>
                                <span v-html='btn'></span>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container-fluid">
                <div class="row">
                    <table id="products" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Codigo</th>
                                <th class="text-center">Titulo</th>
                                <th class="text-center">Autor</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for='(libros, id) in libro'>
                                <td>
                                   <p v-if='!editStatus'>{{libros.codigo}}</p>
                                   <input v-else class='form-control' v-model='codigo' type="text">
                                </td>
                                <td> 
                                    <p  v-if='!editStatus'>{{libros.titulo}}</p>
                                    <input v-else class='form-control' v-model='titulo'  type="text">
                                </td>
                                <td>
                                   <p v-if='!editStatus'>{{libros.id}}</p>
                                   <input v-else class='form-control' v-model='autor'  type="text">
                                </td>
                                <td>
                                    <a class='btn btn-danger' @click.prevent='destroyBook(id)' href=""> <i class='fa fa-remove'></i></a>
                                    <a class='btn btn-warning' v-if='!editStatus' @click.prevent='editarBook(id)' href="#!"> <i class='fa fa-edit'></i></a>
                                    <a class='btn btn-warning' v-else @click.prevent='upDateBook(codigo,titulo,autor)' href="#!"> <i class='fa fa-edit'></i></a>
                                </td>
                            </tr>  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>