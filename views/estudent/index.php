<?php require 'views/layouts/admin.template.php'; ?>

<main id='viewsEstudents'> 
    <?php require 'views/modales/add.estudent.php'; ?>
    <div class='container'>
        <div class="row"> <hr>
            <div class='col-xs-6 col-lg-6 col-md-6'>
                <span v-html='primerTitulo'></span>    
            </div>
            <div class="col-xs-6 col-lg-6 col-md-6">
                <div class="small-stat clearfix">
                    <div class="container-fluid">
                        <div class='row'>
                            <span class="small-stat-icon tar">
                                <i class="fa fa-user-plus"></i>
                            </span>
                            <div class='col-lg-8'>
                                <div class="small-stat-info">    
                                    <span>{{titulo}}</span>
                                    <p>{{descripcion}}</p>   
                                </div>
                            </div>
                            <div class='col-lg-12'>
                                <span v-html='btn'></span>    
                            </div>
                        </div>
                    </div>
                </div>
            </div><hr>
            
            <div class='container-fluid'>
                <div class="row">
                    <table id="products" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Cedula</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Apellido</th>
                                <th class="text-center">Correo</th>
                                <th class="text-center">Telefono/Celular</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                   <p v-if='!editStatus'>{{cedula}}</p>
                                   <input v-else class='form-control' v-model='cedula' type="text" value="">
                                </td>
                                <td>
                                    <p  v-if='!editStatus'>{{nombre}}</p>
                                    <input v-else class='form-control' v-model='nombre'  type="text">
                                </td>
                                <td>
                                   <p v-if='!editStatus'>{{apellido}}</p>
                                   <input v-else class='form-control' v-model='apellido'  type="text">
                                </td>
                                <td> 
                                   <p v-if='!editStatus'> {{correo}}</p>
                                   <input v-else class='form-control' v-model='correo'  type="text">
                                </td>
                                <td>
                                    <p v-if='!editStatus'>{{telefono}}</p>
                                    <input v-else class='form-control' v-model='telefono'  type="text">
                                </td>
                                <td>
                                    <a class='btn btn-danger'  href="#!"> <i class='fa fa-remove'></i></a>
                                    <a class='btn btn-warning' v-if='!editStatus' @click.prevent='editarEstudent' href="#!"> <i class='fa fa-edit'></i></a>
                                    <a class='btn btn-warning' v-else @click.prevent='upDate(cedula,nombre,apellido,correo,telefono)' href="#!"> <i class='fa fa-edit'></i></a>
                                </td>
                            </tr>   
                        </tbody>
                    </table>        
                </div>
            </div>
        </div>
    </div>
</main>