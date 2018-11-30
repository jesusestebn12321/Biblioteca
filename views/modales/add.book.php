<div class="modal fade" id="modalAddBooks">
	<div class="modal-dialog">
		<div class="modal-content"> 
			<div class="app-modal-header modal-header bg-aqua-gradient text-white">
				<a class="close" aria-hidden="true" data-dismiss="modal">&times;</a>
				<h3 class='center'>Libro <span class="fa fa-book"></span></h3>
			</div>
			<div class="modal-body">
                <form action="<?php echo constant('URL')?>/Book/Store" method='POST'>
                    <input type="hidden" name='status' value='1' required>
                    <div class="form-group">
                        <label for="nombre">Codigo</label>
                        <input type="number" name='code' class="form-control" placeholder="Codigo" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Autor</label>
                        <input type="text" name='autor' class="form-control" placeholder="Autor" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Titulo</label>
                        <input type="text" name='title' class="form-control" placeholder="Titulo" required>
                    </div>

                <div class="app-modal-footer modal-footer">
                    <input type="submit" value="Save" class="btn btn-success">
                </form>
                <a class="btn btn-danger" data-dismiss="modal">Salir <span class="fa  fa-chevron-circle-right"></span></a>
            </div>
        </div>
		</div>
	</div>
</div>