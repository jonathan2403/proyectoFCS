<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu de Administración</li>
            <?php
                    $menus=\FCS\Permiso::join("menus","menus.id","=","idmenus")->where("iduser","=",DB::raw(Auth::user()->id))->where("permiso","=",DB::raw(1))->orderby("nombre","asc")->get();
                ?>
                @foreach($menus as $m)
                    <li>
                        <a href="{!! URL($m->ruta) !!}"><i class="{!! $m->imagen !!}"></i><span>{!! $m->nombre !!}</span></a>
                    </li>
                @endforeach
          </ul>
        </section>
        <!-- /.sidebar -->
    </section>
    <!-- /.sidebar -->
</aside>