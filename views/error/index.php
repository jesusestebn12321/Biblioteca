<title>Error404</title>
<?php require 'views/layouts/admin.template.php'; ?>
<main>
	<div class='app-error'>
		<div id='app-error-1'>
			<h1><span class='app-resaltar-letras text-white'>Oooops..! :'( </span></h1>
			<h2	style='font-size:6rem' class='text-white'> <i class='fa fa-remove text-red app-rotar'></i> Error <span class='text-red app-resaltar-letras' style='font-size:10rem'>404</span></h2>
			<b 	style='font-size:3rem' class='text-white'> Lo sentimos Pagina no encontrada...!</b>	
		</div>
		<div id='app-error-2'>
			<img src="<?php echo constant('URL')?>public/img/210w.webp" alt="Error404">
		</div>
	</div>
</main>