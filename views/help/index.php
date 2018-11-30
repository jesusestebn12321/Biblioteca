<title>Helpers</title>
<?php require 'views/layouts/newTemplate.php'; ?>
<main>
	<div class="container">
		<div class="row">
		<h1 class='app-sub-titulo'><i class='fa fa-question-circle-o'></i> <span class='app-resaltar-letras'>H</span>elpers</h1>
			<div class='box box-info'>
				<div class='box-header'>
					<h2><i class='fa fa-circle-o text-aqua'></i><span class='app-resaltar-letras'>¿</span>Vista Estudiantes<span class='app-resaltar-letras'>?</span></h2>
				</div>
				<div class='box-body'>
					<ul class="list-group">
						<li class="list-group-item">
							<p>Debera oprimir el boton <button class='btn btn-primary' disabled>Add</button> en la parte superior derecha para que se despleque un modal.</p>
							
						</li>
						<li class="list-group-item">
							<p>Este modal consta de 5 campos requeridos para poder completar el formulario estos son:
								<ul>
									<li>Cedula.</li>
									<li>Nombre.</li>
									<li>Apellido.</li>
									<li>Telefono.</li>
									<li>Correo.</li>
								</ul>
							</p>
						</li>
						<li class="list-group-item">
							<p>Cuando se encuentre seguro(a) debe de oprimir el boton <button class='btn btn-success' disabled>SAVE</button> para así registrar el estudiante.</p>
						</li>
						<li class="list-group-item">
							<p>Si no se encuentra seguro(a) de registrar a un estudiante oprima el boton  <button class='btn btn-danger' disabled>SALIR</button> de igual manera puede oprimir la <i class='fa fa-remove'></i> en la parte superior derecha del modal.</p>
						</li>
						<li class="list-group-item">
							<p>Existe la posibilidad de Editar a un estudiante solo oprimiendo el boton <button class='btn btn-warning' disabled><i class='fa fa-edit'></i></button> y sobre escribira lo que se requiera sobre escribir, posteriomente oprimira el boton  <button class='btn btn-info' disabled><i class='fa fa-edit'></i></button> .</p>
						</li>
						<li class="list-group-item">
							<p>Existe la posibilidad de Eliminar a un estudiante solo oprimiendo el boton <button class='btn btn-danger' disabled><i class='fa fa-remove'></i></button>.</p>
						</li>
						<li class="list-group-item">
							<p>Esta vista posee un 'Search' de busqueda para ajilisar la entrega de los Estudiantes.</p>
						</li>
						<li class="list-group-item">
							<p>Esta vista posee un 'Paginador'.</p>
						</li>
						<li class="list-group-item">
							<p>Esta lista de estudiantes la puede ordenar de forma 'Asendente' y 'Desendente' para su propia comodidad.</p>
						</li>
					</ul>
				</div>
			</div>
			
			<div class='box box-info'>
				<div class='box-header'>
					<h2><i class='fa fa-circle-o text-aqua'></i><span class='app-resaltar-letras'>¿</span>Vista Libros<span class='app-resaltar-letras'>?</span></h2>
				</div>
				<div class='box-body'>
					<ul class="list-group">
						<li class="list-group-item">
							<p>En esta Vista solo se veran "Visibles" o "Activos" aquellos libros que aun no han sido retirados.</p>
						</li>
						<li class="list-group-item">
							<p>Debera oprimir el boton <button class='btn btn-primary' disabled>Add</button> en la parte superior derecha para que se despleque un modal.</p>
						</li>
						<li class="list-group-item">
							<p>Este modal consta de 3 campos requeridos para poder completar el formulario estos son:
								<ul>
									<li>Codigo</li>
									<li>Autor</li>
									<li>Titulo</li>
								</ul>
							</p>
						</li>
						<li class="list-group-item">
							<p>Cuando se encuentre seguro(a) debe de oprimir el boton <button class='btn btn-success' disabled>SAVE</button> para así registrar el libro.</p>
						</li>
						<li class="list-group-item">
							<p>Si no se encuentra seguro(a) de registrar a un libro oprima el boton  <button class='btn btn-danger' disabled>SALIR</button> de igual manera puede oprimir la <i class='fa fa-remove'></i> en la parte superior derecha del modal.</p>
						</li>
						<li class="list-group-item">
							<p>Existe la posibilidad de Editar los libros solo oprimiendo el boton <button class='btn btn-warning' disabled><i class='fa fa-edit'></i></button> y sobre escribira lo que se requiera sobre escribir, posteriomente oprimira el boton  <button class='btn btn-info' disabled><i class='fa fa-edit'></i></button> .</p>
						</li>
						<li class="list-group-item">
							<p>Existe la posibilidad de Eliminar los libros solo oprimiendo el boton <button class='btn btn-danger' disabled><i class='fa fa-remove'></i></button>.</p>
						</li>
						<li class="list-group-item">
							<p>En esta vista es en donde puede asignar el o los libros a un estudiante oprimiendo el boton <button class='btn btn-success' disabled><i class='fa fa-caret-square-o-up'></i></button>, se desplegara un modal, que en este aparecera un campo para rellenar con la Cedula del estudiante.</p>
						</li>
						<li class="list-group-item">
							<p>Esta vista posee un 'Search' de busqueda para ajilisar la entrega de los libros.</p>
						</li>
						<li class="list-group-item">
							<p>Esta vista posee un 'Paginador'.</p>
						</li>
						<li class="list-group-item">
							<p>Esta lista de libros la puede ordenar de forma 'Asendente' y 'Desendente' para su propia comodidad.</p>
						</li>
					</ul>
				</div>
			</div>
			
			<div class='box box-info'>
				<div class='box-header'>
					<h2><i class='fa fa-circle-o text-aqua'></i><span class='app-resaltar-letras'>¿</span>Vista Entregas<span class='app-resaltar-letras'>?</span></h2>
				</div>
				<div class='box-body'>
					<ul class="list-group">
						<li class="list-group-item">
							<p>En esta Vista solo se veran los libros "Retirados", es desir, aquellos libros que no estan en la Sala de Lectura.</p>
						</li>
						<li class="list-group-item">
							<p>Se encontara con una lista con los siguentes campos:
								<ul>
									<li>Codigo</li>
									<li>Autor</li>
									<li>Titulo</li>
									<li>Status</li>
								</ul>
							</p>
						</li>
						<li class="list-group-item">
							<p>En esta vista es en donde se procede a entregar el o los libros con tan solo oprimiendo el boton <button class='btn btn-success' disabled><i class='fa fa-caret-square-o-up'></i></button>, se borrar la este registro, y se colocara Activo para que otro estudiante lo pueda leer.</p>
						</li>
						<li class="list-group-item">
							<p>Esta vista posee un 'Search' de busqueda para ajilisar la entrega de los libros.</p>
						</li>
						<li class="list-group-item">
							<p>Esta vista posee un 'Paginador'.</p>
						</li>
						<li class="list-group-item">
							<p>Esta lista de libros la puede ordenar de forma 'Asendente' y 'Desendente' para su propia comodidad.</p>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</main>