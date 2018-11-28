$('[data-toggle="tooltip"]').tooltip();
$("#Book").DataTable();
$('#estudent').DataTable();
	function Asignar(id_row){
		$('#asignarBook').val(id_row);
	}
var viewsEstudent=new Vue({
	el:'#viewsEstudents',
	data:{
		name:'',
		lastName:'',
		dni:'',
		phone:'',
		email:'',
		nombre:'Esteban',
		apellido:'Villalta',
		cedula:'25237118',
		telefono:'0000-000-00-00',
		correo:'jesusnoteimporta@example.com',
		editStatus:false,
		primerTitulo:"<h1 class='app-sub-titulo'> <i class='fa fa-users'></i> <span class='app-resaltar-letras'>E</span>studiantes <span class='app-resaltar-letras'>R</span>egistrados</h1>",
		titulo:'Add Estudiante',
		descripcion:'Agrega mas Estudiantes al reguistro',
		btn:'<a class="btn  bg-blue-gradient  btn-block " id="addBook" data-toggle="modal" data-target="#modalAddEstudents" href="#!">Add <i class="fa fa-plus"></i></a>'
	},
	methods:{
		editarEstudent(){
			this.editStatus= true;
		},
		upDate(cedula,nombre,apellido,correo,telefono){
			this.editStatus=false;
			this.cedula=cedula;
			this.nombre=nombre;
			this.apellido=apellido;
			this.correo=correo;
			this.telefono=telefono;
		}
	}
});
var book=new Vue({
	el:'#book',
	data:{
		libro:[
			{
				id:1,
				codigo:2212626,
				titulo:'Elcan',
				autor:'Canserbero',
				editStatus:false,		
			},
			{
				id:2,
				codigo:2212626,
				titulo:'Elcan',
				autor:'Canserbero',
				editStatus:false,		
			}
		],
		
		panelTitulo:'Add Libro',
		panelDescripcion:'Agrega mas Libros al reguistro',
		btn:'<a data-toggle="modal" data-target="#modalAddBooks"  href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>'
	},
	methods:{
		
		destroyBook(id){
			this.libro.splice(id, 1);
		},
		editarBook(id){
			// let editar=this.libro[id];
			this.editStatus= true;
		},
		upDateBook(codigo,titulo,autor){
			this.editStatus=false;
			this.cedula=cedula;
			this.titulo=titulo;
			this.autor=autor;
		}
	}
});

