<title>Admin | Estudents</title>
<?php include 'views/layouts/newTemplate.php'; ?>
<?php include 'views/modales/add.estudent.php'; ?>
<main> 
    <div class='container'>
        <div class="row">
            <div class='center'> <?php $this->mensaje;?> </div>
            <div class='col-xs-6 col-lg-6 col-md-6'>
                <h1 class='app-sub-titulo'> <i class='fa fa-users'></i> <span class='app-resaltar-letras'>E</span>studiantes <span class='app-resaltar-letras'>R</span>egistrados</h1>   
            </div>
            <div class="col-xs-6 col-lg-6 col-md-6" style='margin-top:2rem'>
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>Add Estudiante</h3>
                        <p>Registra mas estudiantes a la Biblioteca</p>
                    </div>
                    <div class="icon" style='margin-top:2rem'>
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#modalAddEstudents" class="small-box-footer">Add <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class='container-fluid'>
                <div class="row">
                    <table id="estudent" class="table table-striped table-bordered table-hover dataTable">
                        <thead>
                            <tr id='app-tr'>
                                <th class="text-center">Cedula</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Apellido</th>
                                <th class="text-center">Correo</th>
                                <th class="text-center">Telefono/Celular</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php foreach($this->estudent as $row){
                                $estudents=new TableEstudent();
                                $estudents=$row;
                                ?>
                                <tr id='app-tr'>
                                    <td>
                                        <p><?php echo $estudents->dni ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $estudents->name ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $estudents->lastname ?></p>
                                    </td>
                                    <td> 
                                        <p> <?php echo $estudents->phone ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $estudents->email ?></p>
                                    </td>
                                    <td>
                                        <a class='btn btn-danger'  href="#!"> <i class='fa fa-remove'></i></a>
                                        <a class='btn btn-warning' href="#!"> <i class='fa fa-edit'></i></a>
                                    </td>
                                </tr>   
                            <?php }?>
                        </tbody>
                    </table>        
                </div>
            </div>
        </div>
    </div>
</main>