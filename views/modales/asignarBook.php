<div class="modal fade" id="modalAsignarBook">
	<div class="modal-dialog">
		<div class="modal-content"> 
			<div class="app-modal-header modal-header bg-aqua text-white">
				<button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
				<h3 class='center'>Retirar Libro <span class="fa fa-book"></span></h3>
			</div>
			<div class="modal-body">
                <form action="#" method='POST' id="formulario">
                    <input type="hidden" name='idBook' id='idBook' value=''>
                    <div class="container-fluid">
                        <div class='row'>
                        <table id="estudent" class="table table-striped table-bordered table-hover table-responsive dataTable">
                        <thead>
                            <tr id='app-tr'>
                                <th class="text-center">Cedula</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Apellido</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php foreach($this->estudent as $row){
                                $estudents=new TableEstudent();
                                $estudents=$row;
                                ?>
                                <tr>
                                    <td>
                                        <input id='id<?php echo $estudents->id ?>' value='<?php echo $estudents->id ?>' type="hidden">
                                        <p><?php echo $estudents->dni ?></p>
                                    </td>
                                    <td>
                                      <p><?php echo $estudents->name ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $estudents->lastname ?></p>
                                    </td>
                                    
                                    <td>
                                        <a class='btn btn-success' onClick='AsignarBook(<?php echo $estudents->id?>)'  aria-hidden="true" data-dismiss="modal" href="#!"> <i class='fa fa-address-book'></i></a>
                                    </td>
                                </tr>   
                            <?php }?>
                        </tbody>
                    </table> 
                        </div>
                    </div>
            </div>
		</div>
	</div>
</div>