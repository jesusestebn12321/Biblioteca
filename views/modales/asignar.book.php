<div class="modal fade" id="modalAsignarBook">
	<div class="modal-dialog">
		<div class="modal-content"> 
			<div class="app-modal-header modal-header bg-aqua text-white">
				<button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
				<h3>Asignar Libro<span class="fa fa-cart-plus "></span></h3>
			</div>
			<div class="modal-body">
                <form action="#" id="formulario">
                    <div class="form-group">
                        <label for="dni">Cedula del Estudiante</label>
                        <input id="dni" type="text" class="form-control" placeholder="C.I:" required>
                    </div>
                    <div class="form-group">
                        <label for="code">Codigo del Libro</label>
                        <input id="code" type="number" class="form-control" placeholder="Ref:" required>
                    </div>
                </div>
                <div class="app-modal-footer modal-footer">
                    <input type="button" id="practicas" value="Save" class="btn btn-success">
                    <button class="btn btn-danger" data-dismiss="modal">Salir <span class="fa  fa-chevron-circle-right"></span></button>
                </div>
            </form>
		</div>
	</div>
</div>