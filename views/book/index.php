<?php require 'views/layouts/newTemplate.php'; ?>
<?php include 'views/modales/add.book.php'; ?>
<?php include 'views/modales/asignarBook.php'; ?>
<main>
<div class='container'>
        <div class="row"> 
            <div class='center'> <?php $this->mensaje?> </div>
            <div class='col-xs-6 col-lg-6 col-md-6'>
                <h1 class='app-sub-titulo'> <i class='fa fa-book'></i> <b>L</b>ibro <b>ASI</b></h1>
            </div>
            <div class="col-xs-6 col-lg-6 col-md-6" style='margin-top:2rem'>
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>Agregar Libro</h3>
                        <p>Agrega mas Libros al reguistro</p>
                    </div>
                    <div class="icon" style='margin-top:2rem'>
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#modalAddBooks" class="small-box-footer">Add <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div><hr><br>
            
            <div class="container">
                <div class="row">
                    <table id="Book" class="table table-striped table-bordered table-hover dataTable" role='grid'>
                        <thead>
                            <tr id='app-tr'>
                                <th class="text-center">Codigo</th>
                                <th class="text-center">Titulo</th>
                                <th class="text-center">Autor</th>
                                <th class="text-center">Status</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->book as $row) {
                            $book=new TableBook();
                            $book=$row;
                            if ($book->status == 1) {
                                # code...
                            ?>
                            <tr id='app-tr' >
                                <td>
                                   <p> <?php echo $book->code; ?> </p>
                                </td>
                                <td> 
                                    <p > <?php echo $book->autor; ?> </p>
                                </td>
                                <td>
                                   <p> <?php echo $book->title; ?> </p>
                                </td>
                                <td>
                                   <p> <?php if($book->status==1){echo 'Activo';} ?> </p>
                                </td>
                                <td>
                                    <a class='btn btn-success' id='a' onClick='Entregar(<?php echo $book->id?>)' data-toggle="modal" data-target="#modalAsignarBook"  href="#"> <i class='fa fa-caret-square-o-up'></i></a>
                                    <a class='btn btn-danger' href="#"> <i class='fa fa-remove'></i></a>
                                    <a class='btn btn-warning' href="#"> <i class='fa fa-edit'></i></a>
                                </td>
                        <?php } }?>
                            </tr>  
                        </tbody>
                        </tfoot>
                            <tr>
                                <th class="text-center">Codigo</th>
                                <th class="text-center">Titulo</th>
                                <th class="text-center">Autor</th>
                                <th class="text-center">Status</th>
                                <th class="text-center"></th>
                            </tr>
                        <tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

