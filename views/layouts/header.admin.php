<a href="dashboard" class="logo">Admin</a>
<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="navbar-right">
        <ul class="nav navbar-nav">   
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i>
                    <span>Admin<i class="caret"></i></span>
                </a>
                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                    <li class="dropdown-header text-center">Account</li>       
                    <li >
                        <a href="<?php echo constant("URL")?>Book">
                            <i class="fa fa-book fa-fw pull-right"></i> Ver Libros
                        </a>
                        <a href="<?php echo constant("URL")?>Estudent">
                            <i class="fa fa-user-plus fa-fw pull-right"></i>Ver Estudiantes
                        </a>
                        <a href="<?php echo constant("URL")?>Help">
                            <i class="fa fa-question fa-fw pull-right"></i>Help
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>