<title>Admin | Entregas</title>
<?php require 'views/layouts/newTemplate.php'; ?>
<main>
<div class='container'>
        <div class="row"> 
            <div class='center'> <?php $this->mensaje?> </div>
            <div class='col-xs-6 col-lg-6 col-md-6'>
                <h1 class='app-sub-titulo'> <i class='fa fa-address-book'></i> <b>E</b>ntregar <b>L</b>ibro</h1>
            </div><hr><br>
        </div>
            
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
                            $retiro=new TableRetiro_Entrega();
                            $retiro=$row;
                            if (0 == 0) {
                                # code...
                            ?>
                            <tr id='tr<?php echo $book->id; ?>' >
                                <td>
                                    <input type="text" value='<?php echo $book->id?>' id='id_row<?php echo $book->id?>'>
                                   <p>  <?php echo $retiro->book->autor; ?> </p>
                                </td>
                                <td> 
                                    <p > <?php echo $book->autor; ?> </p>
                                </td>
                                <td>
                                   <p> <?php echo $book->title; ?> </p>
                                </td>
                                <td>
                                   <p> <?php if($book->status==0){echo 'Retirado';} ?> </p>
                                </td>
                                <td>
                                    <a class='btn btn-success' onClick='Entregar(<?php echo $book->id?>)' href="#" data-toggle="modal" data-target="#modalAsignarBook"  href="#"> <i class='fa fa-caret-square-o-up'></i></a>
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

