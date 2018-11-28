<section class="sidebar">
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo constant('URL')?>/public/img/logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Biblioteca A.S.I</p>                     
        </div>
    </div>
    <ul class="sidebar-menu">
        <li class="header">BARRA DE NAVEGACIÓN</li>
        <li class="treeview">
            <a href="<?php echo constant("URL")?>/Dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        
        <li class="treeview">
            <a href='<?php echo constant("URL")?>/Estudent/Index' >
                <i class="fa fa-users"></i>Estudiantes
            </a>
        </li>
        
        <li class="treeview">
            <a href='<?php echo constant("URL")?>/Book/Index' >
                <i class="fa fa-book"></i>Libros
            </a>
        </li>
        
        <li class="treeview">
            <a href='<?php echo constant("URL")?>/Entrega/Index' >
                <i class="fa fa-shopping-cart"></i>Entregas
            </a>
        </li>
        
    </ul>
</section>