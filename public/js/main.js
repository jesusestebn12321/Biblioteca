$('[data-toggle="tooltip"]').tooltip();

Vue.component('componente-div', {
	template: ""
  });
var dashboard=new Vue({
	el:'#dashboard',
	data:{
		hola:'hola',
		articulos:
		[
			
			{
				id:3,
				color:'<span class="small-stat-icon pink"><i class="fa fa-shopping-cart"></i></span>',
				name:'Asignar libro Estudiantes',
				descripcion:'Eliminar Estudiantes del Registrado',
				button:'<a class="btn btn-primary btn-block"  data-toggle="modal" data-target="#modalAsignarBook"  href="#!"> <i class="fa fa-eye"></i> IR </a>'
			},
			{
				id:4,
				color:'<span class="small-stat-icon bg-orange"><i class="fa fa-users"></i></span>',
				name:'Entregar libros',
				descripcion:'Estudiantes que aun no ah entregado libro',
				button:'<a class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalSearchEstudent" href="#!"> <i class="fa fa-eye"></i> IR </a>'
			},
		]
	}
});
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
		primerTitulo:"<h1> <i class='fa fa-users'></i> <b>E</b>studiantes <b>R</b>egistrados</h1>",
		titulo:'Add Estudiante',
		descripcion:'Agrega mas Estudiantes al reguistro',
		btn:'<a class="btn btn-primary btn-block" id="addBook" data-toggle="modal" data-target="#modalAddEstudents" href="#!">Add <i class="fa fa-plus"></i></a>'
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
		btn:'<a class="btn btn-primary btn-block" id="addBook" data-toggle="modal" data-target="#modalAddBooks" href="#!">Add <i class="fa fa-plus"></i></a>'
	
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

