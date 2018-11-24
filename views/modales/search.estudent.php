<div class="modal fade" id="modalSearchEstudent">
	<div class="modal-dialog">
		<div class="modal-content"> 
			<div class="app-modal-header modal-header bg-aqua text-white">
				<button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
				<h3>Entregar Libro <span class="fa fa-book"></span></h3>
			</div>
			<div class="modal-body">
            <form action="#" id="formulario">
                <div class="form-group">
                    <div class="col-sm-12 col-xs-12  input-group">
                        <input type="text" class="form-control" id="nameSearch" placeholder="Search" required>
                        <span class="input-group-btn" id="app-input-form">
                            <a class='btn btn-primary' href="#!" style='border:0px;'>
                                <i class="fa fa-search"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </form>
            <div class="container-fluid">
                <div class="row">

                    <table class='table table-striped table-bordered'>
                        <thead>
                            <tr>
                                <th colspan='3'><h3 class='text-center'><i class='fa fa-user'></i>Estudiante</h3></th>
                                <th colspan='3'><h3 class='text-center'><i class='fa fa-book'></i>Libro</h3></th> 
                                <th colspan='1'></th> 
                            </tr>
                            <tr>
                                <th class='text-center'>Cedula</th>
                                <th class='text-center'>Nombre</th>
                                <th class='text-center'>Apellido</th>
                                <th class='text-center'>Ref Libros</th>
                                <th class='text-center'>Titulo libros</th>
                                <th class='text-center'>Auto libros</th>
                                <th></th>
                            </tr>
                        </thead>
                        <!-- meterle ajax -->
                        <tbody>
                            <tr>
                                <form action="">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a class='btn btn-success' href="#!"><i class='fa fa-check-circle'></i></a></td>
                                </form>
                            </tr>
                        </tbody>
                        <!-- fin search -->
                    </table>
                </div>
            </div>
            </div>
            <div class="app-modal-footer modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Salir <span class="fa  fa-chevron-circle-right"></span></button>
            </div>
		</div>
	</div>
</div>
