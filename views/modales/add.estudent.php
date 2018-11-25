<div class="modal fade" id="modalAddEstudents">
	<div class="modal-dialog">
		<div class="modal-content"> 
			<div class="app-modal-header modal-header bg-aqua text-white">
				<button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
				<h3 class='center'>Estudiante <span class="fa fa-user"></span></h3>
			</div>
			<div class="modal-body">
                <form action="<?php echo constant('URL')?>Estudent/Store" method='POST' id="formulario">
                    <div class="form-group">
                        <label for="dni">Cedula</label>
                        <input v-model='dni' name="dni" type="number" class="form-control" placeholder="C.I:" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input v-model='name' name="name" type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Apellido</label>
                        <input v-model='lastName' name="lastname" type="text" class="form-control" placeholder="Apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Numero De Telefono</label>
                        <input name="phone" value='0' type="number" class="form-control" placeholder="Telefono/Celular" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label> 
                        <input name="email" type="email" placeholder='Correo' class="form-control" required>		
                    </div>
                    <div class="app-modal-footer modal-footer">
                        <input type="submit" id="" value="Save" class="btn btn-success">
                    </form>
                    <button class="btn btn-danger" data-dismiss="modal">Salir <span class="fa  fa-chevron-circle-right"></span></button>
                </div>
            </div>
		</div>
	</div>
</div>