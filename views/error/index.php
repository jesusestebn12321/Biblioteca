<title>Error404</title>
<?php require 'views/layouts/admin.template.php'; ?>
<main>
	<div class="container">
		<div class="row">
			<div class='col-lg-6 col-sm-6 col-xs-6 col-md-6'>
				<h1>Oooops..!</h1>
				<h2 class='text-red'> <i class='fa fa-remove text-red'></i> Error <b class='text-black'>404</b></h2>
				<p>Lo sentimos Pagina no encontrada...!</p>	
			</div>
			<div class='col-lg-6 col-sm-6 col-xs-6 col-md-6'>
				<img src="<?php echo constant('URL')?>public/img/error.png" alt="Error404">
			</div>
		</div>
	</div>
</main>