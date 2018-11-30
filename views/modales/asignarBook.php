<div class="modal fade" id="modalAsignarBook">
	<div class="modal-dialog">
		<div class="modal-content"> 
			<div class="app-modal-header modal-header bg-aqua text-white">
				<button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
				<h3 class='center'>Retirar Libro <span class="fa fa-book"></span></h3>
			</div>
			<div class="modal-body">
                <form action="#" method='POST' id="formulario">
                    <input type="text" name='idBook' id='idBook' value=''>
                    <div class="form-group">
                        <label for="dni">Cedula</label>
                        <input id='dniAsignar' name='dniAsignar' type="number" class="form-control" require placeholder="C.I:" required>
                    </div>
                    <div class="app-modal-footer modal-footer">
                        <input type="submit" id="btnRetirar" value="Save" class="btn btn-success">
                    </form>
                </div>
            </div>
		</div>
	</div>
</div>