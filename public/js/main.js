$('[data-toggle="tooltip"]').tooltip();
$("#Book").DataTable();
$('#estudent').DataTable();
function Entregar(id_row){
	var id_book=$('#idBook'+id_row);
	var id_row=$('#id_row'+id_row);
	$.ajax({
		url: 'http://localhost/Biblioteca/Retiro/Entrega',
		method: 'POST',
		dataType: 'text',
		data: {
			id_book: id_book.val(),
			id_row: id_row.val()
		},success: function (respuesta) {
			$('#tr'+ id_row.val()).toggleClass('hidden');
			swal(respuesta, {
				icon: "success",
			});
		}	
	});
}
function AsignarBook(id_row){
	var id=$('#idBook');
	var id_estudent=$('#id'+id_row);
	
	$.ajax({
			url: 'http://localhost/Biblioteca/Retiro/Retiros',
			method: 'POST',
			dataType: 'text',
			data: {
				id: id.val(),
				estudent_id: id_estudent.val(),
			},success: function (respuesta) {
				$('#tr'+ id.val()).toggleClass('hidden');
				swal(respuesta, {
					icon: "success",
				});
			}
		});
}
function Asignar(id_row){
	var id=$('#idBook');
	var dni=$('#dniAsignar'+id_row);
	id.val(id_row);
}
function Edit(id_row){
	var Pcode= $('#Pcode'+id_row);
	var Pautor= $('#Pautor'+id_row);
	var Ptitle= $('#Ptitle'+id_row);
	
	var code= $('#code'+id_row);
	var autor= $('#autor'+id_row);
	var title= $('#title'+id_row);
	var id=$('#id'+id_row);
	
	Pcode.toggleClass('hidden');
	Pautor.toggleClass('hidden');
	Ptitle.toggleClass('hidden');


	code.toggleClass('hidden');
	autor.toggleClass('hidden');
	title.toggleClass('hidden');

	
	$('#btnEdit1'+id_row).toggleClass('hidden');
	$('#btnEdit2'+id_row).toggleClass('hidden');
	
	$('#btnEdit2'+id_row).click(function(){
		$.ajax({
			type: "POST",
			url: 'http://localhost/Biblioteca/Book/Edit',
			dataType: "text",
			data:{			
				code:code.val(),
				autor:autor.val(),
				title:title.val(),
				id:id.val()
			},success: function(respuesta) {
				Pcode.val(code.val())
				Pautor.val(autor.val());
				Ptitle.val(title.val());
				swal(respuesta, {
					icon:"success",
				});
			}
		});	
	});

}
function EditEstudent(id_row){
	var id=$('#id'+id_row);
	var dni= $('#dni'+id_row);
	var name= $('#name'+id_row);
	var lastname= $('#lastname'+id_row);
	var phone= $('#phone'+id_row);
	var email= $('#email'+id_row);

	var Pdni=$('#Pdni'+id_row);
	var Pname=$('#Pname'+id_row);
	var Plastname=$('#Plastname'+id_row);
	var Pphone=$('#Pphone'+id_row);
	var Pemail=$('#Pemail'+id_row);

	Pdni.toggleClass('hidden');
	Pname.toggleClass('hidden');
	Plastname.toggleClass('hidden');
	Pphone.toggleClass('hidden');
	Pemail.toggleClass('hidden');
	

	dni.toggleClass('hidden');
	name.toggleClass('hidden');
	lastname.toggleClass('hidden');
	phone.toggleClass('hidden');
	email.toggleClass('hidden');
	
	$('#btnEditEstudent1'+id_row).toggleClass('hidden');
	$('#btnEditestudent2'+id_row).toggleClass('hidden');
	
	$('#btnEditestudent2'+id_row).click(function(){
		$.ajax({
			type: "POST",
			url: 'http://localhost/Biblioteca/Estudent/Edit',
			dataType: "text",
			data:{			
				id:id.val(),
				dni:dni.val(),
				name:name.val(),
				lastname:lastname.val(),
				phone:phone.val(),
				email:email.val()
			},success: function(respuesta) {
				Pdni.val(dni.val());
				Pname.val(name.val());
				Plastname.val(lastname.val());
				Pphone.val(phone.val());
				Pemail.val(email.val());
				swal(respuesta, {
					icon:"success",
				});
			}
		});	
	});

}
function Destroy(id_row){
	var id=$('#id'+id_row);
	var title=$('#title'+id_row);
	swal({
		title: "¿Desea eliminar este Libro "+ title.val() +"?",
		text: "El Libro se eliminara en caso de que precione OK!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			$.ajax({
				url: 'http://localhost/Biblioteca/Book/Destroy',
				method: 'POST',
				dataType: 'text',
				data: {
					id: id.val()
				},success: function (respuesta) {
					$('#tr'+id_row).addClass('hidden');
					swal(respuesta, {
						icon: "success",
					});
				}
			});
			
		}else{

			swal("El Libro esta a salvo!",{
				icon:"info",
			});
		}
	});
}
function DestroyEstudent(id_row){
	var id=$('#id'+id_row);
	var dni=$('#dni'+id_row);
	swal({
		title: "¿Desea eliminar el Estudiante con el numero de C.I: "+ dni.val() +"?",
		text: "El Estudiante se eliminara en caso de que precione OK!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			$.ajax({
				url: 'http://localhost/Biblioteca/Estudent/Destroy',
				method: 'POST',
				dataType: 'text',
				data: {
					id: id.val()
				},success: function (respuesta) {
					$('#tr'+id_row).addClass('hidden');
					swal(respuesta, {
						icon: "success",
					});
				}
			});
			
		}else{

			swal("El Estudiante esta a salvo!",{
				icon:"info",
			});
		}
	});
}
