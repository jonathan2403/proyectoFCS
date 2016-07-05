
<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a class="logo"><b>Unillanos</b></a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">      
                <!-- User Account Menu -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-cog"></i>Opciones</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ URL::to('auth/logout') }}"><i class="fa fa-sign-out"></i>Cerrar Sesion</a></li>
                    </ul>
                </li> 
            </ul>
        </div>
    </nav>
</header>