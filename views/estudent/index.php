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
                        <p id='tr<?php echo $estudents->id?>'>Registra mas estudiantes a la Biblioteca</p>
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
                                <th class="text-center">Telefono/Celular</th>
                                <th class="text-center">Correo</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php foreach($this->estudent as $row){
                                $estudents=new TableEstudent();
                                $estudents=$row;
                                ?>
                                <tr id='tr<?php echo $estudents->id ?>'>
                                    <td>
                                        <input id='id<?php echo $estudents->id ?>' value='<?php echo $estudents->id ?>' type="hidden">
                                        <p class='hidden'><?php echo $estudents->dni ?></p>
                                        <input type="number" disabled id='Pdni<?php echo $estudents->id?>' value='<?php echo $estudents->dni ?>' style='border:none;background:none'>                                      
                                        <input id='dni<?php echo $estudents->id ?>' value='<?php echo $estudents->dni ?>' class='hidden form-control' type="number">
                                    </td>
                                    <td>
                                        <p class='hidden'><?php echo $estudents->name ?></p>
                                        <input type="text" disabled id='Pname<?php echo $estudents->id?>' value='<?php echo $estudents->name ?>' style='border:none;background:none'>                                      
                                        <input id='name<?php echo $estudents->id?>' value='<?php echo $estudents->name ?>' class='hidden form-control' type="text">
                                    </td>
                                    <td>
                                        <p class='hidden'><?php echo $estudents->lastname ?></p>
                                        <input type="text" disabled id='Plastname<?php echo $estudents->id?>' value='<?php echo $estudents->lastname ?>' style='border:none;background:none'>                                      
                                        <input id='lastname<?php echo $estudents->id?>' value='<?php echo $estudents->lastname?>' class='hidden form-control' type="text">
                                    </td>
                                    <td> 
                                        <p class='hidden'><?php echo $estudents->phone ?></p>
                                        <input type="number" disabled id='Pphone<?php echo $estudents->id?>' value='<?php echo $estudents->phone ?>' style='border:none;background:none'>                                      
                                        <input id='phone<?php echo $estudents->id?>' value='<?php echo $estudents->phone?>' class='hidden form-control' type="number">
                                    </td>
                                    <td>
                                        <p class='hidden'><?php echo $estudents->email ?></p>
                                        <input type="email" disabled id='Pemail<?php echo $estudents->id?>' value='<?php echo $estudents->email ?>' style='border:none;background:none'>                                      
                                        <input id='email<?php echo $estudents->id?>' value='<?php echo $estudents->email?>' class='hidden form-control' type="email">
                                    </td>
                                    <td>
                                    <a class='btn btn-danger' onClick='DestroyEstudent(<?php echo $estudents->id?>)'  href="#!"> <i class='fa fa-remove'></i></a>
                                    <a class='btn btn-warning' id='btnEditEstudent1<?php echo $estudents->id?>' onClick='EditEstudent(<?php echo $estudents->id?>)' href="#!"> <i class='fa fa-edit'></i></a>
                                    <a class='btn btn-info hidden' id='btnEditestudent2<?php echo $estudents->id?>' onClick='EditEstudent(<?php echo $estudents->id?>)' href="#!"> <i class='fa fa-edit'></i></a>
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
