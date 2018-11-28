<div class="modal fade" id="modalAsignarBook">
	<div class="modal-dialog">
		<div class="modal-content"> 
			<div class="app-modal-header modal-header bg-aqua text-white">
				<button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
				<h3 class='center'>Retirar Libro <span class="fa fa-book"></span></h3>
			</div>
			<div class="modal-body">
                <form action="<?php echo constant('URL')?>/RetiroEntrega" method='POST' id="formulario">
                    <input type="hidden" id='asignarBook' value=''  >
                    <div class="form-group">
                        <label for="dni">Cedula</label>
                        <input name="dni" type="number" class="form-control" placeholder="C.I:" required>
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